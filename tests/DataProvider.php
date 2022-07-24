<?php

namespace AntoineLame\PosTaggerTests;

class DataProvider
{
    // Nouns
    const IS_NOUN = true;
    const IS_NOT_NOUN = false;
    const IS_SINGULAR = true;
    const IS_NOT_SINGULAR = false;
    const IS_PLURAL = true;
    const IS_NOT_PLURAL = false;

    // Adverbs
    const IS_ADVERB = true;
    const IS_NOT_ADVERB = false;

    // Verbs
    const IS_VERB = true;
    const IS_NOT_VERB = false;
    const IS_BASE_FORM_VERB = true;
    const IS_NOT_BASE_FORM_VERB = false;

    // Adjectives
    const IS_ADJECTIVE = true;
    const IS_NOT_ADJECTIVE = false;

    // Interjections
    const IS_INTERJECTION = true;
    const IS_NOT_INTERJECTION = false;

    public static function nouns(): array
    {
        return [
            ['account', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['accounts', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['anticipate', static::IS_NOT_NOUN, static::IS_NOT_SINGULAR, static::IS_NOT_PLURAL],
            ['apple', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['apples', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['bed', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['character', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['clean', static::IS_NOT_NOUN, static::IS_NOT_SINGULAR, static::IS_NOT_PLURAL],
            ['culture', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['customer', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['customers', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['drink', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['eat', static::IS_NOT_NOUN, static::IS_NOT_SINGULAR, static::IS_NOT_PLURAL],
            ['fee', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['galaxies', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['galaxy', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['guest', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['guests', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['invoice', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['invoices', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['jump', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['magazine', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['needle', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['plan', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['sleep', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['surface', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['teeth', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['tooth', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['user', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['users', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
            ['witness', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['woman', static::IS_NOUN, static::IS_SINGULAR, static::IS_NOT_PLURAL],
            ['women', static::IS_NOUN, static::IS_NOT_SINGULAR, static::IS_PLURAL],
        ];
    }

    public static function adverbs(): array
    {
        return [
            ['anticipate', static::IS_NOT_ADVERB],
            ['else', static::IS_ADVERB],
            ['energetically', static::IS_ADVERB],
            ['even', static::IS_ADVERB],
            ['fast', static::IS_ADVERB],
            ['guests', static::IS_NOT_ADVERB],
            ['invoice', static::IS_NOT_ADVERB],
            ['magazine', static::IS_NOT_ADVERB],
            ['sleep', static::IS_NOT_ADVERB],
            ['speedily', static::IS_ADVERB],
            ['terribly', static::IS_ADVERB],
            ['too', static::IS_ADVERB],
        ];
    }

    public static function verbs(): array
    {
        return [
            ['anticipate', static::IS_VERB],
            ['ate', static::IS_VERB],
            ['cake', static::IS_NOT_VERB],
            ['cancel', static::IS_VERB],
            ['complete', static::IS_VERB],
            ['computer', static::IS_NOT_VERB],
            ['eat', static::IS_VERB],
            ['finish', static::IS_VERB],
            ['finished', static::IS_VERB],
            ['finishing', static::IS_VERB],
            ['invoices', static::IS_NOT_VERB],
            ['mark', static::IS_VERB],
            ['meal', static::IS_NOT_VERB],
            ['pay', static::IS_VERB],
            ['road', static::IS_NOT_VERB],
            ['run', static::IS_VERB],
            ['sleep', static::IS_VERB],
            ['slept', static::IS_VERB],
            ['speakers', static::IS_NOT_VERB],
            ['tissue', static::IS_NOT_VERB],
        ];
    }

    public static function baseFormVerbs(): array
    {
        return [
            ['assign', static::IS_BASE_FORM_VERB],
            ['question', static::IS_BASE_FORM_VERB],
            ['questions', static::IS_NOT_BASE_FORM_VERB],
            ['questioned', static::IS_NOT_BASE_FORM_VERB],
            ['appreciated', static::IS_NOT_BASE_FORM_VERB],
            ['focusing', static::IS_NOT_BASE_FORM_VERB],
            ['speaks', static::IS_NOT_BASE_FORM_VERB],
        ];
    }

    public static function adjectives(): array
    {
        return [
            ['accurate', static::IS_ADJECTIVE],
            ['actor', static::IS_NOT_ADJECTIVE],
            ['alive', static::IS_ADJECTIVE],
            ['ambitious', static::IS_ADJECTIVE],
            ['angry', static::IS_ADJECTIVE],
            ['capable', static::IS_ADJECTIVE],
            ['drinks', static::IS_NOT_ADJECTIVE],
            ['festive', static::IS_ADJECTIVE],
            ['finish', static::IS_NOT_ADJECTIVE],
            ['funny', static::IS_ADJECTIVE],
            ['generate', static::IS_NOT_ADJECTIVE],
            ['modern', static::IS_ADJECTIVE],
            ['mountain', static::IS_NOT_ADJECTIVE],
            ['obscene', static::IS_ADJECTIVE],
            ['pay', static::IS_NOT_ADJECTIVE],
            ['serious', static::IS_ADJECTIVE],
            ['speakers', static::IS_NOT_ADJECTIVE],
        ];
    }

    public static function interjections(): array
    {
        return [
            ['oh', static::IS_INTERJECTION],
            ['oops', static::IS_INTERJECTION],
            ['school', static::IS_NOT_INTERJECTION],
            ['uh', static::IS_INTERJECTION],
            ['window', static::IS_NOT_INTERJECTION],
        ];
    }
}
