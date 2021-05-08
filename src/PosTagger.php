<?php

namespace AntoineLame\PosTagger;

class PosTagger
{
    protected array $dictionary = Lexicon::DICTIONARY;

    /**
     * Retrieve the tags for each word of a sentence.
     */
    public function sentence(string $sentence): array
    {
        $tokens = explode(' ', $sentence);
        $results = [];

        foreach ($tokens as $token) {
            $results[] = $this->token($token);
        }

        return $results;
    }

    /**
     * Retrieve the tags of a word.
     */
    public function token(string $token): ?Token
    {
        $token = $this->sanitize($token);
        $tags = $this->dictionary[$token] ?? null;

        if (! $tags) {
            return null;
        }

        return new Token($token, $tags);
    }

    /**
     * Only keep letters.
     */
    protected function sanitize(string $token): string
    {
        return preg_replace('/[^a-z]+/', '', strtolower($token));
    }
}
