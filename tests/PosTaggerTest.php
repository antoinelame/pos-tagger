<?php

namespace AntoineLame\PosTaggerTests;

use AntoineLame\PosTagger\PosTagger;
use AntoineLame\PosTagger\Token;
use PHPUnit\Framework\TestCase;

class PosTaggerTest extends TestCase
{
    protected PosTagger $tagger;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tagger = new PosTagger;
    }

    /** @test */
    public function it_can_analyze_a_sentence()
    {
        $tokens = $this->tagger->sentence('This is a sentence');

        $this->assertIsArray($tokens);
        $this->assertCount(4, $tokens);
    }

    /** @test */
    public function it_can_analyze_a_token()
    {
        $token = $this->tagger->token('apple');

        $this->assertInstanceOf(Token::class, $token);
    }

    /**
     * @test
     * @dataProvider \AntoineLame\PosTaggerTests\DataProvider::nouns()
     */
    public function it_detects_nouns(string $word, bool $isNoun, bool $isSingularNoun, bool $isPluralNoun)
    {
        $token = $this->tagger->token($word);

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame($isNoun, $token->isNoun());
        $this->assertSame($isSingularNoun, $token->isSingularNoun());
        $this->assertSame($isPluralNoun, $token->isPluralNoun());
    }

    /**
     * @test
     * @dataProvider \AntoineLame\PosTaggerTests\DataProvider::adverbs()
     */
    public function it_detects_adverbs(string $word, bool $isAdverb)
    {
        $token = $this->tagger->token($word);

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame($isAdverb, $token->isAdverb());
    }

    /**
     * @test
     * @dataProvider \AntoineLame\PosTaggerTests\DataProvider::verbs()
     */
    public function it_detects_verbs(string $word, bool $isVerb)
    {
        $token = $this->tagger->token($word);

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame($isVerb, $token->isVerb());
    }

    /**
     * @test
     * @dataProvider \AntoineLame\PosTaggerTests\DataProvider::baseFormVerbs()
     */
    public function it_detects_base_form_verbs(string $word, bool $isVerb)
    {
        $token = $this->tagger->token($word);

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame($isVerb, $token->isBaseFormVerb());
    }

    /**
     * @test
     * @dataProvider \AntoineLame\PosTaggerTests\DataProvider::adjectives()
     */
    public function it_detects_adjectives(string $word, bool $isAdjective)
    {
        $token = $this->tagger->token($word);

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame($isAdjective, $token->isAdjective());
    }

    /**
     * @test
     * @dataProvider \AntoineLame\PosTaggerTests\DataProvider::interjections()
     */
    public function it_detects_interjections(string $word, bool $isInterjection)
    {
        $token = $this->tagger->token($word);

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame($isInterjection, $token->isInterjection());
    }

    /** @test */
    public function can_add_additional_dictionary()
    {
        $tagger = new PosTagger([
            'selfie' => ['NN'],
        ]);

        $this->assertTrue($tagger->token('selfie')->isNoun());
        $this->assertTrue($tagger->token('legacy')->isNoun()); // To check Lexicon is still used
    }
}
