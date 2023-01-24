<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-sm-12 col-md-8 col-xl-6 rounded-3 tutorial-content" id="mainContent">
        <h1>Object Oriented Programming in PHP</h1>
        <hr>
    <img src="oops_pillars.png" width="500px" alt="">
        <p>We can imagine our universe made of different objects like sun, earth, moon etc. Similarly we can imagine our car made of different objects like wheel, steering, gear etc. Same way there is object oriented programming concepts which assume everything as an object and implement a software using different objects.</p>
        <h2>Object Oriented Concepts</h2>
        <p>Before we go in detail, lets define important terms related to Object Oriented Programming.</p>
        <ul class="list">
            <li>
                <p><b>Class</b> − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.</p>
            </li>
            <li>
                <p><b>Object</b> − An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.</p>
            </li>
            <li>
                <p><b>Member Variable</b> − These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.</p>
            </li>
            <li>
                <p><b>Member function</b> − These are the function defined inside a class and are used to access object data.</p>
            </li>
            <li>
                <p><b>Inheritance</b> − When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.</p>
            </li>
            <li>
                <p><b>Parent class</b> − A class that is inherited from by another class. This is also called a base class or super class.</p>
            </li>
            <li>
                <p><b>Child Class</b> − A class that inherits from another class. This is also called a subclass or derived class.</p>
            </li>
            <li>
                <p><b>Polymorphism</b> − This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.</p>
            </li>
            <li>
                <p><b>Overloading</b> − a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.</p>
            </li>
            <li>
                <p><b>Data Abstraction</b> − Any representation of data in which the implementation details are hidden (abstracted).</p>
            </li>
            <li>
                <p><b>Encapsulation</b> − refers to a concept where we encapsulate all the data and member functions together to form an object.</p>
            </li>
            <li>
                <p><b>Constructor</b> − refers to a special type of function which will be called automatically whenever there is an object formation from a class.</p>
            </li>
            <li>
                <p><b>Destructor</b> − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.</p>
            </li>
        </ul>
        <h2>Defining PHP Classes</h2>
        <p>The general form for defining a new class in PHP is as follows −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">class</span><span class="pln"> phpClass </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> $var1</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> $var2 </span><span class="pun">=</span><span class="pln"> </span><span class="str">"constant string"</span><span class="pun">;</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> myfunc </span><span class="pun">(</span><span class="pln">$arg1</span><span class="pun">,</span><span class="pln"> $arg2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="pun">[..]</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">[..]</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
        <p>Here is the description of each line −</p>
        <ul class="list">
            <li>
                <p>The special form <b>class</b>, followed by the name of the class that you want to define.</p>
            </li>
            <li>
                <p>A set of braces enclosing any number of variable declarations and function definitions.</p>
            </li>
            <li>
                <p>Variable declarations start with the special form <b>var</b>, which is followed by a conventional $ variable name; they may also have an initial assignment to a constant value.</p>
            </li>
            <li>
                <p>Function definitions look much like standalone PHP functions but are local to the class and will be used to set and access object data.</p>
            </li>
        </ul>
        <h3>Example</h3>
        <p>Here is an example which defines a class of Books type −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">/* Member variables */</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> $price</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> $title</span><span class="pun">;</span><span class="pln">
      
      </span><span class="com">/* Member functions */</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> setPrice</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">){</span><span class="pln">
         $this</span><span class="pun">-&gt;</span><span class="pln">price </span><span class="pun">=</span><span class="pln"> $par</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> getPrice</span><span class="pun">(){</span><span class="pln">
         echo $this</span><span class="pun">-&gt;</span><span class="pln">price </span><span class="pun">.</span><span class="str">"&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> setTitle</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">){</span><span class="pln">
         $this</span><span class="pun">-&gt;</span><span class="pln">title </span><span class="pun">=</span><span class="pln"> $par</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">function</span><span class="pln"> getTitle</span><span class="pun">(){</span><span class="pln">
         echo $this</span><span class="pun">-&gt;</span><span class="pln">title </span><span class="pun">.</span><span class="str">" &lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
        <p>The variable <b>$this</b> is a special variable and it refers to the same object ie. itself.</p>
        <h2>Creating Objects in PHP</h2>
        <p>Once you defined your class, then you can create as many objects as you like of that class type. Following is an example of how to create object using <b>new</b> operator.</p>
        <pre class="result notranslate">$physics = new Books;
$maths = new Books;
$chemistry = new Books;
</pre>
        <p>Here we have created three objects and these objects are independent of each other and they will have their existence separately. Next we will see how to access member function and process member variables.</p>
        <h2>Calling Member Functions</h2>
        <p>After creating your objects, you will be able to call member functions related to that object. One member function will be able to process member variable of related object only.</p>
        <p>Following example shows how to set title and prices for the three books by calling member functions.</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pln">$physics</span><span class="pun">-&gt;</span><span class="pln">setTitle</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Physics for High School"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">setTitle</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Advanced Chemistry"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">setTitle</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Algebra"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$physics</span><span class="pun">-&gt;</span><span class="pln">setPrice</span><span class="pun">(</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">setPrice</span><span class="pun">(</span><span class="pln"> </span><span class="lit">15</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">setPrice</span><span class="pun">(</span><span class="pln"> </span><span class="lit">7</span><span class="pln"> </span><span class="pun">);</span></pre>
        <p>Now you call another member functions to get the values set by in above example −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pln">$physics</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$physics</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span></pre>
        <p>This will produce the following result −</p>
        <pre class="result notranslate">Physics for High School
Advanced Chemistry
Algebra
10
15
7
</pre>
        <h2>Constructor Functions</h2>
        <p>Constructor Functions are special type of functions which are called automatically whenever an object is created. So we take full advantage of this behaviour, by initializing many things through constructor functions. </p>
        <p>PHP provides a special function called <b>__construct()</b> to define a constructor. You can pass as many as arguments you like into the constructor function.</p>
        <p>Following example will create one constructor for Books class and it will initialize price and title for the book at the time of object creation.</p>
        <pre class="result notranslate">function __construct( $par1, $par2 ) {
   $this-&gt;title = $par1;
   $this-&gt;price = $par2;
}
</pre>
        <p>Now we don't need to call set function separately to set price and title. We can initialize these two member variables at the time of object creation only. Check following example below −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pln">$physics </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Physics for High School"</span><span class="pun">,</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$maths </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> </span><span class="str">"Advanced Chemistry"</span><span class="pun">,</span><span class="pln"> </span><span class="lit">15</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
$chemistry </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">(</span><span class="str">"Algebra"</span><span class="pun">,</span><span class="pln"> </span><span class="lit">7</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
</span><span class="com">/* Get those set values */</span><span class="pln">
$physics</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">getTitle</span><span class="pun">();</span><span class="pln">
$physics</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span><span class="pln">
$chemistry</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span><span class="pln">
$maths</span><span class="pun">-&gt;</span><span class="pln">getPrice</span><span class="pun">();</span></pre>
        <p>This will produce the following result −</p>
        <pre class="result notranslate">  Physics for High School
  Advanced Chemistry
  Algebra
  10
  15
  7
</pre>
        <h2>Destructor</h2>
        <p>Like a constructor function you can define a destructor function using function <b>__destruct()</b>. You can release all the resources with-in a destructor.</p>
        <h2>Inheritance</h2>
        <p>PHP class definitions can optionally inherit from a parent class definition by using the extends clause. The syntax is as follows −</p>
        <pre class="result notranslate">class Child extends Parent {
   &lt;definition body&gt;
}
</pre>
        <p>The effect of inheritance is that the child class (or subclass or derived class) has the following characteristics −</p>
        <ul class="list">
            <li>
                <p>Automatically has all the member variable declarations of the parent class.</p>
            </li>
            <li>
                <p>Automatically has all the same member functions as the parent, which (by default) will work the same way as those functions do in the parent.</p>
            </li>
        </ul>
        <p>Following example inherit Books class and adds more functionality based on the requirement.</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">class</span><span class="pln"> </span><span class="typ">Novel</span><span class="pln"> </span><span class="kwd">extends</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> $publisher</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> setPublisher</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">){</span><span class="pln">
      $this</span><span class="pun">-&gt;</span><span class="pln">publisher </span><span class="pun">=</span><span class="pln"> $par</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> getPublisher</span><span class="pun">(){</span><span class="pln">
      echo $this</span><span class="pun">-&gt;</span><span class="pln">publisher</span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <p>Now apart from inherited functions, class Novel keeps two additional member functions.</p>
        <h2>Function Overriding</h2>
        <p>Function definitions in child classes override definitions with the same name in parent classes. In a child class, we can modify the definition of a function inherited from parent class.</p>
        <p>In the following example getPrice and getTitle functions are overridden to return some values.</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">function</span><span class="pln"> getPrice</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   echo $this</span><span class="pun">-&gt;</span><span class="pln">price </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">price</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
   
</span><span class="kwd">function</span><span class="pln"> getTitle</span><span class="pun">(){</span><span class="pln">
   echo $this</span><span class="pun">-&gt;</span><span class="pln">title </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">title</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
        <h2>Public Members</h2>
        <p>Unless you specify otherwise, properties and methods of a class are public. That is to say, they may be accessed in three possible situations −</p>
        <ul class="list">
            <li>
                <p>From outside the class in which it is declared</p>
            </li>
            <li>
                <p>From within the class in which it is declared</p>
            </li>
            <li>
                <p>From within another class that implements the class in which it is declared</p>
            </li>
        </ul>
        <p>Till now we have seen all members as public members. If you wish to limit the accessibility of the members of a class then you define class members as <b>private</b> or <b>protected</b>.</p>
        <h2>Private members</h2>
        <p>By designating a member private, you limit its accessibility to the class in which it is declared. The private member cannot be referred to from classes that inherit the class in which it is declared and cannot be accessed from outside the class.</p>
        <p>A class member can be made private by using <b>private</b> keyword infront of the member.</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">class</span><span class="pln"> </span><span class="typ">MyClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">private</span><span class="pln"> $car </span><span class="pun">=</span><span class="pln"> </span><span class="str">"skoda"</span><span class="pun">;</span><span class="pln">
   $driver </span><span class="pun">=</span><span class="pln"> </span><span class="str">"SRK"</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> __construct</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// Statements here run every time</span><span class="pln">
      </span><span class="com">// an instance of the class</span><span class="pln">
      </span><span class="com">// is created.</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> myPublicFunction</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pun">(</span><span class="str">"I'm visible!"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">private</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> myPrivateFunction</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pun">(</span><span class="str">"I'm  not visible outside!"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <p>When <i>MyClass</i> class is inherited by another class using extends, myPublicFunction() will be visible, as will $driver. The extending class will not have any awareness of or access to myPrivateFunction and $car, because they are declared private.</p>
        <h2>Protected members</h2>
        <p>A protected property or method is accessible in the class in which it is declared, as well as in classes that extend that class. Protected members are not available outside of those two kinds of classes. A class member can be made protected by using <b>protected</b> keyword in front of the member.</p>
        <p>Here is different version of MyClass −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">class</span><span class="pln"> </span><span class="typ">MyClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pln"> $car </span><span class="pun">=</span><span class="pln"> </span><span class="str">"skoda"</span><span class="pun">;</span><span class="pln">
   $driver </span><span class="pun">=</span><span class="pln"> </span><span class="str">"SRK"</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">function</span><span class="pln"> __construct</span><span class="pun">(</span><span class="pln">$par</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// Statements here run every time</span><span class="pln">
      </span><span class="com">// an instance of the class</span><span class="pln">
      </span><span class="com">// is created.</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> myPublicFunction</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pun">(</span><span class="str">"I'm visible!"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> myPrivateFunction</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pun">(</span><span class="str">"I'm  visible in child class!"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <h2>Interfaces</h2>
        <p>Interfaces are defined to provide a common function names to the implementers. Different implementors can implement those interfaces according to their requirements. You can say, interfaces are skeletons which are implemented by developers.</p>
        <p>As of PHP5, it is possible to define an interface, like this −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">interface</span><span class="pln"> </span><span class="typ">Mail</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> sendMail</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span></pre>
        <p>Then, if another class implemented that interface, like this −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">class</span><span class="pln"> </span><span class="typ">Report</span><span class="pln"> </span><span class="kwd">implements</span><span class="pln"> </span><span class="typ">Mail</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// sendMail() Definition goes here</span><span class="pln">
</span><span class="pun">}</span></pre>
        <h2>Constants</h2>
        <p>A constant is somewhat like a variable, in that it holds a value, but is really more like a function because a constant is immutable. Once you declare a constant, it does not change.</p>
        <p>Declaring one constant is easy, as is done in this version of MyClass −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">class</span><span class="pln"> </span><span class="typ">MyClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">const</span><span class="pln"> requiredMargin </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1.7</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> __construct</span><span class="pun">(</span><span class="pln">$incomingValue</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// Statements here run every time</span><span class="pln">
      </span><span class="com">// an instance of the class</span><span class="pln">
      </span><span class="com">// is created.</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <p>In this class, requiredMargin is a constant. It is declared with the keyword const, and under no circumstances can it be changed to anything other than 1.7. Note that the constant's name does not have a leading $, as variable names do.</p>
        <h2>Abstract Classes</h2>
        <p>An abstract class is one that cannot be instantiated, only inherited. You declare an abstract class with the keyword <b>abstract</b>, like this −</p>
        <p>When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, these methods must be defined with the same visibility.</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">abstract</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">MyAbstractClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">abstract</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> myAbstractFunction</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <p>Note that function definitions inside an abstract class must also be preceded by the keyword abstract. It is not legal to have abstract function definitions inside a non-abstract class.</p>
        <h2>Static Keyword</h2>
        <p>Declaring class members or methods as static makes them accessible without needing an instantiation of the class. A member declared as static can not be accessed with an instantiated class object (though a static method can).</p>
        <p>Try out following example −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Foo</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">static</span><span class="pln"> $my_static </span><span class="pun">=</span><span class="pln"> </span><span class="str">'foo'</span><span class="pun">;</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> staticValue</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">self</span><span class="pun">::</span><span class="pln">$my_static</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   </span><span class="kwd">print</span><span class="pln"> </span><span class="typ">Foo</span><span class="pun">::</span><span class="pln">$my_static </span><span class="pun">.</span><span class="pln"> </span><span class="str">"\n"</span><span class="pun">;</span><span class="pln">
   $foo </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Foo</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">print</span><span class="pln"> $foo</span><span class="pun">-&gt;</span><span class="pln">staticValue</span><span class="pun">()</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"\n"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">	</span></pre>
        <h2>Final Keyword</h2>
        <p>PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.</p>
        <p>Following example results in Fatal error: Cannot override final method BaseClass::moreTesting()</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">BaseClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> test</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         echo </span><span class="str">"BaseClass::test() called&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">final</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> moreTesting</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         echo </span><span class="str">"BaseClass::moreTesting() called&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ChildClass</span><span class="pln"> </span><span class="kwd">extends</span><span class="pln"> </span><span class="typ">BaseClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> moreTesting</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         echo </span><span class="str">"ChildClass::moreTesting() called&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
        <h2>Calling parent constructors</h2>
        <p>Instead of writing an entirely new constructor for the subclass, let's write it by calling the parent's constructor explicitly and then doing whatever is necessary in addition for instantiation of the subclass. Here's a simple example −</p>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">class</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> $_firstName</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> $_lastName</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">Name</span><span class="pun">(</span><span class="pln">$first_name</span><span class="pun">,</span><span class="pln"> $last_name</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $this</span><span class="pun">-&gt;</span><span class="pln">_firstName </span><span class="pun">=</span><span class="pln"> $first_name</span><span class="pun">;</span><span class="pln">
      $this</span><span class="pun">-&gt;</span><span class="pln">_lastName </span><span class="pun">=</span><span class="pln"> $last_name</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> toString</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pun">(</span><span class="pln">$this</span><span class="pun">-&gt;</span><span class="pln">_lastName </span><span class="pun">.</span><span class="str">", "</span><span class="pln"> </span><span class="pun">.</span><span class="pln">$this</span><span class="pun">-&gt;</span><span class="pln">_firstName</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">NameSub1</span><span class="pln"> </span><span class="kwd">extends</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> $_middleInitial</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">NameSub1</span><span class="pun">(</span><span class="pln">$first_name</span><span class="pun">,</span><span class="pln"> $middle_initial</span><span class="pun">,</span><span class="pln"> $last_name</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">Name</span><span class="pun">::</span><span class="typ">Name</span><span class="pun">(</span><span class="pln">$first_name</span><span class="pun">,</span><span class="pln"> $last_name</span><span class="pun">);</span><span class="pln">
      $this</span><span class="pun">-&gt;</span><span class="pln">_middleInitial </span><span class="pun">=</span><span class="pln"> $middle_initial</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">function</span><span class="pln"> toString</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pun">(</span><span class="typ">Name</span><span class="pun">::</span><span class="pln">toString</span><span class="pun">()</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">" "</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">_middleInitial</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <p>In this example, we have a parent class (Name), which has a two-argument constructor, and a subclass (NameSub1), which has a three-argument constructor. The constructor of NameSub1 functions by calling its parent constructor explicitly using the :: syntax (passing two of its arguments along) and then setting an additional field. Similarly, NameSub1 defines its non constructor toString() function in terms of the parent function that it overrides.</p>
        <p><b>NOTE</b> − A constructor can be defined with the same name as the name of a class. It is defined in above example.</p>
 
    </div>
</body>
</html>