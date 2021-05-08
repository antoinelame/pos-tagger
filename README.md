# PHP POS Tagger

A really simple POS tagger for PHP (Part-of-speech tagging).

## Analyze a word

```php
use AntoineLame\PosTagger;

$tagger = new PosTagger;

// 🍎
$apple = $tagger->token('apple');

$apple->isVerb(); // false
$apple->isNoun(); // true
$apple->isSingularNoun(); // true
$apple->isPluralNoun(); // false

// 🚶
$walk = $tagger->token('walk');

$walk->isVerb(); // true
$walk->isNoun(); // true
$walk->isAdverb(); // false
```

## Analyze a sentence

```php
use AntoineLame\PosTagger;

$tagger = new PosTagger;
$tokens = $tagger->sentence('One giant leap for mankind');

$tokens[0]->token; // 'one'
$tokens[4]->token; // 'mankind'
$tokens[4]->isNoun(); // true
```

## Available methods

- `isNoun()`
- `isSingularNoun()`
- `isPluralNoun()`
- `isAdverb()`
- `isVerb()`
- `isAdjective()`
- `isInterjection()`

## Credits

Thanks to [ekinhbayar](https://github.com/ekinhbayar) for her [Brown Corpus](https://github.com/ekinhbayar/brown-corpus).
