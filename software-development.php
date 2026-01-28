<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development Portal | Tutor Assist</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/192436698a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="portal-body">

    <header class="portal-header">
        <div>
            <a href="landing.php" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Catalog</a>
            <strong>Software Development</strong> | Instructor Guide
        </div>
        <div style="display: flex; gap: 15px; align-items: center;">
            <div onclick="showDashboard()" style="cursor:pointer"><i class="fa-solid fa-table-cells"></i> Dashboard View</div>
            <a href="logout.php" class="back-btn" style="background: #c0392b; border: none;">
                <i class="fa-solid fa-power-off"></i> Logout
            </a>
        </div>
    </header>

    <div class="portal-container">
       <div class="sidebar">
    <h3>Phase 1: Foundations of Logic (Weeks 1-5)</h3>
    <div class="nav-item" id="nav-1-1" onclick="loadContent(1,1)">W1 D1: Introduction to Software Development</div>
    <div class="nav-item" id="nav-1-2" onclick="loadContent(1,2)">W1 D2: Variables and Data Types</div>
    <div class="nav-item" id="nav-1-3" onclick="loadContent(1,3)">W1 D3: Operators (Math and Logic)</div>
    <div class="nav-item" id="nav-1-4" onclick="loadContent(1,4)">W1 D4: Basic Input/Output in Python</div>

    <div class="nav-item" id="nav-2-1" onclick="loadContent(2,1)">W2 D1: If/Else Statements</div>
    <div class="nav-item" id="nav-2-2" onclick="loadContent(2,2)">W2 D2: Nested Conditionals</div>
    <div class="nav-item" id="nav-2-3" onclick="loadContent(2,3)">W2 D3: For Loops </div>
    <div class="nav-item" id="nav-2-4" onclick="loadContent(2,4)">W2 D4: While Loops </div>

    <div class="nav-item" id="nav-3-1" onclick="loadContent(3,1)">W3 D1: Lists and Arrays</div>
    <div class="nav-item" id="nav-3-2" onclick="loadContent(3,2)">W3 D2: Dictionaries and Maps</div>
    <div class="nav-item" id="nav-3-3" onclick="loadContent(3,3)">W3 D3: List Manipulation</div>
    <div class="nav-item" id="nav-3-4" onclick="loadContent(3,4)">W3 D4: Iterating through complex data</div>

    <div class="nav-item" id="nav-4-1" onclick="loadContent(4,1)">W4 D1: Defining Functions (Reusable code)</div>
    <div class="nav-item" id="nav-4-2" onclick="loadContent(4,2)">W4 D2: Parameters and Return Values</div>
    <div class="nav-item" id="nav-4-3" onclick="loadContent(4,3)">W4 D3: Local vs. Global Scope</div>
    <div class="nav-item" id="nav-4-4" onclick="loadContent(4,4)">W4 D4: Recursive Functions (Functions that call themselves)</div>

    <h3>Level 1: Project Work</h3>
    <div class="nav-item" id="nav-5-1" onclick="loadContent(5,1)">W5 D1: Project - Build a "Banking System Console"</div>
    <div class="nav-item" id="nav-5-2" onclick="loadContent(5,2)">W5 D2: Project - Project Work</div>
    <div class="nav-item" id="nav-5-3" onclick="loadContent(5,3)">W5 D3: Project - Project Work</div>
    <div class="nav-item" id="nav-5-4" onclick="loadContent(5,4)">W5 D4: Project - Project Work</div>

    <h3>Phase 2: Object-Oriented Programming (Weeks 6-9)</h3>
    <div class="nav-item" id="nav-6-1" onclick="loadContent(6,1)">W6 D1: Classes and Objects</div>
    <div class="nav-item" id="nav-6-2" onclick="loadContent(6,2)">W6 D2: Attributes and Methods</div>
    <div class="nav-item" id="nav-6-3" onclick="loadContent(6,3)">W6 D3: The __init__ constructor</div>
    <div class="nav-item" id="nav-6-4" onclick="loadContent(6,4)">W6 D4: Practice: Modeling a "Car" class</div>

    <div class="nav-item" id="nav-7-1" onclick="loadContent(7,1)">W7 D1: Inheritance (Child classes)</div>
    <div class="nav-item" id="nav-7-2" onclick="loadContent(7,2)">W7 D2: Encapsulation (Private vs. Public data)</div>
    <div class="nav-item" id="nav-7-3" onclick="loadContent(7,3)">W7 D3: Polymorphism (One interface, many forms)</div>
    <div class="nav-item" id="nav-7-4" onclick="loadContent(7,4)">W7 D4: Abstraction (Hiding complexity)</div>

    <div class="nav-item" id="nav-8-1" onclick="loadContent(8,1)">W8 D1: Try/Except blocks (Preventing crashes)</div>
    <div class="nav-item" id="nav-8-2" onclick="loadContent(8,2)">W8 D2: Logging errors</div>
    <div class="nav-item" id="nav-8-3" onclick="loadContent(8,3)">W8 D3: Reading from Text and CSV files</div>
    <div class="nav-item" id="nav-8-4" onclick="loadContent(8,4)">W8 D4: Writing and Saving data to files</div>

    <h3>Level 2: Project Work</h3>
    <div class="nav-item" id="nav-9-1" onclick="loadContent(9,1)">W9 D1: Build a "Student Management System"</div>
    <div class="nav-item" id="nav-9-2" onclick="loadContent(9,2)">W9 D2: Project Work</div>
    <div class="nav-item" id="nav-9-3" onclick="loadContent(9,3)">W9 D3: Project Work</div>
    <div class="nav-item" id="nav-9-4" onclick="loadContent(9,4)">W9 D4: Project Work</div>

    <h3>Phase 3: GUI Development & Deployment (Weeks 10-14)</h3>
    <div class="nav-item" id="nav-10-1" onclick="loadContent(10,1)">W10 D1: Windows, Frames, and Labels</div>
    <div class="nav-item" id="nav-10-2" onclick="loadContent(10,2)">W10 D2: Buttons and Event Handlers</div>
    <div class="nav-item" id="nav-10-3" onclick="loadContent(10,3)">W10 D3: Entry fields and Text areas</div>
    <div class="nav-item" id="nav-10-4" onclick="loadContent(10,4)">W10 D4: Layout management (Grid vs. Pack)</div>

    <div class="nav-item" id="nav-11-1" onclick="loadContent(11,1)">W11 D1: Menus and Navbars</div>
    <div class="nav-item" id="nav-11-2" onclick="loadContent(11,2)">W11 D2: Pop-ups and Message Boxes</div>
    <div class="nav-item" id="nav-11-3" onclick="loadContent(11,3)">W11 D3: Working with Canvas and Images</div>
    <div class="nav-item" id="nav-11-4" onclick="loadContent(11,4)">W11 D4: Binding Keyboard keys to actions</div>

    <div class="nav-item" id="nav-12-1" onclick="loadContent(12,1)">W12 D1: Connecting your App to SQLite</div>
    <div class="nav-item" id="nav-12-2" onclick="loadContent(12,2)">W12 D2: Executing SQL commands from the App</div>
    <div class="nav-item" id="nav-12-3" onclick="loadContent(12,3)">W12 D3: Displaying Database records in a GUI table</div>
    <div class="nav-item" id="nav-12-4" onclick="loadContent(12,4)">W12 D4: Building a "Search" feature</div>

    <div class="nav-item" id="nav-13-1" onclick="loadContent(13,1)">W13 D1: Introduction to Git & GitHub</div>
    <div class="nav-item" id="nav-13-2" onclick="loadContent(13,2)">W13 D2: Committing code and Branching</div>
    <div class="nav-item" id="nav-13-3" onclick="loadContent(13,3)">W13 D3: The SDLC (Software Development Life Cycle)</div>
    <div class="nav-item" id="nav-13-4" onclick="loadContent(13,4)">W13 D4: Unit Testing </div>

    <div class="nav-item" id="nav-14-1" onclick="loadContent(14,1)">W14 D1: Finalizing a Desktop Application</div>
    <div class="nav-item" id="nav-14-2" onclick="loadContent(14,2)">W14 D2: Finalizing a Desktop Application</div>
    <div class="nav-item" id="nav-14-3" onclick="loadContent(14,3)">W14 D3: Finalizing a Desktop Application</div>
    <div class="nav-item" id="nav-14-4" onclick="loadContent(14,4)">W14 D4: Compiling to .EXE</div>
</div>

        <div class="content" id="main-content">
        </div>
    </div>

    <footer>
        <div><i class="fa-brands fa-whatsapp me-1"></i> Support: UTS IT Academy</div>
        <div>&copy; 2026 Software Development Module (14-Week Curriculum)</div>
    </footer>

    <script>
        const contentData = {

    "1-1": {
        icon: "fa-code",
        title: "Introduction to Programming & Python Setup",
        html: `<h1>Week 1, Day 1: Introduction to Programming & Python Setup</h1>
<p>Welcome to software development! Today we'll learn what programming is, set up our development environment, and write our first Python program.</p>

<div class="analogy-box">
    <b>Analogy: Cooking Instructions vs Restaurant Kitchen 🍳</b><br/>
    
    Programmer: Recipe writer (you)<br/>
    Code: Recipe with exact instructions<br/>
    Compiler/Interpreter: Chef who reads and executes recipe<br/>
    Computer: Kitchen with tools and ingredients<br/>
    Output: The finished meal<br/>
    Debugging: Taste testing and adjusting the recipe
</div>

<h3>Understanding Programming Languages</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Compilers vs Interpreters</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🔵 Compiled Languages (C++, Java, C#)</h5>
            <ul>
                <li><strong>Process:</strong> Entire code translated to machine language before execution</li>
                <li><strong>Analogy:</strong> Translating a whole book before reading</li>
                <li><strong>Speed:</strong> Faster execution</li>
                <li><strong>Error Detection:</strong> All errors caught before running</li>
                <li><strong>Examples:</strong> C++, Java (compiled to bytecode), C#</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🟢 Interpreted Languages (Python, JavaScript, PHP)</h5>
            <ul>
                <li><strong>Process:</strong> Code translated line-by-line during execution</li>
                <li><strong>Analogy:</strong> Live translator speaking as you go</li>
                <li><strong>Speed:</strong> Slower execution</li>
                <li><strong>Error Detection:</strong> Errors caught during execution</li>
                <li><strong>Examples:</strong> Python, JavaScript, PHP, Ruby</li>
            </ul>
        </div>
    </div>
</div>

<h3>Setting Up Python Development Environment</h3>
<b>Step 1: Install Python</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# Windows:
1. Download Python from python.org
2. Run installer, CHECK "Add Python to PATH"
3. Verify installation: python --version

# Mac:
1. Install Homebrew: /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
2. Install Python: brew install python

# Linux:
sudo apt update
sudo apt install python3 python3-pip
</pre>
</div>

<b>Step 2: Install VS Code (Recommended Editor)</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
1. Download VS Code from code.visualstudio.com
2. Install Python extension:
   - Open VS Code
   - Go to Extensions (Ctrl+Shift+X)
   - Search for "Python"
   - Install by Microsoft

3. Recommended extensions:
   - Python
   - Pylance
   - Python Docstring Generator
   - Code Runner
   - GitLens
</pre>
</div>

<h3>Your First Python Program</h3>
<b>hello.py:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# This is a comment - Python ignores this line
print("Hello, World!")  # print() displays text

# Variables - labeled jars for storing data
name = "Alice"  # String (text)
age = 25        # Integer (whole number)
height = 5.7    # Float (decimal number)
is_student = True  # Boolean (True/False)

print(f"Name: {name}")
print(f"Age: {age}")
print(f"Height: {height}")
print(f"Student: {is_student}")

# Basic input
user_name = input("What's your name? ")
print(f"Welcome, {user_name}!")

# Simple calculation
birth_year = int(input("What year were you born? "))
current_year = 2024
age = current_year - birth_year
print(f"You are {age} years old")
</pre>
</div>

<h3>Data Types Deep Dive</h3>
<b>Understanding Different Variable Types:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== NUMERIC TYPES ===========
# Integers (whole numbers)
age = 25
score = -10
count = 0

# Floats (decimal numbers)
price = 19.99
temperature = -5.5
pi = 3.14159

# Complex numbers (rarely used)
complex_num = 3 + 4j

# =========== TEXT TYPES ===========
# Strings (text)
name = "John Doe"
message = 'Hello World'
multiline = """This is a
multi-line
string"""

# String operations
greeting = "Hello" + " " + "World"  # Concatenation
repeat = "Hi" * 3  # "HiHiHi"
length = len(greeting)  # 11

# =========== BOOLEAN TYPE ===========
is_active = True
is_completed = False

# Boolean from comparison
is_adult = age >= 18  # True or False
is_equal = (10 == 10)  # True

# =========== CHECKING TYPES ===========
print(type(age))      # <class 'int'>
print(type(price))    # <class 'float'>
print(type(name))     # <class 'str'>
print(type(is_active))# <class 'bool'>

# =========== TYPE CONVERSION ===========
# Explicit conversion
num_str = "123"
num_int = int(num_str)  # Convert to integer
num_float = float("45.67")  # Convert to float
str_num = str(100)  # Convert to string

# Implicit conversion (Python does it automatically)
result = 5 + 2.5  # Integer + Float = Float (7.5)
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: Personal Information Program (30 minutes)</b>
    <p>Create a program that:</p>
    <ul>
        <li>Asks for user's name, age, and city</li>
        <li>Stores each in appropriate variable types</li>
        <li>Calculates year of birth from age</li>
        <li>Prints a personalized greeting</li>
    </ul>
    
    <b>Task 2: Simple Calculator (45 minutes)</b>
    <p>Create a calculator that:</p>
    <ul>
        <li>Asks for two numbers</li>
        <li>Performs addition, subtraction, multiplication, division</li>
        <li>Displays all results</li>
        <li>Handles division by zero error</li>
    </ul>
    
    <b>Task 3: Type Conversion Challenge (45 minutes)</b>
    <p>Create a program that:</p>
    <ul>
        <li>Takes a temperature in Celsius as string input</li>
        <li>Converts it to Float</li>
        <li>Calculates Fahrenheit: (C × 9/5) + 32</li>
        <li>Displays both temperatures with proper labels</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Create a "Student Profile Generator"</b>
    <p>Build a program that collects and displays student information:</p>
    
    <b>Requirements:</b>
    <ul>
        <li>Ask for: Full name, age, GPA, major, graduation year</li>
        <li>Calculate years until graduation</li>
        <li>Determine student status based on GPA (Excellent: 3.5+, Good: 3.0-3.49, etc.)</li>
        <li>Format all output neatly with labels</li>
        <li>Include error handling for invalid inputs</li>
        <li>Save output to a text file</li>
    </ul>
    
    <b>Bonus Challenges:</b>
    <ul>
        <li>Add email validation (check for @ symbol)</li>
        <li>Calculate approximate tuition based on credits</li>
        <li>Create a simple ASCII art banner</li>
        <li>Add color to console output</li>
    </ul>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Programming Basics:</b> What is code and how computers execute it</li>
    <li><b>Environment Setup:</b> Installing Python and VS Code properly</li>
    <li><b>Variables:</b> Creating and using different data types</li>
    <li><b>Input/Output:</b> Getting user input and displaying results</li>
    <li><b>Type Conversion:</b> Converting between different data types</li>
    <li><b>Comments:</b> Documenting your code for readability</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Pro Tips for Beginners:</h3>
    <ul>
        <li><b>Start Small:</b> Write simple programs and gradually add complexity</li>
        <li><b>Test Often:</b> Run your code after every few lines</li>
        <li><b>Read Errors:</b> Don't panic! Error messages tell you what's wrong</li>
        <li><b>Google Is Your Friend:</b> "How to [task] in Python" is a valid search</li>
        <li><b>Save Your Work:</b> Use version control or backup files</li>
        <li><b>Practice Daily:</b> Consistency beats intensity in programming</li>
    </ul>
</div>
`
    },   
    "1-2": {
        icon: "fa-tag",
        title: "Variables, Data Types & Basic Operations",
        html: `<h1>Week 1, Day 2: Variables, Data Types & Basic Operations</h1>
<p>Today we dive deeper into variables, explore all data types, and learn mathematical and logical operations.</p>

<div class="analogy-box">
    <b>Analogy: The Programmer's Toolbox 🔧</b><br/>
    
    Variables: Different sized containers<br/>
    Data Types: What goes in each container (water, nails, documents)<br/>
    Operations: Tools to work with contents (mix, compare, transform)<br/>
    Memory: Your workshop shelves<br/>
    CPU: Your hands doing the work<br/>
    Program: The instruction manual
</div>

<h3>Variable Naming Rules & Best Practices</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>✅ Good vs ❌ Bad Variable Names</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: #e8f5e8; padding: 15px; border-radius: 5px;">
            <h5>✅ GOOD Naming Convention</h5>
            <pre style="background: white; padding: 10px; border-radius: 3px;">
# Descriptive and clear
user_age = 25
customer_name = "Alice"
is_logged_in = True
item_price = 19.99
total_amount = 100.50

# Constants (all uppercase)
MAX_USERS = 100
PI = 3.14159
API_KEY = "abc123"

# Multiple words (snake_case)
first_name = "John"
shipping_address = "123 Main St"
has_valid_license = True</pre>
        </div>
        
        <div style="background: #ffe6e6; padding: 15px; border-radius: 5px;">
            <h5>❌ BAD Naming Convention</h5>
            <pre style="background: white; padding: 10px; border-radius: 3px;">
# Vague or meaningless
a = 25
x = "Alice"
flag = True
temp = 19.99

# Too short or cryptic
usr = "John"
cnt = 10
fn = "John"
ln = "Doe"

# Inconsistent casing
UserName = "Alice"  # PascalCase
user_name = "Bob"   # snake_case
username = "Charlie"# lowercase

# Reserved keywords
class = "Math101"   # ERROR!
import = "module"   # ERROR!
print = "hello"     # Overwrites built-in!</pre>
        </div>
    </div>
</div>

<h3>Mathematical Operations</h3>
<b>Complete Math Operations Guide:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== BASIC ARITHMETIC ===========
a = 10
b = 3

print("Addition:", a + b)        # 13
print("Subtraction:", a - b)     # 7
print("Multiplication:", a * b)  # 30
print("Division:", a / b)        # 3.333... (float)
print("Floor Division:", a // b) # 3 (integer division)
print("Modulus:", a % b)         # 1 (remainder)
print("Exponent:", a ** b)       # 1000 (10^3)

# =========== ORDER OF OPERATIONS ===========
# PEMDAS: Parentheses, Exponents, Multiplication/Division, Addition/Subtraction
result = 2 + 3 * 4       # 14 (not 20!)
result = (2 + 3) * 4     # 20

# Complex calculation
result = 10 + 2 * 3 ** 2  # 10 + 2 * 9 = 28

# =========== ASSIGNMENT OPERATORS ===========
x = 5
x += 3    # x = x + 3 → 8
x -= 2    # x = x - 2 → 6
x *= 4    # x = x * 4 → 24
x /= 3    # x = x / 3 → 8.0
x //= 2   # x = x // 2 → 4.0
x %= 3    # x = x % 3 → 1.0
x **= 2   # x = x ** 2 → 1.0

# =========== INCREMENT/DECREMENT ===========
counter = 0
counter += 1  # Increment by 1
counter -= 1  # Decrement by 1

# Python doesn't have ++ or -- operators!
# counter++  # ERROR!
# counter--  # ERROR!

# =========== MATH FUNCTIONS ===========
import math

print("Square root:", math.sqrt(16))      # 4.0
print("Power:", math.pow(2, 3))           # 8.0
print("Absolute value:", abs(-10))        # 10
print("Round:", round(3.14159, 2))        # 3.14
print("Ceiling:", math.ceil(4.2))         # 5
print("Floor:", math.floor(4.9))          # 4
print("Max:", max(10, 20, 30))            # 30
print("Min:", min(10, 20, 30))            # 10
print("Sum:", sum([1, 2, 3, 4, 5]))       # 15

# =========== RANDOM NUMBERS ===========
import random

random_int = random.randint(1, 10)    # Random integer between 1-10
random_float = random.random()        # Random float between 0-1
random_choice = random.choice([1, 2, 3, 4, 5])  # Pick random from list
</pre>
</div>

<h3>Comparison and Logical Operators</h3>
<b>Making Decisions with Operators:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== COMPARISON OPERATORS ===========
x = 10
y = 5

print("Equal:", x == y)           # False
print("Not equal:", x != y)       # True
print("Greater than:", x > y)     # True
print("Less than:", x < y)        # False
print("Greater or equal:", x >= y)# True
print("Less or equal:", x <= y)   # False

# String comparison (lexicographical)
print("'apple' < 'banana':", 'apple' < 'banana')  # True
print("'Apple' < 'apple':", 'Apple' < 'apple')    # True (uppercase < lowercase)

# =========== LOGICAL OPERATORS ===========
age = 25
has_license = True
has_car = False

# AND (both must be True)
can_drive = (age >= 18) and has_license  # True

# OR (at least one True)
can_rent = (age >= 21) or has_car        # True

# NOT (reverses boolean)
is_minor = not (age >= 18)               # False

# Complex logical expression
is_eligible = (age >= 18) and (has_license or has_car)  # True

# =========== TRUTH TABLES ===========
print("AND Truth Table:")
print("True and True =", True and True)    # True
print("True and False =", True and False)  # False
print("False and True =", False and True)  # False
print("False and False =", False and False)# False

print("\nOR Truth Table:")
print("True or True =", True or True)      # True
print("True or False =", True or False)    # True
print("False or True =", False or True)    # True
print("False or False =", False or False)  # False

print("\nNOT Truth Table:")
print("not True =", not True)              # False
print("not False =", not False)            # True

# =========== CHAINED COMPARISONS ===========
# Python allows chaining comparisons
age = 25
print("18 <= age <= 30:", 18 <= age <= 30)  # True

# Equivalent to: (18 <= age) and (age <= 30)

# =========== IDENTITY OPERATORS ===========
# is vs ==
a = [1, 2, 3]
b = [1, 2, 3]
c = a

print("a == b:", a == b)  # True (same values)
print("a is b:", a is b)  # False (different objects)
print("a is c:", a is c)  # True (same object)

# =========== MEMBERSHIP OPERATORS ===========
colors = ['red', 'green', 'blue']
print("'red' in colors:", 'red' in colors)      # True
print("'yellow' not in colors:", 'yellow' not in colors)  # True
</pre>
</div>

<h3>String Operations</h3>
<b>Working with Text Data:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== STRING CREATION ===========
single_quotes = 'Hello'
double_quotes = "World"
triple_quotes = """Multi-line
string with
line breaks"""
escape_chars = "He said, \"Hello!\""  # Escaping quotes

# =========== STRING CONCATENATION ===========
first_name = "John"
last_name = "Doe"
full_name = first_name + " " + last_name  # "John Doe"

# Using f-strings (Python 3.6+)
age = 25
greeting = f"My name is {first_name} and I'm {age} years old"

# Old style formatting
greeting2 = "My name is %s and I'm %d years old" % (first_name, age)
greeting3 = "My name is {} and I'm {} years old".format(first_name, age)

# =========== STRING METHODS ===========
text = "  Hello World  "

print("Original:", text)
print("Lowercase:", text.lower())           # "  hello world  "
print("Uppercase:", text.upper())           # "  HELLO WORLD  "
print("Title case:", text.title())          # "  Hello World  "
print("Strip spaces:", text.strip())        # "Hello World"
print("Replace:", text.replace("World", "Python"))  # "  Hello Python  "
print("Split:", text.split())               # ['Hello', 'World']
print("Join:", "-".join(["Hello", "World"])) # "Hello-World"
print("Find 'World':", text.find("World"))  # 8
print("Count 'l':", text.count("l"))        # 3
print("Starts with 'He':", text.startswith("He"))  # False (has spaces)
print("Ends with 'ld':", text.endswith("ld"))      # False (has spaces)
print("Is alphabetic?", "Hello".isalpha())  # True
print("Is numeric?", "123".isdigit())       # True
print("Is alphanumeric?", "Hello123".isalnum()) # True

# =========== STRING INDEXING & SLICING ===========
text = "Python Programming"

print("First character:", text[0])      # 'P'
print("Last character:", text[-1])      # 'g'
print("Character at index 7:", text[7]) # 'P'

# Slicing: text[start:end:step]
print("First 6 chars:", text[0:6])      # 'Python'
print("From index 7:", text[7:])        # 'Programming'
print("Every 2nd char:", text[::2])     # 'Pto rgamn'
print("Reverse:", text[::-1])           # 'gnimmargorP nohtyP'

# =========== STRING ESCAPE SEQUENCES ===========
print("New line: Hello\\nWorld")
print("Tab: Name:\\tJohn")
print("Backslash: C:\\\\Users\\\\John")
print("Single quote: It\\'s raining")
print("Double quote: He said, \\"Hello\\"")
print("Bell: \\a (makes beep sound)")
print("Backspace: Hello\\bWorld")       # HellWorld

# Raw strings (ignore escape sequences)
path = r"C:\Users\John\Documents"  # Raw string
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: Calculator with All Operations (45 minutes)</b>
    <p>Create an advanced calculator that:</p>
    <ul>
        <li>Takes two numbers from user</li>
        <li>Performs all arithmetic operations (+, -, *, /, //, %, **)</li>
        <li>Compares numbers using all comparison operators</li>
        <li>Displays results in a formatted table</li>
        <li>Handles invalid inputs gracefully</li>
    </ul>
    
    <b>Task 2: Password Validator (45 minutes)</b>
    <p>Create a password checker that:</p>
    <ul>
        <li>Asks user to enter a password</li>
        <li>Validates: at least 8 chars, has uppercase, has lowercase, has digit</li>
        <li>Uses string methods to check conditions</li>
        <li>Gives specific feedback for each failed requirement</li>
        <li>Confirms password by asking to enter it twice</li>
    </ul>
    
    <b>Task 3: Temperature Converter with Logic (30 minutes)</b>
    <p>Create a program that:</p>
    <ul>
        <li>Converts between Celsius, Fahrenheit, and Kelvin</li>
        <li>Detects if temperature is freezing/boiling for water</li>
        <li>Suggests clothing based on temperature ranges</li>
        <li>Uses logical operators for range checking</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Build a "Grade Calculator System"</b>
    
    <b>Requirements:</b>
    <ul>
        <li>Ask for: Student name, 5 subject scores (0-100)</li>
        <li>Calculate: Average, total, percentage</li>
        <li>Determine grade: A(90+), B(80-89), C(70-79), D(60-69), F(<60)</li>
        <li>Check if student passed all subjects (>=40 each)</li>
        <li>Find highest and lowest scores</li>
        <li>Display report with all calculations</li>
    </ul>
    
    <b>Advanced Features:</b>
    <ul>
        <li>Add weight to different subjects</li>
        <li>Calculate GPA on 4.0 scale</li>
        <li>Check for honor roll (GPA >= 3.5)</li>
        <li>Export results to formatted text file</li>
        <li>Add input validation (scores between 0-100)</li>
    </ul>
    
    <b>Sample Output:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
=== GRADE REPORT ===
Student: John Doe
Subjects: Math(85), Science(92), English(78), History(88), Art(95)
Total: 438/500
Average: 87.6%
Grade: B
Status: Passed all subjects
Highest: Art (95)
Lowest: English (78)
GPA: 3.2
Honor Roll: No
    </pre>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Variable Naming:</b> Creating clear, descriptive variable names</li>
    <li><b>Mathematical Operations:</b> Using arithmetic operators correctly</li>
    <li><b>Comparison Operators:</b> Making decisions with >, <, ==, etc.</li>
    <li><b>Logical Operators:</b> Combining conditions with and, or, not</li>
    <li><b>String Manipulation:</b> Working with text data effectively</li>
    <li><b>Type Operations:</b> Understanding what operations work with each type</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Common Mistakes to Avoid:</h3>
    <ul>
        <li><b>Using = instead of ==:</b> Assignment vs comparison</li>
        <li><b>Forgetting parentheses:</b> in complex expressions</li>
        <li><b>String/number confusion:</b> "5" + 2 = Error (need conversion)</li>
        <li><b>Case sensitivity:</b> age ≠ Age ≠ AGE</li>
        <li><b>Integer division:</b> 5/2 = 2.5 but 5//2 = 2</li>
        <li><b>Off-by-one errors:</b> Remember Python indexes start at 0</li>
    </ul>
</div>
`
    },
    "1-3": {
        icon: "fa-calculator",
        title: "Mathematical & Logical Operations",
        html: `<h1>Week 1, Day 3: Mathematical & Logical Operations</h1>
<p>Today we master mathematical operations, learn operator precedence, and build complex logical expressions.</p>

<div class="analogy-box">
    <b>Analogy: The Math Chef's Kitchen 🧮</b><br/>
    
    Variables: Ingredients in bowls<br/>
    Operators: Cooking tools (mixer, oven, blender)<br/>
    Expressions: Recipe steps<br/>
    Precedence: Order of operations (chop before mixing)<br/>
    Results: The finished dish<br/>
    Debugging: Taste testing and adjusting
</div>

<h3>Operator Precedence (PEMDAS in Python)</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Python Operator Precedence Table</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Precedence</th>
            <th style="padding: 10px; text-align: left;">Operator</th>
            <th style="padding: 10px; text-align: left;">Description</th>
            <th style="padding: 10px; text-align: left;">Example</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Highest</td>
            <td style="padding: 8px; border: 1px solid #ddd;">()</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Parentheses</td>
            <td style="padding: 8px; border: 1px solid #ddd;">(2 + 3) * 4</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">2</td>
            <td style="padding: 8px; border: 1px solid #ddd;">**</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Exponentiation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2 ** 3 = 8</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">3</td>
            <td style="padding: 8px; border: 1px solid #ddd;">+x, -x</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Unary plus/minus</td>
            <td style="padding: 8px; border: 1px solid #ddd;">-5, +3</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">4</td>
            <td style="padding: 8px; border: 1px solid #ddd;">*, /, //, %</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Multiplication/Division</td>
            <td style="padding: 8px; border: 1px solid #ddd;">6 * 3 = 18</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">5</td>
            <td style="padding: 8px; border: 1px solid #ddd;">+, -</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Addition/Subtraction</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5 + 3 = 8</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">6</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><, <=, >, >=</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Comparison</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5 > 3 = True</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">7</td>
            <td style="padding: 8px; border: 1px solid #ddd;">==, !=</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Equality</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5 == 5 = True</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">8</td>
            <td style="padding: 8px; border: 1px solid #ddd;">not</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Boolean NOT</td>
            <td style="padding: 8px; border: 1px solid #ddd;">not True = False</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">9</td>
            <td style="padding: 8px; border: 1px solid #ddd;">and</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Boolean AND</td>
            <td style="padding: 8px; border: 1px solid #ddd;">True and False = False</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Lowest</td>
            <td style="padding: 8px; border: 1px solid #ddd;">or</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Boolean OR</td>
            <td style="padding: 8px; border: 1px solid #ddd;">True or False = True</td>
        </tr>
    </table>
    
    <div style="margin-top: 20px; padding: 15px; background: #fff3cd; border-radius: 5px;">
        <h5>🎯 Remember: PEMDAS with Python Twist</h5>
        <p><b>P</b>arentheses → <b>E</b>xponents → <b>M</b>ultiplication/<b>D</b>ivision → <b>A</b>ddition/<b>S</b>ubtraction</p>
        <p>Multiplication/Division have same precedence (left to right)<br>
        Addition/Subtraction have same precedence (left to right)</p>
    </div>
</div>

<h3>Complex Mathematical Expressions</h3>
<b>Practice with Operator Precedence:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== PRECEDENCE EXAMPLES ===========
print("Example 1: 2 + 3 * 4 =", 2 + 3 * 4)            # 14 (not 20!)
print("Example 2: (2 + 3) * 4 =", (2 + 3) * 4)        # 20

print("Example 3: 10 - 3 ** 2 =", 10 - 3 ** 2)        # 1 (10 - 9)
print("Example 4: (10 - 3) ** 2 =", (10 - 3) ** 2)    # 49 (7^2)

print("Example 5: 12 / 3 * 2 =", 12 / 3 * 2)          # 8.0 (left to right)
print("Example 6: 12 / (3 * 2) =", 12 / (3 * 2))      # 2.0

print("Example 7: 5 + 4 * 3 / 2 =", 5 + 4 * 3 / 2)    # 11.0
# Step-by-step: 4*3=12 → 12/2=6 → 5+6=11

# =========== COMPLEX REAL-WORLD EXAMPLES ===========
# Calculate area of a circle
radius = 5
pi = 3.14159
area = pi * radius ** 2
print(f"Area of circle with radius {radius}: {area:.2f}")

# Calculate compound interest
principal = 1000
rate = 0.05  # 5%
time = 3     # years
amount = principal * (1 + rate) ** time
print(f"Compound interest after {time} years: \\\${amount:.2f}")

# Convert Fahrenheit to Celsius
fahrenheit = 98.6
celsius = (fahrenheit - 32) * 5 / 9
print(f"{fahrenheit}°F = {celsius:.1f}°C")

# Calculate BMI (Body Mass Index)
weight_kg = 70
height_m = 1.75
bmi = weight_kg / (height_m ** 2)
print(f"BMI: {bmi:.1f}")

# =========== USING MATH MODULE ===========
import math

# Quadratic formula: x = [-b ± sqrt(b² - 4ac)] / 2a
a = 1
b = -5
c = 6

discriminant = b ** 2 - 4 * a * c
if discriminant >= 0:
    x1 = (-b + math.sqrt(discriminant)) / (2 * a)
    x2 = (-b - math.sqrt(discriminant)) / (2 * a)
    print(f"Quadratic roots: x1 = {x1}, x2 = {x2}")
else:
    print("No real roots")

# Trigonometric calculations
angle_degrees = 45
angle_radians = math.radians(angle_degrees)
print(f"sin({angle_degrees}°) = {math.sin(angle_radians):.3f}")
print(f"cos({angle_degrees}°) = {math.cos(angle_radians):.3f}")
print(f"tan({angle_degrees}°) = {math.tan(angle_radians):.3f}")

# =========== ROUNDING AND PRECISION ===========
price = 19.987654321

print("Original:", price)
print("Round to 2 decimals:", round(price, 2))      # 19.99
print("Round to integer:", round(price))           # 20
print("Floor (round down):", math.floor(price))    # 19
print("Ceil (round up):", math.ceil(price))        # 20
print("Truncate:", math.trunc(price))              # 19

# Formatting with f-strings
print(f"Price: \\\${price:.2f}")      # $19.99
print(f"Price: \\\${price:.0f}")      # $20
print(f"Percentage: {price:.1f}%") # 20.0%

# =========== WORKING WITH LARGE NUMBERS ===========
# Scientific notation
avogadro = 6.02214076e23  # 6.02214076 × 10^23
print(f"Avogadro's number: {avogadro:.2e}")

# Underscores for readability (Python 3.6+)
million = 1_000_000
large_number = 123_456_789.123_456
print(f"One million: {million}")
print(f"Large number: {large_number:,.2f}")

# =========== MODULO OPERATOR USES ===========
# Check if number is even or odd
number = 7
if number % 2 == 0:
    print(f"{number} is even")
else:
    print(f"{number} is odd")

# Convert seconds to hours, minutes, seconds
total_seconds = 3665
hours = total_seconds // 3600
minutes = (total_seconds % 3600) // 60
seconds = total_seconds % 60
print(f"{total_seconds} seconds = {hours}h {minutes}m {seconds}s")

# Check divisibility
for i in range(1, 21):
    if i % 3 == 0 and i % 5 == 0:
        print(f"{i}: FizzBuzz")
    elif i % 3 == 0:
        print(f"{i}: Fizz")
    elif i % 5 == 0:
        print(f"{i}: Buzz")
    else:
        print(i)
</pre>
</div>

<h3>Logical Operations in Depth</h3>
<b>Mastering Boolean Logic:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== BOOLEAN BASICS ===========
# All Python values have truthiness
true_values = [True, 1, 3.14, "hello", [1, 2], {"key": "value"}]
false_values = [False, 0, 0.0, "", [], {}, None]

print("Truthy values:")
for val in true_values:
    print(f"  bool({repr(val)}) = {bool(val)}")

print("\nFalsy values:")
for val in false_values:
    print(f"  bool({repr(val)}) = {bool(val)}")

# =========== COMPLEX LOGICAL EXPRESSIONS ===========
age = 25
has_license = True
has_car = False
has_money = True
is_weekend = False

# Driving eligibility
can_drive = (age >= 18) and has_license
print(f"Can drive: {can_drive}")

# Can go to movies
can_watch_movie = (age >= 13) and (has_money or (is_weekend and not has_money))
print(f"Can watch movie: {can_watch_movie}")

# Compound conditions
if (age >= 18 and has_license) or (age >= 21 and has_car):
    print("Can rent a car")
else:
    print("Cannot rent a car")

# =========== SHORT-CIRCUIT EVALUATION ===========
# Python stops evaluating as soon as result is known

def expensive_operation():
    print("Running expensive operation...")
    return True

# With short-circuit, expensive_operation() never runs
result = False and expensive_operation()  # False
print(f"Result: {result}")

# This one runs it
result = True and expensive_operation()  # Runs and prints
print(f"Result: {result}")

# Practical use: avoid errors
name = ""
# This is safe because of short-circuit
if name and name[0].isupper():
    print("Name starts with uppercase")
else:
    print("Name is empty or doesn't start with uppercase")

# =========== DE MORGAN'S LAWS ===========
# not (A and B) == (not A) or (not B)
# not (A or B) == (not A) and (not B)

A = True
B = False

print("\nDe Morgan's Laws:")
print(f"not ({A} and {B}) = {not (A and B)}")
print(f"(not {A}) or (not {B}) = {(not A) or (not B)}")
print("Are they equal?", not (A and B) == ((not A) or (not B)))

print(f"\nnot ({A} or {B}) = {not (A or B)}")
print(f"(not {A}) and (not {B}) = {(not A) and (not B)}")
print("Are they equal?", not (A or B) == ((not A) and (not B)))

# =========== BOOLEAN ALGEBRA PRACTICE ===========
x = 10
y = 5
z = 7

# Expression 1
expr1 = (x > y) and (y < z) or (x == z)
print(f"\nExpression 1: ({x} > {y}) and ({y} < {z}) or ({x} == {z})")
print(f"Result: {expr1}")

# Expression 2
expr2 = not (x <= y) and (y != z)
print(f"\nExpression 2: not ({x} <= {y}) and ({y} != {z})")
print(f"Result: {expr2}")

# Expression 3
expr3 = (x > y) and not (y > z) or (z == x)
print(f"\nExpression 3: ({x} > {y}) and not ({y} > {z}) or ({z} == {x})")
print(f"Result: {expr3}")

# =========== REAL-WORLD LOGICAL PROBLEMS ===========
# Password validation
password = "SecurePass123"
has_upper = any(c.isupper() for c in password)
has_lower = any(c.islower() for c in password)
has_digit = any(c.isdigit() for c in password)
has_special = any(not c.isalnum() for c in password)

is_valid = (len(password) >= 8) and has_upper and has_lower and has_digit
print(f"\nPassword '{password}' is valid: {is_valid}")

# Age group classification
age = 35
is_child = age < 13
is_teen = 13 <= age < 20
is_adult = 20 <= age < 65
is_senior = age >= 65

print(f"\nAge {age}:")
print(f"  Child: {is_child}")
print(f"  Teen: {is_teen}")
print(f"  Adult: {is_adult}")
print(f"  Senior: {is_senior}")

# Shipping eligibility
order_amount = 150
is_member = True
has_coupon = False

free_shipping = (order_amount >= 100) or (is_member and order_amount >= 50)
print(f"\nFree shipping eligible: {free_shipping}")
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: Scientific Calculator (60 minutes)</b>
    <p>Create a scientific calculator with:</p>
    <ul>
        <li>Basic operations (+, -, *, /)</li>
        <li>Advanced operations (^, √, %, !)</li>
        <li>Trigonometric functions (sin, cos, tan)</li>
        <li>Logarithmic functions (log, ln)</li>
        <li>Memory functions (M+, M-, MR, MC)</li>
        <li>Parentheses support for complex expressions</li>
    </ul>
    
    <b>Task 2: Loan Calculator (45 minutes)</b>
    <p>Create a loan calculator that:</p>
    <ul>
        <li>Calculates monthly payments</li>
        <li>Shows total interest paid</li>
        <li>Creates amortization schedule</li>
        <li>Compares different loan terms</li>
        <li>Handles compound interest calculations</li>
    </ul>
    
    <b>Task 3: Logic Puzzle Solver (45 minutes)</b>
    <p>Create a program that solves logic puzzles:</p>
    <ul>
        <li>Truth table generator for any logical expression</li>
        <li>Check if two expressions are logically equivalent</li>
        <li>Simplify boolean expressions</li>
        <li>Solve basic logic puzzles (who owns the fish?)</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Build a "Financial Calculator Suite"</b>
    
    <b>Requirements:</b>
    <ul>
        <li><b>Mortgage Calculator:</b> Calculate monthly payments with taxes and insurance</li>
        <li><b>Investment Calculator:</b> Future value with compound interest</li>
        <li><b>Retirement Planner:</b> How much to save monthly for retirement goal</li>
        <li><b>Debt Payoff Calculator:</b> Snowball vs avalanche methods</li>
        <li><b>Currency Converter:</b> With live exchange rates (use fixed rates)</li>
    </ul>
    
    <b>Formulas to Implement:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
1. Monthly Mortgage Payment:
   M = P[r(1+r)^n]/[(1+r)^n-1]
   
2. Compound Interest:
   A = P(1 + r/n)^(nt)
   
3. Future Value of Annuity:
   FV = PMT * [((1 + r)^n - 1) / r]
   
4. Loan Payoff Time:
   n = -log(1 - (r * P) / PMT) / log(1 + r)
    </pre>
    
    <b>Features:</b>
    <ul>
        <li>Graphical output using ASCII or simple text graphs</li>
        <li>Save calculations to file</li>
        <li>Compare multiple scenarios</li>
        <li>Input validation and error handling</li>
        <li>Unit conversion (years to months, etc.)</li>
    </ul>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Operator Precedence:</b> Understanding PEMDAS in Python</li>
    <li><b>Complex Expressions:</b> Building and evaluating multi-operation expressions</li>
    <li><b>Boolean Logic:</b> Mastering and, or, not operations</li>
    <li><b>Short-Circuit Evaluation:</b> How Python optimizes logical expressions</li>
    <li><b>Real-world Math:</b> Applying operations to practical problems</li>
    <li><b>Error Prevention:</b> Using parentheses to ensure correct evaluation</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Math & Logic Best Practices:</h3>
    <ul>
        <li><b>Use Parentheses Liberally:</b> Makes intent clear, prevents errors</li>
        <li><b>Break Complex Expressions:</b> Use intermediate variables for readability</li>
        <li><b>Test Edge Cases:</b> What happens with zero, negative numbers, large values?</li>
        <li><b>Document Formulas:</b> Comment complex mathematical operations</li>
        <li><b>Check Division by Zero:</b> Always validate before division operations</li>
        <li><b>Use Math Module:</b> Don't reinvent trigonometric/logarithmic functions</li>
        <li><b>Consider Precision:</b> Floating-point math can have rounding errors</li>
    </ul>
</div>
`
    },
    "1-4": {
        "icon": "fa-terminal",
        "title": "Basic Input/Output in Python",
        "html": "<h1>Week 1, Day 4: Basic Input/Output in Python</h1>\n<p>Today, we'll make our programs interactive! We'll learn how to take user input and display output in Python.</p>\n\n<div class=\"analogy-box\">\n    <b>Analogy: Conversation with a Computer 🗣️🤖</b><br/>\n    <ul style=\"margin-top: 10px;\">\n        <li><b>Input</b> = You asking the computer a question</li>\n        <li><b>Processing</b> = The computer thinking</li>\n        <li><b>Output</b> = The computer answering</li>\n        <li><b>Program</b> = A script for the conversation</li>\n    </ul>\n</div>\n\n<h3>Key Topics</h3>\n<ul>\n    <li>The <code>print()</code> function</li>\n    <li>The <code>input()</code> function</li>\n    <li>String formatting (f-strings)</li>\n    <li>Type conversion</li>\n    <li>Building a simple interactive program</li>\n</ul>\n\n<h3>In-Depth Explanation</h3>\n\n<b>a. Output: The <code>print()</code> Function</b><br/>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# Basic print\nprint(\"Hello, World!\")\n\n# Print multiple items\nprint(\"Name:\", \"Alice\", \"Age:\", 25)\n\n# Print with separator\nprint(\"Python\", \"Java\", \"C++\", sep=\" | \")\n\n# Print without newline\nprint(\"Loading...\", end=\"\")\nprint(\"Done!\")\n    </pre>\n    <small>- <code>print()</code> displays text in the console</small><br/>\n    <small>- By default, adds a newline at the end</small><br/>\n    <small>- Can separate items with <code>sep</code></small><br/>\n    <small>- Can change ending with <code>end</code></small><br/>\n    <small><b>Analogy:</b> The computer speaking to you</small>\n</div>\n\n<b>b. Input: The <code>input()</code> Function</b><br/>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# Basic input\nname = input(\"What's your name? \")\nprint(\"Hello,\", name)\n\n# Input without prompt\nage = input()\n    </pre>\n    <small>- <code>input()</code> pauses the program and waits for user typing</small><br/>\n    <small>- Always returns a <b>string</b>, even if numbers are entered</small><br/>\n    <small>- Prompt message is optional but helpful</small><br/>\n    <small><b>Analogy:</b> You asking the computer to listen</small>\n</div>\n\n<b>c. String Formatting: Making Pretty Output</b><br/>\n\n<b>1. f-strings (Modern Python)</b>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\nname = \"Alice\"\nage = 25\nheight = 165.5\n\n# f-string example\nprint(f\"{name} is {age} years old.\")\nprint(f\"Height: {height:.2f} cm\")  # Format to 2 decimal places\n\n# Calculations in f-strings\nprint(f\"Next year, {name} will be {age + 1}.\")\n    </pre>\n</div>\n\n<b>2. Other formatting methods (for reference)</b>\n<div style=\"background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# Old style: % formatting\nprint(\"%s is %d years old.\" % (name, age))\n\n# .format() method\nprint(\"{} is {} years old.\".format(name, age))\nprint(\"{1} is {0} years old.\".format(age, name))  # Positional\n    </pre>\n    <small><b>Recommendation:</b> Use f-strings for new code!</small>\n</div>\n\n<b>d. Type Conversion: Making Input Useful</b><br/>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# Input always gives strings\nage_str = input(\"Enter your age: \")  # \"25\" (string)\nprint(type(age_str))  # <class 'str'>\n\n# Convert to integer\nage_int = int(age_str)\nprint(type(age_int))  # <class 'int'>\n\n# Convert to float\nheight_str = input(\"Enter height: \")  # \"165.5\"\nheight_float = float(height_str)\n\n# Convert to string (if needed)\nnum = 42\nnum_str = str(num)\n    </pre>\n    <small>- <code>int()</code> converts to integer</small><br/>\n    <small>- <code>float()</code> converts to decimal number</small><br/>\n    <small>- <code>str()</code> converts to string</small><br/>\n    <small>- <code>bool()</code> converts to boolean</small><br/>\n    <small><b>Warning:</b> Conversion fails if value can't be converted!</small>\n</div>\n\n<b>e. Handling Conversion Errors</b>\n<div style=\"background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# This will crash!\nage = int(input(\"Enter age: \"))  # User types \"twenty\"\n# ValueError: invalid literal for int()\n    </pre>\n</div>\n\n<div style=\"background-color: #e6ffe6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# Safer approach\ntry:\n    age = int(input(\"Enter age: \"))\n    print(f\"Age: {age}\")\nexcept ValueError:\n    print(\"Please enter a valid number!\")\n    </pre>\n    <small><b>Note:</b> We'll learn more about error handling in Week 8</small>\n</div>\n\n<hr/>\n\n<h3>Hands-On Exercise: Personal Information Collector</h3>\n\n<b>Task:</b> Create a program that collects personal information and displays it nicely.</b><br/><br/>\n\n<b>Requirements:</b>\n<div style=\"background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    1. Ask for user's name, age, city, and favorite color\n    2. Use appropriate input prompts\n    3. Convert age to integer\n    4. Display all information in a formatted way\n    5. Calculate and display the year they were born (assuming current year is 2024)\n</div>\n\n<b>Example Interaction:</b>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px; font-family: monospace;\">\nWhat is your name? Alice<br/>\nHow old are you? 25<br/>\nWhere do you live? New York<br/>\nWhat's your favorite color? Blue<br/><br/>\n\n=== USER PROFILE ===<br/>\nName: Alice<br/>\nAge: 25<br/>\nLocation: New York<br/>\nFavorite Color: Blue<br/>\nYear of Birth: 1999<br/>\n===================\n</div>\n\n<b>Step-by-Step Guide:</b>\n<div style=\"background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <b>Step 1:</b> Ask for name using <code>input()</code><br/>\n    <b>Step 2:</b> Ask for age and convert to <code>int()</code><br/>\n    <b>Step 3:</b> Ask for city and favorite color<br/>\n    <b>Step 4:</b> Calculate birth year (2024 - age)<br/>\n    <b>Step 5:</b> Use f-strings to create the formatted output<br/>\n    <b>Step 6:</b> Add a border using <code>===</code> characters\n</div>\n\n<hr/>\n\n<h3>Advanced Challenge: Temperature Converter</h3>\n\n<b>Task:</b> Create a Celsius to Fahrenheit converter</b><br/><br/>\n\n<b>Formula:</b> <code>°F = (°C × 9/5) + 32</code>\n\n<div style=\"background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <b>Requirements:</b><br/>\n    1. Ask user for temperature in Celsius<br/>\n    2. Convert input to float<br/>\n    3. Calculate Fahrenheit using the formula<br/>\n    4. Display both temperatures with 1 decimal place<br/>\n    5. Add a comment about the weather (e.g., \"Freezing!\" if below 0°C)\n</div>\n\n<b>Example Output:</b>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px; font-family: monospace;\">\nEnter temperature in Celsius: 25.5<br/>\n25.5°C = 77.9°F<br/>\nNice weather!\n</div>\n\n<hr/>\n\n<h3>Common Mistakes</h3>\n\n<b>Mistake 1: Forgetting to convert input</b>\n<div style=\"background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# WRONG - This concatenates strings!\nage = input(\"How old are you? \")\nprint(\"Next year you'll be \" + (age + 1))  # Error!\n\n# RIGHT - Convert first\nage = int(input(\"How old are you? \"))\nprint(f\"Next year you'll be {age + 1}\")\n    </pre>\n</div>\n\n<b>Mistake 2: Using wrong quotes in f-strings</b>\n<div style=\"background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# WRONG - Single quotes inside single quotes\nname = 'Alice'\nprint(f'{name}'s age is 25')  # Syntax error!\n\n# RIGHT - Escape the quote or use different quotes\nprint(f\"{name}'s age is 25\")  # Double quotes outside\nprint(f'{name}\\'s age is 25')  # Escape character\n    </pre>\n</div>\n\n<b>Mistake 3: Not providing clear prompts</b>\n<div style=\"background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <pre>\n# WRONG - User doesn't know what to enter\nx = input()  # What should I type?\n\n# RIGHT - Clear prompt\nx = input(\"Enter your age: \")\n    </pre>\n</div>\n\n<hr/>\n\n<h3>Practical Application: Inventory System Start</h3>\n\n<b>Task:</b> Begin your inventory system from the Practical Blue section</b><br/><br/>\n\n<div style=\"background-color: #e6ffe6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <b>From the document:</b><br/>\n    <i>\"Write a script where the user types in an item name and price, and the computer prints back: 'Item [Name] has been logged at $[Price].'\"</i>\n</div>\n\n<b>Your Implementation:</b>\n<div style=\"background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    1. Ask for item name (string)<br/>\n    2. Ask for item price (convert to float)<br/>\n    3. Use f-string to display the message<br/>\n    4. Format price to 2 decimal places<br/>\n    5. Add today's date (hard-coded for now, e.g., \"2024-01-29\")\n</div>\n\n<b>Example Output:</b>\n<div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px; font-family: monospace;\">\nEnter item name: Laptop<br/>\nEnter item price: 999.99<br/><br/>\n[2024-01-29] Item 'Laptop' has been logged at $999.99\n</div>\n\n<hr/>\n\n<div class=\"assignment-box\">\n    <h4>Assignment: Interactive Quiz Program</h4>\n    \n    <p>Create a simple 3-question quiz that scores the user.</p>\n    \n    <div style=\"background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n        <b>Requirements:</b><br/>\n        1. Ask 3 multiple-choice questions<br/>\n        2. Track correct answers<br/>\n        3. Display final score as fraction and percentage<br/>\n        4. Give different feedback based on score:<br/>\n           &nbsp;&nbsp;- 100%: \"Perfect! 🎉\"<br/>\n           &nbsp;&nbsp;- 67-99%: \"Good job! 👍\"<br/>\n           &nbsp;&nbsp;- 0-66%: \"Keep learning! 📚\"<br/>\n        5. Use clear input prompts and formatted output\n    </div>\n    \n    <b>Example Question:</b>\n    <div style=\"background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px; font-family: monospace;\">\nWhat is the capital of France?<br/>\nA) London<br/>\nB) Berlin<br/>\nC) Paris<br/>\nD) Madrid<br/>\nYour answer: C<br/>\nCorrect!\n    </div>\n    \n    <b>Bonus Challenges:</b>\n    <div style=\"background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n        1. Add a fourth question where the user types the answer (not multiple choice)<br/>\n        2. Make the questions variable (store in lists)<br/>\n        3. Add a \"play again\" option at the end<br/>\n        4. Keep a high score between sessions (store in a file - we'll learn this later!)\n    </div>\n</div>\n\n<hr/>\n\n<h3>Quick Reference</h3>\n\n<div style=\"background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;\">\n    <b>Essential Functions:</b><br/>\n    - <code>print(value)</code> - Output to console<br/>\n    - <code>input(prompt)</code> - Get user input<br/>\n    - <code>int(string)</code> - Convert to integer<br/>\n    - <code>float(string)</code> - Convert to decimal<br/>\n    - <code>str(value)</code> - Convert to string<br/><br/>\n    \n    <b>f-string Formatting:</b><br/>\n    - <code>f\"Text {variable}\"</code> - Basic insertion<br/>\n    - <code>f\"{number:.2f}\"</code> - 2 decimal places<br/>\n    - <code>f\"{number:10d}\"</code> - 10-character width<br/>\n    - <code>f\"{percentage:.1%}\"</code> - Percentage format\n</div>\n\n<div style=\"background-color: #e6ffe6; padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center;\">\n    <b>Remember:</b> Every interactive program follows the pattern:<br/>\n    <b>INPUT → PROCESS → OUTPUT</b><br/>\n    Today you learned how to do the first and last steps!\n</div>"
    },

    // WEEK 2: CONTROL FLOW
        "2-1": {
        icon: "fa-code-branch",
        title: "If/Else Statements & Decision Making",
        html: `<h1>Week 2, Day 1: If/Else Statements & Decision Making</h1>
<p>Today we learn how to make programs that can make decisions and choose different paths based on conditions.</p>

<div class="analogy-box">
    <b>Analogy: The Smart Traffic Light 🚦</b><br/>
    
    Condition: Is there traffic on side road?<br/>
    If statement: If yes, change light to green<br/>
    Else statement: Otherwise, keep main road green<br/>
    Elif: If emergency vehicle detected, give priority<br/>
    Nested if: Check multiple conditions at intersection<br/>
    Program flow: The sequence of light changes
</div>

<h3>Understanding Conditional Logic</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Decision Making in Programming</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🔵 Simple Decisions</h5>
            <ul>
                <li><strong>Binary Choice:</strong> Yes/No, True/False</li>
                <li><strong>Syntax:</strong> if condition:</li>
                <li><strong>Flow:</strong> Execute block if condition is True</li>
                <li><strong>Example:</strong> If age >= 18, allow access</li>
                <li><strong>Use Case:</strong> Simple validations</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🟢 Complex Decisions</h5>
            <ul>
                <li><strong>Multiple Choices:</strong> If/elif/else chain</li>
                <li><strong>Nested Conditions:</strong> Conditions within conditions</li>
                <li><strong>Logical Operators:</strong> and, or, not combinations</li>
                <li><strong>Ternary Operator:</strong> One-line conditional</li>
                <li><strong>Use Case:</strong> Grading systems, menus</li>
            </ul>
        </div>
    </div>
</div>

<h3>If/Else Statement Fundamentals</h3>
<b>Basic Conditional Structures:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== BASIC IF STATEMENT ===========
age = 20

# Simple if
if age >= 18:
    print("You are an adult")

# Indentation is CRITICAL in Python
# This won't work:
# if age >= 18:
# print("You are an adult")  # IndentationError!

# =========== IF-ELSE STATEMENT ===========
temperature = 25

if temperature > 30:
    print("It's hot outside")
else:
    print("It's not hot outside")

# =========== IF-ELIF-ELSE CHAIN ===========
score = 85

if score >= 90:
    grade = "A"
elif score >= 80:
    grade = "B"
elif score >= 70:
    grade = "C"
elif score >= 60:
    grade = "D"
else:
    grade = "F"

print(f"Score: {score}, Grade: {grade}")

# =========== NESTED IF STATEMENTS ===========
age = 25
has_license = True

if age >= 18:
    if has_license:
        print("You can drive a car")
    else:
        print("You need a license to drive")
else:
    print("You're too young to drive")

# Equivalent with logical operators
if age >= 18 and has_license:
    print("You can drive a car")
elif age >= 18:
    print("You need a license to drive")
else:
    print("You're too young to drive")

# =========== CONDITIONAL EXPRESSIONS (TERNARY) ===========
# Traditional way
age = 20
if age >= 18:
    status = "adult"
else:
    status = "minor"

# Ternary operator (one-liner)
status = "adult" if age >= 18 else "minor"
print(f"Status: {status}")

# More complex ternary
score = 75
result = "Pass" if score >= 50 else "Fail"
print(f"Result: {result}")

# Nested ternary (use sparingly - can be hard to read)
age = 25
has_license = True
can_drive = "Yes" if age >= 18 else ("Maybe with permit" if age >= 16 else "No")
print(f"Can drive: {can_drive}")

# =========== MULTIPLE CONDITIONS ===========
# Using AND
age = 25
income = 50000

if age >= 21 and income >= 30000:
    print("Eligible for loan")
else:
    print("Not eligible for loan")

# Using OR
has_passport = False
has_id_card = True

if has_passport or has_id_card:
    print("Identity verified")
else:
    print("Need identification")

# Using NOT
is_weekend = False

if not is_weekend:
    print("It's a weekday")
else:
    print("It's the weekend!")

# Combined conditions
age = 25
has_ticket = True
has_id = True

if (age >= 18 or has_parent) and has_ticket and has_id:
    print("Allowed to enter")
else:
    print("Cannot enter")

# =========== TRUTHY/FALSY VALUES IN CONDITIONS ===========
# These are all False in conditions:
# False, None, 0, 0.0, '', [], {}, ()

name = ""
if name:  # Empty string is False
    print(f"Hello, {name}")
else:
    print("Name is empty")

# Check if list has items
shopping_list = ["milk", "eggs"]
if shopping_list:
    print(f"You have {len(shopping_list)} items to buy")
else:
    print("Your shopping list is empty")

# =========== COMPARING DIFFERENT TYPES ===========
# String vs integer
age_input = "25"
age = int(age_input)

if age >= 18:
    print("Adult")

# Case-insensitive string comparison
user_input = "YES"
if user_input.lower() == "yes":
    print("User agreed")

# =========== IN OPERATOR ===========
fruits = ["apple", "banana", "orange"]

if "apple" in fruits:
    print("We have apples!")

if "grape" not in fruits:
    print("We need grapes")

# Check substring
email = "user@example.com"
if "@" in email and "." in email:
    print("Valid email format")

# =========== COMPARISON CHAINING ===========
# Python allows chaining comparisons
age = 25

if 18 <= age <= 65:
    print("Working age")

# Equivalent to: if age >= 18 and age <= 65

temperature = 22
if 20 <= temperature <= 25:
    print("Comfortable temperature")

# =========== REAL-WORLD EXAMPLES ===========
# 1. Login System
username = input("Enter username: ")
password = input("Enter password: ")

correct_username = "admin"
correct_password = "secret123"

if username == correct_username and password == correct_password:
    print("Login successful!")
else:
    print("Invalid credentials")

# 2. Discount Calculator
purchase_amount = float(input("Enter purchase amount: $"))

if purchase_amount >= 100:
    discount = 0.20
elif purchase_amount >= 50:
    discount = 0.10
elif purchase_amount >= 25:
    discount = 0.05
else:
    discount = 0

final_amount = purchase_amount * (1 - discount)
print(f"Original: \\\${purchase_amount:.2f}")
print(f"Discount: {discount*100:.0f}%")
print(f"Final: \\\${final_amount:.2f}")

# 3. Weather Advisory
temperature = float(input("Enter temperature in °C: "))
is_raining = input("Is it raining? (yes/no): ").lower() == "yes"

if temperature > 35:
    print("Heat warning! Stay indoors")
elif temperature < 0:
    print("Freezing temperatures! Dress warmly")
    if is_raining:
        print("Beware of freezing rain!")
elif 25 <= temperature <= 35:
    print("Warm day, perfect for outdoor activities")
    if is_raining:
        print("Take an umbrella")
else:
    print("Mild weather today")
    if is_raining:
        print("Light rain expected")

# 4. Grade Calculator with +/- 
score = 92

if score >= 97:
    grade = "A+"
elif score >= 93:
    grade = "A"
elif score >= 90:
    grade = "A-"
elif score >= 87:
    grade = "B+"
elif score >= 83:
    grade = "B"
elif score >= 80:
    grade = "B-"
elif score >= 77:
    grade = "C+"
elif score >= 73:
    grade = "C"
elif score >= 70:
    grade = "C-"
elif score >= 67:
    grade = "D+"
elif score >= 63:
    grade = "D"
elif score >= 60:
    grade = "D-"
else:
    grade = "F"

print(f"Score: {score}, Grade: {grade}")

# 5. Shipping Calculator
weight = float(input("Enter package weight (kg): "))
destination = input("Enter destination (local/national/international): ").lower()

if destination == "local":
    base_rate = 5
    if weight > 5:
        base_rate += (weight - 5) * 0.5
elif destination == "national":
    base_rate = 10
    if weight > 5:
        base_rate += (weight - 5) * 1
else:  # international
    base_rate = 25
    if weight > 5:
        base_rate += (weight - 5) * 2

print(f"Shipping cost: \\\${base_rate:.2f}")

# 6. Age Group Classifier
age = int(input("Enter age: "))

if age < 1:
    category = "Infant"
elif age < 3:
    category = "Toddler"
elif age < 5:
    category = "Preschooler"
elif age < 12:
    category = "Child"
elif age < 19:
    category = "Teenager"
elif age < 65:
    category = "Adult"
else:
    category = "Senior Citizen"

print(f"Age {age}: {category}")

# =========== COMMON PITFALLS ===========
# 1. Using = instead of ==
x = 5
if x == 5:  # Correct
    print("x is 5")

# if x = 5:  # ERROR! This is assignment, not comparison
#     print("x is 5")

# 2. Forgetting colon
# if x > 0  # ERROR: missing colon
#     print("Positive")

# 3. Incorrect indentation
x = 10
if x > 0:
    print("Positive")
    print("This is still inside the if block")
print("This is outside the if block")  # Always executes

# 4. Chained if without elif
score = 85

# Inefficient way
if score >= 90:
    grade = "A"
if score >= 80:  # This also runs even if first if was true!
    grade = "B"
if score >= 70:
    grade = "C"

# Efficient way with elif
if score >= 90:
    grade = "A"
elif score >= 80:  # Only runs if first condition was false
    grade = "B"
elif score >= 70:
    grade = "C"

# 5. Overly complex conditions
# Hard to read
if (age >= 18 and has_license) or (age >= 16 and has_permit and has_parent):
    print("Can drive")

# Better: Use variables for clarity
can_drive_with_license = age >= 18 and has_license
can_drive_with_permit = age >= 16 and has_permit and has_parent

if can_drive_with_license or can_drive_with_permit:
    print("Can drive")
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: Smart Vending Machine (60 minutes)</b>
    <p>Create a vending machine program that:</p>
    <ul>
        <li>Displays available items with prices</li>
        <li>Takes user selection and payment</li>
        <li>Checks if enough money was inserted</li>
        <li>Calculates change (if any)</li>
        <li>Checks item availability</li>
        <li>Handles invalid selections and insufficient funds</li>
    </ul>
    
    <b>Task 2: Health Risk Assessment (45 minutes)</b>
    <p>Create a health assessment program that:</p>
    <ul>
        <li>Takes user's age, weight, height, smoking status</li>
        <li>Calculates BMI and categorizes it</li>
        <li>Assesses risk based on multiple factors</li>
        <li>Provides personalized health recommendations</li>
        <li>Uses nested conditions for complex assessments</li>
    </ul>
    
    <b>Task 3: Smart Home Controller (45 minutes)</b>
    <p>Create a home automation program that:</p>
    <ul>
        <li>Controls lights based on time and occupancy</li>
        <li>Adjusts thermostat based on temperature and time</li>
        <li>Manages security system (armed/disarmed states)</li>
        <li>Provides energy saving recommendations</li>
        <li>Simulates different scenarios</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Build an "Intelligent Exam Grading System"</b>
    
    <b>Requirements:</b>
    <ul>
        <li><b>Multiple Question Types:</b> MCQs, true/false, short answer</li>
        <li><b>Weighted Grading:</b> Different weights for different sections</li>
        <li><b>Grade Calculation:</b> With +/- grading system</li>
        <li><b>Performance Analysis:</b> Identify weak areas</li>
        <li><b>Recommendations:</b> Study suggestions based on performance</li>
    </ul>
    
    <b>Features to Implement:</b>
    <ul>
        <li>Input validation for all scores (0-100)</li>
        <li>Multiple grading schemes (curved, absolute)</li>
        <li>Statistical analysis (mean, median, standard deviation)</li>
        <li>Letter grade with plus/minus system</li>
        <li>Pass/fail determination with conditional logic</li>
        <li>Honor roll qualification check</li>
        <li>Grade improvement suggestions</li>
    </ul>
    
    <b>Sample Logic:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
if average >= 90:
    if highest_score == 100 and lowest_score >= 80:
        grade = "A+ (Excellent)"
    else:
        grade = "A (Very Good)"
elif average >= 80:
    if improved_from_last_test:
        grade = "B+ (Good improvement)"
    else:
        grade = "B (Good)"
# ... and so on
    </pre>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Conditional Logic:</b> Making decisions based on conditions</li>
    <li><b>If/Else Structure:</b> Basic decision-making syntax</li>
    <li><b>Elif Chains:</b> Handling multiple exclusive conditions</li>
    <li><b>Nested Conditions:</b> Decisions within decisions</li>
    <li><b>Ternary Operator:</b> Concise conditional expressions</li>
    <li><b>Truthy/Falsy Values:</b> Understanding what evaluates to True/False</li>
    <li><b>Logical Operators:</b> Combining conditions with and, or, not</li>
    <li><b>Common Pitfalls:</b> Avoiding typical if/else mistakes</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 If/Else Best Practices:</h3>
    <ul>
        <li><b>Use elif for exclusive conditions:</b> Don't chain separate if statements</li>
        <li><b>Keep conditions simple:</b> Break complex conditions into variables</li>
        <li><b>Always include else:</b> Handle unexpected cases</li>
        <li><b>Order conditions logically:</b> Most specific first, or most likely first</li>
        <li><b>Avoid deep nesting:</b> If nesting goes beyond 3 levels, refactor</li>
        <li><b>Use parentheses for clarity:</b> Especially with complex logical expressions</li>
        <li><b>Test edge cases:</b> What happens at boundary values?</li>
        <li><b>Comment complex logic:</b> Explain why certain conditions exist</li>
    </ul>
</div>
`
    }, 
        "2-2": {
        icon: "fa-sitemap",
        title: "Nested Conditionals & Complex Logic",
        html: `<h1>Week 2, Day 2: Nested Conditionals & Complex Logic</h1>
<p>Today we dive deeper into complex decision-making with nested conditionals, pattern matching, and advanced logical structures.</p>

<div class="analogy-box">
    <b>Analogy: Airport Security Checkpoints ✈️</b><br/>
    
    Outer if: Is passenger at airport?<br/>
    Nested if: Has boarding pass?<br/>
    Deep nested: Passport valid?<br/>
    Elif chain: First class/business/economy?<br/>
    Final else: Security clearance denied<br/>
    Logical flow: Sequential security checks
</div>

<h3>Mastering Nested Conditionals</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 When to Use Nested Conditionals</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; margin-top: 15px;">
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>✅ Appropriate Use Cases</h5>
            <ul>
                <li>Multi-level security checks</li>
                <li>Hierarchical decision trees</li>
                <li>Complex business rules</li>
                <li>Step-by-step validation</li>
                <li>Workflow processes</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>⚠️ When to Avoid</h5>
            <ul>
                <li>More than 3 nesting levels</li>
                <li>Simple True/False checks</li>
                <li>Independent conditions</li>
                <li>Can use logical operators</li>
                <li>Switch to functions</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🔄 Alternatives</h5>
            <ul>
                <li>Logical operators (and/or)</li>
                <li>Separate functions</li>
                <li>Lookup tables</li>
                <li>State machines</li>
                <li>Pattern matching</li>
            </ul>
        </div>
    </div>
</div>

<h3>Nested Conditional Examples</h3>
<b>From Simple to Complex Nesting:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== BASIC NESTED IF ===========
# Two-level nesting
age = 25
has_license = True

if age >= 18:
    if has_license:
        print("Can drive independently")
    else:
        print("Need to get a license first")
else:
    print("Too young to drive")

# =========== THREE-LEVEL NESTING ===========
# User authentication system
username = "admin"
password = "secret123"
two_factor_enabled = True
two_factor_code = "123456"

if username == "admin":
    if password == "secret123":
        if two_factor_enabled:
            if two_factor_code == "123456":
                print("Access granted to admin panel")
            else:
                print("Invalid 2FA code")
        else:
            print("2FA not enabled - access denied")
    else:
        print("Invalid password")
else:
    print("Invalid username")

# =========== NESTED IF WITH ELIF ===========
# Grading system with extra credit
score = 85
extra_credit = 5
attendance_perfect = True

if score >= 90:
    grade = "A"
    if attendance_perfect:
        grade += "+"
elif score >= 80:
    grade = "B"
    if extra_credit >= 5:
        score += extra_credit
        if score >= 90:  # Re-evaluate after extra credit
            grade = "A-"
elif score >= 70:
    grade = "C"
    if attendance_perfect:
        print("Good attendance - keep it up!")
else:
    grade = "F"
    if score < 50:
        print("Consider retaking the course")

print(f"Final grade: {grade}")

# =========== COMPLEX BUSINESS RULES ===========
# Loan approval system
age = 35
income = 75000
credit_score = 720
employment_years = 5
existing_loans = 2
loan_amount = 250000
property_value = 300000

print("\n=== LOAN APPLICATION REVIEW ===")

if age >= 21:
    if income >= 50000:
        if credit_score >= 700:
            if employment_years >= 2:
                # Calculate debt-to-income ratio
                dti = (existing_loans * 500) / income  # Simplified
                
                if dti < 0.4:  # 40% DTI threshold
                    # Check loan-to-value ratio
                    ltv = loan_amount / property_value
                    
                    if ltv <= 0.8:  # 80% LTV threshold
                        print("✅ Loan APPROVED")
                        print(f"  DTI Ratio: {dti:.1%}")
                        print(f"  LTV Ratio: {ltv:.1%}")
                    else:
                        print("⚠️ Loan CONDITIONALLY APPROVED")
                        print("  Reason: High LTV ratio")
                        if ltv <= 0.9:
                            print("  Solution: PMI required")
                        else:
                            print("  Solution: Larger down payment needed")
                else:
                    print("❌ Loan DENIED")
                    print("  Reason: Debt-to-income ratio too high")
            else:
                print("❌ Loan DENIED")
                print("  Reason: Insufficient employment history")
        else:
            print("❌ Loan DENIED")
            print("  Reason: Credit score too low")
            if credit_score >= 650:
                print("  Suggestion: Consider smaller loan amount")
    else:
        print("❌ Loan DENIED")
        print("  Reason: Income insufficient")
else:
    print("❌ Loan DENIED")
    print("  Reason: Age requirement not met")

# =========== MULTI-DIMENSIONAL DECISION MATRIX ===========
# Shipping cost calculator with multiple factors
weight = 4.5  # kg
destination = "international"
priority = "express"
insurance = True
fragile = False

print("\n=== SHIPPING CALCULATOR ===")
base_cost = 0

# Destination base rates
if destination == "local":
    base_cost = 5
    if weight > 5:
        base_cost += (weight - 5) * 0.5
elif destination == "national":
    base_cost = 10
    if weight > 5:
        base_cost += (weight - 5) * 1
elif destination == "international":
    base_cost = 25
    if weight > 5:
        base_cost += (weight - 5) * 2
    # Additional international checks
    if weight > 10:
        print("  Note: Special handling required for heavy international")
else:
    print("Invalid destination")
    base_cost = None

if base_cost is not None:
    # Priority shipping
    if priority == "express":
        if destination == "local":
            base_cost *= 1.5
        elif destination == "national":
            base_cost *= 2
        elif destination == "international":
            base_cost *= 2.5
    elif priority == "overnight":
        base_cost *= 3
    
    # Insurance
    if insurance:
        if destination == "international":
            base_cost += base_cost * 0.1  # 10% for international
        else:
            base_cost += base_cost * 0.05  # 5% for domestic
    
    # Fragile handling
    if fragile:
        base_cost += 15
        if destination == "international":
            base_cost += 10  # Extra for international fragile
    
    print(f"Final shipping cost: \\\${base_cost:.2f}")

# =========== STATE MACHINE PATTERN ===========
# Game character state machine
health = 75
has_weapon = True
enemy_nearby = True
is_hidden = False

print("\n=== GAME CHARACTER STATE ===")

if health > 0:  # Character is alive
    if enemy_nearby:
        if has_weapon:
            if health > 50:
                print("State: ATTACKING")
                print("Action: Engage enemy with weapon")
            else:
                print("State: DEFENSIVE")
                print("Action: Fight defensively, look for cover")
        else:
            if is_hidden:
                print("State: HIDING")
                print("Action: Remain hidden, wait for opportunity")
            else:
                if health > 30:
                    print("State: FLEEING")
                    print("Action: Run away to find weapon")
                else:
                    print("State: SURRENDERING")
                    print("Action: Attempt to surrender")
    else:
        if health < 100:
            print("State: HEALING")
            print("Action: Rest and recover health")
        else:
            print("State: EXPLORING")
            print("Action: Search for items and enemies")
else:
    print("State: DEAD")
    print("Action: Game over")

# =========== FACTORY CONFIGURATION SYSTEM ===========
# Product customization with nested options
product_type = "laptop"
processor = "i7"
ram = 16
storage = "512GB SSD"
graphics = "dedicated"
warranty = "extended"

print("\n=== PRODUCT CONFIGURATION ===")
base_price = 0
config_details = []

if product_type == "laptop":
    base_price = 800
    config_details.append("Laptop Base Model")
    
    # Processor options
    if processor == "i3":
        base_price += 100
        config_details.append("Intel i3 Processor")
    elif processor == "i5":
        base_price += 200
        config_details.append("Intel i5 Processor")
    elif processor == "i7":
        base_price += 350
        config_details.append("Intel i7 Processor")
    elif processor == "i9":
        base_price += 500
        config_details.append("Intel i9 Processor")
    
    # RAM options
    if ram == 8:
        base_price += 50
        config_details.append("8GB RAM")
    elif ram == 16:
        base_price += 100
        config_details.append("16GB RAM")
    elif ram == 32:
        base_price += 200
        config_details.append("32GB RAM")
    
    # Storage options nested within RAM choice
    if ram >= 16:  # Only certain storage options available with 16+ GB RAM
        if storage == "256GB SSD":
            base_price += 100
            config_details.append("256GB SSD")
        elif storage == "512GB SSD":
            base_price += 200
            config_details.append("512GB SSD")
        elif storage == "1TB SSD":
            base_price += 350
            config_details.append("1TB SSD")
        elif storage == "2TB SSD":
            if processor in ["i7", "i9"]:  # Further nesting
                base_price += 600
                config_details.append("2TB SSD")
            else:
                print("Warning: 2TB SSD requires i7 or i9 processor")
                storage = "1TB SSD"  # Downgrade automatically
                base_price += 350
                config_details.append("1TB SSD (auto-downgraded)")
    else:
        # Limited storage for 8GB RAM
        if storage == "256GB SSD":
            base_price += 100
            config_details.append("256GB SSD")
        elif storage == "512GB SSD":
            base_price += 200
            config_details.append("512GB SSD")
        else:
            print("Warning: Only 256GB or 512GB SSD available with 8GB RAM")
            storage = "512GB SSD"
            base_price += 200
            config_details.append("512GB SSD (auto-selected)")
    
    # Graphics card (only for certain processors)
    if graphics == "dedicated":
        if processor in ["i7", "i9"]:
            base_price += 300
            config_details.append("Dedicated Graphics Card")
        else:
            print("Warning: Dedicated graphics requires i7 or i9")
            graphics = "integrated"
            config_details.append("Integrated Graphics (auto-selected)")
    
    # Warranty
    if warranty == "standard":
        config_details.append("1-Year Standard Warranty")
    elif warranty == "extended":
        base_price += 150
        config_details.append("3-Year Extended Warranty")
    elif warranty == "premium":
        if product_type == "laptop":
            base_price += 300
            config_details.append("5-Year Premium Warranty + Accidental Damage")

elif product_type == "desktop":
    # Similar nested structure for desktop...
    pass

print("\nConfiguration Summary:")
for detail in config_details:
    print(f"  • {detail}")
print(f"\nTotal Price: \\\${base_price:.2f}")

# =========== PATTERN MATCHING (Python 3.10+) ===========
# Alternative to deeply nested if/elif chains
# Note: Requires Python 3.10 or later

def process_order(order_type, priority, amount):
    """Process order using pattern matching."""
    
    match (order_type, priority, amount):
        case ("standard", "low", amt) if amt < 1000:
            return "Process in batch"
        case ("standard", "low", amt) if amt >= 1000:
            return "Process individually"
        case ("standard", "high", _):
            return "Expedite processing"
        case ("express", "low", amt) if amt < 500:
            return "Next day processing"
        case ("express", "high", _):
            return "Immediate processing"
        case ("international", _, amt) if amt > 2000:
            return "Customs clearance required"
        case ("international", priority, _):
            return f"International {priority} processing"
        case _:
            return "Standard processing"

# Test pattern matching
print("\n=== PATTERN MATCHING EXAMPLES ===")
print(f"Order 1: {process_order('standard', 'low', 500)}")
print(f"Order 2: {process_order('express', 'high', 100)}")
print(f"Order 3: {process_order('international', 'low', 3000)}")

# =========== REFACTORING DEEPLY NESTED CODE ===========
# Example of refactoring nested conditionals

# BEFORE: Deeply nested (hard to read)
def calculate_discount_before(amount, is_member, has_coupon, day_of_week):
    discount = 0
    if amount > 100:
        if is_member:
            if has_coupon:
                if day_of_week == "Monday":
                    discount = 0.25
                else:
                    discount = 0.20
            else:
                if day_of_week == "Monday":
                    discount = 0.15
                else:
                    discount = 0.10
        else:
            if has_coupon:
                discount = 0.10
            else:
                discount = 0.05
    else:
        if is_member:
            discount = 0.05
    return discount

# AFTER: Flattened with early returns (easier to read)
def calculate_discount_after(amount, is_member, has_coupon, day_of_week):
    # Early returns for simple cases
    if amount <= 100:
        return 0.05 if is_member else 0
    
    # Use variables for complex conditions
    is_monday = (day_of_week == "Monday")
    
    if is_member and has_coupon:
        return 0.25 if is_monday else 0.20
    
    if is_member:
        return 0.15 if is_monday else 0.10
    
    if has_coupon:
        return 0.10
    
    return 0.05

# Test both functions
print("\n=== REFACTORING EXAMPLE ===")
amount = 150
is_member = True
has_coupon = True
day = "Monday"

discount1 = calculate_discount_before(amount, is_member, has_coupon, day)
discount2 = calculate_discount_after(amount, is_member, has_coupon, day)

print(f"Original function: {discount1:.1%} discount")
print(f"Refactored function: {discount2:.1%} discount")
print(f"Functions match: {discount1 == discount2}")

# =========== LOOKUP TABLE PATTERN ===========
# Alternative to complex nested if/elif chains

def calculate_shipping_lookup(zone, weight, priority):
    """Calculate shipping using lookup tables instead of nested ifs."""
    
    # Base rates lookup table
    base_rates = {
        "local": {"base": 5, "per_kg": 0.5},
        "regional": {"base": 10, "per_kg": 1.0},
        "national": {"base": 15, "per_kg": 1.5},
        "international": {"base": 25, "per_kg": 2.0}
    }
    
    # Priority multipliers lookup table
    priority_multipliers = {
        "standard": 1.0,
        "express": 1.5,
        "overnight": 2.0,
        "same_day": 3.0
    }
    
    # Get base rate
    if zone in base_rates:
        rate_info = base_rates[zone]
        base_cost = rate_info["base"]
        
        # Calculate weight charge
        if weight > 5:
            extra_weight = weight - 5
            base_cost += extra_weight * rate_info["per_kg"]
    else:
        raise ValueError(f"Unknown zone: {zone}")
    
    # Apply priority multiplier
    if priority in priority_multipliers:
        base_cost *= priority_multipliers[priority]
    else:
        raise ValueError(f"Unknown priority: {priority}")
    
    return base_cost

# Test lookup table approach
print("\n=== LOOKUP TABLE EXAMPLE ===")
try:
    cost = calculate_shipping_lookup("national", 7.5, "express")
    print(f"Shipping cost: \\\${cost:.2f}")
except ValueError as e:
    print(f"Error: {e}")

# =========== PRACTICAL EXERCISE: TAX CALCULATOR ===========
def calculate_tax(income, filing_status, state, deductions=0):
    """Calculate tax with complex nested logic."""
    
    print(f"\n=== TAX CALCULATION ===")
    print(f"Income: \\\${income:,.2f}")
    print(f"Filing Status: {filing_status}")
    print(f"State: {state}")
    print(f"Deductions: \\\${deductions:,.2f}")
    
    taxable_income = income - deductions
    
    # Federal tax brackets (simplified)
    if filing_status == "single":
        if taxable_income <= 11000:
            federal_tax = taxable_income * 0.10
        elif taxable_income <= 44725:
            federal_tax = 1100 + (taxable_income - 11000) * 0.12
        elif taxable_income <= 95375:
            federal_tax = 5147 + (taxable_income - 44725) * 0.22
        elif taxable_income <= 182100:
            federal_tax = 16290 + (taxable_income - 95375) * 0.24
        elif taxable_income <= 231250:
            federal_tax = 37104 + (taxable_income - 182100) * 0.32
        elif taxable_income <= 578125:
            federal_tax = 52832 + (taxable_income - 231250) * 0.35
        else:
            federal_tax = 174238.25 + (taxable_income - 578125) * 0.37
    
    elif filing_status == "married":
        # Different brackets for married filing jointly
        if taxable_income <= 22000:
            federal_tax = taxable_income * 0.10
        elif taxable_income <= 89450:
            federal_tax = 2200 + (taxable_income - 22000) * 0.12
        # ... more brackets
        else:
            federal_tax = taxable_income * 0.35  # Simplified
    
    else:
        print("Invalid filing status")
        return None
    
    # State tax (nested within federal calculation)
    state_tax = 0
    if state == "CA":
        if filing_status == "single":
            if taxable_income <= 10099:
                state_tax = taxable_income * 0.01
            elif taxable_income <= 23942:
                state_tax = 101 + (taxable_income - 10099) * 0.02
            # ... more brackets
        elif filing_status == "married":
            # Different CA brackets for married
            pass
    
    elif state == "TX":
        # Texas has no state income tax
        state_tax = 0
        print("Note: Texas has no state income tax")
    
    elif state == "NY":
        # New York state tax brackets
        if filing_status == "single":
            if taxable_income <= 8500:
                state_tax = taxable_income * 0.04
            elif taxable_income <= 11700:
                state_tax = 340 + (taxable_income - 8500) * 0.045
            # ... more brackets
    
    total_tax = federal_tax + state_tax
    effective_rate = (total_tax / income) * 100
    
    print(f"\nFederal Tax: \\\${federal_tax:,.2f}")
    print(f"State Tax: \\\${state_tax:,.2f}")
    print(f"Total Tax: \\\${total_tax:,.2f}")
    print(f"Effective Tax Rate: {effective_rate:.1f}%")
    
    return total_tax

# Test tax calculator
calculate_tax(75000, "single", "CA", 12500)
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: College Admission System (60 minutes)</b>
    <p>Create a college admission system that evaluates applicants based on:</p>
    <ul>
        <li>Academic scores (GPA, test scores)</li>
        <li>Extracurricular activities (leadership, sports, arts)</li>
        <li>Recommendation letters (quality and quantity)</li>
        <li>Special circumstances (first-generation, legacy, etc.)</li>
        <li>Interview performance (if applicable)</li>
    </ul>
    <p>Use nested conditionals to determine: Accepted, Waitlisted, or Rejected</p>
    
    <b>Task 2: Air Traffic Control Simulator (45 minutes)</b>
    <p>Create an air traffic control system that:</p>
    <ul>
        <li>Checks aircraft altitude, speed, and distance from airport</li>
        <li>Determines landing priority based on multiple factors</li>
        <li>Handles emergency situations with nested protocols</li>
        <li>Manages different aircraft types (commercial, cargo, private)</li>
        <li>Simulates weather conditions affecting decisions</li>
    </ul>
    
    <b>Task 3: Smart Investment Advisor (45 minutes)</b>
    <p>Create an investment recommendation system that:</p>
    <ul>
        <li>Assesses risk tolerance (age, income, experience)</li>
        <li>Evaluates financial goals (retirement, education, home)</li>
        <li>Considers market conditions (bull/bear market)</li>
        <li>Provides portfolio allocation recommendations</li>
        <li>Suggests specific investment products</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Build a "Medical Diagnosis Assistant"</b>
    
    <b>Requirements:</b>
    <ul>
        <li><b>Symptom Analyzer:</b> Multiple symptoms with severity levels</li>
        <li><b>Patient History:</b> Age, medical history, medications</li>
        <li><b>Risk Assessment:</b> Calculate risk scores for conditions</li>
        <li><b>Differential Diagnosis:</b> List possible conditions in order of likelihood</li>
        <li><b>Recommendations:</b> Suggest tests and when to see a doctor</li>
    </ul>
    
    <b>Complex Logic to Implement:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
if fever and cough:
    if fever > 39°C:
        if cough_duration > 2_weeks:
            if chest_pain:
                risk_score += 30
                conditions.append("Pneumonia")
            else:
                risk_score += 20
                conditions.append("Bronchitis")
        else:
            if loss_of_taste:
                risk_score += 25
                conditions.append("COVID-19")
            else:
                risk_score += 15
                conditions.append("Flu")
    else:
        risk_score += 5
        conditions.append("Common Cold")
    </pre>
    
    <b>Features:</b>
    <ul>
        <li>Weighted scoring system for symptoms</li>
        <li>Emergency flag for critical symptoms</li>
        <li>Age-specific risk adjustments</li>
        <li>Medication interaction warnings</li>
        <li>Follow-up recommendation logic</li>
        <li>Export to PDF for doctor visits</li>
    </ul>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Nested Conditionals:</b> Understanding when and how to nest if statements</li>
    <li><b>Code Readability:</b> Balancing clarity with necessary complexity</li>
    <li><b>Early Returns:</b> Using return statements to flatten nested code</li>
    <li><b>Lookup Tables:</b> Alternative to complex conditional chains</li>
    <li><b>Pattern Matching:</b> Modern approach to complex conditionals (Python 3.10+)</li>
    <li><b>State Machines:</b> Modeling complex behavior with conditionals</li>
    <li><b>Refactoring:</b> Techniques to simplify deeply nested code</li>
    <li><b>Error Handling:</b> Properly handling edge cases in complex logic</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Best Practices for Complex Logic:</h3>
    <ul>
        <li><b>Limit Nesting Depth:</b> Try to keep it to 3 levels maximum</li>
        <li><b>Use Descriptive Variable Names:</b> Makes complex conditions readable</li>
        <li><b>Extract Complex Conditions:</b> Put them in well-named variables or functions</li>
        <li><b>Comment Why, Not What:</b> Explain the business logic behind conditions</li>
        <li><b>Test Boundary Conditions:</b> Especially important with nested logic</li>
        <li><b>Consider Alternative Patterns:</b> State machines, lookup tables, strategy pattern</li>
        <li><b>Use Early Returns:</b> Reduces nesting and makes code clearer</li>
        <li><b>Validate Inputs Early:</b> Check for invalid states before complex logic</li>
        <li><b>Keep Related Logic Together:</b> Don't spread conditional logic across functions</li>
        <li><b>Document Assumptions:</b> Complex logic often relies on specific assumptions</li>
    </ul>
</div>
`
    },
        "2-3": {
        icon: "fa-redo",
        title: "For Loops & Iteration",
        html: `<h1>Week 2, Day 3: For Loops & Iteration</h1>
<p>Today we master repetition with for loops - the workhorse of programming for processing collections of data.</p>

<div class="analogy-box">
    <b>Analogy: Factory Assembly Line 🏭</b><br/>
    
    For loop: The conveyor belt<br/>
    Iterable: Box of parts moving on belt<br/>
    Iterator: Worker taking parts from box<br/>
    Loop body: Assembly station operations<br/>
    Range(): Number of items to process<br/>
    Break/Continue: Quality control checks
</div>

<h3>Understanding Iteration in Python</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Iteration Methods Comparison</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🔵 For Loops</h5>
            <ul>
                <li><strong>Use When:</strong> Known iteration count</li>
                <li><strong>Syntax:</strong> for item in iterable:</li>
                <li><strong>Control:</strong> Automatic iteration</li>
                <li><strong>Best For:</strong> Collections, sequences</li>
                <li><strong>Example:</strong> Processing list items</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🟢 While Loops (Preview)</h5>
            <ul>
                <li><strong>Use When:</strong> Unknown iteration count</li>
                <li><strong>Syntax:</strong> while condition:</li>
                <li><strong>Control:</strong> Manual condition check</li>
                <li><strong>Best For:</strong> Conditional repetition</li>
                <li><strong>Example:</strong> User input validation</li>
            </ul>
        </div>
    </div>
</div>

<h3>For Loop Fundamentals</h3>
<b>Basic to Advanced Loop Patterns:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== BASIC FOR LOOPS ===========
# Loop through a list
fruits = ["apple", "banana", "cherry", "date"]

print("Simple loop:")
for fruit in fruits:
    print(f"- {fruit}")

# Loop with index using range()
print("\nLoop with index:")
for i in range(len(fruits)):
    print(f"{i}: {fruits[i]}")

# Loop with enumerate() - RECOMMENDED
print("\nLoop with enumerate:")
for index, fruit in enumerate(fruits):
    print(f"{index}: {fruit}")

# Loop with enumerate and start parameter
print("\nLoop with enumerate (starting at 1):")
for index, fruit in enumerate(fruits, start=1):
    print(f"{index}. {fruit}")

# =========== RANGE() FUNCTION ===========
print("\n=== RANGE FUNCTION EXAMPLES ===")

# range(stop)
print("range(5):")
for i in range(5):
    print(i, end=" ")  # 0 1 2 3 4

# range(start, stop)
print("\n\nrange(2, 7):")
for i in range(2, 7):
    print(i, end=" ")  # 2 3 4 5 6

# range(start, stop, step)
print("\n\nrange(0, 10, 2):")
for i in range(0, 10, 2):
    print(i, end=" ")  # 0 2 4 6 8

# Negative step
print("\n\nrange(10, 0, -2):")
for i in range(10, 0, -2):
    print(i, end=" ")  # 10 8 6 4 2

# Decimal steps (use numpy.arange or manual calculation)
print("\n\nDecimal steps (0 to 1 by 0.2):")
current = 0
while current <= 1:
    print(f"{current:.1f}", end=" ")
    current += 0.2

# =========== LOOPING THROUGH DIFFERENT ITERABLES ===========
print("\n\n=== LOOPING THROUGH DIFFERENT DATA TYPES ===")

# Loop through string
text = "Python"
print("\nLooping through string:")
for char in text:
    print(char, end="-")  # P-y-t-h-o-n-

# Loop through tuple
coordinates = (10, 20, 30, 40, 50)
print("\n\nLooping through tuple:")
for coord in coordinates:
    print(coord, end=" ")  # 10 20 30 40 50

# Loop through dictionary
student = {
    "name": "Alice",
    "age": 20,
    "major": "Computer Science",
    "gpa": 3.8
}

print("\n\nLooping through dictionary keys:")
for key in student:
    print(f"{key}: {student[key]}")

print("\nLooping through dictionary items:")
for key, value in student.items():
    print(f"{key}: {value}")

print("\nLooping through dictionary values:")
for value in student.values():
    print(value)

print("\nLooping through dictionary keys only:")
for key in student.keys():
    print(key)

# Loop through set
unique_numbers = {1, 3, 5, 7, 9, 3, 1}  # Duplicates removed
print("\nLooping through set:")
for num in unique_numbers:
    print(num, end=" ")  # 1 3 5 7 9 (order may vary)

# =========== NESTED LOOPS ===========
print("\n\n=== NESTED LOOPS ===")

# Multiplication table
print("Multiplication Table (1-5):")
for i in range(1, 6):
    for j in range(1, 6):
        print(f"{i*j:3}", end=" ")
    print()  # New line after each row

# Pattern printing
print("\nPattern 1: Right triangle")
for i in range(1, 6):
    for j in range(i):
        print("*", end="")
    print()

print("\nPattern 2: Pyramid")
for i in range(1, 6):
    # Print spaces
    for j in range(5 - i):
        print(" ", end="")
    # Print stars
    for k in range(2 * i - 1):
        print("*", end="")
    print()

# Matrix operations
matrix1 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
matrix2 = [[9, 8, 7], [6, 5, 4], [3, 2, 1]]

print("\nMatrix Addition:")
result = []
for i in range(len(matrix1)):
    row = []
    for j in range(len(matrix1[0])):
        row.append(matrix1[i][j] + matrix2[i][j])
    result.append(row)

for row in result:
    print(row)

# =========== LOOP CONTROL STATEMENTS ===========
print("\n=== LOOP CONTROL STATEMENTS ===")

# break - exit loop completely
print("break example (stop at 5):")
for i in range(1, 11):
    if i == 5:
        break
    print(i, end=" ")  # 1 2 3 4

# continue - skip current iteration
print("\n\ncontinue example (skip multiples of 3):")
for i in range(1, 11):
    if i % 3 == 0:
        continue
    print(i, end=" ")  # 1 2 4 5 7 8 10

# else clause with loops
print("\n\nelse clause with for loop:")
for i in range(5):
    print(i, end=" ")
else:
    print("\nLoop completed normally (no break)")

print("\nelse clause with break:")
for i in range(5):
    if i == 3:
        break
    print(i, end=" ")
else:
    print("This won't print because of break")

# pass - do nothing (placeholder)
print("\n\npass example:")
for i in range(5):
    if i == 2:
        pass  # Do nothing, just placeholder
    print(i, end=" ")  # 0 1 2 3 4

# =========== ZIP FUNCTION ===========
print("\n\n=== ZIP FUNCTION FOR PARALLEL ITERATION ===")

names = ["Alice", "Bob", "Charlie"]
ages = [25, 30, 35]
grades = [3.8, 3.5, 4.0]

print("Parallel iteration with zip:")
for name, age, grade in zip(names, ages, grades):
    print(f"{name} is {age} years old with GPA {grade}")

print("\nWith enumerate and zip:")
for i, (name, age) in enumerate(zip(names, ages), start=1):
    print(f"{i}. {name}: {age}")

# Unequal length lists
list1 = [1, 2, 3, 4, 5]
list2 = ["A", "B", "C"]

print("\nZip with unequal lengths (stops at shortest):")
for num, letter in zip(list1, list2):
    print(f"{num}{letter}")

# Use itertools.zip_longest for unequal lengths
from itertools import zip_longest

print("\nzip_longest with unequal lengths:")
for num, letter in zip_longest(list1, list2, fillvalue="X"):
    print(f"{num}{letter}")

# =========== LIST COMPREHENSIONS ===========
print("\n=== LIST COMPREHENSIONS ===")

# Traditional way
squares = []
for i in range(1, 11):
    squares.append(i ** 2)
print(f"Traditional: {squares}")

# List comprehension
squares = [i ** 2 for i in range(1, 11)]
print(f"Comprehension: {squares}")

# With condition
even_squares = [i ** 2 for i in range(1, 11) if i % 2 == 0]
print(f"Even squares: {even_squares}")

# Nested comprehension
matrix = [[i * j for j in range(1, 4)] for i in range(1, 4)]
print(f"Matrix: {matrix}")

# Flatten matrix
flat = [num for row in matrix for num in row]
print(f"Flattened: {flat}")

# Dictionary comprehension
square_dict = {i: i ** 2 for i in range(1, 6)}
print(f"Square dict: {square_dict}")

# Set comprehension
unique_chars = {char for char in "programming" if char in "aeiou"}
print(f"Unique vowels: {unique_chars}")

# =========== GENERATOR EXPRESSIONS ===========
print("\n=== GENERATOR EXPRESSIONS ===")

# List comprehension (eager evaluation)
squares_list = [x ** 2 for x in range(1000000)]  # Creates list immediately

# Generator expression (lazy evaluation)
squares_gen = (x ** 2 for x in range(1000000))   # Creates generator

print("Generator expression example:")
gen = (x * 2 for x in range(5))
for value in gen:
    print(value, end=" ")  # 0 2 4 6 8

# Can only iterate once
gen = (x * 2 for x in range(5))
print(f"\nFirst iteration: {list(gen)}")      # [0, 2, 4, 6, 8]
print(f"Second iteration: {list(gen)}")       # [] (exhausted)

# =========== REAL-WORLD EXAMPLES ===========
print("\n=== REAL-WORLD EXAMPLES ===")

# 1. Data Processing Pipeline
print("1. Data Processing Pipeline:")

sales_data = [
    {"product": "Laptop", "price": 999.99, "quantity": 5},
    {"product": "Mouse", "price": 24.99, "quantity": 20},
    {"product": "Keyboard", "price": 49.99, "quantity": 10},
    {"product": "Monitor", "price": 299.99, "quantity": 3},
    {"product": "Headphones", "price": 79.99, "quantity": 15}
]

# Calculate total revenue
total_revenue = 0
for item in sales_data:
    revenue = item["price"] * item["quantity"]
    total_revenue += revenue
    print(f"{item['product']}: \\\${revenue:,.2f}")

print(f"Total Revenue: \\\${total_revenue:,.2f}")

# 2. Text Analysis
print("\n2. Text Analysis:")

text = """Python is an interpreted, high-level, general-purpose programming language. 
Created by Guido van Rossum and first released in 1991, Python's design philosophy 
emphasizes code readability with its notable use of significant whitespace."""

# Count words
words = text.split()
word_count = {}
for word in words:
    word = word.lower().strip(".,!?;:")
    if word:
        word_count[word] = word_count.get(word, 0) + 1

print("Top 5 most common words:")
sorted_words = sorted(word_count.items(), key=lambda x: x[1], reverse=True)
for word, count in sorted_words[:5]:
    print(f"  {word}: {count}")

# 3. Student Grade Calculator
print("\n3. Student Grade Calculator:")

students = [
    {"name": "Alice", "grades": [85, 92, 78, 90]},
    {"name": "Bob", "grades": [72, 65, 80, 77]},
    {"name": "Charlie", "grades": [95, 88, 92, 96]},
    {"name": "Diana", "grades": [60, 55, 65, 62]}
]

for student in students:
    grades = student["grades"]
    average = sum(grades) / len(grades)
    
    # Determine grade
    if average >= 90:
        letter = "A"
    elif average >= 80:
        letter = "B"
    elif average >= 70:
        letter = "C"
    elif average >= 60:
        letter = "D"
    else:
        letter = "F"
    
    print(f"{student['name']}: Average = {average:.1f}, Grade = {letter}")

# 4. Inventory Management
print("\n4. Inventory Management System:")

inventory = {
    "Laptop": {"price": 999.99, "stock": 15, "min_stock": 5},
    "Mouse": {"price": 24.99, "stock": 50, "min_stock": 20},
    "Keyboard": {"price": 49.99, "stock": 25, "min_stock": 10},
    "Monitor": {"price": 299.99, "stock": 8, "min_stock": 3},
    "Headphones": {"price": 79.99, "stock": 12, "min_stock": 5}
}

print("Current Inventory:")
print("-" * 50)
print(f"{'Product':<15} {'Price':<10} {'Stock':<10} {'Status':<15}")
print("-" * 50)

low_stock_items = []
total_value = 0

for product, details in inventory.items():
    price = details["price"]
    stock = details["stock"]
    min_stock = details["min_stock"]
    
    # Calculate item value
    item_value = price * stock
    total_value += item_value
    
    # Check stock status
    if stock == 0:
        status = "OUT OF STOCK"
    elif stock < min_stock:
        status = "LOW STOCK"
        low_stock_items.append(product)
    else:
        status = "OK"
    
    print(f"{product:<15} \\\${price:<9.2f} {stock:<10} {status:<15}")

print("-" * 50)
print(f"Total Inventory Value: \\\${total_value:,.2f}")

if low_stock_items:
    print(f"\n⚠️ Low Stock Alert for: {', '.join(low_stock_items)}")

# 5. Search Function
print("\n5. Search Function Implementation:")

products = [
    "Laptop Dell XPS 13",
    "Apple MacBook Pro",
    "Microsoft Surface Laptop",
    "Lenovo ThinkPad X1",
    "HP Spectre x360",
    "Asus ZenBook",
    "Acer Swift 3",
    "Razer Blade 15"
]

search_term = input("\nEnter search term: ").lower()

print(f"\nSearch results for '{search_term}':")
found = False
for i, product in enumerate(products, start=1):
    if search_term in product.lower():
        print(f"  {i}. {product}")
        found = True

if not found:
    print("  No products found.")

# 6. Data Validation
print("\n6. Data Validation:")

user_emails = [
    "user1@example.com",
    "invalid-email",
    "user2@domain.org",
    "notanemail@",
    "user3@company.co.uk",
    "@missingusername.com"
]

print("Email Validation Check:")
valid_emails = []
invalid_emails = []

for email in user_emails:
    # Simple email validation
    if "@" in email and "." in email:
        # Check if @ comes before .
        at_index = email.index("@")
        dot_index = email.rindex(".")
        if at_index < dot_index and at_index > 0:
            valid_emails.append(email)
            continue
    
    invalid_emails.append(email)

print(f"Valid emails ({len(valid_emails)}): {valid_emails}")
print(f"Invalid emails ({len(invalid_emails)}): {invalid_emails}")

# 7. Batch File Processing Simulation
print("\n7. Batch File Processing:")

file_contents = [
    "data_2023_01.csv",
    "data_2023_02.csv",
    "data_2023_03.csv",
    "report_2023_Q1.pdf",
    "config.ini",
    "backup_2023_04.tar.gz"
]

print("Processing files:")
for filename in file_contents:
    # Extract extension
    if "." in filename:
        name, ext = filename.rsplit(".", 1)
    else:
        name, ext = filename, ""
    
    # Process based on file type
    if ext == "csv":
        print(f"  📊 Processing CSV: {filename}")
        # Simulate processing
        processed_name = f"processed_{name}.csv"
    elif ext == "pdf":
        print(f"  📄 Skipping PDF: {filename}")
        continue  # Skip PDF files
    elif ext in ["tar.gz", "zip"]:
        print(f"  📦 Extracting archive: {filename}")
        # Simulate extraction
        extracted_name = f"extracted_{name}"
    else:
        print(f"  ❓ Unknown type: {filename}")
    
    print(f"    -> Processed as: {processed_name if 'processed_name' in locals() else 'skipped'}")

# =========== PERFORMANCE OPTIMIZATION ===========
print("\n=== PERFORMANCE TIPS ===")

# Use local variables in loops
print("Optimizing loop performance:")

# SLOWER: Accessing global/list index repeatedly
data = list(range(10000))

import time

# Method 1: Using range(len())
start = time.time()
total = 0
for i in range(len(data)):
    total += data[i]
time1 = time.time() - start

# Method 2: Direct iteration (FASTER)
start = time.time()
total = 0
for value in data:
    total += value
time2 = time.time() - start

print(f"Time with range(len()): {time1:.6f}s")
print(f"Time with direct iteration: {time2:.6f}s")
print(f"Improvement: {(time1-time2)/time1*100:.1f}% faster")

# =========== COMMON PATTERNS ===========
print("\n=== COMMON LOOP PATTERNS ===")

# 1. Accumulator pattern
numbers = [1, 2, 3, 4, 5]
total = 0
for num in numbers:
    total += num
print(f"Sum: {total}")

# 2. Counter pattern
text = "hello world"
vowel_count = 0
for char in text:
    if char in "aeiou":
        vowel_count += 1
print(f"Vowels in '{text}': {vowel_count}")

# 3. Search pattern
found = False
target = 7
for num in numbers:
    if num == target:
        found = True
        break
print(f"Found {target}: {found}")

# 4. Filter pattern
even_numbers = []
for num in numbers:
    if num % 2 == 0:
        even_numbers.append(num)
print(f"Even numbers: {even_numbers}")

# 5. Map pattern
squared = []
for num in numbers:
    squared.append(num ** 2)
print(f"Squared: {squared}")

# 6. Extreme value pattern
max_value = numbers[0]
min_value = numbers[0]
for num in numbers:
    if num > max_value:
        max_value = num
    if num < min_value:
        min_value = num
print(f"Min: {min_value}, Max: {max_value}")

# =========== PRACTICAL EXERCISE: DATA ANALYSIS ===========
print("\n=== PRACTICAL EXERCISE: SALES ANALYSIS ===")

# Simulated sales data
sales = [
    {"month": "Jan", "revenue": 15000, "expenses": 12000},
    {"month": "Feb", "revenue": 18000, "expenses": 13000},
    {"month": "Mar", "revenue": 22000, "expenses": 14000},
    {"month": "Apr", "revenue": 19000, "expenses": 13500},
    {"month": "May", "revenue": 25000, "expenses": 15000},
    {"month": "Jun", "revenue": 28000, "expenses": 16000},
]

# Initialize analysis variables
total_revenue = 0
total_expenses = 0
profitable_months = 0
best_month = {"month": "", "profit": -float('inf')}
worst_month = {"month": "", "profit": float('inf')}

print("Monthly Analysis:")
print("-" * 50)
print(f"{'Month':<10} {'Revenue':<12} {'Expenses':<12} {'Profit':<12} {'Margin':<10}")
print("-" * 50)

for sale in sales:
    month = sale["month"]
    revenue = sale["revenue"]
    expenses = sale["expenses"]
    profit = revenue - expenses
    margin = (profit / revenue) * 100 if revenue > 0 else 0
    
    # Update totals
    total_revenue += revenue
    total_expenses += expenses
    
    # Count profitable months
    if profit > 0:
        profitable_months += 1
    
    # Track best and worst months
    if profit > best_month["profit"]:
        best_month = {"month": month, "profit": profit}
    
    if profit < worst_month["profit"]:
        worst_month = {"month": month, "profit": profit}
    
    # Print monthly data
    print(f"{month:<10} \\\${revenue:<11,.2f} \\\${expenses:<11,.2f} \\\${profit:<11,.2f} {margin:<9.1f}%")

print("-" * 50)

# Summary
total_profit = total_revenue - total_expenses
avg_margin = (total_profit / total_revenue * 100) if total_revenue > 0 else 0

print("\nSUMMARY:")
print(f"Total Revenue: \\\${total_revenue:,.2f}")
print(f"Total Expenses: \\\${total_expenses:,.2f}")
print(f"Total Profit: \\\${total_profit:,.2f}")
print(f"Average Margin: {avg_margin:.1f}%")
print(f"Profitable Months: {profitable_months}/{len(sales)}")
print(f"Best Month: {best_month['month']} (\\\${best_month['profit']:,.2f})")
print(f"Worst Month: {worst_month['month']} (\\\${worst_month['profit']:,.2f})")
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: Data Processing Pipeline (60 minutes)</b>
    <p>Create a data processing system that:</p>
    <ul>
        <li>Reads a CSV-like structure (use list of dictionaries)</li>
        <li>Cleans data (remove duplicates, handle missing values)</li>
        <li>Transforms data (calculate derived fields)</li>
        <li>Analyzes data (statistics, trends, patterns)</li>
        <li>Generates reports (summary tables, insights)</li>
        <li>Exports results to formatted text file</li>
    </ul>
    
    <b>Task 2: Pattern Generator (45 minutes)</b>
    <p>Create a pattern generator that can produce:</p>
    <ul>
        <li>Geometric patterns (triangles, diamonds, pyramids)</li>
        <li>Number patterns (Pascal's triangle, Fibonacci spiral)</li>
        <li>Text patterns (word pyramids, character art)</li>
        <li>Custom patterns based on user input</li>
        <li>Animated patterns (using time.sleep for animation)</li>
    </ul>
    
    <b>Task 3: Password Strength Analyzer (45 minutes)</b>
    <p>Create a password analyzer that:</p>
    <ul>
        <li>Checks password against common patterns</li>
        <li>Analyzes character distribution</li>
        <li>Calculates entropy and strength score</li>
        <li>Generates secure password suggestions</li>
        <li>Tests against common password lists</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Build a "Library Management System"</b>
    
    <b>Requirements:</b>
    <ul>
        <li><b>Book Database:</b> Store books with title, author, ISBN, status</li>
        <li><b>Member Management:</b> Add/remove members, track borrowed books</li>
        <li><b>Checkout System:</b> Borrow/return books with due dates</li>
        <li><b>Search Functionality:</b> Search by title, author, genre</li>
        <li><b>Reporting:</b> Generate various reports (overdue, popular, etc.)</li>
    </ul>
    
    <b>Loop Patterns to Implement:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
# Example patterns needed:
1. Accumulator: Total fines calculation
2. Counter: Books per category
3. Search: Find book by ISBN
4. Filter: Overdue books
5. Map: Calculate due dates
6. Extreme: Most borrowed book
7. Nested: Member's borrowed books
    </pre>
    
    <b>Features:</b>
    <ul>
        <li>Calculate overdue fines automatically</li>
        <li>Recommend books based on borrowing history</li>
        <li>Generate statistics (busiest days, popular genres)</li>
        <li>Export reports to formatted text files</li>
        <li>Input validation for all operations</li>
        <li>Menu-driven interface with loops</li>
    </ul>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>For Loop Syntax:</b> Mastering the basic for item in iterable: pattern</li>
    <li><b>Range Function:</b> Understanding start, stop, step parameters</li>
    <li><b>Enumerate:</b> Getting both index and value in loops</li>
    <li><b>Zip Function:</b> Parallel iteration over multiple sequences</li>
    <li><b>Loop Control:</b> Using break, continue, and else with loops</li>
    <li><b>List Comprehensions:</b> Concise way to create lists</li>
    <li><b>Generator Expressions:</b> Memory-efficient iteration</li>
    <li><b>Common Patterns:</b> Accumulator, counter, search, filter, map</li>
    <li><b>Nested Loops:</b> Processing multi-dimensional data</li>
    <li><b>Performance Tips:</b> Optimizing loops for speed and memory</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 For Loop Best Practices:</h3>
    <ul>
        <li><b>Use meaningful variable names:</b> for item in items, not for x in y</li>
        <li><b>Prefer direct iteration:</b> for value in list instead of for i in range(len(list))</li>
        <li><b>Use enumerate for indexes:</b> When you need both index and value</li>
        <li><b>Consider comprehensions:</b> For simple transformations and filters</li>
        <li><b>Break early when possible:</b> If you find what you're looking for, exit the loop</li>
        <li><b>Avoid modifying the list while iterating:</b> Create a copy if needed</li>
        <li><b>Use else clause for completion checks:</b> Executes when loop finishes normally</li>
        <li><b>Keep loops focused:</b> Each loop should do one thing well</li>
        <li><b>Consider generator expressions for large data:</b> Save memory</li>
        <li><b>Test with edge cases:</b> Empty lists, single items, large collections</li>
    </ul>
</div>
`
    },
        "2-4": {
        icon: "fa-infinity",
        title: "While Loops & Infinite Loops",
        html: `<h1>Week 2, Day 4: While Loops & Infinite Loops</h1>
<p>Today we master while loops - perfect for situations where we don't know how many times we need to repeat.</p>

<div class="analogy-box">
    <b>Analogy: Water Filling a Bathtub 🛁</b><br/>
    
    While loop: Keep adding water<br/>
    Condition: Water level < desired level<br/>
    Loop body: Add more water<br/>
    Infinite loop: Overflowing tub<br/>
    Break condition: Float valve stops flow<br/>
    Continue: Skip if adding hot/cold adjustment
</div>

<h3>Understanding While Loops</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 For Loops vs While Loops</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🔵 For Loops</h5>
            <ul>
                <li><strong>When:</strong> Known number of iterations</li>
                <li><strong>Control:</strong> Iterates over sequence</li>
                <li><strong>Syntax:</strong> for item in sequence:</li>
                <li><strong>Example:</strong> Processing list items</li>
                <li><strong>Best for:</strong> Collections, ranges</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h5>🟢 While Loops</h5>
            <ul>
                <li><strong>When:</strong> Unknown iterations</li>
                <li><strong>Control:</strong> Continues while condition True</li>
                <li><strong>Syntax:</strong> while condition:</li>
                <li><strong>Example:</strong> User input validation</li>
                <li><strong>Best for:</strong> Conditional repetition</li>
            </ul>
        </div>
    </div>
</div>

<h3>While Loop Fundamentals</h3>
<b>Basic to Advanced While Loop Patterns:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
<pre>
# =========== BASIC WHILE LOOPS ===========
# Simple counter
print("Count from 1 to 5:")
count = 1
while count <= 5:
    print(count)
    count += 1  # CRITICAL: Don't forget to update!

# User input validation
print("\nAge validation:")
age = -1  # Initialize with invalid value
while age < 0 or age > 120:
    try:
        age = int(input("Enter your age (0-120): "))
        if age < 0 or age > 120:
            print("Please enter a valid age between 0 and 120")
    except ValueError:
        print("Please enter a valid number")

print(f"Age accepted: {age}")

# =========== COMMON PATTERNS ===========
print("\n=== COMMON WHILE LOOP PATTERNS ===")

# 1. Counter pattern (alternative to for)
print("1. Counter pattern:")
i = 0
while i < 5:
    print(f"Count: {i}")
    i += 1

# 2. Sentinel pattern (stop on specific value)
print("\n2. Sentinel pattern (enter 'quit' to stop):")
total = 0
count = 0
while True:
    value = input("Enter a number (or 'quit'): ")
    if value.lower() == 'quit':
        break
    try:
        num = float(value)
        total += num
        count += 1
    except ValueError:
        print("Please enter a valid number")

if count > 0:
    print(f"Average: {total/count:.2f}")

# 3. Input validation pattern
print("\n3. Input validation pattern:")
password = ""
while len(password) < 8:
    password = input("Enter password (min 8 chars): ")
    if len(password) < 8:
        print("Password too short!")
print("Password accepted!")

# 4. Menu-driven program
print("\n4. Menu-driven program:")
while True:
    print("\n=== MENU ===")
    print("1. View Profile")
    print("2. Update Settings")
    print("3. View Reports")
    print("4. Exit")
    
    choice = input("Enter choice (1-4): ")
    
    if choice == '1':
        print("Displaying profile...")
    elif choice == '2':
        print("Opening settings...")
    elif choice == '3':
        print("Generating reports...")
    elif choice == '4':
        print("Goodbye!")
        break
    else:
        print("Invalid choice. Please enter 1-4.")

# 5. Simulation pattern
print("\n5. Simulation pattern:")
balance = 1000
months = 0
interest_rate = 0.05  # 5% annual
target = 2000

while balance < target:
    balance *= (1 + interest_rate/12)  # Monthly compounding
    months += 1
    print(f"Month {months:3}: \\\${balance:,.2f}")

print(f"\nReached \\\${target} in {months} months ({months//12} years, {months%12} months)")

# =========== INFINITE LOOPS (INTENTIONAL) ===========
print("\n=== INTENTIONAL INFINITE LOOPS ===")

# Game loop pattern
print("Game loop (press 'q' to quit):")
import time

score = 0
while True:
    print(f"\nScore: {score}")
    print("1. Add points")
    print("2. Subtract points")
    print("q. Quit")
    
    action = input("Choose action: ")
    
    if action == '1':
        points = int(input("How many points to add? "))
        score += points
        print(f"Added {points} points")
    elif action == '2':
        points = int(input("How many points to subtract? "))
        score -= points
        print(f"Subtracted {points} points")
    elif action.lower() == 'q':
        print("Thanks for playing!")
        break
    else:
        print("Invalid choice")
    
    time.sleep(0.5)  # Small delay for better UX

# Server simulation
print("\nServer simulation (press Ctrl+C to stop):")
"""
try:
    request_count = 0
    while True:
        # Simulate server handling requests
        request_count += 1
        print(f"Handling request #{request_count}")
        time.sleep(1)  # Simulate work
except KeyboardInterrupt:
    print(f"\nServer stopped. Handled {request_count} requests.")
"""

# =========== PREVENTING ACCIDENTAL INFINITE LOOPS ===========
print("\n=== PREVENTING ACCIDENTAL INFINITE LOOPS ===")

# Common mistake: Forgetting to update counter
print("Danger: Forgetting to increment:")
"""
count = 0
while count < 5:  # count never changes - INFINITE LOOP!
    print(f"Count: {count}")
    # Forgot: count += 1
"""

# Solution: Always have an exit strategy
print("\nSafe pattern with fail-safe:")
count = 0
max_iterations = 1000  # Fail-safe

while count < 5 and count < max_iterations:
    print(f"Count: {count}")
    count += 1

if count >= max_iterations:
    print("WARNING: Loop exceeded maximum iterations!")

# Another common mistake: Condition never becomes False
print("\nDanger: Condition that never becomes False:")
"""
temperature = 25
while temperature > 0:  # temperature never changes
    print(f"Temperature: {temperature}°C")
    # Should update temperature
"""

# =========== NESTED WHILE LOOPS ===========
print("\n=== NESTED WHILE LOOPS ===")

# Multiplication table with while
print("Multiplication table (1-5) with while loops:")
i = 1
while i <= 5:
    j = 1
    while j <= 5:
        print(f"{i*j:3}", end=" ")
        j += 1
    print()
    i += 1

# Password retry system
print("\nPassword retry system:")
max_attempts = 3
attempts = 0
logged_in = False

while attempts < max_attempts and not logged_in:
    password = input(f"Enter password (attempt {attempts + 1}/{max_attempts}): ")
    
    if password == "secret123":
        logged_in = True
        print("Login successful!")
    else:
        attempts += 1
        remaining = max_attempts - attempts
        if remaining > 0:
            print(f"Incorrect. {remaining} attempts remaining.")
        else:
            print("Account locked. Too many failed attempts.")

# =========== BREAK, CONTINUE, AND ELSE ===========
print("\n=== BREAK, CONTINUE, AND ELSE WITH WHILE ===")

# Break example
print("Break example (stop at 5):")
count = 1
while True:  # Infinite loop intentionally
    print(count, end=" ")
    if count == 5:
        break
    count += 1

# Continue example
print("\n\nContinue example (skip even numbers):")
count = 0
while count < 10:
    count += 1
    if count % 2 == 0:
        continue  # Skip even numbers
    print(count, end=" ")

# Else clause
print("\n\nElse clause example:")
count = 1
while count <= 5:
    print(count, end=" ")
    count += 1
else:
    print("\nLoop completed normally (no break)")

print("\nElse with break:")
count = 1
while count <= 5:
    if count == 3:
        break
    print(count, end=" ")
    count += 1
else:
    print("This won't print because of break")

# =========== REAL-WORLD APPLICATIONS ===========
print("\n=== REAL-WORLD APPLICATIONS ===")

# 1. Bank ATM Simulation
print("1. Bank ATM Simulation:")
balance = 1000.00
pin = "1234"

print("Welcome to Python Bank ATM")
attempts = 0

while attempts < 3:
    entered_pin = input("\nEnter your PIN: ")
    
    if entered_pin == pin:
        print("PIN accepted!")
        
        # ATM menu
        while True:
            print("\n=== ATM MENU ===")
            print("1. Check Balance")
            print("2. Deposit")
            print("3. Withdraw")
            print("4. Change PIN")
            print("5. Exit")
            
            choice = input("Enter choice (1-5): ")
            
            if choice == '1':
                print(f"Current balance: \\\${balance:.2f}")
            
            elif choice == '2':
                amount = float(input("Enter deposit amount: $"))
                if amount > 0:
                    balance += amount
                    print(f"Deposited \\\${amount:.2f}. New balance: \\\${balance:.2f}")
                else:
                    print("Invalid amount")
            
            elif choice == '3':
                amount = float(input("Enter withdrawal amount: $"))
                if 0 < amount <= balance:
                    balance -= amount
                    print(f"Withdrew \\\${amount:.2f}. New balance: \\\${balance:.2f}")
                else:
                    print("Invalid amount or insufficient funds")
            
            elif choice == '4':
                new_pin = input("Enter new PIN: ")
                confirm_pin = input("Confirm new PIN: ")
                
                if new_pin == confirm_pin:
                    pin = new_pin
                    print("PIN changed successfully")
                else:
                    print("PINs don't match")
            
            elif choice == '5':
                print("Thank you for banking with us!")
                break
            
            else:
                print("Invalid choice")
        
        break  # Exit pin attempt loop
    
    else:
        attempts += 1
        remaining = 3 - attempts
        if remaining > 0:
            print(f"Incorrect PIN. {remaining} attempts remaining.")
        else:
            print("Card blocked. Please contact customer service.")

# 2. Number Guessing Game
print("\n2. Number Guessing Game:")
import random

number_to_guess = random.randint(1, 100)
max_guesses = 7
guesses_taken = 0

print("I'm thinking of a number between 1 and 100.")
print(f"You have {max_guesses} guesses.")

while guesses_taken < max_guesses:
    guesses_left = max_guesses - guesses_taken
    print(f"\nGuesses left: {guesses_left}")
    
    try:
        guess = int(input("Enter your guess: "))
        guesses_taken += 1
        
        if guess < number_to_guess:
            print("Too low!")
        elif guess > number_to_guess:
            print("Too high!")
        else:
            print(f"Congratulations! You guessed it in {guesses_taken} tries!")
            break
        
        # Give hint after a few guesses
        if guesses_taken == 3:
            if number_to_guess % 2 == 0:
                print("Hint: The number is even")
            else:
                print("Hint: The number is odd")
        
        if guesses_taken == 5:
            tens_digit = number_to_guess // 10
            print(f"Hint: The number is in the {tens_digit * 10}s")
    
    except ValueError:
        print("Please enter a valid number")

if guesses_taken == max_guesses:
    print(f"\nSorry, you're out of guesses. The number was {number_to_guess}.")

# 3. Text-Based Adventure Game
print("\n3. Text-Based Adventure Game:")
print("You find yourself in a dark forest...")

health = 100
has_sword = False
has_key = False
current_room = "forest"

while health > 0:
    print(f"\nHealth: {health}")
    print(f"Location: {current_room}")
    
    if current_room == "forest":
        print("You are in a dark forest. Paths lead north and east.")
        action = input("Go north or east? (n/e): ").lower()
        
        if action == 'n':
            current_room = "cave"
            print("You enter a dark cave...")
        elif action == 'e':
            current_room = "clearing"
            print("You find a sunny clearing.")
        else:
            print("You wander aimlessly.")
            health -= 10
    
    elif current_room == "cave":
        print("The cave is dark and damp. You see something shiny.")
        if not has_sword:
            action = input("Take the sword? (y/n): ").lower()
            if action == 'y':
                has_sword = True
                print("You take the sword!")
        else:
            print("The cave is empty now.")
        
        action = input("Go back south? (y/n): ").lower()
        if action == 'y':
            current_room = "forest"
    
    elif current_room == "clearing":
        print("A bright clearing with a locked chest.")
        if has_key:
            action = input("Open the chest? (y/n): ").lower()
            if action == 'y':
                print("You found the treasure! YOU WIN!")
                break
        else:
            print("The chest is locked. You need a key.")
            if not has_key:
                action = input("Search for key? (y/n): ").lower()
                if action == 'y':
                    has_key = True
                    print("You found a key under a rock!")
        
        action = input("Go back west? (y/n): ").lower()
        if action == 'y':
            current_room = "forest"
    
    # Random event
    if random.random() < 0.2:  # 20% chance
        print("A wild animal attacks!")
        if has_sword:
            print("You fight it off with your sword.")
            health -= 10
        else:
            print("You get badly wounded!")
            health -= 30
    
    if health <= 0:
        print("\nYou have died. Game Over.")

# 4. Data Streaming Simulation
print("\n4. Data Streaming Simulation:")
print("Simulating incoming sensor data...")

data_stream = []
max_data_points = 20
anomaly_threshold = 100
consecutive_anomalies = 0
max_consecutive_anomalies = 3

# Simulate data stream
data_point = 0
while len(data_stream) < max_data_points:
    # Simulate sensor reading (normally 50-80, occasional spike)
    if random.random() < 0.1:  # 10% chance of anomaly
        reading = random.randint(100, 200)
        consecutive_anomalies += 1
        print(f"⚠️ ANOMALY DETECTED: {reading}")
    else:
        reading = random.randint(50, 80)
        consecutive_anomalies = 0
        print(f"Normal reading: {reading}")
    
    data_stream.append(reading)
    
    # Check for too many consecutive anomalies
    if consecutive_anomalies >= max_consecutive_anomalies:
        print("🚨 CRITICAL: Too many anomalies! Stopping data collection.")
        break
    
    # Simulate time between readings
    time.sleep(0.1)

print(f"\nData collection complete. Collected {len(data_stream)} readings.")
print(f"Average reading: {sum(data_stream)/len(data_stream):.1f}")
print(f"Maximum reading: {max(data_stream)}")

# 5. Progress Tracking System
print("\n5. Progress Tracking System:")
total_tasks = 10
completed_tasks = 0
current_task = 1

print(f"Project with {total_tasks} tasks")
print("=" * 50)

while current_task <= total_tasks:
    print(f"\nTask {current_task}/{total_tasks}")
    print(f"Overall progress: {completed_tasks}/{total_tasks} tasks")
    
    # Simulate task work
    print("Working on task...", end="")
    time.sleep(0.5)
    
    # 80% chance of success
    if random.random() < 0.8:
        print(" ✓ COMPLETED")
        completed_tasks += 1
    else:
        print(" ✗ FAILED - will retry")
        # Task stays at current number for retry
    
    current_task += 1

print("\n" + "=" * 50)
print(f"Project complete! {completed_tasks}/{total_tasks} tasks successful")
success_rate = (completed_tasks / total_tasks) * 100
print(f"Success rate: {success_rate:.1f}%")

# =========== ADVANCED PATTERNS ===========
print("\n=== ADVANCED WHILE LOOP PATTERNS ===")

# 1. Do-While pattern (Python doesn't have do-while, but we can simulate)
print("1. Simulating Do-While loop:")
# Do-while: Execute at least once, then check condition

# Traditional while (might not execute)
password = ""
while len(password) < 8:
    password = input("Enter password: ")
    if len(password) < 8:
        print("Too short!")

# Do-while simulation (always executes at least once)
while True:
    password = input("Enter password: ")
    if len(password) >= 8:
        break
    print("Too short! Try again.")

# 2. Retry pattern with exponential backoff
print("\n2. Retry with exponential backoff:")
import time

max_retries = 5
retry_count = 0
operation_successful = False

while retry_count < max_retries and not operation_successful:
    try:
        print(f"Attempt {retry_count + 1}/{max_retries}")
        # Simulate operation that might fail
        if random.random() < 0.3:  # 30% chance of failure
            raise Exception("Network error")
        
        print("Operation successful!")
        operation_successful = True
    
    except Exception as e:
        print(f"Operation failed: {e}")
        retry_count += 1
        
        if retry_count < max_retries:
            # Exponential backoff: wait longer each time
            wait_time = 2 ** retry_count  # 2, 4, 8, 16 seconds
            print(f"Waiting {wait_time} seconds before retry...")
            time.sleep(min(wait_time, 1))  # Cap at 1s for demo

if not operation_successful:
    print("Max retries exceeded. Operation failed.")

# 3. Producer-Consumer pattern (simplified)
print("\n3. Producer-Consumer pattern:")
buffer = []
buffer_size = 5
items_to_produce = 10
items_produced = 0
items_consumed = 0

print("Starting producer-consumer simulation...")

while items_consumed < items_to_produce:
    # Producer
    while len(buffer) < buffer_size and items_produced < items_to_produce:
        item = f"Item-{items_produced + 1}"
        buffer.append(item)
        items_produced += 1
        print(f"Produced: {item} (Buffer: {len(buffer)}/{buffer_size})")
        time.sleep(0.1)
    
    # Consumer
    while buffer and items_consumed < items_to_produce:
        item = buffer.pop(0)
        items_consumed += 1
        print(f"Consumed: {item} (Buffer: {len(buffer)}/{buffer_size})")
        time.sleep(0.2)

print(f"\nProduction complete: {items_produced} produced, {items_consumed} consumed")

# 4. State machine implementation
print("\n4. State Machine Implementation:")
print("Traffic Light Controller:")

states = ["GREEN", "YELLOW", "RED"]
current_state = 0
cycles = 3
cycle_count = 0

print("Starting traffic light controller...")

while cycle_count < cycles:
    state = states[current_state]
    print(f"\nCurrent state: {state}")
    
    # State-specific behavior
    if state == "GREEN":
        print("  Cars can go")
        duration = 5
    elif state == "YELLOW":
        print("  Cars should prepare to stop")
        duration = 2
    elif state == "RED":
        print("  Cars must stop")
        duration = 4
        cycle_count += 1
        print(f"  Cycle {cycle_count}/{cycles} complete")
    
    # Countdown timer
    for i in range(duration, 0, -1):
        print(f"  {i}...", end=" ")
        time.sleep(0.3)
    print()
    
    # Transition to next state
    current_state = (current_state + 1) % len(states)

print("\nTraffic light simulation complete.")

# 5. Real-time monitoring system
print("\n5. Real-time Monitoring System:")
print("System monitoring started (press Ctrl+C to stop)...")

cpu_threshold = 80
memory_threshold = 90
alert_cooldown = 5  # seconds
last_alert_time = 0

try:
    while True:
        # Simulate system metrics
        cpu_usage = random.randint(30, 100)
        memory_usage = random.randint(50, 95)
        current_time = time.time()
        
        print(f"\rCPU: {cpu_usage:3}% | Memory: {memory_usage:3}%", end="")
        
        # Check thresholds
        if cpu_usage > cpu_threshold or memory_usage > memory_threshold:
            if current_time - last_alert_time > alert_cooldown:
                print(f"\n⚠️ ALERT: ", end="")
                if cpu_usage > cpu_threshold:
                    print(f"High CPU usage ({cpu_usage}%) ", end="")
                if memory_usage > memory_threshold:
                    print(f"High memory usage ({memory_usage}%)", end="")
                print()
                last_alert_time = current_time
        
        time.sleep(1)

except KeyboardInterrupt:
    print("\n\nMonitoring stopped.")

# =========== COMMON PITFALLS AND SOLUTIONS ===========
print("\n=== COMMON PITFALLS AND SOLUTIONS ===")

# Pitfall 1: Infinite loops
print("Pitfall 1: Forgetting to update loop variable")
"""
x = 0
while x < 5:
    print(x)  # x never increases - INFINITE!
"""

print("Solution: Always update loop variable")
x = 0
while x < 5:
    print(x, end=" ")
    x += 1  # Critical!

# Pitfall 2: Off-by-one errors
print("\n\nPitfall 2: Off-by-one errors")
print("Counting from 1 to 5:")

# Wrong: Counts 0-4
x = 0
while x < 5:
    print(x + 1, end=" ")  # Have to add 1
    x += 1

print("\nBetter: Set bounds correctly")
x = 1
while x <= 5:
    print(x, end=" ")
    x += 1

# Pitfall 3: Complex conditions
print("\n\nPitfall 3: Overly complex conditions")
"""
while (x < 10 and y > 0) or (not z and a == b):
    # Hard to understand and maintain
"""
print("Solution: Use variables for complex conditions")
condition1 = x < 10 and y > 0
condition2 = not z and a == b
while condition1 or condition2:
    # Much clearer
    pass

# Pitfall 4: Not handling user input properly
print("\nPitfall 4: Infinite loop on invalid input")
"""
while True:
    choice = input("Enter 1-3: ")
    if choice == '1':
        break
    # What if user enters '4' or 'abc'? Infinite loop!
"""

print("Solution: Handle all cases")
while True:
    choice = input("Enter 1-3: ")
    if choice in ['1', '2', '3']:
        break
    else:
        print("Invalid choice. Please enter 1, 2, or 3.")

# =========== PERFORMANCE CONSIDERATIONS ===========
print("\n=== PERFORMANCE CONSIDERATIONS ===")

# Busy waiting vs. event-driven
print("Busy waiting (inefficient):")
"""
while not data_available():
    pass  # Waste CPU cycles checking constantly
"""

print("Event-driven or timed checks (better):")
"""
import time
while not data_available():
    time.sleep(0.1)  # Check every 0.1 seconds instead of constantly
"""

# Memory management in long-running loops
print("\nMemory management in long-running loops:")
data = []
counter = 0

while counter < 1000:
    # Process data
    processed = [x * 2 for x in data]
    
    # Clear old data if not needed
    if len(data) > 100:
        data = data[-100:]  # Keep only last 100 items
    
    counter += 1

print("Keeps memory usage under control by clearing old data")

# =========== PRACTICAL EXERCISE: SCHEDULER ===========
print("\n=== PRACTICAL EXERCISE: TASK SCHEDULER ===")

class TaskScheduler:
    """Simple task scheduler using while loops."""
    
    def __init__(self):
        self.tasks = []
        self.running = False
    
    def add_task(self, name, interval, func):
        """Add a task to be executed at regular intervals."""
        self.tasks.append({
            'name': name,
            'interval': interval,
            'func': func,
            'last_run': 0
        })
    
    def run(self, duration=30):
        """Run the scheduler for specified duration."""
        import time
        
        self.running = True
        start_time = time.time()
        print(f"Scheduler started. Running for {duration} seconds...")
        
        while self.running and (time.time() - start_time) < duration:
            current_time = time.time()
            
            for task in self.tasks:
                # Check if it's time to run this task
                if current_time - task['last_run'] >= task['interval']:
                    print(f"[{time.ctime(current_time)}] Running: {task['name']}")
                    try:
                        task['func']()
                    except Exception as e:
                        print(f"Error in task {task['name']}: {e}")
                    
                    task['last_run'] = current_time
            
            # Small sleep to prevent busy waiting
            time.sleep(0.1)
        
        print("\nScheduler stopped.")

# Example usage
def task1():
    print("  Task 1: Checking system status...")

def task2():
    print("  Task 2: Logging data...")

def task3():
    print("  Task 3: Sending heartbeat...")

# Create and run scheduler
scheduler = TaskScheduler()
scheduler.add_task("System Check", 2, task1)      # Every 2 seconds
scheduler.add_task("Data Logger", 5, task2)       # Every 5 seconds
scheduler.add_task("Heartbeat", 10, task3)        # Every 10 seconds

# Run for 15 seconds
scheduler.run(15)
</pre>
</div>

<h3>Today's Hands-On Exercise</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task 1: Interactive Quiz Game (60 minutes)</b>
    <p>Create a quiz game that:</p>
    <ul>
        <li>Loads questions from a data structure</li>
        <li>Tracks score and progress</li>
        <li>Has multiple difficulty levels</li>
        <li>Includes lifelines (skip, 50/50, ask audience)</li>
        <li>Shows progress bar and timer</li>
        <li>Saves high scores to file</li>
        <li>Has replay capability</li>
    </ul>
    
    <b>Task 2: Process Simulator (45 minutes)</b>
    <p>Create a process simulation system that:</p>
    <ul>
        <li>Simulates multiple concurrent processes</li>
        <li>Uses queues and scheduling algorithms</li>
        <li>Handles process creation, execution, and termination</li>
        <li>Simulates CPU scheduling (FCFS, Round Robin)</li>
        <li>Generates statistics (throughput, wait time)</li>
        <li>Visualizes process states</li>
    </ul>
    
    <b>Task 3: Real-time Data Monitor (45 minutes)</b>
    <p>Create a monitoring system that:</p>
    <ul>
        <li>Simulates incoming sensor data</li>
        <li>Detects anomalies and patterns</li>
        <li>Generates alerts based on thresholds</li>
        <li>Logs all events with timestamps</li>
        <li>Provides real-time dashboard</li>
        <li>Exports reports periodically</li>
    </ul>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Build a "Bank Transaction Processing System"</b>
    
    <b>Requirements:</b>
    <ul>
        <li><b>Transaction Queue:</b> Handle incoming transactions</li>
        <li><b>Balance Management:</b> Process deposits, withdrawals, transfers</li>
        <li><b>Fraud Detection:</b> Detect suspicious patterns</li>
        <li><b>Transaction Logging:</b> Maintain complete audit trail</li>
        <li><b>Report Generation:</b> Daily summaries, anomaly reports</li>
        <li><b>Real-time Processing:</b> Simulate continuous operation</li>
    </ul>
    
    <b>While Loop Patterns to Implement:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
1. Main processing loop: while running:
2. Input validation: while invalid_input:
3. Retry logic: while attempts < max_attempts:
4. Queue processing: while queue_not_empty:
5. Time-based: while time_elapsed < duration:
6. Condition-based: while balance > 0:
7. Event-driven: while not shutdown_signal:
    </pre>
    
    <b>Features:</b>
    <ul>
        <li>Simulate concurrent transactions</li>
        <li>Handle transaction failures with retries</li>
        <li>Detect and flag suspicious activity</li>
        <li>Generate real-time alerts</li>
        <li>Maintain transaction history</li>
        <li>Provide admin control panel</li>
        <li>Export data for reconciliation</li>
    </ul>
    
    <b>Sample Transaction Flow:</b>
    <pre style="background: #f5f5f5; padding: 10px;">
while system_running:
    # Get next transaction
    # Validate transaction
    # Check fraud patterns
    # Process if valid
    # Update balances
    # Log transaction
    # Generate alert if needed
    # Check for shutdown signal
    </pre>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>While Loop Syntax:</b> Mastering while condition: pattern</li>
    <li><b>Loop Control:</b> Using break, continue, and else effectively</li>
    <li><b>Infinite Loops:</b> Intentional vs accidental, and how to control them</li>
    <li><b>Common Patterns:</b> Counter, sentinel, validation, menu-driven</li>
    <li><b>Real-time Applications:</b> Games, simulations, monitoring systems</li>
    <li><b>Error Prevention:</b> Avoiding infinite loops and off-by-one errors</li>
    <li><b>Advanced Patterns:</b> Do-while simulation, exponential backoff, state machines</li>
    <li><b>Performance:</b> Efficient loop design for long-running processes</li>
    <li><b>Debugging:</b> Techniques for troubleshooting while loops</li>
    <li><b>Best Practices:</b> Writing maintainable while loop code</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 While Loop Best Practices:</h3>
    <ul>
        <li><b>Always initialize loop variables:</b> Ensure they have valid starting values</li>
        <li><b>Update loop variables inside the loop:</b> Prevent infinite loops</li>
        <li><b>Use clear condition names:</b> while is_valid: vs while x:</li>
        <li><b>Consider maximum iterations:</b> Add fail-safes for potentially infinite loops</li>
        <li><b>Break complex conditions into variables:</b> Improves readability</li>
        <li><b>Use while True with break:</b> For loops that need to run at least once</li>
        <li><b>Handle all exit conditions:</b> Make sure loop can always terminate</li>
        <li><b>Avoid busy waiting:</b> Use time.sleep() for polling scenarios</li>
        <li><b>Document loop invariants:</b> What stays true throughout the loop?</li>
        <li><b>Test edge cases:</b> Empty inputs, boundary values, error conditions</li>
        <li><b>Consider alternative approaches:</b> Sometimes recursion or for loops are better</li>
        <li><b>Clean up resources:</b> Ensure files/sockets are closed when loop ends</li>
    </ul>
</div>
`
    },

    // WEEK 3: DATA STRUCTURES
        "3-1": {
            icon: "fa-list",
            title: "Lists and Arrays",
            html: `<h1>Week 3, Day 1: Data Structures - Lists and Arrays</h1>
    <p>Today we'll learn how to store and manage collections of data using lists and arrays.</p>

    <div class="analogy-box">
        <b>Analogy: Bookshelf vs Shopping Cart 📚</b><br/>
        <ul style="margin-top: 10px;">
            <li><b>List/Array</b> = A bookshelf with numbered positions</li>
            <li><b>Index</b> = The shelf number (starting from 0!)</li>
            <li><b>Element</b> = The book on that shelf</li>
            <li><b>Dictionary</b> = Shopping cart (labeled items)</li>
        </ul>
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Creating and Accessing Lists</li>
        <li>List Methods and Operations</li>
        <li>Common List Patterns</li>
        <li>Arrays vs Lists in Different Languages</li>
    </ul>

    <h3>In-Depth Explanation</h3>

    <b>a. Creating Lists in Python</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Empty list
            empty_list = []
            
            # List with initial values
            fruits = ["apple", "banana", "cherry", "date"]
            
            # Mixed data types (Python allows this)
            mixed = ["apple", 42, True, 3.14]
            
            # List from string using split()
            words = "hello world python".split()
            # Result: ["hello", "world", "python"]
        </pre>
    </div>

    <b>Indexing and Slicing</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            fruits = ["apple", "banana", "cherry", "date", "elderberry"]
            
            # Positive indexing (0-based)
            print(fruits[0])      # "apple"
            print(fruits[2])      # "cherry"
            
            # Negative indexing (from the end)
            print(fruits[-1])     # "elderberry" (last item)
            print(fruits[-2])     # "date" (second from last)
            
            # Slicing [start:stop:step]
            print(fruits[1:3])    # ["banana", "cherry"] (stops before index 3)
            print(fruits[:3])     # ["apple", "banana", "cherry"] (from start)
            print(fruits[2:])     # ["cherry", "date", "elderberry"] (to end)
            print(fruits[::2])    # ["apple", "cherry", "elderberry"] (every other)
            print(fruits[::-1])   # Reverse the list!
        </pre>
    </div>

    <b>Visual Representation:</b>
    <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center;">
        <table style="margin: 0 auto; border-collapse: collapse;">
            <tr>
                <th style="border: 2px solid #333; padding: 10px; background-color: #e0e0e0;">Index</th>
                <td style="border: 2px solid #333; padding: 10px;">0</td>
                <td style="border: 2px solid #333; padding: 10px;">1</td>
                <td style="border: 2px solid #333; padding: 10px;">2</td>
                <td style="border: 2px solid #333; padding: 10px;">3</td>
                <td style="border: 2px solid #333; padding: 10px;">4</td>
            </tr>
            <tr>
                <th style="border: 2px solid #333; padding: 10px; background-color: #e0e0e0;">Value</th>
                <td style="border: 2px solid #333; padding: 10px; background-color: lightgreen;">"apple"</td>
                <td style="border: 2px solid #333; padding: 10px; background-color: lightyellow;">"banana"</td>
                <td style="border: 2px solid #333; padding: 10px; background-color: lightblue;">"cherry"</td>
                <td style="border: 2px solid #333; padding: 10px; background-color: lightcoral;">"date"</td>
                <td style="border: 2px solid #333; padding: 10px; background-color: lavender;">"elderberry"</td>
            </tr>
            <tr>
                <th style="border: 2px solid #333; padding: 10px; background-color: #e0e0e0;">-Index</th>
                <td style="border: 2px solid #333; padding: 10px;">-5</td>
                <td style="border: 2px solid #333; padding: 10px;">-4</td>
                <td style="border: 2px solid #333; padding: 10px;">-3</td>
                <td style="border: 2px solid #333; padding: 10px;">-2</td>
                <td style="border: 2px solid #333; padding: 10px;">-1</td>
            </tr>
        </table>
    </div>

    <b>b. Essential List Methods</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            fruits = ["apple", "banana"]
            
            # Adding elements
            fruits.append("cherry")        # Add to end: ["apple", "banana", "cherry"]
            fruits.insert(1, "orange")     # Insert at index 1: ["apple", "orange", "banana", "cherry"]
            fruits.extend(["date", "fig"]) # Add multiple: ["apple", "orange", "banana", "cherry", "date", "fig"]
            
            # Removing elements
            fruits.remove("banana")        # Remove specific value
            popped = fruits.pop()          # Remove and return last: "fig"
            popped2 = fruits.pop(0)        # Remove and return index 0: "apple"
            
            # Finding elements
            index = fruits.index("orange") # Find index of value: 0
            count = fruits.count("cherry") # Count occurrences: 1
            
            # Sorting and reversing
            numbers = [3, 1, 4, 1, 5, 9]
            numbers.sort()                 # In-place sort: [1, 1, 3, 4, 5, 9]
            sorted_nums = sorted(numbers)  # New sorted list
            
            fruits.reverse()               # Reverse order
            fruits_copy = fruits.copy()    # Create shallow copy
            
            # Clear list
            fruits.clear()                 # Empty the list: []
        </pre>
    </div>

    <b>c. Common List Operations</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # List concatenation
            list1 = [1, 2, 3]
            list2 = [4, 5, 6]
            combined = list1 + list2      # [1, 2, 3, 4, 5, 6]
            
            # List repetition
            repeated = ["hi"] * 3         # ["hi", "hi", "hi"]
            
            # List comprehension (Powerful!)
            numbers = [1, 2, 3, 4, 5]
            squares = [x**2 for x in numbers]           # [1, 4, 9, 16, 25]
            evens = [x for x in numbers if x % 2 == 0]  # [2, 4]
            
            # Check if item exists
            if "apple" in fruits:
                print("We have apples!")
                
            # List length
            length = len(fruits)          # Number of items
            
            # Nested lists (2D array)
            matrix = [
                [1, 2, 3],
                [4, 5, 6],
                [7, 8, 9]
            ]
            print(matrix[1][2])           # 6 (row 1, column 2)
        </pre>
    </div>

    <b>d. Lists vs Arrays in Different Languages</b>
    <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid #ccc; padding: 8px; background-color: #e0e0e0;">Language</th>
                <th style="border: 1px solid #ccc; padding: 8px; background-color: #e0e0e0;">Dynamic List</th>
                <th style="border: 1px solid #ccc; padding: 8px; background-color: #e0e0e0;">Fixed Array</th>
                <th style="border: 1px solid #ccc; padding: 8px; background-color: #e0e0e0;">Notes</th>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Python</td>
                <td style="border: 1px solid #ccc; padding: 8px;">list</td>
                <td style="border: 1px solid #ccc; padding: 8px;">array (module) or numpy.array</td>
                <td style="border: 1px solid #ccc; padding: 8px;">Lists are dynamic, can hold mixed types</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">JavaScript</td>
                <td style="border: 1px solid #ccc; padding: 8px;">Array</td>
                <td style="border: 1px solid #ccc; padding: 8px;">TypedArray</td>
                <td style="border: 1px solid #ccc; padding: 8px;">JavaScript arrays are dynamic objects</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Java</td>
                <td style="border: 1px solid #ccc; padding: 8px;">ArrayList</td>
                <td style="border: 1px solid #ccc; padding: 8px;">Array</td>
                <td style="border: 1px solid #ccc; padding: 8px;">Arrays fixed size, ArrayList dynamic</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">C#</td>
                <td style="border: 1px solid #ccc; padding: 8px;">List<T></td>
                <td style="border: 1px solid #ccc; padding: 8px;">Array</td>
                <td style="border: 1px solid #ccc; padding: 8px;">Generic lists, arrays fixed</td>
            </tr>
        </table>
    </div>

    <hr/>

    <h3>Hands-On Exercise: Inventory Management System</h3>
    <b>Task:</b> Build a simple inventory management system using lists<br/><br/>

    <b>Requirements:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Store product names in a list<br/>
        2. Store product prices in a separate list<br/>
        3. Store product quantities in a third list<br/>
        4. Implement CRUD operations (Create, Read, Update, Delete)<br/>
        5. Calculate total inventory value<br/>
    </div>

    <b>Python Implementation:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Initialize inventory lists
            products = ["Laptop", "Mouse", "Keyboard", "Monitor"]
            prices = [999.99, 25.50, 45.00, 299.99]
            quantities = [10, 50, 30, 15]
            
            # Function to display inventory
            def display_inventory():
                print("Current Inventory:")
                print("-" * 40)
                for i in range(len(products)):
                    total = prices[i] * quantities[i]
                    print(f"{i}: {products[i]} - \\\${prices[i]:.2f} x {quantities[i]} = \\\${total:.2f}")
            
            # Function to add a product
            def add_product(name, price, quantity):
                products.append(name)
                prices.append(price)
                quantities.append(quantity)
                print(f"Added {name} to inventory.")
            
            # Function to update quantity
            def update_quantity(index, new_quantity):
                if 0 <= index < len(quantities):
                    old_qty = quantities[index]
                    quantities[index] = new_quantity
                    print(f"Updated {products[index]} quantity from {old_qty} to {new_quantity}")
                else:
                    print("Invalid index!")
            
            # Function to calculate total value
            def calculate_total_value():
                total = 0
                for i in range(len(products)):
                    total += prices[i] * quantities[i]
                return total
            
            # Test the functions
            display_inventory()
            add_product("Headphones", 79.99, 20)
            update_quantity(1, 60)
            print(f"Total inventory value: \\\${calculate_total_value():.2f}")
        </pre>
    </div>

    <b>Challenge: Improve with Nested Lists</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Step 1:</b> Convert to single list of dictionaries<br/>
        <b>Step 2:</b> Add search functionality by product name<br/>
        <b>Step 3:</b> Implement sorting by price or quantity<br/>
        <b>Step 4:</b> Add inventory alerts for low stock<br/>
        
        <pre style="margin-top: 10px;">
            # Improved structure using list of dictionaries
            inventory = [
                {"name": "Laptop", "price": 999.99, "quantity": 10},
                {"name": "Mouse", "price": 25.50, "quantity": 50},
                {"name": "Keyboard", "price": 45.00, "quantity": 30},
            ]
            
            # Search function example
            def search_product(name):
                for product in inventory:
                    if product["name"].lower() == name.lower():
                        return product
                return None
        </pre>
    </div>

    <hr/>

    <h3>Common Mistakes</h3>

    <b>Mistake 1: Index out of range</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG
            fruits = ["apple", "banana"]
            print(fruits[2])  # IndexError: list index out of range
            
            # RIGHT
            if len(fruits) > 2:
                print(fruits[2])
            # OR
            try:
                print(fruits[2])
            except IndexError:
                print("No item at that index")
        </pre>
    </div>

    <b>Mistake 2: Modifying list while iterating</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG - unpredictable behavior
            numbers = [1, 2, 3, 4, 5]
            for num in numbers:
                if num % 2 == 0:
                    numbers.remove(num)  # Modifies list during iteration!
            
            # RIGHT - create a copy or use list comprehension
            numbers = [1, 2, 3, 4, 5]
            numbers = [num for num in numbers if num % 2 != 0]  # Keeps only odds
            
            # OR iterate over copy
            for num in numbers[:]:  # Creates a slice copy
                if num % 2 == 0:
                    numbers.remove(num)
        </pre>
    </div>

    <b>Mistake 3: Confusing append() with extend()</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG - adds list as single element
            fruits = ["apple", "banana"]
            fruits.append(["cherry", "date"])
            print(fruits)  # ["apple", "banana", ["cherry", "date"]]
            
            # RIGHT - adds each element separately
            fruits = ["apple", "banana"]
            fruits.extend(["cherry", "date"])
            print(fruits)  # ["apple", "banana", "cherry", "date"]
            
            # OR use +
            fruits = fruits + ["cherry", "date"]
        </pre>
    </div>

    <hr/>

    <div class="assignment-box">
        <h4>Assignment: Personal Library Manager</h4>
        <p>Create a personal library management system using lists:</p>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Part 1: Basic Structure</b><br/>
            - Create lists for book titles, authors, and years<br/>
            - Initialize with at least 5 books<br/>
            - Display all books with their details<br/><br/>
            
            <b>Part 2: Operations</b><br/>
            - Add new books to the library<br/>
            - Remove books by title or index<br/>
            - Search for books by author or year<br/>
            - Sort books by title or year<br/><br/>
            
            <b>Part 3: Advanced Features</b><br/>
            - Track reading status (read/unread)<br/>
            - Calculate average publication year<br/>
            - Find oldest and newest books<br/>
            - Export library to a text file<br/><br/>
            
            <b>Technical Requirements:</b><br/>
            1. Use functions for each major operation<br/>
            2. Handle edge cases (empty lists, invalid input)<br/>
            3. Provide a menu-driven interface<br/>
            4. Use list comprehensions where appropriate<br/>
            5. Document your code with comments
        </div>
        
        <p><b>Bonus Challenge:</b> Convert your lists to a list of dictionaries where each book is represented as a dictionary with keys: title, author, year, read_status.</p>
        
        <div style="background-color: #e8f5e9; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Example Output:</b>
            <pre>
    Welcome to Personal Library Manager!

    Menu:
    1. View all books
    2. Add a book
    3. Remove a book
    4. Search books
    5. Sort books
    6. Statistics
    7. Exit

    Choice: 1

    Library Contents:
    1. "The Great Gatsby" by F. Scott Fitzgerald (1925) [Unread]
    2. "1984" by George Orwell (1949) [Read]
    3. "To Kill a Mockingbird" by Harper Lee (1960) [Unread]
    ...
            </pre>
        </div>
    </div>`
        },
        "3-2": {
            icon: "fa-book",
            title: "Dictionaries and Maps",
            html: `<h1>Week 3, Day 2: Dictionaries and Maps (Key-Value Pairs)</h1>
    <p>Today we'll learn about dictionaries - a powerful data structure that stores data as key-value pairs, perfect for organizing related information.</p>

    <div class="analogy-box">
        <b>Analogy: Real Dictionary vs Library Catalog 📖</b><br/>
        <ul style="margin-top: 10px;">
            <li><b>Dictionary</b> = Real dictionary (word → definition)</li>
            <li><b>Key</b> = Word you look up</li>
            <li><b>Value</b> = Definition you find</li>
            <li><b>Hash Map</b> = Library catalog (ISBN → book location)</li>
        </ul>
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Creating and Accessing Dictionaries</li>
        <li>Dictionary Methods and Operations</li>
        <li>Dictionary Comprehension</li>
        <li>Real-world Applications</li>
    </ul>

    <h3>In-Depth Explanation</h3>

    <b>a. Creating Dictionaries in Python</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Empty dictionary
            empty_dict = {}
            empty_dict2 = dict()
            
            # Dictionary with initial values
            student = {
                "name": "John Doe",
                "age": 21,
                "major": "Computer Science",
                "gpa": 3.8
            }
            
            # Dictionary with dict() constructor
            colors = dict(red="#FF0000", green="#00FF00", blue="#0000FF")
            
            # Nested dictionaries
            library = {
                "book1": {
                    "title": "1984",
                    "author": "George Orwell",
                    "year": 1949
                },
                "book2": {
                    "title": "Brave New World",
                    "author": "Aldous Huxley",
                    "year": 1932
                }
            }
        </pre>
    </div>

    <b>Accessing Dictionary Values</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            student = {"name": "Alice", "age": 22, "major": "Biology"}
            
            # Access using square brackets
            print(student["name"])      # "Alice"
            
            # Access with get() - safer
            print(student.get("age"))   # 22
            print(student.get("gpa"))   # None (key doesn't exist)
            print(student.get("gpa", "N/A"))  # "N/A" (default value)
            
            # Access nested values
            library = {"book1": {"title": "1984", "year": 1949}}
            print(library["book1"]["title"])  # "1984"
            
            # Check if key exists
            if "age" in student:
                print("Age is:", student["age"])
                
            # Keys must be immutable (strings, numbers, tuples)
            valid_keys = {
                "string_key": "value",
                42: "number_key",
                (1, 2): "tuple_key"  # Valid - tuple is immutable
                # [1, 2]: "list_key"  # INVALID - list is mutable!
            }
        </pre>
    </div>

    <b>Visual Representation:</b>
    <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center;">
        <table style="margin: 0 auto; border-collapse: collapse; width: 80%;">
            <tr>
                <th colspan="2" style="border: 2px solid #333; padding: 10px; background-color: #e0e0e0;">Dictionary: student</th>
            </tr>
            <tr>
                <th style="border: 1px solid #666; padding: 10px; background-color: #d0e7ff; width: 40%;">Key</th>
                <th style="border: 1px solid #666; padding: 10px; background-color: #d0ffd0; width: 60%;">Value</th>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">"name"</td>
                <td style="border: 1px solid #ccc; padding: 8px; font-family: monospace;">"John Doe"</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">"age"</td>
                <td style="border: 1px solid #ccc; padding: 8px; font-family: monospace;">21</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">"major"</td>
                <td style="border: 1px solid #ccc; padding: 8px; font-family: monospace;">"Computer Science"</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">"gpa"</td>
                <td style="border: 1px solid #ccc; padding: 8px; font-family: monospace;">3.8</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">"courses"</td>
                <td style="border: 1px solid #ccc; padding: 8px; font-family: monospace;">["CS101", "MATH201", "PHYS101"]</td>
            </tr>
        </table>
    </div>

    <b>b. Essential Dictionary Methods</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            student = {"name": "Bob", "age": 23, "major": "Physics"}
            
            # Adding/Updating values
            student["gpa"] = 3.7                # Add new key-value
            student.update({"year": "Junior", "age": 24})  # Update multiple
            
            # Removing values
            gpa = student.pop("gpa")            # Remove and return value
            student.popitem()                   # Remove last inserted (Python 3.7+)
            del student["age"]                  # Remove key
            student.clear()                     # Empty dictionary
            
            # Getting keys, values, and items
            keys = student.keys()               # dict_keys(['name', 'major'])
            values = student.values()           # dict_values(['Bob', 'Physics'])
            items = student.items()             # dict_items([('name', 'Bob'), ('major', 'Physics')])
            
            # Convert to list
            key_list = list(student.keys())
            
            # Copy dictionary
            student_copy = student.copy()       # Shallow copy
            import copy
            deep_copy = copy.deepcopy(student)  # Deep copy for nested dicts
            
            # Set default value
            student.setdefault("graduation_year", 2024)  # Only sets if not exists
        </pre>
    </div>

    <b>c. Dictionary Operations and Patterns</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Dictionary comprehension (like list comprehension)
            numbers = [1, 2, 3, 4, 5]
            squares = {x: x**2 for x in numbers}  # {1: 1, 2: 4, 3: 9, 4: 16, 5: 25}
            
            # Filter dictionary
            scores = {"Alice": 85, "Bob": 92, "Charlie": 78, "Diana": 95}
            high_scores = {k: v for k, v in scores.items() if v > 90}
            
            # Merging dictionaries (Python 3.9+)
            dict1 = {"a": 1, "b": 2}
            dict2 = {"b": 3, "c": 4}
            merged = dict1 | dict2               # {"a": 1, "b": 3, "c": 4}
            
            # For older Python
            merged = {**dict1, **dict2}          # Same result
            
            # Counting with dictionaries
            words = ["apple", "banana", "apple", "orange", "banana", "apple"]
            word_count = {}
            for word in words:
                word_count[word] = word_count.get(word, 0) + 1
            # Result: {"apple": 3, "banana": 2, "orange": 1}
            
            # Using collections.Counter
            from collections import Counter
            word_count = Counter(words)          # Counter({'apple': 3, 'banana': 2, 'orange': 1})
            
            # Grouping with dictionaries
            students = [
                {"name": "Alice", "grade": "A"},
                {"name": "Bob", "grade": "B"},
                {"name": "Charlie", "grade": "A"},
                {"name": "Diana", "grade": "C"}
            ]
            
            grouped = {}
            for student in students:
                grade = student["grade"]
                if grade not in grouped:
                    grouped[grade] = []
                grouped[grade].append(student["name"])
            # Result: {"A": ["Alice", "Charlie"], "B": ["Bob"], "C": ["Diana"]}
        </pre>
    </div>

    <b>d. Real-world Dictionary Applications</b>
    <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # 1. Configuration Settings
            config = {
                "database": {
                    "host": "localhost",
                    "port": 3306,
                    "user": "admin",
                    "password": "secret"
                },
                "app": {
                    "debug": True,
                    "log_level": "INFO",
                    "max_connections": 100
                }
            }
            
            # 2. API Response Parsing
            api_response = {
                "status": "success",
                "data": {
                    "users": [
                        {"id": 1, "name": "John"},
                        {"id": 2, "name": "Jane"}
                    ],
                    "total": 2
                },
                "timestamp": "2024-01-15T10:30:00Z"
            }
            
            # 3. Caching/Memoization
            cache = {}
            
            def expensive_calculation(n):
                if n in cache:
                    return cache[n]
                # Simulate expensive calculation
                result = n * n * n  # n^3
                cache[n] = result
                return result
            
            # 4. Translation/Conversion
            month_numbers = {
                "January": 1, "February": 2, "March": 3,
                "April": 4, "May": 5, "June": 6,
                "July": 7, "August": 8, "September": 9,
                "October": 10, "November": 11, "December": 12
            }
            
            month_name = "March"
            month_num = month_numbers.get(month_name, "Unknown")
        </pre>
    </div>

    <hr/>

    <h3>Hands-On Exercise: Student Grade Management System</h3>
    <b>Task:</b> Build a system to manage student grades using dictionaries<br/><br/>

    <b>Requirements:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Store student information (ID, name, grades)<br/>
        2. Add/remove students<br/>
        3. Add grades for assignments<br/>
        4. Calculate averages and letter grades<br/>
        5. Generate reports<br/>
    </div>

    <b>Python Implementation:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Initialize gradebook
            gradebook = {
                "S001": {
                    "name": "Alice Johnson",
                    "grades": {"math": 85, "science": 92, "history": 78}
                },
                "S002": {
                    "name": "Bob Smith",
                    "grades": {"math": 91, "science": 88, "history": 95}
                }
            }
            
            # Function to add student
            def add_student(student_id, name):
                gradebook[student_id] = {
                    "name": name,
                    "grades": {}
                }
                print(f"Added student {name} with ID {student_id}")
            
            # Function to add grade
            def add_grade(student_id, subject, grade):
                if student_id in gradebook:
                    gradebook[student_id]["grades"][subject] = grade
                    print(f"Added {subject} grade for {gradebook[student_id]['name']}")
                else:
                    print(f"Student ID {student_id} not found!")
            
            # Function to calculate average
            def calculate_average(student_id):
                if student_id in gradebook:
                    grades = gradebook[student_id]["grades"].values()
                    if grades:
                        average = sum(grades) / len(grades)
                        return round(average, 2)
                return 0
            
            # Function to get letter grade
            def get_letter_grade(average):
                if average >= 90:
                    return "A"
                elif average >= 80:
                    return "B"
                elif average >= 70:
                    return "C"
                elif average >= 60:
                    return "D"
                else:
                    return "F"
            
            # Function to display grade report
            def display_report():
                print("Grade Report")
                print("=" * 50)
                for student_id, info in gradebook.items():
                    avg = calculate_average(student_id)
                    letter = get_letter_grade(avg)
                    print(f"{student_id}: {info['name']}")
                    print(f"  Grades: {info['grades']}")
                    print(f"  Average: {avg} ({letter})")
                    print("-" * 30)
            
            # Test the functions
            add_student("S003", "Charlie Brown")
            add_grade("S003", "math", 88)
            add_grade("S003", "science", 85)
            display_report()
        </pre>
    </div>

    <b>Challenge: Advanced Features</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Step 1:</b> Add weighted grades (different subjects have different weights)<br/>
        <b>Step 2:</b> Implement class statistics (average, highest, lowest)<br/>
        <b>Step 3:</b> Add grade curves and extra credit<br/>
        <b>Step 4:</b> Save/load gradebook from JSON file<br/>
        
        <pre style="margin-top: 10px;">
            # Example of weighted grades
            weights = {"math": 0.4, "science": 0.4, "history": 0.2}
            
            def calculate_weighted_average(student_id):
                total = 0
                for subject, grade in gradebook[student_id]["grades"].items():
                    weight = weights.get(subject, 0.33)  # Default weight
                    total += grade * weight
                return round(total, 2)
            
            # Save to JSON file
            import json
            
            def save_gradebook(filename):
                with open(filename, 'w') as f:
                    json.dump(gradebook, f, indent=2)
            
            def load_gradebook(filename):
                global gradebook
                with open(filename, 'r') as f:
                    gradebook = json.load(f)
        </pre>
    </div>

    <hr/>

    <h3>Common Mistakes</h3>

    <b>Mistake 1: Using mutable keys</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG - lists are mutable
            my_dict = {}
            key = [1, 2, 3]
            my_dict[key] = "value"  # TypeError: unhashable type: 'list'
            
            # RIGHT - use tuple instead
            my_dict = {}
            key = (1, 2, 3)  # Tuple is immutable
            my_dict[key] = "value"  # Works!
        </pre>
    </div>

    <b>Mistake 2: Assuming order in older Python versions</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Python 3.6 and earlier: dictionaries are unordered
            # Python 3.7+: dictionaries maintain insertion order
            
            # For guaranteed order, use OrderedDict
            from collections import OrderedDict
            
            ordered_dict = OrderedDict()
            ordered_dict["a"] = 1
            ordered_dict["b"] = 2
            ordered_dict["c"] = 3
            
            # Always preserves insertion order
        </pre>
    </div>

    <b>Mistake 3: Modifying dictionary while iterating</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG - RuntimeError
            scores = {"Alice": 85, "Bob": 92, "Charlie": 78}
            for key in scores:
                if scores[key] < 80:
                    del scores[key]  # Modifying during iteration!
            
            # RIGHT - create list of keys to delete
            scores = {"Alice": 85, "Bob": 92, "Charlie": 78}
            to_delete = []
            for key in scores:
                if scores[key] < 80:
                    to_delete.append(key)
            
            for key in to_delete:
                del scores[key]
            
            # OR use dictionary comprehension
            scores = {k: v for k, v in scores.items() if v >= 80}
        </pre>
    </div>

    <hr/>

    <div class="assignment-box">
        <h4>Assignment: Movie Database Manager</h4>
        <p>Create a movie database manager using dictionaries:</p>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Part 1: Movie Structure</b><br/>
            - Each movie as dictionary with: title, year, director, genre, rating<br/>
            - Create initial database with at least 5 movies<br/>
            - Display all movies in formatted way<br/><br/>
            
            <b>Part 2: Database Operations</b><br/>
            - Add new movies to database<br/>
            - Remove movies by title<br/>
            - Search movies by director, genre, or year range<br/>
            - Update movie ratings<br/><br/>
            
            <b>Part 3: Advanced Features</b><br/>
            - Calculate average rating for each director<br/>
            - Group movies by genre<br/>
            - Find highest rated movies<br/>
            - Export database to CSV file<br/>
            - Import movies from JSON file<br/><br/>
            
            <b>Technical Requirements:</b><br/>
            1. Use nested dictionaries appropriately<br/>
            2. Implement error handling for invalid operations<br/>
            3. Use dictionary comprehensions<br/>
            4. Create a user-friendly menu interface<br/>
            5. Use proper data validation
        </div>
        
        <p><b>Bonus Challenge:</b> Implement a recommendation system that suggests movies based on genre preferences and ratings.</p>
        
        <div style="background-color: #e8f5e9; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Example Data Structure:</b>
            <pre>
    movie_database = {
        "tt0111161": {
            "title": "The Shawshank Redemption",
            "year": 1994,
            "director": "Frank Darabont",
            "genre": ["Drama"],
            "rating": 9.3,
            "cast": ["Tim Robbins", "Morgan Freeman"]
        },
        "tt0068646": {
            "title": "The Godfather",
            "year": 1972,
            "director": "Francis Ford Coppola",
            "genre": ["Crime", "Drama"],
            "rating": 9.2,
            "cast": ["Marlon Brando", "Al Pacino"]
        }
    }
            </pre>
        </div>
    </div>`
        },
        "3-3": {
            icon: "fa-cut",
            title: "List Manipulation",
            html: `<h1>Week 3, Day 3: Advanced List Manipulation</h1>
    <p>Today we'll master powerful list manipulation techniques including slicing, sorting, and advanced list operations that are essential for data processing.</p>

    <div class="analogy-box">
        <b>Analogy: Chef's Knife Skills 🔪</b><br/>
        <ul style="margin-top: 10px;">
            <li><b>Slicing</b> = Cutting vegetables precisely</li>
            <li><b>Sorting</b> = Organizing ingredients by size/type</li>
            <li><b>Comprehensions</b> = Recipe that creates dish from ingredients</li>
            <li><b>Map/Filter</b> = Food processor operations</li>
        </ul>
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Advanced Slicing Techniques</li>
        <li>Sorting and Custom Sorting</li>
        <li>List Comprehensions and Generator Expressions</li>
        <li>Functional Programming with Lists</li>
    </ul>

    <h3>In-Depth Explanation</h3>

    <b>a. Advanced Slicing Techniques</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
            
            # Basic slices
            print(numbers[2:6])      # [2, 3, 4, 5]
            print(numbers[:5])       # [0, 1, 2, 3, 4]
            print(numbers[5:])       # [5, 6, 7, 8, 9]
            
            # Step slicing
            print(numbers[::2])      # [0, 2, 4, 6, 8] (every other)
            print(numbers[1::2])     # [1, 3, 5, 7, 9] (odd indices)
            print(numbers[::3])      # [0, 3, 6, 9] (every third)
            
            # Negative step (reverse)
            print(numbers[::-1])     # [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
            print(numbers[5:2:-1])   # [5, 4, 3] (reverse slice)
            
            # Modifying with slices
            numbers[2:5] = [20, 30, 40]  # Replace slice
            print(numbers)           # [0, 1, 20, 30, 40, 5, 6, 7, 8, 9]
            
            numbers[::2] = [100, 100, 100, 100, 100]  # Replace every other
            print(numbers)           # [100, 1, 100, 30, 100, 5, 100, 7, 100, 9]
            
            # Deleting slices
            del numbers[3:7]         # Remove elements 3-6
            print(numbers)           # [100, 1, 100, 7, 100, 9]
        </pre>
    </div>

    <b>b. Sorting and Custom Sorting</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Basic sorting
            numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5]
            
            # In-place sort (modifies original)
            numbers.sort()
            print(numbers)           # [1, 1, 2, 3, 4, 5, 5, 6, 9]
            
            # Create new sorted list (original unchanged)
            sorted_numbers = sorted(numbers)
            
            # Reverse sort
            numbers.sort(reverse=True)
            print(numbers)           # [9, 6, 5, 5, 4, 3, 2, 1, 1]
            
            # Sorting strings
            fruits = ["banana", "apple", "cherry", "date"]
            fruits.sort()
            print(fruits)            # ["apple", "banana", "cherry", "date"]
            
            # Case-insensitive sort
            words = ["Apple", "banana", "cherry", "Date"]
            words.sort(key=str.lower)
            print(words)             # ["Apple", "banana", "cherry", "Date"]
            
            # Custom sorting with key function
            students = [
                ("Alice", 85),
                ("Bob", 92),
                ("Charlie", 78),
                ("Diana", 95)
            ]
            
            # Sort by grade (second element)
            students.sort(key=lambda x: x[1])
            print(students)          # [('Charlie', 78), ('Alice', 85), ('Bob', 92), ('Diana', 95)]
            
            # Sort by grade descending
            students.sort(key=lambda x: x[1], reverse=True)
            
            # Multiple sort criteria
            people = [
                ("Alice", 25, "Engineer"),
                ("Bob", 30, "Designer"),
                ("Charlie", 25, "Manager"),
                ("Diana", 30, "Engineer")
            ]
            
            # Sort by age, then by name
            people.sort(key=lambda x: (x[1], x[0]))
            print(people)            # Sorted by age, then alphabetically
            
            # Using itemgetter for cleaner code
            from operator import itemgetter
            students.sort(key=itemgetter(1))  # Same as lambda x: x[1]
        </pre>
    </div>

    <b>c. List Comprehensions - The Swiss Army Knife</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Basic comprehension
            numbers = [1, 2, 3, 4, 5]
            squares = [x**2 for x in numbers]
            # [1, 4, 9, 16, 25]
            
            # With condition (filter)
            evens = [x for x in numbers if x % 2 == 0]
            # [2, 4]
            
            # If-else in comprehension
            labels = ["even" if x % 2 == 0 else "odd" for x in numbers]
            # ["odd", "even", "odd", "even", "odd"]
            
            # Nested loops
            matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
            flattened = [num for row in matrix for num in row]
            # [1, 2, 3, 4, 5, 6, 7, 8, 9]
            
            # Multiple conditions
            numbers = range(1, 21)
            result = [
                x for x in numbers 
                if x % 2 == 0 
                and x % 3 == 0 
                and x > 10
            ]
            # [12, 18]
            
            # Dictionary comprehension
            squares_dict = {x: x**2 for x in numbers if x % 2 == 0}
            # {2: 4, 4: 16, 6: 36, ...}
            
            # Set comprehension
            unique_words = {word.lower() for word in ["Apple", "apple", "Banana", "banana"]}
            # {"apple", "banana"}
        </pre>
    </div>

    <b>d. Generator Expressions (Memory Efficient)</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # List comprehension (eager evaluation)
            squares_list = [x**2 for x in range(1000000)]  # Creates list in memory
            
            # Generator expression (lazy evaluation)
            squares_gen = (x**2 for x in range(1000000))  # Creates generator object
            
            # Generator doesn't compute until needed
            print(next(squares_gen))  # 0
            print(next(squares_gen))  # 1
            print(next(squares_gen))  # 4
            
            # Convert generator to list (if needed)
            first_ten = list(next(squares_gen) for _ in range(10))
            
            # Using with sum(), max(), min() - memory efficient
            total = sum(x**2 for x in range(1000000))
            max_square = max(x**2 for x in range(1000000))
            
            # Generator with condition
            even_squares = (x**2 for x in range(100) if x % 2 == 0)
            
            # Practical example: Processing large files
            def read_large_file(filename):
                with open(filename) as f:
                    for line in f:
                        yield line.strip()
            
            # Process line by line without loading entire file
            long_lines = (line for line in read_large_file("data.txt") if len(line) > 100)
        </pre>
    </div>

    <b>e. Functional Programming with Lists</b>
    <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            numbers = [1, 2, 3, 4, 5]
            
            # map() - Apply function to each element
            squared = list(map(lambda x: x**2, numbers))
            # [1, 4, 9, 16, 25]
            
            # filter() - Keep elements that satisfy condition
            evens = list(filter(lambda x: x % 2 == 0, numbers))
            # [2, 4]
            
            # reduce() - Cumulative operation (requires import)
            from functools import reduce
            product = reduce(lambda x, y: x * y, numbers)
            # 120 (1*2*3*4*5)
            
            # sum() - Built-in reduce for addition
            total = sum(numbers)  # 15
            
            # all() and any()
            all_positive = all(x > 0 for x in numbers)  # True
            any_negative = any(x < 0 for x in numbers)  # False
            
            # enumerate() - Get index and value
            fruits = ["apple", "banana", "cherry"]
            for i, fruit in enumerate(fruits, start=1):
                print(f"{i}. {fruit}")
            # 1. apple
            # 2. banana
            # 3. cherry
            
            # zip() - Combine multiple lists
            names = ["Alice", "Bob", "Charlie"]
            scores = [85, 92, 78]
            for name, score in zip(names, scores):
                print(f"{name}: {score}")
            
            # Unzipping
            pairs = list(zip(names, scores))
            names_back, scores_back = zip(*pairs)
        </pre>
    </div>

    <hr/>

    <h3>Hands-On Exercise: Data Analysis Toolkit</h3>
    <b>Task:</b> Build a data analysis toolkit using advanced list manipulation techniques<br/><br/>

    <b>Requirements:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Process numerical datasets<br/>
        2. Implement statistical functions<br/>
        3. Filter and transform data<br/>
        4. Generate reports<br/>
    </div>

    <b>Python Implementation:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # Sample dataset
            sales_data = [
                {"product": "Laptop", "sales": [1500, 1800, 2200, 1900, 2100]},
                {"product": "Mouse", "sales": [200, 250, 180, 300, 220]},
                {"product": "Keyboard", "sales": [350, 400, 380, 420, 390]},
                {"product": "Monitor", "sales": [800, 850, 900, 780, 820]},
            ]
            
            # 1. Calculate total sales for each product
            def calculate_totals(data):
                return [
                    {
                        "product": item["product"],
                        "total": sum(item["sales"]),
                        "average": sum(item["sales"]) / len(item["sales"])
                    }
                    for item in data
                ]
            
            # 2. Find products with sales above threshold
            def filter_high_sales(data, threshold):
                return [
                    item["product"]
                    for item in data
                    if any(sale > threshold for sale in item["sales"])
                ]
            
            # 3. Calculate monthly totals
            def calculate_monthly_totals(data):
                # Assuming all products have same number of months
                num_months = len(data[0]["sales"])
                monthly_totals = []
                
                for month in range(num_months):
                    month_total = sum(item["sales"][month] for item in data)
                    monthly_totals.append(month_total)
                
                return monthly_totals
            
            # 4. Find best performing product each month
            def best_performing_by_month(data):
                num_months = len(data[0]["sales"])
                best_products = []
                
                for month in range(num_months):
                    # Create list of (product, sales) for this month
                    month_sales = [
                        (item["product"], item["sales"][month])
                        for item in data
                    ]
                    # Sort by sales descending
                    month_sales.sort(key=lambda x: x[1], reverse=True)
                    best_products.append(month_sales[0])
                
                return best_products
            
            # 5. Sales growth calculation
            def calculate_growth(data):
                growth_data = []
                
                for item in data:
                    sales = item["sales"]
                    if len(sales) >= 2:
                        growth = ((sales[-1] - sales[0]) / sales[0]) * 100
                        growth_data.append({
                            "product": item["product"],
                            "growth": round(growth, 2)
                        })
                
                return growth_data
            
            # Test the functions
            totals = calculate_totals(sales_data)
            print("Total sales:", totals)
            
            high_sales = filter_high_sales(sales_data, 2000)
            print("Products with sales > 2000:", high_sales)
            
            monthly = calculate_monthly_totals(sales_data)
            print("Monthly totals:", monthly)
            
            best = best_performing_by_month(sales_data)
            print("Best each month:", best)
            
            growth = calculate_growth(sales_data)
            print("Growth percentages:", growth)
        </pre>
    </div>

    <b>Challenge: Advanced Analytics</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Step 1:</b> Calculate moving averages (3-month)<br/>
        <b>Step 2:</b> Detect sales trends (increasing/decreasing)<br/>
        <b>Step 3:</b> Predict next month sales using simple regression<br/>
        <b>Step 4:</b> Generate formatted reports with rankings<br/>
        
        <pre style="margin-top: 10px;">
            # Moving average example
            def moving_average(sales, window=3):
                return [
                    sum(sales[i:i+window]) / window
                    for i in range(len(sales) - window + 1)
                ]
            
            # Trend detection
            def detect_trend(sales):
                if len(sales) < 2:
                    return "insufficient data"
                
                diffs = [sales[i+1] - sales[i] for i in range(len(sales)-1)]
                positive = sum(1 for d in diffs if d > 0)
                negative = sum(1 for d in diffs if d < 0)
                
                if positive > negative:
                    return "increasing"
                elif negative > positive:
                    return "decreasing"
                else:
                    return "stable"
            
            # Simple linear prediction
            def predict_next(sales):
                if len(sales) < 2:
                    return None
                
                # Simple average of last 3 months
                recent = sales[-3:] if len(sales) >= 3 else sales
                return sum(recent) / len(recent)
        </pre>
    </div>

    <hr/>

    <h3>Common Mistakes</h3>

    <b>Mistake 1: Modifying list while iterating with comprehension</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG - doesn't work as expected
            numbers = [1, 2, 3, 4, 5]
            numbers = [x for x in numbers if x > 2]  # This creates new list
            
            # If you need to modify in place:
            numbers[:] = [x for x in numbers if x > 2]  # Modifies original
            
            # OR use filter with assignment
            numbers = list(filter(lambda x: x > 2, numbers))
        </pre>
    </div>

    <b>Mistake 2: Forgetting that sort() modifies in-place</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG - loses original order
            data = [3, 1, 4, 1, 5]
            sorted_data = data.sort()  # sort() returns None!
            print(sorted_data)         # None
            
            # RIGHT
            data = [3, 1, 4, 1, 5]
            sorted_data = sorted(data)  # sorted() returns new list
            print(sorted_data)          # [1, 1, 3, 4, 5]
            print(data)                 # [3, 1, 4, 1, 5] (unchanged)
            
            # OR if you want to sort in place
            data.sort()
            sorted_data = data
        </pre>
    </div>

    <b>Mistake 3: Generator expression vs list comprehension performance</b>
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            # WRONG for small data (unnecessary complexity)
            small_data = range(10)
            result = list(x**2 for x in small_data)  # Generator unnecessary
            
            # BETTER for small data
            result = [x**2 for x in range(10)]
            
            # WRONG for large data (memory issues)
            large_data = range(1000000)
            result = [x**2 for x in large_data]  # Creates huge list
            
            # BETTER for large data
            result = (x**2 for x in range(1000000))  # Generator
            # Process one at a time
            
            # Rule of thumb:
            # - Use list comprehension when you need all results
            # - Use generator when processing large data or streaming
        </pre>
    </div>

    <hr/>

    <div class="assignment-box">
        <h4>Assignment: Stock Market Analyzer</h4>
        <p>Create a stock market analyzer using advanced list manipulation:</p>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Part 1: Data Processing</b><br/>
            - Read stock prices from list of dictionaries<br/>
            - Calculate daily price changes<br/>
            - Compute moving averages (5-day, 20-day)<br/>
            - Find highest and lowest prices<br/><br/>
            
            <b>Part 2: Analysis Functions</b><br/>
            - Calculate volatility (standard deviation)<br/>
            - Detect bullish/bearish trends<br/>
            - Find support and resistance levels<br/>
            - Calculate trading volume analysis<br/><br/>
            
            <b>Part 3: Portfolio Management</b><br/>
            - Track multiple stocks<br/>
            - Calculate portfolio value over time<br/>
            - Determine asset allocation percentages<br/>
            - Calculate overall portfolio performance<br/><br/>
            
            <b>Technical Requirements:</b><br/>
            1. Use list comprehensions extensively<br/>
            2. Implement generator expressions for large datasets<br/>
            3. Use functional programming (map, filter, reduce)<br/>
            4. Implement custom sorting for ranking<br/>
            5. Handle edge cases and errors
        </div>
        
        <p><b>Bonus Challenge:</b> Implement a simple trading strategy based on technical indicators and backtest it against historical data.</p>
        
        <div style="background-color: #e8f5e9; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Example Data Structure:</b>
            <pre>
    stock_data = {
        "AAPL": {
            "prices": [150.25, 152.30, 151.80, 153.45, 155.20],
            "volumes": [1000000, 1200000, 950000, 1100000, 1300000]
        },
        "GOOGL": {
            "prices": [2800.50, 2825.75, 2810.25, 2835.90, 2850.40],
            "volumes": [500000, 550000, 520000, 580000, 600000]
        }
    }

    # Calculate daily returns
    def calculate_returns(prices):
        return [
            ((prices[i] - prices[i-1]) / prices[i-1]) * 100
            for i in range(1, len(prices))
        ]
            </pre>
        </div>
    </div>`
        },
        "3-4": {
        icon: "fa-sync-alt",
        title: "Iterating Complex Data",
        html: `<h1>Week 3, Day 4: Iterating Through Complex Data Structures</h1>
<p>Today we'll master techniques for iterating through complex, nested data structures - a crucial skill for real-world data processing.</p>

<div class="analogy-box">
    <b>Analogy: Russian Nesting Dolls vs Treasure Hunt 🪆</b><br/>
    <ul style="margin-top: 10px;">
        <li><b>Nested Lists</b> = Russian dolls (containers within containers)</li>
        <li><b>Tree Structures</b> = Family tree (parent-child relationships)</li>
        <li><b>Graphs</b> = Road maps (connections between nodes)</li>
        <li><b>Recursive Iteration</b> = Treasure hunt with clues</li>
    </ul>
</div>

<h3>Key Topics</h3>
<ul>
    <li>Iterating Nested Lists and Dictionaries</li>
    <li>Recursive Iteration Techniques</li>
    <li>Tree and Graph Traversal</li>
    <li>Working with JSON-like Structures</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Iterating Nested Lists</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # 2D List (Matrix)
        matrix = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ]
        
        # Method 1: Nested for loops
        for row in matrix:
            for element in row:
                print(element, end=' ')
            print()
        # Output:
        # 1 2 3
        # 4 5 6
        # 7 8 9
        
        # Method 2: Using enumerate for indices
        for i, row in enumerate(matrix):
            for j, element in enumerate(row):
                print(f"matrix[{i}][{j}] = {element}")
        
        # Method 3: List comprehension for flattening
        flattened = [element for row in matrix for element in row]
        # [1, 2, 3, 4, 5, 6, 7, 8, 9]
        
        # Method 4: Using itertools.chain
        from itertools import chain
        flattened = list(chain.from_iterable(matrix))
        
        # Irregular nested lists
        irregular = [[1, 2], [3, 4, 5], [6], [7, 8, 9, 10]]
        
        # Handle irregular nesting with checks
        for sublist in irregular:
            if isinstance(sublist, list):
                for item in sublist:
                    print(item)
            else:
                print(sublist)
    </pre>
</div>

<b>b. Iterating Nested Dictionaries</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # Nested dictionary example
        company = {
            "name": "TechCorp",
            "departments": {
                "engineering": {
                    "manager": "Alice",
                    "employees": ["Bob", "Charlie", "Diana"],
                    "budget": 1000000
                },
                "sales": {
                    "manager": "Eve",
                    "employees": ["Frank", "Grace"],
                    "budget": 500000
                }
            },
            "locations": ["NYC", "SF", "London"]
        }
        
        # Method 1: Simple iteration
        for key, value in company.items():
            print(f"{key}: {value}")
        
        # Method 2: Recursive function for deep iteration
        def print_dict_structure(d, indent=0):
            for key, value in d.items():
                print("  " * indent + str(key), end=": ")
                if isinstance(value, dict):
                    print()
                    print_dict_structure(value, indent + 1)
                elif isinstance(value, list):
                    print(f"[List with {len(value)} items]")
                    # Optionally iterate list items
                    for i, item in enumerate(value):
                        print("  " * (indent + 1) + f"[{i}]: {item}")
                else:
                    print(value)
        
        print_dict_structure(company)
        
        # Method 3: Find specific values
        def find_values(d, target_key):
            results = []
            for key, value in d.items():
                if key == target_key:
                    results.append(value)
                elif isinstance(value, dict):
                    results.extend(find_values(value, target_key))
                elif isinstance(value, list):
                    for item in value:
                        if isinstance(item, dict):
                            results.extend(find_values(item, target_key))
            return results
        
        managers = find_values(company, "manager")
        print("Managers:", managers)  # ["Alice", "Eve"]
        
        # Method 4: Using recursion with path tracking
        def iterate_with_path(d, path=""):
            for key, value in d.items():
                current_path = f"{path}.{key}" if path else key
                if isinstance(value, dict):
                    iterate_with_path(value, current_path)
                else:
                    print(f"{current_path}: {value}")
        
        iterate_with_path(company)
    </pre>
</div>

<b>c. Recursive Iteration Patterns</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # General recursive iterator
        def recursive_iterate(data):
            if isinstance(data, dict):
                for key, value in data.items():
                    print(f"Key: {key}")
                    recursive_iterate(value)
            elif isinstance(data, list):
                for i, item in enumerate(data):
                    print(f"Item {i}:")
                    recursive_iterate(item)
            else:
                print(f"Value: {data}")
        
        # Recursive flatten for any nesting level
        def flatten(data):
            result = []
            if isinstance(data, list):
                for item in data:
                    if isinstance(item, (list, dict)):
                        result.extend(flatten(item))
                    else:
                        result.append(item)
            elif isinstance(data, dict):
                for value in data.values():
                    if isinstance(value, (list, dict)):
                        result.extend(flatten(value))
                    else:
                        result.append(value)
            else:
                result.append(data)
            return result
        
        # Example usage
        complex_data = [
            {"a": 1, "b": [2, 3, {"c": 4}]},
            [5, 6, {"d": 7, "e": [8, 9]}],
            10
        ]
        
        flattened = flatten(complex_data)
        print(flattened)  # [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        
        # Recursive search
        def recursive_search(data, target):
            if isinstance(data, dict):
                for key, value in data.items():
                    if key == target:
                        return value
                    elif isinstance(value, (dict, list)):
                        result = recursive_search(value, target)
                        if result is not None:
                            return result
            elif isinstance(data, list):
                for item in data:
                    if isinstance(item, (dict, list)):
                        result = recursive_search(item, target)
                        if result is not None:
                            return result
            return None
    </pre>
</div>

<b>d. Tree Traversal Algorithms</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # Tree node class
        class TreeNode:
            def __init__(self, value):
                self.value = value
                self.children = []
            
            def add_child(self, child_node):
                self.children.append(child_node)
        
        # Create a sample tree
        root = TreeNode("CEO")
        
        cto = TreeNode("CTO")
        cfo = TreeNode("CFO")
        
        dev1 = TreeNode("Dev Lead")
        dev2 = TreeNode("Dev Team")
        accountant = TreeNode("Accountant")
        
        cto.add_child(dev1)
        cto.add_child(dev2)
        cfo.add_child(accountant)
        
        root.add_child(cto)
        root.add_child(cfo)
        
        # Depth-First Search (DFS)
        def dfs(node, depth=0):
            print("  " * depth + node.value)
            for child in node.children:
                dfs(child, depth + 1)
        
        print("DFS Traversal:")
        dfs(root)
        
        # Breadth-First Search (BFS)
        from collections import deque
        
        def bfs(root):
            queue = deque([root])
            while queue:
                node = queue.popleft()
                print(node.value)
                for child in node.children:
                    queue.append(child)
        
        print("\nBFS Traversal:")
        bfs(root)
        
        # Find node by value
        def find_node(root, target_value):
            if root.value == target_value:
                return root
            
            for child in root.children:
                result = find_node(child, target_value)
                if result:
                    return result
            
            return None
        
        # Count nodes
        def count_nodes(node):
            count = 1  # Count current node
            for child in node.children:
                count += count_nodes(child)
            return count
        
        print(f"Total nodes: {count_nodes(root)}")
    </pre>
</div>

<b>e. Working with JSON-like Structures</b>
<div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        import json
        
        # Example JSON data (API response)
        json_data = '''
        {
            "company": {
                "name": "TechSolutions",
                "employees": [
                    {
                        "id": 1,
                        "name": "Alice",
                        "role": "Developer",
                        "skills": ["Python", "JavaScript", "SQL"],
                        "projects": [
                            {"name": "Project A", "status": "completed"},
                            {"name": "Project B", "status": "in-progress"}
                        ]
                    },
                    {
                        "id": 2,
                        "name": "Bob",
                        "role": "Designer",
                        "skills": ["UI/UX", "Figma", "Photoshop"],
                        "projects": [
                            {"name": "Project C", "status": "completed"}
                        ]
                    }
                ],
                "departments": {
                    "engineering": {"headcount": 15},
                    "design": {"headcount": 5},
                    "sales": {"headcount": 8}
                }
            }
        }
        '''
        
        # Parse JSON
        data = json.loads(json_data)
        
        # 1. Extract all employee names
        def get_all_employees(data):
            employees = []
            
            def extract_employees(obj):
                if isinstance(obj, dict):
                    if "employees" in obj:
                        employees.extend(obj["employees"])
                    for value in obj.values():
                        if isinstance(value, (dict, list)):
                            extract_employees(value)
                elif isinstance(obj, list):
                    for item in obj:
                        if isinstance(item, (dict, list)):
                            extract_employees(item)
            
            extract_employees(data)
            return employees
        
        all_employees = get_all_employees(data)
        employee_names = [emp["name"] for emp in all_employees]
        print("Employee names:", employee_names)
        
        # 2. Find employees with specific skill
        def find_employees_by_skill(data, skill):
            results = []
            
            def search(obj):
                if isinstance(obj, dict):
                    if "skills" in obj and skill in obj["skills"]:
                        results.append(obj["name"])
                    for value in obj.values():
                        search(value)
                elif isinstance(obj, list):
                    for item in obj:
                        search(item)
            
            search(data)
            return results
        
        python_devs = find_employees_by_skill(data, "Python")
        print("Python developers:", python_devs)
        
        # 3. Count projects by status
        def count_projects_by_status(data):
            status_count = {}
            
            def count(obj):
                if isinstance(obj, dict):
                    if "projects" in obj:
                        for project in obj["projects"]:
                            status = project["status"]
                            status_count[status] = status_count.get(status, 0) + 1
                    for value in obj.values():
                        count(value)
                elif isinstance(obj, list):
                    for item in obj:
                        count(item)
            
            count(data)
            return status_count
        
        project_stats = count_projects_by_status(data)
        print("Project status count:", project_stats)
        
        # 4. Transform data structure
        def create_employee_directory(data):
            directory = {}
            
            def process(obj):
                if isinstance(obj, dict):
                    if "name" in obj and "role" in obj:
                        directory[obj["name"]] = {
                            "role": obj["role"],
                            "skills": obj.get("skills", []),
                            "project_count": len(obj.get("projects", []))
                        }
                    for value in obj.values():
                        process(value)
                elif isinstance(obj, list):
                    for item in obj:
                        process(item)
            
            process(data)
            return directory
        
        directory = create_employee_directory(data)
        print("Employee directory:", json.dumps(directory, indent=2))
    </pre>
</div>

<hr/>

<h3>Hands-On Exercise: Social Network Analyzer</h3>
<b>Task:</b> Build a social network analyzer that processes complex friend relationships<br/><br/>

<b>Requirements:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    1. Process nested user data with friends lists<br/>
    2. Find connections between users<br/>
    3. Calculate network metrics<br/>
    4. Recommend friends<br/>
</div>

<b>Python Implementation:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # Social network data
        social_network = {
            "users": [
                {
                    "id": 1,
                    "name": "Alice",
                    "friends": [2, 3, 4],
                    "interests": ["music", "sports", "tech"]
                },
                {
                    "id": 2,
                    "name": "Bob",
                    "friends": [1, 3, 5],
                    "interests": ["sports", "movies", "food"]
                },
                {
                    "id": 3,
                    "name": "Charlie",
                    "friends": [1, 2, 4, 6],
                    "interests": ["tech", "music", "books"]
                },
                {
                    "id": 4,
                    "name": "Diana",
                    "friends": [1, 3, 5],
                    "interests": ["music", "art", "tech"]
                },
                {
                    "id": 5,
                    "name": "Eve",
                    "friends": [2, 4, 6],
                    "interests": ["sports", "food", "travel"]
                },
                {
                    "id": 6,
                    "name": "Frank",
                    "friends": [3, 5],
                    "interests": ["tech", "books", "movies"]
                }
            ]
        }
        
        # 1. Find mutual friends between two users
        def find_mutual_friends(network, user1_id, user2_id):
            user1 = next((u for u in network["users"] if u["id"] == user1_id), None)
            user2 = next((u for u in network["users"] if u["id"] == user2_id), None)
            
            if not user1 or not user2:
                return []
            
            # Convert to sets for intersection
            friends1 = set(user1["friends"])
            friends2 = set(user2["friends"])
            
            mutual_ids = friends1.intersection(friends2)
            
            # Get names of mutual friends
            mutual_friends = []
            for user in network["users"]:
                if user["id"] in mutual_ids:
                    mutual_friends.append(user["name"])
            
            return mutual_friends
        
        # 2. Find friends of friends (suggestions)
        def friend_suggestions(network, user_id):
            user = next((u for u in network["users"] if u["id"] == user_id), None)
            if not user:
                return []
            
            suggestions = set()
            current_friends = set(user["friends"])
            
            # For each friend, add their friends
            for friend_id in user["friends"]:
                friend = next((u for u in network["users"] if u["id"] == friend_id), None)
                if friend:
                    # Add friends of friend, excluding self and existing friends
                    for fof_id in friend["friends"]:
                        if fof_id != user_id and fof_id not in current_friends:
                            suggestions.add(fof_id)
            
            # Get names of suggested friends
            suggested_names = []
            for user in network["users"]:
                if user["id"] in suggestions:
                    suggested_names.append(user["name"])
            
            return suggested_names
        
        # 3. Calculate network centrality (simplified)
        def calculate_centrality(network):
            centrality = {}
            
            for user in network["users"]:
                # Simple centrality = number of friends
                centrality[user["name"]] = len(user["friends"])
            
            return centrality
        
        # 4. Find users by common interests
        def find_by_interests(network, interests):
            matches = []
            
            for user in network["users"]:
                # Count matching interests
                common = set(user["interests"]).intersection(set(interests))
                if common:
                    matches.append({
                        "name": user["name"],
                        "common_interests": list(common),
                        "match_count": len(common)
                    })
            
            # Sort by number of matching interests
            matches.sort(key=lambda x: x["match_count"], reverse=True)
            return matches
        
        # 5. Path between two users (BFS)
        def find_connection_path(network, start_id, end_id):
            from collections import deque
            
            # BFS queue stores (user_id, path)
            queue = deque([(start_id, [])])
            visited = set([start_id])
            
            while queue:
                current_id, path = queue.popleft()
                
                if current_id == end_id:
                    return path + [current_id]
                
                current_user = next((u for u in network["users"] if u["id"] == current_id), None)
                if not current_user:
                    continue
                
                for friend_id in current_user["friends"]:
                    if friend_id not in visited:
                        visited.add(friend_id)
                        queue.append((friend_id, path + [current_id]))
            
            return []  # No path found
        
        # Test the functions
        mutual = find_mutual_friends(social_network, 1, 2)
        print("Mutual friends between Alice and Bob:", mutual)
        
        suggestions = friend_suggestions(social_network, 1)
        print("Friend suggestions for Alice:", suggestions)
        
        centrality = calculate_centrality(social_network)
        print("Network centrality:", centrality)
        
        interest_matches = find_by_interests(social_network, ["tech", "music"])
        print("Users interested in tech and music:", interest_matches)
        
        path = find_connection_path(social_network, 1, 6)
        print("Path from Alice to Frank:", path)
    </pre>
</div>

<b>Challenge: Advanced Network Analysis</b>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Step 1:</b> Calculate clustering coefficient for each user<br/>
    <b>Step 2:</b> Find communities using simple algorithms<br/>
    <b>Step 3:</b> Calculate degree distribution<br/>
    <b>Step 4:</b> Implement influence score based on connections<br/>
    
    <pre style="margin-top: 10px;">
        # Clustering coefficient
        def clustering_coefficient(network, user_id):
            user = next((u for u in network["users"] if u["id"] == user_id), None)
            if not user or len(user["friends"]) < 2:
                return 0.0
            
            friend_ids = set(user["friends"])
            connections = 0
            
            # Count connections between friends
            for i, friend1_id in enumerate(user["friends"]):
                friend1 = next((u for u in network["users"] if u["id"] == friend1_id), None)
                if not friend1:
                    continue
                
                # Check if friend1 is friends with other friends
                for friend2_id in user["friends"][i+1:]:
                    if friend2_id in friend1["friends"]:
                        connections += 1
            
            # Possible connections between k friends = k*(k-1)/2
            k = len(user["friends"])
            possible = k * (k - 1) / 2
            
            return connections / possible if possible > 0 else 0.0
        
        # Degree distribution
        def degree_distribution(network):
            distribution = {}
            for user in network["users"]:
                degree = len(user["friends"])
                distribution[degree] = distribution.get(degree, 0) + 1
            return distribution
    </pre>
</div>

<hr/>

<h3>Common Mistakes</h3>

<b>Mistake 1: Infinite recursion with circular references</b>
<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # WRONG - circular reference causes infinite recursion
        data = {}
        data["self"] = data  # Circular reference!
        
        def traverse(obj):
            if isinstance(obj, dict):
                for key, value in obj.items():
                    print(key)
                    traverse(value)  # Will never end!
        
        # RIGHT - track visited objects
        def safe_traverse(obj, visited=None):
            if visited is None:
                visited = set()
            
            # Use object id to track visited objects
            obj_id = id(obj)
            if obj_id in visited:
                return
            visited.add(obj_id)
            
            if isinstance(obj, dict):
                for key, value in obj.items():
                    print(key)
                    safe_traverse(value, visited)
            elif isinstance(obj, list):
                for item in obj:
                    safe_traverse(item, visited)
    </pre>
</div>

<b>Mistake 2: Modifying structure during iteration</b>
<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # WRONG - modifying while iterating
        data = {"a": 1, "b": 2, "c": 3}
        for key in data:
            if key == "b":
                data["d"] = 4  # Modifying dict during iteration
        
        # RIGHT - collect changes first
        data = {"a": 1, "b": 2, "c": 3}
        to_add = {}
        
        for key, value in data.items():
            if key == "b":
                to_add["d"] = 4
        
        data.update(to_add)
        
        # OR iterate over copy of keys
        for key in list(data.keys()):
            if key == "b":
                data["d"] = 4
    </pre>
</div>

<b>Mistake 3: Not handling different data types in recursion</b>
<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        # WRONG - assumes all items are dicts or lists
        def traverse(obj):
            if isinstance(obj, dict):
                for key, value in obj.items():
                    traverse(value)
            elif isinstance(obj, list):
                for item in obj:
                    traverse(item)
            # What about other types? They'll be ignored
        
        # RIGHT - handle all cases or be explicit
        def traverse(obj):
            if isinstance(obj, dict):
                for key, value in obj.items():
                    traverse(value)
            elif isinstance(obj, list):
                for item in obj:
                    traverse(item)
            elif isinstance(obj, (str, int, float, bool, type(None))):
                # Base case - do something with primitive value
                print(f"Value: {obj}")
            else:
                # Handle unexpected types
                print(f"Unexpected type: {type(obj)}")
    </pre>
</div>

<hr/>

<div class="assignment-box">
    <h4>Assignment: E-commerce Data Processor</h4>
    <p>Create a data processor for complex e-commerce data structures:</p>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part 1: Order Processing</b><br/>
        - Process nested order data with customer info, products, shipping<br/>
        - Calculate order totals, taxes, discounts<br/>
        - Extract customer purchase history<br/>
        - Generate order summaries<br/><br/>
        
        <b>Part 2: Product Analysis</b><br/>
        - Analyze product categories and subcategories<br/>
        - Calculate sales by product, category, region<br/>
        - Find related products (bought together)<br/>
        - Inventory management across warehouses<br/><br/>
        
        <b>Part 3: Customer Analytics</b><br/>
        - Segment customers by purchase behavior<br/>
        - Calculate customer lifetime value<br/>
        - Find most valuable customers<br/>
        - Generate personalized recommendations<br/><br/>
        
        <b>Technical Requirements:</b><br/>
        1. Implement recursive functions for deep data access<br/>
        2. Use BFS/DFS for hierarchical data<br/>
        3. Handle circular references safely<br/>
        4. Optimize performance for large datasets<br/>
        5. Create comprehensive error handling
    </div>
    
    <p><b>Bonus Challenge:</b> Implement a recommendation engine that suggests products based on customer purchase history and browsing behavior.</p>
    
    <div style="background-color: #e8f5e9; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Example Data Structure:</b>
        <pre>
ecommerce_data = {
    "customers": [
        {
            "id": "C001",
            "name": "John Doe",
            "orders": [
                {
                    "order_id": "O001",
                    "date": "2024-01-15",
                    "items": [
                        {"product_id": "P001", "quantity": 2, "price": 29.99},
                        {"product_id": "P002", "quantity": 1, "price": 49.99}
                    ],
                    "shipping": {
                        "address": "123 Main St",
                        "method": "express",
                        "cost": 9.99
                    }
                }
            ],
            "preferences": {
                "categories": ["electronics", "books"],
                "price_range": {"min": 10, "max": 100}
            }
        }
    ],
    "products": {
        "P001": {
            "name": "Wireless Headphones",
            "category": "electronics",
            "subcategory": "audio",
            "price": 29.99,
            "inventory": {
                "warehouse1": 50,
                "warehouse2": 25
            }
        }
    }
}
        </pre>
    </div>
</div>`

},
     



};

        function showDashboard() {
            const display = document.getElementById('main-content');
            document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));

            let gridHtml = `<h1>Software Development: 14-Week Curriculum</h1>
    <p>Navigate through the levels below to access instructor notes and analogies.</p>
    <div class="topic-grid">`;

            for (const key in contentData) {
                if (contentData.hasOwnProperty(key)) {
                    gridHtml += `
                <div class="grid-card" onclick="loadContent(${key.split('-')[0]}, ${key.split('-')[1]})">
                    <i class="${contentData[key].icon.startsWith('fab') ? 'fab' : 'fa-solid'} ${contentData[key].icon}"></i>
                    <span>${contentData[key].title}</span>
                </div>
            `;
                }
            }

            gridHtml += `</div>`;
            display.innerHTML = gridHtml;
        }

        function loadContent(week, day) {
            const key = week + "-" + day;
            console.log("Loading content for key:", key); // Debug line
            console.log("Content exists?", key in contentData); // Debug line
            const data = contentData[key];
            const display = document.getElementById('main-content');
            document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));
            const activeNav = document.getElementById('nav-' + key);
            if (activeNav) activeNav.classList.add('active');

            if (data) {
                display.innerHTML = data.html;
            } else {
                display.innerHTML = `<h1>Day ${day} Content</h1><p>Lesson plan for Week ${week} Day ${day} is following the curriculum schedule: 2 hours of lab practice based on the previous lecture.</p>`;
            }
            display.scrollTop = 0;
        }

        window.onload = showDashboard;
    </script>
</body>

</html>