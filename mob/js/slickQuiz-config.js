// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var quizJSON = {
    "info": {
        "name":    "חידון עיצוב",
        "main":    "<p>Test your design skills<br>Find out with this quiz.</p>",
        "results": "<h5>Learn More</h5><p>Get a Free Consultation with a Scholarship advisor. You may qualify for a scholarship.</p>",
        "level1":  "Michelangelo - we want to give you a great Scholarship. Call us now on 03 xxx xxxx",
        "level2":  "almost Michelangelo - you could qualify for a Scholarship. Call us now on 03 xxx xxxx",
        "level3":  "you have potential - you could qualify for a Scholarship. Call us now on 03 xxx xxxx",
        "level4":  "try harder",
        "level5":  "oi-va-voi, Design is not for you!" // no comma here
    },
    "questions": [
        { // Question 1
            "q": "בסרטוטים שלפניכם ריבועים חופפים.באיזה מהם אורך המסלול המודגש הוא הקצר ביותר?",
            "a": [
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/box1.jpg'/>",      "correct": false},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/box2.jpg'/>",     "correct": false},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/box3.jpg'/>",      "correct": true},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/box4.jpg'/>",     "correct": false} // no comma here
            ],
            "correct": "<p><span>זה נכון</span></p>",
            "incorrect": "<p><span>לא, זה 3</span></p>" // no comma here
        },
        { // Question 2
            "q": "Who painted the ceiling of the Sistine Chapel?",
            "a": [
                {"option": "Donatello",    "correct": false},
                {"option": "Carravagio",     "correct": false},
                {"option": "Vanillagio",      "correct": false},
                {"option": "Michelangelo",   "correct": true} // no comma here
            ],
            "correct": "<p><span>זה נכון</span></p>",
            "incorrect": "<p><span>לא, זה 4 Michelangelo</span></p>" // no comma here
        },
        { // Question 3
            "q": "Which symbol means danger of fire ?",
            "a": [
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/ears.gif'/>",     "correct": false},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/flammable.gif'/>",     "correct": true},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/goggles.gif'/>",     "correct": false},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/harmful.gif'/>",     "correct": false} // no comma here
            ],
            "correct": "<p><span>זה נכון</span></p>",
            "incorrect": "<p><span>לא, זה 3</span></p>" // no comma here
        },
        { // Question 4
            "q": "Which symbol means 'recycling'?",
            "a": [
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/laser.gif'/>",     "correct": false},
                {"option": "<img src='http://mobads.commondatastorage.googleapis.com/recycle.gif'/>",     "correct": true} // no comma here
            ],
            "correct": "<p><span>זה נכון</span></p>",
            "incorrect": "<p><span>לא, זה 2</span></p>" // no comma here
        },
        { // Question 5
            "q": "Where are you right now?",
            "a": [
                {"option": "Planet Earth",   "correct": true},
                {"option": "Pluto",          "correct": false},
                {"option": "At a computer",  "correct": false},
                {"option": "The Milky Way",  "correct": false} // no comma here
            ],
            "correct": "<p><span>זה נכון</span></p>",
            "incorrect": "<p><span> The Earth לא, זה 1</span></p>" // no comma here
        } // no comma here
    ]
};