<?php

namespace AntoineLame\PosTagger;

class Token
{
    public string $token;
    protected array $tags;

    public function __construct(string $token, array $tags)
    {
        $this->token = $token;
        $this->tags = $tags;
    }

    public function isNoun(): bool
    {
        $nounTags = ['NN', 'NNS', 'NNP', 'NNPS'];

        return ! empty(array_intersect($nounTags, $this->tags));
    }

    public function isSingularNoun(): bool
    {
        return in_array('NN', $this->tags);
    }

    public function isPluralNoun(): bool
    {
        return in_array('NNS', $this->tags);
    }

    public function isAdverb(): bool
    {
        $adverbTags = ['RB', 'RBR', 'RBS'];

        return ! empty(array_intersect($adverbTags, $this->tags));
    }

    public function isVerb(): bool
    {
        $verbTags = ['VB', 'VBD', 'VBG', 'VBN', 'VBP', 'VBZ'];

        return ! empty(array_intersect($verbTags, $this->tags));
    }

    public function isBaseFormVerb(): bool
    {
        return ! empty(array_intersect(['VB'], $this->tags));
    }

    public function isAdjective(): bool
    {
        $adjectiveTags = ['JJ', 'JJR', 'JJS'];

        return ! empty(array_intersect($adjectiveTags, $this->tags));
    }

    public function isInterjection(): bool
    {
        return in_array('UH', $this->tags);
    }
}
