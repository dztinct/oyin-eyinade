<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
                'title' => "soro-soke",
                'price_in_naira' => "4000",
                'price_in_dollars' => "7",
                'details' => "Sexual abuse is more popular than Jollof rice, unfortunately, abusers do not wear uniform and they are people around you whom you trust and laugh with.
                More sad is the fact that, children are the ones who sees and knows the abusers and they often times would not tell anyone.
                With the high rate of sexual abuse, child molestation, rape and more in the society, there is a need to effectively sensitize and equip young children to recognize abuse when faced with it and know how to raise alarm.
                And to also help reduce the incidence of child molestation, rape and peer abuse.",
                'book_image' => "book2.jpeg"
        ]);
        Book::create([
            'title' => "what-every-teen-girl-needs-to-know",
            'price_in_naira' => "3000",
            'price_in_dollars' => "5",
            'details' => "There are many things adults wished they new as a child, mistakes that could have been avoided and wrong decisions that still haunts many. This is where this book comes in. It will equip the teenage girl with the required knowledge to make well informed choices as they grow and sail through life. This book will teach the teenage girl about how to discover her talents and maximize it, how to handle peer pressure, how to improve self esteem. It also talks extensively about menstruation, teaching her how to handle it and effectively count her period calendar. It also teaches a teenage girl what she needs to know about the opposite sex, introduces her to age appropriate sex education and consequences of wrong decisions. At the end of the book, is a scanned page of hand written questions gathered by the author from other teenagers during her seminars and events. Just so, the teenage girl can relate with similar concerns she may have and know she is not alone in any teenage strife.",
            'book_image' => "book3.jpeg"
        ]);
        Book::create([
            'title' => "how-to-give-your-teenage-daughter-sex-education",
            'price_in_naira' => "3500",
            'price_in_dollars' => "6",
            'details' => "Sex education is something every parent or guardian MUST do! it is a responsibility you owe them. Sex education is not about teaching them the act of sex. No! It is about sensitizing young ones about this inevitable information before their friends, peers or classmates teach them wrongly. Unwanted pregnancy and abortion. Initiating sex education with young children is often difficult to do. From not knowing how to start or not knowing how much information to say. The major worry of parents is giving too much information too soon. All of these and more are well catered for in this book. It will help you know when to initiate sex education, how to start it, what to say and more.",
            'book_image' => "book4.jpeg"
        ]);
        Book::create([
            'title' => "sex-education-for-young-girls",
            'price_in_naira' => "1500",
            'price_in_dollars' => "2",
            'details' => "This is a low budget book written specifically to address the sex education talk. It is written for young girls and comes along with a free period tip and period calendar to help young girls with menstruation issues.",
            'book_image' => "book1.jpeg"
        ]);
    }
}
