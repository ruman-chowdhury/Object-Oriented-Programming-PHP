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



07-Access Modifier:
-------------------

The access modifier is the most important feature of the OO language and it is used to restrict the function and classes to be accessed. The list of the access modifiers are:

i)Public: Class properties and methods, that are set to be public, can be accessed anywhere in the PHP script, in other words everywhere.

ii)Private: Class properties and methods, that are set to be private, can only be accessed within a class, in other words only in which it is defined.

iii)Protected Class properties and method, that are set to be protected, can only be accessed inside the class and by its subclasses, in other words its class and sub classes.


08-Polymorphism:
---------------

Same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.

In short,

i)If Inheritance occurs

ii) Override a methods with some arguments

Then,we can call it's a Polymorphism.




09-Interface:
---------------

i)An interface consists of methods that have no implementations, which means the interface methods are abstract methods.

ii)All the methods in interfaces must have public visibility scope.

iii)Interfaces are different from classes as the class can inherit from one class only whereas the class can implement one or more interfaces.


In short,Interface class contains method without method body.(Only method declaration).These methods will be implemented in sub-class.




10-Abstract class:
-------------------

An abstract class cannot be instantiated, can only be inherited by other sub-classes extended from it.

Abstract class must contain at least one abstract method without body and it have to implement in sub-class.

Non-abstract method can also exist.

Abstract class/Interface class doesn't contain any variable, only method exist.

We can't create any object of abstract class.we need to extend to access abstract class.


Interface: all methods without body.

Abstract: at least one abstract method + others normal methods.




11-Magic method:
----------------

PHP provides built-in interceptor methods (also called magic methods), which are automatically executed in some special cases, when are accessed undefined methods and properties. - Magic methods must be defined with "public" attribute.


__get(), __set() and  __call()  methods:


The __get() and __set() methods are generally used together and are designed for working with properties that are not defined in a class (or its parents).

i)__get($property) - automatically invoked when an undefined property is accessed. __get() method must be defned with one parameter 

ii)__set($property, $value) - automatically invoked when a value is assigned to an undefined property.The __set() must be declared with two arguments.
 
iii)__call($method, $arg_array)method is invoked when an undefined method is called.

 


12-Autoload classes:
--------------------

__autoload() is also a magic method which includeds all the classes.So we don't need to include all the files manually.




13-Namespaces:
--------------

Namespaces is used for reduce dependency.Example:

If two or more employee's have same class name then their code will be messed up.To reduce this dependency namespace is used.It it generates folder.




14-Composer:
------------

Composer is an application-level package manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries.

