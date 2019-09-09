01-class,object:
----------------

Class is programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.

Object is the physical as well as logical entity. class is the logical entity only.

Object is an instance of a class. Class is a template or blueprint from which objects are created.

An object has three characteristics:

i)state

ii)behavior

iii)identity

For Example: Pen is an object. Its name is Reynolds, color is white etc. known as its state.


Object Definitions:

Object is a real world entity.

Object is a run time entity.

Object is an entity which has state and behavior.

Object is an instance of a class.



02-__Constructor():
-------------------

The __construct() method is special type of function which will be called automatically whenever there is an object formation from a class.

PHP provides a special function called __construct() to define a constructor. You can pass as many as arguments you like into the constructor function.



03-__Destructor():
------------------

The __destruct() method is automatically invoked/called just before the object is removed from memory ( with unset($object) ).Simply,when the job is done of the object,it is called if we want to do something yet. 

This method is useful when you want to perform any last-minute actions (such as saving or printing some data when it is deleted).

You can release all the resources with-in a destructor.

Example:In logout system,when user logout from somewhere, the user data will remove.(unset(), in __destruct() method).

We need to close database connection at the last of the program.(mysql_close(),in __destruct() method).



04-Constant:
------------

A constant is declared with the 'const' keyword.It is not prefixed with a $ sign like other class properties.
 
Syntax: const CONSTANT_NAME

Constant value cannot be changed once it is set.Where,others class property/var is changeable.
Constants are recognized as public always,they are not defined with public,private or protected attribute.

Constants are accessed via the class name.

Syntax: Class_Name::CONSTANT_NAME (double colon is called scope resolution operator).

To access a class constant in a PHP script it's no need to create an object instance of the class.



05-Static property & method:
---------------------------

Static properties and methods in php can directly accessible without creating object of class. Your php class will be static class if your all methods and properties of the class is static. Static Methods and Properties in PHP will be treated as public if no visibility is defined.
Static properties of class is a property which is directly accessible from class with the help of ::(scope resolution operator). You can declare static  property using static keyword.

To access a static method or property from within the same class you can also use the "self" keyword. 

self::$property

class name::method_Name() or

class_object->method_name();


Imprtant:

1)Static property use the dollar sign ($).

2)Static properties/variable cannot be accessed through the object using the arrow operator "->".Variable is only accessible by className::variable.

3)But method can be access by both className::method() and object->method()

4)Shouldn't use 'this' keyword inside method when initialize.(Instead $this->userName = $name,use $userName = $name)




06-Inheritance:
---------------

Inheritance is a mechanism in which one sub class can access all the properties and behaviors of parent/super class.Inheritance represents the 'IS-A relationship', also known as parent-child relationship.

Here child class will inherit all or few member functions and variables of a parent class.

In short,Parent class: parent property; Child extends Parent: parent property + child own property;