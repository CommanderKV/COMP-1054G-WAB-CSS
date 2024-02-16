// Song lyrics
const lyrics = `
[Intro: Connor Price]
Yeah, mm

[Chorus: Connor Price]
Walk in the building like I got a million on me in cash (Okay, mm)
Tired of counting, I hired accountants, they doin' the math (Okay, mm)
Took it to places they never could make it, I'm forming a path (Okay, mm)
Not going back (Okay, mm)
Not going back, let's go

[Verse 1: Connor Price]
Not from this planet (Nah)
Pull up in alien rocket ship (Skrt)
They tryna study the way I've been doin' it, they gon' need paleontologist (Ooh)
Feel like I'm one of the greats (Yeah)
Money, I'm making a lot of it (Okay)
I did a billion streams independent, I swear that they barely acknowledge it
Okay, that means that I gotta go harder, I'm flipping the switch (Go)
Battery charging, I'm ready to flip (Yeah)
Feel like I'm Arthur, I'm balling my fist (Uh)
Gimme the call, never calling it quits
"Bigger money, bigger problems", what they said to me (Yeah)
I ain't ever worry 'cause the stress don't get to me (Uh)
Live and direct from the mind of my destiny (Woah)
Diamonds and pressure, I thrive in intensity (Ah)
Lo and behold, sticking around when they told me to go
Calling me up, nobody home
Spinning these numbers like rotary phones (Brr)
Ayy, lo and behold
House made of glass, they throwing these stones
Markham, Ontario, locally grown
Went off the map, I'm globally known (Yeah, ayy, woah, whoo)
You might also like
Mockingbird
Eminem
Lose Yourself
Eminem
Overnight
Connor Price & Tommy Royale

[Chorus: Connor Price & Armani White]
Walk in the building like I got a million on me in cash (Okay, mm)
Tired of counting, I hired accountants, they doin' the math (Okay, mm)
Took it to places they never could make it, I'm forming a path (Okay, mm)
Not going back (Okay, mm) (Cago)
Not going back

[Verse 2: Armani White]
Ayy, it's a one in a million chance that you run up and not end up pissing in bags
I made a cornerstone out of a corner boy
Papi store still got my pic in the glass (Uh)
Ayy, why they keep messing with Jeep? I Messi the beat
Got burners and burnouts with second degrees (Ba-ba-ba-ba-ba-ba-ba)
I just totaled my Tesla, ain't stressing receipts (Sheesh)
I got back in that thing in like less than a week (Whee)
I just parked in the building
Matter fact, I just stomped in the building and shot through the ceiling
Got art in apartments I bought for a million
Put a cross on the wall, then I auctioned the building (Yeah)
Now watch them claim my strip, it's a cover-up
Watch, just sprained my wrist, get another one
Watch which name y'all diss, pick ya brova up (Yeah)
Watch who came out rich, with the bubble up
Stopped it, she poppin' (Huh)
I seen them girls too often
My money come from content
Cribs on market, whips self-parking
Wait 'cause I was just doing them walk-ins, huh
Now I got a neighbor with a garden, huh
Just to start my car, I gotta log in (Okay)
Chick on wood tree stump, put log in
And I—

[Chorus: Connor Price]
Walk in the building like I got a million on me in cash (Okay, mm)
Tired of counting, I hired accountants, they doin' the math (Okay, mm)
Took it to places they never could make it, I'm forming a path (Okay, mm)
Not going back (Okay, mm)
Not going back, let's go`.split("\n");

function createListElement(pElements) {
    var liElement = document.createElement("li");
    liElement.classList.add("lyric-section");
    pElements.forEach(lyric => {
        if (Array.isArray(lyric)) {
            var divElement = document.createElement("div");
            for (var i=0; i < lyric.length; i++) {
                divElement.appendChild(lyric[i]);
            }
            liElement.appendChild(divElement);
        } else {
            liElement.appendChild(lyric);
        }
    });
    return liElement;
}

// Create list elements for song lyrics
const lyricList = document.getElementById("lyric-display");
var pElements = [];
lyrics.forEach(lyric => {
    if (lyric.includes("(")) {
        var sideSpeaker = document.createElement("span");
        var newLyric = lyric.substring(lyric.indexOf("("), lyric.indexOf(")") + 1);
        sideSpeaker.textContent = newLyric;

        const p = document.createElement("p");
        p.textContent = lyric.substring(0, lyric.indexOf("("));
        pElements.push([p, sideSpeaker]);

    } else {
        const p = document.createElement("p");
        p.textContent = lyric;
        pElements.push(p);
    }
});

// Group the lyrics into sections
var temp = []
pElements.forEach(p => {
    if (p.textContent == "" && temp.length > 0) {
        lyricList.appendChild(createListElement(temp));
        temp = [];
    } else if (p.textContent == "") {
        // Do nothing
    } else {
        temp.push(p);
    }
});

// Add the last section
if (temp.length > 0) {
    lyricList.appendChild(createListElement(temp));
    temp = [];
}

