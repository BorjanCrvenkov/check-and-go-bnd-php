<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\BusinessImages;
use App\Models\Image;

class BusinessImagesTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = BusinessImages::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }

    /**
     * @return void
     */
    public function testImageRelation(): void
    {
        $image = Image::factory()->create();

        $relation = BusinessImages::factory()->create([
            'image_id' => $image->getKey(),
        ]);

        $this->assertSame($image->getKey(), $relation->image->getKey());
    }
}
