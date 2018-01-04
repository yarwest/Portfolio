<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SiteMetaSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(BlogSeeder::class);
    }
}

class SiteMetaSeeder extends Seeder
{
    /**
     * Run the Site Meta seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SiteMeta::create([
            'name'=>'Github',
            'value'=>'https://github.com/yarwest',
            'isLink'=>true
        ]);

        \App\SiteMeta::create([
            'name'=>'LinkedIn',
            'value'=>'https://www.linkedin.com/in/yarno-boelens-16b611a4',
            'isLink'=>true
        ]);

        \App\SiteMeta::create([
            'name'=>'Email',
            'value'=>'YarnoBoelens@gmail.com'
        ]);

        \App\SiteMeta::create([
            'name'=>'Phone Number',
            'value'=>'0031 642498359'
        ]);
    }
}

class PortfolioSeeder extends Seeder
{
    /**
     * Run the Portfolio seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PortfolioItem::create([
            'name'=>'This website',
            'link'=>'https://github.com/yarwest/Portfolio',
            'desc'=>'<p>I made this website by myself using mostly Laravel and Bootstrap</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classy Cakery',
            'link'=>'https://github.com/yarwest/Sample-Portfolio',
            'desc'=>'<p>This is an example portfolio web page that I created to showcase the possibilities for such an application. This project is not done but I think it paints a nice picture for possible clients. The application is build using Laravel and Bootstrap.</p><img src="/images/portfolio/classy_cakery.png" onclick="openOverlay(\'classy_cakery.png\')" alt="Classy Cakery" style="width:100%;">'
        ]);

        \App\PortfolioItem::create([
            'name'=>'LPL Pro',
            'desc'=>'<img src="/images/portfolio/lpl_pro.png" onclick="openOverlay(\'lpl_pro.png\')" alt="LPL Pro" style="width:100%;"><p>LPL Pro is a place to view information about loading stations for electric vehicles. This platform consists of a map (made using the <a href="http://leafletjs.com/">Leaflet</a> JavaScript Library) that shows the loading stations and graphs with statistics for all the loading stations within a certain area or an indiviual station. It is possible to filter the map and the graphs on station operators, regions (cities or municipalities) and a time period (up to 2 years back).</p><p>This web application was created by RanIT, which was a project group during my computer science course. The aim of this project was to process and provide usage information of loading stations to municipalities and loading station operators, these parties will use this information to decide where to place or remove loading stations.</p><p>This project was created using jQuery, Bootstrap and SASS for the front-end, and Java and MySQL for the back-end.</p><p>I was/am responsible for a number of AJAX calls and front end integration of the retrieved data, creating certain parts of the RESTful Java application, aswell as various designing and styling tasks.</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Compean and Sons website',
            'link'=>'https://github.com/surgiie/compean',
            'desc'=>'<div style="text-align:center;"><img src="/images/portfolio/compean_sons1.png" onclick="openOverlay(\'compean_sons1.png\')" alt="Compean and Sons" style="width:50%;"></div><p>The Compean and Sons platform was created for the orchard business owned by the family of Sergio Compean. This platform allows users to view all products, see at which markets these products will be available, and reserve products to pick up at a market of their choosing.<br>The project is build using Laravel, Bootstrap, SASS, and jQuery.</p><p>During this project I worked on the various sections of the admin panel in combination with the related CRUD tasks, the integration of the <a href="https://github.com/Trexology/laravel-pointable">Pointable package</a> to reward users for placing orders and referrals by giving them points which they can use for a discount, and lastly parts of the checkout process.</p><div style="text-align:center;"><img src="/images/portfolio/compean_sons2.png" onclick="openOverlay(\'compean_sons2.png\')" alt="Compean and Sons" style="width:50%;"></div>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Recipe Page',
            'desc'=>'<img src="/images/portfolio/recipe_page.png" onclick="openOverlay(\'recipe_page.png\')" alt="Recipe Page" style="width:100%;"><p>This web pages is something I started working on a while ago. It is a platform that I am making for my girlfriend with the main two purposes being a blog and a place to share recipes. Since I am Dutch and my girlfriend is Polish, this website has to be available in multiple languages, most of the sections of this website are available in English, Dutch and Polish. The currently selected language is stored in a cookie (which can be changed using the flags at the top of the page) and based on that cookie, different tabels of the database are being queried.</p><p>The project currently consists of plain PHP, HTML and CSS but I am thinking of reworking the entire thing using a PHP or JavaScript framework and a CSS preprocessor/framework (SASS, Bootstrap or both)</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classwork',
            'desc'=>'<img src="/images/portfolio/classwork_register.png" onclick="openOverlay(\'classwork_register.png\')" alt="Classwork" style="width:100%;"><p>Classwork is a project that I created for a freelance client using plain PHP and Bootstrap. The platform is used for schools, where teachers can create classes and generate attendance codes. The students can register for a class and fill in one of the codes to prove their attendance. There is also an option for the students to send a ticket to the teacher when they did not receive a code. Both accounts can be registered and teacher accounts have to be approved by an admin.</p><img src="/images/portfolio/classwork_generate.png" onclick="openOverlay(\'classwork_generate.png\')" alt="Classwork Generate Codes" style="width:47.5%; margin-right:5%;"><img src="/images/portfolio/classwork_codes.png" onclick="openOverlay(\'classwork_codes.png\')" alt="Classwork Codes" style="width:47.5%;">'
        ]);
    }
}

class BlogSeeder extends Seeder
{
    /**
     * Run the Portfolio seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Blog::create([
            'name'=>'Scala',
            'desc'=>'<p>The Java based bridge between the OO and functional paradigms.</p>'
        ]);

        \App\BlogPost::create([
            'title'=>'Introduction',
            'blog'=>'Scala',
            'body'=>'<p>Welcome,
This blog will accompany you on your first steps in Scala. I will be discovering Scala and writing posts about topics that I think will provide a good learning opportunity. The book Seven Languages in Seven Weeks by Bruce A. Tate will be the basis for this blog and I will also be doing the exercises that this book contains. At the end of the blog, I will make a post about an assignment that I have thought up myself and completed using Scala.</p>

<p>Setting up Scala is very easy and on Ubuntu this can be done by running the command <span class"code">sudo apt-get install scala</span> (provided you have Java installed)</p>'
        ]);

        \App\BlogPost::create([
            'title'=>'Typing',
            'blog'=>'Scala',
            'body'=>"<p>Every language has to deal with them and they often form the core of an algorithm: values. Statically or dynamically typed, there are arguments for both approaches and I think it is an important early step for someone trying to learn a language. Because of this, we will take a look at how Scala handles variables and typing.

Scala does something called typing inference. This basically means that it tries to deduct an expression's type from the value. This system prevents having to declare variables which at times is a very repetitive and overcomplicated thing to be wasting time on (I am looking at you Java). This is achieved while having the safety and certainty of static typing at compile time.
If you fear that your type might be deducted wrongly, it is still possible to declare it: <span class=\"code\">variable : String = \"this works just the same\"</span>
This piece of intuitive functionality has been very compelling to me from the start since it, in essence, means that you have to worry less about what types you use. You are given the possibility to just write it and let the compiler decide.
One of the downsides of this is that you have to trust the compiler to get the type right while it won't always achieve that. On top of that, it might also hurt the readability of the code if you do not specify whatever type your functionality relies on.

One thing to keep in mind, in Scala every type is an object with appropriate methods. Whenever possible the type inference system will use Java objects when it thinks it can. One example of this will occur quite often: <span class=\"code\">java.lang.String</span> is something you will encounter often when checking typed of variables.</p>

<h4>var vs val</h4>
<p>Next up are variables. Declaration of variables can be done using two keywords: <span class=\"code\">var</span> and <span class=\"code\">val</span>. Their syntax is practically identical and their usage has some overlap. But there is one key difference, <span class=\"code\">var</span> values are mutable where <span class=\"code\">val</span> values aren't. In Java, the same can be achieved by using the <span class=\"code\">final</span> keyword. Immutable variables are used to prevent conflicting state, meaning: mutable variables are prone to errors if multiple threads have the option to change them at the same time. Because of this, the developer should strive to use <span class=\"code\">val</span> whenever he can to take advantage of concurrency as much as possible.
In my opinion, it is good to follow this practice and while discovering Scala I have stuck with using <span class=\"code\">val</span> when my algorithm allowed me to. This does take a little getting used to since you can only define values once but it seems that a lot of issues that you might have if you transition from mutable values to immutable ones can be solved via functions that already exists (iterators for example).

Before moving on, I would like to dip into functions real quick. A function can be defined in a really short manner using the <span class=\"code\">def</span> keyword: <span class=\"code\">def coolFunction = println(\"this printing\")</span>
Parameters and return values can be defined as well. Even though Scala can inference types, they still need to be defined as can be seen here:</p>
<div class=\"code\">
def giveString(string: String): String = {</br>
	return \"You gave this string: \" + string</br>
}</br>
</div>
<p>For me, this syntax and these semantics are pretty intuitive, apart from that fact that I would usually put the return type before the function name. Pretty easy to use and straightforward in all ways.

This typing introduction will provide a base that you can build upon when delving further into Scala.</p>"
        ]);

        \App\BlogPost::create([
            'title'=>'Collections and Functions',
            'blog'=>'Scala',
            'body'=>"<p>Just like any modern language, Scala has a multitude of collections with helper functions.
There are 3 main collections that you want to look at: Lists, Sets and Maps. These collections have a lot an common and most of the topics will be talked about for all collections at the same time.

A list is what can be compared to an array in Java. It can be created by calling <span class=\"code\">List()</span> which you can pass the values that have to be stored as parameters. A set is basically a list that is not order-dependent, it can be instantiated in the same way as a list. A map consists of key-value pairs an can be instantiated in the same manner. A key-value pair is set up as <span class=\"code\">key -> value</span>.
Types of a collections can be defined during instantiation and will have to be defined for empty collections, this can be done like this: <span class=\"code\">Map[String, String]()</span>. A single item can be retrieved from the collection by calling <span class=\"code\">()</span> to the collection with the zero-based index of the element that needs to be retrieved.

The collections have a bunch of methods that will help you handling their contents, most of these methods are so-called higher-order functions. These functions take a function as a parameter or return a function. One of these examples is <span class=\"code\">foreach()</span>. This method takes a code block as a parameter, that code block will basically look like this: <span class=\"code\">variableName => actualCode</span>. Here is an example using a set of strings:</p>
<div class=\"code\">
val strings = Set(\"test\", \"strings\", \"printing\")</br>
strings.foreach(string => println(string))</br>
</div>
<p>This snippet will print the strings inside the list.
There are various methods that work in the same way, some collections based examples are: <span class=\"code\">count</span>, <span class=\"code\">map</span>, <span class=\"code\">filter</span>, <span class=\"code\">exists</span> and <span class=\"code\">forall</span>.</p>

<h4foldLeft</h4>
<p><span class=\"code\">foldLeft</span> is a way of recursively going over a collection. This can be useful for, for example, adding multiple items in a list. There are two ways of doing this: using the foldLeft operator <span class=\"code\">/:</span> or by using the <span class=\"code\">foldLeft</span> method on a collection. In both cases you have to pass an initial value and a code block. This will written as:</p>
<div class=\"code\">
val list = List(1,2,3)</br>
val sum = (0 /: list) {(sumVal, i) => sumVal + i}</br>
</div>
<p>In this example, we make a list of Ints after which we use <span class=\"code\">foldLeft</span> to calculate its sum. First off, we set the base value (0 in this case) and specify the collection (<span class=\"code\">list</span>) after which we pass the code block that will have <span class=\"code\">sumVal</span> (which is the base value on the first iteration, on later iterations, it will be the return value of the block) and <span class=\"code\">i</span> (which is the current element from the collection).</p>
<div class=\"code\">
val list = List(1,2,3)</br>
val sumViaMethod = list.foldLeft(0) ((sumValue, i) => sumValue+ i)</br>
</div>
<p>This implementation calls the <span class=\"code\">foldLeft</span> method on the collection, after which the base value is specified (again, 0). Lastly, the same code block is passed and the same result is achieved.

I like the way this works since it allows you to iterate over a collection with a very simple syntax that takes care of everything for you. The operator has my preference over the method since I think it's easier to read.

Collections are the core of a lot of algorithms and having basic knowledge of them will allow you to expand the functionalities in your Scala programs.</p>"
        ]);

        \App\BlogPost::create([
            'title'=>'Classes',
            'blog'=>'Scala',
            'body'=>"<p>Since Scala tries to combine both OO and functional concepts, it is possible to create classes, which can be done in various ways. The first variety is a short one-line definition which specifies a class name and its parameters: <span class=\"code\">class Car(model: String, color: String)</span>. This seems like it can be used to quickly define a flat data structure but for the sake of clarity, I recommend against using this method inside scripts or other files but instead creating a separate file for a class. As you can see, even while Scala can inference types normally, the parameters need to have their type declared.
A more complex class with methods and non-parameter attributes can be specified with a body. An example of this would look like this:</p>
<div class=\"code\">
class Car(model: String, color: String) {</br>
    var miles = 0</br>
    println(\"initial mileage: \" + miles)</br>
</br>
    def printMileage() {</br>
        println(\"current mileage: \" + miles)</br>
    }</br>
</br>
    def increaseMileage(increase: Int) {</br>
        miles = miles + increase</br>
        printMileage</br>
    }</br>
}</br>
</div>
<p>One of the biggest curiosities is probably the lines of code right after the signature. This is the constructor of the class, the code that gets executed on instantiation. Class variables should be specified here along with any other actions that should be performed when a new class instance is created.
At first, this was a little weird to me and took some getting used to, since doing something like this in any language that I am familiar with (with the exception of JavaScript) will create an error of sorts. After a short while, I have come to like this way of handling things since it is pretty intuitive when accessing a class you execute the first code you find, which is basically what a constructor is supposed to do.

Apart from the implicit syntax discussed earlier, it is also possible to make multiple constructors by specifying a method called <span class=\"code\">this</span> inside the class. This could look like:</p>
<div class=\"code\">
def this(miles: Int, model: String, color: String) {</br>
    this(model, color)</br>
    miles = miles;</br>
    println(\"this car has been used before\")</br>
}</br>
</div>
<p>This method can be called by instantiating a <span class=\"code\">Car</span> while providing 3 parameters instead of the original 2. Inside the second constructor, the main constructor is called by calling </span>this</span> with the original parameters. I like this way of specifying additional constructors, it is pretty straightforward and clear. There is a similarity between the way Scala does this and the way Java handles it which makes the transition easy.</p>

<h4>Static methods (and a pattern slipping in)</h4>
<p>In Java, a static method is a method that is attached to a class but not dependent on an instance of that class. Other languages might refer to these methods as class methods. You might be used to being able to define these methods in the body of the class you want it to be part of which is how most languages (at least the ones I know) handle this functionality.
Scala, however, has a different method for achieving basically the same, and more. Instead of the <span class=\"code\">class</span> keyword you can use the <span class=\"code\">object</span> keyword to create a class that is composed of static methods while also being a singleton.
Wow. To once again make that comparison to Java, where you need limit access to the constructor and make a static helper method to create and/or pass the actual instance to wherever you want to use it. Needless to say, I like that one simple keyword takes care of it all:</p>
<div class=\"code\">
object Car {</br>
	var carSound = \"vroom vroom\"</br>
    def drive = println(carSound)</br>
	def changeGear(newSound: String) = carSound = newSound</br>
}</br>
</br>
Car.drive</br>
Car.changeGear(\"brrrrrrrrrrrrrrr\")</br>
Car.drive</br>
</div>
<p>As you can see, an object can have the same name as a class, even the method names can be the same since you call <span class=\"code\">Car.drive</span> which is attached to the object and not an instance of the same class. The object can also have variables basically giving it all the options that a singleton in Java has. Objects like these can be useful for preserving state throughout an entire application, something that you don't want to do if you like concurrency, but at least it's possible.</p>

<h4>Inheritance</h4>
<p>Let's talk about the meat of a class structure, inheritance. All classes can be extended by another class by appending the <span class=\"code\">extends</span> keyword to the end of the class signature, followed by the class that has to be extended. All parameters that the extending class extends from the extended class need to be overridden by using the <span class=\"code\">override</span> keyword. The same goes for methods that you want to give custom behavior and that have the same signature. Here is an example that showcases it:</p>
<div class=\"code\">
class Vehicle(val color: String) {</br>
    def move = println(\"The \" + color + \" vehicle is moving, moving, moving\")</br>
	def changeDirection(newDirection: String) = println(\"Changed direction to: \" + newDirection)</br>
}</br>
</br>
class Car(override val color: String) extends Vehicle(color) {</br>
	override def move = println(\"The \" + color + \" car drives\")</br>
	override def changeDirection(newDirection: String) = println(\"Now driving to the: \" + newDirection)</br>
}</br>
</br>
val car: Vehicle = new Car(\"blue\")</br>
car.move</br>
</div>
<p>Comparing to Java, the <span class=\"code\">super</span> call is integrated with the <span class=\"code\">extends</span> keyword. Apart from that, it works very similarly if not the same. I like it, not complicated, you can leave methods out if you like, you can not take certain parameters and pass them from the extending class. The options are great, its elegant, good to see.

The last section of this short novel on classes covers traits. If you come from Java, you can see this as an interface in which the methods have a body. Building on this comparison, in Java a class can extend one other class but implement multiple interfaces. The same applies to extending classes and traits in Scala. You can see this as another way of removing repeating methods and adding abstractions. After a bit of digging, I found out that abstract classes are fully compatible with Java while traits are not (backward compatibility with a system developed in the 90s). On top of that, you can not pass parameters to traits. Overal I think having the option to use both of these constructs is pretty neat albeit slightly peculiar because of the similarities.

That concludes classes and the general things around them. Using this you should be able to build a solid application with inheritance and abstraction.</p>"
        ]);

        \App\BlogPost::create([
            'title'=>'Day Two Assignments',
            'blog'=>'Scala',
            'body'=>"<p>Seven Languages in Seven Weeks contains the following exercises for day two of Scala:</p>
<ul><li>Use <span class=\"code\">foldLeft</span> to compute the total size of a list of strings</li>
<li>Write a Censor trait with a method that will replace the curse words Shoot and Darn with Pucky and Beans alternatives. Use a map to store the curse words and their alternatives</li>
<li>Load the curse words and alternatives from a file</li></ul>

<h4>Size of string list</h4>
<p>Starting off at the top, the use of <span class=\"code\">foldLeft</span> has been discussed in the previous post about collections so I won't go into that too deeply. Based on that, you know there are two ways to set up <span class=\"code\">foldLeft</span>, one being <span class=\"code\">/:</span> and the other using the <span class=\"code\">foldLeft</span> method on a collection. Since the assignment doesn't specify which of these implementations should be used, I decided to use both.</p>
<div class=\"code\">
val list = List(\"bob\", \"string\", \"al\")</br>
val sum = (0 /: list) {(sum, string) => sum + string.size}</br>
val sumMethod = list.foldLeft(0)((sum, string) => sum + string.size)</br>
println(sum)</br>
println(sumMethod)</br>
</div>
<p>Running this snippet will get you two lines with the number 11 printed on them. As stated before, my preference goes out to the <span class=\"code\">/:</span>-way of folding since I think it is a little more readable than the <span class=\"code\">.foldLeft()</span> method. I do think this is a very slick and short way of handling things and I can tell that it has a good amount of potential in algorithms. One minor note: whenever I will be talking about implementing <span class=\"code\">foldLeft</span> I will be referring to <span class=\"code\">/:</span> unless specified differently.</p>

<h4>Censoring</h4>
<p>Next up is the usage of a trait, for those who can't remember what a trait is (I highly recommend checking out the blog post surrounding classes and such), it is basically an abstract class that has methods defined that you can use in classes that extend this trait.
Here is how I solved this assignment:</p>
<div class=\"code\">
trait Censor {</br>
	val curseWords = Map(\"shoot\"->\"pucky\", \"darn\"->\"beans\")</br>
	def censor(string: String): String = (string.toLowerCase /: curseWords)((string, curseWord) => string.replaceAllLiterally(curseWord._1, curseWord._2))</br>
}</br>
</div>
<p>Basically what this says is: there is a trait and inside that trait, I specified a map with all the curse words and their alternatives. After that, I made a censor method that takes a <span class=\"code\">String</span> and returns a <span class=\"code\">String</span> too. Inside this method, the parameter is used as the base value and the curse word map is folded over to replace every instance of a curse word inside the parameter with its alternative. I decided to turn the parameter into a lower case string because that makes matching with the curse words easier, this can be solved by using <span class=\"code\">replaceAll</span> which takes a regex statement. To look for a case-insensitive string you can append <span class=\"code\">(?i)</span> to the front of <span class=\"code\">curseWord._1</span> but since this will still replace with an alternative that might have a different casing, I decided that it was not worth the fuss and wouldn't provide much gain.
To test this code, I made a simple class and attached the trait to it:</p>
<div class=\"code\">
class Sentence(val words: String) extends Censor {</br>
	def printNicely = println(this.censor(words))</br>
}</br>
val sentence = new Sentence(\"Shoot the darn ducks\")</br>
sentence.printNicely</br>
</div>
<p>The <span class=\"code\">Sentence</span> class takes a string as an attribute and when <span class=\"code\">printNicely</span> is called, the class will call its own <span class=\"code\">censor</span> method with the string and print the return value of that method. In this case, it would print \"pucky the beans ducks\", whatever that may mean.</p>

<h4>File Interaction</h4>
<p>Next up, the curse words and alternatives from the previous assignment need to be taken from a file to be used in the same context. For this purpose, I made a file that contains a curse word and an alternative which are separated by a comma.
I used the same code from the previous assignment and made a few small adjustments to it after which the trait looks like this:</p>
<div class=\"code\">
trait Censor {</br>
    var curseWords = Map[String, String]()</br>
    scala.io.Source.fromFile(\"words.txt\").getLines.foreach(curseWord => curseWords += (curseWord.split(\",\")(0) -> curseWord.split(\",\")(1)))</br>
    def censor(string: String): String = (string.toLowerCase /: curseWords)((string, curseWord) => string.replaceAllLiterally(curseWord._1, curseWord._2))</br>
}</br>
</div>
<p>First off, the map needs to be changed from an immutable to a mutable variable so that we can dynamically add items to it. We also need to define the types used inside the map since Scala isn't able to inference types from an empty map.
After defining the map, we use the constructor to read the file with curse words and iterate over its lines. Each line gets split on the comma and added to the <span class=\"code\">curseWords</span> map. After which the <span class=\"code\">censor</span> method can use the map just like it would before.
It took me a bit to figure out that the <span class=\"code\">Map</span> needs to be mutable since I thought the reference would be stored and I would still be able to add to the actual element kind of like a <span class=\"code\">Set</span> allows. The way the contents of a file can be retrieved is very smooth and the <span class=\"code\">foreach</span> method allows for good interaction with the <span class=\"code\">Map</span>.

These exercises were a good practice run for the sections covered up until day 2 and I feel like they weren't too much of a challenge.</p>"
        ]);

        \App\BlogPost::create([
            'title'=>'Day Three Assignments',
            'blog'=>'Scala',
            'body'=>"<p>Seven Languages in Seven Weeks contains the following exercises for day three of Scala:</p>
<ul><li>Take the sizer application and add a message to count the number of links on the page</li></ul>

<p>The sizer application looks as follows:</p>
<div class=\"code\">
import scala.io._</br>
import scala.actors._</br>
import Actor._</br>
</br>
object PageLoader {</br>
	def getPageSize(url : String) = Source.fromURL(url).mkString.length</br>
}</br>
</br>
val urls = List(\"http://www.amazon.com/\",</br>
				\"http://www.twitter.com/\",</br>
				\"http://www.google.com/\",</br>
				\"http://www.cnn.com/\" )</br>
</br>
def timeMethod(method: () => Unit) = {</br>
	val start = System.nanoTime</br>
	method()</br>
	val end = System.nanoTime</br>
	println(\"Method took \" + (end - start)/1000000000.0 + \" seconds.\")</br>
}</br>
</br>
def getPageSizeSequentially() = {</br>
	for(url <- urls) {</br>
		println(\"Size for \" + url + \": \" + PageLoader.getPageSize(url))</br>
	}</br>
}</br>
</br>
def getPageSizeConcurrently() = {</br>
	val caller = self</br>
	for(url <- urls) {</br>
		actor { caller ! (url, PageLoader.getPageSize(url)) }</br>
	}</br>
	for(i <- 1 to urls.size) {</br>
		receive {</br>
			case (url, size) =></br>
			println(\"Size for \" + url + \": \" + size)</br>
		}</br>
	}</br>
}</br>
</br>
println(\"Sequential run:\")</br>
timeMethod { getPageSizeSequentially }</br>
</br>
println(\"Concurrent run\")</br>
timeMethod { getPageSizeConcurrently }</br>
</div>
<p>I modified the <span class=\"code\">PageLoader</span> to include a <span class=\"code\">getLinkCount</span> method:</p>
<div class=\"code\">
object PageLoader {</br>
	def getPageSize(url : String) = Source.fromURL(url).mkString.length</br>
	def getLinkCount(url : String) = Source.fromURL(url).getLines.filter(line => line.matches(\".*http.*\")).length</br>
}</br>
</div>
<p>This method retrieves a webpage, filters its lines to lines that contain http (in such a way that https is included) and retrieves the number of lines from that using <span class=\"code\">.length</span>.

After making this method, I expanded the concurrent for retrieving page sizes by adding a message that is sent and received. I also added a hard-coded string to each message to differentiate them.</p>
<div class=\"code\">
def getPageSizeConcurrently() = {</br>
	val caller = self</br>
	for(url <- urls) {</br>
		actor {</br>
            caller ! (url, PageLoader.getPageSize(url), \"size\")</br>
            caller ! (url, PageLoader.getLinkCount(url), \"link count\")</br>
        }</br>
	}</br>
	for(i <- 1 to urls.size*2) {</br>
		receive {</br>
			case (url, size, \"size\") =></br>
			    println(\"Size for \" + url + \": \" + size)</br>
            case (url, linkCount, \"link count\") =></br>
                println(\"Link count on \" + url + \": \" + linkCount)</br>
		}</br>
	}</br>
}</br>
</div>
<p>It took me a little bit to figure out how to differentiate the messages and to actually understand what a message was. I can safely say that I have a good grasp of the concepts and am able to apply this when needed.</p>"
        ]);

        \App\BlogPost::create([
            'title'=>'Personal Assignment',
            'blog'=>'Scala',
            'body'=>'<p>For my personal assignment, I thought up a small project that I could use to test my knowledge in Scala.
I decided to write something similar to a webhook that will monitor a public Github repository, and if it detects any changes it will download those changes via Git.
This is the program I wrote:</p>
<div class="code">
import sys.process._</br>
</br>
val repo = getRepo</br>
</br>
val latestHash = retrieveCommitHash</br>
</br>
val currentHash = scala.io.Source.fromFile(".git/refs/heads/master").getLines.next</br>
</br>
if(!currentHash.equals(latestHash)) {</br>
    println("It seems the remote repository is ahead of the local repository. Pulling to retrieve the changes.\n----------")</br>
    if("git pull".! != 0) {</br>
        println("----------\nThere was a problem while updating the repository.")</br>
    }</br>
}</br>
</br>
def getRepo() : String = {</br>
    return scala.io.Source.fromFile(".git/config").getLines.filter(line => line.matches("^\turl =.*")).mkString.stripPrefix("\turl = git@github.com:")</br>
}</br>
</br>
def retrieveCommitHash() : String = {</br>
    val doc = scala.io.Source.fromURL("https://github.com/" + repo + "/commits/master", "UTF-8")</br>
    val returnVal = doc.getLines.filter(line => line.matches(".*class=\"message\".*")).next.replaceFirst("</a>", "").replaceFirst("^.*href=\".*/", "").replaceFirst("\".*$", "")</br>
    doc.close</br>
    return returnVal</br>
}</br>
</div>

<p>The script works if it is in the same folder as the <span class="code">.git</span> folder of a project. The script starts off by calling the <span class="code">getRepo</span> helper function. This function looks in the <span class=\"code\">.git</span> folder for the config file and retrieves the url of the Github repository that this repo is a clone of.
After retrieving the repo, the most recent commit hash is retrieved from the commits page on the Github project. The lines are retrieved from the URL after which they are stripped to the lines containing the actual commit. The first line is taken and stripped of everything that is not the hash.
The last piece of data retrieval is the retrieval of the local repos most current commit hash. This has is stored in a plain text file in the <span class="code">.git</span> folder, which is loaded and taken.
</p>
<p>Now that all the information is complete, the hashes get compared and if they are not equal the <span class="code">git pull</span> command gets executed on the system. When an error occurs (this is detected by <span class="code">.!</span> returning something else than 0), this gets printed in the console.

It was a fun ride learning to work with Scala and to think solve certain issues that presented itself. For example, filtering and stripping strings was slightly challenging at times since the parameters vary between literal strings and regex expressions. Working with files (sources) and iterators offered me some very applicable knowledge and I think that I can certainly use that in projects later down the line.

The code is fully functional and works with any non-private Github repository.</p>'
        ]);

        \App\Blog::create([
            'name'=>'Prolog'
        ]);
    }
}
