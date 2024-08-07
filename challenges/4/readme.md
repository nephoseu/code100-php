# Sort Numbers by Alphabet

You get a [JSON object](dataset.json) that contains the words for the numbers 1 to 100 in various languages.

```JSON
{
    "English": ["one","two","three","four","five","six"…],
    "German": ["eins","zwei","drei","vier","fünf","sechs"…],
    "French": ["un","deux","trois","quatre","cinq","six"…],
    …
}
```

The challenge is to sort the languages alphabetically and return an array of numbers that shows that order.

For example, image an imaginary language `shloumph` where the numnbers 1 to 10 are:

```JSON
"Shloumph": [
    "ona", "dodzette", "turna", "frotsa", "abla",
    "tro", "bababdook", "deezes", "oran", "bordernone"
]
```

In this case, the desired result would be:

```JSON 
 "Shloumph": [5, 7, 10, 8, 2, 4, 1, 9, 6, 3]
```

As the order is like this: 

```JSON
"Shloumph": {
    "abla": 5,
    "bababdook": 7,
    "bordernone": 10,
    "deezes": 8,
    "dodzette": 2,
    "frotsa": 4,
    "ona": 1,
    "oran": 9,
    "tro": 6,
    "turna": 3  
}
```

Return a JSON object of all the languages and the numbers 1 to 100 sorted like this. For example:

```JSON
{
    "English":[79,71,77,76,73,72,6,22,… ],
    "German":[45,25,15,50,100,9,89,39,…],
    "French":[63,13,30,31,35,32,38,39,…],
    …
}
```

Happy sorting!
