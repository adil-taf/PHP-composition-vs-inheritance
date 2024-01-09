# PHP-composition-vs-inheritance
The purpose of this example is to illustrate the advantages of composition over inheritance in object-oriented programming (OOP).

**Inheritance** establishes a `is-a` relationship between classes.

**Composition** creates a `has-a` relationship between classes.

In the context of Non-Player Characters (NPCs: Characters that are not controlled by the player) in video games, the NPC's ability to move and attack can be modeled through either inheritance or composition.

In this example NPCs Characters are: `Alligator`, `Dragon`, `Gorila`, `Pet`, `Quest Giver`

## Implementation 1 (Inheritance with Overriding):
In this implementation, we create a base class `NPC` with two methods: `attack()` and `move()`. All concrete classes (`Alligator`, `Dragon`, `Gorilla`, `Pet`, `QuestGiver`) inherit from the `NPC` class.
### Problem
This implementation leads to problems with the `QuestGiver` class, since it does not attack. To address this, we override the `attack()` method in the `QuestGiver` class and throw an exception. This solution is not ideal, as it violates the Single Responsibility Principle (`SRP`) by forcing the `QuestGiver` class to deal with both movement and attack behaviors.
## Implementation 2 (Inheritance with Duplication):
To address the issue with the `QuestGiver` class in the previous implementation, we introduce a second base class `Monster` that inherits from the `NPC` class and we move the `attack()` method from the `NPC` into the `Monster` class. Concrete classes that are monsters, such as `Alligator`, `Dragon`, and `Gorilla`, inherit from the `Monster` class. Concrete classes that are not monsters, such as `QuestGiver` and `Pet`, inherit from the `NPC` class.
### Problem
This implementation introduces another problem: the `Pet` class cannot inherit from the `Monster` classe, as it does not fit the `is-a` relationship with it. To address this, we duplicate the `attack()` method in the `Pet` class. This solution is also not ideal, as it violates the `DRY` principle (Don't Repeat Yourself).
## Implementation 3 (Composition):
In this implementation, we extract the `move()` and `attack()` behaviors into separate classes: `Movement` and `Fighting`. These classes have their own methods and responsibilities.
### Solution:
We create a base interface `NPC` that defines the common behavior of NPCs. Concrete classes (`Alligator`, `Dragon`, `Gorilla`, `Pet`, `QuestGiver`) implement the `NPC` interface. We inject the `Movement` and `Fighting` objects into the concrete classes via their constructors. This approach allows us to decouple the behaviors and maintain a cleaner and more maintainable code structure.

> [!NOTE]
> To build and run the application using **Docker** run:
> ```bash
> cd docker/
> ```
> ```bash
> docker-compose up --build
> ```
