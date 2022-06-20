<?php


use PHPUnit\Framework\TestCase;

class MissingLinkTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     */
    public function it_returns_the_missing_item_in_a_sequence($array, $expected)
    {
        $missingLink = new App\MissingLink;

        $this->assertSame($expected, $missingLink->find($array));
    }

    public function checks()
    {
        return [
            [[0,1,3,4,5], 2],
            [['a', 'b', 'c', 'e'], 'd'],
        ];
    }
}
