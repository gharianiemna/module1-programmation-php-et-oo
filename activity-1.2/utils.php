<?php
// $articles = array (
//     array("titre1","texte1","auteur1", "date1"),
//     array("titre2","texte2","auteur2", "date2"),
//     array("titre3","texte3","auteur3", "date3"),
//     array("titre4","texte4","auteur4", "date4"),
//   );


$articles = [
[ 
    "titre" => "What is Creativity?", 
    "texte" => "The creative process is the act of making new connections between old ideas or recognizing relationships between concepts. 
    Creative thinking is not about generating something new from a blank slate, but rather about taking what is already present and combining those bits and pieces in a way that has not been done previously.
    While being creative isn't easy, nearly all great ideas follow a similar creative process. 
    In 1940, an advertising executive named James Webb Young published a short guide titled, A Technique for Producing Ideas.
    Young believed the process of creative connection always occurred in five steps.", 
    "auteur" => "emna",
    "date" => strtotime("2011-01-26")
],
[ 
    "titre" => "The Ultimate Productivity Hack is Saying No", 
    "texte" => "The ultimate productivity hack is saying no. Not doing something will always be faster than doing it. For example, there is no meeting that goes faster than not having a meeting at all.
    This is not to say you should never attend another meeting, but the truth is that we say yes to many things we don't actually want to do. There are many meetings held that don't need to be held. There is a lot of code written that could be deleted.
    How often do people ask you to do something and you just reply, Sure thing. Three days later, you're overwhelmed by how much is on your to-do list. We become frustrated by our obligations even though we were the ones who said yes to them in the first place. \n", 
    "auteur" => "med",
    "date" => strtotime("2019-10-30"),
],
[  
    "titre" => "How Experts Figure What to Focus On", 
    "texte" => "Peak performance experts say things like, You should focus. You need to eliminate the distractions. Commit to one thing and become great at that thing.
    This is good advice. The more I study successful people from all walks of life—artists, athletes, entrepreneurs, scientists—the more I believe focus is a core factor of success.
    But there is a problem with this advice too. Of the many options in front of you, how do you know what to focus on? How do you know where to direct your energy and attention? How do you determine the one thing that you should commit to doing?
    I don't claim to have all the answers, but let me share what I’ve learned so far.", 
    "auteur" => "habib",
    "date" => strtotime("2003-05-12"),
],
[  
    "titre" => "7 Ways to Retain More of Every Book You Read", 
    "texte" => "There are many benefits to reading more books, but perhaps my favorite is this: A good book can give you a new way to interpret your past experiences. Whenever you learn a new mental model or idea, it's like the “software” in your brain gets updated. Suddenly, you can run all of your old data points through a new program. You can learn new lessons from old moments. As Patrick O'Shaughnessy says, Reading changes the past.
    Of course, this is only true if you internalize and remember insights from the books you read. Knowledge will only compound if it is retained. In other words, what matters is not simply reading more books, but getting more out of each book you read.
    Gaining knowledge is not the only reason to read, of course. Reading for pleasure or entertainment can be a wonderful use of time, but this article is about reading to learn. With that in mind, I'd like to share some of the best reading comprehension strategies I’ve found.",
    "auteur" => "rania",
    "date" => strtotime("2009-11-09"),
],
[  
    "titre" => "How Innovative Ideas Arise", 
    "texte" => "In 2010, Thomas Thwaites decided he wanted to build a toaster from scratch. He walked into a shop, purchased the cheapest toaster he could find, and promptly went home and broke it down piece by piece.
    Thwaites had assumed the toaster would be a relatively simple machine. By the time he was finished deconstructing it, however, there were more than 400 components laid out on his floor. The toaster contained over 100 different materials with three of the primary ones being plastic, nickel, and steel.
    He decided to create the steel components first. After discovering that iron ore was required to make steel, Thwaites called up an iron mine in his region and asked if they would let him use some for the project.
    Surprisingly, they agreed.",
     "auteur" => "rania",
    "date" => strtotime("2016-04-17"),
],
[ 
    "titre" => "What I Do When I Feel Like Giving Up", 
    "texte" => "Consider every thought you have as a suggestion, not an order. Right now, my mind is suggesting that I feel tired. It is suggesting that I give up. It is suggesting that I take an easier path.
    If I pause for a moment, however, I can discover new suggestions. My mind is also suggesting that I will feel very good about accomplishing this work once it is done. It is suggesting that I will respect the identity I am building when I stick to the schedule. It is suggesting that I have the ability to finish this task, even when I don't feel like.
    Remember, none of these suggestions are orders. They are merely options. I have the power to choose which option I follow.", 
    "auteur" => "kenza",
    "date" => strtotime("2023-01-09"),
],
];


  $dates = array();
foreach ($articles as $key => $row){
    $dates[$key] = $row['date'];  
}
array_multisort($dates, SORT_DESC, $articles);





// print_r($articles);

// $n = readline("entrez le nombre d'articles à afficher");

// for ($i=0 ; $i<= $n ; $i++) {
// print_r ($articles[($i-1)]);
// }

// *****selon sorting de habib :******
//function date_compare($element1, $element2) {
//     $datetime1 = strtotime($element1['date']);
//     $datetime2 = strtotime($element2['date']);
//     return $datetime2 - $datetime1;
// } 
// usort($articles, 'date_compare');
function  getArticles($n=null){
  $array=array();
    global $articles;
    foreach($articles as $article){
        if(($article['date']) < time()){
            $tab[] = $article;
        }
    }
    if ($n===null || $n>count($tab)){
        return($tab);
    }
    for ($i=0 ; $i< $n ; $i++) {
     $array[]=  $tab[$i];
       
        }
     return $array;
}
// print_r(getArticles(7));