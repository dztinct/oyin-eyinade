<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'title' => "soro-soke",
                'price_in_naira' => "400000",
                'price_in_dollars' => "700",
                'details' => "Sexual abuse is more popular than Jollof rice, unfortunately, abusers do not wear uniform and they are people around you whom you trust and laugh with.
                More sad is the fact that, children are the ones who sees and knows the abusers and they often times would not tell anyone.
                With the high rate of sexual abuse, child molestation, rape and more in the society, there is a need to effectively sensitize and equip young children to recognize abuse when faced with it and know how to raise alarm.
                And to also help reduce the incidence of child molestation, rape and peer abuse.",
                'book_image' => "image1.jpg"
            ],
            [
                'title' => "what-every-teen-girl-needs-to-know",
                'price_in_naira' => "300000",
                'price_in_dollars' => "500",
                'details' => "There are many things adults wished they new as a child, mistakes that could have been avoided and wrong decisions that still haunts many.
                This is where this book comes in. It will equip the teenage girl with the required knowledge to make well informed choices as they grow and sail through life.
                This book will teach the teenage girl about how to discover her talents and maximize it, how to handle peer pressure, how to improve self esteem.
                It also talks extensively about menstruation, teaching her how to handle it and effectively count her period calendar.
                It also teaches a teenage girl what she needs to know about the opposite sex, introduces her to age appropriate sex education and consequences of wrong decisions.
                At the end of the book, is a scanned page of hand written questions gathered by the author from other teenagers during her seminars and events.. Just so, the teenage girl can relate with similar concerns she may have and know she is not alone in any teenage strife.",
                'book_image' => "image2.jpg"
            ]
        ];
    }
}
