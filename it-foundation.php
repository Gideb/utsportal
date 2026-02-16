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
    <title>IT Foundation Portal | Tutor Assist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/192436698a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/logo.png" type="image/png">

</head>

<body class="portal-body">

    <header class="portal-header">
        <div>
            <a href="landing.php" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Catalog</a>
            <strong>IT Foundation</strong> | Instructor Guide
        </div>
        <!-- <div style="display: flex; gap: 20px; align-items: center;">
            <div onclick="showDashboard()" style="cursor:pointer">
                <i class="fa-solid fa-table-cells"></i> Dashboard View
            </div>
            <a href="logout.php" class="back-btn" style="background: #c0392b;">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </div> -->
        <?php include './includes/logout.php'; ?>
    </header>

    <div class="portal-container">
        <div class="sidebar">
            <h3>Week 1: Machine & Interface</h3>
            <div class="nav-item" id="nav-1-1" onclick="loadContent(1,1)">Day 1: Desktop Management</div>
            <div class="nav-item" id="nav-1-2" onclick="loadContent(1,2)">Day 2: Physical Machine</div>
            <div class="nav-item" id="nav-1-3" onclick="loadContent(1,3)">Day 3: OS & File Management</div>
            <div class="nav-item" id="nav-1-4" onclick="loadContent(1,4)">Day 4: CMD Basics</div>

            <h3>Week 2: Data & Connections</h3>
            <div class="nav-item" id="nav-2-1" onclick="loadContent(2,1)">Day 1: Networking Basics</div>
            <div class="nav-item" id="nav-2-2" onclick="loadContent(2,2)">Day 2: ASCII & Binary</div>
            <div class="nav-item" id="nav-2-3" onclick="loadContent(2,3)">Day 3: Data Logic</div>
            <div class="nav-item" id="nav-2-4" onclick="loadContent(2,4)">Day 4: Review & Quiz</div>

            <h3>Week 3: MS Word (Part 1)</h3>
            <div class="nav-item" id="nav-3-1" onclick="loadContent(3,1)">Day 1: Ribbon & Interface</div>
            <div class="nav-item" id="nav-3-2" onclick="loadContent(3,2)">Day 2: Styles & Formatting</div>
            <div class="nav-item" id="nav-3-3" onclick="loadContent(3,3)">Day 3: Tables & Media</div>
            <div class="nav-item" id="nav-3-4" onclick="loadContent(3,4)">Day 4: Headers, Footers & Page Layouts</div>

            <h3>Week 4: MS Word (Part 2)</h3>
            <div class="nav-item" id="nav-4-1" onclick="loadContent(4,1)">Day 1: Mail Merge & References</div>
            <div class="nav-item" id="nav-4-2" onclick="loadContent(4,2)">Day 2: Proofing & Collaboration</div>
            <div class="nav-item" id="nav-4-3" onclick="loadContent(4,3)">Day 3: Office Etiquette in Word</div>
            <div class="nav-item" id="nav-4-4" onclick="loadContent(4,4)">Day 4: Module 2 Final Project</div>

            <h3>Week 5: MS Excel Basics (Module 3)</h3>
            <div class="nav-item" id="nav-5-1" onclick="loadContent(5,1)">Day 1: Cells, Rows, and Columns</div>
            <div class="nav-item" id="nav-5-2" onclick="loadContent(5,2)">Day 2: Basic Formulas (The Big 5)</div>
            <div class="nav-item" id="nav-5-3" onclick="loadContent(5,3)">Day 3: Cell Referencing (Absolute vs. Relative)</div>
            <div class="nav-item" id="nav-5-4" onclick="loadContent(5,4)">Day 4: Data Visualization</div>

            <h3>Week 6: Microsoft Excel - Logic & Analysis (Module 3)</h3>
            <div class="nav-item" id="nav-6-1" onclick="loadContent(6,1)">Day 1: The IF Function & Logic</div>
            <div class="nav-item" id="nav-6-2" onclick="loadContent(6,2)">Day 2: VLOOKUP & Data Validation</div>
            <div class="nav-item" id="nav-6-3" onclick="loadContent(6,3)">Day 3: Sorting, Filtering & Pivot Tables</div>
            <div class="nav-item" id="nav-6-4" onclick="loadContent(6,4)">Day 4: Module 3 Final Project</div>

            <h3>Week 7: PowerPoint & The Web (Module 4 & 5)</h3>
            <div class="nav-item" id="nav-7-1" onclick="loadContent(7,1)">Day 1: PowerPoint Basics & Slide Master</div>
            <div class="nav-item" id="nav-7-2" onclick="loadContent(7,2)">Day 2: Animations & Transitions</div>
            <div class="nav-item" id="nav-7-3" onclick="loadContent(7,3)">Day 3:The Internet & Web Technologies</div>
            <div class="nav-item" id="nav-7-4" onclick="loadContent(7,4)">Day 4: Email Practice & Professionalism</div>

            <h3>Week 8: SeLogic, Security & Maintenance (Module 5)</h3>
            <div class="nav-item" id="nav-8-1" onclick="loadContent(8,1)">Day 1: Software Development & Logic</div>
            <div class="nav-item" id="nav-8-2" onclick="loadContent(8,2)">Day 2: Security & Digital Citizenship</div>
            <div class="nav-item" id="nav-8-3" onclick="loadContent(8,3)">Day 3: Troubleshooting & Maintenance</div>
            <div class="nav-item" id="nav-8-4" onclick="loadContent(8,4)">Day 4: Final Exam & Portfolio Presentation</div>
        </div>

        <div class="content" id="main-content">
        </div>
    </div>

    <footer>
        <div><i class="fa-brands fa-whatsapp me-1"></i> Support: UTS IT Academy</div>
        <div>&copy; 2026 IT Foundation Module</div>
    </footer>

    <script>
        const contentData = {

            "1-1": {
                "icon": "fa-desktop",
                "title": "Desktop Management & Windows Environment",
                "html": `<h1>Week 1, Day 1: Desktop Management & Windows Environment</h1>
<p>Today, you'll master the desktop environment—your digital workspace. You'll learn shortcuts, file organization, and system personalization.</p>

<div class="analogy-box">
    <b>Analogy: Your Digital Office Desk 🏢</b><br/>
    Desktop = Your physical desk surface<br/>
    Taskbar = Tool tray with frequently used tools<br/>
    Start Menu = Drawer with all your supplies<br/>
    File Explorer = Filing cabinets and storage rooms<br/>
    Icons = Sticky notes and tools on your desk
</div>

<h3>📁 Windows Desktop Components</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🖥️ Desktop Layout Diagram</h4>
    <div style="border: 2px solid #4A90E2; padding: 15px; background: white; border-radius: 8px;">
        <div style="text-align: center; font-weight: bold; background: #4A90E2; color: white; padding: 10px; border-radius: 5px;">Desktop Surface</div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="border: 1px solid #ccc; padding: 10px; text-align: center;">
                <b>📁 Documents</b><br/><small>Personal files</small>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; text-align: center;">
                <b>🖼️ Pictures</b><br/><small>Photos & images</small>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; text-align: center;">
                <b>🎵 Music</b><br/><small>Audio files</small>
            </div>
            <div style="border: 1px solid #ccc; padding: 10px; text-align: center;">
                <b>🎬 Videos</b><br/><small>Video files</small>
            </div>
        </div>
        
        <div style="background: #2C3E50; color: white; padding: 10px; border-radius: 5px; margin-top: 20px;">
            <b>Taskbar (Bottom Toolbar)</b>
            <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                <span>🔍 Search</span>
                <span>📁 File Explorer</span>
                <span>🌐 Browser</span>
                <span>📧 Email</span>
                <span>🎵 Spotify</span>
                <span>📅 Time/Date</span>
                <span>📶 Wi-Fi</span>
                <span>🔊 Volume</span>
            </div>
        </div>
        
        <div style="margin-top: 15px; font-size: 0.9em;">
            <b>System Tray (Notification Area):</b> Hidden icons, notifications, background apps
        </div>
    </div>
</div>

<h3>🎯 Essential Windows Shortcuts (Memorize These!)</h3>
<div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 20px 0;">
    <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
        <h4>🔄 Navigation Shortcuts</h4>
        <table style="width: 100%;">
            <tr><td><kbd>Win + D</kbd></td><td>Show/Hide Desktop</td></tr>
            <tr><td><kbd>Win + E</kbd></td><td>Open File Explorer</td></tr>
            <tr><td><kbd>Win + L</kbd></td><td>Lock Computer</td></tr>
            <tr><td><kbd>Alt + Tab</kbd></td><td>Switch between apps</td></tr>
            <tr><td><kbd>Win + Tab</kbd></td><td>Task View (see all windows)</td></tr>
            <tr><td><kbd>Win + ←/→</kbd></td><td>Snap window to left/right</td></tr>
        </table>
    </div>
    
    <div style="background: #f3e5f5; padding: 15px; border-radius: 8px;">
        <h4>⚡ System Shortcuts</h4>
        <table style="width: 100%;">
            <tr><td><kbd>Ctrl + Shift + Esc</kbd></td><td>Open Task Manager</td></tr>
            <tr><td><kbd>Win + I</kbd></td><td>Open Settings</td></tr>
            <tr><td><kbd>Win + X</kbd></td><td>Power User Menu</td></tr>
            <tr><td><kbd>Win + P</kbd></td><td>Projection (second screen)</td></tr>
            <tr><td><kbd>Win + V</kbd></td><td>Clipboard History</td></tr>
            <tr><td><kbd>Win + .</kbd></td><td>Emoji Picker 😊</td></tr>
        </table>
    </div>
</div>

<h3>🔧 File Explorer Deep Dive</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px;">
    <h4>📊 File Explorer Anatomy</h4>
    <div style="background: white; border: 1px solid #ddd; padding: 10px; margin: 10px 0;">
        <div style="display: flex; background: #f5f5f5; padding: 5px;">
            <div style="padding: 5px 10px; border-right: 1px solid #ddd;"><b>Quick Access</b></div>
            <div style="padding: 5px 10px; border-right: 1px solid #ddd;"><b>This PC</b></div>
            <div style="padding: 5px 10px;"><b>Network</b></div>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 3fr; margin-top: 10px;">
            <div style="border-right: 1px solid #ddd; padding: 10px;">
                <b>Navigation Pane</b><br/>
                • Desktop<br/>
                • Documents<br/>
                • Downloads<br/>
                • Pictures<br/>
                • Music<br/>
                • Videos<br/>
                • This PC<br/>
                • Network
            </div>
            <div style="padding: 10px;">
                <b>Content Pane</b><br/>
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); gap: 10px;">
                    <div style="border: 1px solid #eee; padding: 8px; text-align: center;">
                        📁 Project_A<br/><small>Modified: Today</small>
                    </div>
                    <div style="border: 1px solid #eee; padding: 8px; text-align: center;">
                        📄 Report.docx<br/><small>42 KB</small>
                    </div>
                    <div style="border: 1px solid #eee; padding: 8px; text-align: center;">
                        🖼️ Image.jpg<br/><small>2.4 MB</small>
                    </div>
                    <div style="border: 1px solid #eee; padding: 8px; text-align: center;">
                        📊 Budget.xlsx<br/><small>156 KB</small>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="background: #f5f5f5; padding: 8px; margin-top: 10px; font-size: 0.9em;">
            <b>Status Bar:</b> 15 items, 245 MB selected
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Practice Lab (45 Minutes)</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Desktop Customization (15 mins)</h4>
    <ol>
        <li>Right-click desktop → <b>Personalize</b></li>
        <li>Change your wallpaper to a solid color</li>
        <li>Change accent color to blue</li>
        <li>Enable "Show desktop background on Start"</li>
        <li>Right-click taskbar → <b>Taskbar settings</b> → Enable "Use small taskbar buttons"</li>
    </ol>
    
    <h4>Exercise 2: File Organization (20 mins)</h4>
    <ol>
        <li>Create this folder structure using File Explorer:
            <pre style="background: white; padding: 10px; border-radius: 5px;">
📁 Documents/
└── 📁 IT_Course/
    ├── 📁 Week_1/
    │   ├── 📁 Lectures/
    │   ├── 📁 Assignments/
    │   └── 📁 Practice/
    ├── 📁 Week_2/
    └── 📁 Resources/
            </pre>
        </li>
        <li>Create 3 text files in Practice folder: notes.txt, commands.txt, ideas.txt</li>
        <li>Pin the "Documents" folder to Quick Access</li>
    </ol>
    
    <h4>Exercise 3: Shortcut Mastery (10 mins)</h4>
    <ol>
        <li>Press <kbd>Win + D</kbd> three times rapidly</li>
        <li>Open File Explorer with <kbd>Win + E</kbd></li>
        <li>Open Task Manager with <kbd>Ctrl + Shift + Esc</kbd></li>
        <li>Try snapping a window to left half with <kbd>Win + ←</kbd></li>
    </ol>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Task 1: Create a Weekly Folder System (30 mins)</h4>
    <p>Create folders for each day of the week (Monday-Friday). Inside each folder:</p>
    <ul>
        <li>Create a text file named "Daily_Tasks.txt"</li>
        <li>Create a shortcut to "Calculator" app</li>
        <li>Add a folder named "Backup"</li>
    </ul>
    
    <h4>Task 2: Customize Your Workspace (30 mins)</h4>
    <ol>
        <li>Pin these apps to your taskbar:
            <ul>
                <li>File Explorer</li>
                <li>Notepad</li>
                <li>Calculator</li>
                <li>Web Browser</li>
            </ul>
        </li>
        <li>Change the icon of your "Monday" folder to a custom icon</li>
        <li>Create a desktop shortcut for "Documents" folder</li>
    </ol>
    
    <h4>Challenge Task (Bonus)</h4>
    <p>Using only keyboard shortcuts:</p>
    <ol>
        <li>Open File Explorer</li>
        <li>Navigate to Documents folder</li>
        <li>Create a new folder named "Secret_Project"</li>
        <li>Hide this folder (Right-click → Properties → Hidden)</li>
        <li>Show hidden files in File Explorer</li>
    </ol>
</div>

<h3>📊 Understanding Drive Letters</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Drive Letter</th>
            <th style="padding: 10px;">Typical Contents</th>
            <th style="padding: 10px;">Size (Example)</th>
            <th style="padding: 10px;">File System</th>
        </tr>
        <tr><td>C:\\</td><td>Windows OS, Program Files</td><td>256 GB SSD</td><td>NTFS</td></tr>
        <tr><td>D:\\</td><td>Data, Personal Files</td><td>1 TB HDD</td><td>NTFS</td></tr>
        <tr><td>E:\\</td><td>DVD/CD Drive</td><td>4.7 GB</td><td>CDFS</td></tr>
        <tr><td>F:\\</td><td>USB Flash Drive</td><td>64 GB</td><td>FAT32</td></tr>
        <tr><td>Z:\\</td><td>Network Drive</td><td>Unlimited</td><td>NFS</td></tr>
    </table>
</div>

<h3>🔍 File Explorer Tips & Tricks</h3>
<div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 20px 0;">
    <div style="background: #e8f5e8; padding: 15px; border-radius: 8px;">
        <h4>🔄 View Options</h4>
        <ul>
            <li><b>Details View:</b> Best for sorting files by date/size</li>
            <li><b>Large Icons:</b> Best for images and videos</li>
            <li><b>List View:</b> Best for folders with many files</li>
            <li><b>Content View:</b> Shows file previews</li>
        </ul>
        <p><small>Press <kbd>Ctrl + Mouse Scroll</kbd> to cycle views</small></p>
    </div>
    
    <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
        <h4>🎯 Selection Tricks</h4>
        <ul>
            <li><kbd>Ctrl + A</kbd>: Select all</li>
            <li><kbd>Ctrl + Click</kbd>: Select multiple individual files</li>
            <li><kbd>Shift + Click</kbd>: Select range of files</li>
            <li><kbd>Ctrl + Shift + N</kbd>: New folder</li>
            <li><kbd>F2</kbd>: Rename selected file</li>
        </ul>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 How to Explain to Beginners</h4>
    <ul>
        <li><b>Use Physical Analogies:</b> "The desktop is your actual desk. Would you throw all your papers randomly on it?"</li>
        <li><b>Demonstrate, Don't Just Tell:</b> Show each shortcut, then have students repeat</li>
        <li><b>Common Mistakes to Watch For:</b>
            <ul>
                <li>Students saving everything to Desktop (clutter)</li>
                <li>Not using folders for organization</li>
                <li>Forgetting to name files meaningfully</li>
            </ul>
        </li>
        <li><b>Checkpoint Questions:</b>
            <ol>
                <li>"What does Win + D do?"</li>
                <li>"How do you create a new folder without right-clicking?"</li>
                <li>"Where would you save a photo from your phone?"</li>
            </ol>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f8f9fa; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can navigate desktop without mouse using shortcuts</label><br/>
    <label><input type="checkbox"> Can create and organize folder structures</label><br/>
    <label><input type="checkbox"> Understands difference between C: drive and external drives</label><br/>
    <label><input type="checkbox"> Can customize taskbar and desktop</label><br/>
    <label><input type="checkbox"> Knows how to show/hide file extensions</label><br/>
    <label><input type="checkbox"> Can use snap assist for window management</label><br/>
    <label><input type="checkbox"> Understands purpose of Quick Access in File Explorer</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f4f8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Practice Website:</b> <a href="https://www.shortcutfoo.com/">ShortcutFoo.com</a> - Practice keyboard shortcuts</li>
        <li><b>Video Tutorial:</b> "Windows 10 File Explorer Complete Guide" (YouTube)</li>
        <li><b>Cheat Sheet:</b> Print Windows Shortcuts PDF for students</li>
        <li><b>Game:</b> "Find the file" scavenger hunt in Documents folder</li>
    </ul>
</div>
`
            },
            "1-2": {
                "icon": "fa-microchip",
                "title": "Hardware & Physical Components",
                "html": `<h1>Week 1, Day 2: Hardware & Physical Components</h1>
<p>Today, we dive inside the computer to understand what makes it tick. You'll learn about CPUs, RAM, storage, and how all components work together.</p>

<div class="analogy-box">
    <b>Analogy: Computer as a Restaurant Kitchen 🍳</b><br/>
    CPU = Head Chef (processes orders)<br/>
    RAM = Kitchen Counter (working space)<br/>
    Storage = Pantry/Freezer (long-term storage)<br/>
    Motherboard = Kitchen Layout (connects everything)<br/>
    Power Supply = Electrical System (powers everything)<br/>
    GPU = Specialized Station (graphics/rendering)
</div>

<h3>🖥️ Computer Hardware Components Diagram</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔧 Inside a Desktop Computer</h4>
    <div style="border: 2px solid #4A90E2; padding: 15px; background: white; border-radius: 8px; position: relative;">
        <!-- Simplified computer diagram -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
            <!-- Left Column -->
            <div>
                <div style="background: #4A90E2; color: white; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                    <b>🧠 CPU (Processor)</b>
                </div>
                <div style="font-size: 0.9em; padding: 8px; background: #f0f8ff;">
                    <b>Examples:</b><br/>
                    • Intel Core i5<br/>
                    • AMD Ryzen 7<br/>
                    <b>Speed:</b> 3.0-4.5 GHz<br/>
                    <b>Cores:</b> 4-8 cores
                </div>
                
                <div style="background: #FF9800; color: white; padding: 10px; border-radius: 5px; margin: 15px 0 10px 0;">
                    <b>⚡ RAM (Memory)</b>
                </div>
                <div style="font-size: 0.9em; padding: 8px; background: #fff3e0;">
                    <b>Types:</b> DDR4, DDR5<br/>
                    <b>Sizes:</b> 8GB, 16GB, 32GB<br/>
                    <b>Speed:</b> 2400-3200 MHz<br/>
                    <b>Volatile:</b> Clears when off
                </div>
            </div>
            
            <!-- Middle Column -->
            <div>
                <div style="background: #8BC34A; color: white; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                    <b>📁 Storage</b>
                </div>
                <div style="font-size: 0.9em; padding: 8px; background: #f1f8e9;">
                    <div style="margin-bottom: 10px;">
                        <b>💽 HDD (Hard Disk)</b><br/>
                        • 500GB-2TB<br/>
                        • $40-80<br/>
                        • 5400/7200 RPM<br/>
                        • Mechanical parts
                    </div>
                    <div>
                        <b>🚀 SSD (Solid State)</b><br/>
                        • 256GB-2TB<br/>
                        • $60-200<br/>
                        • No moving parts<br/>
                        • 5x faster than HDD
                    </div>
                </div>
                
                <div style="background: #9C27B0; color: white; padding: 10px; border-radius: 5px; margin: 15px 0 10px 0;">
                    <b>🔌 Motherboard</b>
                </div>
                <div style="font-size: 0.9em; padding: 8px; background: #f3e5f5;">
                    <b>Function:</b><br/>
                    • Connects all components<br/>
                    • Has slots for RAM, GPU<br/>
                    • Chipset determines compatibility<br/>
                    • BIOS/UEFI firmware
                </div>
            </div>
            
            <!-- Right Column -->
            <div>
                <div style="background: #F44336; color: white; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                    <b>🔋 Power Supply (PSU)</b>
                </div>
                <div style="font-size: 0.9em; padding: 8px; background: #ffebee;">
                    <b>Wattage:</b> 450W-850W<br/>
                    <b>80 Plus Rating:</b><br/>
                    • Bronze (82% efficient)<br/>
                    • Gold (87% efficient)<br/>
                    • Platinum (90% efficient)<br/>
                    <b>Connectors:</b> 24-pin, 8-pin
                </div>
                
                <div style="background: #00BCD4; color: white; padding: 10px; border-radius: 5px; margin: 15px 0 10px 0;">
                    <b>🎮 GPU (Graphics Card)</b>
                </div>
                <div style="font-size: 0.9em; padding: 8px; background: #e0f7fa;">
                    <b>Integrated:</b> In CPU<br/>
                    <b>Dedicated:</b> Separate card<br/>
                    <b>VRAM:</b> 4GB-12GB<br/>
                    <b>Brands:</b> NVIDIA, AMD<br/>
                    <b>For:</b> Gaming, Video Editing
                </div>
            </div>
        </div>
    </div>
</div>

<h3>📊 Hardware Comparison Table</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Component</th>
            <th style="padding: 10px;">Purpose</th>
            <th style="padding: 10px;">Volatile?</th>
            <th style="padding: 10px;">Speed</th>
            <th style="padding: 10px;">Upgrade Frequency</th>
            <th style="padding: 10px;">Cost Range</th>
        </tr>
        <tr><td>CPU</td><td>Processes instructions</td><td>No</td><td>Very Fast</td><td>3-5 years</td><td>$150-500</td></tr>
        <tr><td>RAM</td><td>Holds active programs</td><td>Yes</td><td>Fast</td><td>2-4 years</td><td>$40-150</td></tr>
        <tr><td>SSD</td><td>Stores OS & programs</td><td>No</td><td>Very Fast</td><td>4-6 years</td><td>$50-200</td></tr>
        <tr><td>HDD</td><td>Stores files/media</td><td>No</td><td>Slow</td><td>5-8 years</td><td>$40-100</td></tr>
        <tr><td>GPU</td><td>Handles graphics</td><td>No</td><td>Very Fast</td><td>2-3 years</td><td>$200-1000</td></tr>
        <tr><td>PSU</td><td>Provides power</td><td>No</td><td>N/A</td><td>5-7 years</td><td>$50-150</td></tr>
    </table>
</div>

<h3>🔄 Data Flow in a Computer</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <h4>🎯 How Components Work Together</h4>
    <div style="text-align: center; margin: 20px 0;">
        <div style="display: inline-block; background: #4A90E2; color: white; padding: 15px; border-radius: 50%;">1️⃣</div>
        <div style="display: inline-block; margin: 0 10px;">→</div>
        <div style="display: inline-block; background: #FF9800; color: white; padding: 15px; border-radius: 50%;">2️⃣</div>
        <div style="display: inline-block; margin: 0 10px;">→</div>
        <div style="display: inline-block; background: #8BC34A; color: white; padding: 15px; border-radius: 50%;">3️⃣</div>
        <div style="display: inline-block; margin: 0 10px;">→</div>
        <div style="display: inline-block; background: #9C27B0; color: white; padding: 15px; border-radius: 50%;">4️⃣</div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; text-align: center;">
        <div style="padding: 10px; background: #e3f2fd; border-radius: 5px;">
            <b>1. Input</b><br/>
            Keyboard/Mouse<br/>
            → Motherboard
        </div>
        <div style="padding: 10px; background: #fff3e0; border-radius: 5px;">
            <b>2. Process</b><br/>
            CPU + RAM<br/>
            → Calculations
        </div>
        <div style="padding: 10px; background: #f1f8e9; border-radius: 5px;">
            <b>3. Storage</b><br/>
            SSD/HDD<br/>
            → Save/Load
        </div>
        <div style="padding: 10px; background: #f3e5f5; border-radius: 5px;">
            <b>4. Output</b><br/>
            Monitor/Speakers<br/>
            → Display/Sound
        </div>
    </div>
    
    <div style="margin-top: 20px; padding: 15px; background: white; border: 1px dashed #4A90E2; border-radius: 5px;">
        <b>Example: Opening a Document</b><br/>
        1. Click Word icon (Input) → 2. CPU loads program from SSD to RAM (Process) →<br/>
        3. Click "Open" → 4. SSD finds file (Storage) → 5. File loads to RAM →<br/>
        6. CPU processes document → 7. GPU displays on monitor (Output)
    </div>
</div>

<h3>🛠️ Hands-On Lab: Task Manager Analysis</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Check Your System Specs (20 mins)</h4>
    <ol>
        <li>Open Task Manager (<kbd>Ctrl + Shift + Esc</kbd>)</li>
        <li>Click <b>Performance</b> tab</li>
        <li>Fill in this table:
            <table style="width: 100%; margin: 10px 0; background: white; padding: 10px;">
                <tr><th>Component</th><th>Your System</th><th>Ideal for Office</th><th>Ideal for Gaming</th></tr>
                <tr><td>CPU Cores</td><td>_____</td><td>4+ cores</td><td>6+ cores</td></tr>
                <tr><td>RAM Usage</td><td>_____ / _____ GB</td><td>8GB</td><td>16GB+</td></tr>
                <tr><td>Disk Type</td><td>SSD / HDD</td><td>SSD</td><td>NVMe SSD</td></tr>
                <tr><td>GPU</td><td>Integrated / Dedicated</td><td>Integrated</td><td>Dedicated</td></tr>
            </table>
        </li>
    </ol>
    
    <h4>Exercise 2: Simulate Hardware Stress (15 mins)</h4>
    <ol>
        <li>Open 10 Chrome tabs with YouTube videos</li>
        <li>Open Microsoft Word and Excel simultaneously</li>
        <li>Watch Task Manager graphs:
            <ul>
                <li>CPU usage spikes?</li>
                <li>RAM usage increases?</li>
                <li>Disk activity light flashing?</li>
            </ul>
        </li>
        <li>Close everything and watch graphs return to normal</li>
    </ol>
    
    <h4>Exercise 3: Hardware Research (25 mins)</h4>
    <p>Visit <a href="https://pcpartpicker.com">PCPartPicker.com</a> and:</p>
    <ol>
        <li>Find current prices for:
            <ul>
                <li>16GB DDR4 RAM kit</li>
                <li>500GB NVMe SSD</li>
                <li>Intel Core i5 CPU</li>
            </ul>
        </li>
        <li>Compare HDD vs SSD prices per GB</li>
        <li>Find a motherboard compatible with your chosen CPU</li>
    </ol>
</div>

<h3>🎯 Understanding Specifications</h3>
<div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 20px 0;">
    <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
        <h4>💻 CPU Specifications Explained</h4>
        <ul>
            <li><b>GHz (Gigahertz):</b> Clock speed - how many cycles per second</li>
            <li><b>Cores:</b> Number of processing units (like having multiple chefs)</li>
            <li><b>Threads:</b> Virtual cores (Hyper-Threading)</li>
            <li><b>Cache:</b> Super-fast memory on CPU (L1, L2, L3)</li>
            <li><b>TDP:</b> Thermal Design Power - heat output/wattage</li>
        </ul>
        <p><b>Example:</b> Intel Core i7-10700K<br/>
        • 8 Cores, 16 Threads<br/>
        • 3.8 GHz base, 5.1 GHz turbo<br/>
        • 16MB Cache<br/>
        • 125W TDP</p>
    </div>
    
    <div style="background: #f3e5f5; padding: 15px; border-radius: 8px;">
        <h4>💾 RAM & Storage Specs</h4>
        <ul>
            <li><b>RAM Speed:</b> MHz - higher is faster (DDR4-3200)</li>
            <li><b>CAS Latency:</b> CL16 - lower is faster response</li>
            <li><b>SSD Types:</b> SATA (slower) vs NVMe (faster)</li>
            <li><b>HDD RPM:</b> 5400 vs 7200 - higher spins faster</li>
            <li><b>Interface:</b> SATA III (6Gb/s) vs M.2 (PCIe 4.0)</li>
        </ul>
        <p><b>Example SSD:</b> Samsung 970 EVO Plus 1TB<br/>
        • NVMe M.2<br/>
        • Read: 3500 MB/s<br/>
        • Write: 3300 MB/s<br/>
        • 5-year warranty</p>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: System Specification Sheet (45 mins)</h4>
    <p>Create a detailed spec sheet for your current computer:</p>
    <div style="background: white; padding: 15px; margin: 10px 0;">
        <b>System Information Worksheet</b>
        <table style="width: 100%;">
            <tr><td><b>Processor:</b></td><td>___________________</td></tr>
            <tr><td><b>CPU Cores/Threads:</b></td><td>___________________</td></tr>
            <tr><td><b>Installed RAM:</b></td><td>___________________</td></tr>
            <tr><td><b>Storage Type/Capacity:</b></td><td>___________________</td></tr>
            <tr><td><b>Graphics Card:</b></td><td>___________________</td></tr>
            <tr><td><b>Motherboard Model:</b></td><td>___________________</td></tr>
            <tr><td><b>Power Supply Wattage:</b></td><td>___________________</td></tr>
            <tr><td><b>Windows Version:</b></td><td>___________________</td></tr>
        </table>
    </div>
    
    <h4>Task 2: Build a Budget PC (45 mins)</h4>
    <p>Using PCPartPicker or similar site, build a complete PC for:</p>
    <ul>
        <li><b>Budget:</b> $600 (Office use)</li>
        <li><b>Mid-Range:</b> $1000 (Gaming/Editing)</li>
        <li><b>High-End:</b> $2000 (Professional)</li>
    </ul>
    <p>Include: CPU, Motherboard, RAM, Storage, GPU, PSU, Case</p>
    
    <h4>Task 3: Hardware Troubleshooting (30 mins)</h4>
    <p>Research and write solutions for:</p>
    <ol>
        <li>Computer won't turn on (no lights/fans)</li>
        <li>Blue Screen of Death (BSOD) frequently</li>
        <li>Computer is very slow even after restart</li>
        <li>No display on monitor (fans running)</li>
    </ol>
</div>

<h3>🔍 Real-World Applications</h3>
<div style="background-color: #e8f4f8; padding: 15px; border-radius: 10px;">
    <h4>💼 What Hardware for What Purpose?</h4>
    <table style="width: 100%;">
        <tr style="background: #f5f5f5;">
            <th style="padding: 10px;">User Type</th>
            <th style="padding: 10px;">Recommended CPU</th>
            <th style="padding: 10px;">Recommended RAM</th>
            <th style="padding: 10px;">Storage Type</th>
            <th style="padding: 10px;">GPU Needed?</th>
        </tr>
        <tr><td>Student/Office</td><td>Intel i3 / AMD Ryzen 3</td><td>8GB</td><td>256GB SSD</td><td>Integrated</td></tr>
        <tr><td>Gamer</td><td>Intel i5 / AMD Ryzen 5</td><td>16GB</td><td>512GB SSD + 1TB HDD</td><td>Dedicated ($300+)</td></tr>
        <tr><td>Video Editor</td><td>Intel i7 / AMD Ryzen 7</td><td>32GB</td><td>1TB NVMe SSD</td><td>Dedicated ($500+)</td></tr>
        <tr><td>Programmer</td><td>Intel i5 / AMD Ryzen 5</td><td>16-32GB</td><td>512GB SSD</td><td>Integrated/Mid</td></tr>
        <tr><td>Server</td><td>Xeon / EPYC</td><td>64GB+</td><td>Multiple SSDs</td><td>Basic</td></tr>
    </table>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Making Hardware Tangible</h4>
    <ul>
        <li><b>Bring Physical Components:</b> Old RAM sticks, hard drives, CPUs</li>
        <li><b>Use Props:</b> Kitchen analogy with bowls (RAM) and pantry (storage)</li>
        <li><b>Demonstrate Bottlenecks:</b> Show how slow HDD affects entire system</li>
        <li><b>Common Confusions:</b>
            <ul>
                <li>RAM vs Storage (memory vs space)</li>
                <li>GHz vs Cores (speed vs parallel processing)</li>
                <li>Integrated vs Dedicated GPU</li>
            </ul>
        </li>
        <li><b>Interactive Quiz:</b> "If you want faster game loading, upgrade ___?" (SSD)</li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can identify all major computer components</label><br/>
    <label><input type="checkbox"> Understands difference between RAM and storage</label><br/>
    <label><input type="checkbox"> Can read and interpret CPU specifications</label><br/>
    <label><input type="checkbox"> Knows how to check system specs in Task Manager</label><br/>
    <label><input type="checkbox"> Understands when to upgrade which component</label><br/>
    <label><input type="checkbox"> Can explain data flow through a computer</label><br/>
    <label><input type="checkbox"> Knows SSD vs HDD advantages/disadvantages</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tool:</b> <a href="https://www.logicalincrements.com">LogicalIncrements.com</a> - PC building guide</li>
        <li><b>Video:</b> "How a CPU Works" by TechQuickie (YouTube)</li>
        <li><b>Game:</b> "PC Building Simulator" on Steam</li>
        <li><b>Website:</b> <a href="https://www.userbenchmark.com">UserBenchmark.com</a> - Compare hardware</li>
        <li><b>Book:</b> "Upgrading and Repairing PCs" by Scott Mueller</li>
    </ul>
</div>
`
            },
            "1-3": {
                "icon": "fa-folder-open",
                "title": "Operating Systems & File Management",
                "html": `<h1>Week 1, Day 3: Operating Systems & File Management</h1>
<p>Today, you'll learn how software talks to hardware through the operating system, master file extensions, and understand how to organize files like a pro.</p>

<div class="analogy-box">
    <b>Analogy: OS as the Government of Computer City 🏛️</b><br/>
    OS = Government (manages resources, makes rules)<br/>
    Applications = Businesses (need permits to operate)<br/>
    Files = Citizens (have IDs and homes)<br/>
    File Extensions = Last names (.docx family, .pdf family)<br/>
    Permissions = Security Clearance (who can do what)
</div>

<h3>🖥️ What is an Operating System?</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔗 OS as the Bridge Between You and Hardware</h4>
    <div style="text-align: center; margin: 20px 0;">
        <div style="display: inline-block; background: #4A90E2; color: white; padding: 15px 25px; border-radius: 8px; font-weight: bold;">USER</div>
        <div style="display: inline-block; margin: 0 10px; font-size: 24px;">→</div>
        <div style="display: inline-block; background: #FF9800; color: white; padding: 15px 25px; border-radius: 8px; font-weight: bold;">OPERATING SYSTEM</div>
        <div style="display: inline-block; margin: 0 10px; font-size: 24px;">→</div>
        <div style="display: inline-block; background: #8BC34A; color: white; padding: 15px 25px; border-radius: 8px; font-weight: bold;">HARDWARE</div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 20px;">
        <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
            <h5>🎯 OS Functions</h5>
            <ul>
                <li>Manages hardware resources</li>
                <li>Provides user interface</li>
                <li>Runs applications</li>
                <li>Manages files/folders</li>
                <li>Handles security</li>
                <li>Manages memory</li>
            </ul>
        </div>
        <div style="background: #fff3e0; padding: 15px; border-radius: 8px;">
            <h5>🌍 Popular OS Types</h5>
            <ul>
                <li><b>Windows:</b> Most common (11/10)</li>
                <li><b>macOS:</b> Apple computers</li>
                <li><b>Linux:</b> Servers, developers</li>
                <li><b>Android:</b> Mobile devices</li>
                <li><b>iOS:</b> iPhones/iPads</li>
                <li><b>ChromeOS:</b> Chromebooks</li>
            </ul>
        </div>
        <div style="background: #f1f8e9; padding: 15px; border-radius: 8px;">
            <h5>⚙️ OS Components</h5>
            <ul>
                <li><b>Kernel:</b> Core (manages CPU/RAM)</li>
                <li><b>Shell:</b> Interface (GUI/CLI)</li>
                <li><b>File System:</b> NTFS, APFS, ext4</li>
                <li><b>Drivers:</b> Hardware translators</li>
                <li><b>System Libraries:</b> Shared code</li>
            </ul>
        </div>
    </div>
</div>

<h3>📁 File Extensions Deep Dive</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>📊 Common File Extensions Cheat Sheet</h4>
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Extension</th>
            <th style="padding: 10px;">File Type</th>
            <th style="padding: 10px;">Opens With</th>
            <th style="padding: 10px;">Icon</th>
            <th style="padding: 10px;">Danger Level</th>
        </tr>
        <tr><td>.docx</td><td>Word Document</td><td>Microsoft Word</td><td>📝</td><td>🟢 Safe</td></tr>
        <tr><td>.pdf</td><td>Portable Document</td><td>Adobe Reader</td><td>📄</td><td>🟢 Safe</td></tr>
        <tr><td>.xlsx</td><td>Excel Spreadsheet</td><td>Microsoft Excel</td><td>📊</td><td>🟢 Safe</td></tr>
        <tr><td>.jpg/.jpeg</td><td>Image</td><td>Photos, Paint</td><td>🖼️</td><td>🟢 Safe</td></tr>
        <tr><td>.mp3</td><td>Audio</td><td>Media Player</td><td>🎵</td><td>🟢 Safe</td></tr>
        <tr><td>.mp4</td><td>Video</td><td>VLC, Media Player</td><td>🎬</td><td>🟢 Safe</td></tr>
        <tr><td>.zip</td><td>Compressed Archive</td><td>WinRAR, 7-Zip</td><td>🗜️</td><td>🟡 Caution</td></tr>
        <tr><td>.exe</td><td>Executable Program</td><td>Windows</td><td>⚙️</td><td>🔴 Dangerous</td></tr>
        <tr><td>.msi</td><td>Windows Installer</td><td>Installer</td><td>📦</td><td>🟡 Caution</td></tr>
        <tr><td>.bat/.cmd</td><td>Batch File</td><td>Command Prompt</td><td>💻</td><td>🔴 Dangerous</td></tr>
        <tr><td>.txt</td><td>Plain Text</td><td>Notepad</td><td>📃</td><td>🟢 Safe</td></tr>
        <tr><td>.html/.htm</td><td>Web Page</td><td>Browser</td><td>🌐</td><td>🟡 Caution</td></tr>
    </table>
</div>

<h3>🎯 Understanding File Associations</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px;">
    <h4>🔗 How Windows Knows What Opens What</h4>
    <div style="background: white; border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 20px;">
            <div>
                <b>File: <span style="color: #4A90E2;">report.docx</span></b><br/>
                <div style="margin-top: 10px;">
                    <b>1. Looks at extension:</b> .docx<br/>
                    <b>2. Checks registry:</b><br/>
                    <div style="margin-left: 20px;">
                        .docx → Microsoft Word<br/>
                        .docx → WordPad (backup)<br/>
                        .docx → Notepad (last resort)
                    </div>
                    <b>3. Opens with default app</b>
                </div>
            </div>
            <div>
                <b>What if extension is wrong?</b><br/>
                <div style="background: #ffebee; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>File: vacation.jpg.exe</b><br/>
                    • Looks like a picture (.jpg)<br/>
                    • Actually a program (.exe)<br/>
                    • ⚠️ <b>TRICK!</b> Malware often hides like this
                </div>
                <div style="background: #e8f5e8; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Protection:</b> Always show file extensions!<br/>
                    File Explorer → View → Show → File name extensions
                </div>
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: File Management Mastery</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Show File Extensions (15 mins)</h4>
    <ol>
        <li>Open File Explorer (<kbd>Win + E</kbd>)</li>
        <li>Click <b>View</b> tab</li>
        <li>Check <b>File name extensions</b></li>
        <li>Also check <b>Hidden items</b></li>
        <li>Now you can see:
            <ul>
                <li>report.docx (not just "report")</li>
                <li>Hidden files/folders (grayed out)</li>
                <li>System files (if "Hidden protected operating system files" is unchecked)</li>
            </ul>
        </li>
    </ol>
    
    <h4>Exercise 2: File Extension Game (20 mins)</h4>
    <p>Create these files and try to open them:</p>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin: 15px 0;">
        <div style="background: white; padding: 10px; border: 1px solid #ddd;">
            <b>Step 1: Create text file</b><br/>
            1. Right-click → New → Text Document<br/>
            2. Name it: <code>test.txt</code><br/>
            3. Open it (opens in Notepad)
        </div>
        <div style="background: white; padding: 10px; border: 1px solid #ddd;">
            <b>Step 2: Change extension</b><br/>
            1. Rename to: <code>test.mp3</code><br/>
            2. Click "Yes" to warning<br/>
            3. Try to open it<br/>
            4. <b>Result:</b> Error! Not real audio
        </div>
        <div style="background: white; padding: 10px; border: 1px solid #ddd;">
            <b>Step 3: Create real extension</b><br/>
            1. Open Notepad<br/>
            2. Type: <code>&lt;h1&gt;Hello&lt;/h1&gt;</code><br/>
            3. Save as: <code>page.html</code><br/>
            4. Open in browser
        </div>
        <div style="background: white; padding: 10px; border: 1px solid #ddd;">
            <b>Step 4: Executable test</b><br/>
            1. Create: <code>virus.bat</code><br/>
            2. Content: <code>echo "Not a real virus!"</code><br/>
            3. Run it (be careful!)<br/>
            4. Opens Command Prompt
        </div>
    </div>
    
    <h4>Exercise 3: Check Your System (25 mins)</h4>
    <ol>
        <li>Open <b>System Information</b>:
            <ul>
                <li>Press <kbd>Win + R</kbd></li>
                <li>Type: <code>msinfo32</code></li>
                <li>Press Enter</li>
            </ul>
        </li>
        <li>Find:
            <table style="width: 100%; margin: 10px 0;">
                <tr><td><b>OS Name:</b></td><td>___________________</td></tr>
                <tr><td><b>Version:</b></td><td>___________________</td></tr>
                <tr><td><b>System Type:</b></td><td>x64 or x86? ________</td></tr>
                <tr><td><b>Installed Physical Memory:</b></td><td>___________________</td></tr>
                <tr><td><b>BIOS Version:</b></td><td>___________________</td></tr>
            </table>
        </li>
        <li>Check if your OS is 64-bit or 32-bit:
            <ul>
                <li>Right-click <b>This PC</b> → Properties</li>
                <li>Look under "System type"</li>
            </ul>
        </li>
    </ol>
</div>

<h3>📂 File System Organization</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px;">
    <h4>🎯 Professional Folder Structure</h4>
    <div style="background: white; padding: 15px; border: 1px solid #4A90E2; border-radius: 5px;">
        <pre style="margin: 0; font-family: monospace;">
📁 C:/
├── 📁 Users/
│   └── 📁 [YourName]/
│       ├── 📁 Desktop/           (Avoid storing here!)
│       ├── 📁 Documents/         (Main work area)
│       │   ├── 📁 Work/
│       │   │   ├── 📁 Projects/
│       │   │   ├── 📁 Meetings/
│       │   │   └── 📁 Reports/
│       │   ├── 📁 Personal/
│       │   └── 📁 School/
│       ├── 📁 Downloads/         (Temporary - clean weekly!)
│       ├── 📁 Pictures/          (Organize by year/event)
│       ├── 📁 Music/
│       └── 📁 Videos/
├── 📁 Program Files/             (64-bit apps)
├── 📁 Program Files (x86)/       (32-bit apps)
├── 📁 Windows/                   (DO NOT TOUCH!)
└── 📁 PerfLogs/                  (Performance logs)
        </pre>
    </div>
    
    <div style="margin-top: 15px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
            <b>✅ Good Practices:</b>
            <ul>
                <li>Use meaningful folder names</li>
                <li>Keep Desktop clean (max 5-10 items)</li>
                <li>Regularly clean Downloads folder</li>
                <li>Use subfolders for organization</li>
                <li>Backup important files</li>
            </ul>
        </div>
        <div style="background: #ffebee; padding: 10px; border-radius: 5px;">
            <b>❌ Bad Practices:</b>
            <ul>
                <li>Everything on Desktop</li>
                <li>One giant "Stuff" folder</li>
                <li>Names like "asdf" or "123"</li>
                <li>No backups</li>
                <li>Saving in Program Files</li>
            </ul>
        </div>
    </div>
</div>

<h3>🔐 File Permissions & Security</h3>
<div style="background-color: #f3e5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>👑 User Accounts & Permissions</h4>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>👤 Standard User</h5>
            <ul>
                <li>Can use installed programs</li>
                <li>Can save files in user folders</li>
                <li><b>Cannot:</b> Install software</li>
                <li><b>Cannot:</b> Change system settings</li>
                <li><b>Cannot:</b> Access other users' files</li>
                <li><b>Safer</b> for daily use</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>👑 Administrator</h5>
            <ul>
                <li>Can install/uninstall software</li>
                <li>Can change any setting</li>
                <li>Can access all files</li>
                <li>Can create user accounts</li>
                <li><b>Danger:</b> Can break system</li>
                <li><b>Use only when needed</b></li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #8BC34A; padding: 15px; border-radius: 8px;">
            <h5>🛡️ Guest Account</h5>
            <ul>
                <li>Temporary access</li>
                <li>No password required</li>
                <li>Changes deleted after logout</li>
                <li>Cannot install software</li>
                <li>Great for friends/visitors</li>
                <li>Disabled by default in Win10/11</li>
            </ul>
        </div>
    </div>
    
    <div style="margin-top: 20px; background: #fff3cd; padding: 15px; border-radius: 5px;">
        <h5>🔒 File Permission Types</h5>
        <table style="width: 100%;">
            <tr><td><b>Read (R):</b></td><td>Can open/view file</td></tr>
            <tr><td><b>Write (W):</b></td><td>Can modify/delete file</td></tr>
            <tr><td><b>Execute (X):</b></td><td>Can run program file</td></tr>
            <tr><td><b>Full Control:</b></td><td>Can do anything (admin)</td></tr>
        </table>
        <p><small>Right-click file → Properties → Security tab to see permissions</small></p>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px; border: 2px solid #FF9800;">
    <h4>Task 1: Create a File Organization System (45 mins)</h4>
    <p>Create this folder structure in your Documents folder:</p>
    <div style="background: white; padding: 15px; margin: 10px 0;">
        <pre style="margin: 0; font-family: monospace;">
📁 IT_Course_Organization/
├── 📁 1_Current_Projects/
│   ├── 📁 Week_1_Assignments/
│   │   ├── 📁 Day_1_Desktop/
│   │   ├── 📁 Day_2_Hardware/
│   │   └── 📁 Day_3_OS_Files/
│   └── 📁 Notes/
│       ├── 📄 keyboard_shortcuts.txt
│       ├── 📄 hardware_terms.txt
│       └── 📄 file_extensions.txt
├── 📁 2_Reference_Materials/
│   ├── 📁 Software_Manuals/
│   ├── 📁 Tutorials/
│   └── 📁 Cheat_Sheets/
├── 📁 3_Archive/
│   ├── 📁 Completed_Work/
│   └── 📁 Old_Versions/
└── 📁 4_Resources/
    ├── 📁 Images/
    ├── 📁 Templates/
    └── 📁 Downloads/
        </pre>
    </div>
    
    <h4>Task 2: File Extension Investigation (30 mins)</h4>
    <ol>
        <li>Find 10 different file types on your computer</li>
        <li>Create a table:
            <table style="width: 100%; margin: 10px 0;">
                <tr><th>File Name</th><th>Extension</th><th>File Size</th><th>Default Program</th></tr>
                <tr><td>_______________</td><td>_______</td><td>_______</td><td>_______________</td></tr>
                <tr><td>_______________</td><td>_______</td><td>_______</td><td>_______________</td></tr>
                <tr><td>_______________</td><td>_______</td><td>_______</td><td>_______________</td></tr>
            </table>
        </li>
        <li>Change default program for one file type:
            <ul>
                <li>Right-click .txt file → Open with → Choose another app</li>
                <li>Select WordPad instead of Notepad</li>
                <li>Check "Always use this app"</li>
            </ul>
        </li>
    </ol>
    
    <h4>Task 3: Compression Practice (45 mins)</h4>
    <p>Learn to work with compressed files:</p>
    <ol>
        <li><b>Create a ZIP file:</b>
            <ul>
                <li>Select 3 images and 2 documents</li>
                <li>Right-click → Send to → Compressed (zipped) folder</li>
                <li>Name it: "MyFiles.zip"</li>
            </ul>
        </li>
        <li><b>Extract files:</b>
            <ul>
                <li>Right-click ZIP → Extract All...</li>
                <li>Choose destination folder</li>
                <li>Compare original vs extracted file sizes</li>
            </ul>
        </li>
        <li><b>Password protect:</b> (Install 7-Zip first)
            <ul>
                <li>Right-click folder → 7-Zip → Add to archive</li>
                <li>Set password: "ITCourse2024"</li>
                <li>Try to extract without password</li>
            </ul>
        </li>
        <li><b>Find large files:</b>
            <ul>
                <li>Open File Explorer → This PC</li>
                <li>Search: <code>size:>100MB</code></li>
                <li>Move 2 largest files to a new "Large_Files" folder</li>
            </ul>
        </li>
    </ol>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching File Management Concepts</h4>
    <ul>
        <li><b>Physical Analogy:</b> "Folders are like drawers, files are like papers"</li>
        <li><b>Extension Game:</b> Have students guess what opens .pdf, .xlsx, etc.</li>
        <li><b>Common Mistakes:</b>
            <ul>
                <li>Not showing file extensions (security risk!)</li>
                <li>Saving everything to Desktop</li>
                <li>Using spaces in file names (use_underscores instead)</li>
                <li>Not organizing Downloads folder</li>
            </ul>
        </li>
        <li><b>Demo:</b> Show how changing .txt to .exe makes it "executable"</li>
        <li><b>Checkpoint Questions:</b>
            <ol>
                <li>"What opens a .pdf file by default?"</li>
                <li>"Why shouldn't you run .exe files from email?"</li>
                <li>"What's the difference between C:\\ and D:\\ drives?"</li>
            </ol>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Understands purpose of operating system</label><br/>
    <label><input type="checkbox"> Can identify common file extensions</label><br/>
    <label><input type="checkbox"> Knows how to show/hide file extensions</label><br/>
    <label><input type="checkbox"> Can create organized folder structures</label><br/>
    <label><input type="checkbox"> Understands file permissions (read/write/execute)</label><br/>
    <label><input type="checkbox"> Knows difference between 32-bit and 64-bit OS</label><br/>
    <label><input type="checkbox"> Can create and extract ZIP files</label><br/>
    <label><input type="checkbox"> Understands user account types (Standard vs Admin)</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Tool:</b> <a href="https://www.7-zip.org">7-Zip.org</a> - Free file compression tool</li>
        <li><b>Website:</b> <a href="https://fileinfo.com">FileInfo.com</a> - Database of file extensions</li>
        <li><b>Video:</b> "How File Systems Work" by Techquickie (YouTube)</li>
        <li><b>Game:</b> "File Extension Matching Game" - Create flashcards</li>
        <li><b>Practice:</b> Organize your real Documents folder using today's principles</li>
    </ul>
</div>
`
            },
            "1-4": {
                "icon": "fa-terminal",
                "title": "Command Prompt Basics",
                "html": `<h1>Week 1, Day 4: Command Prompt Basics</h1>
<p>Today, you'll learn to control your computer using text commands instead of clicking. This is the foundation for IT professionals, system administrators, and power users.</p>

<div class="analogy-box">
    <b>Analogy: CMD as Talking Directly to the Chef 🧑‍🍳</b><br/>
    GUI (Graphical Interface) = Pointing at menu pictures<br/>
    CMD (Command Line) = Speaking directly to chef in kitchen<br/>
    Commands = Specific cooking instructions<br/>
    Output = The prepared dish<br/>
    Errors = "I don't understand that ingredient"
</div>

<h3>🖥️ What is Command Prompt?</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔤 Command Line Interface (CLI) vs Graphical Interface (GUI)</h4>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 20px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>🎨 GUI (Graphical User Interface)</h5>
            <ul>
                <li>Icons, buttons, windows</li>
                <li>Point and click with mouse</li>
                <li>Easy for beginners</li>
                <li>Visual feedback</li>
                <li><b>Examples:</b> Windows Desktop, File Explorer</li>
                <li><b>Speed:</b> Slower for repetitive tasks</li>
                <li><b>Precision:</b> Can be imprecise</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>⌨️ CLI (Command Line Interface)</h5>
            <ul>
                <li>Text commands only</li>
                <li>Keyboard input</li>
                <li>Steeper learning curve</li>
                <li>Text output</li>
                <li><b>Examples:</b> CMD, PowerShell, Terminal</li>
                <li><b>Speed:</b> Faster for experts</li>
                <li><b>Precision:</b> Exact control</li>
                <li><b>Automation:</b> Can script repetitive tasks</li>
            </ul>
        </div>
    </div>
    
    <div style="text-align: center; margin: 20px 0;">
        <div style="display: inline-block; background: #4A90E2; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Beginner</div>
        <div style="display: inline-block; margin: 0 10px;">───────────────→</div>
        <div style="display: inline-block; background: #FF9800; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Intermediate</div>
        <div style="display: inline-block; margin: 0 10px;">───────────────→</div>
        <div style="display: inline-block; background: #8BC34A; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Expert</div>
        <div style="margin-top: 10px; font-size: 0.9em;">
            Uses GUI only → Uses both GUI & CLI → Uses CLI primarily
        </div>
    </div>
</div>

<h3>🚀 Opening Command Prompt</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🔍 5 Ways to Open CMD</h4>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>Method 1: Run Dialog (Fastest)</h5>
            <ol>
                <li>Press <kbd>Win + R</kbd></li>
                <li>Type: <code>cmd</code></li>
                <li>Press <kbd>Enter</kbd></li>
                <li><b>Opens:</b> Normal CMD</li>
            </ol>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>Method 2: Search Menu</h5>
            <ol>
                <li>Click Start or press <kbd>Win</kbd></li>
                <li>Type: "cmd" or "Command Prompt"</li>
                <li>Click result or press <kbd>Enter</kbd></li>
                <li><b>Tip:</b> Right-click → Run as administrator</li>
            </ol>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>Method 3: File Explorer</h5>
            <ol>
                <li>Open any folder in File Explorer</li>
                <li>Click address bar (or press <kbd>F4</kbd>)</li>
                <li>Type: <code>cmd</code></li>
                <li>Press <kbd>Enter</kbd></li>
                <li><b>Opens:</b> CMD in that folder!</li>
            </ol>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>Method 4: Power User Menu</h5>
            <ol>
                <li>Press <kbd>Win + X</kbd></li>
                <li>Press <kbd>C</kbd> for Command Prompt</li>
                <li>Or <kbd>A</kbd> for Admin Command Prompt</li>
                <li><b>Fastest for admin CMD!</b></li>
            </ol>
        </div>
    </div>
    
    <div style="margin-top: 20px; background: #fff3cd; padding: 15px; border-radius: 5px;">
        <h5>💡 Pro Tip: Always Run as Administrator When:</h5>
        <ul>
            <li>Changing system settings</li>
            <li>Running network diagnostics</li>
            <li>Installing system-wide software</li>
            <li>Modifying protected files</li>
        </ul>
        <p><b>Warning:</b> Admin CMD can damage system if used incorrectly!</p>
    </div>
</div>

<h3>📚 Essential CMD Commands Cheat Sheet</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <h4>🎯 Top 20 CMD Commands for Beginners</h4>
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Command</th>
            <th style="padding: 10px;">Description</th>
            <th style="padding: 10px;">Example</th>
            <th style="padding: 10px;">Category</th>
        </tr>
        <tr><td><code>dir</code></td><td>List files and folders</td><td><code>dir</code></td><td>📁 Navigation</td></tr>
        <tr><td><code>cd</code></td><td>Change directory</td><td><code>cd Documents</code></td><td>📁 Navigation</td></tr>
        <tr><td><code>mkdir</code></td><td>Make new directory</td><td><code>mkdir NewFolder</code></td><td>📁 Navigation</td></tr>
        <tr><td><code>rmdir</code></td><td>Remove directory</td><td><code>rmdir OldFolder</code></td><td>📁 Navigation</td></tr>
        <tr><td><code>cls</code></td><td>Clear screen</td><td><code>cls</code></td><td>⚙️ Utility</td></tr>
        <tr><td><code>ipconfig</code></td><td>Show IP configuration</td><td><code>ipconfig</code></td><td>🌐 Network</td></tr>
        <tr><td><code>ping</code></td><td>Test network connection</td><td><code>ping google.com</code></td><td>🌐 Network</td></tr>
        <tr><td><code>tracert</code></td><td>Trace route to host</td><td><code>tracert google.com</code></td><td>🌐 Network</td></tr>
        <tr><td><code>systeminfo</code></td><td>Display system information</td><td><code>systeminfo</code></td><td>💻 System</td></tr>
        <tr><td><code>tasklist</code></td><td>List running processes</td><td><code>tasklist</code></td><td>💻 System</td></tr>
        <tr><td><code>taskkill</code></td><td>Kill a process</td><td><code>taskkill /im notepad.exe</code></td><td>💻 System</td></tr>
        <tr><td><code>chkdsk</code></td><td>Check disk for errors</td><td><code>chkdsk C:</code></td><td>💾 Disk</td></tr>
        <tr><td><code>format</code></td><td>Format a disk</td><td><code>format D:</code></td><td>💾 Disk</td></tr>
        <tr><td><code>copy</code></td><td>Copy files</td><td><code>copy file1.txt file2.txt</code></td><td>📄 Files</td></tr>
        <tr><td><code>del</code></td><td>Delete files</td><td><code>del oldfile.txt</code></td><td>📄 Files</td></tr>
        <tr><td><code>type</code></td><td>Display file contents</td><td><code>type readme.txt</code></td><td>📄 Files</td></tr>
        <tr><td><code>echo</code></td><td>Display message/create file</td><td><code>echo Hello > file.txt</code></td><td>📄 Files</td></tr>
        <tr><td><code>help</code></td><td>Show command help</td><td><code>help dir</code></td><td>❓ Help</td></tr>
        <tr><td><code>exit</code></td><td>Close Command Prompt</td><td><code>exit</code></td><td>❓ Help</td></tr>
        <tr><td><code>date / time</code></td><td>Show/set date and time</td><td><code>date</code></td><td>⚙️ Utility</td></tr>
    </table>
</div>

<h3>🛠️ Hands-On Lab: CMD Practice</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Basic Navigation (20 mins)</h4>
    <ol>
        <li>Open CMD (<kbd>Win + R</kbd> → <code>cmd</code>)</li>
        <li>Type each command and observe output:
            <div style="background: #36454f; color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
                <code>C:\\Users\\YourName> dir</code><br/>
                <code>C:\\Users\\YourName> cd Desktop</code><br/>
                <code>C:\\Users\\YourName\\Desktop> dir</code><br/>
                <code>C:\\Users\\YourName\\Desktop> cd ..</code> (goes back)<br/>
                <code>C:\\Users\\YourName> cd \\</code> (goes to root)<br/>
                <code>C:\\> cls</code> (clears screen)<br/>
            </div>
        </li>
        <li>Practice:
            <ul>
                <li>Navigate to Documents folder</li>
                <li>List all files</li>
                <li>Go back to user folder</li>
                <li>Clear screen</li>
            </ul>
        </li>
    </ol>
    
    <h4>Exercise 2: File & Folder Operations (25 mins)</h4>
    <ol>
        <li>Create a practice structure:
            <div style="background: #36454f; color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
                <code>C:\\> cd %USERPROFILE%\\Desktop</code><br/>
                <code>C:\\...\\Desktop> mkdir CMD_Practice</code><br/>
                <code>C:\\...\\Desktop> cd CMD_Practice</code><br/>
                <code>C:\\...\\CMD_Practice> mkdir Folder1 Folder2 Folder3</code><br/>
                <code>C:\\...\\CMD_Practice> echo Hello World > file1.txt</code><br/>
                <code>C:\\...\\CMD_Practice> echo Another line >> file1.txt</code><br/>
                <code>C:\\...\\CMD_Practice> copy file1.txt file2.txt</code><br/>
                <code>C:\\...\\CMD_Practice> type file1.txt</code> (view contents)<br/>
                <code>C:\\...\\CMD_Practice> dir</code> (see what you created)<br/>
            </div>
        </li>
        <li>Clean up:
            <div style="background: #36454f; color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
                <code>C:\\...\\CMD_Practice> del file2.txt</code><br/>
                <code>C:\\...\\CMD_Practice> rmdir Folder3</code><br/>
                <code>C:\\...\\CMD_Practice> dir</code> (verify deletion)<br/>
            </div>
        </li>
    </ol>
    
    <h4>Exercise 3: Network & System Commands (15 mins)</h4>
    <ol>
        <li>Check your network:
            <div style="background: #36454f; color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
                <code>C:\\> ipconfig</code> (basic info)<br/>
                <code>C:\\> ipconfig /all</code> (detailed info)<br/>
                <code>C:\\> ping 8.8.8.8</code> (Google DNS)<br/>
                <code>C:\\> ping google.com</code> (website)<br/>
                <code>C:\\> tracert google.com</code> (see route)<br/>
            </div>
        </li>
        <li>Check system info:
            <div style="background: #36454f; color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
                <code>C:\\> systeminfo | findstr /C:"OS Name"</code><br/>
                <code>C:\\> systeminfo | findstr /C:"Total Physical Memory"</code><br/>
                <code>C:\\> hostname</code> (computer name)<br/>
                <code>C:\\> whoami</code> (current user)<br/>
            </div>
        </li>
    </ol>
</div>

<h3>🎯 Understanding CMD Syntax</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px;">
    <h4>📖 Command Structure</h4>
    <div style="background: white; padding: 15px; border: 1px solid #4A90E2; border-radius: 5px;">
        <div style="text-align: center; font-size: 1.2em; margin-bottom: 15px;">
            <span style="background: #4A90E2; color: white; padding: 5px 10px; border-radius: 3px;">COMMAND</span>
            <span style="margin: 0 5px;">[SPACE]</span>
            <span style="background: #FF9800; color: white; padding: 5px 10px; border-radius: 3px;">OPTIONS</span>
            <span style="margin: 0 5px;">[SPACE]</span>
            <span style="background: #8BC34A; color: white; padding: 5px 10px; border-radius: 3px;">ARGUMENTS</span>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 15px;">
            <div>
                <h5>Command</h5>
                <p>The action to perform</p>
                <code>dir</code> - List<br/>
                <code>copy</code> - Copy<br/>
                <code>del</code> - Delete
            </div>
            <div>
                <h5>Options/Switches</h5>
                <p>Modify command behavior</p>
                <code>/w</code> - Wide listing<br/>
                <code>/s</code> - Include subfolders<br/>
                <code>/q</code> - Quiet mode
            </div>
            <div>
                <h5>Arguments</h5>
                <p>What to act upon</p>
                <code>file.txt</code><br/>
                <code>C:\\Folder</code><br/>
                <code>google.com</code>
            </div>
        </div>
        
        <div style="margin-top: 20px; background: #f5f5f5; padding: 10px; border-radius: 5px;">
            <b>Examples:</b><br/>
            <code>dir /w C:\\Windows</code> = List Windows folder in wide format<br/>
            <code>copy /y file1.txt file2.txt</code> = Copy without asking "yes"<br/>
            <code>del /s *.tmp</code> = Delete all .tmp files in folder and subfolders
        </div>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Complete CMD Scavenger Hunt (60 mins)</h4>
    <p>Using ONLY Command Prompt (no GUI!), complete these tasks:</p>
    <ol>
        <li><b>Navigation:</b>
            <ul>
                <li>Navigate to your Documents folder</li>
                <li>Create folder "CMD_Assignment"</li>
                <li>Inside it, create "Week1", "Week2", "Week3" folders</li>
            </ul>
        </li>
        <li><b>File Operations:</b>
            <ul>
                <li>In Week1 folder, create 3 text files: notes.txt, ideas.txt, tasks.txt</li>
                <li>Add text to notes.txt: "Command Prompt is powerful!"</li>
                <li>Copy notes.txt to Week2 folder</li>
                <li>Rename the copy to "backup_notes.txt"</li>
            </ul>
        </li>
        <li><b>System Investigation:</b>
            <ul>
                <li>Find your computer name</li>
                <li>Find your IP address</li>
                <li>Find Windows installation date</li>
                <li>Find total RAM installed</li>
            </ul>
        </li>
        <li><b>Network Test:</b>
            <ul>
                <li>Ping Google 4 times</li>
                <li>Find your default gateway</li>
                <li>Find your MAC address</li>
            </ul>
        </li>
    </ol>
    
    <h4>Task 2: Create a CMD Reference Guide (30 mins)</h4>
    <p>Create a text file with these sections:</p>
    <div style="background: white; padding: 15px; margin: 10px 0;">
        <pre style="margin: 0;">
=== CMD REFERENCE GUIDE ===
Date: _______________
Name: _______________

1. NAVIGATION COMMANDS:
   cd ______ = Change directory
   dir ______ = List contents
   mkdir ____ = Create folder
   rmdir ____ = Remove folder

2. FILE COMMANDS:
   copy _____ = Copy file
   del ______ = Delete file
   type _____ = View file
   echo ____ > file.txt = Create file

3. NETWORK COMMANDS:
   ipconfig = Show IP info
   ping ____ = Test connection
   tracert _ = Trace route

4. SYSTEM COMMANDS:
   systeminfo = System details
   tasklist = Running programs
   cls = Clear screen
   exit = Close CMD
        </pre>
    </div>
    
    <h4>Task 3: Batch File Creation (30 mins)</h4>
    <p>Create your first batch script (.bat file):</p>
    <ol>
        <li>Open Notepad</li>
        <li>Type this script:
            <div style="background: #36454f; color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
                <code>@echo off<br/>
                echo ============================<br/>
                echo   SYSTEM INFORMATION SCRIPT<br/>
                echo ============================<br/>
                echo.<br/>
                hostname<br/>
                echo.<br/>
                ipconfig | findstr IPv4<br/>
                echo.<br/>
                systeminfo | findstr /C:"OS Name"<br/>
                systeminfo | findstr /C:"Total Physical Memory"<br/>
                echo.<br/>
                echo Script completed at: %date% %time%<br/>
                pause</code>
            </div>
        </li>
        <li>Save as <code>sysinfo.bat</code></li>
        <li>Double-click to run it!</li>
        <li>Modify to add more information</li>
    </ol>
</div>

<h3>💡 CMD Tips & Tricks</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Power User Shortcuts</h4>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        <div>
            <h5>⌨️ Keyboard Shortcuts in CMD</h5>
            <table style="width: 100%;">
                <tr><td><kbd>↑</kbd> / <kbd>↓</kbd></td><td>Previous/next command</td></tr>
                <tr><td><kbd>Tab</kbd></td><td>Auto-complete file/folder names</td></tr>
                <tr><td><kbd>F3</kbd></td><td>Repeat last command</td></tr>
                <tr><td><kbd>F7</kbd></td><td>Show command history</td></tr>
                <tr><td><kbd>Ctrl + C</kbd></td><td>Cancel current command</td></tr>
                <tr><td><kbd>Ctrl + A</kbd></td><td>Select all text</td></tr>
                <tr><td><kbd>Ctrl + V</kbd></td><td>Paste (right-click also works)</td></tr>
            </table>
        </div>
        <div>
            <h5>🎯 Useful Symbols</h5>
            <table style="width: 100%;">
                <tr><td><code>></code></td><td>Redirect output to file (overwrite)</td></tr>
                <tr><td><code>>></code></td><td>Redirect output to file (append)</td></tr>
                <tr><td><code>|</code></td><td>Pipe (send output to another command)</td></tr>
                <tr><td><code>&</code></td><td>Run multiple commands</td></tr>
                <tr><td><code>&&</code></td><td>Run next command only if previous succeeded</td></tr>
                <tr><td><code>*</code></td><td>Wildcard (any characters)</td></tr>
                <tr><td><code>?</code></td><td>Wildcard (single character)</td></tr>
            </table>
        </div>
    </div>
    
    <div style="margin-top: 15px; background: #e8f5e8; padding: 10px; border-radius: 5px;">
        <h5>🔍 Real-World Examples</h5>
        <ul>
            <li><code>dir *.docx</code> = List only Word documents</li>
            <li><code>ipconfig > network_info.txt</code> = Save network info to file</li>
            <li><code>dir /s | find ".txt"</code> = Find all .txt files in all subfolders</li>
            <li><code>echo %date% %time% > log.txt</code> = Create timestamp log</li>
        </ul>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #e8f4f8; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Command Line Effectively</h4>
    <ul>
        <li><b>Start with Why:</b> "Why would you use CMD when you can click?"</li>
        <li><b>Physical Analogy:</b> "GUI is pointing at menu, CMD is speaking to chef"</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Case sensitivity (CMD is NOT case-sensitive)</li>
                <li>Spaces in file paths (use quotes: "C:\\My Folder")</li>
                <li>Current directory confusion (always check prompt)</li>
                <li>Forgetting to press Enter after typing command</li>
            </ul>
        </li>
        <li><b>Demo Ideas:</b>
            <ul>
                <li>Show deleting 100 files faster with <code>del *.tmp</code></li>
                <li>Compare creating 10 folders: GUI vs CMD</li>
                <li>Show network troubleshooting with ping/tracert</li>
            </ul>
        </li>
        <li><b>Safety First:</b> Always demonstrate dangerous commands (del, format) on test files only!</li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can open Command Prompt using multiple methods</label><br/>
    <label><input type="checkbox"> Understands difference between GUI and CLI</label><br/>
    <label><input type="checkbox"> Can navigate folders using cd command</label><br/>
    <label><input type="checkbox"> Can create and delete files/folders in CMD</label><br/>
    <label><input type="checkbox"> Can use basic network commands (ipconfig, ping)</label><br/>
    <label><input type="checkbox"> Understands command syntax (command + options + arguments)</label><br/>
    <label><input type="checkbox"> Can use help system for unfamiliar commands</label><br/>
    <label><input type="checkbox"> Can create and run a simple batch file</label><br/>
    <label><input type="checkbox"> Knows when to use administrator vs standard CMD</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://cmdchallenge.com">CMDChallenge.com</a></li>
        <li><b>Reference:</b> <a href="https://ss64.com/nt/">SS64.com CMD Reference</a></li>
        <li><b>Video:</b> "Command Prompt Basics" by NetworkChuck (YouTube)</li>
        <li><b>Practice:</b> Try these in CMD:
            <ul>
                <li><code>tree C:\\Windows</code> (show folder tree - cancel with Ctrl+C)</li>
                <li><code>color 0a</code> (green text on black - very "hacker" look)</li>
                <li><code>title My Custom CMD Window</code> (change window title)</li>
            </ul>
        </li>
        <li><b>Next Step:</b> PowerShell (more powerful than CMD, used in modern Windows)</li>
    </ul>
</div>
`
            },

            "2-1": {
                "icon": "fa-network-wired",
                "title": "Networking Fundamentals",
                "html": `<h1>Week 2, Day 1: Networking Fundamentals</h1>
<p>Today, you'll learn how data travels from your computer to the internet and back. Understand routers, switches, IP addresses, and how devices communicate.</p>

<div class="analogy-box">
    <b>Analogy: Computer Network as a Postal System 📮</b><br/>
    Data Packets = Letters/parcels<br/>
    IP Address = House address (where to deliver)<br/>
    Router = Local post office (sorts and directs)<br/>
    Switch = Mail sorter for an apartment building<br/>
    Modem = Translator between postal systems<br/>
    DNS = Phone book (name to address lookup)
</div>

<h3>🌐 Network Types & Scales</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔗 Network Hierarchy Pyramid</h4>
    <div style="text-align: center; margin: 20px 0;">
        <div style="display: inline-block; width: 300px;">
            <div style="background: #4A90E2; color: white; padding: 20px; border-radius: 8px 8px 0 0; font-weight: bold;">
                🌍 WAN (Wide Area Network)
            </div>
            <div style="background: #5CA4D4; color: white; padding: 15px;">
                <b>The Internet</b><br/>
                • Global network<br/>
                • Multiple LANs connected<br/>
                • Uses ISPs (Comcast, Verizon)<br/>
                • Covers cities/countries
            </div>
            <div style="background: #6FB8E6; color: white; padding: 20px; font-weight: bold;">
                🏢 MAN (Metropolitan Area Network)
            </div>
            <div style="background: #7FCCF8; color: white; padding: 15px;">
                <b>City-wide Network</b><br/>
                • University campuses<br/>
                • Business districts<br/>
                • Cable TV networks<br/>
                • Covers 5-50km
            </div>
            <div style="background: #8FE0FF; color: white; padding: 20px; font-weight: bold;">
                🏠 LAN (Local Area Network)
            </div>
            <div style="background: #9FF4FF; color: white; padding: 15px; border-radius: 0 0 8px 8px;">
                <b>Home/Office Network</b><br/>
                • Your Wi-Fi at home<br/>
                • Office Ethernet network<br/>
                • School computer lab<br/>
                • Covers 1 building
            </div>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 20px;">
        <div style="background: #e3f2fd; padding: 15px; border-radius: 8px;">
            <h5>🏠 LAN (Local Area Network)</h5>
            <ul>
                <li><b>Scope:</b> Single location</li>
                <li><b>Speed:</b> Fast (1 Gbps+)</li>
                <li><b>Cost:</b> Low</li>
                <li><b>Ownership:</b> You own it</li>
                <li><b>Technology:</b> Ethernet, Wi-Fi</li>
                <li><b>Devices:</b> 2-1000+ devices</li>
                <li><b>Example:</b> Your home Wi-Fi</li>
            </ul>
        </div>
        <div style="background: #fff3e0; padding: 15px; border-radius: 8px;">
            <h5>🏢 WLAN (Wireless LAN)</h5>
            <ul>
                <li><b>Scope:</b> Wireless coverage area</li>
                <li><b>Speed:</b> Medium (100-1000 Mbps)</li>
                <li><b>Cost:</b> Medium</li>
                <li><b>Technology:</b> Wi-Fi (802.11ac/ax)</li>
                <li><b>Range:</b> 50-150 feet indoors</li>
                <li><b>Security:</b> WPA2/WPA3</li>
                <li><b>Example:</b> Coffee shop Wi-Fi</li>
            </ul>
        </div>
        <div style="background: #f1f8e9; padding: 15px; border-radius: 8px;">
            <h5>🌍 WAN (Wide Area Network)</h5>
            <ul>
                <li><b>Scope:</b> Multiple locations</li>
                <li><b>Speed:</b> Varies (10-1000 Mbps)</li>
                <li><b>Cost:</b> High</li>
                <li><b>Ownership:</b> ISP owns infrastructure</li>
                <li><b>Technology:</b> Fiber, Cable, DSL</li>
                <li><b>Devices:</b> Millions connected</li>
                <li><b>Example:</b> The Internet</li>
            </ul>
        </div>
    </div>
</div>

<h3>🔌 Network Hardware Components</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🛠️ Network Device Comparison</h4>
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Device</th>
            <th style="padding: 10px;">Purpose</th>
            <th style="padding: 10px;">OSI Layer</th>
            <th style="padding: 10px;">Ports</th>
            <th style="padding: 10px;">Intelligence</th>
            <th style="padding: 10px;">Example</th>
        </tr>
        <tr><td><b>Modem</b></td><td>Translates digital ↔ analog</td><td>Physical</td><td>2-4</td><td>Low</td><td>🌊 Cable Modem</td></tr>
        <tr><td><b>Router</b></td><td>Directs traffic between networks</td><td>Network</td><td>4-8</td><td>High</td><td>🚦 Home Router</td></tr>
        <tr><td><b>Switch</b></td><td>Connects devices in same network</td><td>Data Link</td><td>8-48</td><td>Medium</td><td>🔀 Ethernet Switch</td></tr>
        <tr><td><b>Hub</b></td><td>Basic connector (obsolete)</td><td>Physical</td><td>4-12</td><td>None</td><td>⭕ Dumb Hub</td></tr>
        <tr><td><b>Access Point</b></td><td>Creates Wi-Fi network</td><td>Data Link</td><td>1-8</td><td>Medium</td><td>📡 Wi-Fi AP</td></tr>
        <tr><td><b>Firewall</b></td><td>Security filter</td><td>Network/Transport</td><td>Varies</td><td>High</td><td>🛡️ Security Appliance</td></tr>
    </table>
    
    <div style="margin-top: 20px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>🚦 Router - The Traffic Director</h5>
            <ul>
                <li><b>Primary Job:</b> Connect different networks</li>
                <li><b>Example:</b> Connects your home LAN to internet WAN</li>
                <li><b>Key Feature:</b> NAT (Network Address Translation)</li>
                <li><b>Has:</b> Routing table (map of network paths)</li>
                <li><b>Decisions:</b> "Which way should this data go?"</li>
                <li><b>Common Brands:</b> Linksys, Netgear, TP-Link, ASUS</li>
            </ul>
            <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Home Router = 3 devices in 1:</b><br/>
                1. Router (directs traffic)<br/>
                2. Switch (connects wired devices)<br/>
                3. Access Point (creates Wi-Fi)
            </div>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>🔀 Switch - The Smart Connector</h5>
            <ul>
                <li><b>Primary Job:</b> Connect devices within same network</li>
                <li><b>Example:</b> Connects computers in office</li>
                <li><b>Key Feature:</b> MAC address learning</li>
                <li><b>Has:</b> MAC address table (device directory)</li>
                <li><b>Decisions:</b> "Which port is Device X connected to?"</li>
                <li><b>Types:</b> Unmanaged (plug & play) vs Managed (configurable)</li>
            </ul>
            <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Switch vs Hub:</b><br/>
                • Switch sends to specific device (smart)<br/>
                • Hub sends to ALL devices (dumb, obsolete)
            </div>
        </div>
    </div>
</div>

<h3>🏠 Typical Home Network Diagram</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px;">
    <h4>📡 How Your Home Network Works</h4>
    <div style="background: white; border: 1px solid #ddd; padding: 20px; border-radius: 8px; position: relative;">
        <!-- Internet Cloud -->
        <div style="position: absolute; top: 20px; right: 20px; background: #4A90E2; color: white; padding: 15px; border-radius: 50px 50px 50px 0; width: 120px; text-align: center;">
            🌍<br/>Internet
        </div>
        
        <!-- Flow Diagram -->
        <div style="display: flex; flex-direction: column; align-items: center; margin: 30px 0;">
            <!-- Row 1: Internet to Modem -->
            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <div style="background: #4A90E2; color: white; padding: 10px 20px; border-radius: 5px;">
                    Internet<br/>ISP Line
                </div>
                <div style="margin: 0 10px;">→</div>
                <div style="background: #FF9800; color: white; padding: 10px 20px; border-radius: 5px;">
                    📶 Modem<br/>(Cable/DSL/Fiber)
                </div>
                <div style="margin: 0 10px;">→</div>
                <div style="background: #8BC34A; color: white; padding: 10px 20px; border-radius: 5px;">
                    🚦 Router<br/>(With Wi-Fi)
                </div>
            </div>
            
            <!-- Row 2: Router to Devices -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; width: 100%;">
                <div style="background: #e3f2fd; padding: 15px; border-radius: 8px; text-align: center;">
                    <div style="font-size: 24px;">💻</div>
                    <b>Wired PC</b><br/>
                    Ethernet cable<br/>
                    Fast & stable
                </div>
                <div style="background: #fff3e0; padding: 15px; border-radius: 8px; text-align: center;">
                    <div style="font-size: 24px;">📱</div>
                    <b>Smartphone</b><br/>
                    Wi-Fi connection<br/>
                    2.4/5 GHz
                </div>
                <div style="background: #f1f8e9; padding: 15px; border-radius: 8px; text-align: center;">
                    <div style="font-size: 24px;">📺</div>
                    <b>Smart TV</b><br/>
                    Wi-Fi/Ethernet<br/>
                    Streaming
                </div>
                <div style="background: #f3e5f5; padding: 15px; border-radius: 8px; text-align: center;">
                    <div style="font-size: 24px;">🎮</div>
                    <b>Game Console</b><br/>
                    Ethernet preferred<br/>
                    Low latency
                </div>
            </div>
            
            <!-- Row 3: Additional Devices -->
            <div style="margin-top: 20px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; width: 100%;">
                <div style="background: #ffebee; padding: 10px; border-radius: 5px; text-align: center;">
                    🔀 Switch<br/>(Extra ports)
                </div>
                <div style="background: #e0f2f1; padding: 10px; border-radius: 5px; text-align: center;">
                    🖨️ Printer<br/>(Network)
                </div>
                <div style="background: #fce4ec; padding: 10px; border-radius: 5px; text-align: center;">
                    📡 Extender<br/>(Wi-Fi range)
                </div>
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Network Investigation</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Physical Network Inspection (15 mins)</h4>
    <p>If in a lab/classroom, identify these components:</p>
    <ol>
        <li><b>Find the Router:</b> Look for device with antennas</li>
        <li><b>Find Ethernet Ports:</b> On walls, in computer lab</li>
        <li><b>Trace Cables:</b> Follow from computer to wall</li>
        <li><b>Identify Cable Types:</b>
            <ul>
                <li>Ethernet (RJ45) - square end, 8 wires</li>
                <li>Phone (RJ11) - smaller, 4-6 wires</li>
                <li>Coaxial - round, screw connector (TV/internet)</li>
            </ul>
        </li>
    </ol>
    
    <h4>Exercise 2: Command Line Network Tools (45 mins)</h4>
    <p>Open Command Prompt and run these commands:</p>
    
    <div style="background: #36454f; color: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5 style="color: white;">🌐 Basic Network Info</h5>
        <code>ipconfig</code><br/>
        • Shows your IP address<br/>
        • Shows subnet mask<br/>
        • Shows default gateway<br/><br/>
        
        <code>ipconfig /all</code><br/>
        • Detailed information<br/>
        • Shows MAC address<br/>
        • Shows DNS servers<br/>
        • Shows DHCP status<br/>
    </div>
    
    <div style="background: #36454f; color: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5 style="color: white;">📡 Connectivity Testing</h5>
        <code>ping 8.8.8.8</code><br/>
        • Tests connection to Google DNS<br/>
        • 4 packets sent/received<br/>
        • Shows response time (ms)<br/><br/>
        
        <code>ping google.com</code><br/>
        • Tests DNS resolution too<br/>
        • If this works but IP ping fails = DNS issue<br/><br/>
        
        <code>ping -t google.com</code><br/>
        • Continuous ping<br/>
        • Press <kbd>Ctrl + C</kbd> to stop<br/>
    </div>
    
    <div style="background: #36454f; color: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5 style="color: white;">🗺️ Path Tracing</h5>
        <code>tracert google.com</code><br/>
        • Shows route to destination<br/>
        • Each "hop" = a router<br/>
        • Shows response times<br/>
        • Can identify where connection fails<br/><br/>
        
        <code>pathping google.com</code><br/>
        • Combines ping + tracert<br/>
        • More detailed analysis<br/>
        • Takes longer to run<br/>
    </div>
    
    <h4>Exercise 3: Fill in Network Worksheet (30 mins)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>My Network Information:</b>
        <table style="width: 100%; margin: 10px 0;">
            <tr><td><b>My IP Address:</b></td><td>_________________________</td></tr>
            <tr><td><b>Subnet Mask:</b></td><td>_________________________</td></tr>
            <tr><td><b>Default Gateway:</b></td><td>_________________________</td></tr>
            <tr><td><b>DNS Servers:</b></td><td>_________________________</td></tr>
            <tr><td><b>MAC Address:</b></td><td>_________________________</td></tr>
            <tr><td><b>Ping to Google:</b></td><td>_______ ms average</td></tr>
            <tr><td><b>Number of Hops to Google:</b></td><td>_______ hops</td></tr>
        </table>
    </div>
</div>

<h3>🔢 IP Address Basics</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px;">
    <h4>🎯 Understanding IP Addresses</h4>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 20px 0;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>🏠 Private vs Public IP</h5>
            <table style="width: 100%;">
                <tr style="background: #f5f5f5;"><th></th><th>Private IP</th><th>Public IP</th></tr>
                <tr><td><b>Where:</b></td><td>Inside your network</td><td>On the internet</td></tr>
                <tr><td><b>Example:</b></td><td>192.168.1.10</td><td>73.158.203.45</td></tr>
                <tr><td><b>Who sees it:</b></td><td>Only local devices</td><td>Everyone on internet</td></tr>
                <tr><td><b>Can be same:</b></td><td>Yes (others have 192.168.1.10)</td><td>No (must be unique)</td></tr>
                <tr><td><b>Assigned by:</b></td><td>Your router (DHCP)</td><td>Your ISP</td></tr>
                <tr><td><b>Purpose:</b></td><td>Local communication</td><td>Internet communication</td></tr>
            </table>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>📦 Common Private IP Ranges</h5>
            <div style="background: #f0f8ff; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <b>Class A:</b> 10.0.0.0 - 10.255.255.255<br/>
                • Large organizations<br/>
                • 16+ million addresses<br/>
                • Example: 10.0.0.5
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <b>Class B:</b> 172.16.0.0 - 172.31.255.255<br/>
                • Medium organizations<br/>
                • 1 million addresses<br/>
                • Example: 172.16.0.10
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>Class C:</b> 192.168.0.0 - 192.168.255.255<br/>
                • Home/small office<br/>
                • 65,000 addresses<br/>
                • Example: 192.168.1.100<br/>
                • <b>Most common for home networks</b>
            </div>
        </div>
    </div>
    
    <div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>🔑 Special IP Addresses</h5>
        <table style="width: 100%;">
            <tr><td><code>127.0.0.1</code></td><td>Localhost (your own computer)</td></tr>
            <tr><td><code>192.168.1.1</code></td><td>Common router admin address</td></tr>
            <tr><td><code>0.0.0.0</code></td><td>Default route (all traffic)</td></tr>
            <tr><td><code>255.255.255.255</code></td><td>Broadcast (to all devices)</td></tr>
            <tr><td><code>169.254.x.x</code></td><td>APIPA (automatic when DHCP fails)</td></tr>
        </table>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Map Your Home Network (60 mins)</h4>
    <p>Create a detailed diagram of your home network:</p>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Required Elements:</b>
        <ol>
            <li><b>Internet Source:</b> Cable, DSL, Fiber, Satellite</li>
            <li><b>Modem:</b> Brand/model if visible</li>
            <li><b>Router:</b> Location, brand, Wi-Fi name</li>
            <li><b>Connected Devices:</b> (Find at least 8)
                <ul>
                    <li>Phones</li>
                    <li>Computers</li>
                    <li>Tablets</li>
                    <li>Smart TVs</li>
                    <li>Game consoles</li>
                    <li>Smart home devices</li>
                    <li>Printers</li>
                </ul>
            </li>
            <li><b>Connection Types:</b> Wi-Fi vs Ethernet</li>
            <li><b>IP Addresses:</b> Get IP of 3 devices</li>
        </ol>
        
        <b>Deliverable:</b> Draw on paper or use digital tool (Paint, PowerPoint)
    </div>
    
    <h4>Task 2: Network Troubleshooting Scenario (45 mins)</h4>
    <p>Solve these common network problems:</p>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Scenario 1: "No Internet Connection"</b><br/>
        Symptoms: Computer says "No internet" but Wi-Fi is connected.<br/>
        <b>Your troubleshooting steps:</b>
        <ol>
            <li>Ping 127.0.0.1 (tests your own network card)</li>
            <li>Ping your router's IP (tests local connection)</li>
            <li>Ping 8.8.8.8 (tests internet connection)</li>
            <li>Ping google.com (tests DNS)</li>
            <li>Check other devices (is it just this device?)</li>
            <li>Restart router/modem</li>
        </ol>
        
        <b>Scenario 2: "Slow Internet"</b><br/>
        Symptoms: Web pages load slowly, videos buffer.<br/>
        <b>Your troubleshooting steps:</b>
        <ol>
            <li>Run speed test (speedtest.net)</li>
            <li>Check for background downloads</li>
            <li>Test at different times of day</li>
            <li>Check Wi-Fi signal strength</li>
            <li>Try Ethernet cable instead of Wi-Fi</li>
            <li>Check router for overheating</li>
        </ol>
    </div>
    
    <h4>Task 3: Research Networking Equipment (45 mins)</h4>
    <p>Visit Amazon, Best Buy, or Newegg and research:</p>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        <div style="background: #f0f8ff; padding: 15px; border-radius: 5px;">
            <b>Entry-Level Router</b><br/>
            • Price: $________<br/>
            • Brand: ________<br/>
            • Wi-Fi Standard: ________<br/>
            • Speed: ________ Mbps<br/>
            • Best for: ________
        </div>
        <div style="background: #fff3e0; padding: 15px; border-radius: 5px;">
            <b>Gaming Router</b><br/>
            • Price: $________<br/>
            • Brand: ________<br/>
            • Special features: ________<br/>
            • Speed: ________ Mbps<br/>
            • Best for: ________
        </div>
        <div style="background: #f1f8e9; padding: 15px; border-radius: 5px;">
            <b>Mesh Wi-Fi System</b><br/>
            • Price: $________<br/>
            • Brand: ________<br/>
            • Coverage: ________ sq ft<br/>
            • Number of nodes: ________<br/>
            • Best for: ________
        </div>
    </div>
</div>

<h3>💡 Wi-Fi Standards & Frequencies</h3>
<div style="background-color: #f3e5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>📶 Understanding Wi-Fi</h4>
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Standard</th>
            <th style="padding: 10px;">Year</th>
            <th style="padding: 10px;">Frequency</th>
            <th style="padding: 10px;">Max Speed</th>
            <th style="padding: 10px;">Range</th>
            <th style="padding: 10px;">Wall Penetration</th>
        </tr>
        <tr><td>Wi-Fi 4 (802.11n)</td><td>2009</td><td>2.4/5 GHz</td><td>150-600 Mbps</td><td>Good</td><td>Good</td></tr>
        <tr><td>Wi-Fi 5 (802.11ac)</td><td>2014</td><td>5 GHz only</td><td>433-6933 Mbps</td><td>Fair</td><td>Fair</td></tr>
        <tr><td>Wi-Fi 6 (802.11ax)</td><td>2019</td><td>2.4/5/6 GHz</td><td>600-9608 Mbps</td><td>Good</td><td>Good</td></tr>
        <tr><td>Wi-Fi 6E</td><td>2020</td><td>6 GHz added</td><td>Same as Wi-Fi 6</td><td>Poor</td><td>Poor</td></tr>
        <tr><td>Wi-Fi 7 (802.11be)</td><td>2024+</td><td>All bands</td><td>Up to 46 Gbps</td><td>Excellent</td><td>Good</td></tr>
    </table>
    
    <div style="margin-top: 15px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>📡 2.4 GHz Band</h5>
            <ul>
                <li><b>Pros:</b> Better range, wall penetration</li>
                <li><b>Cons:</b> Slower, more interference</li>
                <li><b>Channels:</b> 11 in US, 13 in Europe</li>
                <li><b>Best for:</b> Smart home devices, large areas</li>
                <li><b>Interference from:</b> Microwaves, cordless phones, Bluetooth</li>
            </ul>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>⚡ 5 GHz Band</h5>
            <ul>
                <li><b>Pros:</b> Faster, less congestion</li>
                <li><b>Cons:</b> Shorter range, poor wall penetration</li>
                <li><b>Channels:</b> 24 non-overlapping</li>
                <li><b>Best for:</b> Streaming, gaming, video calls</li>
                <li><b>Interference from:</b> Radar, some cordless phones</li>
            </ul>
        </div>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Networking Concepts</h4>
    <ul>
        <li><b>Physical Props:</b> Bring old routers, switches, cables to class</li>
        <li><b>Analogy:</b> Postal system for packets, IP as addresses</li>
        <li><b>Common Confusions:</b>
            <ul>
                <li>IP address vs MAC address (house vs person)</li>
                <li>Router vs Switch (post office vs mail sorter)</li>
                <li>Download vs Upload speed (receiving vs sending)</li>
                <li>Bandwidth vs Speed (pipe width vs water flow)</li>
            </ul>
        </li>
        <li><b>Interactive Demo:</b>
            <ul>
                <li>Show ipconfig on different computers</li>
                <li>Ping a non-existent address to show timeout</li>
                <li>Trace route to show how many hops to websites</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b> "Why does your video call freeze?"</li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can explain difference between LAN and WAN</label><br/>
    <label><input type="checkbox"> Understands purpose of router, switch, modem</label><br/>
    <label><input type="checkbox"> Can use ipconfig to find network information</label><br/>
    <label><input type="checkbox"> Can use ping and tracert to test connectivity</label><br/>
    <label><input type="checkbox"> Knows difference between private and public IP</label><br/>
    <label><input type="checkbox"> Can map a simple home network</label><br/>
    <label><input type="checkbox"> Understands basic Wi-Fi concepts (2.4 vs 5 GHz)</label><br/>
    <label><input type="checkbox"> Can perform basic network troubleshooting</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tool:</b> <a href="https://www.subnettingpractice.com">SubnettingPractice.com</a></li>
        <li><b>Speed Test:</b> <a href="https://www.speedtest.net">SpeedTest.net</a></li>
        <li><b>Video:</b> "How the Internet Works" by Vox (YouTube)</li>
        <li><b>Game:</b> "Cisco Packet Tracer" (free network simulation)</li>
        <li><b>Website:</b> <a href="https://www.dnsstuff.com">DNSStuff.com</a> - Network tools</li>
        <li><b>Practice:</b> Change your Wi-Fi channel to reduce interference</li>
    </ul>
</div>
`
            },
            "2-2": {
                "icon": "fa-square-binary",
                "title": "ASCII Code & Binary Basics",
                "html": `<h1>Week 2, Day 2: ASCII Code & Binary Basics</h1>
<p>Today, you'll learn the fundamental language of computers: binary. Discover how letters become numbers, how images are stored, and how everything digital boils down to 0s and 1s.</p>

<div class="analogy-box">
    <b>Analogy: Binary as Light Switches 💡</b><br/>
    Bit = One light switch (on=1, off=0)<br/>
    Byte = 8 switches in a row (1 character)<br/>
    ASCII = Rulebook for switch patterns<br/>
    Text = Specific switch patterns for each letter<br/>
    Image = Millions of switches arranged in grid
</div>

<h3>🔢 Understanding Binary Numbers</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Decimal vs Binary Number Systems</h4>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 20px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>🔟 Decimal (Base-10)</h5>
            <ul>
                <li><b>Digits:</b> 0, 1, 2, 3, 4, 5, 6, 7, 8, 9</li>
                <li><b>Base:</b> 10 (ten symbols)</li>
                <li><b>Position Value:</b> Ones, Tens, Hundreds...</li>
                <li><b>Example:</b> 345 = (3×100) + (4×10) + (5×1)</li>
                <li><b>Natural for humans</b> (10 fingers!)</li>
                <li><b>Used in:</b> Everyday counting, money, measurements</li>
            </ul>
            <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Decimal Place Values:</b><br/>
                1000 | 100 | 10 | 1<br/>
                10³ | 10² | 10¹ | 10⁰
            </div>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>⚫⚪ Binary (Base-2)</h5>
            <ul>
                <li><b>Digits:</b> 0, 1 (off, on)</li>
                <li><b>Base:</b> 2 (two symbols)</li>
                <li><b>Position Value:</b> 1, 2, 4, 8, 16, 32...</li>
                <li><b>Example:</b> 1011 = (1×8) + (0×4) + (1×2) + (1×1) = 11</li>
                <li><b>Natural for computers</b> (transistors on/off)</li>
                <li><b>Used in:</b> All digital electronics, computers, storage</li>
            </ul>
            <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Binary Place Values:</b><br/>
                8 | 4 | 2 | 1<br/>
                2³ | 2² | 2¹ | 2⁰
            </div>
        </div>
    </div>
    
    <h4>🧮 Binary Counting Practice</h4>
    <div style="background: white; padding: 15px; border-radius: 8px; margin-top: 15px;">
        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr style="background: #4A90E2; color: white;">
                <th style="padding: 10px;">Decimal</th>
                <th style="padding: 10px;">Binary (4-bit)</th>
                <th style="padding: 10px;">Binary (8-bit)</th>
                <th style="padding: 10px;">Visual</th>
            </tr>
            <tr><td>0</td><td>0000</td><td>00000000</td><td>⚫⚫⚫⚫</td></tr>
            <tr><td>1</td><td>0001</td><td>00000001</td><td>⚫⚫⚫⚪</td></tr>
            <tr><td>2</td><td>0010</td><td>00000010</td><td>⚫⚫⚪⚫</td></tr>
            <tr><td>3</td><td>0011</td><td>00000011</td><td>⚫⚫⚪⚪</td></tr>
            <tr><td>4</td><td>0100</td><td>00000100</td><td>⚫⚪⚫⚫</td></tr>
            <tr><td>5</td><td>0101</td><td>00000101</td><td>⚫⚪⚫⚪</td></tr>
            <tr><td>6</td><td>0110</td><td>00000110</td><td>⚫⚪⚪⚫</td></tr>
            <tr><td>7</td><td>0111</td><td>00000111</td><td>⚫⚪⚪⚪</td></tr>
            <tr><td>8</td><td>1000</td><td>00001000</td><td>⚪⚫⚫⚫</td></tr>
            <tr><td>9</td><td>1001</td><td>00001001</td><td>⚪⚫⚫⚪</td></tr>
            <tr><td>10</td><td>1010</td><td>00001010</td><td>⚪⚫⚪⚫</td></tr>
            <tr><td>11</td><td>1011</td><td>00001011</td><td>⚪⚫⚪⚪</td></tr>
            <tr><td>12</td><td>1100</td><td>00001100</td><td>⚪⚪⚫⚫</td></tr>
            <tr><td>13</td><td>1101</td><td>00001101</td><td>⚪⚪⚫⚪</td></tr>
            <tr><td>14</td><td>1110</td><td>00001110</td><td>⚪⚪⚪⚫</td></tr>
            <tr><td>15</td><td>1111</td><td>00001111</td><td>⚪⚪⚪⚪</td></tr>
        </table>
    </div>
</div>

<h3>🔤 ASCII Code System</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>📖 What is ASCII?</h4>
    <div style="background: white; padding: 15px; border-radius: 8px;">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 20px;">
            <div>
                <h5>ASCII = American Standard Code for Information Interchange</h5>
                <ul>
                    <li><b>Created:</b> 1963 (updated 1986)</li>
                    <li><b>Purpose:</b> Standard way to represent text</li>
                    <li><b>Characters:</b> 128 total (0-127)</li>
                    <li><b>Bits per character:</b> 7 bits (originally)</li>
                    <li><b>Extended ASCII:</b> 256 characters (8 bits)</li>
                    <li><b>Limitation:</b> English only, no special symbols</li>
                    <li><b>Modern replacement:</b> Unicode (UTF-8)</li>
                </ul>
            </div>
            <div>
                <h5>🔢 How ASCII Works</h5>
                <div style="background: #f0f8ff; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                    <b>Letter 'A' in ASCII:</b><br/>
                    • Decimal: 65<br/>
                    • Binary: 01000001<br/>
                    • Hex: 41<br/>
                    • Keyboard: Hold Alt + 65 on numpad
                </div>
                <div style="background: #fff3e0; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                    <b>Letter 'a' in ASCII:</b><br/>
                    • Decimal: 97<br/>
                    • Binary: 01100001<br/>
                    • Hex: 61<br/>
                    • Note: Lowercase = uppercase + 32
                </div>
                <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                    <b>Space in ASCII:</b><br/>
                    • Decimal: 32<br/>
                    • Binary: 00100000<br/>
                    • Hex: 20<br/>
                    • Invisible but important!
                </div>
            </div>
        </div>
    </div>
    
    <h4 style="margin-top: 20px;">📊 Common ASCII Codes Cheat Sheet</h4>
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-top: 15px;">
        <div style="background: #e3f2fd; padding: 10px; border-radius: 5px;">
            <b>Uppercase Letters</b><br/>
            A = 65 (01000001)<br/>
            B = 66<br/>
            C = 67<br/>
            ...<br/>
            Z = 90
        </div>
        <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
            <b>Lowercase Letters</b><br/>
            a = 97 (01100001)<br/>
            b = 98<br/>
            c = 99<br/>
            ...<br/>
            z = 122
        </div>
        <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
            <b>Numbers</b><br/>
            0 = 48 (00110000)<br/>
            1 = 49<br/>
            2 = 50<br/>
            ...<br/>
            9 = 57
        </div>
        <div style="background: #f3e5f5; padding: 10px; border-radius: 5px;">
            <b>Special Characters</b><br/>
            Space = 32<br/>
            ! = 33<br/>
            @ = 64<br/>
            Enter = 13<br/>
            Tab = 9
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Binary & ASCII Practice</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Binary Conversion Practice (25 mins)</h4>
    <p>Convert these decimal numbers to binary:</p>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 15px 0;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <b>Method: Division by 2</b><br/>
            <small>Keep dividing by 2, record remainders</small>
            <div style="background: #f5f5f5; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Example: Convert 13 to binary</b><br/>
                13 ÷ 2 = 6 remainder 1 ↑<br/>
                6 ÷ 2 = 3 remainder 0 ↑<br/>
                3 ÷ 2 = 1 remainder 1 ↑<br/>
                1 ÷ 2 = 0 remainder 1 ↑<br/>
                Read remainders from bottom: 1101
            </div>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <b>Practice Problems:</b><br/>
            <table style="width: 100%; margin-top: 10px;">
                <tr><td>Decimal</td><td>Binary</td><td>Check</td></tr>
                <tr><td>7</td><td>_______</td><td>111</td></tr>
                <tr><td>10</td><td>_______</td><td>1010</td></tr>
                <tr><td>18</td><td>_______</td><td>10010</td></tr>
                <tr><td>25</td><td>_______</td><td>11001</td></tr>
                <tr><td>31</td><td>_______</td><td>11111</td></tr>
                <tr><td>42</td><td>_______</td><td>101010</td></tr>
                <tr><td>63</td><td>_______</td><td>111111</td></tr>
                <tr><td>100</td><td>_______</td><td>1100100</td></tr>
            </table>
        </div>
    </div>
    
    <h4>Exercise 2: ASCII Encoding (20 mins)</h4>
    <p>Encode these words using ASCII decimal values:</p>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <b>Word: "HI"</b><br/>
        H = 72, I = 73<br/>
        So "HI" = [72, 73]<br/><br/>
        
        <b>Your turn:</b>
        <table style="width: 100%;">
            <tr><td><b>Word</b></td><td><b>ASCII Decimal Values</b></td><td><b>Binary (8-bit each)</b></td></tr>
            <tr><td>CAT</td><td>67, 65, 84</td><td>01000011, 01000001, 01010100</td></tr>
            <tr><td>DOG</td><td>_______</td><td>_________________________</td></tr>
            <tr><td>IT</td><td>_______</td><td>_________________________</td></tr>
            <tr><td>CODE</td><td>_______</td><td>_________________________</td></tr>
            <tr><td>HELLO</td><td>_______</td><td>_________________________</td></tr>
        </table>
    </div>
    
    <h4>Exercise 3: Alt Code Practice (15 mins)</h4>
    <p>Use Alt codes to type special characters:</p>
    
    <ol>
        <li>Open Notepad</li>
        <li>Hold <kbd>Alt</kbd> key</li>
        <li>On number pad (Num Lock ON), type: <code>65</code></li>
        <li>Release <kbd>Alt</kbd> → 'A' appears!</li>
        <li>Try these codes:
            <table style="width: 100%; margin: 10px 0;">
                <tr><td>Alt + 65</td><td>= A</td><td>Alt + 169</td><td>= ©</td></tr>
                <tr><td>Alt + 66</td><td>= B</td><td>Alt + 174</td><td>= ®</td></tr>
                <tr><td>Alt + 97</td><td>= a</td><td>Alt + 247</td><td>= ÷</td></tr>
                <tr><td>Alt + 49</td><td>= 1</td><td>Alt + 0162</td><td>= ¢</td></tr>
                <tr><td>Alt + 64</td><td>= @</td><td>Alt + 0128</td><td>= €</td></tr>
            </table>
        </li>
    </ol>
    
    <h4>Exercise 4: File Size Investigation (30 mins)</h4>
    <p>Create files and observe their sizes:</p>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <b>Step 1: Create text files</b>
        <ol>
            <li>Open Notepad</li>
            <li>Type just the letter 'A'</li>
            <li>Save as "single_char.txt"</li>
            <li>Right-click → Properties → Check file size</li>
            <li><b>Expected:</b> 1 byte (for the 'A') + small overhead</li>
        </ol>
        
        <b>Step 2: Compare file sizes</b>
        <table style="width: 100%; margin: 10px 0;">
            <tr><th>File Contents</th><th>File Size</th><th>Notes</th></tr>
            <tr><td>'A' (one character)</td><td>_______ bytes</td><td>Should be ~1 byte</td></tr>
            <tr><td>'HELLO' (5 characters)</td><td>_______ bytes</td><td>Should be ~5 bytes</td></tr>
            <tr><td>100 'A's</td><td>_______ bytes</td><td>Create with Notepad</td></tr>
            <tr><td>1000 'A's</td><td>_______ bytes</td><td>≈ 1 kilobyte</td></tr>
        </table>
        
        <b>Step 3: Compare file types</b>
        <ol>
            <li>Create a simple image in Paint (10x10 pixels)</li>
            <li>Save as BMP and as JPG</li>
            <li>Compare file sizes</li>
            <li><b>Observation:</b> Same image, different sizes due to compression</li>
        </ol>
    </div>
</div>

<h3>📊 Data Storage Units</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px;">
    <h4>🎯 Understanding Bytes, Kilobytes, Megabytes...</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
        <h5>📏 The Byte Hierarchy</h5>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #f5f5f5;">
                <th style="padding: 10px;">Unit</th>
                <th style="padding: 10px;">Abbreviation</th>
                <th style="padding: 10px;">Bytes</th>
                <th style="padding: 10px;">Power of 2</th>
                <th style="padding: 10px;">Example</th>
            </tr>
            <tr><td>Bit</td><td>b</td><td>1/8 byte</td><td>2⁰ ÷ 8</td><td>Single 0 or 1</td></tr>
            <tr><td>Byte</td><td>B</td><td>1</td><td>2⁰</td><td>One character ('A')</td></tr>
            <tr><td>Kilobyte</td><td>KB</td><td>1,024</td><td>2¹⁰</td><td>½ page of text</td></tr>
            <tr><td>Megabyte</td><td>MB</td><td>1,048,576</td><td>2²⁰</td><td>1 minute MP3 song</td></tr>
            <tr><td>Gigabyte</td><td>GB</td><td>1,073,741,824</td><td>2³⁰</td><td>30 minutes of HD video</td></tr>
            <tr><td>Terabyte</td><td>TB</td><td>1,099,511,627,776</td><td>2⁴⁰</td><td>250,000 photos</td></tr>
            <tr><td>Petabyte</td><td>PB</td><td>1,125,899,906,842,624</td><td>2⁵⁰</td><td>13.3 years of HD video</td></tr>
        </table>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>⚠️ Important Distinction</h5>
            <div style="background: #ffebee; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <b>Bits vs Bytes</b><br/>
                • <b>Bit (b):</b> Used for data transfer speeds<br/>
                • <b>Byte (B):</b> Used for data storage sizes<br/>
                • <b>8 bits = 1 byte</b><br/>
                • Internet speed: 100 Mbps = 12.5 MB/s<br/>
                • File size: 100 MB file ≠ 100 Mb file!
            </div>
            <div style="background: #fff3cd; padding: 10px; border-radius: 5px;">
                <b>Binary vs Decimal Prefixes</b><br/>
                • <b>Kibi:</b> Ki (2¹⁰ = 1,024)<br/>
                • <b>Mebi:</b> Mi (2²⁰ = 1,048,576)<br/>
                • <b>Gibi:</b> Gi (2³⁰ = 1,073,741,824)<br/>
                • Marketing uses decimal (1 GB = 1 billion bytes)<br/>
                • Computers use binary (1 GiB = 1,073,741,824 bytes)
            </div>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>📱 Real-World Examples</h5>
            <div style="background: #f0f8ff; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <b>Text/Email</b><br/>
                • Simple email: 2-5 KB<br/>
                • Word document: 20-100 KB<br/>
                • eBook: 1-5 MB<br/>
                • Dictionary: 10-50 MB
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <b>Images</b><br/>
                • Smartphone photo: 2-8 MB<br/>
                • 4K wallpaper: 5-15 MB<br/>
                • Scanned document: 1-5 MB<br/>
                • Instagram photo: ~100 KB (compressed)
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>Video/Music</b><br/>
                • 3-minute MP3: 3-5 MB<br/>
                • 1-minute HD video: 100-200 MB<br/>
                • Movie (SD): 700 MB<br/>
                • Movie (HD): 2-4 GB<br/>
                • Movie (4K): 15-30 GB
            </div>
        </div>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Binary & ASCII Workbook (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Binary Conversions</b><br/>
        Convert between decimal and binary:
        <table style="width: 100%; margin: 10px 0;">
            <tr><th>Decimal</th><th>Binary (8-bit)</th><th>Check</th></tr>
            <tr><td>1</td><td>_________________</td><td>00000001</td></tr>
            <tr><td>10</td><td>_________________</td><td>00001010</td></tr>
            <tr><td>27</td><td>_________________</td><td>00011011</td></tr>
            <tr><td>64</td><td>_________________</td><td>01000000</td></tr>
            <tr><td>128</td><td>_________________</td><td>10000000</td></tr>
            <tr><td>255</td><td>_________________</td><td>11111111</td></tr>
        </table>
        
        <b>Part B: ASCII Encoding</b><br/>
        Encode this message: "HELLO WORLD"
        <table style="width: 100%; margin: 10px 0;">
            <tr><th>Character</th><th>ASCII Decimal</th><th>Binary (8-bit)</th></tr>
            <tr><td>H</td><td>_____</td><td>_________________</td></tr>
            <tr><td>E</td><td>_____</td><td>_________________</td></tr>
            <tr><td>L</td><td>_____</td><td>_________________</td></tr>
            <tr><td>L</td><td>_____</td><td>_________________</td></tr>
            <tr><td>O</td><td>_____</td><td>_________________</td></tr>
            <tr><td>Space</td><td>_____</td><td>_________________</td></tr>
            <tr><td>W</td><td>_____</td><td>_________________</td></tr>
            <tr><td>O</td><td>_____</td><td>_________________</td></tr>
            <tr><td>R</td><td>_____</td><td>_________________</td></tr>
            <tr><td>L</td><td>_____</td><td>_________________</td></tr>
            <tr><td>D</td><td>_____</td><td>_________________</td></tr>
        </table>
        
        <b>Total bytes for "HELLO WORLD": _____ bytes</b>
    </div>
    
    <h4>Task 2: File Size Analysis (45 mins)</h4>
    <p>Investigate different file types on your computer:</p>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%;">
            <tr><th>Find a file that is:</th><th>File Name</th><th>Size</th><th>Type</th></tr>
            <tr><td>Exactly 1 KB (1024 bytes)</td><td>_________________</td><td>_____</td><td>_____</td></tr>
            <tr><td>Between 100 KB - 1 MB</td><td>_________________</td><td>_____</td><td>_____</td></tr>
            <tr><td>Between 1 MB - 10 MB</td><td>_________________</td><td>_____</td><td>_____</td></tr>
            <tr><td>Larger than 100 MB</td><td>_________________</td><td>_____</td><td>_____</td></tr>
            <tr><td>Smallest file on C: drive</td><td>_________________</td><td>_____</td><td>_____</td></tr>
            <tr><td>Largest file on C: drive</td><td>_________________</td><td>_____</td><td>_____</td></tr>
        </table>
        
        <b>Analysis Questions:</b>
        <ol>
            <li>What type of files tend to be smallest? __________</li>
            <li>What type of files tend to be largest? __________</li>
            <li>How many text files equal one video file? __________</li>
            <li>Why do image files have different sizes (JPG vs PNG vs BMP)? __________</li>
        </ol>
    </div>
    
    <h4>Task 3: Create a Binary Calculator (45 mins)</h4>
    <p>Using Python (or any programming language), create a program that:</p>
    
    <div style="background: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Features Required:</b>
        <ol>
            <li>Convert decimal to binary (up to 255)</li>
            <li>Convert binary to decimal (8-bit max)</li>
            <li>Add two binary numbers</li>
            <li>Subtract two binary numbers</li>
            <li>ASCII lookup: Enter decimal, get character</li>
            <li>Character lookup: Enter character, get ASCII code</li>
        </ol>
        
        <b>Example Output:</b><br/>
        <code>
        === BINARY CALCULATOR ===<br/>
        1. Decimal to Binary<br/>
        2. Binary to Decimal<br/>
        3. Add Binary Numbers<br/>
        4. ASCII Lookup<br/>
        Enter choice: 1<br/>
        Enter decimal number: 65<br/>
        65 in binary: 01000001<br/>
        That's ASCII code for: A
        </code>
    </div>
</div>

<h3>🌍 Beyond ASCII: Unicode & UTF-8</h3>
<div style="background-color: #f3e5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>📚 The Evolution of Character Encoding</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>🔤 ASCII (1963)</h5>
            <ul>
                <li><b>Characters:</b> 128</li>
                <li><b>Languages:</b> English only</li>
                <li><b>Bits/char:</b> 7 (originally)</li>
                <li><b>Limitations:</b> No accents, no special symbols</li>
                <li><b>File size:</b> Small</li>
                <li><b>Example:</b> .txt files</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>🌐 Unicode (1991)</h5>
            <ul>
                <li><b>Characters:</b> 149,813+</li>
                <li><b>Languages:</b> All human languages</li>
                <li><b>Bits/char:</b> Variable (UTF-8, 16, 32)</li>
                <li><b>Includes:</b> Emojis, ancient scripts</li>
                <li><b>File size:</b> Variable</li>
                <li><b>Example:</b> Modern web pages</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #8BC34A; padding: 15px; border-radius: 8px;">
            <h5>🚀 UTF-8 (Most Common)</h5>
            <ul>
                <li><b>Type:</b> Unicode encoding</li>
                <li><b>Compatibility:</b> Backwards with ASCII</li>
                <li><b>Efficiency:</b> Variable length (1-4 bytes)</li>
                <li><b>Usage:</b> 97% of all web pages</li>
                <li><b>Advantage:</b> English text = 1 byte, Chinese = 3 bytes</li>
                <li><b>Example:</b> This webpage!</li>
            </ul>
        </div>
    </div>
    
    <div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>🎯 UTF-8 Examples</h5>
        <table style="width: 100%;">
            <tr><td>'A' (English)</td><td>1 byte (01000001) - Same as ASCII!</td></tr>
            <tr><td>'é' (French)</td><td>2 bytes (11000011 10101001)</td></tr>
            <tr><td>'汉' (Chinese)</td><td>3 bytes (11100110 10001001 10100101)</td></tr>
            <tr><td>'😊' (Emoji)</td><td>4 bytes (11110000 10011111 10011000 10001010)</td></tr>
        </table>
        <p><small>This is why you can send emojis to friends in other countries!</small></p>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Binary & ASCII</h4>
    <ul>
        <li><b>Start with Why:</b> "Computers only understand on/off, so we need a system to represent everything with 0s and 1s"</li>
        <li><b>Physical Props:</b> Use light switches, cards (black=0, white=1)</li>
        <li><b>Hands-on:</b> Have students "be bits" - stand in row representing binary numbers</li>
        <li><b>Common Confusions:</b>
            <ul>
                <li>Bits vs Bytes (b vs B)</li>
                <li>Binary counting (it's not just "regular numbers with 0s and 1s")</li>
                <li>ASCII vs Unicode (old vs new)</li>
                <li>File size vs download speed</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>Why does a 100 MB file take ~16 seconds on 50 Mbps internet?</li>
                <li>Why can't older systems display emojis?</li>
                <li>Why do some fonts have more characters than others?</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can convert between decimal and binary (0-255)</label><br/>
    <label><input type="checkbox"> Understands ASCII encoding system</label><br/>
    <label><input type="checkbox"> Can find ASCII codes for common characters</label><br/>
    <label><input type="checkbox"> Understands difference between bits and bytes</label><br/>
    <label><input type="checkbox"> Knows data storage units (KB, MB, GB, TB)</label><br/>
    <label><input type="checkbox"> Can explain why Unicode replaced ASCII</label><br/>
    <label><input type="checkbox"> Understands how file types affect file size</label><br/>
    <label><input type="checkbox"> Can use Alt codes to type special characters</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tool:</b> <a href="https://www.rapidtables.com/convert/number/ascii-to-binary.html">ASCII/Binary Converter</a></li>
        <li><b>Game:</b> <a href="https://games.penjee.com/binary-bonanza/">Binary Bonanza Game</a></li>
        <li><b>Video:</b> "How Binary Works" by Code.org (YouTube)</li>
        <li><b>Reference:</b> <a href="https://www.ascii-code.com">ASCII-Code.com</a> - Complete ASCII table</li>
        <li><b>Tool:</b> <a href="https://www.fileformat.info">FileFormat.info</a> - Unicode character lookup</li>
        <li><b>Practice:</b> Write your name in binary, then in ASCII codes</li>
    </ul>
</div>
`
            },
            "2-3": {
                "icon": "fa-code",
                "title": "ASCII Applications & Data Logic",
                "html": `<h1>Week 2, Day 3: ASCII Applications & Data Logic</h1>
<p>Today, you'll see how character encoding affects real-world applications, learn about data compression, and understand how computers process different types of data.</p>

<div class="analogy-box">
    <b>Analogy: Data Encoding as Language Translation 🌐</b><br/>
    ASCII = Basic English dictionary (limited)<br/>
    Unicode = Multilingual library (all languages)<br/>
    Compression = Shorthand notes (same info, less space)<br/>
    Encryption = Secret code (hidden meaning)<br/>
    File Format = Book genre (how content is organized)
</div>

<h3>🔤 Character Encoding in Practice</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Where Encoding Matters in Real Life</h4>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 20px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>📧 Email & Messaging</h5>
            <ul>
                <li><b>Problem:</b> "Hello" shows as "HÃ©llÃ³"</li>
                <li><b>Cause:</b> Wrong encoding (UTF-8 vs Latin-1)</li>
                <li><b>Fix:</b> Set correct charset in email header</li>
                <li><b>Modern solution:</b> Always use UTF-8</li>
                <li><b>Emojis:</b> Require Unicode support</li>
                <li><b>Example:</b> 😊 = U+1F60A (Unicode)</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>🌐 Web Development</h5>
            <ul>
                <li><b>HTML meta tag:</b> <code>&lt;meta charset="UTF-8"&gt;</code></li>
                <li><b>Database:</b> Must store as UTF-8</li>
                <li><b>Form submission:</b> Encoding must match</li>
                <li><b>Special characters:</b> &amp;, &lt;, &gt; need escaping</li>
                <li><b>URL encoding:</b> Space = %20, @ = %40</li>
                <li><b>Example:</b> "café" in URL = "caf%C3%A9"</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #8BC34A; padding: 15px; border-radius: 8px;">
            <h5>💾 File Systems</h5>
            <ul>
                <li><b>File names:</b> Can include emojis now! 📁</li>
                <li><b>Limitations:</b> Some chars forbidden: \\ / : * ? " &lt; &gt; |</li>
                <li><b>Case sensitivity:</b> Windows: No, Linux: Yes</li>
                <li><b>Maximum length:</b> 255 characters typically</li>
                <li><b>Special files:</b> . (current), .. (parent)</li>
                <li><b>Example:</b> "Report_📊_Q1.txt" is valid!</li>
            </ul>
        </div>
    </div>
</div>

<h3>📊 File Size Comparison Lab</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🔍 Understanding Why Files Have Different Sizes</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Exercise 1: Create and Compare Files (30 mins)</h5>
        <p>Follow these steps to understand file sizes:</p>
        
        <ol>
            <li><b>Create a simple text file:</b>
                <ul>
                    <li>Open Notepad</li>
                    <li>Type: "Hello World"</li>
                    <li>Save as "hello.txt"</li>
                    <li>Check file size: _______ bytes</li>
                </ul>
            </li>
            <li><b>Create the same in Word:</b>
                <ul>
                    <li>Open Microsoft Word</li>
                    <li>Type: "Hello World"</li>
                    <li>Save as "hello.docx"</li>
                    <li>Check file size: _______ bytes</li>
                </ul>
            </li>
            <li><b>Compare:</b>
                <table style="width: 100%; margin: 10px 0;">
                    <tr><th>File</th><th>Size</th><th>Ratio</th><th>Why?</th></tr>
                    <tr><td>hello.txt</td><td>_______</td><td>1x</td><td>Raw text only</td></tr>
                    <tr><td>hello.docx</td><td>_______</td><td>_______x larger</td><td>Formatting, metadata</td></tr>
                </table>
            </li>
        </ol>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Exercise 2: Image Format Comparison (30 mins)</h5>
        <p>Create the same image in different formats:</p>
        
        <ol>
            <li><b>Create a simple image in Paint:</b>
                <ul>
                    <li>Open Paint</li>
                    <li>Draw a colored rectangle 100x100 pixels</li>
                    <li>Save in these formats:
                        <table style="width: 100%; margin: 10px 0;">
                            <tr><th>Format</th><th>File Name</th><th>Size</th></tr>
                            <tr><td>BMP</td><td>image.bmp</td><td>_______</td></tr>
                            <tr><td>PNG</td><td>image.png</td><td>_______</td></tr>
                            <tr><td>JPG</td><td>image.jpg</td><td>_______</td></tr>
                            <tr><td>GIF</td><td>image.gif</td><td>_______</td></tr>
                        </table>
                    </li>
                </ul>
            </li>
            <li><b>Analysis:</b>
                <ul>
                    <li>Which format is largest? __________</li>
                    <li>Which format is smallest? __________</li>
                    <li>Why do sizes differ? __________</li>
                    <li>Which would you use for:
                        <ul>
                            <li>Website photo: __________ (quality + size)</li>
                            <li>Screenshot: __________ (sharp text)</li>
                            <li>Simple animation: __________ (supports motion)</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>🔤 Hexadecimal System</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px;">
    <h4>🎨 Hex: The Programmer's Shorthand</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
        <h5>Understanding Base-16</h5>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
            <div style="background: #f0f8ff; padding: 15px; border-radius: 5px;">
                <b>🔟 Decimal (Base-10)</b><br/>
                Digits: 0-9<br/>
                Example: 255<br/>
                Humans use this
            </div>
            <div style="background: #fff3e0; padding: 15px; border-radius: 5px;">
                <b>⚫⚪ Binary (Base-2)</b><br/>
                Digits: 0-1<br/>
                Example: 11111111<br/>
                Computers use this
            </div>
            <div style="background: #f1f8e9; padding: 15px; border-radius: 5px;">
                <b>🎨 Hexadecimal (Base-16)</b><br/>
                Digits: 0-9, A-F<br/>
                Example: FF<br/>
                Programmers use this
            </div>
        </div>
        
        <div style="margin-top: 15px; background: #f3e5f5; padding: 15px; border-radius: 5px;">
            <h5>🔢 Hex Conversion Table</h5>
            <table style="width: 100%; text-align: center;">
                <tr style="background: #e0e0e0;"><th>Decimal</th><th>Binary</th><th>Hex</th><th>Decimal</th><th>Binary</th><th>Hex</th></tr>
                <tr><td>0</td><td>0000</td><td>0</td><td>8</td><td>1000</td><td>8</td></tr>
                <tr><td>1</td><td>0001</td><td>1</td><td>9</td><td>1001</td><td>9</td></tr>
                <tr><td>2</td><td>0010</td><td>2</td><td>10</td><td>1010</td><td>A</td></tr>
                <tr><td>3</td><td>0011</td><td>3</td><td>11</td><td>1011</td><td>B</td></tr>
                <tr><td>4</td><td>0100</td><td>4</td><td>12</td><td>1100</td><td>C</td></tr>
                <tr><td>5</td><td>0101</td><td>5</td><td>13</td><td>1101</td><td>D</td></tr>
                <tr><td>6</td><td>0110</td><td>6</td><td>14</td><td>1110</td><td>E</td></tr>
                <tr><td>7</td><td>0111</td><td>7</td><td>15</td><td>1111</td><td>F</td></tr>
            </table>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px;">
        <h5>🌐 Real-World Hex Applications</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 10px;">
            <div>
                <b>🎨 Web Colors (HTML/CSS)</b><br/>
                • Format: #RRGGBB<br/>
                • Each pair = 00 to FF (0-255)<br/>
                • #FF0000 = Red (255,0,0)<br/>
                • #00FF00 = Green (0,255,0)<br/>
                • #0000FF = Blue (0,0,255)<br/>
                • #FFFFFF = White (255,255,255)<br/>
                • #000000 = Black (0,0,0)<br/>
                • #FFA500 = Orange (255,165,0)
            </div>
            <div>
                <b>💾 Memory Addresses</b><br/>
                • Computers use hex for memory locations<br/>
                • Example: 0x7FFD3A4B<br/>
                • Easier to read than binary<br/>
                • Used in debugging<br/>
                • Network MAC addresses: <br/>
                  00:1A:2B:3C:4D:5E<br/>
                • Error codes: 0x80070005
            </div>
        </div>
    </div>
</div>

<h3>📦 Data Compression Basics</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🗜️ How Computers Shrink Files</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
        <h5>Two Types of Compression</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
            <div style="border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
                <h5>🎯 Lossless Compression</h5>
                <ul>
                    <li><b>Goal:</b> Reduce size without losing data</li>
                    <li><b>Method:</b> Find patterns, use shortcuts</li>
                    <li><b>Example:</b> ZIP, PNG, FLAC</li>
                    <li><b>Use for:</b> Text, documents, code</li>
                    <li><b>Decompression:</b> Perfect original restored</li>
                    <li><b>Analogy:</b> Folding clothes to fit suitcase</li>
                </ul>
                <div style="background: #f0f8ff; padding: 10px; border-radius: 5px; margin-top: 10px;">
                    <b>Example: Run-Length Encoding (RLE)</b><br/>
                    Original: AAAAAABBBCCCC<br/>
                    Compressed: 6A3B4C<br/>
                    Saves 13 → 6 characters!
                </div>
            </div>
            <div style="border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
                <h5>🎨 Lossy Compression</h5>
                <ul>
                    <li><b>Goal:</b> Maximize size reduction</li>
                    <li><b>Method:</b> Remove "unnoticeable" data</li>
                    <li><b>Example:</b> JPG, MP3, MP4</li>
                    <li><b>Use for:</b> Images, audio, video</li>
                    <li><b>Decompression:</b> Similar but not identical</li>
                    <li><b>Analogy:</b> Summary of book (key points only)</li>
                </ul>
                <div style="background: #fff3e0; padding: 10px; border-radius: 5px; margin-top: 10px;">
                    <b>Example: JPG Compression</b><br/>
                    • Removes fine color details<br/>
                    • Humans won't notice much<br/>
                    • 10MB photo → 1MB<br/>
                    • Quality setting: 100% to 10%
                </div>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px;">
        <h5>🔧 Compression in Action</h5>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 10px;">
            <div style="background: #f0f8ff; padding: 10px; border-radius: 5px;">
                <b>📁 ZIP Files</b><br/>
                • Lossless compression<br/>
                • Multiple files in one<br/>
                • Can password protect<br/>
                • Built into Windows<br/>
                • Alternatives: RAR, 7z
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
                <b>🖼️ Image Formats</b><br/>
                • PNG: Lossless, good for graphics<br/>
                • JPG: Lossy, good for photos<br/>
                • GIF: Lossless, 256 colors max<br/>
                • WebP: Modern, best of both<br/>
                • SVG: Vector, scales infinitely
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>🎵 Audio Formats</b><br/>
                • WAV: Uncompressed, large<br/>
                • MP3: Lossy, 90% smaller<br/>
                • AAC: Better than MP3<br/>
                • FLAC: Lossless, 50% smaller<br/>
                • Opus: Modern, efficient
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Compression & Encoding</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: ZIP File Analysis (25 mins)</h4>
    
    <ol>
        <li><b>Create test files:</b>
            <ul>
                <li>Create a text file with 1000 'A's (size: _______ bytes)</li>
                <li>Create a text file with random text (size: _______ bytes)</li>
                <li>Take a photo with your phone (size: _______ bytes)</li>
            </ul>
        </li>
        <li><b>Compress them:</b>
            <ul>
                <li>Select all 3 files, right-click → Send to → Compressed folder</li>
                <li>Name it "test.zip"</li>
                <li>Check ZIP file size: _______ bytes</li>
            </ul>
        </li>
        <li><b>Calculate compression ratio:</b>
            <table style="width: 100%; margin: 10px 0;">
                <tr><th>File Type</th><th>Original Size</th><th>In ZIP</th><th>Compression %</th><th>Why?</th></tr>
                <tr><td>1000 A's</td><td>_______</td><td>_______</td><td>_______%</td><td>Highly compressible</td></tr>
                <tr><td>Random text</td><td>_______</td><td>_______</td><td>_______%</td><td>Less compressible</td></tr>
                <tr><td>Photo (JPG)</td><td>_______</td><td>_______</td><td>_______%</td><td>Already compressed</td></tr>
            </table>
        </li>
    </ol>
    
    <h4>Exercise 2: Hex Color Experiment (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Using any web browser:</b></p>
        <ol>
            <li>Go to a website that lets you pick colors (like <a href="https://www.w3schools.com/colors/colors_picker.asp">W3Schools Color Picker</a>)</li>
            <li>Try these hex codes and identify the colors:
                <table style="width: 100%; margin: 10px 0;">
                    <tr><th>Hex Code</th><th>Color Name</th><th>RGB Values</th></tr>
                    <tr><td>#FF0000</td><td>_______________</td><td>RGB(255, 0, 0)</td></tr>
                    <tr><td>#00FF00</td><td>_______________</td><td>RGB(0, 255, 0)</td></tr>
                    <tr><td>#0000FF</td><td>_______________</td><td>RGB(0, 0, 255)</td></tr>
                    <tr><td>#FFFF00</td><td>_______________</td><td>RGB(255, 255, 0)</td></tr>
                    <tr><td>#FF00FF</td><td>_______________</td><td>RGB(255, 0, 255)</td></tr>
                    <tr><td>#00FFFF</td><td>_______________</td><td>RGB(0, 255, 255)</td></tr>
                    <tr><td>#808080</td><td>_______________</td><td>RGB(128, 128, 128)</td></tr>
                    <tr><td>#FFA500</td><td>_______________</td><td>RGB(255, 165, 0)</td></tr>
                </table>
            </li>
            <li><b>Create your own color:</b> Pick R, G, B values (0-255 each)
                <ul>
                    <li>Red: _______, Green: _______, Blue: _______</li>
                    <li>Convert to hex: #______</li>
                    <li>Test it in the color picker</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 3: Encoding Troubleshooting (15 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create encoding problems and fix them:</b></p>
        <ol>
            <li><b>Create wrong encoding:</b>
                <ul>
                    <li>Open Notepad, type: "café"</li>
                    <li>Save as "cafe.txt" with Encoding: ANSI</li>
                    <li>Open in another program - might show wrong</li>
                </ul>
            </li>
            <li><b>Fix it:</b>
                <ul>
                    <li>Re-open in Notepad</li>
                    <li>File → Save As → Encoding: UTF-8</li>
                    <li>Now it should work everywhere</li>
                </ul>
            </li>
            <li><b>Test URL encoding:</b>
                <ul>
                    <li>Google search for: "café near me"</li>
                    <li>Look at URL in address bar</li>
                    <li>See how spaces and é are encoded</li>
                    <li>Example: "caf%C3%A9+near+me"</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Compression Analysis Report (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: File Compression Experiment</b><br/>
        Create 5 different types of files and compress them:
        
        <table style="width: 100%; margin: 15px 0;">
            <tr><th>File Type</th><th>How Created</th><th>Original Size</th><th>ZIP Size</th><th>Compression %</th><th>Analysis</th></tr>
            <tr><td>Text: All 'A's</td><td>Notepad, 10000 A's</td><td>_______</td><td>_______</td><td>_______%</td><td>Why so compressible?</td></tr>
            <tr><td>Text: Random</td><td>Lorem ipsum text</td><td>_______</td><td>_______</td><td>_______%</td><td>Less compressible</td></tr>
            <tr><td>Text: Mixed</td><td>English article</td><td>_______</td><td>_______</td><td>_______%</td><td>Medium compression</td></tr>
            <tr><td>Image: BMP</td><td>Save photo as BMP</td><td>_______</td><td>_______</td><td>_______%</td><td>Compresses well</td></tr>
            <tr><td>Image: JPG</td><td>Same photo as JPG</td><td>_______</td><td>_______</td><td>_______%</td><td>Already compressed</td></tr>
        </table>
        
        <b>Conclusions:</b>
        <ol>
            <li>Which file type compressed the most? __________</li>
            <li>Which file type compressed the least? __________</li>
            <li>Why doesn't ZIP compress JPG much? __________</li>
            <li>When should you use compression? __________</li>
        </ol>
    </div>
    
    <h4>Task 2: Encoding Detective Work (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Find Encoding Issues</b><br/>
        Search online for examples of encoding problems:
        
        <ol>
            <li>Find a website that shows "mojibake" (garbled text)</li>
            <li>Take screenshot and paste here:</li>
            <li>What caused it? __________</li>
            <li>How could it be fixed? __________</li>
        </ol>
        
        <b>Part B: Unicode Exploration</b><br/>
        Visit <a href="https://unicode-table.com">Unicode-Table.com</a> and:
        
        <ol>
            <li>Find 5 interesting Unicode characters:</li>
            <table style="width: 100%; margin: 10px 0;">
                <tr><th>Character</th><th>Name</th><th>Unicode Code</th><th>Category</th></tr>
                <tr><td>________</td><td>________________</td><td>U+______</td><td>________</td></tr>
                <tr><td>________</td><td>________________</td><td>U+______</td><td>________</td></tr>
                <tr><td>________</td><td>________________</td><td>U+______</td><td>________</td></tr>
                <tr><td>________</td><td>________________</td><td>U+______</td><td>________</td></tr>
                <tr><td>________</td><td>________________</td><td>U+______</td><td>________</td></tr>
            </table>
            <li>Try to use them in a document or email</li>
            <li>Do they display correctly everywhere? __________</li>
        </ol>
    </div>
    
    <h4>Task 3: Create a Data Encoding Guide (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a one-page reference guide covering:</b>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
            <div style="background: #f0f8ff; padding: 10px; border-radius: 5px;">
                <b>📝 Text Encoding</b><br/>
                • ASCII vs Unicode<br/>
                • UTF-8 benefits<br/>
                • Common problems<br/>
                • How to fix encoding issues<br/>
                • When to use each
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
                <b>🗜️ Compression</b><br/>
                • Lossless vs Lossy<br/>
                • ZIP usage<br/>
                • Image formats<br/>
                • When to compress<br/>
                • Compression tools
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>🎨 Hexadecimal</b><br/>
                • What is hex?<br/>
                • Color codes (#RRGGBB)<br/>
                • Memory addresses<br/>
                • Conversion table<br/>
                • Common uses
            </div>
            <div style="background: #f3e5f5; padding: 10px; border-radius: 5px;">
                <b>🔧 Best Practices</b><br/>
                • Always use UTF-8<br/>
                • Compress before sending<br/>
                • Choose right file format<br/>
                • Test on different devices<br/>
                • Backup originals
            </div>
        </div>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Data Encoding & Compression</h4>
    <ul>
        <li><b>Start with Real Problems:</b> "Why does text sometimes look like gibberish?"</li>
        <li><b>Show, Don't Just Tell:</b> Create encoding problems and fix them live</li>
        <li><b>Common Student Confusions:</b>
            <ul>
                <li>ASCII vs Unicode (old vs new)</li>
                <li>Lossless vs Lossy (exact vs approximate)</li>
                <li>Why ZIP doesn't compress already-compressed files much</li>
                <li>Hex as shorthand for binary</li>
            </ul>
        </li>
        <li><b>Hands-on Activities:</b>
            <ul>
                <li>Have students email each other with different encodings</li>
                <li>Compress different file types and compare results</li>
                <li>Create "encoding art" using special Unicode characters</li>
            </ul>
        </li>
        <li><b>Real-World Connections:</b>
            <ul>
                <li>Why do some websites load special characters wrong?</li>
                <li>How does streaming video work (compression)?</li>
                <li>Why are some file formats better for certain uses?</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Understands real-world encoding problems and solutions</label><br/>
    <label><input type="checkbox"> Can explain difference between lossless and lossy compression</label><br/>
    <label><input type="checkbox"> Knows when to use different file formats (PNG vs JPG vs ZIP)</label><br/>
    <label><input type="checkbox"> Understands hexadecimal system and its uses</label><br/>
    <label><input type="checkbox"> Can read and write hex color codes (#RRGGBB)</label><br/>
    <label><input type="checkbox"> Knows how to fix common encoding issues</label><br/>
    <label><input type="checkbox"> Understands why Unicode replaced ASCII</label><br/>
    <label><input type="checkbox"> Can choose appropriate compression for different data types</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tool:</b> <a href="https://www.rapidtables.com/convert/color/">Color Picker & Converter</a></li>
        <li><b>Game:</b> <a href="https://flukeout.github.io">CSS Diner</a> (learn CSS selectors including colors)</li>
        <li><b>Video:</b> "How File Compression Works" by Computerphile (YouTube)</li>
        <li><b>Website:</b> <a href="https://www.fileformat.info">FileFormat.info</a> - File format information</li>
        <li><b>Tool:</b> <a href="https://www.7-zip.org">7-Zip.org</a> - Advanced compression tool</li>
        <li><b>Practice:</b> Create a webpage with different encodings and test in various browsers</li>
    </ul>
</div>
`
            },
            "2-4": {
                "icon": "fa-clipboard-check",
                "title": "Module 1 Review & Practical Quiz",
                "html": `<h1>Week 2, Day 4: Module 1 Review & Practical Quiz</h1>
<p>Today, we consolidate everything from Weeks 1-2: Windows, Hardware, CMD, Networking, and Data Encoding. You'll demonstrate your skills through practical challenges and prepare for Module 2.</p>

<div class="analogy-box">
    <b>Analogy: Module 1 as Building a House 🏠</b><br/>
    Windows/Desktop = Foundation & rooms<br/>
    Hardware = Plumbing & electrical<br/>
    CMD = Blueprints & tools<br/>
    Networking = Roads & utilities<br/>
    Data Encoding = Language & communication<br/>
    Today = Final inspection before moving in!
</div>

<h3>📚 Module 1 Comprehensive Review</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔍 Week 1-2 Topics Checklist</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 20px 0;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>📁 Week 1: The Machine & Interface</h5>
            <ul>
                <li><b>Day 1:</b> Desktop Management, Shortcuts, File Explorer</li>
                <li><b>Day 2:</b> Hardware Components, CPU/RAM/Storage</li>
                <li><b>Day 3:</b> Operating Systems, File Extensions, Permissions</li>
                <li><b>Day 4:</b> Command Prompt Basics, Navigation, Network Commands</li>
            </ul>
            <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Key Skills:</b><br/>
                • Keyboard shortcuts (Win+D, Win+E)<br/>
                • Hardware identification<br/>
                • File organization<br/>
                • Basic CMD commands
            </div>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>🌐 Week 2: Data & Connections</h5>
            <ul>
                <li><b>Day 1:</b> Networking Fundamentals, IP Addresses, Routers/Switches</li>
                <li><b>Day 2:</b> Binary System, ASCII Encoding, Data Storage Units</li>
                <li><b>Day 3:</b> Advanced Encoding, Compression, Hexadecimal</li>
                <li><b>Day 4:</b> MODULE REVIEW & PRACTICAL QUIZ (Today!)</li>
            </ul>
            <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Key Skills:</b><br/>
                • Network troubleshooting (ping, ipconfig)<br/>
                • Binary/ASCII conversions<br/>
                • Understanding file sizes<br/>
                • Data compression concepts
            </div>
        </div>
    </div>
    
    <h4>🎯 Rapid-Fire Review Session (45 mins)</h4>
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Tutor will ask questions, students answer quickly:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
            <div style="background: #e3f2fd; padding: 10px; border-radius: 5px;">
                <b>💻 Hardware Questions</b><br/>
                1. CPU is like the ______ of computer?<br/>
                2. RAM is ______ (volatile/non-volatile)?<br/>
                3. SSD is faster/slower than HDD?<br/>
                4. What does PSU stand for?<br/>
                5. How many MB in 1 GB?
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
                <b>⌨️ Windows/CMD Questions</b><br/>
                1. Win + D does what?<br/>
                2. Command to list files?<br/>
                3. How to create folder in CMD?<br/>
                4. What opens with Win + E?<br/>
                5. How to check IP address?
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>🌐 Networking Questions</b><br/>
                1. LAN vs WAN difference?<br/>
                2. Router vs Switch difference?<br/>
                3. Command to test connection?<br/>
                4. 192.168.1.1 is what type of IP?<br/>
                5. What does DNS do?
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
            <div style="background: #f3e5f5; padding: 10px; border-radius: 5px;">
                <b>🔢 Data Encoding Questions</b><br/>
                1. How many bits in a byte?<br/>
                2. ASCII code for 'A'?<br/>
                3. Binary for decimal 10?<br/>
                4. Hex code for red?<br/>
                5. Lossless vs Lossy?
            </div>
            <div style="background: #ffebee; padding: 10px; border-radius: 5px;">
                <b>📁 File Management</b><br/>
                1. .docx opens with?<br/>
                2. .exe files are?<br/>
                3. How to show file extensions?<br/>
                4. ZIP files do what?<br/>
                5. Good folder naming practice?
            </div>
            <div style="background: #e0f2f1; padding: 10px; border-radius: 5px;">
                <b>🔧 Troubleshooting</b><br/>
                1. Computer won't turn on?<br/>
                2. No internet but Wi-Fi connected?<br/>
                3. File won't open?<br/>
                4. Computer very slow?<br/>
                5. Blue screen appears?
            </div>
        </div>
    </div>
</div>

<h3>📝 Practical Quiz Station Rotation</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⏱️ 4 Stations, 15 Minutes Each (Total: 60 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Station 1: Hardware Identification</h5>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                <div style="font-size: 24px;">🧠</div>
                <b>Identify:</b> ______<br/>
                <small>Function: ________</small>
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                <div style="font-size: 24px;">💾</div>
                <b>Identify:</b> ______<br/>
                <small>Type: ________</small>
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                <div style="font-size: 24px;">🔌</div>
                <b>Identify:</b> ______<br/>
                <small>Purpose: ________</small>
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                <div style="font-size: 24px;">🎮</div>
                <b>Identify:</b> ______<br/>
                <small>When needed: ________</small>
            </div>
        </div>
        <p><b>Tasks:</b> 1. Name each component 2. Explain its purpose 3. Give approximate cost</p>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Station 2: Command Prompt Challenges</h5>
        <div style="background: #36454f; color: white; padding: 15px; border-radius: 5px; margin: 10px 0;">
            <b>Using ONLY Command Prompt, complete:</b><br/><br/>
            
            <code>C:\\Users\\Student> _______________</code> (Navigate to Desktop)<br/>
            <code>C:\\...\\Desktop> _______________</code> (Create folder "Quiz")<br/>
            <code>C:\\...\\Desktop> cd Quiz</code><br/>
            <code>C:\\...\\Quiz> _______________</code> (Create file "answers.txt")<br/>
            <code>C:\\...\\Quiz> _______________</code> (Add text "Module 1 Complete")<br/>
            <code>C:\\...\\Quiz> _______________</code> (Check your IP address)<br/>
            <code>C:\\...\\Quiz> _______________</code> (Test connection to Google)<br/>
            <code>C:\\...\\Quiz> _______________</code> (List all files)<br/>
        </div>
        <p><b>Tasks:</b> 1. Write commands 2. Execute successfully 3. Show tutor results</p>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Station 3: Networking Diagram</h5>
        <div style="border: 1px dashed #4A90E2; padding: 15px; margin: 10px 0; min-height: 200px;">
            <b>Draw a home network diagram including:</b>
            <ul>
                <li>Internet Service Provider (ISP)</li>
                <li>Modem</li>
                <li>Router with Wi-Fi</li>
                <li>Switch (optional)</li>
                <li>4 connected devices (mix wired/wireless)</li>
                <li>Label IP addresses (192.168.1.x)</li>
                <li>Show data flow with arrows</li>
            </ul>
        </div>
        <p><b>Tasks:</b> 1. Draw diagram 2. Label all components 3. Explain to tutor</p>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Station 4: Data Encoding Problems</h5>
        <div style="background: #f0f8ff; padding: 15px; border-radius: 5px; margin: 10px 0;">
            <b>Solve these problems:</b><br/><br/>
            
            1. Convert to binary: 42 = _______________<br/>
            2. Convert to decimal: 1101 = _______________<br/>
            3. ASCII for "CAT" = [__, __, __]<br/>
            4. Hex color for pure green = #______<br/>
            5. File has 1000 characters. Approx size? ______ KB<br/>
            6. Photo is 5MB. Good compression would make it ~______ MB<br/>
            7. Text shows as "cafÃ©". Problem? _______________<br/>
            8. Fix: Save as encoding _______________
        </div>
        <p><b>Tasks:</b> 1. Solve problems 2. Show work 3. Explain reasoning</p>
    </div>
</div>

<h3>🔧 Hands-On Challenge: Build a System Profile</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>🎯 Create a Complete System Documentation (45 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Using ALL skills from Module 1, document your computer:</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Part A: System Information</b><br/>
                <small>Use Command Prompt, System Information, etc.</small>
                <table style="width: 100%; margin-top: 10px;">
                    <tr><td><b>Computer Name:</b></td><td>_________________</td></tr>
                    <tr><td><b>Windows Version:</b></td><td>_________________</td></tr>
                    <tr><td><b>System Type:</b></td><td>64-bit / 32-bit</td></tr>
                    <tr><td><b>Install Date:</b></td><td>_________________</td></tr>
                    <tr><td><b>Username:</b></td><td>_________________</td></tr>
                </table>
            </div>
            <div>
                <b>Part B: Hardware Specifications</b><br/>
                <small>Use Task Manager, manufacturer info</small>
                <table style="width: 100%; margin-top: 10px;">
                    <tr><td><b>Processor:</b></td><td>_________________</td></tr>
                    <tr><td><b>Installed RAM:</b></td><td>_________________</td></tr>
                    <tr><td><b>Storage Type:</b></td><td>SSD / HDD</td></tr>
                    <tr><td><b>Total Storage:</b></td><td>_________________</td></tr>
                    <tr><td><b>Free Space:</b></td><td>_________________</td></tr>
                </table>
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Part C: Network Configuration</b><br/>
                <small>Use ipconfig, network settings</small>
                <table style="width: 100%; margin-top: 10px;">
                    <tr><td><b>IP Address:</b></td><td>_________________</td></tr>
                    <tr><td><b>Subnet Mask:</b></td><td>_________________</td></tr>
                    <tr><td><b>Default Gateway:</b></td><td>_________________</td></tr>
                    <tr><td><b>DNS Servers:</b></td><td>_________________</td></tr>
                    <tr><td><b>MAC Address:</b></td><td>_________________</td></tr>
                </table>
            </div>
            <div>
                <b>Part D: File System Analysis</b><br/>
                <small>Use File Explorer, right-click properties</small>
                <table style="width: 100%; margin-top: 10px;">
                    <tr><td><b>Largest file on C:</b></td><td>_________________</td></tr>
                    <tr><td><b>Size:</b></td><td>_________________</td></tr>
                    <tr><td><b>Oldest file:</b></td><td>_________________</td></tr>
                    <tr><td><b>Date created:</b></td><td>_________________</td></tr>
                    <tr><td><b>File extension:</b></td><td>_________________</td></tr>
                </table>
            </div>
        </div>
        
        <div style="margin-top: 15px; background: #f0f8ff; padding: 15px; border-radius: 5px;">
            <b>Part E: Performance & Health Check</b><br/>
            <table style="width: 100%; margin-top: 10px;">
                <tr><td><b>Current RAM usage:</b></td><td>______ / ______ GB (______%)</td></tr>
                <tr><td><b>CPU usage (idle):</b></td><td>______%</td></tr>
                <tr><td><b>Disk usage:</b></td><td>______%</td></tr>
                <tr><td><b>Ping to Google:</b></td><td>______ ms average</td></tr>
                <tr><td><b>System Health:</b></td><td>Good / Fair / Needs attention</td></tr>
            </table>
        </div>
    </div>
</div>

<h3>📊 Module 1 Self-Assessment</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>✅ Rate Your Skills (1-5 Scale)</h4>
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #f5f5f5;">
            <th style="padding: 10px;">Skill Area</th>
            <th style="padding: 10px;">Rating (1-5)</th>
            <th style="padding: 10px;">Confident?</th>
            <th style="padding: 10px;">Need Practice?</th>
        </tr>
        <tr><td>Windows Navigation & Shortcuts</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>File Management & Organization</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>Hardware Identification</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>Command Prompt Basics</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>Network Concepts & Troubleshooting</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>Binary/ASCII/Hex Conversions</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>Data Storage Understanding</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        <tr><td>System Maintenance Basics</td><td>_____</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
    </table>
    
    <div style="margin-top: 15px; background: white; padding: 15px; border-radius: 5px;">
        <b>Reflection Questions:</b>
        <ol>
            <li>Which topic was easiest for you? _______________________</li>
            <li>Which topic was most challenging? _______________________</li>
            <li>What real-world situation have you applied these skills to? _______________________</li>
            <li>What do you want to learn more about? _______________________</li>
            <li>How confident are you helping others with these topics? _______________________</li>
        </ol>
    </div>
</div>

<h3>📋 Final Module 1 Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>🎓 Create a "Computer Literacy Portfolio"</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Requirements:</b> Create a folder named "Module1_Portfolio" containing:
        
        <ol>
            <li><b>System Profile Document</b> (from earlier exercise)
                <ul>
                    <li>Save as: "System_Profile.docx"</li>
                    <li>Include screenshots</li>
                    <li>Add explanations in your own words</li>
                </ul>
            </li>
            <li><b>Network Map</b>
                <ul>
                    <li>Draw your home network</li>
                    <li>Label all devices</li>
                    <li>Include IP addresses</li>
                    <li>Save as: "Network_Map.jpg" or .png</li>
                </ul>
            </li>
            <li><b>Command Script</b>
                <ul>
                    <li>Create a batch file that:
                        <ul>
                            <li>Shows system information</li>
                            <li>Shows network information</li>
                            <li>Creates a backup folder</li>
                            <li>Saves results to a text file</li>
                        </ul>
                    </li>
                    <li>Save as: "System_Check.bat"</li>
                </ul>
            </li>
            <li><b>Data Encoding Examples</b>
                <ul>
                    <li>Create a text file showing:
                        <ul>
                            <li>Your name in ASCII codes</li>
                            <li>Your name in binary</li>
                            <li>Favorite color in hex</li>
                            <li>File size calculations</li>
                        </ul>
                    </li>
                    <li>Save as: "Encoding_Examples.txt"</li>
                </ul>
            </li>
            <li><b>Reflection Essay</b>
                <ul>
                    <li>1-page reflection on what you learned</li>
                    <li>How you'll use these skills</li>
                    <li>What surprised you</li>
                    <li>Future learning goals</li>
                    <li>Save as: "Module1_Reflection.docx"</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>🏆 Portfolio Submission Checklist</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%;">
            <tr><th>Item</th><th>File Name</th><th>Completed?</th><th>Quality Check</th></tr>
            <tr><td>System Profile</td><td>System_Profile.docx</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
            <tr><td>Network Map</td><td>Network_Map.jpg/png</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
            <tr><td>Command Script</td><td>System_Check.bat</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
            <tr><td>Encoding Examples</td><td>Encoding_Examples.txt</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
            <tr><td>Reflection Essay</td><td>Module1_Reflection.docx</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
            <tr><td>Folder Organization</td><td>Module1_Portfolio/</td><td>✅ / ❌</td><td>✅ / ❌</td></tr>
        </table>
    </div>
</div>

<h3>🚀 Preparing for Module 2: Microsoft Word</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px;">
    <h4>📝 What's Coming Next Week</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>📄 Microsoft Word Mastery</h5>
            <ul>
                <li><b>Week 3:</b> Document creation, formatting, tables</li>
                <li><b>Week 4:</b> Advanced features, mail merge, collaboration</li>
                <li><b>Skills you'll learn:</b>
                    <ul>
                        <li>Professional document design</li>
                        <li>Styles and templates</li>
                        <li>Tables and graphics</li>
                        <li>Mail merge for mass communications</li>
                        <li>Collaboration tools</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>✅ Preparation Checklist</h5>
            <ul>
                <li>✅ Ensure Microsoft Office is installed</li>
                <li>✅ Test Microsoft Word opens correctly</li>
                <li>✅ Create folder: "Module2_Word"</li>
                <li>✅ Backup Module 1 work</li>
                <li>✅ Review basic typing skills</li>
                <li>✅ Think of documents you want to create:
                    <ul>
                        <li>Resume/CV</li>
                        <li>Business letter</li>
                        <li>School report</li>
                        <li>Personal project</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<h3>💡 Tutor Teaching Tips for Review Day</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Conducting Effective Reviews</h4>
    <ul>
        <li><b>Create Positive Atmosphere:</b> This is celebration of learning, not stressful test</li>
        <li><b>Station Rotation:</b> Keeps students engaged, allows one-on-one time</li>
        <li><b>Peer Teaching:</b> Have students explain concepts to each other</li>
        <li><b>Common Areas Needing Review:</b>
            <ul>
                <li>Binary conversions (especially larger numbers)</li>
                <li>Network hardware differences (router vs switch)</li>
                <li>CMD commands (syntax, especially with options)</li>
                <li>File size calculations (KB vs MB vs GB)</li>
            </ul>
        </li>
        <li><b>Celebrate Successes:</b> Point out how far students have come in just 2 weeks</li>
        <li><b>Connect to Real World:</b> "Now you can fix your home Wi-Fi!" "You understand why files have different sizes!"</li>
    </ul>
</div>

<h3>🎯 Module 1 Final Competency Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <h4>🏅 Skills Demonstrated in Module 1</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 15px 0;">
        <div>
            <b>✅ Technical Skills</b><br/>
            <label><input type="checkbox"> Can navigate Windows efficiently using shortcuts</label><br/>
            <label><input type="checkbox"> Can organize files and folders logically</label><br/>
            <label><input type="checkbox"> Can identify major computer hardware components</label><br/>
            <label><input type="checkbox"> Can use Command Prompt for basic tasks</label><br/>
            <label><input type="checkbox"> Can troubleshoot basic network issues</label><br/>
            <label><input type="checkbox"> Can convert between number systems</label>
        </div>
        <div>
            <b>✅ Conceptual Understanding</b><br/>
            <label><input type="checkbox"> Understands how OS mediates between user and hardware</label><br/>
            <label><input type="checkbox"> Understands data storage units and file sizes</label><br/>
            <label><input type="checkbox"> Understands networking basics (LAN/WAN, IP addresses)</label><br/>
            <label><input type="checkbox"> Understands character encoding (ASCII/Unicode)</label><br/>
            <label><input type="checkbox"> Understands data compression concepts</label><br/>
            <label><input type="checkbox"> Can explain computer concepts to others</label>
        </div>
    </div>
</div>

<h3>📚 Module 1 Completion & Next Steps</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <h4>🎉 Congratulations on Completing Module 1!</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0; text-align: center;">
        <div style="font-size: 48px; margin-bottom: 10px;">🏆</div>
        <h3>Module 1: The Foundation - COMPLETE!</h3>
        <p>You now have the essential computer literacy skills that form the foundation for all future IT learning.</p>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin: 20px 0;">
            <div style="background: #f0f8ff; padding: 10px; border-radius: 5px;">
                <b>🔧 What You Can Do Now</b><br/>
                • Fix common computer problems<br/>
                • Organize files efficiently<br/>
                • Understand tech specifications<br/>
                • Troubleshoot network issues
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
                <b>📈 Real-World Applications</b><br/>
                • Home network setup<br/>
                • Computer purchasing decisions<br/>
                • Basic tech support for family<br/>
                • Understanding news about tech
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>🚀 Foundation For</b><br/>
                • Module 2: Microsoft Office<br/>
                • Advanced IT courses<br/>
                • Programming basics<br/>
                • Cybersecurity fundamentals
            </div>
        </div>
        
        <div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin-top: 15px;">
            <b>📅 Next Session: Module 2 - Microsoft Word Mastery</b><br/>
            <b>Date:</b> ________________<br/>
            <b>Preparation:</b> Ensure MS Word is installed and working<br/>
            <b>Bring:</b> Ideas for documents you want to create
        </div>
    </div>
</div>
`
            },

            "3-1": {
                "icon": "fa-file-word",
                "title": "Word Interface & Document Anatomy",
                "html": `<h1>Week 3, Day 1: Word Interface & Document Anatomy</h1>
<p>Today, you'll master the Microsoft Word workspace. Learn the Ribbon, customize your environment, and understand how professional documents are structured.</p>

<div class="analogy-box">
    <b>Analogy: Word as a Professional Kitchen 🍳</b><br/>
    Document = Recipe being prepared<br/>
    Ribbon = Kitchen tool drawers (organized by task)<br/>
    Quick Access Toolbar = Favorite tools on counter<br/>
    Ruler = Measuring tools<br/>
    Status Bar = Kitchen timer & measurements<br/>
    Views = Different kitchen workstations
</div>

<h3>🖥️ Microsoft Word Interface Tour</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Word Workspace Components</h4>
    
    <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <!-- Top Section: Title Bar & Quick Access -->
        <div style="background: #4A90E2; color: white; padding: 8px; border-radius: 5px 5px 0 0;">
            <div style="display: flex; justify-content: space-between;">
                <span>📄 Document1 - Microsoft Word</span>
                <span>⎯ □ X</span>
            </div>
        </div>
        
        <!-- Quick Access Toolbar -->
        <div style="background: #f5f5f5; padding: 5px 10px; border-bottom: 1px solid #ddd;">
            <span style="margin-right: 15px;">💾</span>
            <span style="margin-right: 15px;">↶</span>
            <span style="margin-right: 15px;">↷</span>
            <span style="margin-right: 15px;">🖨️</span>
            <small style="float: right; color: #666;">Quick Access Toolbar</small>
        </div>
        
        <!-- Ribbon Tabs -->
        <div style="background: #e3f2fd; padding: 8px; border-bottom: 1px solid #ddd;">
            <div style="display: flex; gap: 20px;">
                <span style="font-weight: bold;">File</span>
                <span>Home</span>
                <span>Insert</span>
                <span>Draw</span>
                <span>Design</span>
                <span>Layout</span>
                <span>References</span>
                <span>Mailings</span>
                <span>Review</span>
                <span>View</span>
                <span>Help</span>
            </div>
            <small style="color: #666;">Ribbon Tabs</small>
        </div>
        
        <!-- Ribbon Groups (Home Tab Example) -->
        <div style="padding: 15px; border-bottom: 1px solid #ddd;">
            <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 5px; margin-bottom: 10px;">
                <div style="text-align: center; padding: 5px; background: #f0f0f0; border-radius: 3px;">
                    <div style="font-size: 20px;">B</div>
                    <small>Font</small>
                </div>
                <div style="text-align: center; padding: 5px; background: #f0f0f0; border-radius: 3px;">
                    <div style="font-size: 20px;">¶</div>
                    <small>Paragraph</small>
                </div>
                <div style="text-align: center; padding: 5px; background: #f0f0f0; border-radius: 3px;">
                    <div style="font-size: 20px;">A↔</div>
                    <small>Styles</small>
                </div>
                <div style="text-align: center; padding: 5px; background: #f0f0f0; border-radius: 3px;">
                    <div style="font-size: 20px;">✎</div>
                    <small>Editing</small>
                </div>
                <div style="text-align: center; padding: 5px; background: #f0f0f0; border-radius: 3px;">
                    <div style="font-size: 20px;">📋</div>
                    <small>Clipboard</small>
                </div>
                <div style="text-align: center; padding: 5px; background: #f0f0f0; border-radius: 3px;">
                    <div style="font-size: 20px;">A🔄</div>
                    <small>Format Painter</small>
                </div>
            </div>
            <small style="color: #666;">Home Tab Groups</small>
        </div>
        
        <!-- Ruler -->
        <div style="background: #fff8e1; padding: 10px 15px; border-bottom: 1px solid #ddd;">
            <div style="display: flex; justify-content: space-between; font-family: monospace;">
                <span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span>
            </div>
            <small style="color: #666;">Ruler (inches)</small>
        </div>
        
        <!-- Document Area -->
        <div style="min-height: 200px; padding: 20px; background: white;">
            <div style="border-left: 3px solid #4A90E2; padding-left: 10px;">
                <p style="margin: 0; font-style: italic;">Click here to start typing...</p>
            </div>
            <small style="color: #666; position: absolute; bottom: 10px; right: 10px;">Document Area</small>
        </div>
        
        <!-- Status Bar -->
        <div style="background: #f5f5f5; padding: 8px 15px; border-top: 1px solid #ddd; display: flex; justify-content: space-between;">
            <div>
                <span>Page 1 of 1</span>
                <span style="margin-left: 15px;">Words: 0</span>
            </div>
            <div>
                <span>📄</span>
                <span style="margin-left: 10px;">🔍 100%</span>
                <span style="margin-left: 10px;">📱</span>
            </div>
            <small style="color: #666;">Status Bar</small>
        </div>
    </div>
</div>

<h3>📊 Understanding the Ribbon</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🔧 Ribbon Tabs & Their Purposes</h4>
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px;">Tab</th>
            <th style="padding: 10px;">Primary Use</th>
            <th style="padding: 10px;">Key Groups</th>
            <th style="padding: 10px;">When You Need It</th>
        </tr>
        <tr><td><b>Home</b></td><td>Basic formatting & editing</td><td>Clipboard, Font, Paragraph, Styles</td><td>Always - your main toolbox</td></tr>
        <tr><td><b>Insert</b></td><td>Add elements to document</td><td>Pages, Tables, Illustrations, Links</td><td>Adding pictures, tables, page breaks</td></tr>
        <tr><td><b>Design</b></td><td>Document appearance</td><td>Themes, Document Formatting</td><td>Making document look professional</td></tr>
        <tr><td><b>Layout</b></td><td>Page setup</td><td>Page Setup, Paragraph</td><td>Setting margins, orientation, columns</td></tr>
        <tr><td><b>References</b></td><td>Academic/business docs</td><td>Table of Contents, Footnotes, Citations</td><td>Writing reports, papers, theses</td></tr>
        <tr><td><b>Mailings</b></td><td>Mass communications</td><td>Create, Start Mail Merge, Write & Insert</td><td>Sending letters to multiple people</td></tr>
        <tr><td><b>Review</b></td><td>Proofing & collaboration</td><td>Proofing, Comments, Tracking</td><td>Editing, checking spelling, teamwork</td></tr>
        <tr><td><b>View</b></td><td>Change how you see doc</td><td>Views, Show, Zoom, Window</td><td>Switching between edit/read modes</td></tr>
        <tr><td><b>File</b></td><td>Document management</td><td>Save, Print, Share, Export</td><td>Saving, printing, sharing documents</td></tr>
    </table>
</div>

<h3>🛠️ Hands-On Lab: Word Environment Setup</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Customize Your Workspace (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Step-by-Step Customization:</b></p>
        
        <ol>
            <li><b>Show/Hide Ruler:</b>
                <ul>
                    <li>Go to <b>View</b> tab</li>
                    <li>Check/Uncheck <b>Ruler</b> in Show group</li>
                    <li>Try both: With ruler (for precision) and without (more space)</li>
                </ul>
            </li>
            <li><b>Customize Quick Access Toolbar:</b>
                <ul>
                    <li>Click dropdown arrow on Quick Access Toolbar (top-left)</li>
                    <li>Add: <b>New</b>, <b>Open</b>, <b>Quick Print</b>, <b>Spelling & Grammar</b></li>
                    <li>Remove items you don't use</li>
                    <li><b>Pro Tip:</b> Right-click any button → "Add to Quick Access Toolbar"</li>
                </ul>
            </li>
            <li><b>Change User Information:</b>
                <ul>
                    <li>Go to <b>File</b> → <b>Options</b></li>
                    <li>Select <b>General</b> on left</li>
                    <li>Change "User name" and "Initials"</li>
                    <li>This appears in comments and document properties</li>
                </ul>
            </li>
            <li><b>Set Default Save Location:</b>
                <ul>
                    <li><b>File</b> → <b>Options</b> → <b>Save</b></li>
                    <li>Change "Default local file location" to your Documents folder</li>
                    <li>Set "Save AutoRecover information every" to 5 minutes</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 2: Document Views & Navigation (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Learn Different Ways to View Your Document:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="text-align: center; padding: 10px; background: #f0f8ff; border-radius: 5px;">
                <div style="font-size: 24px;">📝</div>
                <b>Print Layout</b><br/>
                <small>View → Print Layout</small><br/>
                <small>Shows as printed</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #fff3e0; border-radius: 5px;">
                <div style="font-size: 24px;">📖</div>
                <b>Read Mode</b><br/>
                <small>View → Read Mode</small><br/>
                <small>Full screen reading</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f1f8e9; border-radius: 5px;">
                <div style="font-size: 24px;">💻</div>
                <b>Web Layout</b><br/>
                <small>View → Web Layout</small><br/>
                <small>As webpage</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f3e5f5; border-radius: 5px;">
                <div style="font-size: 24px;">📄</div>
                <b>Outline View</b><br/>
                <small>View → Outline</small><br/>
                <small>Structure view</small>
            </div>
        </div>
        
        <p><b>Practice:</b></p>
        <ol>
            <li>Type =lorem(3,5) and press Enter (generates dummy text)</li>
            <li>Switch through all 4 view modes</li>
            <li>Notice differences in each view</li>
            <li>Answer: Which view is best for:
                <ul>
                    <li>Reading long documents? __________</li>
                    <li>Seeing how it will print? __________</li>
                    <li>Organizing headings? __________</li>
                    <li>Viewing as a webpage? __________</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 3: Navigation Pane & Document Map (15 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Learn to Navigate Large Documents:</b></p>
        
        <ol>
            <li><b>Show Navigation Pane:</b>
                <ul>
                    <li>Go to <b>View</b> tab</li>
                    <li>Check <b>Navigation Pane</b> in Show group</li>
                    <li>Pane appears on left</li>
                </ul>
            </li>
            <li><b>Use Headings to Navigate:</b>
                <ul>
                    <li>Type several paragraphs with headings (use Heading 1, 2 styles)</li>
                    <li>In Navigation Pane, click Headings tab</li>
                    <li>Click any heading to jump to that section</li>
                </ul>
            </li>
            <li><b>Search Within Document:</b>
                <ul>
                    <li>In Navigation Pane, click Search box (magnifying glass)</li>
                    <li>Type a word that appears in your document</li>
                    <li>See all instances highlighted</li>
                </ul>
            </li>
            <li><b>Find and Replace:</b>
                <ul>
                    <li>Press <kbd>Ctrl + H</kbd></li>
                    <li>Find: "text" → Replace: "document"</li>
                    <li>Try: Replace All</li>
                    <li>Undo with <kbd>Ctrl + Z</kbd></li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>📝 Document Types & Templates</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🎯 When to Use Different Document Types</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>📄 .docx (Default)</h5>
            <ul>
                <li><b>Format:</b> Modern Word document</li>
                <li><b>Features:</b> All Word features</li>
                <li><b>Size:</b> Compressed (smaller)</li>
                <li><b>Compatibility:</b> Word 2007+</li>
                <li><b>Use for:</b> Most documents</li>
                <li><b>Note:</b> Can't open in very old Word</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>📋 .doc (Legacy)</h5>
            <ul>
                <li><b>Format:</b> Old Word format</li>
                <li><b>Features:</b> Limited</li>
                <li><b>Size:</b> Larger</li>
                <li><b>Compatibility:</b> All Word versions</li>
                <li><b>Use for:</b> Sharing with Word 2003 or older</li>
                <li><b>Note:</b> Avoid unless necessary</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #8BC34A; padding: 15px; border-radius: 8px;">
            <h5>📄 .pdf (Portable)</h5>
            <ul>
                <li><b>Format:</b> Fixed layout</li>
                <li><b>Features:</b> Preserves formatting</li>
                <li><b>Size:</b> Varies</li>
                <li><b>Compatibility:</b> Any device with PDF reader</li>
                <li><b>Use for:</b> Final versions, sharing</li>
                <li><b>Note:</b> Hard to edit once saved</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin-top: 15px;">
        <h5>🎨 Using Templates</h5>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-top: 10px;">
            <div style="text-align: center; padding: 10px; background: #f0f8ff; border-radius: 5px;">
                <div style="font-size: 24px;">📋</div>
                <b>Resume</b><br/>
                <small>Professional look</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #fff3e0; border-radius: 5px;">
                <div style="font-size: 24px;">📧</div>
                <b>Letter</b><br/>
                <small>Formal correspondence</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f1f8e9; border-radius: 5px;">
                <div style="font-size: 24px;">📊</div>
                <b>Report</b><br/>
                <small>Structured format</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f3e5f5; border-radius: 5px;">
                <div style="font-size: 24px;">📅</div>
                <b>Calendar</b><br/>
                <small>Monthly planner</small>
            </div>
        </div>
        
        <p><b>How to Use Templates:</b></p>
        <ol>
            <li>Go to <b>File</b> → <b>New</b></li>
            <li>Search for template type (e.g., "resume")</li>
            <li>Click template to preview</li>
            <li>Click "Create" to use it</li>
            <li>Replace placeholder text with your content</li>
        </ol>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Create a Customized Workspace (30 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Customize Word to match your workflow:</b>
        
        <ol>
            <li><b>Quick Access Toolbar:</b> Add these buttons:
                <ul>
                    <li>Save</li>
                    <li>Undo/Redo</li>
                    <li>Print Preview</li>
                    <li>Format Painter</li>
                    <li>Insert Picture</li>
                    <li>Word Count</li>
                </ul>
            </li>
            <li><b>Change Default Font:</b>
                <ul>
                    <li>Go to <b>Home</b> → Font dialog launcher (small arrow)</li>
                    <li>Set: Calibri, 12pt</li>
                    <li>Click "Set As Default" → "All documents based on Normal template"</li>
                </ul>
            </li>
            <li><b>Set AutoCorrect Options:</b>
                <ul>
                    <li>Go to <b>File</b> → <b>Options</b> → <b>Proofing</b></li>
                    <li>Click "AutoCorrect Options"</li>
                    <li>Add your own shortcut: (c) → ©</li>
                    <li>Add: teh → the (common typo fix)</li>
                </ul>
            </li>
            <li><b>Create Custom Keyboard Shortcuts:</b>
                <ul>
                    <li>Go to <b>File</b> → <b>Options</b> → <b>Customize Ribbon</b></li>
                    <li>Click "Customize" next to Keyboard Shortcuts</li>
                    <li>Assign: <kbd>Alt + S</kbd> to "Save"</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Task 2: Explore Templates & Create Practice Docs (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create these 4 documents using templates:</b>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 15px 0;">
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>📝 Document 1: Personal Letter</b><br/>
                • Use "Simple Letter" template<br/>
                • Fill with your information<br/>
                • Save as: Letter_YourName.docx<br/>
                • Features used: ______________
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>📋 Document 2: Basic Resume</b><br/>
                • Use "Basic Resume" template<br/>
                • Fill with your education/work<br/>
                • Save as: Resume_YourName.docx<br/>
                • Features used: ______________
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>📊 Document 3: Meeting Notes</b><br/>
                • Use "Meeting Notes" template<br/>
                • Create fake meeting notes<br/>
                • Save as: Meeting_Notes.docx<br/>
                • Features used: ______________
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>📅 Document 4: Monthly Calendar</b><br/>
                • Use "Calendar" template<br/>
                • Customize for current month<br/>
                • Save as: Calendar.docx<br/>
                • Features used: ______________
            </div>
        </div>
    </div>
    
    <h4>Task 3: Document Investigation & Analysis (30 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Analyze Word's capabilities:</b>
        
        <ol>
            <li><b>Check Document Properties:</b>
                <ul>
                    <li>Open any Word document</li>
                    <li>Go to <b>File</b> → <b>Info</b></li>
                    <li>Record: Size: ______, Pages: ______, Words: ______, Editing time: ______</li>
                    <li>Click "Show All Properties" for more details</li>
                </ul>
            </li>
            <li><b>Test Different Save Options:</b>
                <ul>
                    <li>Save same document as: .docx, .pdf, .txt</li>
                    <li>Compare file sizes: .docx: ______, .pdf: ______, .txt: ______</li>
                    <li>Open each and note differences</li>
                </ul>
            </li>
            <li><b>Explore "Tell Me" Feature:</b>
                <ul>
                    <li>Click "Tell me what you want to do" (top ribbon)</li>
                    <li>Type: "insert table"</li>
                    <li>Type: "change margins"</li>
                    <li>Type: "word count"</li>
                    <li>How helpful is this feature? ______</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>⌨️ Essential Word Keyboard Shortcuts</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Work Faster with Keyboard Commands</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>📄 Document Management</h5>
            <table style="width: 100%;">
                <tr><td><kbd>Ctrl + N</kbd></td><td>New document</td></tr>
                <tr><td><kbd>Ctrl + O</kbd></td><td>Open document</td></tr>
                <tr><td><kbd>Ctrl + S</kbd></td><td>Save document</td></tr>
                <tr><td><kbd>Ctrl + P</kbd></td><td>Print document</td></tr>
                <tr><td><kbd>Ctrl + W</kbd></td><td>Close document</td></tr>
                <tr><td><kbd>Ctrl + F</kbd></td><td>Find in document</td></tr>
                <tr><td><kbd>Ctrl + H</kbd></td><td>Find and replace</td></tr>
            </table>
        </div>
        <div>
            <h5>✏️ Editing & Formatting</h5>
            <table style="width: 100%;">
                <tr><td><kbd>Ctrl + Z</kbd></td><td>Undo</td></tr>
                <tr><td><kbd>Ctrl + Y</kbd></td><td>Redo</td></tr>
                <tr><td><kbd>Ctrl + X</kbd></td><td>Cut</td></tr>
                <tr><td><kbd>Ctrl + C</kbd></td><td>Copy</td></tr>
                <tr><td><kbd>Ctrl + V</kbd></td><td>Paste</td></tr>
                <tr><td><kbd>Ctrl + B</kbd></td><td>Bold</td></tr>
                <tr><td><kbd>Ctrl + I</kbd></td><td>Italic</td></tr>
                <tr><td><kbd>Ctrl + U</kbd></td><td>Underline</td></tr>
            </table>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>📑 Navigation</h5>
            <table style="width: 100%;">
                <tr><td><kbd>Home</kbd></td><td>Beginning of line</td></tr>
                <tr><td><kbd>End</kbd></td><td>End of line</td></tr>
                <tr><td><kbd>Ctrl + Home</kbd></td><td>Beginning of document</td></tr>
                <tr><td><kbd>Ctrl + End</kbd></td><td>End of document</td></tr>
                <tr><td><kbd>Ctrl + ←/→</kbd></td><td>Move by word</td></tr>
                <tr><td><kbd>F5</kbd></td><td>Go to page/section</td></tr>
            </table>
        </div>
        <div>
            <h5>🎯 Selection</h5>
            <table style="width: 100%;">
                <tr><td><kbd>Ctrl + A</kbd></td><td>Select all</td></tr>
                <tr><td><kbd>Double-click</kbd></td><td>Select word</td></tr>
                <tr><td><kbd>Triple-click</kbd></td><td>Select paragraph</td></tr>
                <tr><td><kbd>Ctrl + Shift + →</kbd></td><td>Select word right</td></tr>
                <tr><td><kbd>Ctrl + Shift + ←</kbd></td><td>Select word left</td></tr>
                <tr><td><kbd>Shift + Click</kbd></td><td>Select range</td></tr>
            </table>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>💡 Pro Tip: Create Your Own Shortcuts</h5>
        <ol>
            <li>Go to <b>File</b> → <b>Options</b> → <b>Customize Ribbon</b></li>
            <li>Click "Customize" next to Keyboard Shortcuts</li>
            <li>Choose category (e.g., All Commands)</li>
            <li>Select command (e.g., FormatPainter)</li>
            <li>Press your preferred shortcut (e.g., <kbd>Alt + F</kbd>)</li>
            <li>Click "Assign"</li>
        </ol>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Word Interface Effectively</h4>
    <ul>
        <li><b>Start with Why:</b> "A well-setup workspace saves hours over time"</li>
        <li><b>Kitchen Analogy:</b> Students understand tools organized by task</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Too many buttons overwhelming</li>
                <li>Can't find specific features</li>
                <li>Don't understand ribbon organization</li>
                <li>Fear of "breaking" something</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Start with Home tab only</li>
                <li>Introduce one new tab per activity</li>
                <li>Have students customize THEIR workspace (personal investment)</li>
                <li>Show how "Tell Me" feature can find anything</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Your resume needs to look professional"</li>
                <li>"Business letters have specific formats"</li>
                <li>"Templates save time on common documents"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can identify all main Word interface components</label><br/>
    <label><input type="checkbox"> Understands purpose of each ribbon tab</label><br/>
    <label><input type="checkbox"> Can customize Quick Access Toolbar</label><br/>
    <label><input type="checkbox"> Knows different document views and when to use them</label><br/>
    <label><input type="checkbox"> Can use Navigation Pane to move through documents</label><br/>
    <label><input type="checkbox"> Understands different document formats (.docx, .pdf, .doc)</label><br/>
    <label><input type="checkbox"> Can create documents from templates</label><br/>
    <label><input type="checkbox"> Knows essential keyboard shortcuts</label><br/>
    <label><input type="checkbox"> Can change Word options and defaults</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://support.microsoft.com/en-us/office/word-for-beginners-7e94d8f2-5b5a-4bcc-9bf3-48a6b80aa419">Microsoft Word for Beginners</a></li>
        <li><b>Keyboard Shortcuts:</b> <a href="https://support.microsoft.com/en-us/office/keyboard-shortcuts-in-word-95ef89dd-7142-4b50-afb2-f762f663ceb2">Complete Shortcut List</a></li>
        <li><b>Templates:</b> <a href="https://templates.office.com">Office.com Templates</a></li>
        <li><b>Video:</b> "Microsoft Word Tutorial for Beginners" by Teacher's Tech (YouTube)</li>
        <li><b>Practice:</b> Recreate a professional document you admire (resume, brochure, etc.)</li>
        <li><b>Next Session:</b> Day 3-2 - Formatting & Styles Mastery</li>
    </ul>
</div>
`
            },
            "3-2": {
                "icon": "fa-font",
                "title": "Formatting & The Power of Styles",
                "html": `<h1>Week 3, Day 2: Formatting & The Power of Styles</h1>
<p>Today, you'll learn professional formatting techniques that separate amateur documents from professional ones. Master fonts, paragraphs, and the game-changing power of Styles.</p>

<div class="analogy-box">
    <b>Analogy: Document Formatting as Interior Design 🏠</b><br/>
    Text = Furniture (content)<br/>
    Fonts = Paint colors & fabrics (appearance)<br/>
    Paragraphs = Room arrangement (spacing)<br/>
    Styles = Design templates (consistent look)<br/>
    Format Painter = Color swatch (copy design)<br/>
    Clear Formatting = Blank canvas (start fresh)
</div>

<h3>🎨 Font Formatting Deep Dive</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔤 Understanding Typography Basics</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 20px 0;">
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>📝 Font Properties</h5>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-top: 10px;">
                <div style="padding: 10px; background: #f0f8ff; border-radius: 5px;">
                    <b>Font Family</b><br/>
                    <span style="font-family: Arial;">Arial</span><br/>
                    <span style="font-family: 'Times New Roman';">Times New Roman</span><br/>
                    <span style="font-family: Calibri;">Calibri</span><br/>
                    <span style="font-family: Georgia;">Georgia</span>
                </div>
                <div style="padding: 10px; background: #fff3e0; border-radius: 5px;">
                    <b>Font Size</b><br/>
                    <span style="font-size: 8pt;">8pt (tiny)</span><br/>
                    <span style="font-size: 11pt;">11pt (small)</span><br/>
                    <span style="font-size: 12pt;">12pt (normal)</span><br/>
                    <span style="font-size: 14pt;">14pt (large)</span><br/>
                    <span style="font-size: 18pt;">18pt (heading)</span>
                </div>
                <div style="padding: 10px; background: #f1f8e9; border-radius: 5px;">
                    <b>Font Styles</b><br/>
                    <span style="font-weight: bold;">Bold</span><br/>
                    <span style="font-style: italic;">Italic</span><br/>
                    <span style="text-decoration: underline;">Underline</span><br/>
                    <span style="color: red;">Color</span>
                </div>
                <div style="padding: 10px; background: #f3e5f5; border-radius: 5px;">
                    <b>Advanced</b><br/>
                    <span style="text-transform: uppercase;">Uppercase</span><br/>
                    <span style="letter-spacing: 2px;">Spacing</span><br/>
                    <span style="text-shadow: 1px 1px 2px gray;">Effects</span><br/>
                    Subscript H<sub>2</sub>O<br/>
                    Superscript x<sup>2</sup>
                </div>
            </div>
        </div>
        <div style="background: white; padding: 15px; border-radius: 8px;">
            <h5>🎯 Font Selection Guidelines</h5>
            <table style="width: 100%;">
                <tr style="background: #f5f5f5;">
                    <th style="padding: 8px;">Document Type</th>
                    <th style="padding: 8px;">Recommended Font</th>
                    <th style="padding: 8px;">Size</th>
                    <th style="padding: 8px;">Why</th>
                </tr>
                <tr><td>Business Report</td><td>Calibri, Arial</td><td>11-12pt</td><td>Clean, professional</td></tr>
                <tr><td>Academic Paper</td><td>Times New Roman</td><td>12pt</td><td>Traditional, readable</td></tr>
                <tr><td>Creative Project</td><td>Georgia, Garamond</td><td>11-12pt</td><td>Elegant, distinctive</td></tr>
                <tr><td>Presentation</td><td>Arial, Verdana</td><td>28-32pt</td><td>Readable from distance</td></tr>
                <tr><td>Email</td><td>Calibri, Segoe UI</td><td>11pt</td><td>Clear on all devices</td></tr>
                <tr><td>Resume</td><td>Calibri, Cambria</td><td>10-12pt</td><td>Professional, scannable</td></tr>
            </table>
            
            <div style="margin-top: 15px; background: #fff3cd; padding: 10px; border-radius: 5px;">
                <b>💡 Rule of Thumb:</b><br/>
                • Maximum 2-3 fonts per document<br/>
                • Use sans-serif for screens (Arial, Calibri)<br/>
                • Use serif for print (Times, Georgia)<br/>
                • Avoid Comic Sans in professional docs!
            </div>
        </div>
    </div>
</div>

<h3>📏 Paragraph Formatting Mastery</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🔧 Controlling Text Layout & Spacing</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Alignment Examples</h5>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="padding: 10px; background: #f0f8ff; border-radius: 5px; text-align: left;">
                <b>Left Align</b><br/>
                <small>Most common for body text. Easy to read for left-to-right languages.</small>
            </div>
            <div style="padding: 10px; background: #fff3e0; border-radius: 5px; text-align: center;">
                <b>Center Align</b><br/>
                <small>Good for titles, headings, short lines. Avoid for paragraphs.</small>
            </div>
            <div style="padding: 10px; background: #f1f8e9; border-radius: 5px; text-align: right;">
                <b>Right Align</b><br/>
                <small>Dates, numbers in tables. Sometimes used in resumes.</small>
            </div>
            <div style="padding: 10px; background: #f3e5f5; border-radius: 5px; text-align: justify;">
                <b>Justified</b><br/>
                <small>Creates clean edges on both sides. Used in newspapers, books.</small>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Line Spacing & Indentation</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Line Spacing Examples</b>
                <div style="margin-top: 10px;">
                    <div style="line-height: 1.0; background: #f0f8ff; padding: 5px; margin: 5px 0;">
                        <b>Single (1.0):</b> Tight, for saving space
                    </div>
                    <div style="line-height: 1.15; background: #fff3e0; padding: 5px; margin: 5px 0;">
                        <b>1.15:</b> Word default, good for most docs
                    </div>
                    <div style="line-height: 1.5; background: #f1f8e9; padding: 5px; margin: 5px 0;">
                        <b>1.5:</b> Easier to read, academic papers
                    </div>
                    <div style="line-height: 2.0; background: #f3e5f5; padding: 5px; margin: 5px 0;">
                        <b>Double (2.0):</b> School assignments, drafts
                    </div>
                </div>
            </div>
            <div>
                <b>Indentation Types</b>
                <div style="margin-top: 10px;">
                    <div style="padding-left: 20px; background: #f0f8ff; padding: 5px; margin: 5px 0;">
                        <b>First Line:</b> Traditional paragraph start
                    </div>
                    <div style="padding-left: 40px; padding-right: 20px; background: #fff3e0; padding: 5px; margin: 5px 0;">
                        <b>Left & Right:</b> Block quotes, excerpts
                    </div>
                    <div style="margin-left: 40px; background: #f1f8e9; padding: 5px; margin: 5px 0;">
                        <b>Hanging:</b> References, bibliographies
                    </div>
                    <div style="padding: 5px; margin: 5px 0;">
                        <b>No Indentation:</b> Modern web style, use space between paragraphs
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h3>🚀 The Power of Styles</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🎭 Why Styles Beat Manual Formatting</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Manual vs Styles: A Comparison</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div style="border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
                <h5>❌ Manual Formatting</h5>
                <ul>
                    <li><b>Method:</b> Select text → click buttons</li>
                    <li><b>Time:</b> Slow (format each heading individually)</li>
                    <li><b>Consistency:</b> Hard to maintain</li>
                    <li><b>Changes:</b> Update each instance manually</li>
                    <li><b>Table of Contents:</b> Must create manually</li>
                    <li><b>Risk:</b> Human error, inconsistencies</li>
                    <li><b>Analogy:</b> Painting each wall different color by hand</li>
                </ul>
            </div>
            <div style="border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
                <h5>✅ Using Styles</h5>
                <ul>
                    <li><b>Method:</b> Apply predefined style</li>
                    <li><b>Time:</b> Fast (one click per element)</li>
                    <li><b>Consistency:</b> Automatic</li>
                    <li><b>Changes:</b> Update style → all instances update</li>
                    <li><b>Table of Contents:</b> Auto-generated</li>
                    <li><b>Risk:</b> Minimal (system handles consistency)</li>
                    <li><b>Analogy:</b> Using paint roller with guide</li>
                </ul>
            </div>
        </div>
        
        <div style="margin-top: 20px; background: #fff3cd; padding: 15px; border-radius: 5px;">
            <h5>🎯 Real-World Example</h5>
            <p><b>Situation:</b> 50-page report with 120 headings</p>
            <p><b>Manual way:</b> Format each heading individually. Boss says "make headings blue." You spend 2 hours changing 120 headings.</p>
            <p><b>Styles way:</b> Apply "Heading 1" style to all headings. Boss says "make headings blue." You change Heading 1 style once → all 120 headings update automatically in 10 seconds.</p>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Formatting & Styles Practice</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Create Dummy Text & Apply Styles (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <ol>
            <li><b>Generate dummy text:</b>
                <ul>
                    <li>Open new Word document</li>
                    <li>Type: <code>=lorem(5,10)</code> and press Enter</li>
                    <li>This creates 5 paragraphs with 10 sentences each</li>
                </ul>
            </li>
            <li><b>Apply Heading Styles:</b>
                <ul>
                    <li>Select first line → <b>Home</b> tab → <b>Styles</b> gallery</li>
                    <li>Click <b>Heading 1</b></li>
                    <li>Select several subheadings → apply <b>Heading 2</b></li>
                    <li>Select some items → apply <b>Heading 3</b></li>
                </ul>
            </li>
            <li><b>Modify a Style:</b>
                <ul>
                    <li>Right-click <b>Heading 1</b> in Styles gallery</li>
                    <li>Select <b>Modify...</b></li>
                    <li>Change: Font color to Blue, Size to 16pt</li>
                    <li>Check "Add to template" if you want it permanent</li>
                    <li>Click OK → ALL Heading 1s update instantly!</li>
                </ul>
            </li>
            <li><b>Create Custom Style:</b>
                <ul>
                    <li>Format some text how you like (e.g., Bold, Italic, Blue)</li>
                    <li>Select the formatted text</li>
                    <li>Right-click Styles gallery → <b>Save Selection as New Quick Style</b></li>
                    <li>Name it: "My Important Text"</li>
                    <li>Now apply it elsewhere</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 2: Format Painter & Clear Formatting (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Master these time-saving tools:</b></p>
        
        <ol>
            <li><b>Use Format Painter:</b>
                <ul>
                    <li>Format a paragraph with specific font, size, color</li>
                    <li>Select that paragraph</li>
                    <li>Click <b>Format Painter</b> button (Home tab, Clipboard group)</li>
                    <li>Click another paragraph → formatting copies!</li>
                    <li><b>Pro Tip:</b> Double-click Format Painter to apply to multiple places</li>
                </ul>
            </li>
            <li><b>Clear Formatting:</b>
                <ul>
                    <li>Take text with lots of formatting (bold, italics, colors, etc.)</li>
                    <li>Select the text</li>
                    <li>Click <b>Clear All Formatting</b> button (Home tab, Font group)</li>
                    <li>Text returns to Normal style</li>
                    <li>Keyboard shortcut: <kbd>Ctrl + Spacebar</kbd></li>
                </ul>
            </li>
            <li><b>Paste Options:</b>
                <ul>
                    <li>Copy some formatted text</li>
                    <li>Paste it somewhere else</li>
                    <li>Click the <b>Paste Options</b> button that appears</li>
                    <li>Try: Keep Source Formatting, Merge Formatting, Keep Text Only</li>
                    <li>See the differences</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 3: Professional Document Formatting (45 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a properly formatted business letter:</b></p>
        
        <div style="border: 1px solid #ddd; padding: 20px; margin: 15px 0; min-height: 400px;">
            <div style="text-align: right;">
                <p>[Your Name]<br/>
                [Your Address]<br/>
                [City, State, ZIP]<br/>
                [Email]<br/>
                [Phone]<br/>
                [Date]</p>
            </div>
            
            <p>[Recipient Name]<br/>
            [Recipient Title]<br/>
            [Company Name]<br/>
            [Company Address]<br/>
            [City, State, ZIP]</p>
            
            <p>Dear [Recipient Name],</p>
            
            <div style="text-indent: 0.5in;">
                <p>[First paragraph: State purpose clearly and concisely. Explain why you are writing and what you hope to achieve.]</p>
                
                <p>[Second paragraph: Provide supporting details. Use this space to elaborate on your main points, provide evidence or examples, and build your case.]</p>
                
                <p>[Third paragraph: Call to action. Clearly state what you want the recipient to do next, whether it's scheduling a meeting, providing information, or taking specific action.]</p>
            </div>
            
            <p>Sincerely,</p>
            
            <p>[Your Signature]</p>
            <p>[Your Typed Name]</p>
        </div>
        
        <p><b>Formatting Requirements:</b></p>
        <ol>
            <li>Use proper business letter format (as shown)</li>
            <li>Font: Calibri, 11pt for body</li>
            <li>Line spacing: 1.15</li>
            <li>Paragraph spacing: 6pt after paragraphs</li>
            <li>Create styles for:
                <ul>
                    <li>Letter head (your info)</li>
                    <li>Recipient address</li>
                    <li>Salutation</li>
                    <li>Body paragraphs</li>
                    <li>Closing</li>
                </ul>
            </li>
            <li>Save as: Business_Letter_Formatted.docx</li>
        </ol>
    </div>
</div>

<h3>📊 Styles Hierarchy & Best Practices</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🏗️ Building Document Structure with Styles</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Standard Style Hierarchy</h5>
        <div style="margin-left: 20px;">
            <div style="font-size: 24pt; color: #2C3E50; font-weight: bold; margin-bottom: 10px;">
                Title (24pt)
            </div>
            <div style="font-size: 16pt; color: #4A90E2; font-weight: bold; margin-bottom: 10px; margin-left: 20px;">
                Heading 1 (16pt)
            </div>
            <div style="font-size: 14pt; color: #3498DB; font-weight: bold; margin-bottom: 10px; margin-left: 40px;">
                Heading 2 (14pt)
            </div>
            <div style="font-size: 12pt; color: #2980B9; font-weight: bold; margin-bottom: 10px; margin-left: 60px;">
                Heading 3 (12pt)
            </div>
            <div style="font-size: 11pt; color: #000; margin-bottom: 5px; margin-left: 80px;">
                Normal (11pt) - Body text for most documents. This is where the main content goes. It should be easy to read with proper line spacing.
            </div>
            <div style="font-size: 10pt; color: #666; font-style: italic; margin-left: 80px;">
                Caption (10pt) - For image captions, table notes, or explanatory text.
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>🎯 Style Best Practices</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 10px;">
            <div>
                <b>✅ Do:</b>
                <ul>
                    <li>Use built-in styles (Heading 1, Normal, etc.)</li>
                    <li>Modify styles instead of creating new ones</li>
                    <li>Keep style names descriptive</li>
                    <li>Use keyboard shortcuts for common styles</li>
                    <li>Create style sets for different document types</li>
                    <li>Test styles in Print Preview</li>
                </ul>
            </div>
            <div>
                <b>❌ Don't:</b>
                <ul>
                    <li>Use direct formatting (bold, font size) on styled text</li>
                    <li>Create too many similar styles</li>
                    <li>Use colors that won't print well</li>
                    <li>Forget about accessibility (color contrast)</li>
                    <li>Mix too many fonts</li>
                    <li>Ignore spacing and alignment</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Create a Style Guide Document (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a 2-page document that demonstrates all formatting concepts:</b>
        
        <div style="border: 1px dashed #4A90E2; padding: 15px; margin: 15px 0; min-height: 300px;">
            <h1 style="text-align: center;">Formatting Style Guide</h1>
            <h2>Created by: [Your Name]</h2>
            <h2>Date: [Today's Date]</h2>
            
            <h3>1. Font Demonstration</h3>
            <p>Show at least 5 different fonts with examples of when to use each.</p>
            
            <h3>2. Paragraph Formatting Examples</h3>
            <p>Demonstrate all alignment types, line spacing options, and indentation styles.</p>
            
            <h3>3. Styles Gallery</h3>
            <p>Show Heading 1, Heading 2, Heading 3, Normal, and at least 2 custom styles.</p>
            
            <h3>4. Real-World Examples</h3>
            <p>Include samples of:
            <ul>
                <li>Business letter</li>
                <li>Academic paragraph</li>
                <li>Resume section</li>
                <li>Newsletter excerpt</li>
            </ul>
            </p>
        </div>
        
        <b>Requirements:</b>
        <ul>
            <li>Use Styles for ALL formatting</li>
            <li>Create at least 3 custom styles</li>
            <li>Include a table of contents (auto-generated)</li>
            <li>Use consistent formatting throughout</li>
            <li>Save as: Style_Guide_YourName.docx</li>
        </ul>
    </div>
    
    <h4>Task 2: Formatting Transformation Challenge (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Take this poorly formatted text and fix it professionally:</b>
        
        <div style="background: #ffebee; padding: 15px; margin: 15px 0; border-radius: 5px;">
            <p style="font-family: 'Comic Sans MS'; font-size: 14pt; color: purple; text-align: center;">
                <b>COMPANY REPORT</b><br/>
                <i>by john smith</i>
            </p>
            
            <p style="font-family: Arial; font-size: 10pt; text-align: right;">
                <u>INTRODUCTION</u><br/>
                this is the introduction part of our company report. we are doing very well this quarter. sales are up. profits are good. everyone is happy.
            </p>
            
            <p style="font-family: 'Times New Roman'; font-size: 16pt; color: green;">
                <b>SALES DATA</b>
            </p>
            
            <p style="font-family: Calibri; font-size: 12pt; text-align: justify;">
                sales for q1 were $100,000. sales for q2 were $150,000. sales for q3 were $200,000. this shows consistent growth. we expect q4 to reach $250,000.
            </p>
            
            <p style="font-family: Georgia; font-size: 18pt; color: red; text-align: left;">
                <i>CONCLUSION</i>
            </p>
            
            <p style="font-family: Verdana; font-size: 11pt;">
                in conclusion, things are going great. we should keep doing what we're doing. the end.
            </p>
        </div>
        
        <b>Your Task:</b> Reformat this into a professional business report. Create:
        <ol>
            <li>A proper title page with company name</li>
            <li>Consistent heading styles</li>
            <li>Professional font choices</li>
            <li>Appropriate alignment and spacing</li>
            <li>Page numbers</li>
            <li>Save as: Report_Formatted.docx</li>
        </ol>
    </div>
    
    <h4>Task 3: Create Custom Style Set (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create and save a complete style set for a specific purpose:</b>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>Option A: Academic Paper</b><br/>
                • Font: Times New Roman, 12pt<br/>
                • Double line spacing<br/>
                • 1-inch margins<br/>
                • Heading styles for chapters<br/>
                • Custom style for block quotes
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>Option B: Business Report</b><br/>
                • Font: Calibri, 11pt<br/>
                • 1.15 line spacing<br/>
                • Blue color scheme<br/>
                • Professional heading hierarchy<br/>
                • Custom styles for data points
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>Option C: Newsletter</b><br/>
                • Font: Georgia for headings, Arial for body<br/>
                • Columns layout<br/>
                • Colorful but professional<br/>
                • Custom styles for pull quotes<br/>
                • Image caption style
            </div>
        </div>
        
        <b>Requirements:</b>
        <ol>
            <li>Choose one option above</li>
            <li>Modify ALL built-in styles (Normal, Heading 1-3, etc.)</li>
            <li>Create at least 2 custom styles</li>
            <li>Save as a Style Set (Design tab → Style Sets → Save as New Style Set)</li>
            <li>Name it: "[YourName]_[Type]_Styles"</li>
            <li>Create a sample document using your style set</li>
        </ol>
    </div>
</div>

<h3>💡 Advanced Formatting Tips</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Pro-Level Formatting Techniques</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>🎨 Advanced Font Techniques</h5>
            <ul>
                <li><b>Ligatures:</b> Fancy letter combinations (fi, fl)</li>
                <li><b>Number spacing:</b> Proportional vs tabular</li>
                <li><b>OpenType features:</b> Stylistic sets, swashes</li>
                <li><b>Text effects:</b> Shadow, reflection, glow</li>
                <li><b>Advanced typography:</b> Kerning, tracking</li>
            </ul>
            
            <h5>🔗 Style Linking</h5>
            <ul>
                <li>Link styles for automatic updates</li>
                <li>Based on style creates next style</li>
                <li>Quick Style sets for different document types</li>
                <li>Import/export styles between documents</li>
            </ul>
        </div>
        <div>
            <h5>📐 Precision Formatting</h5>
            <ul>
                <li><b>Show formatting marks:</b> ¶ button (reveals spaces, tabs)</li>
                <li><b>Paragraph dialog box:</b> Fine-tune spacing</li>
                <li><b>Set exact measurements:</b> Not just "multiple" spacing</li>
                <li><b>Keep lines together:</b> Prevent awkward breaks</li>
                <li><b>Widow/orphan control:</b> Professional typesetting</li>
            </ul>
            
            <h5>🚀 Productivity Tips</h5>
            <ul>
                <li>Use keyboard shortcuts for styles: <kbd>Ctrl + Alt + 1</kbd> for Heading 1</li>
                <li>Create Quick Parts for frequently used formatted text</li>
                <li>Use AutoText for boilerplate content</li>
                <li>Set default paste options in Word Options</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>🎯 Accessibility Considerations</h5>
        <ul>
            <li><b>Color contrast:</b> Ensure text is readable</li>
            <li><b>Font size:</b> Minimum 11pt for body text</li>
            <li><b>Heading structure:</b> Use proper hierarchy for screen readers</li>
            <li><b>Alt text:</b> Add descriptions for images</li>
            <li><b>Simple fonts:</b> Avoid decorative fonts for body text</li>
            <li><b>Avoid color-only information:</b> "Click the red button" - also underline it</li>
        </ul>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Formatting & Styles Effectively</h4>
    <ul>
        <li><b>Show the Pain:</b> Demonstrate manual formatting on a long document, then show styles solution</li>
        <li><b>Interior Design Analogy:</b> Students understand "design templates" better than "style sets"</li>
        <li><b>Common Student Mistakes:</b>
            <ul>
                <li>Too many fonts (font salad)</li>
                <li>Inconsistent spacing</li>
                <li>Using Enter for spacing (use paragraph spacing instead)</li>
                <li>Not using styles because "it takes longer" (short-term vs long-term)</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Start with the "ugly" document transformation exercise</li>
                <li>Have students create their own style guide (ownership)</li>
                <li>Show real-world examples (resumes, business letters, reports)</li>
                <li>Emphasize: "Format once with styles, update everywhere automatically"</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Your resume gets 7 seconds - formatting matters!"</li>
                <li>"Businesses have brand guidelines - that's what styles are"</li>
                <li>"Academic papers have strict formatting requirements"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can apply and modify font formatting professionally</label><br/>
    <label><input type="checkbox"> Understands paragraph formatting options (alignment, spacing, indentation)</label><br/>
    <label><input type="checkbox"> Can use Format Painter and Clear Formatting effectively</label><br/>
    <label><input type="checkbox"> Understands the power of Styles over manual formatting</label><br/>
    <label><input type="checkbox"> Can create, modify, and apply Word Styles</label><br/>
    <label><input type="checkbox"> Knows how to create a style hierarchy (Heading 1, 2, 3, Normal)</label><br/>
    <label><input type="checkbox"> Can create custom styles and style sets</label><br/>
    <label><input type="checkbox"> Understands professional document formatting standards</label><br/>
    <label><input type="checkbox"> Can transform poorly formatted documents into professional ones</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://support.microsoft.com/en-us/office/video-format-text-947c4f6a-7c6d-4937-9c76-6d1c095d0b34">Microsoft Formatting Video Tutorial</a></li>
        <li><b>Style Guide Examples:</b> <a href="https://styleguide.mailchimp.com">Mailchimp Style Guide</a> (real-world example)</li>
        <li><b>Typography Guide:</b> <a href="https://practicaltypography.com">Butterick's Practical Typography</a></li>
        <li><b>Video:</b> "Word Styles Made Easy" by Learnit Training (YouTube)</li>
        <li><b>Practice:</b> Reformat a real document you have (school paper, work document) using styles</li>
        <li><b>Next Session:</b> Day 3-3 - Working with Tables & Media</li>
    </ul>
</div>
`
            },
            "3-3": {
                "icon": "fa-table",
                "title": "Working with Tables & Media",
                "html": `<h1>Week 3, Day 3: Working with Tables & Media</h1>
<p>Today, you'll master organizing data with tables and enhancing documents with images, shapes, and other media. Learn to create professional layouts that communicate effectively.</p>

<div class="analogy-box">
    <b>Analogy: Tables as Invisible Organizational Grids 📐</b><br/>
    Table = Building framework (invisible structure)<br/>
    Cells = Individual rooms (content containers)<br/>
    Rows & Columns = Hallways (organization)<br/>
    Borders = Walls (visible or invisible)<br/>
    Images = Decorations (enhance content)<br/>
    Text Wrapping = Furniture placement (flow around objects)
</div>

<h3>📊 Understanding Tables in Word</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Table Anatomy & Terminology</h4>
    
    <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <!-- Table Diagram -->
        <div style="text-align: center; margin-bottom: 20px;">
            <div style="display: inline-block; position: relative;">
                <!-- Table Grid -->
                <div style="display: grid; grid-template-columns: repeat(4, 80px); grid-template-rows: repeat(5, 40px); gap: 1px; background: #ddd;">
                    <!-- Header Row -->
                    <div style="background: #4A90E2; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">Header 1</div>
                    <div style="background: #4A90E2; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">Header 2</div>
                    <div style="background: #4A90E2; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">Header 3</div>
                    <div style="background: #4A90E2; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">Header 4</div>
                    
                    <!-- Data Cells -->
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: #e3f2fd; display: flex; align-items: center; justify-content: center;">Data</div>
                    
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                    <div style="background: white; display: flex; align-items: center; justify-content: center;">Data</div>
                </div>
                
                <!-- Labels -->
                <div style="position: absolute; top: -25px; left: 40px; font-size: 12px;">Columns (4)</div>
                <div style="position: absolute; top: 100px; left: -40px; transform: rotate(-90deg); font-size: 12px;">Rows (5)</div>
                <div style="position: absolute; top: 60px; left: 40px; background: #FF9800; color: white; padding: 2px 5px; border-radius: 3px; font-size: 10px;">Cell</div>
                <div style="position: absolute; top: 20px; left: 0; right: 0; text-align: center; background: rgba(74, 144, 226, 0.8); color: white; padding: 2px; font-size: 10px;">Header Row</div>
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px;">
            <div>
                <h5>📐 Table Components</h5>
                <table style="width: 100%;">
                    <tr><td><b>Cell:</b></td><td>Intersection of row & column</td></tr>
                    <tr><td><b>Row:</b></td><td>Horizontal group of cells</td></tr>
                    <tr><td><b>Column:</b></td><td>Vertical group of cells</td></tr>
                    <tr><td><b>Header Row:</b></td><td>First row (labels)</td></tr>
                    <tr><td><b>Borders:</b></td><td>Lines around cells</td></tr>
                    <tr><td><b>Shading:</b></td><td>Cell background color</td></tr>
                </table>
            </div>
            <div>
                <h5>🔧 Common Table Operations</h5>
                <table style="width: 100%;">
                    <tr><td><b>Merge Cells:</b></td><td>Combine multiple cells</td></tr>
                    <tr><td><b>Split Cells:</b></td><td>Divide cell into more</td></tr>
                    <tr><td><b>Insert:</b></td><td>Add rows/columns</td></tr>
                    <tr><td><b>Delete:</b></td><td>Remove rows/columns</td></tr>
                    <tr><td><b>AutoFit:</b></td><td>Adjust column width</td></tr>
                    <tr><td><b>Sort:</b></td><td>Arrange data</td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Table Creation & Manipulation</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Create Basic Tables (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Three Ways to Insert Tables:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
            <div style="text-align: center; padding: 15px; background: #f0f8ff; border-radius: 5px;">
                <div style="font-size: 24px;">📋</div>
                <b>Method 1: Grid Select</b><br/>
                <small>Insert → Table → Grid</small><br/>
                <small>Hover to select size</small><br/>
                <small>Fast for small tables</small>
            </div>
            <div style="text-align: center; padding: 15px; background: #fff3e0; border-radius: 5px;">
                <div style="font-size: 24px;">⌨️</div>
                <b>Method 2: Insert Table</b><br/>
                <small>Insert → Table → Insert Table</small><br/>
                <small>Specify exact dimensions</small><br/>
                <small>Set AutoFit options</small>
            </div>
            <div style="text-align: center; padding: 15px; background: #f1f8e9; border-radius: 5px;">
                <div style="font-size: 24px;">✏️</div>
                <b>Method 3: Draw Table</b><br/>
                <small>Insert → Table → Draw Table</small><br/>
                <small>Draw custom layout</small><br/>
                <small>For complex tables</small>
            </div>
        </div>
        
        <p><b>Practice Creating:</b></p>
        <ol>
            <li><b>Simple 4x4 Table:</b> Weekly schedule (Days × Time slots)</li>
            <li><b>Formatted Table:</b> Product catalog with images</li>
            <li><b>Complex Table:</b> Invoice with calculations</li>
            <li><b>Convert Text to Table:</b> Select text with tabs → Insert → Table → Convert Text to Table</li>
        </ol>
    </div>
    
    <h4>Exercise 2: Table Formatting & Design (30 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create and format a class schedule table:</b></p>
        
        <div style="border: 1px solid #ddd; padding: 15px; margin: 15px 0; min-height: 200px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr style="background: #4A90E2; color: white;">
                    <th style="padding: 10px; border: 1px solid #ddd;">Time</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Monday</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Tuesday</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Wednesday</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Thursday</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Friday</th>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd; background: #f0f8ff;">9:00-10:00</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Math</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">English</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Science</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">History</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Art</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd; background: #f0f8ff;">10:00-11:00</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Science</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Math</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">English</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Art</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">History</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd; background: #f0f8ff;">11:00-12:00</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Lunch</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Lunch</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Lunch</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Lunch</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Lunch</td>
                </tr>
            </table>
        </div>
        
        <p><b>Formatting Tasks:</b></p>
        <ol>
            <li><b>Apply Table Style:</b> Design tab → Table Styles → Select a style</li>
            <li><b>Modify Style:</b> Right-click style → Modify Table Style</li>
            <li><b>Cell Alignment:</b> Select cells → Layout tab → Alignment (9 options)</li>
            <li><b>Merge Cells:</b> Select multiple cells → Layout tab → Merge Cells</li>
            <li><b>Split Cells:</b> Select cell → Layout tab → Split Cells</li>
            <li><b>Borders:</b> Design tab → Borders → Custom borders</li>
            <li><b>Shading:</b> Design tab → Shading → Choose color</li>
        </ol>
    </div>
    
    <h4>Exercise 3: Advanced Table Features (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a product inventory table with advanced features:</b></p>
        
        <ol>
            <li><b>Create Table:</b> 5 columns (Product, Category, Price, Stock, Total Value)</li>
            <li><b>Add Formulas:</b>
                <ul>
                    <li>In Total Value column: =C2*D2 (Price × Stock)</li>
                    <li>Add total row: Design tab → check "Total Row"</li>
                    <li>In total row, select "Sum" for Total Value column</li>
                </ul>
            </li>
            <li><b>Sort Data:</b>
                <ul>
                    <li>Select table → Layout tab → Sort</li>
                    <li>Sort by Price descending</li>
                    <li>Then by Stock ascending</li>
                </ul>
            </li>
            <li><b>Convert to Text:</b>
                <ul>
                    <li>Select table → Layout tab → Convert to Text</li>
                    <li>Choose separator: Tabs</li>
                    <li>Now convert back to table</li>
                </ul>
            </li>
            <li><b>Repeat Header Row:</b>
                <ul>
                    <li>Add more rows so table spans 2 pages</li>
                    <li>Select header row → Layout tab → Repeat Header Rows</li>
                    <li>Scroll to page 2 - header appears!</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>🖼️ Working with Images & Graphics</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🎨 Inserting & Formatting Media</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Types of Media You Can Insert</h5>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="text-align: center; padding: 10px; background: #f0f8ff; border-radius: 5px;">
                <div style="font-size: 24px;">🖼️</div>
                <b>Pictures</b><br/>
                <small>From device or online</small><br/>
                <small>JPG, PNG, GIF, BMP</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #fff3e0; border-radius: 5px;">
                <div style="font-size: 24px;">⬛</div>
                <b>Shapes</b><br/>
                <small>Lines, arrows, boxes</small><br/>
                <small>Callouts, stars, banners</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f1f8e9; border-radius: 5px;">
                <div style="font-size: 24px;">📊</div>
                <b>Icons</b><br/>
                <small>Modern flat icons</small><br/>
                <small>Searchable library</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f3e5f5; border-radius: 5px;">
                <div style="font-size: 24px;">📈</div>
                <b>Charts</b><br/>
                <small>Data visualization</small><br/>
                <small>Bar, pie, line charts</small>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>📐 Text Wrapping Options</h5>
        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin: 15px 0;">
            <div style="text-align: center; padding: 10px; background: #f0f8ff; border-radius: 5px;">
                <b>In Line<br/>with Text</b><br/>
                <small>Treats as text character</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #fff3e0; border-radius: 5px;">
                <b>Square</b><br/>
                <small>Text wraps around box</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f1f8e9; border-radius: 5px;">
                <b>Tight</b><br/>
                <small>Wraps around image edges</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #f3e5f5; border-radius: 5px;">
                <b>Through</b><br/>
                <small>Text through transparent areas</small>
            </div>
            <div style="text-align: center; padding: 10px; background: #ffebee; border-radius: 5px;">
                <b>Top & Bottom</b><br/>
                <small>Text above and below</small>
            </div>
        </div>
        
        <div style="margin-top: 15px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
            <div>
                <b>🎯 Positioning</b>
                <ul>
                    <li><b>Bring Forward:</b> Move in front of other objects</li>
                    <li><b>Send Backward:</b> Move behind other objects</li>
                    <li><b>Bring to Front:</b> Top layer</li>
                    <li><b>Send to Back:</b> Bottom layer</li>
                    <li><b>Selection Pane:</b> View all objects</li>
                </ul>
            </div>
            <div>
                <b>✨ Image Formatting</b>
                <ul>
                    <li><b>Crop:</b> Remove unwanted parts</li>
                    <li><b>Remove Background:</b> Automatic background removal</li>
                    <li><b>Corrections:</b> Brightness, contrast</li>
                    <li><b>Color:</b> Recolor image</li>
                    <li><b>Artistic Effects:</b> Filters</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h3>🔧 Hands-On Lab: Media & Layout Practice</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Create a Product Brochure (45 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a 1-page brochure for a product or service:</b></p>
        
        <div style="border: 1px dashed #4A90E2; padding: 20px; margin: 15px 0; min-height: 400px;">
            <div style="text-align: center;">
                <h1 style="color: #4A90E2;">[Product Name]</h1>
                <p style="font-style: italic;">Your tagline or slogan here</p>
            </div>
            
            <div style="display: flex; gap: 20px; margin: 20px 0;">
                <div style="flex: 1; padding: 15px; background: #f0f8ff; border-radius: 8px;">
                    <h3>📋 Features</h3>
                    <ul>
                        <li>Feature 1 with description</li>
                        <li>Feature 2 with description</li>
                        <li>Feature 3 with description</li>
                    </ul>
                </div>
                <div style="flex: 1; padding: 15px; background: #fff3e0; border-radius: 8px;">
                    <h3>✅ Benefits</h3>
                    <ul>
                        <li>Benefit 1 explanation</li>
                        <li>Benefit 2 explanation</li>
                        <li>Benefit 3 explanation</li>
                    </ul>
                </div>
            </div>
            
            <div style="text-align: center; margin: 20px 0;">
                <div style="display: inline-block; padding: 20px; border: 2px solid #4A90E2; border-radius: 8px;">
                    <h2>Call to Action!</h2>
                    <p>Contact us or buy now</p>
                </div>
            </div>
        </div>
        
        <p><b>Requirements:</b></p>
        <ol>
            <li>Insert at least 2 images (pictures or icons)</li>
            <li>Use text wrapping (Square or Tight)</li>
            <li>Add shapes for visual interest</li>
            <li>Create a table for specifications</li>
            <li>Use different text boxes for layout</li>
            <li>Apply consistent formatting</li>
            <li>Save as: Brochure_YourName.docx</li>
        </ol>
    </div>
    
    <h4>Exercise 2: SmartArt & Chart Creation (35 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create visual representations of data:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>📈 Create a Chart</b>
                <ol>
                    <li>Insert tab → Chart</li>
                    <li>Choose: Column chart</li>
                    <li>Excel opens with sample data</li>
                    <li>Replace with:
                        <table style="width: 100%;">
                            <tr><td>Month</td><td>Sales</td></tr>
                            <tr><td>Jan</td><td>10000</td></tr>
                            <tr><td>Feb</td><td>15000</td></tr>
                            <tr><td>Mar</td><td>18000</td></tr>
                            <tr><td>Apr</td><td>22000</td></tr>
                        </table>
                    </li>
                    <li>Close Excel - chart updates</li>
                    <li>Format chart: Change colors, add title</li>
                </ol>
            </div>
            <div>
                <b>🔄 Create SmartArt</b>
                <ol>
                    <li>Insert tab → SmartArt</li>
                    <li>Choose: Hierarchy → Organization Chart</li>
                    <li>Add positions:
                        <ul>
                            <li>CEO</li>
                            <li>Managers (3)</li>
                            <li>Team Members (2 under each)</li>
                        </ul>
                    </li>
                    <li>Change colors: Design tab → Change Colors</li>
                    <li>Change style: 3D effects</li>
                    <li>Convert to shapes if needed</li>
                </ol>
            </div>
        </div>
    </div>
    
    <h4>Exercise 3: Advanced Layout Techniques (40 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Master complex document layouts:</b></p>
        
        <ol>
            <li><b>Create Text Boxes:</b>
                <ul>
                    <li>Insert tab → Text Box → Draw Text Box</li>
                    <li>Create 3 text boxes</li>
                    <li>Link them: Select first → Format tab → Create Link → Click second box</li>
                    <li>Type text - it flows between boxes!</li>
                </ul>
            </li>
            <li><b>Use WordArt:</b>
                <ul>
                    <li>Insert tab → WordArt</li>
                    <li>Create fancy title</li>
                    <li>Modify: Text effects → Transform → Choose path</li>
                    <li>Add shadow or glow</li>
                </ul>
            </li>
            <li><b>Create Drop Cap:</b>
                <ul>
                    <li>Insert tab → Drop Cap</li>
                    <li>Choose Dropped or In Margin</li>
                    <li>Customize: Options → Lines to drop: 3</li>
                </ul>
            </li>
            <li><b>Add Captions:</b>
                <ul>
                    <li>Right-click image → Insert Caption</li>
                    <li>Type: "Figure 1: Product Image"</li>
                    <li>Insert tab → Captions → Insert Table of Figures</li>
                </ul>
            </li>
            <li><b>Group Objects:</b>
                <ul>
                    <li>Hold <kbd>Ctrl</kbd> and select multiple objects</li>
                    <li>Right-click → Group → Group</li>
                    <li>Now move/resize as one unit</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Create a Restaurant Menu (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Design a professional restaurant menu using tables and formatting:</b>
        
        <div style="border: 1px solid #ddd; padding: 20px; margin: 15px 0; min-height: 400px;">
            <div style="text-align: center; margin-bottom: 30px;">
                <h1 style="font-family: 'Georgia', serif;">Bistro Elegante</h1>
                <p style="font-style: italic;">Fine Dining Experience</p>
            </div>
            
            <h2>Appetizers</h2>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <td style="padding: 8px; border-bottom: 1px dashed #ddd;">Bruschetta</td>
                    <td style="padding: 8px; border-bottom: 1px dashed #ddd; text-align: right;">$8.99</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border-bottom: 1px dashed #ddd; font-size: 0.9em; color: #666;">Fresh tomatoes, basil, garlic on toasted bread</td>
                    <td style="padding: 8px; border-bottom: 1px dashed #ddd;"></td>
                </tr>
                <!-- More items would go here -->
            </table>
            
            <h2>Main Courses</h2>
            <!-- Table for main courses -->
            
            <h2>Desserts</h2>
            <!-- Table for desserts -->
            
            <div style="margin-top: 30px; text-align: center; font-style: italic;">
                <p>All prices include tax. 18% gratuity added for parties of 6 or more.</p>
            </div>
        </div>
        
        <b>Requirements:</b>
        <ul>
            <li>Use tables for menu items and prices</li>
            <li>Include at least 3 categories (Appetizers, Main Courses, Desserts)</li>
            <li>5+ items per category</li>
            <li>Add descriptions for items</li>
            <li>Insert food-related images or icons</li>
            <li>Use professional formatting</li>
            <li>Add restaurant contact info</li>
            <li>Save as: Restaurant_Menu.docx</li>
        </ul>
    </div>
    
    <h4>Task 2: Company Organizational Chart (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create an organizational chart for a fictional company:</b>
        
        <div style="border: 1px dashed #4A90E2; padding: 15px; margin: 15px 0; min-height: 300px;">
            <div style="text-align: center;">
                <h2>[Company Name] Organizational Structure</h2>
                <p>As of [Date]</p>
            </div>
            
            <div style="text-align: center; margin: 20px 0;">
                <div style="display: inline-block; padding: 15px; background: #4A90E2; color: white; border-radius: 5px;">
                    <b>CEO</b><br/>
                    <small>Name Here</small>
                </div>
            </div>
            
            <!-- Structure would continue here -->
        </div>
        
        <b>Requirements:</b>
        <ol>
            <li>Use SmartArt for the chart</li>
            <li>Include at least 3 levels of hierarchy</li>
            <li>Minimum 10 positions total</li>
            <li>Add photos or icons for key positions</li>
            <li>Include name, title, department for each</li>
            <li>Apply professional color scheme</li>
            <li>Add explanatory notes</li>
            <li>Save as: Org_Chart.docx</li>
        </ol>
    </div>
    
    <h4>Task 3: Product Comparison Table (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a comparison table for 3 similar products:</b>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <tr style="background: #4A90E2; color: white;">
                    <th style="padding: 12px; border: 1px solid #ddd;">Feature</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Product A</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Product B</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Product C</th>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd; background: #f5f5f5;">Price</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">$99</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">$149</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">$199</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd; background: #f5f5f5;">Warranty</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">1 year</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">2 years</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">3 years</td>
                </tr>
                <!-- More rows would go here -->
            </table>
        </div>
        
        <b>Requirements:</b>
        <ul>
            <li>Compare at least 3 products/services</li>
            <li>Include at least 8 comparison features</li>
            <li>Use conditional formatting (color scales for ratings)</li>
            <li>Add checkmarks (✓) and X marks (✗) for features</li>
            <li>Include images of each product</li>
            <li>Add a "Recommendation" section</li>
            <li>Create a summary table with pros/cons</li>
            <li>Save as: Product_Comparison.docx</li>
        </ul>
    </div>
</div>

<h3>💡 Pro Tips for Tables & Media</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Advanced Techniques & Best Practices</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>📊 Table Best Practices</h5>
            <ul>
                <li><b>Keep tables simple:</b> Avoid nesting tables within tables</li>
                <li><b>Use header rows:</b> Always identify what each column contains</li>
                <li><b>Align numbers right:</b> Easier to compare and add</li>
                <li><b>Use zebra striping:</b> Alternate row colors for readability</li>
                <li><b>Break large tables:</b> If table spans multiple pages, repeat header</li>
                <li><b>Add captions:</b> Always label your tables</li>
                <li><b>Consider accessibility:</b> Add alt text for screen readers</li>
            </ul>
            
            <h5>🔄 Table Navigation Shortcuts</h5>
            <ul>
                <li><kbd>Tab</kbd>: Move to next cell</li>
                <li><kbd>Shift + Tab</kbd>: Move to previous cell</li>
                <li><kbd>Alt + Shift + ↑/↓</kbd>: Move row up/down</li>
                <li><kbd>Ctrl + Tab</kbd>: Insert tab character in cell</li>
                <li><kbd>F4</kbd>: Repeat last table action</li>
            </ul>
        </div>
        <div>
            <h5>🖼️ Image Best Practices</h5>
            <ul>
                <li><b>Compress images:</b> Format tab → Compress Pictures → reduce file size</li>
                <li><b>Use high-res sparingly:</b> Large images increase document size</li>
                <li><b>Add alt text:</b> Format tab → Alt Text → describe for accessibility</li>
                <li><b>Maintain aspect ratio:</b> Hold Shift while resizing</li>
                <li><b>Use inline for small images:</b> Square/Tight for larger ones</li>
                <li><b>Consider copyright:</b> Use royalty-free or licensed images</li>
                <li><b>Test print:</b> Colors may look different printed</li>
            </ul>
            
            <h5>🎨 Design Principles</h5>
            <ul>
                <li><b>Consistency:</b> Use same style for similar elements</li>
                <li><b>White space:</b> Don't crowd elements</li>
                <li><b>Alignment:</b> Use grids and guides</li>
                <li><b>Contrast:</b> Ensure text is readable over backgrounds</li>
                <li><b>Hierarchy:</b> More important = larger/bolder</li>
                <li><b>Simplicity:</b> Less is often more</li>
            </ul>
        </div>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Tables & Media Effectively</h4>
    <ul>
        <li><b>Start with Real Needs:</b> "How would you present this data clearly?"</li>
        <li><b>Building Analogy:</b> Tables as invisible grids/structure</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Merging/splitting cells incorrectly</li>
                <li>Text wrapping confusion</li>
                <li>Table vs text box vs shape choice</li>
                <li>Image sizing and placement</li>
                <li>Document becoming too large with images</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Show "bad" examples first (crowded tables, poorly placed images)</li>
                <li>Have students create real-world documents (menus, brochures)</li>
                <li>Emphasize: "Tables for data, text boxes for layout"</li>
                <li>Show the Selection Pane for managing many objects</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Restaurant menus use tables for prices"</li>
                <li>"Company reports need charts and tables"</li>
                <li>"Brochures combine text, images, and layout"</li>
                <li>"Accessibility matters - add alt text to images"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can create and format tables for data presentation</label><br/>
    <label><input type="checkbox"> Understands table components (cells, rows, columns, headers)</label><br/>
    <label><input type="checkbox"> Can merge, split, and align table cells</label><br/>
    <label><input type="checkbox"> Knows how to insert and format images in documents</label><br/>
    <label><input type="checkbox"> Understands text wrapping options and when to use each</label><br/>
    <label><input type="checkbox"> Can create charts and SmartArt graphics</label><br/>
    <label><input type="checkbox"> Knows how to use text boxes for complex layouts</label><br/>
    <label><input type="checkbox"> Can group and layer objects effectively</label><br/>
    <label><input type="checkbox"> Understands professional design principles for documents</label><br/>
    <label><input type="checkbox"> Can create real-world documents (menus, brochures, charts)</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://support.microsoft.com/en-us/office/insert-a-table-3d7c8c5a-3c5b-4b8a-9b8c-5a5f5f5f5f5f">Microsoft Tables Tutorial</a></li>
        <li><b>Free Images:</b> <a href="https://unsplash.com">Unsplash.com</a> (royalty-free photos)</li>
        <li><b>Icons:</b> <a href="https://thenounproject.com">Noun Project</a> (free icons with attribution)</li>
        <li><b>Video:</b> "Word Tables Made Easy" by Office Tutorials (YouTube)</li>
        <li><b>Practice:</b> Redesign a real document you use (club flyer, meeting agenda, etc.)</li>
        <li><b>Next Session:</b> Day 3-4 - Page Layouts & Headers/Footers</li>
    </ul>
</div>
`
            },
            "3-4": {
                "icon": "fa-file-alt",
                "title": "Page Layouts & Headers/Footers",
                "html": `<h1>Week 3, Day 4: Page Layouts & Headers/Footers</h1>
<p>Today, you'll master page setup, learn to create professional headers and footers, and control how your documents look when printed. These are essential skills for any formal document.</p>

<div class="analogy-box">
    <b>Analogy: Page Layout as Book Publishing 📚</b><br/>
    Margins = Page borders (white space)<br/>
    Orientation = Book direction (portrait/landscape)<br/>
    Headers/Footers = Running titles (top/bottom)<br/>
    Page Numbers = Chapter numbers<br/>
    Sections = Chapter breaks (different formatting)<br/>
    Watermarks = Security features (confidential)
</div>

<h3>📐 Page Setup Fundamentals</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Controlling Document Layout</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <div style="position: relative; border: 2px solid #4A90E2; padding: 40px; min-height: 300px; margin: 20px 0;">
            <!-- Page representation -->
            <div style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; border: 1px dashed #ddd;">
                <!-- Margin labels -->
                <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); background: #FF9800; color: white; padding: 2px 10px; border-radius: 0 0 5px 5px; font-size: 12px;">
                    Top Margin (1")
                </div>
                <div style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); background: #FF9800; color: white; padding: 2px 10px; border-radius: 5px 5px 0 0; font-size: 12px;">
                    Bottom Margin (1")
                </div>
                <div style="position: absolute; left: 0; top: 50%; transform: translateY(-50%) rotate(-90deg); background: #4A90E2; color: white; padding: 2px 10px; border-radius: 0 0 5px 5px; font-size: 12px;">
                    Left Margin (1")
                </div>
                <div style="position: absolute; right: 0; top: 50%; transform: translateY(-50%) rotate(90deg); background: #4A90E2; color: white; padding: 2px 10px; border-radius: 0 0 5px 5px; font-size: 12px;">
                    Right Margin (1")
                </div>
                
                <!-- Header area -->
                <div style="position: absolute; top: 20px; left: 20px; right: 20px; height: 40px; background: #e3f2fd; border-bottom: 1px solid #4A90E2; display: flex; align-items: center; padding: 0 10px;">
                    <span style="font-weight: bold;">Document Title - Header Area</span>
                </div>
                
                <!-- Footer area -->
                <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; height: 40px; background: #fff3e0; border-top: 1px solid #FF9800; display: flex; align-items: center; justify-content: space-between; padding: 0 10px;">
                    <span>Company Name</span>
                    <span>Page 1</span>
                    <span>Date</span>
                </div>
                
                <!-- Content area -->
                <div style="position: absolute; top: 70px; bottom: 70px; left: 20px; right: 20px; padding: 20px; background: #f9f9f9;">
                    <p style="margin: 0;">Main document content goes here. This is where the body text appears, formatted according to your styles and layout choices.</p>
                </div>
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 20px;">
            <div style="background: #f0f8ff; padding: 10px; border-radius: 5px;">
                <b>📏 Margins</b><br/>
                Space between content and page edge<br/>
                <b>Standard:</b> 1 inch all sides<br/>
                <b>Narrow:</b> 0.5 inch<br/>
                <b>Moderate:</b> 1" top/bottom, 0.75" sides<br/>
                <b>Custom:</b> Set your own
            </div>
            <div style="background: #fff3e0; padding: 10px; border-radius: 5px;">
                <b>🔄 Orientation</b><br/>
                <b>Portrait:</b> Tall (8.5" × 11")<br/>
                Most documents, letters<br/>
                <b>Landscape:</b> Wide (11" × 8.5")<br/>
                Tables, charts, wide content
            </div>
            <div style="background: #f1f8e9; padding: 10px; border-radius: 5px;">
                <b>📄 Size</b><br/>
                <b>Letter:</b> 8.5" × 11" (US)<br/>
                <b>A4:</b> 8.27" × 11.69" (Int'l)<br/>
                <b>Legal:</b> 8.5" × 14"<br/>
                <b>Tabloid:</b> 11" × 17"<br/>
                <b>Custom:</b> Any size
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Page Setup Practice</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Explore Margin Presets (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Try different margin settings:</b></p>
        
        <ol>
            <li><b>Access Page Setup:</b>
                <ul>
                    <li>Go to <b>Layout</b> tab → <b>Margins</b></li>
                    <li>Or double-click ruler</li>
                </ul>
            </li>
            <li><b>Try Presets:</b>
                <table style="width: 100%; margin: 10px 0;">
                    <tr><th>Preset</th><th>Top/Bottom</th><th>Left/Right</th><th>Use For</th></tr>
                    <tr><td>Normal</td><td>1"</td><td>1"</td><td>Most documents</td></tr>
                    <tr><td>Narrow</td><td>0.5"</td><td>0.5"</td><td>Saving paper, drafts</td></tr>
                    <tr><td>Moderate</td><td>1"</td><td>0.75"</td><td>Business documents</td></tr>
                    <tr><td>Wide</td><td>1"</td><td>2"</td><td>Documents for binding</td></tr>
                    <tr><td>Mirrored</td><td>1"</td><td>1.25"/1"</td><td>Books, double-sided</td></tr>
                </table>
            </li>
            <li><b>Custom Margins:</b>
                <ul>
                    <li>Click <b>Custom Margins...</b></li>
                    <li>Set: Top: 1.5", Bottom: 1", Left: 1.25", Right: 1.25"</li>
                    <li>Click "Set As Default" if you want this for all new docs</li>
                </ul>
            </li>
            <li><b>Gutter:</b>
                <ul>
                    <li>Extra space for binding</li>
                    <li>Set gutter: 0.5"</li>
                    <li>Choose gutter position: Left or Top</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 2: Orientation & Size Changes (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a document with mixed orientation:</b></p>
        
        <ol>
            <li><b>Create Cover Page (Portrait):</b>
                <ul>
                    <li>Type a title and your name</li>
                    <li>Set orientation: Portrait</li>
                    <li>Margins: Normal</li>
                </ul>
            </li>
            <li><b>Insert Page Break:</b>
                <ul>
                    <li>Press <kbd>Ctrl + Enter</kbd></li>
                    <li>Or: Layout tab → Breaks → Page</li>
                </ul>
            </li>
            <li><b>Create Data Page (Landscape):</b>
                <ul>
                    <li>Create a wide table with 8 columns</li>
                    <li>Select this page only</li>
                    <li>Layout tab → Orientation → Landscape</li>
                    <li>Notice only this page changes!</li>
                </ul>
            </li>
            <li><b>Change Paper Size:</b>
                <ul>
                    <li>Layout tab → Size</li>
                    <li>Try: Legal (8.5" × 14")</li>
                    <li>Try: A4 (8.27" × 11.69")</li>
                    <li>Return to Letter (8.5" × 11")</li>
                </ul>
            </li>
            <li><b>View Facing Pages:</b>
                <ul>
                    <li>File → Print</li>
                    <li>Settings: "Print on Both Sides"</li>
                    <li>View how pages would look printed</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 3: Columns & Line Numbers (15 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create newsletter-style layouts:</b></p>
        
        <ol>
            <li><b>Apply Columns:</b>
                <ul>
                    <li>Type several paragraphs of text</li>
                    <li>Select the text</li>
                    <li>Layout tab → Columns → Two</li>
                    <li>Text flows into two columns!</li>
                    <li>Try: Three, Left, Right</li>
                </ul>
            </li>
            <li><b>Column Breaks:</b>
                <ul>
                    <li>Place cursor where you want new column to start</li>
                    <li>Layout tab → Breaks → Column</li>
                    <li>Text moves to next column</li>
                </ul>
            </li>
            <li><b>Line Numbers:</b>
                <ul>
                    <li>Layout tab → Line Numbers</li>
                    <li>Choose: Continuous</li>
                    <li>Useful for legal documents, scripts</li>
                    <li>Remove: Line Numbers → None</li>
                </ul>
            </li>
            <li><b>Hyphenation:</b>
                <ul>
                    <li>Layout tab → Hyphenation → Automatic</li>
                    <li>Reduces ragged right edges</li>
                    <li>Manual: Control exactly where words break</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>📄 Headers, Footers & Page Numbers</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🎯 Professional Document Elements</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Understanding Headers & Footers</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>📝 Headers (Top of Page)</b>
                <ul>
                    <li><b>Document title</b></li>
                    <li><b>Chapter/section name</b></li>
                    <li><b>Author name</b></li>
                    <li><b>Company logo</b></li>
                    <li><b>Date</b></li>
                    <li><b>Confidential notices</b></li>
                </ul>
                <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Example Header:</b><br/>
                    <div style="border-bottom: 1px solid #4A90E2; padding-bottom: 5px;">
                        <b>Quarterly Financial Report</b> | Confidential | Page 1
                    </div>
                </div>
            </div>
            <div>
                <b>📝 Footers (Bottom of Page)</b>
                <ul>
                    <li><b>Page numbers</b></li>
                    <li><b>Total pages</b></li>
                    <li><b>File path/name</b></li>
                    <li><b>Copyright information</b></li>
                    <li><b>Contact information</b></li>
                    <li><b>Revision date</b></li>
                </ul>
                <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Example Footer:</b><br/>
                    <div style="border-top: 1px solid #FF9800; padding-top: 5px; display: flex; justify-content: space-between;">
                        <span>© 2024 Company Name</span>
                        <span>Page 1 of 10</span>
                        <span>Revised: 01/15/2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Page Number Formats</h5>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="text-align: center; padding: 10px; background: #f0f8ff; border-radius: 5px;">
                <b>Bottom of Page</b><br/>
                Plain Number 1<br/>
                Plain Number 2<br/>
                Plain Number 3
            </div>
            <div style="text-align: center; padding: 10px; background: #fff3e0; border-radius: 5px;">
                <b>Top of Page</b><br/>
                Plain Number 1<br/>
                Accent Bar<br/>
                Bold Numbers
            </div>
            <div style="text-align: center; padding: 10px; background: #f1f8e9; border-radius: 5px;">
                <b>Page Margins</b><br/>
                Left-aligned<br/>
                Centered<br/>
                Right-aligned
            </div>
            <div style="text-align: center; padding: 10px; background: #f3e5f5; border-radius: 5px;">
                <b>Current Position</b><br/>
                Plain Number<br/>
                Accent Bar<br/>
                Circle
            </div>
        </div>
    </div>
</div>

<h3>🔧 Hands-On Lab: Headers & Footers Practice</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Create Professional Headers/Footers (30 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Add headers and footers to a multi-page document:</b></p>
        
        <ol>
            <li><b>Insert Header:</b>
                <ul>
                    <li>Insert tab → Header → Blank</li>
                    <li>Type: "Business Plan"</li>
                    <li>Insert tab → Date & Time → Choose format</li>
                    <li>Right-align: Insert tab → Quick Parts → Document Property → Author</li>
                </ul>
            </li>
            <li><b>Insert Footer with Page Numbers:</b>
                <ul>
                    <li>Insert tab → Footer → Blank</li>
                    <li>Insert tab → Page Number → Bottom of Page → Plain Number 2</li>
                    <li>Before page number, type: "Page "</li>
                    <li>After page number, press Space, then type: "of "</li>
                    <li>Insert tab → Quick Parts → Field → NumPages</li>
                    <li>Center-align the entire footer</li>
                </ul>
            </li>
            <li><b>Different First Page:</b>
                <ul>
                    <li>Double-click header</li>
                    <li>Design tab → check "Different First Page"</li>
                    <li>First page header disappears!</li>
                    <li>Create special first page header (e.g., document title only)</li>
                </ul>
            </li>
            <li><b>Different Odd & Even Pages:</b>
                <ul>
                    <li>Design tab → check "Different Odd & Even Pages"</li>
                    <li>Odd pages: Right-align page numbers</li>
                    <li>Even pages: Left-align page numbers</li>
                    <li>(Like a book)</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 2: Sections & Page Numbering (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a document with multiple sections:</b></p>
        
        <ol>
            <li><b>Create Sections:</b>
                <ul>
                    <li>Type "Cover Page" → Format as Title</li>
                    <li>Layout tab → Breaks → Next Page (section break)</li>
                    <li>Type "Table of Contents" → Heading 1</li>
                    <li>Add another Next Page section break</li>
                    <li>Type "Chapter 1" → Heading 1</li>
                </ul>
            </li>
            <li><b>Different Headers per Section:</b>
                <ul>
                    <li>Go to page 2 (Table of Contents)</li>
                    <li>Double-click header area</li>
                    <li>Design tab → uncheck "Link to Previous"</li>
                    <li>Change header to: "Table of Contents"</li>
                    <li>Go to page 3 → uncheck "Link to Previous"</li>
                    <li>Change header to: "Chapter 1"</li>
                </ul>
            </li>
            <li><b>Restart Page Numbering:</b>
                <ul>
                    <li>Go to page 3 header/footer</li>
                    <li>Insert tab → Page Number → Format Page Numbers</li>
                    <li>Choose: Start at: 1</li>
                    <li>Now Chapter 1 starts at page 1</li>
                </ul>
            </li>
            <li><b>Remove Section Breaks:</b>
                <ul>
                    <li>Home tab → Show/Hide ¶ (to see breaks)</li>
                    <li>Select a section break line</li>
                    <li>Press Delete</li>
                    <li>Sections merge</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 3: Advanced Header/Footer Elements (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Add sophisticated elements to headers/footers:</b></p>
        
        <ol>
            <li><b>Insert Logo:</b>
                <ul>
                    <li>Double-click header</li>
                    <li>Insert tab → Pictures → choose a logo</li>
                    <li>Resize to appropriate size</li>
                    <li>Position left or right</li>
                </ul>
            </li>
            <li><b>Add Watermark:</b>
                <ul>
                    <li>Design tab → Watermark</li>
                    <li>Choose: Confidential (horizontal)</li>
                    <li>Custom: Text: "DRAFT" → Color: Light gray</li>
                    <li>Remove: Watermark → Remove Watermark</li>
                </ul>
            </li>
            <li><b>Page Borders:</b>
                <ul>
                    <li>Design tab → Page Borders</li>
                    <li>Choose: Box style</li>
                    <li>Width: 2¼ pt</li>
                    <li>Art: Choose a decorative border</li>
                    <li>Apply to: This section</li>
                </ul>
            </li>
            <li><b>Background Color:</b>
                <ul>
                    <li>Design tab → Page Color</li>
                    <li>Choose light color (e.g., ivory)</li>
                    <li>For printing: Consider ink usage</li>
                </ul>
            </li>
            <li><b>AutoText in Headers:</b>
                <ul>
                    <li>In header, type document title</li>
                    <li>Select it</li>
                    <li>Insert tab → Quick Parts → AutoText → Save Selection to AutoText Gallery</li>
                    <li>Name it: "MyDocTitle"</li>
                    <li>Now reuse in other documents</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>📋 Daily Assignment: Create a Professional Report</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Complete Business Report (90 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a 5-page professional business report with all these elements:</b>
        
        <div style="border: 1px solid #ddd; padding: 20px; margin: 15px 0; min-height: 500px;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h1>Quarterly Business Report</h1>
                <h2>Q1 2024</h2>
                <p>Prepared by: [Your Name]</p>
                <p>Date: [Today's Date]</p>
            </div>
            
            <div style="page-break-before: always;">
                <h1>Table of Contents</h1>
                <!-- Auto-generated TOC would go here -->
            </div>
            
            <!-- More pages would follow -->
        </div>
        
        <b>Required Elements:</b>
        <ol>
            <li><b>Cover Page:</b>
                <ul>
                    <li>Title, subtitle, author, date</li>
                    <li>No header/footer on this page</li>
                    <li>Centered vertically and horizontally</li>
                </ul>
            </li>
            <li><b>Table of Contents Page:</b>
                <ul>
                    <li>Auto-generated (References tab → Table of Contents)</li>
                    <li>Different header: "Table of Contents"</li>
                    <li>Roman numeral page numbering (i, ii, iii)</li>
                </ul>
            </li>
            <li><b>3 Content Pages:</b>
                <ul>
                    <li>Different headers for each chapter</li>
                    <li>Arabic page numbering starting at 1</li>
                    <li>Footers with company name and page X of Y</li>
                    <li>At least one landscape page for a wide table</li>
                    <li>Different margins for different sections</li>
                </ul>
            </li>
            <li><b>Formatting Requirements:</b>
                <ul>
                    <li>Use section breaks between major parts</li>
                    <li>Apply styles consistently</li>
                    <li>Include at least one table and one chart</li>
                    <li>Add a watermark "CONFIDENTIAL"</li>
                    <li>Include page borders on content pages</li>
                </ul>
            </li>
            <li><b>Save as:</b> Professional_Report_YourName.docx</li>
        </ol>
    </div>
    
    <h4>Task 2: Print Preparation Checklist (30 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Prepare your document for printing:</b>
        
        <ol>
            <li><b>Print Preview:</b>
                <ul>
                    <li>File → Print</li>
                    <li>Check all pages look correct</li>
                    <li>Note any layout issues</li>
                </ul>
            </li>
            <li><b>Print Settings:</b>
                <table style="width: 100%; margin: 10px 0;">
                    <tr><th>Setting</th><th>Your Choice</th><th>Why</th></tr>
                    <tr><td>Copies</td><td>_______</td><td>_______</td></tr>
                    <tr><td>Printer</td><td>_______</td><td>_______</td></tr>
                    <tr><td>Pages</td><td>_______</td><td>_______</td></tr>
                    <tr><td>1-sided/2-sided</td><td>_______</td><td>_______</td></tr>
                    <tr><td>Collated</td><td>✅ / ❌</td><td>_______</td></tr>
                    <tr><td>Orientation</td><td>_______</td><td>_______</td></tr>
                    <tr><td>Paper size</td><td>_______</td><td>_______</td></tr>
                    <tr><td>Margins</td><td>_______</td><td>_______</td></tr>
                </table>
            </li>
            <li><b>Print Specific Elements:</b>
                <ul>
                    <li>Print only page 3: ______</li>
                    <li>Print pages 1-3: ______</li>
                    <li>Print even pages only: ______</li>
                    <li>Print multiple pages per sheet: ______</li>
                </ul>
            </li>
            <li><b>Export to PDF:</b>
                <ul>
                    <li>File → Export → Create PDF/XPS</li>
                    <li>Options: Include non-printing information</li>
                    <li>Compare file sizes: .docx: ______ KB, .pdf: ______ KB</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Task 3: Document Template Creation (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a reusable document template:</b>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Choose Template Type:</b><br/>
                <select style="width: 100%; padding: 8px; margin: 10px 0;">
                    <option>Business Letter</option>
                    <option>Meeting Minutes</option>
                    <option>Project Proposal</option>
                    <option>Weekly Report</option>
                    <option>Invoice</option>
                    <option>Resume</option>
                </select>
            </div>
            <div>
                <b>Template Features:</b>
                <ul>
                    <li>✅ Pre-formatted headers/footers</li>
                    <li>✅ Style set defined</li>
                    <li>✅ Placeholder text</li>
                    <li>✅ Company branding</li>
                    <li>✅ Auto-updating fields</li>
                </ul>
            </div>
        </div>
        
        <b>Steps to Create Template:</b>
        <ol>
            <li>Create document with all formatting but no specific content</li>
            <li>Use placeholder text like [Company Name], [Date], [Address]</li>
            <li>Insert AutoText fields for dynamic content</li>
            <li>Set up all styles (Heading 1-3, Normal, etc.)</li>
            <li>Configure headers/footers with placeholders</li>
            <li>File → Save As → Choose "Word Template (*.dotx)"</li>
            <li>Save to: C:\\Users\\[YourName]\\Documents\\Custom Office Templates</li>
            <li>Test: New → Personal → Your template appears!</li>
        </ol>
        
        <b>Deliverable:</b> YourName_TemplateName.dotx and a sample document created from it.
    </div>
</div>

<h3>💡 Advanced Page Layout Techniques</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Professional Publishing Features</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>📚 Book Formatting</h5>
            <ul>
                <li><b>Mirrored Margins:</b> Different inside/outside margins</li>
                <li><b>Gutter:</b> Extra space for binding</li>
                <li><b>Facing Pages:</b> View two pages side-by-side</li>
                <li><b>Section Start:</b> Right page, left page, continuous</li>
                <li><b>Running Heads:</b> Chapter titles in headers</li>
                <li><b>Folios:</b> Page numbers with chapter numbers</li>
            </ul>
            
            <h5>🔢 Advanced Numbering</h5>
            <ul>
                <li><b>Chapter Page Numbers:</b> 1-1, 1-2, 2-1, etc.</li>
                <li><b>Restart Numbering:</b> After each section</li>
                <li><b>Include Chapter Number:</b> Format page numbers</li>
                <li><b>Different Formats:</b> Roman, Arabic, letters</li>
            </ul>
        </div>
        <div>
            <h5>🎨 Design Elements</h5>
            <ul>
                <li><b>Bleeds:</b> Color extending beyond page edge</li>
                <li><b>Crop Marks:</b> Show where to trim</li>
                <li><b>Registration Marks:</b> For color alignment</li>
                <li><b>Color Separation:</b> Prepare for professional printing</li>
                <li><b>Transparency:</b> Effects that may not print correctly</li>
            </ul>
            
            <h5>📑 Document Organization</h5>
            <ul>
                <li><b>Master Documents:</b> Combine multiple files</li>
                <li><b>Subdocuments:</b> Work on chapters separately</li>
                <li><b>Cross-references:</b> Link to headings, figures</li>
                <li><b>Index:</b> Auto-generated subject index</li>
                <li><b>Table of Authorities:</b> For legal documents</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>🔍 Print Troubleshooting Checklist</h5>
        <ul>
            <li><b>Margins too small?</b> Printer may cut off edges</li>
            <li><b>Colors not printing?</b> May be using non-printable colors</li>
            <li><b>Fonts missing?</b> Embed fonts or use standard ones</li>
            <li><b>Images blurry?</b> Use higher resolution (300 DPI for print)</li>
            <li><b>Background not printing?</b> Check print options</li>
            <li><b>Double-sided alignment off?</b> Adjust gutter margins</li>
        </ul>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Page Layout & Headers/Footers</h4>
    <ul>
        <li><b>Book Analogy:</b> Students understand chapters, page numbers, headers</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Understanding section breaks vs page breaks</li>
                <li>Different first page vs different odd/even</li>
                <li>Restarting page numbering</li>
                <li>Linking/unlinking headers between sections</li>
                <li>Print setup and preview</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Start with simple document, then add complexity</li>
                <li>Show the "before and after" of section breaks</li>
                <li>Have students create a real report (resume, business plan)</li>
                <li>Emphasize: "Sections allow different formatting in same document"</li>
                <li>Show how templates save time on recurring documents</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Your resume needs proper margins and headers"</li>
                <li>"Business reports have different first pages"</li>
                <li>"Books use different odd/even headers"</li>
                <li>"Theses require specific page numbering"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can set up proper page margins, orientation, and size</label><br/>
    <label><input type="checkbox"> Understands the difference between page breaks and section breaks</label><br/>
    <label><input type="checkbox"> Can create and customize headers and footers</label><br/>
    <label><input type="checkbox"> Knows how to insert and format page numbers</label><br/>
    <label><input type="checkbox"> Can create different headers/footers for first page, odd/even pages</label><br/>
    <label><input type="checkbox"> Understands how to use sections for different formatting</label><br/>
    <label><input type="checkbox"> Can restart page numbering within a document</label><br/>
    <label><input type="checkbox"> Knows how to add watermarks, page borders, and backgrounds</label><br/>
    <label><input type="checkbox"> Can prepare documents for printing and export to PDF</label><br/>
    <label><input type="checkbox"> Can create and use document templates</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://support.microsoft.com/en-us/office/headers-footers-and-page-numbers-9a8c8e6b-2c7d-4c7d-8c7d-4c7d8c7d4c7d">Microsoft Headers & Footers Tutorial</a></li>
        <li><b>Template Gallery:</b> <a href="https://templates.office.com">Office.com Templates</a></li>
        <li><b>Print Guide:</b> <a href="https://support.microsoft.com/en-us/office/print-your-document-8c2b8b0a-5c8f-4c8f-8c8f-4c8f8c8f4c8f">Microsoft Print Guide</a></li>
        <li><b>Video:</b> "Word Page Layout Masterclass" by Technology for Teachers and Students (YouTube)</li>
        <li><b>Practice:</b> Format a real document you need (school paper, work report) with proper headers/footers</li>
        <li><b>Next Week:</b> Week 4 - Microsoft Word Mastery Part 2 (Mail Merge, References, Collaboration)</li>
    </ul>
</div>
`
            },

            "4-1": {
                "icon": "fa-mail-bulk",
                "title": "Mail Merge & Envelopes",
                "html": `<h1>Week 4, Day 1: Mail Merge & Envelopes</h1>
<p>Today, you'll learn how to send personalized documents to hundreds of people with just a few clicks. Mail merge is one of Word's most powerful time-saving features for business and personal use.</p>

<div class="analogy-box">
    <b>Analogy: Mail Merge as Assembly Line Production 🏭</b><br/>
    Main Document = Product template (form letter)<br/>
    Data Source = Customer database (names, addresses)<br/>
    Merge Fields = Empty slots on template (<<Name>>, <<Address>>)<br/>
    Merged Documents = Finished products (personalized letters)<br/>
    Envelopes/Labels = Packaging (ready to mail)
</div>

<h3>📊 Understanding Mail Merge Components</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 The Three Parts of Mail Merge</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 20px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>1. 📝 Main Document</h5>
            <ul>
                <li><b>What:</b> The template or form letter</li>
                <li><b>Contains:</b> Fixed text + merge fields</li>
                <li><b>Examples:</b>
                    <ul>
                        <li>Sales letter</li>
                        <li>Invitation</li>
                        <li>Certificate</li>
                        <li>Invoice</li>
                    </ul>
                </li>
                <li><b>File type:</b> .docx Word document</li>
                <li><b>Tip:</b> Create this first</li>
            </ul>
            <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Example:</b><br/>
                "Dear <<FirstName>>,<br/>
                Thank you for your order of <<Product>>..."
            </div>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>2. 🗃️ Data Source</h5>
            <ul>
                <li><b>What:</b> List of recipient information</li>
                <li><b>Contains:</b> Records with fields</li>
                <li><b>Sources:</b>
                    <ul>
                        <li>Excel spreadsheet</li>
                        <li>Word table</li>
                        <li>Outlook contacts</li>
                        <li>Access database</li>
                        <li>Text file</li>
                    </ul>
                </li>
                <li><b>Most common:</b> Excel (.xlsx)</li>
                <li><b>Tip:</b> Keep data clean and organized</li>
            </ul>
            <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Example Excel columns:</b><br/>
                FirstName, LastName, Email,<br/>
                Product, PurchaseDate, Amount
            </div>
        </div>
        <div style="background: white; border: 2px solid #8BC34A; padding: 15px; border-radius: 8px;">
            <h5>3. 📨 Merged Documents</h5>
            <ul>
                <li><b>What:</b> Final personalized documents</li>
                <li><b>Contains:</b> Main document + data values</li>
                <li><b>Output options:</b>
                    <ul>
                        <li>Individual Word documents</li>
                        <li>Single document with all letters</li>
                        <li>Print directly</li>
                        <li>Email messages</li>
                        <li>Envelopes/labels</li>
                    </ul>
                </li>
                <li><b>Result:</b> 100+ personalized letters in minutes</li>
                <li><b>Tip:</b> Preview before final merge</li>
            </ul>
            <div style="background: #f1f8e9; padding: 10px; margin-top: 10px; border-radius: 5px;">
                <b>Example Result:</b><br/>
                "Dear John,<br/>
                Thank you for your order of Laptop..."<br/>
                "Dear Sarah,<br/>
                Thank you for your order of Tablet..."
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Create Your First Mail Merge</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Prepare Data Source in Excel (30 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a clean data source for mail merge:</b></p>
        
        <ol>
            <li><b>Open Excel and create new workbook:</b>
                <ul>
                    <li>Save as: "MailMerge_Data.xlsx"</li>
                    <li>Save in same folder as your Word documents</li>
                </ul>
            </li>
            <li><b>Create these column headers in Row 1:</b>
                <table style="width: 100%; margin: 10px 0; border-collapse: collapse;">
                    <tr style="background: #f5f5f5;">
                        <th style="padding: 8px; border: 1px solid #ddd;">Column A</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Column B</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Column C</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Column D</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Column E</th>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">FirstName</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">LastName</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Address</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">City</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Membership</td>
                    </tr>
                </table>
            </li>
            <li><b>Add 5 sample records:</b>
                <table style="width: 100%; margin: 10px 0; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">John</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Smith</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">123 Main St</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">New York</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Gold</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Sarah</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Johnson</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">456 Oak Ave</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Chicago</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Silver</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Mike</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Brown</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">789 Pine Rd</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Los Angeles</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Bronze</td>
                    </tr>
                </table>
            </li>
            <li><b>Data Cleanup Tips:</b>
                <ul>
                    <li>No blank rows in data</li>
                    <li>No merged cells</li>
                    <li>Consistent formatting</li>
                    <li>Save and close Excel</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Exercise 2: Create Main Document & Insert Merge Fields (40 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Step-by-Step Mail Merge Wizard:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Step 1: Start Mail Merge</b>
                <ol>
                    <li>Open new Word document</li>
                    <li>Go to <b>Mailings</b> tab</li>
                    <li>Click <b>Start Mail Merge</b></li>
                    <li>Choose: <b>Step-by-Step Mail Merge Wizard</b></li>
                    <li>Task pane appears on right</li>
                </ol>
            </div>
            <div>
                <b>Step 2: Select Document Type</b>
                <ol>
                    <li>In task pane, choose: <b>Letters</b></li>
                    <li>Click: <b>Next: Starting document</b></li>
                    <li>Choose: <b>Use the current document</b></li>
                    <li>Click: <b>Next: Select recipients</b></li>
                </ol>
            </div>
            <div>
                <b>Step 3: Select Recipients</b>
                <ol>
                    <li>Choose: <b>Use an existing list</b></li>
                    <li>Click: <b>Browse...</b></li>
                    <li>Navigate to your Excel file</li>
                    <li>Select the worksheet (usually Sheet1$)</li>
                    <li>Check "First row of data contains column headers"</li>
                    <li>Click OK</li>
                </ol>
            </div>
            <div>
                <b>Step 4: Write Your Letter</b>
                <ol>
                    <li>Type your letter template</li>
                    <li>Click where you want to insert data</li>
                    <li>Click: <b>More items...</b> in task pane</li>
                    <li>Insert merge fields where needed</li>
                    <li>Click: <b>Next: Preview your letters</b></li>
                </ol>
            </div>
        </div>
        
        <div style="border: 1px solid #ddd; padding: 20px; margin: 15px 0; min-height: 200px; background: #f9f9f9;">
            <p><b>Sample Letter Template:</b></p>
            <p>[Current Date]</p>
            <p>«FirstName» «LastName»<br/>
            «Address»<br/>
            «City»</p>
            
            <p>Dear «FirstName»,</p>
            
            <p>We are pleased to inform you that your «Membership» membership has been renewed for another year. As a valued «Membership» member, you will continue to receive all the benefits you've enjoyed.</p>
            
            <p>Sincerely,<br/>
            The Membership Team</p>
        </div>
        
        <p><b>To Insert Merge Fields:</b></p>
        <ol>
            <li>Place cursor where you want field</li>
            <li>Mailings tab → <b>Insert Merge Field</b></li>
            <li>Choose field name</li>
            <li>Or: Use task pane → More items...</li>
            <li>Fields appear with « » around them</li>
        </ol>
    </div>
    
    <h4>Exercise 3: Preview & Complete Merge (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Finish the merge process:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Step 5: Preview Letters</b>
                <ol>
                    <li>In task pane: <b>Next: Preview your letters</b></li>
                    <li>Use arrows to scroll through recipients</li>
                    <li>Check each letter looks correct</li>
                    <li>Find and edit recipient list if needed</li>
                    <li>Click: <b>Next: Complete the merge</b></li>
                </ol>
            </div>
            <div>
                <b>Step 6: Complete Merge</b>
                <ol>
                    <li>Choose: <b>Print...</b> or <b>Edit individual letters...</b></li>
                    <li>For editing: Choose "All" records</li>
                    <li>Word creates new document with all letters</li>
                    <li>Each letter on separate page</li>
                    <li>Save as: "Merged_Letters.docx"</li>
                </ol>
            </div>
        </div>
        
        <p><b>Test Your Merge:</b></p>
        <ol>
            <li>Scroll through the merged document</li>
            <li>Verify each letter has correct data</li>
            <li>Print one page as test</li>
            <li>Save both template and merged document</li>
        </ol>
    </div>
</div>

<h3>📫 Creating Envelopes & Labels</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🏷️ Print Directly to Envelopes & Labels</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Envelope Printing</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Single Envelope:</b>
                <ol>
                    <li>Open new Word document</li>
                    <li>Mailings tab → <b>Envelopes</b></li>
                    <li>Enter delivery address</li>
                    <li>Enter return address (optional)</li>
                    <li>Click: <b>Add to Document</b></li>
                    <li>Insert envelope as page 1</li>
                </ol>
                
                <b>Print Options:</b>
                <ul>
                    <li>Feed method (how envelope goes in printer)</li>
                    <li>Envelope size (#10 standard)</li>
                    <li>Preview before printing</li>
                </ul>
            </div>
            <div>
                <b>Multiple Envelopes (Mail Merge):</b>
                <ol>
                    <li>Start new document</li>
                    <li>Mailings tab → Start Mail Merge → Envelopes</li>
                    <li>Choose envelope size</li>
                    <li>Select recipient list (Excel file)</li>
                    <li>Insert merge fields for address</li>
                    <li>Preview and print</li>
                </ol>
                
                <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Common Envelope Sizes:</b><br/>
                    • #10: 4.125" × 9.5" (Business)<br/>
                    • #6¾: 3.625" × 6.5" (Personal)<br/>
                    • A2: 4.375" × 5.75" (Invitations)<br/>
                    • Monarch: 3.875" × 7.5" (Personal)
                </div>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Label Creation</h5>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Single Sheet of Labels:</b>
                <ol>
                    <li>Mailings tab → <b>Labels</b></li>
                    <li>Enter address</li>
                    <li>Choose: <b>Full page of same label</b></li>
                    <li>Click: <b>New Document</b></li>
                    <li>Word creates grid of labels</li>
                    <li>Print on label sheets</li>
                </ol>
            </div>
            <div>
                <b>Mail Merge Labels:</b>
                <ol>
                    <li>Start new document</li>
                    <li>Mailings tab → Start Mail Merge → Labels</li>
                    <li>Select label product number</li>
                    <li>Avery 5160 is common (30 per sheet)</li>
                    <li>Connect to data source</li>
                    <li>Update all labels</li>
                    <li>Preview and print</li>
                </ol>
            </div>
        </div>
        
        <div style="margin-top: 15px; background: #fff3e0; padding: 10px; border-radius: 5px;">
            <b>Common Label Products:</b><br/>
            • Avery 5160: Address labels (30 per sheet)<br/>
            • Avery 5162: Return address labels (80 per sheet)<br/>
            • Avery 5163: Shipping labels (10 per sheet)<br/>
            • Avery 5164: File folder labels (6 per sheet)<br/>
            <small>Check your label package for product number</small>
        </div>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #fff0e6; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Create Mass Mailing Campaign (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Scenario: You're organizing a conference and need to send invitations.</b>
        
        <div style="border: 1px dashed #4A90E2; padding: 15px; margin: 15px 0; min-height: 300px;">
            <h3>Tech Conference 2024 Invitation</h3>
            <p>[Date]</p>
            
            <p>«FirstName» «LastName»<br/>
            «Company»<br/>
            «Address»<br/>
            «City», «State» «ZIP»</p>
            
            <p>Dear «FirstName»,</p>
            
            <p>You are invited to attend the Annual Tech Conference 2024, specifically for professionals in the «Industry» field.</p>
            
            <p><b>Event Details:</b><br/>
            Date: November 15-17, 2024<br/>
            Location: Convention Center, New York<br/>
            Your special rate: «RegistrationFee»</p>
            
            <p>Please RSVP by October 30, 2024.</p>
            
            <p>Sincerely,<br/>
            Conference Organizing Committee</p>
        </div>
        
        <b>Requirements:</b>
        <ol>
            <li><b>Create Excel Data Source</b> with these columns:
                <ul>
                    <li>FirstName, LastName, Company, Address, City, State, ZIP, Industry, RegistrationFee</li>
                    <li>Include at least 8 different records</li>
                    <li>Use realistic data</li>
                </ul>
            </li>
            <li><b>Create Invitation Template</b> in Word with merge fields</li>
            <li><b>Merge and Create</b> individual invitations</li>
            <li><b>Create Matching Envelopes</b> for all invitations</li>
            <li><b>Save:</b> Conference_Invitation_Template.docx, Conference_Invitations_Merged.docx</li>
        </ol>
    </div>
    
    <h4>Task 2: Conditional Mail Merge (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Learn to personalize letters based on data values:</b>
        
        <div style="border: 1px solid #ddd; padding: 15px; margin: 15px 0; background: #f9f9f9;">
            <p><b>Example: Membership Renewal Letters with Different Messages</b></p>
            
            <p>IF Membership = "Gold" THEN<br/>
            &nbsp;&nbsp;Message: "As a Gold member, you get free premium support."<br/>
            IF Membership = "Silver" THEN<br/>
            &nbsp;&nbsp;Message: "Consider upgrading to Gold for additional benefits."<br/>
            IF Membership = "Bronze" THEN<br/>
            &nbsp;&nbsp;Message: "Renew now to maintain your current benefits."</p>
        </div>
        
        <b>Steps to Add Rules:</b>
        <ol>
            <li>In your mail merge document, click where conditional text should go</li>
            <li>Mailings tab → <b>Rules</b> → <b>If...Then...Else...</b></li>
            <li>Set up:
                <ul>
                    <li>Field name: Membership</li>
                    <li>Comparison: Equal to</li>
                    <li>Compare to: Gold</li>
                    <li>Insert this text: [Gold member message]</li>
                    <li>Otherwise insert this text: [Standard message]</li>
                </ul>
            </li>
            <li>You can nest rules for multiple conditions</li>
        </ol>
        
        <b>Practice:</b> Create a letter that:
        <ul>
            <li>Thanks Gold members with special message</li>
            <li>Encourages Silver members to upgrade</li>
            <li>Reminds Bronze members to renew</li>
            <li>Includes different discount codes for each level</li>
        </ul>
        
        <b>Save as:</b> Conditional_MailMerge.docx
    </div>
    
    <h4>Task 3: Create Product Catalog with Mail Merge (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Use mail merge to create a product catalog or price list:</b>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 15px 0;">
            <div>
                <b>Excel Data (Products.xlsx):</b>
                <table style="width: 100%;">
                    <tr><th>ProductID</th><th>Name</th><th>Category</th><th>Price</th><th>Description</th></tr>
                    <tr><td>P001</td><td>Laptop</td><td>Electronics</td><td>$899</td><td>High-performance laptop</td></tr>
                    <tr><td>P002</td><td>Desk Chair</td><td>Furniture</td><td>$249</td><td>Ergonomic office chair</td></tr>
                    <tr><td>P003</td><td>Notebook</td><td>Stationery</td><td>$12</td><td>Premium leather notebook</td></tr>
                </table>
            </div>
            <div>
                <b>Catalog Template:</b>
                <div style="border: 1px solid #ddd; padding: 10px; min-height: 150px;">
                    <b>«Name»</b><br/>
                    Product ID: «ProductID»<br/>
                    Category: «Category»<br/>
                    Price: «Price»<br/>
                    Description: «Description»
                </div>
            </div>
        </div>
        
        <b>Advanced Challenge:</b>
        <ol>
            <li>Create a catalog with 2 products per page</li>
            <li>Add images (requires picture field in data source)</li>
            <li>Format prices with currency formatting</li>
            <li>Sort products by category</li>
            <li>Add page numbers and table of contents</li>
        </ol>
        
        <b>Save as:</b> Product_Catalog_Merged.docx
    </div>
</div>

<h3>💡 Advanced Mail Merge Features</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Professional Mail Merge Techniques</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>🎭 Merge Rules & Fields</h5>
            <ul>
                <li><b>Ask Field:</b> Prompt for input during merge</li>
                <li><b>Fill-in Field:</b> Enter custom text for each letter</li>
                <li><b>If...Then...Else:</b> Conditional text based on data</li>
                <li><b>Merge Record #:</b> Insert record number</li>
                <li><b>Next Record:</b> Force next data record</li>
                <li><b>Next Record If:</b> Conditional next record</li>
                <li><b>Set Bookmark:</b> Store text for reuse</li>
                <li><b>Skip Record If:</b> Exclude based on condition</li>
            </ul>
            
            <h5>📧 Email Merge</h5>
            <ul>
                <li><b>Setup:</b> Start Mail Merge → E-mail Messages</li>
                <li><b>Requires:</b> Email field in data source</li>
                <li><b>Subject line:</b> Can include merge fields</li>
                <li><b>Send via:</b> Outlook (must be installed)</li>
                <li><b>Format:</b> HTML or plain text</li>
                <li><b>Attachment:</b> Can attach files to emails</li>
            </ul>
        </div>
        <div>
            <h5>🖼️ Picture Fields</h5>
            <ul>
                <li><b>Include images</b> in mail merge</li>
                <li><b>Data source:</b> Column with image file paths</li>
                <li><b>Insert:</b> Insert Merge Field → Picture field</li>
                <li><b>Formats:</b> JPG, PNG, BMP, GIF</li>
                <li><b>Best practice:</b> Use relative paths or URLs</li>
                <li><b>Example use:</b> Product catalogs, ID cards</li>
            </ul>
            
            <h5>🔢 Number & Date Formatting</h5>
            <ul>
                <li><b>Format numbers:</b> \# "#,##0.00" for currency</li>
                <li><b>Format dates:</b> \@ "MMMM d, yyyy"</li>
                <li><b>Example:</b> «Total» \# "$#,##0.00"</li>
                <li><b>Example:</b> «Date» \@ "dddd, MMMM d, yyyy"</li>
                <li><b>Switch field codes:</b> Alt+F9 to view/edit</li>
            </ul>
            
            <h5>🔄 Update & Reuse</h5>
            <ul>
                <li><b>Edit data source:</b> Mailings → Edit Recipient List</li>
                <li><b>Update fields:</b> F9 to refresh</li>
                <li><b>Save template:</b> Save as .dotx template file</li>
                <li><b>Reuse:</b> Open template with new data</li>
                <li><b>Convert to PDF:</b> After merging</li>
            </ul>
        </div>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Mail Merge Effectively</h4>
    <ul>
        <li><b>Assembly Line Analogy:</b> Students understand template + data = personalized output</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Understanding the three components (document, data, merge)</li>
                <li>Creating clean data in Excel</li>
                <li>Remembering to use « » for fields (not regular text)</li>
                <li>Previewing before final merge</li>
                <li>Envelope/Label setup and printer feeding</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Start with simple example (5 records)</li>
                <li>Show the "magic" of one template creating many letters</li>
                <li>Emphasize data cleanup in Excel first</li>
                <li>Use the Step-by-Step Wizard for beginners</li>
                <li>Show real-world applications (invitations, invoices, certificates)</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Businesses use this for invoices and statements"</li>
                <li>"Schools use for report cards and certificates"</li>
                <li>"Clubs use for membership renewals"</li>
                <li>"You can use for holiday cards"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Understands the three components of mail merge</label><br/>
    <label><input type="checkbox"> Can create a clean data source in Excel</label><br/>
    <label><input type="checkbox"> Can create a main document with merge fields</label><br/>
    <label><input type="checkbox"> Can complete a mail merge to create personalized documents</label><br/>
    <label><input type="checkbox"> Can create envelopes and labels using mail merge</label><br/>
    <label><input type="checkbox"> Knows how to use merge rules for conditional text</label><br/>
    <label><input type="checkbox"> Can preview and edit mail merge results</label><br/>
    <label><input type="checkbox"> Understands how to format numbers and dates in merge fields</label><br/>
    <label><input type="checkbox"> Can save and reuse mail merge templates</label><br/>
    <label><input type="checkbox"> Knows when to use mail merge vs manual documents</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://support.microsoft.com/en-us/office/use-mail-merge-for-bulk-email-letters-labels-and-envelopes-f488ed5b-b849-4c11-9cff-932c49474705">Microsoft Mail Merge Tutorial</a></li>
        <li><b>Label Templates:</b> <a href="https://www.avery.com/templates">Avery Template Finder</a></li>
        <li><b>Video:</b> "Mail Merge in Word" by Kevin Stratvert (YouTube)</li>
        <li><b>Practice Data:</b> Create your own Christmas card list or party invitations</li>
        <li><b>Next Session:</b> Day 4-2 - References & Table of Contents</li>
    </ul>
</div>
`
            },
            "4-2": {
                "icon": "fa-book",
                "title": "References & Table of Contents",
                "html": `<h1>Week 4, Day 2: References & Table of Contents</h1>
<p>Today, you'll learn how to create professional academic and business documents with automatic tables of contents, citations, footnotes, and cross-references. These features separate amateur documents from professional ones.</p>

<div class="analogy-box">
    <b>Analogy: Document References as Book Index System 📚</b><br/>
    Table of Contents = Chapter list (auto-updating)<br/>
    Footnotes/Endnotes = Margin notes (additional info)<br/>
    Citations = Source credits (academic integrity)<br/>
    Bibliography = Reference list (all sources)<br/>
    Cross-references = "See page X" links (navigation)<br/>
    Captions = Figure labels (auto-numbering)
</div>

<h3>📑 Automatic Table of Contents (TOC)</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Creating Professional Document Navigation</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <h5>📋 What is a TOC?</h5>
                <ul>
                    <li><b>Purpose:</b> Lists document sections with page numbers</li>
                    <li><b>Location:</b> Usually after title page</li>
                    <b>Types of TOC:</b>
                    <ul>
                        <li><b>Basic:</b> Headings only</li>
                        <li><b>Advanced:</b> Includes figures, tables</li>
                        <li><b>Custom:</b> Specific heading levels</li>
                        <li><b>Manual:</b> Don't do this! (Auto is better)</li>
                    </ul>
                    <li><b>Key feature:</b> Auto-updates when document changes</li>
                    <li><b>Prerequisite:</b> Must use Heading styles (1, 2, 3)</li>
                </ul>
            </div>
            <div>
                <h5>📝 Sample TOC Structure</h5>
                <div style="border: 1px solid #ddd; padding: 15px; background: #f9f9f9;">
                    <b>TABLE OF CONTENTS</b><br/><br/>
                    
                    <div style="display: flex; justify-content: space-between;">
                        <span>1. INTRODUCTION</span>
                        <span>1</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-left: 20px;">
                        <span>1.1 Background</span>
                        <span>2</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-left: 20px;">
                        <span>1.2 Purpose</span>
                        <span>3</span>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between;">
                        <span>2. METHODOLOGY</span>
                        <span>4</span>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between;">
                        <span>3. RESULTS</span>
                        <span>6</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-left: 20px;">
                        <span>3.1 Data Analysis</span>
                        <span>7</span>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between;">
                        <span>REFERENCES</span>
                        <span>10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Create Complete Academic Paper</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Set Up Document with Heading Styles (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create a properly structured document:</b></p>
        
        <ol>
            <li><b>Create new document:</b> Save as "Research_Paper.docx"</li>
            <li><b>Add title page:</b>
                <ul>
                    <li>Center align</li>
                    <li>Title: "The Impact of Technology on Education"</li>
                    <li>Your name</li>
                    <li>Date</li>
                    <li>Page break after (<kbd>Ctrl + Enter</kbd>)</li>
                </ul>
            </li>
            <li><b>Add content with proper headings:</b>
                <table style="width: 100%; margin: 10px 0;">
                    <tr><th>Type</th><th>Content</th><th>Style to Apply</th></tr>
                    <tr><td>Main heading</td><td>INTRODUCTION</td><td>Heading 1</td></tr>
                    <tr><td>Subheading</td><td>Historical Context</td><td>Heading 2</td></tr>
                    <tr><td>Subheading</td><td>Problem Statement</td><td>Heading 2</td></tr>
                    <tr><td>Main heading</td><td>METHODOLOGY</td><td>Heading 1</td></tr>
                    <tr><td>Main heading</td><td>RESULTS</td><td>Heading 1</td></tr>
                    <tr><td>Subheading</td><td>Quantitative Analysis</td><td>Heading 2</td></tr>
                    <tr><td>Subheading</td><td>Qualitative Findings</td><td>Heading 2</td></tr>
                    <tr><td>Main heading</td><td>CONCLUSION</td><td>Heading 1</td></tr>
                    <tr><td>Main heading</td><td>REFERENCES</td><td>Heading 1</td></tr>
                </table>
            </li>
            <li><b>Add paragraph text:</b> Use =lorem(2,5) to generate dummy text under each heading</li>
            <li><b>Verify:</b> All headings use proper styles (not just bold/large text)</li>
        </ol>
    </div>
    
    <h4>Exercise 2: Insert Automatic Table of Contents (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Create and customize your TOC:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Method 1: Built-in TOC</b>
                <ol>
                    <li>Place cursor after title page (page 2)</li>
                    <li>Type "TABLE OF CONTENTS" and format as centered</li>
                    <li>Press Enter twice</li>
                    <li>References tab → <b>Table of Contents</b></li>
                    <li>Choose: <b>Automatic Table 1</b></li>
                    <li>TOC appears automatically!</li>
                </ol>
            </div>
            <div>
                <b>Method 2: Custom TOC</b>
                <ol>
                    <li>References tab → Table of Contents → <b>Custom Table of Contents</b></li>
                    <li>In dialog box:
                        <ul>
                            <li>Show levels: 3 (for Heading 1, 2, 3)</li>
                            <li>Tab leader: ...... (dots)</li>
                            <li>Format: From template</li>
                        </ul>
                    </li>
                    <li>Click OK</li>
                    <li>Compare with built-in TOC</li>
                </ol>
            </div>
        </div>
        
        <p><b>Update TOC:</b></p>
        <ol>
            <li>Add a new section to your document</li>
            <li>Apply Heading 1 style to it</li>
            <li>Click anywhere in TOC</li>
            <li>Click <b>Update Table</b> button at top</li>
            <li>Choose: <b>Update entire table</b></li>
            <li>New section appears in TOC!</li>
        </ol>
    </div>
    
    <h4>Exercise 3: Footnotes & Endnotes (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Add reference notes to your document:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>📝 Footnotes (Bottom of Page)</b>
                <ol>
                    <li>Place cursor after a sentence that needs citation</li>
                    <li>References tab → <b>Insert Footnote</b></li>
                    <li>Number appears superscript in text (¹)</li>
                    <li>Cursor jumps to bottom of page</li>
                    <li>Type footnote text: "Smith, J. (2023). Technology in Education. p. 45."</li>
                    <li>Add 3 footnotes to different pages</li>
                </ol>
                <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Use for:</b> Additional explanations, source citations, translations
                </div>
            </div>
            <div>
                <b>📚 Endnotes (End of Document)</b>
                <ol>
                    <li>Place cursor where note should reference</li>
                    <li>References tab → <b>Insert Endnote</b></li>
                    <li>Number appears superscript (i, ii, iii)</li>
                    <li>Cursor jumps to end of document</li>
                    <li>Type endnote text</li>
                    <li>Add 2 endnotes</li>
                </ol>
                <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Use for:</b> Bibliography references, additional resources, commentary
                </div>
            </div>
        </div>
        
        <p><b>Customize Notes:</b></p>
        <ol>
            <li>References tab → Footnote & Endnote dialog launcher (small arrow)</li>
            <li>Change:
                <ul>
                    <li>Number format: 1, 2, 3 or i, ii, iii</li>
                    <li>Start at: 1</li>
                    <li>Numbering: Continuous or restart each page/section</li>
                    <li>Location: Bottom of page or below text</li>
                </ul>
            </li>
            <li>Convert: Footnotes → Endnotes or vice versa</li>
            <li>Delete: Remove superscript number in text</li>
        </ol>
    </div>
</div>

<h3>📚 Citations & Bibliography</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🎓 Academic Referencing Made Easy</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Understanding Citation Styles</h5>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            <div style="text-align: center; padding: 10px; background: #f0f8ff; border-radius: 5px;">
                <b>APA</b><br/>
                (Smith, 2023)<br/>
                Psychology,<br/>
                Education
            </div>
            <div style="text-align: center; padding: 10px; background: #fff3e0; border-radius: 5px;">
                <b>MLA</b><br/>
                (Smith 45)<br/>
                Humanities,<br/>
                Literature
            </div>
            <div style="text-align: center; padding: 10px; background: #f1f8e9; border-radius: 5px;">
                <b>Chicago</b><br/>
                Notes-bibliography<br/>
                History,<br/>
                Arts
            </div>
            <div style="text-align: center; padding: 10px; background: #f3e5f5; border-radius: 5px;">
                <b>Harvard</b><br/>
                (Smith 2023)<br/>
                Sciences,<br/>
                Business
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Step-by-Step: Add Citations & Bibliography</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Step 1: Choose Style</b>
                <ol>
                    <li>References tab → Style dropdown</li>
                    <li>Select: <b>APA 7th Edition</b></li>
                    <li>All citations will follow this style</li>
                </ol>
                
                <b>Step 2: Add Source</b>
                <ol>
                    <li>Place cursor where citation should go</li>
                    <li>References tab → <b>Insert Citation</b> → <b>Add New Source</b></li>
                    <li>Fill in source information:
                        <ul>
                            <li>Type of Source: Book</li>
                            <li>Author: Smith, John</li>
                            <li>Title: Technology in Modern Education</li>
                            <li>Year: 2023</li>
                            <li>Publisher: Academic Press</li>
                            <li>City: New York</li>
                        </ul>
                    </li>
                    <li>Click OK</li>
                    <li>Citation appears: (Smith, 2023)</li>
                </ol>
            </div>
            <div>
                <b>Step 3: Add More Sources</b>
                <ol>
                    <li>Add 4-5 different sources:
                        <ul>
                            <li>2 Books</li>
                            <li>1 Journal Article</li>
                            <li>1 Website</li>
                            <li>1 Conference Paper</li>
                        </ul>
                    </li>
                    <li>Use same author multiple times</li>
                    <li>Word automatically creates (Smith, 2023a), (Smith, 2023b)</li>
                </ol>
                
                <b>Step 4: Create Bibliography</b>
                <ol>
                    <li>Go to end of document (after References heading)</li>
                    <li>References tab → <b>Bibliography</b></li>
                    <li>Choose: <b>References</b> or <b>Works Cited</b></li>
                    <li>Word creates formatted bibliography automatically!</li>
                    <li>All your sources appear in correct style</li>
                </ol>
                
                <div style="background: #fff3cd; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>💡 Pro Tip:</b> Update bibliography after adding new sources by clicking "Update Citations and Bibliography"
                </div>
            </div>
        </div>
    </div>
</div>

<h3>🔗 Cross-References & Captions</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>📎 Create Smart Document Links</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Adding Figure & Table Captions</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>📊 Insert Captions</b>
                <ol>
                    <li>Insert a picture or table in your document</li>
                    <li>Select the object</li>
                    <li>References tab → <b>Insert Caption</b></li>
                    <li>In dialog box:
                        <ul>
                            <li>Caption: Figure 1: Technology Adoption Timeline</li>
                            <li>Label: Figure (or Table, Equation)</li>
                            <li>Position: Below selected item</li>
                        </ul>
                    </li>
                    <li>Click OK</li>
                    <li>Caption appears with automatic numbering</li>
                </ol>
                
                <b>Auto-numbering benefits:</b>
                <ul>
                    <li>If you add new Figure 2 before Figure 1, all numbers update</li>
                    <li>Can create List of Figures automatically</li>
                    <li>Cross-reference to figures stays correct</li>
                </ul>
            </div>
            <div>
                <b>🔗 Cross-References</b>
                <ol>
                    <li>Type in document: "As shown in "</li>
                    <li>References tab → <b>Cross-reference</b></li>
                    <li>In dialog box:
                        <ul>
                            <li>Reference type: Figure</li>
                            <li>Insert reference to: Only label and number</li>
                            <li>Select which figure</li>
                        </ul>
                    </li>
                    <li>Click Insert</li>
                    <li>Text becomes: "As shown in Figure 1"</li>
                </ol>
                
                <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Smart Linking:</b> If you change caption to "Figure 2", cross-reference updates automatically when you Update Fields (F9)
                </div>
                
                <b>Other Cross-References:</b>
                <ul>
                    <li>Headings: "See Section 2.1"</li>
                    <li>Bookmarks: Link to specific text</li>
                    <li>Equations: "Refer to Equation 3"</li>
                    <li>Numbered items: Lists with numbering</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Create List of Figures/Tables</h5>
        <ol>
            <li>After Table of Contents, add heading: "List of Figures"</li>
            <li>References tab → <b>Insert Table of Figures</b></li>
            <li>In dialog box:
                <ul>
                    <li>Caption label: Figure</li>
                    <li>Show page numbers: Yes</li>
                    <li>Tab leader: ......</li>
                    <li>Formats: From template</li>
                </ul>
            </li>
            <li>Click OK</li>
            <li>All figures with captions appear in list!</li>
            <li>Repeat for "List of Tables" if you have tables</li>
        </ol>
        
        <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <b>💡 Professional Touch:</b> Academic papers often include:
            <ol>
                <li>Table of Contents</li>
                <li>List of Figures</li>
                <li>List of Tables</li>
                <li>List of Abbreviations (if many)</li>
            </ol>
        </div>
    </div>
</div>

<h3>📋 Daily Assignment</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Complete Academic Paper (90 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a 6-8 page academic paper with all reference features:</b>
        
        <div style="border: 1px dashed #4A90E2; padding: 20px; margin: 15px 0; min-height: 400px;">
            <div style="text-align: center;">
                <h1>[Your Research Topic]</h1>
                <h3>An Academic Paper Demonstrating Word Reference Features</h3>
                <p>By [Your Name]</p>
                <p>[Date]</p>
            </div>
            
            <div style="page-break-before: always;">
                <h1>TABLE OF CONTENTS</h1>
                <!-- Auto TOC here -->
            </div>
            
            <div style="page-break-before: always;">
                <h1>LIST OF FIGURES</h1>
                <!-- Auto List of Figures here -->
            </div>
            
            <!-- Content pages would follow -->
        </div>
        
        <b>Required Elements:</b>
        <ol>
            <li><b>Title Page:</b> Properly formatted</li>
            <li><b>Table of Contents:</b> Automatic, includes Heading 1-3</li>
            <li><b>List of Figures:</b> Automatic from captions</li>
            <li><b>5+ Sections:</b> Using Heading 1 style</li>
            <li><b>Subsections:</b> Using Heading 2, 3 styles</li>
            <li><b>10+ Citations:</b> Using APA or MLA style
                <ul>
                    <li>At least 3 different authors</li>
                    <li>Mix of books, articles, websites</li>
                </ul>
            </li>
            <li><b>Bibliography:</b> Automatic, correctly formatted</li>
            <li><b>5+ Figures/Tables:</b> With automatic captions</li>
            <li><b>10+ Cross-references:</b> To sections, figures, pages</li>
            <li><b>Footnotes/Endnotes:</b> At least 3 of each</li>
            <li><b>Page Numbers:</b> Roman (i, ii) for front matter, Arabic (1, 2) for content</li>
            <li><b>Different Headers:</b> For different sections</li>
        </ol>
        
        <b>Save as:</b> Academic_Paper_Complete.docx
    </div>
    
    <h4>Task 2: Create Business Report Template (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Design a reusable business report template:</b>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Template Features:</b>
                <ul>
                    <li>Company logo in header</li>
                    <li>Automatic document properties</li>
                    <li>Pre-defined styles for:
                        <ul>
                            <li>Report Title</li>
                            <li>Section Headings</li>
                            <li>Bullet points</li>
                            <li>Callout boxes</li>
                        </ul>
                    </li>
                    <li>Automatic date field</li>
                    <li>Page X of Y in footer</li>
                    <li>Confidential watermark</li>
                </ul>
            </div>
            <div>
                <b>Smart Elements to Include:</b>
                <ul>
                    <li>Table of Contents (auto)</li>
                    <li>Executive Summary section</li>
                    <li>Recommendations with checkboxes</li>
                    <li>Appendix with automatic numbering</li>
                    <li>Placeholder text for easy replacement</li>
                    <li>Custom color scheme</li>
                    <li>Print-friendly formatting</li>
                </ul>
            </div>
        </div>
        
        <b>Steps:</b>
        <ol>
            <li>Create all styles first (modify Heading 1-3, create custom styles)</li>
            <li>Set up headers/footers with fields (File → Info → Properties)</li>
            <li>Create placeholder pages with instructions</li>
            <li>Add content controls for easy filling</li>
            <li>Save as Word Template (.dotx)</li>
            <li>Test by creating new document from template</li>
        </ol>
        
        <b>Save as:</b> Business_Report_Template.dotx
    </div>
</div>

<h3>💡 Advanced Reference Features</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>⚡ Professional Document Features</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>📖 Master Documents</h5>
            <ul>
                <li><b>Combine multiple files</b> into one document</li>
                <li><b>Create:</b> View tab → Outline → Show Document → Insert</li>
                <li><b>Benefits:</b>
                    <ul>
                        <li>Work on chapters separately</li>
                        <li>Single TOC for entire book</li>
                        <li>Consistent formatting</li>
                        <li>Combine for final printing</li>
                    </ul>
                </li>
                <li><b>Use for:</b> Theses, books, large reports</li>
            </ul>
            
            <h5>🔢 Equation Numbering</h5>
            <ul>
                <li><b>Insert equation:</b> Insert tab → Equation</li>
                <li><b>Add caption:</b> References → Insert Caption → Label: Equation</li>
                <li><b>Auto-numbering:</b> Equations renumber if moved</li>
                <li><b>Cross-reference:</b> "As shown in Equation 3"</li>
                <li><b>List of Equations:</b> Similar to List of Figures</li>
            </ul>
        </div>
        <div>
            <h5>📑 Index Creation</h5>
            <ul>
                <li><b>Mark entries:</b> Select term → References → Mark Entry</li>
                <li><b>Subentries:</b> Create hierarchical index</li>
                <li><b>Cross-references:</b> "See also" in index</li>
                <li><b>Generate index:</b> References → Insert Index</li>
                <li><b>Update:</b> Right-click index → Update Field</li>
                <li><b>Use for:</b> Books, manuals, large documents</li>
            </ul>
            
            <h5>⚖️ Table of Authorities</h5>
            <ul>
                <li><b>For legal documents</b></li>
                <li><b>Mark citations:</b> References → Mark Citation</li>
                <li><b>Categories:</b> Cases, statutes, rules</li>
                <li><b>Insert:</b> References → Insert Table of Authorities</li>
                <li><b>Use for:</b> Legal briefs, court documents</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>🔄 Update All Fields at Once</h5>
        <ul>
            <li><b>Select all:</b> <kbd>Ctrl + A</kbd></li>
            <li><b>Update fields:</b> <kbd>F9</kbd></li>
            <li><b>Updates:</b> TOC, page numbers, cross-references, dates</li>
            <li><b>Before printing:</b> Always update fields</li>
            <li><b>Lock fields:</b> <kbd>Ctrl + F11</kbd> to prevent updates</li>
            <li><b>Unlock fields:</b> <kbd>Ctrl + Shift + F11</kbd></li>
        </ul>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching References & TOC Effectively</h4>
    <ul>
        <li><b>Book Analogy:</b> Students understand TOC, index, chapters</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Not using styles (TOC won't work without Heading styles)</li>
                <li>Manual numbering (breaks when document changes)</li>
                <li>Citation style differences</li>
                <li>Updating fields (F9 is crucial)</li>
                <li>Section breaks for different page numbering</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Start with simple document, add one feature at a time</li>
                <li>Show the "before and after" of automatic vs manual</li>
                <li>Have students create a real document they need (school paper, work report)</li>
                <li>Emphasize: "Word can do the work for you if you set it up right"</li>
                <li>Show time savings: "This would take hours manually"</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Your thesis requires proper TOC and citations"</li>
                <li>"Business reports need professional formatting"</li>
                <li>"Books use indexes and cross-references"</li>
                <li>"Legal documents need tables of authorities"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can create automatic Table of Contents using Heading styles</label><br/>
    <label><input type="checkbox"> Understands difference between footnotes and endnotes</label><br/>
    <label><input type="checkbox"> Can insert and format citations in APA/MLA style</label><br/>
    <label><input type="checkbox"> Can create automatic bibliography from citations</label><br/>
    <label><input type="checkbox"> Knows how to add captions to figures and tables</label><br/>
    <label><input type="checkbox"> Can create cross-references to headings, figures, pages</label><br/>
    <label><input type="checkbox"> Can create List of Figures/Tables automatically</label><br/>
    <label><input type="checkbox"> Knows how to update all fields (F9) before printing</label><br/>
    <label><input type="checkbox"> Understands section breaks for different page numbering</label><br/>
    <label><input type="checkbox"> Can create professional academic/business document templates</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Style Guides:</b> <a href="https://apastyle.apa.org">APA Style Guide</a>, <a href="https://style.mla.org">MLA Style Guide</a></li>
        <li><b>Template Gallery:</b> <a href="https://templates.office.com">Office.com Academic Templates</a></li>
        <li><b>Video:</b> "Word References Complete Guide" by Leila Gharani (YouTube)</li>
        <li><b>Practice:</b> Format a real school paper or work report with proper references</li>
        <li><b>Next Session:</b> Day 4-3 - Collaboration & Office Etiquette</li>
    </ul>
</div>
`
            },
            "4-3": {
                "icon": "fa-users",
                "title": "Collaboration & Office Etiquette",
                "html": `<h1>Week 4, Day 3: Collaboration & Office Etiquette</h1>
<p>Today, you'll learn how to work effectively with others on Word documents. Master track changes, comments, version control, and professional document sharing practices essential for modern workplaces.</p>

<div class="analogy-box">
    <b>Analogy: Document Collaboration as Team Construction 👷</b><br/>
    Document = Building project<br/>
    Track Changes = Architect's red pen (suggestions)<br/>
    Comments = Post-it notes (questions)<br/>
    Compare Documents = Before/after photos<br/>
    Version History = Construction timeline<br/>
    Sharing Permissions = Site access badges
</div>

<h3>👥 Understanding Collaboration Workflows</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🎯 Common Collaboration Scenarios</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 20px 0;">
        <div style="background: white; border: 2px solid #4A90E2; padding: 15px; border-radius: 8px;">
            <h5>📝 Document Review</h5>
            <ul>
                <li><b>Situation:</b> Manager reviews employee report</li>
                <li><b>Tools used:</b> Track Changes, Comments</li>
                <li><b>Workflow:</b>
                    <ol>
                        <li>Employee creates draft</li>
                        <li>Manager reviews with changes</li>
                        <li>Employee accepts/rejects changes</li>
                        <li>Final version approved</li>
                    </ol>
                </li>
                <li><b>Benefits:</b> Clear audit trail, no confusion</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #FF9800; padding: 15px; border-radius: 8px;">
            <h5>👨‍👩‍👧‍👦 Team Collaboration</h5>
            <ul>
                <li><b>Situation:</b> Multiple people editing same document</li>
                <li><b>Tools used:</b> SharePoint, OneDrive, Real-time co-authoring</li>
                <li><b>Workflow:</b>
                    <ol>
                        <li>Document stored in cloud</li>
                        <li>Multiple editors work simultaneously</li>
                        <li>Changes synced automatically</li>
                        <li>Version history tracks all edits</li>
                    </ol>
                </li>
                <li><b>Benefits:</b> Faster completion, live collaboration</li>
            </ul>
        </div>
        <div style="background: white; border: 2px solid #8BC34A; padding: 15px; border-radius: 8px;">
            <h5>📑 Document Comparison</h5>
            <ul>
                <li><b>Situation:</b> Compare contract versions</li>
                <li><b>Tools used:</b> Compare, Combine</li>
                <li><b>Workflow:</b>
                    <ol>
                        <li>Two versions of same document</li>
                        <li>Word highlights differences</li>
                        <li>Reviewer decides which changes to keep</li>
                        <li>Create final merged version</li>
                    </ol>
                </li>
                <li><b>Benefits:</b> Spot changes quickly, prevent errors</li>
            </ul>
        </div>
    </div>
</div>

<h3>🛠️ Hands-On Lab: Track Changes & Comments</h3>
<div style="background-color: #e8f5e8; padding: 20px; border-radius: 10px;">
    <h4>Exercise 1: Master Track Changes (30 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Learn to track every edit in a document:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Turn On Track Changes</b>
                <ol>
                    <li>Open a document with several paragraphs</li>
                    <li>Review tab → <b>Track Changes</b> button</li>
                    <li>Or press: <kbd>Ctrl + Shift + E</kbd></li>
                    <li>Status bar shows "Track Changes: On"</li>
                    <li>Now every edit will be recorded</li>
                </ol>
                
                <b>Make Test Edits:</b>
                <ul>
                    <li>Delete some text (appears in red with strikethrough)</li>
                    <li>Add new text (appears in red with underline)</li>
                    <li>Format text (formatting changes noted)</li>
                    <li>Move text (shows where it came from and went to)</li>
                </ul>
            </div>
            <div>
                <b>Change Tracking Options</b>
                <ol>
                    <li>Review tab → Track Changes dropdown → <b>Change Tracking Options</b></li>
                    <li>Customize:
                        <ul>
                            <li><b>Insertions:</b> Color: Blue, Effect: Underline</li>
                            <li><b>Deletions:</b> Color: Red, Effect: Strikethrough</li>
                            <li><b>Changed lines:</b> Show in left margin</li>
                            <li><b>Comments:</b> Color: Green</li>
                        </ul>
                    </li>
                    <li>Try different display modes:
                        <ul>
                            <li>Simple Markup (clean view)</li>
                            <li>All Markup (see all changes)</li>
                            <li>No Markup (final view)</li>
                            <li>Original (before changes)</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        
        <div style="border: 1px solid #ddd; padding: 15px; margin: 15px 0; background: #f9f9f9;">
            <p><b>Sample Tracked Changes:</b></p>
            <p>The <span style="color: red; text-decoration: line-through;">old</span> <span style="color: blue; text-decoration: underline;">new</span> system will be implemented next quarter.</p>
            <p><span style="color: blue; text-decoration: underline;">We expect significant improvements in efficiency.</span></p>
            <p>The <span style="color: red; text-decoration: line-through;">project team</span> <span style="color: blue; text-decoration: underline;">implementation committee</span> will oversee the rollout.</p>
        </div>
    </div>
    
    <h4>Exercise 2: Work with Comments (25 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Add and manage comments in documents:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Add Comments</b>
                <ol>
                    <li>Select text you want to comment on</li>
                    <li>Review tab → <b>New Comment</b></li>
                    <li>Or: <kbd>Ctrl + Alt + M</kbd></li>
                    <li>Comment pane opens on right</li>
                    <li>Type: "This section needs more data to support the claim."</li>
                    <li>Add 3-4 different comments</li>
                </ol>
                
                <b>Types of Comments:</b>
                <ul>
                    <li><b>Questions:</b> "What's the source for this statistic?"</li>
                    <li><b>Suggestions:</b> "Consider adding an example here."</li>
                    <li><b>Corrections:</b> "This date appears to be incorrect."</li>
                    <li><b>Praise:</b> "Excellent analysis in this section!"</li>
                </ul>
            </div>
            <div>
                <b>Manage Comments</b>
                <ol>
                    <li><b>Reply to comment:</b> Click Reply button in comment</li>
                    <li><b>Resolve comment:</b> Mark as done (keeps history)</li>
                    <li><b>Delete comment:</b> Select comment → Delete</li>
                    <li><b>Navigate comments:</b> Review tab → Next/Previous</li>
                    <li><b>Show/Hide comments:</b> Review tab → Show Comments</li>
                </ol>
                
                <b>Comment Best Practices:</b>
                <ul>
                    <li>Be specific (reference exact text)</li>
                    <li>Be constructive (offer solutions)</li>
                    <li>Use @mentions if available</li>
                    <li>Keep tone professional</li>
                    <li>Resolve comments when addressed</li>
                </ul>
            </div>
        </div>
        
        <div style="border: 1px solid #ddd; padding: 15px; margin: 15px 0; background: #f9f9f9;">
            <div style="display: flex;">
                <div style="flex: 2; padding-right: 20px; border-right: 1px solid #ddd;">
                    <p><b>Document Text:</b></p>
                    <p style="background: #fff3cd;">The quarterly sales increased by 15%. <span style="color: green; font-weight: bold;">[Comment 1]</span></p>
                    <p style="background: #f0f8ff;">This represents significant growth. <span style="color: green; font-weight: bold;">[Comment 2]</span></p>
                </div>
                <div style="flex: 1; padding-left: 20px;">
                    <p><b>Comments Panel:</b></p>
                    <div style="border-left: 3px solid #4A90E2; padding-left: 10px; margin-bottom: 10px;">
                        <b>John Smith</b> (Today, 10:30 AM)<br/>
                        <i>Can you provide the source for the 15% figure?</i><br/>
                        <button style="font-size: 0.8em; margin-top: 5px;">Reply</button>
                    </div>
                    <div style="border-left: 3px solid #FF9800; padding-left: 10px;">
                        <b>Sarah Johnson</b> (Today, 11:15 AM)<br/>
                        <i>Great work on this section!</i><br/>
                        <button style="font-size: 0.8em; margin-top: 5px;">Resolve</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h4>Exercise 3: Accept/Reject Changes (20 mins)</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <p><b>Review and finalize tracked changes:</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Review Changes</b>
                <ol>
                    <li>Open document with tracked changes</li>
                    <li>Review tab → <b>Show Markup</b> → ensure "All Markup" selected</li>
                    <li>Use Reviewing Pane (vertical or horizontal)</li>
                    <li>Navigate changes: Review tab → Next → Previous</li>
                    <li>Examine each change carefully</li>
                </ol>
                
                <b>Reviewing Pane Options:</b>
                <ul>
                    <li><b>Vertical:</b> Left side, shows all changes in list</li>
                    <li><b>Horizontal:</b> Bottom, shows changes in summary</li>
                    <li><b>Toggle:</b> Review tab → Reviewing Pane</li>
                    <li><b>Useful for:</b> Many changes, comprehensive review</li>
                </ul>
            </div>
            <div>
                <b>Accept/Reject Changes</b>
                <ol>
                    <li><b>Accept single change:</b> Click change → Accept</li>
                    <li><b>Reject single change:</b> Click change → Reject</li>
                    <li><b>Accept all:</b> Accept dropdown → Accept All Changes</li>
                    <li><b>Reject all:</b> Reject dropdown → Reject All Changes</li>
                    <li><b>Accept all and stop tracking:</b> Clean final document</li>
                </ol>
                
                <b>Keyboard Shortcuts:</b>
                <ul>
                    <li>Accept: <kbd>Ctrl + Alt + A</kbd></li>
                    <li>Reject: <kbd>Ctrl + Alt + R</kbd></li>
                    <li>Next change: <kbd>Ctrl + Alt + N</kbd></li>
                    <li>Previous change: <kbd>Ctrl + Alt + P</kbd></li>
                </ul>
                
                <div style="background: #fff3cd; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>💡 Pro Tip:</b> Always review changes before accepting all. Some changes might be incorrect or inappropriate.
                </div>
            </div>
        </div>
    </div>
</div>

<h3>☁️ Cloud Collaboration & Sharing</h3>
<div style="background-color: #f5f5f5; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🌐 Working with Others in Real Time</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>OneDrive & SharePoint Integration</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>📂 Save to Cloud</b>
                <ol>
                    <li>File → Save As → OneDrive or SharePoint</li>
                    <li>Create folder: "Collaboration Projects"</li>
                    <li>Save document to cloud location</li>
                    <li>Note: AutoSave turns on automatically</li>
                    <li>Changes saved every few seconds</li>
                </ol>
                
                <b>Benefits:</b>
                <ul>
                    <li>Access from any device</li>
                    <li>Automatic version history</li>
                    <li>Real-time collaboration</li>
                    <li>No "file in use" errors</li>
                    <li>Automatic backup</li>
                </ul>
            </div>
            <div>
                <b>👥 Share Document</b>
                <ol>
                    <li>Click <b>Share</b> button top-right</li>
                    <li>Enter email addresses</li>
                    <li>Choose permission level:
                        <ul>
                            <li><b>Can edit:</b> Full editing rights</li>
                            <li><b>Can comment:</b> Only add comments</li>
                            <li><b>Can view:</b> Read only</li>
                        </ul>
                    </li>
                    <li>Add message: "Please review this document"</li>
                    <li>Click Send</li>
                </ol>
                
                <b>Advanced Sharing:</b>
                <ul>
                    <li>Set expiration date for access</li>
                    <li>Require password</li>
                    <li>Block download</li>
                    <li>Get sharing link</li>
                    <li>Manage access permissions</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>🔗 Real-Time Co-Authoring</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>See Who's Editing</b>
                <ul>
                    <li>When others open shared document, see their presence</li>
                    <li>Profile pictures/initials appear top-right</li>
                    <li>See where others are editing (colored cursor)</li>
                    <li>Chat with co-authors (if enabled)</li>
                    <li>No more "file locked" messages</li>
                </ul>
                
                <b>Requirements:</b>
                <ul>
                    <li>Document saved to OneDrive/SharePoint</li>
                    <li>Using Word 2016+ or Word for Web</li>
                    <li>All users have permission to edit</li>
                    <li>Stable internet connection</li>
                </ul>
            </div>
            <div>
                <b>Collaboration Etiquette</b>
                <ul>
                    <li><b>Communicate:</b> Let others know what you're editing</li>
                    <li><b>Don't overwrite:</b> Wait if someone is actively editing section</li>
                    <li><b>Use comments:</b> For questions rather than direct edits</li>
                    <li><b>Save often:</b> AutoSave helps but good habit</li>
                    <li><b>Resolve conflicts:</b> If edits clash, discuss and choose</li>
                </ul>
                
                <div style="background: #f0f8ff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Real-time indicators:</b><br/>
                    • 🟢 Circle = person is active now<br/>
                    • ⚪ Hollow circle = person has document open<br/>
                    • 👤 Initials = who's editing each section
                </div>
            </div>
        </div>
    </div>
</div>

<h3>📊 Compare & Combine Documents</h3>
<div style="background-color: #fff8e1; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🔍 Review Multiple Document Versions</h4>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Document Comparison</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Compare Two Versions</b>
                <ol>
                    <li>Review tab → <b>Compare</b> → <b>Compare...</b></li>
                    <li>Choose:
                        <ul>
                            <li><b>Original document:</b> First version</li>
                            <li><b>Revised document:</b> Second version</li>
                            <li><b>Label changes:</b> As "Original" and "Revised"</li>
                        </ul>
                    </li>
                    <li>Click OK</li>
                    <li>Word creates new document showing differences</li>
                    <li>Three panes: Compared doc, Original, Revised</li>
                </ol>
                
                <b>Use Cases:</b>
                <ul>
                    <li>Compare contract versions</li>
                    <li>Review edits made by others</li>
                    <li>Check what changed between drafts</li>
                    <li>Legal document review</li>
                </ul>
            </div>
            <div>
                <b>Combine Multiple Versions</b>
                <ol>
                    <li>Review tab → <b>Compare</b> → <b>Combine...</b></li>
                    <li>Select two documents to combine</li>
                    <li>Word merges changes from both</li>
                    <li>Shows who made which changes</li>
                    <li>You accept/reject changes from both</li>
                </ol>
                
                <div style="background: #fff3e0; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>Compare vs Combine:</b><br/>
                    • <b>Compare:</b> See differences between two docs<br/>
                    • <b>Combine:</b> Merge changes from multiple editors into one doc
                </div>
                
                <b>Practical Example:</b>
                <ul>
                    <li>Three team members edit same document separately</li>
                    <li>Combine all three versions</li>
                    <li>See all changes color-coded by editor</li>
                    <li>Create final version with best changes</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 8px; margin: 15px 0;">
        <h5>Version History & AutoRecover</h5>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>📚 Version History (Cloud)</b>
                <ol>
                    <li>File → <b>Info</b> → <b>Version History</b></li>
                    <li>See list of saved versions with timestamps</li>
                    <li>Click any version to view it</li>
                    <li><b>Restore:</b> Make this the current version</li>
                    <li><b>Compare:</b> Compare with current version</li>
                </ol>
                
                <b>Auto-save intervals:</b>
                <ul>
                    <li>Cloud documents: Every few seconds</li>
                    <li>Local documents: Every 10 minutes (configurable)</li>
                    <li>Manual save: <kbd>Ctrl + S</kbd> always works</li>
                </ul>
            </div>
            <div>
                <b>💾 AutoRecover (Local)</b>
                <ol>
                    <li>If Word crashes, it attempts to recover documents</li>
                    <li>On restart, Document Recovery pane appears</li>
                    <li>Choose which version to recover</li>
                    <li>Save recovered version immediately</li>
                </ol>
                
                <b>Configure AutoRecover:</b>
                <ul>
                    <li>File → Options → Save</li>
                    <li>Save AutoRecover info every: 5 minutes</li>
                    <li>Keep last AutoRecovered version: Yes</li>
                    <li>AutoRecover file location: Note this path</li>
                </ul>
                
                <div style="background: #ffebee; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    <b>⚠️ Important:</b> AutoRecover is not a substitute for regular saves. Always save important documents manually and use cloud storage for critical work.
                </div>
            </div>
        </div>
    </div>
</div>

<h3>📋 Daily Assignment: Team Collaboration Project</h3>
<div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; border: 2px solid #4A90E2;">
    <h4>Task 1: Document Review Simulation (60 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Simulate a real workplace document review process:</b>
        
        <div style="border: 1px dashed #4A90E2; padding: 20px; margin: 15px 0; min-height: 300px;">
            <h3 style="text-align: center;">Project Proposal Document</h3>
            <p><b>To:</b> Review Committee</p>
            <p><b>From:</b> Project Team</p>
            <p><b>Date:</b> [Today's Date]</p>
            <p><b>Subject:</b> Proposal for New Marketing Campaign</p>
            
            <h4>1. Executive Summary</h4>
            <p>This proposal outlines a new marketing campaign targeting young professionals aged 25-35. The campaign will utilize social media platforms and influencer partnerships to increase brand awareness by 30% over six months.</p>
            
            <h4>2. Budget Requirements</h4>
            <p>The total budget required is $50,000, allocated as follows:</p>
            <ul>
                <li>Social media advertising: $20,000</li>
                <li>Influencer partnerships: $15,000</li>
                <li>Content creation: $10,000</li>
                <li>Analytics tools: $5,000</li>
            </ul>
            
            <h4>3. Timeline</h4>
            <p>The campaign will run from January to June 2024, with monthly performance reviews and adjustments based on analytics.</p>
        </div>
        
        <b>Role Play Exercise:</b>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>👤 Role 1: Author</b><br/>
                • Create initial document<br/>
                • Send for review<br/>
                • Incorporate feedback<br/>
                • Create final version
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>👤 Role 2: Manager</b><br/>
                • Review document<br/>
                • Add 5+ track changes<br/>
                • Add 3+ comments<br/>
                • Request specific revisions
            </div>
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <b>👤 Role 3: Finance Reviewer</b><br/>
                • Review budget section<br/>
                • Add 3+ comments on costs<br/>
                • Suggest alternatives<br/>
                • Request clarification
            </div>
        </div>
        
        <b>Deliverables:</b>
        <ol>
            <li>Initial document draft</li>
            <li>Document with all track changes and comments</li>
            <li>Final approved version (all changes accepted/rejected)</li>
            <li>Screenshot of version history</li>
            <li>Summary of review process</li>
        </ol>
    </div>
    
    <h4>Task 2: Create Collaboration Guide (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a one-page guide for your team on Word collaboration:</b>
        
        <div style="border: 1px solid #ddd; padding: 15px; margin: 15px 0; min-height: 200px;">
            <h3>Word Collaboration Best Practices</h3>
            
            <h4>1. Document Setup</h4>
            <ul>
                <li>Always save to shared location (OneDrive/SharePoint)</li>
                <li>Use descriptive file names with version numbers</li>
                <li>Enable AutoSave for cloud documents</li>
            </ul>
            
            <h4>2. Review Process</h4>
            <ul>
                <li>Turn on Track Changes when editing others' work</li>
                <li>Use Comments for questions and suggestions</li>
                <li>Be specific in feedback</li>
            </ul>
            
            <!-- More sections would follow -->
        </div>
        
        <b>Sections to Include:</b>
        <ol>
            <li><b>File Management:</b> Naming conventions, folder structure</li>
            <li><b>Review Process:</b> Track changes, comments, acceptance workflow</li>
            <li><b>Real-time Collaboration:</b> Co-authoring etiquette, communication</li>
            <li><b>Version Control:</b> Using version history, comparing documents</li>
            <li><b>Sharing & Permissions:</b> When to use view vs edit vs comment</li>
            <li><b>Troubleshooting:</b> Common issues and solutions</li>
        </ol>
        
        <b>Format:</b> Use professional formatting with styles, table of contents, and practical examples.
        <b>Save as:</b> Word_Collaboration_Guide.docx
    </div>
    
    <h4>Task 3: Compare & Merge Exercise (45 mins)</h4>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Practice document comparison and merging:</b>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
            <div>
                <b>Step 1: Create Three Versions</b>
                <ol>
                    <li><b>Version A:</b> Original project charter document</li>
                    <li><b>Version B:</b> Same document edited by "Team Lead" with changes to scope and timeline</li>
                    <li><b>Version C:</b> Same document edited by "Finance" with changes to budget</li>
                </ol>
                
                <b>Create realistic differences:</b>
                <ul>
                    <li>Different numbers in budget section</li>
                    <li>Added/removed project deliverables</li>
                    <li>Changed timeline dates</li>
                    <li>Different team member assignments</li>
                </ul>
            </div>
            <div>
                <b>Step 2: Compare & Combine</b>
                <ol>
                    <li>Compare Version A vs Version B</li>
                    <li>Note all differences</li>
                    <li>Combine Version B and Version C</li>
                    <li>Create final document with best changes from both</li>
                    <li>Document your decisions</li>
                </ol>
                
                <b>Deliverables:</b>
                <ul>
                    <li>Three original versions (A, B, C)</li>
                    <li>Comparison report (A vs B)</li>
                    <li>Combined document (B + C merged)</li>
                    <li>Final approved version</li>
                </ul>
            </div>
        </div>
        
        <div style="background: #f0f8ff; padding: 15px; margin-top: 15px; border-radius: 5px;">
            <b>💡 Real-World Scenario:</b> This simulates when different departments provide input on a project document. The project manager must combine all inputs into one coherent document.
        </div>
    </div>
</div>

<h3>💡 Professional Collaboration Etiquette</h3>
<div style="background-color: #e3f2fd; padding: 15px; border-radius: 10px; margin: 20px 0;">
    <h4>🎯 Best Practices for Workplace Collaboration</h4>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin: 15px 0;">
        <div>
            <h5>📧 Communication Guidelines</h5>
            <ul>
                <li><b>Be clear in comments:</b> "Please clarify this point" not "This is wrong"</li>
                <li><b>Use @mentions:</b> When specific action is needed from someone</li>
                <li><b>Respond timely:</b> Acknowledge comments within business hours</li>
                <li><b>Keep tone professional:</b> Even in informal teams</li>
                <li><b>Document decisions:</b> Use comments to record why changes were made</li>
            </ul>
            
            <h5>📁 File Management</h5>
            <ul>
                <li><b>Naming convention:</b> ProjectName_DocumentType_Date_Version</li>
                <li><b>Folder structure:</b> Organized by project/date/type</li>
                <li><b>Version control:</b> Don't use "Final_FINAL_reallyfinal.docx"</li>
                <li><b>Archive old versions:</b> Move to "Archive" folder when done</li>
                <li><b>Backup strategy:</b> Cloud + local backup for critical documents</li>
            </ul>
        </div>
        <div>
            <h5>👥 Team Collaboration</h5>
            <ul>
                <li><b>Define roles:</b> Who can edit vs comment vs view</li>
                <li><b>Set deadlines:</b> Clear review timelines</li>
                <li><b>Use meeting notes:</b> Document decisions in Word</li>
                <li><b>Establish workflow:</b> Draft → Review → Revise → Approve</li>
                <li><b>Celebrate completion:</b> Acknowledge team contributions</li>
            </ul>
            
            <h5>🔒 Security & Privacy</h5>
            <ul>
                <li><b>Share appropriately:</b> Only with necessary people</li>
                <li><b>Use permissions:</b> View vs edit vs comment rights</li>
                <li><b>Remove access:</b> When people leave project/company</li>
                <li><b>Check for sensitive info:</b> Before sharing externally</li>
                <li><b>Use watermarks:</b> For confidential documents</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h5>🚀 Productivity Tips</h5>
        <ul>
            <li><b>Use templates:</b> For consistent formatting across team</li>
            <li><b>Keyboard shortcuts:</b> Learn essential ones for speed</li>
            <li><b>AutoCorrect entries:</b> Create team-specific shortcuts</li>
            <li><b>Style sets:</b> Ensure everyone uses same styles</li>
            <li><b>Training:</b> Ensure team knows collaboration features</li>
            <li><b>Feedback loop:</b> Regularly improve collaboration process</li>
        </ul>
    </div>
</div>

<h3>💡 Tutor Teaching Tips</h3>
<div style="background-color: #fff3cd; padding: 15px; border-radius: 10px;">
    <h4>🎓 Teaching Collaboration Effectively</h4>
    <ul>
        <li><b>Construction Team Analogy:</b> Students understand different roles and coordination</li>
        <li><b>Common Student Struggles:</b>
            <ul>
                <li>Understanding track changes display modes</li>
                <li>Knowing when to use comments vs track changes</li>
                <li>Cloud vs local document differences</li>
                <li>Accepting/rejecting changes appropriately</li>
                <li>Sharing permissions and security</li>
            </ul>
        </li>
        <li><b>Teaching Strategy:</b>
            <ul>
                <li>Role-play different workplace scenarios</li>
                <li>Show "bad" examples of collaboration (all caps comments, no tracking)</li>
                <li>Demonstrate time savings of proper collaboration</li>
                <li>Emphasize professional communication in comments</li>
                <li>Show real-time co-authoring magic (if possible)</li>
            </ul>
        </li>
        <li><b>Real-World Connection:</b>
            <ul>
                <li>"Your manager will expect you to use track changes"</li>
                <li>"Team projects require document sharing"</li>
                <li>"Client contracts need version comparison"</li>
                <li>"Professional communication matters in comments"</li>
            </ul>
        </li>
    </ul>
</div>

<h3>🎯 Learning Objectives Checklist</h3>
<div style="background-color: #f1f8e9; padding: 15px; border-radius: 10px;">
    <label><input type="checkbox"> Can use Track Changes to show document edits</label><br/>
    <label><input type="checkbox"> Knows how to add, reply to, and resolve comments</label><br/>
    <label><input type="checkbox"> Can accept or reject tracked changes appropriately</label><br/>
    <label><input type="checkbox"> Understands how to save and share documents via cloud</label><br/>
    <label><input type="checkbox"> Knows how to compare two documents to see differences</label><br/>
    <label><input type="checkbox"> Can combine changes from multiple document versions</label><br/>
    <label><input type="checkbox"> Understands version history and can restore previous versions</label><br/>
    <label><input type="checkbox"> Knows professional collaboration etiquette</label><br/>
    <label><input type="checkbox"> Can set appropriate sharing permissions</label><br/>
    <label><input type="checkbox"> Understands real-time co-authoring features and etiquette</label>
</div>

<h3>📚 Additional Resources</h3>
<div style="background-color: #e8f5e8; padding: 15px; border-radius: 10px;">
    <ul>
        <li><b>Interactive Tutorial:</b> <a href="https://support.microsoft.com/en-us/office/collaborate-on-word-documents-with-real-time-co-authoring-7dd3040c-3f30-4fdd-bab0-8586492a1f1d">Microsoft Collaboration Guide</a></li>
        <li><b>Video:</b> "Word Track Changes and Comments Complete Guide" by Teacher's Tech (YouTube)</li>
        <li><b>Template:</b> <a href="https://templates.office.com/en-us/document-review-checklist-tm16400962">Document Review Checklist Template</a></li>
        <li><b>Practice:</b> Collaborate on a real document with classmates or colleagues</li>
        <li><b>Next Session:</b> Day 4-4 - Module 2 Final Project</li>
    </ul>
</div>
`
            },
            "4-4": {
                icon: "fa-file-alt",
                title: "Module 2 Final Project: Professional Report Creation",
                html: `<h1>Week 4, Day 4: Module 2 Final Project</h1>
<p>Today you will demonstrate all the Microsoft Word skills you've learned by creating a comprehensive, professional "Technology Report" that showcases formatting, styles, references, and layout techniques.</p>

<div class="analogy-box">
    <b>Analogy: The Architect's Final Blueprint 🏗️</b><br/>
    
    Planning: Architect's vision and sketches<br/>
    Structure: Foundation, walls, rooms (Styles & Headers)<br/>
    Details: Windows, doors, finishes (Formatting & Images)<br/>
    Documentation: Measurements, materials list (Table of Contents)<br/>
    Professional Touch: Final review and presentation<br/>
    Deliverable: Complete building ready for client
</div>

<h3>Final Project Overview</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📋 Project Requirements Checklist</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Section</th>
            <th style="padding: 10px; text-align: left;">Requirements</th>
            <th style="padding: 10px; text-align: left;">Points</th>
            <th style="padding: 10px; text-align: left;">Status</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Cover Page</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Title, Author, Date, Professional design</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Table of Contents</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Auto-generated, 2 levels, page numbers</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Executive Summary</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1 page, professional formatting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Main Content (3 pages)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Proper styles, images, tables, citations</td>
            <td style="padding: 8px; border: 1px solid #ddd;">30</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">References Page</td>
            <td style="padding: 8px; border: 1px solid #ddd;">APA format, minimum 5 sources</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Appendix</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Tables, charts, additional data</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Professional Formatting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Consistent styles, headers/footers, page numbers</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #4CAF50; color: white;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>TOTAL</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;"></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>100</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;"></td>
        </tr>
    </table>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🎯 Project Theme: "The Future of Artificial Intelligence in Education"</h5>
        <p>Create a 5-page professional report on how AI is transforming education. Include:</p>
        <ul>
            <li>Current applications of AI in classrooms</li>
            <li>Benefits and challenges</li>
            <li>Future predictions and recommendations</li>
            <li>Case studies or examples</li>
        </ul>
    </div>
</div>

<h3>Step-by-Step Creation Guide</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Step 1: Document Setup & Cover Page (30 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <ol>
            <li><b>Create New Document:</b> Save as "AI_in_Education_Report_YourName.docx"</li>
            <li><b>Set Document Properties:</b> File → Info → Add title, author, keywords</li>
            <li><b>Create Cover Page:</b> Insert → Cover Page → Choose "Austin" or "Ion" style</li>
            <li><b>Customize Cover:</b>
                <ul>
                    <li>Title: "The Future of Artificial Intelligence in Education"</li>
                    <li>Subtitle: "A Comprehensive Analysis and Forecast"</li>
                    <li>Author: Your Name</li>
                    <li>Date: Current date (Insert → Date & Time)</li>
                    <li>Course: "IT Foundation Course - Module 2 Final Project"</li>
                </ul>
            </li>
            <li><b>Add Page Break:</b> Ctrl+Enter after cover page</li>
        </ol>
    </div>

    <h4>Step 2: Table of Contents & Styles Setup (45 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <ol>
            <li><b>Create Section Headings:</b> Type these headings on page 2:
                <ul>
                    <li>TABLE OF CONTENTS (apply Heading 1)</li>
                    <li>EXECUTIVE SUMMARY (apply Heading 1)</li>
                    <li>INTRODUCTION (apply Heading 1)</li>
                    <li>CURRENT APPLICATIONS OF AI IN EDUCATION (apply Heading 1)</li>
                    <li>BENEFITS AND CHALLENGES (apply Heading 1)</li>
                    <li>FUTURE PREDICTIONS (apply Heading 1)</li>
                    <li>RECOMMENDATIONS (apply Heading 1)</li>
                    <li>CONCLUSION (apply Heading 1)</li>
                    <li>REFERENCES (apply Heading 1)</li>
                    <li>APPENDIX (apply Heading 1)</li>
                </ul>
            </li>
            <li><b>Customize Heading Styles:</b>
                <ul>
                    <li>Right-click Heading 1 → Modify</li>
                    <li>Font: Calibri Light, 16pt, Dark Blue color</li>
                    <li>Paragraph: Space After 12pt, Keep with next</li>
                    <li>Create Heading 2: Arial, 14pt, Blue, for sub-sections</li>
                </ul>
            </li>
            <li><b>Generate Table of Contents:</b>
                <ul>
                    <li>Place cursor under "TABLE OF CONTENTS" heading</li>
                    <li>References → Table of Contents → Custom Table of Contents</li>
                    <li>Show levels: 2, Right align page numbers, Dot leaders</li>
                </ul>
            </li>
            <li><b>Add Page Break:</b> After TOC</li>
        </ol>
    </div>

    <h4>Step 3: Executive Summary & Main Content (60 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>A. Executive Summary (Page 3):</b></p>
        <ol>
            <li>Write a one-page summary of the entire report</li>
            <li>Use professional business language</li>
            <li>Include key findings and recommendations</li>
            <li>Apply Normal style to body text</li>
            <li>Add page break at end</li>
        </ol>
        
        <p><b>B. Main Content (Pages 4-6):</b></p>
        <ol>
            <li><b>Introduction:</b> Background, purpose, scope of report</li>
            <li><b>Current Applications:</b> Include:
                <ul>
                    <li>Smart tutoring systems</li>
                    <li>Automated grading</li>
                    <li>Personalized learning paths</li>
                    <li>Use Heading 2 for each application type</li>
                </ul>
            </li>
            <li><b>Benefits Section:</b> Create a table:
                <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
                    <tr style="background: #4CAF50; color: white;">
                        <th style="padding: 8px; border: 1px solid #ddd;">Benefit</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Description</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
                    </tr>
                </table>
            </li>
            <li><b>Insert Images:</b> Add at least 2 relevant images with captions
                <ul>
                    <li>Insert → Pictures → Online Pictures (search "AI education")</li>
                    <li>Add caption: References → Insert Caption</li>
                    <li>Wrap text: Square or Tight</li>
                </ul>
            </li>
            <li><b>Add Citations:</b> References → Insert Citation → Add New Source
                <ul>
                    <li>Type: Journal Article, Book, Website</li>
                    <li>Minimum 5 citations throughout document</li>
                </ul>
            </li>
        </ol>
    </div>

    <h4>Step 4: References & Appendix (45 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <ol>
            <li><b>References Page:</b>
                <ul>
                    <li>Place cursor at end of document</li>
                    <li>References → Bibliography → References</li>
                    <li>Ensure APA 7th edition format</li>
                    <li>Alphabetical order by author last name</li>
                    <li>Hanging indent for all entries</li>
                </ul>
            </li>
            <li><b>Appendix Section:</b>
                <ul>
                    <li>Add page break before Appendix</li>
                    <li>Include: Survey results, detailed data tables, charts</li>
                    <li>Create a chart: Insert → Chart → Column Chart</li>
                    <li>Label Appendix items: Appendix A, Appendix B, etc.</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<h3>Professional Formatting Requirements</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #4CAF50;">
            <h5>📐 Page Layout</h5>
            <ul>
                <li>Margins: 1 inch all sides (Normal)</li>
                <li>Orientation: Portrait (except Appendix tables if needed)</li>
                <li>Paper Size: Letter (8.5" × 11")</li>
                <li>Gutter: 0 (unless binding needed)</li>
                <li>Section Breaks: Use for different formatting</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #2196F3;">
            <h5>🔤 Typography</h5>
            <ul>
                <li>Font: Calibri (Body) or Times New Roman</li>
                <li>Size: 11pt for body, 12pt for headings</li>
                <li>Line Spacing: 1.15 for body, single for tables</li>
                <li>Paragraph Spacing: 6pt after paragraphs</li>
                <li>Alignment: Justified for body, Left for headings</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #FF9800;">
            <h5>📄 Headers & Footers</h5>
            <ul>
                <li>Header: Report title (short version)</li>
                <li>Footer: Page numbers (excluding cover)</li>
                <li>Different First Page: Yes (no header/footer on cover)</li>
                <li>Page Numbers: Bottom center, start on page 2</li>
                <li>Format: "Page X of Y"</li>
            </ul>
        </div>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>🎯 Professional Touch Checklist:</h5>
        <ul>
            <li>✓ All headings use consistent styles</li>
            <li>✓ Images have captions and proper wrapping</li>
            <li>✓ Tables have headers and alternating row colors</li>
            <li>✓ Citations match references exactly</li>
            <li>✓ No widows/orphans (single lines at page top/bottom)</li>
            <li>✓ All hyperlinks are active and correct</li>
            <li>✓ Spelling and grammar checked (F7)</li>
        </ul>
    </div>
</div>

<h3>Project Work Session (2 Hours)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Work Plan - Time Management</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Time</th>
            <th style="padding: 10px; text-align: left;">Task</th>
            <th style="padding: 10px; text-align: left;">Deliverable</th>
            <th style="padding: 10px; text-align: left;">Check</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">0-30 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Setup & Planning</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Document structure, outline</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">30-60 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Cover, TOC, Headers</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Professional front matter</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">60-90 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Content Creation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">3 pages of main content</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">90-120 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Formatting & Polish</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Final professional touches</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
    </table>
    
    <h4>🎯 Content Creation Tips</h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>📝 Writing Content</h5>
            <ul>
                <li><b>Use =lorem() function:</b> =lorem(5,3) for 5 paragraphs, 3 sentences each</li>
                <li><b>Research facts:</b> Include real statistics about AI in education</li>
                <li><b>Create bullet points:</b> For benefits, challenges, recommendations</li>
                <li><b>Add quotes:</b> Use Text Box for important quotes from experts</li>
                <li><b>Include examples:</b> Real-world case studies add credibility</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>🖼️ Visual Elements</h5>
            <ul>
                <li><b>SmartArt:</b> Insert → SmartArt for process diagrams</li>
                <li><b>Icons:</b> Insert → Icons (modern flat icons)</li>
                <li><b>Charts:</b> Create in Excel, paste as linked chart</li>
                <li><b>Screenshots:</b> Insert → Screenshot for AI tool interfaces</li>
                <li><b>Shapes:</b> Use arrows, callouts to highlight points</li>
            </ul>
        </div>
    </div>
    
    <h4>🎯 Troubleshooting Common Issues</h4>
    <div style="background: #ffebee; padding: 15px; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Problem:</b> TOC not updating</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Solution:</b> Right-click TOC → Update Field → Update entire table</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Problem:</b> Page numbers wrong</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Solution:</b> Use Section Breaks, unlink previous sections</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Problem:</b> Images moving strangely</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Solution:</b> Set Layout Options to "In Line with Text" or "Square"</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Problem:</b> Styles not applying</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>Solution:</b> Clear formatting first (Ctrl+Space), then apply style</td>
            </tr>
        </table>
    </div>
</div>

<h3>Submission Requirements</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>File Name Format:</b> LastName_FirstName_AI_Education_Report.docx
    
    <h4>📤 Submission Checklist:</h4>
    <ul>
        <li>□ 5+ pages total (Cover + 4 content pages minimum)</li>
        <li>□ Professional cover page with all required elements</li>
        <li>□ Auto-generated Table of Contents with page numbers</li>
        <li>□ Consistent use of Heading 1 and Heading 2 styles</li>
        <li>□ Minimum 2 images with captions and proper wrapping</li>
        <li>□ Minimum 1 professional table with formatting</li>
        <li>□ Minimum 5 citations in APA format</li>
        <li>□ References page in correct alphabetical order</li>
        <li>□ Appendix with at least one chart or additional table</li>
        <li>□ Headers and footers on all pages except cover</li>
        <li>□ Page numbers in "Page X of Y" format</li>
        <li>□ Spelling and grammar checked (F7 used)</li>
    </ul>
    
    <h4>🎯 Grading Rubric:</h4>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Category</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Excellent (90-100%)</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Good (75-89%)</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Needs Work (Below 75%)</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Professionalism</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Looks like business document, impeccable formatting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Mostly professional, minor formatting issues</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Appears amateurish, many formatting errors</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Technical Skills</td>
            <td style="padding: 8px; border: 1px solid #ddd;">All required features implemented perfectly</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Most features implemented, some errors</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Missing key features, significant errors</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Content Quality</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Well-researched, coherent, professional tone</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Adequate content, some organizational issues</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Poor content, disorganized, unprofessional</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Attention to Detail</td>
            <td style="padding: 8px; border: 1px solid #ddd;">No spelling/grammar errors, perfect consistency</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Few minor errors, mostly consistent</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Many errors, inconsistent formatting</td>
        </tr>
    </table>
</div>

<h3>Module 2 Skills Demonstrated</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #4CAF50;">📝</div>
            <div><b>Styles & Formatting</b></div>
        </div>
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #2196F3;">📊</div>
            <div><b>Tables & Images</b></div>
        </div>
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #FF9800;">📑</div>
            <div><b>Page Layout</b></div>
        </div>
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #9C27B0;">🔗</div>
            <div><b>References</b></div>
        </div>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>🎓 Module 2 Learning Outcomes:</h5>
        <p>By completing this project, you demonstrate mastery of:</p>
        <ol>
            <li>Creating professional document structures</li>
            <li>Using styles consistently for document formatting</li>
            <li>Incorporating visual elements effectively</li>
            <li>Managing multi-page documents with headers/footers</li>
            <li>Creating automated tables of contents</li>
            <li>Implementing proper citation and reference systems</li>
            <li>Applying professional business document standards</li>
        </ol>
    </div>
</div>

<h3>Next Steps After Submission</h3>
<div style="background-color: #fff3cd; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📚 Preparation for Module 3: Microsoft Excel</h4>
    
    <p><b>Congratulations on completing Module 2! 🎉</b></p>
    
    <p><b>What's Next:</b></p>
    <ul>
        <li><b>Week 5:</b> Excel Basics - Cells, Formulas, Charts</li>
        <li><b>Week 6:</b> Advanced Excel - Logic, Lookups, Pivot Tables</li>
        <li><b>Skills You'll Learn:</b> Data analysis, calculations, automation</li>
        <li><b>Final Project:</b> Student Grade Tracker with automatic grading</li>
    </ul>
    
    <p><b>Preparation Tasks:</b></p>
    <ol>
        <li>Ensure Microsoft Excel is installed on your computer</li>
        <li>Practice basic keyboard shortcuts (Ctrl+C, Ctrl+V, Ctrl+Z)</li>
        <li>Think about data you work with regularly (grades, budgets, lists)</li>
        <li>Review basic math operations (addition, multiplication, percentages)</li>
        <li>Save your Module 2 project as a portfolio piece</li>
    </ol>
    
    <div style="background: #E8F5E8; padding: 10px; margin-top: 10px; border-radius: 5px;">
        <p><b>🎯 Tutor's Final Word on Module 2:</b></p>
        <p><i>"Word is about communication. A well-formatted document shows respect for your reader and your content. The skills you've learned here will serve you in school, work, and personal projects. Remember: Good formatting should be invisible—it helps the content shine without drawing attention to itself."</i></p>
    </div>
</div>

<h3>Support Resources</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        
        <div>
            <h5>💻 Microsoft Word Help:</h5>
            <ul>
                <li>F1: Word Help (search for any feature)</li>
                <li>Alt+Q: Tell me what you want to do</li>
                <li>Right-click: Context menu for quick options</li>
                <li>File → Options → Customize Ribbon: Personalize interface</li>
            </ul>
        </div>
        
        <div>
            <h5>📚 Online Resources:</h5>
            <ul>
                <li>Microsoft Support: support.microsoft.com/word</li>
                <li>APA Format Guide: apastyle.apa.org</li>
                <li>Free Stock Images: pixels.com, unsplash.com</li>
                <li>Grammar Check: grammarly.com (free version)</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px; text-align: center;">
        <p><b>Need Help During Project Work?</b></p>
        <p>Raise your hand or ask in chat! The tutor is here to help with:</p>
        <ul style="display: inline-block; text-align: left;">
            <li>Technical issues with Word features</li>
            <li>Clarification on requirements</li>
            <li>Troubleshooting formatting problems</li>
            <li>Review of your work-in-progress</li>
        </ul>
    </div>
</div>
`
            },

            "5-1": {
                icon: "fa-table",
                title: "Excel Basics: Cells, Rows & The Grid",
                html: `<h1>Week 5, Day 1: Microsoft Excel - Cells, Rows & The Grid</h1>
<p>Today we transition from Word to Excel, learning to navigate the spreadsheet environment and understand data organization.</p>

<div class="analogy-box">
    <b>Analogy: The Digital Filing Cabinet 📁</b><br/>
    
    Excel Workbook: A filing cabinet<br/>
    Worksheets: Individual drawers in the cabinet<br/>
    Columns: Hanging folders (A, B, C...)<br/>
    Rows: Individual files in each folder (1, 2, 3...)<br/>
    Cells: Specific documents within files<br/>
    Formulas: Automated file sorting and calculations
</div>

<h3>Excel Interface Tour</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Excel Workspace Components</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Component</th>
            <th style="padding: 10px; text-align: left;">Purpose</th>
            <th style="padding: 10px; text-align: left;">Location</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Name Box</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Shows active cell address</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Top-left above grid</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Formula Bar</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Where formulas are entered</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Next to Name Box</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Column Headers</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Letters A, B, C, etc.</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Top of spreadsheet</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Row Headers</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Numbers 1, 2, 3, etc.</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Left side of spreadsheet</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Worksheet Tabs</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Different sheets in workbook</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Bottom-left</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Status Bar</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Shows calculations (SUM, AVERAGE)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Bottom of window</td>
        </tr>
    </table>
</div>

<h3>Understanding Data Types</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h4>📝 Text Data</h4>
            <ul>
                <li>Names, addresses, descriptions</li>
                <li>Default left-aligned</li>
                <li>Can include numbers (Phone: 555-1234)</li>
                <li>Maximum length: 32,767 characters</li>
                <li><b>Tutor Tip:</b> Prefix with apostrophe (') to force text: '001</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h4>🔢 Number Data</h4>
            <ul>
                <li>Quantities, amounts, measurements</li>
                <li>Default right-aligned</li>
                <li>Can be formatted: $, %, decimals</li>
                <li>Precision: 15 significant digits</li>
                <li><b>Tutor Tip:</b> Use Format Cells for consistent number display</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h4>📅 Date/Time Data</h4>
            <ul>
                <li>Excel stores dates as serial numbers</li>
                <li>January 1, 1900 = 1</li>
                <li>Each day adds 1 to the serial number</li>
                <li>Times are decimal fractions (0.5 = 12:00 PM)</li>
                <li><b>Tutor Tip:</b> Ctrl+; inserts today's date</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h4>✅ Boolean Data</h4>
            <ul>
                <li>TRUE or FALSE values</li>
                <li>Result of logical tests</li>
                <li>Can be used in formulas</li>
                <li>Centered by default</li>
                <li><b>Tutor Tip:</b> =1=1 returns TRUE, =1=2 returns FALSE</li>
            </ul>
        </div>
    </div>
</div>

<h3>Essential Navigation Shortcuts</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Shortcut</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Action</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Memory Aid</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Ctrl + Arrow Key</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Jump to edge of data region</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Run to the border"</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Ctrl + Home</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Go to cell A1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Return to start"</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Ctrl + End</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Go to last used cell</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Find the finish line"</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">F2</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Edit active cell</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"F2 = Fix/Edit"</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Ctrl + Space</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Select entire column</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Space between columns"</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Shift + Space</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Select entire row</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Space between rows"</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Ctrl + Page Up/Down</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Switch between worksheets</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Flip pages"</td>
        </tr>
    </table>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Create a Student Roster</h4>
    <ol>
        <li>Open new Excel workbook, rename Sheet1 to "Students"</li>
        <li>Create these headers in row 1:
            <ul>
                <li>A1: Student ID</li>
                <li>B1: Full Name</li>
                <li>C1: Age</li>
                <li>D1: Grade Level</li>
                <li>E1: Enrollment Date</li>
                <li>F1: Tuition Owed</li>
            </ul>
        </li>
        <li>Enter data for 10 students (make it realistic)</li>
        <li>Format columns appropriately:
            <ul>
                <li>Student ID: Text (start with 'S')</li>
                <li>Tuition Owed: Currency ($)</li>
                <li>Enrollment Date: Date format</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Auto-Fill Techniques</h4>
    <ol>
        <li>Create sequential numbering:
            <ul>
                <li>In A2, type 'S001'</li>
                <li>Drag fill handle down to A11</li>
                <li>Try both: drag with left mouse vs. Ctrl+drag</li>
            </ul>
        </li>
        <li>Create weekday schedule:
            <ul>
                <li>In G1, type "Monday"</li>
                <li>Drag fill handle to K1</li>
                <li>Notice: Excel knows days of week!</li>
            </ul>
        </li>
        <li>Create monthly series:
            <ul>
                <li>In L1, type "January"</li>
                <li>Drag fill handle right to see months</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 3: Cell Formatting</h4>
    <ol>
        <li>Select header row (row 1)</li>
        <li>Apply: Bold, Center alignment, Fill Color</li>
        <li>Select Age column, set to Number with 0 decimals</li>
        <li>Select Tuition column, set to Currency with 2 decimals</li>
        <li>Adjust column widths to fit content (double-click column borders)</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Personal Budget Tracker"</b>
    
    <h4>Requirements:</h4>
    <ul>
        <li><b>Sheet 1: Income</b>
            <ul>
                <li>List all income sources (Salary, Freelance, Investments)</li>
                <li>Include monthly amounts</li>
                <li>Calculate total monthly income</li>
            </ul>
        </li>
        <li><b>Sheet 2: Expenses</b>
            <ul>
                <li>Categories: Housing, Transportation, Food, Entertainment, etc.</li>
                <li>Budgeted vs. Actual columns</li>
                <li>Calculate total expenses</li>
            </ul>
        </li>
        <li><b>Sheet 3: Summary</b>
            <ul>
                <li>Net Income calculation (Income - Expenses)</li>
                <li>Savings percentage</li>
                <li>Color code: Green for positive, Red for negative</li>
            </ul>
        </li>
    </ul>
    
    <h4>Technical Requirements:</h4>
    <ul>
        <li>Use proper data types for each column</li>
        <li>Apply consistent formatting</li>
        <li>Use freeze panes to keep headers visible</li>
        <li>Create a custom cell style for totals</li>
        <li>Save file as: LastName_Budget_Tracker.xlsx</li>
    </ul>
    
    <b>Challenge Task:</b>
    <p>Add a "Goals" sheet that tracks saving goals (Car, Vacation, Emergency Fund) with:</p>
    <ul>
        <li>Target amount</li>
        <li>Current saved amount</li>
        <li>Months remaining at current saving rate</li>
        <li>Progress bar using conditional formatting</li>
    </ul>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Excel Structure:</b> Workbooks → Worksheets → Cells hierarchy</li>
    <li><b>Data Types Matter:</b> Text vs. Numbers vs. Dates behave differently</li>
    <li><b>Efficient Navigation:</b> Keyboard shortcuts save time</li>
    <li><b>Auto-Fill Intelligence:</b> Excel recognizes patterns (days, months, sequences)</li>
    <li><b>Formatting for Clarity:</b> Proper formatting makes data readable</li>
    <li><b>Organization:</b> Multiple sheets for logical data separation</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Excel Best Practices - Day 1:</h3>
    <ul>
        <li><b>Always Start with Headers:</b> Clear column titles are essential</li>
        <li><b>One Data Type Per Column:</b> Don't mix text and numbers in same column</li>
        <li><b>Leave Row 1 for Headers:</b> Start data in row 2</li>
        <li><b>Use Freeze Panes:</b> Keep headers visible while scrolling</li>
        <li><b>Name Sheets Meaningfully:</b> Not just Sheet1, Sheet2</li>
        <li><b>Save Early, Save Often:</b> Excel can crash with large files</li>
        <li><b>Test on Small Data First:</b> Before applying to entire dataset</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Excel Formulas - The Big 5</b></p>
    <ul>
        <li>Review today's budget tracker</li>
        <li>Think about calculations you did manually</li>
        <li>Practice typing in cells without using mouse</li>
        <li>Try to create a simple list of 20 numbers</li>
        <li>Explore the Formulas tab in Excel ribbon</li>
    </ul>
    <p><i>Tutor Note: Remind students that Excel is about automation. If they're doing something manually more than twice, there's probably a formula for it!</i></p>
</div>
`
            },
            "5-2": {
                icon: "fa-calculator",
                title: "Excel Formulas: The Big 5 Functions",
                html: `<h1>Week 5, Day 2: Excel Formulas - The Big 5 Functions</h1>
<p>Today we make Excel work for us by learning essential formulas that automate calculations and analysis.</p>

<div class="analogy-box">
    <b>Analogy: The Math Factory Assembly Line 🏭</b><br/>
    
    Raw Data: Raw materials arriving at factory<br/>
    Formulas: Machines that process materials<br/>
    SUM(): Conveyor belt that adds everything<br/>
    AVERAGE(): Quality control measuring typical size<br/>
    COUNT(): Inventory counter<br/>
    MIN/MAX(): Finding smallest/largest products<br/>
    Results: Finished products ready for shipping
</div>

<h3>The Formula Foundation</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Formula Rules & Syntax</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Rule</th>
            <th style="padding: 10px; text-align: left;">Example</th>
            <th style="padding: 10px; text-align: left;">Why It Matters</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Always start with =</td>
            <td style="padding: 8px; border: 1px solid #ddd;">=SUM(A1:A10)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Tells Excel this is a formula, not text</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Use parentheses ()</td>
            <td style="padding: 8px; border: 1px solid #ddd;">=AVERAGE(B2:B20)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Contains the arguments</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Colon for ranges</td>
            <td style="padding: 8px; border: 1px solid #ddd;">A1:A10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Means "from A1 to A10"</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Comma for multiple items</td>
            <td style="padding: 8px; border: 1px solid #ddd;">=SUM(A1, B1, C1)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Separates individual cells</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Reference cells, not values</td>
            <td style="padding: 8px; border: 1px solid #ddd;">=A1+A2 (not =5+10)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Formulas update when data changes</td>
        </tr>
    </table>
    
    <div style="margin-top: 20px; padding: 15px; background: #fff3cd; border-radius: 5px;">
        <h5>🎯 The Golden Rule of Excel Formulas:</h5>
        <p><b>"Never type numbers into formulas; always reference cells containing numbers."</b></p>
        <p>Why? If the data changes, formulas update automatically. This is the core of Excel's power!</p>
    </div>
</div>

<h3>The Big 5 Functions - Deep Dive</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        
        <!-- SUM Function -->
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #4CAF50;">
            <h4>1. SUM() - The Adder</h4>
            <p><b>Purpose:</b> Adds all numbers in a range</p>
            <p><b>Syntax:</b> =SUM(number1, [number2], ...)</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>=SUM(A1:A10) - Adds cells A1 through A10</li>
                <li>=SUM(A1, B1, C1) - Adds three specific cells</li>
                <li>=SUM(A1:A10, C1:C10) - Adds two ranges</li>
            </ul>
            <p><b>Real-world use:</b> Total sales, expenses, hours worked</p>
            <p><b>Shortcut:</b> Alt + = (AutoSum)</p>
        </div>
        
        <!-- AVERAGE Function -->
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #2196F3;">
            <h4>2. AVERAGE() - The Balancer</h4>
            <p><b>Purpose:</b> Calculates mean of numbers</p>
            <p><b>Syntax:</b> =AVERAGE(number1, [number2], ...)</p>
            <p><b>Important:</b> Ignores empty cells and text</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>=AVERAGE(B2:B20) - Average test scores</li>
                <li>=AVERAGE(weekly_sales) - Named range</li>
            </ul>
            <p><b>Real-world use:</b> Grade averages, temperature means, performance metrics</p>
        </div>
        
        <!-- COUNT Function -->
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #FF9800;">
            <h4>3. COUNT() - The Counter</h4>
            <p><b>Purpose:</b> Counts cells with numbers</p>
            <p><b>Syntax:</b> =COUNT(value1, [value2], ...)</p>
            <p><b>Variations:</b></p>
            <ul>
                <li>COUNTA() - Counts non-empty cells (any data)</li>
                <li>COUNTBLANK() - Counts empty cells</li>
            </ul>
            <p><b>Examples:</b></p>
            <ul>
                <li>=COUNT(A1:A100) - How many test scores entered</li>
                <li>=COUNTA(B2:B50) - How many students registered</li>
            </ul>
            <p><b>Real-world use:</b> Attendance, inventory items, survey responses</p>
        </div>
        
        <!-- MIN Function -->
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #9C27B0;">
            <h4>4. MIN() - The Finder (Smallest)</h4>
            <p><b>Purpose:</b> Returns smallest number in range</p>
            <p><b>Syntax:</b> =MIN(number1, [number2], ...)</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>=MIN(C2:C30) - Lowest test score</li>
                <li>=MIN(stock_prices) - Lowest price this month</li>
            </ul>
            <p><b>Real-world use:</b> Minimum temperature, lowest bid, worst performance</p>
            <p><b>Note:</b> For earliest date, use MIN (dates are numbers)</p>
        </div>
        
        <!-- MAX Function -->
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #F44336;">
            <h4>5. MAX() - The Finder (Largest)</h4>
            <p><b>Purpose:</b> Returns largest number in range</p>
            <p><b>Syntax:</b> =MAX(number1, [number2], ...)</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>=MAX(D2:D40) - Highest sales amount</li>
                <li>=MAX(temperatures) - Hottest day</li>
            </ul>
            <p><b>Real-world use:</b> Maximum capacity, peak performance, record highs</p>
            <p><b>Note:</b> For latest date, use MAX</p>
        </div>
        
        <!-- Combined Example -->
        <div style="background: white; padding: 15px; border-radius: 5px; border: 2px dashed #607D8B; grid-column: span 2;">
            <h4>📈 The Big 5 in Action: Sales Report</h4>
            <p>Imagine a sales column (B2:B31) with daily sales figures:</p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr style="background: #f5f5f5;">
                    <td style="padding: 8px; border: 1px solid #ddd;">Total Sales:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>=SUM(B2:B31)</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Adds all daily sales</td>
                </tr>
                <tr style="background: white;">
                    <td style="padding: 8px; border: 1px solid #ddd;">Average Daily:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>=AVERAGE(B2:B31)</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Typical sales day</td>
                </tr>
                <tr style="background: #f5f5f5;">
                    <td style="padding: 8px; border: 1px solid #ddd;">Days Recorded:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>=COUNT(B2:B31)</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;">How many days had sales</td>
                </tr>
                <tr style="background: white;">
                    <td style="padding: 8px; border: 1px solid #ddd;">Worst Day:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>=MIN(B2:B31)</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Lowest sales day</td>
                </tr>
                <tr style="background: #f5f5f5;">
                    <td style="padding: 8px; border: 1px solid #ddd;">Best Day:</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>=MAX(B2:B31)</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Highest sales day</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Student Grade Book</h4>
    <p>Create a grade book with the following columns:</p>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Column</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Data</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Formula Required</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">A</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Student Name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">-</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">B-D</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Test Scores (3 tests)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Enter scores 0-100</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">E</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Total Points</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>=SUM(B2:D2)</b></td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">F</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Average Score</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>=AVERAGE(B2:D2)</b></td>
        </tr>
    </table>
    
    <p><b>After entering data for 15 students, calculate:</b></p>
    <ol>
        <li>Class average for each test</li>
        <li>Highest score in each test</li>
        <li>Lowest score in each test</li>
        <li>Number of students who took Test 1</li>
    </ol>
    
    <h4>🎯 Exercise 2: Sales Commission Calculator</h4>
    <p>Create a sales tracking sheet:</p>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>A1:</b> Salesperson</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>B1:</b> January Sales</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>C1:</b> February Sales</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>D1:</b> Commission Rate</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>E1:</b> Total Commission</td>
        </tr>
    </table>
    
    <p><b>Formulas to create:</b></p>
    <ul>
        <li>Total Sales per person: <b>=SUM(B2:C2)</b></li>
        <li>Commission: <b>=SUM(B2:C2)*D2</b> (if D2 is 0.05 for 5%)</li>
        <li>At bottom, calculate:
            <ul>
                <li>Total company sales: <b>=SUM(B2:B10)+SUM(C2:C10)</b></li>
                <li>Average monthly sales per person</li>
                <li>Top salesperson (highest total)</li>
            </ul>
        </li>
    </ul>
    
    <h4>🎯 Exercise 3: Formula Auditing Tools</h4>
    <ol>
        <li>Select a cell with a formula</li>
        <li>Go to Formulas tab → Show Formulas (Ctrl+') - See all formulas</li>
        <li>Use Trace Precedents (arrows showing where data comes from)</li>
        <li>Use Trace Dependents (arrows showing where data goes to)</li>
        <li>Use Evaluate Formula to step through calculation</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Company Quarterly Report"</b>
    
    <h4>Dataset: XYZ Corp Q1 Sales</h4>
    <p>Download/Create this data (20 employees):</p>
    
    <table style="width: 100%; border-collapse: collapse; background: white;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Employee</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Dept</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Jan Sales</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Feb Sales</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Mar Sales</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Q1 Total</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Monthly Avg</th>
        </tr>
    </table>
    
    <h4>Required Calculations:</h4>
    <ol>
        <li><b>Individual Level:</b>
            <ul>
                <li>Q1 Total per employee (SUM of Jan-Mar)</li>
                <li>Monthly average per employee</li>
            </ul>
        </li>
        <li><b>Department Level:</b> (Create summary section)
            <ul>
                <li>Total sales per department</li>
                <li>Average sales per department</li>
                <li>Number of employees per department (use COUNTA)</li>
            </ul>
        </li>
        <li><b>Company Level:</b>
            <ul>
                <li>Total Q1 company sales</li>
                <li>Company monthly average</li>
                <li>Highest performing employee (MAX)</li>
                <li>Lowest performing employee (MIN)</li>
                <li>Number of salespeople (COUNT non-blank in sales columns)</li>
            </ul>
        </li>
    </ol>
    
    <h4>Formatting Requirements:</h4>
    <ul>
        <li>Currency format for all money values</li>
        <li>Different fill colors for department sections</li>
        <li>Bold for totals and averages</li>
        <li>Number format with 2 decimals for averages</li>
        <li>Freeze panes so headers are always visible</li>
    </ul>
    
    <b>Challenge Task:</b>
    <p>Add a "Performance Rating" column that automatically assigns:</p>
    <ul>
        <li>"Star Performer" if Q1 Total > $50,000</li>
        <li>"Good" if between $30,000 - $50,000</li>
        <li>"Needs Improvement" if below $30,000</li>
        <li><i>Hint: You'll need IF function (preview of tomorrow!)</i></li>
    </ul>
</div>

<h3>Common Formula Errors & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Error</th>
            <th style="padding: 8px; border: 1px solid #ddd;">What it means</th>
            <th style="padding: 8px; border: 1px solid #ddd;">How to fix</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>#DIV/0!</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;">Dividing by zero</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check denominator isn't zero or empty</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>#NAME?</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;">Excel doesn't recognize text</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check spelling of function names</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>#VALUE!</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong type of argument</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Ensure you're using numbers, not text</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>#REF!</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;">Invalid cell reference</td>
            <td style="padding: 8px; border: 1px solid #ddd;">You deleted cells the formula needs</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>#######</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;">Column too narrow</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Widen the column</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🛠️ Formula Debugging Tips:</h5>
        <ol>
            <li><b>Use F2:</b> Edit cell to see color-coded references</li>
            <li><b>Evaluate Formula:</b> Step through calculation step-by-step</li>
            <li><b>Trace Precedents:</b> See which cells feed into formula</li>
            <li><b>Show Formulas:</b> Ctrl+\` to see all formulas at once</li>
            <li><b>Check Parentheses:</b> Every opening ( needs a closing )</li>
        </ol>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>The = Sign is Crucial:</b> Without it, Excel thinks you're typing text</li>
    <li><b>Reference Cells, Not Values:</b> This enables automatic updates</li>
    <li><b>SUM vs. AVERAGE vs. COUNT:</b> Each serves different analytical needs</li>
    <li><b>MIN/MAX for Extremes:</b> Quickly find best/worst performers</li>
    <li><b>Error Messages are Helpful:</b> They tell you exactly what's wrong</li>
    <li><b>Audit Your Formulas:</b> Always verify calculations make sense</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Formula Best Practices:</h3>
    <ul>
        <li><b>Start Simple:</b> Test with 2-3 cells before applying to whole range</li>
        <li><b>Use Named Ranges:</b> =SUM(Sales) is clearer than =SUM(B2:B100)</li>
        <li><b>Document Complex Formulas:</b> Add comments explaining what they do</li>
        <li><b>Check for Blank Cells:</b> They can skew AVERAGE calculations</li>
        <li><b>Use Absolute References:</b> When copying formulas (tomorrow's lesson!)</li>
        <li><b>Backup Before Major Changes:</b> Save version before editing many formulas</li>
        <li><b>Test Edge Cases:</b> What if all cells are empty? What if one is text?</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Cell Referencing - Absolute vs. Relative</b></p>
    <ul>
        <li>Complete today's Quarterly Report assignment</li>
        <li>Try copying a SUM formula down a column - watch what happens</li>
        <li>Practice using the $ sign in cell references</li>
        <li>Think about: When would you want a formula to change when copied?</li>
        <li>When would you want it to stay the same?</li>
    </ul>
    <p><i>Tutor Note: The $ sign is one of the most powerful tools in Excel. Understanding it separates beginners from intermediate users!</i></p>
</div>
`
            },
            "5-3": {
                icon: "fa-anchor",
                title: "Cell Referencing: Absolute vs. Relative",
                html: `<h1>Week 5, Day 3: Cell Referencing - Absolute vs. Relative</h1>
<p>Today we master the power of the $ sign and understand how Excel adjusts formulas when copied - the key to building dynamic spreadsheets.</p>

<div class="analogy-box">
    <b>Analogy: The GPS Navigation System 🗺️</b><br/>
    
    Relative Reference: "Turn left at the next intersection"<br/>
    Absolute Reference: "Go to 123 Main Street"<br/>
    Mixed Reference: "Stay in this row, but any column is fine"<br/>
    The $ Sign: The "lock" that prevents addresses from changing<br/>
    Copying Formulas: Giving the same directions to different drivers
</div>

<h3>The Three Types of Cell References</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Reference Type Comparison</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Type</th>
            <th style="padding: 10px; text-align: left;">Syntax</th>
            <th style="padding: 10px; text-align: left;">Behavior When Copied</th>
            <th style="padding: 10px; text-align: left;">Best For</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Relative</td>
            <td style="padding: 8px; border: 1px solid #ddd;">A1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Both column and row adjust</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Most calculations, tables</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Absolute</td>
            <td style="padding: 8px; border: 1px solid #ddd;">$A$1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Neither changes (fully locked)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Constants, tax rates, multipliers</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Mixed (Col Absolute)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">$A1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Column locked, row adjusts</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Lookup tables, vertical calculations</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Mixed (Row Absolute)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">A$1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Row locked, column adjusts</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Horizontal calculations, headers</td>
        </tr>
    </table>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 The $ Sign Explained:</h5>
            <p><b>$ before Column</b> = Lock the column (A → $A)</p>
            <p><b>$ before Row</b> = Lock the row (1 → $1)</p>
            <p><b>Both $</b> = Lock completely ($A$1)</p>
            <p><b>No $</b> = Free to move (A1)</p>
            <p><i>Shortcut: Press F4 to cycle through reference types!</i></p>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 Quick Reference Guide:</h5>
            <p><b>Relative:</b> "Look at the cell 2 to the left"</p>
            <p><b>Absolute:</b> "Always look at cell C5"</p>
            <p><b>Mixed:</b> "Stay in column C, but move down with me"</p>
            <p><b>Memory Aid:</b> Dollar sign "anchors" that part of the address</p>
        </div>
    </div>
</div>

<h3>Practical Examples & Visual Demonstrations</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <h4>Example 1: Multiplication Table (Mixed References)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Goal:</b> Create a 10x10 multiplication table</p>
        
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background: #f5f5f5;">A1</td>
                <td style="padding: 8px; border: 1px solid #ddd; background: #4CAF50; color: white;">1</td>
                <td style="padding: 8px; border: 1px solid #ddd; background: #4CAF50; color: white;">2</td>
                <td style="padding: 8px; border: 1px solid #ddd; background: #4CAF50; color: white;">3</td>
                <td style="padding: 8px; border: 1px solid #ddd; background: #4CAF50; color: white;">...</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background: #2196F3; color: white;">1</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=A$1*$A2</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B$1*$A2</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=C$1*$A2</td>
                <td style="padding: 8px; border: 1px solid #ddd;">...</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background: #2196F3; color: white;">2</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=A$1*$A3</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B$1*$A3</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=C$1*$A3</td>
                <td style="padding: 8px; border: 1px solid #ddd;">...</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background: #2196F3; color: white;">3</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=A$1*$A4</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B$1*$A4</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=C$1*$A4</td>
                <td style="padding: 8px; border: 1px solid #ddd;">...</td>
            </tr>
        </table>
        
        <p><b>Formula Logic:</b> =A$1*$A2</p>
        <ul>
            <li><b>A$1:</b> Row 1 locked, column can change → moves right across columns</li>
            <li><b>$A2:</b> Column A locked, row can change → moves down across rows</li>
            <li><b>Result:</b> One formula copied everywhere creates perfect multiplication table!</li>
        </ul>
    </div>
    
    <h4>Example 2: Sales Tax Calculator (Absolute Reference)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Scenario:</b> Calculate prices with 8.5% sales tax</p>
        
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr style="background: #f5f5f5;">
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B1:</b> Tax Rate</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C1:</b> 8.5%</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>A3:</b> Item</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B3:</b> Price</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C3:</b> Price with Tax</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Shirt</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$25.00</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B4*(1+$C$1)</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Pants</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$40.00</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B5*(1+$C$1)</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Shoes</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$60.00</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B6*(1+$C$1)</td>
            </tr>
        </table>
        
        <p><b>Key Insight:</b> $C$1 stays fixed while B4, B5, B6 change as we copy down</p>
        <p><b>Benefit:</b> Change tax rate in C1 once → all prices update automatically!</p>
    </div>
    
    <h4>Example 3: Grading Rubric (Mixed Reference)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Scenario:</b> Calculate weighted grades with different category weights</p>
        
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr style="background: #4CAF50; color: white;">
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B1:</b> Homework (30%)</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C1:</b> Exams (50%)</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>D1:</b> Project (20%)</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>A3:</b> Student</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B3:</b> HW Score</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C3:</b> Exam Score</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>D3:</b> Project Score</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>E3:</b> Final Grade</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Alice</td>
                <td style="padding: 8px; border: 1px solid #ddd;">95</td>
                <td style="padding: 8px; border: 1px solid #ddd;">88</td>
                <td style="padding: 8px; border: 1px solid #ddd;">92</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B4*B$1 + C4*C$1 + D4*D$1</td>
            </tr>
        </table>
        
        <p><b>Formula Breakdown:</b> =B4*B$1 + C4*C$1 + D4*D$1</p>
        <ul>
            <li><b>B4, C4, D4:</b> Relative references - change for each student</li>
            <li><b>B$1, C$1, D$1:</b> Mixed references - row 1 locked, columns change</li>
            <li><b>Result:</b> One formula works for all students!</li>
        </ul>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Currency Converter</h4>
    <ol>
        <li>Set up this structure:
            <table style="width: auto; border-collapse: collapse; margin: 10px;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>B1:</b> USD to EUR</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>C1:</b> 0.85</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>B2:</b> USD to GBP</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>C2:</b> 0.73</td>
                </tr>
            </table>
        </li>
        <li>Create a product list in columns A (Product), B (Price USD), C (Price EUR), D (Price GBP)</li>
        <li>In C5 (first EUR price): <b>=B5*$C$1</b></li>
        <li>In D5 (first GBP price): <b>=B5*$C$2</b></li>
        <li>Copy formulas down for 10 products</li>
        <li><b>Test:</b> Change exchange rates in C1/C2 → watch all prices update!</li>
    </ol>
    
    <h4>🎯 Exercise 2: Commission Calculator with Tiered Rates</h4>
    <ol>
        <li>Create tiered commission structure:
            <table style="width: auto; border-collapse: collapse; margin: 10px;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>A10:</b> Tier 1 (0-10,000)</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>B10:</b> 5%</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>A11:</b> Tier 2 (10,001-25,000)</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>B11:</b> 7%</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>A12:</b> Tier 3 (25,001+)</td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>B12:</b> 10%</td>
                </tr>
            </table>
        </li>
        <li>Create sales data: Salesperson (col A), Sales Amount (col B), Commission Rate (col C), Commission (col D)</li>
        <li>In C2 (first commission rate): Use nested IF to determine rate based on sales amount</li>
        <li>In D2 (commission): <b>=B2*C2</b></li>
        <li>Copy down for 15 salespeople</li>
    </ol>
    
    <h4>🎯 Exercise 3: F4 Key Practice</h4>
    <ol>
        <li>Type <b>=A1</b> in any cell</li>
        <li>Click on A1 in the formula</li>
        <li>Press <b>F4</b> once: =$A$1 (absolute)</li>
        <li>Press <b>F4</b> again: =A$1 (mixed, row absolute)</li>
        <li>Press <b>F4</b> again: =$A1 (mixed, column absolute)</li>
        <li>Press <b>F4</b> again: =A1 (relative)</li>
        <li><b>Practice:</b> Create a formula and use F4 to test all reference types</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Dynamic Pricing Model" for a Coffee Shop</b>
    
    <h4>Part 1: Setup (20 points)</h4>
    <ul>
        <li>Create a "Constants" area with:
            <ul>
                <li>Base coffee cost: $0.50 per cup</li>
                <li>Labor cost: $0.30 per cup</li>
                <li>Rent allocation: $0.20 per cup</li>
                <li>Desired profit margin: 60%</li>
                <li>Sales tax rate: 8.5%</li>
            </ul>
        </li>
        <li>All constants must use absolute references ($C$4, etc.)</li>
    </ul>
    
    <h4>Part 2: Product Table (40 points)</h4>
    <table style="width: 100%; border-collapse: collapse; background: white; margin: 10px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Drink Type</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Size Multiplier</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Ingredients Cost</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Total Cost</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Selling Price</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Price with Tax</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Profit per Cup</th>
        </tr>
    </table>
    
    <p><b>Include 10 drink variations (e.g., Small Latte, Large Mocha, etc.)</b></p>
    
    <h4>Part 3: Formulas Required (40 points)</h4>
    <ol>
        <li><b>Total Cost:</b> = (Base Cost * Size Multiplier) + Labor + Rent + Ingredients</li>
        <li><b>Selling Price:</b> = Total Cost * (1 + Profit Margin)</li>
        <li><b>Price with Tax:</b> = Selling Price * (1 + Tax Rate)</li>
        <li><b>Profit per Cup:</b> = Selling Price - Total Cost</li>
    </ol>
    
    <p><b>Requirements:</b> Use appropriate absolute/mixed/relative references so that changing any constant updates all calculations automatically.</p>
    
    <h4>Challenge Task: Dynamic Scenario Analysis</h4>
    <p>Add a "Scenario Manager" section where you can toggle between:</p>
    <ul>
        <li>Current pricing (60% margin)</li>
        <li>Competitive pricing (40% margin)</li>
        <li>Premium pricing (80% margin)</li>
    </ul>
    <p>Use data validation dropdown to select scenario, and have all prices update automatically based on the selected profit margin.</p>
</div>

<h3>Common Reference Errors & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Problem</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Symptoms</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong results when copying</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Formulas reference wrong cells after copying</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use $ to lock cells that shouldn't change</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">#REF! errors</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Cells show #REF! after moving data</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use named ranges or more flexible references</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Circular reference</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Excel warns about circular reference</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Formula references its own cell - remove self-reference</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Hard-coded values</td>
            <td style="padding: 8px; border: 1px solid #ddd;">=B2*0.085 (instead of =B2*$C$1)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Always reference cells, never type constants in formulas</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔄 The Copy-Paste Test:</h5>
        <p>To verify your references are correct:</p>
        <ol>
            <li>Create your formula in the first cell</li>
            <li>Copy it to a different location</li>
            <li>Double-click the copied cell</li>
            <li>Check which cells are highlighted</li>
            <li>Ask: "Are these the right cells for this location?"</li>
        </ol>
        <p>If not, adjust your $ signs!</p>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>The F4 Key is Your Friend:</b> Cycle through reference types quickly</li>
    <li><b>Think Ahead:</b> Plan references before copying formulas</li>
    <li><b>Test with Copy:</b> Always test formulas by copying to new locations</li>
    <li><b>Constants Go in Cells:</b> Never type numbers directly in formulas</li>
    <li><b>Mixed References are Powerful:</b> They enable complex table calculations</li>
    <li><b>Document Your Logic:</b> Comment why you used specific reference types</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Reference Best Practices:</h3>
    <ul>
        <li><b>Use Named Ranges:</b> =Price*TaxRate is clearer than =B2*$C$1</li>
        <li><b>Color Code Constants:</b> Highlight cells with constants in yellow</li>
        <li><b>Group Related Constants:</b> Keep all settings in one area of sheet</li>
        <li><b>Test Edge Cases:</b> What if constant cell is empty? Add IFERROR</li>
        <li><b>Use Tables:</b> Excel Tables have structured references that adjust automatically</li>
        <li><b>Document Assumptions:</b> Add comments explaining why rates are what they are</li>
        <li><b>Backup Before Major Changes:</b> Save version before changing many references</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Data Visualization - Charts & Graphs</b></p>
    <ul>
        <li>Complete the Coffee Shop Pricing Model</li>
        <li>Practice using F4 key to toggle reference types</li>
        <li>Create a simple dataset with at least 10 rows of data</li>
        <li>Think about: What story does your data tell?</li>
        <li>What would be the best way to visualize it?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we turn numbers into pictures! Good data visualization makes insights obvious at a glance.</i></p>
</div>
`
            },
            "5-4": {
                icon: "fa-chart-pie",
                title: "Data Visualization: Charts & Graphs",
                html: `<h1>Week 5, Day 4: Data Visualization - Charts & Graphs</h1>
<p>Today we transform raw numbers into compelling visual stories. Learn to choose the right chart type and create professional visualizations that communicate insights effectively.</p>

<div class="analogy-box">
    <b>Analogy: The Storytelling Museum Guide 🏛️</b><br/>
    
    Raw Data: Artifacts in storage boxes<br/>
    Charts: Exhibits arranged to tell a story<br/>
    Chart Type: Type of exhibit (sculpture, painting, diorama)<br/>
    Formatting: Lighting, labels, and arrangement<br/>
    Audience: Museum visitors needing clear understanding<br/>
    Insight: The "aha!" moment when the story becomes clear
</div>

<h3>The Chart Selection Guide</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Choosing the Right Chart Type</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">When to Use</th>
            <th style="padding: 10px; text-align: left;">Best Chart Type</th>
            <th style="padding: 10px; text-align: left;">Example</th>
            <th style="padding: 10px; text-align: left;">Avoid When</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Compare categories</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Column/Bar Chart</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Sales by region</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Too many categories (>10)</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Show parts of whole</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Pie/Doughnut Chart</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Market share</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Many small slices</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Show trends over time</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Line Chart</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Stock prices</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Irregular time intervals</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Show relationships</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Scatter Plot</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Height vs. Weight</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Categorical data</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Compare multiple variables</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Bubble Chart</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Sales, Profit, Region</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Small datasets</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Show distribution</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Histogram</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Test scores</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Categories instead of ranges</td>
        </tr>
    </table>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 The 5-Second Rule:</h5>
            <p>A good chart should communicate its main insight within 5 seconds of viewing.</p>
            <p><b>Ask yourself:</b> "What's the one thing I want my audience to remember?"</p>
            <p>Design your chart to highlight that one insight above all else.</p>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 Chart Type Memory Aid:</h5>
            <p><b>Columns/Bars:</b> "Compare these things"</p>
            <p><b>Pies:</b> "Show me the pieces"</p>
            <p><b>Lines:</b> "Show me the journey"</p>
            <p><b>Scatter:</b> "Show me the relationship"</p>
            <p><b>Area:</b> "Show me the total and parts"</p>
        </div>
    </div>
</div>

<h3>Step-by-Step Chart Creation</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <h4>Example 1: Monthly Sales Column Chart</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Data Setup:</b></p>
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr style="background: #4CAF50; color: white;">
                <td style="padding: 8px; border: 1px solid #ddd;"><b>A1:</b> Month</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B1:</b> Sales</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C1:</b> Target</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">January</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$45,000</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$40,000</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">February</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$52,000</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$42,000</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">March</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$48,000</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$44,000</td>
            </tr>
        </table>
        
        <p><b>Steps to Create Professional Chart:</b></p>
        <ol>
            <li><b>Select data:</b> Click A1 through C4</li>
            <li><b>Insert Chart:</b> Insert tab → Recommended Charts → Clustered Column</li>
            <li><b>Add Chart Elements:</b>
                <ul>
                    <li>Chart Title: "Q1 Sales Performance"</li>
                    <li>Axis Titles: "Months" (horizontal), "Dollars" (vertical)</li>
                    <li>Data Labels: End of Bars</li>
                    <li>Legend: Right side</li>
                </ul>
            </li>
            <li><b>Formatting:</b>
                <ul>
                    <li>Sales bars: Solid blue fill</li>
                    <li>Target bars: Pattern fill (diagonal lines)</li>
                    <li>Gridlines: Light gray, only major horizontal</li>
                    <li>Background: White, no border</li>
                </ul>
            </li>
        </ol>
    </div>
    
    <h4>Example 2: Budget Breakdown Pie Chart</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Data Setup:</b></p>
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr style="background: #2196F3; color: white;">
                <td style="padding: 8px; border: 1px solid #ddd;"><b>A1:</b> Category</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B1:</b> Amount</td>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C1:</b> Percentage</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Housing</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$1,200</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B2/SUM($B$2:$B$7)</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Food</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$600</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B3/SUM($B$2:$B$7)</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">Transportation</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$400</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=B4/SUM($B$2:$B$7)</td>
            </tr>
        </table>
        
        <p><b>Pro Pie Chart Tips:</b></p>
        <ol>
            <li><b>Limit slices:</b> 5-7 maximum, group small categories as "Other"</li>
            <li><b>Sort data:</b> Largest to smallest for readability</li>
            <li><b>Explode important slice:</b> Click slice twice, drag out slightly</li>
            <li><b>Data labels:</b> Show percentage AND category name</li>
            <li><b>Color scheme:</b> Use distinct, accessible colors</li>
            <li><b>Consider donut:</b> Center space for total amount</li>
        </ol>
    </div>
    
    <h4>Example 3: Trend Analysis Line Chart</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Data Setup:</b> Daily website visitors for 30 days</p>
        
        <p><b>Advanced Line Chart Techniques:</b></p>
        <ol>
            <li><b>Add trendline:</b> Right-click data series → Add Trendline</li>
            <li><b>Mark data points:</b> For key events (campaign launches)</li>
            <li><b>Secondary axis:</b> Add conversion rate on right axis</li>
            <li><b>Annotate spikes/dips:</b> Add text boxes explaining anomalies</li>
            <li><b>Smooth line:</b> Right-click line → Format Data Series → Smooth line</li>
        </ol>
        
        <p><b>Combo Chart Example:</b> Column for visitors, line for conversion rate</p>
        <ul>
            <li>Select both data series</li>
            <li>Insert → Combo Chart</li>
            <li>Visitors: Clustered Column (Primary Axis)</li>
            <li>Conversion Rate: Line (Secondary Axis)</li>
        </ul>
    </div>
</div>

<h3>Chart Elements Deep Dive</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #ddd;">
            <h5>📝 Titles & Labels</h5>
            <ul>
                <li><b>Chart Title:</b> Clear, descriptive, above chart</li>
                <li><b>Axis Titles:</b> What is being measured (with units)</li>
                <li><b>Data Labels:</b> Values on/near data points</li>
                <li><b>Legend:</b> Explains colors/symbols</li>
                <li><b><i>Best Practice:</i></b> Use sentence case, not ALL CAPS</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #ddd;">
            <h5>🎨 Formatting & Style</h5>
            <ul>
                <li><b>Color Scheme:</b> Consistent, accessible, meaningful</li>
                <li><b>Gridlines:</b> Light, subtle, don't dominate</li>
                <li><b>Data Series:</b> Distinct markers for lines</li>
                <li><b>Chart Area:</b> Clean background, minimal borders</li>
                <li><b><i>Best Practice:</i></b> Use company/brand colors</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #ddd;">
            <h5>📊 Axes & Scaling</h5>
            <ul>
                <li><b>Axis Scale:</b> Appropriate min/max values</li>
                <li><b>Intervals:</b> Logical tick marks</li>
                <li><b>Number Format:</b> Consistent with data</li>
                <li><b>Secondary Axis:</b> For different units/scales</li>
                <li><b><i>Warning:</i></b> Don't manipulate scales to mislead!</li>
            </ul>
        </div>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🎯 The "Chart Doctor" Checklist:</h5>
        <p>Before finalizing any chart, ask:</p>
        <ol>
            <li>Is the chart type appropriate for the data?</li>
            <li>Can you understand it in 5 seconds?</li>
            <li>Are all elements clearly labeled?</li>
            <li>Is the color scheme accessible (colorblind friendly)?</li>
            <li>Does it tell the truth (no misleading scales)?</li>
            <li>Would it make sense in black and white?</li>
            <li>Is there unnecessary "chart junk"?</li>
        </ol>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Sales Dashboard Creation</h4>
    <ol>
        <li>Create this sales dataset (12 months):
            <table style="width: auto; border-collapse: collapse; margin: 10px;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Month</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Product A</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Product B</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Product C</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Total</b></td>
                </tr>
            </table>
        </li>
        <li>Create THREE different charts from the same data:
            <ul>
                <li><b>Chart 1:</b> Line chart showing monthly trends for all products</li>
                <li><b>Chart 2:</b> Stacked column chart showing monthly composition</li>
                <li><b>Chart 3:</b> Pie chart showing annual product mix</li>
            </ul>
        </li>
        <li>Format each chart professionally with:
            <ul>
                <li>Descriptive titles</li>
                <li>Appropriate labels</li>
                <li>Consistent color scheme</li>
                <li>Legend (if needed)</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Chart Formatting Techniques</h4>
    <ol>
        <li><b>Custom Colors:</b> Change all bars to your company colors</li>
        <li><b>Data Labels:</b> Add values above bars, percentages in pie slices</li>
        <li><b>Axis Formatting:</b> Change number format to currency with $ sign</li>
        <li><b>Gridlines:</b> Remove vertical gridlines, keep horizontal light gray</li>
        <li><b>Chart Styles:</b> Try 3 different built-in styles, pick the best</li>
        <li><b>Sparklines:</b> Insert mini line charts next to data (Insert → Sparklines)</li>
    </ol>
    
    <h4>🎯 Exercise 3: Dynamic Chart with Dropdown</h4>
    <ol>
        <li>Create a dropdown list (Data → Data Validation) with: "Product A", "Product B", "Product C"</li>
        <li>Use INDEX/MATCH or VLOOKUP to display data for selected product</li>
        <li>Create a chart that updates automatically when dropdown selection changes</li>
        <li>Add a title that includes the selected product name dynamically</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Business Performance Dashboard"</b>
    
    <h4>Dataset: Company Annual Report (50 points)</h4>
    <p>Create or use this sample data for Tech Solutions Inc.:</p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div>
            <p><b>Quarterly Revenue ($000s):</b></p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Q1</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$450</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Q2</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$520</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Q3</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$610</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Q4</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$580</td>
                </tr>
            </table>
        </div>
        
        <div>
            <p><b>Department Expenses:</b></p>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">R&D</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$120,000</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Sales</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$85,000</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Marketing</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$65,000</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Admin</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">$45,000</td>
                </tr>
            </table>
        </div>
    </div>
    
    <h4>Required Charts (40 points):</h4>
    <ol>
        <li><b>Revenue Trend Chart:</b> Line chart showing quarterly growth</li>
        <li><b>Expense Breakdown:</b> Pie or donut chart showing department spending</li>
        <li><b>Profit Margin:</b> Combo chart with columns for revenue, line for margin %</li>
        <li><b>Regional Performance:</b> Bar chart comparing 5 regions</li>
        <li><b>Employee Count Trend:</b> Area chart showing headcount growth</li>
    </ol>
    
    <h4>Dashboard Design Requirements (10 points):</h4>
    <ul>
        <li>All charts on one sheet (dashboard view)</li>
        <li>Consistent color scheme across all charts</li>
        <li>Professional titles and labels</li>
        <li>Clean layout with aligned charts</li>
        <li>Summary metrics at top (Total Revenue, Average Growth, etc.)</li>
    </ul>
    
    <h4>Challenge Task: Interactive Dashboard</h4>
    <p>Add interactivity:</p>
    <ul>
        <li>Year selector dropdown (2022, 2023, 2024)</li>
        <li>Product category filter</li>
        <li"Charts update based on selections</li>
        <li>Dynamic titles that reflect current selections</li>
        <li>Slicers for region and department filtering</li>
    </ul>
</div>

<h3>Common Charting Mistakes & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Mistake</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Why It's Bad</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Better Alternative</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">3D effects</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Distorts proportions, hard to read</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use 2D charts, add depth with shadows</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Too many colors</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Confusing, no visual hierarchy</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use 3-5 colors max, grayscale for less important</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Misleading scales</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Manipulates perception unethically</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Always start vertical axis at zero</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Chart junk</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Clutters, distracts from data</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Remove unnecessary borders, backgrounds</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong chart type</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Fails to communicate effectively</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use selection guide above</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🎨 Accessibility Checklist:</h5>
        <ul>
            <li><b>Colorblind friendly:</b> Use colorbrewer2.org palettes</li>
            <li><b>Sufficient contrast:</b> Text should be easily readable</li>
            <li><b>Patterns for B&W:</b> Charts should work in grayscale</li>
            <li><b>Alt text:</b> Add descriptions for screen readers</li>
            <li><b>Font size:</b> Minimum 10pt for readability</li>
        </ul>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Chart Type Matters:</b> Match visualization to your data story</li>
    <li><b>Less is More:</b> Remove unnecessary elements (chart junk)</li>
    <li><b>Consistency is Key:</b> Same colors, fonts, styles across dashboard</li>
    <li><b>Tell a Story:</b> Every chart should have a clear message</li>
    <li><b>Test Understanding:</b> Can someone get the point in 5 seconds?</li>
    <li><b>Update Dynamically:</b> Charts should refresh when data changes</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Visualization Best Practices:</h3>
    <ul>
        <li><b>Start with Question:</b> What insight are you trying to communicate?</li>
        <li><b>Sketch First:</b> Draw your chart on paper before Excel</li>
        <li><b>Use Templates:</b> Create reusable chart styles for consistency</li>
        <li><b>Annotate Insights:</b> Add text boxes highlighting key findings</li>
        <li><b>Consider Audience:</b> Technical vs. executive audience needs different detail</li>
        <li><b>Mobile Friendly:</b> Test how charts look on smaller screens</li>
        <li><b>Document Sources:</b> Add footnote with data source and date</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Week 5 Summary & Week 6 Preview:</h3>
    <p><b>Week 5 Achievements:</b></p>
    <ul>
        <li>✓ Mastered Excel interface and data organization</li>
        <li>✓ Learned essential formulas (SUM, AVERAGE, COUNT, MIN, MAX)</li>
        <li>✓ Understood cell referencing (Relative vs. Absolute vs. Mixed)</li>
        <li>✓ Created professional charts and visualizations</li>
    </ul>
    
    <p><b>Next Week: Excel Logic & Analysis</b></p>
    <ul>
        <li>Day 1: IF function and logical operations</li>
        <li>Day 2: VLOOKUP and data validation</li>
        <li>Day 3: Sorting, filtering, and pivot tables</li>
        <li>Day 4: Final project - Student Grade Tracker</li>
    </ul>
    
    <p><i>Tutor Note: Next week we dive into Excel's analytical power. The IF function is a game-changer - it brings decision-making into your spreadsheets!</i></p>
</div>
`
            },

            "6-1": {
                icon: "fa-question-circle",
                title: "Excel Logic: The IF Function",
                html: `<h1>Week 6, Day 1: Excel Logic - The IF Function</h1>
<p>Today we bring decision-making into Excel! Learn to create intelligent spreadsheets that can think, evaluate conditions, and make automated choices based on your data.</p>

<div class="analogy-box">
    <b>Analogy: The Smart Traffic Light System 🚦</b><br/>
    
    Data Input: Cars approaching intersection<br/>
    IF Function: Traffic light decision logic<br/>
    Condition: Is cross-traffic heavy?<br/>
    TRUE Result: Green light (proceed)<br/>
    FALSE Result: Red light (wait)<br/>
    Nested IFs: Complex intersection with multiple conditions
</div>

<h3>The IF Function Fundamentals</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 IF Function Syntax & Structure</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 15px 0;">
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #4CAF50;">
            <h5>Basic Syntax:</h5>
            <p style="font-family: monospace; background: #f5f5f5; padding: 10px; border-radius: 3px;">
                =IF(logical_test, value_if_true, value_if_false)
            </p>
            <p><b>Three Required Parts:</b></p>
            <ol>
                <li><b>Logical Test:</b> A question that returns TRUE or FALSE</li>
                <li><b>Value if True:</b> What to show/do if answer is TRUE</li>
                <li><b>Value if False:</b> What to show/do if answer is FALSE</li>
            </ol>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-left: 5px solid #2196F3;">
            <h5>Real-World Example:</h5>
            <p style="font-family: monospace; background: #f5f5f5; padding: 10px; border-radius: 3px;">
                =IF(B2>=50, "Pass", "Fail")
            </p>
            <p><b>Translation:</b> "If the score in cell B2 is greater than or equal to 50, show 'Pass', otherwise show 'Fail'"</p>
            <p><b>Result:</b> 
                <span style="color: green;">• B2=75 → "Pass"</span><br>
                <span style="color: red;">• B2=42 → "Fail"</span>
            </p>
        </div>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🎯 The IF Function Mindset:</h5>
        <p>Think of IF as a <b>decision-making assistant</b> that works 24/7:</p>
        <ul>
            <li><b>You provide:</b> The rules (conditions) and possible outcomes</li>
            <li><b>Excel provides:</b> Instant decisions for every data point</li>
            <li><b>Key Benefit:</b> Consistency - same rule applied to all data</li>
            <li><b>Time Saver:</b> Automates what you'd do manually with eyes/brain</li>
        </ul>
    </div>
</div>

<h3>Comparison Operators for Logical Tests</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Operator</th>
            <th style="padding: 10px; text-align: left;">Meaning</th>
            <th style="padding: 10px; text-align: left;">Example</th>
            <th style="padding: 10px; text-align: left;">Returns TRUE When</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">=</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Equal to</td>
            <td style="padding: 8px; border: 1px solid #ddd;">A1=10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">A1 contains exactly 10</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">&lt;&gt;</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Not equal to</td>
            <td style="padding: 8px; border: 1px solid #ddd;">B2&lt;&gt;"Complete"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">B2 is NOT "Complete"</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">&gt;</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Greater than</td>
            <td style="padding: 8px; border: 1px solid #ddd;">C3&gt;100</td>
            <td style="padding: 8px; border: 1px solid #ddd;">C3 is more than 100</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">&lt;</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Less than</td>
            <td style="padding: 8px; border: 1px solid #ddd;">D4&lt;=TODAY()</td>
            <td style="padding: 8px; border: 1px solid #ddd;">D4 is today or earlier</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">&gt;=</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Greater than or equal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">E5&gt;=0</td>
            <td style="padding: 8px; border: 1px solid #ddd;">E5 is zero or positive</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">&lt;=</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Less than or equal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">F6&lt;=MAX($F$2:$F$100)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">F6 is at or below max</td>
        </tr>
    </table>
    
    <div style="background: #E8F5E8; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🔑 Text vs. Number Comparisons:</h5>
        <p><b>Text Comparisons:</b> Use quotes around text values</p>
        <ul>
            <li>=IF(A1="Yes", "Approved", "Denied")</li>
            <li>=IF(B2&lt;&gt;"Pending", "Process", "Wait")</li>
        </ul>
        <p><b>Number Comparisons:</b> No quotes around numbers</p>
        <ul>
            <li>=IF(C3&gt;=18, "Adult", "Minor")</li>
            <li>=IF(D4=0, "Zero", "Not Zero")</li>
        </ul>
        <p><b>Date Comparisons:</b> Use DATE function or serial numbers</p>
        <ul>
            <li>=IF(E5&gt;DATE(2024,1,1), "New", "Old")</li>
            <li>=IF(F6&lt;TODAY(), "Past Due", "Current")</li>
        </ul>
    </div>
</div>

<h3>Practical IF Function Applications</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #4CAF50;">
            <h5>📊 Example 1: Pass/Fail Grading</h5>
            <p><b>Data:</b> Student scores in column B (0-100)</p>
            <p><b>Formula:</b> =IF(B2>=50, "Pass", "Fail")</p>
            <p><b>Advanced:</b> Add color coding with Conditional Formatting</p>
            <p><b>Result:</b> Automatic grading for hundreds of students</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #2196F3;">
            <h5>💰 Example 2: Commission Calculator</h5>
            <p><b>Data:</b> Sales amounts in column C</p>
            <p><b>Formula:</b> =IF(C2>10000, C2*0.1, C2*0.05)</p>
            <p><b>Logic:</b> 10% commission over $10K, 5% otherwise</p>
            <p><b>Better:</b> =C2*IF(C2>10000, 0.1, 0.05)</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #FF9800;">
            <h5>📅 Example 3: Deadline Tracking</h5>
            <p><b>Data:</b> Due dates in column D</p>
            <p><b>Formula:</b> =IF(D2&lt;TODAY(), "Overdue", IF(D2=TODAY(), "Due Today", "Future"))</p>
            <p><b>Note:</b> This is a NESTED IF (more on this later)</p>
            <p><b>Result:</b> Automatic status updates daily</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border: 1px solid #9C27B0;">
            <h5>📦 Example 4: Inventory Management</h5>
            <p><b>Data:</b> Stock levels in column E</p>
            <p><b>Formula:</b> =IF(E2&lt;10, "Reorder", IF(E2&lt;20, "Low", "OK"))</p>
            <p><b>Logic:</b> Three-level inventory status</p>
            <p><b>Benefit:</b> Instant visual inventory health</p>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 15px; border-radius: 5px; border: 2px dashed #607D8B;">
        <h5>🎯 The IF Function Power Combo: IF + AND + OR</h5>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>AND Function:</b> All conditions must be TRUE</p>
                <p style="font-family: monospace; background: #f5f5f5; padding: 10px;">
                    =IF(AND(B2>=50, C2>=50), "Pass Both", "Fail One")
                </p>
                <p><b>Example:</b> Must pass Math AND English to graduate</p>
            </div>
            
            <div>
                <p><b>OR Function:</b> At least one condition must be TRUE</p>
                <p style="font-family: monospace; background: #f5f5f5; padding: 10px;">
                    =IF(OR(D2="Manager", D2="Director"), "Executive", "Staff")
                </p>
                <p><b>Example:</b> Manager OR Director gets executive parking</p>
            </div>
        </div>
        
        <div style="margin-top: 15px; padding: 10px; background: #FFF3CD; border-radius: 5px;">
            <p><b>Complex Example:</b> Scholarship eligibility</p>
            <p style="font-family: monospace; background: #f5f5f5; padding: 10px;">
                =IF(AND(GPA>=3.5, OR(Income&lt;50000, Minority="Yes")), "Eligible", "Not Eligible")
            </p>
            <p>Translation: Eligible if GPA ≥ 3.5 AND (Income < $50K OR Minority status = Yes)</p>
        </div>
    </div>
</div>

<h3>Nested IF Functions</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Multiple Decision Levels</h4>
    
    <p><b>Problem:</b> Simple IF only gives two outcomes. What about letter grades (A, B, C, D, F)?</p>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5>Example: Letter Grade Calculator</h5>
        <p><b>Traditional Nested IF:</b></p>
        <pre style="background: #f5f5f5; padding: 15px; border-radius: 5px; overflow-x: auto;">
=IF(Score>=90, "A",
    IF(Score>=80, "B",
        IF(Score>=70, "C",
            IF(Score>=60, "D", "F")
        )
    )
)
        </pre>
        
        <p><b>Excel 2016+ IFS Function (Better!):</b></p>
        <pre style="background: #e8f5e8; padding: 15px; border-radius: 5px; overflow-x: auto;">
=IFS(Score>=90, "A",
     Score>=80, "B",
     Score>=70, "C",
     Score>=60, "D",
     Score<60,  "F")
        </pre>
        
        <p><b>Key Differences:</b></p>
        <ul>
            <li><b>Nested IF:</b> Multiple closing parentheses, harder to read</li>
            <li><b>IFS:</b> Cleaner syntax, easier to maintain</li>
            <li><b>Note:</b> IFS requires Excel 2016 or Office 365</li>
        </ul>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>🎯 Nested IF Best Practices:</h5>
        <ol>
            <li><b>Plan Your Logic First:</b> Draw a decision tree on paper</li>
            <li><b>Order Matters:</b> Excel evaluates from first to last condition</li>
            <li><b>Use IFS if Available:</b> Much cleaner than nested IF</li>
            <li><b>Limit Nesting:</b> More than 3-4 levels gets confusing</li>
            <li><b>Consider Alternatives:</b> VLOOKUP tables often better for many categories</li>
            <li><b>Test Thoroughly:</b> Check boundary cases (exactly 90, 80, etc.)</li>
        </ol>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Employee Bonus Calculator</h4>
    <ol>
        <li>Create this employee data table:
            <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Name</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Department</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Salary</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Performance Score</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Years Service</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Bonus %</b></td>
                    <td style="padding: 8px; border: 1px solid #ddd;"><b>Bonus Amount</b></td>
                </tr>
            </table>
        </li>
        <li><b>Bonus Rules:</b>
            <ul>
                <li>Base: 5% for everyone</li>
                <li>+2% if Performance Score ≥ 85</li>
                <li>+3% if Years Service ≥ 5</li>
                <li>+5% if Department = "Sales"</li>
                <li>Maximum bonus: 15% total</li>
            </ul>
        </li>
        <li><b>Create formulas:</b>
            <ul>
                <li>Bonus %: Calculate using nested IF/AND/OR</li>
                <li>Bonus Amount: = Salary * Bonus %</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Student Grade Calculator with Letter Grades</h4>
    <ol>
        <li>Create student data with 4 test scores</li>
        <li>Calculate: Average score, Letter Grade (A-F), Pass/Fail status</li>
        <li><b>Grading Scale:</b>
            <ul>
                <li>A: 90-100</li>
                <li>B: 80-89</li>
                <li>C: 70-79</li>
                <li>D: 60-69</li>
                <li>F: Below 60</li>
            </ul>
        </li>
        <li><b>Additional Rules:</b>
            <ul>
                <li>Pass: Grade ≥ 70 OR Special Consideration = "Yes"</li>
                <li>Honor Roll: Grade ≥ 90 AND Attendance ≥ 95%</li>
                <li>Needs Improvement: Grade ≤ 75 OR Missing Assignments ≥ 3</li>
            </ul>
        </li>
        <li>Use IFS function if available, otherwise nested IF</li>
    </ol>
    
    <h4>🎯 Exercise 3: Project Status Tracker</h4>
    <ol>
        <li>Create project data with: Start Date, Due Date, % Complete</li>
        <li><b>Status Formula:</b> Determine status based on:
            <ul>
                <li>If % Complete = 100% → "Completed"</li>
                <li>If Today > Due Date AND % Complete < 100% → "Overdue"</li>
                <li>If Today ≥ Due Date-7 AND % Complete < 100% → "Due Soon"</li>
                <li>If % Complete ≥ 75% → "On Track"</li>
                <li>If % Complete < 75% → "Needs Attention"</li>
                <li>If % Complete = 0% → "Not Started"</li>
            </ul>
        </li>
        <li>Create a summary: Count projects in each status category</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create an "Automated Loan Application System"</b>
    
    <h4>Part 1: Applicant Data Collection (30 points)</h4>
    <p>Create input form with:</p>
    <ul>
        <li>Applicant Information (Name, ID, Date)</li>
        <li>Financial Data:
            <ul>
                <li>Annual Income</li>
                <li>Monthly Debt Payments</li>
                <li>Credit Score</li>
                <li>Employment Status (Full-time, Part-time, Self-employed)</li>
                <li>Years at Current Job</li>
            </ul>
        </li>
        <li>Loan Request:
            <ul>
                <li>Loan Amount Requested</li>
                <li>Loan Term (12, 24, 36, 60 months)</li>
                <li>Purpose (Car, Home, Education, Business)</li>
            </ul>
        </li>
    </ul>
    
    <h4>Part 2: Automated Decision Engine (50 points)</h4>
    <p>Create formulas that automatically determine:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Check</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Rule</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Result</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Income Check</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Monthly payment ≤ 40% of monthly income</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Pass/Fail</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Credit Score</td>
            <td style="padding: 8px; border: 1px solid #ddd;">
                ≥750: Excellent<br>
                700-749: Good<br>
                650-699: Fair<br>
                <650: Poor
            </td>
            <td style="padding: 8px; border: 1px solid #ddd;">Category</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Employment</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Full-time + ≥2 years = Best</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Rating</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Debt Ratio</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Total Debt/Income ≤ 50%</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Pass/Fail</td>
        </tr>
    </table>
    
    <h4>Part 3: Final Decision & Terms (20 points)</h4>
    <p>Create a summary section that shows:</p>
    <ul>
        <li><b>Overall Decision:</b> Approved, Denied, or Needs Review</li>
        <li><b>Approval Conditions:</b> Maximum loan amount approved</li>
        <li><b>Interest Rate:</b> Based on credit score category (use IF to assign rate)</li>
        <li><b>Monthly Payment:</b> Calculate using approved amount and assigned rate</li>
        <li><b>Reason if Denied:</b> Which check(s) failed</li>
    </ul>
    
    <h4>Challenge Task: Tiered Interest Rate System</h4>
    <p>Create a dynamic interest rate calculator:</p>
    <ul>
        <li>Base Rate: 5.0%</li>
        <li>Adjustments:
            <ul>
                <li>Credit Score Excellent: -1.5%</li>
                <li>Credit Score Good: -0.5%</li>
                <li>Credit Score Fair: +1.0%</li>
                <li>Credit Score Poor: +3.0%</li>
                <li>Loan Term > 36 months: +0.5%</li>
                <li>Loan Purpose = "Education": -0.25%</li>
            </ul>
        </li>
        <li>Minimum Rate: 3.0%, Maximum Rate: 10.0%</li>
        <li>Create formula that calculates final rate with all adjustments</li>
    </ul>
</div>

<h3>Common IF Function Errors & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Error</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Cause</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">#NAME?</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Misspelled function name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check spelling: IF, not IFF or IF()</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong number of arguments</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Missing commas or parentheses</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Count: IF(condition, true, false) = 3 parts</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Incorrect results</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong operator or logic order</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Test with known values, check operator precedence</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">#VALUE!</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Mixing text and numbers without quotes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Text in quotes: "Yes", numbers not: 100</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Too many nested levels</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Excel limits nested IFs (64 in newer versions)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use IFS, SWITCH, or lookup tables instead</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔧 IF Function Debugging Tips:</h5>
        <ol>
            <li><b>Test Parts Separately:</b> First test just the logical_test</li>
            <li><b>Use F9:</b> Select part of formula, press F9 to see result</li>
            <li><b>Evaluate Formula:</b> Formulas tab → Evaluate Formula</li>
            <li><b>Check Data Types:</b> Ensure comparing same types (text vs. text, number vs. number)</li>
            <li><b>Test Edge Cases:</b> What if cell is empty? What if it's exactly at the boundary?</li>
            <li><b>Use Formula Auditing:</b> Trace Precedents to see which cells are used</li>
        </ol>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Three-Part Structure:</b> IF(condition, true_result, false_result)</li>
    <li><b>Comparison Operators:</b> =, <>, >, <, >=, <=</li>
    <li><b>Combine with AND/OR:</b> For multiple conditions</li>
    <li><b>Nested IFs:</b> For multiple decision levels (but use IFS if available)</li>
    <li><b>Text vs. Numbers:</b> Text in quotes, numbers not</li>
    <li><b>Test Thoroughly:</b> Especially boundary cases</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 IF Function Best Practices:</h3>
    <ul>
        <li><b>Plan First:</b> Write logic in plain English before Excel</li>
        <li><b>Use Named Ranges:</b> =IF(Income>=Minimum_Income, "Yes", "No")</li>
        <li><b>Keep it Simple:</b> Complex logic? Consider breaking into multiple columns</li>
        <li><b>Document Logic:</b> Add comments explaining complex IF statements</li>
        <li><b>Test All Paths:</b> Ensure both TRUE and FALSE paths work</li>
        <li><b>Consider Alternatives:</b> Sometimes VLOOKUP or CHOOSE is better</li>
        <li><b>Use Cell References:</b> Never hard-code values in IF formulas</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: VLOOKUP & Data Validation</b></p>
    <ul>
        <li>Complete the Loan Application System assignment</li>
        <li>Practice creating decision tables on paper</li>
        <li>Think about: When would you need to look up data from another table?</li>
        <li>Try to create a simple product price list</li>
        <li>Research: What does "VLOOKUP" stand for?</li>
    </ul>
    <p><i>Tutor Note: VLOOKUP is one of Excel's most powerful functions. Combined with IF, it creates incredibly dynamic spreadsheets. Tomorrow we learn to connect data across tables!</i></p>
</div>
`
            },
            "6-2": {
                icon: "fa-search",
                title: "VLOOKUP & Data Validation",
                html: `<h1>Week 6, Day 2: VLOOKUP & Data Validation</h1>
<p>Today we learn to search for data across tables and ensure data integrity with validation rules - essential skills for working with large datasets.</p>

<div class="analogy-box">
    <b>Analogy: The Library Catalog System 📚</b><br/>
    
    Library Database: Your Excel workbook<br/>
    Book Lookup: Student asking for specific book<br/>
    VLOOKUP: Librarian searching catalog<br/>
    Lookup Value: Book title or ISBN<br/>
    Table Array: Entire library catalog<br/>
    Column Index: Shelf location number<br/>
    Result: Book retrieved (or "Not Found")
</div>

<h3>VLOOKUP Fundamentals</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 VLOOKUP Syntax & Parameters</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <p style="font-family: monospace; background: #f5f5f5; padding: 15px; border-radius: 3px; font-size: 16px;">
            =VLOOKUP(lookup_value, table_array, col_index_num, [range_lookup])
        </p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background: #4A90E2; color: white;">
                <th style="padding: 10px; text-align: left;">Parameter</th>
                <th style="padding: 10px; text-align: left;">What It Means</th>
                <th style="padding: 10px; text-align: left;">Example</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">lookup_value</td>
                <td style="padding: 8px; border: 1px solid #ddd;">What to search for</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Apple" or A2</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">table_array</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Where to search (range)</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$B$2:$E$100</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">col_index_num</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Which column has answer</td>
                <td style="padding: 8px; border: 1px solid #ddd;">3 (third column)</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">range_lookup</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Exact or approximate match</td>
                <td style="padding: 8px; border: 1px solid #ddd;">FALSE (exact)</td>
            </tr>
        </table>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 The Golden Rule of VLOOKUP:</h5>
            <p><b>"The lookup column must be the FIRST column in your table array!"</b></p>
            <p>VLOOKUP can only search in the first column of the table_array. If you need to search in a different column, use XLOOKUP or INDEX/MATCH.</p>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 Range Lookup Options:</h5>
            <p><b>FALSE or 0:</b> Exact match only (most common)</p>
            <p><b>TRUE or 1:</b> Approximate match (requires sorted data)</p>
            <p><b>Best Practice:</b> Always use FALSE for exact matches to avoid errors!</p>
        </div>
    </div>
</div>

<h3>Practical VLOOKUP Examples</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Example 1: Product Price Lookup</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Price Table (Sheet2, A1:C6):</b></p>
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Product ID</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Product Name</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Price</th>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">P001</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Laptop</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$999.99</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">P002</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Mouse</td>
                <td style="padding: 8px; border: 1px solid #ddd;">$24.99</td>
            </tr>
        </table>
        
        <p><b>Order Form (Sheet1):</b></p>
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>B2:</b> Enter Product ID</td>
                <td style="padding: 8px; border: 1px solid #ddd;">P001</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><b>C2:</b> Price Lookup</td>
                <td style="padding: 8px; border: 1px solid #ddd;">=VLOOKUP(B2, Sheet2!$A$2:$C$6, 3, FALSE)</td>
            </tr>
        </table>
        
        <p><b>Result:</b> When you type P001 in B2, C2 shows $999.99 automatically!</p>
    </div>

    <h4>Example 2: Student Grade Lookup</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Grade Table (named range "GradeScale"):</b></p>
        <table style="width: auto; border-collapse: collapse; margin: 10px auto;">
            <tr style="background: #2196F3; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Score</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Grade</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Status</th>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">0</td>
                <td style="padding: 8px; border: 1px solid #ddd;">F</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Fail</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">60</td>
                <td style="padding: 8px; border: 1px solid #ddd;">D</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Pass</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">70</td>
                <td style="padding: 8px; border: 1px solid #ddd;">C</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Pass</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">80</td>
                <td style="padding: 8px; border: 1px solid #ddd;">B</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Good</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">90</td>
                <td style="padding: 8px; border: 1px solid #ddd;">A</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Excellent</td>
            </tr>
        </table>
        
        <p><b>VLOOKUP with approximate match (TRUE):</b></p>
        <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
=VLOOKUP(85, GradeScale, 2, TRUE)  → Returns "B" (85 falls between 80-89)
=VLOOKUP(85, GradeScale, 3, TRUE)  → Returns "Good"
        </pre>
        
        <p><b>Important:</b> Table must be sorted ascending for approximate match to work!</p>
    </div>

    <h4>Example 3: Employee Database Lookup</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Multi-column lookup with IFERROR:</b></p>
        <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
=IFERROR(VLOOKUP(A2, Employees!$A$2:$F$100, 3, FALSE), "Not Found")

Combined formula to handle missing data gracefully!
        </pre>
        
        <p><b>Looking up multiple values:</b></p>
        <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
Name:    =VLOOKUP(ID, EmployeeTable, 2, FALSE)
Department: =VLOOKUP(ID, EmployeeTable, 3, FALSE)
Salary:     =VLOOKUP(ID, EmployeeTable, 4, FALSE)
Email:      =VLOOKUP(ID, EmployeeTable, 5, FALSE)
        </pre>
    </div>
</div>

<h3>Data Validation - Ensuring Clean Data</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Data Validation Types & Applications</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>1. List Validation</h5>
            <p><b>Purpose:</b> Restrict to predefined options</p>
            <p><b>Setup:</b> Data → Data Validation → List</p>
            <p><b>Example:</b> Department: Sales, Marketing, IT</p>
            <p><b>Benefit:</b> Eliminates typos, ensures consistency</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>2. Number Validation</h5>
            <p><b>Purpose:</b> Restrict to number ranges</p>
            <p><b>Setup:</b> Whole number/decimal between/not between</p>
            <p><b>Example:</b> Age: Between 18 and 65</p>
            <p><b>Benefit:</b> Prevents impossible values</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>3. Date Validation</h5>
            <p><b>Purpose:</b> Control date entries</p>
            <p><b>Setup:</b> Date → between/after/before</p>
            <p><b>Example:</b> Birth date: After 1/1/1900</p>
            <p><b>Benefit:</b> Ensures logical dates</p>
        </div>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>🎯 Data Validation Best Practices:</h5>
        <ol>
            <li><b>Use Input Messages:</b> Guide users on what to enter</li>
            <li><b>Create Error Alerts:</b> Custom messages for invalid entries</li>
            <li><b>Source Lists on Separate Sheet:</b> Keep validation lists hidden</li>
            <li><b>Combine with VLOOKUP:</b> Dynamic dropdowns based on other cells</li>
            <li><b>Test Validation:</b> Try to break it with wrong inputs</li>
        </ol>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Employee Directory with VLOOKUP</h4>
    <ol>
        <li><b>Create Employee Database (Sheet2):</b>
            <table style="width: 100%; border-collapse: collapse; margin: 10px;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">EmpID</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Name</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Department</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Salary</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Hire Date</td>
                </tr>
            </table>
        </li>
        <li><b>Create Lookup Interface (Sheet1):</b>
            <ul>
                <li>Cell B2: Enter EmpID (with data validation list)</li>
                <li>Cell C2: =VLOOKUP(B2, Sheet2!$A$2:$E$50, 2, FALSE) → Name</li>
                <li>Cell D2: =VLOOKUP(B2, Sheet2!$A$2:$E$50, 3, FALSE) → Department</li>
                <li>Cell E2: =VLOOKUP(B2, Sheet2!$A$2:$E$50, 4, FALSE) → Salary</li>
                <li>Wrap all in IFERROR: =IFERROR(VLOOKUP(...), "Invalid ID")</li>
            </ul>
        </li>
        <li><b>Add Data Validation:</b>
            <ul>
                <li>Select B2 → Data → Data Validation → List</li>
                <li>Source: =Sheet2!$A$2:$A$50</li>
                <li>Input Message: "Select Employee ID from dropdown"</li>
                <li>Error Alert: "Invalid Employee ID selected"</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Product Order Form</h4>
    <ol>
        <li><b>Create Product Catalog:</b> 20 products with ID, Name, Price, Category</li>
        <li><b>Create Order Form:</b>
            <ul>
                <li>Product ID dropdown (validated list)</li>
                <li>Auto-filled Product Name (VLOOKUP)</li>
                <li>Auto-filled Price (VLOOKUP)</li>
                <li>Quantity (validated: whole number 1-100)</li>
                <li>Total: = Price × Quantity</li>
            </ul>
        </li>
        <li><b>Add Advanced Features:</b>
            <ul>
                <li>Category dropdown that filters Product ID list</li>
                <li>Stock level check (separate stock table)</li>
                <li>Discount calculation based on quantity</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 3: Nested VLOOKUP with MATCH</h4>
    <ol>
        <li><b>Problem:</b> Column index changes based on month</li>
        <li><b>Solution:</b> =VLOOKUP(Product, Table, MATCH(Month, HeaderRow, 0), FALSE)</li>
        <li><b>Create Sales Table:</b> Products rows, Months columns</li>
        <li><b>Create Lookup:</b> Select Product and Month, return sales amount</li>
        <li><b>Benefit:</b> Dynamic column reference instead of hard-coded number</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create an "Inventory Management System"</b>
    
    <h4>Part 1: Product Database Setup (30 points)</h4>
    <p>Create a product database with 30 items including:</p>
    <ul>
        <li>Product ID (format: PRD-001)</li>
        <li>Product Name</li>
        <li>Category (Electronics, Clothing, Food, etc.)</li>
        <li>Supplier</li>
        <li>Cost Price</li>
        <li>Selling Price</li>
        <li>Current Stock</li>
        <li>Minimum Stock Level</li>
        <li>Reorder Quantity</li>
    </ul>
    
    <h4>Part 2: Sales Interface (40 points)</h4>
    <p>Create a point-of-sale interface with:</p>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Field</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Data Validation</th>
            <th style="padding: 8px; border: 1px solid #ddd;">VLOOKUP/Formula</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Product ID</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Dropdown from database</td>
            <td style="padding: 8px; border: 1px solid #ddd;">-</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Product Name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Auto-filled</td>
            <td style="padding: 8px; border: 1px solid #ddd;">VLOOKUP by ID</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Price</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Auto-filled</td>
            <td style="padding: 8px; border: 1px solid #ddd;">VLOOKUP by ID</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Quantity</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1-100, whole number</td>
            <td style="padding: 8px; border: 1px solid #ddd;">-</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Stock Check</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Auto validation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">IF(VLOOKUP(...)<Quantity, "Out of Stock")</td>
        </tr>
    </table>
    
    <h4>Part 3: Reorder Alert System (30 points)</h4>
    <p>Create a dashboard that shows:</p>
    <ul>
        <li>Products below minimum stock level (use VLOOKUP + IF)</li>
        <li>Auto-calculated reorder amounts</li>
        <li>Total value of inventory (sum of cost price × stock)</li>
        <li>Products never sold (if you track sales history)</li>
        <li>Most profitable products (selling price - cost price) × sales</li>
    </ul>
    
    <h4>Challenge Task: Two-Way Lookup</h4>
    <p>Create a pricing matrix where price depends on:</p>
    <ul>
        <li>Product (row)</li>
        <li>Customer Type (column: Retail, Wholesale, VIP)</li>
    </ul>
    <p>Use: =INDEX(PriceMatrix, MATCH(Product, ProductList, 0), MATCH(CustomerType, CustomerTypes, 0))</p>
    <p>This introduces INDEX/MATCH as a more flexible alternative to VLOOKUP!</p>
</div>

<h3>Common VLOOKUP Errors & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Error</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Cause</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">#N/A</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Value not found</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use IFERROR or check for typos</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">#REF!</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Column index out of range</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check col_index_num ≤ table columns</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">#VALUE!</td>
            <td style="padding: 8px; border: 1px solid #ddd;">col_index_num < 1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Column index must be ≥ 1</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong results</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Missing $ in table_array</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use absolute references: $A$1:$D$100</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Slow calculations</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Whole column references</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use exact range, not A:A</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔧 VLOOKUP Troubleshooting Checklist:</h5>
        <ol>
            <li>Is lookup_value in the FIRST column of table_array?</li>
            <li>Are there leading/trailing spaces in data? (Use TRIM)</li>
            <li>Is data type consistent? (Text vs. Number)</li>
            <li>Is range_lookup FALSE for exact match?</li>
            <li>Are table references absolute? ($A$1 not A1)</li>
            <li>Does col_index_num exist in table?</li>
            <li>Is table sorted if using TRUE/approximate match?</li>
        </ol>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>VLOOKUP Structure:</b> Four parameters, last one usually FALSE</li>
    <li><b>First Column Rule:</b> Lookup column must be first in table</li>
    <li><b>Absolute References:</b> Always use $ in table_array</li>
    <li><b>Error Handling:</b> Wrap in IFERROR for clean results</li>
    <li><b>Data Validation:</b> Prevents errors before they happen</li>
    <li><b>Combined Power:</b> VLOOKUP + Validation = Robust systems</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 VLOOKUP & Validation Best Practices:</h3>
    <ul>
        <li><b>Name Your Ranges:</b> Table names are clearer than cell references</li>
        <li><b>Use Tables:</b> Excel Tables expand automatically</li>
        <li><b>Document Lookup Tables:</b> Add comments explaining data structure</li>
        <li><b>Test Edge Cases:</b> What if lookup value is blank? Missing?</li>
        <li><b>Consider XLOOKUP:</b> Newer, more flexible (Office 365)</li>
        <li><b>Validation Lists:</b> Keep source lists on hidden sheet</li>
        <li><b>Input Messages:</b> Always guide users on what to enter</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Sorting, Filtering & Pivot Tables</b></p>
    <ul>
        <li>Complete the Inventory Management System</li>
        <li>Practice VLOOKUP with different data types</li>
        <li>Create a dataset with at least 100 rows of data</li>
        <li>Think about: How would you analyze sales trends?</li>
        <li>What questions would you ask of your inventory data?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we move from looking up individual values to analyzing entire datasets. Pivot tables are one of Excel's most powerful features - they can summarize thousands of rows in seconds!</i></p>
</div>
`
            },
            "6-3": {
                icon: "fa-filter",
                title: "Sorting, Filtering & Pivot Tables",
                html: `<h1>Week 6, Day 3: Sorting, Filtering & Pivot Tables</h1>
<p>Today we learn to organize, analyze, and summarize large datasets efficiently. Discover how to transform raw data into meaningful insights with Excel's most powerful analytical tools.</p>

<div class="analogy-box">
    <b>Analogy: The Detective's Investigation Board 🕵️</b><br/>
    
    Raw Evidence: Your dataset (scattered clues)<br/>
    Sorting: Organizing clues by date, importance, type<br/>
    Filtering: Hiding irrelevant clues, focusing on key evidence<br/>
    Pivot Tables: Creating connections, seeing patterns<br/>
    Insights: Solving the case (discovering trends)<br/>
    Dashboard: Presenting findings to the chief
</div>

<h3>Sorting Data - Organizing Your Information</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Sorting Types & Techniques</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Sort Type</th>
            <th style="padding: 10px; text-align: left;">Best For</th>
            <th style="padding: 10px; text-align: left;">How To</th>
            <th style="padding: 10px; text-align: left;">Example</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Single Column</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Quick organization</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Click column header → Sort A→Z</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Sort names alphabetically</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Multiple Columns</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Hierarchical sorting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Data → Sort → Add Level</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Department then Salary</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Custom Sort</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Non-standard orders</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Custom Lists</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Months, Priority levels</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Cell Color/Font</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Visual organization</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Sort by Color</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Status colors first</td>
        </tr>
    </table>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 Sorting Best Practices:</h5>
            <ol>
                <li><b>Select All Data First:</b> Click one cell → Ctrl+A</li>
                <li><b>Include Headers:</b> Check "My data has headers"</li>
                <li><b>Use Tables:</b> Convert to Table (Ctrl+T) for persistent sorting</li>
                <li><b>Save Original:</b> Keep unsorted version as backup</li>
                <li><b>Undo is Your Friend:</b> Ctrl+Z if sort goes wrong</li>
            </ol>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>⚠️ Common Sorting Mistakes:</h5>
            <ul>
                <li><b>Partial Selection:</b> Only sorting one column breaks data relationships</li>
                <li><b>Missing Headers:</b> Excel treats headers as data</li>
                <li><b>Mixed Data Types:</b> Numbers stored as text don't sort correctly</li>
                <li><b>Blank Cells:</b> Can cause unexpected results</li>
                <li><b>Memory:</b> Large datasets may sort slowly</li>
            </ul>
        </div>
    </div>
</div>

<h3>Filtering Data - Focusing on What Matters</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Filter Types & Applications</h4>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>1. Text Filters</h5>
            <ul>
                <li>Equals, Does Not Equal</li>
                <li>Begins With, Ends With</li>
                <li>Contains, Does Not Contain</li>
                <li><b>Example:</b> Show names starting with "A"</li>
                <li><b>Use:</b> Data → Filter → Text Filters</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>2. Number Filters</h5>
            <ul>
                <li>Greater Than, Less Than</li>
                <li>Between, Top 10</li>
                <li>Above Average, Below Average</li>
                <li><b>Example:</b> Show sales > $10,000</li>
                <li><b>Use:</b> Data → Filter → Number Filters</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>3. Date Filters</h5>
            <ul>
                <li>Before, After, Between</li>
                <li>Tomorrow, Next Week, Last Month</li>
                <li>Year to Date, Quarter</li>
                <li><b>Example:</b> Show orders from last month</li>
                <li><b>Use:</b> Data → Filter → Date Filters</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5>Advanced Filtering Techniques</h5>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>Custom AutoFilter:</b></p>
                <ul>
                    <li>Multiple conditions with AND/OR</li>
                    <li>Example: Sales > 5000 AND Region = "East"</li>
                    <li>Wildcards: * (any characters), ? (single character)</li>
                    <li>Example: Product Name like "*Pro*"</li>
                </ul>
            </div>
            
            <div>
                <p><b>Advanced Filter (Data Tab):</b></p>
                <ul>
                    <li>Complex criteria ranges</li>
                    <li>Extract filtered data to new location</li>
                    <li>Remove duplicates</li>
                    <li>Use formulas in criteria</li>
                </ul>
            </div>
        </div>
        
        <div style="background: #FFF3CD; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <p><b>Filter vs. Sort:</b></p>
            <p><b>Sorting:</b> Changes order of ALL rows permanently</p>
            <p><b>Filtering:</b> Temporarily HIDES rows that don't match criteria</p>
            <p><b>Key Insight:</b> Filtering doesn't delete data, just hides it!</p>
        </div>
    </div>
</div>

<h3>Pivot Tables - Excel's Superpower</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 What Are Pivot Tables?</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <p><b>Definition:</b> Interactive tables that summarize, analyze, explore, and present data.</p>
        <p><b>Analogy:</b> Like a Swiss Army knife for data - one tool with many functions!</p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div>
                <h5>Why Use Pivot Tables?</h5>
                <ul>
                    <li>Summarize thousands of rows in seconds</li>
                    <li>Spot patterns and trends easily</li>
                    <li>Create interactive reports</li>
                    <li>No formulas needed for basic analysis</li>
                    <li>Dynamic - update with one click</li>
                </ul>
            </div>
            
            <div>
                <h5>When to Use Pivot Tables?</h5>
                <ul>
                    <li>Sales analysis by region/product</li>
                    <li>Student performance by subject/class</li>
                    <li>Inventory tracking by category</li>
                    <li>Survey data analysis</li>
                    <li>Financial statement summarization</li>
                </ul>
            </div>
        </div>
    </div>
    
    <h4>The Pivot Table Field List - 4 Areas</h4>
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 10px; text-align: left;">Area</th>
                <th style="padding: 10px; text-align: left;">Purpose</th>
                <th style="padding: 10px; text-align: left;">Example Fields</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">FILTERS</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Filter entire table</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Year, Quarter, Region</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">COLUMNS</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Column headings</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Products, Months</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">ROWS</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Row headings</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Salespeople, Categories</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">VALUES</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Numbers to calculate</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Sales, Quantity, Profit</td>
            </tr>
        </table>
        
        <div style="background: #FFF3CD; padding: 10px; margin-top: 15px; border-radius: 5px;">
            <h5>🎯 Pivot Table Mantra:</h5>
            <p><b>"Drag fields, don't write formulas!"</b></p>
            <p>The power of pivot tables is visual manipulation. Just drag fields between areas to create different views instantly.</p>
        </div>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Sales Data Analysis</h4>
    <ol>
        <li><b>Create Sample Sales Data (100+ rows):</b>
            <table style="width: 100%; border-collapse: collapse; margin: 10px;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Date</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Salesperson</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Region</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Product</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Quantity</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Revenue</td>
                </tr>
            </table>
        </li>
        <li><b>Convert to Table:</b> Select data → Ctrl+T → "My table has headers"</li>
        <li><b>Practice Sorting:</b>
            <ul>
                <li>Sort by Revenue (largest to smallest)</li>
                <li>Multi-level: Region then Revenue</li>
                <li>Custom: Sort regions in specific order</li>
            </ul>
        </li>
        <li><b>Practice Filtering:</b>
            <ul>
                <li>Filter: Show only "East" region</li>
                <li>Number filter: Revenue > $5,000</li>
                <li>Date filter: This quarter only</li>
                <li>Text filter: Product contains "Pro"</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Create Your First Pivot Table</h4>
    <ol>
        <li><b>Insert Pivot Table:</b> Select data → Insert → PivotTable → New Worksheet</li>
        <li><b>Answer: "Who are the top salespeople?"</b>
            <ul>
                <li>Drag "Salesperson" to ROWS</li>
                <li>Drag "Revenue" to VALUES</li>
                <li>Result: List of salespeople with total revenue</li>
            </ul>
        </li>
        <li><b>Answer: "What are sales by region and product?"</b>
            <ul>
                <li>Drag "Region" to ROWS</li>
                <li>Drag "Product" to COLUMNS</li>
                <li>Drag "Revenue" to VALUES</li>
                <li>Result: Matrix showing revenue by region × product</li>
            </ul>
        </li>
        <li><b>Add a Filter:</b> Drag "Date" to FILTERS, filter to show only Q1</li>
    </ol>
    
    <h4>🎯 Exercise 3: Pivot Table Calculations</h4>
    <ol>
        <li><b>Change Calculation Type:</b> Click Σ Values → Value Field Settings
            <ul>
                <li>Sum (default) - Total revenue</li>
                <li>Average - Average sale amount</li>
                <li>Count - Number of transactions</li>
                <li>Max - Largest single sale</li>
                <li>Min - Smallest single sale</li>
            </ul>
        </li>
        <li><b>Add Multiple Calculations:</b> Drag "Revenue" to VALUES twice
            <ul>
                <li>First: Sum of Revenue</li>
                <li>Second: % of Column Total</li>
                <li>Result: Shows both amount and percentage</li>
            </ul>
        </li>
        <li><b>Group Dates:</b> Right-click dates in pivot → Group → Months</li>
        <li><b>Create Pivot Chart:</b> Select pivot table → Insert → PivotChart</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Analyze "University Student Performance" Dataset</b>
    
    <h4>Dataset Creation (30 points)</h4>
    <p>Create a dataset with 200+ student records including:</p>
    <ul>
        <li>Student ID, Name, Gender, Major, Year (Freshman-Senior)</li>
        <li>5 Course Grades (Math, Science, English, History, Arts) 0-100</li>
        <li>Attendance Percentage, Extracurricular Activities (Y/N)</li>
        <li>Advisor, Scholarship Status, GPA (calculated)</li>
    </ul>
    
    <h4>Part 1: Sorting & Filtering Analysis (35 points)</h4>
    <p>Answer these questions using sorting/filtering:</p>
    <ol>
        <li>Who are the top 10 students by GPA? (Sort descending)</li>
        <li>Which majors have the highest average GPA? (Filter by major, calculate average)</li>
        <li>Show all seniors with GPA > 3.5 who participate in extracurriculars (Multiple filters)</li>
        <li>Find students at risk: GPA < 2.0 OR Attendance < 70%</li>
        <li>Create a custom sort: Order majors by difficulty (create your own order)</li>
    </ol>
    
    <h4>Part 2: Pivot Table Analysis (35 points)</h4>
    <p>Create pivot tables to answer:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Question</th>
            <th style="padding: 8px; border: 1px solid #ddd;">ROWS</th>
            <th style="padding: 8px; border: 1px solid #ddd;">VALUES</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Calculation</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Average GPA by Major</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Major</td>
            <td style="padding: 8px; border: 1px solid #ddd;">GPA</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Average</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Student count by Year and Gender</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Year, Gender</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Student ID</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Count</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Performance by Advisor</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Advisor</td>
            <td style="padding: 8px; border: 1px solid #ddd;">GPA</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Average, Count, Max, Min</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Scholarship impact analysis</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Scholarship Status</td>
            <td style="padding: 8px; border: 1px solid #ddd;">GPA, Attendance</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Average</td>
        </tr>
    </table>
    
    <h4>Challenge Task: Pivot Table Dashboard</h4>
    <p>Create a one-page dashboard with:</p>
    <ul>
        <li>4 connected pivot tables showing different views</li>
        <li>Pivot charts for visual representation</li>
        <li>Slicers for Major, Year, and Gender (interactive filtering)</li>
        <li>Timeline for date-based analysis (if you add semester dates)</li>
        <li>Key metrics cards: Total Students, Average GPA, Top Major, etc.</li>
    </ul>
</div>

<h3>Common Pivot Table Errors & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Problem</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Cause</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">"PivotTable field name is not valid"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Blank column headers</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Ensure every column has a header</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Data not updating</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Source data changed</td>
            <td style="padding: 8px; border: 1px solid #ddd;">PivotTable Analyze → Refresh</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong calculation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Text in number field</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Clean data, ensure numbers are numeric</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Grouping not working</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Blank cells or mixed types</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Fill blanks, ensure consistent data types</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Slow performance</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Too much data or calculations</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use PivotTable Options → disable "Preserve formatting"</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔧 Pivot Table Troubleshooting Tips:</h5>
        <ol>
            <li><b>Use Tables:</b> Source data as Table (Ctrl+T) for automatic range expansion</li>
            <li><b>Check Data Types:</b> Numbers should be numbers, dates should be dates</li>
            <li><b>No Blank Headers:</b> Every column must have a unique header name</li>
            <li><b>Refresh Regularly:</b> Data changes don't auto-update pivot tables</li>
            <li><b>Clear Old Items:</b> PivotTable Analyze → Options → Data → Clear Old Items</li>
            <li><b>Check for Filters:</b> Sometimes filters hide expected data</li>
        </ol>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Sorting Organizes:</b> Changes order of all data permanently</li>
    <li><b>Filtering Focuses:</b> Temporarily hides irrelevant data</li>
    <li><b>Pivot Tables Summarize:</b> Drag-and-drop analysis without formulas</li>
    <li><b>Four Areas:</b> Filters, Columns, Rows, Values - master these</li>
    <li><b>Refresh Needed:</b> Pivot tables don't auto-update</li>
    <li><b>Tables are Friends:</b> Use Ctrl+T for dynamic data sources</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Pivot Table Best Practices:</h3>
    <ul>
        <li><b>Start with Questions:</b> Know what you want to learn from data</li>
        <li><b>Use Meaningful Names:</b> Rename pivot tables and fields clearly</li>
        <li><b>Format Consistently:</b> Apply number formats to VALUES area</li>
        <li><b>Add Slicers/Timelines:</b> Make reports interactive for users</li>
        <li><b>Create Pivot Charts:</b> Visualize pivot table data</li>
        <li><b>Document Assumptions:</b> Add notes about data sources/filters</li>
        <li><b>Use GETPIVOTDATA:</b> Reference pivot results in formulas</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Module 3 Final Project - Student Grade Tracker</b></p>
    <ul>
        <li>Complete the University Performance Analysis</li>
        <li>Practice creating multiple pivot tables from same data</li>
        <li>Review all Excel skills from Weeks 5-6</li>
        <li>Think about: How would you track grades for a class?</li>
        <li>What calculations would be helpful for teachers?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow brings together ALL your Excel skills into one comprehensive project. This is where you'll see how formulas, lookups, and pivot tables work together to solve real problems!</i></p>
</div>
`
            },
            "6-4": {
                icon: "fa-graduation-cap",
                title: "Module 3 Final Project: Student Grade Tracker",
                html: `<h1>Week 6, Day 4: Module 3 Final Project</h1>
<p>Today you demonstrate mastery of Excel by building a comprehensive "Student Grade Tracker" that automatically calculates grades, analyzes performance, and generates reports using all the skills learned in Module 3.</p>

<div class="analogy-box">
    <b>Analogy: The School Principal's Command Center 🏫</b><br/>
    
    Raw Data: Individual student assignments (scattered papers)<br/>
    Formulas: Automatic grade calculations (teacher's assistant)<br/>
    VLOOKUP: Finding student records quickly (filing system)<br/>
    Pivot Tables: Class performance analysis (principal's overview)<br/>
    Charts: Visualizing trends (parent-teacher conference visuals)<br/>
    Dashboard: Complete picture of academic health (war room)
</div>

<h3>Final Project Overview</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📋 Project Requirements Checklist</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Component</th>
            <th style="padding: 10px; text-align: left;">Requirements</th>
            <th style="padding: 10px; text-align: left;">Points</th>
            <th style="padding: 10px; text-align: left;">Status</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Student Database</td>
            <td style="padding: 8px; border: 1px solid #ddd;">30+ students with complete info</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Grade Calculations</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Automatic using formulas</td>
            <td style="padding: 8px; border: 1px solid #ddd;">20</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">VLOOKUP System</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Student lookup interface</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Data Validation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Dropdowns, input restrictions</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Pivot Table Analysis</td>
            <td style="padding: 8px; border: 1px solid #ddd;">3+ different analyses</td>
            <td style="padding: 8px; border: 1px solid #ddd;">20</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Charts & Visualization</td>
            <td style="padding: 8px; border: 1px solid #ddd;">3+ professional charts</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Dashboard & Reporting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Professional layout</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">□</td>
        </tr>
        <tr style="background: #4CAF50; color: white;">
            <td style="padding: 8px; border: 1px solid #ddd;"><b>TOTAL</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;"></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><b>100</b></td>
            <td style="padding: 8px; border: 1px solid #ddd;"></td>
        </tr>
    </table>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🎯 Project Scenario: "High School Mathematics Department"</h5>
        <p>Create a grade tracking system for Algebra I classes. The system should:</p>
        <ul>
            <li>Track 30+ students across multiple assessments</li>
            <li>Calculate final grades automatically</li>
            <li>Identify at-risk students</li>
            <li>Generate reports for teachers, students, and parents</li>
            <li>Analyze class performance trends</li>
        </ul>
    </div>
</div>

<h3>Step-by-Step Build Guide</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Step 1: Workbook Structure & Setup (30 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Create these worksheets:</b></p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 10px; text-align: left;">Sheet Name</th>
                <th style="padding: 10px; text-align: left;">Purpose</th>
                <th style="padding: 10px; text-align: left;">Key Contents</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">1. Dashboard</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Main interface & summary</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Key metrics, charts, navigation</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">2. StudentDB</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Student information</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Names, IDs, contact info, demographics</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">3. Grades</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Raw grade data</td>
                <td style="padding: 8px; border: 1px solid #ddd;">All assignment/test scores</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">4. Calculations</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Grade calculations</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Weighted averages, letter grades</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">5. Analysis</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Pivot tables & charts</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Performance analysis</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">6. Lookup</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Student lookup interface</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Individual student reports</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">7. Settings</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Grading parameters</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Weighting scales, grade boundaries</td>
            </tr>
        </table>
        
        <p><b>Save as:</b> "LastName_StudentGradeTracker.xlsx"</p>
    </div>

    <h4>Step 2: Student Database & Data Entry (45 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Create StudentDB Sheet with 30+ students:</b></p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #2196F3; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Column</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Data Type</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Validation</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">StudentID</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Text</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Unique, required</td>
                <td style="padding: 8px; border: 1px solid #ddd;">S2024001</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">LastName, FirstName</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Text</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Required</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Smith, John</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">ClassSection</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Text</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Dropdown: A, B, C</td>
                <td style="padding: 8px; border: 1px solid #ddd;">A</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Gender</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Text</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Dropdown: M, F, Other</td>
                <td style="padding: 8px; border: 1px solid #ddd;">M</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Email, Phone</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Text</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Custom validation</td>
                <td style="padding: 8px; border: 1px solid #ddd;">john@email.com</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Attendance %</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Percentage</td>
                <td style="padding: 8px; border: 1px solid #ddd;">0-100%</td>
                <td style="padding: 8px; border: 1px solid #ddd;">95%</td>
            </tr>
        </table>
        
        <p><b>Convert to Table:</b> Select data → Ctrl+T → Name: "tblStudents"</p>
    </div>

    <h4>Step 3: Grade Calculations & Formulas (60 minutes)</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Create Grades Sheet with assessment data:</b></p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #FF9800; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Assessment Type</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Weight</th>
                <th style="padding: 8px; border: 1px solid #ddd;"># of Items</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Example Columns</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Homework</td>
                <td style="padding: 8px; border: 1px solid #ddd;">20%</td>
                <td style="padding: 8px; border: 1px solid #ddd;">10 assignments</td>
                <td style="padding: 8px; border: 1px solid #ddd;">HW1, HW2, ..., HW10</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Quizzes</td>
                <td style="padding: 8px; border: 1px solid #ddd;">30%</td>
                <td style="padding: 8px; border: 1px solid #ddd;">5 quizzes</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Quiz1, ..., Quiz5</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Tests</td>
                <td style="padding: 8px; border: 1px solid #ddd;">40%</td>
                <td style="padding: 8px; border: 1px solid #ddd;">2 tests</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Midterm, Final</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Project</td>
                <td style="padding: 8px; border: 1px solid #ddd;">10%</td>
                <td style="padding: 8px; border: 1px solid #ddd;">1 project</td>
                <td style="padding: 8px; border: 1px solid #ddd;">FinalProject</td>
            </tr>
        </table>
        
        <p><b>Create Calculations Sheet with these formulas:</b></p>
        <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px; overflow-x: auto;">
1. Homework Average: =AVERAGE(HW1:HW10)
2. Quiz Average: =AVERAGE(Quiz1:Quiz5)
3. Test Average: =AVERAGE(Midterm, Final)
4. Weighted Total: = (HW_Avg*0.2) + (Quiz_Avg*0.3) + (Test_Avg*0.4) + (Project*0.1)
5. Letter Grade: =IFS(Total>=90, "A", Total>=80, "B", Total>=70, "C", Total>=60, "D", Total<60, "F")
6. Pass/Fail: =IF(Total>=60, "PASS", "FAIL")
7. Attendance Impact: =IF(Attendance<75, Total*0.9, Total)  # 10% penalty for low attendance
8. Rank: =RANK.EQ(Total, $All_Totals, 0)  # Rank among all students
        </pre>
    </div>
</div>

<h3>Advanced Features Implementation</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <h4>VLOOKUP Student Lookup System</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>On "Lookup" sheet, create this interface:</b></p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>Input Area:</b></p>
                <ul>
                    <li>Student ID dropdown (Data Validation → List)</li>
                    <li>OR Name search box</li>
                    <li>Search button (optional, can be automatic)</li>
                </ul>
            </div>
            
            <div>
                <p><b>Output Area (all auto-filled with VLOOKUP):</b></p>
                <ul>
                    <li>Student Name & Info</li>
                    <li>All grades & averages</li>
                    <li>Current letter grade</li>
                    <li>Class rank</li>
                    <li>Attendance status</li>
                    <li>Teacher comments area</li>
                </ul>
            </div>
        </div>
        
        <p><b>Sample VLOOKUP formulas:</b></p>
        <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
Student Name: =VLOOKUP(SelectedID, tblStudents, 2, FALSE) & " " & VLOOKUP(SelectedID, tblStudents, 3, FALSE)
Current Grade: =VLOOKUP(SelectedID, tblCalculations, GradeColumn, FALSE)
Attendance: =VLOOKUP(SelectedID, tblStudents, AttendanceColumn, FALSE)
All wrapped in IFERROR: =IFERROR(VLOOKUP(...), "Not Found")
        </pre>
    </div>
    
    <h4>Pivot Table Analysis</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>On "Analysis" sheet, create these pivot tables:</b></p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #9C27B0; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Analysis</th>
                <th style="padding: 8px; border: 1px solid #ddd;">ROWS</th>
                <th style="padding: 8px; border: 1px solid #ddd;">VALUES</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Insight</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Performance by Section</td>
                <td style="padding: 8px; border: 1px solid #ddd;">ClassSection</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Average Grade</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Which section performs best?</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Grade Distribution</td>
                <td style="padding: 8px; border: 1px solid #ddd;">LetterGrade</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Count of Students</td>
                <td style="padding: 8px; border: 1px solid #ddd;">How many As, Bs, etc.?</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Attendance Impact</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Attendance Category</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Average Grade</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Does attendance affect grades?</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Assessment Analysis</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Assessment Type</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Average Score</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Which assessments are hardest?</td>
            </tr>
        </table>
        
        <p><b>Add Slicers for:</b> ClassSection, Gender, LetterGrade</p>
        <p><b>Add Timeline:</b> If you include date fields</p>
    </div>
</div>

<h3>Dashboard Creation</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Professional Dashboard Requirements</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 36px; color: #4CAF50;">📈</div>
            <h5>Key Metrics</h5>
            <ul style="text-align: left; font-size: 14px;">
                <li>Total Students: =COUNTA(StudentDB[StudentID])</li>
                <li>Class Average: =AVERAGE(Calculations[Total])</li>
                <li>Pass Rate: =COUNTIF(Calculations[Status], "PASS")/COUNTA(Calculations[Status])</li>
                <li>Top Student: =INDEX(StudentDB[FirstName], MATCH(MAX(Calculations[Total]), Calculations[Total], 0))</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 36px; color: #2196F3;">📊</div>
            <h5>Charts Required</h5>
            <ul style="text-align: left; font-size: 14px;">
                <li>Grade Distribution (Pie/Bar)</li>
                <li>Performance Trend (Line - if over time)</li>
                <li>Section Comparison (Column)</li>
                <li>Attendance vs Grade (Scatter)</li>
                <li>All linked to pivot tables</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 36px; color: #FF9800;">🔍</div>
            <h5>Interactive Elements</h5>
            <ul style="text-align: left; font-size: 14px;">
                <li>Student Lookup Box</li>
                <li>Slicers for filtering</li>
                <li>Navigation buttons to sheets</li>
                <li>Refresh All button</li>
                <li>Print Report button</li>
            </ul>
        </div>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>🎨 Dashboard Design Tips:</h5>
        <ol>
            <li><b>Consistent Colors:</b> Use school colors or professional palette</li>
            <li><b>Clear Hierarchy:</b> Most important info top-left</li>
            <li><b>White Space:</b> Don't overcrowd - leave breathing room</li>
            <li><b>Labels:</b> Every chart/element clearly labeled</li>
            <li><b>Mobile Test:</b> Should be readable on tablets</li>
            <li><b>Print Preview:</b> Check how it prints</li>
        </ol>
    </div>
</div>

<h3>Project Work Session Plan (2 Hours)</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 10px; text-align: left;">Time</th>
            <th style="padding: 10px; text-align: left;">Phase</th>
            <th style="padding: 10px; text-align: left;">Tasks</th>
            <th style="padding: 10px; text-align: left;">Deliverable</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">0-30 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Setup & Structure</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Create sheets, name ranges, basic data</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Organized workbook</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">30-60 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Data & Formulas</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Enter student data, create calculations</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Working grade calculations</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">60-90 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Lookup & Analysis</td>
            <td style="padding: 8px; border: 1px solid #ddd;">VLOOKUP system, pivot tables</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Analysis capabilities</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">90-120 min</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Dashboard & Polish</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Create dashboard, format, test</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Complete system</td>
        </tr>
    </table>
    
    <h4>🎯 Testing Your System</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Test these scenarios:</b></p>
        <ol>
            <li>Change a student's homework score → Does final grade update?</li>
            <li>Use VLOOKUP to find a student → Does all info appear correctly?</li>
            <li>Filter pivot tables with slicers → Do they work correctly?</li>
            <li>Enter invalid data → Does validation catch it?</li>
            <li>Add a new student → Do formulas still work?</li>
            <li>Print dashboard → Does it look professional?</li>
        </ol>
    </div>
</div>

<h3>Submission Requirements</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>File Name:</b> LastName_FirstName_GradeTracker.xlsx
    
    <h4>📤 Submission Checklist:</h4>
    <ul>
        <li>□ 7 worksheets with correct names and purposes</li>
        <li>□ 30+ student records with complete information</li>
        <li>□ Automatic grade calculations using formulas</li>
        <li>□ Working VLOOKUP student search system</li>
        <li>□ Data validation on all input cells</li>
        <li>□ 3+ pivot tables with different analyses</li>
        <li>□ 3+ professional charts visualizing data</li>
        <li>□ Interactive dashboard with slicers/timelines</li>
        <li>□ Professional formatting throughout</li>
        <li>□ All formulas working correctly</li>
        <li>□ Error handling (IFERROR) where appropriate</li>
        <li>□ Workbook is fully functional and tested</li>
    </ul>
    
    <h4>🎯 Grading Rubric:</h4>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Category</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Excellent (90-100%)</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Good (75-89%)</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Needs Work (<75%)</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Technical Skills</td>
            <td style="padding: 8px; border: 1px solid #ddd;">All required features implemented perfectly</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Most features present, some minor issues</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Missing key features or significant errors</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Functionality</td>
            <td style="padding: 8px; border: 1px solid #ddd;">All systems work flawlessly, no errors</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Most functions work, some bugs present</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Many broken features or calculations</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Professionalism</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Looks like commercial product, excellent UX</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Functional but could use polish</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Appears amateurish, poor user experience</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Creativity</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Innovative features beyond requirements</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Meets all requirements adequately</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Bare minimum, lacks creative touches</td>
        </tr>
    </table>
</div>

<h3>Module 3 Skills Demonstrated</h3>
<div style="background-color: #fff3cd; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #4CAF50;">📝</div>
            <div><b>Formulas & Functions</b></div>
        </div>
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #2196F3;">🔍</div>
            <div><b>VLOOKUP & Lookups</b></div>
        </div>
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #FF9800;">📊</div>
            <div><b>Pivot Tables</b></div>
        </div>
        
        <div style="background: white; padding: 10px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #9C27B0;">📈</div>
            <div><b>Charts & Dashboards</b></div>
        </div>
    </div>
    
    <div style="background: #E8F5E8; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>🎓 Module 3 Learning Outcomes:</h5>
        <p>By completing this project, you demonstrate mastery of:</p>
        <ol>
            <li>Creating complex formulas for real-world calculations</li>
            <li>Building lookup systems to retrieve information efficiently</li>
            <li>Analyzing large datasets with pivot tables</li>
            <li>Designing professional dashboards for decision-making</li>
            <li>Implementing data validation for error prevention</li>
            <li>Creating interactive, user-friendly Excel applications</li>
            <li>Solving business problems with spreadsheet solutions</li>
        </ol>
    </div>
</div>

<h3>Next Steps After Module 3</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📚 Module 4 & 5 Preview: PowerPoint & The Web</h4>
    
    <p><b>Congratulations on completing Module 3! 🎉</b></p>
    
    <p><b>What's Next:</b></p>
    <ul>
        <li><b>Week 7:</b> PowerPoint Basics & Web Technologies
            <ul>
                <li>Day 1: Professional Presentations</li>
                <li>Day 2: Animations & Multimedia</li>
                <li>Day 3: Internet Fundamentals</li>
                <li>Day 4: Professional Email Communication</li>
            </ul>
        </li>
        <li><b>Week 8:</b> Security, Logic & Final Exam
            <ul>
                <li>Day 1: Software Development Logic</li>
                <li>Day 2: Cybersecurity & Digital Citizenship</li>
                <li>Day 3: Troubleshooting & Maintenance</li>
                <li>Day 4: Final Presentations & Certification</li>
            </ul>
        </li>
    </ul>
    
    <p><b>Final Course Project:</b> Present your Technology Report (from Word) as a PowerPoint presentation</p>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px; text-align: center;">
        <p><b>🎯 Excel Skills in the Real World:</b></p>
        <p>These Excel skills are used by:</p>
        <ul style="display: inline-block; text-align: left;">
            <li>Financial Analysts (budgets, forecasts)</li>
            <li>Project Managers (tracking, reporting)</li>
            <li>Teachers (grade books, attendance)</li>
            <li>Small Business Owners (inventory, sales)</li>
            <li>Data Analysts (cleaning, analyzing data)</li>
        </ul>
    </div>
</div>

<h3>Support During Project Work</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h5>🆘 Need Help? Resources Available:</h5>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div>
            <p><b>Excel Help Tools:</b></p>
            <ul>
                <li>F1: Excel Help (search any function)</li>
                <li>Alt+Q: Tell me what you want to do</li>
                <li>Formula Auditing: Trace precedents/dependents</li>
                <li>Evaluate Formula: Step through calculations</li>
            </ul>
        </div>
        
        <div>
            <p><b>Tutor Assistance:</b></p>
            <ul>
                <li>Ask specific questions</li>
                <li>Request formula review</li>
                <li>Get design feedback</li>
                <li>Troubleshoot errors</li>
            </ul>
        </div>
    </div>
    
    <div style="background: #FFF3E0; padding: 10px; margin-top: 10px; border-radius: 5px; text-align: center;">
        <p><b>Remember:</b> This project is your opportunity to shine! Show everything you've learned.</p>
        <p><i>"The Excel skills you've learned here will save you hours every week in any data-related job. This isn't just a grade - it's a career skill!"</i></p>
    </div>
</div>
`
            },

            "7-1": {
                icon: "fa-tv",
                title: "PowerPoint Basics & Slide Master",
                html: `<h1>Week 7, Day 1: PowerPoint Basics & Slide Master</h1>
<p>Today we transition from data analysis to visual storytelling. Learn to create professional presentations that communicate ideas effectively and consistently.</p>

<div class="analogy-box">
    <b>Analogy: The Movie Director's Toolkit 🎬</b><br/>
    
    Presentation: The entire movie<br/>
    Slides: Individual scenes<br/>
    Slide Master: Director's style guide<br/>
    Content: Script and actors<br/>
    Design: Cinematography and lighting<br/>
    Animations: Special effects<br/>
    Audience: Movie viewers
</div>

<h3>PowerPoint Interface Tour</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 PowerPoint Workspace Components</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Area</th>
            <th style="padding: 10px; text-align: left;">Purpose</th>
            <th style="padding: 10px; text-align: left;">Key Features</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Slide Pane</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Main editing area</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Where you design individual slides</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Thumbnail Pane</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Slide navigation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Miniature views of all slides</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Notes Pane</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Speaker notes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Private notes for presenter</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Ribbon</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Tools & commands</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Tabs: Home, Insert, Design, etc.</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Status Bar</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Information & views</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Slide number, theme, zoom</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Quick Access Toolbar</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Frequent actions</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Save, Undo, Redo (customizable)</td>
        </tr>
    </table>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🎯 PowerPoint vs. Word Mindset Shift:</h5>
        <p><b>Word:</b> "How can I say this completely?" (Detailed, comprehensive)</p>
        <p><b>PowerPoint:</b> "How can I show this quickly?" (Visual, concise)</p>
        <p><b>Rule of Thumb:</b> If you're reading paragraphs on a slide, you're doing it wrong!</p>
    </div>
</div>

<h3>Slide Types & Layouts</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>1. Title Slide</h5>
            <p><b>Purpose:</b> First impression</p>
            <p><b>Content:</b> Presentation title, subtitle, presenter, date</p>
            <p><b>Design Tip:</b> Most visually striking slide</p>
            <p><b>Example:</b> Company logo, event name</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>2. Content Slides</h5>
            <p><b>Purpose:</b> Main information delivery</p>
            <p><b>Layouts:</b> Title and Content, Two Content, Comparison</p>
            <p><b>Design Tip:</b> 6x6 rule: Max 6 lines, 6 words per line</p>
            <p><b>Example:</b> Bullet points, images, charts</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>3. Special Purpose Slides</h5>
            <p><b>Purpose:</b> Specific functions</p>
            <p><b>Types:</b> Section Header, Blank, Content with Caption</p>
            <p><b>Design Tip:</b> Use to break up content flow</p>
            <p><b>Example:</b> Agenda, quotes, questions</p>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5>🎯 The 10-20-30 Rule (Guy Kawasaki):</h5>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; text-align: center;">
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 36px; color: #4CAF50;">10</div>
                <div><b>Slides Maximum</b></div>
                <p>Keep it concise</p>
            </div>
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 36px; color: #2196F3;">20</div>
                <div><b>Minutes Maximum</b></div>
                <p>Respect audience time</p>
            </div>
            <div>
                <div style="font-size: 36px; color: #FF9800;">30</div>
                <div><b>Point Font Minimum</b></div>
                <p>Ensure readability</p>
            </div>
        </div>
    </div>
</div>

<h3>Slide Master - The Secret to Consistency</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Understanding Slide Master Hierarchy</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <p><b>Slide Master View:</b> View → Slide Master</p>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 10px; text-align: left;">Level</th>
                <th style="padding: 10px; text-align: left;">Controls</th>
                <th style="padding: 10px; text-align: left;">When to Edit</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Slide Master (Top)</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Global changes</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Change ALL slides at once</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Layout Masters</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Specific layouts</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Change one layout type</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Individual Slides</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Single slide only</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Exceptions to the rule</td>
            </tr>
        </table>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 What Slide Master Controls:</h5>
            <ul>
                <li><b>Fonts:</b> Typeface, size, color for all text</li>
                <li><b>Colors:</b> Theme colors throughout presentation</li>
                <li><b>Background:</b> Images, gradients, patterns</li>
                <li><b>Placeholders:</b> Position of title, content, footer</li>
                <li><b>Logos:</b> Company logo on every slide</li>
                <li><b>Footers:</b> Page numbers, dates, copyright</li>
                <li><b>Bullets:</b> Style of bullet points</li>
            </ul>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 Slide Master Benefits:</h5>
            <ul>
                <li><b>Consistency:</b> Professional, polished look</li>
                <li><b>Efficiency:</b> Change once, update everywhere</li>
                <li><b>Branding:</b> Enforce corporate identity</li>
                <li><b>Quality:</b> Eliminates manual formatting errors</li>
                <li><b>Reusability:</b> Save as template for future use</li>
                <li><b>Collaboration:</b> Team uses same standards</li>
            </ul>
        </div>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Create a Corporate Template</h4>
    <ol>
        <li><b>Start New Presentation:</b> Blank presentation</li>
        <li><b>Enter Slide Master:</b> View → Slide Master</li>
        <li><b>Customize Slide Master (Top Slide):</b>
            <ul>
                <li>Background: Solid color or subtle gradient</li>
                <li>Fonts: Change to professional font (Calibri, Arial)</li>
                <li>Colors: Create custom color theme</li>
                <li>Logo: Insert company logo in corner</li>
                <li>Footer: Add "[Company Name] Confidential"</li>
            </ul>
        </li>
        <li><b>Customize Layouts:</b>
            <ul>
                <li>Title Slide: Different background, centered logo</li>
                <li>Title and Content: Adjust bullet styles</li>
                <li>Section Header: Add decorative element</li>
                <li>Two Content: Set up two columns</li>
            </ul>
        </li>
        <li><b>Save as Template:</b> File → Save As → PowerPoint Template (.potx)</li>
    </ol>
    
    <h4>🎯 Exercise 2: Build a Presentation Structure</h4>
    <ol>
        <li><b>Using your template, create 10 slides:</b>
            <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Slide 1</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Title Slide</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">"Quarterly Business Review"</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Slide 2</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Agenda</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">4 bullet points</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Slide 3</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Executive Summary</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Key highlights</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Slide 4</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Financial Performance</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Two columns: text and chart</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">Slide 10</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Q&A</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">Contact information</td>
                </tr>
            </table>
        </li>
        <li><b>Practice Slide Management:</b>
            <ul>
                <li>Duplicate slides</li>
                <li>Rearrange slides (drag in thumbnail pane)</li>
                <li>Hide slides (right-click → Hide Slide)</li>
                <li>Add sections (right-click between slides → Add Section)</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 3: Design Principles Practice</h4>
    <ol>
        <li><b>Contrast:</b> Create slide with dark background, light text</li>
        <li><b>Alignment:</b> Use guidelines (View → Gridlines) to align elements</li>
        <li><b>Repetition:</b> Use same colors/fonts throughout</li>
        <li><b>Proximity:</b> Group related items together</li>
        <li><b>White Space:</b> Create slide with ample breathing room</li>
        <li><b>Hierarchy:</b> Make most important element largest</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Company Onboarding" Presentation Template</b>
    
    <h4>Part 1: Corporate Identity Setup (40 points)</h4>
    <p>Create a complete corporate template for "TechSolutions Inc." with:</p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div>
            <p><b>Brand Guidelines:</b></p>
            <ul>
                <li>Primary Color: #2A5CAA (Blue)</li>
                <li>Secondary Color: #FF6B35 (Orange)</li>
                <li>Font: Segoe UI (Headings), Calibri (Body)</li>
                <li>Logo: Create simple "TSI" logo using Shapes</li>
                <li>Tagline: "Innovating Tomorrow, Today"</li>
            </ul>
        </div>
        
        <div>
            <p><b>Slide Master Requirements:</b></p>
            <ul>
                <li>Custom background for each layout type</li>
                <li>Consistent header/footer on all slides</li>
                <li>Custom bullet styles (3 levels)</li>
                <li>Placeholder positions optimized for content</li>
                <li>Color theme saved as "TechSolutions"</li>
            </ul>
        </div>
    </div>
    
    <h4>Part 2: Presentation Structure (40 points)</h4>
    <p>Create a 12-slide onboarding presentation including:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Slide #</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Layout</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Content</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Design Elements</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Title Slide</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Welcome to TechSolutions</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Full-bleed image, logo</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">2</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Agenda</td>
            <td style="padding: 8px; border: 1px solid #ddd;">4-section overview</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Icon for each section</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">3-5</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Content Slides</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Company history, values, structure</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Images, SmartArt, icons</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">6-8</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Two Content</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Policies, benefits, tools</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Text left, image right</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">9-11</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Various</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Team intro, next steps, resources</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Team photos, charts</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">12</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Thank You</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Contact info, Q&A</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Clean, minimal</td>
        </tr>
    </table>
    
    <h4>Part 3: Professional Polish (20 points)</h4>
    <ul>
        <li>Consistent use of template throughout</li>
        <li>Proper alignment and spacing</li>
        <li>Appropriate use of images/icons</li>
        <li>Speaker notes on key slides</li>
        <li>Slide numbers and date in footer</li>
        <li>Save as both .pptx and .potx (template)</li>
    </ul>
    
    <h4>Challenge Task: Interactive Template</h4>
    <p>Add these advanced features:</p>
    <ul>
        <li>Custom layout for "Quote" slides with large quotation marks</li>
        <li"Data" layout optimized for charts and tables</li>
        <li>Team layout with circular photo placeholders</li>
        <li>Timeline layout using SmartArt</li>
        <li>Hidden "Backup" slides with additional information</li>
    </ul>
</div>

<h3>Common PowerPoint Mistakes & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Mistake</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Why It's Bad</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Text-heavy slides</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Audience reads instead of listens</td>
            <td style="padding: 8px; border: 1px solid #ddd;">6x6 rule: Max 6 lines, 6 words/line</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Inconsistent formatting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Looks unprofessional, distracting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use Slide Master for consistency</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Poor color contrast</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Hard to read, inaccessible</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Test contrast, use web-safe colors</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Clip art & bad images</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Looks dated, unprofessional</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use high-quality, relevant images</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">No clear structure</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Audience gets lost</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Use agenda, sections, summaries</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>👁️ Accessibility Checklist:</h5>
        <ul>
            <li><b>Font Size:</b> Minimum 24pt for body, 36pt for titles</li>
            <li><b>Color Contrast:</b> Use contrast checker tools</li>
            <li><b>Alt Text:</b> Add descriptions for all images</li>
            <li><b>Reading Order:</b> Set logical reading order</li>
            <li><b>Simple Language:</b> Avoid complex jargon</li>
            <li><b>Captions:</b> For any video/audio content</li>
        </ul>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Slide Master is Key:</b> Ensures consistency and saves time</li>
    <li><b>Less is More:</b> Slides support speech, don't replace it</li>
    <li><b>Structure Matters:</b> Clear beginning, middle, end</li>
    <li><b>Design Principles:</b> Contrast, alignment, repetition, proximity</li>
    <li><b>Audience First:</b> Design for viewers, not for yourself</li>
    <li><b>Templates Save Time:</b> Create once, use many times</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 PowerPoint Best Practices:</h3>
    <ul>
        <li><b>Plan Before Designing:</b> Storyboard on paper first</li>
        <li><b>Use Speaker Notes:</b> Put details in notes, not on slides</li>
        <li><b>Test on Projector:</b> Colors/fonts may look different</li>
        <li><b>Save Versions:</b> Keep draft, final, and template versions</li>
        <li><b>Embed Fonts:</b> File → Options → Save → Embed fonts</li>
        <li><b>Use High-Quality Images:</b> Blurry images look unprofessional</li>
        <li><b>Practice Presentation:</b> Good design + bad delivery = failure</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Animations, Transitions & Multimedia</b></p>
    <ul>
        <li>Complete the Company Onboarding Presentation</li>
        <li>Practice using Slide Master with different layouts</li>
        <li>Think about: When should slides move/animate?</li>
        <li>What multimedia elements enhance presentations?</li>
        <li>When do animations become distracting?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we bring presentations to life! But remember: animations should enhance understanding, not distract from it. Think "subtle professional" not "circus act."</i></p>
</div>
`
            },
            "7-2": {
                icon: "fa-film",
                title: "Animations, Transitions & Multimedia",
                html: `<h1>Week 7, Day 2: Animations, Transitions & Multimedia</h1>
<p>Today we learn to add movement and media to presentations - the art of enhancing communication without becoming distracting. Master the balance between engagement and professionalism.</p>

<div class="analogy-box">
    <b>Analogy: The Symphony Orchestra 🎻</b><br/>
    
    Presentation: Entire musical piece<br/>
    Slides: Movements or sections<br/>
    Transitions: Pauses between movements<br/>
    Animations: Individual instrument entrances<br/>
    Timing: Conductor's baton keeping rhythm<br/>
    Multimedia: Special instruments (harp, percussion)<br/>
    Audience: Concert attendees experiencing the performance
</div>

<h3>Transitions: Moving Between Slides</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Transition Types & Best Uses</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Category</th>
            <th style="padding: 10px; text-align: left;">Best For</th>
            <th style="padding: 10px; text-align: left;">Examples</th>
            <th style="padding: 10px; text-align: left;">Avoid When</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Subtle</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Professional presentations</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Fade, Push, Wipe</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Never - always safe!</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Exciting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Creative/engaging topics</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Cube, Gallery, Pan</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Formal business settings</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Dynamic Content</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Showing connections</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Morph (Office 365)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Simple content changes</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">None</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Fast-paced, technical</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Cut (instant change)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Long, narrative presentations</td>
        </tr>
    </table>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 Transition Timing Guidelines:</h5>
            <p><b>Speed Settings:</b></p>
            <ul>
                <li><b>Slow (2.00s):</b> Dramatic effect, important topic shifts</li>
                <li><b>Medium (1.00s):</b> Standard for most presentations</li>
                <li><b>Fast (0.50s):</b> Quick transitions, data-heavy decks</li>
                <li><b>Very Fast (0.25s):</b> Rapid-fire, technical presentations</li>
            </ul>
            <p><b>Rule:</b> Slower for emotional impact, faster for information density</p>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 The Morph Transition (Office 365):</h5>
            <p><b>What it does:</b> Smoothly animates objects between slides</p>
            <p><b>Requirements:</b> Office 365, similar objects on both slides</p>
            <p><b>Great for:</b></p>
            <ul>
                <li>Zooming in on details</li>
                <li>Moving objects around</li>
                <li>Changing object sizes</li>
                <li>Creating "Ken Burns" effects</li>
            </ul>
        </div>
    </div>
</div>

<h3>Animations: Movement Within Slides</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Animation Categories & Purposes</h4>
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #4CAF50;">🎯</div>
            <h5>Entrance</h5>
            <p><b>Purpose:</b> Bring elements in</p>
            <p><b>Examples:</b> Fade, Fly In, Zoom</p>
            <p><b>Use:</b> Introducing new points</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #2196F3;">💫</div>
            <h5>Emphasis</h5>
            <p><b>Purpose:</b> Highlight existing</p>
            <p><b>Examples:</b> Pulse, Spin, Grow/Shrink</p>
            <p><b>Use:</b> Drawing attention</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #FF9800;">🚪</div>
            <h5>Exit</h5>
            <p><b>Purpose:</b> Remove elements</p>
            <p><b>Examples:</b> Fade Out, Fly Out</p>
            <p><b>Use:</b> Cleaning up old points</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
            <div style="font-size: 24px; color: #9C27B0;">🔄</div>
            <h5>Motion Paths</h5>
            <p><b>Purpose:</b> Custom movement</p>
            <p><b>Examples:</b> Lines, curves, shapes</p>
            <p><b>Use:</b> Showing processes, flow</p>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5>Animation Timing & Triggers</h5>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>Start Options:</b></p>
                <ul>
                    <li><b>On Click:</b> Manual control (presenter clicks)</li>
                    <li><b>With Previous:</b> Starts with prior animation</li>
                    <li><b>After Previous:</b> Starts after prior finishes</li>
                    <li><b>Duration:</b> How long animation takes (0.5-5s typical)</li>
                    <li><b>Delay:</b> Wait time before starting</li>
                </ul>
            </div>
            
            <div>
                <p><b>Advanced Controls:</b></p>
                <ul>
                    <li><b>Animation Pane:</b> View all animations (Alt+F10)</li>
                    <li><b>Effect Options:</b> Direction, smoothness</li>
                    <li><b>Timing Group:</b> Fine-tune speed and triggers</li>
                    <li><b>Reorder:</b> Change animation sequence</li>
                    <li><b>Remove:</b> Clear unwanted animations</li>
                </ul>
            </div>
        </div>
        
        <div style="background: #FFF3CD; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <p><b>🎯 The Animation Golden Rule:</b> "Use animations to reveal information in sync with your speech, not to decorate slides."</p>
            <p>Animations should have a purpose: control information flow, emphasize points, or explain processes.</p>
        </div>
    </div>
</div>

<h3>Multimedia Integration</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Adding Audio & Video Effectively</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>🎵 Audio Integration</h5>
            <p><b>When to Use Audio:</b></p>
            <ul>
                <li>Background music for title/ending slides</li>
                <li>Sound effects for emphasis (sparingly!)</li>
                <li>Voiceover narration for self-running presentations</li>
                <li>Interview clips or testimonials</li>
            </ul>
            
            <p><b>Audio Settings:</b></p>
            <ul>
                <li><b>Playback Options:</b> Play across slides, loop, hide icon</li>
                <li><b>Volume:</b> Adjust for room size</li>
                <li><b>Format:</b> MP3 recommended (small, compatible)</li>
                <li><b>Trigger:</b> On click or automatically</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>🎬 Video Integration</h5>
            <p><b>When to Use Video:</b></p>
            <ul>
                <li>Demonstrations or tutorials</li>
                <li>Testimonials or interviews</li>
                <li>Product demonstrations</li>
                <li>Historical or news footage</li>
            </ul>
            
            <p><b>Video Best Practices:</b></p>
            <ul>
                <li><b>Format:</b> MP4 recommended (H.264 codec)</li>
                <li><b>Length:</b> 30-90 seconds maximum per clip</li>
                <li><b>Quality:</b> HD (720p or 1080p)</li>
                <li><b>Embed vs. Link:</b> Embed for portability</li>
                <li><b>Poster Frame:</b> Custom thumbnail image</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>Online Media & Screen Recording</h5>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>Insert Online Video:</b></p>
                <ul>
                    <li>YouTube, Vimeo, Stream links</li>
                    <li>Requires internet connection during presentation</li>
                    <li>Can set start/end times</li>
                    <li>Embed code option for more control</li>
                </ul>
            </div>
            
            <div>
                <p><b>Screen Recording:</b></p>
                <ul>
                    <li>Insert → Screen Recording</li>
                    <li>Record software demos</li>
                    <li>Select area, include audio</li>
                    <li>Automatically inserts into slide</li>
                    <li>Edit with Video Tools</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Professional Animation Sequence</h4>
    <ol>
        <li><b>Create a "Company Growth" slide with:</b>
            <ul>
                <li>Title: "5-Year Growth Timeline"</li>
                <li>5 milestones with years (2019-2023)</li>
                <li>Connecting line or arrow showing progression</li>
                <li>Icon for each milestone</li>
            </ul>
        </li>
        <li><b>Animate to reveal timeline:</b>
            <ul>
                <li>Line draws from left to right (Wipe animation, From Left)</li>
                <li>Each milestone fades in as you reach it in speech</li>
                <li>Icons pulse when discussed</li>
                <li>Previous milestones dim when new ones appear</li>
            </ul>
        </li>
        <li><b>Use Animation Pane to:</b>
            <ul>
                <li>Set sequence: Line → 2019 → 2020 → 2021 → 2022 → 2023</li>
                <li>Adjust timing: 0.5s between each</li>
                <li>Add sound: Subtle "whoosh" for line draw</li>
                <li>Test with Slide Show (F5)</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Multimedia Integration</h4>
    <ol>
        <li><b>Add Video:</b>
            <ul>
                <li>Insert → Video → Online Video</li>
                <li>Use YouTube URL (find short educational video)</li>
                <li>Set to start automatically when slide appears</li>
                <li>Add poster frame (custom image before play)</li>
                <li>Format video with border and shadow</li>
            </ul>
        </li>
        <li><b>Add Audio:</b>
            <ul>
                <li>Insert → Audio → Record Audio</li>
                <li>Record 10-second voiceover: "This video demonstrates..."</li>
                <li>Set to play automatically</li>
                <li>Hide audio icon during slideshow</li>
                <li>Test volume levels</li>
            </ul>
        </li>
        <li><b>Screen Recording Practice:</b>
            <ul>
                <li>Insert → Screen Recording</li>
                <li>Record yourself opening a website</li>
                <li>Keep it short (5-10 seconds)</li>
                <li>Insert into slide with caption</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 3: Morph Transition Magic</h4>
    <ol>
        <li><b>Create two slides with same objects:</b>
            <ul>
                <li>Slide 1: Large world map with "Global" title</li>
                <li>Slide 2: Zoomed-in region with "Local Impact" title</li>
                <li>Use same map image on both slides</li>
                <li>Keep other elements in same positions</li>
            </ul>
        </li>
        <li><b>Apply Morph transition:</b>
            <ul>
                <li>Select Slide 2 → Transitions → Morph</li>
                <li>Watch smooth zoom effect</li>
                <li>Experiment with different object arrangements</li>
            </ul>
        </li>
        <li><b>Create 3-slide Morph sequence:</b>
            <ul>
                <li>Slide 1: Problem statement</li>
                <li>Slide 2: Solution overview</li>
                <li>Slide 3: Detailed solution</li>
                <li>Use Morph between all slides</li>
                <li>Notice how objects move/transform smoothly</li>
            </ul>
        </li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create an "Interactive Product Launch" Presentation</b>
    
    <h4>Part 1: Storyboard & Structure (30 points)</h4>
    <p>Plan a 15-slide presentation for "SmartHome Assistant" launch:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Section</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Slides</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Content</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Media/Animation</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">The Problem</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1-3</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Current home automation pain points</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Animated problem icons</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">The Solution</td>
            <td style="padding: 8px; border: 1px solid #ddd;">4-7</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Product features and benefits</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Product video, morph transitions</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">How It Works</td>
            <td style="padding: 8px; border: 1px solid #ddd;">8-10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Technology and user experience</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Animated diagrams, screen recordings</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Market Fit</td>
            <td style="padding: 8px; border: 1px solid #ddd;">11-12</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Target audience, competition</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Animated charts, comparison tables</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Call to Action</td>
            <td style="padding: 8px; border: 1px solid #ddd;">13-15</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Pricing, availability, next steps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">QR code, contact animations</td>
        </tr>
    </table>
    
    <h4>Part 2: Animation Requirements (40 points)</h4>
    <p>Implement these animation techniques:</p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div>
            <p><b>Entrance Animations:</b></p>
            <ul>
                <li>Title fly-in from top</li>
                <li>Bullet points fade in one by one</li>
                <li>Images zoom in gently</li>
                <li>Charts build piece by piece</li>
                <li>Use "With Previous" for synchronized reveals</li>
            </ul>
        </div>
        
        <div>
            <p><b>Emphasis Animations:</b></p>
            <ul>
                <li>Key features pulse when mentioned</li>
                <li>Price points grow slightly</li>
                <li"Comparison items highlight with color change</li>
                <li>Testimonials fade in with gentle emphasis</li>
                <li>Use "On Click" for presenter control</li>
            </ul>
        </div>
    </div>
    
    <p><b>Motion Path Animation:</b> Create one slide where product icon moves through a house diagram showing connectivity</p>
    
    <h4>Part 3: Multimedia Integration (30 points)</h4>
    <ul>
        <li><b>Video:</b> 30-second product demonstration video (can use stock video)</li>
        <li><b>Audio:</b> Background music on title and closing slides</li>
        <li><b>Screen Recording:</b> Short demo of mobile app interface</li>
        <li><b>Online Content:</b> Embedded customer testimonial video</li>
        <li><b>Transition Variety:</b> Use at least 3 different transition types appropriately</li>
        <li><b>Morph Transition:</b> Use for at least one section change</li>
    </ul>
    
    <h4>Challenge Task: Interactive Navigation</h4>
    <p>Add these advanced features:</p>
    <ul>
        <li>Interactive menu slide with clickable sections</li>
        <li>Hyperlinks between related slides</li>
        <li"Zoom feature (Insert → Zoom → Slide Zoom)</li>
        <li>Custom show paths for different audiences</li>
        <li>Presenter view with speaker notes and timer</li>
        <li>Rehearse timings for automatic advancement</li>
    </ul>
</div>

<h3>Common Animation & Media Mistakes</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Mistake</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Why It's Bad</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Professional Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Animation overload</td>
            <td style="padding: 8px; border: 1px solid #ddd">Distracts from content, looks amateurish</td>
            <td style="padding: 8px; border: 1px solid #ddd">Use 1-2 animation types consistently</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Slow animations</td>
            <td style="padding: 8px; border: 1px solid #ddd">Wastes audience time, breaks flow</td>
            <td style="padding: 8px; border: 1px solid #ddd">Keep durations under 1 second</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">Sound effects</td>
            <td style="padding: 8px; border: 1px solid #ddd">Annoying, unprofessional (except rare cases)</td>
            <td style="padding: 8px; border: 1px solid #ddd">Use only for specific emphasis</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd">Broken media links</td>
            <td style="padding: 8px; border: 1px solid #ddd">Presentation fails during delivery</td>
            <td style="padding: 8px; border: 1px solid #ddd">Embed media, test on presentation computer</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">Autoplay without control</td>
            <td style="padding: 8px; border: 1px solid #ddd">Presenter loses timing control</td>
            <td style="padding: 8px; border: 1px solid #ddd">Set videos to play On Click</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🎬 Professional Presenter Checklist:</h5>
        <ul>
            <li><b>Test Everything:</b> Run full presentation on actual equipment</li>
            <li><b>Backup Plan:</b> Have PDF version in case of tech failure</li>
            <li><b>Remote Clicker:</b> Practice with presentation remote</li>
            <li><b>Speaker Notes:</b> Print notes pages as backup</li>
            <li><b>Timing:</b> Rehearse with animations to get pacing right</li>
            <li><b>Eye Contact:</b> Don't watch your own animations - watch audience</li>
        </ul>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Purpose Before Polish:</b> Animations should enhance understanding</li>
    <li><b>Consistency is Key:</b> Use same animation styles throughout</li>
    <li><b>Timing Matters:</b> Animations should match speech pace</li>
    <li><b>Media Enhances:</b> Videos/images should illustrate, not replace</li>
    <li><b>Test Thoroughly:</b> Always test on presentation equipment</li>
    <li><b>Less is More:</b> Subtle animations beat flashy ones professionally</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Animation & Media Best Practices:</h3>
    <ul>
        <li><b>Storyboard Animations:</b> Plan what should appear when</li>
        <li><b>Use Animation Pane:</b> Manage complex sequences visually</li>
        <li><b>Standardize Duration:</b> Same animation type = same speed</li>
        <li><b>Compress Media:</b> File → Info → Compress Media</li>
        <li><b>Caption Videos:</b> Add subtitles for accessibility</li>
        <li><b>Embed Fonts:</b> Ensure custom fonts display correctly</li>
        <li><b>Package Presentation:</b> File → Export → Package Presentation for CD</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: The Internet & Web Technologies</b></p>
    <ul>
        <li>Complete the Interactive Product Launch presentation</li>
        <li>Practice presenting with animations and transitions</li>
        <li>Think about: How does information travel on the internet?</li>
        <li>What's the difference between a browser and the internet?</li>
        <li>How do websites actually work?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we demystify the "magic" of the internet. Understanding how the web works makes you a smarter user and helps with troubleshooting. Plus, it's just fascinating!</i></p>
</div>
`
            },
            "7-3": {
                icon: "fa-globe",
                title: "The Internet & Web Technologies",
                html: `<h1>Week 7, Day 3: The Internet & Web Technologies</h1>
<p>Today we demystify how the internet actually works. From your click to a website loading, understand the technology that connects the world.</p>

<div class="analogy-box">
    <b>Analogy: The Global Postal System 📮</b><br/>
    
    Internet: The entire worldwide postal network<br/>
    Data Packets: Letters and packages being sent<br/>
    IP Addresses: Street addresses for homes/businesses<br/>
    DNS: Phonebook looking up addresses from names<br/>
    Routers: Postal sorting facilities<br/>
    Browsers: Mailroom where you read your mail<br/>
    Websites: The actual letters and packages (content)
</div>

<h3>How the Internet Works: The Big Picture</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 The Journey of a Web Request</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <p><b>What happens when you type "google.com" and press Enter?</b></p>
        
        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; text-align: center; margin: 20px 0;">
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 24px; color: #4CAF50;">1️⃣</div>
                <div><b>Your Computer</b></div>
                <p>Type URL</p>
            </div>
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 24px; color: #2196F3;">2️⃣</div>
                <div><b>DNS Lookup</b></div>
                <p>google.com → 142.250.185.78</p>
            </div>
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 24px; color: #FF9800;">3️⃣</div>
                <div><b>Request Sent</b></div>
                <p>Through routers</p>
            </div>
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 24px; color: #9C27B0;">4️⃣</div>
                <div><b>Google Server</b></div>
                <p>Processes request</p>
            </div>
            <div>
                <div style="font-size: 24px; color: #673AB7;">5️⃣</div>
                <div><b>Response Returns</b></div>
                <p>Website loads</p>
            </div>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 Key Internet Concepts:</h5>
            <p><b>Client-Server Model:</b></p>
            <ul>
                <li><b>Client:</b> Your computer/phone (asks for data)</li>
                <li><b>Server:</b> Remote computer (provides data)</li>
                <li><b>Request:</b> "Please send me google.com"</li>
                <li><b>Response:</b> "Here's the Google homepage"</li>
            </ul>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 The Internet vs. The Web:</h5>
            <p><b>Internet:</b> Physical infrastructure (cables, routers, servers)</p>
            <p><b>World Wide Web:</b> Information system on the internet</p>
            <p><b>Analogy:</b> Internet = roads, Web = shops/buildings on those roads</p>
            <p><b>Other services on internet:</b> Email, file transfer, video calls</p>
        </div>
    </div>
</div>

<h3>Core Internet Technologies</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>IP Addresses: Internet "Phone Numbers"</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <h5>IPv4 (Old System)</h5>
                <ul>
                    <li>Format: 192.168.1.1</li>
                    <li>4 numbers, 0-255 each</li>
                    <li>Total: 4.3 billion addresses</li>
                    <li>Problem: Running out!</li>
                    <li>Example: Your home router: 192.168.0.1</li>
                </ul>
            </div>
            
            <div>
                <h5>IPv6 (New System)</h5>
                <ul>
                    <li>Format: 2001:0db8:85a3:0000:0000:8a2e:0370:7334</li>
                    <li>8 groups of 4 hex digits</li>
                    <li>Total: 340 undecillion addresses</li>
                    <li>Solution: Enough for every atom on Earth!</li>
                    <li>Example: Future-proof addressing</li>
                </ul>
            </div>
        </div>
        
        <div style="background: #FFF3CD; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <p><b>Special IP Addresses:</b></p>
            <ul>
                <li><b>127.0.0.1:</b> "localhost" - your own computer</li>
                <li><b>192.168.x.x:</b> Private home/office networks</li>
                <li><b>8.8.8.8:</b> Google's public DNS server</li>
                <li><b>0.0.0.0:</b> Default route (internet gateway)</li>
            </ul>
        </div>
    </div>

    <h4>DNS: The Internet's Phonebook</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Domain Name System: Translates names to numbers</b></p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>Without DNS:</b></p>
                <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
You: "I want Google"
Computer: "What's the address?"
You: "Umm... 142.250.185.78?"
Computer: "Okay, connecting..."
                </pre>
            </div>
            
            <div>
                <p><b>With DNS:</b></p>
                <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
You: "I want google.com"
Computer: "DNS, what's google.com's IP?"
DNS: "It's 142.250.185.78"
Computer: "Thanks! Connecting..."
                </pre>
            </div>
        </div>
        
        <p><b>DNS Hierarchy:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Level</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Managed By</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Root</td>
                <td style="padding: 8px; border: 1px solid #ddd;">.</td>
                <td style="padding: 8px; border: 1px solid #ddd;">ICANN (13 root servers worldwide)</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Top-Level</td>
                <td style="padding: 8px; border: 1px solid #ddd;">.com, .org, .edu</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Registry operators</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Second-Level</td>
                <td style="padding: 8px; border: 1px solid #ddd;">google, microsoft</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Domain owners</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Subdomain</td>
                <td style="padding: 8px; border: 1px solid #ddd;">mail.google, docs.google</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Domain owners</td>
            </tr>
        </table>
    </div>

    <h4>HTTP/HTTPS: The Language of the Web</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div style="border-right: 1px solid #ddd;">
                <h5>🔓 HTTP (Hypertext Transfer Protocol)</h5>
                <ul>
                    <li>Unencrypted communication</li>
                    <li>Like sending a postcard - anyone can read it</li>
                    <li>Faster but insecure</li>
                    <li>URL: http://example.com</li>
                    <li><b>Never use for:</b> Logins, payments, personal data</li>
                </ul>
            </div>
            
            <div>
                <h5>🔐 HTTPS (HTTP Secure)</h5>
                <ul>
                    <li>Encrypted communication</li>
                    <li>Like sending a sealed letter - only recipient can read</li>
                    <li>Slower but secure</li>
                    <li>URL: https://example.com</li>
                    <li><b>Look for:</b> Padlock icon in address bar</li>
                </ul>
            </div>
        </div>
        
        <div style="background: #E8F5E8; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <p><b>How HTTPS Works (Simplified):</b></p>
            <ol>
                <li>Your browser asks for secure connection</li>
                <li>Website sends SSL certificate (like digital ID)</li>
                <li>Browser verifies certificate is valid</li>
                <li>Encrypted connection established</li>
                <li>All data encrypted before sending</li>
            </ol>
        </div>
    </div>
</div>

<h3>Web Browsers & How They Work</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Browser Components & Functions</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>1. Rendering Engine</h5>
            <p><b>Purpose:</b> Converts code to visual page</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>Chrome: Blink</li>
                <li>Firefox: Gecko</li>
                <li>Safari: WebKit</li>
                <li>Edge: Blink (formerly EdgeHTML)</li>
            </ul>
            <p><b>Process:</b> HTML → DOM → Render Tree → Paint</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>2. JavaScript Engine</h5>
            <p><b>Purpose:</b> Executes interactive code</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>Chrome: V8</li>
                <li>Firefox: SpiderMonkey</li>
                <li>Safari: JavaScriptCore</li>
                <li>Edge: V8</li>
            </ul>
            <p><b>Does:</b> Animations, form validation, dynamic content</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>3. Browser Features</h5>
            <p><b>User Interface:</b> Address bar, tabs, buttons</p>
            <p><b>Storage:</b> Cookies, cache, localStorage</p>
            <p><b>Security:</b> Sandboxing, pop-up blocking</p>
            <p><b>Networking:</b> HTTP requests, caching</p>
            <p><b>Extensions:</b> Add-on functionality</p>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>What Happens When Browser Loads a Page</h5>
        <ol>
            <li><b>Parse URL:</b> Extract protocol, domain, path</li>
            <li><b>DNS Lookup:</b> Convert domain to IP address</li>
            <li><b>TCP Handshake:</b> Establish connection with server</li>
            <li><b>Send HTTP Request:</b> "GET /index.html"</li>
            <li><b>Receive Response:</b> HTML, CSS, JavaScript files</li>
            <li><b>Parse HTML:</b> Build Document Object Model (DOM)</li>
            <li><b>Load Resources:</b> CSS, images, scripts</li>
            <li><b>Render Page:</b> Layout, paint, composite</li>
            <li><b>Execute JavaScript:</b> Run interactive code</li>
        </ol>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Network Diagnostics with Command Prompt</h4>
    <ol>
        <li><b>Open Command Prompt:</b> Win+R → cmd</li>
        <li><b>Check Your IP:</b>
            <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
ipconfig
Look for: IPv4 Address (your computer)
          Default Gateway (your router)
          DNS Servers
            </pre>
        </li>
        <li><b>Test Connectivity:</b>
            <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
ping google.com
See: Response time (ms), packet loss
            </pre>
        </li>
        <li><b>Trace Route:</b>
            <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
tracert google.com
See: All "hops" (routers) between you and Google
            </pre>
        </li>
        <li><b>DNS Lookup:</b>
            <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
nslookup google.com
See: IP addresses for google.com
            </pre>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Browser Developer Tools Exploration</h4>
    <ol>
        <li><b>Open Chrome/Firefox:</b> Go to any website</li>
        <li><b>Open DevTools:</b> F12 or Right-click → Inspect</li>
        <li><b>Explore Tabs:</b>
            <ul>
                <li><b>Elements:</b> See HTML structure, edit live</li>
                <li><b>Console:</b> JavaScript errors and logs</li>
                <li><b>Sources:</b> All loaded files (HTML, CSS, JS)</li>
                <li><b>Network:</b> See all requests, timing, sizes</li>
                <li><b>Performance:</b> Analyze page load speed</li>
                <li><b>Application:</b> Cookies, storage, cache</li>
            </ul>
        </li>
        <li><b>Practical Tasks:</b>
            <ul>
                <li>Change text on a live website (Elements tab)</li>
                <li>Disable CSS to see raw HTML structure</li>
                <li>Block JavaScript to see how site breaks</li>
                <li>Simulate mobile device (responsive testing)</li>
                <li>Clear browser cache and reload</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 3: Security & Privacy Check</h4>
    <ol>
        <li><b>Check Website Security:</b>
            <ul>
                <li>Visit http://example.com (no padlock)</li>
                <li>Visit https://example.com (with padlock)</li>
                <li>Click padlock → View certificate</li>
                <li>Check expiration date, issuer</li>
            </ul>
        </li>
        <li><b>Browser Privacy Modes:</b>
            <ul>
                <li>Open Incognito/Private window</li>
                <li>Notice: No history, cookies, cache</li>
                <li>But: IP address still visible to websites</li>
                <li>Limitations: Not completely anonymous</li>
            </ul>
        </li>
        <li><b>Clear Browser Data:</b>
            <ul>
                <li>Settings → Privacy and Security</li>
                <li>Clear browsing data</li>
                <li>Choose: Cache, cookies, history</li>
                <li>Time range: Last hour to all time</li>
            </ul>
        </li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create an "Internet Infrastructure" Investigation Report</b>
    
    <h4>Part 1: Network Analysis (40 points)</h4>
    <p>Investigate your own network and document findings:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Investigation</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Command/Tool</th>
            <th style="padding: 8px; border: 1px solid #ddd;">What to Document</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Your Network Info</td>
            <td style="padding: 8px; border: 1px solid #ddd;">ipconfig /all</td>
            <td style="padding: 8px; border: 1px solid #ddd;">IP, Subnet, Gateway, DNS, MAC Address</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Internet Connectivity</td>
            <td style="padding: 8px; border: 1px solid #ddd;">ping, tracert</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Response times, hops to google.com</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">DNS Investigation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">nslookup</td>
            <td style="padding: 8px; border: 1px solid #ddd;">IPs for 5 popular websites</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Browser Analysis</td>
            <td style="padding: 8px; border: 1px solid #ddd;">DevTools → Network</td>
            <td style="padding: 8px; border: 1px solid #ddd;">What loads when visiting a site</td>
        </tr>
    </table>
    
    <h4>Part 2: Website Technology Analysis (40 points)</h4>
    <p>Analyze 3 different types of websites:</p>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 10px 0;">
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>1. E-commerce Site</h5>
            <p><b>Example:</b> amazon.com</p>
            <p><b>Analyze:</b></p>
            <ul>
                <li>HTTPS certificate details</li>
                <li>Number of resources loaded</li>
                <li>Third-party trackers</li>
                <li>Cookie usage</li>
                <li>Payment security indicators</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>2. News Site</h5>
            <p><b>Example:</b> bbc.com</p>
            <p><b>Analyze:</b></p>
            <ul>
                <li>Content delivery network (CDN)</li>
                <li>Ad networks used</li>
                <li>Video streaming technology</li>
                <li>Social media integration</li>
                <li>Comment system</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>3. Government Site</h5>
            <p><b>Example:</b> usa.gov</p>
            <p><b>Analyze:</b></p>
            <ul>
                <li>Accessibility features</li>
                <li>Security protocols</li>
                <li>Multilingual support</li>
                <li>Document formats offered</li>
                <li>Contact/feedback systems</li>
            </ul>
        </div>
    </div>
    
    <h4>Part 3: Security & Privacy Report (20 points)</h4>
    <p>Create recommendations based on your findings:</p>
    <ul>
        <li>Which websites have the best security practices?</li>
        <li>What tracking technologies did you discover?</li>
        <li>How could each site improve privacy?</li>
        <li>What's the difference in loading speed between sites?</li>
        <li>Which browser features protect users best?</li>
    </ul>
    
    <h4>Challenge Task: Build a Simple Web Page</h4>
    <p>Using Notepad, create a basic HTML page:</p>
    <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My First Web Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, Internet!&lt;/h1&gt;
    &lt;p&gt;This page was created manually.&lt;/p&gt;
    &lt;ul&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href="https://www.google.com"&gt;Visit Google&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
    </pre>
    <p>Save as "mypage.html" and open in browser. Then inspect with DevTools.</p>
</div>

<h3>Common Web Technology Misconceptions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Misconception</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Reality</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Truth</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">"The Internet is wireless"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Most internet travels through cables</td>
            <td style="padding: 8px; border: 1px solid #ddd">Undersea cables connect continents</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">"Incognito mode is anonymous"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Only hides from people using same device</td>
            <td style="padding: 8px; border: 1px solid #ddd">Websites, ISPs still see your activity</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">"Wi-Fi and Internet are same"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Wi-Fi is local wireless, Internet is global</td>
            <td style="padding: 8px; border: 1px solid #ddd">You can have Wi-Fi without Internet</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd">"Cloud is magic sky storage"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Cloud = Someone else's computer</td>
            <td style="padding: 8px; border: 1px solid #ddd">Data centers with thousands of servers</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">"Website is one file"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Multiple files (HTML, CSS, JS, images)</td>
            <td style="padding: 8px; border: 1px solid #ddd">Browser assembles them into page</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔧 Troubleshooting Internet Problems:</h5>
        <ol>
            <li><b>No Internet?</b> Check: Router lights, cables, restart router</li>
            <li><b>Website not loading?</b> Try: Different browser, incognito mode</li>
            <li><b>Slow speeds?</b> Check: Other devices, time of day, run speed test</li>
            <li><b>DNS issues?</b> Try: 8.8.8.8 (Google DNS) as alternate</li>
            <li><b>SSL errors?</b> Check: Date/time on computer, certificate validity</li>
            <li><b>Always:</b> Turn it off and on again (router AND modem)</li>
        </ol>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Client-Server Model:</b> Your device requests, servers respond</li>
    <li><b>DNS Translation:</b> Names (google.com) to numbers (IP addresses)</li>
    <li><b>HTTP vs HTTPS:</b> Unencrypted vs encrypted (look for padlock)</li>
    <li><b>Browser Components:</b> Rendering engine, JS engine, network stack</li>
    <li><b>IP Addresses:</b> Unique identifiers for devices on network</li>
    <li><b>Internet Infrastructure:</b> Cables, routers, servers worldwide</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Internet & Web Best Practices:</h3>
    <ul>
        <li><b>Always Use HTTPS:</b> Especially for logins, payments</li>
        <li><b>Regular Updates:</b> Keep browser and OS updated</li>
        <li><b>Strong Passwords:</b> Different for each important site</li>
        <li><b>Two-Factor Authentication:</b> Enable wherever possible</li>
        <li><b>Privacy Settings:</b> Review browser and account settings</li>
        <li><b>Clear Cache:</b> Periodically for better performance</li>
        <li><b>Extensions Carefully:</b> Only install from trusted sources</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Email Practice & Professionalism</b></p>
    <ul>
        <li>Complete the Internet Infrastructure Investigation</li>
        <li>Practice using browser developer tools</li>
        <li>Think about: What makes a professional email?</li>
        <li>What's the difference between To, CC, and BCC?</li>
        <li>How should you structure business email?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we focus on professional communication - a critical career skill. Email may seem simple, but doing it well sets you apart in any workplace.</i></p>
</div>
`
            },
            "7-4": {
                icon: "fa-envelope",
                title: "Email Practice & Professionalism",
                html: `<h1>Week 7, Day 4: Email Practice & Professionalism</h1>
<p>Today we master professional email communication - a critical career skill. Learn to write effective, appropriate emails that get results and build your professional reputation.</p>

<div class="analogy-box">
    <b>Analogy: The Professional Business Meeting 🏢</b><br/>
    
    Email: Formal meeting invitation<br/>
    Subject Line: Meeting agenda title<br/>
    Salutation: Greeting attendees<br/>
    Body: Meeting discussion points<br/>
    Attachments: Handouts or presentations<br/>
    Signature: Your business card<br/>
    CC/BCC: Inviting observers vs. private notes<br/>
    Follow-up: Meeting minutes or action items
</div>

<h3>The Anatomy of a Professional Email</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Email Components & Best Practices</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Component</th>
            <th style="padding: 10px; text-align: left;">Purpose</th>
            <th style="padding: 10px; text-align: left;">Best Practices</th>
            <th style="padding: 10px; text-align: left;">Example</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Subject Line</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Get email opened</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Specific, action-oriented, 3-7 words</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Q3 Report Review - Action Required by Friday"</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Salutation</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Professional greeting</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Match formality, use correct name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Dear Ms. Johnson," or "Hello Team,"</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Body</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Main message</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Clear, concise, scannable, one topic</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Short paragraphs, bullet points</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Closing</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Polite ending</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Professional, match salutation tone</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Best regards," "Sincerely," "Thank you,"</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Signature</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Contact info</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Complete but not overwhelming</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Name, title, phone, company, website</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Attachments</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Additional files</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Mention in body, reasonable size</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Please find attached the report..."</td>
        </tr>
    </table>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 15px; border-radius: 5px;">
        <h5>🎯 The 5-Second Rule for Professional Emails:</h5>
        <p>A recipient should understand <b>who you are, what you want, and what they need to do</b> within 5 seconds of opening your email.</p>
        <p>If they're confused after 5 seconds, your email needs work!</p>
    </div>
</div>

<h3>Email Addressing: To, CC, BCC - When to Use Each</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; text-align: center;">
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 36px; color: #4CAF50;">👤</div>
                <h5>TO:</h5>
                <p><b>Primary recipients</b></p>
                <p>People who need to act or respond</p>
                <p><i>"You're in the meeting"</i></p>
            </div>
            
            <div style="border-right: 1px solid #ddd;">
                <div style="font-size: 36px; color: #2196F3;">👥</div>
                <h5>CC:</h5>
                <p><b>Carbon Copy</b></p>
                <p>People who should be informed</p>
                <p><i>"You're observing the meeting"</i></p>
            </div>
            
            <div>
                <div style="font-size: 36px; color: #9C27B0;">🙈</div>
                <h5>BCC:</h5>
                <p><b>Blind Carbon Copy</b></p>
                <p>People who get secret copy</p>
                <p><i>"You're secretly listening"</i></p>
            </div>
        </div>
    </div>

    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h5>Real-World Scenarios & Proper Usage</h5>
        
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Scenario</th>
                <th style="padding: 8px; border: 1px solid #ddd;">TO</th>
                <th style="padding: 8px; border: 1px solid #ddd;">CC</th>
                <th style="padding: 8px; border: 1px solid #ddd;">BCC</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Project Update to Team</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Project members</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Manager</td>
                <td style="padding: 8px; border: 1px solid #ddd;">-</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Mass Newsletter</td>
                <td style="padding: 8px; border: 1px solid #ddd;">-</td>
                <td style="padding: 8px; border: 1px solid #ddd;">-</td>
                <td style="padding: 8px; border: 1px solid #ddd;">All recipients</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Client Proposal</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Client contact</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Your manager</td>
                <td style="padding: 8px; border: 1px solid #ddd;">-</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Sensitive HR Issue</td>
                <td style="padding: 8px; border: 1px solid #ddd;">HR representative</td>
                <td style="padding: 8px; border: 1px solid #ddd;">-</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Your personal email (record)</td>
            </tr>
        </table>
    </div>
    
    <div style="background: #FFF3CD; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>⚠️ Common Addressing Mistakes:</h5>
        <ul>
            <li><b>"Reply All" Disaster:</b> Sending "Thanks!" to 100 people</li>
            <li><b>CC Overload:</b> Including people who don't need to know</li>
            <li><b>BCC Deception:</b> Using BCC to secretly include someone (unethical)</li>
            <li><b>Missing Recipients:</b> Forgetting key people who need information</li>
            <li><b>Order Matters:</b> List in order of importance/ hierarchy</li>
        </ul>
    </div>
</div>

<h3>Professional Email Writing Techniques</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Tone, Structure & Clarity</h4>
    
    <div style="background: white; padding: 15px; margin: 15px 0; border-radius: 5px;">
        <h5>The Professional Email Structure</h5>
        
        <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; background: #f9f9f9;">
            <p><b>Subject:</b> Project Alpha: Meeting Rescheduled to Thursday 2 PM</p>
            <p><b>To:</b> sarah.johnson@company.com</p>
            <p><b>CC:</b> mark.smith@company.com</p>
            <p><b>Dear Sarah,</b></p>
            
            <p><b>I'm writing to inform you that our Project Alpha review meeting has been rescheduled from Tuesday to Thursday at 2 PM.</b></p>
            
            <p><b>The reason for the change is that the final budget report will now be available on Wednesday afternoon, giving us complete information for our discussion.</b></p>
            
            <p><b>Action required from you:</b></p>
            <ul>
                <li>Please confirm your availability for Thursday at 2 PM</li>
                <li>Review the attached agenda before the meeting</li>
                <li>Bring your department's progress metrics</li>
            </ul>
            
            <p><b>The meeting details remain the same:</b></p>
            <ul>
                <li><b>Date:</b> Thursday, [Date]</li>
                <li><b>Time:</b> 2:00 PM - 3:30 PM</li>
                <li><b>Location:</b> Conference Room B (or Zoom link: [link])</li>
            </ul>
            
            <p>Please let me know by end of day tomorrow if you have any conflicts.</p>
            
            <p><b>Best regards,</b><br>
            Alex Chen<br>
            Project Manager<br>
            Tech Solutions Inc.<br>
            Phone: (555) 123-4567<br>
            Email: alex.chen@techsolutions.com</p>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>✅ What This Email Does Right:</h5>
            <ul>
                <li><b>Clear subject line:</b> States purpose immediately</li>
                <li><b>Direct opening:</b> Main point in first sentence</li>
                <li><b>Reason provided:</b> Explains "why" for transparency</li>
                <li><b>Action-oriented:</b> Clear what recipient needs to do</li>
                <li><b>Scannable:</b> Bullet points for easy reading</li>
                <li><b>Complete details:</b> All necessary information included</li>
                <li><b>Professional tone:</b> Respectful but not overly formal</li>
            </ul>
        </div>
        
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>📝 Writing Tips for Different Situations:</h5>
            <p><b>To Superiors:</b> More formal, show respect, get to point quickly</p>
            <p><b>To Colleagues:</b> Collaborative tone, can be less formal</p>
            <p><b>To Clients:</b> Professional, solution-focused, value-oriented</p>
            <p><b>Bad News:</b> Empathetic, factual, offer solutions/alternatives</p>
            <p><b>Follow-ups:</b> Reference previous communication, be polite</p>
            <p><b>Thank Yous:</b> Specific, timely, mention impact</p>
        </div>
    </div>
</div>

<h3>Attachments & Technical Considerations</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 File Management Best Practices</h4>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>File Naming Conventions</h5>
            <p><b>Bad Examples:</b></p>
            <ul>
                <li>Document1.pdf</li>
                <li>Final_Final_REALFINAL.docx</li>
                <li>report_2024_new_updated_v2.xlsx</li>
            </ul>
            
            <p><b>Good Examples:</b></p>
            <ul>
                <li>Q3_Sales_Report_Chen_2024.pdf</li>
                <li>ProjectAlpha_Budget_Proposal_v1.2.docx</li>
                <li>ClientName_Contract_Signed_2024-10-15.pdf</li>
            </ul>
            
            <p><b>Format:</b> Project_Content_Author_Date.ext</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>File Size Management</h5>
            <p><b>Size Limits:</b></p>
            <ul>
                <li>Gmail: 25MB total</li>
                <li>Outlook: 20MB (varies by organization)</li>
                <li>Yahoo: 25MB</li>
            </ul>
            
            <p><b>Solutions for Large Files:</b></p>
            <ul>
                <li>Compress images before attaching</li>
                <li>Use cloud storage (Google Drive, OneDrive, Dropbox)</li>
                <li>Send links instead of attachments</li>
                <li>Split into multiple emails if necessary</li>
                <li>Use ZIP compression for multiple files</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>File Format Recommendations</h5>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Content Type</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Best Format</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Why</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Alternative</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Documents</td>
                <td style="padding: 8px; border: 1px solid #ddd;">PDF</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Universal, preserves formatting</td>
                <td style="padding: 8px; border: 1px solid #ddd;">DOCX (if editing needed)</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Spreadsheets</td>
                <td style="padding: 8px; border: 1px solid #ddd;">XLSX</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Editable, formulas work</td>
                <td style="padding: 8px; border: 1px solid #ddd;">PDF (for viewing only)</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Presentations</td>
                <td style="padding: 8px; border: 1px solid #ddd;">PPTX</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Editable, animations work</td>
                <td style="padding: 8px; border: 1px solid #ddd;">PDF (for printing)</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Images</td>
                <td style="padding: 8px; border: 1px solid #ddd;">JPG/PNG</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Universal, good compression</td>
                <td style="padding: 8px; border: 1px solid #ddd;">PDF (for multiple images)</td>
            </tr>
        </table>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Create Professional Email Signature</h4>
    <ol>
        <li><b>In your email client (Gmail/Outlook), create signature:</b>
            <ul>
                <li>Name: Your Full Name</li>
                <li>Title: IT Student / Future Professional</li>
                <li>Company: Your School or "Seeking Opportunities"</li>
                <li>Phone: (Optional) or "Available upon request"</li>
                <li>Email: Your professional email</li>
                <li>Website/LinkedIn: (Optional) if you have one</li>
            </ul>
        </li>
        <li><b>Design Considerations:</b>
            <ul>
                <li>Use simple, readable font (Arial, Calibri, 10-12pt)</li>
                <li>Limit to 4-5 lines maximum</li>
                <li>No animated GIFs or large images</li>
                <li>Consider mobile display (test on phone)</li>
                <li>Create separate signatures for formal vs. casual</li>
            </ul>
        </li>
        <li><b>Set as default:</b> Apply to new messages and replies</li>
    </ol>
    
    <h4>🎯 Exercise 2: Draft Professional Emails</h4>
    <p><b>Scenario 1: Meeting Request to Manager</b></p>
    <ol>
        <li>Subject: Request for Career Guidance Meeting</li>
        <li>To: Your imaginary manager "Ms. Rodriguez"</li>
        <li>Body: Request 30-minute meeting to discuss career development</li>
        <li>Provide: 3 possible time slots over next week</li>
        <li>Mention: Specific topics you'd like to discuss</li>
        <li>Attach: Your updated resume (create dummy PDF)</li>
        <li>Close: Professionally, with your signature</li>
    </ol>
    
    <p><b>Scenario 2: Project Update to Team</b></p>
    <ol>
        <li>Subject: Project Phoenix - Weekly Update & Action Items</li>
        <li>To: 3 team members (use fake emails: team1@, team2@, team3@)</li>
        <li>CC: Project manager</li>
        <li>Body: Brief progress report, challenges, next steps</li>
        <li>Include: Bullet points for completed tasks</li>
        <li>Add: Action items table with names and deadlines</li>
        <li>Attach: Project timeline (create simple Excel file)</li>
        <li>Close: Encourage questions, provide your availability</li>
    </ol>
    
    <h4>🎯 Exercise 3: Email Management Practice</h4>
    <ol>
        <li><b>Create folders/labels:</b> Work, Personal, Projects, Archives</li>
        <li><b>Set up filters/rules:</b> Automatically sort incoming emails</li>
        <li><b>Practice searching:</b> Find emails by sender, subject, date</li>
        <li><b>Create email templates:</b> Save common responses</li>
        <li><b>Schedule send:</b> Write email now, send tomorrow 9 AM</li>
        <li><b>Set up out of office:</b> Create professional auto-reply</li>
        <li><b>Unsubscribe:</b> Practice removing from mailing lists</li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Professional Communication Portfolio"</b>
    
    <h4>Part 1: Email Scenarios (60 points)</h4>
    <p>Draft professional emails for these 5 scenarios:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Scenario</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Recipient(s)</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Key Requirements</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Points</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Job Application Follow-up</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Hiring Manager</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Professional, concise, include resume</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Team Conflict Resolution</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Team + Manager</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Diplomatic, solution-focused</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Client Apology</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Important Client</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Sincere, take responsibility, offer fix</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Information Request</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Busy Executive</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Respect time, be specific, show value</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Networking Introduction</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Industry Professional</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Warm, brief, mutual benefit</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
        </tr>
    </table>
    
    <h4>Part 2: Technical Setup (20 points)</h4>
    <ul>
        <li>Create professional email signature (HTML and plain text versions)</li>
        <li>Set up email folders/labels for organization</li>
        <li>Create 3 email templates for frequent responses</li>
        <li>Configure out-of-office message for vacation</li>
        <li>Practice attaching different file types (PDF, DOCX, XLSX, JPG)</li>
        <li>Test email formatting on desktop and mobile</li>
    </ul>
    
    <h4>Part 3: Email Etiquette Guide (20 points)</h4>
    <p>Create a one-page "Professional Email Guidelines" document covering:</p>
    <ul>
        <li>When to use To/CC/BCC (with examples)</li>
        <li>Subject line best practices</li>
        <li>Appropriate response time expectations</li>
        <li>When to use "Reply" vs "Reply All"</li>
        <li>Forwarding etiquette (check before forwarding)</li>
        <li>Email vs. instant message vs. phone call decision guide</li>
        <li"After-hours email considerations</li>
        <li>Cultural considerations in global communication</li>
    </ul>
    
    <h4>Challenge Task: Complete Communication Workflow</h4>
    <p>Create this sequence of connected communications:</p>
    <ol>
        <li>Meeting request email (with calendar invite)</li>
        <li>Meeting confirmation reply</li>
        <li>Pre-meeting materials email (with attachments)</li>
        <li>Thank you email after meeting</li>
        <li>Follow-up email with action items</li>
        <li>Status update email one week later</li>
        <li>Project completion announcement</li>
    </ol>
    <p>Show understanding of complete professional communication lifecycle.</p>
</div>

<h3>Common Email Mistakes & Solutions</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Mistake</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Why It's Bad</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Professional Solution</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Vague subject lines</td>
            <td style="padding: 8px; border: 1px solid #ddd">Email gets ignored or lost</td>
            <td style="padding: 8px; border: 1px solid #ddd">Be specific: "Budget Approval Needed by Friday"</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Too long/rambling</td>
            <td style="padding: 8px; border: 1px solid #ddd">Recipient stops reading</td>
            <td style="padding: 8px; border: 1px solid #ddd">Bottom line up front (BLUF), then details</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">Emotional tone</td>
            <td style="padding: 8px; border: 1px solid #ddd">Creates conflict, permanent record</td>
            <td style="padding: 8px; border: 1px solid #ddd">Write draft, wait 1 hour, revise calmly</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd">Missing attachments</td>
            <td style="padding: 8px; border: 1px solid #ddd">"See attached" with no attachment</td>
            <td style="padding: 8px; border: 1px solid #ddd">Attach files FIRST, then write email</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">"Reply All" abuse</td>
            <td style="padding: 8px; border: 1px solid #ddd">Inboxes flooded with irrelevant replies</td>
            <td style="padding: 8px; border: 1px solid #ddd">Ask: "Does everyone need to see this?"</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>📧 Email Safety & Security:</h5>
        <ul>
            <li><b>Phishing Awareness:</b> Check sender, hover over links, don't open suspicious attachments</li>
            <li><b>Password Protection:</b> Strong password, two-factor authentication</li>
            <li><b>Public Wi-Fi:</b> Avoid accessing sensitive emails on public networks</li>
            <li><b>Forwarding Care:</b> Remove sensitive info before forwarding</li>
            <li><b>Company Policy:</b> Follow your organization's email guidelines</li>
            <li><b>Permanent Record:</b> Assume every email could be read in court</li>
        </ul>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Professional Tone:</b> Email is permanent business record</li>
    <li><b>Clear Structure:</b> Subject, greeting, body, closing, signature</li>
    <li><b>To/CC/BCC:</b> Understand when and why to use each</li>
    <li><b>Attachment Management:</b> Name files properly, manage sizes</li>
    <li><b>Response Timing:</b> 24-hour rule for business emails</li>
    <li><b>Email vs Other Tools:</b> Know when to call, meet, or message instead</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Professional Email Best Practices:</h3>
    <ul>
        <li><b>Proofread Always:</b> Read aloud, use spell check, check tone</li>
        <li><b>Wait Before Sending:</b> For emotional emails, save as draft overnight</li>
        <li><b>Mobile Considerations:</b> Test how your email looks on phones</li>
        <li><b>Signature Consistency:</b> Same professional signature always</li>
        <li><b>Calendar Integration:</b> Use calendar invites for meetings</li>
        <li><b>Follow-up System:</b> Flag emails that need follow-up</li>
        <li><b>Regular Cleanup:</b> Archive old emails, unsubscribe from lists</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Week 7 Summary & Week 8 Preview:</h3>
    <p><b>Week 7 Achievements:</b></p>
    <ul>
        <li>✓ Mastered professional PowerPoint presentations</li>
        <li>✓ Learned effective animations and transitions</li>
        <li>✓ Understood internet and web technologies</li>
        <li>✓ Developed professional email communication skills</li>
    </ul>
    
    <p><b>Final Week: Logic, Security & Maintenance</b></p>
    <ul>
        <li>Day 1: Software development logic and flowcharts</li>
        <li>Day 2: Cybersecurity and digital citizenship</li>
        <li>Day 3: Computer troubleshooting and maintenance</li>
        <li>Day 4: Final presentations and certification</li>
    </ul>
    
    <p><b>Final Course Project:</b> Present your Technology Report using PowerPoint skills from this week!</p>
    
    <p><i>Tutor Note: Congratulations on making it to the final week! Next week brings everything together with security, troubleshooting, and your final presentation. You're almost a certified IT Foundation graduate! 🎓</i></p>
</div>
`
            },

            "8-1": {
                icon: "fa-sitemap",
                title: "Software Development & Logic",
                html: `<h1>Week 8, Day 1: Software Development & Logic</h1>
<p>Today we explore the logical thinking behind software development. Learn to break down complex problems into manageable steps and create visual representations of processes.</p>

<div class="analogy-box">
    <b>Analogy: The Recipe for a Complex Dish 🍳</b><br/>
    
    Problem: "Make a three-course meal"<br/>
    Algorithm: Step-by-step recipe<br/>
    Flowchart: Visual recipe with decision points<br/>
    Variables: Ingredients with quantities<br/>
    Conditions: "If oven hot, then bake"<br/>
    Loops: "Stir until smooth"<br/>
    Testing: Taste testing and adjustments
</div>

<h3>Understanding Algorithms</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 What is an Algorithm?</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <p><b>Definition:</b> A set of step-by-step instructions to solve a problem or complete a task.</p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div>
                <h5>Everyday Algorithms:</h5>
                <ul>
                    <li><b>Making Tea:</b> Boil water → Add tea bag → Steep → Remove bag → Add milk/sugar</li>
                    <li><b>Driving to Work:</b> Start car → Navigate route → Follow traffic rules → Park</li>
                    <li><b>Doing Laundry:</b> Sort clothes → Add detergent → Select cycle → Start → Dry</li>
                </ul>
            </div>
            
            <div>
                <h5>Computer Algorithms:</h5>
                <ul>
                    <li><b>Search Algorithm:</b> How Google finds web pages</li>
                    <li><b>Sort Algorithm:</b> How Excel sorts data alphabetically</li>
                    <li><b>Recommendation Algorithm:</b> How Netflix suggests movies</li>
                    <li><b>Navigation Algorithm:</b> How GPS finds shortest route</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 Algorithm Characteristics:</h5>
            <ul>
                <li><b>Clear & Unambiguous:</b> Each step precisely defined</li>
                <li><b>Finite:</b> Must eventually end</li>
                <li><b>Effective:</b> Solves the problem completely</li>
                <li><b>Input/Output:</b> Takes input, produces output</li>
                <li><b>Language Independent:</b> Can be implemented in any programming language</li>
            </ul>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 Algorithm Example: Login System</h5>
            <p><b>Problem:</b> Verify user login credentials</p>
            <ol style="font-size: 14px;">
                <li>Start at login screen</li>
                <li>User enters username and password</li>
                <li>System checks if username exists in database</li>
                <li>IF username exists THEN check password</li>
                <li>IF password matches THEN grant access</li>
                <li>ELSE show "Invalid credentials" error</li>
                <li>END</li>
            </ol>
        </div>
    </div>
</div>

<h3>Flowchart Fundamentals</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Flowchart Symbols & Meanings</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 10px; text-align: center;">Symbol</th>
                <th style="padding: 10px; text-align: left;">Name</th>
                <th style="padding: 10px; text-align: left;">Purpose</th>
                <th style="padding: 10px; text-align: left;">Example</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd; text-align: center;">○</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Terminator</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Start/End of process</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Begin", "End"</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd; text-align: center;">▭</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Process</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Action or operation</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Calculate total"</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd; text-align: center;">◇</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Decision</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Yes/No question</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Is age ≥ 18?"</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd; text-align: center;">▱</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Data</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Input/Output</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Enter password"</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd; text-align: center;">▭▭</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Document</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Printed output</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Print report"</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd; text-align: center;">→</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Arrow</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Flow direction</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Connects steps</td>
            </tr>
        </table>
    </div>

    <h4>Creating Effective Flowcharts</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Step-by-Step Flowchart Creation:</b></p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <h5>Example: ATM Withdrawal</h5>
                <ol>
                    <li><b>Start:</b> Customer at ATM</li>
                    <li><b>Input:</b> Insert card, enter PIN</li>
                    <li><b>Decision:</b> PIN correct?</li>
                    <li><b>Yes:</b> Select "Withdrawal"</li>
                    <li><b>Input:</b> Enter amount</li>
                    <li><b>Decision:</b> Sufficient funds?</li>
                    <li><b>Yes:</b> Dispense cash</li>
                    <li><b>Process:</b> Update balance</li>
                    <li><b>Output:</b> Print receipt</li>
                    <li><b>End:</b> Return card</li>
                </ol>
            </div>
            
            <div>
                <h5>Flowchart Rules:</h5>
                <ul>
                    <li><b>One Start, One End:</b> (usually)</li>
                    <li><b>Top to Bottom, Left to Right:</b> Standard flow</li>
                    <li><b>Clear Decision Labels:</b> Yes/No or True/False</li>
                    <li><b>Avoid Crossing Lines:</b> Use connectors if needed</li>
                    <li><b>Keep it Simple:</b> Break complex processes into sub-flowcharts</li>
                    <li><b>Test Logic:</b> Walk through with sample data</li>
                </ul>
            </div>
        </div>
        
        <div style="background: #FFF3CD; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <p><b>🎯 Flowchart Benefits:</b></p>
            <ul>
                <li><b>Visual Clarity:</b> See entire process at once</li>
                <li><b>Error Detection:</b> Spot logical errors before coding</li>
                <li><b>Communication:</b> Explain process to non-technical people</li>
                <li><b>Documentation:</b> Permanent record of process logic</li>
                <li><b>Optimization:</b> Identify unnecessary steps</li>
            </ul>
        </div>
    </div>
</div>

<h3>Programming Logic Concepts</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Core Programming Constructs</h4>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>1. Variables</h5>
            <p><b>Purpose:</b> Store data temporarily</p>
            <p><b>Like:</b> Labeled boxes holding items</p>
            <p><b>Examples:</b></p>
            <ul>
                <li>username = "John"</li>
                <li>age = 25</li>
                <li>price = 19.99</li>
                <li>is_logged_in = True</li>
            </ul>
            <p><b>Naming:</b> Descriptive, no spaces, case sensitive</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>2. Conditionals (IF/THEN)</h5>
            <p><b>Purpose:</b> Make decisions</p>
            <p><b>Structure:</b></p>
            <pre style="background: #f5f5f5; padding: 8px; font-size: 12px;">
IF condition THEN
    do something
ELSE
    do something else
END IF
            </pre>
            <p><b>Examples:</b></p>
            <ul>
                <li>IF score ≥ 50 THEN grade = "Pass"</li>
                <li>IF raining THEN take umbrella</li>
                <li>IF age < 18 THEN access = "Denied"</li>
            </ul>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>3. Loops</h5>
            <p><b>Purpose:</b> Repeat actions</p>
            <p><b>Types:</b></p>
            <ul>
                <li><b>FOR loop:</b> Repeat specific number of times</li>
                <li><b>WHILE loop:</b> Repeat while condition true</li>
                <li><b>DO-WHILE:</b> Execute once, then check condition</li>
            </ul>
            <p><b>Examples:</b></p>
            <ul>
                <li>FOR each student, calculate grade</li>
                <li>WHILE button not clicked, wait</li>
                <li>REPEAT until password correct</li>
            </ul>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>Real-World Logic: Online Shopping System</h5>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <p><b>Process Logic:</b></p>
                <ol>
                    <li>User adds item to cart</li>
                    <li>System checks stock availability</li>
                    <li>IF item in stock THEN add to cart</li>
                    <li>ELSE show "Out of stock" message</li>
                    <li>User proceeds to checkout</li>
                    <li>System calculates total (price × quantity + tax)</li>
                    <li>User enters payment details</li>
                    <li>IF payment valid THEN process order</li>
                    <li>ELSE show error, retry payment</li>
                    <li>Send confirmation email</li>
                </ol>
            </div>
            
            <div>
                <p><b>Variables Used:</b></p>
                <ul>
                    <li>cart_items = [] (list of items)</li>
                    <li>total_price = 0</li>
                    <li>tax_rate = 0.08</li>
                    <li>shipping_cost = 5.99</li>
                    <li>payment_status = "Pending"</li>
                    <li>order_number = "ORD-2024-001"</li>
                    <li>customer_email = "user@example.com"</li>
                </ul>
                
                <p><b>Conditions Checked:</b></p>
                <ul>
                    <li>Is item in stock? (Yes/No)</li>
                    <li>Is cart empty? (Yes/No)</li>
                    <li>Is payment valid? (Yes/No)</li>
                    <li>Is shipping address valid? (Yes/No)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Create Flowcharts in PowerPoint/Word</h4>
    <ol>
        <li><b>Open PowerPoint or Word:</b> Insert → Shapes → Flowchart shapes</li>
        <li><b>Create Morning Routine Flowchart:</b>
            <ul>
                <li>Start: Wake up</li>
                <li>Decision: Is it weekday? (Yes/No)</li>
                <li>Yes: Get ready for work/school</li>
                <li>No: Sleep in</li>
                <li>Process: Eat breakfast</li>
                <li>Decision: Time > 8 AM? (Yes/No)</li>
                <li>Yes: Hurry up</li>
                <li>No: Take your time</li>
                <li>Process: Leave house</li>
                <li>End: Start day</li>
            </ul>
        </li>
        <li><b>Format professionally:</b> Consistent shapes, colors, alignment</li>
        <li><b>Add text labels:</b> Clear, concise descriptions</li>
    </ol>
    
    <h4>🎯 Exercise 2: Algorithm Design - Library Book System</h4>
    <p><b>Problem:</b> Design algorithm for borrowing a library book</p>
    <ol>
        <li><b>Identify inputs:</b> Book ID, Member ID, Date</li>
        <li><b>Identify outputs:</b> Success message or error</li>
        <li><b>Design steps:</b>
            <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;">
1. Start
2. Input: Book ID, Member ID
3. Check: Is member valid? (IF/THEN)
4. IF member valid THEN check book availability
5. ELSE show "Invalid member" error
6. IF book available THEN check borrowing limit
7. ELSE show "Book unavailable" error
8. IF under borrowing limit THEN process loan
9. ELSE show "Limit reached" error
10. Update: Mark book as borrowed
11. Output: Due date receipt
12. End
            </pre>
        </li>
        <li><b>Create flowchart:</b> Convert algorithm to visual flowchart</li>
        <li><b>Test with scenarios:</b> Valid loan, invalid member, book unavailable</li>
    </ol>
    
    <h4>🎯 Exercise 3: Debugging Logic Errors</h4>
    <p><b>Find errors in this "Coffee Machine" algorithm:</b></p>
    <pre style="background: #ffebee; padding: 10px; border-radius: 5px;">
1. Start coffee machine
2. Add water
3. Add coffee grounds
4. IF user wants sugar THEN add sugar
5. Brew coffee
6. Pour coffee
7. IF user wants milk THEN add milk
8. Serve coffee
9. Clean machine
    </pre>
    
    <p><b>Errors to find:</b></p>
    <ul>
        <li>Logical sequence error (milk added after pouring?)</li>
        <li>Missing steps (check water level?)</li>
        <li>Unclear conditions (how much sugar/milk?)</li>
        <li>Safety issues (hot surfaces?)</li>
    </ul>
    
    <p><b>Correct the algorithm and create flowchart.</b></p>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Design a "Student Course Registration System"</b>
    
    <h4>Part 1: Algorithm Design (40 points)</h4>
    <p>Create a detailed algorithm for a university course registration system:</p>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div>
            <p><b>System Requirements:</b></p>
            <ul>
                <li>Student must be registered for current semester</li>
                <li>Student must have no outstanding fees</li>
                <li>Course must have available seats</li>
                <li>Course must fit student's schedule (no time conflicts)</li>
                <li>Student must meet prerequisites for course</li>
                <li>Maximum 18 credits per semester</li>
                <li>Some courses require department approval</li>
            </ul>
        </div>
        
        <div>
            <p><b>Inputs/Outputs:</b></p>
            <ul>
                <li><b>Inputs:</b> Student ID, Course Code, Section</li>
                <li><b>Outputs:</b> Registration confirmation or error message</li>
                <li><b>Variables Needed:</b> student_status, fee_balance, available_seats, schedule_conflict, prerequisites_met, current_credits, max_credits</li>
                <li><b>Error Messages:</b> "Fees outstanding", "Course full", "Schedule conflict", "Prerequisites not met", "Credit limit exceeded"</li>
            </ul>
        </div>
    </div>
    
    <h4>Part 2: Flowchart Creation (40 points)</h4>
    <p>Create a professional flowchart showing the complete registration process:</p>
    
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background: #4CAF50; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Flowchart Section</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Required Elements</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Points</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Start & Input</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Clear start, input symbols for student/course data</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Validation Checks</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5+ decision diamonds for requirements</td>
            <td style="padding: 8px; border: 1px solid #ddd;">15</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">Process Steps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Registration processing, database updates</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Output & End</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Confirmation/error messages, clear end point</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5</td>
        </tr>
    </table>
    
    <h4>Part 3: Test Cases (20 points)</h4>
    <p>Create 5 test scenarios and show how your algorithm handles each:</p>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #2196F3; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Test Case</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Input Conditions</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Expected Output</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Path in Flowchart</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">1. Perfect Student</td>
                <td style="padding: 8px; border: 1px solid #ddd;">All requirements met, course available</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Registration confirmed</td>
                <td style="padding: 8px; border: 1px solid #ddd;">All "Yes" paths</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">2. Outstanding Fees</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Student owes money</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Fees outstanding" error</td>
                <td style="padding: 8px; border: 1px solid #ddd;">First "No" path</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">3. Course Full</td>
                <td style="padding: 8px; border: 1px solid #ddd;">No seats available</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Course full" error</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Third "No" path</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">4. Schedule Conflict</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Class time overlaps existing</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Schedule conflict" error</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Fourth "No" path</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">5. Credit Limit</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Adding course exceeds 18 credits</td>
                <td style="padding: 8px; border: 1px solid #ddd;">"Credit limit exceeded" error</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Last "No" path</td>
            </tr>
        </table>
    </div>
    
    <h4>Challenge Task: Advanced System Design</h4>
    <p>Extend your system with these features:</p>
    <ul>
        <li>Waitlist functionality for full courses</li>
        <li>Prerequisite checking with course grade minimum (C or better)</li>
        <li>Major/minor requirement tracking</li>
        <li>Professor approval system for overload requests</li>
        <li>Automatic schedule optimization suggestions</li>
        <li>Email notifications for registration status</li>
    </ul>
    <p>Create a separate sub-flowchart for one advanced feature.</p>
</div>

<h3>Common Logic Errors & Debugging</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Error Type</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Why It's Wrong</th>
            <th style="padding: 8px; border: 1px solid #ddd;">How to Fix</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Infinite Loop</td>
            <td style="padding: 8px; border: 1px solid #ddd">WHILE x > 0: x = x + 1</td>
            <td style="padding: 8px; border: 1px solid #ddd">Never stops (x always increases)</td>
            <td style="padding: 8px; border: 1px solid #ddd">WHILE x > 0: x = x - 1</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Off-by-One</td>
            <td style="padding: 8px; border: 1px solid #ddd">FOR i = 1 to 10: (needs 10 times)</td>
            <td style="padding: 8px; border: 1px solid #ddd">Actually runs 9 times (1-9)</td>
            <td style="padding: 8px; border: 1px solid #ddd">FOR i = 1 to 10: (correct)</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">Missing Edge Case</td>
            <td style="padding: 8px; border: 1px solid #ddd">IF age > 18: allow (forgets age=18)</td>
            <td style="padding: 8px; border: 1px solid #ddd">18-year-olds excluded</td>
            <td style="padding: 8px; border: 1px solid #ddd">IF age ≥ 18: allow</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">Wrong Order</td>
            <td style="padding: 8px; border: 1px solid #ddd">Check password before username</td>
            <td style="padding: 8px; border: 1px solid #ddd">Wastes time if username invalid</td>
            <td style="padding: 8px; border: 1px solid #ddd">Check username first</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">Overlapping Conditions</td>
            <td style="padding: 8px; border: 1px solid #ddd">IF score > 80: A, IF score > 70: B</td>
            <td style="padding: 8px; border: 1px solid #ddd">90 gets both A and B</td>
            <td style="padding: 8px; border: 1px solid #ddd">IF score > 80: A ELSE IF score > 70: B</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔧 Debugging Strategies:</h5>
        <ol>
            <li><b>Walk Through Manually:</b> Use sample data, follow each step</li>
            <li><b>Check Edge Cases:</b> Test minimum, maximum, empty values</li>
            <li><b>Add Print Statements:</b> Show variable values at each step</li>
            <li><b>Simplify:</b> Remove complexity, get basic version working first</li>
            <li><b>Rubber Duck Debugging:</b> Explain code to someone (or a rubber duck)</li>
            <li><b>Test Incrementally:</b> Test each part as you build it</li>
            <li><b>Get Fresh Eyes:</b> Take break, come back later</li>
        </ol>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Algorithms are Recipes:</b> Step-by-step problem-solving instructions</li>
    <li><b>Flowcharts Visualize Logic:</b> Standard symbols for processes and decisions</li>
    <li><b>Programming Constructs:</b> Variables, conditionals, loops form building blocks</li>
    <li><b>Logical Thinking:</b> Break complex problems into manageable steps</li>
    <li><b>Testing is Crucial:</b> Test with normal cases AND edge cases</li>
    <li><b>Debugging Skills:</b> Systematic approach to finding and fixing errors</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Algorithm & Logic Best Practices:</h3>
    <ul>
        <li><b>Start with Pseudocode:</b> Write steps in plain English first</li>
        <li><b>Keep it Simple:</b> Each step should do one clear thing</li>
        <li><b>Use Descriptive Names:</b> total_price not tp or x</li>
        <li><b>Handle All Cases:</b> What if input is empty? Invalid? Edge values?</li>
        <li><b>Optimize Later:</b> First make it work, then make it fast/efficient</li>
        <li><b>Document Assumptions:</b> Note any assumptions about inputs or environment</li>
        <li><b>Peer Review:</b> Have someone else check your logic</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Security & Digital Citizenship</b></p>
    <ul>
        <li>Complete the Course Registration System design</li>
        <li>Practice creating flowcharts for everyday processes</li>
        <li>Think about: What makes a password "strong"?</li>
        <li>How can you recognize phishing attempts?</li>
        <li>What digital footprint are you leaving online?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we shift to cybersecurity - protecting yourself and your data in the digital world. In our interconnected age, security isn't just for IT professionals anymore!</i></p>
</div>
`
            },
            "8-2": {
                icon: "fa-shield-alt",
                title: "Security & Digital Citizenship",
                html: `<h1>Week 8, Day 2: Security & Digital Citizenship</h1>
<p>Today we learn to protect ourselves and our data in the digital world. From password security to recognizing scams, develop the skills to be safe and responsible online citizens.</p>

<div class="analogy-box">
    <b>Analogy: The Digital House & Neighborhood 🏠</b><br/>
    
    Your Computer: Your digital house<br/>
    Passwords: Door locks and keys<br/>
    Antivirus: Security alarm system<br/>
    Firewall: Fence around your property<br/>
    Phishing: Strangers trying to trick you into opening door<br/>
    Social Media: Your public front yard<br/>
    Digital Footprint: Footprints you leave in the neighborhood<br/>
    Updates: Regular home maintenance
</div>

<h3>Password Security Fundamentals</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📊 Creating & Managing Strong Passwords</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div>
                <h5>❌ Weak Passwords (Never Use These!)</h5>
                <ul style="color: #F44336;">
                    <li>password / 123456 / qwerty</li>
                    <li>Your name or birthdate</li>
                    <li>Pet's name or favorite sports team</li>
                    <li>Simple patterns (abc123, 111111)</li>
                    <li>Common words (love, admin, welcome)</li>
                    <li>Season + year (Summer2024)</li>
                    <li>Any single dictionary word</li>
                </ul>
                <p><b>Problem:</b> Hackers try these first!</p>
            </div>
            
            <div>
                <h5>✅ Strong Password Strategies</h5>
                <ul style="color: #4CAF50;">
                    <li><b>Passphrase:</b> "BlueCoffee@MountainSunrise!"</li>
                    <li><b>Acronym:</b> "Ilt2bciMh1990!" (I love to drink coffee in My house 1990!)</li>
                    <li><b>Random words:</b> "correct-horse-battery-staple"</li>
                    <li><b>Minimum 12 characters</b></li>
                    <li><b>Mix:</b> Uppercase, lowercase, numbers, symbols</li>
                    <li><b>Unique:</b> Different for each important account</li>
                </ul>
                <p><b>Tip:</b> Longer is stronger than complex!</p>
            </div>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
        <div style="background: #FFF3CD; padding: 15px; border-radius: 5px;">
            <h5>🎯 Password Manager Benefits</h5>
            <p><b>What they do:</b> Store all passwords in encrypted vault</p>
            <p><b>Popular options:</b> LastPass, Bitwarden, 1Password, KeePass</p>
            <p><b>Benefits:</b></p>
            <ul>
                <li>Remember only ONE master password</li>
                <li>Generate strong, random passwords</li>
                <li>Auto-fill login forms</li>
                <li>Sync across devices</li>
                <li>Alert about compromised passwords</li>
                <li>Share securely with family/team</li>
            </ul>
            <p><b>Caution:</b> Choose reputable manager, protect master password!</p>
        </div>
        
        <div style="background: #E8F5E8; padding: 15px; border-radius: 5px;">
            <h5>🔑 Two-Factor Authentication (2FA)</h5>
            <p><b>Concept:</b> Something you know + Something you have</p>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 10px;">
                <div>
                    <p><b>1st Factor:</b> Password (something you know)</p>
                </div>
                <div>
                    <p><b>2nd Factor:</b> (Choose one)</p>
                    <ul>
                        <li>Text message code</li>
                        <li>Authenticator app (Google/Microsoft)</li>
                        <li>Security key (Yubikey)</li>
                        <li>Biometric (fingerprint/face)</li>
                    </ul>
                </div>
            </div>
            
            <p><b>Protection:</b> Even if password stolen, attacker needs your phone too!</p>
            <p><b>Enable on:</b> Email, banking, social media, cloud storage</p>
        </div>
    </div>
</div>

<h3>Recognizing & Avoiding Online Threats</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

    <h4>Phishing: The Most Common Threat</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <p><b>Definition:</b> Fraudulent attempt to obtain sensitive information by disguising as trustworthy entity.</p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div>
                <h5>🎣 Phishing Red Flags</h5>
                <ul>
                    <li><b>Urgent language:</b> "Your account will be closed in 24 hours!"</li>
                    <li><b>Generic greeting:</b> "Dear Customer" instead of your name</li>
                    <li><b>Suspicious sender:</b> support@apple-security.com (not @apple.com)</li>
                    <li><b>Poor spelling/grammar:</b> Professional companies proofread</li>
                    <li><b>Suspicious links:</b> Hover to see real URL</li>
                    <li><b>Requests sensitive info:</b> Legit companies won't email for passwords</li>
                    <li><b>Too good to be true:</b> "You've won $1,000,000!"</li>
                </ul>
            </div>
            
            <div>
                <h5>🔍 Real Example Analysis</h5>
                <div style="border: 1px solid #ddd; padding: 10px; background: #f9f9f9;">
                    <p><b>From:</b> security@paypa1.com (Notice: paypa1 not paypal)</p>
                    <p><b>Subject:</b> URGENT: Your account has been compromised!</p>
                    <p><b>Body:</b> "Dear PayPal user, we detected suspicious activity. Click here to verify your account immediately or it will be suspended."</p>
                    <p><b>Link:</b> Shows "https://www.paypal.com/verify" but actually goes to "http://paypal-security.ru/login"</p>
                </div>
                <p style="margin-top: 10px;"><b>What to do:</b> Don't click! Go directly to paypal.com (type it) and check account.</p>
            </div>
        </div>
    </div>

    <h4>Malware & Protection</h4>
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 15px 0;">
            
            <div style="text-align: center;">
                <div style="font-size: 24px; color: #F44336;">🦠</div>
                <h6>Viruses</h6>
                <p>Attach to files, spread when files shared</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 24px; color: #FF9800;">🧟</div>
                <h6>Ransomware</h6>
                <p>Encrypts files, demands payment to decrypt</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 24px; color: #9C27B0;">🕵️</div>
                <h6>Spyware</h6>
                <p>Secretly monitors activity, steals data</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 24px; color: #2196F3;">📱</div>
                <h6>Adware</h6>
                <p>Displays unwanted ads, slows computer</p>
            </div>
        </div>
        
        <div style="background: #FFF3CD; padding: 10px; margin-top: 10px; border-radius: 5px;">
            <h5>🛡️ Protection Strategies:</h5>
            <ul>
                <li><b>Antivirus Software:</b> Windows Defender (free) or reputable paid options</li>
                <li><b>Regular Updates:</b> OS, browser, software patches security holes</li>
                <li><b>Firewall:</b> Blocks unauthorized network access</li>
                <li><b>Backup Regularly:</b> 3-2-1 rule: 3 copies, 2 different media, 1 offsite</li>
                <li><b>Download Carefully:</b> Only from official sources, check reviews</li>
                <li><b>Email Attachments:</b> Don't open unexpected .exe, .zip, .js files</li>
            </ul>
        </div>
    </div>
</div>

<h3>Digital Citizenship & Online Behavior</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>📊 Managing Your Digital Footprint</h4>
    
    <div style="background: white; padding: 15px; border-radius: 5px; margin: 15px 0;">
        <p><b>Digital Footprint:</b> Everything about you that exists online - both what you post AND what others post about you.</p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div>
                <h5>Active Footprint (What You Control)</h5>
                <ul>
                    <li>Social media posts</li>
                    <li>Blog comments</li>
                    <li>Online reviews</li>
                    <li>Forum participation</li>
                    <li>Emails you send</li>
                    <li>Photos you upload</li>
                </ul>
                <p><b>Strategy:</b> Think before you post. Would you want a future employer to see this?</p>
            </div>
            
            <div>
                <h5>Passive Footprint (Created About You)</h5>
                <ul>
                    <li>Search history tracked</li>
                    <li>Location data from phone</li>
                    <li>Purchase records</li>
                    <li>Social media tags by others</li>
                    <li>Public records (voting, property)</li>
                    <li>News mentions</li>
                </ul>
                <p><b>Strategy:</b> Regularly Google yourself, adjust privacy settings, request removal where possible.</p>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 15px; margin-top: 10px; border-radius: 5px;">
        <h5>Privacy Settings & Data Protection</h5>
        
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Platform</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Key Settings to Check</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Recommended</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Facebook</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Who can see your posts, profile info, friend list</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Friends only (not Public)</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Instagram</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Private account, story sharing, activity status</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Private account for personal use</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Google</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Search history, location history, YouTube history</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Auto-delete every 3 months</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Smartphone</td>
                <td style="padding: 8px; border: 1px solid #ddd;">App permissions, location services, ad tracking</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Only necessary permissions</td>
            </tr>
        </table>
    </div>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>🎯 Exercise 1: Password Security Audit</h4>
    <ol>
        <li><b>Check Password Strength:</b> Use HaveIBeenPwned.com (safe, reputable)
            <ul>
                <li>Enter old passwords you've used (NOT current ones!)</li>
                <li>See if they've appeared in data breaches</li>
                <li>Understand importance of unique passwords</li>
            </ul>
        </li>
        <li><b>Create Strong Passwords:</b>
            <ul>
                <li>Use passphrase method: "MyDogRexLoves2Run@ThePark!"</li>
                <li>Use acronym method: Take a sentence: "My first car was a red Toyota in 2010" → MfcwarTi2010!</li>
                <li>Test strength at: security.org/how-secure-is-my-password/ (simulation only)</li>
            </ul>
        </li>
        <li><b>Setup Password Manager:</b> Install Bitwarden (free) or browser's built-in manager
            <ul>
                <li>Create account with strong master password</li>
                <li>Import saved passwords from browser</li>
                <li>Generate new strong passwords for important accounts</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 2: Phishing Detection Practice</h4>
    <ol>
        <li><b>Analyze Sample Emails:</b> (Provided by tutor - safe examples)
            <ul>
                <li>Which are phishing? Which are legitimate?</li>
                <li>Identify red flags in each</li>
                <li>Practice hovering over links (without clicking)</li>
            </ul>
        </li>
        <li><b>Check Email Headers:</b> (Advanced)
            <ul>
                <li>In Gmail: Open email → Three dots → Show original</li>
                <li>Look for: Return-Path, Received-SPF, DKIM signatures</li>
                <li>Identify the real sender vs displayed sender</li>
            </ul>
        </li>
        <li><b>Practice Safe Response:</b>
            <ul>
                <li>If suspicious: Don't click, don't reply, don't call provided number</li>
                <li>Go directly to official website (type URL yourself)</li>
                <li>Contact company through official channels</li>
                <li>Report phishing to: reportphishing@apwg.org (Anti-Phishing Working Group)</li>
            </ul>
        </li>
    </ol>
    
    <h4>🎯 Exercise 3: Digital Footprint Investigation</h4>
    <ol>
        <li><b>Google Yourself:</b>
            <ul>
                <li>Search your name in quotes: "Your Full Name"</li>
                <li>Search with location: "Your Name" City</li>
                <li>Search usernames you use</li>
                <li>Use different search engines: Google, Bing, DuckDuckGo</li>
            </ul>
        </li>
        <li><b>Check Privacy Settings:</b>
            <ul>
                <li>Facebook: Settings → Privacy → Review all sections</li>
                <li>Instagram: Settings → Privacy → Set to private</li>
                <li>Google: myaccount.google.com → Data & Privacy</li>
                <li>Phone: Settings → Privacy & Security → App permissions</li>
            </ul>
        </li>
        <li><b>Enable 2FA on Key Accounts:</b>
            <ul>
                <li>Choose one: Email (most important!)</li>
                <li>Download authenticator app: Google Authenticator or Microsoft Authenticator</li>
                <li>Follow setup instructions for your email provider</li>
                <li>Save backup codes in safe place (NOT on computer!)</li>
            </ul>
        </li>
    </ol>
</div>

<h3>Today's Assignment</h3>
<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Task: Create a "Personal Cybersecurity Action Plan"</b>
    
    <h4>Part 1: Current Security Assessment (40 points)</h4>
    <p>Conduct a thorough security audit of your digital life:</p>
    
    <div style="background: white; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background: #4CAF50; color: white;">
                <th style="padding: 8px; border: 1px solid #ddd;">Category</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Current Status</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Risk Level</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Evidence/Examples</th>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Passwords</td>
                <td style="padding: 8px; border: 1px solid #ddd;">List password practices (reuse, strength, etc.)</td>
                <td style="padding: 8px; border: 1px solid #ddd;">High/Medium/Low</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Examples of weak passwords used</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">2FA Status</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Which accounts have 2FA enabled?</td>
                <td style="padding: 8px; border: 1px solid #ddd;">High/Medium/Low</td>
                <td style="padding: 8px; border: 1px solid #ddd;">List accounts with/without 2FA</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Software Updates</td>
                <td style="padding: 8px; border: 1px solid #ddd;">When last updated OS, browser, apps?</td>
                <td style="padding: 8px; border: 1px solid #ddd;">High/Medium/Low</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Update status of key software</td>
            </tr>
            <tr style="background: white;">
                <td style="padding: 8px; border: 1px solid #ddd;">Backup Strategy</td>
                <td style="padding: 8px; border: 1px solid #ddd;">How are important files backed up?</td>
                <td style="padding: 8px; border: 1px solid #ddd;">High/Medium/Low</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Describe backup method/frequency</td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td style="padding: 8px; border: 1px solid #ddd;">Digital Footprint</td>
                <td style="padding: 8px; border: 1px solid #ddd;">What appears when you Google yourself?</td>
                <td style="padding: 8px; border: 1px solid #ddd;">High/Medium/Low</td>
                <td style="padding: 8px; border: 1px solid #ddd;">Screenshots of search results</td>
            </tr>
        </table>
    </div>
    
    <h4>Part 2: Action Plan Implementation (40 points)</h4>
    <p>Create specific, actionable steps to improve security:</p>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin: 15px 0;">
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>Immediate Actions (This Week)</h5>
            <ul>
                <li>Install/configure password manager</li>
                <li>Enable 2FA on email account</li>
                <li>Update all software (OS, browser)</li>
                <li>Run antivirus scan</li>
                <li>Review social media privacy settings</li>
            </ul>
            <p><b>Evidence:</b> Screenshots of completed actions</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>Short-term Goals (Month 1)</h5>
            <ul>
                <li>Replace weak passwords in password manager</li>
                <li>Enable 2FA on 5 most important accounts</li>
                <li>Setup automatic backups (cloud + external drive)</li>
                <li>Clean up social media (delete old posts, adjust tags)</li>
                <li>Install browser privacy extensions (uBlock Origin, Privacy Badger)</li>
            </ul>
            <p><b>Timeline:</b> Specific dates for each action</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px;">
            <h5>Long-term Habits (Ongoing)</h5>
            <ul>
                <li>Monthly password review/update</li>
                <li>Weekly software update check</li>
                <li>Quarterly privacy setting review</li>
                <li>Annual digital footprint audit</li>
                <li>Regular security education (follow security blogs)</li>
            </ul>
            <p><b>Maintenance:</b> Schedule recurring tasks in calendar</p>
        </div>
    </div>
    
    <h4>Part 3: Emergency Response Plan (20 points)</h4>
    <p>Prepare for security incidents:</p>
    <ul>
        <li><b>Data Breach Response:</b> What to do if account compromised
            <ul>
                <li>Immediate password change</li>
                <li>Check for unauthorized activity</li>
                <li>Notify affected services</li>
                <li>Monitor credit reports if financial data involved</li>
            </ul>
        </li>
        <li><b>Ransomware Response:</b> Steps if files encrypted
            <ul>
                <li>Disconnect from network immediately</li>
                <li>Don't pay ransom</li>
                <li>Restore from backups</li>
                <li>Report to authorities (ic3.gov)</li>
            </ul>
        </li>
        <li><b>Lost Device Plan:</b> Phone/laptop lost or stolen
            <ul>
                <li>Remote wipe procedures</li>
                <li>Change passwords for accounts on device</li>
                <li>Contact carrier to disable SIM</li>
                <li>File police report for insurance</li>
            </ul>
        </li>
        <li><b>Digital Executor:</b> Who can access accounts if something happens to you?</li>
    </ul>
    
    <h4>Challenge Task: Family/Household Security Plan</h4>
    <p>Extend your plan to protect family members or housemates:</p>
    <ul>
        <li>Create shared password manager family plan</li>
        <li>Setup parental controls for children's devices</li>
        <li>Establish household rules for:
            <ul>
                <li>Software downloads</li>
                <li>Social media usage</li>
                <li>Public Wi-Fi use</li>
                <li>Device updates/maintenance</li>
            </ul>
        </li>
        <li>Create emergency contact list with digital access instructions</li>
        <li>Schedule quarterly family security reviews</li>
    </ul>
</div>

<h3>Common Security Myths & Truths</h3>
<div style="background-color: #ffebee; padding: 15px; margin: 10px 0; border-radius: 5px;">
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background: #F44336; color: white;">
            <th style="padding: 8px; border: 1px solid #ddd;">Myth</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Reality</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Why It Matters</th>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd;">"I'm not important enough to be hacked"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Hackers target everyone - automated attacks don't discriminate</td>
            <td style="padding: 8px; border: 1px solid #ddd">Your accounts have value (email access, personal data, computing power)</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">"Macs can't get viruses"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Less common than Windows, but Mac malware exists and is growing</td>
            <td style="padding: 8px; border: 1px solid #ddd">All devices need security measures</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">"Incognito mode makes me anonymous"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Only hides from others using same device - ISPs and websites still see you</td>
            <td style="padding: 8px; border: 1px solid #ddd">Use VPN for real privacy on public networks</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">"Strong password = lots of symbols"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Length matters more than complexity: "correct-horse-battery-staple"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Passphrases are easier to remember and harder to crack</td>
        </tr>
        <tr style="background: #ffebee;">
            <td style="padding: 8px; border: 1px solid #ddd">"I'll know if I get a virus"</td>
            <td style="padding: 8px; border: 1px solid #ddd">Modern malware is stealthy - may show no obvious signs</td>
            <td style="padding: 8px; border: 1px solid #ddd">Regular scans needed even if computer seems fine</td>
        </tr>
    </table>
    
    <div style="margin-top: 15px; padding: 10px; background: #FFF3E0; border-radius: 5px;">
        <h5>🔧 Security Resources & Tools:</h5>
        <ul>
            <li><b>Password Check:</b> HaveIBeenPwned.com (check if emails/passwords in breaches)</li>
            <li><b>Virus Scans:</b> Malwarebytes (free scan), Windows Defender (built-in)</li>
            <li><b>Phishing Training:</b> Google's Phishing Quiz (phishingquiz.withgoogle.com)</li>
            <li><b>Privacy Tools:</b> PrivacyTools.io (recommendations for private services)</li>
            <li><b>Security News:</b> KrebsOnSecurity.com, The Hacker News</li>
            <li><b>Government Resources:</b> CISA.gov (Cybersecurity & Infrastructure Security Agency)</li>
            <li><b>Reporting:</b> reportphishing@apwg.org, ic3.gov (Internet Crime Complaint Center)</li>
        </ul>
    </div>
</div>

<h3>Key Learning Points:</h3>
<ol>
    <li><b>Password Hygiene:</b> Unique, strong passwords + password manager</li>
    <li><b>Two-Factor Authentication:</b> Critical extra layer of protection</li>
    <li><b>Phishing Awareness:</b> Recognize red flags, verify before clicking</li>
    <li><b>Digital Footprint Management:</b> Control what exists about you online</li>
    <li><b>Regular Maintenance:</b> Updates, backups, security scans</li>
    <li><b>Security Mindset:</b> Proactive protection beats reactive fixes</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>💡 Security & Digital Citizenship Best Practices:</h3>
    <ul>
        <li><b>Assume Breach:</b> Act as if your data will be compromised - how can you limit damage?</li>
        <li><b>Least Privilege:</b> Only give apps/people the minimum access needed</li>
        <li><b>Defense in Depth:</b> Multiple layers of security (password + 2FA + biometric)</li>
        <li><b>Regular Audits:</b> Quarterly security checkups</li>
        <li><b>Education:</b> Stay informed about new threats</li>
        <li><b>Share Wisely:</b> Teach family/friends - security is communal</li>
        <li><b>Think Long-term:</b> Digital actions have permanent consequences</li>
    </ul>
</div>

<div style="background-color: #fff3cd; padding: 15px; margin: 20px 0; border-radius: 5px;">
    <h3>📚 Preparation for Tomorrow:</h3>
    <p><b>Tomorrow: Troubleshooting & Maintenance</b></p>
    <ul>
        <li>Complete your Personal Cybersecurity Action Plan</li>
        <li>Implement at least 3 security improvements from today</li>
        <li>Think about: What computer problems frustrate you most?</li>
        <li>What's your process when something doesn't work?</li>
        <li>How can you prevent common computer problems?</li>
    </ul>
    <p><i>Tutor Note: Tomorrow we become IT troubleshooters! Learning systematic problem-solving will save you time, money, and frustration. Plus, you'll be the hero when friends/family have computer issues!</i></p>
</div>
`
            },
            "8-3": {
                "icon": "fa-wrench",
                "title": "Troubleshooting & Maintenance",
                "html": `<h1>Week 8, Day 3: Troubleshooting & Maintenance</h1>
<p>Today we learn systematic troubleshooting methods, essential maintenance tasks, and professional IT support etiquette.</p>

<div class="analogy-box">
    <b>Analogy: The Computer Doctor 🩺</b><br/>
    
    Symptoms: What the user reports<br/>
    Diagnosis: Finding the root cause<br/>
    Treatment: Applying the right fix<br/>
    Prevention: Regular check-ups<br/>
    Bedside Manner: Professional communication<br/>
    Recovery: Getting systems back online
</div>

<h3>The Troubleshooting Mindset</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>🔄 Systematic Troubleshooting Process</h4>
    
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background: #4A90E2; color: white;">
            <th style="padding: 10px; text-align: left;">Step</th>
            <th style="padding: 10px; text-align: left;">Action</th>
            <th style="padding: 10px; text-align: left;">Questions to Ask</th>
            <th style="padding: 10px; text-align: left;">Tools to Use</th>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Identify Problem</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"What were you doing when it stopped working?"<br>"Has this happened before?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Active Listening<br>Note-taking</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">2</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Reproduce Issue</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Can you show me exactly what happens?"<br>"Does it happen every time?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Screen sharing<br>Observation</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">3</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check Basics</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Is it plugged in?"<br>"Have you tried turning it off and on?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Power tester<br>Connection check</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">4</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Diagnose Cause</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Is it hardware or software?"<br>"Is it user error or system failure?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Diagnostic tools<br>Log files</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">5</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Apply Solution</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"What's the simplest fix?"<br>"Will this affect other systems?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Knowledge base<br>Repair tools</td>
        </tr>
        <tr style="background: white;">
            <td style="padding: 8px; border: 1px solid #ddd;">6</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Test & Verify</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Does it work now?"<br>"Can you complete your task?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">User verification<br>Function tests</td>
        </tr>
        <tr style="background: #f8f9fa;">
            <td style="padding: 8px; border: 1px solid #ddd;">7</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Document</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"What was the solution?"<br>"How can we prevent recurrence?"</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Ticket system<br>Knowledge base</td>
        </tr>
    </table>
    
    <div style="margin-top: 20px; padding: 15px; background: #fff3cd; border-radius: 5px;">
        <h5>🎯 Troubleshooting Golden Rules:</h5>
        <ol>
            <li><b>Rule #1:</b> Always check the simplest solution first</li>
            <li><b>Rule #2:</b> One change at a time (so you know what fixed it)</li>
            <li><b>Rule #3:</b> Work from general to specific</li>
            <li><b>Rule #4:</b> Document everything you try</li>
            <li><b>Rule #5:</b> Know when to ask for help</li>
        </ol>
    </div>
</div>

<h3>Common Computer Problems & Solutions</h3>
<b>The IT Troubleshooting Toolkit:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">

<div style="background-color: white; padding: 15px; border-radius: 5px; border-left: 5px solid #4A90E2;">
<h4>🔌 No Power Issues</h4>
<table style="width: 100%; border-collapse: collapse;">
<tr>
<th style="padding: 5px; text-align: left;">Symptom</th>
<th style="padding: 5px; text-align: left;">Check</th>
<th style="padding: 5px; text-align: left;">Fix</th>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">No lights, no sound</td>
<td style="padding: 5px; border: 1px solid #ddd;">Power cable, outlet, PSU switch</td>
<td style="padding: 5px; border: 1px solid #ddd;">Reseat cables, try different outlet</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Lights but no display</td>
<td style="padding: 5px; border: 1px solid #ddd;">Monitor power, input source, cables</td>
<td style="padding: 5px; border: 1px solid #ddd;">Check monitor input (HDMI/VGA switch)</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Beep codes on startup</td>
<td style="padding: 5px; border: 1px solid #ddd;">Listen for pattern (1 long, 2 short, etc.)</td>
<td style="padding: 5px; border: 1px solid #ddd;">Look up manufacturer beep code chart</td>
</tr>
</table>
</div>

<div style="background-color: white; padding: 15px; border-radius: 5px; border-left: 5px solid #FF6B6B;">
<h4>🌐 Network Problems</h4>
<table style="width: 100%; border-collapse: collapse;">
<tr>
<th style="padding: 5px; text-align: left;">Symptom</th>
<th style="padding: 5px; text-align: left;">Command</th>
<th style="padding: 5px; text-align: left;">What it tells you</th>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">"No Internet"</td>
<td style="padding: 5px; border: 1px solid #ddd;">ping 127.0.0.1</td>
<td style="padding: 5px; border: 1px solid #ddd;">Is TCP/IP working?</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Can't reach specific site</td>
<td style="padding: 5px; border: 1px solid #ddd;">ping google.com</td>
<td style="padding: 5px; border: 1px solid #ddd;">DNS and routing issues</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Slow connection</td>
<td style="padding: 5px; border: 1px solid #ddd;">tracert google.com</td>
<td style="padding: 5px; border: 1px solid #ddd;">Where the delay is</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Can't get IP</td>
<td style="padding: 5px; border: 1px solid #ddd;">ipconfig /release<br>ipconfig /renew</td>
<td style="padding: 5px; border: 1px solid #ddd;">Reset DHCP connection</td>
</tr>
</table>
</div>

<div style="background-color: white; padding: 15px; border-radius: 5px; border-left: 5px solid #50C878;">
<h4>💻 Software Issues</h4>
<table style="width: 100%; border-collapse: collapse;">
<tr>
<th style="padding: 5px; text-align: left;">Problem</th>
<th style="padding: 5px; text-align: left;">Windows Tool</th>
<th style="padding: 5px; text-align: left;">Action</th>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Program not responding</td>
<td style="padding: 5px; border: 1px solid #ddd;">Task Manager (Ctrl+Shift+Esc)</td>
<td style="padding: 5px; border: 1px solid #ddd;">End task, restart program</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Blue Screen (BSOD)</td>
<td style="padding: 5px; border: 1px solid #ddd;">Event Viewer</td>
<td style="padding: 5px; border: 1px solid #ddd;">Check error code, update drivers</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Slow performance</td>
<td style="padding: 5px; border: 1px solid #ddd;">Resource Monitor</td>
<td style="padding: 5px; border: 1px solid #ddd;">Identify CPU/RAM/disk hog</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Can't install software</td>
<td style="padding: 5px; border: 1px solid #ddd;">Administrator rights check</td>
<td style="padding: 5px; border: 1px solid #ddd;">Run as administrator</td>
</tr>
</table>
</div>

<div style="background-color: white; padding: 15px; border-radius: 5px; border-left: 5px solid #FFA500;">
<h4>🗃️ File & Storage Problems</h4>
<table style="width: 100%; border-collapse: collapse;">
<tr>
<th style="padding: 5px; text-align: left;">Issue</th>
<th style="padding: 5px; text-align: left;">Tool</th>
<th style="padding: 5px; text-align: left;">Purpose</th>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">"File not found"</td>
<td style="padding: 5px; border: 1px solid #ddd;">Everything Search</td>
<td style="padding: 5px; border: 1px solid #ddd;">Find files instantly</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">"Disk full"</td>
<td style="padding: 5px; border: 1px solid #ddd;">TreeSize Free</td>
<td style="padding: 5px; border: 1px solid #ddd;">Visualize disk usage</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">Corrupted files</td>
<td style="padding: 5px; border: 1px solid #ddd;">CHKDSK</td>
<td style="padding: 5px; border: 1px solid #ddd;">Check disk for errors</td>
</tr>
<tr>
<td style="padding: 5px; border: 1px solid #ddd;">"Access denied"</td>
<td style="padding: 5px; border: 1px solid #ddd;">Take Ownership</td>
<td style="padding: 5px; border: 1px solid #ddd;">Reset file permissions</td>
</tr>
</table>
</div>
</div>
</div>

<h3>Essential Maintenance Tasks</h3>
<div style="background-color: #fff0e6; padding: 20px; margin: 15px 0; border-radius: 10px;">
<h4>📅 Computer Maintenance Schedule</h4>

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 15px;">

<div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
<h5>🔄 Daily</h5>
<ul style="text-align: left;">
<li>Restart if updates installed</li>
<li>Check for critical updates</li>
<li>Backup important files</li>
<li>Clear browser cache if needed</li>
</ul>
</div>

<div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
<h5>📆 Weekly</h5>
<ul style="text-align: left;">
<li>Run antivirus scan</li>
<li>Clean keyboard & screen</li>
<li>Organize desktop files</li>
<li>Empty Recycle Bin</li>
<li>Check disk space</li>
</ul>
</div>

<div style="background: white; padding: 15px; border-radius: 5px; text-align: center;">
<h5>📅 Monthly</h5>
<ul style="text-align: left;">
<li>Update all software</li>
<li>Clean temporary files</li>
<li>Defragment HDD (if not SSD)</li>
<li>Check backups</li>
<li>Clean physical internals</li>
</ul>
</div>
</div>

<h4>🔧 Step-by-Step Maintenance Procedures</h4>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">

<pre style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; border-left: 4px solid #4A90E2;">
<b>Cleaning Temporary Files (Windows):</b>
1. Press <b>Win + R</b>, type <b>%temp%</b>, press Enter
2. Select all files (Ctrl + A)
3. Delete (Shift + Delete to skip Recycle Bin)
4. Repeat with:
   - <b>temp</b> (in Windows folder)
   - <b>prefetch</b>
   - Browser cache folders

<b>Disk Cleanup Utility:</b>
1. Search for "Disk Cleanup"
2. Select drive (usually C:)
3. Check boxes for:
   - Temporary files
   - Recycle Bin
   - Thumbnails
   - Delivery Optimization Files
4. Click "Clean up system files"
5. Also clean Windows Update files
</pre>

<pre style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; border-left: 4px solid #50C878;">
<b>Managing Startup Programs:</b>
1. Open <b>Task Manager</b> (Ctrl+Shift+Esc)
2. Click <b>Startup</b> tab
3. Sort by "Startup impact"
4. Right-click unnecessary programs
5. Select <b>Disable</b>

<b>Programs to typically disable:</b>
- Spotify/web helper
- Adobe updaters
- Game launchers (unless gaming PC)
- Printer utilities
- Skype/Teams auto-start
- Cloud storage sync (if not needed)

<b>Result:</b> Faster boot times, less RAM usage
</pre>

<pre style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; border-left: 4px solid #FF6B6B;">
<b>Checking System Health:</b>
<b>Command Prompt Diagnostics:</b>
> sfc /scannow
  // Scans and repairs system files

> chkdsk C: /f
  // Checks disk for errors (requires restart)

> DISM /Online /Cleanup-Image /RestoreHealth
  // Fixes Windows image problems

<b>Event Viewer for Errors:</b>
1. Search "Event Viewer"
2. Expand Windows Logs
3. Check:
   - Application (program errors)
   - System (hardware/Windows errors)
   - Security (login/access attempts)
4. Look for red "Error" or yellow "Warning"
</pre>

<pre style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; border-left: 4px solid #FFA500;">
<b>Physical Maintenance:</b>
<b>External Cleaning:</b>
1. Power off and unplug
2. Use microfiber cloth for screen
3. Compressed air for keyboard
4. Isopropyl alcohol for tough stains
5. Never spray liquid directly

<b>Internal Cleaning (Desktop):</b>
1. Open case (check warranty first!)
2. Use compressed air to blow dust:
   - From fans (hold blades still)
   - From heatsinks
   - From power supply vents
3. Check for cable obstructions
4. Ensure all cards are seated properly

<b>Warning:</b> Laptops are harder - consider professional cleaning
</pre>
</div>
</div>

<h3>Office IT Etiquette & Professional Communication</h3>
<div style="background-color: #e8f5e8; padding: 20px; margin: 15px 0; border-radius: 10px;">
<h4>🎭 Roleplaying IT Support Scenarios</h4>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>❌ Bad IT Support Example</h5>
<p><b>User:</b> "My computer is slow."</p>
<p><b>Bad IT:</b> "Did you try restarting it? Everyone knows that."</p>
<p><b>User:</b> "Yes, but it's still slow."</p>
<p><b>Bad IT:</b> "Well, it's probably all those programs you have open. Close some."</p>
<p><b>Result:</b> User feels blamed, problem not solved, relationship damaged.</p>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>✅ Good IT Support Example</h5>
<p><b>User:</b> "My computer is slow."</p>
<p><b>Good IT:</b> "I understand that's frustrating. Let's see what's happening together."</p>
<p><b>Good IT:</b> "First, let me check Task Manager... I see Chrome is using a lot of memory."</p>
<p><b>Good IT:</b> "Have you noticed if it's slow all the time, or just with certain websites?"</p>
<p><b>Result:</b> User feels heard, problem diagnosed, solution found collaboratively.</p>
</div>
</div>

<h4>📞 Professional IT Communication Framework</h4>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
<tr style="background: #4A90E2; color: white;">
<th style="padding: 10px; text-align: left;">Situation</th>
<th style="padding: 10px; text-align: left;">What to Say</th>
<th style="padding: 10px; text-align: left;">What NOT to Say</th>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">User reports problem</td>
<td style="padding: 8px; border: 1px solid #ddd;">"Thank you for reporting this. Let me help you resolve it."</td>
<td style="padding: 8px; border: 1px solid #ddd;">"Again? You just had this problem last week."</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">Need more info</td>
<td style="padding: 8px; border: 1px solid #ddd;">"Can you show me exactly what happens when you try to print?"</td>
<td style="padding: 8px; border: 1px solid #ddd;">"What did you do wrong?"</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">Found solution</td>
<td style="padding: 8px; border: 1px solid #ddd;">"I found the issue. The printer driver needed updating."</td>
<td style="padding: 8px; border: 1px solid #ddd;">"It was a simple fix. You should have known that."</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">Need time to fix</td>
<td style="padding: 8px; border: 1px solid #ddd;">"This will take about 30 minutes. I'll update you at 3 PM."</td>
<td style="padding: 8px; border: 1px solid #ddd;">"I'm busy. I'll get to it when I can."</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">Problem solved</td>
<td style="padding: 8px; border: 1px solid #ddd;">"All set! Let me know if you have any other issues."</td>
<td style="padding: 8px; border: 1px solid #ddd;">"Finally fixed. Don't break it again."</td>
</tr>
</table>
</div>

<h3>Today's Hands-On Exercises</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">

<div style="background: white; padding: 15px; border-radius: 5px;">
<h4>🛠️ Exercise 1: Diagnostic Drills (60 minutes)</h4>
<p><b>Setup:</b> Instructor introduces 5 "broken" computers with common issues:</b></p>
<ol>
<li>Computer won't boot (loose power cable)</li>
<li>No internet (IP conflict)</li>
<li>Blue screen on startup (faulty RAM simulation)</li>
<li>Printer not working (wrong default printer)</li>
<li>Application crashing (corrupted user profile)</li>
</ol>
<p><b>Task:</b> Work in pairs to diagnose and fix each issue using systematic troubleshooting.</p>
<p><b>Deliverable:</b> Troubleshooting report documenting:
- Symptoms observed
- Steps taken
- Root cause found
- Solution applied
- Time to resolve</p>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h4>🎭 Exercise 2: Roleplay Scenarios (60 minutes)</h4>
<p><b>Scenarios:</b> Each pair gets a different user scenario card:</p>
<ol>
<li><b>The Frustrated Executive:</b> "My presentation is in 1 hour and PowerPoint keeps crashing!"</li>
<li><b>The Confused New Hire:</b> "I can't log in and I have training in 5 minutes."</li>
<li><b>The Impatient Salesperson:</b> "The CRM is so slow I'm losing sales!"</li>
<li><b>The Paranoid Accountant:</b> "I think my computer has a virus - I saw a weird popup!"</li>
<li><b>The Detail-Oriented Manager:</b> "Excel formulas aren't calculating correctly since the update."</li>
</ol>
<p><b>Task:</b> One student plays user, one plays IT support. Practice professional communication while solving the problem.</p>
</div>
</div>

<div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
<h4>📋 Exercise 3: Maintenance Checklist Creation (60 minutes)</h4>
<p><b>Task:</b> Create a comprehensive maintenance checklist for:</p>

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 10px;">
<div>
<h5>For Home Users</h5>
<ul>
<li>Weekly backup procedure</li>
<li>Antivirus update schedule</li>
<li>Software update checklist</li>
<li>Physical cleaning guide</li>
<li>Performance optimization steps</li>
</ul>
</div>

<div>
<h5>For Small Business</h5>
<ul>
<li>Employee onboarding IT checklist</li>
<li>Monthly maintenance schedule</li>
<li>Disaster recovery plan basics</li>
<li>Equipment lifecycle management</li>
<li>Vendor contact list</li>
</ul>
</div>

<div>
<h5>For School Lab</h5>
<ul>
<li>Start-of-day checks</li>
<li>Between-class resets</li>
<li>End-of-day shutdown</li>
<li>Weekly deep clean</li>
<li>Inventory management</li>
</ul>
</div>
</div>

<p><b>Format:</b> Create in Word with:
- Clear step-by-step instructions
- Screenshots where helpful
- Estimated time for each task
- Difficulty rating (Beginner/Intermediate/Advanced)
- Safety warnings where applicable</p>
</div>
</div>

<h3>Homework Assignment</h3>
<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
<h4>🏠 Home Computer Health Assessment</h4>

<p><b>Objective:</b> Perform a complete health check on your home computer and create a "Computer Health Report."</p>

<p><b>Part 1: System Analysis (1 hour)</b></p>
<ol>
<li>Run and document these diagnostics:
   - System Information (OS version, RAM, processor)
   - Disk space analysis (how full is each drive?)
   - Startup program audit (what launches automatically?)
   - Installed software inventory (what's installed, when updated?)
   - Network speed test (download/upload/ping)</li>
<li>Take screenshots of:
   - Task Manager Performance tab
   - Disk Cleanup recommended files
   - Windows Update history
   - Antivirus status</li>
</ol>

<p><b>Part 2: Problem Identification (1 hour)</b></p>
<ol>
<li>Identify at least 3 "issues" that need attention:
   - Performance bottlenecks
   - Security vulnerabilities
   - Outdated software
   - Organizational problems (messy files, etc.)
   - Hardware concerns (age, warnings, etc.)</li>
<li>Prioritize issues by:
   - Security risk (High/Medium/Low)
   - Performance impact (High/Medium/Low)
   - Difficulty to fix (Easy/Medium/Hard)
   - Cost to fix ($0, <$50, >$50)</li>
</ol>

<p><b>Part 3: Action Plan Creation (1 hour)</b></p>
<ol>
<li>Create a 30-day improvement plan with:
   - Immediate fixes (Day 1)
   - Weekly maintenance tasks (Week 1-4)
   - One-time improvements (schedule when)
   - Budget requirements (if any)</li>
<li>Design a maintenance calendar with:
   - Daily quick checks (2 minutes)
   - Weekly tasks (15 minutes)
   - Monthly deep clean (1 hour)
   - Quarterly reviews (2 hours)</li>
</ol>

<p><b>Part 4: Professional Report (1 hour)</b></p>
<p>Compile everything into a professional Word document with:
- Cover page
- Executive summary
- Detailed findings with screenshots
- Prioritized action plan
- Maintenance calendar
- Appendices (raw data, references, tools used)</p>

<p><b>Bonus Challenge:</b> Implement your 30-day plan and report on the improvements in performance, security, and organization.</p>
</div>

<h3>Key Learning Points</h3>
<ol>
    <li><b>Systematic Approach:</b> Always follow a methodical troubleshooting process</li>
    <li><b>Documentation:</b> Track everything you try - saves time next time</li>
    <li><b>Communication Skills:</b> Technical skill + people skills = great IT support</li>
    <li><b>Preventive Maintenance:</b> Regular care prevents most major problems</li>
    <li><b>Tool Mastery:</b> Know which tool to use for which problem</li>
    <li><b>Professionalism:</b> How you handle problems matters as much as fixing them</li>
</ol>

<div style="background-color: #e8f5e8; padding: 15px; margin: 20px 0; border-radius: 5px;">
<h3>💡 Troubleshooting & Maintenance Best Practices:</h3>
    <ul>
        <li><b>Start Simple:</b> 80% of problems are solved with restart or cable check</li>
        <li><b>One Change at a Time:</b> If you make multiple changes, you won't know what worked</li>
        <li><b>Google Smart:</b> Use specific error codes and symptoms in searches</li>
        <li><b>Create Restore Points:</b> Before major changes, create a system restore point</li>
        <li><b>Know Your Limits:</b> Some problems need professional help - know when to refer</li>
        <li><b>Build a Toolkit:</b> Both physical (screwdrivers, cables) and digital (diagnostic software)</li>
        <li><b>Practice Empathy:</b> Users are frustrated by the problem, not by you (usually!)</li>
        <li><b>Continuous Learning:</b> Technology changes - stay updated on new troubleshooting methods</li>
    </ul>
</div>

<div style="background-color: #d4edda; padding: 15px; margin: 20px 0; border-radius: 5px; border-left: 5px solid #28a745;">
<h4>🛡️ Quick Reference: Emergency Fixes for Common Problems</h4>
    <table style="width: 100%; border-collapse: collapse;">
            <tr>
            <th style="padding: 8px; border: 1px solid #ddd;">Problem</th>
            <th style="padding: 8px; border: 1px solid #ddd;">First Thing to Try</th>
            <th style="padding: 8px; border: 1px solid #ddd;">If That Doesn't Work</th>
            </tr>
            <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Computer won't start</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check power cable and outlet</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Try different power cable, check PSU</td>
            </tr>
            <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">No internet</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Restart router/modem</td>
            <td style="padding: 8px; border: 1px solid #ddd;">ipconfig /release, /renew, check DNS</td>
            </tr>
            <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Blue screen</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Note error code, restart</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Safe mode, update drivers, check RAM</td>
            </tr>
            <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Slow performance</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Restart, check Task Manager</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Disable startup programs, run Disk Cleanup</td>
            </tr>
            <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Can't print</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Check if printer is on/online</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Restart print spooler, reinstall driver</td>
            </tr>
    </table>
</div>
`
            },
            "8-4": {
                "icon": "fa-graduation-cap",
                "title": "Final Exam & Portfolio Presentation",
                "html": `<h1>Week 8, Day 4: Final Exam & Portfolio Presentation</h1>
<p>Today we consolidate 8 weeks of learning through comprehensive assessment and professional portfolio presentation.</p>

<div class="analogy-box">
    <b>Analogy: The Construction Project Final Inspection 🏗️</b><br/>
    
    Foundation: Weeks 1-2 (Hardware, OS, Networking)<br/>
    Structure: Weeks 3-4 (Word Mastery)<br/>
    Systems: Weeks 5-6 (Excel Analysis)<br/>
    Finishing: Week 7 (PowerPoint, Web, Email)<br/>
    Inspection: Today (Final Exam)<br/>
    Handover: Portfolio Presentation
</div>

<h3>Final Exam Structure</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">
    <h4>📝 Exam Format & Logistics</h4>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; margin-top: 15px; text-align: center;">
        <div style="background: white; padding: 15px; border-radius: 5px; border-top: 5px solid #4A90E2;">
            <h5>⏱️ Duration</h5>
            <p style="font-size: 1.5em; font-weight: bold;">3 Hours</p>
            <p>2 hours exam<br>1 hour presentations</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-top: 5px solid #FF6B6B;">
            <h5>📊 Sections</h5>
            <p style="font-size: 1.5em; font-weight: bold;">5 Parts</p>
            <p>Theory + Practical<br>+ Presentation</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-top: 5px solid #50C878;">
            <h5>🎯 Passing Score</h5>
            <p style="font-size: 1.5em; font-weight: bold;">70%</p>
            <p>Each section must be<br>completed</p>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 5px; border-top: 5px solid #FFA500;">
            <h5>📚 Materials</h5>
            <p style="font-size: 1.5em; font-weight: bold;">Open Book</p>
            <p>Notes allowed<br>Internet for research</p>
        </div>
    </div>
    
    <div style="margin-top: 20px; padding: 15px; background: #fff3cd; border-radius: 5px;">
        <h5>🎯 Exam Rules & Expectations:</h5>
        <ol>
            <li><b>Start Time:</b> 9:00 AM sharp - late arrivals get reduced time</li>
            <li><b>Submission:</b> All files must be saved in "Final_Exam_[YourName]" folder</li>
            <li><b>Naming:</b> Files must follow naming conventions: Part1_Task1_YourName.docx</li>
            <li><b>Backup:</b> Save frequently - technical issues are not an excuse</li>
            <li><b>Honor Code:</b> You may use notes and research, but no direct copying</li>
            <li><b>Presentation:</b> Dress professionally for afternoon presentations</li>
        </ol>
    </div>
</div>

<h3>Part 1: Hardware & Operating Systems (30 minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">

<div style="background-color: white; padding: 15px; border-radius: 5px;">
<h4>🔧 Task 1: Hardware Identification & Pricing</h4>
<p><b>Scenario:</b> A small business needs to upgrade their office computers. You have a budget of $800 per computer.</p>

<pre style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">
<b>Current Specs (to be upgraded):</b>
- Intel Core i3-7100 Processor
- 4GB DDR4 RAM
- 500GB HDD (5400 RPM)
- Integrated Graphics
- 300W Power Supply

<b>Required Performance:</b>
- Run Windows 11 Pro smoothly
- Handle Microsoft Office Suite + 10 browser tabs
- Support dual monitors
- Fast boot and file access
- 5-year lifespan

<b>Your Tasks:</b>
1. Research and create a upgrade parts list within budget
2. Justify each component choice
3. Create a comparison table showing old vs new specs
4. Estimate installation time
5. Identify potential compatibility issues
</pre>

<p><b>Deliverable:</b> Excel spreadsheet with:
- Part names and specifications
- Prices and sources (real websites)
- Total cost calculation
- Upgrade priority ranking</p>
</div>

<div style="background-color: white; padding: 15px; border-radius: 5px;">
<h4>💻 Task 2: System Diagnostics</h4>
<p><b>Scenario:</b> A user reports their computer is "extremely slow." Perform a complete system analysis.</p>

<pre style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">
<b>Using Command Prompt:</b>
> systeminfo
  // Capture and save output to text file

> wmic diskdrive get model,size,status
  // Document storage devices

> wmic memorychip get capacity,speed,manufacturer
  // Document RAM specifications

<b>Using GUI Tools:</b>
1. Open Task Manager → Performance tab
   - Take screenshot of CPU, Memory, Disk, Network
   - Identify any bottlenecks

2. Open Resource Monitor
   - Document top 5 processes by CPU usage
   - Document top 5 processes by Memory usage

3. Check Windows Update history
   - List last 10 updates installed
   - Note any failed updates

<b>Diagnosis Report:</b>
Write a 200-word summary identifying:
- Likely causes of slowness
- Recommended fixes (immediate and long-term)
- Estimated time to implement
</pre>
</div>
</div>
</div>

<h3>Part 2: File Management & Networking (30 minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">

<div style="background-color: white; padding: 15px; border-radius: 5px;">
<h4>📁 Task 3: Complex File Management</h4>
<p><b>Scenario:</b> Organize a messy "Downloads" folder with 50+ mixed files.</p>

<pre style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">
<b>Starting Folder Structure:</b>
Downloads/
├── invoice_jan.pdf
├── vacation_photo1.jpg
├── project_data.xlsx
├── presentation_final.pptx
├── client_contract.docx
├── software_setup.exe
├── music_playlist.mp3
├── budget_q1.xlsx
├── team_photo.png
└── (40+ more mixed files...)

<b>Required Structure:</b>
Downloads/
├── 01_Documents/
│   ├── Invoices/
│   ├── Contracts/
│   └── Reports/
├── 02_Media/
│   ├── Photos/
│   ├── Music/
│   └── Videos/
├── 03_Work/
│   ├── Projects/
│   ├── Presentations/
│   └── Data/
├── 04_Software/
│   ├── Installers/
│   └── Updates/
└── 05_Archive/
    ├── 2023/
    └── Old_Files/

<b>Rules:</b>
1. Use CMD commands for at least 50% of operations
2. Files must be organized by type AND date
3. Create batch file to automate organization
4. Archive files older than 6 months
5. Remove duplicate files
</pre>

<p><b>Deliverable:</b> 
1. Screenshot of final organized structure
2. Batch file with organization commands
3. Text file explaining your organization logic</p>
</div>

<div style="background-color: white; padding: 15px; border-radius: 5px;">
<h4>🌐 Task 4: Network Troubleshooting</h4>
<p><b>Scenario:</b> Small office with 5 computers suddenly lost internet connectivity.</p>

<pre style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">
<b>Network Layout:</b>
Internet → Modem → Router → Switch → 5 Computers
                            → Wireless → 3 Laptops
                            → Printer

<b>Symptoms:</b>
- Desktop PCs: No internet
- Laptops: Intermittent Wi-Fi
- Printer: Offline
- Phones: Can't connect to Wi-Fi

<b>Troubleshooting Steps Required:</b>
1. Document network configuration using ipconfig /all
2. Test connectivity at each point:
   - Can computers ping router?
   - Can router ping modem?
   - Can modem ping ISP?

3. Check for IP conflicts
4. Verify DHCP is working
5. Test DNS resolution
6. Check for MAC filtering
7. Test with wired vs wireless

<b>Create Troubleshooting Flowchart:</b>
Design a decision tree flowchart in Word that:
- Starts with symptom "No Internet"
- Has branches for different possible causes
- Leads to specific diagnostic steps
- Ends with solutions
</pre>

<p><b>Deliverable:</b>
1. Network diagnosis report
2. Troubleshooting flowchart (Word or Visio)
3. Step-by-step fix procedure</p>
</div>
</div>
</div>

<h3>Part 3: Microsoft Word Business Document (45 minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="background-color: white; padding: 20px; border-radius: 5px;">
<h4>📄 Task 5: Professional Business Proposal</h4>
<p><b>Scenario:</b> Create a business proposal for "Tech Solutions Inc." to provide IT support to "City Elementary School."</p>

<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
<tr style="background: #4A90E2; color: white;">
<th style="padding: 10px; text-align: left;">Section</th>
<th style="padding: 10px; text-align: left;">Requirements</th>
<th style="padding: 10px; text-align: left;">Word Features to Use</th>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">Cover Page</td>
<td style="padding: 8px; border: 1px solid #ddd;">Company logo, title, date, confidential notice</td>
<td style="padding: 8px; border: 1px solid #ddd;">Page borders, watermark, header/footer</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">Table of Contents</td>
<td style="padding: 8px; border: 1px solid #ddd;">Auto-generated with page numbers</td>
<td style="padding: 8px; border: 1px solid #ddd;">Styles, TOC field, leader dots</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">Executive Summary</td>
<td style="padding: 8px; border: 1px solid #ddd;">1-page overview with key points</td>
<td style="padding: 8px; border: 1px solid #ddd;">Columns, text boxes, shading</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">Services Table</td>
<td style="padding: 8px; border: 1px solid #ddd;">Comparison of 3 service packages</td>
<td style="padding: 8px; border: 1px solid #ddd;">3-column table, cell merging, borders</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">Timeline</td>
<td style="padding: 8px; border: 1px solid #ddd;">Gantt chart of 6-month implementation</td>
<td style="padding: 8px; border: 1px solid #ddd;">SmartArt, shapes, alignment</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">Budget</td>
<td style="padding: 8px; border: 1px solid #ddd;">Itemized costs with totals</td>
<td style="padding: 8px; border: 1px solid #ddd;">Table formulas, number formatting</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">Appendices</td>
<td style="padding: 8px; border: 1px solid #ddd;">Team bios, references, terms</td>
<td style="padding: 8px; border: 1px solid #ddd;">Section breaks, different headers</td>
</tr>
</table>

<p><b>Specific Requirements:</b></p>
<ol>
<li><b>Page Layout:</b> Different margins for first page, page numbers in footer</li>
<li><b>Styles:</b> Custom styles for headings, subheadings, quotes, captions</li>
<li><b>Graphics:</b> At least 2 relevant images with captions and text wrapping</li>
<li><b>References:</b> Footnotes for sources, bibliography if needed</li>
<li><b>Professionalism:</b> Consistent fonts, proper spacing, no spelling errors</li>
<li><b>File Size:</b> Document must be under 5MB</li>
</ol>

<p><b>Deliverable:</b> "Business_Proposal_YourName.docx" (8-10 pages)</p>
</div>
</div>

<h3>Part 4: Microsoft Excel Data Analysis (45 minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="background-color: white; padding: 20px; border-radius: 5px;">
<h4>📊 Task 6: Sales Dashboard Creation</h4>
<p><b>Scenario:</b> Analyze annual sales data and create an executive dashboard.</p>

<pre style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">
<b>Provided Data (in raw_data.xlsx):</b>
1. Monthly sales for 12 months (500+ transactions)
2. Product categories (Electronics, Furniture, Office Supplies)
3. Sales representatives (10 people)
4. Regions (North, South, East, West)
5. Customer ratings (1-5 stars)
6. Return data (which products were returned)

<b>Dashboard Requirements:</b>
Create a new workbook "Sales_Dashboard_YourName.xlsx" with:

<b>Sheet 1: Summary Dashboard</b>
- KPI cards: Total Sales, Average Sale, Growth %, Return Rate
- Interactive filters: Month, Region, Product Category
- Top 5 products by revenue
- Worst 5 products by returns

<b>Sheet 2: Monthly Analysis</b>
- Pivot table showing monthly trends
- Line chart: Sales vs Returns over time
- Calculated fields: Profit Margin, Growth Rate

<b>Sheet 3: Regional Performance</b>
- Map-style visualization (using shapes or conditional formatting)
- Regional comparison table
- Pie chart: Market share by region

<b>Sheet 4: Sales Team Analysis</b>
- Commission calculations (5% of sales over target)
- Performance ranking
- Stacked bar chart: Each rep's sales by category

<b>Sheet 5: Customer Insights</b>
- Average rating by product category
- Correlation between rating and returns
- Customer segmentation (High/Low value)

<b>Advanced Features Required:</b>
1. At least 5 different chart types
2. Data validation for all inputs
3. Conditional formatting for thresholds
4. VLOOKUP or XLOOKUP for data consolidation
5. IF statements for categorization
6. Pivot tables with slicers
7. Named ranges for key metrics
</pre>

<p><b>Deliverable:</b> Fully functional Excel dashboard workbook with all sheets</p>
</div>
</div>

<h3>Part 5: Portfolio Presentation Preparation (30 minutes)</h3>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">

<div style="background-color: white; padding: 20px; border-radius: 5px;">
<h4>🎤 Task 7: Professional Presentation Creation</h4>
<p><b>Scenario:</b> Present your IT Foundation learning journey to potential employers.</p>

<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
<tr style="background: #4A90E2; color: white;">
<th style="padding: 10px; text-align: left;">Slide #</th>
<th style="padding: 10px; text-align: left;">Content</th>
<th style="padding: 10px; text-align: left;">Time</th>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">1</td>
<td style="padding: 8px; border: 1px solid #ddd;">Title slide: Your name, course, date</td>
<td style="padding: 8px; border: 1px solid #ddd;">30 seconds</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">2</td>
<td style="padding: 8px; border: 1px solid #ddd;">Learning journey overview (timeline)</td>
<td style="padding: 8px; border: 1px solid #ddd;">1 minute</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">3-4</td>
<td style="padding: 8px; border: 1px solid #ddd;">Key skills mastered (with icons/visuals)</td>
<td style="padding: 8px; border: 1px solid #ddd;">2 minutes</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">5-6</td>
<td style="padding: 8px; border: 1px solid #ddd;">Showcase: Best work samples</td>
<td style="padding: 8px; border: 1px solid #ddd;">3 minutes</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">7</td>
<td style="padding: 8px; border: 1px solid #ddd;">Real-world application: How you used skills</td>
<td style="padding: 8px; border: 1px solid #ddd;">1 minute</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">8</td>
<td style="padding: 8px; border: 1px solid #ddd;">Challenges overcome & lessons learned</td>
<td style="padding: 8px; border: 1px solid #ddd;">1 minute</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">9</td>
<td style="padding: 8px; border: 1px solid #ddd;">Future learning goals</td>
<td style="padding: 8px; border: 1px solid #ddd;">30 seconds</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">10</td>
<td style="padding: 8px; border: 1px solid #ddd;">Q&A slide</td>
<td style="padding: 8px; border: 1px solid #ddd;">-</td>
</tr>
</table>

<p><b>Presentation Requirements:</b></p>
<ol>
<li><b>Design:</b> Professional template, consistent colors, readable fonts</li>
<li><b>Content:</b> No bullet-point overload - use visuals instead</li>
<li><b>Animation:</b> Subtle transitions and builds (not distracting)</li>
<li><b>Multimedia:</b> Include at least one embedded video/screenshot demo</li>
<li><b>Delivery:</b> Practice to fit exactly 10 minutes</li>
<li><b>Handout:</b> Create 1-page summary PDF for distribution</li>
</ol>

<p><b>Technical Requirements:</b></p>
<ul>
<li>Use Slide Master for consistency</li>
<li>Include speaker notes for each slide</li>
<li>Set up automatic slide timing for rehearsal</li>
<li>Create custom animations for key points</li>
<li>Use presenter view during presentation</li>
</ul>

<p><b>Deliverable:</b> "Portfolio_Presentation_YourName.pptx" (10 slides)</p>
</div>
</div>

<h3>Presentation Schedule & Evaluation</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">

<div>
<h4>📅 Presentation Schedule (Afternoon Session)</h4>
<table style="width: 100%; border-collapse: collapse;">
<tr style="background: #4A90E2; color: white;">
<th style="padding: 10px; text-align: left;">Time</th>
<th style="padding: 10px; text-align: left;">Activity</th>
<th style="padding: 10px; text-align: left;">Duration</th>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">1:00 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Welcome & Instructions</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">1:10 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Student 1 Presentation</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min + 5 min Q&A</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">1:25 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Student 2 Presentation</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min + 5 min Q&A</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">1:40 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Student 3 Presentation</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min + 5 min Q&A</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">1:55 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Short Break</td>
<td style="padding: 8px; border: 1px solid #ddd;">5 min</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">2:00 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Student 4 Presentation</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min + 5 min Q&A</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">2:15 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Student 5 Presentation</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min + 5 min Q&A</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">2:30 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Student 6 Presentation</td>
<td style="padding: 8px; border: 1px solid #ddd;">10 min + 5 min Q&A</td>
</tr>
<tr style="background: #f8f9fa;">
<td style="padding: 8px; border: 1px solid #ddd;">2:45 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Break & Preparation</td>
<td style="padding: 8px; border: 1px solid #ddd;">15 min</td>
</tr>
<tr style="background: white;">
<td style="padding: 8px; border: 1px solid #ddd;">3:00 PM</td>
<td style="padding: 8px; border: 1px solid #ddd;">Certificate Ceremony</td>
<td style="padding: 8px; border: 1px solid #ddd;">30 min</td>
</tr>
</table>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h4>📋 Evaluation Rubric</h4>
<p><b>Technical Skills (40%)</b></p>
<ul>
<li>Software proficiency: 10%</li>
<li>Problem solving: 10%</li>
<li>Accuracy: 10%</li>
<li>Efficiency: 10%</li>
</ul>

<p><b>Presentation (40%)</b></p>
<ul>
<li>Content quality: 10%</li>
<li>Delivery: 10%</li>
<li>Visual design: 10%</li>
<li>Time management: 10%</li>
</ul>

<p><b>Professionalism (20%)</b></p>
<ul>
<li>Dress code: 5%</li>
<li>Communication: 5%</li>
<li>Preparation: 5%</li>
<li>Q&A handling: 5%</li>
</ul>

<p><b>Total: 100%</b></p>
<p>Passing: 70%+<br>
Honors: 90%+</p>
</div>
</div>
</div>

<h3>Portfolio Submission Requirements</h3>
<div style="background-color: #fff0e6; padding: 20px; margin: 15px 0; border-radius: 10px;">

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; text-align: center;">

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>📁 Folder Structure</h5>
<pre style="text-align: left; background: #f5f5f5; padding: 10px;">
Final_Portfolio_YourName/
├── 00_Final_Exam/
│   ├── Part1_Hardware/
│   ├── Part2_Networking/
│   ├── Part3_Word/
│   ├── Part4_Excel/
│   └── Part5_PPT/
├── 01_Best_Work/
│   ├── Hardware_Analysis/
│   ├── Network_Diagrams/
│   ├── Word_Documents/
│   ├── Excel_Sheets/
│   └── Presentations/
├── 02_Certificates/
│   ├── IT_Foundation.pdf
│   └── Additional_Certs/
└── 03_Reflection/
    ├── Learning_Journal.docx
    └── Future_Goals.pdf
</pre>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>📄 Required Documents</h5>
<ul style="text-align: left;">
<li>Resume (updated with course skills)</li>
<li>Cover letter template</li>
<li>Professional email templates</li>
<li>Reference list</li>
<li>Skills inventory spreadsheet</li>
<li>Project case studies (3 minimum)</li>
<li>Learning reflection essay</li>
<li>Career action plan</li>
</ul>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>🎯 Quality Checklist</h5>
<ul style="text-align: left;">
<li>✓ All files properly named</li>
<li>✓ No spelling/grammar errors</li>
<li>✓ Consistent formatting</li>
<li>✓ Professional appearance</li>
<li>✓ All links work</li>
<li>✓ File sizes optimized</li>
<li>✓ Backup copies exist</li>
<li>✓ Readme file included</li>
</ul>
</div>
</div>

<h4>📦 Portfolio Submission Instructions</h4>
<ol>
<li><b>Compress:</b> Zip entire folder as "Portfolio_YourName.zip"</li>
<li><b>Size:</b> Must be under 50MB (compress images if needed)</li>
<li><b>Submit:</b> Upload to Google Drive/OneDrive and share link</li>
<li><b>Email:</b> Send submission email with:
   - Subject: "IT Foundation Portfolio - [Your Name]"
   - Body: Professional message with link
   - Attachment: Resume PDF
   - Signature: Professional email signature</li>
<li><b>Deadline:</b> 5:00 PM today - no exceptions</li>
</ol>
</div>

<h3>Certificate Ceremony & Next Steps</h3>
<div style="background-color: #e8f5e8; padding: 20px; margin: 15px 0; border-radius: 10px;">

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">

<div>
<h4>🏆 Certificate Details</h4>
<p><b>IT Foundation Certificate Includes:</b></p>
<ul>
<li>Student name and photo</li>
<li>Course completion date</li>
<li>Instructor signature</li>
<li>Institution seal</li>
<li>Unique certificate number</li>
<li>QR code for verification</li>
<li>List of mastered skills</li>
<li>Grade/Score achieved</li>
</ul>

<p><b>Digital Badges Also Awarded:</b></p>
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-top: 10px;">
<div style="background: #4A90E2; color: white; padding: 10px; border-radius: 5px; text-align: center;">
<h5>🖥️ Hardware Pro</h5>
<p>Diagnose & upgrade systems</p>
</div>
<div style="background: #50C878; color: white; padding: 10px; border-radius: 5px; text-align: center;">
<h5>📊 Excel Analyst</h5>
<p>Data analysis & visualization</p>
</div>
<div style="background: #FF6B6B; color: white; padding: 10px; border-radius: 5px; text-align: center;">
<h5>🔧 Troubleshooter</h5>
<p>System diagnostics & repair</p>
</div>
</div>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h4>🚀 Next Steps</h4>
<p><b>Immediate (Next Week):</b></p>
<ul>
<li>Update LinkedIn profile</li>
<li>Request recommendations</li>
<li>Apply for 3 IT positions</li>
<li>Join local IT meetup</li>
</ul>

<p><b>Short-term (1-3 months):</b></p>
<ul>
<li>CompTIA A+ certification</li>
<li>Microsoft Office Specialist</li>
<li>Build home lab</li>
<li>Freelance projects</li>
</ul>

<p><b>Long-term (6-12 months):</b></p>
<ul>
<li>Network+ certification</li>
<li>Help Desk position</li>
<li>Specialization choice</li>
<li>Advanced courses</li>
</ul>
</div>
</div>

<h4>🎓 Graduation Speech Points</h4>
<div style="background: white; padding: 15px; border-radius: 5px; margin-top: 15px;">
<p><b>Instructor's Key Messages:</b></p>
<ol>
<li><b>Congratulations:</b> Recognize the hard work and dedication</li>
<li><b>Skills Validation:</b> These are real, marketable skills</li>
<li><b>Community:</b> You're now part of the IT professional community</li>
<li><b>Growth Mindset:</b> This is just the beginning of your learning journey</li>
<li><b>Networking:</b> Stay connected with classmates and instructors</li>
<li><b>Confidence:</b> You have the foundation to solve real IT problems</li>
<li><b>Support:</b> Continued access to resources and mentorship</li>
</ol>

<p><b>Student Recognition:</b></p>
<ul>
<li>Perfect Attendance Awards</li>
<li>Most Improved Student</li>
<li>Best Project Award</li>
<li>Technical Excellence Award</li>
<li>Team Player Award</li>
</ul>
</div>
</div>

<h3>Final Preparation Checklist</h3>
<div style="background-color: #f0f8ff; padding: 20px; margin: 15px 0; border-radius: 10px;">

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>🌅 Morning (Before Exam)</h5>
<ol>
<li>✅ Good night's sleep (7-8 hours)</li>
<li>✅ Healthy breakfast</li>
<li>✅ Arrive 30 minutes early</li>
<li>✅ Bring: Water, snacks, charger</li>
<li>✅ Test computer login</li>
<li>✅ Backup all files</li>
<li>✅ Review key concepts</li>
<li>✅ Mental preparation</li>
</ol>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>🌞 During Exam</h5>
<ol>
<li>✅ Read all instructions first</li>
<li>✅ Manage time: 30 min per section</li>
<li>✅ Save frequently (Ctrl+S)</li>
<li>✅ Answer what you know first</li>
<li>✅ Check work before submission</li>
<li>✅ Stay calm if stuck - move on</li>
<li>✅ Hydrate and stretch</li>
<li>✅ Submit 5 minutes early</li>
</ol>
</div>

<div style="background: white; padding: 15px; border-radius: 5px;">
<h5>🌆 Afternoon (Presentation)</h5>
<ol>
<li>✅ Professional attire</li>
<li>✅ Test presentation equipment</li>
<li>✅ Practice aloud one more time</li>
<li>✅ Prepare for questions</li>
<li>✅ Bring printed notes</li>
<li>✅ Smile and breathe</li>
<li>✅ Make eye contact</li>
<li>✅ Enjoy the moment!</li>
</ol>
</div>
</div>

<div style="background: #d4edda; padding: 15px; margin-top: 15px; border-radius: 5px; border-left: 5px solid #28a745;">
<h4>🎯 Last-Minute Technical Tips</h4>
<ul>
<li><b>Keyboard Shortcuts Review:</b> Win+E, Win+D, Ctrl+S, Alt+Tab, F5 (refresh), Ctrl+Z</li>
<li><b>File Management:</b> Use "Save As" frequently with version numbers</li>
<li><b>Troubleshooting:</b> If software crashes, restart it immediately</li>
<li><b>Time Management:</b> Set phone timer for each section</li>
<li><b>Backup Strategy:</b> Save to desktop AND cloud service</li>
<li><b>Presentation Mode:</b> Test presenter view before your turn</li>
<li><b>Emergency Plan:</b> Know who to ask if computer fails</li>
</ul>
</div>
</div>

<div style="background-color: #4A90E2; color: white; padding: 25px; margin: 20px 0; border-radius: 10px; text-align: center;">
<h2>🎓 Congratulations on Completing the IT Foundation Course! 🎓</h2>
<p style="font-size: 1.2em;">You've built a solid foundation in IT skills that will serve you for years to come.</p>
<p><b>Remember:</b> This is not the end, but the beginning of your IT journey.</p>
<p style="margin-top: 15px;">📧 <b>Stay in touch:</b> instructor@email.com | 📱 <b>LinkedIn Group:</b> IT Foundation Alumni</p>
<p>👥 <b>Network:</b> Exchange contacts with classmates | 📚 <b>Continue Learning:</b> Recommended resources provided</p>
</div>

<div style="text-align: center; margin-top: 30px;">
<button style="background-color: #50C878; color: white; border: none; padding: 15px 30px; font-size: 1.2em; border-radius: 5px; cursor: pointer;">
    🎉 Click Here to Begin Your Final Exam! 🎉
</button>
<p style="margin-top: 10px; color: #666;"><i>You have 3 hours. Good luck!</i></p>
</div>
`
            },

        };


        function showDashboard() {
            const display = document.getElementById('main-content');
            // Remove active class from all sidebar items
            document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));

            let gridHtml = `<h1>IT Foundation Curriculum Overview</h1><p>Select a topic to view the lesson plan.</p><div class="topic-grid">`;

            for (const key in contentData) {
                gridHtml += `
            <div class="grid-card" onclick="loadContent(${key.split('-')[0]}, ${key.split('-')[1]})">
                <i class="fa-solid ${contentData[key].icon}"></i>
                <span>${contentData[key].title}</span>
            </div>`;
            }

            gridHtml += `</div>`;
            display.innerHTML = gridHtml;
        }

        function loadContent(week, day) {
            const key = week + "-" + day;
            const data = contentData[key];
            const display = document.getElementById('main-content');

            // Update active UI sidebar state
            document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));
            const activeNav = document.getElementById('nav-' + key);
            if (activeNav) activeNav.classList.add('active');

            // Load content or show "Coming Soon"
            if (data) {
                display.innerHTML = data.html;
            } else {
                display.innerHTML = `<h1>Coming Soon</h1><p>The content for Week ${week} Day ${day} is being finalized.</p>`;
            }
            display.scrollTop = 0;
        }

        // Initial Load
        window.onload = showDashboard;
    </script>
</body>

</html>