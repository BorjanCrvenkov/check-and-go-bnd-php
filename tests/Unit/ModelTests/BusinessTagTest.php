<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\BusinessTag;
use App\Models\Tag;

class BusinessTagTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = BusinessTag::factory()->create([
            'business_id' => $business->getKey()
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }

    /**
     * @return void
     */
    public function testTagRelation(): void
    {
        $tag = Tag::factory()->create();

        $relation = BusinessTag::factory()->create([
            'tag_id' => $tag->getKey()
        ]);

        $this->assertSame($tag->getKey(), $relation->tag->getKey());
    }
}
