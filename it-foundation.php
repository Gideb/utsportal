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
    <link rel="stylesheet" href="css/style.css">
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
                icon: "fas fa-desktop",
                title: "Desktop Management & Windows Basics",
                html: `<h1>Week 1, Day 1: Desktop Management & Windows Basics</h1>
    <p>Today we'll master the computer environment where all work happens.</p>
    
    <div class="analogy-box">
        <b>Analogy: Your Digital Office 🏢</b><br/>
        
        Desktop: Your physical desk workspace<br/>
        Taskbar: Tray of tools you use every 5 minutes<br/>
        File Explorer: Filing cabinets of your computer<br/>
        Icons: Visual shortcuts to your tools<br/>
        Folders: Drawers to organize your files<br/>
        Shortcuts: Post-it notes that point to tools<br/>
        Recycle Bin: Trash can for deleted files
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Understanding the Desktop Environment</li>
        <li>Taskbar and System Tray Functions</li>
        <li>File Explorer Navigation</li>
        <li>Essential Keyboard Shortcuts</li>
        <li>Creating and Managing Folders</li>
        <li>Personalization Settings</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. The Desktop: Your Primary Workspace</b><br/>
    
    <b>Desktop Components:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Desktop Icons:</b> Visual shortcuts to programs, files, and folders<br/>
        <b>Taskbar:</b> The strip at the bottom (or side) containing:
        <ul>
            <li><b>Start Menu:</b> Gateway to all applications and settings</li>
            <li><b>Pinned Icons:</b> Quick access to frequently used apps</li>
            <li><b>Task View:</b> Virtual desktop management</li>
            <li><b>System Tray:</b> Clock, volume, network, and background apps</li>
        </ul>
        <b>Wallpaper:</b> The background image - customizable for personalization<br/>
        <b>Gadgets/Widgets:</b> Small utility applications on the desktop
    </div>
    
    <b>Essential Keyboard Shortcuts:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Shortcut</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Function</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Purpose</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Win + D</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Show Desktop</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Minimize all windows instantly</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Win + E</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Open File Explorer</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Quick access to files</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Alt + Tab</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Switch Applications</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Navigate between open programs</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Win + Tab</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Task View</td>
            <td style="padding: 10px; border: 1px solid #ddd;">See all open windows</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + Shift + Esc</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Task Manager</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Manage running processes</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Win + R</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Run Dialog</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Quick command execution</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Win + X</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Power User Menu</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Access system tools</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Alt + F4</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Close Application</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Exit current program</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + C / V / X</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Copy/Paste/Cut</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Basic file operations</td>
        </tr>
    </table>
    
    <b>b. File Explorer: The Filing System</b><br/>
    
    <b>Understanding Drives:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>C: Drive:</b> Main internal storage (Operating System lives here)<br/>
        <b>D:, E:, etc.:</b> Additional partitions or drives<br/>
        <b>External Drives:</b> USB drives, External HDDs, SD Cards (appear as new letters)<br/>
        <b>Network Locations:</b> Shared folders on other computers<br/>
        <br/>
        <b>Important Folders:</b><br/>
        • <b>Desktop:</b> Files visible on your desktop<br/>
        • <b>Documents:</b> Default location for personal files<br/>
        • <b>Downloads:</b> Files downloaded from internet<br/>
        • <b>Pictures/Videos/Music:</b> Media-specific folders<br/>
        • <b>This PC:</b> Overview of all storage devices
    </div>
    
    <b>File Explorer Interface:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Navigation Pane:</b> Quick access to folders and drives<br/>
        <b>Address Bar:</b> Shows current location path<br/>
        <b>Search Box:</b> Find files by name or content<br/>
        <b>View Options:</b> Change how files are displayed (Icons, List, Details)<br/>
        <b>Preview Pane:</b> Quick preview of selected files<br/>
        <b>Details Pane:</b> Shows file properties and metadata<br/>
        <b>Ribbon:</b> Contextual tools (Home, Share, View tabs)
    </div>
    
    <hr/>
    
    <b>c. Window Management Techniques</b><br/>
    
    <b>Snap Assist (Windows 10/11):</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Drag to Corners:</b> Drag window to screen edge to snap to half/quarter<br/>
        <b>Win + Arrow Keys:</b> Keyboard snapping control<br/>
        <b>Multiple Desktops:</b> Win + Tab → New Desktop (organize workflows)<br/>
        <br/>
        <b>Snap Layouts:</b><br/>
        • <b>Win + Z:</b> Show available layouts<br/>
        • <b>Two Windows Side-by-Side:</b> Perfect for comparing documents<br/>
        • <b>Four Windows Grid:</b> Great for monitoring multiple applications<br/>
        • <b>Three Windows Layout:</b> Main window with two side references
    </div>
    
    <h3>Practical Lab Session (45 Minutes)</h3>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Exercise 1: Taskbar Customization</b><br/>
        1. Right-click Taskbar → Taskbar Settings<br/>
        2. Toggle "Lock the taskbar"<br/>
        3. Turn ON/OFF "Automatically hide the taskbar"<br/>
        4. Change taskbar location to top or sides<br/>
        5. Customize which icons appear in system tray<br/>
        <br/>
        <b>Exercise 2: File Organization</b><br/>
        1. Open File Explorer (Win + E)<br/>
        2. Navigate to Documents folder<br/>
        3. Create new folder: Right-click → New → Folder<br/>
        4. Name it "IT_Course"<br/>
        5. Inside IT_Course, create "Week_1" folder<br/>
        6. Inside Week_1, create "Practice_Files" folder<br/>
        <br/>
        <b>Exercise 3: Application Pinning</b><br/>
        1. Open Notepad (Win + R → type "notepad")<br/>
        2. Right-click Notepad icon in taskbar<br/>
        3. Select "Pin to taskbar"<br/>
        4. Repeat for Calculator and File Explorer<br/>
        <br/>
        <b>Exercise 4: Desktop Cleanup</b><br/>
        1. Right-click desktop → View → Arrange icons by<br/>
        2. Try different arrangements: Name, Size, Type, Date modified<br/>
        3. Create desktop shortcuts for frequently used applications<br/>
        4. Organize shortcuts into logical groups
    </div>
    
    <h3>Assignment Tasks</h3>
    
    <div class="assignment-box">
        <h4>Main Task: Create a Weekly Organization System</h4>
        
        <b>Requirements:</b>
        <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. In your Documents folder, create a main folder called "Work_Organization"<br/>
            2. Inside it, create 5 folders named:<br/>
            &nbsp;&nbsp;- Monday<br/>
            &nbsp;&nbsp;- Tuesday<br/>
            &nbsp;&nbsp;- Wednesday<br/>
            &nbsp;&nbsp;- Thursday<br/>
            &nbsp;&nbsp;- Friday<br/>
            3. Inside each day folder, create:<br/>
            &nbsp;&nbsp;- A text file named "Daily_Tasks.txt"<br/>
            &nbsp;&nbsp;- A text file named "Meeting_Notes.txt"<br/>
            &nbsp;&nbsp;- A folder named "Resources"<br/>
            4. Customize folder icons for quick visual identification
        </div>
        
        <b>Step-by-Step Guide:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <pre>
                // Creating Text Files:
                1. Right-click in folder → New → Text Document
                2. Name it "Daily_Tasks.txt"
                3. Double-click to open
                4. Add sample content: "1. Check emails\n2. Attend standup meeting\n3. Work on project"
                5. Save and close (Ctrl + S then Alt + F4)
                
                // Creating Folders:
                1. Right-click → New → Folder
                2. Name it "Resources"
                3. Inside Resources, create subfolders: "Images", "Documents", "References"
                
                // Changing Folder Icons:
                1. Right-click Monday folder → Properties
                2. Click "Customize" tab
                3. Click "Change Icon" button
                4. Browse and select a star icon
                5. Click OK, then Apply
            </pre>
        </div>
        
        <b>Challenge Tasks:</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Challenge 1: Desktop Shortcut Mastery</b><br/>
            • Create desktop shortcuts for:<br/>
            &nbsp;&nbsp;- Your Documents folder<br/>
            &nbsp;&nbsp;- The Control Panel<br/>
            &nbsp;&nbsp;- Disk Cleanup utility<br/>
            &nbsp;&nbsp;- Notepad with a specific template<br/>
            <br/>
            <b>Challenge 2: Advanced Taskbar Configuration</b><br/>
            • Move taskbar to top of screen<br/>
            • Enable "Use small taskbar buttons"<br/>
            • Combine taskbar buttons "When taskbar is full"<br/>
            • Add "Toolbars" to taskbar (Address or Desktop)<br/>
            <br/>
            <b>Challenge 3: File Explorer Power User</b><br/>
            • Enable "Show hidden files" in Folder Options<br/>
            • Add "Quick Access" shortcuts to your most used folders<br/>
            • Customize the Quick Access toolbar in File Explorer<br/>
            • Set default view for folders to "Details" view
        </div>
        
        <b>Submission Checklist:</b>
        <ul>
            <li>✅ Organized folder structure created</li>
            <li>✅ All text files with sample content</li>
            <li>✅ Customized folder icons</li>
            <li>✅ Desktop shortcuts created</li>
            <li>✅ Taskbar customized with pinned applications</li>
            <li>✅ File Explorer options configured</li>
        </ul>
    </div>
    
    <h3>Troubleshooting Common Issues</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Problem 1: "My taskbar disappeared!"</b><br/>
        <b>Solution:</b><br/>
        1. Move mouse to screen edge where taskbar should be<br/>
        2. If it appears, right-click taskbar → Taskbar settings<br/>
        3. Turn OFF "Automatically hide the taskbar"<br/>
        4. If still missing, restart Windows Explorer in Task Manager<br/>
        <br/>
        <b>Problem 2: "I can't see file extensions (.txt, .docx)"</b><br/>
        <b>Solution:</b><br/>
        1. Open File Explorer → View tab<br/>
        2. Check "File name extensions" box<br/>
        OR<br/>
        1. File Explorer → Options → View tab<br/>
        2. Uncheck "Hide extensions for known file types"<br/>
        <br/>
        <b>Problem 3: "Desktop icons are too big/small"</b><br/>
        <b>Solution:</b><br/>
        1. Right-click desktop → View<br/>
        2. Choose: Large/Medium/Small icons<br/>
        OR<br/>
        1. Hold Ctrl + Scroll mouse wheel on desktop<br/>
        <br/>
        <b>Problem 4: "I accidentally deleted an important shortcut"</b><br/>
        <b>Solution:</b><br/>
        1. Check Recycle Bin<br/>
        2. Right-click deleted item → Restore<br/>
        3. To recreate: Find original program, right-click → Send to → Desktop
    </div>
    
    <hr/>
    
    <h3>Pro Tips for Productivity</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Tip 1: Master the Search</b><br/>
        • Press Win key and start typing application name<br/>
        • Use File Explorer search with filters: type: .pdf date:thisweek<br/>
        • Search operators: "quotes for exact", OR, AND, NOT<br/>
        <br/>
        <b>Tip 2: Quick Access Customization</b><br/>
        • Pin frequently used folders to Quick Access in File Explorer<br/>
        • Drag folders to Quick Access section in navigation pane<br/>
        • Right-click Quick Access → Options to customize<br/>
        <br/>
        <b>Tip 3: Virtual Desktops for Organization</b><br/>
        • Win + Tab → New Desktop (create separate workspaces)<br/>
        • Desktop 1: Work applications<br/>
        • Desktop 2: Communication tools<br/>
        • Desktop 3: Research/Reference<br/>
        • Move windows between desktops: Win + Tab → drag window<br/>
        <br/>
        <b>Tip 4: Keyboard-Only Navigation</b><br/>
        • Win + 1/2/3: Open pinned taskbar applications<br/>
        • Alt + Space: Window menu (Restore, Move, Size, Minimize, Maximize)<br/>
        • Alt + Enter: Properties of selected item<br/>
        • F2: Rename selected file/folder<br/>
        • F5: Refresh current window
    </div>
    
    <h3>Real-World Application</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Scenario: Office Administrator Setup</b><br/>
        You're setting up a new computer for an office administrator. They need:<br/>
        <br/>
        1. Quick access to daily documents<br/>
        2. Efficient email management<br/>
        3. Calendar and scheduling tools<br/>
        4. Client database access<br/>
        5. Printing and scanning utilities<br/>
        <br/>
        <b>Your Setup Plan:</b><br/>
        • <b>Taskbar Pins:</b> Outlook, Excel, Word, PDF Reader, Printer Control<br/>
        • <b>Desktop Shortcuts:</b> Daily Reports folder, Client Database, Scanner<br/>
        • <b>File Organization:</b> Year → Month → Day folder structure<br/>
        • <b>Quick Access:</b> Templates, Forms, Archives, Client Files<br/>
        • <b>Virtual Desktops:</b> Communications, Documents, Research<br/>
        <br/>
        <b>Time Saved:</b> Approximately 30 minutes daily through efficient organization
    </div>
    
    <hr/>
    
    <div class="knowledge-check">
        <h4>Knowledge Check Quiz</h4>
        
        <b>Question 1:</b> What is the keyboard shortcut to quickly show the desktop?<br/>
        a) Win + E<br/>
        b) Win + D<br/>
        c) Alt + F4<br/>
        d) Ctrl + D<br/>
        <br/>
        <b>Question 2:</b> Which of these is NOT a standard Windows library folder?<br/>
        a) Documents<br/>
        b) Downloads<br/>
        c) Applications<br/>
        d) Pictures<br/>
        <br/>
        <b>Question 3:</b> How do you create a new folder in File Explorer?<br/>
        a) Ctrl + N<br/>
        b) Right-click → New → Folder<br/>
        c) File → New → Folder<br/>
        d) Both b and c<br/>
        <br/>
        <b>Question 4:</b> What does "pinning to taskbar" do?<br/>
        a) Deletes the application<br/>
        b) Creates a permanent shortcut on taskbar<br/>
        c) Moves the application to desktop<br/>
        d) Hides the application<br/>
        <br/>
        <b>Question 5:</b> Which view in File Explorer shows file details like size and date?<br/>
        a) Extra Large Icons<br/>
        b) List<br/>
        c) Tiles<br/>
        d) Details
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
                
        <p><b>Homework Preparation for Day 2:</b><br/>
        1. Explore your computer's System Information (Win + R → msinfo32)<br/>
        2. Take note of your processor type and RAM size<br/>
        3. Identify whether you have HDD or SSD storage<br/>
        4. Practice the keyboard shortcuts learned today<br/>
        5. Organize your personal files using the folder structure techniques</p>
        
        <p><b>Resources for Further Learning:</b><br/>
        • <a href="https://support.microsoft.com/en-us/windows" target="_blank">Microsoft Windows Official Support</a><br/>
        • <a href="https://www.howtogeek.com/" target="_blank">How-To Geek Windows Tips</a><br/>
        • <a href="https://www.pcmag.com/how-to/windows-10-tips" target="_blank">PC Magazine Windows Guides</a></p>
        
        <p><b>Remember:</b> "An organized desktop is the foundation of digital productivity. Spend 10 minutes organizing today to save hours tomorrow!"</p>
    </div>`
            },
            "1-2": {
                icon: "fas fa-microchip",
                title: "Hardware & The Physical Machine",
                html: `<h1>Week 1, Day 2: Hardware & The Physical Machine</h1>
    <p>Today we'll explore what's happening under the computer's "hood" - understanding the physical components that make everything work.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Computer as a Restaurant Kitchen 🍳</b><br/>
        
        CPU: Head Chef (processes all instructions)<br/>
        RAM: Kitchen Counter Space (temporary work area)<br/>
        Storage (HDD/SSD): Pantry/Freezer (permanent storage)<br/>
        Motherboard: Restaurant Floor Plan (connects everything)<br/>
        Power Supply: Electrical System (powers all equipment)<br/>
        GPU: Specialty Chef (handles graphics)<br/>
        Cooling System: Air Conditioning (prevents overheating)<br/>
        Peripherals: Waitstaff (input/output devices)
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Central Processing Unit (CPU) - The Brain</li>
        <li>Random Access Memory (RAM) - Short-term Memory</li>
        <li>Storage Devices (HDD, SSD, NVMe)</li>
        <li>Motherboard - The Central Hub</li>
        <li>Power Supply Unit (PSU)</li>
        <li>Input/Output Devices</li>
        <li>Understanding Specifications</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Central Processing Unit (CPU) - The Brain</b><br/>
    
    <b>What is a CPU?</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Definition:</b> The primary component that executes instructions from computer programs<br/>
        <b>Function:</b> Performs arithmetic, logical, control, and input/output operations<br/>
        <b>Manufacturers:</b> Intel (Core i3/i5/i7/i9), AMD (Ryzen 3/5/7/9), Apple (M-series)<br/>
        <br/>
        <b>Key Specifications:</b><br/>
        • <b>Cores:</b> Independent processing units within a CPU (like having multiple chefs)<br/>
        • <b>Threads:</b> Virtual cores that allow parallel processing<br/>
        • <b>Clock Speed:</b> Measured in GHz (how many cycles per second)<br/>
        • <b>Cache:</b> Small, ultra-fast memory on the CPU itself<br/>
        • <b>Architecture:</b> Design and technology generation
    </div>
    
    <b>CPU Comparison Table:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">CPU Type</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Typical Use</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Cores/Threads</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Clock Speed</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Intel Core i3</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Basic Computing</td>
            <td style="padding: 10px; border: 1px solid #ddd;">2-4 / 4-8</td>
            <td style="padding: 10px; border: 1px solid #ddd;">3.5-4.0 GHz</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Intel Core i5</td>
            <td style="padding: 10px; border: 1px solid #ddd;">General Purpose</td>
            <td style="padding: 10px; border: 1px solid #ddd;">6 / 12</td>
            <td style="padding: 10px; border: 1px solid #ddd;">3.8-4.5 GHz</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Intel Core i7</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Content Creation</td>
            <td style="padding: 10px; border: 1px solid #ddd;">8 / 16</td>
            <td style="padding: 10px; border: 1px solid #ddd;">4.0-5.0 GHz</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Intel Core i9</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Gaming/Workstations</td>
            <td style="padding: 10px; border: 1px solid #ddd;">16 / 24</td>
            <td style="padding: 10px; border: 1px solid #ddd;">4.5-5.5 GHz</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">AMD Ryzen 5</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Value Performance</td>
            <td style="padding: 10px; border: 1px solid #ddd;">6 / 12</td>
            <td style="padding: 10px; border: 1px solid #ddd;">3.6-4.4 GHz</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">AMD Ryzen 7</td>
            <td style="padding: 10px; border: 1px solid #ddd;">High Performance</td>
            <td style="padding: 10px; border: 1px solid #ddd;">8 / 16</td>
            <td style="padding: 10px; border: 1px solid #ddd;">3.8-4.7 GHz</td>
        </tr>
    </table>
    
    <b>b. Random Access Memory (RAM) - Short-term Memory</b><br/>
    
    <b>RAM Explained:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Volatile Memory:</b> Loses data when power is turned off<br/>
        <b>Purpose:</b> Temporarily stores data the CPU is actively using<br/>
        <b>Speed:</b> Measured in MHz (DDR4: 2133-3200MHz, DDR5: 4800-6400MHz)<br/>
        <br/>
        <b>Types of RAM:</b><br/>
        • <b>DDR4:</b> Current standard (2014-present)<br/>
        • <b>DDR5:</b> Next generation (faster, more efficient)<br/>
        • <b>SO-DIMM:</b> Laptop memory (smaller form factor)<br/>
        • <b>DIMM:</b> Desktop memory<br/>
        <br/>
        <b>Capacity Recommendations:</b><br/>
        • <b>4GB:</b> Basic web browsing, office applications<br/>
        • <b>8GB:</b> Standard for most users, light multitasking<br/>
        • <b>16GB:</b> Gaming, content creation, heavy multitasking<br/>
        • <b>32GB+:</b> Professional video editing, 3D rendering, virtualization
    </div>
    
    <b>RAM vs Storage Analogy:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Imagine you're writing a book:</b><br/>
        <br/>
        <b>RAM (Kitchen Counter):</b><br/>
        • Space where you lay out your current chapter, reference materials, and writing tools<br/>
        • Limited space - can only hold so much at once<br/>
        • If counter is full, you must constantly put things away and take them out<br/>
        • When you finish cooking (turn off computer), everything gets cleared<br/>
        <br/>
        <b>Storage (Pantry):</b><br/>
        • Where you store all your ingredients, cookbooks, and completed dishes<br/>
        • Large capacity - holds everything you own<br/>
        • Permanent storage - stays there even when kitchen is closed<br/>
        • Slower to access - have to walk to pantry to get ingredients
    </div>
    
    <b>c. Storage Devices - Long-term Memory</b><br/>
    
    <b>Storage Comparison:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Type</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Speed</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Durability</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Cost per GB</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Use Case</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">HDD (Hard Disk)</td>
            <td style="padding: 10px; border: 1px solid #ddd;">80-160 MB/s</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Mechanical - Less durable</td>
            <td style="padding: 10px; border: 1px solid #ddd;">$0.02-$0.03</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Bulk storage, backups</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">SATA SSD</td>
            <td style="padding: 10px; border: 1px solid #ddd;">500-550 MB/s</td>
            <td style="padding: 10px; border: 1px solid #ddd;">No moving parts - More durable</td>
            <td style="padding: 10px; border: 1px solid #ddd;">$0.07-$0.10</td>
            <td style="padding: 10px; border: 1px solid #ddd;">OS, applications, games</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">NVMe SSD (M.2)</td>
            <td style="padding: 10px; border: 1px solid #ddd;">3000-7000 MB/s</td>
            <td style="padding: 10px; border: 1px solid #ddd;">No moving parts - Most durable</td>
            <td style="padding: 10px; border: 1px solid #ddd;">$0.08-$0.15</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Professional work, gaming</td>
        </tr>
    </table>
    
    <b>Storage Technology Explained:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>HDD (Hard Disk Drive):</b><br/>
        • Magnetic platters that spin at 5400/7200 RPM<br/>
        • Mechanical read/write head<br/>
        • Prone to damage from physical shock<br/>
        • Higher capacity for lower cost<br/>
        <br/>
        <b>SSD (Solid State Drive):</b><br/>
        • Flash memory chips (like USB drives)<br/>
        • No moving parts<br/>
        • Faster, more reliable, less power<br/>
        • Limited write cycles (but lasts years)<br/>
        <br/>
        <b>NVMe (Non-Volatile Memory Express):</b><br/>
        • Connects directly to PCIe bus<br/>
        • Even faster than SATA SSDs<br/>
        • M.2 form factor (small stick-like)<br/>
        • Best for operating system and applications
    </div>
    
    <h3>Practical Lab Session (45 Minutes)</h3>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Exercise 1: Check Your System Specifications</b><br/>
        1. Open Task Manager (Ctrl + Shift + Esc)<br/>
        2. Click on "Performance" tab<br/>
        3. Observe each component:<br/>
        &nbsp;&nbsp;- <b>CPU:</b> Name, utilization %, speed, cores<br/>
        &nbsp;&nbsp;- <b>Memory:</b> Total RAM, in use, speed<br/>
        &nbsp;&nbsp;- <b>Disk:</b> Type (SSD/HDD), active time, read/write speeds<br/>
        <br/>
        <b>Exercise 2: System Information Deep Dive</b><br/>
        1. Press Win + R, type "msinfo32" and press Enter<br/>
        2. Note down:<br/>
        &nbsp;&nbsp;- Processor name and speed<br/>
        &nbsp;&nbsp;- Installed physical memory (RAM)<br/>
        &nbsp;&nbsp;- System type (64-bit or 32-bit)<br/>
        &nbsp;&nbsp;- BIOS version<br/>
        <br/>
        <b>Exercise 3: Storage Analysis</b><br/>
        1. Open File Explorer → This PC<br/>
        2. Right-click C: drive → Properties<br/>
        3. Check total space and free space<br/>
        4. Click "Disk Cleanup" to see what can be removed<br/>
        <br/>
        <b>Exercise 4: Performance Monitoring</b><br/>
        1. Open Task Manager → Performance tab<br/>
        2. Open several applications (Word, Chrome, Calculator)<br/>
        3. Watch how CPU and RAM usage changes<br/>
        4. Notice which applications use the most resources
    </div>
    
    <h3>Component Identification Challenge</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Identify these components from the image:</b><br/>
        <img src="assets/foundation/systemunit2.png" style="width: 100%; max-width: 800px; border: 1px solid #ccc; margin: 10px 0;"><br/>
        <br/>
        <b>Label the components:</b><br/>
        1. _______________ : Main circuit board connecting everything<br/>
        2. _______________ : Brain of the computer<br/>
        3. _______________ : Temporary memory modules<br/>
        4. _______________ : Graphics processing unit<br/>
        5. _______________ : Power connection unit<br/>
        6. _______________ : Storage device (SSD/HDD)<br/>
        7. _______________ : Cooling fan for CPU<br/>
        8. _______________ : Expansion slots for additional cards
    </div>
    
    <h3>Assignment Tasks</h3>
    
    <div class="assignment-box">
        <h4>Main Task: Computer Hardware Analysis Report</h4>
        
        <b>Requirements:</b>
        <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Create a detailed report of your current computer's specifications<br/>
            2. Research upgrade options for your system<br/>
            3. Create a budget for potential upgrades<br/>
            4. Compare different hardware configurations<br/>
        </div>
        
        <b>Report Sections:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Section 1: Current System Analysis</b><br/>
            • Processor: [Brand, Model, Cores, Speed]<br/>
            • RAM: [Total GB, Type (DDR4/DDR5), Speed]<br/>
            • Storage: [Type (HDD/SSD/NVMe), Capacity, Free Space]<br/>
            • Graphics: [Integrated or Dedicated, Model]<br/>
            • Operating System: [Windows 10/11, 32/64-bit]<br/>
            <br/>
            <b>Section 2: Performance Assessment</b><br/>
            • What tasks does your computer handle well?<br/>
            • Where does it struggle (slow loading, lag, etc.)?<br/>
            • Which component is likely the bottleneck?<br/>
            <br/>
            <b>Section 3: Upgrade Research</b><br/>
            • Find prices for: 16GB DDR4 RAM, 500GB NVMe SSD<br/>
            • Research compatible upgrades for your system<br/>
            • Identify which upgrade would give best performance boost<br/>
            <br/>
            <b>Section 4: Ideal System Design</b><br/>
            • Design your dream computer for your specific needs<br/>
            • Specify: CPU, RAM, Storage, Graphics, etc.<br/>
            • Total estimated cost
        </div>
        
        <b>Data Collection Methods:</b>
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Method 1: Using System Information</b><br/>
            <pre>
                Win + R → "msinfo32" → Enter<br/>
                Find:<br/>
                • Processor: System Summary → Processor<br/>
                • RAM: System Summary → Installed Physical Memory<br/>
                • OS: System Summary → OS Name and Version<br/>
            </pre>
            <br/>
            <b>Method 2: Using Task Manager</b><br/>
            <pre>
                Ctrl + Shift + Esc → Performance tab<br/>
                Click each component for details:<br/>
                • CPU: Name, Cores, Logical processors<br/>
                • Memory: Speed, Slots used, Form factor<br/>
                • Disk: Type, Capacity, Read/Write speed
            </pre>
            <br/>
            <b>Method 3: Using Command Prompt</b><br/>
            <pre>
                Win + R → "cmd" → Enter<br/>
                Type "systeminfo" and press Enter<br/>
                Look for:<br/>
                • Processor(s)<br/>
                • Total Physical Memory<br/>
                • Available Physical Memory<br/>
                • OS Configuration
            </pre>
        </div>
        
        <b>Research Resources:</b>
        <ul>
            <li>Amazon, Newegg, or local computer store websites</li>
            <li>Manufacturer websites (Intel, AMD, Crucial, Samsung)</li>
            <li>Technical review sites (Tom's Hardware, PC Gamer)</li>
            <li>Benchmark comparison sites (UserBenchmark, PassMark)</li>
        </ul>
        
        <b>Challenge Tasks:</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Challenge 1: Benchmark Your System</b><br/>
            • Use built-in Windows Experience Index (Win + R → "winsat formal")<br/>
            • Run a disk speed test with CrystalDiskMark<br/>
            • Test RAM speed with MemTest86<br/>
            • Compare your scores with similar systems<br/>
            <br/>
            <b>Challenge 2: Thermal Monitoring</b><br/>
            • Install HWMonitor or Core Temp<br/>
            • Monitor CPU and GPU temperatures<br/>
            • Run a stress test and observe temperature changes<br/>
            • Identify normal vs. overheating temperatures<br/>
            <br/>
            <b>Challenge 3: Build a PC Part Picker List</b><br/>
            • Use pcpartpicker.com to build a complete system<br/>
            • Ensure all components are compatible<br/>
            • Stay within a $800 budget<br/>
            • Optimize for either gaming or content creation
        </div>
        
        <b>Submission Format:</b>
        <ul>
            <li>Word document or PDF report</li>
            <li>Include screenshots of system information</li>
            <li>Add links to researched components</li>
            <li>Provide cost analysis and recommendations</li>
            <li>Minimum 2 pages, maximum 5 pages</li>
        </ul>
    </div>
    
    <h3>Hardware Troubleshooting Guide</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Problem 1: Computer is very slow</b><br/>
        <b>Possible Causes & Solutions:</b><br/>
        1. <b>Low RAM:</b> Check Task Manager → Memory usage<br/>
        &nbsp;&nbsp;&nbsp;<i>Solution:</i> Close unnecessary programs, upgrade RAM<br/>
        2. <b>CPU Overheating:</b> Check temperatures, clean dust from fans<br/>
        3. <b>Slow Storage:</b> Defragment HDD, upgrade to SSD<br/>
        4. <b>Malware:</b> Run antivirus scan<br/>
        <br/>
        <b>Problem 2: Computer won't turn on</b><br/>
        <b>Troubleshooting Steps:</b><br/>
        1. Check power cable connection<br/>
        2. Test power outlet with another device<br/>
        3. Listen for any sounds (beeps indicate hardware issues)<br/>
        4. Check power supply switch<br/>
        5. Test with different power cable<br/>
        <br/>
        <b>Problem 3: Blue Screen of Death (BSOD)</b><br/>
        <b>Common Hardware Causes:</b><br/>
        1. Faulty RAM - Run Windows Memory Diagnostic<br/>
        2. Overheating - Check temperatures<br/>
        3. Hard drive failure - Check SMART status<br/>
        4. Driver issues - Update hardware drivers
    </div>
    
    <h3>Future Technology Trends</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Emerging Hardware Technologies:</b><br/>
        <br/>
        <b>1. Quantum Computing:</b><br/>
        • Uses quantum bits (qubits) instead of binary bits<br/>
        • Can solve complex problems exponentially faster<br/>
        • Currently experimental, not for consumer use<br/>
        <br/>
        <b>2. Neuromorphic Chips:</b><br/>
        • Processors that mimic human brain structure<br/>
        • More efficient for AI and pattern recognition<br/>
        • Lower power consumption<br/>
        <br/>
        <b>3. Advanced Memory Technologies:</b><br/>
        • DDR5 RAM (faster, more efficient)<br/>
        • Optane Memory (Intel's high-speed cache)<br/>
        • 3D XPoint (non-volatile memory technology)<br/>
        <br/>
        <b>4. Storage Evolution:</b><br/>
        • PCIe 5.0 SSDs (even faster than current NVMe)<br/>
        • QLC NAND (higher capacity, lower cost)<br/>
        • DNA Storage (experimental, stores data in DNA molecules)
    </div>
    
    <h3>Career Paths in Hardware</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Computer Hardware Engineer:</b><br/>
        • Design and develop computer systems and components<br/>
        • Average Salary: $100,000 - $150,000<br/>
        • Education: Bachelor's in Computer Engineering<br/>
        <br/>
        <b>2. IT Support Specialist:</b><br/>
        • Troubleshoot and repair computer hardware<br/>
        • Average Salary: $50,000 - $70,000<br/>
        • Certifications: CompTIA A+, Microsoft Certified Professional<br/>
        <br/>
        <b>3. Network Administrator:</b><br/>
        • Maintain and optimize computer networks<br/>
        • Average Salary: $70,000 - $90,000<br/>
        • Certifications: CCNA, Network+<br/>
        <br/>
        <b>4. Data Center Technician:</b><br/>
        • Maintain servers and infrastructure in data centers<br/>
        • Average Salary: $60,000 - $80,000<br/>
        • Skills: Server hardware, cooling systems, power management<br/>
        <br/>
        <b>5. PC Builder/Business Owner:</b><br/>
        • Build custom computers for clients<br/>
        • Income: Varies based on business success<br/>
        • Skills: Hardware knowledge, customer service, business management
    </div>
    
    <hr/>
    
    <div class="knowledge-check">
        <h4>Knowledge Check Quiz</h4>
        
        <b>Question 1:</b> What component is often called the "brain" of the computer?<br/>
        a) RAM<br/>
        b) GPU<br/>
        c) CPU<br/>
        d) Motherboard<br/>
        <br/>
        <b>Question 2:</b> Which type of memory loses data when power is turned off?<br/>
        a) SSD<br/>
        b) HDD<br/>
        c) RAM<br/>
        d) USB Drive<br/>
        <br/>
        <b>Question 3:</b> What does "SSD" stand for?<br/>
        a) Solid State Drive<br/>
        b) Super Speed Disk<br/>
        c) System Storage Device<br/>
        d) Secondary Storage Drive<br/>
        <br/>
        <b>Question 4:</b> Which is faster: HDD, SATA SSD, or NVMe SSD?<br/>
        a) HDD<br/>
        b) SATA SSD<br/>
        c) NVMe SSD<br/>
        d) They're all the same speed<br/>
        <br/>
        <b>Question 5:</b> What tool in Windows shows real-time CPU and RAM usage?<br/>
        a) File Explorer<br/>
        b) Control Panel<br/>
        c) Task Manager<br/>
        d) System Configuration
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Day 2 Learning Objectives Achieved:</h3>
        <ul>
            <li>✅ Understand the function of major computer components</li>
            <li>✅ Differentiate between RAM and storage devices</li>
            <li>✅ Identify CPU specifications and performance factors</li>
            <li>✅ Check system specifications using Windows tools</li>
            <li>✅ Analyze hardware performance and bottlenecks</li>
            <li>✅ Research and plan hardware upgrades</li>
        </ul>
        
        <p><b>Homework Preparation for Day 3:</b><br/>
        1. Explore different file extensions on your computer<br/>
        2. Try changing a .txt file to .mp3 and see what happens<br/>
        3. Create a folder structure for organizing your files<br/>
        4. Research what "64-bit" vs "32-bit" operating systems mean<br/>
        5. Practice creating zip files and extracting them</p>
        
        <p><b>Interesting Fact:</b> The first 1GB hard drive (in 1980) weighed 550 pounds (250 kg) and cost $40,000! Today, you can buy a 1TB SSD (1000x capacity) for under $100 that fits in your palm.</p>
        
        <p><b>Remember:</b> "Understanding hardware is like knowing how a car engine works - it helps you drive better, fix problems, and choose the right vehicle for your journey!"</p>
    </div>`
            },
            "1-3": {
                icon: "fas fa-folder-open",
                title: "Operating Systems & File Management",
                html: `<h1>Week 1, Day 3: Operating Systems & File Management</h1>
    <p>Today we'll understand how software communicates with hardware and master efficient file organization.</p>
    
    <div class="analogy-box">
        <b>Analogy: The OS as a Government & Files as Citizens 🏛️</b><br/>
        
        Operating System: Government that manages resources<br/>
        Applications: Businesses that need resources<br/>
        File Extensions: Citizens' ID cards (tell what they do)<br/>
        Folders: Neighborhoods organizing citizens<br/>
        Permissions: Security clearance levels<br/>
        File System: City planning and infrastructure<br/>
        Users: Residents with different access rights<br/>
        Administrator: Mayor with full control
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>What is an Operating System?</li>
        <li>File Extensions and Their Meanings</li>
        <li>Folder Structure and Organization</li>
        <li>File Permissions and Security</li>
        <li>Hidden Files and System Files</li>
        <li>Compression and Archiving</li>
        <li>File System Types</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Operating Systems: The Computer Government</b><br/>
    
    <b>What is an Operating System?</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Definition:</b> Software that manages computer hardware and software resources<br/>
        <b>Primary Functions:</b><br/>
        1. <b>Process Management:</b> Allocates CPU time to applications<br/>
        2. <b>Memory Management:</b> Controls RAM allocation<br/>
        3. <b>File System Management:</b> Organizes and stores files<br/>
        4. <b>Device Management:</b> Controls input/output devices<br/>
        5. <b>Security:</b> Manages user access and permissions<br/>
        6. <b>User Interface:</b> Provides way to interact with computer<br/>
        <br/>
        <b>Popular Operating Systems:</b><br/>
        • <b>Windows:</b> Most common for personal computers (11, 10, 8, 7)<br/>
        • <b>macOS:</b> Apple's operating system for Mac computers<br/>
        • <b>Linux:</b> Open-source, popular for servers (Ubuntu, Fedora, Debian)<br/>
        • <b>Chrome OS:</b> Lightweight, cloud-based for Chromebooks<br/>
        • <b>Android/iOS:</b> Mobile operating systems
    </div>
    
    <b>32-bit vs 64-bit Architecture:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Aspect</th>
            <th style="padding: 10px; border: 1px solid #ddd;">32-bit</th>
            <th style="padding: 10px; border: 1px solid #ddd;">64-bit</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">RAM Limit</td>
            <td style="padding: 10px; border: 1px solid #ddd;">4GB maximum</td>
            <td style="padding: 10px; border: 1px solid #ddd;">16EB (theoretical)</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Processing</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Handles data in 32-bit chunks</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Handles data in 64-bit chunks</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Performance</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Slower for large calculations</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Faster for complex operations</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Compatibility</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Runs 32-bit software only</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Runs both 32-bit and 64-bit</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Modern Use</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Legacy systems, old hardware</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Standard for new computers</td>
        </tr>
    </table>
    
    <b>b. File Extensions: The Digital ID Cards</b><br/>
    
    <b>What are File Extensions?</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Definition:</b> The suffix at the end of a filename indicating the file type<br/>
        <b>Format:</b> filename.extension (e.g., document.docx, photo.jpg)<br/>
        <b>Purpose:</b> Tells the operating system which program should open the file<br/>
        <br/>
        <b>How They Work:</b><br/>
        1. You double-click a file<br/>
        2. OS checks the file extension<br/>
        3. OS looks up which program is associated with that extension<br/>
        4. OS launches that program and opens the file<br/>
        <br/>
        <b>Changing Extensions:</b><br/>
        • Changing .txt to .mp3 doesn't convert the file<br/>
        • It just changes which program tries to open it<br/>
        • The actual file content remains unchanged<br/>
        • Often causes errors when wrong program tries to open it
    </div>
    
    <b>Common File Extensions Reference:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Category</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Extensions</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Purpose</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Example Programs</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Documents</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.docx, .pdf, .txt, .rtf</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Text and formatted documents</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Word, Acrobat, Notepad</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Spreadsheets</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.xlsx, .csv, .ods</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Data and calculations</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Excel, Google Sheets</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Presentations</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.pptx, .key, .odp</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Slides and presentations</td>
            <td style="padding: 10px; border: 1px solid #ddd;">PowerPoint, Keynote</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Images</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.jpg, .png, .gif, .bmp</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Photos and graphics</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Photos, Paint, Photoshop</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Audio</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.mp3, .wav, .flac, .aac</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Music and sound files</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Media Player, VLC</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Video</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.mp4, .avi, .mov, .mkv</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Movies and video clips</td>
            <td style="padding: 10px; border: 1px solid #ddd;">VLC, Windows Media</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Executables</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.exe, .msi, .app</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Program installations</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Windows Installer</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Compressed</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.zip, .rar, .7z</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Bundled and reduced size</td>
            <td style="padding: 10px; border: 1px solid #ddd;">WinZip, 7-Zip, WinRAR</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Web</td>
            <td style="padding: 10px; border: 1px solid #ddd;">.html, .css, .js, .php</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Websites and web apps</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Browsers, Code Editors</td>
        </tr>
    </table>
    
    <b>c. File Organization Strategies</b><br/>
    
    <b>Effective Folder Structures:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Method 1: By Project</b><br/>
        Documents/<br/>
        ├── Project_Alpha/<br/>
        │   ├── Research/<br/>
        │   ├── Drafts/<br/>
        │   ├── Final/<br/>
        │   └── Resources/<br/>
        ├── Project_Beta/<br/>
        │   ├── Planning/<br/>
        │   ├── Execution/<br/>
        │   └── Documentation/<br/>
        └── Templates/<br/>
        <br/>
        <b>Method 2: By Date</b><br/>
        Documents/<br/>
        ├── 2024/<br/>
        │   ├── 01_January/<br/>
        │   ├── 02_February/<br/>
        │   └── 03_March/<br/>
        ├── 2023/<br/>
        └── Archive/<br/>
        <br/>
        <b>Method 3: By Category</b><br/>
        Documents/<br/>
        ├── Work/<br/>
        ├── Personal/<br/>
        ├── Studies/<br/>
        ├── Financial/<br/>
        └── Creative/<br/>
        <br/>
        <b>Naming Conventions:</b><br/>
        • Use underscores or dashes instead of spaces: project_report_v2.docx<br/>
        • Include dates: 2024-03-15_meeting_notes.docx<br/>
        • Use version numbers: proposal_v1.docx, proposal_v2.docx<br/>
        • Be descriptive: client_contract_signed.pdf not doc1.pdf
    </div>
    
    <b>d. File Permissions and Security</b><br/>
    
    <b>Understanding Permissions:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>User Accounts:</b><br/>
        • <b>Administrator:</b> Full control over the system<br/>
        • <b>Standard User:</b> Can use software but not install system-wide<br/>
        • <b>Guest:</b> Limited access, changes not saved<br/>
        <br/>
        <b>File Permissions (NTFS - Windows):</b><br/>
        • <b>Full Control:</b> Read, write, execute, modify, delete<br/>
        • <b>Modify:</b> Read, write, execute, delete<br/>
        • <b>Read & Execute:</b> Open and run files/folders<br/>
        • <b>List Folder Contents:</b> See files in folder<br/>
        • <b>Read:</b> View file contents<br/>
        • <b>Write:</b> Modify file contents<br/>
        <br/>
        <b>Permission Inheritance:</b><br/>
        • Files usually inherit permissions from parent folder<br/>
        • Can be broken for specific security needs<br/>
        • Useful for sensitive documents
    </div>
    
    <h3>Practical Lab Session (45 Minutes)</h3>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Exercise 1: Show File Extensions</b><br/>
        1. Open File Explorer (Win + E)<br/>
        2. Click "View" tab → Check "File name extensions"<br/>
        OR<br/>
        1. File Explorer → Options → View tab<br/>
        2. Uncheck "Hide extensions for known file types"<br/>
        3. Click Apply → OK<br/>
        <br/>
        <b>Exercise 2: File Extension Experiment</b><br/>
        1. Create a new text file: Right-click → New → Text Document<br/>
        2. Name it "test.txt"<br/>
        3. Open it, type "Hello World", save and close<br/>
        4. Rename it to "test.mp3"<br/>
        5. Try to open it - observe what happens<br/>
        6. Rename it back to "test.txt"<br/>
        <br/>
        <b>Exercise 3: System Information Check</b><br/>
        1. Press Win + R, type "msinfo32", press Enter<br/>
        2. Find:<br/>
        &nbsp;&nbsp;- OS Name and Version<br/>
        &nbsp;&nbsp;- System Type (64-bit or 32-bit)<br/>
        &nbsp;&nbsp;- System Manufacturer and Model<br/>
        &nbsp;&nbsp;- BIOS Version/Date<br/>
        <br/>
        <b>Exercise 4: Folder Options Exploration</b><br/>
        1. File Explorer → View tab → Options<br/>
        2. Explore different settings:<br/>
        &nbsp;&nbsp;- Show hidden files, folders, and drives<br/>
        &nbsp;&nbsp;- Hide protected operating system files<br/>
        &nbsp;&nbsp;- Show preview handlers in preview pane<br/>
        &nbsp;&nbsp;- Always show icons, never thumbnails<br/>
        <br/>
        <b>Exercise 5: Creating Archive Files</b><br/>
        1. Select 3 different image files<br/>
        2. Right-click → Send to → Compressed (zipped) folder<br/>
        3. Name it "my_images.zip"<br/>
        4. Double-click to view contents<br/>
        5. Right-click → Extract All to unzip
    </div>
    
    <h3>File System Types Comparison</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>NTFS (New Technology File System) - Windows:</b><br/>
        • Supports large files (up to 16TB)<br/>
        • File permissions and encryption<br/>
        • Journaling (recovery from crashes)<br/>
        • Compression and quotas<br/>
        • Standard for Windows internal drives<br/>
        <br/>
        <b>FAT32 (File Allocation Table):</b><br/>
        • Compatible with all operating systems<br/>
        • Maximum file size: 4GB<br/>
        • Maximum volume size: 8TB<br/>
        • No built-in security features<br/>
        • Used for USB drives, memory cards<br/>
        <br/>
        <b>exFAT (Extended FAT):</b><br/>
        • Supports files larger than 4GB<br/>
        • Compatible with Windows, macOS, Linux<br/>
        • No file size limit (theoretical 16EB)<br/>
        • Good for external drives and flash storage<br/>
        <br/>
        <b>APFS (Apple File System) - macOS:</b><br/>
        • Optimized for SSDs<br/>
        • Strong encryption<br/>
        • Space sharing between volumes<br/>
        • Snapshots for backups<br/>
        <br/>
        <b>ext4 (Fourth Extended File System) - Linux:</b><br/>
        • Journaling file system<br/>
        • Supports large volumes (1EB)<br/>
        • Backward compatible with ext2/ext3<br/>
        • Default for many Linux distributions
    </div>
    
    <h3>Assignment Tasks</h3>
    
    <div class="assignment-box">
        <h4>Main Task: Create a Professional File Organization System</h4>
        
        <b>Requirements:</b>
        <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Create a comprehensive folder structure for a fictional business<br/>
            2. Organize different file types appropriately<br/>
            3. Apply proper naming conventions<br/>
            4. Create archive files for backup<br/>
            5. Document your organization system<br/>
        </div>
        
        <b>Scenario: "TechSolutions Consulting" Business</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            You are setting up the file system for a new IT consulting business.<br/>
            The business has:<br/>
            • 5 employees (CEO, 2 consultants, admin, marketing)<br/>
            • 3 main clients (Alpha Corp, Beta Inc, Gamma LLC)<br/>
            • 2 ongoing projects (Network Upgrade, Software Migration)<br/>
            • Monthly reports, invoices, and presentations needed<br/>
            <br/>
            <b>Required Folders:</b><br/>
            1. Clients/ (subfolders for each client)<br/>
            2. Projects/ (current and completed projects)<br/>
            3. Finance/ (invoices, expenses, taxes)<br/>
            4. HR/ (employee documents, contracts)<br/>
            5. Marketing/ (brochures, presentations, website)<br/>
            6. Templates/ (document templates)<br/>
            7. Archive/ (old files, backups)
        </div>
        
        <b>Folder Structure Example:</b>
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <pre>
                TechSolutions_Consulting/<br/>
                ├── 01_Clients/<br/>
                │   ├── Alpha_Corp/<br/>
                │   │   ├── Contracts/<br/>
                │   │   ├── Meetings/<br/>
                │   │   ├── Invoices/<br/>
                │   │   └── Deliverables/<br/>
                │   ├── Beta_Inc/<br/>
                │   └── Gamma_LLC/<br/>
                ├── 02_Projects/<br/>
                │   ├── Network_Upgrade_2024/<br/>
                │   │   ├── Planning/<br/>
                │   │   ├── Documentation/<br/>
                │   │   ├── Resources/<br/>
                │   │   └── Final_Report/<br/>
                │   └── Software_Migration/<br/>
                ├── 03_Finance/<br/>
                │   ├── Invoices_Outgoing/<br/>
                │   ├── Expenses/<br/>
                │   ├── Taxes/<br/>
                │   └── Reports/<br/>
                ├── 04_HR/<br/>
                │   ├── Employee_Records/<br/>
                │   ├── Contracts/<br/>
                │   └── Policies/<br/>
                ├── 05_Marketing/<br/>
                │   ├── Presentations/<br/>
                │   ├── Brochures/<br/>
                │   └── Website/<br/>
                ├── 06_Templates/<br/>
                │   ├── Invoice_Template.xlsx<br/>
                │   ├── Report_Template.docx<br/>
                │   └── Presentation_Template.pptx<br/>
                └── 07_Archive/<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;├── 2023_Projects/<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;└── Old_Clients/
            </pre>
        </div>
        
        <b>File Creation Tasks:</b>
        <ol>
            <li>Create at least 5 sample documents with appropriate extensions:
                <ul>
                    <li>Business proposal (.docx)</li>
                    <li>Invoice (.xlsx)</li>
                    <li>Presentation (.pptx)</li>
                    <li>Client contract (.pdf)</li>
                    <li>Company logo (.png)</li>
                </ul>
            </li>
            <li>Use proper naming conventions:
                <ul>
                    <li>2024-03-15_AlphaCorp_Proposal_v2.docx</li>
                    <li>Invoice_2024-001_BetaInc.xlsx</li>
                    <li>Q1_Report_March_2024.pptx</li>
                </ul>
            </li>
            <li>Create compressed archives:
                <ul>
                    <li>Archive the entire "2023_Projects" folder</li>
                    <li>Create a zip of all invoice templates</li>
                </ul>
            </li>
        </ol>
        
        <b>Challenge Tasks:</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Challenge 1: File Permission Management</b><br/>
            • Create a "Confidential" folder<br/>
            • Set permissions so only Administrator can access<br/>
            • Test access with different user accounts<br/>
            • Document the permission settings<br/>
            <br/>
            <b>Challenge 2: Large File Management</b><br/>
            • Find a file larger than 100MB on your system<br/>
            • Move it to a "Large_Files" folder<br/>
            • Calculate how many of these files would fill your storage<br/>
            • Research cloud storage options for large files<br/>
            <br/>
            <b>Challenge 3: File Association Research</b><br/>
            • Research which programs open which file extensions<br/>
            • Create a reference chart of extensions and programs<br/>
            • Change a file association (e.g., make .txt open with WordPad)<br/>
            • Document how to change file associations
        </div>
        
        <b>Submission Requirements:</b>
        <ul>
            <li>Screenshot of your complete folder structure</li>
            <li>List of all created files with their extensions</li>
            <li>Document explaining your naming conventions</li>
            <li>Screenshots of file properties and permissions</li>
            <li>Reflection on what you learned about file organization</li>
        </ul>
    </div>
    
    <h3>Hidden Files and System Files</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>What are Hidden Files?</b><br/>
        Files marked with the "hidden" attribute that don't normally show in File Explorer.<br/>
        <br/>
        <b>Common Hidden Files:</b><br/>
        • <b>Desktop.ini:</b> Stores folder view settings<br/>
        • <b>Thumbs.db:</b> Thumbnail cache for images<br/>
        • <b>.git/</b> : Version control files (if using Git)<br/>
        • <b>AppData/</b> : Application data (hidden in Users folder)<br/>
        • <b>Pagefile.sys:</b> Virtual memory file<br/>
        • <b>Hiberfil.sys:</b> Hibernation data<br/>
        <br/>
        <b>Why Hide Files?</b><br/>
        1. <b>System Protection:</b> Prevent accidental deletion of important files<br/>
        2. <b>Clean Interface:</b> Reduce clutter in file listings<br/>
        3. <b>Security:</b> Hide sensitive configuration files<br/>
        4. <b>Performance:</b> System files that users shouldn't modify<br/>
        <br/>
        <b>When to Show Hidden Files:</b><br/>
        • Troubleshooting system issues<br/>
        • Advanced file management<br/>
        • Developer work with configuration files<br/>
        • Cleaning temporary files<br/>
        <br/>
        <b>Warning:</b> Be careful when modifying hidden system files - can cause system instability!
    </div>
    
    <h3>Best Practices for File Management</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>The 5 Rules of File Management:</b><br/>
        <br/>
        <b>1. The 3-2-1 Backup Rule:</b><br/>
        • 3 copies of important data<br/>
        • 2 different types of media<br/>
        • 1 copy offsite (cloud or different location)<br/>
        <br/>
        <b>2. Descriptive Naming:</b><br/>
        • Include date: YYYY-MM-DD format (sorts chronologically)<br/>
        • Include project/client name<br/>
        • Include version number if multiple revisions<br/>
        • Avoid spaces, use underscores or dashes<br/>
        <br/>
        <b>3. Logical Folder Structure:</b><br/>
        • Maximum 3-4 levels deep (shallow hierarchy)<br/>
        • Group related items together<br/>
        • Separate active and archived files<br/>
        • Use consistent naming across folders<br/>
        <br/>
        <b>4. Regular Maintenance:</b><br/>
        • Monthly file cleanup session<br/>
        • Archive old projects<br/>
        • Delete temporary files<br/>
        • Update folder structures as needs change<br/>
        <br/>
        <b>5. Security Considerations:</b><br/>
        • Regular backups<br/>
        • Encryption for sensitive files<br/>
        • Appropriate permissions<br/>
        • Virus scans for downloaded files
    </div>
    
    <h3>File Compression and Archiving</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Why Compress Files?</b><br/>
        1. <b>Save Space:</b> Reduces file size (especially text files)<br/>
        2. <b>Faster Transfer:</b> Smaller files email/upload faster<br/>
        3. <b>Organization:</b> Group related files together<br/>
        4. <b>Protection:</b> Add passwords for security<br/>
        <br/>
        <b>Compression Formats:</b><br/>
        • <b>.zip:</b> Universal format, built into Windows<br/>
        • <b>.rar:</b> Better compression, but requires WinRAR<br/>
        • <b>.7z:</b> Highest compression, open format (7-Zip)<br/>
        • <b>.tar.gz:</b> Common on Linux, preserves permissions<br/>
        <br/>
        <b>What Compresses Well:</b><br/>
        • Text documents (.txt, .docx)<br/>
        • Spreadsheets (.xlsx)<br/>
        • Source code files<br/>
        • Log files<br/>
        <br/>
        <b>What Doesn't Compress Well:</b><br/>
        • Already compressed files (.jpg, .mp3, .mp4)<br/>
        • Encrypted files<br/>
        • Random data<br/>
        <br/>
        <b>Compression Tips:</b><br/>
        • Compress similar files together for better ratios<br/>
        • Use .7z for maximum space savings<br/>
        • Use .zip for maximum compatibility<br/>
        • Add passwords for sensitive archives
    </div>
    
    <hr/>
    
    <div class="knowledge-check">
        <h4>Knowledge Check Quiz</h4>
        
        <b>Question 1:</b> What is the main purpose of an operating system?<br/>
        a) To play games<br/>
        b) To manage hardware and software resources<br/>
        c) To connect to the internet<br/>
        d) To create documents<br/>
        <br/>
        <b>Question 2:</b> Which file extension indicates an executable program in Windows?<br/>
        a) .txt<br/>
        b) .docx<br/>
        c) .exe<br/>
        d) .jpg<br/>
        <br/>
        <b>Question 3:</b> What happens if you change a .txt file to .mp3?<br/>
        a) It becomes a music file<br/>
        b) The content converts to audio<br/>
        c) Media player tries to open it (and fails)<br/>
        d) The file gets deleted<br/>
        <br/>
        <b>Question 4:</b> What does "64-bit" mean in an operating system?<br/>
        a) It can only use 64GB of RAM<br/>
        b) It processes data in 64-bit chunks<br/>
        c) It's 64 times faster than 32-bit<br/>
        d) It only works on 64-year-old computers<br/>
        <br/>
        <b>Question 5:</b> Why are some files hidden by default?<br/>
        a) They contain viruses<br/>
        b) To prevent accidental deletion<br/>
        c) They're too large to display<br/>
        d) They're secret government files
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Day 3 Learning Objectives Achieved:</h3>
        <ul>
            <li>✅ Understand the role and functions of an operating system</li>
            <li>✅ Identify and understand common file extensions</li>
            <li>✅ Create and manage effective folder structures</li>
            <li>✅ Work with file permissions and security settings</li>
            <li>✅ Handle hidden files and system files appropriately</li>
            <li>✅ Create and extract compressed archive files</li>
        </ul>
        
        <p><b>Homework Preparation for Day 4:</b><br/>
        1. Practice using Command Prompt: Win + R → cmd<br/>
        2. Try basic commands: dir, cd, cls<br/>
        3. Research what "IP address" means<br/>
        4. Think about why command line might be faster than GUI<br/>
        5. Explore the difference between CMD and PowerShell</p>
        
        <p><b>Interesting Fact:</b> The first version of Windows (1985) was called "Interface Manager" and wasn't even a full operating system - it ran on top of MS-DOS! Today, Windows 11 has over 50 million lines of code.</p>
        
        <p><b>Remember:</b> "Good file organization is like a well-organized library - it saves you time, reduces stress, and makes you more productive. Spend 15 minutes organizing today to save hours searching tomorrow!"</p>
    </div>`
            },
            "1-4": {
                icon: "fas fa-terminal",
                title: "Command Prompt Basics",
                html: `<h1>Week 1, Day 4: Command Prompt Basics</h1>
    <p>Today we'll learn to control the computer without a mouse using the command line interface.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Command Line as Direct Kitchen Access 🍽️</b><br/>
        
        GUI (Graphical Interface): Pointing at menu items<br/>
        CLI (Command Line): Speaking directly to the chef<br/>
        Commands: Specific kitchen instructions<br/>
        Arguments: Details for the instructions<br/>
        Path: Directions to specific kitchen stations<br/>
        Syntax: Proper grammar for kitchen commands<br/>
        Batch Files: Recipe books with step-by-step instructions<br/>
        Output: The finished dish served back
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>What is Command Prompt (CMD)?</li>
        <li>Basic Navigation Commands</li>
        <li>File and Folder Operations</li>
        <li>Network Commands</li>
        <li>System Information Commands</li>
        <li>Command Syntax and Arguments</li>
        <li>Creating Batch Files</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. What is Command Prompt?</b><br/>
    
    <b>Command Prompt Definition:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Also Known As:</b> CMD, Command Line, CLI (Command Line Interface)<br/>
        <b>Purpose:</b> Text-based interface to execute commands directly<br/>
        <b>History:</b> Descendant of MS-DOS (Microsoft Disk Operating System)<br/>
        <b>Location:</b> C:\Windows\System32\cmd.exe<br/>
        <br/>
        <b>Why Use Command Line?</b><br/>
        1. <b>Speed:</b> Faster than clicking through menus<br/>
        2. <b>Automation:</b> Can script repetitive tasks<br/>
        3. <b>Power:</b> Access to advanced system functions<br/>
        4. <b>Remote Management:</b> Control computers over network<br/>
        5. <b>Resource Efficiency:</b> Uses less system resources than GUI<br/>
        <br/>
        <b>Who Uses Command Line?</b><br/>
        • System Administrators<br/>
        • Developers<br/>
        • Network Engineers<br/>
        • IT Support Specialists<br/>
        • Power Users<br/>
        • Security Professionals
    </div>
    
    <b>CMD vs PowerShell vs Terminal:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Tool</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Purpose</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Strengths</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Best For</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Command Prompt (CMD)</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Basic commands, batch files</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Simple, fast, compatible</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Quick tasks, old scripts</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">PowerShell</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Advanced automation, scripting</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Powerful, object-oriented</td>
            <td style="padding: 10px; border: 1px solid #ddd;">System administration, automation</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Windows Terminal</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Modern interface for all</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Tabs, themes, multiple shells</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Modern workflow, developers</td>
        </tr>
    </table>
    
    <b>b. Opening and Customizing Command Prompt</b><br/>
    
    <b>Ways to Open CMD:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Method 1: Run Dialog (Fastest)</b><br/>
        Win + R → type "cmd" → Enter<br/>
        <br/>
        <b>Method 2: Start Menu Search</b><br/>
        Win key → type "cmd" → Click "Command Prompt"<br/>
        <br/>
        <b>Method 3: File Explorer Address Bar</b><br/>
        Open File Explorer → click address bar → type "cmd" → Enter<br/>
        <br/>
        <b>Method 4: Context Menu</b><br/>
        Shift + Right-click folder → "Open command window here"<br/>
        <br/>
        <b>Method 5: Task Manager</b><br/>
        Ctrl + Shift + Esc → File → Run new task → type "cmd"<br/>
        <br/>
        <b>Method 6: As Administrator</b><br/>
        Right-click Start button → "Command Prompt (Admin)" or "Windows Terminal (Admin)"
    </div>
    
    <b>CMD Interface Elements:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            Microsoft Windows [Version 10.0.19045.4046]<br/>
            (c) Microsoft Corporation. All rights reserved.<br/>
            <br/>
            C:\Users\YourName><br/>
            │               │<br/>
            │               └── Prompt (waiting for command)<br/>
            └── Current Directory Path<br/>
            <br/>
            <b>Prompt Characters:</b><br/>
            • > : Regular user mode<br/>
            • # : Sometimes used in scripts<br/>
            • $ : In some Unix-like systems<br/>
            • C:\Windows\System32> : Administrator (in System32 folder)<br/>
            <br/>
            <b>Cursor:</b> Blinking underscore where you type<br/>
            <b>Scrollback:</b> Can scroll to see previous commands/output<br/>
            <b>Title Bar:</b> Shows current directory and "Command Prompt"
        </pre>
    </div>
    
    <b>c. Basic Command Syntax</b><br/>
    
    <b>Command Structure:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            command [options] [arguments]<br/>
            │         │         └── Additional information<br/>
            │         └── Modifiers (flags) that change behavior<br/>
            └── The action to perform<br/>
            <br/>
            <b>Examples:</b><br/>
            dir /w<br/>
            │   └── Option: Wide format<br/>
            └── Command: Directory listing<br/>
            <br/>
            copy file1.txt file2.txt<br/>
            │            │         └── Argument: Destination file<br/>
            │            └── Argument: Source file<br/>
            └── Command: Copy file<br/>
            <br/>
            ipconfig /all<br/>
            │         └── Option: Show all information<br/>
            └── Command: IP configuration<br/>
            <br/>
            <b>Common Syntax Elements:</b><br/>
            • Spaces separate commands, options, and arguments<br/>
            • Quotes for paths with spaces: cd "C:\Program Files"<br/>
            • Case insensitive (usually)<br/>
            • Use / or - for options: dir /w or dir -w<br/>
            • Tab key for auto-completion<br/>
            • Up/Down arrows for command history
        </pre>
    </div>
    
    <b>Essential Navigation Commands:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Command</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Purpose</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Syntax</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Example</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">dir</td>
            <td style="padding: 10px; border: 1px solid #ddd;">List directory contents</td>
            <td style="padding: 10px; border: 1px solid #ddd;">dir [options] [path]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">dir C:\Users</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">cd</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Change directory</td>
            <td style="padding: 10px; border: 1px solid #ddd;">cd [path]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">cd Documents</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">cls</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Clear screen</td>
            <td style="padding: 10px; border: 1px solid #ddd;">cls</td>
            <td style="padding: 10px; border: 1px solid #ddd;">cls</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">mkdir/md</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Make directory</td>
            <td style="padding: 10px; border: 1px solid #ddd;">mkdir [name]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">mkdir NewFolder</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">rmdir/rd</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Remove directory</td>
            <td style="padding: 10px; border: 1px solid #ddd;">rmdir [name]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">rmdir OldFolder</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">type</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Display file contents</td>
            <td style="padding: 10px; border: 1px solid #ddd;">type [filename]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">type notes.txt</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">echo</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Display message</td>
            <td style="padding: 10px; border: 1px solid #ddd;">echo [text]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">echo Hello World</td>
        </tr>
    </table>
    
    <b>d. File Operation Commands</b><br/>
    
    <b>File Management Commands:</b>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 10px; border: 1px solid #ddd;">Command</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Purpose</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Syntax</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Example</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">copy</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Copy files</td>
            <td style="padding: 10px; border: 1px solid #ddd;">copy source destination</td>
            <td style="padding: 10px; border: 1px solid #ddd;">copy file.txt backup.txt</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">xcopy</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Extended copy</td>
            <td style="padding: 10px; border: 1px solid #ddd;">xcopy source dest [options]</td>
            <td style="padding: 10px; border: 1px solid #ddd;">xcopy C:\data D:\backup /s</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">move</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Move/rename files</td>
            <td style="padding: 10px; border: 1px solid #ddd;">move source destination</td>
            <td style="padding: 10px; border: 1px solid #ddd;">move old.txt new.txt</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">del/erase</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Delete files</td>
            <td style="padding: 10px; border: 1px solid #ddd;">del filename</td>
            <td style="padding: 10px; border: 1px solid #ddd;">del temp.txt</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">ren/rename</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Rename files</td>
            <td style="padding: 10px; border: 1px solid #ddd;">ren oldname newname</td>
            <td style="padding: 10px; border: 1px solid #ddd;">ren document.doc report.doc</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">attrib</td>
            <td style="padding: 10px; border: 1px solid #ddd;">File attributes</td>
            <td style="padding: 10px; border: 1px solid #ddd;">attrib [options] filename</td>
            <td style="padding: 10px; border: 1px solid #ddd;">attrib +h secret.txt</td>
        </tr>
    </table>
    
    <b>Common Command Options (Switches):</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>dir Command Options:</b><br/>
        • <b>dir /w</b> : Wide list format<br/>
        • <b>dir /p</b> : Pause after each screen<br/>
        • <b>dir /a</b> : Show all files including hidden<br/>
        • <b>dir /s</b> : Include subdirectories<br/>
        • <b>dir /b</b> : Bare format (names only)<br/>
        • <b>dir /od</b> : Order by date<br/>
        • <b>dir /os</b> : Order by size<br/>
        • <b>dir /on</b> : Order by name<br/>
        <br/>
        <b>xcopy Command Options:</b><br/>
        • <b>/s</b> : Copy directories and subdirectories (except empty)<br/>
        • <b>/e</b> : Copy directories and subdirectories (including empty)<br/>
        • <b>/h</b> : Copy hidden and system files<br/>
        • <b>/y</b> : Suppress confirmation prompts<br/>
        • <b>/d</b> : Copy only newer files<br/>
        <br/>
        <b>attrib Command Options:</b><br/>
        • <b>+h</b> : Set hidden attribute<br/>
        • <b>-h</b> : Clear hidden attribute<br/>
        • <b>+r</b> : Set read-only attribute<br/>
        • <b>-r</b> : Clear read-only attribute<br/>
        • <b>+s</b> : Set system attribute<br/>
        • <b>-s</b> : Clear system attribute
    </div>
    
    <h3>Practical Lab Session (45 Minutes)</h3>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Exercise 1: Basic Navigation</b><br/>
        1. Open Command Prompt (Win + R → cmd)<br/>
        2. Type <pre>dir</pre> and press Enter (list current directory)<br/>
        3. Type <pre>cd desktop</pre> and press Enter (go to desktop)<br/>
        4. Type <pre>dir</pre> to see desktop contents<br/>
        5. Type <pre>cd ..</pre> to go back up one level<br/>
        6. Type <pre>cd \</pre> to go to root directory<br/>
        <br/>
        <b>Exercise 2: Creating Folder Structure</b><br/>
        1. Type <pre>mkdir CMD_Practice</pre> (create folder)<br/>
        2. Type <pre>cd CMD_Practice</pre> (enter folder)<br/>
        3. Type <pre>mkdir Folder1 Folder2 Folder3</pre> (multiple folders)<br/>
        4. Type <pre>dir</pre> to verify creation<br/>
        5. Type <pre>cd Folder1</pre> (enter Folder1)<br/>
        6. Type <pre>echo Hello > test.txt</pre> (create text file)<br/>
        <br/>
        <b>Exercise 3: File Operations</b><br/>
        1. Type <pre>copy test.txt test_copy.txt</pre><br/>
        2. Type <pre>ren test_copy.txt backup.txt</pre><br/>
        3. Type <pre>type backup.txt</pre> (view contents)<br/>
        4. Type <pre>del test.txt</pre> (delete original)<br/>
        5. Type <pre>dir</pre> to verify operations<br/>
        <br/>
        <b>Exercise 4: Network Commands</b><br/>
        1. Type <pre>ipconfig</pre> (view network configuration)<br/>
        2. Note your IPv4 Address and Default Gateway<br/>
        3. Type <pre>ipconfig /all</pre> (detailed information)<br/>
        4. Type <pre>ping google.com</pre> (test connectivity)<br/>
        5. Type <pre>tracert google.com</pre> (trace route)<br/>
        <br/>
        <b>Exercise 5: System Information</b><br/>
        1. Type <pre>systeminfo</pre> (comprehensive system info)<br/>
        2. Find: OS Name, System Manufacturer, Total Physical Memory<br/>
        3. Type <pre>hostname</pre> (computer name)<br/>
        4. Type <pre>ver</pre> (Windows version)<br/>
        5. Type <pre>time</pre> and <pre>date</pre> (current time/date)
    </div>
    
    <h3>Network Commands Reference</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>ipconfig - IP Configuration</b><br/>
        <pre>
            ipconfig                    # Basic info<br/>
            ipconfig /all               # Detailed info<br/>
            ipconfig /release           # Release IP address<br/>
            ipconfig /renew             # Renew IP address<br/>
            ipconfig /flushdns          # Clear DNS cache<br/>
            ipconfig /displaydns        # Show DNS cache<br/>
        </pre>
        <br/>
        <b>ping - Test Connectivity</b><br/>
        <pre>
            ping google.com             # Basic ping<br/>
            ping -t google.com          # Continuous ping (Ctrl+C to stop)<br/>
            ping -n 10 google.com       # Send 10 packets<br/>
            ping -l 1000 google.com     # Send 1000 byte packets<br/>
            ping -4 google.com          # Force IPv4<br/>
            ping -6 google.com          # Force IPv6<br/>
        </pre>
        <br/>
        <b>tracert - Trace Route</b><br/>
        <pre>
            tracert google.com          # Trace route to Google<br/>
            tracert -d google.com       # Don't resolve addresses to names<br/>
            tracert -h 30 google.com    # Maximum 30 hops<br/>
            tracert -w 1000 google.com  # Wait 1000ms per hop<br/>
        </pre>
        <br/>
        <b>nslookup - DNS Lookup</b><br/>
        <pre>
            nslookup google.com         # Basic DNS lookup<br/>
            nslookup -type=mx gmail.com # Look up MX records<br/>
            nslookup -type=ns google.com # Look up name servers<br/>
        </pre>
        <br/>
        <b>netstat - Network Statistics</b><br/>
        <pre>
            netstat                     # Active connections<br/>
            netstat -a                  # All connections and ports<br/>
            netstat -b                  # Show executable involved<br/>
            netstat -n                  # Show addresses numerically<br/>
            netstat -ano                # Show PID, numeric addresses<br/>
        </pre>
    </div>
    
    <h3>Assignment Tasks</h3>
    
    <div class="assignment-box">
        <h4>Main Task: Create a Complete Folder Structure Using Only CMD</h4>
        
        <b>Requirements:</b>
        <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Using ONLY Command Prompt (no mouse, no File Explorer)<br/>
            2. Create the following folder structure on your Desktop:<br/>
            3. Create files within the structure<br/>
            4. Perform file operations (copy, move, rename, delete)<br/>
            5. Document all commands used<br/>
        </div>
        
        <b>Target Folder Structure:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <pre>
                Final_Exam/<br/>
                ├── Day_1_Windows/<br/>
                │   ├── Notes.txt<br/>
                │   ├── Screenshots/<br/>
                │   └── Practice_Files/<br/>
                ├── Day_2_Hardware/<br/>
                │   ├── Research.doc<br/>
                │   ├── Specs.txt<br/>
                │   └── Images/<br/>
                ├── Day_3_Files/<br/>
                │   ├── Organized/<br/>
                │   │   ├── Work/<br/>
                │   │   ├── Personal/<br/>
                │   │   └── Archive/<br/>
                │   └── templates/<br/>
                └── Day_4_CMD/<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;├── commands_used.txt<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;└── screenshots/
            </pre>
        </div>
        
        <b>Step-by-Step Tasks:</b>
        <ol>
            <li><b>Navigation:</b>
                <ul>
                    <li>Open Command Prompt as Administrator</li>
                    <li>Navigate to your Desktop</li>
                    <li>Verify your current location with appropriate command</li>
                </ul>
            </li>
            <li><b>Create Main Structure:</b>
                <ul>
                    <li>Create "Final_Exam" folder</li>
                    <li>Create all four day folders inside it</li>
                    <li>Create subfolders as shown in structure</li>
                </ul>
            </li>
            <li><b>File Operations:</b>
                <ul>
                    <li>Create "Notes.txt" in Day_1_Windows with some content</li>
                    <li>Copy Notes.txt to Day_2_Hardware as "Research.doc"</li>
                    <li>Create a file called "Specs.txt" in Day_2_Hardware</li>
                    <li>Move Specs.txt to Day_3_Files/Organized/Work/</li>
                    <li>Rename it to "System_Specs.txt"</li>
                </ul>
            </li>
            <li><b>Advanced Operations:</b>
                <ul>
                    <li>Make a folder hidden using attrib command</li>
                    <li>Create a batch file that sets up this structure</li>
                    <li>Delete a test folder and recreate it</li>
                </ul>
            </li>
            <li><b>Documentation:</b>
                <ul>
                    <li>Create "commands_used.txt" in Day_4_CMD</li>
                    <li>List every command you used with brief explanation</li>
                </ul>
            </li>
        </ol>
        
        <b>Command Reference for Tasks:</b>
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Basic Commands Needed:</b><br/>
            <pre>
                cd                          # Change directory<br/>
                mkdir                       # Make directory<br/>
                rmdir                       # Remove directory<br/>
                dir                         # List contents<br/>
                echo                        # Create file with content<br/>
                copy                        # Copy files<br/>
                move                        # Move files<br/>
                ren                         # Rename files<br/>
                del                         # Delete files<br/>
                attrib                      # Change file attributes<br/>
                type                        # View file contents<br/>
                cls                         # Clear screen<br/>
            </pre>
            <br/>
            <b>Example Command Sequence:</b><br/>
            <pre>
                cd desktop<br/>
                mkdir Final_Exam<br/>
                cd Final_Exam<br/>
                mkdir Day_1_Windows Day_2_Hardware Day_3_Files Day_4_CMD<br/>
                cd Day_1_Windows<br/>
                echo Windows Basics Notes > Notes.txt<br/>
                mkdir Screenshots Practice_Files<br/>
                cd ..<br/>
                # Continue with rest of structure...
            </pre>
        </div>
        
        <b>Challenge Tasks:</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Challenge 1: System Information Collection</b><br/>
            • Use <pre>systeminfo</pre> command<br/>
            • Redirect output to a file: <pre>systeminfo > system_details.txt</pre><br/>
            • Extract specific information (OS install date, RAM, etc.)<br/>
            • Create a formatted report from the information<br/>
            <br/>
            <b>Challenge 2: Network Diagnostics</b><br/>
            • Create a network diagnostic script<br/>
            • Check IP configuration<br/>
            • Test connectivity to multiple sites<br/>
            • Trace route to common destinations<br/>
            • Save all results to a log file<br/>
            <br/>
            <b>Challenge 3: Batch File Creation</b><br/>
            • Create a .bat file that sets up a project folder structure<br/>
            • Include comments in the batch file<br/>
            • Add error checking<br/>
            • Make it interactive (ask for project name)<br/>
            • Test the batch file works correctly
        </div>
        
        <b>Batch File Example:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <pre>
                @echo off<br/>
                REM ============================================<br/>
                REM Project Setup Batch File<br/>
                REM Creates standard folder structure for projects<br/>
                REM ============================================<br/>
                <br/>
                echo Project Setup Utility<br/>
                echo --------------------<br/>
                <br/>
                REM Ask for project name<br/>
                set /p project_name=Enter project name: <br/>
                <br/>
                REM Create main project folder<br/>
                mkdir "%project_name%"<br/>
                if errorlevel 1 (<br/>
                &nbsp;&nbsp;echo Error creating folder!<br/>
                &nbsp;&nbsp;pause<br/>
                &nbsp;&nbsp;exit /b 1<br/>
                )<br/>
                <br/>
                REM Navigate to project folder<br/>
                cd "%project_name%"<br/>
                <br/>
                REM Create standard folder structure<br/>
                echo Creating folder structure...<br/>
                mkdir Documentation<br/>
                mkdir Source<br/>
                mkdir Tests<br/>
                mkdir Resources<br/>
                mkdir Build<br/>
                mkdir Archive<br/>
                <br/>
                REM Create basic files<br/>
                echo # %project_name% > README.md<br/>
                echo TODO: Add project description >> README.md<br/>
                <br/>
                echo Project setup complete!<br/>
                dir<br/>
                pause
            </pre>
        </div>
        
        <b>Submission Requirements:</b>
        <ul>
            <li>Screenshot of completed folder structure in CMD</li>
            <li>Copy of commands_used.txt file</li>
            <li>Screenshot of systeminfo output</li>
            <li>Batch file created (if attempted challenge)</li>
            <li>Brief reflection on command line vs GUI experience</li>
        </ul>
    </div>
    
    <h3>Useful Command Line Tips and Tricks</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Tab Completion:</b><br/>
        • Start typing a file/folder name<br/>
        • Press Tab to auto-complete<br/>
        • Press Tab multiple times to cycle through options<br/>
        <br/>
        <b>2. Command History:</b><br/>
        • Press Up/Down arrows to navigate previous commands<br/>
        • Press F7 for command history window<br/>
        • Type "doskey /history" to see all previous commands<br/>
        <br/>
        <b>3. Copy/Paste in CMD:</b><br/>
        • Right-click title bar → Properties → Enable "QuickEdit Mode"<br/>
        • Select text with mouse, right-click to copy<br/>
        • Right-click to paste into CMD<br/>
        <br/>
        <b>4. Redirecting Output:</b><br/>
        • <pre>command > file.txt</pre> : Save output to file (overwrite)<br/>
        • <pre>command >> file.txt</pre> : Append output to file<br/>
        • <pre>command | more</pre> : Show output page by page<br/>
        <br/>
        <b>5. Running Multiple Commands:</b><br/>
        • <pre>command1 & command2</pre> : Run both sequentially<br/>
        • <pre>command1 && command2</pre> : Run second only if first succeeds<br/>
        • <pre>command1 || command2</pre> : Run second only if first fails<br/>
        <br/>
        <b>6. Getting Help:</b><br/>
        • <pre>command /?</pre> : Show help for any command<br/>
        • <pre>help</pre> : List basic commands<br/>
        • <pre>help command</pre> : Help for specific command<br/>
        <br/>
        <b>7. Wildcards:</b><br/>
        • <pre>*</pre> : Matches any sequence of characters<br/>
        • <pre>?</pre> : Matches any single character<br/>
        • Examples: <pre>dir *.txt</pre>, <pre>del temp*.tmp</pre>, <pre>copy file?.doc</pre>
    </div>
    
    <h3>Common CMD Errors and Solutions</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Error: "'command' is not recognized as an internal or external command"</b><br/>
        <b>Cause:</b> Command doesn't exist or PATH is not set correctly<br/>
        <b>Solution:</b><br/>
        1. Check spelling of command<br/>
        2. Use full path to command: <pre>C:\Windows\System32\ipconfig.exe</pre><br/>
        3. Check if command exists in System32 folder<br/>
        <br/>
        <b>Error: "Access is denied"</b><br/>
        <b>Cause:</b> Insufficient permissions<br/>
        <b>Solution:</b><br/>
        1. Run CMD as Administrator<br/>
        2. Check file/folder permissions<br/>
        3. Use <pre>takeown</pre> and <pre>icacls</pre> commands to gain access<br/>
        <br/>
        <b>Error: "The system cannot find the path specified"</b><br/>
        <b>Cause:</b> Path doesn't exist or has typo<br/>
        <b>Solution:</b><br/>
        1. Check spelling of path<br/>
        2. Use <pre>dir</pre> to verify folder exists<br/>
        3. Use quotes for paths with spaces: <pre>cd "C:\Program Files"</pre><br/>
        <br/>
        <b>Error: "The directory is not empty"</b><br/>
        <b>Cause:</b> Trying to delete non-empty folder with <pre>rmdir</pre><br/>
        <b>Solution:</b><br/>
        1. Delete files first, then folder<br/>
        2. Use <pre>rmdir /s foldername</pre> to delete recursively<br/>
        3. Use <pre>rmdir /s /q foldername</pre> for quiet deletion (no prompts)<br/>
        <br/>
        <b>Error: "File not found"</b><br/>
        <b>Cause:</b> File doesn't exist in current directory<br/>
        <b>Solution:</b><br/>
        1. Use <pre>dir</pre> to check if file exists<br/>
        2. Use full path to file<br/>
        3. Check current directory with <pre>cd</pre>
    </div>
    
    <h3>Real-World CMD Applications</h3>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Scenario 1: IT Support Troubleshooting</b><br/>
        <b>Problem:</b> User cannot connect to internet<br/>
        <b>CMD Solution:</b><br/>
        <pre>
            ipconfig /all              # Check network configuration<br/>
            ping 8.8.8.8               # Test basic connectivity<br/>
            ping google.com            # Test DNS resolution<br/>
            ipconfig /flushdns         # Clear DNS cache<br/>
            netsh winsock reset        # Reset network stack<br/>
            netsh int ip reset         # Reset IP configuration<br/>
        </pre>
        <br/>
        <b>Scenario 2: System Cleanup Script</b><br/>
        <b>Problem:</b> Computer running slow, needs cleanup<br/>
        <b>CMD Solution:</b><br/>
        <pre>
            cleanmgr /sagerun:1       # Disk Cleanup<br/>
            defrag C: /U /V           # Defragment drive<br/>
            del /s /q C:\*.tmp        # Delete temporary files<br/>
            del /s /q C:\*.log        # Delete log files<br/>
            ipconfig /flushdns        # Clear DNS cache<br/>
        </pre>
        <br/>
        <b>Scenario 3: Batch File for Daily Tasks</b><br/>
        <b>Problem:</b> Repetitive daily file organization<br/>
        <b>CMD Solution:</b> Create daily_setup.bat:<br/>
        <pre>
            @echo off<br/>
            REM Create dated folder for today<br/>
            mkdir C:\Work\%date:~10,4%-%date:~4,2%-%date:~7,2%<br/>
            <br/>
            REM Copy template files<br/>
            copy C:\Templates\*.docx C:\Work\<br/>
            <br/>
            REM Open frequently used programs<br/>
            start winword.exe<br/>
            start excel.exe<br/>
            start chrome.exe<br/>
            <br/>
            echo Daily setup complete!<br/>
            pause
        </pre>
    </div>
    
    <hr/>
    
    <div class="knowledge-check">
        <h4>Knowledge Check Quiz</h4>
        
        <b>Question 1:</b> What command shows the contents of the current directory?<br/>
        a) cd<br/>
        b) ls<br/>
        c) dir<br/>
        d) list<br/>
        <br/>
        <b>Question 2:</b> How do you create a new folder called "Projects" in CMD?<br/>
        a) new Projects<br/>
        b) create Projects<br/>
        c) mkdir Projects<br/>
        d) folder Projects<br/>
        <br/>
        <b>Question 3:</b> What does "cd .." do?<br/>
        a) Goes to root directory<br/>
        b) Goes up one directory level<br/>
        c) Shows current directory<br/>
        d) Creates a new directory<br/>
        <br/>
        <b>Question 4:</b> Which command shows your IP address?<br/>
        a) ipshow<br/>
        b) ifconfig<br/>
        c) ipconfig<br/>
        d) netinfo<br/>
        <br/>
        <b>Question 5:</b> What is the purpose of the "ping" command?<br/>
        a) Test network connectivity<br/>
        b) Show IP configuration<br/>
        c) Clear DNS cache<br/>
        d) Trace network route
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Day 4 Learning Objectives Achieved:</h3>
        <ul>
            <li>✅ Understand the purpose and advantages of command line interface</li>
            <li>✅ Navigate file system using CMD commands</li>
            <li>✅ Create, copy, move, rename, and delete files/folders</li>
            <li>✅ Use network diagnostic commands (ipconfig, ping, tracert)</li>
            <li>✅ Retrieve system information using CMD</li>
            <li>✅ Understand basic command syntax and options</li>
        </ul>
        
        <p><b>Week 1 Complete! Module 1 Review Preparation:</b><br/>
        1. Review all topics from Week 1: Windows, Hardware, File Management, CMD<br/>
        2. Practice creating the folder structure assignment<br/>
        3. Research your home network setup for Week 2<br/>
        4. Prepare questions about any topics that were unclear<br/>
        5. Ensure you can perform all practical tasks without assistance</p>
        
        <p><b>Interesting Fact:</b> The command line interface predates graphical interfaces by decades. Early computers in the 1960s used command lines, while the first successful GUI (Xerox Alto) didn't appear until 1973, and Windows didn't become popular until Windows 3.1 in 1992!</p>
        
        <p><b>Remember:</b> "Mastering the command line is like learning to drive manual transmission - it gives you more control, helps you understand how things work, and makes you a better 'driver' of your computer!"</p>
        
        <p><b>Next Week Preview:</b> In Week 2, we'll explore how data travels across networks, learn about binary and ASCII encoding, and understand how computers communicate with each other!</p>
    </div>`

            },

            "2-1": {
                icon: "fas fa-network-wired",
                title: "Networking Fundamentals",
                html: `<h1>Week 2, Day 1: Networking Fundamentals</h1>
<p>Today we'll understand how data travels from point A to point B across networks.</p>

<div class="analogy-box">
    <b>Analogy: The Network as a Postal System 📮</b><br/>
    
    Data Packets: Letters/envelopes with information<br/>
    IP Address: Your home address (unique location)<br/>
    Router: Local post office (directs traffic)<br/>
    Switch: Mail sorter in post office<br/>
    Modem: Bridge between local and national postal systems<br/>
    DNS: Phonebook (translates names to addresses)<br/>
    ISP: National postal service<br/>
    Firewall: Security checkpoint
</div>

<h3>Key Topics</h3>
<ul>
    <li>What is a Computer Network?</li>
    <li>LAN vs WAN vs Internet</li>
    <li>Network Hardware Components</li>
    <li>IP Addresses and Subnets</li>
    <li>How Wi-Fi Works</li>
    <li>Basic Network Troubleshooting</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. What is a Computer Network?</b><br/>

<b>Network Definition:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Two or more computers connected to share resources<br/>
    <b>Purpose:</b> Communication, resource sharing, data exchange<br/>
    <br/>
    <b>Types of Networks by Size:</b><br/>
    1. <b>PAN (Personal Area Network):</b> Very small (10 meters)<br/>
    &nbsp;&nbsp;&nbsp;• Examples: Bluetooth devices, USB connections<br/>
    2. <b>LAN (Local Area Network):</b> Small to medium area<br/>
    &nbsp;&nbsp;&nbsp;• Examples: Home network, office network, school lab<br/>
    3. <b>MAN (Metropolitan Area Network):</b> City-wide<br/>
    &nbsp;&nbsp;&nbsp;• Examples: City WiFi, university campuses<br/>
    4. <b>WAN (Wide Area Network):</b> Large geographical area<br/>
    &nbsp;&nbsp;&nbsp;• Examples: Internet, corporate networks across countries<br/>
    <br/>
    <b>Network Topologies (Physical Layout):</b><br/>
    • <b>Star:</b> All devices connect to central hub (most common)<br/>
    • <b>Bus:</b> Single cable connects all devices<br/>
    • <b>Ring:</b> Devices connected in circular fashion<br/>
    • <b>Mesh:</b> Every device connects to every other device<br/>
    • <b>Hybrid:</b> Combination of different topologies
</div>

<b>LAN vs WAN Comparison:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Aspect</th>
        <th style="padding: 10px; border: 1px solid #ddd;">LAN (Local)</th>
        <th style="padding: 10px; border: 1px solid #ddd;">WAN (Wide)</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Size</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Small area (home, office)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Large area (city, country)</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Speed</td>
        <td style="padding: 10px; border: 1px solid #ddd;">High (100 Mbps - 10 Gbps)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Lower (10-100 Mbps typical)</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Cost</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Low (owned equipment)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">High (leased lines)</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Ownership</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Private (you own it)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Public/Shared (ISP provides)</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Example</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Home WiFi, office Ethernet</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Internet, corporate VPN</td>
    </tr>
</table>

<b>b. Network Hardware Components</b><br/>

<b>Essential Networking Devices:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Modem (Modulator-Demodulator):</b><br/>
    • Converts digital signals to analog (for cable/phone lines)<br/>
    • Connects your network to your ISP (Internet Service Provider)<br/>
    • Usually provided by your internet company<br/>
    • Types: Cable, DSL, Fiber, Satellite<br/>
    <br/>
    <b>2. Router:</b><br/>
    • The "traffic cop" of your network<br/>
    • Directs data between devices on your network and the internet<br/>
    • Assigns local IP addresses (DHCP server)<br/>
    • Often includes Wi-Fi capabilities (wireless router)<br/>
    • Creates a firewall for basic security<br/>
    <br/>
    <b>3. Switch:</b><br/>
    • Connects multiple devices within a LAN<br/>
    • Smarter than a hub - knows which device is where<br/>
    • Types: Unmanaged (plug and play), Managed (configurable)<br/>
    • Ports: 4, 8, 16, 24, or 48 ports typically<br/>
    <br/>
    <b>4. Access Point (AP):</b><br/>
    • Extends Wi-Fi coverage<br/>
    • Connects wireless devices to wired network<br/>
    • Often built into routers<br/>
    <br/>
    <b>5. Network Interface Card (NIC):</b><br/>
    • Hardware in your computer that connects to network<br/>
    • Wired (Ethernet port) or Wireless (Wi-Fi card)<br/>
    • Each has unique MAC address
</div>

<b>Router vs Switch vs Hub:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Device</th>
        <th style="padding: 10px; border: 1px solid #ddd;">OSI Layer</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Function</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Intelligence</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Hub</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Layer 1 (Physical)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Broadcasts to all ports</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Dumb - no thinking</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Switch</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Layer 2 (Data Link)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Sends to specific port</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Smart - learns MAC addresses</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Router</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Layer 3 (Network)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Routes between networks</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Very smart - reads IP addresses</td>
    </tr>
</table>

<b>c. IP Addresses - The Digital Addresses</b><br/>

<b>Understanding IP Addresses:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>IP Address (Internet Protocol Address):</b><br/>
    • Unique identifier for each device on a network<br/>
    • Like a phone number or home address for your computer<br/>
    • Two versions: IPv4 and IPv6<br/>
    <br/>
    <b>IPv4 Address Format:</b><br/>
    • Four numbers separated by dots: 192.168.1.1<br/>
    • Each number: 0-255 (8 bits = 1 byte)<br/>
    • Total: 32 bits (4 bytes)<br/>
    • Example: 192.168.0.105<br/>
    <br/>
    <b>IPv6 Address Format:</b><br/>
    • Eight groups of four hex digits: 2001:0db8:85a3:0000:0000:8a2e:0370:7334<br/>
    • Total: 128 bits (16 bytes)<br/>
    • Solves IPv4 address exhaustion<br/>
    <br/>
    <b>Types of IP Addresses:</b><br/>
    • <b>Public IP:</b> Unique on the entire internet (assigned by ISP)<br/>
    • <b>Private IP:</b> Used within local networks (not routable on internet)<br/>
    • <b>Static IP:</b> Never changes<br/>
    • <b>Dynamic IP:</b> Changes periodically (from DHCP server)
</div>

<b>Private IP Ranges (RFC 1918):</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Class A:</b> 10.0.0.0 to 10.255.255.255<br/>
    &nbsp;&nbsp;• 16,777,216 addresses<br/>
    &nbsp;&nbsp;• Large organizations<br/>
    <br/>
    <b>Class B:</b> 172.16.0.0 to 172.31.255.255<br/>
    &nbsp;&nbsp;• 1,048,576 addresses<br/>
    &nbsp;&nbsp;• Medium organizations<br/>
    <br/>
    <b>Class C:</b> 192.168.0.0 to 192.168.255.255<br/>
    &nbsp;&nbsp;• 65,536 addresses<br/>
    &nbsp;&nbsp;• Home/small office networks (most common)<br/>
    <br/>
    <b>Special Addresses:</b><br/>
    • <b>127.0.0.1:</b> Localhost (your own computer)<br/>
    • <b>0.0.0.0:</b> Default route<br/>
    • <b>255.255.255.255:</b> Broadcast address<br/>
    • <b>169.254.x.x:</b> APIPA (Automatic Private IP Addressing) - when DHCP fails
</div>

<b>d. How Wi-Fi Works</b><br/>

<b>Wireless Networking Basics:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Wi-Fi Standards:</b><br/>
    • <b>802.11b:</b> 2.4 GHz, 11 Mbps (old)<br/>
    • <b>802.11g:</b> 2.4 GHz, 54 Mbps<br/>
    • <b>802.11n (Wi-Fi 4):</b> 2.4/5 GHz, 150-600 Mbps<br/>
    • <b>802.11ac (Wi-Fi 5):</b> 5 GHz, 433 Mbps - 1.3 Gbps<br/>
    • <b>802.11ax (Wi-Fi 6):</b> 2.4/5 GHz, up to 9.6 Gbps (current)<br/>
    • <b>802.11be (Wi-Fi 7):</b> Future standard<br/>
    <br/>
    <b>Frequency Bands:</b><br/>
    • <b>2.4 GHz:</b> Longer range, more interference (microwaves, Bluetooth)<br/>
    • <b>5 GHz:</b> Shorter range, less interference, faster speeds<br/>
    • <b>6 GHz:</b> New band for Wi-Fi 6E/7, less crowded<br/>
    <br/>
    <b>Wi-Fi Security Protocols:</b><br/>
    • <b>WEP:</b> Broken, never use<br/>
    • <b>WPA:</b> Better than WEP, but vulnerable<br/>
    • <b>WPA2:</b> Current standard (AES encryption)<br/>
    • <b>WPA3:</b> Latest standard (more secure)<br/>
    <br/>
    <b>Wi-Fi Components:</b><br/>
    • <b>SSID:</b> Network name (Service Set Identifier)<br/>
    • <b>Channel:</b> Specific frequency within band<br/>
    • <b>Bandwidth:</b> Channel width (20, 40, 80, 160 MHz)<br/>
    • <b>MIMO:</b> Multiple Input Multiple Output (multiple antennas)
</div>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Network Configuration Check</b><br/>
    1. Open Command Prompt (Win + R → cmd)<br/>
    2. Type <pre>ipconfig /all</pre> and press Enter<br/>
    3. Identify these key items:<br/>
    &nbsp;&nbsp;- IPv4 Address (your computer's address)<br/>
    &nbsp;&nbsp;- Subnet Mask<br/>
    &nbsp;&nbsp;- Default Gateway (your router's address)<br/>
    &nbsp;&nbsp;- DHCP Server<br/>
    &nbsp;&nbsp;- DNS Servers<br/>
    &nbsp;&nbsp;- Physical Address (MAC Address)<br/>
    <br/>
    <b>Exercise 2: Connectivity Testing</b><br/>
    1. Test local connectivity: <pre>ping 192.168.1.1</pre> (or your gateway)<br/>
    2. Test DNS resolution: <pre>ping google.com</pre><br/>
    3. Test with different options:<br/>
    &nbsp;&nbsp;<pre>ping -n 10 google.com</pre> (send 10 packets)<br/>
    &nbsp;&nbsp;<pre>ping -t google.com</pre> (continuous - Ctrl+C to stop)<br/>
    4. Trace route: <pre>tracert google.com</pre><br/>
    <br/>
    <b>Exercise 3: Network Information Gathering</b><br/>
    1. Find your public IP: <pre>nslookup myip.opendns.com resolver1.opendns.com</pre><br/>
    2. Check network statistics: <pre>netstat -an</pre><br/>
    3. Display routing table: <pre>route print</pre><br/>
    4. Check MAC address: <pre>getmac</pre><br/>
    <br/>
    <b>Exercise 4: Wi-Fi Information (if available)</b><br/>
    1. Type <pre>netsh wlan show interfaces</pre><br/>
    2. Note: SSID, Signal strength, Channel, Radio type<br/>
    3. Type <pre>netsh wlan show networks mode=bssid</pre><br/>
    4. See all available networks with details
</div>

<h3>Network Topology Examples</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Home Network Typical Setup:</b><br/>
    <pre>
        Internet → Modem → Router → Devices<br/>
                        │<br/>
                        ├──→ Desktop (wired)<br/>
                        ├──→ Laptop (Wi-Fi)<br/>
                        ├──→ Phone (Wi-Fi)<br/>
                        ├──→ Smart TV (Wi-Fi)<br/>
                        └──→ Printer (Wi-Fi)
    </pre>
    <br/>
    <b>Small Office Network:</b><br/>
    <pre>
        Internet → Firewall → Router → Switch → Devices<br/>
                                        │<br/>
                                        ├──→ Server<br/>
                                        ├──→ Workstation 1<br/>
                                        ├──→ Workstation 2<br/>
                                        ├──→ Network Printer<br/>
                                        └──→ Access Point → Wireless Devices
    </pre>
    <br/>
    <b>Key Components in These Setups:</b><br/>
    1. <b>Modem:</b> Converts ISP signal<br/>
    2. <b>Firewall:</b> Security filtering (often in router)<br/>
    3. <b>Router:</b> Directs traffic between networks<br/>
    4. <b>Switch:</b> Connects multiple wired devices<br/>
    5. <b>Access Point:</b> Provides wireless connectivity<br/>
    6. <b>Server:</b> Provides services (files, email, etc.)
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Home Network Analysis and Documentation</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Map your home or lab network infrastructure<br/>
        2. Document all connected devices and their IP addresses<br/>
        3. Test network connectivity and performance<br/>
        4. Create a network diagram<br/>
        5. Identify potential improvements or security issues<br/>
    </div>
    
    <b>Network Documentation Report Sections:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Section 1: Network Inventory</b><br/>
        • Internet Service Provider (ISP) and plan details<br/>
        • Modem model and specifications<br/>
        • Router model and specifications<br/>
        • Any additional networking equipment<br/>
        <br/>
        <b>Section 2: Connected Devices List</b><br/>
        Create a table with these columns:<br/>
        • Device Name/Type (Computer, Phone, TV, etc.)<br/>
        • MAC Address<br/>
        • IP Address (IPv4)<br/>
        • Connection Type (Wired/Wi-Fi)<br/>
        • Purpose/User<br/>
        <br/>
        <b>Section 3: Network Configuration</b><br/>
        • Network Name (SSID)<br/>
        • Security Protocol (WPA2, WPA3, etc.)<br/>
        • IP Address Range (e.g., 192.168.1.1-254)<br/>
        • Subnet Mask<br/>
        • Default Gateway<br/>
        • DNS Servers<br/>
        <br/>
        <b>Section 4: Performance Testing</b><br/>
        • Internet speed test results (use speedtest.net)<br/>
        • Local network transfer speeds<br/>
        • Wi-Fi signal strength in different locations<br/>
        • Latency (ping times) to various sites<br/>
    </div>
    
    <b>Data Collection Methods:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Method 1: Router Administration Page</b><br/>
        1. Find router IP (usually 192.168.1.1 or 192.168.0.1)<br/>
        2. Open browser and go to that address<br/>
        3. Login (check router label for credentials)<br/>
        4. Find:<br/>
        &nbsp;&nbsp;- Connected devices list<br/>
        &nbsp;&nbsp;- Network settings<br/>
        &nbsp;&nbsp;- Wireless settings<br/>
        &nbsp;&nbsp;- Security settings<br/>
        <br/>
        <b>Method 2: Using Command Prompt</b><br/>
        <pre>
            ipconfig /all              # Local configuration<br/>
            arp -a                     # Devices on local network<br/>
            netstat -ano               # Active connections<br/>
            netsh wlan show profiles   # Saved Wi-Fi networks<br/>
            ping -n 10 8.8.8.8         # Test latency<br/>
        </pre>
        <br/>
        <b>Method 3: Using Network Scanner Tools</b><br/>
        • Advanced IP Scanner (free)<br/>
        • Angry IP Scanner (free)<br/>
        • Fing (mobile app)<br/>
        • Wireshark (advanced packet analysis)
    </div>
    
    <b>Network Diagram Creation:</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Tools for Diagram Creation:</b><br/>
        • <b>Draw.io</b> (free, online)<br/>
        • <b>Lucidchart</b> (free tier)<br/>
        • <b>Microsoft Visio</b> (paid)<br/>
        • <b>PowerPoint/Word shapes</b> (basic)<br/>
        <br/>
        <b>Diagram Elements to Include:</b><br/>
        1. Internet cloud symbol<br/>
        2. Modem<br/>
        3. Router/Wireless Router<br/>
        4. Switch (if separate)<br/>
        5. Access Points (if separate)<br/>
        6. All connected devices with icons<br/>
        7. Connection lines (solid for wired, dashed for wireless)<br/>
        8. IP addresses next to devices<br/>
        9. Labels for device names<br/>
        <br/>
        <b>Professional Symbols to Use:</b><br/>
        🌐 Internet | 🖥️ Computer | 📱 Phone/Tablet | 📺 Smart TV<br/>
        🖨️ Printer | 🎮 Game Console | 🔒 Firewall | 📡 Access Point<br/>
        ⚡ Switch | 🔄 Router | 📶 Modem
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Network Security Audit</b><br/>
        • Check for default router passwords<br/>
        • Verify Wi-Fi security is WPA2 or WPA3<br/>
        • Look for open ports on your network<br/>
        • Check for firmware updates on router<br/>
        • Test password strength<br/>
        <br/>
        <b>Challenge 2: Performance Optimization</b><br/>
        • Find least congested Wi-Fi channel<br/>
        • Test optimal router placement<br/>
        • Check for bandwidth hogs<br/>
        • Set up QoS (Quality of Service) if available<br/>
        • Test with/without VPN<br/>
        <br/>
        <b>Challenge 3: Advanced Network Analysis</b><br/>
        • Use Wireshark to capture packets (basic)<br/>
        • Set up a network monitor dashboard<br/>
        • Create a network map with all IPs automatically<br/>
        • Test network under load (multiple devices streaming)<br/>
        • Compare wired vs wireless performance
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>Network diagram (digital or clear photo of hand-drawn)</li>
        <li>Complete device inventory table</li>
        <li>Screenshots of ipconfig /all and speed test results</li>
        <li>Analysis of network security and performance</li>
        <li>Recommendations for improvements</li>
        <li>Minimum 3 pages, maximum 8 pages</li>
    </ul>
</div>

<h3>Common Network Issues and Solutions</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Problem 1: "No Internet Connection"</b><br/>
    <b>Troubleshooting Steps:</b><br/>
    1. Check physical connections (cables, power)<br/>
    2. Restart modem and router (unplug 30 seconds)<br/>
    3. Check ISP status (outage?)<br/>
    4. Test with different device<br/>
    5. Check IP configuration (ipconfig)<br/>
    &nbsp;&nbsp;- If 169.254.x.x: DHCP failure<br/>
    &nbsp;&nbsp;- If no IP: Network adapter issue<br/>
    6. Try wired connection to isolate Wi-Fi issue<br/>
    <br/>
    <b>Problem 2: "Slow Internet"</b><br/>
    <b>Possible Causes:</b><br/>
    1. Too many devices using bandwidth<br/>
    2. ISP throttling or plan limits<br/>
    3. Wi-Fi interference or weak signal<br/>
    4. Old router/modem<br/>
    5. Malware/virus on device<br/>
    <b>Solutions:</b><br/>
    1. Run speed test at different times<br/>
    2. Check for background downloads/uploads<br/>
    3. Change Wi-Fi channel<br/>
    4. Move closer to router<br/>
    5. Update router firmware<br/>
    <br/>
    <b>Problem 3: "Can't Connect to Specific Website"</b><br/>
    <b>Troubleshooting:</b><br/>
    1. Check if site is down for everyone (downforeveryoneorjustme.com)<br/>
    2. Try different browser<br/>
    3. Clear browser cache and cookies<br/>
    4. Flush DNS: <pre>ipconfig /flushdns</pre><br/>
    5. Check firewall/antivirus settings<br/>
    6. Try different DNS server (8.8.8.8, 1.1.1.1)<br/>
    <br/>
    <b>Problem 4: "Intermittent Connection Drops"</b><br/>
    <b>Possible Causes:</b><br/>
    1. Loose cable connections<br/>
    2. Overheating equipment<br/>
    3. ISP line issues<br/>
    4. Wireless interference<br/>
    5. Faulty network adapter<br/>
    <b>Diagnosis:</b><br/>
    1. Ping continuously: <pre>ping -t google.com</pre><br/>
    2. Check event logs on router<br/>
    3. Monitor signal strength<br/>
    4. Test with different cables
</div>

<h3>Future Networking Trends</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. 5G and Beyond:</b><br/>
    • Much faster than current cellular networks<br/>
    • Lower latency (1ms or less)<br/>
    • May replace home internet for some users<br/>
    • Enables IoT (Internet of Things) devices<br/>
    <br/>
    <b>2. Wi-Fi 6/6E and Wi-Fi 7:</b><br/>
    • Faster speeds (up to 9.6 Gbps for Wi-Fi 6)<br/>
    • Better performance in crowded areas<br/>
    • Lower power consumption<br/>
    • Backward compatible with older devices<br/>
    <br/>
    <b>3. IoT (Internet of Things):</b><br/>
    • Everything connected: lights, appliances, cars<br/>
    • Smart homes and smart cities<br/>
    • Security challenges (more devices = more vulnerabilities)<br/>
    • Mesh networks for better coverage<br/>
    <br/>
    <b>4. Edge Computing:</b><br/>
    • Processing data closer to where it's generated<br/>
    • Reduced latency for real-time applications<br/>
    • Less data sent to central cloud<br/>
    • Important for autonomous vehicles, AR/VR<br/>
    <br/>
    <b>5. Quantum Networking:</b><br/>
    • Ultra-secure communication using quantum encryption<br/>
    • Still experimental<br/>
    • Could revolutionize secure communications
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> What device connects your home network to your ISP?<br/>
    a) Router<br/>
    b) Switch<br/>
    c) Modem<br/>
    d) Access Point<br/>
    <br/>
    <b>Question 2:</b> Which IP address range is used for private networks?<br/>
    a) 8.8.8.8<br/>
    b) 192.168.1.1<br/>
    c) 172.217.14.206<br/>
    d) 127.0.0.1<br/>
    <br/>
    <b>Question 3:</b> What command shows your IP configuration in Windows?<br/>
    a) ifconfig<br/>
    b) ipshow<br/>
    c) netstat<br/>
    d) ipconfig<br/>
    <br/>
    <b>Question 4:</b> Which Wi-Fi security protocol should you NEVER use?<br/>
    a) WPA2<br/>
    b) WPA3<br/>
    c) WEP<br/>
    d) WPA<br/>
    <br/>
    <b>Question 5:</b> What does LAN stand for?<br/>
    a) Large Area Network<br/>
    b) Local Area Network<br/>
    c) Linked Access Network<br/>
    d) Longitudinal Area Network
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 1 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Understand different types of computer networks</li>
        <li>✅ Identify key networking hardware components</li>
        <li>✅ Explain IP addresses and their purpose</li>
        <li>✅ Understand how Wi-Fi networks operate</li>
        <li>✅ Use command line tools for network diagnostics</li>
        <li>✅ Map and document a network infrastructure</li>
    </ul>
    
    <p><b>Homework Preparation for Day 2:</b><br/>
    1. Practice converting decimal numbers to binary<br/>
    2. Research what ASCII stands for<br/>
    3. Try typing Alt codes (Alt+65 = A, Alt+66 = B)<br/>
    4. Think about how computers store text internally<br/>
    5. Explore character encoding on different devices</p>
    
    <p><b>Interesting Fact:</b> The first computer network (ARPANET) was created in 1969 and had only 4 nodes: UCLA, Stanford, UC Santa Barbara, and University of Utah. The first message sent was "LO" - they were trying to send "LOGIN" but the system crashed after two letters!</p>
    
    <p><b>Remember:</b> "Understanding networks is like understanding roads and traffic systems - once you know how data travels, you can fix traffic jams, plan better routes, and avoid accidents!"</p>
</div>`
            },
            "2-2": {
                icon: "fas fa-code",
                title: "ASCII & Binary Basics",
                html: `<h1>Week 2, Day 2: ASCII & Binary Basics</h1>
<p>Today we'll learn the fundamental language of computers - binary - and how text is encoded using ASCII.</p>

<div class="analogy-box">
    <b>Analogy: Binary as Light Switches, ASCII as Code Book 💡</b><br/>
    
    Binary System: Row of light switches (ON/OFF)<br/>
    Bit: Single light switch (0 or 1)<br/>
    Byte: 8 light switches together<br/>
    ASCII Table: Code book showing which pattern = which letter<br/>
    Character Encoding: Agreed-upon rules for the code book<br/>
    Decimal System: Normal counting (0-9)<br/>
    Hexadecimal: Shorthand for binary (0-9, A-F)<br/>
    Unicode: Expanded global code book
</div>

<h3>Key Topics</h3>
<ul>
    <li>Binary Number System Basics</li>
    <li>Bits, Bytes, and Data Sizes</li>
    <li>ASCII Character Encoding</li>
    <li>Decimal to Binary Conversion</li>
    <li>Binary to Decimal Conversion</li>
    <li>Real-world Applications</li>
    <li>Introduction to Hexadecimal</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Binary Number System - The Language of Computers</b><br/>

<b>Why Binary?</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Computers are Electronic:</b> They work with electricity<br/>
    <b>Simplest States:</b> ON (1) or OFF (0)<br/>
    <b>Reliable:</b> Easy to distinguish between two states<br/>
    <b>Mathematical Foundation:</b> Boolean algebra (true/false)<br/>
    <br/>
    <b>Comparison of Number Systems:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">System</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Base</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Digits</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Used By</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Binary</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0, 1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Computers</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Decimal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0-9</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Humans</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Hexadecimal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">16</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0-9, A-F</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Programmers</td>
        </tr>
    </table>
    
    <b>Understanding Base Systems:</b><br/>
    • <b>Decimal (Base 10):</b> Each position is power of 10<br/>
    &nbsp;&nbsp;Example: 123 = (1 × 10²) + (2 × 10¹) + (3 × 10⁰)<br/>
    • <b>Binary (Base 2):</b> Each position is power of 2<br/>
    &nbsp;&nbsp;Example: 1011 = (1 × 2³) + (0 × 2²) + (1 × 2¹) + (1 × 2⁰) = 8 + 0 + 2 + 1 = 11<br/>
    • <b>Hexadecimal (Base 16):</b> Each position is power of 16<br/>
    &nbsp;&nbsp;Example: 1A3 = (1 × 16²) + (10 × 16¹) + (3 × 16⁰) = 256 + 160 + 3 = 419
</div>

<b>Bits and Bytes - The Building Blocks</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Bit (Binary Digit):</b> Smallest unit - 0 or 1<br/>
    <b>Byte:</b> 8 bits together (most common unit)<br/>
    <br/>
    <b>Why 8 bits = 1 byte?</b><br/>
    • Historical reasons (IBM System/360 in 1964)<br/>
    • Enough combinations for alphabet, numbers, punctuation (2⁸ = 256 possibilities)<br/>
    • Powers of 2 are natural for binary systems<br/>
    <br/>
    <b>Data Size Units:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">Unit</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Size</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Equals</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Bit (b)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0 or 1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1/8 byte</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Network speed (Mbps)</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Byte (B)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">8 bits</td>
            <td style="padding: 8px; border: 1px solid #ddd;">-</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Single character</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Kilobyte (KB)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1,024 bytes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2¹⁰ bytes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Small text document</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Megabyte (MB)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1,024 KB</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2²⁰ bytes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">MP3 song, photo</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Gigabyte (GB)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1,024 MB</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2³⁰ bytes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Movie, game</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Terabyte (TB)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1,024 GB</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2⁴⁰ bytes</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Hard drive</td>
        </tr>
    </table>
    
    <b>Important Note:</b> Storage uses binary multiples (powers of 2), while network speeds often use decimal multiples (powers of 10). This is why a 1TB drive shows as ~931GB in Windows.
</div>

<b>b. Decimal to Binary Conversion</b><br/>

<b>Method 1: Division by 2 (Most Common)</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Steps:</b><br/>
    1. Divide decimal number by 2<br/>
    2. Write down remainder (0 or 1)<br/>
    3. Use quotient for next division<br/>
    4. Repeat until quotient is 0<br/>
    5. Read remainders from bottom to top<br/>
    <br/>
    <b>Example: Convert 13 to binary</b><br/>
    <pre>
        13 ÷ 2 = 6 remainder 1 ↑<br/>
        6 ÷ 2 = 3 remainder 0 ↑<br/>
        3 ÷ 2 = 1 remainder 1 ↑<br/>
        1 ÷ 2 = 0 remainder 1 ↑<br/>
        Read bottom to top: 1101<br/>
        So: 13₁₀ = 1101₂
    </pre>
    <br/>
    <b>Example: Convert 42 to binary</b><br/>
    <pre>
        42 ÷ 2 = 21 remainder 0 ↑<br/>
        21 ÷ 2 = 10 remainder 1 ↑<br/>
        10 ÷ 2 = 5 remainder 0 ↑<br/>
        5 ÷ 2 = 2 remainder 1 ↑<br/>
        2 ÷ 2 = 1 remainder 0 ↑<br/>
        1 ÷ 2 = 0 remainder 1 ↑<br/>
        Read bottom to top: 101010<br/>
        So: 42₁₀ = 101010₂
    </pre>
</div>

<b>Method 2: Powers of 2 Subtraction</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Steps:</b><br/>
    1. List powers of 2: 128, 64, 32, 16, 8, 4, 2, 1<br/>
    2. Find largest power that fits into your number<br/>
    3. Subtract it, mark 1 in that position<br/>
    4. Continue with remainder<br/>
    5. Mark 0 for powers not used<br/>
    <br/>
    <b>Example: Convert 87 to binary</b><br/>
    <pre>
        Powers of 2: 128 64 32 16 8 4 2 1<br/>
        <br/>
        87 - 64 = 23 (1 in 64 position)<br/>
        23 - 16 = 7  (1 in 16 position)<br/>
        7 - 4 = 3    (1 in 4 position)<br/>
        3 - 2 = 1    (1 in 2 position)<br/>
        1 - 1 = 0    (1 in 1 position)<br/>
        <br/>
        Binary: 0   1   0   1   0   1   1   1<br/>
        Position: 128 64  32  16  8   4   2   1<br/>
        <br/>
        So: 87₁₀ = 01010111₂ (usually written as 1010111)
    </pre>
</div>

<b>c. Binary to Decimal Conversion</b><br/>

<b>Method: Multiply Each Bit by Its Position Value</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Steps:</b><br/>
    1. Write binary number<br/>
    2. Label positions from right (starting at 0)<br/>
    3. Multiply each bit by 2^position<br/>
    4. Sum all results<br/>
    <br/>
    <b>Example: Convert 1101 to decimal</b><br/>
    <pre>
        Binary:  1   1   0   1<br/>
        Position: 3   2   1   0  (from right)<br/>
        Value:   8   4   2   1  (2³=8, 2²=4, 2¹=2, 2⁰=1)<br/>
        <br/>
        Calculation:<br/>
        (1 × 8) + (1 × 4) + (0 × 2) + (1 × 1)<br/>
        = 8 + 4 + 0 + 1<br/>
        = 13<br/>
        <br/>
        So: 1101₂ = 13₁₀
    </pre>
    <br/>
    <b>Example: Convert 101010 to decimal</b><br/>
    <pre>
        Binary:  1   0   1   0   1   0<br/>
        Position: 5   4   3   2   1   0<br/>
        Value:   32  16  8   4   2   1<br/>
        <br/>
        Calculation:<br/>
        (1 × 32) + (0 × 16) + (1 × 8) + (0 × 4) + (1 × 2) + (0 × 1)<br/>
        = 32 + 0 + 8 + 0 + 2 + 0<br/>
        = 42<br/>
        <br/>
        So: 101010₂ = 42₁₀
    </pre>
</div>

<b>d. ASCII - American Standard Code for Information Interchange</b><br/>

<b>What is ASCII?</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Character encoding standard for electronic communication<br/>
    <b>Created:</b> 1963, updated 1967, 1986<br/>
    <b>Purpose:</b> Standard way to represent text in computers<br/>
    <b>Size:</b> Originally 7-bit (128 characters), extended to 8-bit (256 characters)<br/>
    <br/>
    <b>ASCII Character Groups:</b><br/>
    1. <b>Control Characters (0-31):</b> Non-printing, control functions<br/>
    &nbsp;&nbsp;• NUL (0), LF (10 - Line Feed), CR (13 - Carriage Return)<br/>
    &nbsp;&nbsp;• ESC (27 - Escape), DEL (127 - Delete)<br/>
    2. <b>Printable Characters (32-126):</b> What we see on screen<br/>
    &nbsp;&nbsp;• Space (32), numbers (48-57)<br/>
    &nbsp;&nbsp;• Uppercase letters (65-90)<br/>
    &nbsp;&nbsp;• Lowercase letters (97-122)<br/>
    &nbsp;&nbsp;• Punctuation and symbols<br/>
    3. <b>Extended ASCII (128-255):</b> Additional symbols, varies by system
</div>

<b>Important ASCII Codes to Remember:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Char</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Decimal</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Binary</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Hex</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Space</td>
        <td style="padding: 10px; border: 1px solid #ddd;">32</td>
        <td style="padding: 10px; border: 1px solid #ddd;">00100000</td>
        <td style="padding: 10px; border: 1px solid #ddd;">20</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Blank space</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">0-9</td>
        <td style="padding: 10px; border: 1px solid #ddd;">48-57</td>
        <td style="padding: 10px; border: 1px solid #ddd;">00110000-00111001</td>
        <td style="padding: 10px; border: 1px solid #ddd;">30-39</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Numbers</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">A</td>
        <td style="padding: 10px; border: 1px solid #ddd;">65</td>
        <td style="padding: 10px; border: 1px solid #ddd;">01000001</td>
        <td style="padding: 10px; border: 1px solid #ddd;">41</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Uppercase A</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">B</td>
        <td style="padding: 10px; border: 1px solid #ddd;">66</td>
        <td style="padding: 10px; border: 1px solid #ddd;">01000010</td>
        <td style="padding: 10px; border: 1px solid #ddd;">42</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Uppercase B</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">a</td>
        <td style="padding: 10px; border: 1px solid #ddd;">97</td>
        <td style="padding: 10px; border: 1px solid #ddd;">01100001</td>
        <td style="padding: 10px; border: 1px solid #ddd;">61</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Lowercase a</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">b</td>
        <td style="padding: 10px; border: 1px solid #ddd;">98</td>
        <td style="padding: 10px; border: 1px solid #ddd;">01100010</td>
        <td style="padding: 10px; border: 1px solid #ddd;">62</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Lowercase b</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">LF</td>
        <td style="padding: 10px; border: 1px solid #ddd;">10</td>
        <td style="padding: 10px; border: 1px solid #ddd;">00001010</td>
        <td style="padding: 10px; border: 1px solid #ddd;">0A</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Line Feed (new line)</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">CR</td>
        <td style="padding: 10px; border: 1px solid #ddd;">13</td>
        <td style="padding: 10px; border: 1px solid #ddd;">00001101</td>
        <td style="padding: 10px; border: 1px solid #ddd;">0D</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Carriage Return</td>
    </tr>
</table>

<b>ASCII Pattern Observations:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Interesting Patterns in ASCII:</b><br/>
    1. <b>Uppercase to Lowercase:</b> Difference of 32<br/>
    &nbsp;&nbsp;• A=65, a=97 (97-65=32)<br/>
    &nbsp;&nbsp;• B=66, b=98 (98-66=32)<br/>
    &nbsp;&nbsp;• Convert by flipping 6th bit (bit 5 from right)<br/>
    <br/>
    2. <b>Letters are Sequential:</b><br/>
    &nbsp;&nbsp;• A=65, B=66, C=67... Z=90<br/>
    &nbsp;&nbsp;• a=97, b=98, c=99... z=122<br/>
    &nbsp;&nbsp;• 0=48, 1=49, 2=50... 9=57<br/>
    <br/>
    3. <b>Binary Patterns:</b><br/>
    &nbsp;&nbsp;• Uppercase letters: 010xxxxx (65-90)<br/>
    &nbsp;&nbsp;• Lowercase letters: 011xxxxx (97-122)<br/>
    &nbsp;&nbsp;• Numbers: 0011xxxx (48-57)<br/>
    <br/>
    4. <b>Control Characters:</b><br/>
    &nbsp;&nbsp;• NULL (0): 00000000<br/>
    &nbsp;&nbsp;• ESC (27): 00011011<br/>
    &nbsp;&nbsp;• DEL (127): 01111111
</div>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Manual Binary Conversion</b><br/>
    1. Convert these decimal numbers to binary:<br/>
    &nbsp;&nbsp;a) 7<br/>
    &nbsp;&nbsp;b) 15<br/>
    &nbsp;&nbsp;c) 31<br/>
    &nbsp;&nbsp;d) 63<br/>
    &nbsp;&nbsp;e) 100<br/>
    &nbsp;&nbsp;f) 255<br/>
    2. Convert these binary numbers to decimal:<br/>
    &nbsp;&nbsp;a) 1010<br/>
    &nbsp;&nbsp;b) 1111<br/>
    &nbsp;&nbsp;c) 10000<br/>
    &nbsp;&nbsp;d) 101101<br/>
    &nbsp;&nbsp;e) 11111111<br/>
    <br/>
    <b>Exercise 2: ASCII Character Encoding</b><br/>
    1. Use ASCII table to encode your first name:<br/>
    &nbsp;&nbsp;• Write each letter's decimal value<br/>
    &nbsp;&nbsp;• Convert each to binary (8-bit)<br/>
    &nbsp;&nbsp;• Example: "CAT" = 67, 65, 84 = 01000011 01000001 01010100<br/>
    2. Encode the word "DATA" in:<br/>
    &nbsp;&nbsp;• Decimal ASCII<br/>
    &nbsp;&nbsp;• Binary ASCII<br/>
    &nbsp;&nbsp;• Count total bits used<br/>
    <br/>
    <b>Exercise 3: Alt Code Practice</b><br/>
    1. Open Notepad<br/>
    2. Hold Alt and type (on number pad):<br/>
    &nbsp;&nbsp;• Alt+65 = A<br/>
    &nbsp;&nbsp;• Alt+66 = B<br/>
    &nbsp;&nbsp;• Alt+67 = C<br/>
    &nbsp;&nbsp;• Alt+97 = a<br/>
    &nbsp;&nbsp;• Alt+98 = b<br/>
    &nbsp;&nbsp;• Alt+48 = 0<br/>
    &nbsp;&nbsp;• Alt+49 = 1<br/>
    3. Try some symbols:<br/>
    &nbsp;&nbsp;• Alt+169 = ©<br/>
    &nbsp;&nbsp;• Alt+174 = ®<br/>
    &nbsp;&nbsp;• Alt+64 = @<br/>
    <br/>
    <b>Exercise 4: File Size Experiment</b><br/>
    1. Create a text file with single letter "A"<br/>
    2. Check file size (should be 1 byte)<br/>
    3. Add more letters, check size increases<br/>
    4. Create files with different content:<br/>
    &nbsp;&nbsp;• "Hello" (5 bytes)<br/>
    &nbsp;&nbsp;• "Hello World" (11 bytes + space)<br/>
    &nbsp;&nbsp;• "Hello\\nWorld" (11 bytes + newline character)
</div>

<h3>Binary Arithmetic Basics</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Binary Addition Rules:</b><br/>
    0 + 0 = 0<br/>
    0 + 1 = 1<br/>
    1 + 0 = 1<br/>
    1 + 1 = 0, carry 1 (10 in binary)<br/>
    1 + 1 + 1 = 1, carry 1 (11 in binary)<br/>
    <br/>
    <b>Example: Add 1011 (11) + 1101 (13)</b><br/>
    <pre>
            1 1 1    ← carries<br/>
            1 0 1 1  ← 11<br/>
        + 1 1 0 1  ← 13<br/>
        ---------<br/>
        1 1 0 0 0  ← 24<br/>
        <br/>
        Verification: 11 + 13 = 24<br/>
        11000₂ = 16 + 8 = 24
    </pre>
    <br/>
    <b>Binary Subtraction Rules:</b><br/>
    0 - 0 = 0<br/>
    1 - 0 = 1<br/>
    1 - 1 = 0<br/>
    0 - 1 = 1, borrow 1<br/>
    <br/>
    <b>Example: Subtract 1101 (13) - 1011 (11)</b><br/>
    <pre>
                ← borrows<br/>
            1 1 0 1  ← 13<br/>
        - 1 0 1 1  ← 11<br/>
        ---------<br/>
            0 0 1 0  ← 2<br/>
        <br/>
        Verification: 13 - 11 = 2<br/>
        0010₂ = 2
    </pre>
</div>

<h3>Introduction to Hexadecimal</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Why Hexadecimal?</b><br/>
    1. <b>Compact:</b> 1 hex digit = 4 binary digits (nibble)<br/>
    2. <b>Readable:</b> Easier for humans than long binary strings<br/>
    3. <b>Aligned:</b> 2 hex digits = 1 byte (8 bits)<br/>
    4. <b>Common:</b> Used in programming, memory addresses, colors<br/>
    <br/>
    <b>Hexadecimal Digits:</b><br/>
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F<br/>
    A=10, B=11, C=12, D=13, E=14, F=15<br/>
    <br/>
    <b>Binary ↔ Hex Conversion:</b><br/>
    • Group binary into 4-bit chunks (nibbles)<br/>
    • Convert each chunk to hex<br/>
    • Example: 1101 1010 = D A = DA₁₆<br/>
    <br/>
    <b>Decimal ↔ Hex Conversion:</b><br/>
    • Divide by 16 (like binary divide by 2)<br/>
    • Example: 255 ÷ 16 = 15 remainder 15<br/>
    &nbsp;&nbsp;15 in hex = F, remainder 15 = F<br/>
    &nbsp;&nbsp;So: 255₁₀ = FF₁₆<br/>
    <br/>
    <b>Common Hex Values:</b><br/>
    • 0xFF = 255 (maximum byte value)<br/>
    • 0x00 to 0xFF = 0 to 255<br/>
    • Colors: #FF0000 = Red, #00FF00 = Green, #0000FF = Blue<br/>
    • Memory addresses: 0x0000 to 0xFFFF (64KB)
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Binary and ASCII Encoding Project</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Convert between decimal, binary, and hexadecimal<br/>
        2. Encode and decode text using ASCII<br/>
        3. Calculate file sizes for different content<br/>
        4. Create a simple encoding/decoding tool concept<br/>
        5. Solve binary arithmetic problems<br/>
    </div>
    
    <b>Part 1: Number System Conversions</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Complete this conversion table:</b><br/>
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background-color: #f0f0f0;">
                <th style="padding: 8px; border: 1px solid #ddd;">Decimal</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Binary (8-bit)</th>
                <th style="padding: 8px; border: 1px solid #ddd;">Hexadecimal</th>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">10</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
                <td style="padding: 8px; border: 1px solid #ddd;">01100100</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">255</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
                <td style="padding: 8px; border: 1px solid #ddd;">0x2A</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">128</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
                <td style="padding: 8px; border: 1px solid #ddd;">________</td>
            </tr>
        </table>
        
        <b>Additional Conversions:</b><br/>
        1. Convert your age to binary and hexadecimal<br/>
        2. Convert today's date (day only) to binary<br/>
        3. Find the binary for 2^0, 2^1, 2^2, 2^3, 2^4, 2^5, 2^6, 2^7<br/>
        4. What's the maximum decimal number you can represent with:<br/>
        &nbsp;&nbsp;&nbsp;a) 4 bits<br/>
        &nbsp;&nbsp;&nbsp;b) 8 bits<br/>
        &nbsp;&nbsp;&nbsp;c) 16 bits<br/>
        &nbsp;&nbsp;&nbsp;d) 32 bits
    </div>
    
    <b>Part 2: ASCII Encoding Challenge</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Encode the following phrases using ASCII:</b><br/>
        1. "HELLO"<br/>
        &nbsp;&nbsp;• Decimal values:<br/>
        &nbsp;&nbsp;• Binary (8-bit for each character):<br/>
        &nbsp;&nbsp;• Total bits:<br/>
        &nbsp;&nbsp;• Total bytes:<br/>
        <br/>
        2. "IT Class 2024"<br/>
        &nbsp;&nbsp;• Include spaces and numbers<br/>
        &nbsp;&nbsp;• Show decimal for each character<br/>
        &nbsp;&nbsp;• Calculate total storage needed<br/>
        <br/>
        3. Create a secret message:<br/>
        &nbsp;&nbsp;• Write a 10-character message<br/>
        &nbsp;&nbsp;• Encode it in binary ASCII<br/>
        &nbsp;&nbsp;• Give the binary to a classmate to decode<br/>
        <br/>
        <b>ASCII Pattern Discovery:</b><br/>
        1. What's the difference between 'A' and 'a' in:<br/>
        &nbsp;&nbsp;• Decimal?<br/>
        &nbsp;&nbsp;• Binary? (which bit changes?)<br/>
        2. What pattern do you notice with uppercase letters?<br/>
        3. What pattern do you notice with numbers?
    </div>
    
    <b>Part 3: Binary Arithmetic</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Solve these binary arithmetic problems:</b><br/>
        1. Addition:<br/>
        &nbsp;&nbsp;a) 101 + 110 = ________<br/>
        &nbsp;&nbsp;b) 1111 + 1010 = ________<br/>
        &nbsp;&nbsp;c) 10011 + 11001 = ________<br/>
        <br/>
        2. Subtraction:<br/>
        &nbsp;&nbsp;a) 110 - 101 = ________<br/>
        &nbsp;&nbsp;b) 1000 - 0111 = ________<br/>
        &nbsp;&nbsp;c) 10101 - 01110 = ________<br/>
        <br/>
        3. Real-world application:<br/>
        &nbsp;&nbsp;• If a text file contains "Hello World" (11 characters)<br/>
        &nbsp;&nbsp;• How many bits does it use?<br/>
        &nbsp;&nbsp;• How many bytes?<br/>
        &nbsp;&nbsp;• If you add "!" at the end, what's the new size?<br/>
        <br/>
        4. Storage calculation:<br/>
        &nbsp;&nbsp;• A book has 50,000 words<br/>
        &nbsp;&nbsp;• Average word length is 5 letters<br/>
        &nbsp;&nbsp;• Spaces between words<br/>
        &nbsp;&nbsp;• How many bytes to store as plain text?<br/>
        &nbsp;&nbsp;• Convert to kilobytes
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Create a Simple Encoder/Decoder</b><br/>
        • Design a simple substitution cipher using ASCII<br/>
        • Example: Shift each letter by 3 positions (A→D, B→E, etc.)<br/>
        • Create encoding and decoding tables<br/>
        • Encode a secret message<br/>
        • Give encoded message and key to decode<br/>
        <br/>
        <b>Challenge 2: Binary Image Concept</b><br/>
        • A simple black and white image is 10x10 pixels<br/>
        • Each pixel: 0=white, 1=black<br/>
        • Design a simple shape (letter or smiley)<br/>
        • Write the binary representation<br/>
        • Calculate storage needed for this image<br/>
        <br/>
        <b>Challenge 3: Advanced Conversions</b><br/>
        • Convert between different bases: binary, octal, decimal, hex<br/>
        • Learn about two's complement for negative numbers<br/>
        • Research how floating point numbers are stored<br/>
        • Explore how colors are represented in binary (RGB)
    </div>
    
    <b>Practical Application: File Size Calculator</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a file size calculator for these scenarios:</b><br/>
        <br/>
        1. <b>Text Document:</b><br/>
        &nbsp;&nbsp;• 5 pages, 300 words per page, average 5 letters per word<br/>
        &nbsp;&nbsp;• Spaces between words, paragraphs with newlines<br/>
        &nbsp;&nbsp;• Calculate size in bytes, KB<br/>
        <br/>
        2. <b>Simple Database Record:</b><br/>
        &nbsp;&nbsp;• Each record has: Name (20 chars), Age (3 chars), ID (10 chars)<br/>
        &nbsp;&nbsp;• 1000 records in database<br/>
        &nbsp;&nbsp;• Calculate total storage<br/>
        <br/>
        3. <b>Comparison:</b><br/>
        &nbsp;&nbsp;• Same text stored in different formats:<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;- Plain ASCII text (.txt)<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;- Microsoft Word with formatting (.docx)<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;- PDF file<br/>
        &nbsp;&nbsp;• Why are the sizes different?
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>Completed conversion tables</li>
        <li>ASCII encoding of specified phrases</li>
        <li>Solutions to binary arithmetic problems</li>
        <li>Answers to pattern discovery questions</li>
        <li>File size calculations with explanations</li>
        <li>Challenge tasks (if attempted)</li>
    </ul>
</div>

<h3>Real-World Applications of Binary and ASCII</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. File Storage:</b><br/>
    • Everything on your computer is stored as binary<br/>
    • Text files use ASCII/Unicode encoding<br/>
    • Images, videos, programs are all binary data<br/>
    • File headers identify the type (first few bytes)<br/>
    <br/>
    <b>2. Network Communication:</b><br/>
    • Data sent over networks as binary packets<br/>
    • Headers contain source/destination addresses<br/>
    • Error checking using binary arithmetic (checksums)<br/>
    • Protocols define how to interpret the bits<br/>
    <br/>
    <b>3. Programming:</b><br/>
    • Source code is text (ASCII/Unicode)<br/>
    • Compilers convert to machine code (binary)<br/>
    • Variables stored in binary in memory<br/>
    • Bitwise operations manipulate individual bits<br/>
    <br/>
    <b>4. Digital Media:</b><br/>
    • Images: Pixels as binary values (RGB)<br/>
    • Audio: Sound waves sampled as binary<br/>
    • Video: Sequence of images + audio<br/>
    • Compression reduces binary data size<br/>
    <br/>
    <b>5. Security:</b><br/>
    • Encryption transforms data using binary operations<br/>
    • Passwords stored as hashes (binary representations)<br/>
    • Digital signatures use binary mathematics<br/>
    • Certificates contain binary-encoded information
</div>

<h3>Beyond ASCII: Unicode and UTF-8</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Limitations of ASCII:</b><br/>
    • Only 128/256 characters<br/>
    • English-centric (Latin alphabet)<br/>
    • No support for other languages' characters<br/>
    • No emojis or special symbols<br/>
    <br/>
    <b>Unicode Solution:</b><br/>
    • Universal character set<br/>
    • Supports all writing systems<br/>
    • Over 1 million possible characters<br/>
    • Includes emojis, mathematical symbols, etc.<br/>
    <br/>
    <b>UTF-8 Encoding:</b><br/>
    • Variable-length encoding (1-4 bytes per character)<br/>
    • Backward compatible with ASCII<br/>
    • ASCII characters are 1 byte (same as ASCII)<br/>
    • Other characters use 2-4 bytes<br/>
    • Most common encoding on the web<br/>
    <br/>
    <b>Examples:</b><br/>
    • 'A' (ASCII) = 65 decimal = 1 byte in UTF-8<br/>
    • '€' (Euro) = U+20AC = 3 bytes in UTF-8: E2 82 AC<br/>
    • '😀' (Grinning face) = U+1F600 = 4 bytes in UTF-8: F0 9F 98 80<br/>
    <br/>
    <b>Why This Matters:</b><br/>
    • Websites need to handle multiple languages<br/>
    • Databases must store international text<br/>
    • Programs should display correct characters<br/>
    • File formats specify encoding type
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> How many bits are in a byte?<br/>
    a) 4<br/>
    b) 8<br/>
    c) 16<br/>
    d) 32<br/>
    <br/>
    <b>Question 2:</b> What is the binary representation of decimal 10?<br/>
    a) 1001<br/>
    b) 1010<br/>
    c) 1100<br/>
    d) 1111<br/>
    <br/>
    <b>Question 3:</b> What ASCII code represents uppercase 'A'?<br/>
    a) 48<br/>
    b) 65<br/>
    c) 97<br/>
    d) 32<br/>
    <br/>
    <b>Question 4:</b> How many different values can 4 bits represent?<br/>
    a) 4<br/>
    b) 8<br/>
    c) 16<br/>
    d) 32<br/>
    <br/>
    <b>Question 5:</b> What does UTF-8 stand for?<br/>
    a) Universal Text Format-8<br/>
    b) Unicode Transformation Format-8<br/>
    c) United Text Format-8<br/>
    d) Universal Transfer Format-8
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 2 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Understand the binary number system and its importance</li>
        <li>✅ Convert between decimal, binary, and hexadecimal</li>
        <li>✅ Explain ASCII character encoding and use ASCII table</li>
        <li>✅ Perform basic binary arithmetic operations</li>
        <li>✅ Calculate file sizes based on character count</li>
        <li>✅ Understand real-world applications of binary data</li>
    </ul>
    
    <p><b>Homework Preparation for Day 3:</b><br/>
    1. Research how different languages are represented in computers<br/>
    2. Try to type characters from other languages on your computer<br/>
    3. Explore how emojis are encoded<br/>
    4. Think about why text files are smaller than image files<br/>
    5. Practice more binary conversions for speed</p>
    
    <p><b>Interesting Fact:</b> The word "bit" was coined by statistician John Tukey in 1947 as a contraction of "binary digit." The word "byte" was coined by Werner Buchholz in 1956 during the design of IBM's Stretch computer. He deliberately changed the spelling to avoid confusion with "bite."</p>
    
    <p><b>Remember:</b> "Binary is the alphabet of computers, and ASCII/Unicode is the dictionary. Once you understand this basic language, you can understand how all digital information is created, stored, and transmitted!"</p>
</div>`
            },
            "2-3": {
                icon: "fas fa-language",
                title: "ASCII Applications & Data Logic",
                html: `<h1>Week 2, Day 3: ASCII Applications & Data Logic</h1>
<p>Today we'll explore practical applications of character encoding and understand how data logic works in real-world scenarios.</p>

<div class="analogy-box">
    <b>Analogy: Character Encoding as International Shipping 🌍</b><br/>
    
    ASCII: Domestic shipping labels (English only)<br/>
    Unicode: International shipping labels (all languages)<br/>
    UTF-8: Smart packaging that adapts to content<br/>
    Character Set: Available alphabet for labels<br/>
    Encoding: Rules for creating labels<br/>
    Byte Order Mark (BOM): "This Way Up" sticker on package<br/>
    Code Point: Unique ID for each character<br/>
    Glyph: Visual appearance of the character
</div>

<h3>Key Topics</h3>
<ul>
    <li>Beyond ASCII: Unicode and UTF-8</li>
    <li>Character Encoding in Web Development</li>
    <li>Data Storage and File Size Calculations</li>
    <li>Encoding Issues and Solutions</li>
    <li>Practical Applications in Programming</li>
    <li>Data Compression Basics</li>
    <li>Database Character Storage</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Beyond ASCII: Unicode Revolution</b><br/>

<b>The Need for Unicode:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>ASCII Limitations (Recap):</b><br/>
    • Only 128/256 characters<br/>
    • Designed for English/Latin alphabet<br/>
    • Multiple incompatible extensions (ISO-8859-1, Windows-1252, etc.)<br/>
    • No support for Asian languages (Chinese, Japanese, Korean)<br/>
    • No mathematical symbols, emojis, or special characters<br/>
    <br/>
    <b>Unicode Solution:</b><br/>
    • <b>Goal:</b> One encoding to rule them all - every character, every language<br/>
    • <b>Created:</b> 1991 by Unicode Consortium<br/>
    • <b>Current Version:</b> Unicode 15.0 (2022) with 149,186 characters<br/>
    • <b>Scope:</b> Covers 161 modern and historic scripts, plus symbols, emojis<br/>
    <br/>
    <b>Key Concepts:</b><br/>
    1. <b>Code Point:</b> Unique number for each character (U+0041 for 'A')<br/>
    2. <b>Code Space:</b> Range U+0000 to U+10FFFF (1,114,112 possible)<br/>
    3. <b>Planes:</b> 17 planes of 65,536 code points each<br/>
    4. <b>Basic Multilingual Plane (BMP):</b> First plane (U+0000 to U+FFFF)<br/>
    5. <b>Supplementary Planes:</b> Planes 1-16 for less common characters
</div>

<b>Unicode Encoding Forms (UTFs):</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Encoding</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Bytes per Char</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Common Use</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Pros/Cons</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">UTF-8</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Variable length (1-4 bytes)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">1-4</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Web, Linux, macOS</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Compact for ASCII, compatible</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">UTF-16</td>
        <td style="padding: 10px; border: 1px solid #ddd;">2 or 4 bytes</td>
        <td style="padding: 10px; border: 1px solid #ddd;">2 or 4</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Windows, Java, JavaScript</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Fixed for BMP, but larger</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">UTF-32</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Fixed 4 bytes</td>
        <td style="padding: 10px; border: 1px solid #ddd;">4</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Internal processing</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Simple but wasteful</td>
    </tr>
</table>

<b>UTF-8 Detailed Explanation:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>UTF-8 Design Principles:</b><br/>
    1. <b>Backward Compatibility:</b> ASCII characters (0-127) are identical<br/>
    2. <b>Self-Synchronizing:</b> Easy to find character boundaries<br/>
    3. <b>Efficient:</b> Uses minimum bytes needed<br/>
    4. <b>No Byte Order Issues:</b> No BOM needed (but can be used)<br/>
    <br/>
    <b>UTF-8 Encoding Pattern:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">Code Point Range</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Bytes</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Binary Pattern</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">U+0000 - U+007F</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0xxxxxxx</td>
            <td style="padding: 8px; border: 1px solid #ddd;">A = 01000001</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">U+0080 - U+07FF</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2</td>
            <td style="padding: 8px; border: 1px solid #ddd;">110xxxxx 10xxxxxx</td>
            <td style="padding: 8px; border: 1px solid #ddd;">£ = 11000010 10100011</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">U+0800 - U+FFFF</td>
            <td style="padding: 8px; border: 1px solid #ddd;">3</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1110xxxx 10xxxxxx 10xxxxxx</td>
            <td style="padding: 8px; border: 1px solid #ddd;">€ = 11100010 10000010 10101100</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">U+10000 - U+10FFFF</td>
            <td style="padding: 8px; border: 1px solid #ddd;">4</td>
            <td style="padding: 8px; border: 1px solid #ddd;">11110xxx 10xxxxxx 10xxxxxx 10xxxxxx</td>
            <td style="padding: 8px; border: 1px solid #ddd;">😀 = 11110000 10011111 10011000 10000000</td>
        </tr>
    </table>
    
    <b>Why This Pattern Matters:</b><br/>
    • Continuation bytes always start with 10 (binary)<br/>
    • Lead bytes indicate how many continuation bytes follow<br/>
    • Easy to detect malformed sequences<br/>
    • Can jump to next character without decoding entire sequence
</div>

<b>b. Character Encoding in Web Development</b><br/>

<b>HTML Character Encoding:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>HTML Meta Tag (Essential):</b><br/>
    <pre>&lt;meta charset="UTF-8"&gt;</pre><br/>
    • Must be in first 1024 bytes of document<br/>
    • Tells browser how to interpret the bytes<br/>
    • Default if omitted: varies by browser/region<br/>
    <br/>
    <b>HTTP Header (More Authoritative):</b><br/>
    <pre>Content-Type: text/html; charset=utf-8</pre><br/>
    • Sent by web server<br/>
    • Overrides meta tag if present<br/>
    <br/>
    <b>HTML Entities for Special Characters:</b><br/>
    • <pre>&amp;lt;</pre> = &lt; (less than)<br/>
    • <pre>&amp;gt;</pre> = &gt; (greater than)<br/>
    • <pre>&amp;amp;</pre> = &amp; (ampersand)<br/>
    • <pre>&amp;copy;</pre> = © (copyright)<br/>
    • <pre>&amp;#169;</pre> = © (decimal code)<br/>
    • <pre>&amp;#xA9;</pre> = © (hexadecimal code)<br/>
    <br/>
    <b>Common Web Encodings:</b><br/>
    • <b>UTF-8:</b> Standard for modern web (over 97% of websites)<br/>
    • <b>ISO-8859-1:</b> Old Western European standard<br/>
    • <b>Windows-1252:</b> Microsoft extension of ISO-8859-1<br/>
    • <b>Shift_JIS:</b> Japanese encoding<br/>
    • <b>GB2312/GBK:</b> Chinese encodings
</div>

<b>Web Development Best Practices:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Always Declare Encoding:</b><br/>
    • Use <pre>&lt;meta charset="UTF-8"&gt;</pre><br/>
    • Configure server to send correct HTTP headers<br/>
    <br/>
    <b>2. Save Files as UTF-8:</b><br/>
    • Configure text editor to save as UTF-8<br/>
    • Without BOM (Byte Order Mark) for web files<br/>
    • With BOM only if required (some Windows tools)<br/>
    <br/>
    <b>3. Database Configuration:</b><br/>
    • Set database, tables, and connections to UTF-8<br/>
    • MySQL: <pre>utf8mb4</pre> (full UTF-8 support)<br/>
    • PostgreSQL: <pre>UTF8</pre> encoding<br/>
    • SQL Server: <pre>NVARCHAR</pre> for Unicode<br/>
    <br/>
    <b>4. Programming Languages:</b><br/>
    • Python 3: Strings are Unicode by default<br/>
    • JavaScript: Uses UTF-16 internally<br/>
    • Java: Uses UTF-16 for <pre>String</pre> class<br/>
    • PHP: Requires careful handling, use <pre>mb_*</pre> functions<br/>
    <br/>
    <b>5. Form Submission:</b><br/>
    • HTML form: <pre>&lt;form accept-charset="UTF-8"&gt;</pre><br/>
    • AJAX: Set content type header<br/>
    • API: Use UTF-8 for JSON/XML
</div>

<b>c. Data Storage and File Size Calculations</b><br/>

<b>File Size Factors:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Character Count:</b> Basic calculation<br/>
    • English text: ~1 byte per character (ASCII/UTF-8)<br/>
    • Non-English: 2-4 bytes per character (UTF-8)<br/>
    • Emojis: 4 bytes each (UTF-8)<br/>
    <br/>
    <b>2. File Format Overhead:</b><br/>
    • Plain text (.txt): Minimal overhead (maybe BOM)<br/>
    • Word document (.docx): XML + compression + metadata<br/>
    • PDF: Fonts, images, structure, compression<br/>
    • HTML: Tags + content + possibly images/CSS/JS<br/>
    <br/>
    <b>3. Compression:</b><br/>
    • Lossless: ZIP, GZIP (exact reconstruction)<br/>
    • Lossy: JPEG, MP3 (quality reduction)<br/>
    • Text compresses well (5-10x reduction)<br/>
    • Already compressed files don't compress further<br/>
    <br/>
    <b>4. Storage Overhead:</b><br/>
    • File system allocation units (cluster size)<br/>
    • Small files waste space (slack space)<br/>
    • Metadata storage (file name, dates, permissions)<br/>
    <br/>
    <b>Practical File Size Examples:</b><br/>
    • "Hello World" (11 chars) = 11 bytes as ASCII<br/>
    • Same in UTF-8 with BOM = 14 bytes (3 byte BOM)<br/>
    • 1000-page book (500k chars) = ~500KB as text<br/>
    • Same as EPUB = ~1MB (with formatting)<br/>
    • Same as PDF = ~2-5MB (with fonts, images)
</div>

<b>Storage Calculation Examples:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Scenario</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Calculation</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Result</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Notes</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Email message</td>
        <td style="padding: 10px; border: 1px solid #ddd;">500 words × 5 chars/word + spaces</td>
        <td style="padding: 10px; border: 1px solid #ddd;">~2.5KB</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Plus headers, attachments</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Database record</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Name(50) + Email(100) + Address(200)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">~350 bytes</td>
        <td style="padding: 10px; border: 1px solid #ddd;">× 1 million records = 350MB</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Web page</td>
        <td style="padding: 10px; border: 1px solid #ddd;">HTML(10KB) + CSS(5KB) + JS(20KB)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">35KB</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Plus images, fonts</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">E-book</td>
        <td style="padding: 10px; border: 1px solid #ddd;">300 pages × 2500 chars/page</td>
        <td style="padding: 10px; border: 1px solid #ddd;">~750KB text</td>
        <td style="padding: 10px; border: 1px solid #ddd;">EPUB/PDF adds formatting</td>
    </tr>
</table>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Character Encoding Experiment</b><br/>
    1. Create a text file with Notepad:<br/>
    &nbsp;&nbsp;• Save as ANSI (Windows default)<br/>
    &nbsp;&nbsp;• Type: Café résumé naïve<br/>
    &nbsp;&nbsp;• Save, close, reopen - observe characters<br/>
    2. Save same text as UTF-8:<br/>
    &nbsp;&nbsp;• File → Save As → Encoding: UTF-8<br/>
    &nbsp;&nbsp;• Compare file sizes<br/>
    &nbsp;&nbsp;• Open in different programs<br/>
    3. Create file with emojis:<br/>
    &nbsp;&nbsp;• Save as UTF-8: Hello 😀 World 🌍<br/>
    &nbsp;&nbsp;• Check file size<br/>
    &nbsp;&nbsp;• Count actual bytes used<br/>
    <br/>
    <b>Exercise 2: HTML Encoding Test</b><br/>
    1. Create HTML file with:<br/>
    <pre>
        &lt;!DOCTYPE html&gt;<br/>
        &lt;html&gt;<br/>
        &lt;head&gt;<br/>
        &lt;meta charset="ISO-8859-1"&gt;<br/>
        &lt;/head&gt;<br/>
        &lt;body&gt;<br/>
        Café résumé naïve € £ ¥<br/>
        &lt;/body&gt;<br/>
        &lt;/html&gt;
    </pre>
    2. Change charset to UTF-8 and compare<br/>
    3. Try without charset declaration<br/>
    4. Use HTML entities instead<br/>
    <br/>
    <b>Exercise 3: File Size Analysis</b><br/>
    1. Create files with same content in different formats:<br/>
    &nbsp;&nbsp;• .txt (Notepad)<br/>
    &nbsp;&nbsp;• .docx (Word)<br/>
    &nbsp;&nbsp;• .pdf (Save as PDF from Word)<br/>
    2. Compare file sizes<br/>
    3. Create ZIP of each, compare compressed sizes<br/>
    4. Calculate compression ratio<br/>
    <br/>
    <b>Exercise 4: Programming Language Test</b><br/>
    1. Create a Python script:<br/>
    <pre>
        text = "Café 😀"<br/>
        print("Length:", len(text))<br/>
        print("Bytes:", len(text.encode('utf-8')))<br/>
        print("Characters:", sum(1 for c in text))
    </pre>
    2. Run and observe results<br/>
    3. Try with different encodings<br/>
</div>

<h3>Common Encoding Problems and Solutions</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Problem 1: "Mojibake" (Garbled Text)</b><br/>
    <b>Symptoms:</b> Café → CafÃ©, résumé → rÃ©sumÃ©<br/>
    <b>Cause:</b> Text encoded in one format, decoded in another<br/>
    <b>Example:</b> UTF-8 bytes interpreted as Windows-1252<br/>
    <b>Solution:</b><br/>
    1. Ensure consistent encoding declaration<br/>
    2. Convert files to correct encoding<br/>
    3. Use encoding detection tools<br/>
    <br/>
    <b>Problem 2: Question Marks or Boxes</b><br/>
    <b>Symptoms:</b> Café → Cafe?, 😀 → □<br/>
    <b>Causes:</b><br/>
    1. Missing font with the character<br/>
    2. Encoding doesn't support the character<br/>
    3. Application can't handle the character<br/>
    <b>Solution:</b><br/>
    1. Install appropriate fonts<br/>
    2. Use UTF-8 encoding<br/>
    3. Update software<br/>
    <br/>
    <b>Problem 3: Truncated or Corrupted Data</b><br/>
    <b>Symptoms:</b> Text cut off mid-character, errors when processing<br/>
    <b>Causes:</b><br/>
    1. Fixed-length fields in databases<br/>
    2. Buffer overflows in programming<br/>
    3. Incorrect byte counting<br/>
    <b>Solution:</b><br/>
    1. Use Unicode-aware functions<br/>
    2. Count characters, not bytes<br/>
    3. Test with international text<br/>
    <br/>
    <b>Problem 4: Duplicate BOM Issues</b><br/>
    <b>Symptoms:</b> ï»¿ at beginning of file, double BOM<br/>
    <b>Causes:</b> Multiple UTF-8 BOMs (EF BB EF BB EF BB)<br/>
    <b>Solution:</b><br/>
    1. Remove extra BOMs<br/>
    2. Save files without BOM when possible<br/>
    3. Use proper text editors
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Encoding Analysis and Internationalization Project</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Analyze text in different encodings<br/>
        2. Create multilingual content<br/>
        3. Calculate storage requirements<br/>
        4. Solve encoding problems<br/>
        5. Design internationalization strategy<br/>
    </div>
    
    <b>Part 1: Encoding Detective Work</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Analyze these encoded strings:</b><br/>
        <br/>
        <b>String 1:</b> CafÃ©<br/>
        • What was original text?<br/>
        • What encoding mismatch happened?<br/>
        • How to fix it?<br/>
        <br/>
        <b>String 2:</b> rÃ©sumÃ©<br/>
        • Decode assuming Windows-1252 misinterpretation<br/>
        • What's the correct text?<br/>
        <br/>
        <b>String 3 (Hex):</b> 48 65 6C 6C 6F 20 F0 9F 98 80<br/>
        • Convert to text<br/>
        • What encoding is this?<br/>
        • How many bytes? Characters?<br/>
        <br/>
        <b>String 4 (HTML):</b> &amp;#x1F600; &amp;#x1F30E;<br/>
        • Decode to text<br/>
        • What does it say?<br/>
        • Calculate byte count in UTF-8<br/>
        <br/>
        <b>Encoding Challenge:</b><br/>
        The bytes: C3 A9 C3 A0 C3 B9<br/>
        • Interpret as UTF-8<br/>
        • Interpret as ISO-8859-1<br/>
        • Show both results<br/>
        • Which is more likely correct? Why?
    </div>
    
    <b>Part 2: Multilingual Content Creation</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a simple multilingual webpage:</b><br/>
        1. HTML structure with UTF-8 declaration<br/>
        2. Include text in at least 3 languages:<br/>
        &nbsp;&nbsp;• English: "Hello, World!"<br/>
        &nbsp;&nbsp;• French: "Bonjour le monde!"<br/>
        &nbsp;&nbsp;• Spanish: "¡Hola Mundo!"<br/>
        &nbsp;&nbsp;• Add one non-Latin language (Chinese, Arabic, etc.)<br/>
        3. Include special symbols:<br/>
        &nbsp;&nbsp;• Currency: € £ ¥ ₹<br/>
        &nbsp;&nbsp;• Mathematical: ∑ ∫ π ∞<br/>
        &nbsp;&nbsp;• Arrows: ← ↑ → ↓<br/>
        4. Add emojis: 😀 🌍 📱 💻<br/>
        <br/>
        <b>Storage Analysis:</b><br/>
        1. Calculate expected file size<br/>
        2. Create file and check actual size<br/>
        3. Compress with ZIP, note reduction<br/>
        4. Save as different formats, compare sizes<br/>
        <br/>
        <b>Browser Testing:</b><br/>
        1. Open in different browsers<br/>
        2. Test on mobile device<br/>
        3. Check if all characters display correctly<br/>
        4. Take screenshots as evidence
    </div>
    
    <b>Part 3: Database Design for International Content</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Scenario: International Customer Database</b><br/>
        A company needs to store customer information from worldwide.<br/>
        <br/>
        <b>Requirements:</b><br/>
        • Customer names in original language/script<br/>
        • Addresses in local format<br/>
        • Support for all languages<br/>
        • Efficient storage<br/>
        <br/>
        <b>Design Tasks:</b><br/>
        1. Choose appropriate database column types:<br/>
        &nbsp;&nbsp;• MySQL: VARCHAR vs NVARCHAR<br/>
        &nbsp;&nbsp;• PostgreSQL: VARCHAR vs TEXT<br/>
        &nbsp;&nbsp;• SQL Server: VARCHAR vs NVARCHAR<br/>
        2. Calculate storage for 1 million customers:<br/>
        &nbsp;&nbsp;• Average name: 20 characters (mixed languages)<br/>
        &nbsp;&nbsp;• Average address: 100 characters<br/>
        &nbsp;&nbsp;• Email: 50 characters (ASCII only)<br/>
        3. Compare UTF-8 vs UTF-16 storage<br/>
        4. Plan for search functionality:<br/>
        &nbsp;&nbsp;• Case-insensitive search across languages<br/>
        &nbsp;&nbsp;• Accent-insensitive search (é = e)<br/>
        &nbsp;&nbsp;• Collation settings
    </div>
    
    <b>Part 4: Programming Challenges</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Python Encoding Exercises:</b><br/>
        <pre>
            # Exercise 1: Count characters vs bytes<br/>
            text = "Hello 🌍 World"<br/>
            # Count characters: ________<br/>
            # Count bytes in UTF-8: ________<br/>
            <br/>
            # Exercise 2: Encoding conversion<br/>
            text = "Café"<br/>
            # Encode to UTF-8 bytes: ________<br/>
            # Encode to ISO-8859-1 bytes: ________<br/>
            # What happens if we try ASCII?<br/>
            <br/>
            # Exercise 3: Detect encoding<br/>
            bytes_data = b'Caf\xc3\xa9'<br/>
            # Try to decode as:<br/>
            # UTF-8: ________<br/>
            # Windows-1252: ________<br/>
            # Which is correct?<br/>
            <br/>
            # Exercise 4: String manipulation<br/>
            text = "résumé naïve café"<br/>
            # Convert to uppercase: ________<br/>
            # Does it work correctly?<br/>
            # Find position of 'é': ________
        </pre>
        
        <b>Real-World Problem:</b><br/>
        A web form accepts user input that gets stored in a database.<br/>
        Users report that某些文字 (some Chinese text) becomes ???<br/>
        <br/>
        <b>Diagnosis Steps:</b><br/>
        1. Check HTML form encoding<br/>
        2. Check database connection settings<br/>
        3. Check database column encoding<br/>
        4. Check application code<br/>
        <br/>
        <b>Solution Plan:</b><br/>
        Write step-by-step fix for this problem.
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Create an Encoding Converter Tool</b><br/>
        • Design a simple tool that converts between encodings<br/>
        • Input: text + source encoding<br/>
        • Output: text in target encoding<br/>
        • Handle errors gracefully<br/>
        • Show byte representation<br/>
        <br/>
        <b>Challenge 2: Internationalization (i18n) Plan</b><br/>
        • Plan for translating a website to 5 languages<br/>
        • Consider: Right-to-left languages (Arabic, Hebrew)<br/>
        • Date/time formats<br/>
        • Number formats (decimal separators)<br/>
        • Currency formatting<br/>
        • Text expansion (some languages need more space)<br/>
        <br/>
        <b>Challenge 3: Compression Analysis</b><br/>
        • Take a multilingual text file<br/>
        • Compress with different algorithms: ZIP, GZIP, BZIP2<br/>
        • Compare compression ratios<br/>
        • Try different languages separately<br/>
        • Which language compresses best? Why?
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>Solutions to encoding detective problems</li>
        <li>Multilingual HTML file with screenshots</li>
        <li>Database design with storage calculations</li>
        <li>Python code with outputs</li>
        <li>Analysis of real-world encoding problem</li>
        <li>Challenge tasks (if attempted)</li>
    </ul>
</div>

<h3>Advanced Topics: Normalization and Collation</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Unicode Normalization:</b><br/>
    <b>Problem:</b> Some characters can be represented in multiple ways<br/>
    <b>Example:</b> 'é' can be:<br/>
    • Single character: U+00E9 "LATIN SMALL LETTER E WITH ACUTE"<br/>
    • Two characters: U+0065 "LATIN SMALL LETTER E" + U+0301 "COMBINING ACUTE ACCENT"<br/>
    <br/>
    <b>Normalization Forms:</b><br/>
    1. <b>NFD:</b> Canonical Decomposition (é → e + ´)<br/>
    2. <b>NFC:</b> Canonical Composition (e + ´ → é)<br/>
    3. <b>NFKD:</b> Compatibility Decomposition (ﬀ → f + f)<br/>
    4. <b>NFKC:</b> Compatibility Composition<br/>
    <br/>
    <b>Why It Matters:</b><br/>
    • String comparison: "café" vs "café" should be equal<br/>
    • Search: Find all versions of a word<br/>
    • Sorting: Consistent ordering<br/>
    • Security: Prevent homograph attacks (Α vs A)<br/>
    <br/>
    <b>Collation (Sorting Rules):</b><br/>
    • Different languages have different sorting rules<br/>
    • Example: In Swedish, 'ä' comes after 'z'<br/>
    • In German, 'ß' sorts as 'ss'<br/>
    • Need locale-aware sorting<br/>
    <br/>
    <b>Best Practices:</b><br/>
    1. Normalize before storing/comparing<br/>
    2. Use Unicode-aware string functions<br/>
    3. Specify locale for sorting<br/>
    4. Test with international data
</div>

<h3>Future of Character Encoding</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Emoji Evolution:</b><br/>
    • New emojis added every year<br/>
    • Skin tone variations<br/>
    • Gender variations<br/>
    • Family combinations<br/>
    • Zero-width joiner sequences<br/>
    <br/>
    <b>2. Historic Scripts:</b><br/>
    • Adding ancient scripts (Egyptian hieroglyphs, Mayan)<br/>
    • Scholarly and historical use<br/>
    • Preserving cultural heritage<br/>
    <br/>
    <b>3. Technical Symbols:</b><br/>
    • Mathematical symbols<br/>
    • Musical notation<br/>
    • Chess symbols<br/>
    • Programming symbols<br/>
    <br/>
    <b>4. Universal Acceptance:</b><br/>
    • UTF-8 becoming universal standard<br/>
    • Legacy systems being phased out<br/>
    • Better tool support<br/>
    • Education about encoding issues<br/>
    <br/>
    <b>5. Performance Considerations:</b><br/>
    • Efficient algorithms for Unicode processing<br/>
    • Hardware support for UTF-8<br/>
    • Compression of Unicode text<br/>
    • Memory-efficient representations
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> Which encoding is backward compatible with ASCII?<br/>
    a) UTF-16<br/>
    b) UTF-32<br/>
    c) UTF-8<br/>
    d) ISO-8859-1<br/>
    <br/>
    <b>Question 2:</b> What does BOM stand for?<br/>
    a) Beginning of Message<br/>
    b) Byte Order Mark<br/>
    c) Binary Object Marker<br/>
    d) Bit Order Management<br/>
    <br/>
    <b>Question 3:</b> Which HTML meta tag declares UTF-8 encoding?<br/>
    a) &lt;meta encoding="UTF-8"&gt;<br/>
    b) &lt;meta charset="UTF-8"&gt;<br/>
    c) &lt;meta type="text/html; charset=utf-8"&gt;<br/>
    d) &lt;meta http-equiv="Content-Type" content="UTF-8"&gt;<br/>
    <br/>
    <b>Question 4:</b> What causes "Mojibake" (garbled text)?<br/>
    a) Font missing<br/>
    b) Encoding mismatch<br/>
    c) Network error<br/>
    d) Virus infection<br/>
    <br/>
    <b>Question 5:</b> How many bytes does the emoji 😀 use in UTF-8?<br/>
    a) 1<br/>
    b) 2<br/>
    c) 3<br/>
    d) 4
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 3 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Understand Unicode and UTF-8 encoding</li>
        <li>✅ Apply character encoding in web development</li>
        <li>✅ Calculate file sizes for different content types</li>
        <li>✅ Diagnose and solve common encoding problems</li>
        <li>✅ Design databases for international content</li>
        <li>✅ Use programming languages with Unicode awareness</li>
    </ul>
    
    <p><b>Homework Preparation for Day 4:</b><br/>
    1. Review all topics from Week 2: Networking, Binary, ASCII, Unicode<br/>
    2. Practice network troubleshooting commands<br/>
    3. Review binary-decimal conversion<br/>
    4. Prepare questions about Module 1 topics<br/>
    5. Test your home network for the quiz</p>
    
    <p><b>Interesting Fact:</b> The longest character in Unicode is "﷽" (U+FDFD), the Arabic ligature Bismillah, which is a single character representing the entire phrase "In the name of God, the Most Gracious, the Most Merciful" in Arabic calligraphy. It's used at the beginning of chapters in the Quran.</p>
    
    <p><b>Remember:</b> "Character encoding is the foundation of global communication in the digital age. Understanding it helps you build applications that work for everyone, everywhere, in every language!"</p>
    
    <p><b>Next:</b> Tomorrow we'll review all of Module 1 and prepare for the practical quiz. Make sure you're comfortable with Windows basics, hardware, file management, CMD, networking, and character encoding!</p>
</div>`
            },
            "2-4": {
                icon: "fas fa-clipboard-check",
                title: "Module 1 Review & Practical Quiz",
                html: `<h1>Week 2, Day 4: Module 1 Review & Practical Quiz</h1>
<p>Today we'll consolidate everything from Windows basics, hardware, file management, CMD, networking, and data encoding through review and practical assessment.</p>

<div class="analogy-box">
    <b>Analogy: The Complete Computer Foundation 🏗️</b><br/>
    
    Hardware: Building structure and utilities<br/>
    Operating System: Building management and rules<br/>
    File System: Rooms and organization system<br/>
    Command Line: Direct communication with building systems<br/>
    Networking: Roads and communication lines<br/>
    Data Encoding: Language and alphabet for messages<br/>
    Module 1: Learning to build and maintain the foundation
</div>

<h3>Today's Schedule</h3>
<ul>
    <li>09:00 - 09:45: Comprehensive Module 1 Review</li>
    <li>09:45 - 10:30: Hands-on Practice Session</li>
    <li>10:30 - 11:15: Practical Quiz Part 1 (Hardware & CMD)</li>
    <li>11:15 - 12:00: Practical Quiz Part 2 (Networking & Data)</li>
    <li>12:00 - 12:30: Quiz Review & Q&A</li>
    <li>12:30 - 13:00: Module 2 Preparation</li>
</ul>

<h3>Comprehensive Module 1 Review</h3>

<b>Week 1 Review: Windows & Hardware Foundation</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Day 1: Desktop Management</b><br/>
    • Desktop components and functions<br/>
    • Essential keyboard shortcuts (Win+D, Win+E, Alt+Tab)<br/>
    • File Explorer navigation and organization<br/>
    • Taskbar customization<br/>
    • Window management techniques<br/>
    <br/>
    <b>Day 2: Hardware Components</b><br/>
    • CPU: The brain (cores, clock speed, cache)<br/>
    • RAM: Short-term memory (volatile, speed, capacity)<br/>
    • Storage: Long-term memory (HDD vs SSD vs NVMe)<br/>
    • Motherboard: Central connection hub<br/>
    • PSU: Power supply unit<br/>
    • Checking system specifications<br/>
    <br/>
    <b>Day 3: Operating Systems & Files</b><br/>
    • OS functions: Resource manager, interface provider<br/>
    • File extensions and their meanings<br/>
    • Folder structure and organization strategies<br/>
    • File permissions and security<br/>
    • Hidden files and system files<br/>
    • Compression and archiving<br/>
    <br/>
    <b>Day 4: Command Prompt Basics</b><br/>
    • Purpose: Speed, automation, power user access<br/>
    • Navigation: dir, cd, mkdir, rmdir<br/>
    • File operations: copy, move, ren, del<br/>
    • Network commands: ipconfig, ping, tracert<br/>
    • System commands: systeminfo, cls, help<br/>
    • Command syntax and options
</div>

<b>Week 2 Review: Data & Connections</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Day 1: Networking Fundamentals</b><br/>
    • Network types: PAN, LAN, WAN, Internet<br/>
    • Hardware: Modem, Router, Switch, Access Point<br/>
    • IP addresses: IPv4 format, private vs public<br/>
    • Wi-Fi: Standards, frequencies, security<br/>
    • Network troubleshooting: ping, ipconfig, tracert<br/>
    • Home network mapping and analysis<br/>
    <br/>
    <b>Day 2: Binary & ASCII Basics</b><br/>
    • Binary system: Base-2, bits and bytes<br/>
    • Decimal ↔ Binary conversion<br/>
    • Data sizes: KB, MB, GB, TB (binary multiples)<br/>
    • ASCII: Character encoding standard<br/>
    • Important ASCII codes: A=65, a=97, 0=48<br/>
    • Alt codes for special characters<br/>
    <br/>
    <b>Day 3: Advanced Encoding & Applications</b><br/>
    • Unicode: Universal character set<br/>
    • UTF-8: Variable-length encoding, web standard<br/>
    • Encoding issues: Mojibake, question marks<br/>
    • Web development: HTML charset declaration<br/>
    • File size calculations<br/>
    • Internationalization considerations<br/>
    <br/>
    <b>Key Connections Between Topics:</b><br/>
    • Hardware processes binary data<br/>
    • OS manages hardware and files<br/>
    • Files store encoded data<br/>
    • Networks transmit binary data<br/>
    • Everything connects through binary representation
</div>

<h3>Quick Reference Cheat Sheets</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Essential Keyboard Shortcuts:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">Shortcut</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Function</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Module</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Win + D</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Show Desktop</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Windows</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Win + E</td>
            <td style="padding: 8px; border: 1px solid #ddd;">File Explorer</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Windows</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Ctrl + Shift + Esc</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Task Manager</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Hardware</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Win + R</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Run Dialog</td>
            <td style="padding: 8px; border: 1px solid #ddd;">CMD</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Alt + Tab</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Switch Windows</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Windows</td>
        </tr>
    </table>
    
    <b>Essential CMD Commands:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">Command</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Function</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">dir</td>
            <td style="padding: 8px; border: 1px solid #ddd;">List directory</td>
            <td style="padding: 8px; border: 1px solid #ddd;">dir /w</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">cd</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Change directory</td>
            <td style="padding: 8px; border: 1px solid #ddd;">cd Documents</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">ipconfig</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Network config</td>
            <td style="padding: 8px; border: 1px solid #ddd;">ipconfig /all</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">ping</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Test connectivity</td>
            <td style="padding: 8px; border: 1px solid #ddd;">ping google.com</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">systeminfo</td>
            <td style="padding: 8px; border: 1px solid #ddd;">System information</td>
            <td style="padding: 8px; border: 1px solid #ddd;">systeminfo</td>
        </tr>
    </table>
</div>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Binary & ASCII Quick Reference:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">Item</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Value</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Notes</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">1 Byte</td>
            <td style="padding: 8px; border: 1px solid #ddd;">8 bits</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Basic unit of storage</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">ASCII 'A'</td>
            <td style="padding: 8px; border: 1px solid #ddd;">65 decimal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">01000001 binary</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">ASCII 'a'</td>
            <td style="padding: 8px; border: 1px solid #ddd;">97 decimal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">01100001 binary</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Difference A→a</td>
            <td style="padding: 8px; border: 1px solid #ddd;">32 decimal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Flip 6th bit (bit 5)</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Binary 1010</td>
            <td style="padding: 8px; border: 1px solid #ddd;">10 decimal</td>
            <td style="padding: 8px; border: 1px solid #ddd;">8+0+2+0 = 10</td>
        </tr>
    </table>
    
    <b>Networking Quick Reference:</b><br/>
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr style="background-color: #f0f0f0;">
            <th style="padding: 8px; border: 1px solid #ddd;">Component</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Purpose</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Example</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Modem</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Connect to ISP</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Cable/DSL modem</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Router</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Direct traffic</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Wi-Fi router</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Private IP</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Internal network</td>
            <td style="padding: 8px; border: 1px solid #ddd;">192.168.1.1</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 8px; border: 1px solid #ddd;">Default Gateway</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Router's IP</td>
            <td style="padding: 8px; border: 1px solid #ddd;">From ipconfig</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Ping success</td>
            <td style="padding: 8px; border: 1px solid #ddd;">"Reply from..."</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Means connected</td>
        </tr>
    </table>
</div>

<h3>Hands-on Practice Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Rapid-Fire Practice Stations:</b><br/>
    <br/>
    <b>Station 1: Windows Desktop Management</b><br/>
    1. Create this folder structure on Desktop:<br/>
    &nbsp;&nbsp;Review_Practice/<br/>
    &nbsp;&nbsp;├── Screenshots/<br/>
    &nbsp;&nbsp;├── Documents/<br/>
    &nbsp;&nbsp;└── Temp/<br/>
    2. Pin 3 applications to taskbar<br/>
    3. Use Win+D, Win+E, Alt+Tab<br/>
    4. Take screenshot of desktop, save in Screenshots folder<br/>
    <br/>
    <b>Station 2: Hardware & System Information</b><br/>
    1. Open Task Manager → Performance tab<br/>
    2. Note: CPU name, cores, RAM size, Disk type<br/>
    3. Open System Information (msinfo32)<br/>
    4. Find: OS name, System type, BIOS version<br/>
    5. Save systeminfo output to Documents folder<br/>
    <br/>
    <b>Station 3: Command Prompt Mastery</b><br/>
    1. Open CMD as administrator<br/>
    2. Navigate to Desktop/Review_Practice/Temp/<br/>
    3. Create 3 text files using echo command<br/>
    4. Copy one file, rename another, delete the third<br/>
    5. Run ipconfig and note your IP address<br/>
    6. Ping your default gateway<br/>
    <br/>
    <b>Station 4: Networking & Encoding</b><br/>
    1. Find your public IP using command line<br/>
    2. Trace route to google.com<br/>
    3. Create text file with: Hello 🌍<br/>
    4. Check file size, calculate expected size<br/>
    5. Convert "IT" to binary ASCII<br/>
    6. Convert binary 1100100 to decimal
</div>

<h3>Common Exam Scenarios Practice</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Scenario 1: Troubleshooting "No Internet"</b><br/>
    <b>Symptoms:</b> Computer shows connected but no internet access<br/>
    <b>Your Tasks:</b><br/>
    1. Check physical connections<br/>
    2. Use ipconfig to check IP address<br/>
    3. Ping loopback address (127.0.0.1)<br/>
    4. Ping default gateway<br/>
    5. Ping external site (8.8.8.8 then google.com)<br/>
    6. Flush DNS cache<br/>
    7. Document findings<br/>
    <br/>
    <b>Scenario 2: File Organization Challenge</b><br/>
    <b>Requirements:</b> Organize mixed files logically<br/>
    <b>Given:</b> Files: report.docx, photo.jpg, budget.xlsx, notes.txt, presentation.pptx<br/>
    <b>Your Tasks:</b><br/>
    1. Create logical folder structure<br/>
    2. Move files to appropriate folders<br/>
    3. Rename files with consistent naming convention<br/>
    4. Create archive of old files<br/>
    5. Document your organization system<br/>
    <br/>
    <b>Scenario 3: System Upgrade Analysis</b><br/>
    <b>Problem:</b> Computer is slow, needs upgrade assessment<br/>
    <b>Your Tasks:</b><br/>
    1. Check current specifications<br/>
    2. Identify bottleneck (CPU, RAM, or storage)<br/>
    3. Research upgrade options<br/>
    4. Create cost-benefit analysis<br/>
    5. Recommend best upgrade path<br/>
    <br/>
    <b>Scenario 4: Data Encoding Project</b><br/>
    <b>Requirements:</b> Prepare text for international website<br/>
    <b>Your Tasks:</b><br/>
    1. Ensure UTF-8 encoding for HTML<br/>
    2. Add multilingual content<br/>
    3. Handle special characters properly<br/>
    4. Calculate storage requirements<br/>
    5. Test in different browsers
</div>

<h3>Practical Quiz: Module 1 Assessment</h3>

<div class="quiz-section">
    <h4>Part A: Hardware Identification (15 Minutes)</h4>
    
    <b>Question 1: Component Functions</b><br/>
    Match the component to its primary function:<br/>
    1. CPU _____ a) Long-term data storage<br/>
    2. RAM _____ b) Processes instructions<br/>
    3. SSD _____ c) Temporary working memory<br/>
    4. PSU _____ d) Provides electrical power<br/>
    5. Motherboard _____ e) Connects all components<br/>
    <br/>
    <b>Question 2: Specifications Reading</b><br/>
    A computer has these specs:<br/>
    • Intel Core i5-12400<br/>
    • 16GB DDR4 RAM<br/>
    • 512GB NVMe SSD<br/>
    • Windows 11 Pro 64-bit<br/>
    <br/>
    Answer:<br/>
    a) How many CPU cores (typical for i5)? ________<br/>
    b) Is this RAM volatile or non-volatile? ________<br/>
    c) Which is faster: this SSD or a 2TB HDD? ________<br/>
    d) Can this OS use more than 4GB RAM? ________<br/>
    <br/>
    <b>Question 3: Performance Analysis</b><br/>
    A user complains their computer is slow when:<br/>
    • Opening multiple programs<br/>
    • Working with large documents<br/>
    • Switching between applications<br/>
    <br/>
    Which component is most likely the bottleneck?<br/>
    a) CPU<br/>
    b) RAM<br/>
    c) Storage<br/>
    d) Graphics<br/>
    Explain your choice: ________________________________
</div>

<div class="quiz-section">
    <h4>Part B: Command Line Practical (20 Minutes)</h4>
    
    <b>Practical Task: Create Folder Structure Using Only CMD</b><br/>
    <b>Requirements:</b> Using Command Prompt ONLY (no mouse):<br/>
    1. Create this structure in your Documents folder:<br/>
    <pre>
        Module1_Quiz/<br/>
        ├── PartA_Answers/<br/>
        │   ├── Hardware.txt<br/>
        │   └── Network.txt<br/>
        ├── PartB_Evidence/<br/>
        │   └── screenshots/<br/>
        └── Archive/
    </pre>
    2. In Hardware.txt, write: "CPU is the brain of the computer"<br/>
    3. In Network.txt, write your default gateway IP<br/>
    4. Run systeminfo and save output to system_details.txt in Archive<br/>
    5. Take screenshot of your CMD window showing all commands used<br/>
    <br/>
    <b>Command Verification:</b> Show the tutor your final structure and commands used.
</div>

<div class="quiz-section">
    <h4>Part C: Networking Fundamentals (15 Minutes)</h4>
    
    <b>Question 1: Network Diagram</b><br/>
    Draw a simple home network diagram including:<br/>
    • Internet connection<br/>
    • Modem<br/>
    • Router<br/>
    • At least 3 connected devices<br/>
    • Label IP addresses where known<br/>
    <br/>
    <b>Question 2: Troubleshooting Commands</b><br/>
    Write the commands to:<br/>
    1. Check your IP configuration: ________________<br/>
    2. Test connectivity to Google: ________________<br/>
    3. Find the path to Google: ________________<br/>
    4. Clear DNS cache: ________________<br/>
    5. Check MAC address: ________________<br/>
    <br/>
    <b>Question 3: IP Address Analysis</b><br/>
    Your computer shows: IP 192.168.1.105, Gateway 192.168.1.1<br/>
    1. Is this a public or private IP? ________<br/>
    2. What device has 192.168.1.1? ________<br/>
    3. If you ping 192.168.1.1 and get "Reply", what does it mean? ________<br/>
    4. If you ping 8.8.8.8 and get "Request timed out", where is the problem likely? ________
</div>

<div class="quiz-section">
    <h4>Part D: Data & Encoding (10 Minutes)</h4>
    
    <b>Question 1: Binary Conversions</b><br/>
    1. Convert 25 to binary: ________<br/>
    2. Convert 11011 to decimal: ________<br/>
    3. What is 8 bits called? ________<br/>
    <br/>
    <b>Question 2: ASCII Encoding</b><br/>
    1. What is ASCII code for 'B' if 'A' is 65? ________<br/>
    2. Encode "CAT" in decimal ASCII: ________<br/>
    3. How many bytes for "Hello" in ASCII? ________<br/>
    <br/>
    <b>Question 3: Unicode & UTF-8</b><br/>
    1. Why is UTF-8 better than ASCII for websites?<br/>
    ________________________________________________________________<br/>
    2. What does "Mojibake" mean?<br/>
    ________________________________________________________________<br/>
    3. Which HTML tag declares UTF-8 encoding?<br/>
    ________________________________________________________________
</div>

<h3>Quiz Grading Rubric</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Total Points: 100</b><br/>
    <br/>
    <b>Part A: Hardware (20 points)</b><br/>
    • Component matching: 5 points (1 each)<br/>
    • Specifications understanding: 8 points (2 each)<br/>
    • Analysis and explanation: 7 points<br/>
    <br/>
    <b>Part B: Command Line (30 points)</b><br/>
    • Folder structure creation: 10 points<br/>
    • File creation and content: 10 points<br/>
    • Command usage and efficiency: 10 points<br/>
    <br/>
    <b>Part C: Networking (25 points)</b><br/>
    • Network diagram: 10 points<br/>
    • Command knowledge: 10 points (2 each)<br/>
    • IP analysis: 5 points<br/>
    <br/>
    <b>Part D: Data Encoding (25 points)</b><br/>
    • Binary conversions: 9 points (3 each)<br/>
    • ASCII knowledge: 9 points (3 each)<br/>
    • Unicode understanding: 7 points<br/>
    <br/>
    <b>Grading Scale:</b><br/>
    • 90-100: Excellent (A)<br/>
    • 80-89: Good (B)<br/>
    • 70-79: Satisfactory (C)<br/>
    • 60-69: Needs Improvement (D)<br/>
    • Below 60: Retake Required
</div>

<h3>Post-Quiz Review & Q&A</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Common Areas for Review:</b><br/>
    <br/>
    <b>1. Hardware Confusions:</b><br/>
    • RAM vs Storage: Volatile vs non-volatile<br/>
    • CPU cores vs clock speed: More cores ≠ always faster<br/>
    • HDD vs SSD vs NVMe: Speed differences<br/>
    • 32-bit vs 64-bit: RAM limitations<br/>
    <br/>
    <b>2. Command Line Challenges:</b><br/>
    • Path navigation: cd, cd .., cd \<br/>
    • File operations: copy vs move vs ren<br/>
    • Command options: dir /w, ipconfig /all<br/>
    • Administrative privileges: When needed<br/>
    <br/>
    <b>3. Networking Misunderstandings:</b><br/>
    • IP addresses: Public vs private, static vs dynamic<br/>
    • Network devices: Modem vs Router vs Switch<br/>
    • Troubleshooting sequence: Local → Gateway → Internet<br/>
    • Wi-Fi vs Ethernet: Speed and reliability differences<br/>
    <br/>
    <b>4. Encoding Complexities:</b><br/>
    • Binary arithmetic: Carries and borrows<br/>
    • ASCII patterns: Uppercase/lowercase relationship<br/>
    • UTF-8 variable length: Why and how<br/>
    • Encoding declaration: HTML meta tag importance
</div>

<h3>Module 1 Learning Outcomes Checklist</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>✅ By completing Module 1, you should be able to:</b><br/>
    <br/>
    <b>Windows Environment:</b><br/>
    [ ] Navigate and customize Windows desktop and taskbar<br/>
    [ ] Use essential keyboard shortcuts for efficiency<br/>
    [ ] Manage files and folders effectively in File Explorer<br/>
    [ ] Understand and modify file extensions and properties<br/>
    [ ] Organize files with logical folder structures<br/>
    <br/>
    <b>Computer Hardware:</b><br/>
    [ ] Identify major computer components and their functions<br/>
    [ ] Check system specifications using built-in tools<br/>
    [ ] Differentiate between RAM and storage types<br/>
    [ ] Understand CPU specifications and performance factors<br/>
    [ ] Analyze hardware requirements for different tasks<br/>
    <br/>
    <b>Command Line Interface:</b><br/>
    [ ] Navigate file system using CMD commands<br/>
    [ ] Create, copy, move, rename, and delete files/folders<br/>
    [ ] Use network diagnostic commands (ipconfig, ping)<br/>
    [ ] Retrieve system information via command line<br/>
    [ ] Understand when and why to use command line vs GUI<br/>
    <br/>
    <b>Networking Fundamentals:</b><br/>
    [ ] Explain basic network concepts and components<br/>
    [ ] Identify IP addresses and network configurations<br/>
    [ ] Troubleshoot basic network connectivity issues<br/>
    [ ] Understand Wi-Fi standards and security<br/>
    [ ] Map and document a simple network<br/>
    <br/>
    <b>Data Representation:</b><br/>
    [ ] Convert between decimal and binary number systems<br/>
    [ ] Understand ASCII character encoding<br/>
    [ ] Explain the need for Unicode and UTF-8<br/>
    [ ] Calculate file sizes based on content<br/>
    [ ] Identify and fix common encoding problems
</div>

<h3>Module 2 Preparation: Microsoft Word</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>What's Coming in Module 2:</b><br/>
    • Week 3: Word Interface, Formatting, Tables, Page Layout<br/>
    • Week 4: Advanced Features, Mail Merge, Collaboration<br/>
    • Focus: Professional document creation and automation<br/>
    <br/>
    <b>Pre-Module Preparation Tasks:</b><br/>
    1. <b>Software Check:</b> Ensure Microsoft Office is installed<br/>
    &nbsp;&nbsp;• Word 2016 or newer recommended<br/>
    &nbsp;&nbsp;• Alternative: LibreOffice Writer or Google Docs<br/>
    2. <b>Familiarization:</b> Open Word and explore:<br/>
    &nbsp;&nbsp;• Ribbon interface (Home, Insert, Layout tabs)<br/>
    &nbsp;&nbsp;• Different views (Print Layout, Read Mode, Web Layout)<br/>
    &nbsp;&nbsp;• Basic typing and formatting<br/>
    3. <b>Practice Document:</b> Create a simple document with:<br/>
    &nbsp;&nbsp;• Different heading levels<br/>
    &nbsp;&nbsp;• Bulleted and numbered lists<br/>
    &nbsp;&nbsp;• Basic formatting (bold, italic, underline)<br/>
    &nbsp;&nbsp;• Save in multiple formats (.docx, .pdf, .rtf)<br/>
    4. <b>File Organization:</b> Create folder for Module 2 work:<br/>
    &nbsp;&nbsp;• Documents/IT_Course/Module2_Word/<br/>
    &nbsp;&nbsp;• Subfolders: Week3, Week4, Projects, Practice<br/>
    <br/>
    <b>Skills You'll Build:</b><br/>
    • Professional document formatting<br/>
    • Table creation and manipulation<br/>
    • Page layout and design<br/>
    • Mail merge for bulk documents<br/>
    • Collaboration and review features<br/>
    • Template creation and automation
</div>

<h3>Final Module 1 Assignment</h3>

<div class="assignment-box">
    <h4>Module 1 Portfolio Submission</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        Create a portfolio demonstrating all Module 1 skills.<br/>
        Due: Before Week 3, Day 1<br/>
        Format: PDF document or Word document<br/>
        Length: 5-10 pages<br/>
    </div>
    
    <b>Portfolio Sections:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Section 1: Personal Computer Analysis</b><br/>
        • Complete system specifications<br/>
        • Hardware component descriptions<br/>
        • Performance assessment<br/>
        • Upgrade recommendations<br/>
        <br/>
        <b>Section 2: File Organization System</b><br/>
        • Screenshot of organized folder structure<br/>
        • Explanation of naming conventions<br/>
        • File management strategies<br/>
        • Backup plan<br/>
        <br/>
        <b>Section 3: Network Documentation</b><br/>
        • Home/Lab network diagram<br/>
        • Device inventory with IP addresses<br/>
        • Network configuration details<br/>
        • Troubleshooting guide<br/>
        <br/>
        <b>Section 4: Command Line Proficiency</b><br/>
        • Screenshots of CMD exercises<br/>
        • List of essential commands with examples<br/>
        • Batch file creation (if attempted)<br/>
        • Reflection on CLI vs GUI<br/>
        <br/>
        <b>Section 5: Data Encoding Examples</b><br/>
        • Binary/ASCII conversion exercises<br/>
        • File size calculations<br/>
        • Encoding problem solutions<br/>
        • International text examples<br/>
        <br/>
        <b>Section 6: Quiz Results & Reflection</b><br/>
        • Quiz scores (if available)<br/>
        • Areas of strength<br/>
        • Areas for improvement<br/>
        • Learning goals for Module 2
    </div>
    
    <b>Submission Checklist:</b>
    <ul>
        <li>✅ Professional formatting and presentation</li>
        <li>✅ All sections completed</li>
        <li>✅ Screenshots included where appropriate</li>
        <li>✅ Clear explanations and demonstrations</li>
        <li>✅ Proofread for spelling/grammar</li>
        <li>✅ Saved as PDF or Word document</li>
        <li>✅ Submitted to designated location</li>
    </ul>
    
    <b>Grading Criteria:</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Content (60%):</b> Completeness, accuracy, depth<br/>
        <b>Organization (20%):</b> Structure, clarity, flow<br/>
        <b>Presentation (10%):</b> Formatting, visuals, professionalism<br/>
        <b>Technical Accuracy (10%):</b> Correct terminology, proper execution
    </div>
</div>

<h3>Resources for Continued Learning</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Free Online Resources:</b><br/>
    • <b>Microsoft Learn:</b> Windows basics, command line tutorials<br/>
    • <b>Professor Messer:</b> CompTIA A+ videos (hardware, networking)<br/>
    • <b>Khan Academy:</b> Computer basics, binary system<br/>
    • <b>W3Schools:</b> HTML encoding, web development<br/>
    • <b>YouTube:</b> NetworkChuck, TechQuickie, Linus Tech Tips<br/>
    <br/>
    <b>Practice Tools:</b><br/>
    • <b>Binary/Hex Converter:</b> RapidTables, Calculator.net<br/>
    • <b>Network Simulators:</b> Cisco Packet Tracer (free for learning)<br/>
    • <b>Virtual Machines:</b> VirtualBox (practice without risk)<br/>
    • <b>Online Terminals:</b> Web-based Linux terminals for practice<br/>
    <br/>
    <b>Books & References:</b><br/>
    • "How Computers Work" by Ron White<br/>
    • "Networking for Dummies" by Doug Lowe<br/>
    • "Code: The Hidden Language of Computer Hardware and Software" by Charles Petzold<br/>
    • Microsoft Windows Official Documentation<br/>
    <br/>
    <b>Certification Paths (Future):</b><br/>
    • <b>CompTIA IT Fundamentals (ITF+):</b> Entry-level<br/>
    • <b>CompTIA A+:</b> IT technician certification<br/>
    • <b>Microsoft Fundamentals:</b> Various Microsoft certifications<br/>
    • <b>Cisco CCNA:</b> Networking certification
</div>

<hr/>

<div class="knowledge-check">
    <h4>Final Quick Review Questions</h4>
    
    <b>Question 1:</b> What command would you use to check if you can reach google.com?<br/>
    a) ipconfig google.com<br/>
    b) ping google.com<br/>
    c) trace google.com<br/>
    d) connect google.com<br/>
    <br/>
    <b>Question 2:</b> If a file has .docx extension, what program usually opens it?<br/>
    a) Excel<br/>
    b) PowerPoint<br/>
    c) Word<br/>
    d) Notepad<br/>
    <br/>
    <b>Question 3:</b> What is the main advantage of SSD over HDD?<br/>
    a) Larger capacity<br/>
    b) Lower cost<br/>
    c) Faster speed<br/>
    d) Longer lifespan<br/>
    <br/>
    <b>Question 4:</b> How do you open Command Prompt quickly?<br/>
    a) Win + C<br/>
    b) Win + R, type "cmd"<br/>
    c) Ctrl + Alt + C<br/>
    d) Start → All Programs → Accessories<br/>
    <br/>
    <b>Question 5:</b> What does CPU stand for?<br/>
    a) Central Processing Unit<br/>
    b) Computer Processing Unit<br/>
    c) Central Program Unit<br/>
    d) Computer Program Unit
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎉 Module 1 Complete! Congratulations!</h3>
    
    <p><b>You've built a solid foundation in:</b></p>
    <ul>
        <li>✅ Computer hardware components and functions</li>
        <li>✅ Windows operating system navigation</li>
        <li>✅ File management and organization</li>
        <li>✅ Command line interface usage</li>
        <li>✅ Networking fundamentals</li>
        <li>✅ Data representation and encoding</li>
    </ul>
    
    <p><b>Key Takeaways:</b><br/>
    1. <b>Everything is connected:</b> Hardware runs software, software creates files, files store data, networks transmit data<br/>
    2. <b>Binary is fundamental:</b> All digital information ultimately reduces to 0s and 1s<br/>
    3. <b>Efficiency matters:</b> Keyboard shortcuts and command line save time<br/>
    4. <b>Organization is key:</b> Good file management prevents problems later<br/>
    5. <b>Troubleshooting is systematic:</b> Start simple, work logically<br/>
    6. <b>Standards enable communication:</b> ASCII, Unicode, IP addresses, file formats</p>
    
    <p><b>Ready for Module 2?</b> Next week we dive into Microsoft Word, where you'll learn to create professional documents efficiently. The foundation you've built here will help you understand why Word works the way it does and how to use it effectively.</p>
    
    <p><b>Remember:</b> "Module 1 was about understanding how computers work. Module 2 is about making computers work for you in creating professional documents. You've built the foundation - now let's build upon it!"</p>
    
    <p><b>Certificate of Completion:</b> Students who score 70% or higher on the quiz and submit a complete portfolio will receive a Module 1 Completion Certificate.</p>
    
    <p style="text-align: center; font-size: 1.2em; font-weight: bold; color: #2c3e50;">
        🏆 Module 1: Foundation to Computing - COMPLETE! 🏆<br/>
        On to Module 2: Microsoft Word Mastery!
    </p>
</div>`
            },

            "3-1": {
                icon: "fas fa-file-word",
                title: "Word Interface & Document Anatomy",
                html: `<h1>Week 3, Day 1: Word Interface & Document Anatomy</h1>
<p>Today we'll transition from basic typing to becoming document architects by mastering the Word interface.</p>

<div class="analogy-box">
    <b>Analogy: Microsoft Word as a Professional Kitchen 🍳</b><br/>
    
    Ribbon: Your organized tool drawers<br/>
    Document: Your cooking workspace<br/>
    Styles: Pre-made recipe templates<br/>
    Quick Access Toolbar: Most-used tools on counter<br/>
    Ruler: Measuring tape for precision<br/>
    Status Bar: Kitchen timer and thermometer<br/>
    View Modes: Different kitchen layouts<br/>
    Templates: Complete meal kits with instructions
</div>

<h3>Key Topics</h3>
<ul>
    <li>Understanding the Word Interface</li>
    <li>The Ribbon: Tabs and Groups</li>
    <li>Document Views and Navigation</li>
    <li>Quick Access Toolbar Customization</li>
    <li>Backstage View (File Menu)</li>
    <li>Document Properties and Metadata</li>
    <li>Saving and Exporting Options</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. The Word Interface: Your Document Workspace</b><br/>

<b>Main Interface Components:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Title Bar:</b> Document name and window controls<br/>
    <b>2. Quick Access Toolbar (QAT):</b> Customizable frequently used commands<br/>
    <b>3. Ribbon:</b> Main command interface with tabs and groups<br/>
    <b>4. Ruler:</b> Horizontal and vertical guides for margins and tabs<br/>
    <b>5. Document Area:</b> Main typing/editing space<br/>
    <b>6. Scroll Bars:</b> Vertical and horizontal navigation<br/>
    <b>7. Status Bar:</b> Page info, word count, zoom, view buttons<br/>
    <b>8. Navigation Pane:</b> Document outline and search (Ctrl+F)<br/>
    <br/>
    <b>Interface Philosophy:</b><br/>
    • <b>Contextual:</b> Ribbon changes based on what you're doing<br/>
    • <b>Discoverable:</b> Features organized logically<br/>
    • <b>Customizable:</b> You can personalize your workspace<br/>
    • <b>Consistent:</b> Similar features across Office applications
</div>

<b>b. The Ribbon: Organized Command Center</b><br/>

<b>Ribbon Structure:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Tab</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Primary Purpose</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Key Groups</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Common Tasks</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Home</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Basic formatting</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Clipboard, Font, Paragraph, Styles</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Text formatting, styles, basic editing</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Insert</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Add content</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Pages, Tables, Illustrations, Links</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Add tables, images, page breaks</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Design</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Document appearance</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Document Formatting, Page Background</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Themes, colors, watermarks</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Layout</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Page setup</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Page Setup, Paragraph</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Margins, orientation, columns</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">References</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Academic/professional</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Table of Contents, Footnotes, Citations</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Citations, table of contents</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Mailings</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Bulk documents</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Create, Start Mail Merge, Write & Insert</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Mail merge, envelopes, labels</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Review</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Proofing and collaboration</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Proofing, Comments, Tracking</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Spell check, track changes, comments</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">View</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Document display</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Views, Show, Zoom, Window</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Change view, show ruler, split window</td>
    </tr>
</table>

<b>Contextual Tabs (Appear when needed):</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Table Tools:</b> Design and Layout tabs appear when cursor is in a table<br/>
    <b>Picture Tools:</b> Format tab appears when an image is selected<br/>
    <b>Drawing Tools:</b> Format tab appears when shapes are selected<br/>
    <b>Header & Footer Tools:</b> Design tab appears when editing headers/footers<br/>
    <b>Equation Tools:</b> Design tab appears when editing equations<br/>
    <br/>
    <b>Why Contextual Tabs Matter:</b><br/>
    • Reduces clutter - shows only relevant tools<br/>
    • Makes features discoverable when you need them<br/>
    • Provides specialized tools for specific tasks<br/>
    • Maintains clean interface for basic editing
</div>

<b>c. Document Views: Seeing Your Work Differently</b><br/>

<b>Word View Modes:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Print Layout (Default):</b><br/>
    • Shows document as it will print<br/>
    • Includes margins, headers, footers, page breaks<br/>
    • Best for most editing and formatting<br/>
    • Access: View tab → Print Layout or bottom-right buttons<br/>
    <br/>
    <b>2. Read Mode:</b><br/>
    • Optimized for reading on screen<br/>
    • Removes editing tools for clean view<br/>
    • Pages flip like a book<br/>
    • Good for reviewing long documents<br/>
    • Access: View tab → Read Mode or bottom-right buttons<br/>
    <br/>
    <b>3. Web Layout:</b><br/>
    • Shows how document would look as a webpage<br/>
    • No page breaks, continuous flow<br/>
    • Useful for documents meant for online viewing<br/>
    • Access: View tab → Web Layout<br/>
    <br/>
    <b>4. Outline View:</b><br/>
    • Shows document structure based on headings<br/>
    • Great for organizing and restructuring<br/>
    • Can collapse/expand sections<br/>
    • Access: View tab → Outline<br/>
    <br/>
    <b>5. Draft View:</b><br/>
    • Simplified view without page boundaries<br/>
    • Fastest for pure text editing<br/>
    • No headers/footers, minimal formatting display<br/>
    • Access: View tab → Draft
</div>

<b>d. Backstage View: The "File" Menu</b><br/>

<b>What is Backstage View?</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Access:</b> Click File tab (leftmost tab in Ribbon)<br/>
    <b>Purpose:</b> File management and document settings (not content editing)<br/>
    <br/>
    <b>Key Sections:</b><br/>
    <b>1. Info:</b> Document properties, protection, versions<br/>
    &nbsp;&nbsp;• Document statistics (pages, words, editing time)<br/>
    &nbsp;&nbsp;• Protect Document (restrict editing, encryption)<br/>
    &nbsp;&nbsp;• Inspect Document (remove hidden data)<br/>
    &nbsp;&nbsp;• Versions (autosave recovery)<br/>
    <br/>
    <b>2. New:</b> Create new documents from templates<br/>
    &nbsp;&nbsp;• Blank document<br/>
    &nbsp;&nbsp;• Featured templates<br/>
    &nbsp;&nbsp;• Search online templates<br/>
    &nbsp;&nbsp;• Personal templates<br/>
    <br/>
    <b>3. Open:</b> Open existing documents<br/>
    &nbsp;&nbsp;• Recent documents<br/>
    &nbsp;&nbsp;• OneDrive/SharePoint<br/>
    &nbsp;&nbsp;• This PC (local files)<br/>
    &nbsp;&nbsp;• Browse for other locations<br/>
    <br/>
    <b>4. Save/Save As:</b> Save documents<br/>
    &nbsp;&nbsp;• Save to current location<br/>
    &nbsp;&nbsp;• Save As for different format/location<br/>
    &nbsp;&nbsp;• Export to PDF/XPS<br/>
    &nbsp;&nbsp;• Change file type<br/>
    <br/>
    <b>5. Print:</b> Printing options<br/>
    &nbsp;&nbsp;• Print preview<br/>
    &nbsp;&nbsp;• Printer selection<br/>
    &nbsp;&nbsp;• Settings (pages, copies, orientation)<br/>
    <br/>
    <b>6. Share:</b> Collaboration features<br/>
    &nbsp;&nbsp;• Share with people<br/>
    &nbsp;&nbsp;• Email as attachment<br/>
    &nbsp;&nbsp;• Present Online<br/>
    <br/>
    <b>7. Export:</b> Convert to other formats<br/>
    &nbsp;&nbsp;• Create PDF/XPS<br/>
    &nbsp;&nbsp;• Change file type<br/>
    &nbsp;&nbsp;• Package for CD<br/>
</div>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Interface Exploration</b><br/>
    1. Open Microsoft Word<br/>
    2. Explore each Ribbon tab (hover over buttons to see tooltips)<br/>
    3. Toggle Ruler on/off (View tab → Ruler checkbox)<br/>
    4. Try different view modes (bottom-right corner):<br/>
    &nbsp;&nbsp;• Print Layout (default)<br/>
    &nbsp;&nbsp;• Read Mode (press Esc to exit)<br/>
    &nbsp;&nbsp;• Web Layout<br/>
    5. Open Navigation Pane (View tab → Navigation Pane or Ctrl+F)<br/>
    <br/>
    <b>Exercise 2: Quick Access Toolbar Customization</b><br/>
    1. Click dropdown arrow on Quick Access Toolbar (top-left)<br/>
    2. Add: New, Open, Save, Quick Print, Undo, Redo<br/>
    3. Remove items you won't use frequently<br/>
    4. Right-click any Ribbon button → "Add to Quick Access Toolbar"<br/>
    5. Customize further: File → Options → Quick Access Toolbar<br/>
    <br/>
    <b>Exercise 3: Document Properties</b><br/>
    1. Click File → Info<br/>
    2. Click "Properties" dropdown → Advanced Properties<br/>
    3. Fill in:<br/>
    &nbsp;&nbsp;• Title: "My First Professional Document"<br/>
    &nbsp;&nbsp;• Subject: "Word Interface Practice"<br/>
    &nbsp;&nbsp;• Author: Your name<br/>
    &nbsp;&nbsp;• Company: Your school/organization<br/>
    &nbsp;&nbsp;• Category: "Training"<br/>
    4. Check document statistics<br/>
    5. Return to document<br/>
    <br/>
    <b>Exercise 4: View and Zoom Options</b><br/>
    1. Use zoom slider (bottom-right) to zoom in/out<br/>
    2. View tab → Zoom → choose different percentages<br/>
    3. Try "Page Width" and "Whole Page" views<br/>
    4. Split window (View tab → Split) to see two parts of document<br/>
    5. Remove split (View tab → Remove Split)<br/>
    <br/>
    <b>Exercise 5: Template Exploration</b><br/>
    1. File → New<br/>
    2. Browse different template categories<br/>
    3. Create new document from:<br/>
    &nbsp;&nbsp;• Blank document<br/>
    &nbsp;&nbsp;• Student report template<br/>
    &nbsp;&nbsp;• Business letter template<br/>
    4. Notice how templates include predefined styles and formatting
</div>

<h3>Essential Keyboard Shortcuts for Word</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Navigation Shortcuts:</b><br/>
    • <b>Ctrl + Home:</b> Beginning of document<br/>
    • <b>Ctrl + End:</b> End of document<br/>
    • <b>Ctrl + ↑/↓:</b> Move by paragraph<br/>
    • <b>Ctrl + ←/→:</b> Move by word<br/>
    • <b>Page Up/Down:</b> Move by screen<br/>
    • <b>Ctrl + G:</b> Go to specific page<br/>
    <br/>
    <b>Editing Shortcuts:</b><br/>
    • <b>Ctrl + C/V/X:</b> Copy/Paste/Cut<br/>
    • <b>Ctrl + Z/Y:</b> Undo/Redo<br/>
    • <b>Ctrl + B/I/U:</b> Bold/Italic/Underline<br/>
    • <b>Ctrl + A:</b> Select all<br/>
    • <b>Ctrl + F:</b> Find<br/>
    • <b>Ctrl + H:</b> Replace<br/>
    • <b>Ctrl + S:</b> Save<br/>
    <br/>
    <b>Formatting Shortcuts:</b><br/>
    • <b>Ctrl + E/L/R:</b> Center/Left/Right align<br/>
    • <b>Ctrl + J:</b> Justify alignment<br/>
    • <b>Ctrl + 1/2/5:</b> Single/1.5/Double line spacing<br/>
    • <b>Ctrl + Shift + N:</b> Apply Normal style<br/>
    • <b>Ctrl + Alt + 1/2/3:</b> Apply Heading 1/2/3<br/>
    <br/>
    <b>Document Management:</b><br/>
    • <b>Ctrl + N:</b> New document<br/>
    • <b>Ctrl + O:</b> Open document<br/>
    • <b>Ctrl + P:</b> Print<br/>
    • <b>Ctrl + F12:</b> Open Save As dialog<br/>
    • <b>F12:</b> Save As<br/>
    • <b>Alt + F4:</b> Close Word
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Create a Professional Document Workspace</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Customize Word interface for efficiency<br/>
        2. Create and save a document with proper properties<br/>
        3. Practice navigation and view options<br/>
        4. Create a personal template<br/>
        5. Document your workspace setup<br/>
    </div>
    
    <b>Part 1: Interface Customization</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Customize Quick Access Toolbar:</b><br/>
        Add these commands in this order:<br/>
        1. Save<br/>
        2. Undo<br/>
        3. Redo<br/>
        4. New<br/>
        5. Open<br/>
        6. Quick Print<br/>
        7. Spelling & Grammar<br/>
        8. Format Painter<br/>
        9. Word Count<br/>
        10. Zoom<br/>
        <br/>
        <b>Customize Ribbon:</b><br/>
        1. File → Options → Customize Ribbon<br/>
        2. Create new tab: "My Tools"<br/>
        3. Create new group: "Frequently Used"<br/>
        4. Add commands: Save As, Insert Picture, Insert Table<br/>
        5. Take screenshot of your customized interface<br/>
        <br/>
        <b>Display Settings:</b><br/>
        1. Ensure Ruler is visible<br/>
        2. Show formatting marks (Home tab → ¶ button)<br/>
        3. Set default view to Print Layout<br/>
        4. Set zoom to 120% (your preference)
    </div>
    
    <b>Part 2: Document Creation with Properties</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a "Personal Introduction" Document:</b><br/>
        1. File → New → Blank Document<br/>
        2. Save immediately as: "YourName_Introduction.docx"<br/>
        3. Set document properties (File → Info):<br/>
        &nbsp;&nbsp;• Title: "Personal Introduction"<br/>
        &nbsp;&nbsp;• Subject: "Word Practice Document"<br/>
        &nbsp;&nbsp;• Author: Your full name<br/>
        &nbsp;&nbsp;• Keywords: Word, Practice, Introduction<br/>
        &nbsp;&nbsp;• Comments: "Created for Word Interface practice"<br/>
        4. Add content:<br/>
        &nbsp;&nbsp;• Your name (centered, bold, size 16)<br/>
        &nbsp;&nbsp;• Date (right-aligned)<br/>
        &nbsp;&nbsp;• Section 1: About Me (3 paragraphs)<br/>
        &nbsp;&nbsp;• Section 2: My Interests (bulleted list)<br/>
        &nbsp;&nbsp;• Section 3: Goals for This Course (numbered list)<br/>
        5. Save in multiple locations:<br/>
        &nbsp;&nbsp;• Local Documents folder<br/>
        &nbsp;&nbsp;• Desktop (temporary)<br/>
        &nbsp;&nbsp;• Export as PDF
    </div>
    
    <b>Part 3: View and Navigation Practice</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Complete these navigation tasks:</b><br/>
        1. Use keyboard shortcuts to:<br/>
        &nbsp;&nbsp;• Go to beginning of document<br/>
        &nbsp;&nbsp;• Go to end of document<br/>
        &nbsp;&nbsp;• Select entire document<br/>
        &nbsp;&nbsp;• Find the word "practice"<br/>
        2. Try all view modes:<br/>
        &nbsp;&nbsp;• Print Layout: Take screenshot<br/>
        &nbsp;&nbsp;• Read Mode: Note differences<br/>
        &nbsp;&nbsp;• Web Layout: Take screenshot<br/>
        &nbsp;&nbsp;• Outline View: Take screenshot<br/>
        &nbsp;&nbsp;• Draft View: Take screenshot<br/>
        3. Use zoom options:<br/>
        &nbsp;&nbsp;• Zoom to 150%<br/>
        &nbsp;&nbsp;• Zoom to Page Width<br/>
        &nbsp;&nbsp;• Zoom to Whole Page<br/>
        &nbsp;&nbsp;• Use zoom slider<br/>
        4. Open Navigation Pane (Ctrl+F):<br/>
        &nbsp;&nbsp;• Search for specific words<br/>
        &nbsp;&nbsp;• Browse by headings<br/>
        &nbsp;&nbsp;• Browse by pages
    </div>
    
    <b>Part 4: Create a Personal Template</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a reusable letterhead template:</b><br/>
        1. File → New → Blank Document<br/>
        2. Design your letterhead:<br/>
        &nbsp;&nbsp;• Add your name/logo at top<br/>
        &nbsp;&nbsp;• Contact information<br/>
        &nbsp;&nbsp;• Horizontal line separator<br/>
        &nbsp;&nbsp;• Date field (Insert → Date & Time)<br/>
        3. Set default font:<br/>
        &nbsp;&nbsp;• Home tab → Font dialog box launcher<br/>
        &nbsp;&nbsp;• Choose font: Calibri, size 11<br/>
        &nbsp;&nbsp;• Click "Set As Default" → "All documents based on Normal template"<br/>
        4. Save as template:<br/>
        &nbsp;&nbsp;• File → Save As<br/>
        &nbsp;&nbsp;• Choose location: Custom Office Templates<br/>
        &nbsp;&nbsp;• File type: Word Template (*.dotx)<br/>
        &nbsp;&nbsp;• Name: "My Letterhead"<br/>
        5. Test your template:<br/>
        &nbsp;&nbsp;• File → New → Personal<br/>
        &nbsp;&nbsp;• Click your template<br/>
        &nbsp;&nbsp;• Create a new letter
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Advanced Customization</b><br/>
        • Create custom keyboard shortcuts for your most-used commands<br/>
        • Change Word theme (dark mode vs light mode)<br/>
        • Set default save location to OneDrive/Dropbox<br/>
        • Configure auto-save interval (File → Options → Save)<br/>
        • Create custom styles for your workflow<br/>
        <br/>
        <b>Challenge 2: Document Comparison</b><br/>
        • Create two versions of a document<br/>
        • Use Compare feature (Review tab → Compare)<br/>
        • Review changes side by side<br/>
        • Accept/reject changes<br/>
        • Save compared document<br/>
        <br/>
        <b>Challenge 3: Accessibility Check</b><br/>
        • Run Accessibility Checker (File → Info → Check for Issues)<br/>
        • Fix any identified issues<br/>
        • Add alt text to images<br/>
        • Use proper heading structure<br/>
        • Check reading order<br/>
        • Save as accessible PDF
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>Screenshots of customized interface</li>
        <li>"Personal Introduction" document (Word and PDF)</li>
        <li>Document properties screenshot</li>
        <li>Template file or screenshot</li>
        <li>Brief report on your customization choices</li>
        <li>List of 10 most useful keyboard shortcuts for you</li>
    </ul>
</div>

<h3>Common Word Interface Issues and Solutions</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Problem 1: "My Ribbon disappeared!"</b><br/>
    <b>Solution:</b><br/>
    1. Press Ctrl + F1 to toggle Ribbon<br/>
    2. Click the Ribbon Display Options button (top-right, near minimize)<br/>
    3. Choose "Show Tabs and Commands"<br/>
    4. If still missing, check if in Full Screen mode (press Esc)<br/>
    <br/>
    <b>Problem 2: "I can't see the ruler"</b><br/>
    <b>Solution:</b><br/>
    1. View tab → check Ruler checkbox<br/>
    2. If still missing, File → Options → Advanced<br/>
    3. Scroll to Display section<br/>
    4. Check "Show vertical ruler in Print Layout view"<br/>
    <br/>
    <b>Problem 3: "Quick Access Toolbar reset"</b><br/>
    <b>Solution:</b><br/>
    1. File → Options → Quick Access Toolbar<br/>
    2. Reset to defaults if needed<br/>
    3. Re-add your custom commands<br/>
    4. Export your customization (Import/Export button)<br/>
    <br/>
    <b>Problem 4: "Document shows strange symbols (¶)"</b><br/>
    <b>Solution:</b><br/>
    1. These are formatting marks (paragraph marks, spaces, tabs)<br/>
    2. Toggle with Home tab → ¶ button or Ctrl + *<br/>
    3. Useful for troubleshooting formatting issues<br/>
    4. Can customize which marks show (File → Options → Display)<br/>
    <br/>
    <b>Problem 5: "Word is slow/laggy"</b><br/>
    <b>Solutions:</b><br/>
    1. Disable hardware acceleration (File → Options → Advanced)<br/>
    2. Reduce show animations (File → Options → Ease of Access)<br/>
    3. Disable add-ins (File → Options → Add-ins)<br/>
    4. Repair Office installation<br/>
    5. Use Draft view for large documents
</div>

<h3>Professional Document Standards</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. File Naming Conventions:</b><br/>
    • Use descriptive names: "Report_Q1_2024_Final.docx" not "document1.docx"<br/>
    • Include date: YYYY-MM-DD format sorts chronologically<br/>
    • Use underscores or hyphens, not spaces: client_proposal_v2.docx<br/>
    • Include version numbers for drafts: v1, v2, final<br/>
    <br/>
    <b>2. Document Properties Best Practices:</b><br/>
    • Always fill in Title, Author, Subject<br/>
    • Use keywords for searchability<br/>
    • Set appropriate category<br/>
    • Update properties when document changes<br/>
    <br/>
    <b>3. Template Usage:</b><br/>
    • Create templates for repetitive documents<br/>
    • Store in Custom Office Templates folder<br/>
    • Include company branding, styles, boilerplate text<br/>
    • Test templates before distributing<br/>
    <br/>
    <b>4. Saving and Backup:</b><br/>
    • Save early, save often (Ctrl+S)<br/>
    • Use Save As for major versions<br/>
    • Enable AutoSave if using OneDrive/SharePoint<br/>
    • Keep backup copies in different locations<br/>
    • Use version history for collaborative documents<br/>
    <br/>
    <b>5. Export Considerations:</b><br/>
    • PDF for final distribution (preserves formatting)<br/>
    • DOCX for editing<br/>
    • RTF for compatibility with older Word versions<br/>
    • Plain text (TXT) for simple content<br/>
    • Consider file size for email attachments
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> Which tab contains options for changing margins and page orientation?<br/>
    a) Home<br/>
    b) Insert<br/>
    c) Layout<br/>
    d) View<br/>
    <br/>
    <b>Question 2:</b> What keyboard shortcut saves a document?<br/>
    a) Ctrl + N<br/>
    b) Ctrl + S<br/>
    c) Ctrl + O<br/>
    d) Ctrl + P<br/>
    <br/>
    <b>Question 3:</b> Where do you set document properties like Title and Author?<br/>
    a) Home tab → Properties<br/>
    b) File → Info<br/>
    c) View tab → Properties<br/>
    d) Insert tab → Document Info<br/>
    <br/>
    <b>Question 4:</b> Which view removes editing tools for clean reading?<br/>
    a) Print Layout<br/>
    b) Web Layout<br/>
    c) Read Mode<br/>
    d) Outline View<br/>
    <br/>
    <b>Question 5:</b> How do you add a command to the Quick Access Toolbar?<br/>
    a) Drag from Ribbon<br/>
    b) Right-click command → "Add to Quick Access Toolbar"<br/>
    c) Both a and b<br/>
    d) File → Options → Customize Ribbon
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 1 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Navigate and customize the Word interface efficiently</li>
        <li>✅ Understand Ribbon organization and contextual tabs</li>
        <li>✅ Use different document views for various purposes</li>
        <li>✅ Customize Quick Access Toolbar for personal workflow</li>
        <li>✅ Set document properties and metadata</li>
        <li>✅ Create and use templates for consistent documents</li>
    </ul>
    
    <p><b>Homework Preparation for Day 2:</b><br/>
    1. Practice the keyboard shortcuts learned today<br/>
    2. Create a document with different types of content<br/>
    3. Experiment with different fonts and formatting options<br/>
    4. Research what "styles" are in Word and why they're important<br/>
    5. Try using Format Painter to copy formatting between text</p>
    
    <p><b>Interesting Fact:</b> Microsoft Word was first released in 1983 for Xenix systems (a version of Unix). The first version for Windows came in 1989. Today's Word has over 1,500 commands available, but most users regularly use only about 50-100 of them!</p>
    
    <p><b>Remember:</b> "A well-organized Word interface is like a tidy workshop - you spend less time looking for tools and more time creating great documents. Customize once, benefit every time you work!"</p>
    
    <p><b>Next:</b> Tomorrow we dive into formatting and styles - the secret to professional-looking documents that are easy to maintain and update!</p>
</div>`
            },
            "3-2": {
                icon: "fas fa-edit",
                title: "Formatting & The Power of Styles",
                html: `<h1>Week 3, Day 2: Formatting & The Power of Styles</h1>
<p>Today we'll master text formatting and discover the secret weapon of professional document creators: Styles.</p>

<div class="analogy-box">
    <b>Analogy: Document Formatting as Building Design 🏗️</b><br/>
    
    Direct Formatting: Painting each wall individually<br/>
    Styles: Using pre-designed room templates<br/>
    Format Painter: Color sample tool<br/>
    Heading Styles: Building structural elements<br/>
    Normal Style: Default wall finish<br/>
    Style Sets: Complete design themes<br/>
    Style Inspector: Blueprint analysis tool<br/>
    Clear Formatting: Reset to bare walls
</div>

<h3>Key Topics</h3>
<ul>
    <li>Character vs Paragraph Formatting</li>
    <li>The Format Painter Tool</li>
    <li>Understanding Word Styles</li>
    <li>Applying and Modifying Styles</li>
    <li>Creating Custom Styles</li>
    <li>Style Sets and Themes</li>
    <li>Clearing and Revealing Formatting</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Character vs Paragraph Formatting</b><br/>

<b>Character Formatting (Affects Selected Text):</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Formatting applied to individual characters or words<br/>
    <b>Location:</b> Home tab → Font group<br/>
    <b>Common Character Formatting:</b><br/>
    • <b>Font:</b> Typeface (Calibri, Arial, Times New Roman)<br/>
    • <b>Font Size:</b> Point size (11pt, 12pt, 14pt)<br/>
    • <b>Bold/Italic/Underline:</b> Emphasis styles<br/>
    • <b>Font Color:</b> Text color<br/>
    • <b>Highlight Color:</b> Background color<br/>
    • <b>Text Effects:</b> Shadows, glows, reflections<br/>
    • <b>Case:</b> UPPERCASE, lowercase, Title Case<br/>
    • <b>Superscript/Subscript:</b> H₂O, x²<br/>
    <br/>
    <b>Keyboard Shortcuts:</b><br/>
    • Ctrl + B: Bold<br/>
    • Ctrl + I: Italic<br/>
    • Ctrl + U: Underline<br/>
    • Ctrl + Shift + >/<: Increase/decrease font size<br/>
    • Ctrl + D: Font dialog box
</div>

<b>Paragraph Formatting (Affects Entire Paragraphs):</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Formatting applied to entire paragraphs<br/>
    <b>Location:</b> Home tab → Paragraph group<br/>
    <b>Common Paragraph Formatting:</b><br/>
    • <b>Alignment:</b> Left, Center, Right, Justified<br/>
    • <b>Indentation:</b> Left, right, first line, hanging<br/>
    • <b>Spacing:</b> Line spacing, paragraph spacing<br/>
    • <b>Bullets/Numbering:</b> Lists<br/>
    • <b>Borders:</b> Boxes, lines around paragraphs<br/>
    • <b>Shading:</b> Background color for paragraph<br/>
    • <b>Tabs:</b> Custom tab stops<br/>
    <br/>
    <b>Keyboard Shortcuts:</b><br/>
    • Ctrl + L/E/R/J: Left/Center/Right/Justify alignment<br/>
    • Ctrl + 1/2/5: Single/1.5/Double line spacing<br/>
    • Ctrl + Shift + L: Apply bullets<br/>
    • Ctrl + M: Increase indent<br/>
    • Ctrl + Shift + M: Decrease indent<br/>
    • Ctrl + T: Hanging indent<br/>
    • Ctrl + Shift + T: Remove hanging indent
</div>

<b>How to Tell What Formatting is Applied:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Method</th>
        <th style="padding: 10px; border: 1px solid #ddd;">How to Use</th>
        <th style="padding: 10px; border: 1px solid #ddd;">What It Shows</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Reveal Formatting</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Shift + F1</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Complete formatting details pane</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Style Inspector</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Styles pane → Style Inspector button</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Separates style vs direct formatting</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Show Formatting Marks</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + * or ¶ button</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Spaces, tabs, paragraph marks</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Selection Tool</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Click text and check Ribbon</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Current font, size, alignment</td>
    </tr>
</table>

<b>b. The Format Painter: Your Formatting Duplication Tool</b><br/>

<b>What is Format Painter?</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Tool that copies formatting from one text selection and applies it to another<br/>
    <b>Location:</b> Home tab → Clipboard group (paintbrush icon)<br/>
    <b>Why It's Useful:</b> Maintains consistency without manually reapplying multiple formats<br/>
    <br/>
    <b>How to Use Format Painter:</b><br/>
    1. <b>Select source text</b> with the formatting you want to copy<br/>
    2. <b>Click Format Painter</b> button (single use) or <b>double-click</b> (multiple uses)<br/>
    3. <b>Drag over target text</b> to apply the formatting<br/>
    4. <b>Press Esc</b> or click Format Painter again to turn off<br/>
    <br/>
    <b>What Format Painter Copies:</b><br/>
    • Font type, size, color<br/>
    • Bold, italic, underline<br/>
    • Paragraph alignment, indentation<br/>
    • Line spacing, paragraph spacing<br/>
    • Bullets or numbering<br/>
    • Borders and shading<br/>
    <br/>
    <b>What Format Painter Doesn't Copy:</b><br/>
    • Text content (only formatting)<br/>
    • Page layout settings<br/>
    • Section breaks<br/>
    • Headers and footers
</div>

<b>c. Understanding Word Styles: The Professional's Secret</b><br/>

<b>What Are Styles?</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Named collections of formatting settings that can be applied to text<br/>
    <b>Analogy:</b> Like CSS (Cascading Style Sheets) for web pages, but for Word documents<br/>
    <br/>
    <b>Why Use Styles Instead of Direct Formatting?</b><br/>
    1. <b>Consistency:</b> All headings look the same throughout document<br/>
    2. <b>Efficiency:</b> Change once, update everywhere<br/>
    3. <b>Structure:</b> Creates document outline for navigation<br/>
    4. <b>Automation:</b> Enables table of contents, cross-references<br/>
    5. <b>Accessibility:</b> Screen readers can navigate properly<br/>
    6. <b>Conversion:</b> Better results when converting to PDF/HTML<br/>
    <br/>
    <b>Types of Styles in Word:</b><br/>
    • <b>Paragraph Styles:</b> Apply to entire paragraphs (include paragraph formatting)<br/>
    • <b>Character Styles:</b> Apply to selected text within paragraphs<br/>
    • <b>Linked Styles:</b> Can behave as either paragraph or character styles<br/>
    • <b>Table Styles:</b> Formatting for tables<br/>
    • <b>List Styles:</b> Formatting for lists
</div>

<b>Built-in Styles You Should Know:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Style</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Default Formatting</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Purpose</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Shortcut</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Normal</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Calibri 11pt, Left align</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Body text, default paragraph</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + Shift + N</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Heading 1</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Calibri Light 16pt, Blue</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Main chapter/section titles</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + Alt + 1</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Heading 2</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Calibri Light 13pt, Blue</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Subsections</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + Alt + 2</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Heading 3</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Calibri Light 12pt, Blue</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Sub-subsections</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Ctrl + Alt + 3</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Title</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Calibri Light 28pt, Centered</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Document title</td>
        <td style="padding: 10px; border: 1px solid #ddd;">-</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Subtitle</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Calibri Light 14pt, Centered</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Document subtitle</td>
        <td style="padding: 10px; border: 1px solid #ddd;">-</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Quote</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Indented, italic</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Block quotations</td>
        <td style="padding: 10px; border: 1px solid #ddd;">-</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Intense Quote</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Indented, border left</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Prominent quotations</td>
        <td style="padding: 10px; border: 1px solid #ddd;">-</td>
    </tr>
</table>

<b>d. Working with the Styles Pane</b><br/>

<b>Opening and Using the Styles Pane:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Opening the Styles Pane:</b><br/>
    • Home tab → Styles group → dialog launcher (small arrow)<br/>
    • Keyboard: Alt + Ctrl + Shift + S<br/>
    <br/>
    <b>Styles Pane Components:</b><br/>
    1. <b>Style List:</b> Shows available styles with preview<br/>
    2. <b>Options Button:</b> Controls which styles are shown<br/>
    3. <b>New Style Button:</b> Creates custom styles<br/>
    4. <b>Style Inspector Button:</b> Analyzes formatting<br/>
    5. <b>Manage Styles Button:</b> Advanced style management<br/>
    6. <b>Show Preview Checkbox:</b> Shows formatting in list<br/>
    <br/>
    <b>Applying Styles:</b><br/>
    1. <b>Click in paragraph</b> or select text<br/>
    2. <b>Click style name</b> in Styles pane or Styles gallery<br/>
    3. <b>Use keyboard shortcuts</b> for common styles<br/>
    <br/>
    <b>Modifying Styles:</b><br/>
    1. <b>Right-click style</b> in Styles pane<br/>
    2. <b>Choose "Modify"</b><br/>
    3. <b>Change formatting</b> options<br/>
    4. <b>Choose update scope:</b> This document only or template<br/>
    <br/>
    <b>Style Options (Right-click menu):</b><br/>
    • Update [Style Name] to Match Selection<br/>
    • Modify...<br/>
    • Select All [Number] Instances (selects all text with that style)<br/>
    • Clear Formatting of [Number] Instances<br/>
    • Remove from Style Gallery<br/>
    • Delete [Style Name]...
</div>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Generate Sample Text</b><br/>
    1. Open new Word document<br/>
    2. Type: <pre>=lorem(3,5)</pre> and press Enter<br/>
    3. Word generates 3 paragraphs of 5 sentences each (Latin placeholder text)<br/>
    4. Add headings: Type "Chapter 1" then press Enter<br/>
    5. Type "Section 1.1" then press Enter<br/>
    6. Type "Subsection 1.1.1" then press Enter<br/>
    7. Add more Lorem text after each heading<br/>
    <br/>
    <b>Exercise 2: Direct Formatting Practice</b><br/>
    1. Select first paragraph<br/>
    2. Apply: Arial font, 12pt, Bold, Red color<br/>
    3. Center align the paragraph<br/>
    4. Add 1.5 line spacing<br/>
    5. Add left indent of 0.5"<br/>
    6. Add border around paragraph<br/>
    7. Use Format Painter to copy this formatting to another paragraph<br/>
    <br/>
    <b>Exercise 3: Style Application</b><br/>
    1. Apply "Heading 1" to "Chapter 1"<br/>
    2. Apply "Heading 2" to "Section 1.1"<br/>
    3. Apply "Heading 3" to "Subsection 1.1.1"<br/>
    4. Select all body text, apply "Normal" style<br/>
    5. Open Navigation Pane (View tab → Navigation Pane)<br/>
    6. Notice headings appear in outline<br/>
    7. Click headings in Navigation Pane to jump to them<br/>
    <br/>
    <b>Exercise 4: Style Modification</b><br/>
    1. Right-click "Heading 1" in Styles pane → Modify<br/>
    2. Change to: Georgia font, 18pt, Dark Red, Bold<br/>
    3. Add paragraph spacing: After 12pt<br/>
    4. Check "Add to Styles gallery" and "Only in this document"<br/>
    5. Click OK - notice all Heading 1 instances update automatically<br/>
    6. Repeat for Heading 2 and Heading 3 with different colors<br/>
    <br/>
    <b>Exercise 5: Clear Formatting</b><br/>
    1. Select a heavily formatted paragraph<br/>
    2. Home tab → Font group → Clear All Formatting (A with eraser)<br/>
    3. Text reverts to Normal style<br/>
    4. Try Shift + F1 to reveal formatting before and after clearing
</div>

<h3>Creating and Managing Custom Styles</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Creating a New Style from Formatting:</b><br/>
    1. <b>Format text</b> exactly as you want the style to look<br/>
    2. <b>Select the formatted text</b><br/>
    3. <b>Styles pane → New Style button</b> (first button, AA with star)<br/>
    4. <b>Name the style</b> (use descriptive names)<br/>
    5. <b>Set style type:</b> Paragraph, Character, etc.<br/>
    6. <b>Choose "Add to Styles gallery"</b> for easy access<br/>
    7. <b>Set "Only in this document" or "New documents based on template"</b><br/>
    <br/>
    <b>Style Naming Best Practices:</b><br/>
    • Use descriptive names: "Report Body Text" not "Style1"<br/>
    • Indicate purpose: "Sidebar Heading" "Figure Caption"<br/>
    • Consider hierarchy: "Level 1 Heading" "Level 2 Heading"<br/>
    • Avoid spaces in names if exporting to HTML<br/>
    <br/>
    <b>Style Based On:</b> (Important Concept)<br/>
    • New styles can be based on existing styles<br/>
    • If base style changes, derived styles update too<br/>
    • Example: Create "Warning Text" based on "Normal"<br/>
    • If Normal font changes, Warning Text font changes too<br/>
    • Useful for maintaining consistency<br/>
    <br/>
    <b>Style for Following Paragraph:</b><br/>
    • Sets what style follows automatically after pressing Enter<br/>
    • Example: Heading 1 → Normal<br/>
    • Saves time when creating structured documents<br/>
    <br/>
    <b>Style Sets and Themes:</b><br/>
    • <b>Style Sets:</b> Collections of coordinated styles (Design tab)<br/>
    • <b>Themes:</b> Complete design packages (colors, fonts, effects)<br/>
    • Change entire document look with one click<br/>
    • Maintain consistency while changing appearance
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Create a Professionally Formatted Report</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Create a multi-page report using proper styles<br/>
        2. Implement custom styles for specific elements<br/>
        3. Use Format Painter effectively<br/>
        4. Create and apply a style set<br/>
        5. Document your formatting decisions<br/>
    </div>
    
    <b>Part 1: Report Structure with Built-in Styles</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a 3-page report on "The Future of Technology"</b><br/>
        <br/>
        <b>Page 1: Title Page</b><br/>
        • Title: "The Future of Technology: 2024 and Beyond" (Title style)<br/>
        • Subtitle: "A Comprehensive Analysis" (Subtitle style)<br/>
        • Author: Your name (centered, normal style)<br/>
        • Date: Current date (centered, normal style)<br/>
        • Page break after title page<br/>
        <br/>
        <b>Page 2: Table of Contents (Placeholder)</b><br/>
        • Heading: "Table of Contents" (Heading 1)<br/>
        • [Leave space for auto-generated TOC later]<br/>
        • Page break after TOC page<br/>
        <br/>
        <b>Page 3+: Report Content</b><br/>
        • Main Heading: "Introduction" (Heading 1)<br/>
        • 2-3 paragraphs of content (Normal style)<br/>
        • Subheading: "Current Trends" (Heading 2)<br/>
        • Bulleted list of trends (List Paragraph style)<br/>
        • Subheading: "Future Predictions" (Heading 2)<br/>
        • Numbered list of predictions (List style)<br/>
        • Sub-subheading: "Artificial Intelligence" (Heading 3)<br/>
        • Content with quote (Quote style)<br/>
        • Sub-subheading: "Quantum Computing" (Heading 3)<br/>
        • Content with important note (create custom style)<br/>
        • Conclusion heading and paragraph
    </div>
    
    <b>Part 2: Custom Style Creation</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create these custom styles:</b><br/>
        <br/>
        <b>1. "Important Note" Style:</b><br/>
        • Based on: Normal<br/>
        • Font: Calibri, 11pt, Bold, Dark Blue<br/>
        • Paragraph: Left indent 0.5", Right indent 0.5"<br/>
        • Border: Box border, Blue, 1.5pt<br/>
        • Shading: Light blue background (10% tint)<br/>
        • Spacing: 6pt before and after<br/>
        • Apply to important notes in your report<br/>
        <br/>
        <b>2. "Code Snippet" Style:</b><br/>
        • Based on: Normal<br/>
        • Font: Consolas, 10pt<br/>
        • Paragraph: Left indent 0.5", Hanging indent 0.25"<br/>
        • Border: Left border only, Gray, 3pt<br/>
        • Shading: Light gray background<br/>
        • Character spacing: Condensed by 0.5pt<br/>
        <br/>
        <b>3. "Figure Caption" Style:</b><br/>
        • Based on: Normal<br/>
        • Font: Calibri, 10pt, Italic<br/>
        • Paragraph: Centered<br/>
        • Spacing: 3pt before, 12pt after<br/>
        <br/>
        <b>4. "Sidebar Heading" Style:</b><br/>
        • Based on: Heading 3<br/>
        • Font: Small caps, Underline<br/>
        • Border: Bottom border only<br/>
        • Paragraph spacing: 18pt after
    </div>
    
    <b>Part 3: Format Painter Efficiency Challenge</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Complete these tasks using Format Painter efficiently:</b><br/>
        <br/>
        <b>Task 1: Consistency Check</b><br/>
        1. Apply direct formatting to one paragraph:<br/>
        &nbsp;&nbsp;• Font: Georgia, 12pt<br/>
        &nbsp;&nbsp;• Color: Dark Green<br/>
        &nbsp;&nbsp;• Line spacing: 1.5<br/>
        &nbsp;&nbsp;• First line indent: 0.3"<br/>
        2. Use Format Painter to apply to 3 other paragraphs<br/>
        3. Time yourself doing it with Format Painter vs manually<br/>
        <br/>
        <b>Task 2: Style vs Direct Formatting</b><br/>
        1. Create two paragraphs with identical formatting:<br/>
        &nbsp;&nbsp;• One using direct formatting<br/>
        &nbsp;&nbsp;• One using a custom style<br/>
        2. Now change the formatting requirements:<br/>
        &nbsp;&nbsp;• Change font to Verdana<br/>
        &nbsp;&nbsp;• Change color to Purple<br/>
        &nbsp;&nbsp;• Add italic<br/>
        3. Update both paragraphs:<br/>
        &nbsp;&nbsp;• Direct formatting: Update each individually<br/>
        &nbsp;&nbsp;• Style formatting: Modify style once<br/>
        4. Compare time and effort<br/>
        <br/>
        <b>Task 3: Mixed Formatting Challenge</b><br/>
        1. Create text with mixed formatting:<br/>
        &nbsp;&nbsp;• "This is <b>bold</b> and this is <i>italic</i> text."<br/>
        2. Use Format Painter to copy mixed formatting<br/>
        3. Apply to other text selections<br/>
        4. Use Style Inspector (Styles pane → Style Inspector button)<br/>
        5. Identify what formatting is from style vs direct
    </div>
    
    <b>Part 4: Style Sets and Themes</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Experiment with different document designs:</b><br/>
        <br/>
        <b>1. Apply Style Sets:</b><br/>
        • Design tab → Style Sets gallery<br/>
        • Try: Formal, Casual, Modern, Classic<br/>
        • Notice how all heading and text styles change together<br/>
        • Take screenshots of 3 different style sets<br/>
        <br/>
        <b>2. Change Themes:</b><br/>
        • Design tab → Themes gallery<br/>
        • Try different themes: Office, Integral, Ion<br/>
        • Each theme changes: Colors, Fonts, Effects<br/>
        • Customize: Design tab → Colors/Fonts/Effects<br/>
        • Create custom color set with your school/organization colors<br/>
        <br/>
        <b>3. Create Custom Style Set:</b><br/>
        1. Modify Normal, Heading 1-3, and your custom styles<br/>
        2. Design tab → Style Sets → Save as New Style Set<br/>
        3. Name it: "[YourName] Professional Report"<br/>
        4. Apply to a new document to test<br/>
        <br/>
        <b>4. Style Management:</b><br/>
        • Open Manage Styles (Styles pane → Manage Styles button)<br/>
        • Sort styles by: Recommended, Alphabetical, Font, etc.<br/>
        • Set some styles as "Hide until used"<br/>
        • Export your styles to other documents
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Style Inheritance System</b><br/>
        • Create a style hierarchy:<br/>
        &nbsp;&nbsp;- Base: "Document Text" (Normal modified)<br/>
        &nbsp;&nbsp;- Based on Document Text: "Body Paragraph"<br/>
        &nbsp;&nbsp;- Based on Body Paragraph: "Indented Paragraph"<br/>
        &nbsp;&nbsp;- Based on Body Paragraph: "Highlighted Paragraph"<br/>
        • Change Base style font<br/>
        • Observe how all derived styles update<br/>
        • Document the inheritance chain<br/>
        <br/>
        <b>Challenge 2: Accessibility-Focused Styles</b><br/>
        • Research accessibility guidelines for documents<br/>
        • Create styles that meet WCAG 2.1 AA standards:<br/>
        &nbsp;&nbsp;- Sufficient color contrast<br/>
        &nbsp;&nbsp;- Clear heading hierarchy<br/>
        &nbsp;&nbsp;- Readable font sizes<br/>
        &nbsp;&nbsp;- Proper spacing<br/>
        • Run Accessibility Checker (Review tab)<br/>
        • Fix any issues found<br/>
        <br/>
        <b>Challenge 3: Template Creation with Styles</b><br/>
        • Create a complete report template with:<br/>
        &nbsp;&nbsp;- Title page with fields<br/>
        &nbsp;&nbsp;- Table of contents placeholder<br/>
        &nbsp;&nbsp;- Section pages with proper styles<br/>
        &nbsp;&nbsp;- Reference page styles<br/>
        &nbsp;&nbsp;- Custom styles for figures, tables, code<br/>
        • Save as Word Template (.dotx)<br/>
        • Document style usage guidelines
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>Complete report document with all required sections</li>
        <li>Screenshots showing custom styles in Styles pane</li>
        <li>Before/after screenshots of style set changes</li>
        <li>Brief analysis comparing Format Painter vs Style efficiency</li>
        <li>List of your custom styles with descriptions of when to use each</li>
        <li>Template file if challenge completed</li>
    </ul>
</div>

<h3>Advanced Style Features</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Quick Styles Gallery:</b><br/>
    • Home tab → Styles group shows frequently used styles<br/>
    • Customize which styles appear here<br/>
    • Right-click style in gallery → Remove from Gallery<br/>
    • Add styles to gallery: Modify style → "Add to Styles gallery"<br/>
    <br/>
    <b>2. Style Based On Another Style:</b><br/>
    • When modifying/creating styles, use "Style based on"<br/>
    • Creates parent-child relationships<br/>
    • Changes to parent affect all children<br/>
    • Example: Heading 2 based on Heading 1, Normal based on No Spacing<br/>
    <br/>
    <b>3. Style for Following Paragraph:</b><br/>
    • Automatically applies specified style after pressing Enter<br/>
    • Example: Heading 1 → Normal, Figure Caption → Normal<br/>
    • Saves time in structured documents<br/>
    <br/>
    <b>4. Keyboard Shortcuts for Styles:</b><br/>
    • Assign custom shortcuts: Modify style → Format → Shortcut key<br/>
    • Built-in: Ctrl+Alt+1/2/3 for Heading 1/2/3<br/>
    • Ctrl+Shift+N for Normal<br/>
    • Ctrl+Shift+S opens Apply Styles pane<br/>
    <br/>
    <b>5. Style Organizer:</b><br/>
    • File → Options → Add-ins → Manage: Templates → Go<br/>
    • Organizer button to copy styles between documents/templates<br/>
    • Useful for standardizing styles across organization<br/>
    <br/>
    <b>6. AutoFormat as You Type:</b><br/>
    • File → Options → Proofing → AutoCorrect Options → AutoFormat As You Type<br/>
    • Automatic bulleted/numbered lists<br/>
    • Border lines (type --- and press Enter)<br/>
    • Built-in heading styles (type heading, press Enter twice)<br/>
    • Fractions (1/2 becomes ½)
</div>

<h3>Common Formatting Problems and Solutions</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Problem 1: "My formatting keeps changing unexpectedly"</b><br/>
    <b>Cause:</b> Style is updating or style set/theme changed<br/>
    <b>Solution:</b><br/>
    1. Check if using styles vs direct formatting<br/>
    2. Modify style with "Automatically update" unchecked<br/>
    3. Save custom style set to prevent theme changes affecting it<br/>
    4. Use Style Inspector to see what formatting is applied<br/>
    <br/>
    <b>Problem 2: "I can't get rid of some formatting"</b><br/>
    <b>Cause:</b> Multiple layers of formatting applied<br/>
    <b>Solution:</b><br/>
    1. Select text and click Clear All Formatting (Home tab)<br/>
    2. Apply Normal style to reset<br/>
    3. Use Style Inspector to see and remove direct formatting<br/>
    4. Copy text to Notepad (removes all formatting) then paste back<br/>
    <br/>
    <b>Problem 3: "My headings don't appear in Navigation Pane"</b><br/>
    <b>Cause:</b> Not using built-in Heading styles (1-9)<br/>
    <b>Solution:</b><br/>
    1. Apply Heading 1, 2, 3 styles instead of direct formatting<br/>
    2. Modify Heading styles to look how you want<br/>
    3. Custom styles won't appear unless mapped to heading levels<br/>
    <br/>
    <b>Problem 4: "Format Painter not working as expected"</b><br/>
    <b>Causes:</b><br/>
    1. Single-click vs double-click Format Painter<br/>
    2. Applying paragraph vs character formatting<br/>
    3. Source text has mixed formatting<br/>
    <b>Solution:</b><br/>
    1. Double-click Format Painter for multiple applications<br/>
    2. Select entire paragraph for paragraph formatting<br/>
    3. Use Style Inspector to understand source formatting<br/>
    <br/>
    <b>Problem 5: "Styles missing or changed when sharing document"</b><br/>
    <b>Cause:</b> Different version of Word or styles not embedded<br/>
    <b>Solution:</b><br/>
    1. Save in .docx format (not .doc)<br/>
    2. Embed fonts if using custom fonts<br/>
    3. Send as PDF for guaranteed appearance<br/>
    4. Include template if custom styles are used
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> What's the main advantage of using styles over direct formatting?<br/>
    a) Styles are prettier<br/>
    b) Styles allow one change to update everywhere<br/>
    c) Styles use less memory<br/>
    d) Styles are required for printing<br/>
    <br/>
    <b>Question 2:</b> How do you open the Styles pane?<br/>
    a) Ctrl + S<br/>
    b) Alt + Ctrl + Shift + S<br/>
    c) F11<br/>
    d) View tab → Styles<br/>
    <br/>
    <b>Question 3:</b> What does double-clicking Format Painter do?<br/>
    a) Applies formatting to one selection<br/>
    b) Locks Format Painter for multiple uses<br/>
    c) Opens formatting options<br/>
    d) Clears all formatting<br/>
    <br/>
    <b>Question 4:</b> Which style should you use for main chapter titles?<br/>
    a) Normal<br/>
    b) Title<br/>
    c) Heading 1<br/>
    d) Heading 9<br/>
    <br/>
    <b>Question 5:</b> How do you create a new style from formatted text?<br/>
    a) Right-click → Save as Style<br/>
    b) Styles pane → New Style button<br/>
    c) Format tab → Create Style<br/>
    d) Design tab → New Style
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 2 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Differentiate between character and paragraph formatting</li>
        <li>✅ Use Format Painter efficiently for consistent formatting</li>
        <li>✅ Apply and modify built-in Word styles</li>
        <li>✅ Create and manage custom styles</li>
        <li>✅ Use style sets and themes for document design</li>
        <li>✅ Troubleshoot common formatting problems</li>
    </ul>
    
    <p><b>Homework Preparation for Day 3:</b><br/>
    1. Practice creating different types of tables in Word<br/>
    2. Experiment with inserting and formatting images<br/>
    3. Try wrapping text around images<br/>
    4. Research when to use tables vs tabs for alignment<br/>
    5. Create a document with both tables and images</p>
    
    <p><b>Interesting Fact:</b> The concept of styles in word processing dates back to the 1970s. The first popular word processor with styles was WordStar (1978), but Microsoft Word (1983) made styles more accessible to everyday users. Today's styles in Word can include up to 172 different formatting properties!</p>
    
    <p><b>Remember:</b> "Using styles is like building with LEGO instead of carving from stone. You create reusable components that can be easily rearranged, modified, and repurposed. Once you master styles, you'll never go back to direct formatting!"</p>
    
    <p><b>Next:</b> Tomorrow we'll work with tables and images - essential skills for creating professional reports, resumes, and business documents!</p>
</div>`
            },
            "3-3": {
                icon: "fas fa-table",
                title: "Working with Tables & Images",
                html: `<h1>Week 3, Day 3: Working with Tables & Images</h1>
<p>Today we'll learn to organize data visually with tables and enhance documents with images and graphics.</p>

<div class="analogy-box">
    <b>Analogy: Tables as Spreadsheets, Images as Art 🎨</b><br/>
    
    Table Cells: Individual spreadsheet cells<br/>
    Table Borders: Grid lines (can be visible or invisible)<br/>
    Image Wrap: How text flows around a picture<br/>
    Image Compression: Making digital photos smaller<br/>
    SmartArt: Pre-designed diagram templates<br/>
    Shapes: Vector graphics (scale without quality loss)<br/>
    Icons: Modern, scalable symbols<br/>
    Charts: Visual representations of data
</div>

<h3>Key Topics</h3>
<ul>
    <li>Creating and Formatting Tables</li>
    <li>Table Design and Layout Tools</li>
    <li>Inserting and Formatting Images</li>
    <li>Text Wrapping and Positioning</li>
    <li>Working with Shapes and SmartArt</li>
    <li>Using Icons and 3D Models</li>
    <li>Document Layout with Tables</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Tables: The Ultimate Organizer</b><br/>

<b>What are Tables Used For?</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Data Presentation:</b> Organizing information in rows and columns<br/>
    &nbsp;&nbsp;• Schedules, timetables, price lists<br/>
    &nbsp;&nbsp;• Comparative data, specifications<br/>
    &nbsp;&nbsp;• Database-like information<br/>
    <br/>
    <b>2. Document Layout:</b> Creating structured designs<br/>
    &nbsp;&nbsp;• Resumes/CVs (hidden tables for alignment)<br/>
    &nbsp;&nbsp;• Newsletters, brochures<br/>
    &nbsp;&nbsp;• Forms with labels and fields<br/>
    &nbsp;&nbsp;• Side-by-side content comparison<br/>
    <br/>
    <b>3. Mathematical Data:</b> Presenting calculations<br/>
    &nbsp;&nbsp;• Budgets, financial reports<br/>
    &nbsp;&nbsp;• Statistical data<br/>
    &nbsp;&nbsp;• Scientific measurements<br/>
    <br/>
    <b>Table Terminology:</b><br/>
    • <b>Cell:</b> Intersection of row and column (like Excel cell)<br/>
    • <b>Row:</b> Horizontal group of cells<br/>
    • <b>Column:</b> Vertical group of cells<br/>
    • <b>Header Row:</b> First row with column titles (often formatted differently)<br/>
    • <b>Borders:</b> Lines between cells (can be visible or hidden)<br/>
    • <b>Shading:</b> Background color of cells<br/>
    • <b>Merge:</b> Combine multiple cells into one<br/>
    • <b>Split:</b> Divide one cell into multiple cells
</div>

<b>Creating Tables in Word:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Method</th>
        <th style="padding: 10px; border: 1px solid #ddd;">How to Access</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Best For</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Limitations</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert Table Grid</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert tab → Table → Drag over grid</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Quick small tables (up to 10×8)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Limited size preview</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Insert Table Dialog</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert tab → Table → Insert Table</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Precise control over dimensions</td>
        <td style="padding: 10px; border: 1px solid #ddd;">More steps</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Draw Table</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert tab → Table → Draw Table</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Custom irregular tables</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Time-consuming</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Convert Text to Table</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Select text → Insert tab → Table → Convert Text to Table</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Existing text data (tabs, commas)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Text must be properly delimited</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Quick Tables</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert tab → Table → Quick Tables</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Pre-formatted templates</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Limited customization</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Excel Spreadsheet</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert tab → Table → Excel Spreadsheet</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Complex calculations</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Requires Excel knowledge</td>
    </tr>
</table>

<b>b. Table Tools: Design and Layout Contextual Tabs</b><br/>

<b>Table Tools Design Tab (Appears when table is selected):</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Table Style Options Group:</b><br/>
    • <b>Header Row:</b> Format first row differently<br/>
    • <b>Total Row:</b> Format last row differently (for totals)<br/>
    • <b>Banded Rows:</b> Alternate row shading<br/>
    • <b>First Column/Last Column:</b> Special formatting<br/>
    • <b>Banded Columns:</b> Alternate column shading<br/>
    <br/>
    <b>Table Styles Gallery:</b><br/>
    • Pre-designed table formats<br/>
    • Categories: Plain, Light, Medium, Dark<br/>
    • Live preview when hovering<br/>
    • Create New Table Style for custom designs<br/>
    <br/>
    <b>Borders Group:</b><br/>
    • Line style, weight, color<br/>
    • Border painter tool<br/>
    • Border styles (all, outside, inside, etc.)<br/>
    • No border option (for layout tables)<br/>
    <br/>
    <b>Shading:</b><br/>
    • Cell background colors<br/>
    • Theme colors for consistency<br/>
    • Gradient fills<br/>
    • Texture fills<br/>
    <br/>
    <b>Effects:</b><br/>
    • Cell bevels (3D effects)<br/>
    • Shadow effects
</div>

<b>Table Tools Layout Tab (Appears when table is selected):</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Table Group:</b><br/>
    • <b>Select:</b> Cell, column, row, or entire table<br/>
    • <b>View Gridlines:</b> Show hidden table structure<br/>
    • <b>Properties:</b> Advanced table settings<br/>
    <br/>
    <b>Rows & Columns Group:</b><br/>
    • <b>Insert:</b> Above/below (rows), left/right (columns)<br/>
    • <b>Delete:</b> Cells, rows, columns, entire table<br/>
    <br/>
    <b>Merge Group:</b><br/>
    • <b>Merge Cells:</b> Combine selected cells<br/>
    • <b>Split Cells:</b> Divide cell into rows/columns<br/>
    • <b>Split Table:</b> Break table into two tables<br/>
    <br/>
    <b>Cell Size Group:</b><br/>
    • <b>Height/Width:</b> Set exact dimensions<br/>
    • <b>AutoFit:</b> Contents, window, fixed column width<br/>
    • <b>Distribute Rows/Columns:</b> Make equal size<br/>
    <br/>
    <b>Alignment Group:</b><br/>
    • Text alignment within cells (9 options)<br/>
    • Text direction (horizontal, vertical)<br/>
    • Cell margins (space between text and cell border)<br/>
    <br/>
    <b>Data Group:</b><br/>
    • <b>Sort:</b> Alphabetical/numerical sorting<br/>
    • <b>Repeat Header Rows:</b> For multi-page tables<br/>
    • <b>Convert to Text:</b> Table back to regular text<br/>
    • <b>Formula:</b> Simple calculations (like Excel)
</div>

<b>c. Working with Images in Word</b><br/>

<b>Inserting Images:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Sources for Images:</b><br/>
    • <b>This Device:</b> From your computer<br/>
    • <b>Stock Images:</b> Microsoft's royalty-free library<br/>
    • <b>Online Pictures:</b> Bing search, OneDrive, Flickr<br/>
    • <b>Icons:</b> Scalable vector icons<br/>
    • <b>3D Models:</b> Rotatable 3D objects<br/>
    • <b>Screenshots:</b> Capture from other windows<br/>
    <br/>
    <b>Supported Image Formats:</b><br/>
    • <b>Common:</b> JPG/JPEG, PNG, GIF, BMP<br/>
    • <b>Vector:</b> SVG (scalable vector graphics)<br/>
    • <b>Professional:</b> TIFF, EPS (with filters)<br/>
    • <b>Icons:</b> ICO<br/>
    <br/>
    <b>Insert Methods:</b><br/>
    1. <b>Insert tab → Pictures/Online Pictures/Icons</b><br/>
    2. <b>Drag and drop</b> from File Explorer<br/>
    3. <b>Copy and paste</b> from other applications<br/>
    4. <b>Screenshot tool</b> (Insert → Screenshot)<br/>
    <br/>
    <b>Image Size Considerations:</b><br/>
    • Large images increase file size dramatically<br/>
    • High resolution (DPI) matters for printing<br/>
    • Web images are typically 72-96 DPI<br/>
    • Print images should be 150-300 DPI<br/>
    • Use compression to reduce file size
</div>

<b>Picture Tools Format Tab (Appears when image is selected):</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Adjust Group:</b><br/>
    • <b>Corrections:</b> Brightness, contrast, sharpness<br/>
    • <b>Color:</b> Recolor, saturation, tone<br/>
    • <b>Artistic Effects:</b> Filters like pencil sketch, paint brush<br/>
    • <b>Compress Pictures:</b> Reduce file size<br/>
    • <b>Change Picture:</b> Replace with different image<br/>
    • <b>Reset Picture:</b> Remove all formatting changes<br/>
    <br/>
    <b>Picture Styles Group:</b><br/>
    • Gallery of frame effects (shadows, reflections, etc.)<br/>
    • Picture Border: Color, weight, line style<br/>
    • Picture Effects: Preset, shadow, reflection, glow, etc.<br/>
    • Picture Layout: Convert to SmartArt<br/>
    <br/>
    <b>Arrange Group:</b><br/>
    • <b>Position:</b> Preset text wrapping positions<br/>
    • <b>Wrap Text:</b> How text flows around image<br/>
    • <b>Bring Forward/Send Backward:</b> Layering order<br/>
    • <b>Selection Pane:</b> Manage all objects in document<br/>
    • <b>Align:</b> Align multiple objects<br/>
    • <b>Group:</b> Combine multiple objects<br/>
    • <b>Rotate:</b> Flip, rotate freely<br/>
    <br/>
    <b>Size Group:</b><br/>
    • Crop to shape, aspect ratio, or freely<br/>
    • Height and width controls<br/>
    • Maintain aspect ratio (lock icon)<br/>
    • Crop tool for removing parts of image
</div>

<b>d. Text Wrapping: Controlling Image Placement</b><br/>

<b>Text Wrapping Options:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Option</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Icon</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Best For</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">In Line with Text</td>
        <td style="padding: 10px; border: 1px solid #ddd;">📝</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Treated as a text character</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Small icons, inline graphics</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Square</td>
        <td style="padding: 10px; border: 1px solid #ddd;">⬜</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Text wraps around image in square shape</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Most images in documents</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Tight</td>
        <td style="padding: 10px; border: 1px solid #ddd;">🔲</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Text wraps around image contours</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Images with transparent backgrounds</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Through</td>
        <td style="padding: 10px; border: 1px solid #ddd;">↕️</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Text wraps through image (for irregular shapes)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Advanced design layouts</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Top and Bottom</td>
        <td style="padding: 10px; border: 1px solid #ddd;">↕️</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Text above and below, not beside</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Full-width images</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Behind Text</td>
        <td style="padding: 10px; border: 1px solid #ddd;">📄</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Image behind text (watermark effect)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Watermarks, background images</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">In Front of Text</td>
        <td style="padding: 10px; border: 1px solid #ddd;">📰</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Image covers text</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Overlays, design elements</td>
    </tr>
</table>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Create a Class Schedule Table</b><br/>
    1. Insert → Table → 6 columns × 7 rows<br/>
    2. Format as follows:<br/>
    &nbsp;&nbsp;• Header row: Days of week (Mon-Fri) + "Weekend"<br/>
    &nbsp;&nbsp;• First column: Time slots (8-9, 9-10, 10-11, etc.)<br/>
    &nbsp;&nbsp;• Fill with sample classes<br/>
    3. Apply table style: Medium Shading 2 - Accent 1<br/>
    4. Table Tools Design → Table Style Options:<br/>
    &nbsp;&nbsp;• Check: Header Row, Banded Rows<br/>
    &nbsp;&nbsp;• Uncheck: Banded Columns<br/>
    5. Merge cells for lunch break (12-1 across all days)<br/>
    6. Add "LUNCH" in merged cell, center align<br/>
    <br/>
    <b>Exercise 2: Image Insertion and Formatting</b><br/>
    1. Insert a picture (use stock image or your own)<br/>
    2. Resize to approximately 3 inches wide<br/>
    3. Apply picture style: "Soft Edge Rectangle"<br/>
    4. Adjust: Increase brightness 20%, contrast -10%<br/>
    5. Try different text wrapping options:<br/>
    &nbsp;&nbsp;• Square (move around document)<br/>
    &nbsp;&nbsp;• Tight (if image has transparent background)<br/>
    &nbsp;&nbsp;• Behind text (for watermark effect)<br/>
    6. Add caption: References tab → Insert Caption<br/>
    <br/>
    <b>Exercise 3: SmartArt Diagram</b><br/>
    1. Insert → SmartArt<br/>
    2. Choose: Hierarchy → Organizational Chart<br/>
    3. Add levels: CEO, Managers, Team Leads, Employees<br/>
    4. Change colors: SmartArt Design → Change Colors<br/>
    5. Apply SmartArt style: 3D Polished<br/>
    6. Convert to shapes: SmartArt Design → Convert → Convert to Shapes<br/>
    7. Ungroup and modify individual shapes<br/>
    <br/>
    <b>Exercise 4: Resume Layout with Hidden Table</b><br/>
    1. Create 2×2 table (no borders)<br/>
    2. Left column: 2.5 inches, Right column: 4.5 inches<br/>
    3. Left column content:<br/>
    &nbsp;&nbsp;• Name (large font)<br/>
    &nbsp;&nbsp;• Contact info<br/>
    &nbsp;&nbsp;• Skills (bulleted)<br/>
    4. Right column content:<br/>
    &nbsp;&nbsp;• Professional Summary<br/>
    &nbsp;&nbsp;• Work Experience<br/>
    &nbsp;&nbsp;• Education<br/>
    5. Hide table borders: Table Tools Design → Borders → No Border<br/>
    6. Show gridlines to see structure while editing
</div>

<h3>Advanced Table and Image Techniques</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Table Formulas (Basic Calculations):</b><br/>
    • Position cursor in cell where result should appear<br/>
    • Layout tab → Data group → Formula<br/>
    • Common functions: SUM, AVERAGE, COUNT, MAX, MIN<br/>
    • References: ABOVE, BELOW, LEFT, RIGHT<br/>
    • Example: =SUM(ABOVE) adds all numbers above current cell<br/>
    • Note: Not as powerful as Excel, but useful for simple calculations<br/>
    <br/>
    <b>2. Sorting Table Data:</b><br/>
    • Select table or column to sort<br/>
    • Layout tab → Data group → Sort<br/>
    • Sort by: Column, type (text, number, date)<br/>
    • Ascending/Descending order<br/>
    • Can sort on multiple columns (primary, secondary)<br/>
    • Header row option: "My list has header row"<br/>
    <br/>
    <b>3. Nested Tables (Table within a Table):</b><br/>
    • Place cursor inside table cell<br/>
    • Insert → Table to create nested table<br/>
    • Useful for complex layouts<br/>
    • Can have different formatting for inner table<br/>
    • Be careful with borders and alignment<br/>
    <br/>
    <b>4. Image Compression and Optimization:</b><br/>
    • Select image → Picture Format tab → Compress Pictures<br/>
    • Options: Apply to this picture only or all pictures<br/>
    • Delete cropped areas of pictures (saves space)<br/>
    • Target output: Email (96 ppi), Web (150 ppi), Print (220 ppi)<br/>
    • Can reduce file size by 50-90%<br/>
    <br/>
    <b>5. Background Removal (Remove Image Backgrounds):</b><br/>
    • Select image → Picture Format tab → Remove Background<br/>
    • Word automatically detects subject<br/>
    • Mark areas to keep/remove<br/>
    • Creates transparent background (PNG)<br/>
    • Essential for professional-looking documents<br/>
    <br/>
    <b>6. Anchors and Absolute Positioning:</b><br/>
    • File → Options → Display → check "Object anchors"<br/>
    • Shows which paragraph an image is anchored to<br/>
    • Prevents images from floating away from related text<br/>
    • More Layout Options → Position → check "Lock anchor"<br/>
    • Absolute positioning: Exact page position regardless of text
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Create a Professional Company Newsletter</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Design a 2-page newsletter using tables for layout<br/>
        2. Incorporate images with proper text wrapping<br/>
        3. Use SmartArt for organizational information<br/>
        4. Create data tables with formatting<br/>
        5. Apply professional design principles<br/>
    </div>
    
    <b>Part 1: Newsletter Layout with Tables</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a 2-column newsletter layout:</b><br/>
        <br/>
        <b>Page 1:</b><br/>
        1. Create 3×1 table (no borders) for header:<br/>
        &nbsp;&nbsp;• Row 1: Company logo and name<br/>
        &nbsp;&nbsp;• Row 2: "Monthly Newsletter" title and date<br/>
        &nbsp;&nbsp;• Row 3: Horizontal line graphic<br/>
        2. Create 1×2 table for main content:<br/>
        &nbsp;&nbsp;• Left column (60%): Feature article<br/>
        &nbsp;&nbsp;• Right column (40%): Sidebar with quick news<br/>
        3. Create 3×1 table for footer:<br/>
        &nbsp;&nbsp;• Contact information<br/>
        &nbsp;&nbsp;• Social media icons<br/>
        &nbsp;&nbsp;• Copyright notice<br/>
        <br/>
        <b>Page 2:</b><br/>
        1. Create 2×2 table for content blocks<br/>
        2. Each cell contains different department updates<br/>
        3. Add nested tables within cells for specific information<br/>
        <br/>
        <b>Table Formatting:</b><br/>
        • Hide all table borders (for layout tables)<br/>
        • Use shading for header and sidebar<br/>
        • Set consistent cell padding (Layout → Cell Margins)<br/>
        • Use paragraph spacing within cells
    </div>
    
    <b>Part 2: Image Integration</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Add and format images throughout newsletter:</b><br/>
        <br/>
        <b>Image 1: Feature Article Image</b><br/>
        • Insert relevant stock photo<br/>
        • Resize to fit column width<br/>
        • Apply text wrapping: Square<br/>
        • Position: Top left of article<br/>
        • Add caption: "Figure 1: [Description]"<br/>
        • Apply picture style: "Soft Edge Rectangle"<br/>
        <br/>
        <b>Image 2: Team Photo</b><br/>
        • Insert group photo (or placeholder)<br/>
        • Crop to focus on faces<br/>
        • Apply artistic effect: "Pencil Sketch"<br/>
        • Text wrapping: Tight<br/>
        • Position in sidebar<br/>
        • Add border: 3pt, company color<br/>
        <br/>
        <b>Image 3: Infographic</b><br/>
        • Create using SmartArt or shapes<br/>
        • Example: Process flowchart<br/>
        • Use company color scheme<br/>
        • Text wrapping: Top and Bottom<br/>
        • Center on page<br/>
        <br/>
        <b>Image Optimization:</b><br/>
        • Compress all images for email distribution<br/>
        • Set resolution: 150 ppi (web quality)<br/>
        • Remove background from logo if needed<br/>
        • Check file size after compression
    </div>
    
    <b>Part 3: Data Presentation with Tables</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create formatted data tables within newsletter:</b><br/>
        <br/>
        <b>Table 1: Department Performance Metrics</b><br/>
        1. Create 5×4 table:<br/>
        &nbsp;&nbsp;• Columns: Department, Q1, Q2, Q3, Q4<br/>
        &nbsp;&nbsp;• Rows: Sales, Marketing, Development, Support, Total<br/>
        2. Fill with sample data<br/>
        3. Apply table style: "Medium Shading 1 - Accent 2"<br/>
        4. Format header row differently<br/>
        5. Use banded rows for readability<br/>
        6. Add formulas in Total row:<br/>
        &nbsp;&nbsp;• =SUM(LEFT) for each quarter total<br/>
        &nbsp;&nbsp;• =SUM(ABOVE) for department yearly totals<br/>
        <br/>
        <b>Table 2: Upcoming Events Schedule</b><br/>
        1. Create calendar-style table<br/>
        2. Columns: Date, Time, Event, Location, Contact<br/>
        3. Apply alternating row colors manually<br/>
        4. Merge cells for multi-day events<br/>
        5. Sort by date (Layout → Sort)<br/>
        6. Add icons in Contact column (Insert → Icons)<br/>
        <br/>
        <b>Table 3: Employee Recognition</b><br/>
        1. Create 4×3 table with photos<br/>
        2. Columns: Photo, Name, Department, Achievement<br/>
        3. Insert employee photos (use icons as placeholders)<br/>
        4. Format as "List Table 3 - Accent 3"<br/>
        5. Center align photo column<br/>
        6. Add "Employee of the Month" highlighting
    </div>
    
    <b>Part 4: SmartArt and Shapes</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create visual elements using SmartArt and shapes:</b><br/>
        <br/>
        <b>SmartArt 1: Organizational Chart</b><br/>
        • Insert → SmartArt → Hierarchy<br/>
        • Add company structure: CEO, Directors, Managers, Teams<br/>
        • Change colors to match newsletter theme<br/>
        • Add pictures to key positions (picture placeholder)<br/>
        • Apply 3D perspective style<br/>
        <br/>
        <b>SmartArt 2: Process Flow</b><br/>
        • Show project development stages<br/>
        • Use Process category SmartArt<br/>
        • Customize shapes and colors for each stage<br/>
        • Add text descriptions<br/>
        • Apply subtle animation style (for digital viewing)<br/>
        <br/>
        <b>Shapes: Callout Boxes</b><br/>
        • Insert → Shapes → Callouts<br/>
        • Create sidebar callouts for key points<br/>
        • Fill with company color, white text<br/>
        • Add shadow effects for depth<br/>
        • Use different callout styles for quotes vs tips<br/>
        <br/>
        <b>Icons: Modern Visual Elements</b><br/>
        • Insert → Icons<br/>
        • Add relevant icons next to section headers<br/>
        • Recolor icons to match theme<br/>
        • Use consistently throughout newsletter<br/>
        • Combine icons with text for visual interest
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Interactive Table of Contents</b><br/>
        • Create table of contents using hyperlinks<br/>
        • Use table for multi-column TOC layout<br/>
        • Style as interactive (different colors for hover)<br/>
        • Test all links work correctly<br/>
        • Add "Back to Top" links at end of each section<br/>
        <br/>
        <b>Challenge 2: Image Gallery with Captions</b><br/>
        • Create 3×3 image gallery table<br/>
        • Insert images in each cell<br/>
        • Add automatic captions below each image<br/>
        • Create mouseover text descriptions<br/>
        • Style as professional portfolio<br/>
        • Add borders and shading for gallery effect<br/>
        <br/>
        <b>Challenge 3: Responsive Design Considerations</b><br/>
        • Design newsletter for both print and digital<br/>
        • Create print version (CMYK colors, high-res images)<br/>
        • Create digital version (RGB colors, compressed images)<br/>
        • Test readability on different screen sizes<br/>
        • Consider accessibility (alt text for images)<br/>
        • Export both as PDF with appropriate settings
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>Complete 2-page newsletter document</li>
        <li>Screenshots showing table structure (with gridlines visible)</li>
        <li>Before/after images of formatted pictures</li>
        <li>Document explaining your layout choices</li>
        <li>File size comparison before/after image compression</li>
        <li>Print and digital PDF versions (if challenge completed)</li>
    </ul>
</div>

<h3>Professional Design Principles</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Consistency:</b><br/>
    • Use same font families throughout<br/>
    • Maintain consistent spacing<br/>
    • Apply same table styles for similar data<br/>
    • Use color palette consistently<br/>
    <br/>
    <b>2. Alignment:</b><br/>
    • Align elements to invisible grid<br/>
    • Use tables for precise alignment<br/>
    • Consistent margins and padding<br/>
    • Align images with text baselines<br/>
    <br/>
    <b>3. Contrast:</b><br/>
    • Sufficient contrast for readability<br/>
    • Dark text on light background (or vice versa)<br/>
    • Use contrast to highlight important information<br/>
    • Consider color blindness when choosing colors<br/>
    <br/>
    <b>4. Proximity:</b><br/>
    • Related items should be grouped together<br/>
    • Use spacing to show relationships<br/>
    • Separate unrelated sections with whitespace<br/>
    • Use tables to keep related data together<br/>
    <br/>
    <b>5. Repetition:</b><br/>
    • Repeat visual elements throughout document<br/>
    • Consistent header/footer design<br/>
    • Same styling for all images of same type<br/>
    • Repeated use of company branding<br/>
    <br/>
    <b>6. Whitespace:</b><br/>
    • Don't fear empty space<br/>
    • Whitespace improves readability<br/>
    • Use cell padding in tables<br/>
    • Paragraph spacing for breathing room
</div>

<h3>Common Table and Image Problems</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Problem 1: "Table extends beyond page margin"</b><br/>
    <b>Solution:</b><br/>
    1. Select table → Layout tab → AutoFit → AutoFit to Window<br/>
    2. Manually adjust column widths<br/>
    3. Change page orientation to Landscape (Layout tab)<br/>
    4. Reduce font size within table<br/>
    5. Split table across multiple pages<br/>
    <br/>
    <b>Problem 2: "Images move unexpectedly when editing text"</b><br/>
    <b>Solution:</b><br/>
    1. Change text wrapping from "In Line with Text" to "Square" or "Tight"<br/>
    2. Set absolute positioning: More Layout Options → Position → Absolute<br/>
    3. Lock anchor: More Layout Options → Position → check "Lock anchor"<br/>
    4. Place image inside table cell for fixed position<br/>
    <br/>
    <b>Problem 3: "Table borders won't print/show"</b><br/>
    <b>Solution:</b><br/>
    1. Ensure borders are applied: Table Tools Design → Borders → All Borders<br/>
    2. Check border color isn't white (invisible on white background)<br/>
    3. Verify border thickness is sufficient (0.5pt minimum for printing)<br/>
    4. Print preview to confirm before printing<br/>
    <br/>
    <b>Problem 4: "Image quality poor when resizing"</b><br/>
    <b>Solution:</b><br/>
    1. Use original high-resolution images<br/>
    2. Resize proportionally (hold Shift while dragging corner)<br/>
    3. Avoid enlarging small images<br/>
    4. Use vector graphics (SVG, icons) when possible<br/>
    5. Compress after final sizing, not before<br/>
    <br/>
    <b>Problem 5: "Can't select table/image"</b><br/>
    <b>Solution:</b><br/>
    1. Use Selection Pane: Format tab → Selection Pane<br/>
    2. Switch to Print Layout view if in Draft view<br/>
    3. Click table move handle (four-headed arrow at top-left)<br/>
    4. For images behind text, send to back then bring forward
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> Which text wrapping option treats an image like a text character?<br/>
    a) Square<br/>
    b) Tight<br/>
    c) In Line with Text<br/>
    d) Behind Text<br/>
    <br/>
    <b>Question 2:</b> How do you merge cells in a table?<br/>
    a) Table Tools Design → Merge Cells<br/>
    b) Table Tools Layout → Merge Cells<br/>
    c) Right-click → Combine Cells<br/>
    d) Layout tab → Combine<br/>
    <br/>
    <b>Question 3:</b> What tool removes image backgrounds in Word?<br/>
    a) Crop<br/>
    b) Remove Background<br/>
    c) Transparency<br/>
    d) Background Remover<br/>
    <br/>
    <b>Question 4:</b> Which tab appears when you select a table?<br/>
    a) Table Design and Table Layout<br/>
    b) Format and Design<br/>
    c) Insert and Design<br/>
    d) Home and Layout<br/>
    <br/>
    <b>Question 5:</b> How do you make table borders invisible?<br/>
    a) Set border color to white<br/>
    b) Table Tools Design → Borders → No Border<br/>
    c) Remove all borders option<br/>
    d) Both b and c
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 3 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Create and format tables for data presentation</li>
        <li>✅ Use tables for document layout and structure</li>
        <li>✅ Insert and format images with proper text wrapping</li>
        <li>✅ Work with SmartArt, shapes, and icons</li>
        <li>✅ Apply professional design principles</li>
        <li>✅ Troubleshoot common table and image issues</li>
    </ul>
    
    <p><b>Homework Preparation for Day 4:</b><br/>
    1. Practice creating different page layouts in Word<br/>
    2. Experiment with headers, footers, and page numbers<br/>
    3. Try different margin settings and page orientations<br/>
    4. Create a multi-page document with consistent formatting<br/>
    5. Research professional document standards for your industry</p>
    
    <p><b>Interesting Fact:</b> The first version of Microsoft Word with table support was Word 1.0 for Windows in 1989. Early tables were very basic - just simple grids. Today's Word tables can perform calculations, sort data, include nested tables, and even connect to external data sources!</p>
    
    <p><b>Remember:</b> "Tables and images are the visual backbone of professional documents. Mastering them turns ordinary text into compelling, easy-to-understand communications that get results!"</p>
    
    <p><b>Next:</b> Tomorrow we complete Week 3 with page layouts, headers, footers, and creating professional documents like resumes and reports!</p>
</div>`
            },
            "3-4": {
                icon: "fas fa-file-alt",
                title: "Page Layouts & Headers/Footers",
                html: `<h1>Week 3, Day 4: Page Layouts & Headers/Footers</h1>
<p>Today we'll master document structure with page layouts, headers, footers, and create professional documents.</p>

<div class="analogy-box">
    <b>Analogy: Document as a Book, Pages as Chapters 📚</b><br/>
    
    Margins: Page borders/frames<br/>
    Headers/Footers: Running titles at top/bottom of pages<br/>
    Page Numbers: Chapter/page indicators<br/>
    Section Breaks: Chapter dividers<br/>
    Orientation: Portrait (vertical) vs Landscape (horizontal)<br/>
    Columns: Newspaper-style text flow<br/>
    Watermarks: Background impressions<br/>
    Page Borders: Decorative edges
</div>

<h3>Key Topics</h3>
<ul>
    <li>Page Setup: Margins, Orientation, Size</li>
    <li>Headers and Footers</li>
    <li>Page Numbering Systems</li>
    <li>Section Breaks and Multi-section Documents</li>
    <li>Columns for Text Layout</li>
    <li>Watermarks and Page Backgrounds</li>
    <li>Professional Document Creation</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Page Setup: The Document Foundation</b><br/>

<b>Page Setup Dialog Box:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Access:</b> Layout tab → Page Setup group → dialog launcher (small arrow)<br/>
    OR Double-click ruler<br/>
    <br/>
    <b>Three Tabs in Page Setup:</b><br/>
    <b>1. Margins Tab:</b><br/>
    • <b>Preset Margins:</b> Normal, Narrow, Moderate, Wide, Mirrored<br/>
    • <b>Custom Margins:</b> Top, Bottom, Left, Right, Gutter<br/>
    • <b>Gutter:</b> Extra space for binding (left or top)<br/>
    • <b>Gutter Position:</b> Left or Top (for binding)<br/>
    • <b>Orientation:</b> Portrait (vertical) or Landscape (horizontal)<br/>
    • <b>Pages:</b> Multiple pages options (Normal, Mirror margins, 2 pages per sheet, etc.)<br/>
    • <b>Apply to:</b> Whole document or This point forward<br/>
    <br/>
    <b>2. Paper Tab:</b><br/>
    • <b>Paper Size:</b> Letter (8.5×11"), Legal (8.5×14"), A4 (210×297mm), Custom<br/>
    • <b>Paper Source:</b> Which printer tray to use (for different first page)<br/>
    • <b>Preview:</b> Shows how changes will look<br/>
    <br/>
    <b>3. Layout Tab:</b><br/>
    • <b>Section:</b> Start (Continuous, New Page, Even Page, Odd Page)<br/>
    • <b>Headers and Footers:</b> Different odd & even, Different first page<br/>
    • <b>Vertical Alignment:</b> Top, Center, Justified (for title pages)<br/>
    • <b>Line Numbers:</b> Add line numbering (legal documents)<br/>
    • <b>Borders:</b> Page border settings
</div>

<b>Standard Margin Settings:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Margin Type</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Top/Bottom</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Left/Right</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Common Use</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Normal</td>
        <td style="padding: 10px; border: 1px solid #ddd;">1" (2.54 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">1" (2.54 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Most documents, default</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Narrow</td>
        <td style="padding: 10px; border: 1px solid #ddd;">0.5" (1.27 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">0.5" (1.27 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Maximizing content space</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Moderate</td>
        <td style="padding: 10px; border: 1px solid #ddd;">1" (2.54 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">0.75" (1.9 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Professional reports</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Wide</td>
        <td style="padding: 10px; border: 1px solid #ddd;">1" (2.54 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">2" (5.08 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Documents with notes</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Mirrored</td>
        <td style="padding: 10px; border: 1px solid #ddd;">1" (2.54 cm)</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Inside: 1.5", Outside: 1"</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Books, bound documents</td>
    </tr>
</table>

<b>b. Headers and Footers: Consistent Page Elements</b><br/>

<b>What are Headers and Footers?</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Header:</b> Area at top of page (outside top margin)<br/>
    <b>Footer:</b> Area at bottom of page (outside bottom margin)<br/>
    <b>Content repeats on every page (unless specified otherwise)</b><br/>
    <br/>
    <b>Common Header/Footer Content:</b><br/>
    • Document title or chapter title<br/>
    • Author name<br/>
    • Company/organization name<br/>
    • Date<br/>
    • Page numbers<br/>
    • Copyright information<br/>
    • Logo or graphic<br/>
    • Confidential notices<br/>
    • Document version<br/>
    <br/>
    <b>Accessing Headers/Footers:</b><br/>
    1. <b>Double-click</b> top or bottom of page in Print Layout view<br/>
    2. <b>Insert tab</b> → Header or Footer<br/>
    3. <b>Right-click</b> header/footer area → Edit Header/Footer<br/>
    <br/>
    <b>Header & Footer Tools Design Tab (Contextual):</b><br/>
    • <b>Header & Footer:</b> Insert predefined headers/footers<br/>
    • <b>Page Number:</b> Insert page numbers in various formats<br/>
    • <b>Date & Time:</b> Insert current date/time (static or updating)<br/>
    • <b>Quick Parts:</b> Document properties, fields, building blocks<br/>
    • <b>Pictures/Online Pictures:</b> Insert logos/graphics<br/>
    • <b>Navigation:</b> Go to Header/Footer, Previous/Next Section<br/>
    • <b>Options:</b> Different First Page, Different Odd & Even Pages<br/>
    • <b>Position:</b> Header from top, Footer from bottom<br/>
    • <b>Close:</b> Close Header and Footer (or double-click main document)
</div>

<b>Header/Footer Options:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Different First Page:</b><br/>
    • First page can have different header/footer (or none)<br/>
    • Common for title pages in reports, dissertations<br/>
    • Access: Header & Footer Tools Design → check "Different First Page"<br/>
    <br/>
    <b>2. Different Odd & Even Pages:</b><br/>
    • Left (even) and right (odd) pages can have different headers/footers<br/>
    • Common in books: page numbers on outer edges<br/>
    • Access: Header & Footer Tools Design → check "Different Odd & Even Pages"<br/>
    <br/>
    <b>3. Link to Previous:</b><br/>
    • Controls whether header/footer continues from previous section<br/>
    • Turn off to create unique headers/footers for different sections<br/>
    • Access: Header & Footer Tools Design → "Link to Previous" button<br/>
    • Blue highlight indicates active linking<br/>
    <br/>
    <b>4. Show Document Text:</b><br/>
    • Toggles display of main document text while editing headers/footers<br/>
    • Grayed out text helps with positioning<br/>
    • Access: Header & Footer Tools Design → "Show Document Text" checkbox<br/>
    <br/>
    <b>5. Header/Footer Positioning:</b><br/>
    • Set distance from edge of page<br/>
    • Default: Header 0.5" from top, Footer 0.5" from bottom<br/>
    • Adjust in Header & Footer Tools Design → Position group<br/>
    • Must be less than margin settings
</div>

<b>c. Page Numbering Systems</b><br/>

<b>Inserting Page Numbers:</b>
<table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
    <tr style="background-color: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ddd;">Location</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Common Formats</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Best For</th>
        <th style="padding: 10px; border: 1px solid #ddd;">Access</th>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Top of Page</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Plain Number 1, 2, 3<br>Accent Bar, Brackets, etc.</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Reports, formal documents</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert → Page Number → Top of Page</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Bottom of Page</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Plain Number, Page X of Y<br>Accent Bar, Bold Numbers</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Most documents, books</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert → Page Number → Bottom of Page</td>
    </tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #ddd;">Page Margins</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Side numbers, corner numbers</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Creative layouts, magazines</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert → Page Number → Page Margins</td>
    </tr>
    <tr style="background-color: #f9f9f9;">
        <td style="padding: 10px; border: 1px solid #ddd;">Current Position</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Plain Number, various formats</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Custom placement</td>
        <td style="padding: 10px; border: 1px solid #ddd;">Insert → Page Number → Current Position</td>
    </tr>
</table>

<b>Formatting Page Numbers:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Page Number Format Dialog:</b><br/>
    • Access: Insert → Page Number → Format Page Numbers<br/>
    • OR: Header & Footer Tools Design → Page Number → Format Page Numbers<br/>
    <br/>
    <b>Format Options:</b><br/>
    1. <b>Number Format:</b> 1, 2, 3 / i, ii, iii / a, b, c / etc.<br/>
    2. <b>Include Chapter Number:</b> 1-1, 1-2, 2-1, etc.<br/>
    &nbsp;&nbsp;• Requires heading styles for chapters<br/>
    &nbsp;&nbsp;• Choose separator (hyphen, period, colon, etc.)<br/>
    3. <b>Page Numbering:</b><br/>
    &nbsp;&nbsp;• <b>Continue from previous section:</b> Sequential numbering<br/>
    &nbsp;&nbsp;• <b>Start at:</b> Set specific starting number<br/>
    &nbsp;&nbsp;• Useful for front matter (Roman numerals) then switch to Arabic<br/>
    <br/>
    <b>Advanced Page Numbering Scenarios:</b><br/>
    • <b>Front Matter:</b> Preface, TOC use Roman numerals (i, ii, iii)<br/>
    • <b>Main Content:</b> Start at page 1 with Arabic numerals<br/>
    • <b>Chapters:</b> Each chapter starts at page 1<br/>
    • <b>Appendixes:</b> A-1, B-1, etc.<br/>
    • <b>No Number on First Page:</b> Use "Different First Page" option<br/>
    <br/>
    <b>Page X of Y Format:</b><br/>
    • Insert → Page Number → Bottom of Page → Page X of Y<br/>
    • Automatically calculates total pages<br/>
    • Updates automatically as document changes<br/>
    • Can customize text: "Page [number] of [total]"
</div>

<b>d. Section Breaks: Dividing Your Document</b><br/>

<b>What are Section Breaks?</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Definition:</b> Divides document into sections that can have different formatting<br/>
    <b>Why Use Sections?</b><br/>
    • Different headers/footers in different parts<br/>
    • Different page numbering systems<br/>
    • Different page orientation (some pages landscape)<br/>
    • Different margins in different sections<br/>
    • Different columns in different sections<br/>
    <br/>
    <b>Types of Section Breaks:</b><br/>
    1. <b>Next Page:</b> Starts new section on next page<br/>
    &nbsp;&nbsp;• Common for chapters, major divisions<br/>
    2. <b>Continuous:</b> Starts new section on same page<br/>
    &nbsp;&nbsp;• Useful for changing columns or margins mid-page<br/>
    3. <b>Even Page:</b> Starts new section on next even-numbered page<br/>
    &nbsp;&nbsp;• For books, forces chapter to start on left page<br/>
    4. <b>Odd Page:</b> Starts new section on next odd-numbered page<br/>
    &nbsp;&nbsp;• For books, forces chapter to start on right page<br/>
    <br/>
    <b>Inserting Section Breaks:</b><br/>
    • Layout tab → Breaks → choose section break type<br/>
    • Place cursor where you want the break<br/>
    <br/>
    <b>Viewing Section Breaks:</b><br/>
    • Home tab → Paragraph group → Show/Hide (¶)<br/>
    • Section breaks appear as double dotted lines with "Section Break"<br/>
    • Can also see section number in status bar (customize status bar)<br/>
    <br/>
    <b>Deleting Section Breaks:</b><br/>
    • Place cursor just before section break<br/>
    • Press Delete key<br/>
    • OR: Select section break and press Delete<br/>
    • Warning: Deleting may change formatting of following section
</div>

<h3>Practical Lab Session (45 Minutes)</h3>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Exercise 1: Page Setup and Margins</b><br/>
    1. Create new document<br/>
    2. Layout tab → Margins → Custom Margins<br/>
    3. Set: Top=1", Bottom=1", Left=1.5", Right=1", Gutter=0.5" left<br/>
    4. Orientation: Portrait<br/>
    5. Apply to: Whole document<br/>
    6. Add sample text to see effect<br/>
    7. Try different margin presets: Narrow, Moderate, Wide<br/>
    8. Notice how text reflows with different margins<br/>
    <br/>
    <b>Exercise 2: Headers and Footers</b><br/>
    1. Double-click top of page to open header<br/>
    2. Type: "Professional Report" (left-aligned)<br/>
    3. Insert → Date & Time → Choose format → check "Update automatically"<br/>
    4. Tab to center, insert page number (Current Position → Plain Number)<br/>
    5. Tab to right, type your name<br/>
    6. Double-click bottom of page for footer<br/>
    7. Insert → Quick Parts → Document Property → Company<br/>
    8. Add "Confidential" in footer<br/>
    9. Close Header and Footer<br/>
    <br/>
    <b>Exercise 3: Section Breaks and Different Headers</b><br/>
    1. Type "Chapter 1" (Heading 1 style)<br/>
    2. Add some text<br/>
    3. Layout tab → Breaks → Next Page (section break)<br/>
    4. Type "Chapter 2" (Heading 1 style)<br/>
    5. Open header (double-click top of page)<br/>
    6. Notice "Same as Previous" on header<br/>
    7. Header & Footer Tools Design → uncheck "Link to Previous"<br/>
    8. Change header to "Chapter 2: [Title]"<br/>
    9. Go to Section 1 header, notice it's different from Section 2<br/>
    <br/>
    <b>Exercise 4: Advanced Page Numbering</b><br/>
    1. Create document with:<br/>
    &nbsp;&nbsp;• Title page (no page number)<br/>
    &nbsp;&nbsp;• Table of Contents (Roman numerals)<br/>
    &nbsp;&nbsp;• Main content (Arabic numerals starting at 1)<br/>
    2. Use section breaks between each part<br/>
    3. Set Different First Page for title page<br/>
    4. Format page numbers for TOC as i, ii, iii<br/>
    5. Start main content at page 1<br/>
    6. Insert "Page X of Y" in footer of main content
</div>

<h3>Columns, Watermarks, and Page Backgrounds</h3>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Columns (Newspaper-style Layout):</b><br/>
    • <b>Access:</b> Layout tab → Columns<br/>
    • <b>Presets:</b> One, Two, Three, Left, Right<br/>
    • <b>More Columns:</b> Custom number, width, spacing<br/>
    • <b>Apply to:</b> Whole document, This point forward, This section<br/>
    • <b>Column Breaks:</b> Layout tab → Breaks → Column (forces text to next column)<br/>
    • <b>Use Cases:</b> Newsletters, magazines, brochures<br/>
    <br/>
    <b>2. Watermarks (Background Text/Images):</b><br/>
    • <b>Access:</b> Design tab → Watermark<br/>
    • <b>Presets:</b> CONFIDENTIAL, DO NOT COPY, DRAFT, URGENT<br/>
    • <b>Custom Watermark:</b><br/>
    &nbsp;&nbsp;• Text watermark: Choose text, font, size, color, layout<br/>
    &nbsp;&nbsp;• Picture watermark: Browse for image, scale, washout<br/>
    • <b>Positioning:</b> Appears behind text on every page<br/>
    • <b>Removing:</b> Design tab → Watermark → Remove Watermark<br/>
    <br/>
    <b>3. Page Color (Background Color):</b><br/>
    • <b>Access:</b> Design tab → Page Color<br/>
    • <b>Colors:</b> Theme colors, standard colors, more colors<br/>
    • <b>Fill Effects:</b> Gradient, texture, pattern, picture<br/>
    • <b>Printing:</b> May not print by default (check printer settings)<br/>
    • <b>Use Cases:</b> Certificates, invitations, creative documents<br/>
    <br/>
    <b>4. Page Borders:</b><br/>
    • <b>Access:</b> Design tab → Page Borders<br/>
    • <b>Settings:</b> Box, Shadow, 3D, Custom<br/>
    • <b>Style:</b> Line style, color, width<br/>
    • <b>Art:</b> Decorative borders (hearts, stars, etc.)<br/>
    • <b>Apply to:</b> Whole document, This section, This page<br/>
    • <b>Margins:</b> Set distance from text or edge of page<br/>
    <br/>
    <b>5. Line Numbers (Legal/Academic Documents):</b><br/>
    • <b>Access:</b> Layout tab → Line Numbers<br/>
    • <b>Options:</b> None, Continuous, Restart Each Page, Restart Each Section<br/>
    • <b>Suppress:</b> For current paragraph (paragraph settings)<br/>
    • <b>Use Cases:</b> Legal documents, scripts, academic papers
</div>

<h3>Assignment Tasks</h3>

<div class="assignment-box">
    <h4>Main Task: Create a Professional Multi-section Report</h4>
    
    <b>Requirements:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Create a 5+ page professional report with multiple sections<br/>
        2. Implement different headers/footers for different sections<br/>
        3. Use advanced page numbering<br/>
        4. Apply professional page layout and design<br/>
        5. Include all page layout elements learned<br/>
    </div>
    
    <b>Part 1: Report Structure with Sections</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a report with these sections:</b><br/>
        <br/>
        <b>Section 1: Title Page</b><br/>
        • No header or footer<br/>
        • No page number<br/>
        • Centered vertically (Layout → Page Setup → Layout → Vertical alignment: Center)<br/>
        • Content: Report title, author, date, company<br/>
        • Section break: Next Page<br/>
        <br/>
        <b>Section 2: Table of Contents</b><br/>
        • Header: "Table of Contents" (Different First Page)<br/>
        • Footer: Roman numerals (i, ii, iii)<br/>
        • Page numbering: Start at i<br/>
        • Content: Use placeholder text "TOC will be generated automatically"<br/>
        • Section break: Next Page<br/>
        <br/>
        <b>Section 3: Executive Summary</b><br/>
        • Header: "Executive Summary"<br/>
        • Footer: Arabic numerals, start at 1<br/>
        • Different Odd & Even Pages: On<br/>
        • Odd pages: Header right-aligned<br/>
        • Even pages: Header left-aligned<br/>
        • Content: 1-page summary<br/>
        • Section break: Next Page<br/>
        <br/>
        <b>Section 4: Main Report (3+ pages)</b><br/>
        • Header: Chapter title (use StyleRef field)<br/>
        • Footer: Page X of Y format<br/>
        • Different First Page: Off<br/>
        • Include at least one landscape page for wide table<br/>
        • Use columns for one section<br/>
        • Section break: Next Page<br/>
        <br/>
        <b>Section 5: Appendices</b><br/>
        • Header: "Appendix A: [Title]"<br/>
        • Footer: A-1, A-2, B-1 format<br/>
        • Page numbering: Include chapter number<br/>
        • Section break: Next Page
    </div>
    
    <b>Part 2: Advanced Header/Footer Techniques</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Implement these advanced header/footer features:</b><br/>
        <br/>
        <b>1. StyleRef Fields (Automatic Chapter Titles):</b><br/>
        • In header of main report section:<br/>
        • Insert → Quick Parts → Field<br/>
        • Choose: StyleRef, select Heading 1 style<br/>
        • Result: Header automatically shows current chapter title<br/>
        • Update when chapter changes<br/>
        <br/>
        <b>2. Document Property Fields:</b><br/>
        • In footer: Insert → Quick Parts → Document Property<br/>
        • Add: Author, Company, Last Saved Date<br/>
        • These update automatically when document properties change<br/>
        <br/>
        <b>3. Custom Header with Logo:</b><br/>
        • Insert company logo in header<br/>
        • Use text wrapping: Behind Text<br/>
        • Position logo left, text right<br/>
        • Add horizontal line below header<br/>
        • Use border bottom on header paragraph<br/>
        <br/>
        <b>4. Different First Page Header:</b><br/>
        • For Table of Contents section<br/>
        • First page: "Table of Contents" centered<br/>
        • Subsequent pages: Section title left, page number right<br/>
        • Use "Different First Page" option<br/>
        <br/>
        <b>5. Odd/Even Page Headers:</b><br/>
        • For main report section<br/>
        • Odd pages (right): Chapter title right-aligned<br/>
        • Even pages (left): Chapter title left-aligned<br/>
        • Page numbers always on outer edge<br/>
        • Use "Different Odd & Even Pages" option
    </div>
    
    <b>Part 3: Page Layout and Design Elements</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Apply these page layout elements throughout report:</b><br/>
        <br/>
        <b>1. Margins and Orientation:</b><br/>
        • Title page: 2" top margin, 1" others<br/>
        • TOC: Mirror margins (for binding)<br/>
        • Main report: Normal margins (1")<br/>
        • One page in landscape for wide table<br/>
        • Use section breaks to change orientation<br/>
        <br/>
        <b>2. Columns:</b><br/>
        • Create two-column section for survey results<br/>
        • Use "This point forward" for column application<br/>
        • Add column break to force content to next column<br/>
        • Balance columns on last page<br/>
        <br/>
        <b>3. Watermarks:</b><br/>
        • Add "DRAFT" watermark to entire document<br/>
        • Custom text: "CONFIDENTIAL" in red, diagonal<br/>
        • Semi-transparent (washout effect)<br/>
        • Position behind all content<br/>
        <br/>
        <b>4. Page Borders and Backgrounds:</b><br/>
        • Add simple page border to title page<br/>
        • Use 3pt line, company color<br/>
        • Apply light gray page color to appendix section<br/>
        • Use gradient fill for visual interest<br/>
        <br/>
        <b>5. Line Numbering:</b><br/>
        • Add line numbers to legal/compliance section<br/>
        • Restart each page<br/>
        • Suppress line numbers for headings<br/>
        • Use continuous numbering for code listings
    </div>
    
    <b>Part 4: Professional Document Creation - CV/Resume</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Create a professional 1-page CV/Resume using page layout skills:</b><br/>
        <br/>
        <b>Layout Requirements:</b><br/>
        1. <b>Page Setup:</b><br/>
        &nbsp;&nbsp;• Margins: Narrow (0.5" all around)<br/>
        &nbsp;&nbsp;• Paper Size: Letter (8.5×11")<br/>
        &nbsp;&nbsp;• Orientation: Portrait<br/>
        2. <b>Structure (Use hidden table for layout):</b><br/>
        &nbsp;&nbsp;• Header with name and contact info<br/>
        &nbsp;&nbsp;• 2-column layout for content<br/>
        &nbsp;&nbsp;• Left column: Skills, Education, Certifications<br/>
        &nbsp;&nbsp;• Right column: Experience, Projects<br/>
        &nbsp;&nbsp;• Footer with references statement<br/>
        3. <b>Design Elements:</b><br/>
        &nbsp;&nbsp;• Professional font (Calibri, Arial, Times New Roman)<br/>
        &nbsp;&nbsp;• Consistent heading styles<br/>
        &nbsp;&nbsp;• Subtle color accent (blue for headings)<br/>
        &nbsp;&nbsp;• Adequate white space<br/>
        &nbsp;&nbsp;• No borders on layout table<br/>
        4. <b>Content to Include:</b><br/>
        &nbsp;&nbsp;• Your name and contact information<br/>
        &nbsp;&nbsp;• Professional summary/objective<br/>
        &nbsp;&nbsp;• Work experience (2-3 positions)<br/>
        &nbsp;&nbsp;• Education<br/>
        &nbsp;&nbsp;• Skills (technical and soft skills)<br/>
        &nbsp;&nbsp;• Certifications or awards<br/>
        &nbsp;&nbsp;• Optional: Projects portfolio
    </div>
    
    <b>Challenge Tasks:</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Challenge 1: Book Formatting</b><br/>
        • Format a 10-page document as a book chapter<br/>
        • Use mirror margins with gutter<br/>
        • Different odd/even headers and footers<br/>
        • Chapter starts on odd (right) page<br/>
        • Running headers with chapter title and book title<br/>
        • Footnotes instead of endnotes<br/>
        • Create front matter with Roman numerals<br/>
        <br/>
        <b>Challenge 2: Academic Thesis Formatting</b><br/>
        • Implement university thesis requirements:<br/>
        &nbsp;&nbsp;- Title page with specific formatting<br/>
        &nbsp;&nbsp;- Abstract page<br/>
        &nbsp;&nbsp;- Table of Contents, List of Figures, List of Tables<br/>
        &nbsp;&nbsp;- Chapters with consistent numbering<br/>
        &nbsp;&nbsp;- Bibliography/References section<br/>
        &nbsp;&nbsp;- Appendices with letter numbering<br/>
        • Use section breaks for each part<br/>
        • Different headers for each chapter<br/>
        • Automatic table of contents generation<br/>
        <br/>
        <b>Challenge 3: Newsletter with Complex Layout</b><br/>
        • Create a 4-page newsletter with:<br/>
        &nbsp;&nbsp;- Multiple columns (2-3 per page)<br/>
        &nbsp;&nbsp;- Pull quotes in sidebars<br/>
        &nbsp;&nbsp;- Images with text wrapping<br/>
        &nbsp;&nbsp;- Different sections with varying layouts<br/>
        &nbsp;&nbsp;- Consistent headers/footers across pages<br/>
        &nbsp;&nbsp;- Page numbers in creative locations<br/>
        • Balance columns on each page<br/>
        • Use section breaks for layout changes<br/>
        • Export as PDF with printer marks
    </div>
    
    <b>Submission Requirements:</b>
    <ul>
        <li>5+ page professional report with all sections</li>
        <li>1-page professional CV/Resume</li>
        <li>Screenshots showing different headers/footers</li>
        <li>Document showing section breaks (with formatting marks visible)</li>
        <li>Brief explanation of your page layout choices</li>
        <li>PDF export of both documents</li>
        <li>Challenge tasks (if completed)</li>
    </ul>
</div>

<h3>Professional Document Standards</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>1. Business Reports:</b><br/>
    • Margins: 1" all around or 1.25" left/right<br/>
    • Header: Report title (left), date (right)<br/>
    • Footer: Page number (center), company name (right)<br/>
    • Font: 11-12pt serif (Times) or sans-serif (Arial)<br/>
    • Line spacing: 1.5 or double for drafts, single for final<br/>
    • First page: Often no header/footer or different<br/>
    <br/>
    <b>2. Academic Papers:</b><br/>
    • Margins: 1" all around (APA, MLA)<br/>
    • Header: Running head (abbreviated title) left, page number right<br/>
    • Font: 12pt Times New Roman (common)<br/>
    • Line spacing: Double<br/>
    • First page: Specific title page format<br/>
    • Sections: Abstract, body, references<br/>
    <br/>
    <b>3. Legal Documents:</b><br/>
    • Margins: 1.5" left (for binding), 1" others<br/>
    • Line numbers: Often required<br/>
    • Header: Case name, document type<br/>
    • Footer: Page number, filing date<br/>
    • Font: 12pt Times New Roman or Courier<br/>
    • Double-spaced typically<br/>
    <br/>
    <b>4. Books/Manuscripts:</b><br/>
    • Margins: Mirror margins with 0.5-1" gutter<br/>
    • Headers: Book title (left), chapter title (right) - alternates<br/>
    • First page of chapter: No header<br/>
    • Font: 11pt serif (Garamond, Times)<br/>
    • Line spacing: 1.15-1.5<br/>
    • Paragraph: First line indent, no space between<br/>
    <br/>
    <b>5. Resumes/CVs:</b><br/>
    • Margins: 0.5-0.75" (maximize space)<br/>
    • Length: 1 page (early career), 2+ pages (experienced)<br/>
    • Font: 10-12pt professional (Calibri, Arial, Georgia)<br/>
    • No headers/footers typically<br/>
    • White space: Critical for readability<br/>
    • Consistency: Same formatting for similar elements
</div>

<h3>Common Page Layout Problems and Solutions</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Problem 1: "Page numbers won't start at 1"</b><br/>
    <b>Solution:</b><br/>
    1. Insert → Page Number → Format Page Numbers<br/>
    2. Set "Start at" to 1<br/>
    3. Check if section break is causing restart<br/>
    4. Uncheck "Link to Previous" if needed<br/>
    5. Ensure "Continue from previous section" is not selected<br/>
    <br/>
    <b>Problem 2: "Can't get rid of header/footer on first page"</b><br/>
    <b>Solution:</b><br/>
    1. Double-click header/footer area<br/>
    2. Header & Footer Tools Design → check "Different First Page"<br/>
    3. Delete content from first page header/footer<br/>
    4. Ensure this is set for correct section<br/>
    5. Close Header and Footer<br/>
    <br/>
    <b>Problem 3: "Section break causing unwanted page break"</b><br/>
    <b>Solution:</b><br/>
    1. Use "Continuous" section break instead of "Next Page"<br/>
    2. Check if needed formatting requires page break<br/>
    3. Adjust content to fit before section break<br/>
    4. Consider using columns instead of sections for layout changes<br/>
    <br/>
    <b>Problem 4: "Headers/footers different on odd/even pages"</b><br/>
    <b>Solution:</b><br/>
    1. This may be intentional (Different Odd & Even Pages)<br/>
    2. Header & Footer Tools Design → uncheck "Different Odd & Even Pages"<br/>
    3. Edit both odd and even page headers/footers to match<br/>
    4. Check section by section<br/>
    <br/>
    <b>Problem 5: "Watermark not printing"</b><br/>
    <b>Solution:</b><br/>
    1. File → Options → Display<br/>
    2. Check "Print drawings created in Word"<br/>
    3. Check "Print background colors and images"<br/>
    4. Printer settings may override Word settings<br/>
    5. Try printing to PDF first, then print PDF
</div>

<hr/>

<div class="knowledge-check">
    <h4>Knowledge Check Quiz</h4>
    
    <b>Question 1:</b> Which margin setting is best for bound documents?<br/>
    a) Normal<br/>
    b) Narrow<br/>
    c) Mirrored<br/>
    d) Wide<br/>
    <br/>
    <b>Question 2:</b> How do you create a different header for the first page?<br/>
    a) Delete header on first page<br/>
    b) Use "Different First Page" option<br/>
    c) Create separate document for first page<br/>
    d) Insert section break<br/>
    <br/>
    <b>Question 3:</b> What type of section break starts on the same page?<br/>
    a) Next Page<br/>
    b) Continuous<br/>
    c) Even Page<br/>
    d) Odd Page<br/>
    <br/>
    <b>Question 4:</b> Where is the Page Setup dialog box accessed from?<br/>
    a) Home tab<br/>
    b) Insert tab<br/>
    c) Layout tab<br/>
    d) Design tab<br/>
    <br/>
    <b>Question 5:</b> How do you insert Roman numeral page numbers?<br/>
    a) Type them manually<br/>
    b) Page Number → Format Page Numbers → Number format<br/>
    c) Use special characters<br/>
    d) Insert → Symbol
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Day 4 Learning Objectives Achieved:</h3>
    <ul>
        <li>✅ Set up professional page layouts with proper margins</li>
        <li>✅ Create and customize headers and footers</li>
        <li>✅ Implement advanced page numbering systems</li>
        <li>✅ Use section breaks for multi-format documents</li>
        <li>✅ Apply columns, watermarks, and page backgrounds</li>
        <li>✅ Create professional documents like resumes and reports</li>
    </ul>
    
    <p><b>Week 3 Complete! Module 2 Part 1 Summary:</b><br/>
    This week you've learned to transform from a basic Word user to a document architect. You can now:<br/>
    1. Navigate and customize the Word interface efficiently<br/>
    2. Use styles for consistent, professional formatting<br/>
    3. Create tables and integrate images effectively<br/>
    4. Design professional page layouts with headers/footers<br/>
    5. Produce business-ready documents</p>
    
    <p><b>Homework Preparation for Week 4:</b><br/>
    1. Review all Week 3 topics<br/>
    2. Practice creating multi-page documents<br/>
    3. Experiment with different document templates<br/>
    4. Research what "mail merge" is and its uses<br/>
    5. Think about how you might automate document creation</p>
    
    <p><b>Interesting Fact:</b> The concept of headers and footers dates back to medieval manuscripts where scribes would add marginal notes, page numbers, and decorative elements in the top and bottom margins. Modern word processors automated this in the 1980s, with WordPerfect 4.2 (1986) being one of the first to offer easy header/footer creation!</p>
    
    <p><b>Remember:</b> "Professional documents are judged by their presentation before their content is even read. Mastering page layout is like learning to frame a masterpiece - it showcases your work in the best possible light!"</p>
    
    <p style="text-align: center; font-size: 1.2em; font-weight: bold; color: #2c3e50;">
        🎉 Week 3: Word Mastery Part 1 - COMPLETE! 🎉<br/>
        Next: Week 4 - Advanced Word Features & Automation!
    </p>
</div>`
            },

            "4-1": {
                "icon": "far fa-envelope",
                "title": "Mail Merge & References",
                "html": `<h1>Week 4, Day 1: Mail Merge & References</h1>
    <p>Today you'll learn how to automate document creation for mass mailings and how to add professional references like Table of Contents.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Digital Post Office 📬</b><br/>
        Mail Merge: Like printing address labels for hundreds of envelopes<br/>
        Data Source: Your address book (Excel or Contacts)<br/>
        Main Document: The envelope template<br/>
        Merge Fields: Placeholders like &lt;&lt;FirstName&gt;&gt; that get replaced<br/>
        Table of Contents (TOC): Like a book's index – automatically generated<br/>
        Styles: The secret ingredient that makes TOC work automatically<br/>
        Hyperlinks: Clickable links in your TOC that jump to sections<br/>
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Understanding Mail Merge concepts</li>
        <li>Preparing your data source (Excel/Word Table)</li>
        <li>Inserting merge fields into a document</li>
        <li>Previewing and completing the merge</li>
        <li>Creating an automatic Table of Contents</li>
        <li>Updating and customizing TOC</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Mail Merge: The Step-by-Step Process</b><br/>
    
    <b>Step 1: Prepare Your Main Document</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Open Word and create your letter template<br/>
        2. Type all the content that will be <b>the same</b> in every letter<br/>
        3. Leave blanks where personalized info will go<br/>
        4. Go to <b>Mailings</b> tab → <b>Start Mail Merge</b> → <b>Letters</b><br/>
        5. Save this as "Letter_Template.docx"
    </div>
    
    <b>Step 2: Create Your Data Source</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Option A: Create in Excel (Recommended for large lists)<br/>
            Column A: FirstName<br/>
            Column B: LastName<br/>
            Column C: Address<br/>
            Column D: City<br/>
            Column E: CourseName<br/>
            Column F: AdmissionDate<br/>
            <br/>
            // Option B: Create in Word<br/>
            1. Mailings tab → Select Recipients → Type New List<br/>
            2. Create fields like: Title, FirstName, LastName, etc.<br/>
            3. Enter data for each recipient<br/>
            4. Save as "Recipients.mdb" (Access database)<br/>
            <br/>
            <b>Important:</b> No blank rows! Each row = one recipient.
        </pre>
    </div>
    
    <b>Step 3: Insert Merge Fields</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Click where you want personalized info (after "Dear ")<br/>
        2. <b>Mailings tab</b> → <b>Insert Merge Field</b><br/>
        3. Choose <b>FirstName</b><br/>
        4. Type a space, then insert <b>LastName</b><br/>
        5. Your document now shows: Dear &lt;&lt;FirstName&gt;&gt; &lt;&lt;LastName&gt;&gt;<br/>
        6. Continue inserting fields throughout document<br/>
        <br/>
        <b>Common Fields:</b><br/>
        • Address Block: Inserts full formatted address<br/>
        • Greeting Line: "Dear Mr. Smith" or "Dear Jane"<br/>
        • Individual Fields: &lt;&lt;Course&gt;&gt;, &lt;&lt;Date&gt;&gt;, etc.
    </div>
    
    <b>Step 4: Preview and Complete</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Preview Your Letters<br/>
            1. Mailings tab → Preview Results<br/>
            2. Use arrows to browse through each recipient's letter<br/>
            3. Check for errors: missing fields, formatting issues<br/>
            <br/>
            // Complete the Merge<br/>
            1. Mailings tab → Finish & Merge<br/>
            2. Three options:<br/>
               • <b>Edit Individual Documents:</b> Creates one big Word file with all letters<br/>
               • <b>Print Documents:</b> Sends directly to printer<br/>
               • <b>Send Email Messages:</b> If you have email addresses<br/>
            <br/>
            // Save Your Work<br/>
            • Save the template for future use<br/>
            • Save the merged documents as "Admission_Letters_Merged.docx"
        </pre>
    </div>
    
    <b>Practical Example: Admission Letter</b>
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            <b>University Logo Here</b><br/><br/>
            
            &lt;&lt;AddressBlock&gt;&gt;<br/><br/>
            
            <b>Date:</b> &lt;&lt;CurrentDate&gt;&gt;<br/><br/>
            
            <b>Admission Letter</b><br/><br/>
            
            Dear &lt;&lt;FirstName&gt;&gt; &lt;&lt;LastName&gt;&gt;,<br/><br/>
            
            We are pleased to inform you that you have been accepted into the<br/>
            &lt;&lt;CourseName&gt;&gt; program at University Name.<br/>
            Your admission date is &lt;&lt;AdmissionDate&gt;&gt;.<br/><br/>
            
            Please complete the enrollment process by &lt;&lt;DeadlineDate&gt;&gt;.<br/><br/>
            
            Sincerely,<br/>
            Admissions Office<br/>
            University Name
        </pre>
    </div>
    
    <hr/>
    
    <b>b. Table of Contents (TOC) - Automatic Generation</b><br/>
    
    <b>Why Use Styles for TOC?</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Without Styles:</b><br/>
        • Manually type page numbers<br/>
        • Update every time you edit document<br/>
        • Time-consuming and error-prone<br/><br/>
        
        <b>With Styles:</b><br/>
        • Word automatically tracks headings<br/>
        • Page numbers update automatically<br/>
        • Clickable links to jump to sections<br/>
        • Professional and consistent look
    </div>
    
    <b>Step 1: Apply Heading Styles</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // For each section title:<br/>
            1. Select the text (e.g., "Introduction")<br/>
            2. Go to <b>Home tab</b> → <b>Styles gallery</b><br/>
            3. Click <b>Heading 1</b> for main sections<br/>
            4. For subsections, use <b>Heading 2</b><br/>
            5. For sub-subsections, use <b>Heading 3</b><br/>
            <br/>
            // Example structure:<br/>
            • <b>Heading 1:</b> INTRODUCTION<br/>
            • <b>Heading 1:</b> CHAPTER 1<br/>
            &nbsp;&nbsp;• <b>Heading 2:</b> 1.1 Background<br/>
            &nbsp;&nbsp;• <b>Heading 2:</b> 1.2 Methodology<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;• <b>Heading 3:</b> 1.2.1 Data Collection<br/>
            • <b>Heading 1:</b> CHAPTER 2<br/>
            <br/>
            <b>Tip:</b> Modify the styles if you don't like the default look!
        </pre>
    </div>
    
    <b>Step 2: Insert Automatic TOC</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        1. Click where you want TOC (usually after title page)<br/>
        2. Go to <b>References tab</b> → <b>Table of Contents</b><br/>
        3. Choose a style (Automatic Table 1 or 2)<br/>
        4. Word automatically creates TOC with:<br/>
           • All Heading 1, 2, 3 styles<br/>
           • Page numbers aligned to right<br/>
           • Dotted leaders (......)<br/>
           • Clickable hyperlinks (Ctrl+Click to jump)<br/>
        <br/>
        <b>Custom Options:</b><br/>
        • Click <b>Custom Table of Contents</b><br/>
        • Choose which heading levels to show (usually 1-3)<br/>
        • Change tab leader style (dots, dashes, or none)<br/>
        • Show/Hide page numbers
    </div>
    
    <b>Step 3: Update TOC</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // When you edit your document:<br/>
            1. Add new sections with Heading styles<br/>
            2. Change page breaks or content<br/>
            3. <b>Right-click</b> anywhere in TOC<br/>
            4. Choose <b>Update Field</b><br/>
            5. Two options:<br/>
               • <b>Update page numbers only:</b> If only page numbers changed<br/>
               • <b>Update entire table:</b> If you added/removed headings<br/>
            <br/>
            // Keyboard shortcut:<br/>
            • Select TOC<br/>
            • Press <b>F9</b> → Choose update option<br/>
            <br/>
            <b>Important:</b> Never manually edit the TOC text!<br/>
            Always update through the field option.
        </pre>
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Mail Merge Practice</b><br/>
        1. Create an Excel file with 5 students:<br/>
           • Columns: FirstName, LastName, Course, StartDate, Email<br/>
           • Add realistic data (make up names, courses)<br/>
        <br/>
        2. In Word, create a "Welcome Letter" template:<br/>
           • Include university header<br/>
           • Insert all merge fields appropriately<br/>
           • Add a placeholder for student photo (optional)<br/>
        <br/>
        3. Complete the merge:<br/>
           • Preview each letter<br/>
           • Merge to new document<br/>
           • Save as "Welcome_Letters_Merged.docx"<br/>
        <br/>
        <b>Part B: TOC Practice</b><br/>
        1. Open a new document<br/>
        2. Type these headings and apply styles:<br/>
           • "INTRODUCTION" (Heading 1)<br/>
           • "Research Background" (Heading 2 under Introduction)<br/>
           • "CHAPTER 1: LITERATURE REVIEW" (Heading 1)<br/>
           • "Previous Studies" (Heading 2)<br/>
           • "Research Gap" (Heading 2)<br/>
        <br/>
        3. Add dummy content (use =rand(5,10) for text)<br/>
        4. Insert automatic TOC after title<br/>
        5. Update TOC after adding one more section
    </div>
    
    <hr/>
    
    <h3>Troubleshooting Common Issues</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Mail Merge Problems:</b><br/>
        1. <b>Fields show codes instead of data:</b><br/>
           • Press Alt+F9 to toggle field codes<br/>
           • Or update fields (F9)<br/>
        <br/>
        2. <b>Data not appearing correctly:</b><br/>
           • Check Excel file formatting<br/>
           • Ensure no blank rows in data<br/>
           • Re-select recipients in Mailings tab<br/>
        <br/>
        3. <b>Formatting lost during merge:</b><br/>
           • Use paragraph styles instead of manual formatting<br/>
           • Check "Match destination formatting" in merge options<br/>
        <br/>
        <b>TOC Problems:</b><br/>
        1. <b>TOC not updating:</b><br/>
           • Right-click → Update Field<br/>
           • If locked, press Ctrl+A then F9<br/>
        <br/>
        2. <b>Wrong headings included:</b><br/>
           • Modify TOC settings<br/>
           • Change which heading levels to show<br/>
        <br/>
        3. <b>Page numbers wrong:</b><br/>
           • Check section breaks<br/>
           • Ensure "Continue from previous" in page numbering
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 1 Assignment: Automated Admission System</h4>
        
        <b>Task 1: Mail Merge (60%)</b><br/>
        Create a complete admission letter system:<br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. <b>Data Source:</b> Create Excel file "Admission_List.xlsx" with:<br/>
            • 10 student records<br/>
            • Columns: StudentID, FullName, Course, Semester, TuitionFee, DueDate<br/>
            • Use realistic courses (Computer Science, Business, Engineering)<br/>
            <br/>
            2. <b>Letter Template:</b> Create "Admission_Template.docx" with:<br/>
            • Professional university letterhead (use shapes and images)<br/>
            • All merge fields integrated naturally<br/>
            • Conditional text: If TuitionFee > 5000, add "Payment plan available"<br/>
            • Current date field that updates automatically<br/>
            <br/>
            3. <b>Output:</b> Generate 10 individual letters as separate Word files<br/>
            • Name files: Admission_[StudentID]_[LastName].docx<br/>
            • Print preview PDF of one letter<br/>
        </div>
        
        <b>Task 2: Table of Contents (40%)</b><br/>
        Create a 4-page course handbook:<br/><br/>
        
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. <b>Title Page:</b> Course name, code, instructor<br/>
            2. <b>Page 2:</b> Automatic TOC<br/>
            3. <b>Page 3-5:</b> Content with:<br/>
            • At least 3 Heading 1 sections<br/>
            • Each with 2-3 Heading 2 subsections<br/>
            • One Heading 3 subsection<br/>
            • Dummy content (=lorem() paragraphs)<br/>
            4. <b>Features:</b><br/>
            • Custom TOC style (different leader, no page numbers for intro)<br/>
            • Update TOC after adding one more section<br/>
            • Add bookmark and hyperlink from TOC to specific section<br/>
        </div>
        
        <b>Submission Requirements:</b>
        <ul>
            <li>Excel data source file</li>
            <li>Word template file</li>
            <li>One sample merged letter</li>
            <li>Course handbook with TOC</li>
            <li>Screenshots of mail merge process</li>
        </ul>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Advanced Mail Merge:</b><br/>
            1. Merge to email with attachments<br/>
            2. Create mailing labels for envelopes<br/>
            3. Use IF field for conditional text (e.g., different text for different courses)<br/>
            4. Merge images (student photos) into letters<br/>
            <br/>
            <b>Advanced TOC:</b><br/>
            1. Create multiple TOCs for different parts of document<br/>
            2. Add "List of Figures" and "List of Tables"<br/>
            3. Create custom TOC without using built-in styles<br/>
            4. Export TOC to Excel for analysis
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Key Takeaways: Day 1</h3>
        
        <b>Mail Merge Mastery:</b>
        <ul>
            <li>Always prepare data source first (Excel is best)</li>
            <li>Use Address Block and Greeting Line for professionalism</li>
            <li>Preview before final merge</li>
            <li>Save template for reuse</li>
        </ul>
        
        <b>TOC Expertise:</b>
        <ul>
            <li>Heading styles are mandatory for automatic TOC</li>
            <li>Update TOC after any document changes</li>
            <li>Customize appearance through TOC options</li>
            <li>Never edit TOC text manually</li>
        </ul>
        
        <b>Pro Tips:</b>
        <ul>
            <li>Use Mail Merge for certificates, labels, emails, and forms</li>
            <li>TOC can also generate lists of figures, tables, and equations</li>
            <li>Combine Mail Merge with TOC for automated report generation</li>
            <li>Practice with real-world scenarios (club memberships, event invitations)</li>
        </ul>
        
        <p><b>Tomorrow:</b> Track Changes, Comments, and Collaboration features that make team document work efficient and professional.</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/office/use-mail-merge-for-bulk-email-letters-labels-and-envelopes-f488ed5b-b849-4c11-9cff-932c49474705" target="_blank">Microsoft Mail Merge Guide</a><br/>
        • <a href="https://support.microsoft.com/en-us/office/insert-a-table-of-contents-882e8564-0edb-435e-84b5-1d8552ccf0c0" target="_blank">Microsoft TOC Guide</a><br/>
        • <a href="https://www.youtube.com/watch?v=2AdJjF3kF8I" target="_blank">Mail Merge Tutorial Video</a></p>
    </div>`
            },
            "4-2": {
                "icon": "far fa-file-alt",
                "title": "References & Advanced Document Features",
                "html": `<h1>Week 4, Day 2: References & Advanced Document Features</h1>
<p>Today we dive deeper into professional document features: advanced references, citations, footnotes, and document automation tools that make long documents manageable.</p>

<div class="analogy-box">
    <b>Analogy: The Research Library 📚</b><br/>
    Footnotes: Like tiny sticky notes at the bottom of a page<br/>
    Endnotes: All your notes collected at the end of the book<br/>
    Citations: Giving credit to other authors (academic honesty)<br/>
    Bibliography: The "References" section listing all sources<br/>
    Captions: Labels under images/tables that auto-number<br/>
    Cross-references: "See Figure 3 on page 12" - updates automatically<br/>
    Bookmarks: Digital sticky notes you can jump to instantly<br/>
</div>

<h3>Key Topics</h3>
<ul>
    <li>Inserting and managing footnotes and endnotes</li>
    <li>Adding citations in different styles (APA, MLA, Chicago)</li>
    <li>Creating automatic bibliography</li>
    <li>Adding captions to figures and tables</li>
    <li>Using cross-references within documents</li>
    <li>Creating and using bookmarks</li>
    <li>Inserting equations and symbols</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Footnotes vs Endnotes: When to Use Each</b>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background-color: #4a6fa5; color: white;">
            <th style="padding: 10px; border: 1px solid #ddd;">Feature</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Footnotes</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Endnotes</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Location</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Bottom of each page</td>
            <td style="padding: 10px; border: 1px solid #ddd;">End of document/section</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Best for</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Explanations, translations, short comments</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Citations, references, lengthy explanations</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Numbering</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Restarts each page (usually)</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Continuous throughout</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Reader Convenience</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Easy to check while reading</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Need to flip to end</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Academic Use</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Chicago style often uses</td>
            <td style="padding: 10px; border: 1px solid #ddd;">APA/MLA sometimes use</td>
        </tr>
    </table>
</div>

<b>How to Insert Footnotes/Endnotes:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Insert a Footnote:<br/>
        1. Click where you want the reference marker¹<br/>
        2. <b>References tab</b> → <b>Insert Footnote</b> (or Ctrl+Alt+F)<br/>
        3. Word jumps to bottom of page<br/>
        4. Type your note text<br/>
        5. Click back in main text to continue writing<br/>
        <br/>
        // Insert an Endnote:<br/>
        1. <b>References tab</b> → <b>Insert Endnote</b> (or Ctrl+Alt+D)<br/>
        2. Word jumps to end of document/section<br/>
        3. Type your note<br/>
        <br/>
        // Navigation:<br/>
        • Double-click the number in text to jump to note<br/>
        • Double-click the note number to return to text<br/>
        • Use <b>Next Footnote</b> button to navigate all notes<br/>
        <br/>
        // Customization:<br/>
        • Click the small arrow in Footnotes group<br/>
        • Change number format (1,2,3 or i,ii,iii)<br/>
        • Choose custom symbol (*, †, ‡)<br/>
        • Convert between footnotes and endnotes
    </pre>
</div>

<hr/>

<b>b. Citations and Bibliography: Academic Integrity</b>

<b>Step 1: Choose Citation Style</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>References tab</b> → <b>Style dropdown</b> → Choose:<br/><br/>
    
    <b>APA 7th Edition</b> (Psychology, Social Sciences):<br/>
    • Author, A. A. (Year). Title. Publisher.<br/>
    • In-text: (Smith, 2020)<br/>
    <br/>
    <b>MLA 9th Edition</b> (Humanities, Literature):<br/>
    • Author Last, First. Title. Publisher, Year.<br/>
    • In-text: (Smith 45)<br/>
    <br/>
    <b>Chicago 17th Edition</b> (History, Business):<br/>
    • Author First Last, Title (Place: Publisher, Year).<br/>
    • Uses footnotes/endnotes heavily<br/>
    <br/>
    <b>IEEE</b> (Engineering, Computer Science):<br/>
    • [1] A. Smith, "Title," Journal, vol. 1, pp. 1-10, 2020.<br/>
    • In-text: [1]<br/>
    <br/>
    <b>Harvard</b> (UK/Australia universities):<br/>
    • Smith, A. (2020) Title. Place: Publisher.<br/>
    • In-text: (Smith 2020)
</div>

<b>Step 2: Add Sources</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Method 1: Add as you write<br/>
        1. Click where citation should appear<br/>
        2. <b>References tab</b> → <b>Insert Citation</b> → <b>Add New Source</b><br/>
        3. Fill in details:<br/>
            • Type of Source (Book, Journal, Website, etc.)<br/>
            • Author(s) - Last, First format<br/>
            • Title, Year, Publisher, City<br/>
            • URL, DOI for online sources<br/>
            • Page numbers for specific quotes<br/>
        4. Click OK - citation appears immediately<br/>
        <br/>
        // Method 2: Use Source Manager<br/>
        1. <b>References tab</b> → <b>Manage Sources</b><br/>
        2. Add multiple sources at once<br/>
        3. Import from online databases<br/>
        4. Organize into Current List/Master List<br/>
        5. Search and sort sources<br/>
        <br/>
        // Pro Tip:<br/>
        • Always check auto-filled data (often incorrect)<br/>
        • Use DOI lookup for journal articles<br/>
        • Create placeholder sources if details unknown
    </pre>
</div>

<b>Step 3: Insert Citations and Create Bibliography</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Inserting Citations:</b><br/>
    1. Click where citation goes: "Research shows (Smith, 2020) that..."<br/>
    2. <b>Insert Citation</b> → Choose from your source list<br/>
    3. Word adds citation in correct format<br/>
    <br/>
    <b>Editing Citations:</b><br/>
    1. Click on citation → small dropdown arrow<br/>
    2. Choose <b>Edit Citation</b> to add page numbers<br/>
    3. Choose <b>Edit Source</b> to correct details<br/>
    4. Choose <b>Convert to Static Text</b> to lock it<br/>
    <br/>
    <b>Creating Bibliography:</b><br/>
    1. Go to end of document (new page)<br/>
    2. Type "References" or "Bibliography"<br/>
    3. <b>References tab</b> → <b>Bibliography</b> dropdown<br/>
    4. Choose built-in style or <b>Insert Bibliography</b><br/>
    5. Word auto-generates formatted list<br/>
    <br/>
    <b>Updating:</b><br/>
    1. Add/remove sources<br/>
    2. Right-click bibliography → <b>Update Field</b><br/>
    3. All changes reflect automatically
</div>

<hr/>

<b>c. Captions, Cross-References, and Bookmarks</b>

<b>Automatic Captions:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Add caption to figure/table:<br/>
        1. Click on image or table<br/>
        2. <b>References tab</b> → <b>Insert Caption</b><br/>
        3. Choose label: Figure, Table, Equation<br/>
        4. Type caption text: "Sales growth 2020-2023"<br/>
        5. Word adds: "Figure 1: Sales growth 2020-2023"<br/>
        6. Number updates automatically if you add/remove figures<br/>
        <br/>
        // Customization:<br/>
        • <b>New Label:</b> Create "Photo", "Chart", "Diagram"<br/>
        • <b>Numbering:</b> Include chapter number (Figure 1-1)<br/>
        • <b>Position:</b> Above or below item<br/>
        • <b>Exclude label from caption:</b> Just show number<br/>
        <br/>
        // List of Figures/Tables:<br/>
        1. After TOC, add new page<br/>
        2. <b>References tab</b> → <b>Insert Table of Figures</b><br/>
        3. Choose caption label type<br/>
        4. Word generates list with page numbers
    </pre>
</div>

<b>Cross-References:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>The Problem:</b> "As shown in Figure 3 on page 12" - but then you add a new figure before it, and now it's Figure 4 on page 13!<br/><br/>
    
    <b>The Solution - Cross-References:</b><br/>
    1. Type "As shown in "<br/>
    2. <b>References tab</b> → <b>Cross-reference</b><br/>
    3. Reference type: Figure, Table, Heading, etc.<br/>
    4. Choose specific item from list<br/>
    5. Insert as: Page number, Only label and number, Entire caption<br/>
    6. Result: "As shown in Figure 3"<br/>
    <br/>
    <b>Magic:</b> If you add new Figure 1, all cross-references update!<br/>
    • Figure 3 becomes Figure 4 automatically<br/>
    • Page numbers update<br/>
    • Right-click → Update Field to refresh<br/>
    <br/>
    <b>Works with:</b><br/>
    • Headings (See Section 2.1)<br/>
    • Bookmarks (Jump to Appendix A)<br/>
    • Equations (Refer to Equation 5)<br/>
    • Numbered items (See item 3 in list)
</div>

<b>Bookmarks:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Create a bookmark:<br/>
        1. Select text or click location<br/>
        2. <b>Insert tab</b> → <b>Bookmark</b> (or Ctrl+Shift+F5)<br/>
        3. Type name (no spaces, start with letter)<br/>
        4. Click Add<br/>
        <br/>
        // Jump to bookmark:<br/>
        1. <b>Insert tab</b> → <b>Bookmark</b><br/>
        2. Select bookmark name<br/>
        3. Click Go To<br/>
        <br/>
        // Link to bookmark:<br/>
        1. Type "See details in the Appendix"<br/>
        2. Select "Appendix"<br/>
        3. <b>Insert tab</b> → <b>Link</b> → <b>Place in This Document</b><br/>
        4. Choose your bookmark<br/>
        5. Ctrl+Click to jump there<br/>
        <br/>
        // Show bookmarks:<br/>
        1. File → Options → Advanced<br/>
        2. Show document content → Show bookmarks<br/>
        3. Bookmarked text gets [brackets]<br/>
        <br/>
        <b>Use cases:</b><br/>
        • Quick navigation in long documents<br/>
        • Internal hyperlinks<br/>
        • Cross-references to specific spots<br/>
        • Macro/VBA programming targets
    </pre>
</div>

<hr/>

<h3>Practice Lab (45 Minutes)</h3>

<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Part A: Research Paper Setup</b><br/>
    1. Create new document "Research_Paper.docx"<br/>
    2. Set style to <b>APA 7th Edition</b><br/>
    3. Add 5 sources (use Source Manager):<br/>
        • 2 books<br/>
        • 2 journal articles<br/>
        • 1 website<br/>
    4. Write 3 paragraphs with at least 2 citations each<br/>
    5. Insert automatic bibliography at end<br/>
    <br/>
    <b>Part B: Technical Documentation</b><br/>
    1. Create "User_Manual.docx"<br/>
    2. Insert 3 images (screenshots or shapes)<br/>
    3. Add captions: "Figure 1: Login Screen" etc.<br/>
    4. In text, add cross-references to each figure<br/>
    5. Create "List of Figures" page<br/>
    6. Add 2 bookmarks for quick navigation<br/>
    7. Create hyperlinks to jump to bookmarks<br/>
    <br/>
    <b>Part C: Academic Footnotes</b><br/>
    1. Write one page on "History of Computing"<br/>
    2. Add 4 footnotes with interesting facts<br/>
    3. Convert 2 footnotes to endnotes<br/>
    4. Customize numbering to Roman numerals (i, ii, iii)<br/>
    5. Navigate using Next Footnote button
</div>

<hr/>

<h3>Advanced Features: Equations and Symbols</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Inserting Mathematical Equations:</b><br/>
    1. <b>Insert tab</b> → <b>Equation</b> dropdown<br/>
    2. Choose built-in or <b>Insert New Equation</b><br/>
    3. Use Equation Tools design tab:<br/>
        • Fractions, scripts, radicals<br/>
        • Integrals, summations<br/>
        • Matrices, brackets<br/>
        • Operators, symbols<br/>
    4. Type LaTeX code directly (then press Space)<br/>
        • \frac{a}{b} becomes a/b<br/>
        • \sqrt{x} becomes √x<br/>
        • \int_a^b becomes ∫_a^b<br/>
    <br/>
    <b>Common Symbols:</b><br/>
    • <b>Insert tab</b> → <b>Symbol</b> → <b>More Symbols</b><br/>
    • Choose font: Symbol, Wingdings, Webdings<br/>
    • Set up AutoCorrect for quick symbols:<br/>
        --> becomes →<br/>
        (c) becomes ©<br/>
        (tm) becomes ™<br/>
        :check: becomes ✓<br/>
    <br/>
    <b>Equation Numbering:</b><br/>
    1. Insert equation<br/>
    2. Add caption: "Equation 1: E=mc²"<br/>
    3. Use cross-reference to refer to it<br/>
    4. Right-align equation numbers with tabs
</div>

<hr/>

<div class="assignment-box">
    <h4>Day 2 Assignment: Complete Academic Paper</h4>
    
    <b>Task: Create a 6-page research paper with all reference features</b><br/><br/>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Page 1: Title Page</b><br/>
        • Title: "The Impact of Artificial Intelligence on Employment"<br/>
        • Your name, course, date<br/>
        • Abstract paragraph (150 words)<br/>
        • Keywords: AI, employment, automation, future work<br/>
        <br/>
        <b>Page 2: Table of Contents & Lists</b><br/>
        • Automatic TOC (Heading 1-3)<br/>
        • List of Figures (at least 3)<br/>
        • List of Tables (at least 2)<br/>
        <br/>
        <b>Pages 3-5: Main Content</b><br/>
        • 3 main sections (Heading 1)<br/>
        • Each with 2-3 subsections (Heading 2)<br/>
        • Include:<br/>
            - 8 footnotes with explanations<br/>
            - 2 endnotes with references<br/>
            - 10 citations from your sources<br/>
            - 3 images with captions<br/>
            - 2 tables with captions<br/>
            - 1 mathematical equation<br/>
            - Cross-references to all figures/tables<br/>
            - 5 bookmarks for key sections<br/>
        <br/>
        <b>Page 6: References & Appendices</b><br/>
        • Automatic bibliography (APA style)<br/>
        • 15 sources minimum<br/>
        • Appendix A: Survey questions<br/>
        • Appendix B: Data tables<br/>
        • Hyperlink from main text to appendices<br/>
    </div>
    
    <b>Technical Requirements:</b>
    <ul>
        <li>All headings must use styles (Heading 1-3)</li>
        <li>All figures/tables must have automatic captions</li>
        <li>All citations must be in correct APA format</li>
        <li>Footnotes/endnotes must be properly formatted</li>
        <li>Cross-references must work correctly</li>
        <li>Bibliography must update automatically</li>
        <li>TOC must update with one click</li>
    </ul>
    
    <b>Submission Checklist:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        ☐ Document is exactly 6 pages<br/>
        ☐ All required elements present<br/>
        ☐ No manual numbering anywhere<br/>
        ☐ All fields update correctly<br/>
        ☐ Professional formatting throughout<br/>
        ☐ File named: ResearchPaper_YourName.docx<br/>
        ☐ PDF version also submitted<br/>
    </div>
    
    <b>Bonus Challenges:</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Level 1:</b><br/>
        • Add different page numbering for front matter (i, ii, iii) and main text (1, 2, 3)<br/>
        • Create custom citation style for a specific journal<br/>
        • Add equation numbering with chapter numbers<br/>
        <br/>
        <b>Level 2:</b><br/>
        • Import sources from Zotero or Mendeley<br/>
        • Create master document with subdocuments<br/>
        • Add index with automated indexing<br/>
        • Use field codes for dynamic content<br/>
        <br/>
        <b>Level 3:</b><br/>
        • Create template for future papers<br/>
        • Add VBA macro to update all fields<br/>
        • Link to Excel data for dynamic tables<br/>
        • Create interactive PDF with clickable TOC
    </div>
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Professional Document Checklist</h3>
    
    <b>Before Submitting Any Document:</b>
    <div style="background-color: #ffffff; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
        1. <b>Update All Fields:</b> Ctrl+A then F9<br/>
        2. <b>Check Page Numbers:</b> Consistent throughout?<br/>
        3. <b>Verify Cross-References:</b> Do they point correctly?<br/>
        4. <b>Review Citations:</b> All sources included in bibliography?<br/>
        5. <b>Test Hyperlinks:</b> Ctrl+Click to ensure they work<br/>
        6. <b>Check Captions:</b> Sequential numbering?<br/>
        7. <b>Preview Print:</b> No cut-off text or images?<br/>
        8. <b>Spell Check:</b> Final proofread!<br/>
    </div>
    
    <p><b>Why These Features Matter:</b><br/>
    • <b>Efficiency:</b> Automatic updates save hours<br/>
    • <b>Accuracy:</b> No manual numbering errors<br/>
    • <b>Professionalism:</b> Shows technical competence<br/>
    • <b>Collaboration:</b> Others can navigate easily<br/>
    • <b>Academic Integrity:</b> Proper citations required</p>
    
    <p><b>Common Pitfalls to Avoid:</b></p>
    <ul>
        <li><b>Mixed styles:</b> Using different fonts/sizes for same heading level</li>
        <li><b>Manual breaks:</b> Using Enter to create page breaks instead of Ctrl+Enter</li>
        <li><b>Hard formatting:</b> Using spaces for alignment instead of tabs/tables</li>
        <li><b>Unlinked references:</b> Mentioning "Figure 3" but not having cross-reference</li>
        <li><b>Incomplete sources:</b> Missing publisher, date, or page numbers</li>
    </ul>
    
    <p><b>Tomorrow:</b> Track Changes, Comments, and Collaboration - working effectively with others on documents.</p>
    
    <p><b>Resources:</b><br/>
    • <a href="https://support.microsoft.com/en-us/office/create-a-bibliography-citations-and-references-17686589-4824-4940-9c69-342c289fa2a5" target="_blank">Microsoft Citations Guide</a><br/>
    • <a href="https://apastyle.apa.org/" target="_blank">APA Style Official Website</a><br/>
    • <a href="https://www.zotero.org/" target="_blank">Zotero Reference Manager</a><br/>
    • <a href="https://www.latex-project.org/" target="_blank">LaTeX for Advanced Typesetting</a></p>
</div>`
            },
            "4-3": {
                "icon": "fas fa-users",
                "title": "Collaboration & Office Etiquette",
                "html": `<h1>Week 4, Day 3: Collaboration & Office Etiquette</h1>
<p>Today we learn how to work effectively with others on documents - tracking changes, adding comments, comparing versions, and maintaining professional communication standards.</p>

<div class="analogy-box">
    <b>Analogy: The Digital Workshop 🛠️</b><br/>
    Track Changes: Like seeing everyone's pencil marks on a shared blueprint<br/>
    Comments: Sticky notes with questions or suggestions<br/>
    Reviewing Pane: A summary board showing all feedback<br/>
    Compare Documents: Spot-the-difference for two document versions<br/>
    Protect Document: Locking certain parts so only specific people can edit<br/>
    Version History: Time machine to see earlier drafts<br/>
    @Mentions: Tagging colleagues to get their attention<br/>
</div>

<h3>Key Topics</h3>
<ul>
    <li>Using Track Changes for editing transparency</li>
    <li>Adding, replying to, and resolving comments</li>
    <li>Accepting and rejecting changes</li>
    <li>Comparing and combining documents</li>
    <li>Protecting documents with passwords and restrictions</li>
    <li>Using @mentions for team collaboration</li>
    <li>Professional email and document etiquette</li>
</ul>

<h3>In-Depth Explanation</h3>

<b>a. Track Changes: The Editor's Spotlight</b>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>How It Works:</b><br/>
    1. Turn on Track Changes (Review tab → Track Changes)<br/>
    2. Every edit is recorded with:<br/>
        • <span style="color: red; text-decoration: line-through;">Red strikethrough</span> for deletions<br/>
        • <span style="color: blue; background-color: #e6f2ff;">Blue underline</span> for insertions<br/>
        • Different colors for different reviewers<br/>
        • Vertical line in margin showing changed lines<br/>
    3. Hover over changes to see:<br/>
        • Who made the change<br/>
        • When it was made<br/>
        • Comment if provided<br/>
    <br/>
    <b>Turning It On/Off:</b><br/>
    • Keyboard: Ctrl+Shift+E<br/>
    • Status bar: Click "Track Changes" indicator<br/>
    • Review tab: Track Changes button<br/>
    <br/>
    <b>Important:</b> When Track Changes is OFF, edits are permanent!
</div>

<b>Display Options - Seeing What You Need:</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Show Markup Options (Review tab → Show Markup):<br/>
        • <b>Comments:</b> Show/hide comment balloons<br/>
        • <b>Ink:</b> Show/hide handwriting annotations<br/>
        • <b>Insertions and Deletions:</b> Show editing marks<br/>
        • <b>Formatting:</b> Show formatting changes<br/>
        • <b>Markup Area:</b> Choose where balloons appear<br/>
        • <b>Reviewers:</b> Show only specific people's changes<br/>
        <br/>
        // Display for Review (Review tab → Display for Review):<br/>
        • <b>Simple Markup:</b> Red lines in margin, clean text<br/>
        • <b>All Markup:</b> Show all changes inline<br/>
        • <b>No Markup:</b> Show final document (hides changes)<br/>
        • <b>Original:</b> Show document before any changes<br/>
        <br/>
        // Balloons vs Inline:<br/>
        • <b>Show Revisions in Balloons:</b> Changes in margin<br/>
        • <b>Show All Revisions Inline:</b> Changes within text<br/>
        • <b>Show Only Comments and Formatting in Balloons:</b> Mixed<br/>
        <br/>
        <b>Pro Tip:</b> Use Simple Markup for reading, All Markup for reviewing
    </pre>
</div>

<b>The Reviewing Pane: Your Control Center</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Opening:</b> Review tab → Reviewing Pane → Vertical or Horizontal<br/><br/>
    
    <b>What It Shows:</b><br/>
    • <b>Summary:</b> Total changes, comments, formatting edits<br/>
    • <b>Details:</b> Every change listed sequentially<br/>
    • <b>Navigation:</b> Click any item to jump to it in document<br/>
    • <b>Filtering:</b> Show only comments, only formatting, etc.<br/>
    <br/>
    <b>Benefits:</b><br/>
    • See all feedback in one place<br/>
    • Don't miss hidden changes<br/>
    • Quick navigation through long documents<br/>
    • Track progress (25 of 50 changes reviewed)<br/>
    <br/>
    <b>When to Use:</b><br/>
    • Long documents with many reviewers<br/>
    • Final quality check before accepting changes<br/>
    • Training new editors on what to look for
</div>

<hr/>

<b>b. Comments: The Conversation Thread</b>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Adding Comments:<br/>
        1. Select text or click location<br/>
        2. <b>Review tab</b> → <b>New Comment</b> (or Ctrl+Alt+M)<br/>
        3. Type your question/suggestion<br/>
        4. Click Post (or press Ctrl+Enter)<br/>
        <br/>
        // Modern Comments (Office 365/2021):<br/>
        • @mention colleagues: @John - they get email notification<br/>
        • Reply threads: Conversations stay organized<br/>
        • Resolve vs Delete: Resolve keeps history, Delete removes<br/>
        • Like comments: Quick agreement without replying<br/>
        <br/>
        // Navigating Comments:<br/>
        • <b>Next</b> and <b>Previous</b> buttons in Review tab<br/>
        • Click comment balloon in margin<br/>
        • Use Reviewing Pane list<br/>
        <br/>
        // Comment Best Practices:<br/>
        • Be specific: "Page 3, paragraph 2: clarify this point"<br/>
        • Be constructive: "Consider adding an example here"<br/>
        • Use questions: "Should we include last year's data?"<br/>
        • Assign actions: "@Sarah can you check these numbers?"<br/>
        <br/>
        // Resolving Comments:<br/>
        1. Click three dots (...) on comment<br/>
        2. Choose <b>Resolve</b> (grayed out but keeps history)<br/>
        3. Or <b>Delete</b> to remove completely<br/>
        4. Show Resolved Comments to see them again
    </pre>
</div>

<b>Professional Comment Etiquette:</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background-color: #4a6fa5; color: white;">
            <th style="padding: 10px; border: 1px solid #ddd;">Do ✅</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Don't ❌</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">"The data in Table 2 seems inconsistent with Figure 1."</td>
            <td style="padding: 10px; border: 1px solid #ddd;">"This is wrong."</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">"Can we add a transition sentence here?"</td>
            <td style="padding: 10px; border: 1px solid #ddd;">"Bad flow."</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">"@Maria, can you verify these technical specs?"</td>
            <td style="padding: 10px; border: 1px solid #ddd;">"Someone fix this."</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">"Great point in paragraph 3!"</td>
            <td style="padding: 10px; border: 1px solid #ddd;">(No positive feedback)</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">"Resolved: Added the example as suggested."</td>
            <td style="padding: 10px; border: 1px solid #ddd;">(Deleting without explanation)</td>
        </tr>
    </table>
</div>

<hr/>

<b>c. Accepting/Rejecting Changes: The Final Decision</b>

<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Individual Changes:<br/>
        1. Click on a change (highlighted text)<br/>
        2. <b>Review tab</b> → <b>Accept</b> or <b>Reject</b><br/>
        3. Or right-click → Accept/Reject<br/>
        <br/>
        // Batch Processing:<br/>
        • <b>Accept All Changes:</b> Accept every change in document<br/>
        • <b>Reject All Changes:</b> Return to original document<br/>
        • <b>Accept All Changes and Stop Tracking:</b> Finalize document<br/>
        • <b>Accept/Reject by Reviewer:</b> Process one person's changes<br/>
        <br/>
        // Navigation while Reviewing:<br/>
        • <b>Next</b> and <b>Previous</b> buttons (jump to changes)<br/>
        • Accept/Reject from there directly<br/>
        • Use Reviewing Pane to see all at once<br/>
        <br/>
        // Best Practices:<br/>
        • Review ALL changes before accepting any<br/>
        • Consider each change individually<br/>
        • If unsure, add comment asking for clarification<br/>
        • Keep original author's voice/style<br/>
        • Document major decisions in comments<br/>
        <br/>
        // Finalizing:<br/>
        1. Accept/Reject all changes<br/>
        2. Resolve all comments<br/>
        3. Turn off Track Changes<br/>
        4. Save as final version<br/>
        5. Consider "Protect Document" to prevent further edits
    </pre>
</div>

<hr/>

<b>d. Compare and Combine: When Multiple Versions Exist</b>

<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Compare Documents:</b> (When you have original and edited version)<br/>
    1. Open original document<br/>
    2. <b>Review tab</b> → <b>Compare</b> → <b>Compare...</b><br/>
    3. Choose original and revised documents<br/>
    4. Word shows differences with Track Changes<br/>
    5. Choose which version is "original" for display<br/>
    <br/>
    <b>Combine Documents:</b> (When multiple people edited separately)<br/>
    1. Open one version<br/>
    2. <b>Review tab</b> → <b>Compare</b> → <b>Combine...</b><br/>
    3. Choose two documents to merge<br/>
    4. Word creates composite with all changes<br/>
    5. Repeat to add more documents<br/>
    <br/>
    <b>Settings:</b><br/>
    • <b>Label changes with:</b> Use reviewer names or "Original/Revised"<br/>
    • <b>Comparison settings:</b> What to compare (formatting, headers, etc.)<br/>
    • <b>Show changes at:</b> Character level, word level, etc.<br/>
    • <b>Show changes in:</b> New document, original, or revised<br/>
    <br/>
    <b>Use Cases:</b><br/>
    • Client returned edited contract<br/>
    • Team members worked offline<br/>
    • Lost Track Changes but saved versions<br/>
    • Merging feedback from multiple sources
</div>

<hr/>

<h3>Practice Lab (45 Minutes)</h3>

<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Part A: Track Changes Practice</b><br/>
    1. Create document "Project_Proposal.docx" with 3 paragraphs<br/>
    2. Turn on Track Changes<br/>
    3. Make these edits:<br/>
        • Change title font to Arial<br/>
        • Delete one sentence<br/>
        • Add new paragraph<br/>
        • Change "very good" to "excellent"<br/>
    4. Switch between display views (Simple/All/No Markup)<br/>
    5. Use Reviewing Pane to see all changes<br/>
    <br/>
    <b>Part B: Comments and Collaboration</b><br/>
    1. Add 3 comments:<br/>
        • One question about content<br/>
        • One suggestion for improvement<br/>
        • One @ mention (use your own name)<br/>
    2. Reply to your own comment creating a thread<br/>
    3. Resolve one comment<br/>
    4. Navigate using Next/Previous buttons<br/>
    <br/>
    <b>Part C: Compare and Combine</b><br/>
    1. Save As "Proposal_V1.docx"<br/>
    2. Make significant changes, save as "Proposal_V2.docx"<br/>
    3. Use Compare to see differences<br/>
    4. Create third version with different changes<br/>
    5. Use Combine to merge V2 and V3<br/>
    <br/>
    <b>Part D: Protection</b><br/>
    1. Restrict editing to comments only<br/>
    2. Try to edit text (should fail)<br/>
    3. Add password protection<br/>
    4. Close and reopen to test password
</div>

<hr/>

<h3>Document Protection and Security</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Restrict Editing (Review tab → Restrict Editing):</b><br/>
    <b>1. Formatting Restrictions:</b><br/>
    • Limit to specific styles only<br/>
    • Prevent font/color changes<br/>
    • Maintain corporate branding<br/>
    <br/>
    <b>2. Editing Restrictions:</b><br/>
    • <b>No changes (Read only):</b> View only<br/>
    • <b>Tracked changes:</b> Can edit but changes tracked<br/>
    • <b>Comments:</b> Can only add comments<br/>
    • <b>Filling in forms:</b> Only form fields editable<br/>
    • <b>Exceptions:</b> Allow specific people to edit<br/>
    <br/>
    <b>3. Start Enforcement:</b><br/>
    • Yes, Start Enforcing Protection<br/>
    • Password optional (without password, anyone can stop protection)<br/>
    • With password, only those with password can edit freely<br/>
    <br/>
    <b>Password Protection (File → Info → Protect Document):</b><br/>
    • <b>Encrypt with Password:</b> Need password to open<br/>
    • <b>Restrict Access:</b> Digital rights management (DRM)<br/>
    • <b>Add a Digital Signature:</b> Verify authenticity<br/>
    • <b>Mark as Final:</b> Read-only warning (easily bypassed)<br/>
    <br/>
    <b>Important Security Notes:</b><br/>
    • Microsoft cannot recover lost passwords!<br/>
    • Password strength matters: Use 12+ characters with mix<br/>
    • Consider separate "open" and "modify" passwords<br/>
    • Remove protection before final distribution
</div>

<hr/>

<h3>Professional Office Etiquette</h3>

<div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>The Do's and Don'ts of Professional Collaboration:</b><br/><br/>
    
    <b>Document Naming Conventions:</b><br/>
    ✅ ProjectName_Version_Date_Initials.docx<br/>
    ✅ Marketing_Report_V2_2024-01-21_JD.docx<br/>
    ✅ Q4_Results_FINAL_Approved.docx<br/>
    ❌ Document1.docx<br/>
    ❌ FinalFinalReallyFinal.docx<br/>
    ❌ New_version_old_new_newest.docx<br/>
    <br/>
    <b>Version Control:</b><br/>
    • Use consistent numbering: V0.1 (draft), V1.0 (first complete), V1.1 (minor revisions)<br/>
    • Include date in filename: YYYY-MM-DD format<br/>
    • Keep archive folder for old versions<br/>
    • Use "FINAL" only when truly final<br/>
    <br/>
    <b>Email Etiquette with Documents:</b><br/>
    • Subject line: "For Review: Project Proposal V2.0"<br/>
    • Body: Specify what kind of feedback needed<br/>
    • Deadline: "Please review by Friday EOD"<br/>
    • Attachments: Use meaningful names<br/>
    • Size: Compress images, use PDF for final<br/>
    • Follow-up: One reminder, then call<br/>
    <br/>
    <b>Meeting Documentation:</b><br/>
    • Use "Meeting Minutes" template<br/>
    • Track decisions and action items<br/>
    • Assign owners and deadlines<br/>
    • Distribute within 24 hours<br/>
    • Store in shared location
</div>

<hr/>

<div class="assignment-box">
    <h4>Day 3 Assignment: Team Collaboration Simulation</h4>
    
    <b>Scenario:</b> You are the project manager for "TechSolutions Inc." preparing a client proposal.<br/>
    Your team: Writer (you), Editor (peer), Designer (peer), Manager (instructor).<br/><br/>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Phase 1: Create Initial Draft (You)</b><br/>
        1. Create "Client_Proposal_V0.1.docx"<br/>
        2. Include:<br/>
            • Cover page with company logo<br/>
            • 3-page proposal (use dummy text)<br/>
            • 2 tables with pricing<br/>
            • 1 image/chart<br/>
            • Contact information section<br/>
        3. Turn on Track Changes<br/>
        4. Add 3 comments with questions for team<br/>
        5. Save and share with "Editor"<br/>
        <br/>
        <b>Phase 2: Editorial Review (Partner as Editor)</b><br/>
        1. Open V0.1, save as V0.2<br/>
        2. Make 10+ editing changes (Track Changes ON)<br/>
            • Fix grammar/spelling<br/>
            • Improve clarity<br/>
            • Suggest reorganization<br/>
        3. Add 5+ comments with suggestions<br/>
        4. Use @mention to ask Designer about images<br/>
        5. Save and share with "Designer"<br/>
        <br/>
        <b>Phase 3: Design Review (Partner as Designer)</b><br/>
        1. Open V0.2, save as V0.3<br/>
        2. Make formatting improvements:<br/>
            • Add headers/footers<br/>
            • Improve table design<br/>
            • Enhance image placement<br/>
            • Apply consistent styles<br/>
        3. Add 3+ comments about design choices<br/>
        4. Resolve some previous comments<br/>
        5. Save and share with "Manager" (instructor)<br/>
        <br/>
        <b>Phase 4: Final Review and Merge (You as PM)</b><br/>
        1. Use Combine to merge V0.1 and V0.3<br/>
        2. Review all changes (use Reviewing Pane)<br/>
        3. Accept/Reject changes appropriately<br/>
        4. Resolve all remaining comments<br/>
        5. Create final V1.0 with protection (comments only)<br/>
        6. Generate PDF for client distribution
    </div>
    
    <b>Deliverables:</b>
    <ul>
        <li>All version files (V0.1, V0.2, V0.3, V1.0)</li>
        <li>PDF final version</li>
        <li>Screenshots showing:
            <ul>
                <li>Track Changes in action</li>
                <li>Comment threads</li>
                <li>Reviewing Pane with multiple changes</li>
                <li>Compare/Combine results</li>
                <li>Document protection settings</li>
            </ul>
        </li>
        <li>Reflection document on collaboration process</li>
    </ul>
    
    <b>Evaluation Criteria:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Technical Skills (50%):</b><br/>
        • Proper use of Track Changes throughout<br/>
        • Effective comment threads with @mentions<br/>
        • Successful document comparison/combination<br/>
        • Appropriate document protection<br/>
        • Clean final version with all changes resolved<br/>
        <br/>
        <b>Collaboration Skills (30%):</b><br/>
        • Professional communication in comments<br/>
        • Clear feedback and suggestions<br/>
        • Responsiveness to others' comments<br/>
        • Effective use of version control<br/>
        <br/>
        <b>Document Quality (20%):</b><br/>
        • Professional appearance<br/>
        • Consistency in formatting<br/>
        • Logical organization<br/>
        • Error-free final version
    </div>
    
    <b>Bonus: Real-World Simulation</b>
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Advanced Challenge:</b><br/>
        1. Set up SharePoint/OneDrive shared folder<br/>
        2. Use AutoSave and real-time co-authoring<br/>
        3. Create approval workflow with Power Automate<br/>
        4. Add digital signatures for final approval<br/>
        5. Set up retention policies for document archive<br/>
        6. Create template for future proposals<br/>
        7. Document the entire process as SOP (Standard Operating Procedure)
    </div>
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎯 Collaboration Best Practices</h3>
    
    <b>The 5 C's of Effective Document Collaboration:</b>
    <div style="background-color: #ffffff; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
        1. <b>Clarity:</b> Be specific in comments and changes<br/>
        2. <b>Consistency:</b> Use same styles, naming, processes<br/>
        3. <b>Communication:</b> Regular updates, clear expectations<br/>
        4. <b>Coordination:</b> Define roles, deadlines, workflows<br/>
        5. <b>Courtesy:</b> Respectful feedback, acknowledge contributions
    </div>
    
    <p><b>When to Use Which Tool:</b></p>
    <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
        <tr style="background-color: #4a6fa5; color: white;">
            <th style="padding: 10px; border: 1px solid #ddd;">Scenario</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Best Tool</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Why</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Solo editing with review later</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Track Changes</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Shows exactly what changed</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Asking questions</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Comments</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Non-destructive, conversational</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Multiple offline editors</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Compare/Combine</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Merges separate work streams</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;">Real-time team editing</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Co-authoring (OneDrive)</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Simultaneous, immediate</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Final approval</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Protect Document</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Prevents unauthorized changes</td>
        </tr>
    </table>
    
    <p><b>Common Collaboration Mistakes to Avoid:</b></p>
    <ul>
        <li><b>Editing with Track Changes off:</b> Changes get lost</li>
        <li><b>Not reviewing before accepting:</b> Might accept errors</li>
        <li><b>Vague comments:</b> "Fix this" - fix what?</li>
        <li><b>Too many reviewers at once:</b> Conflicting changes</li>
        <li><b>No version control:</b> "Which is the latest?"</li>
        <li><b>Ignoring comments:</b> Frustrates collaborators</li>
        <li><b>Over-protecting:</b> Makes collaboration difficult</li>
    </ul>
    
    <p><b>Tomorrow:</b> Module 2 Final Project - Bring all Word skills together in a comprehensive company profile.</p>
    
    <p><b>Resources:</b><br/>
    • <a href="https://support.microsoft.com/en-us/office/track-changes-in-word-197ba630-0f5f-4a8e-9a77-3712475e806a" target="_blank">Microsoft Track Changes Guide</a><br/>
    • <a href="https://support.microsoft.com/en-us/office/collaborate-on-word-documents-with-real-time-co-authoring-df781d8e-6954-4c8c-8c08-5ab69d6f3f56" target="_blank">Real-time Co-authoring</a><br/>
    • <a href="https://www.microsoft.com/en-us/microsoft-365/blog/2020/03/30/remote-work-5-best-practices-virtual-collaboration/" target="_blank">Remote Collaboration Best Practices</a><br/>
    • <a href="https://thedigitalprojectmanager.com/tools/best-document-collaboration-software/" target="_blank">Document Collaboration Tools Comparison</a></p>
</div>`
            },
            "4-4": {
                "icon": "fas fa-graduation-cap",
                "title": "Module 2 Final Project",
                "html": `<h1>Week 4, Day 4: Module 2 Final Project</h1>
<p>Today you demonstrate mastery of all Microsoft Word skills by creating a comprehensive, professional company profile from scratch. This project integrates everything learned in Module 2.</p>

<div class="analogy-box">
    <b>Analogy: The Architectural Blueprint 🏢</b><br/>
    Document Structure: The foundation and framework<br/>
    Styles & Formatting: Interior design and aesthetics<br/>
    Tables & Graphics: Functional furniture and decorations<br/>
    References & Automation: Electrical wiring and plumbing<br/>
    Collaboration Features: Communication systems<br/>
    Final Polish: Quality inspection before handing over keys<br/>
    Portfolio Piece: Your showroom display for potential clients<br/>
</div>

<h3>Project Overview</h3>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Company:</b> TechSolutions Inc. (or create your own company)<br/>
    <b>Document:</b> Company Profile / Corporate Brochure<br/>
    <b>Length:</b> 5-7 pages (excluding cover)<br/>
    <b>Time:</b> 4 hours (simulating real-world deadline)<br/>
    <b>Audience:</b> Potential investors, clients, and partners<br/>
    <b>Purpose:</b> Showcase company capabilities, build credibility<br/>
    <br/>
    <b>Grading Weight:</b><br/>
    • Technical Skills: 60%<br/>
    • Professionalism: 25%<br/>
    • Creativity: 15%<br/>
    <br/>
    <b>Submission:</b> Word document + PDF + Screenshots of process
</div>

<h3>Project Requirements - Must Include ALL Elements</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <h4>Section 1: Document Structure & Setup (15 points)</h4>
    <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #4CAF50;">
        ☐ <b>Cover Page</b>: Professional design with company logo, tagline, date<br/>
        ☐ <b>Automatic Table of Contents</b>: Based on Heading styles, with leader dots<br/>
        ☐ <b>Page Numbering</b>: Roman numerals (i, ii) for front matter, Arabic (1, 2) for content<br/>
        ☐ <b>Section Breaks</b>: Separate cover, TOC, and content sections<br/>
        ☐ <b>Custom Headers/Footers</b>: Different on first page, odd/even pages<br/>
        ☐ <b>Document Properties</b>: Author, company, keywords, category filled<br/>
    </div>
    
    <h4>Section 2: Content & Formatting (25 points)</h4>
    <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #2196F3;">
        ☐ <b>Custom Styles</b>: At least 5 modified styles (Heading 1-3, Normal, Quote)<br/>
        ☐ <b>Consistent Formatting</b>: Same fonts, colors, spacing throughout<br/>
        ☐ <b>Multilevel Lists</b>: Automatic numbering for sections/sub-sections<br/>
        ☐ <b>Text Boxes & Shapes</b>: For callouts, highlights, or sidebars<br/>
        ☐ <b>Columns</b>: At least one section in 2-column layout<br/>
        ☐ <b>Watermark</b>: "CONFIDENTIAL" or "DRAFT" as appropriate<br/>
        ☐ <b>Themes</b>: Applied and customized company theme<br/>
    </div>
    
    <h4>Section 3: Visual Elements (20 points)</h4>
    <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #FF9800;">
        ☐ <b>Tables</b>: At least 3 professional tables (financials, team, services)<br/>
        ☐ <b>Charts/Graphs</b>: 2 Excel-embedded charts showing growth/performance<br/>
        ☐ <b>Images</b>: 4+ images with captions and text wrapping<br/>
        ☐ <b>SmartArt</pre></b>: Organizational chart or process flow<br/>
        ☐ <b>Icons</pre></b>: Modern Office icons for visual interest<br/>
        ☐ <b>Text Effects</pre></b>: Subtle use of WordArt for headings<br/>
        ☐ <b>Page Borders/Backgrounds</pre></b>: Professional enhancement<br/>
    </div>
    
    <h4>Section 4: References & Automation (20 points)</h4>
    <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #9C27B0;">
        ☐ <b>Footnotes/Endnotes</b>: 5+ explanatory notes or citations<br/>
        ☐ <b>Hyperlinks</b>: Internal (to sections) and external (to website)<br/>
        ☐ <b>Bookmarks</b>: 3+ for quick navigation<br/>
        ☐ <b>Cross-references</b>: "See Table 2 on page 5" that update automatically<br/>
        ☐ <b>Fields</b>: Dynamic content (date, page numbers, document info)<br/>
        ☐ <b>Mail Merge Data</b>: Recipient list for potential distribution<br/>
        ☐ <b>Equations/Symbols</b>: If technical company, include formulas<br/>
    </div>
    
    <h4>Section 5: Professional Features (20 points)</h4>
    <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #F44336;">
        ☐ <b>Track Changes</b>: Show editing process (accept before final)<br/>
        ☐ <b>Comments</b>: 5+ professional comments (resolved in final)<br/>
        ☐ <b>Document Protection</b>: Read-only with exception for comments<br/>
        ☐ <b>Accessibility</b>: Alt text for images, proper heading structure<br/>
        ☐ <b>Compatibility Check</b>: Run and fix any issues<br/>
        ☐ <b>Inspect Document</b>: Remove hidden metadata if needed<br/>
        ☐ <b>Export to PDF</b>: Preserving formatting and links<br/>
    </div>
</div>

<h3>Step-by-Step Implementation Guide</h3>

<b>Phase 1: Planning & Setup (30 minutes)</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Step 1: Create Project Folder Structure<br/>
        Company_Profile/<br/>
        ├── Working_Files/<br/>
        │   ├── Drafts/<br/>
        │   ├── Images/<br/>
        │   └── Data/<br/>
        ├── Final_Deliverables/<br/>
        └── Documentation/<br/>
        <br/>
        // Step 2: Document Blueprint<br/>
        1. Page 1: Cover Page<br/>
        2. Page 2: Table of Contents<br/>
        3. Page 3: Executive Summary<br/>
        4. Page 4: Company Overview<br/>
        5. Page 5: Products/Services<br/>
        6. Page 6: Team & Leadership<br/>
        7. Page 7: Contact Information<br/>
        8. Page 8: Appendices (optional)<br/>
        <br/>
        // Step 3: Gather Assets<br/>
        • Company logo (create or find online)<br/>
        • Team photos (use placeholders if needed)<br/>
        • Product/service images<br/>
        • Financial data for charts<br/>
        • Contact information<br/>
        • Client testimonials (create dummy)<br/>
        <br/>
        // Step 4: Set Up Document<br/>
        1. New Word document<br/>
        2. Set margins: Narrow (0.5" all sides)<br/>
        3. Set page size: A4 or Letter<br/>
        4. Apply Theme: Integral or Ion<br/>
        5. Modify Theme colors/fonts<br/>
        6. Save as: "Company_Profile_V1.0.docx"
    </pre>
</div>

<b>Phase 2: Building the Framework (60 minutes)</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Cover Page Creation:</b><br/>
    1. Insert → Cover Page → Choose "Ion (Light)"<br/>
    2. Replace placeholder text:<br/>
        • [Document title]: TechSolutions Inc. Company Profile<br/>
        • [Document subtitle]: Innovative Technology Solutions Since 2020<br/>
        • [Company name]: TechSolutions Inc.<br/>
        • [Year]: 2024<br/>
    3. Insert logo: Click picture placeholder<br/>
    4. Add abstract shape behind title<br/>
    5. Insert horizontal line separator<br/>
    6. Add "Confidential" watermark<br/>
    <br/>
    <b>Table of Contents Setup:</b><br/>
    1. Page Break after cover (Ctrl+Enter)<br/>
    2. Type "TABLE OF CONTENTS" (Heading 1)<br/>
    3. References → Table of Contents → Automatic Table 2<br/>
    4. Update field (will be empty until headings added)<br/>
    5. Add "List of Figures" below TOC<br/>
    6. Insert section break (Next Page)<br/>
    <br/>
    <b>Headers & Footers:</b><br/>
    1. Double-click top of page 3<br/>
    2. Design → Different First Page (uncheck)<br/>
    3. Design → Different Odd & Even Pages (check)<br/>
    4. Odd header: Company name left<br/>
    5. Even header: Section title right<br/>
    6. Footer: Page number centered<br/>
    7. Close Header/Footer
</div>

<b>Phase 3: Content Development (90 minutes)</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Executive Summary (Page 3)<br/>
        1. Heading 1: EXECUTIVE SUMMARY<br/>
        2. Paragraph: 150-word overview<br/>
        3. Insert text box with key stats:<br/>
            • Founded: 2020<br/>
            • Employees: 50+<br/>
            • Clients: 200+<br/>
            • Growth: 300% in 3 years<br/>
        4. Add quote from CEO (use Quote style)<br/>
        5. Page break<br/>
        <br/>
        // Company Overview (Page 4)<br/>
        1. Heading 1: COMPANY OVERVIEW<br/>
        2. Heading 2: Our Mission<br/>
        3. Paragraph: Mission statement<br/>
        4. Heading 2: Our Vision<br/>
        5. Paragraph: Vision statement<br/>
        6. Heading 2: Core Values<br/>
        7. Insert SmartArt: Vertical bullet list<br/>
            • Innovation<br/>
            • Integrity<br/>
            • Excellence<br/>
            • Collaboration<br/>
            • Customer Focus<br/>
        8. Insert chart: Revenue growth 2020-2024<br/>
        <br/>
        // Products/Services (Page 5)<br/>
        1. Heading 1: PRODUCTS & SERVICES<br/>
        2. Create 3-column table:<br/>
            Column 1: Service Name<br/>
            Column 2: Description<br/>
            Column 3: Key Features<br/>
        3. Fill with 5 services:<br/>
            • IT Consulting<br/>
            • Software Development<br/>
            • Cloud Solutions<br/>
            • Cybersecurity<br/>
            • Data Analytics<br/>
        4. Add icons next to each service<br/>
        5. Insert process SmartArt for service delivery<br/>
        <br/>
        // Team & Leadership (Page 6)<br/>
        1. Heading 1: LEADERSHIP TEAM<br/>
        2. Create 3x2 table for team bios:<br/>
            • Photo placeholder (Insert → Icons → People)<br/>
            • Name & Title<br/>
            • Bio paragraph<br/>
            • Contact link<br/>
        3. Fill with 6 team members<br/>
        4. Add organizational chart SmartArt<br/>
        5. Heading 2: Company Culture<br/>
        6. 2-column layout for culture highlights<br/>
        <br/>
        // Contact Information (Page 7)<br/>
        1. Heading 1: CONTACT US<br/>
        2. Create contact card table:<br/>
            • Address<br/>
            • Phone<br/>
            • Email<br/>
            • Website<br/>
            • Social media icons<br/>
        3. Insert Google Maps screenshot<br/>
        4. Add contact form fields (Developer tab)<br/>
        5. Insert email hyperlink: info@techsolutions.com
    </pre>
</div>

<b>Phase 4: Advanced Features & Automation (45 minutes)</b>
<div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>References Implementation:</b><br/>
    1. <b>Footnotes:</b> Add to technical terms (e.g., "Cloud Computing¹")<br/>
    2. <b>Bookmarks:</b> Mark key sections (Services, Team, Contact)<br/>
    3. <b>Cross-references:</b> "See our team on page 6"<br/>
    4. <b>Hyperlinks:</b> Link service names to detailed pages<br/>
    5. <b>Table of Figures:</b> Insert after TOC<br/>
    6. <b>Update All Fields:</b> Ctrl+A then F9<br/>
    <br/>
    <b>Collaboration Features:</b><br/>
    1. Turn on <b>Track Changes</b><br/>
    2. Make 5+ editing passes (show improvement process)<br/>
    3. Add <b>Comments</b> explaining design choices<br/>
    4. Use @mention for imaginary colleagues<br/>
    5. Show comment resolution process<br/>
    <br/>
    <b>Mail Merge Preparation:</b><br/>
    1. Create Excel file "Potential_Clients.xlsx"<br/>
    2. Columns: Company, ContactPerson, Email, Industry<br/>
    3. Add 10 dummy companies<br/>
    4. Create mail merge field in document<br/>
    5. Save as template for mass distribution<br/>
    <br/>
    <b>Document Protection:</b><br/>
    1. Review → Restrict Editing<br/>
    2. Allow only: Comments<br/>
    3. Start enforcement (no password for submission)<br/>
    4. Test that text editing is blocked<br/>
    5. Test that comments can be added
</div>

<b>Phase 5: Final Polish & Submission (15 minutes)</b>
<div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <pre>
        // Quality Assurance Checklist:<br/>
        ☐ Spell check complete (F7)<br/>
        ☐ Grammar check complete<br/>
        ☐ All fields updated (Ctrl+A, F9)<br/>
        ☐ All cross-references working<br/>
        ☐ All hyperlinks tested (Ctrl+Click)<br/>
        ☐ Page numbers correct<br/>
        ☐ TOC matches actual pages<br/>
        ☐ Images properly aligned<br/>
        ☐ Tables formatted consistently<br/>
        ☐ Headers/footers correct on all pages<br/>
        ☐ No orphaned headings (single line at page bottom)<br/>
        ☐ Consistent spacing throughout<br/>
        ☐ Color scheme professional<br/>
        <br/>
        // Final Steps:<br/>
        1. Accept all Track Changes<br/>
        2. Resolve all Comments<br/>
        3. Turn off Track Changes<br/>
        4. Save As: "Company_Profile_FINAL.docx"<br/>
        5. Export to PDF: Preserve formatting<br/>
        6. Run Compatibility Checker<br/>
        7. Inspect Document for hidden data<br/>
        8. Create ZIP file with all deliverables
    </pre>
</div>

<hr/>

<h3>Project Deliverables & Submission</h3>

<div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <b>Submit the following in a ZIP file named: LastName_FirstName_Module2_Final.zip</b><br/><br/>
    
    <b>1. Word Documents (40%):</b><br/>
    • Company_Profile_FINAL.docx (protected, comment-enabled)<br/>
    • Company_Profile_TRACKED.docx (with changes/comments visible)<br/>
    • Company_Profile_TEMPLATE.dotx (template for future use)<br/>
    • Potential_Clients.xlsx (mail merge data source)<br/>
    <br/>
    <b>2. PDF Files (20%):</b><br/>
    • Company_Profile.pdf (print-ready)<br/>
    • Company_Profile_Accessible.pdf (with tags for screen readers)<br/>
    <br/>
    <b>3. Documentation (20%):</b><br/>
    • README.txt with project overview<br/>
    • Technical_Specifications.docx detailing features used<br/>
    • Process_Journal.docx showing your workflow<br/>
    • Challenges_Solutions.docx documenting problems and fixes<br/>
    <br/>
    <b>4. Screenshots (10%):</b><br/>
    • Styles pane showing custom styles<br/>
    • Reviewing pane with changes/comments<br/>
    • TOC and List of Figures<br/>
    • Document properties<br/>
    • Protection settings<br/>
    • Mail merge preview<br/>
    <br/>
    <b>5. Reflection (10%):</b><br/>
    • 500-word reflection on learning journey<br/>
    • Strengths demonstrated<br/>
    • Areas for improvement<br/>
    • Real-world applications identified
</div>

<hr/>

<h3>Grading Rubric</h3>

<div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="background-color: #4a6fa5; color: white;">
            <th style="padding: 10px; border: 1px solid #ddd;">Category</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Excellent (90-100%)</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Good (80-89%)</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Satisfactory (70-79%)</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Needs Work (<70%)</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Technical Skills</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">All required features implemented flawlessly; advanced techniques used</td>
            <td style="padding: 10px; border: 1px solid #ddd;">All required features present; minor technical issues</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Most features present; some not working correctly</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Missing key features; technical problems throughout</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Professionalism</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Exceptionally polished; ready for executive presentation</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Professional appearance; minor formatting inconsistencies</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Appears amateurish in places; needs polish</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Unprofessional; not suitable for business use</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Creativity</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Innovative design; exceeds requirements creatively</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Good design choices; meets requirements well</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Basic design; minimal creativity shown</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Template-heavy; little original thought</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Documentation</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">Comprehensive, clear, professional documentation</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Adequate documentation; covers most aspects</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Minimal documentation; lacks detail</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Poor or missing documentation</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><b>Functionality</b></td>
            <td style="padding: 10px; border: 1px solid #ddd;">All features work perfectly; no errors</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Most features work; minor issues</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Several features not working correctly</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Major functionality problems</td>
        </tr>
    </table>
</div>

<hr/>

<div class="assignment-box">
    <h4>Bonus Challenges: Take It Further</h4>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Level 1: Advanced Automation</b><br/>
        1. Create custom ribbon tab with macros<br/>
        2. Add form fields for interactive elements<br/>
        3. Create building blocks for reusable content<br/>
        4. Set up Quick Parts gallery<br/>
        5. Add content controls for structured data<br/>
        <br/>
        <b>Level 2: Multi-Format Publishing</b><br/>
        1. Create responsive HTML version<br/>
        2. Design mobile-optimized PDF<br/>
        3. Create presentation version (Word to PowerPoint)<br/>
        4. Generate infographic summary<br/>
        5. Create social media snippets<br/>
        <br/>
        <b>Level 3: Enterprise Integration</b><br/>
        1. Link to live Excel data (financials)<br/>
        2. Integrate with SharePoint list (team members)<br/>
        3. Add Power BI embedded reports<br/>
        4. Create version control system<br/>
        5. Set up approval workflow<br/>
        6. Add digital signatures<br/>
        7. Create multi-language version<br/>
        <br/>
        <b>Level 4: Portfolio Development</b><br/>
        1. Create personal branding package<br/>
        2. Design matching business cards<br/>
        3. Create email signature template<br/>
        4. Design PowerPoint template<br/>
        5. Create Excel report template<br/>
        6. Build style guide document<br/>
        7. Record tutorial video of your process
    </div>
    
    <b>Real-World Application:</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>After completing this project, you could:</b><br/>
        1. Freelance creating company profiles ($500-$2000 per project)<br/>
        2. Offer document automation services to small businesses<br/>
        3. Create templates for sale on marketplaces<br/>
        4. Teach Word skills to office teams<br/>
        5. Improve efficiency in your current job<br/>
        6. Add to portfolio for job applications<br/>
        7. Start a blog about document productivity
    </div>
</div>

<hr/>

<div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3>🎉 Module 2 Complete! Congratulations!</h3>
    
    <b>You Now Master:</b>
    <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
        <b>Foundation Skills:</b><br/>
        • Professional document creation<br/>
        • Advanced formatting with styles<br/>
        • Table and graphic integration<br/>
        • Page layout and design<br/>
        <br/>
        <b>Advanced Skills:</b><br/>
        • Mail merge for mass communication<br/>
        • Automatic references and citations<br/>
        • Collaboration and review tools<br/>
        • Document protection and security<br/>
        <br/>
        <b>Professional Skills:</b><br/>
        • Office etiquette and communication<br/>
        • Project management for documents<br/>
        • Quality assurance processes<br/>
        • Portfolio development
    </div>
    
    <p><b>Next Steps:</b></p>
    <ul>
        <li><b>Week 5:</b> Microsoft Excel - Data Power (Module 3 begins)</li>
        <li><b>Practice:</b> Use these skills in real documents immediately</li>
        <li><b>Portfolio:</b> Add this project with reflection to your portfolio</li>
        <li><b>Certification:</b> Consider Microsoft Office Specialist (MOS) certification</li>
        <li><b>Application:</b> Look for ways to automate documents at work/school</li>
    </ul>
    
    <p><b>Career Pathways Enabled:</b></p>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        • Administrative Assistant → Executive Assistant<br/>
        • Data Entry Clerk → Document Specialist<br/>
        • Student → Technical Writer<br/>
        • Office Worker → Document Automation Consultant<br/>
        • Entrepreneur → Business Document Creator<br/>
        • Teacher → Educational Materials Developer
    </div>
    
    <p><b>Final Words of Wisdom:</b><br/>
    "The difference between an amateur document and a professional one isn't just appearance—it's in the underlying structure, automation, and attention to detail that makes it powerful, maintainable, and scalable."</p>
    
    <p><b>Resources for Continued Learning:</b><br/>
    • <a href="https://support.microsoft.com/en-us/word" target="_blank">Microsoft Word Official Support</a><br/>
    • <a href="https://www.microsoft.com/en-us/learning/mos-certification.aspx" target="_blank">MOS Certification</a><br/>
    • <a href="https://www.lynda.com/Word-training-tutorials/280-0.html" target="_blank">LinkedIn Learning Word Courses</a><br/>
    • <a href="https://www.wordtips.com/" target="_blank">Word Tips & Tricks Blog</a><br/>
    • <a href="https://www.reddit.com/r/word/" target="_blank">Word Community on Reddit</a></p>
    
    <p style="text-align: center; font-size: 1.2em; color: #4a6fa5; margin-top: 20px;">
        <b>👏 Well done on completing Microsoft Word Mastery! 👏<br/>
        Ready to conquer Excel in Module 3?</b>
    </p>
</div>`
            },

            "5-1": {
                "icon": "fas fa-table",
                "title": "Excel Basics: Cells, Rows & The Grid",
                "html": `<h1>Week 5, Day 1: Excel Basics - Cells, Rows & The Grid</h1>
    <p>Welcome to Microsoft Excel! Today we start our journey into the world of spreadsheets - learning the fundamental structure and capabilities that make Excel the most powerful data tool in the business world.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Digital Warehouse 📦</b><br/>
        Workbook: The entire warehouse building<br/>
        Worksheet: One floor of the warehouse<br/>
        Cells: Individual storage boxes<br/>
        Columns: Aisles (vertical) labeled A, B, C...<br/>
        Rows: Shelves (horizontal) labeled 1, 2, 3...<br/>
        Cell Address: The exact location (Aisle B, Shelf 3 = B3)<br/>
        Range: A group of boxes (A1:B5 = boxes from A1 to B5)<br/>
        Formula Bar: The label maker that shows what's inside each box
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Understanding the Excel interface and terminology</li>
        <li>Navigating cells, rows, and columns efficiently</li>
        <li>Entering and editing different data types</li>
        <li>Using selection techniques and ranges</li>
        <li>Basic formatting for readability</li>
        <li>Introduction to the Formula Bar</li>
        <li>Saving and organizing workbooks</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. The Excel Interface Breakdown</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Workbook vs Worksheet:</b><br/>
        • <b>Workbook:</b> The entire Excel file (.xlsx extension)<br/>
        • <b>Worksheet:</b> Individual tabs within the workbook (Sheet1, Sheet2, etc.)<br/>
        • A workbook can have multiple worksheets (like a binder with multiple pages)<br/>
        <br/>
        <b>2. The Grid System:</b><br/>
        • <b>Columns:</b> Vertical, labeled with letters (A, B, C... AA, AB... up to XFD = 16,384 columns)<br/>
        • <b>Rows:</b> Horizontal, labeled with numbers (1, 2, 3... up to 1,048,576 rows)<br/>
        • <b>Cells:</b> Intersection of a column and row (e.g., C5 = Column C, Row 5)<br/>
        • <b>Active Cell:</b> The currently selected cell (has a dark border)<br/>
        <br/>
        <b>3. Key Interface Elements:</b><br/>
        • <b>Name Box:</b> Shows address of active cell, can name ranges<br/>
        • <b>Formula Bar:</b> Shows content/formula of active cell<br/>
        • <b>Sheet Tabs:</b> Navigation between worksheets<br/>
        • <b>Status Bar:</b> Bottom info (sum, average, count of selected cells)<br/>
        • <b>Quick Access Toolbar:</b> Customizable shortcuts<br/>
        • <b>Ribbon:</b> Tabs with grouped commands
    </div>
    
    <b>b. Essential Navigation Shortcuts</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Basic Movement:<br/>
            • Arrow keys: Move one cell in any direction<br/>
            • Enter: Move down one cell<br/>
            • Tab: Move right one cell<br/>
            • Shift+Tab: Move left one cell<br/>
            • Home: Move to beginning of row (Column A)<br/>
            • Ctrl+Home: Go to cell A1<br/>
            • Ctrl+End: Go to last used cell<br/>
            • Page Down/Up: Move one screen down/up<br/>
            • Alt+Page Down/Up: Move one screen right/left<br/>
            <br/>
            // Selection Shortcuts:<br/>
            • Click cell: Select single cell<br/>
            • Click + Drag: Select range of cells<br/>
            • Shift+Arrow: Extend selection<br/>
            • Ctrl+Click: Select non-adjacent cells<br/>
            • Click column letter: Select entire column<br/>
            • Click row number: Select entire row<br/>
            • Ctrl+A: Select entire worksheet<br/>
            • Ctrl+Space: Select entire column of active cell<br/>
            • Shift+Space: Select entire row of active cell<br/>
            <br/>
            // Navigation Efficiency:<br/>
            • F5 (Go To): Jump to specific cell or named range<br/>
            • Ctrl+G: Same as F5 (Go To)<br/>
            • Ctrl+[arrow key]: Jump to edge of data region<br/>
            • Ctrl+Shift+[arrow key]: Select to edge of data region
        </pre>
    </div>
    
    <b>c. Entering Different Data Types</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Data Type</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Examples</th>
                <th style="padding: 10px; border: 1px solid #ddd;">How Excel Handles It</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Common Issues</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Text (Labels)</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">"January", "Product A", "Total"</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Left-aligned by default<br/>Cannot do math on text</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Numbers stored as text (green triangle)</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Numbers (Values)</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">123, 45.67, -89</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Right-aligned by default<br/>Can do calculations</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Leading zeros disappear (001 → 1)</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Dates & Times</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">1/15/2024, 14:30, 1/15/24 2:30 PM</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Stored as serial numbers<br/>Can do date calculations</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Regional date format confusion</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Currency</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">$99.99, €50.00, ¥1000</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Special number format<br/>Automatic currency symbol</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Wrong currency symbol</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Percentages</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">15%, 0.25 (shows as 25%)</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Decimal numbers × 100<br/>With % symbol</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Entering 15 vs 0.15 for 15%</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Formulas</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">=A1+B1, =SUM(C2:C10)</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Start with = sign<br/>Calculate results</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Missing = sign (#NAME? error)</td>
            </tr>
        </table>
    </div>
    
    <hr/>
    
    <b>d. The Formula Bar: Your Window into Excel's Brain</b>
    
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // What the Formula Bar Shows:<br/>
            1. <b>For Text/Number cells:</b> The actual value<br/>
               • Cell shows: $99.99<br/>
               • Formula Bar shows: 99.99 (the number behind the formatting)<br/>
            <br/>
            2. <b>For Date cells:</b> The serial number<br/>
               • Cell shows: 1/15/2024<br/>
               • Formula Bar shows: 45291 (Excel's date serial number)<br/>
            <br/>
            3. <b>For Formula cells:</b> The formula itself<br/>
               • Cell shows: 150 (the result)<br/>
               • Formula Bar shows: =A1+B1 (the calculation)<br/>
            <br/>
            // Formula Bar Components:<br/>
            • <b>Name Box:</b> Left side, shows cell address or range name<br/>
            • <b>Insert Function (fx):</b> Opens function wizard<br/>
            • <b>Expand/Collapse:</b> Arrow to show more/less of formula<br/>
            • <b>Enter/Cancel:</b> Check/X marks to confirm/cancel edits<br/>
            <br/>
            // Why It Matters:<br/>
            • See what's REALLY in a cell (not just how it looks)<br/>
            • Edit long text that doesn't fit in cell<br/>
            • Debug formulas by seeing the actual formula<br/>
            • Understand date/time values (serial numbers)<br/>
            • Differentiate between value and formatting
        </pre>
    </div>
    
    <b>e. Cell Selection Techniques</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Selecting Ranges:</b><br/>
        • <b>Single range:</b> Click and drag from A1 to D10<br/>
        • <b>Multiple ranges:</b> Select first range, hold Ctrl, select next range<br/>
        • <b>Entire column:</b> Click column letter (A, B, C...)<br/>
        • <b>Entire row:</b> Click row number (1, 2, 3...)<br/>
        • <b>Entire sheet:</b> Click corner between A and 1 (or Ctrl+A)<br/>
        <br/>
        <b>2. Range Notation:</b><br/>
        • <b>A1:</b> Single cell<br/>
        • <b>A1:B5:</b> Rectangle from A1 to B5 (2 columns × 5 rows)<br/>
        • <b>A:A:</b> Entire column A<br/>
        • <b>1:1:</b> Entire row 1<br/>
        • <b>A1, C3, E5:</b> Non-adjacent cells (separated by commas)<br/>
        • <b>A1:B5 D4:F8:</b> Multiple ranges (separated by space = intersection)<br/>
        <br/>
        <b>3. Name Box Magic:</b><br/>
        1. Select range A1:D10<br/>
        2. Click in Name Box (left of formula bar)<br/>
        3. Type "SalesData" and press Enter<br/>
        4. Now you can type "SalesData" instead of "A1:D10" in formulas!<br/>
        <br/>
        <b>4. Go To Special:</b><br/>
        1. F5 → Special... (or Ctrl+G → Special)<br/>
        2. Select: Formulas, Comments, Blanks, Constants<br/>
        3. Great for finding all formulas or blank cells
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Navigation Mastery</b><br/>
        1. Open new workbook, save as "Navigation_Practice.xlsx"<br/>
        2. Practice these navigation sequences:<br/>
           • From A1: Right arrow 5 times, down arrow 10 times<br/>
           • From anywhere: Ctrl+Home, then Ctrl+End<br/>
           • Select cell M50 using Go To (F5)<br/>
           • From A1: Ctrl+→ (right arrow) to last column<br/>
           • From A1: Ctrl+↓ (down arrow) to last row<br/>
        <br/>
        <b>Part B: Data Entry Practice</b><br/>
        1. In Sheet1, create this table manually:<br/>
        <table style="width: 50%; border-collapse: collapse; margin: 10px;">
            <tr><td>A1: Product</td><td>B1: Price</td><td>C1: Quantity</td><td>D1: Date</td></tr>
            <tr><td>A2: Widget</td><td>B2: 19.99</td><td>C2: 50</td><td>D2: 1/15/2024</td></tr>
            <tr><td>A3: Gadget</td><td>B3: 29.99</td><td>C3: 25</td><td>D3: 1/16/2024</td></tr>
            <tr><td>A4: Doodad</td><td>B4: 9.99</td><td>C4: 100</td><td>D4: 1/17/2024</td></tr>
        </table>
        2. Observe how Excel treats each data type<br/>
        3. Check Formula Bar for each cell to see actual content<br/>
        <br/>
        <b>Part C: Selection Techniques</b><br/>
        1. Select the entire table (A1:D4)<br/>
        2. Select only the prices (B2:B4)<br/>
        3. Select non-adjacent cells: A2, C3, D4<br/>
        4. Name the range A1:D4 as "ProductTable"<br/>
        5. Use Go To to jump to "ProductTable"<br/>
        <br/>
        <b>Part D: Worksheet Management</b><br/>
        1. Rename Sheet1 to "Products"<br/>
        2. Add 2 new worksheets<br/>
        3. Rename them: "Sales" and "Inventory"<br/>
        4. Color code the tabs (right-click → Tab Color)<br/>
        5. Move "Inventory" tab to be first<br/>
        6. Delete Sheet2 and Sheet3
    </div>
    
    <hr/>
    
    <h3>Basic Formatting for Readability</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Essential Formatting Tools (Home Tab):</b><br/>
        
        <b>1. Font Formatting:</b><br/>
        • <b>Bold (Ctrl+B):</b> Headers and totals<br/>
        • <b>Italic (Ctrl+I):</b> Notes or secondary information<br/>
        • <b>Font Size:</b> 11pt for data, 12-14pt for headers<br/>
        • <b>Font Color:</b> Use sparingly for emphasis<br/>
        <br/>
        <b>2. Alignment:</b><br/>
        • Text: Left-aligned (default)<br/>
        • Numbers: Right-aligned (default)<br/>
        • Headers: Center-aligned often looks good<br/>
        • Merge & Center: For titles across multiple columns<br/>
        <br/>
        <b>3. Number Formatting:</b><br/>
        • <b>General:</b> Default (Excel decides)<br/>
        • <b>Number:</b> With commas, decimal places<br/>
        • <b>Currency:</b> $, €, £ symbols<br/>
        • <b>Accounting:</b> Currency aligned on decimal<br/>
        • <b>Date:</b> Various date formats<br/>
        • <b>Percentage:</b> Adds % symbol<br/>
        • <b>Text:</b> Treats everything as text<br/>
        <br/>
        <b>4. Cell Styles:</b><br/>
        • Pre-designed combinations<br/>
        • Consistent professional look<br/>
        • Use "Title", "Heading 1", "Total", etc.<br/>
        <br/>
        <b>5. Format Painter:</b><br/>
        • Click cell with desired format<br/>
        • Click Format Painter (paintbrush icon)<br/>
        • Click/drag over cells to apply same format
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 1 Assignment: Personal Budget Tracker</h4>
        
        <b>Task: Create a monthly personal budget spreadsheet from scratch</b><br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Worksheet 1: "Budget_January"</b><br/>
            1. Create the following structure:<br/>
            • A1: "Personal Budget - January 2024" (Merge & Center across A:D)<br/>
            • A3: "Category" (Bold, Center)<br/>
            • B3: "Planned" (Bold, Center)<br/>
            • C3: "Actual" (Bold, Center)<br/>
            • D3: "Difference" (Bold, Center)<br/>
            <br/>
            2. Enter these categories (rows 4-12):<br/>
            • Income: Salary<br/>
            • Income: Freelance<br/>
            • Expenses: Rent/Mortgage<br/>
            • Expenses: Utilities<br/>
            • Expenses: Groceries<br/>
            • Expenses: Transportation<br/>
            • Expenses: Entertainment<br/>
            • Expenses: Savings<br/>
            • Total<br/>
            <br/>
            3. Format appropriately:<br/>
            • Income rows: Green fill<br/>
            • Expense rows: Light red fill<br/>
            • Total row: Blue fill, bold<br/>
            • Currency columns: Accounting format ($)<br/>
            • Center align all headers<br/>
            <br/>
            4. Enter sample data:<br/>
            • Planned amounts (make realistic)<br/>
            • Actual amounts (different from planned)<br/>
            • Leave Difference column empty for now<br/>
            <br/>
            <b>Worksheet 2: "Instructions"</b><br/>
            • Create user instructions<br/>
            • Explain how to use the budget<br/>
            • List assumptions made<br/>
            <br/>
            <b>Worksheet 3: "Annual_Summary"</b><br/>
            • Create placeholder for all months<br/>
            • Just headers for now
        </div>
        
        <b>Technical Requirements:</b>
        <ul>
            <li>Use proper cell references (no hard-coded totals)</li>
            <li>Apply consistent formatting throughout</li>
            <li>Use at least 3 different number formats</li>
            <li>Name at least one range using Name Box</li>
            <li>Color code worksheet tabs</li>
            <li>Use cell styles for headers and totals</li>
            <li>Include comments in 3 cells explaining data</li>
        </ul>
        
        <b>Deliverables:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Excel file: "Personal_Budget_YourName.xlsx"<br/>
            2. PDF printout of Budget_January worksheet<br/>
            3. Screenshots showing:<br/>
               • Formula Bar displaying different data types<br/>
               • Named range in Name Box<br/>
               • Cell styles applied<br/>
               • Worksheet tab colors<br/>
            4. Reflection paragraph on what you learned
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1:</b><br/>
            • Add data validation for category column (drop-down list)<br/>
            • Use conditional formatting to highlight over-budget items<br/>
            • Create a custom number format for thousands (K)<br/>
            • Add sparklines for visual trends<br/>
            <br/>
            <b>Level 2:</b><br/>
            • Link the worksheets so totals flow through<br/>
            • Create a dashboard summary sheet<br/>
            • Add protection to prevent editing of formulas<br/>
            • Create templates for other months<br/>
            <br/>
            <b>Level 3:</b><br/>
            • Import actual bank data (if available)<br/>
            • Create dynamic charts that update with data<br/>
            • Add macro buttons for common tasks<br/>
            • Design for mobile viewing
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Excel Fundamentals Checklist</h3>
        
        <b>By the end of today, you should be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Navigate Excel without touching the mouse (keyboard shortcuts)<br/>
            ✅ Differentiate between workbook and worksheet<br/>
            ✅ Understand cell addressing (A1, B2, etc.)<br/>
            ✅ Enter all basic data types correctly<br/>
            ✅ Use the Formula Bar to see actual cell contents<br/>
            ✅ Select ranges using various techniques<br/>
            ✅ Apply basic formatting for readability<br/>
            ✅ Save and organize workbooks properly<br/>
            ✅ Name ranges using the Name Box<br/>
            ✅ Manage worksheets (rename, add, delete, color)
        </div>
        
        <p><b>Common Beginner Mistakes to Avoid:</b></p>
        <ul>
            <li><b>Typing numbers as text:</b> '001 becomes left-aligned text, not number 1</li>
            <li><b>Forgetting the = sign:</b> SUM(A1:A10) won't work, needs =SUM(A1:A10)</li>
            <li><b>Over-formatting:</b> Too many colors/fonts makes sheets hard to read</li>
            <li><b>Not using consistent structure:</b> Similar data should be organized similarly</li>
            <li><b>Ignoring the grid:</b> Every piece of data should have its own cell</li>
            <li><b>Hard-coding totals:</b> Always use formulas, never type calculated results</li>
            <li><b>Poor sheet names:</b> "Sheet1" tells you nothing - use descriptive names</li>
        </ul>
        
        <p><b>Pro Tips for Excel Success:</b></p>
        <ol>
            <li><b>Plan before you build:</b> Sketch your spreadsheet on paper first</li>
            <li><b>Be consistent:</b> Same column for same type of data across sheets</li>
            <li><b>Leave room to grow:</b> Don't pack data tightly - leave empty rows/columns</li>
            <li><b>Document your work:</b> Use comments and separate instruction sheets</li>
            <li><b>Save often:</b> Ctrl+S should become a reflex</li>
            <li><b>Use keyboard shortcuts:</b> They make you 10x faster</li>
            <li><b>Keep it simple:</b> Start basic, add complexity only when needed</li>
        </ol>
        
        <p><b>Tomorrow:</b> Basic Formulas - The Big 5 (SUM, AVERAGE, COUNT, MIN, MAX) and making Excel do calculations for you!</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/excel" target="_blank">Microsoft Excel Official Support</a><br/>
        • <a href="https://exceljet.net/keyboard-shortcuts" target="_blank">Excel Keyboard Shortcuts Guide</a><br/>
        • <a href="https://www.contextures.com/xlDataEntry01.html" target="_blank">Data Entry Best Practices</a><br/>
        • <a href="https://www.youtube.com/watch?v=rwbho0CgEAE" target="_blank">Excel Beginner Tutorial Video</a></p>
        
        <p style="text-align: center; font-size: 1.1em; color: #4a6fa5;">
            <b>Remember: Excel is not just a table-making tool.<br/>
            It's a data analysis powerhouse. Today you learned the foundation.<br/>
            Tomorrow, we unlock its calculating power! 💪</b>
        </p>
    </div>`
            },
            "5-2": {
                "icon": "fas fa-calculator",
                "title": "Basic Formulas - The Big 5",
                "html": `<h1>Week 5, Day 2: Basic Formulas - The Big 5</h1>
    <p>Today we unlock Excel's true power: calculations! You'll learn the five essential functions that form the foundation of all Excel analysis and how to make Excel do math for you automatically.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Math Assistant Robot 🤖</b><br/>
        = sign: The "Wake up!" command to Excel's brain<br/>
        SUM(): The adding machine (total everything up)<br/>
        AVERAGE(): The grade calculator (find the middle)<br/>
        COUNT(): The inventory counter (how many items?)<br/>
        MIN(): The pessimist (find the smallest)<br/>
        MAX(): The optimist (find the largest)<br/>
        Function Arguments: What you feed the robot to process<br/>
        AutoSum: Excel guessing what you want to calculate<br/>
        Formula Bar Editing: Adjusting the robot's instructions
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Understanding formula syntax and structure</li>
        <li>Using the SUM function for totals</li>
        <li>Calculating averages with AVERAGE</li>
        <li>Counting items with COUNT, COUNTA, and COUNTBLANK</li>
        <li>Finding minimum and maximum values</li>
        <li>Using AutoSum for quick calculations</li>
        <li>Combining functions in formulas</li>
        <li>Error checking and debugging formulas</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Formula Basics: The Rules of Engagement</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>The Golden Rule: Always Start with =</b><br/>
        • Without =, Excel thinks you're typing text: SUM(A1:A10)<br/>
        • With =, Excel calculates: =SUM(A1:A10)<br/>
        • The = sign tells Excel: "What follows is a calculation"<br/>
        <br/>
        <b>Formula Structure:</b><br/>
        =FUNCTION(argument1, argument2, ...)<br/>
        • <b>Function:</b> What calculation to perform (SUM, AVERAGE, etc.)<br/>
        • <b>Arguments:</b> What to calculate (cells, ranges, numbers)<br/>
        • <b>Parentheses:</b> Always required, even if no arguments<br/>
        <br/>
        <b>Entering Formulas:</b><br/>
        1. Click cell where result should appear<br/>
        2. Type = (equals sign)<br/>
        3. Type function name or select from suggestion list<br/>
        4. Select cells or type arguments<br/>
        5. Press Enter or click checkmark in Formula Bar<br/>
        <br/>
        <b>Formula vs Function:</b><br/>
        • <b>Formula:</b> Any calculation (can be simple: =A1+B1)<br/>
        • <b>Function:</b> Built-in calculation tools (=SUM(A1:A10))<br/>
        • All functions are formulas, but not all formulas use functions
    </div>
    
    <b>b. The Mighty SUM Function</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Basic Syntax:<br/>
            =SUM(number1, [number2], ...)<br/>
            • number1: Required - first number or range<br/>
            • [number2]: Optional - additional numbers/ranges<br/>
            • Can have up to 255 arguments!<br/>
            <br/>
            // Different Ways to Use SUM:<br/>
            1. <b>Sum individual cells:</b> =SUM(A1, A2, A3)<br/>
            2. <b>Sum a range:</b> =SUM(A1:A10)<br/>
            3. <b>Sum multiple ranges:</b> =SUM(A1:A10, C1:C10)<br/>
            4. <b>Sum with numbers:</b> =SUM(A1:A10, 100)<br/>
            5. <b>Sum non-adjacent cells:</b> =SUM(A1, A3, A5, A7)<br/>
            <br/>
            // What SUM Ignores:<br/>
            • Text cells: =SUM("Hello", 5, 10) returns 15 (ignores "Hello")<br/>
            • Logical values: =SUM(TRUE, 5) returns 5 (TRUE=1, but SUM ignores)<br/>
            • Empty cells: =SUM(A1, , A3) if A2 empty, just sums A1+A3<br/>
            <br/>
            // AutoSum Shortcut:<br/>
            1. Click below or to right of data<br/>
            2. Home tab → AutoSum (Σ) or Alt+=<br/>
            3. Excel guesses range, adjust if wrong<br/>
            4. Press Enter<br/>
            <br/>
            // Common SUM Errors:<br/>
            • #VALUE!: Trying to sum text that looks like numbers<br/>
            • Circular Reference: Formula includes its own cell<br/>
            • Wrong range: =SUM(A1:A) missing row number
        </pre>
    </div>
    
    <b>c. AVERAGE: Finding the Middle Ground</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>How AVERAGE Works:</b><br/>
        =AVERAGE(5, 10, 15) = (5+10+15) ÷ 3 = 10<br/>
        <br/>
        <b>Important Behavior:</b><br/>
        • Ignores empty cells: =AVERAGE(5, , 15) = (5+15) ÷ 2 = 10<br/>
        • Ignores text cells: =AVERAGE(5, "N/A", 15) = (5+15) ÷ 2 = 10<br/>
        • Includes zeros: =AVERAGE(5, 0, 10) = (5+0+10) ÷ 3 = 5<br/>
        <br/>
        <b>When NOT to Use AVERAGE:</b><br/>
        • When you need median (middle value) not mean<br/>
        • When zeros should be ignored (use AVERAGEIF)<br/>
        • When text "N/A" should be treated as zero<br/>
        <br/>
        <b>Related Functions:</b><br/>
        • <b>MEDIAN:</b> Finds middle value in set<br/>
          =MEDIAN(1, 2, 3, 100, 101) returns 3 (not affected by outliers)<br/>
        • <b>MODE:</b> Finds most frequent value<br/>
          =MODE(1, 2, 2, 3) returns 2<br/>
        • <b>AVERAGEA:</b> Includes text and logical values<br/>
          =AVERAGEA(5, "N/A", 15) = (5+0+15) ÷ 3 = 6.67 (treats "N/A" as 0)<br/>
        <br/>
        <b>Practical Example - Test Scores:</b><br/>
        A1:A10 has test scores (some students absent marked "ABSENT")<br/>
        =AVERAGE(A1:A10) gives average of only students who took test<br/>
        =AVERAGEA(A1:A10) gives average counting absent as zero (punishes absences)
    </div>
    
    <b>d. COUNT Family: The Census Takers</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // The COUNT Trio:<br/>
            1. <b>COUNT:</b> Counts only numbers<br/>
               =COUNT(A1:A10) → counts cells with numbers<br/>
               Ignores: text, dates (stored as numbers, so counts them!), blanks<br/>
            <br/>
            2. <b>COUNTA:</b> Counts non-empty cells<br/>
               =COUNTA(A1:A10) → counts anything not empty<br/>
               Counts: numbers, text, dates, formulas, logical values<br/>
               Ignores: truly empty cells only<br/>
            <br/>
            3. <b>COUNTBLANK:</b> Counts empty cells<br/>
               =COUNTBLANK(A1:A10) → counts empty cells<br/>
               Counts: cells with nothing, formulas returning ""<br/>
               <br/>
            // Quick Comparison:<br/>
            Range A1:A5 contains: 10, "N/A", 0, (empty), 20<br/>
            • COUNT: 3 (10, 0, 20)<br/>
            • COUNTA: 4 (10, "N/A", 0, 20)<br/>
            • COUNTBLANK: 1 (empty cell)<br/>
            <br/>
            // Practical Applications:<br/>
            • <b>Attendance:</b> =COUNTA(B2:B31) for days present<br/>
            • <b>Survey responses:</b> =COUNT(C2:C100) for numeric ratings<br/>
            • <b>Completion rate:</b> =COUNTA(D2:D50)/50*100 for percentage complete<br/>
            • <b>Missing data:</b> =COUNTBLANK(E2:E100) to find blanks<br/>
            <br/>
            // Specialized Counters:<br/>
            • <b>COUNTIF:</b> Count with condition (=COUNTIF(A1:A10, ">50"))<br/>
            • <b>COUNTIFS:</b> Count with multiple conditions<br/>
            • <b>COUNTUNIQUE:</b> Excel 365 - count distinct values
        </pre>
    </div>
    
    <b>e. MIN and MAX: The Extremes</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>MIN (Minimum):</b> Finds the smallest value<br/>
        • =MIN(5, 10, 2, 8) returns 2<br/>
        • Ignores text and empty cells<br/>
        • Useful for: lowest score, minimum temperature, cheapest price<br/>
        <br/>
        <b>MAX (Maximum):</b> Finds the largest value<br/>
        • =MAX(5, 10, 2, 8) returns 10<br/>
        • Ignores text and empty cells<br/>
        • Useful for: highest score, peak sales, maximum capacity<br/>
        <br/>
        <b>Working with Dates:</b><br/>
        • Dates are stored as numbers in Excel<br/>
        • =MIN(A1:A10) with dates finds earliest date<br/>
        • =MAX(A1:A10) with dates finds latest date<br/>
        <br/>
        <b>Range vs Array:</b><br/>
        • =MIN(A1, B1, C1) individual cells<br/>
        • =MIN(A1:C1) range (same result, easier)<br/>
        • =MIN(5, 10, A1, B1:C1) mixed arguments work!<br/>
        <br/>
        <b>Practical Example - Temperature Data:</b><br/>
        A2:A32: Daily high temperatures for January<br/>
        • =MAX(A2:A32) → Hottest day temperature<br/>
        • =MIN(A2:A32) → Coldest day temperature<br/>
        • =AVERAGE(A2:A32) → Average temperature<br/>
        • =COUNT(A2:A32) → Days with recorded temperatures<br/>
        <br/>
        <b>Finding Position (not just value):</b><br/>
        To find WHICH cell has the max value (not just the value):<br/>
        =MATCH(MAX(A1:A10), A1:A10, 0) returns position (row number)
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Student Gradebook</b><br/>
        1. Create new workbook "Gradebook_Practice.xlsx"<br/>
        2. Set up this structure:<br/>
        <table style="width: 70%; border-collapse: collapse; margin: 10px;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 5px;">A1: Student</th><th>B1: Test 1</th><th>C1: Test 2</th><th>D1: Test 3</th><th>E1: Total</th><th>F1: Average</th>
            </tr>
            <tr><td>A2: Alice</td><td>85</td><td>92</td><td>88</td><td></td><td></td></tr>
            <tr><td>A3: Bob</td><td>78</td><td>85</td><td>92</td><td></td><td></td></tr>
            <tr><td>A4: Carol</td><td>92</td><td>88</td><td>95</td><td></td><td></td></tr>
            <tr><td>A5: David</td><td>65</td><td>72</td><td>68</td><td></td><td></td></tr>
            <tr><td>A6: Eve</td><td>95</td><td>98</td><td>96</td><td></td><td></td></tr>
        </table>
        3. Calculate:<br/>
        • E2: =SUM(B2:D2) then copy down (AutoSum trick: select B2:D2, Alt+=)<br/>
        • F2: =AVERAGE(B2:D2) then copy down<br/>
        • B7: =MAX(B2:B6) (highest Test 1 score)<br/>
        • B8: =MIN(B2:B6) (lowest Test 1 score)<br/>
        • B9: =AVERAGE(B2:B6) (Test 1 average)<br/>
        • B10: =COUNT(B2:B6) (students who took Test 1)<br/>
        <br/>
        <b>Part B: Sales Dashboard</b><br/>
        1. New worksheet "Sales"<br/>
        2. Create monthly sales data (Jan-Dec in A2:A13, sales in B2:B13)<br/>
        3. Calculate:<br/>
        • Total annual sales: =SUM(B2:B13)<br/>
        • Average monthly sales: =AVERAGE(B2:B13)<br/>
        • Best month sales: =MAX(B2:B13)<br/>
        • Worst month sales: =MIN(B2:B13)<br/>
        • Months with data: =COUNTA(B2:B13)<br/>
        • Months with no sales (0): =COUNTIF(B2:B13, 0)<br/>
        <br/>
        <b>Part C: Function Arguments Dialog</b><br/>
        1. Click cell, type =SUM(<br/>
        2. Press Ctrl+A to open Function Arguments dialog<br/>
        3. Use mouse to select range (watch Number1 update)<br/>
        4. Click OK, observe formula<br/>
        5. Repeat with AVERAGE, COUNT, MIN, MAX
    </div>
    
    <hr/>
    
    <h3>Combining Functions & Formula Efficiency</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Nested Calculations (Doing Math on Results):</b><br/>
        • Instead of: =SUM(B2:B10) in C1, then =C1/COUNT(B2:B10) in C2<br/>
        • Do directly: =SUM(B2:B10)/COUNT(B2:B10)<br/>
        • Example: Average excluding zeros: =SUM(B2:B10)/COUNTIF(B2:B10, "<>0")<br/>
        <br/>
        <b>2. Using Multiple Functions Together:</b><br/>
        • Total range minus outliers: =SUM(B2:B100)-MIN(B2:B100)-MAX(B2:B100)<br/>
        • Average of top 3 scores: =(MAX(B2:B10)+LARGE(B2:B10,2)+LARGE(B2:B10,3))/3<br/>
        • Percentage of non-blanks: =COUNTA(A2:A100)/ROWS(A2:A100)*100<br/>
        <br/>
        <b>3. The Status Bar Trick:</b><br/>
        1. Select any range of numbers<br/>
        2. Look at Excel's Status Bar (bottom right)<br/>
        3. Shows: Average, Count, Sum automatically!<br/>
        4. Right-click Status Bar to choose what displays<br/>
        <br/>
        <b>4. Efficient Formula Entry:</b><br/>
        • Type = then first few letters, press Tab to accept suggestion<br/>
        • Use arrow keys while typing formula to select cells<br/>
        • F4 to toggle reference types (more tomorrow)<br/>
        • Ctrl+Enter to enter same formula in multiple cells<br/>
        <br/>
        <b>5. Formula AutoComplete:</b><br/>
        • Type =S → see all S functions<br/>
        • Use arrow keys, Tab to select<br/>
        • See description at bottom of list<br/>
        • Great for discovering new functions
    </div>
    
    <hr/>
    
    <h3>Error Checking & Debugging</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Common Formula Errors:</b><br/>
        
        <b>1. #DIV/0! (Divide by Zero):</b><br/>
        • Problem: =A1/B1 when B1 is 0 or empty<br/>
        • Fix: =IFERROR(A1/B1, 0) or =IF(B1=0, 0, A1/B1)<br/>
        <br/>
        <b>2. #VALUE! (Wrong Data Type):</b><br/>
        • Problem: =SUM(A1, "Text", B1)<br/>
        • Fix: Ensure all arguments are numbers or ranges with numbers<br/>
        • Check for text that looks like numbers: '123 (apostrophe hidden)<br/>
        <br/>
        <b>3. #NAME? (Misspelled Function):</b><br/>
        • Problem: =SUMM(A1:A10) (extra M)<br/>
        • Fix: =SUM(A1:A10)<br/>
        • Use Formula AutoComplete to avoid typos<br/>
        <br/>
        <b>4. Circular Reference (Self-Reference):</b><br/>
        • Problem: In A1: =SUM(A1:A10) (includes itself!)<br/>
        • Excel shows warning, result may be 0 or incorrect<br/>
        • Fix: Change range: =SUM(A2:A10)<br/>
        <br/>
        <b>5. Parentheses Mismatch:</b><br/>
        • Problem: =SUM(A1:A10 (missing closing )<br/>
        • Excel usually auto-corrects, but can cause confusion<br/>
        • Fix: Count parentheses - should be equal opens and closes<br/>
        <br/>
        <b>Debugging Tools:</b><br/>
        • <b>Evaluate Formula:</b> Formulas tab → Evaluate Formula (step through calculation)<br/>
        • <b>Trace Precedents/Dependents:</b> Arrows showing cell relationships<br/>
        • <b>Show Formulas:</b> Ctrl+ '(backtick) to see all formulas,
                        not results < br / > • < b > Error Checking: < /b> Formulas tab → Error Checking <
                            /div>

                            <
                            hr / >

                            <
                            div class = "assignment-box" >
                            <
                            h4 > Day 2 Assignment: Business Financial Report < /h4>

                            <
                            b > Task: Create a complete quarterly financial report using all Big 5 functions < /b><br/ > < br / >

                            <
                            div style = "background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;" >
                            <
                            b > Worksheet 1: "Q1_Sales" < /b><br/ >
                            Create a detailed sales report
                        for January - March: < br / >
                            1. Row 1: "Q1 Sales Report - 2024"(Merge A1: G1) < br / >
                            2. Row 3 headers: A3 = "Product",
                        B3 = "Jan",
                        C3 = "Feb",
                        D3 = "Mar",
                        E3 = "Q1 Total",
                        F3 = "Monthly Avg",
                        G3 = "Rank" < br / >
                        3. Products(rows 4 - 10): Laptop,
                        Desktop,
                        Tablet,
                        Phone,
                        Accessories,
                        Software,
                        Services < br / >
                        4. Enter realistic sales numbers($000s): 45,
                        62,
                        38,
                        etc. < br / >
                        5. Calculate: < br / > •E4: = SUM(B4: D4)(Q1 total
                            for Laptop) < br / > •F4: = AVERAGE(B4: D4)(Monthly average) < br / > •G4: = RANK(E4, $E$4: $E$10)(Rank by total sales - peek at tomorrow 's $)<br/>•
                            Copy formulas down rows 4 - 10 < br / >
                            6. Summary section(rows 12 - 20): < br / > •B12: = SUM(B4: B10)(Total Jan sales) < br / > •B13: = AVERAGE(B4: B10)(Average product sales in Jan) < br / > •B14: = MAX(B4: B10)(Best selling product in Jan) < br / > •B15: = MIN(B4: B10)(Worst selling product in Jan) < br / > •B16: = COUNT(B4: B10)(Number of products) < br / > •B17: = COUNTIF(B4: B10, ">50")(Products over $50K) < br / > •Repeat
                            for Feb and Mar columns < br / >
                            <
                            br / >
                            <
                            b > Worksheet 2: "Expenses" < /b><br/ >
                            Track business expenses: < br / >
                            1. Categories: Rent, Utilities, Salaries, Marketing, Supplies, Travel, Training < br / >
                            2. Three months(Jan - Mar) with varying amounts < br / >
                            3. Calculate: Monthly totals, category totals, averages < br / >
                            4. Find: Highest expense category, lowest expense month < br / >
                            <
                            br / >
                            <
                            b > Worksheet 3: "Profit_Summary" < /b><br/ >
                            1. Link data from Sales and Expenses sheets < br / >
                            2. Calculate monthly profit: = Sales!B12 - Expenses!B8(example) < br / >
                            3. Use Big 5 on profit data: < br / > •Total Q1 profit < br / > •Average monthly profit < br / > •Best profit month < br / > •Worst profit month < br / > •Count profitable months(profit > 0) <
                            /div>

                            <
                            b > Technical Requirements: < /b> <
                            ul >
                            <
                            li > Use ALL Big 5 functions at least once each < /li> <
                            li > Use AutoSum
                            for at least 3 calculations < /li> <
                            li > Use Function Arguments dialog
                            for 2 complex formulas < /li> <
                            li > Include at least one combined
                            function formula < /li> <
                            li > Use proper number formatting($, commas, decimals) < /li> <
                            li > Name at least one range in each worksheet < /li> <
                            li > Add comments explaining 3 complex formulas < /li> <
                            /ul>

                            <
                            b > Deliverables: < /b> <
                            div style = "background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;" >
                            1. Excel file: "Financial_Report_YourName.xlsx" < br / >
                            2. PDF showing formulas(Ctrl + ' view)<br/>
            3. Screenshots demonstrating:<br/>
               • AutoSum in action<br/>
               • Function Arguments dialog<br/>
               • Status bar showing multiple calculations<br/>
               • Error checking on a deliberate error<br/>
            4. Written explanation of:<br/>
               • How SUM ignores text vs AVERAGE<br/>
               • Difference between COUNT and COUNTA<br/>
               • When to use MIN/MAX vs SMALL/LARGE<br/>
               • One real-world business use for each function
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1 - Efficiency:</b><br/>
            • Use Table formatting for automatic expansion<br/>
            • Create named ranges for all summary areas<br/>
            • Use structured references in formulas<br/>
            • Add sparklines for visual trend analysis<br/>
            <br/>
            <b>Level 2 - Advanced Calculations:</b><br/>
            • Calculate weighted average (some products more important)<br/>
            • Find standard deviation of sales (how consistent?)<br/>
            • Calculate month-over-month growth percentages<br/>
            • Use IF with Big 5 for conditional calculations<br/>
            <br/>
            <b>Level 3 - Dashboard Creation:</b><br/>
            • Create summary dashboard with all key metrics<br/>
            • Use formulas to automatically highlight best/worst<br/>
            • Add dynamic charts linked to calculations<br/>
            • Create scenario analysis (what-if different numbers)
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 The Big 5 Mastery Checklist</h3>
        
        <b>You should now be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Write any formula starting with =<br/>
            ✅ Use SUM to total any range of numbers<br/>
            ✅ Calculate averages with AVERAGE<br/>
            ✅ Choose between COUNT, COUNTA, and COUNTBLANK<br/>
            ✅ Find minimum and maximum values<br/>
            ✅ Use AutoSum for instant calculations<br/>
            ✅ Combine multiple functions in one formula<br/>
            ✅ Read and fix common formula errors<br/>
            ✅ Use Function Arguments dialog properly<br/>
            ✅ Understand what each function ignores/includes
        </div>
        
        <p><b>Real-World Applications:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Function</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Business Use</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Personal Use</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>SUM</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Total revenue, expenses, inventory value</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Monthly bills total, vacation budget</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>AVERAGE</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Average sale price, employee performance</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Grade point average, monthly spending</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>COUNT</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Number of transactions, products sold</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Days exercised, books read</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>MIN</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Lowest bid, minimum stock level</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Lowest gas price, cheapest option</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>MAX</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Highest sales, peak demand</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Highest score, most expensive item</td>
            </tr>
        </table>
        
        <p><b>Pro Tips for Formula Success:</b></p>
        <ol>
            <li><b>Test with small data first:</b> Try formulas on 3-5 cells before applying to 3000</li>
            <li><b>Use named ranges:</b> =SUM(Sales_Q1) is clearer than =SUM(B2:B100)</li>
            <li><b>Check the Status Bar:</b> Select data first to verify your mental calculation</li>
            <li><b>Document complex formulas:</b> Add comments explaining what they do</li>
            <li><b>Use Ctrl+'
                                frequently: < /b> Toggle between values and formulas to debug</li >
                                <
                                li > < b > Break down complex calculations: < /b> Use helper columns if formula gets too long</li >
                                <
                                li > < b > Remember the order of operations: < /b> PEMDAS applies in Excel too!</li >
                                <
                                /ol>

                                <
                                p > < b > Tomorrow: < /b> Cell Referencing Magic - Relative vs Absolute references (the $ sign mystery solved!) and how to copy formulas without breaking them.</p >

                                <
                                p > < b > Resources: < /b><br/ > • < a href = "https://support.microsoft.com/en-us/office/excel-functions-by-category-5f91f4e9-7b42-46d2-9bd1-63f26a86c0eb"
                                target = "_blank" > Excel Functions by Category < /a><br/ > • < a href = "https://exceljet.net/excel-functions"
                                target = "_blank" > Excel Function Guide with Examples < /a><br/ > • < a href = "https://www.ablebits.com/office-addins-blog/2015/12/16/excel-sum-formulas-tips/"
                                target = "_blank" > SUM Formula Tips and Tricks < /a><br/ > • < a href = "https://www.youtube.com/watch?v=1oSGBfBcCvI"
                                target = "_blank" > Big 5 Functions Tutorial Video < /a></p >

                                <
                                p style = "text-align: center; font-size: 1.1em; color: #4a6fa5;" >
                                <
                                b > Remember: These 5 functions are used in 80 % of all Excel worksheets. < br / >
                                Master them, and you 've mastered the foundation of business analytics! 📊</b> <
                                /p> <
                                /div>`
            },
            "5-3": {
                "icon": "fas fa-dollar-sign",
                "title": "Cell Referencing - Relative vs Absolute",
                "html": `<h1>Week 5, Day 3: Cell Referencing - Relative vs Absolute</h1>
    <p>Today we solve one of Excel's greatest mysteries: the $ sign! You'll learn how cell references work when copying formulas and how to control exactly what changes (and what doesn't) when formulas move.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Address System 🏠</b><br/>
        Relative Reference (A1): "Two houses to the left" - changes when you move<br/>
        Absolute Reference ($A$1): "123 Main Street" - never changes<br/>
        Mixed Reference ($A1 or A$1): "Same row, different column" or vice versa<br/>
        F4 Key: The reference type switcher (cycle through options)<br/>
        Copy/Paste Formulas: Moving instructions to new locations<br/>
        Fill Handle: The formula duplicator (small square at cell corner)<br/>
        Circular Reference: Telling someone to ask yourself (creates loop)
    </div>
       <h3>Key Topics</h3>
    <ul>    <li>Understanding relative references (default behavior)</li>
        <li>Using absolute references with $ signs</li>
        <li>Mixed references for flexible formulas</li>
        <li>The F4 key reference cycling trick</li>
        <li>Copying formulas with different reference types</li>
        <li>Common use cases for each reference type</li>
        <li>Debugging reference errors</li>
        <li>Best practices for reference management</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Relative References: The "Follow Me" Behavior</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Default Excel Behavior:</b><br/>
        When you copy a formula, Excel adjusts the references RELATIVE to the new location.<br/>
        <br/>
        <b>Example - The Problem:</b><br/>
        1. In B2: =A2*10 (multiply cell to the left by 10)<br/>
        2. Copy B2 down to B3<br/>
        3. B3 becomes: =A3*10 (automatically adjusted!)<br/>
        <br/>
        <b>How It Works:</b><br/>
        Think in terms of position, not absolute addresses:<br/>
        • "Take the cell one column to the left"<br/>
        • Not "Take cell A2 specifically"<br/>
        <br/>
        <b>The Mental Model:</b><br/>
        Original formula in B2: "Look left one column, same row"<br/>
        When copied to C3: "Look left one column, same row" = B3<br/>
        When copied to D4: "Look left one column, same row" = C4<br/>
        <br/>
        <b>Why Relative is Default:</b><br/>
        • Most common use case: applying same calculation down a column<br/>
        • Saves time: write once, copy many times<br/>
        • Flexible: works with different data sets<br/>
        <br/>
        <b>When Relative Works Perfectly:</b><br/>
        • Calculating totals for each row<br/>
        • Applying same percentage increase to all items<br/>
        • Converting units for a list<br/>
        • Any "do the same thing to each row/column" scenario
    </div>
    
    <b>b. Absolute References: The "Stay There" Command</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // The $ Sign Syntax:<br/>
            $A$1 = Absolute column AND row (completely fixed)<br/>
            • Column A is locked with $ before A<br/>
            • Row 1 is locked with $ before 1<br/>
            • No matter where you copy it, it always refers to A1<br/>
            <br/>
            // When You Need Absolute References:<br/>
            <b>Scenario:</b> Calculate sales tax for all products<br/>
            • Tax rate is in cell B1 (7.5%)<br/>
            • Prices are in column A (A2:A100)<br/>
            • Tax amounts should go in column B<br/>
            <br/>
            <b>WRONG (relative):</b> In B2: =A2*B1, then copy down<br/>
            • B3 becomes: =A3*B2 (B2 is price, not tax rate!)<br/>
            • B4 becomes: =A4*B3 (wrong again!)<br/>
            <br/>
            <b>RIGHT (absolute):</b> In B2: =A2*$B$1, then copy down<br/>
            • B3 becomes: =A3*$B$1 (tax rate stays at B1!)<br/>
            • B4 becomes: =A4*$B$1 (perfect!)<br/>
            <br/>
            // The F4 Key Magic:<br/>
            1. Type =A2*B1<br/>
            2. Click on B1 in the formula (or place cursor next to B1)<br/>
            3. Press F4 once: =A2*$B$1 (absolute)<br/>
            4. Press F4 again: =A2*B$1 (mixed - row absolute)<br/>
            5. Press F4 again: =A2*$B1 (mixed - column absolute)<br/>
            6. Press F4 again: =A2*B1 (back to relative)<br/>
            7. Cycle continues...<br/>
            <br/>
            // Visual Cues:<br/>
            • In formula bar, $ signs show in colored reference<br/>
            • When editing, F4 highlights which part is locked<br/>
            • Copied formulas with $ maintain the $ signs
        </pre>
    </div>
    
    <b>c. Mixed References: The "One Way Fixed" Solution</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Two Types of Mixed References:</b><br/>
        
        <b>1. Column Absolute, Row Relative: $A1</b><br/>
        • Column A is locked ($A)<br/>
        • Row number can change (1 without $)<br/>
        • Use when: Going across columns, staying in same column<br/>
        <br/>
        <b>Example - Multiplication Table:</b><br/>
        • Create 10×10 multiplication table<br/>
        • In B2 (first calculation cell): =$A2*B$1<br/>
        • Copy across and down:<br/>
          - $A2: Column A fixed, row changes (1,2,3... down column A)<br/>
          - B$1: Row 1 fixed, column changes (B,C,D... across row 1)<br/>
        • B3 becomes: =$A3*C$1 (perfect!)<br/>
        <br/>
        <b>2. Row Absolute, Column Relative: A$1</b><br/>
        • Row 1 is locked ($1)<br/>
        • Column letter can change (A without $)<br/>
        • Use when: Going down rows, staying in same row<br/>
        <br/>
        <b>Example - Commission Calculation:</b><br/>
        • Sales in column B (B2:B100)<br/>
        • Commission rates in row 1 (C1, D1, E1 for different products)<br/>
        • Commission in column C: =B2*C$1<br/>
        • Copy down: Each row uses its sales × rate from row 1<br/>
        • Copy across to D for next product: =B2*D$1<br/>
        <br/>
        <b>How to Decide Which to Use:</b><br/>
        1. Ask: "When I copy this formula..."<br/>
        2. Should the COLUMN stay the same? Yes → $ before letter<br/>
        3. Should the ROW stay the same? Yes → $ before number<br/>
        4. Neither stay same? No $ signs (relative)<br/>
        5. Both stay same? $ before both (absolute)<br/>
        <br/>
        <b>Memory Trick:</b> "Dollar sign before the part that DOESN'T move"
    </div>
    
    <b>d. Practical Examples & Use Cases</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Example 1: Price List with Tax and Discount<br/>
            A2:A50: Product prices<br/>
            B1: Tax rate (7.5%)<br/>
            C1: Discount rate (10%)<br/>
            <br/>
            // Formulas:<br/>
            B2 (Tax amount): =$A2*$B$1  // Price × Tax rate (tax rate fixed)<br/>
            C2 (Discount amount): =$A2*$C$1  // Price × Discount rate<br/>
            D2 (Final price): =$A2+B2-C2  // Price + Tax - Discount<br/>
            Copy all down: Works perfectly!<br/>
            <br/>
            // Example 2: Budget Allocation Matrix<br/>
            Departments in column A (A2:A10)<br/>
            Months in row 1 (B1:M1)<br/>
            Allocation % in N2:N10 (per department)<br/>
            Total budget in B11 (January total)<br/>
            <br/>
            // Formula in B2 (Jan, Dept1): =$B$11*$N2  // Total × Dept %<br/>
            // Copy across to C2 (Feb, Dept1): =$C$11*$N2  // Feb total × Dept %<br/>
            // Copy down to B3 (Jan, Dept2): =$B$11*$N3  // Jan total × Dept2 %<br/>
            <br/>
            // Example 3: Currency Converter<br/>
            Prices in USD in column A (A2:A100)<br/>
            Exchange rates in row 1: B1=EUR, C1=GBP, D1=JPY<br/>
            <br/>
            // Formula in B2 (EUR price): =$A2*B$1  // USD price × EUR rate<br/>
            // Copy across: C2 becomes =$A2*C$1 (USD price × GBP rate)<br/>
            // Copy down: B3 becomes =$A3*B$1 (next USD price × EUR rate)<br/>
            <br/>
            // Example 4: Grade Weighting<br/>
            Test scores in B2:F50 (5 tests)<br/>
            Weights in B1:F1 (each test has different weight)<br/>
            <br/>
            // Weighted average in G2: =SUMPRODUCT(B2:F2, $B$1:$F$1)/SUM($B$1:$F$1)<br/>
            // Copy down: Weights stay fixed, scores change per student
        </pre>
    </div>
    
    <b>e. The Fill Handle & Copy/Paste Special</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. The Fill Handle (Little Square):</b><br/>
        • Hover over cell corner until cursor becomes black cross<br/>
        • Click and drag to copy formula<br/>
        • Excel adjusts references based on type (relative/absolute)<br/>
        • Double-click fill handle to copy down to last adjacent data<br/>
        <br/>
        <b>2. Copy/Paste Formulas:</b><br/>
        • Copy cell (Ctrl+C)<br/>
        • Select destination<br/>
        • Paste (Ctrl+V) - references adjust<br/>
        • Paste Special (Ctrl+Alt+V) → Formulas - copies only formulas<br/>
        <br/>
        <b>3. Copying Without Adjusting References:</b><br/>
        Sometimes you want EXACT same formula (no adjustment):<br/>
        1. Copy cell<br/>
        2. Select destination<br/>
        3. Click in Formula Bar<br/>
        4. Paste (Ctrl+V) - pastes exact text, not as formula<br/>
        5. Or: Edit original, remove =, copy, paste, add = back<br/>
        <br/>
        <b>4. Transposing References:</b><br/>
        Copying formulas from rows to columns or vice versa:<br/>
        • Usually works automatically with mixed references<br/>
        • Or use Paste Special → Transpose<br/>
        <br/>
        <b>5. Dragging with Right-Click:</b><br/>
        • Select cell(s)<br/>
        • Right-click on fill handle, drag, release<br/>
        • Menu appears: Copy Cells, Fill Series, Formatting Only, etc.<br/>
        • Choose "Fill Without Formatting" to keep destination formatting
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Multiplication Table Creation</b><br/>
        1. Create new workbook "References_Practice.xlsx"<br/>
        2. In Sheet1, create 10×10 multiplication table (1-10):<br/>
        • A2:A11: Numbers 1-10 (vertical)<br/>
        • B1:K1: Numbers 1-10 (horizontal)<br/>
        • B2 formula: =$A2*B$1 (mixed references!)<br/>
        • Copy B2 across to K2, then copy B2:K2 down to row 11<br/>
        • Verify: K11 should show 100 (10×10)<br/>
        • Try changing the formula to different reference types and see what breaks<br/>
        <br/>
        <b>Part B: Sales Commission Calculator</b><br/>
        1. New worksheet "Commission"<br/>
        2. Setup:<br/>
        • A2:A6: Salesperson names<br/>
        • B2:B6: Sales amounts ($1000, $2000, etc.)<br/>
        • D1: Commission rate (15%)<br/>
        • C2 formula: =B2*$D$1 (calculate commission)<br/>
        • Copy C2 down to C6<br/>
        3. Test absolute reference:<br/>
        • Change D1 to 20% - all commissions update!<br/>
        • Without $ signs, change would only affect first row<br/>
        <br/>
        <b>Part C: Expense Allocation</b><br/>
        1. New worksheet "Allocation"<br/>
        2. Department budgets (rows): Marketing, Sales, IT, HR<br/>
        3. Monthly allocation % (columns): Jan, Feb, Mar, Apr<br/>
        4. Total budget: $100,000 in cell A1<br/>
        5. Create formula that allocates budget by dept × month %<br/>
        6. Use mixed references so one formula works for entire table<br/>
        <br/>
        <b>Part D: F4 Key Practice</b><br/>
        1. In a blank cell, type =A1<br/>
        2. Click anywhere in "A1" in the formula<br/>
        3. Press F4 repeatedly, watch reference cycle:<br/>
           A1 → $A$1 → A$1 → $A1 → A1<br/>
        4. Type a longer formula: =SUM(A1:B10)<br/>
        5. Click in different parts of the range, press F4<br/>
        6. Notice you can make entire range absolute or parts of it
    </div>
    
    <hr/>
    
    <h3>Common Reference Errors & Debugging</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. #REF! Error (Invalid Reference):</b><br/>
        • Problem: =SUM(A1:A10) copied, becomes =SUM(B1:B10) but column B deleted<br/>
        • Shows: =SUM(#REF!)<br/>
        • Fix: Restore deleted cells or update formula<br/>
        • Prevention: Use absolute references for key cells<br/>
        <br/>
        <b>2. Circular Reference (Self-Reference):</b><br/>
        • Problem: In A1: =SUM(A1:A10) (includes itself!)<br/>
        • Excel warning appears<br/>
        • Calculation may be 0 or incorrect<br/>
        • Fix: Change to =SUM(A2:A10)<br/>
        <br/>
        <b>3. Wrong Results (No Error, Just Wrong):</b><br/>
        • Most dangerous - looks okay but wrong<br/>
        • Example: Tax calculation without $ on tax rate cell<br/>
        • Each row uses different "tax rate" (actually previous row's tax)<br/>
        • Fix: Audit formulas, check reference types<br/>
        • Use Trace Precedents (Formulas tab) to see references<br/>
        <br/>
        <b>4. Formula Copies But Doesn't Adjust:</b><br/>
        • Problem: Copied formula shows same cell references<br/>
        • Cause: Copied as text, not as formula<br/>
        • Fix: Ensure copying entire cell, not just formula bar text<br/>
        • Or: Copy, then Paste Special → Formulas<br/>
        <br/>
        <b>5. References Breaking When Inserting Rows/Columns:</b><br/>
        • Good news: Excel usually adjusts automatically!<br/>
        • Insert row above A1: =SUM(A1:A10) becomes =SUM(A2:A11)<br/>
        • Insert column left of A: =SUM(A1:A10) becomes =SUM(B1:B10)<br/>
        • Absolute references stay fixed: =SUM($A$1:$A$10) stays same<br/>
        <br/>
        <b>Debugging Tools:</b><br/>
        • <b>Trace Precedents:</b> Blue arrows showing where formula gets data<br/>
        • <b>Trace Dependents:</b> Arrows showing which cells use this cell<br/>
        • <b>Show Formulas:</b> Ctrl+ '
                                to see all formulas at once < br / > • < b > Evaluate Formula: < /b> Step through calculation step-by-step<br/ > • < b > Error Checking: < /b> Formulas tab → Error Checking <
                                    /div>

                                    <
                                    hr / >

                                    <
                                    h3 > Advanced Reference Techniques < /h3>

                                    <
                                    div style = "background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;" >
                                    <
                                    b > 1. 3 D References(Across Worksheets): < /b><br/ > •Sum same cell across multiple sheets: = SUM(Sheet1: Sheet3!A1) < br / > •All sheets between Sheet1 and Sheet3 included < br / > •Great
                                for monthly summaries: = SUM(Jan: Dec!B2) < br / >
                                    <
                                    br / >
                                    <
                                    b > 2. Structured References(Tables): < /b><br/ > •Convert range to Table(Ctrl + T) < br / > •Use column names in formulas: = SUM(Table1[Sales]) < br / > •Automatically adjusts as table grows < br / > •No need
                                for absolute references within tables! < br / >
                                <
                                br / >
                                <
                                b > 3. Named Ranges(The Ultimate Absolute): < /b><br/ > •Select cell or range < br / > •Name Box(left of formula bar),
                                type name,
                                Enter < br / > •Use in formulas: = A1 * TaxRate(instead of = A1 * $B$1) < br / > •Always acts as absolute reference < br / > •Self - documenting formulas < br / >
                                    <
                                    br / >
                                    <
                                    b > 4. OFFSET
                                for Dynamic Ranges: < /b><br/ > • = SUM(OFFSET(A1, 0, 0, 10, 1)) sums A1: A10 < br / > •Can make ranges that adjust based on other cells < br / > •Advanced but powerful
                                for dashboards < br / >
                                <
                                br / >
                                <
                                b > 5. INDIRECT
                                for Text - Based References: < /b><br/ > • = SUM(INDIRECT("A1:A10")) same as = SUM(A1: A10) < br / > •But "A1:A10"
                                can come from another cell! < br / > • = SUM(INDIRECT(B1)) where B1 contains "A1:A10" < br / > •Very powerful
                                for dynamic model building <
                                /div>

                                <
                                hr / >

                                <
                                div class = "assignment-box" >
                                <
                                h4 > Day 3 Assignment: Comprehensive Pricing Model < /h4>

                                    <
                                    b > Task: Create a complete product pricing model with multiple scenarios using all reference types < /b><br/ > < br / >

                                    <
                                    div style = "background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;" >
                                    <
                                    b > Worksheet 1: "Cost_Structure" < /b><br/ >
                                    Build a manufacturing cost calculator: < br / >
                                    1. Products in column A(A3: A10): Product1,
                                Product2,
                                etc. < br / >
                                2. Cost components in row 2(B2: F2): Materials,
                                Labor,
                                Overhead,
                                Packaging,
                                Shipping < br / >
                                3. Cost rates in row 1(B1: F1): $ rates per unit
                                for each component < br / >
                                4. Production volumes in column G(G3: G10): Units to produce < br / >
                                    5. Formulas needed: < br / > •B3(Materials cost
                                        for Product1): = $G3 * B$1(volume× material rate) < br / > •Copy B3 across and down to fill B3: F10 < br / > •G3(verify volume) is input only < br / > •H3(Total cost per product): = SUM(B3: F3) < br / > •I3(Cost per unit): = H3 / $G3 < br / >
                                    6. Summary at bottom: < br / > •Total materials cost: = SUM(B3: B10) with $
                                for column ? Row ? < br / > •Average cost per unit : = AVERAGE(I3: I10) < br / > •Most expensive product : = MAX(I3: I10) < br / >
                                    <
                                    br / >
                                    <
                                    b > Worksheet 2: "Pricing_Scenarios" < /b><br/ >
                                    Create different pricing scenarios: < br / >
                                    1. Base prices from Cost_Structure!I3: I10 < br / >
                                    2. Markup rates in row 1: B1 = 20 % ,
                                C1 = 30 % ,
                                D1 = 40 % ,
                                E1 = 50 % < br / >
                                3. Formula in B2(Product1, 20 % markup): = Cost_Structure!I3 * (1 + B$1) < br / >
                                    4. Copy across and down to fill matrix < br / >
                                    5. Add profit calculation: = Price - Cost_Structure!I3 < br / >
                                    6. Use conditional formatting to highlight best scenario per product < br / >
                                    <
                                    br / >
                                    <
                                    b > Worksheet 3: "Sensitivity_Analysis" < /b><br/ >
                                    What -
                                    if analysis with data tables: < br / >
                                    1. Vertical: Different production volumes(80 % , 90 % , 100 % , 110 % , 120 % of planned) < br / >
                                    2. Horizontal: Different markup percentages(15 % , 20 % , 25 % , 30 % , 35 % ) < br / >
                                    3. Center cell: Reference to total profit from best scenario < br / >
                                    4. Use Data Table feature(What - If Analysis) < br / >
                                    5. Create 2 - variable data table showing profit at each volume× markup combo < br / >
                                    <
                                    /div>

                                    <
                                    b > Technical Requirements: < /b> <
                                    ul >
                                    <
                                    li > Use all 3 reference types(relative, absolute, mixed) appropriately < /li> <
                                    li > Use F4 key to set references
                                for at least 5 formulas < /li> <
                                li > Create at least 3 named ranges and use them in formulas < /li> <
                                li > Use 3 D references to pull data between worksheets < /li> <
                                li > Create one formula that can be copied to fill an entire matrix < /li> <
                                li > Use Paste Special
                                for at least one operation < /li> <
                                li > Include error checking
                                for division by zero < /li> <
                                /ul>

                                <
                                b > Deliverables: < /b> <
                                    div style = "background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;" >
                                    1. Excel file: "Pricing_Model_YourName.xlsx" < br / >
                                    2. PDF showing formulas view(Ctrl + ')<br/>
            3. Screenshots demonstrating:<br/>
               • F4 key cycling through reference types<br/>
               • Trace Precedents showing formula dependencies<br/>
               • Mixed reference formula copied across matrix<br/>
               • Named ranges in use<br/>
            4. Written explanation of:<br/>
               • Why each reference type was used where<br/>
               • What would break if you used wrong reference type<br/>
               • How 3D references simplify multi-sheet models<br/>
               • Real-world business case for each reference type
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1 - Advanced Modeling:</b><br/>
            • Add currency conversion with dynamic exchange rates<br/>
            • Create scenario manager to switch between pricing strategies<br/>
            • Add volume discount calculations that change with order size<br/>
            • Use data validation for input cells<br/>
            <br/>
            <b>Level 2 - Dynamic Ranges:</b><br/>
            • Convert all data to Excel Tables<br/>
            • Use structured references in all formulas<br/>
            • Create dynamic named ranges using OFFSET<br/>
            • Build formulas that automatically expand with new products<br/>
            <br/>
            <b>Level 3 - Dashboard Integration:</b><br/>
            • Create summary dashboard with all key metrics<br/>
            • Use INDIRECT to make model sheet names dynamic<br/>
            • Add interactive controls (scroll bars, spinners)<br/>
            • Build Monte Carlo simulation for price sensitivity
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Reference Mastery Checklist</h3>
        
        <b>You should now be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Understand default relative reference behavior<br/>
            ✅ Use $ signs to create absolute references<br/>
            ✅ Create and use mixed references ($A1 and A$1)<br/>
            ✅ Use F4 key to cycle through reference types<br/>
            ✅ Predict how formulas will change when copied<br/>
            ✅ Choose correct reference type for different scenarios<br/>
            ✅ Debug #REF! and circular reference errors<br/>
            ✅ Use named ranges as absolute references<br/>
            ✅ Copy formulas using fill handle and paste special<br/>
            ✅ Build single formulas that work for entire tables
        </div>
        
        <p><b>Reference Type Decision Tree:</b></p>
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>When copying formulas, ask:</b><br/>
            1. <b>Should column stay same?</b><br/>
               • Yes → Use $ before column letter ($A1 or $A$1)<br/>
               • No → No $ before letter (A1 or A$1)<br/>
            <br/>
            2. <b>Should row stay same?</b><br/>
               • Yes → Use $ before row number (A$1 or $A$1)<br/>
               • No → No $ before number (A1 or $A1)<br/>
            <br/>
            3. <b>Result:</b><br/>
               • Both change: A1 (relative)<br/>
               • Column fixed, row changes: $A1 (mixed)<br/>
               • Row fixed, column changes: A$1 (mixed)<br/>
               • Both fixed: $A$1 (absolute)
        </div>
        
        <p><b>Real-World Application Examples:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Reference Type</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Business Use Case</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Formula Pattern</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Relative (A1)</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Row-by-row calculations (line item totals)</td>
                <td style="padding: 10px; border: 1px solid #ddd;">=B2*C2 (each row independent)</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Absolute ($A$1)</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Constants (tax rates, exchange rates)</td>
                <td style="padding: 10px; border: 1px solid #ddd;">=B2*$D$1 (all use same rate)</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Mixed ($A1)</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Lookup tables, matrix calculations</td>
                <td style="padding: 10px; border: 1px solid #ddd;">=VLOOKUP($A2, Data!$A:$B, 2, FALSE)</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Mixed (A$1)</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Headers, fixed row references</td>
                <td style="padding: 10px; border: 1px solid #ddd;">=B2*C$1 (multiply by header row)</td>
            </tr>
        </table>
        
        <p><b>Pro Tips for Reference Success:</b></p>
        <ol>
            <li><b>Plan before you write:</b> Sketch where formulas will be copied</li>
            <li><b>Test with a small sample:</b> Copy formula to 2-3 cells first to verify</li>
            <li><b>Use F4 religiously:</b> It's faster than typing $ signs</li>
            <li><b>Name your constants:</b> TaxRate is clearer than $B$1</li>
            <li><b>Check with Trace Precedents:</b> Visual confirmation of references</li>
            <li><b>Use Tables:</b> Eliminates most reference problems</li>
            <li><b>Document mixed references:</b> They're confusing to others (and future you!)</li>
            <li><b>When in doubt, use absolute:</b> Better wrong and obvious than wrong and hidden</li>
        </ol>
        
        <p><b>Tomorrow:</b> Data Visualization - Turning numbers into charts and graphs that tell compelling stories!</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/office/switch-between-relative-absolute-and-mixed-references-7afd590d-cf7b-43d6-9b5c-0c57d3e05d0b" target="_blank">Microsoft Reference Guide</a><br/>
        • <a href="https://www.excelcampus.com/keyboard-shortcuts/absolute-relative-references-f4/" target="_blank">F4 Key Tutorial</a><br/>
        • <a href="https://www.contextures.com/xlFunctions01.html#Absolute" target="_blank">Reference Examples</a><br/>
        • <a href="https://www.youtube.com/watch?v=KXOOmcCYoaw" target="_blank">Relative vs Absolute Video Tutorial</a></p>
        
        <p style="text-align: center; font-size: 1.1em; color: #4a6fa5;">
            <b>Remember: The $ sign isn't about money in Excel - it's about CONTROL.<br/>
            Control what changes and what stays the same when formulas move. 💰</b>
        </p>
    </div>`
            },
            "5-4": {
                "icon": "fas fa-chart-bar",
                "title": "Charts & Data Visualization",
                "html": `<h1>Week 5, Day 4: Charts & Data Visualization</h1>
    <p>Today we learn to turn numbers into stories! You'll master Excel's charting tools to create compelling visualizations that make data understandable, persuasive, and actionable for any audience.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Data Translator 📊</b><br/>
        Data Series: The characters in your story (what you're plotting)<br/>
        Chart Type: The genre of your story (bar, line, pie, etc.)<br/>
        Axes: The stage where characters perform (X and Y dimensions)<br/>
        Legend: The program explaining who's who<br/>
        Chart Elements: Props and scenery (titles, labels, gridlines)<br/>
        Chart Styles: The costume and set design<br/>
        Sparklines: Mini-stories inside cells<br/>
        Dynamic Charts: Stories that update automatically
    </div>
       <h3>Key Topics</h3>
    <ul>
        <li>Choosing the right chart type for your data</li>
        <li>Creating and customizing basic charts</li>
        <li>Understanding chart elements and formatting</li>
        <li>Using combo charts for mixed data types</li>
        <li>Creating sparklines for in-cell visualization</li>
        <li>Making charts dynamic with formulas</li>
        <li>Best practices for effective data visualization</li>
        <li>Preparing charts for presentation and printing</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Chart Selection: Right Tool for the Job</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>The Golden Rule: Show, Don't Just Tell</b><br/>
        Different charts answer different questions:<br/>
        <br/>
        <b>1. Comparison Charts (Which is bigger/smaller?):</b><br/>
        • <b>Column/Bar Charts:</b> Compare discrete categories<br/>
          &nbsp;&nbsp;✓ Sales by region, scores by student, revenue by product<br/>
          &nbsp;&nbsp;✗ Time series with many points, parts of a whole<br/>
        • <b>Clustered Columns:</b> Compare multiple series within categories<br/>
        • <b>Stacked Columns:</b> Show composition AND comparison<br/>
        <br/>
        <b>2. Trend Charts (How does it change over time?):</b><br/>
        • <b>Line Charts:</b> Show trends, changes over continuous time<br/>
          &nbsp;&nbsp;✓ Stock prices, temperature changes, website traffic<br/>
          &nbsp;&nbsp;✗ Few data points, categorical comparisons<br/>
        • <b>Area Charts:</b> Emphasize magnitude of change<br/>
        <br/>
        <b>3. Composition Charts (What are the parts of a whole?):</b><br/>
        • <b>Pie Charts:</b> Show percentages of a whole (use ≤6 slices!)<br/>
          &nbsp;&nbsp;✓ Market share, budget allocation, survey responses<br/>
          &nbsp;&nbsp;✗ Many categories, precise comparisons needed<br/>
        • <b>Donut Charts:</b> Multiple series as concentric rings<br/>
        • <b>Stacked Area/Bar:</b> Show composition changing over time<br/>
        <br/>
        <b>4. Relationship Charts (How are variables related?):</b><br/>
        • <b>Scatter Plots:</b> Show correlation between two variables<br/>
          &nbsp;&nbsp;✓ Height vs weight, advertising spend vs sales<br/>
          &nbsp;&nbsp;✗ Categorical data, time series<br/>
        • <b>Bubble Charts:</b> Scatter plot with third variable as bubble size<br/>
        <br/>
        <b>5. Distribution Charts (How is data spread?):</b><br/>
        • <b>Histograms:</b> Frequency distribution<br/>
        • <b>Box & Whisker:</b> Statistical distribution (min, max, median, quartiles)<br/>
        <br/>
        <b>Quick Decision Guide:</b><br/>
        1. Comparing values → Column/Bar<br/>
        2. Showing trends → Line<br/>
        3. Showing parts of whole → Pie/Donut<br/>
        4. Showing relationships → Scatter<br/>
        5. Showing distribution → Histogram
    </div>
    
    <b>b. Creating Your First Chart: Step-by-Step</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Example: Monthly Sales Data<br/>
            A1:A13: Months (Jan-Dec)<br/>
            B1:B13: Sales amounts<br/>
            <br/>
            // Method 1: Recommended Chart (Excel guesses)<br/>
            1. Select data range A1:B13 (include headers!)<br/>
            2. Insert tab → Recommended Charts<br/>
            3. Excel suggests likely chart types<br/>
            4. Preview and choose<br/>
            5. Click OK<br/>
            <br/>
            // Method 2: Specific Chart Type<br/>
            1. Select data A1:B13<br/>
            2. Insert tab → Charts group<br/>
            3. Choose: Column, Line, Pie, etc.<br/>
            4. Click specific subtype (Clustered Column, Stacked, etc.)<br/>
            <br/>
            // Method 3: Keyboard Shortcut<br/>
            1. Select data<br/>
            2. Alt+F1: Creates default chart on same sheet<br/>
            3. F11: Creates chart on new chart sheet<br/>
            <br/>
            // What Excel Does Automatically:<br/>
            • Uses first column for X-axis (categories)<br/>
            • Uses other columns for Y-axis (values)<br/>
            • Creates legend from column headers<br/>
            • Applies default style/colors<br/>
            • Places chart on current worksheet<br/>
            <br/>
            // Pro Tips for Selection:<br/>
            • Include headers for automatic labeling<br/>
            • Don't include totals in chart data (distorts scale)<br/>
            • For non-contiguous data: Select first range, hold Ctrl, select next<br/>
            • Empty cells show as gaps (usually correct for missing data)<br/>
            • Zero values show as data points (can be hidden)
        </pre>
    </div>
    
    <b>c. Chart Elements: Building Your Visualization</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Essential Chart Elements (+ button when chart selected):</b><br/>
        
        <b>1. Axes (The Stage):</b><br/>
        • <b>Primary Horizontal (X):</b> Usually categories or time<br/>
        • <b>Primary Vertical (Y):</b> Usually values<br/>
        • <b>Formatting:</b> Scale, units, number format, interval<br/>
        • <b>Secondary Axis:</b> For mixed data types (sales $ and units)<br/>
        <br/>
        <b>2. Chart Title (The Headline):</b><br/>
        • Should be descriptive, not just "Chart 1"<br/>
        • Include: What, Where, When<br/>
        • Example: "Monthly Sales Revenue - 2024"<br/>
        • Can link to cell: Click title, type =, click cell with title text<br/>
        <br/>
        <b>3. Data Labels (The Subtitles):</b><br/>
        • Show values on/near data points<br/>
        • Useful for: precise values, highlighting key points<br/>
        • Format: Values, percentages, category names<br/>
        • Position: Center, inside end, outside end, etc.<br/>
        <br/>
        <b>4. Legend (The Cast List):</b><br/>
        • Explains color/symbol meaning<br/>
        • Position: Right, top, bottom, left<br/>
        • Can be removed if only one series<br/>
        • Format: Font, background, border<br/>
        <br/>
        <b>5. Gridlines (The Measuring Tape):</b><br/>
        • Major gridlines: Primary scale divisions<br/>
        • Minor gridlines: Subdivisions (often clutter)<br/>
        • Format: Color, style, transparency<br/>
        • Remove if chart is busy<br/>
        <br/>
        <b>6. Trendline (The Crystal Ball):</b><br/>
        • Shows overall direction<br/>
        • Types: Linear, exponential, polynomial<br/>
        • Can show equation and R² value<br/>
        <br/>
        <b>7. Error Bars (The Confidence Interval):</b><br/>
        • Show potential error range<br/>
        • Statistical charts, scientific data<br/>
        <br/>
        <b>Accessing Elements:</b><br/>
        • Click chart → + button (top right)<br/>
        • Check/uncheck elements<br/>
        • Hover → arrow for more options<br/>
        • Or: Chart Design tab → Add Chart Element
    </div>
    
    <b>d. Formatting & Customization: Making It Professional</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Three Ways to Format:<br/>
            1. <b>Chart Styles (Quick):</b><br/>
               • Click chart → Chart Design tab → Chart Styles gallery<br/>
               • Pre-designed color/effect combinations<br/>
               • Good for consistency, quick polish<br/>
            <br/>
            2. <b>Format Pane (Precise):</b><br/>
               • Double-click any chart element<br/>
               • Format pane appears on right<br/>
               • Options specific to that element<br/>
               • Fill & Line, Effects, Size & Properties<br/>
            <br/>
            3. <b>Right-Click Menu (Fast):</b><br/>
               • Right-click element → Format [Element]<br/>
               • Same as double-click<br/>
               • Some elements have specific shortcuts<br/>
            <br/>
            // Key Formatting Areas:<br/>
            <b>1. Data Series (The Bars/Lines/Points):</b><br/>
            • Fill: Solid color, gradient, picture, pattern<br/>
            • Border: Color, width, style<br/>
            • Effects: Shadow, glow, soft edges, 3D format<br/>
            • Series Options: Gap width (bars), line smoothness<br/>
            <br/>
            <b>2. Chart Area (The Canvas):</b><br/>
            • Fill: Usually transparent or white<br/>
            • Border: Frame around entire chart<br/>
            • Font: Default for all text (override at element level)<br/>
            <br/>
            <b>3. Plot Area (The Stage):</b><br/>
            • Fill: Background behind data<br/>
            • Border: Frame around data area<br/>
            • Usually lighter than chart area<br/>
            <br/>
            // Pro Formatting Tips:<br/>
            • <b>Use theme colors</b> for consistency across workbook<br/>
            • <b>Highlight key data</b> with contrasting color<br/>
            • <b>Avoid 3D effects</b> (distorts data perception)<br/>
            • <b>Limit colors</b> (5-7 max, use shades for related data)<br/>
            • <b>Ensure readability</b> (font size, contrast)<br/>
            • <b>Remove chart junk</b> (unnecessary elements)<br/>
            <br/>
            // Saving Custom Formats:<br/>
            1. Format chart exactly how you want it<br/>
            2. Right-click chart → Save as Template<br/>
            3. Name it (e.g., "Company_Report_Chart")<br/>
            4. Future: Insert tab → Recommended Charts → Templates
        </pre>
    </div>
    
    <b>e. Special Chart Types & Advanced Features</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Combo Charts (Mixed Chart Types):</b><br/>
        • Different series as different chart types<br/>
        • Example: Column for sales, line for target<br/>
        • Create: Select data → Insert → Combo Chart<br/>
        • Or: Change one series type (right-click series → Change Series Chart Type)<br/>
        • Often use secondary axis for different scales<br/>
        <br/>
        <b>2. Sparklines (Mini-Charts in Cells):</b><br/>
        • Tiny charts inside single cells<br/>
        • Show trend without full chart<br/>
        • Types: Line, Column, Win/Loss<br/>
        • Insert: Select empty cells next to data → Insert tab → Sparklines<br/>
        • Select data range, location range<br/>
        • Format: Design tab (show markers, change colors)<br/>
        <br/>
        <b>3. Dynamic Charts (Update Automatically):</b><br/>
        • Charts that expand with new data<br/>
        • Method A: Convert data to Table (Ctrl+T)<br/>
          - Chart automatically includes new rows<br/>
        • Method B: Use dynamic named ranges with OFFSET<br/>
          - =OFFSET(Sheet1!$A$1,0,0,COUNTA(Sheet1!$A:$A),1)<br/>
          - Use as chart data source<br/>
        • Method C: Use Excel Table structured references<br/>
        <br/>
        <b>4. Pareto Charts (80/20 Analysis):</b><br/>
        • Column chart + cumulative line<br/>
        • Shows vital few vs trivial many<br/>
        • Built-in: Insert → Recommended Charts → All Charts → Histogram → Pareto<br/>
        <br/>
        <b>5. Waterfall Charts (Bridge Charts):</b><br/>
        • Show cumulative effect of sequential values<br/>
        • Useful for: Financial statements, profit bridges<br/>
        • Built-in in newer Excel versions<br/>
        <br/>
        <b>6. Map Charts (Geographic Data):</b><br/>
        • Excel 365 feature<br/>
        • Filled map charts by region/country<br/>
        • Requires geographic data types<br/>
        <br/>
        <b>7. Stock Charts (Financial):</b><br/>
        • High-Low-Close, Open-High-Low-Close<br/>
        • Requires data in specific order<br/>
        • Volume-Open-High-Low-Close with two vertical axes
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Basic Chart Creation</b><br/>
        1. Create new workbook "Charts_Practice.xlsx"<br/>
        2. Worksheet "Sales_Data":<br/>
        • A1:A13: Months (Jan-Dec)<br/>
        • B1:B13: Sales ($1000 increments: 45, 52, 48, etc.)<br/>
        • C1:C13: Target (constant 50, or varying)<br/>
        3. Create charts:<br/>
        • Select A1:B13 → Insert → Clustered Column<br/>
        • Select A1:C13 → Insert → Line with Markers<br/>
        • Select B1:B13 → Insert → Pie Chart (months as legend)<br/>
        4. Move charts: Click, drag border<br/>
        5. Resize charts: Drag corners<br/>
        <br/>
        <b>Part B: Chart Customization</b><br/>
        1. Customize the column chart:<br/>
        • Change title: "Monthly Sales Performance 2024"<br/>
        • Add data labels: Click bars → + → Data Labels → Outside End<br/>
        • Change bar color: Double-click bars → Fill → Gradient Fill<br/>
        • Format axis: Double-click Y-axis → Number → Currency ($)<br/>
        • Add gridlines: + → Gridlines → Primary Major Horizontal<br/>
        2. Save as template: Right-click chart → Save as Template<br/>
        <br/>
        <b>Part C: Combo Chart</b><br/>
        1. Select A1:C13<br/>
        2. Insert → Combo Chart<br/>
        3. Choose: "Clustered Column - Line on Secondary Axis"<br/>
        4. Customize:<br/>
        • Sales as columns (primary axis)<br/>
        • Target as line (secondary axis)<br/>
        • Different colors for clarity<br/>
        <br/>
        <b>Part D: Sparklines</b><br/>
        1. Add column D: "Trend"<br/>
        2. Select D2:D13 (empty cells next to sales)<br/>
        3. Insert → Sparklines → Line<br/>
        4. Data Range: B2:B13, OK<br/>
        5. Format: Design tab → Markers → High Point, Low Point<br/>
        6. Change colors
    </div>
    
    <hr/>
    
    <h3>Best Practices in Data Visualization</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>The Data Visualization Checklist:</b><br/>
        
        <b>1. Clarity First:</b><br/>
        • Can viewer understand in 5 seconds?<br/>
        • Remove unnecessary elements (chart junk)<br/>
        • Use clear, descriptive titles<br/>
        • Label directly when possible (avoid legend if simple)<br/>
        <br/>
        <b>2. Accuracy:</b><br/>
        • Start numerical axes at zero (unless showing small differences)<br/>
        • Use consistent scales across comparable charts<br/>
        • Don't distort with 3D or perspective<br/>
        • Include data source and date<br/>
        <br/>
        <b>3. Simplicity:</b><br/>
        • Limit colors (use color purposefully)<br/>
        • Maximum 5-7 data series per chart<br/>
        • Group small categories as "Other" in pie charts<br/>
        • Use same chart type for similar data<br/>
        <br/>
        <b>4. Emphasis:</b><br/>
        • Highlight the important point<br/>
        • Use color contrast for key data<br/>
        • Add annotations for insights<br/>
        • Order data meaningfully (largest to smallest, chronological)<br/>
        <br/>
        <b>5. Consistency:</b><br/>
        • Use company colors/branding<br/>
        • Same font family/size across charts<br/>
        • Consistent labeling conventions<br/>
        • Template for recurring reports<br/>
        <br/>
        <b>Common Mistakes to Avoid:</b><br/>
        • ❌ Pie charts with too many slices (>6)<br/>
        • ❌ 3D charts that distort proportions<br/>
        • ❌ Overuse of bright colors<br/>
        • ❌ Missing axis labels or units<br/>
        • ❌ Starting bar chart Y-axis above zero<br/>
        • ❌ Putting legend between data and axis<br/>
        • ❌ Using wrong chart type for the question<br/>
        <br/>
        <b>Accessibility Considerations:</b><br/>
        • Colorblind-friendly palettes (avoid red-green)<br/>
        • Sufficient contrast for low vision<br/>
        • Add data tables for screen readers<br/>
        • Use patterns/textures as backup to colors
    </div>
    
    <hr/>
    
    <h3>Chart Export & Presentation Ready</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Preparing Charts for Different Outputs:</b><br/>
        
        <b>1. For PowerPoint Presentations:</b><br/>
        • Simpler is better (audience viewing from distance)<br/>
        • Larger fonts (≥18pt for titles, ≥14pt for labels)<br/>
        • High contrast colors (projectors wash out colors)<br/>
        • Paste as Picture to preserve formatting<br/>
        • Or: Copy chart → PowerPoint → Paste Special → Excel Chart Object (editable)<br/>
        <br/>
        <b>2. For Printed Reports:</b><br/>
        • Higher detail okay (reader can study closely)<br/>
        • Include data labels for key points<br/>
        • Use black and white friendly patterns if printing B&W<br/>
        • Check print preview: Page Layout tab → Page Setup → Print Preview<br/>
        • Set print area to include chart only<br/>
        <br/>
        <b>3. For PDF Export:</b><br/>
        • Preserves formatting exactly<br/>
        • File → Save As → PDF<br/>
        • Options: "Print what" = Selection (selected chart)<br/>
        • Best quality for sharing<br/>
        <br/>
        <b>4. For Web/Email:</b><br/>
        • Save as PNG for crisp image<br/>
        • Right-click chart → Save as Picture<br/>
        • Choose PNG for quality, JPEG for smaller size<br/>
        • Resolution: 150-300 DPI for screen viewing<br/>
        <br/>
        <b>5. Interactive Dashboards:</b><br/>
        • Keep charts on same sheet for interaction<br/>
        • Use slicers for filtering<br/>
        • Group related charts together<br/>
        • Use Form Controls for interactivity<br/>
        <br/>
        <b>Chart Size Guidelines:</b><br/>
        • Presentation: 6-8 inches wide<br/>
        • Report: 3-5 inches wide<br/>
        • Dashboard: Varies, but consistent sizes<br/>
        • Mobile view: Stack vertical, simplify<br/>
        <br/>
        <b>Backup Your Data:</b><br/>
        • Charts can be recreated, data cannot!<br/>
        • Keep raw data in separate sheet<br/>
        • Document data sources<br/>
        • Version control for important charts
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 4 Assignment: Comprehensive Data Dashboard</h4>
        
        <b>Task: Create a complete business dashboard with multiple coordinated visualizations</b><br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Worksheet 1: "Raw_Data"</b><br/>
            Create sample business data for one year:<br/>
            1. Columns: Month, ProductA_Sales, ProductB_Sales, ProductC_Sales, Total_Sales, Expenses, Profit, Customers, Website_Visits<br/>
            2. 12 months of realistic data with trends/seasonality<br/>
            3. Include some missing data (N/A) for realism<br/>
            4. Add summary row with totals, averages<br/>
            <br/>
            <b>Worksheet 2: "Sales_Dashboard"</b><br/>
            Create a one-page dashboard with these charts:<br/>
            1. <b>Chart 1: Monthly Sales Trend (Line Chart)</b><br/>
               • Show all three products + total as lines<br/>
               • Secondary axis for total if scale different<br/>
               • Add trendline for total sales<br/>
               • Mark highest/lowest months<br/>
            <br/>
            2. <b>Chart 2: Product Performance (Clustered Column)</b><br/>
               • Monthly comparison of three products<br/>
               • Data labels on highest product each month<br/>
               • Color code by product consistently<br/>
            <br/>
            3. <b>Chart 3: Profit Analysis (Waterfall or Combo)</b><br/>
               • Show revenue, expenses, profit relationship<br/>
               • Or use combo: columns for revenue/expenses, line for profit margin %<br/>
               • Highlight most/least profitable months<br/>
            <br/>
            4. <b>Chart 4: Market Share (Pie or Donut)</b><br/>
               • Year-to-date total by product<br/>
               • Explode largest slice<br/>
               • Data labels as percentages<br/>
            <br/>
            5. <b>Chart 5: Correlation Analysis (Scatter Plot)</b><br/>
               • Website visits vs sales<br/>
               • Add trendline and R² value<br/>
               • Color points by quarter<br/>
            <br/>
            6. <b>Sparklines Row</b><br/>
               • Add sparklines next to raw data showing monthly trends<br/>
               • One for each product and total<br/>
            <br/>
            <b>Worksheet 3: "Executive_Summary"</b><br/>
            Single slide-style summary:<br/>
            1. Key metrics as large numbers with sparklines<br/>
            2. Best/worst performing chart only<br/>
            3. Key insights text box<br/>
            4. Formatted for printing on one page
        </div>
        
        <b>Technical Requirements:</b>
        <ul>
            <li>Use at least 5 different chart types appropriately</li>
            <li>Create one combo chart with secondary axis</li>
            <li>Add sparklines for at least one data series</li>
            <li>Make all charts dynamic (update with new data)</li>
            <li>Use consistent color scheme across all charts</li>
            <li>Apply professional formatting to all chart elements</li>
            <li>Create and use one chart template</li>
            <li>Add interactive element (slicer or filter)</li>
        </ul>
        
        <b>Deliverables:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Excel file: "Business_Dashboard_YourName.xlsx"<br/>
            2. PDF export of dashboard worksheet<br/>
            3. PNG image of most effective chart<br/>
            4. Screenshots demonstrating:<br/>
               • Chart selection process<br/>
               • Format pane customization<br/>
               • Dynamic range setup<br/>
               • Combo chart configuration<br/>
               • Sparkline creation<br/>
            5. Written explanation of:<br/>
               • Why each chart type was chosen for each data set<br/>
               • How colors enhance understanding<br/>
               • What story each chart tells<br/>
               • How to interpret the scatter plot correlation<br/>
               • Real-world business decisions enabled by dashboard
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1 - Advanced Visualization:</b><br/>
            • Add conditional formatting to data tables<br/>
            • Create gauge charts for KPI tracking<br/>
            • Add forecast line based on historical trends<br/>
            • Use data bars in addition to sparklines<br/>
            • Create animated chart (using scroll bar control)<br/>
            <br/>
            <b>Level 2 - Interactivity:</b><br/>
            • Add slicers to filter all charts simultaneously<br/>
            • Create drop-down to switch chart types<br/>
            • Add Form Controls for what-if analysis<br/>
            • Make charts clickable to drill down to details<br/>
            • Add timeline control for date filtering<br/>
            <br/>
            <b>Level 3 - Dashboard Excellence:</b><br/>
            • Design for mobile responsiveness<br/>
            • Create dark mode version<br/>
            • Add accessibility features (alt text, high contrast)<br/>
            • Build PowerPoint presentation with linked charts<br/>
            • Create automated email report with charts
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Data Visualization Mastery Checklist</h3>
        
        <b>You should now be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Choose appropriate chart type for different data questions<br/>
            ✅ Create basic charts from data ranges<br/>
            ✅ Customize all chart elements (titles, axes, legends, labels)<br/>
            ✅ Format charts professionally (colors, styles, effects)<br/>
            ✅ Create combo charts with multiple chart types<br/>
            ✅ Add and format sparklines for in-cell trends<br/>
            ✅ Make charts dynamic to update with new data<br/>
            ✅ Apply data visualization best practices<br/>
            ✅ Export charts for different presentation needs<br/>
            ✅ Create cohesive dashboard with multiple visualizations
        </div>
        
        <p><b>Chart Selection Decision Matrix:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">You Want to Show...</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Best Chart Type</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Example</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Comparison among items</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Column/Bar Chart</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Sales by region</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">Trend over time</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Line Chart</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Monthly revenue</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Part-to-whole relationship</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Pie/Donut Chart</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Market share</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">Correlation between variables</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Scatter Plot</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Ad spend vs sales</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Distribution of data</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Histogram/Box Plot</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Customer age distribution</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">Composition over time</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Stacked Area/Bar</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Revenue by product over years</td>
            </tr>
        </table>
        
        <p><b>Pro Tips for Charting Success:</b></p>
        <ol>
            <li><b>Start with the question:</b> What do you want to show/explain/prove?</li>
            <li><b>Simplify relentlessly:</b> Remove any element that doesn't add understanding</li>
            <li><b>Use color purposefully:</b> Not just decoration - it should mean something</li>
            <li><b>Test with others:</b> Can they understand it without explanation?</li>
            <li><b>Make it dynamic:</b> Charts should update automatically with new data</li>
            <li><b>Document your work:</b> Future you will thank you for notes</li>
            <li><b>Consider your audience:</b> Executive vs analyst need different detail levels</li>
            <li><b>Accessibility matters:</b> 8% of men are colorblind - use patterns too</li>
        </ol>
        
        <p><b>Week 5 Complete! You've mastered:</b></p>
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            ✅ <b>Day 1:</b> Excel Foundations - Interface, navigation, data entry<br/>
            ✅ <b>Day 2:</b> The Big 5 Formulas - SUM, AVERAGE, COUNT, MIN, MAX<br/>
            ✅ <b>Day 3:</b> Cell Referencing - Relative, Absolute, Mixed with $ signs<br/>
            ✅ <b>Day 4:</b> Data Visualization - Charts, graphs, sparklines, dashboards<br/>
            <br/>
            <b>Together these form the core of Excel business analysis!</b>
        </div>
        
        <p><b>Next Week (Week 6):</b> Excel Logic & Analysis - IF functions, VLOOKUP, data validation, sorting/filtering, and Pivot Tables!</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/office/create-a-chart-from-start-to-finish-0baf399e-dd61-4e18-8a73-b3fd5d5680c2" target="_blank">Microsoft Chart Creation Guide</a><br/>
        • <a href="https://excelcharts.com/chart-chooser/" target="_blank">Chart Chooser Tool</a><br/>
        • <a href="https://www.storytellingwithdata.com/blog" target="_blank">Data Storytelling Blog</a><br/>
        • <a href="https://www.youtube.com/watch?v=I8AOZxleWb8" target="_blank">Excel Charts Masterclass Video</a><br/>
        • <a href="https://colorbrewer2.org/" target="_blank">Colorblind-Friendly Color Palettes</a></p>
        
        <p style="text-align: center; font-size: 1.1em; color: #4a6fa5;">
            <b>Remember: Numbers tell, but charts sell.<br/>
            Your data has stories - now you have the tools to tell them visually! 📈</b>
        </p>
    </div>`
            },

            "6-1": {
                "icon": "fas fa-question-circle",
                "title": "The IF Function & Logical Tests",
                "html": `<h1>Week 6, Day 1: The IF Function & Logical Tests</h1>
    <p>Today we make Excel think! You'll learn how to create intelligent spreadsheets that make decisions, categorize data, and respond dynamically to different conditions using logical functions.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Digital Decision Maker 🤔</b><br/>
        IF function: The fork in the road (if this, then that)<br/>
        Logical test: The question being asked (is it true or false?)<br/>
        TRUE result: The path taken if answer is YES<br/>
        FALSE result: The path taken if answer is NO<br/>
        Comparison operators: The question words (> greater than, < less than, = equal to)<br/>
        Nested IF: Multiple decisions in sequence (if this, then if that, then...)<br/>
        AND/OR functions: Complex conditions (both must be true, or either can be true)
    </div>
    
    <h3>Key Topics</h3>
    <ul>    <li>Understanding IF function syntax and structure</li>
        <li>Using comparison operators (>, <, =, >=, <=, <>)</li>
        <li>Creating simple conditional formulas</li>
        <li>Nesting multiple IF functions</li>
        <li>Combining IF with AND/OR functions</li>
        <li>Using IFS function for multiple conditions</li>
        <li>Practical applications and use cases</li>
        <li>Debugging common IF function errors</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. IF Function: The Basic Decision Structure</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Syntax:</b> =IF(logical_test, value_if_true, value_if_false)<br/>
        • <b>logical_test:</b> Any value or expression that can be TRUE or FALSE<br/>
        • <b>value_if_true:</b> What to return if test is TRUE<br/>
        • <b>value_if_false:</b> What to return if test is FALSE<br/>
        <br/>
        <b>Simple Example - Pass/Fail:</b><br/>
        =IF(B2>=50, "Pass", "Fail")<br/>
        • Tests: Is B2 greater than or equal to 50?<br/>
        • If TRUE: Returns "Pass"<br/>
        • If FALSE: Returns "Fail"<br/>
        <br/>
        <b>Breaking It Down:</b><br/>
        1. <b>logical_test:</b> B2>=50<br/>
           • B2 is the cell being tested<br/>
           • >= is "greater than or equal to"<br/>
           • 50 is the threshold value<br/>
        2. <b>value_if_true:</b> "Pass" (text in quotes)<br/>
        3. <b>value_if_false:</b> "Fail" (text in quotes)<br/>
        <br/>
        <b>What Can Be Returned?</b><br/>
        • Text: "Pass", "Excellent", "Review Needed"<br/>
        • Numbers: 100, 0, -10<br/>
        • Formulas: B2*1.1, SUM(A1:A10)<br/>
        • Cell references: C2, $D$5<br/>
        • Other functions: AVERAGE(B2:B10)<br/>
        • Even another IF function! (Nested IF)<br/>
        <br/>
        <b>Important: Commas separate arguments!</b><br/>
        Regional settings: Some use semicolons (;) instead of commas (,)
    </div>
    
    <b>b. Comparison Operators: Asking the Right Questions</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // The Six Comparison Operators:<br/>
            =   Equal to               =IF(A1=10, "Yes", "No")<br/>
            <>  Not equal to           =IF(A1<>10, "Different", "Same")<br/>
            >   Greater than           =IF(A1>10, "Bigger", "Smaller/Equal")<br/>
            <   Less than              =IF(A1<10, "Smaller", "Bigger/Equal")<br/>
            >=  Greater than or equal to =IF(A1>=10, "10 or more", "Less than 10")<br/>
            <=  Less than or equal to    =IF(A1<=10, "10 or less", "More than 10")<br/>
            <br/>
            // Text Comparisons:<br/>
            =IF(A1="Apple", "Fruit", "Not Apple")<br/>
            • Text must be in quotes (unless referencing another cell)<br/>
            • Case-insensitive: "apple" = "Apple" = "APPLE"<br/>
            • Use EXACT for case-sensitive: =IF(EXACT(A1,"Apple"), "Yes", "No")<br/>
            <br/>
            // Date Comparisons:<br/>
            =IF(A1>DATE(2024,1,1), "After 2024", "2023 or earlier")<br/>
            =IF(A1>TODAY(), "Future", "Past or Present")<br/>
            • Dates are stored as numbers in Excel<br/>
            • TODAY() returns current date<br/>
            • DATE(year,month,day) creates a date<br/>
            <br/>
            // Blank/Non-blank Checks:<br/>
            =IF(A1="", "Empty", "Has value")  // Checks for empty string<br/>
            =IF(ISBLANK(A1), "Truly empty", "Has something")  // Better for formulas<br/>
            =IF(NOT(ISBLANK(A1)), "Has data", "Empty")  // Reverse logic<br/>
            <br/>
            // Common Pitfalls:<br/>
            • =IF(A1>B1>C1) ❌ WRONG (can't chain comparisons)<br/>
            • =IF(A1>B1, A1>C1) ❌ WRONG (missing value_if_false)<br/>
            • =IF(A1>10, "Big",) ❌ WRONG (trailing comma with no false value)<br/>
            • =IF(A1>10, "Big") ⚠️ OK (false returns FALSE, not recommended)<br/>
        </pre>
    </div>
    
    <b>c. Practical IF Examples & Use Cases</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Grading System:</b><br/>
        =IF(B2>=90, "A", IF(B2>=80, "B", IF(B2>=70, "C", IF(B2>=60, "D", "F"))))<br/>
        • Nested IF: Checks from highest grade down<br/>
        • Important: Order matters! Check 90+ first, then 80+, etc.<br/>
        <br/>
        <b>2. Sales Commission:</b><br/>
        =IF(B2>10000, B2*0.1, B2*0.05)<br/>
        • Sales over $10,000 get 10% commission<br/>
        • Sales $10,000 or less get 5% commission<br/>
        <br/>
        <b>3. Shipping Cost Calculator:</b><br/>
        =IF(B2>20, 9.99, IF(B2>10, 6.99, 3.99))<br/>
        • Weight > 20 lbs: $9.99<br/>
        • Weight 11-20 lbs: $6.99<br/>
        • Weight ≤ 10 lbs: $3.99<br/>
        <br/>
        <b>4. Attendance Tracker:</b><br/>
        =IF(C2="P", "Present", IF(C2="A", "Absent", IF(C2="L", "Late", "Unknown")))<br/>
        • P → Present, A → Absent, L → Late<br/>
        • Anything else → Unknown<br/>
        <br/>
        <b>5. Budget Variance:</b><br/>
        =IF(B2>C2, "Over Budget", IF(B2<C2, "Under Budget", "On Budget"))<br/>
        • B2 = Actual, C2 = Budget<br/>
        • Three possible outcomes<br/>
        <br/>
        <b>6. Age Category:</b><br/>
        =IF(B2<13, "Child", IF(B2<20, "Teen", IF(B2<65, "Adult", "Senior")))<br/>
        • <13: Child<br/>
        • 13-19: Teen<br/>
        • 20-64: Adult<br/>
        • 65+: Senior<br/>
        <br/>
        <b>7. Simple Data Validation:</b><br/>
        =IF(AND(B2>=0, B2<=100), B2, "Invalid")<br/>
        • Only accepts values 0-100<br/>
        • Anything else returns "Invalid"
    </div>
    
    <b>d. Nesting IF Functions: Multi-Level Decisions</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // The Concept: IF within IF within IF...<br/>
            =IF(first_test, first_result, IF(second_test, second_result, third_result))<br/>
            <br/>
            // Example - Customer Tier System:<br/>
            =IF(B2>=10000, "Platinum",<br/>
               IF(B2>=5000, "Gold",<br/>
               IF(B2>=1000, "Silver", "Bronze")))<br/>
            <br/>
            // How Excel Evaluates This:<br/>
            1. Is B2 >= 10000?<br/>
               • Yes → Return "Platinum" (STOP)<br/>
               • No → Go to next IF<br/>
            2. Is B2 >= 5000?<br/>
               • Yes → Return "Gold" (STOP)<br/>
               • No → Go to next IF<br/>
            3. Is B2 >= 1000?<br/>
               • Yes → Return "Silver" (STOP)<br/>
               • No → Return "Bronze"<br/>
            <br/>
            // Important Rules for Nesting:<br/>
            1. <b>Limit:</b> Excel allows up to 64 nested IFs (but don't use that many!)<br/>
            2. <b>Parentheses:</b> Each IF needs opening/closing parentheses<br/>
            3. <b>Balance:</b> Count opening and closing - must be equal<br/>
            4. <b>Order matters:</b> Check most restrictive conditions first<br/>
            5. <b>Readability:</b> Use Alt+Enter for line breaks in formula bar<br/>
            <br/>
            // Formatting for Readability:<br/>
            =IF(B2>=90, "A",<br/>
               IF(B2>=80, "B",<br/>
               IF(B2>=70, "C",<br/>
               IF(B2>=60, "D", "F"))))<br/>
            <br/>
            // When to Use Nested IF vs. Other Methods:<br/>
            • 2-3 conditions: Nested IF is fine<br/>
            • 4-7 conditions: Consider IFS function (Excel 2016+)<br/>
            • 8+ conditions: Use LOOKUP table or SWITCH function<br/>
            • Text categories: Use VLOOKUP or XLOOKUP<br/>
            <br/>
            // Common Nesting Errors:<br/>
            • =IF(A1>10, "Big", IF(A1>5, "Medium") ❌ Missing final false value<br/>
            • =IF(A1>10, "Big", IF(A1>5, "Medium", "Small") ❌ Missing closing parenthesis<br/>
            • =IF(A1>5, IF(A1>10, "Big", "Medium"), "Small") ⚠️ Illogical order
        </pre>
    </div>
    
    <b>e. AND & OR Functions: Complex Conditions</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>AND Function (All conditions must be TRUE):</b><br/>
        =AND(condition1, condition2, condition3, ...)<br/>
        • Returns TRUE only if ALL conditions are TRUE<br/>
        • Returns FALSE if ANY condition is FALSE<br/>
        <br/>
        <b>Examples:</b><br/>
        • =AND(B2>0, B2<100) → TRUE if B2 is between 1 and 99<br/>
        • =AND(C2="Yes", D2>DATE(2024,1,1)) → TRUE if C2 is "Yes" AND date after Jan 1, 2024<br/>
        • =AND(NOT(ISBLANK(A2)), A2<>"N/A") → TRUE if A2 not empty AND not "N/A"<br/>
        <br/>
        <b>OR Function (Any condition can be TRUE):</b><br/>
        =OR(condition1, condition2, condition3, ...)<br/>
        • Returns TRUE if ANY condition is TRUE<br/>
        • Returns FALSE only if ALL conditions are FALSE<br/>
        <br/>
        <b>Examples:</b><br/>
        • =OR(B2="Apple", B2="Orange", B2="Banana") → TRUE if B2 is any of these fruits<br/>
        • =OR(C2<0, C2>100) → TRUE if C2 is negative OR over 100<br/>
        • =OR(ISBLANK(D2), D2=0) → TRUE if D2 is empty OR zero<br/>
        <br/>
        <b>Combining AND/OR with IF:</b><br/>
        • =IF(AND(B2>=50, C2="Complete"), "Pass", "Fail")<br/>
          → Pass only if score ≥50 AND status is "Complete"<br/>
        • =IF(OR(B2>=90, C2="Exempt"), "A", IF(B2>=80, "B", "C"))<br/>
          → Get A if score ≥90 OR exempt status<br/>
        • =IF(AND(B2>0, B2<100, OR(C2="Yes", D2="Approved")), "Valid", "Invalid")<br/>
          → Valid if: B2 between 1-99 AND (C2="Yes" OR D2="Approved")<br/>
        <br/>
        <b>NOT Function (Reverse logic):</b><br/>
        =NOT(condition) → Returns opposite of condition<br/>
        • =NOT(ISBLANK(A2)) → TRUE if A2 is NOT empty<br/>
        • =IF(NOT(OR(B2="Yes", B2="Y")), "Not confirmed", "Confirmed")<br/>
        <br/>
        <b>Complex Combinations:</b><br/>
        =IF(AND(OR(B2="Manager", B2="Director"), C2>50000), "Approved", "Review")<br/>
        • Approved if: (Manager OR Director) AND salary > 50000<br/>
        • Otherwise: Review needed<br/>
        <br/>
        <b>Truth Table Reference:</b><br/>
        <table style="width: 80%; margin: 10px auto; border-collapse: collapse;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 5px;">A</th><th>B</th><th>AND(A,B)</th><th>OR(A,B)</th>
            </tr>
            <tr><td style="padding: 5px;">TRUE</td><td>TRUE</td><td>TRUE</td><td>TRUE</td></tr>
            <tr><td style="padding: 5px;">TRUE</td><td>FALSE</td><td>FALSE</td><td>TRUE</td></tr>
            <tr><td style="padding: 5px;">FALSE</td><td>TRUE</td><td>FALSE</td><td>TRUE</td></tr>
            <tr><td style="padding: 5px;">FALSE</td><td>FALSE</td><td>FALSE</td><td>FALSE</td></tr>
        </table>
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Basic IF Functions</b><br/>
        1. Create new workbook "IF_Practice.xlsx"<br/>
        2. Worksheet "Basic_IF":<br/>
        • A1:A10: Test scores (65, 72, 88, 92, 45, 78, 85, 96, 53, 81)<br/>
        • B1: "Pass/Fail"<br/>
        • B2 formula: =IF(A2>=60, "Pass", "Fail")<br/>
        • Copy down to B11<br/>
        • Add conditional formatting: Green for Pass, Red for Fail<br/>
        <br/>
        <b>Part B: Nested IF Practice</b><br/>
        1. New worksheet "Grades":<br/>
        • Same scores in A2:A11<br/>
        • C1: "Letter Grade"<br/>
        • C2 formula: =IF(A2>=90, "A", IF(A2>=80, "B", IF(A2>=70, "C", IF(A2>=60, "D", "F"))))<br/>
        • Copy down<br/>
        • Add another column: "Feedback" with: =IF(C2="A", "Excellent!", IF(C2="B", "Good", "Needs improvement"))<br/>
        <br/>
        <b>Part C: AND/OR Combinations</b><br/>
        1. New worksheet "Eligibility":<br/>
        • Columns: Age (A), Income (B), Credit Score (C), Eligible (D)<br/>
        • Sample data: 25/35000/650, 42/28000/720, 19/20000/580, 35/45000/680<br/>
        • Eligibility rules: Age ≥21 AND Income ≥25000 AND Credit Score ≥600<br/>
        • D2 formula: =IF(AND(A2>=21, B2>=25000, C2>=600), "Eligible", "Not Eligible")<br/>
        • Copy down<br/>
        • Add OR variation: Age ≥21 OR (Income ≥40000 AND Credit Score ≥700)<br/>
        <br/>
        <b>Part D: IFS Function (Excel 2016+)</b><br/>
        1. New worksheet "IFS_Practice":<br/>
        • Same scores<br/>
        • Use IFS function: =IFS(A2>=90, "A", A2>=80, "B", A2>=70, "C", A2>=60, "D", TRUE, "F")<br/>
        • Note: No nesting, cleaner syntax<br/>
        • Last condition: TRUE acts as "else"<br/>
        • Compare with nested IF - which is more readable?
    </div>
    
    <hr/>
    
    <h3>Advanced IF Techniques & Alternatives</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. IFS Function (Excel 2016+):</b><br/>
        =IFS(condition1, value1, condition2, value2, ..., conditionN, valueN)<br/>
        • Checks conditions in order<br/>
        • Returns value for first TRUE condition<br/>
        • No nesting needed!<br/>
        • Last condition often TRUE as catch-all<br/>
        <br/>
        <b>Example:</b> =IFS(A2>=90, "A", A2>=80, "B", A2>=70, "C", A2>=60, "D", TRUE, "F")<br/>
        Much cleaner than nested IF!<br/>
        <br/>
        <b>2. SWITCH Function (Excel 2016+):</b><br/>
        =SWITCH(expression, value1, result1, value2, result2, ..., default_result)<br/>
        • Perfect for exact matches (not ranges)<br/>
        • Like VLOOKUP but built into formula<br/>
        <br/>
        <b>Example:</b> =SWITCH(B2, "A", "Excellent", "B", "Good", "C", "Average", "Needs Improvement")<br/>
        <br/>
        <b>3. CHOOSE Function:</b><br/>
        =CHOOSE(index_num, value1, value2, ..., valueN)<br/>
        • Returns value based on index number (1 = value1, 2 = value2, etc.)<br/>
        • Often used with MATCH or other functions<br/>
        <br/>
        <b>Example:</b> =CHOOSE(MATCH(B2, {0,60,70,80,90}, 1), "F", "D", "C", "B", "A")<br/>
        <br/>
        <b>4. LOOKUP Tables (Better for Many Conditions):</b><br/>
        • Create table with thresholds and results<br/>
        • Use VLOOKUP or XLOOKUP with approximate match<br/>
        • More maintainable than nested IFs<br/>
        <br/>
        <b>Example:</b><br/>
        Table in F1:G5:<br/>
        0   "F"<br/>
        60  "D"<br/>
        70  "C"<br/>
        80  "B"<br/>
        90  "A"<br/>
        Formula: =VLOOKUP(A2, $F$1:$G$5, 2, TRUE)<br/>
        <br/>
        <b>5. Boolean Logic (Math with TRUE/FALSE):</b><br/>
        • TRUE = 1, FALSE = 0 in calculations<br/>
        • = (A2>10)*100 → Returns 100 if TRUE, 0 if FALSE<br/>
        • = (B2="Yes")*(C2*0.1) → Commission only if B2 is "Yes"<br/>
        • = SUM((A2:A10>50)*B2:B10) → Sum only where condition TRUE (array formula)<br/>
        <br/>
        <b>6. IFERROR for Clean Results:</b><br/>
        =IFERROR(formula, value_if_error)<br/>
        • Returns alternative value if formula causes error<br/>
        • Cleaner than checking for errors with IF<br/>
        <br/>
        <b>Example:</b> =IFERROR(A2/B2, "N/A") instead of =IF(B2=0, "N/A", A2/B2)
    </div>
    
    <hr/>
    
    <h3>Common IF Errors & Debugging</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. #VALUE! Error:</b><br/>
        • Problem: Wrong data type in comparison<br/>
        • Example: =IF(A2>"50", "Big", "Small") comparing text "50" to number<br/>
        • Fix: Ensure consistent data types: =IF(A2>50, "Big", "Small")<br/>
        <br/>
        <b>2. Too many arguments:</b><br/>
        • Problem: =IF(A2>10, "Big", "Medium", "Small") ❌ Three results?<br/>
        • IF only has TRUE and FALSE results<br/>
        • Fix: Use nested IF or IFS: =IF(A2>10, "Big", IF(A2>5, "Medium", "Small"))<br/>
        <br/>
        <b>3. Parentheses mismatch:</b><br/>
        • Problem: =IF(A2>10, "Big", IF(A2>5, "Medium", "Small") ❌ Missing )<br/>
        • Fix: Count parentheses - each IF needs opening and closing<br/>
        • Tip: Excel colors matching parentheses<br/>
        <br/>
        <b>4. Wrong operator precedence:</b><br/>
        • Problem: =IF(A2>5 AND A2<10, "Medium", "Other") ❌ Can't use AND like this<br/>
        • Fix: =IF(AND(A2>5, A2<10), "Medium", "Other")<br/>
        <br/>
        <b>5. Text without quotes:</b><br/>
        • Problem: =IF(A2=Pass, "Yes", "No") ❌ Pass should be "Pass"<br/>
        • Fix: =IF(A2="Pass", "Yes", "No")<br/>
        • Exception: Cell references don't need quotes: =IF(A2=B2, "Same", "Different")<br/>
        <br/>
        <b>6. Circular reference (indirect):</b><br/>
        • Problem: =IF(A2>10, B2*2, A2) where B2 also references A2...<br/>
        • Can create calculation loops<br/>
        • Fix: Trace precedents to find circular references<br/>
        <br/>
        <b>Debugging Tools:</b><br/>
        • <b>Evaluate Formula:</b> Formulas tab → Evaluate Formula (step through)<br/>
        • <b>F9 Key:</b> Select part of formula in formula bar, press F9 to see result<br/>
        • <b>Formula Auditing:</b> Trace Precedents/Dependents<br/>
        • <b>Error Checking:</b> Formulas tab → Error Checking<br/>
        • <b>Watch Window:</b> Monitor key cells while testing<br/>
        <br/>
        <b>Best Practice: Test with Extreme Values</b><br/>
        • Test with: Very high, very low, zero, negative, blank, text<br/>
        • Ensure formula handles all possibilities<br/>
        • Use IFERROR or ISERROR for robustness
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 1 Assignment: Employee Performance Dashboard</h4>
        
        <b>Task: Create a comprehensive employee evaluation system using IF and logical functions</b><br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Worksheet 1: "Employee_Data"</b><br/>
            Create employee database with:<br/>
            1. Columns: ID, Name, Department, Salary, Years_Service, Projects_Completed,<br/>
               &nbsp;&nbsp;Training_Hours, Absences, Performance_Score, Last_Review_Date<br/>
            2. 15+ employee records with varied data<br/>
            3. Include some edge cases: New hires (0 years), high absences, perfect scores, etc.<br/>
            <br/>
            <b>Worksheet 2: "Evaluation_Rules"</b><br/>
            Define company evaluation criteria:<br/>
            1. Performance tiers based on score: <60="Needs Improvement", 60-79="Satisfactory",<br/>
               &nbsp;&nbsp;80-89="Good", 90-100="Excellent"<br/>
            2. Bonus eligibility: Score ≥80 AND Years_Service ≥1 AND Absences ≤5<br/>
            3. Promotion potential: Score ≥85 AND Projects_Completed ≥3 AND Training_Hours ≥20<br/>
            4. Salary adjustment: Based on performance tier + years service<br/>
            5. Review overdue: Last_Review_Date older than 1 year<br/>
            <br/>
            <b>Worksheet 3: "Calculations"</b><br/>
            Apply all rules using IF and logical functions:<br/>
            1. Performance_Tier: Use nested IF or IFS<br/>
            2. Bonus_Eligible: Use IF with AND<br/>
            3. Promotion_Potential: Use IF with AND (maybe OR for exceptional cases)<br/>
            4. Salary_Adjustment_Percent: Complex nested IF<br/>
               • Excellent + ≥5 years: 10%<br/>
               • Excellent + <5 years: 8%<br/>
               • Good + ≥5 years: 6%<br/>
               • Good + <5 years: 5%<br/>
               • Satisfactory: 3%<br/>
               • Needs Improvement: 0%<br/>
            5. Review_Status: =IF(TODAY()-Last_Review_Date>365, "OVERDUE", "On Schedule")<br/>
            6. Risk_Flag: Use OR - flag if: Score <60 OR Absences >10 OR No training<br/>
            <br/>
            <b>Worksheet 4: "Summary_Dashboard"</b><br/>
            Create management summary:<br/>
            1. Counts by performance tier (use COUNTIF)<br/>
            2. Total bonus budget needed<br/>
            3. Average salary adjustment<br/>
            4. List of overdue reviews<br/>
            5. High-risk employees
        </div>
        
        <b>Technical Requirements:</b>
        <ul>
            <li>Use at least 5 different IF function variations</li>
            <li>Include both nested IF and IFS functions</li>
            <li>Use AND/OR functions in at least 3 formulas</li>
            <li>Create one complex formula with multiple logical tests</li>
            <li>Use IFERROR to handle potential errors</li>
            <li>Add data validation for input cells</li>
            <li>Use conditional formatting based on IF results</li>
            <li>Create at least one lookup table alternative to nested IF</li>
        </ul>
        
        <b>Deliverables:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Excel file: "Employee_Dashboard_YourName.xlsx"<br/>
            2. PDF showing formulas view (Ctrl+') < br / >
                3. Screenshots demonstrating: < br / > •Nested IF structure with line breaks < br / > •IFS
                function in action < br / > •AND / OR combination formula < br / > •Evaluate Formula stepping through calculation < br / > •Error handling with IFERROR < br / >
                4. Written explanation of: < br / > •Why you chose nested IF vs IFS in different situations < br / > •How AND / OR functions improve formula readability < br / > •One real - world business decision enabled by your dashboard < br / > •How you would modify the system
                for different departments <
                /div>

                <
                b > Challenge Tasks(Bonus): < /b> <
                    div style = "background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;" >
                    <
                    b > Level 1 - Advanced Logic: < /b><br/ > •Add tiered bonus calculations(different % by performance) < br / > •Create escalation path: Needs Improvement→ Action Plan Required < br / > •Add tenure - based rules(different criteria
                        for new vs experienced) < br / > •Use SWITCH
                function
                for department - specific rules < br / >
                <
                br / >
                <
                b > Level 2 - Dynamic Systems: < /b><br/ > •Make all thresholds adjustable(input cells
                        for management) < br / > •Create weighted scoring system < br / > •Add historical comparison(improved / declined from last review) < br / > •Build what -
                    if analysis
                for different rule sets < br / >
                <
                br / >
                <
                b > Level 3 - Complete HR System: < /b><br/ > •Add employee self - service view(limited data) < br / > •Create automated email alerts
                for overdue reviews < br / > •Integrate with calendar
                for review scheduling < br / > •Add manager approval workflow < br / > •Create predictive model
                for attrition risk <
                /div> <
                /div>

                <
                hr / >

                <
                div style = "background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;" >
                <
                h3 > 🎯IF Function Mastery Checklist < /h3>

                <
                b > You should now be able to: < /b> <
                    div style = "background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;" > ✅Write basic IF functions with proper syntax < br / > ✅Use all comparison operators( > , < , = , >= , <= , < > ) < br / > ✅Create nested IF functions
                for multiple conditions < br / > ✅Combine IF with AND / OR
                for complex logic < br / > ✅Use IFS
                function
                for cleaner multiple conditions < br / > ✅Handle different data types(text, numbers, dates) < br / > ✅Debug common IF
                function errors < br / > ✅Choose between IF alternatives(LOOKUP, SWITCH, CHOOSE) < br / > ✅Apply IF functions to real business scenarios < br / > ✅Use IFERROR
                for robust error handling <
                /div>

                <
                p > < b > When to Use Which Logical Function: < /b></p >
                    <
                    table style = "width: 100%; border-collapse: collapse; margin: 15px 0;" >
                    <
                    tr style = "background-color: #4a6fa5; color: white;" >
                    <
                    th style = "padding: 10px; border: 1px solid #ddd;" > Scenario < /th> <
                    th style = "padding: 10px; border: 1px solid #ddd;" > Best Function < /th> <
                    th style = "padding: 10px; border: 1px solid #ddd;" > Example < /th> <
                    /tr> <
                    tr >
                    <
                    td style = "padding: 10px; border: 1px solid #ddd;" > Simple yes / no decision < /td> <
                    td style = "padding: 10px; border: 1px solid #ddd;" > IF < /td> <
                    td style = "padding: 10px; border: 1px solid #ddd;" >= IF(score >= 60, "Pass", "Fail") < /td> <
                    /tr> <
                    tr style = "background-color: #f9f9f9;" >
                    <
                    td style = "padding: 10px; border: 1px solid #ddd;" > 3 - 7 conditions in ranges < /td> <
                    td style = "padding: 10px; border: 1px solid #ddd;" > IFS < /td> <
                    td style = "padding: 10px; border: 1px solid #ddd;" >= IFS(score >= 90, "A", score >= 80, "B", TRUE, "C") < /td> <
                    /tr> <
                    tr >
                    <
                    td style = "padding: 10px; border: 1px solid #ddd;" > Multiple exact matches < /td> <
                    td style = "padding: 10px; border: 1px solid #ddd;" > SWITCH < /td> <
                    td style = "padding: 10px; border: 1px solid #ddd;" >= SWITCH(grade, "A", "Excellent", "B", "Good") < /td> <
                    /tr> <
                    tr style = "background-color: #f9f9f9;" >
                    <
                    td style = "padding: 10px; border: 1px solid #ddd;" > Many conditions,
                maintainable < /td> <
                td style = "padding: 10px; border: 1px solid #ddd;" > LOOKUP Table < /td> <
                td style = "padding: 10px; border: 1px solid #ddd;" >= VLOOKUP(score, grade_table, 2, TRUE) < /td> <
                /tr> <
                tr >
                <
                td style = "padding: 10px; border: 1px solid #ddd;" > All conditions must be true < /td> <
                td style = "padding: 10px; border: 1px solid #ddd;" > AND < /td> <
                td style = "padding: 10px; border: 1px solid #ddd;" >= AND(age >= 21, score >= 80, status = "Active") < /td> <
                /tr> <
                tr style = "background-color: #f9f9f9;" >
                <
                td style = "padding: 10px; border: 1px solid #ddd;" > Any condition can be true < /td> <
                td style = "padding: 10px; border: 1px solid #ddd;" > OR < /td> <
                td style = "padding: 10px; border: 1px solid #ddd;" >= OR(department = "Sales", department = "Marketing") < /td> <
                /tr> <
                /table>

                <
                p > < b > Pro Tips
                for Logical Functions: < /b></p >
                    <
                    ol >
                    <
                    li > < b > Plan on paper first: < /b> Draw decision trees for complex logic</li >
                    <
                    li > < b > Test edge cases: < /b> What happens with blanks, zeros, text?</li >
                    <
                    li > < b > Use named ranges: < /b> =IF(score>=PASSING_SCORE, "Pass", "Fail") is clearer</li >
                    <
                    li > < b > Document complex formulas: < /b> Add comments explaining logic</li >
                    <
                    li > < b > Keep it simple: < /b> If formula gets too long, use helper columns</li >
                    <
                    li > < b > Use Alt + Enter: < /b> Add line breaks in formula bar for readability</li >
                    <
                    li > < b > Consider performance: < /b> Nested IFs can slow down very large sheets</li >
                    <
                    li > < b > Always have a
                default: < /b> What happens if no condition matches?</li >
                    <
                    /ol>

                    <
                    p > < b > Tomorrow: < /b> VLOOKUP & Data Validation - Finding data across tables and ensuring data integrity!</p >

                    <
                    p > < b > Resources: < /b><br/ > • < a href = "https://support.microsoft.com/en-us/office/if-function-69aed7c9-4e8a-4755-a9bc-aa8bbff73be2"
                target = "_blank" > Microsoft IF Function Guide < /a><br/ > • < a href = "https://exceljet.net/excel-functions/excel-if-function"
                target = "_blank" > IF Function Examples < /a><br/ > • < a href = "https://www.contextures.com/xlFunctions01.html"
                target = "_blank" > Logical Functions Tutorial < /a><br/ > • < a href = "https://www.youtube.com/watch?v=Kk_Ta7g2ouA"
                target = "_blank" > IF Functions Tutorial Video < /a></p >

                <
                p style = "text-align: center; font-size: 1.1em; color: #4a6fa5;" >
                <
                b > Remember: IF functions turn static spreadsheets into dynamic decision tools. < br / >
                    You 're not just calculating anymore - you'
                re creating intelligence!🧠 < /b> <
                /p> <
                /div>`
            },
            "6-2": {
                "icon": "fas fa-search",
                "title": "VLOOKUP & Data Validation",
                "html": `<h1>Week 6, Day 2: VLOOKUP & Data Validation</h1>
    <p>Today we master two essential Excel skills: finding data across tables with VLOOKUP and ensuring data quality with validation rules. These tools transform Excel from a calculator into a true database management system.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Library & The Gatekeeper 📚</b><br/>
        VLOOKUP: The librarian finding books by their ID number<br/>
        Lookup value: The book ID you're searching for<br/>
        Table array: The library shelves with all books<br/>
        Column index: Which shelf to look on (1st, 2nd, 3rd shelf)<br/>
        Range lookup: Exact match or closest match?<br/>
        Data Validation: The library rules (no food, quiet please)<br/>
        Drop-down lists: The pre-approved book categories<br/>
        Error alerts: The librarian saying "That's not allowed here"
    </div>
    
    <h3>Key Topics</h3>
    <ul>
        <li>Understanding VLOOKUP syntax and parameters</li>
        <li>Using exact match vs approximate match lookups</li>
        <li>Creating and managing data validation rules</li>
        <li>Building drop-down lists for consistent data entry</li>
        <li>Combining VLOOKUP with data validation</li>
        <li>Error handling with IFERROR and ISNA</li>
        <li>Practical business applications</li>
        <li>Common VLOOKUP errors and solutions</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. VLOOKUP: The Vertical Lookup Function</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Syntax:</b> =VLOOKUP(lookup_value, table_array, col_index_num, [range_lookup])<br/>
        <br/>
        <b>The Four Arguments:</b><br/>
        1. <b>lookup_value:</b> What you're searching for (employee ID, product code, etc.)<br/>
           • Can be value, cell reference, or text in quotes<br/>
           • Example: "EMP-001", A2, 1001<br/>
        <br/>
        2. <b>table_array:</b> Where to search (the data table)<br/>
           • Must include lookup column AND return column(s)<br/>
           • Lookup column MUST be first column in range<br/>
           • Use absolute references: $A$2:$D$100 (F4 key!)<br/>
           • Best practice: Name your tables<br/>
        <br/>
        3. <b>col_index_num:</b> Which column to return<br/>
           • Number, not letter!<br/>
           • Count from leftmost column of table_array<br/>
           • Column 1 = lookup column itself<br/>
           • Column 2 = next column to the right<br/>
           • If table_array is A:D, then A=1, B=2, C=3, D=4<br/>
        <br/>
        4. <b>[range_lookup]:</b> Exact or approximate match<br/>
           • FALSE or 0 = Exact match (most common)<br/>
           • TRUE or 1 = Approximate match (sorted data only)<br/>
           • Usually use FALSE for exact matches<br/>
           • Omitted defaults to TRUE (dangerous!)<br/>
        <br/>
        <b>Simple Example:</b><br/>
        =VLOOKUP(A2, $F$2:$H$100, 3, FALSE)<br/>
        • Find value from A2 in column F (F2:F100)<br/>
        • Return value from column H (3rd column in F:H range)<br/>
        • Exact match required
    </div>
    
    <b>b. Exact Match vs Approximate Match</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // EXACT MATCH (FALSE or 0):<br/>
            =VLOOKUP("EMP-001", Employees!$A$2:$D$100, 3, FALSE)<br/>
            • Finds exact match for "EMP-001"<br/>
            • Returns #N/A if not found<br/>
            • Works with unsorted data<br/>
            • Most common use case<br/>
            <br/>
            // APPROXIMATE MATCH (TRUE or 1):<br/>
            =VLOOKUP(85, GradeScale!$A$2:$B$10, 2, TRUE)<br/>
            • Finds closest match ≤ lookup value<br/>
            • Table MUST be sorted ascending by lookup column<br/>
            • Perfect for: tax brackets, commission rates, grade scales<br/>
            • Example: Grade scale sorted: 0=F, 60=D, 70=C, 80=B, 90=A<br/>
              Lookup 85 → finds 80 (closest ≤85) → returns "B"<br/>
            <br/>
            // The Sorting Requirement:<br/>
            For approximate match (TRUE), data MUST be sorted:<br/>
            ✅ Correct: 0, 10, 20, 30, 40<br/>
            ❌ Wrong: 20, 0, 40, 10, 30<br/>
            ❌ Wrong: A, C, B, E, D<br/>
            <br/>
            // When to Use Which:<br/>
            <b>Use EXACT (FALSE) when:</b><br/>
            • Looking up IDs, codes, names<br/>
            • Data isn't sorted<br/>
            • You need precise match<br/>
            • Most database lookups<br/>
            <br/>
            <b>Use APPROXIMATE (TRUE) when:</b><br/>
            • Looking up in ranges (0-100, 101-200, etc.)<br/>
            • Data is numeric and sorted<br/>
            • You want tiered results<br/>
            • Tax tables, commission brackets<br/>
            <br/>
            // The DANGER of Omitted Argument:<br/>
            =VLOOKUP(A2, Table, 2)  ← No 4th argument!<br/>
            • Defaults to TRUE (approximate match)<br/>
            • May return wrong results if data unsorted<br/>
            • ALWAYS specify FALSE for exact matches!<br/>
            <br/>
            // Testing Your Lookup:<br/>
            1. Test with known values that exist<br/>
            2. Test with values that don't exist (should get #N/A)<br/>
            3. For approximate: test boundary values (exactly at breakpoints)
        </pre>
    </div>
    
    <b>c. Practical VLOOKUP Examples</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Product Price Lookup:</b><br/>
        • Products table: A2:B100 → ProductID, Price<br/>
        • Invoice line: =VLOOKUP(D2, $A$2:$B$100, 2, FALSE)<br/>
        • Finds price for product ID in D2<br/>
        <br/>
        <b>2. Employee Information:</b><br/>
        • Employees table: A2:E100 → EmpID, Name, Dept, Salary, HireDate<br/>
        • Dashboard: =VLOOKUP($G$2, Employees!$A$2:$E$100, 3, FALSE)<br/>
        • Returns department for employee ID in G2<br/>
        • Change column index for different info: 2=Name, 4=Salary, etc.<br/>
        <br/>
        <b>3. Grade Assignment (Approximate Match):</b><br/>
        • Grade scale (sorted): A2:B6 → 0="F", 60="D", 70="C", 80="B", 90="A"<br/>
        • Student score: =VLOOKUP(B2, $A$2:$B$6, 2, TRUE)<br/>
        • Score 85 → returns "B" (finds 80, closest ≤85)<br/>
        <br/>
        <b>4. Tax Calculation:</b><br/>
        • Tax brackets (sorted): Income from, Income to, Tax rate<br/>
        • =VLOOKUP(Income, TaxTable!$A$2:$C$10, 3, TRUE)<br/>
        • Returns tax rate for income amount<br/>
        <br/>
        <b>5. Multi-Column Information:</b><br/>
        • Problem: Need name AND department from employee ID<br/>
        • Solution 1: Two VLOOKUPs:<br/>
          Name: =VLOOKUP(ID, Table, 2, FALSE)<br/>
          Dept: =VLOOKUP(ID, Table, 3, FALSE)<br/>
        • Solution 2: Use MATCH for dynamic column index (advanced)<br/>
        <br/>
        <b>6. Two-Way Lookup (with MATCH):</b><br/>
        • Find value at intersection of row and column<br/>
        • =VLOOKUP(RowLookup, Table, MATCH(ColLookup, TableHeaders, 0), FALSE)<br/>
        • Dynamic column selection<br/>
        <br/>
        <b>7. Partial Match with Wildcards:</b><br/>
        • =VLOOKUP("*"&A2&"*", Table, 2, FALSE)<br/>
        • * = any characters<br/>
        • ? = single character<br/>
        • Example: Find "Smith" in "John Smith"<br/>
        <br/>
        <b>8. Left Lookup (VLOOKUP Limitation):</b><br/>
        • VLOOKUP can only look right (return columns to the right)<br/>
        • For left lookups: Use INDEX/MATCH or XLOOKUP (Excel 365)
    </div>
    
    <b>d. Data Validation: Ensuring Data Quality</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // What is Data Validation?<br/>
            Rules that control what can be entered in a cell<br/>
            • Prevents errors<br/>
            • Ensures consistency<br/>
            • Guides users<br/>
            • Makes data analysis possible<br/>
            <br/>
            // Access: Data tab → Data Validation<br/>
            Three tabs: Settings, Input Message, Error Alert<br/>
            <br/>
            // 1. SETTINGS Tab (The Rule):<br/>
            <b>Allow:</b> What type of data is allowed<br/>
            • Any: No validation (turn off)<br/>
            • Whole number: Only integers<br/>
            • Decimal: Numbers with decimals<br/>
            • List: Drop-down from range or typed list<br/>
            • Date: Only dates within range<br/>
            • Time: Only times within range<br/>
            • Text length: Limits character count<br/>
            • Custom: Formula-based validation<br/>
            <br/>
            <b>Data:</b> The condition<br/>
            • between, not between, equal to, not equal to, greater than, etc.<br/>
            • For lists: just need source<br/>
            <br/>
            // 2. INPUT MESSAGE Tab (The Helper):<br/>
            • Shows when cell is selected<br/>
            • "Click here to select department"<br/>
            • Optional but recommended<br/>
            <br/>
            // 3. ERROR ALERT Tab (The Enforcer):<br/>
            • Shows when invalid data entered<br/>
            • <b>Style:</b> Stop, Warning, Information<br/>
            • Stop: Must correct to proceed<br/>
            • Warning: Can choose to proceed<br/>
            • Information: Just notifies<br/>
            • Title and error message<br/>
            <br/>
            // Common Validation Rules:<br/>
            1. <b>Drop-down list:</b> Allow: List, Source: =$D$2:$D$10<br/>
            2. <b>Date range:</b> Allow: Date, between: 1/1/2024 and 12/31/2024<br/>
            3. <b>Whole numbers 1-100:</b> Allow: Whole number, between 1 and 100<br/>
            4. <b>Text length 10 chars:</b> Allow: Text length, equal to 10<br/>
            5. <b>No duplicates:</b> Allow: Custom, Formula: =COUNTIF($A$2:$A$100, A2)=1<br/>
            <br/>
            // Applying to Multiple Cells:<br/>
            1. Select range first<br/>
            2. Data → Data Validation<br/>
            3. Set rules apply to all selected cells<br/>
            4. Use relative/absolute references appropriately in formulas<br/>
            <br/>
            // Copying Validation:<br/>
            • Copy cell with validation<br/>
            • Paste Special → Validation only<br/>
            • Or use Format Painter
        </pre>
    </div>
    
    <b>e. Advanced Data Validation Techniques</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Dynamic Drop-down Lists:</b><br/>
        • List changes based on another selection<br/>
        • Example: Choose Country → get Cities for that country<br/>
        • Use named ranges with OFFSET or Tables<br/>
        • Dependent/conditional validation<br/>
        <br/>
        <b>2. Formula-Based Validation:</b><br/>
        • Allow: Custom<br/>
        • Formula returns TRUE for valid, FALSE for invalid<br/>
        • =AND(A2>=TODAY(), A2<=TODAY()+30) ← Dates next 30 days only<br/>
        • =ISNUMBER(FIND("@", B2)) ← Must contain @ (email)<br/>
        • =LEN(A2)=10 ← Exactly 10 characters<br/>
        • =COUNTIF($A$2:$A$100, A2)=1 ← No duplicates<br/>
        <br/>
        <b>3. Cascading/Dependent Lists:</b><br/>
        Country → State → City selection<br/>
        • Create named ranges for each country's states<br/>
        • Data Validation for State: =INDIRECT(A2) where A2=Country<br/>
        • Requires named ranges matching country names<br/>
        <br/>
        <b>4. Date Restrictions:</b><br/>
        • =AND(A2>=DATE(2024,1,1), A2<=DATE(2024,12,31))<br/>
        • =A2>=TODAY() ← No past dates<br/>
        • =WEEKDAY(A2,2)<6 ← Weekdays only (no weekends)<br/>
        <br/>
        <b>5. Text Pattern Validation:</b><br/>
        • Email: =AND(ISNUMBER(FIND("@", A2)), ISNUMBER(FIND(".", A2)))<br/>
        • Phone: =AND(LEN(A2)=10, ISNUMBER(VALUE(A2)))<br/>
        • Product Code: =LEFT(A2,3)="PRD" ← Must start with PRD<br/>
        <br/>
        <b>6. Cross-Sheet Validation:</b><br/>
        • Reference ranges on other sheets<br/>
        • List Source: =Sheet2!$A$2:$A$50<br/>
        • Use named ranges for cleaner references<br/>
        <br/>
        <b>7. Input Message Tips:</b><br/>
        • Be specific: "Enter date between Jan 1 and Dec 31, 2024"<br/>
        • Include format: "Use MM/DD/YYYY format"<br/>
        • Add examples: "Example: 01/15/2024"<br/>
        • Keep it concise<br/>
        <br/>
        <b>8. Error Alert Strategies:</b><br/>
        • <b>Stop:</b> For critical data (IDs, codes, key fields)<br/>
        • <b>Warning:</b> For preferences or optional fields<br/>
        • <b>Information:</b> For guidance or suggestions<br/>
        • Include corrective action: "Please select from the list"<br/>
        <br/>
        <b>9. Finding Validation Cells:</b><br/>
        • Home → Find & Select → Data Validation<br/>
        • Highlights all cells with validation rules<br/>
        • Great for auditing sheets<br/>
        <br/>
        <b>10. Circle Invalid Data:</b><br/>
        • Data → Data Validation → Circle Invalid Data<br/>
        • Draws red circles around cells breaking rules<br/>
        • Data → Clear Validation Circles to remove
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: VLOOKUP Practice</b><br/>
        1. Create new workbook "VLOOKUP_Practice.xlsx"<br/>
        2. Worksheet "Products":<br/>
        • A2:A11: Product IDs (P001, P002, ... P010)<br/>
        • B2:B11: Product Names<br/>
        • C2:C11: Prices ($10, $20, ... $100)<br/>
        • D2:D11: Categories (Electronics, Clothing, Home)<br/>
        3. Worksheet "Orders":<br/>
        • A2:A6: Enter some Product IDs<br/>
        • B2 formula: =VLOOKUP(A2, Products!$A$2:$D$11, 2, FALSE) ← Name<br/>
        • C2 formula: =VLOOKUP(A2, Products!$A$2:$D$11, 3, FALSE) ← Price<br/>
        • D2 formula: =VLOOKUP(A2, Products!$A$2:$D$11, 4, FALSE) ← Category<br/>
        • Copy down<br/>
        • Test with invalid ID (should get #N/A)<br/>
        <br/>
        <b>Part B: Approximate Match VLOOKUP</b><br/>
        1. Worksheet "Commission":<br/>
        • Create commission table (sorted!):<br/>
          A2:A6: 0, 10000, 20000, 30000, 40000<br/>
          B2:B6: 5%, 7%, 9%, 11%, 13%<br/>
        • Sales amounts in D2:D6<br/>
        • Commission rate: =VLOOKUP(D2, $A$2:$B$6, 2, TRUE)<br/>
        • Commission amount: =D2*E2 (sales × rate)<br/>
        • Test boundary values: 9999, 10000, 10001<br/>
        <br/>
        <b>Part C: Data Validation Basics</b><br/>
        1. Worksheet "Employee_Entry":<br/>
        • A2:A10: Department (create drop-down: Sales, Marketing, IT, HR)<br/>
        • B2:B10: Hire Date (date between 1/1/2020 and TODAY())<br/>
        • C2:C10: Salary (whole number between 30000 and 150000)<br/>
        • D2:D10: Email (custom formula: contains "@" and ".")<br/>
        • E2:E10: Employee ID (text length = 6, no duplicates)<br/>
        • Add input messages and error alerts<br/>
        • Test invalid entries<br/>
        <br/>
        <b>Part D: Combined Exercise</b><br/>
        1. Create dependent drop-downs:<br/>
        • F2: Country (USA, Canada, UK)<br/>
        • G2: City (depends on country)<br/>
        • Create named ranges: USA_Cities, Canada_Cities, UK_Cities<br/>
        • Data Validation for City: =INDIRECT(F2&"_Cities")<br/>
        2. Use VLOOKUP to get city information from a cities table
    </div>
    
    <hr/>
    
    <h3>Combining VLOOKUP with Data Validation</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Powerful Combinations:</b><br/>
        
        <b>1. Lookup with Validated Input:</b><br/>
        • Drop-down list for Product IDs<br/>
        • VLOOKUP automatically fills product details<br/>
        • Ensures only valid IDs entered<br/>
        • Eliminates #N/A errors from typos<br/>
        <br/>
        <b>2. Dynamic Price Lists:</b><br/>
        • Customer Type drop-down: Retail, Wholesale, VIP<br/>
        • VLOOKUP with MATCH to get correct price column<br/>
        • Different prices for different customer types<br/>
        • All in one price table<br/>
        <br/>
        <b>3. Tiered Discount System:</b><br/>
        • Order Quantity entered (validated: >0)<br/>
        • VLOOKUP approximate match finds discount tier<br/>
        • Automatic discount calculation<br/>
        • Ensures valid quantities<br/>
        <br/>
        <b>4. Employee Onboarding Form:</b><br/>
        • Department drop-down<br/>
        • VLOOKUP fills department manager, budget code, location<br/>
        • All from department master table<br/>
        • Ensures consistent department names<br/>
        <br/>
        <b>5. Invoice System:</b><br/>
        • Product drop-down (from validated list)<br/>
        • VLOOKUP gets price, tax rate, description<br/>
        • Quantity validated (must be >0, whole number)<br/>
        • Total calculated automatically<br/>
        <br/>
        <b>6. Project Management:</b><br/>
        • Project ID drop-down<br/>
        • VLOOKUP gets project manager, budget, timeline<br/>
        • Status validated (Not Started, In Progress, Completed)<br/>
        • Ensures consistent status tracking<br/>
        <br/>
        <b>Implementation Example:</b><br/>
        <div style="background-color: white; padding: 10px; margin: 10px 0; border-radius: 5px;">
            <b>Step 1:</b> Create Product Master Table (Sheet: Products)<br/>
            • Columns: ID, Name, Price, Category, Supplier<br/>
            <br/>
            <b>Step 2:</b> Create Order Form (Sheet: OrderForm)<br/>
            • A2: Product ID (Data Validation → List → =Products!$A$2:$A$100)<br/>
            • B2: =IF(A2="", "", VLOOKUP(A2, Products!$A$2:$E$100, 2, FALSE))<br/>
            • C2: =IF(A2="", "", VLOOKUP(A2, Products!$A$2:$E$100, 3, FALSE))<br/>
            • D2: Quantity (Validation: Whole number, ≥1, ≤100)<br/>
            • E2: =IF(A2="", "", C2*D2)<br/>
            <br/>
            <b>Result:</b> User selects from validated list, details auto-fill, quantity validated, total calculated
        </div>
        
        <b>Error Handling with IFERROR:</b><br/>
        =IFERROR(VLOOKUP(A2, Table, 2, FALSE), "Not Found")<br/>
        • Returns "Not Found" instead of #N/A<br/>
        • Cleaner user experience<br/>
        • Especially important with validated lists (shouldn't happen, but safe)<br/>
        <br/>
        <b>Alternative: IFNA (Excel 2013+):</b><br/>
        =IFNA(VLOOKUP(A2, Table, 2, FALSE), "Not Found")<br/>
        • Only catches #N/A errors<br/>
        • Other errors (like #REF!) still show<br/>
        • More precise error handling
    </div>
    
    <hr/>
    
    <h3>Common VLOOKUP Errors & Solutions</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. #N/A Error (Value Not Found):</b><br/>
        • Problem: Lookup value doesn't exist in first column<br/>
        • Causes: Typos, extra spaces, different data types<br/>
        • Check: =EXACT(A2, lookup_cell)<br/>
        • Fix: TRIM() to remove spaces, VALUE() for numbers stored as text<br/>
        • Prevention: Data validation drop-down lists<br/>
        <br/>
        <b>2. #REF! Error (Invalid Reference):</b><br/>
        • Problem: Column index out of range<br/>
        • Example: Table has 3 columns, but col_index_num = 4<br/>
        • Fix: Count columns correctly (1 = first column in range)<br/>
        • Prevention: Use COLUMNS function: =COLUMNS(Table)-1 for last column<br/>
        <br/>
        <b>3. #VALUE! Error (Wrong Data Type):</b><br/>
        • Problem: col_index_num is text or less than 1<br/>
        • Example: =VLOOKUP(A2, Table, "2", FALSE) ← "2" is text<br/>
        • Fix: Use number for column index<br/>
        <br/>
        <b>4. Wrong Results (Approximate Match Issues):</b><br/>
        • Problem: Unsorted data with approximate match (TRUE)<br/>
        • Returns unexpected value<br/>
        • Fix: Sort data or use FALSE for exact match<br/>
        • ALWAYS specify FALSE for exact matches!<br/>
        <br/>
        <b>5. Spill Error (Excel 365):</b><br/>
        • Problem: Result would spill into occupied cells<br/>
        • Fix: Clear cells below or use @ for single result<br/>
        <br/>
        <b>6. Numbers as Text Problem:</b><br/>
        • Lookup value: 100 (number)<br/>
        • Table has: "100" (text)<br/>
        • Won't match!<br/>
        • Fix: =VLOOKUP(VALUE(A2), Table, 2, FALSE) or standardize data types<br/>
        • Check: =ISTEXT(A2) vs =ISNUMBER(Table!A2)<br/>
        <br/>
        <b>7. Extra Spaces:</b><br/>
        • "Apple" ≠ "Apple " (trailing space)<br/>
        • "Apple" ≠ " Apple" (leading space)<br/>
        • Fix: =VLOOKUP(TRIM(A2), Table, 2, FALSE)<br/>
        • Clean data with TRIM() function<br/>
        <br/>
        <b>8. Table Not Locked (Absolute References):</b><br/>
        • Problem: =VLOOKUP(A2, B2:E100, 2, FALSE) copied down becomes B3:E101<br/>
        • Fix: =VLOOKUP(A2, $B$2:$E$100, 2, FALSE)<br/>
        • Use F4 to add $ signs<br/>
        <br/>
        <b>Debugging Tools:</b><br/>
        • <b>Evaluate Formula:</b> Step through calculation<br/>
        • <b>F9:</b> Select part of formula, press F9 to see result<br/>
        • <b>Trace Precedents:</b> See where formula gets data<br/>
        • <b>Watch Window:</b> Monitor key cells<br/>
        • <b>Formula Auditing:</b> Show all formulas (Ctrl+')
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 2 Assignment: Complete Order Management System</h4>
        
        <b>Task: Build a professional order entry system with VLOOKUP and data validation</b><br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Worksheet 1: "Master_Data"</b><br/>
            Create comprehensive master tables:<br/>
            1. <b>Products Table:</b> ProductID, ProductName, Category, UnitPrice, Supplier, InStock<br/>
               • 20+ products across 5 categories<br/>
               • Different prices, some out of stock<br/>
            2. <b>Customers Table:</b> CustomerID, CustomerName, CustomerType (Retail/Wholesale/VIP),<br/>
               &nbsp;&nbsp;DiscountRate, CreditLimit, ContactEmail<br/>
               • 15+ customers with different types and discounts<br/>
            3. <b>Employees Table:</b> EmployeeID, EmployeeName, Department, CommissionRate<br/>
               • Sales staff with different commission rates<br/>
            4. <b>Shipping Table:</b> Zone, RatePerKg, DeliveryDays<br/>
               • Shipping rates by weight zones<br/>
            <br/>
            <b>Worksheet 2: "Order_Entry"</b><br/>
            Create user-friendly order form with validation and lookups:<br/>
            1. <b>Header Section (validated inputs):</b><br/>
               • Order Date (must be today or future, weekdays only)<br/>
               • Customer ID (drop-down from Customers table)<br/>
               • Sales Rep (drop-down from Employees table)<br/>
               • Shipping Zone (drop-down from Shipping table)<br/>
            2. <b>Order Lines (10 rows):</b><br/>
               • Product ID (drop-down from Products table)<br/>
               • Auto-fill columns using VLOOKUP:<br/>
                 - Product Name, Category, Unit Price<br/>
               • Quantity (must be >0, whole number, ≤available stock)<br/>
               • Line Total (Price × Quantity)<br/>
               • Validation: Can't select out-of-stock products<br/>
            3. <b>Summary Section (auto-calculated):</b><br/>
               • Subtotal (sum of line totals)<br/>
               • Customer Discount (VLOOKUP customer type rate)<br/>
               • Discount Amount<br/>
               • Shipping Cost (based on weight × zone rate)<br/>
               • Sales Commission (based on sales rep rate)<br/>
               • Grand Total<br/>
            <br/>
            <b>Worksheet 3: "Reports"</b><br/>
            Generate automated reports:<br/>
            1. Top selling products (using formulas)<br/>
            2. Sales by customer type<br/>
            3. Commission due by employee<br/>
            4. Inventory status (update stock levels)<br/>
        </div>
        
        <b>Technical Requirements:</b>
        <ul>
            <li>Use VLOOKUP with both exact and approximate matches</li>
            <li>Implement at least 5 different data validation rules</li>
            <li>Create dependent drop-down lists (category → product)</li>
            <li>Use IFERROR with all VLOOKUP formulas</li>
            <li>Apply conditional formatting for low stock/errors</li>
            <li>Create named ranges for all lookup tables</li>
            <li>Use table formatting for master data</li>
            <li>Protect formulas while allowing data entry</li>
        </ul>
        
        <b>Deliverables:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Excel file: "Order_System_YourName.xlsx"<br/>
            2. PDF showing formulas view<br/>
            3. Screenshots demonstrating:<br/>
               • VLOOKUP formulas with error handling<br/>
               • Data validation settings for different rules<br/>
               • Dependent drop-down lists in action<br/>
               • Circle Invalid Data feature<br/>
               • Named ranges in use<br/>
            4. Written explanation of:<br/>
               • How you chose between exact vs approximate match<br/>
               • Why each validation rule was implemented<br/>
               • How the system prevents common data entry errors<br/>
               • Real-world business benefits of this system
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1 - Advanced Features:</b><br/>
            • Add bulk order discount (tiered pricing)<br/>
            • Create automatic order number generation<br/>
            • Add order status tracking (Pending, Shipped, Delivered)<br/>
            • Implement return/refund processing<br/>
            • Add customer credit limit checking<br/>
            <br/>
            <b>Level 2 - Dynamic Systems:</b><br/>
            • Make pricing dynamic (seasonal, promotional)<br/>
            • Create real-time inventory updates<br/>
            • Add automated reorder points<br/>
            • Implement customer loyalty points<br/>
            • Create sales forecasting based on history<br/>
            <br/>
            <b>Level 3 - Complete ERP System:</b><br/>
            • Integrate with purchase orders for suppliers<br/>
            • Add employee performance tracking<br/>
            • Create customer portal view<br/>
            • Implement barcode scanning integration<br/>
            • Add multi-currency support<br/>
            • Create API integration for e-commerce
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 VLOOKUP & Data Validation Mastery Checklist</h3>
        
        <b>You should now be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Write VLOOKUP formulas with all four arguments<br/>
            ✅ Choose between exact and approximate match appropriately<br/>
            ✅ Create and manage data validation rules<br/>
            ✅ Build drop-down lists and dependent lists<br/>
            ✅ Combine VLOOKUP with data validation for robust systems<br/>
            ✅ Handle VLOOKUP errors with IFERROR/IFNA<br/>
            ✅ Debug common VLOOKUP and validation issues<br/>
            ✅ Use named ranges for cleaner formulas<br/>
            ✅ Apply validation to prevent data entry errors<br/>
            ✅ Build complete data entry systems with lookups and validation
        </div>
        
        <p><b>VLOOKUP vs. Alternatives:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Function</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Best For</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Limitations</th>
                <th style="padding: 10px; border: 1px solid #ddd;">When to Use</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>VLOOKUP</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Simple rightward lookups</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Can't look left, slow on big data</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Legacy systems, simple needs</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>INDEX/MATCH</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Flexible lookups any direction</td>
                <td style="padding: 10px; border: 1px solid #ddd;">More complex syntax</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Advanced users, complex sheets</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>XLOOKUP</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Modern, powerful lookups</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Excel 365/2021 only</td>
                <td style="padding: 10px; border: 1px solid #ddd;">New projects, Excel 365</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Data Validation</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Controlling data entry</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Can be bypassed (copy/paste)</td>
                <td style="padding: 10px; border: 1px solid #ddd;">All data entry forms</td>
            </tr>
        </table>
        
        <p><b>Pro Tips for Success:</b></p>
        <ol>
            <li><b>Always use FALSE for exact matches</b> unless you specifically need approximate</li>
            <li><b>Use Tables for lookup ranges</b> - they auto-expand and have structured references</li>
            <li><b>Name your ranges</b> =VLOOKUP(A2, ProductTable, 2, FALSE) is clearer</li>
            <li><b>Test with extreme values</b> What happens with blanks, zeros, very large numbers?</li>
            <li><b>Document your validation rules</b> Create a "Data Dictionary" worksheet</li>
            <li><b>Use input messages</b> They guide users and reduce errors</li>
            <li><b>Protect your lookup tables</b> Lock cells with formulas and validation</li>
            <li><b>Consider XLOOKUP for new projects</b> It's more powerful and flexible</li>
        </ol>
        
        <p><b>Tomorrow:</b> Sorting, Filtering & Data Cleaning - Organizing and preparing data for analysis with Pivot Tables!</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/office/vlookup-function-0bbc8083-26fe-4963-8ab8-93a18ad188a1" target="_blank">Microsoft VLOOKUP Guide</a><br/>
        • <a href="https://support.microsoft.com/en-us/office/apply-data-validation-to-cells-29fecbcc-d1b9-42c1-9d76-eff3ce5f7249" target="_blank">Data Validation Guide</a><br/>
        • <a href="https://www.excel-easy.com/examples/vlookup.html" target="_blank">VLOOKUP Examples</a><br/>
        • <a href="https://www.contextures.com/xlDataVal01.html" target="_blank">Data Validation Tutorial</a><br/>
        • <a href="https://www.youtube.com/watch?v=4YtqD_-SfHE" target="_blank">VLOOKUP Tutorial Video</a></p>
        
        <p style="text-align: center; font-size: 1.1em; color: #4a6fa5;">
            <b>Remember: VLOOKUP finds data, but data validation ensures it's worth finding.<br/>
            Together, they create professional, error-resistant spreadsheets! 🔍</b>
        </p>
    </div>`
            },
            "6-3": {
                "icon": "fas fa-filter",
                "title": "Sorting, Filtering & Pivot Tables",
                "html": `<h1>Week 6, Day 3: Sorting, Filtering & Pivot Tables</h1>
    <p>Today we transform raw data into actionable insights! You'll learn how to organize, analyze, and summarize large datasets efficiently using Excel's most powerful analysis tools.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Data Detective & The Summarizer 🕵️♂️</b><br/>
        Sorting: Alphabetizing files or arranging by date<br/>
        Filtering: Hiding irrelevant files to focus on what matters<br/>
        Pivot Table: The summary report that answers specific questions<br/>
        Fields: The categories you can analyze (like report columns)<br/>
        Values: The numbers you want to summarize (totals, averages)<br/>
        Slicers: Interactive buttons to filter data visually<br/>
        Pivot Chart: The visual story of your summarized data<br/>
        GETPIVOTDATA: Extracting specific numbers from your summary
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Sorting data by single and multiple criteria</li>
        <li>Using filters to view specific data subsets</li>
        <li>Creating and customizing Pivot Tables</li>
        <li>Analyzing data with different summary functions</li>
        <li>Using slicers and timelines for interactive filtering</li>
        <li>Creating Pivot Charts for visual analysis</li>
        <li>Grouping data in Pivot Tables (dates, numbers, text)</li>
        <li>Calculated fields and items in Pivot Tables</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Sorting: Organizing Your Data</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Why Sort Data?</b><br/>
        • Find patterns and trends<br/>
        • Prepare data for analysis<br/>
        • Make data easier to read<br/>
        • Required for some functions (VLOOKUP approximate match)<br/>
        <br/>
        <b>Basic Sorting:</b><br/>
        1. Click any cell in the column to sort<br/>
        2. Data tab → Sort A to Z (ascending) or Sort Z to A (descending)<br/>
        3. Or: Right-click → Sort<br/>
        4. Keyboard: Alt+A+S+A (Ascending) or Alt+A+S+D (Descending)<br/>
        <br/>
        <b>Sorting Rules:</b><br/>
        • <b>Text:</b> A-Z or Z-A (alphabetical)<br/>
        • <b>Numbers:</b> Smallest to largest or vice versa<br/>
        • <b>Dates:</b> Oldest to newest or vice versa<br/>
        • <b>Custom lists:</b> Monday, Tuesday... or Jan, Feb...<br/>
        <br/>
        <b>Multi-Level Sorting:</b><br/>
        Sort by Department (A-Z), then by Salary (largest to smallest)<br/>
        1. Data tab → Sort<br/>
        2. Add Level<br/>
        3. First: Column "Department", Order A to Z<br/>
        4. Add Level: Column "Salary", Order Largest to Smallest<br/>
        5. Can add up to 64 levels!<br/>
        <br/>
        <b>Sorting Options:</b><br/>
        • <b>My data has headers:</b> Excel recognizes column titles<br/>
        • <b>Sort left to right:</b> Sort rows instead of columns (rare)<br/>
        • <b>Case sensitive:</b> A ≠ a (Options button)<br/>
        • <b>Custom lists:</b> Sort by day/month order, not alphabetically<br/>
        <br/>
        <b>Sorting Best Practices:</b><br/>
        1. Always include ALL related data (select entire range or use Table)<br/>
        2. Use Tables (Ctrl+T) for automatic range expansion<br/>
        3. Create backup before major sorting operations<br/>
        4. Use Undo (Ctrl+Z) if sort goes wrong<br/>
        <br/>
        <b>Common Issues:</b><br/>
        • Blank rows break sorting (data gets separated)<br/>
        • Merged cells cause problems (unmerge before sorting)<br/>
        • Partial selection sorts only selected cells (messes up data)<br/>
        • Text vs numbers: "10" comes before "2" in text sorting!
    </div>
    
    <b>b. Filtering: Focusing on What Matters</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // What Filtering Does:<br/>
            • Hides rows that don't meet criteria<br/>
            • Does NOT delete data<br/>
            • Can filter multiple columns at once<br/>
            • Filtered rows have row numbers in blue<br/>
            <br/>
            // Turning On Filters:<br/>
            1. Select any cell in data range<br/>
            2. Data tab → Filter (or Ctrl+Shift+L)<br/>
            3. Drop-down arrows appear in header cells<br/>
            4. Click arrow to see filter options<br/>
            <br/>
            // Basic Filter Types:<br/>
            <b>Text Filters:</b><br/>
            • Equals, Does Not Equal, Begins With, Ends With, Contains, Does Not Contain<br/>
            • Custom Filter: AND/OR combinations<br/>
            • Search box: Type to find matching items<br/>
            <br/>
            <b>Number Filters:</b><br/>
            • Equals, Greater Than, Less Than, Between, Top 10, Above Average<br/>
            • Custom Filter: Complex number conditions<br/>
            <br/>
            <b>Date Filters:</b><br/>
            • Equals, Before, After, Between<br/>
            • Special: Today, Tomorrow, Next Week, Last Month, Year to Date<br/>
            • Dynamic date ranges (relative to today)<br/>
            <br/>
            // Multiple Filters:<br/>
            • Filter Department = "Sales"<br/>
            • Then filter Sales > 10000<br/>
            • Shows only Sales department with sales > 10000<br/>
            • Filters are cumulative (AND logic)<br/>
            <br/>
            // Clearing Filters:<br/>
            • Data tab → Clear (removes all filters)<br/>
            • Click filter arrow → Clear Filter From "ColumnName"<br/>
            • Filter button turns into funnel with checkmark when active<br/>
            <br/>
            // Advanced Filter (Complex Criteria):<br/>
            1. Set up criteria range elsewhere<br/>
            2. Data tab → Advanced<br/>
            3. Choose: Filter in place or copy to another location<br/>
            4. Can use formulas in criteria<br/>
            <br/>
            // Filter by Selection:<br/>
            1. Right-click a cell with value you want to filter by<br/>
            2. Filter → Filter by Selected Cell's Value<br/>
            3. Or: Filter → Filter by Cell's Color/Font Color/Icon<br/>
            <br/>
            // Special Filter Features:<br/>
            • <b>Filter by color:</b> Cells with fill color, font color, or icons<br/>
            • <b>Search in filter:</b> Type to find items in long lists<br/>
            • <b>Select All/Search:</b> Checkboxes for multiple selections<br/>
            • <b>Blanks/NonBlanks:</b> Quickly filter empty or filled cells
        </pre>
    </div>
    
    <b>c. Pivot Tables: The Ultimate Data Summarizer</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>What is a Pivot Table?</b><br/>
        Interactive tool that summarizes large datasets without formulas<br/>
        • Drag-and-drop interface<br/>
        • Instant summaries<br/>
        • Multiple perspectives on same data<br/>
        • No formulas to write or debug<br/>
        <br/>
        <b>Creating Your First Pivot Table:</b><br/>
        1. Click any cell in your data<br/>
        2. Insert tab → Pivot Table<br/>
        3. Choose: New Worksheet (recommended) or Existing Worksheet<br/>
        4. Click OK<br/>
        5. Pivot Table Fields pane appears on right<br/>
        <br/>
        <b>The Four Pivot Table Areas:</b><br/>
        1. <b>Filters:</b> Global filters for entire table (like Report Filters)<br/>
        2. <b>Columns:</b> Field values become column headers<br/>
        3. <b>Rows:</b> Field values become row labels<br/>
        4. <b>Values:</b> The numbers to summarize (sum, count, average, etc.)<br/>
        <br/>
        <b>Drag and Drop Magic:</b><br/>
        • Drag "Region" to Rows area → Shows list of regions<br/>
        • Drag "Sales" to Values area → Shows sum of sales by region<br/>
        • Drag "Product" to Columns area → Creates product columns<br/>
        • Drag "Quarter" to Filters area → Adds quarter filter dropdown<br/>
        <br/>
        <b>Value Field Settings:</b><br/>
        Double-click any value field to change:<br/>
        • <b>Summarize Values By:</b> Sum, Count, Average, Max, Min, Product, etc.<br/>
        • <b>Show Values As:</b> % of total, % of row, % of column, rank, etc.<br/>
        • <b>Number Format:</b> Currency, percentage, decimal places<br/>
        <br/>
        <b>Common Pivot Table Calculations:</b><br/>
        • <b>Sum:</b> Total sales, total quantity<br/>
        • <b>Count:</b> Number of transactions, number of customers<br/>
        • <b>Average:</b> Average sale amount, average rating<br/>
        • <b>Max/Min:</b> Highest/lowest sale, best/worst performer<br/>
        • <b>Distinct Count:</b> Number of unique customers (Excel 2013+)<br/>
        <br/>
        <b>Refreshing Pivot Tables:</b><br/>
        • Pivot Tables don't update automatically!<br/>
        • After changing source data: Analyze tab → Refresh<br/>
        • Or right-click Pivot Table → Refresh<br/>
        • Keyboard: Alt+F5<br/>
        • Data tab → Refresh All (refreshes all Pivot Tables)<br/>
        <br/>
        <b>Changing Source Data:</b><br/>
        • If data expands: Analyze → Change Data Source<br/>
        • Select new range<br/>
        • Better: Use Table for source data (auto-expands)
    </div>
    
    <b>d. Advanced Pivot Table Features</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // 1. Grouping Data:<br/>
            • <b>Dates:</b> Group by Years, Quarters, Months, Days<br/>
              Right-click date field → Group → Choose grouping<br/>
            • <b>Numbers:</b> Create bins (0-100, 101-200, etc.)<br/>
              Right-click number field → Group → Set start/end/increment<br/>
            • <b>Text:</b> Manual grouping (select items, right-click → Group)<br/>
              Example: Group states into regions<br/>
            <br/>
            // 2. Calculated Fields & Items:<br/>
            • <b>Calculated Field:</b> New field from existing fields<br/>
              Analyze → Fields, Items & Sets → Calculated Field<br/>
              Example: Profit = Sales - Cost<br/>
            • <b>Calculated Item:</b> New item within existing field<br/>
              Example: "West Coast" = California + Oregon + Washington<br/>
            <br/>
            // 3. Slicers (Interactive Filtering):<br/>
            • Visual filter buttons<br/>
            • Insert → Slicer<br/>
            • Choose fields to create slicers for<br/>
            • Click buttons to filter<br/>
            • Multiple slicers can be connected to multiple Pivot Tables<br/>
            • Format with Slicer Tools tab<br/>
            <br/>
            // 4. Timelines (Date Filtering):<br/>
            • Special slicer for dates<br/>
            • Insert → Timeline<br/>
            • Only works with date fields<br/>
            • Filter by years, quarters, months, days<br/>
            • Drag slider to select date range<br/>
            <br/>
            // 5. Pivot Charts:<br/>
            • Charts linked to Pivot Tables<br/>
            • Insert → Pivot Chart<br/>
            • Updates when Pivot Table updates<br/>
            • Filter Pivot Table → Chart updates automatically<br/>
            • Use slicers/timelines to filter both<br/>
            <br/>
            // 6. GETPIVOTDATA Function:<br/>
            • Extracts specific data from Pivot Table<br/>
            • =GETPIVOTDATA("Sales", $A$3, "Region", "North", "Product", "Widget")<br/>
            • More reliable than cell references (survives Pivot Table changes)<br/>
            • Turn off: Analyze → Options → Generate GETPIVOTDATA<br/>
            <br/>
            // 7. Multiple Consolidation Ranges:<br/>
            • Combine data from multiple ranges/sheets<br/>
            • Create Pivot Table from multiple sources<br/>
            • Analyze → Pivot Table → Multiple Consolidation Ranges<br/>
            <br/>
            // 8. Pivot Table Styles & Layouts:<br/>
            • Design tab → Choose style<br/>
            • Layout: Compact, Outline, Tabular<br/>
            • Subtotals: Show at top/bottom, or don't show<br/>
            • Grand Totals: For rows/columns/both<br/>
            <br/>
            // 9. Data Model & Relationships (Power Pivot):<br/>
            • Advanced: Multiple related tables<br/>
            • Create relationships between tables<br/>
            • DAX formulas for advanced calculations<br/>
            • Handle millions of rows<br/>
            <br/>
            // 10. Conditional Formatting in Pivot Tables:<br/>
            • Highlight top/bottom values<br/>
            • Data bars, color scales, icon sets<br/>
            • Apply to value fields<br/>
            • Updates when Pivot Table refreshes
        </pre>
    </div>
    
    <b>e. Practical Business Analysis Examples</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Sales Analysis Dashboard:</b><br/>
        • Rows: Product Category, Product Name<br/>
        • Columns: Quarter (grouped from dates)<br/>
        • Values: Sum of Sales, Count of Transactions, Average Sale<br/>
        • Filters: Region, Sales Rep<br/>
        • Slicers: Year, Product Category<br/>
        • Timeline: Date range<br/>
        <br/>
        <b>2. Customer Analysis:</b><br/>
        • Rows: Customer Segment, Customer Name<br/>
        • Values: Sum of Sales, Count of Orders, Max Order Value<br/>
        • Show Values As: % of Parent Row Total<br/>
        • Filter: Show Top 10 Customers by Sales<br/>
        • Calculated Field: Average Order Value = Sales / Order Count<br/>
        <br/>
        <b>3. Employee Performance:</b><br/>
        • Rows: Department, Employee Name<br/>
        • Values: Sum of Sales, Count of Customers, Average Rating<br/>
        • Group sales into bins: 0-10000, 10001-20000, etc.<br/>
        • Conditional formatting: Top performers in green<br/>
        • Filter: Show employees with sales above target<br/>
        <br/>
        <b>4. Inventory Management:</b><br/>
        • Rows: Product Category, Product Name<br/>
        • Values: Sum of Quantity Sold, Sum of Current Stock<br/>
        • Calculated Field: Stockout Risk = Current Stock / Average Monthly Sales<br/>
        • Filter: Show products with stock below reorder level<br/>
        • Group: Products by supplier<br/>
        <br/>
        <b>5. Financial Reporting:</b><br/>
        • Rows: Account Category, Account Name<br/>
        • Columns: Month (grouped from dates)<br/>
        • Values: Sum of Amount<br/>
        • Show Values As: % of Column Total (for income statement)<br/>
        • Calculated Item: Gross Profit = Revenue - COGS<br/>
        • Slicers: Fiscal Year, Business Unit<br/>
        <br/>
        <b>6. Survey/Questionnaire Analysis:</b><br/>
        • Rows: Question, Response<br/>
        • Values: Count of Responses<br/>
        • Show Values As: % of Row Total<br/>
        • Filter: By respondent demographic (age, location, etc.)<br/>
        • Group responses: Satisfied = "Very Satisfied" + "Satisfied"<br/>
        <br/>
        <b>7. Time Tracking Analysis:</b><br/>
        • Rows: Project, Task, Employee<br/>
        • Columns: Week (grouped from dates)<br/>
        • Values: Sum of Hours<br/>
        • Show Values As: % of Parent Row Total<br/>
        • Filter: Overtime hours only (>8 hours/day)<br/>
        • Timeline: Select date range for analysis<br/>
        <br/>
        <b>8. Website Analytics:</b><br/>
        • Rows: Page URL, Traffic Source<br/>
        • Values: Sum of Pageviews, Sum of Unique Visitors, Average Time on Page<br/>
        • Show Values As: % Difference From Previous Period<br/>
        • Filter: Top 20 pages by pageviews<br/>
        • Group dates by hour of day for traffic patterns
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Sorting & Filtering Practice</b><br/>
        1. Create new workbook "Analysis_Practice.xlsx"<br/>
        2. Worksheet "Sales_Data": Create sample dataset (50+ rows):<br/>
        • Columns: Date, Region, SalesRep, Product, Units, Price, Total<br/>
        • Include various dates, regions, products, reps<br/>
        3. Practice sorting:<br/>
        • Sort by Region A-Z, then by Total largest to smallest<br/>
        • Sort by Date oldest to newest<br/>
        • Custom sort: Product in specific order (Widget, Gadget, Doodad)<br/>
        4. Practice filtering:<br/>
        • Filter Region = "North" only<br/>
        • Filter Total > 10000<br/>
        • Filter Date in last quarter<br/>
        • Filter SalesRep begins with "J"<br/>
        • Filter multiple: Region="North" AND Total>5000<br/>
        <br/>
        <b>Part B: Basic Pivot Table</b><br/>
        1. Create Pivot Table from Sales_Data<br/>
        2. Build this analysis:<br/>
        • Rows: Region<br/>
        • Values: Sum of Total (shows sales by region)<br/>
        3. Add to analysis:<br/>
        • Columns: Product (creates product columns)<br/>
        • Filters: SalesRep (adds rep filter)<br/>
        4. Modify:<br/>
        • Change Sum to Average<br/>
        • Change layout to Tabular<br/>
        • Add style<br/>
        5. Refresh after changing source data<br/>
        <br/>
        <b>Part C: Advanced Pivot Features</b><br/>
        1. Group dates:<br/>
        • Add Date to Rows area<br/>
        • Right-click date → Group → Months and Years<br/>
        • Observe quarters automatically created<br/>
        2. Create calculated field:<br/>
        • Profit = Total - (Units * Cost) [add Cost column first]<br/>
        • Analyze → Fields, Items & Sets → Calculated Field<br/>
        3. Add slicers:<br/>
        • Insert → Slicer → Choose Region and Product<br/>
        • Use slicers to filter Pivot Table<br/>
        4. Create Pivot Chart:<br/>
        • Select Pivot Table<br/>
        • Analyze → Pivot Chart → Choose Column chart<br/>
        • Filter using slicers - chart updates!
        <br/>
        <b>Part D: Real Analysis Scenario</b><br/>
        Answer these business questions using Pivot Tables:<br/>
        1. Which sales rep has the highest total sales?<br/>
        2. What is the average sale by product category?<br/>
        3. How do sales trend by quarter?<br/>
        4. Which region has the most transactions (count)?<br/>
        5. What percentage of total sales comes from each product?
    </div>
    
    <hr/>
    
    <h3>Best Practices for Data Analysis</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Data Preparation (Before Analysis):</b><br/>
        1. <b>Clean your data:</b> Remove duplicates, fix errors, standardize formats<br/>
        2. <b>Use Tables:</b> Convert ranges to Tables (Ctrl+T) for auto-expansion<br/>
        3. <b>Fill blanks:</b> Empty cells can cause issues in Pivot Tables<br/>
        4. <b>Standardize text:</b> "NY", "New York", "N.Y." → choose one format<br/>
        5. <b>Check data types:</b> Numbers as numbers, dates as dates, text as text<br/>
        <br/>
        <b>Pivot Table Best Practices:</b><br/>
        1. <b>Start with questions:</b> What do you want to know? Build Pivot Table to answer<br/>
        2. <b>Use descriptive field names:</b> "Sales_Amount" not "Column1"<br/>
        3. <b>Refresh regularly:</b> Pivot Tables don't update automatically<br/>
        4. <b>Use GETPIVOTDATA:</b> For referencing Pivot Table data in formulas<br/>
        5. <b>Name your Pivot Tables:</b> Analyze → Pivot Table Name (for referencing)<br/>
        6. <b>Preserve formatting:</b> Pivot Table Options → Layout & Format → Preserve formatting<br/>
        7. <b>Use tabular layout:</b> Easier to read and reference<br/>
        8. <b>Remove "blank" rows:</b> Filter out or clean source data<br/>
        <br/>
        <b>Performance Tips (Large Datasets):</b><br/>
        1. <b>Use Data Model:</b> For millions of rows (Power Pivot)<br/>
        2. <b>Limit calculated fields:</b> They can slow down refresh<br/>
        3. <b>Refresh selectively:</b> Don't refresh all Pivot Tables if not needed<br/>
        4. <b>Use slicers efficiently:</b> Too many slicers can slow performance<br/>
        5. <b>Consider summary tables:</b> Sometimes pre-summarizing data helps<br/>
        <br/>
        <b>Presentation Ready Pivot Tables:</b><br/>
        1. <b>Remove field buttons:</b> Analyze → Show → Hide Field List/Buttons<br/>
        2. <b>Format numbers:</b> Currency, percentages, appropriate decimal places<br/>
        3. <b>Use banded rows:</b> Design → Banded Rows for readability<br/>
        4. <b>Add totals:</b> Design → Grand Totals (On for Rows and Columns)<br/>
        5. <b>Create Pivot Charts:</b> Visual representation of key findings<br/>
        6. <b>Add titles:</b> Click cell above Pivot Table, type descriptive title<br/>
        7. <b>Use conditional formatting:</b> Highlight key insights<br/>
        <br/>
        <b>Common Analysis Mistakes:</b><br/>
        • ❌ Analyzing filtered data without realizing filters are on<br/>
        • ❌ Forgetting to refresh Pivot Tables after data changes<br/>
        • ❌ Using wrong summary function (Count instead of Sum)<br/>
        • ❌ Including totals in averages (double-counting)<br/>
        • ❌ Not checking for blank cells or errors in source data<br/>
        • ❌ Overcomplicating with too many fields at once<br/>
        <br/>
        <b>Audit Your Analysis:</b><br/>
        1. Do the totals make sense?<br/>
        2. Are percentages adding to 100%?<br/>
        3. Can you explain the results to someone else?<br/>
        4. Do the insights lead to actionable decisions?<br/>
        5. Is the data current and complete?
    </div>
    
    <hr/>
    
    <h3>Troubleshooting Common Issues</h3>
    
    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Pivot Table Issues:</b><br/>
        
        <b>1. "PivotTable field name is not valid":</b><br/>
        • Problem: Blank column headers<br/>
        • Fix: Add headers to all columns in source data<br/>
        • Check for merged cells in header row<br/>
        <br/>
        <b>2. Wrong data type in values:</b><br/>
        • Problem: Text in number field shows as Count instead of Sum<br/>
        • Fix: Clean source data, convert text to numbers<br/>
        • Use VALUE() function or Text to Columns<br/>
        <br/>
        <b>3. Grouping not working for dates:</b><br/>
        • Problem: Excel treats dates as text<br/>
        • Fix: Convert to proper dates<br/>
        • Use DATEVALUE() or Text to Columns<br/>
        • Check for mixed date formats (MM/DD vs DD/MM)<br/>
        <br/>
        <b>4. "Field name already exists":</b><br/>
        • Problem: Duplicate field names in source data<br/>
        • Fix: Rename columns to be unique<br/>
        • Excel adds numbers to duplicates (Sales, Sales1, Sales2)<br/>
        <br/>
        <b>5. Pivot Table too slow:</b><br/>
        • Problem: Large dataset with many calculated fields<br/>
        • Fix: Use Data Model (Power Pivot)<br/>
        • Reduce calculated fields<br/>
        • Summarize data before Pivot Table<br/>
        <br/>
        <b>6. GETPIVOTDATA returning #REF!:</b><br/>
        • Problem: Pivot Table layout changed<br/>
        • Fix: Update formula references<br/>
        • Or: Turn off GETPIVOTDATA generation<br/>
        <br/>
        <b>Sorting & Filtering Issues:</b><br/>
        
        <b>7. Filter arrows disappeared:</b><br/>
        • Problem: Filters turned off<br/>
        • Fix: Data tab → Filter (toggle on)<br/>
        • Or: Table converted to range<br/>
        <br/>
        <b>8. Sorting messes up data:</b><br/>
        • Problem: Only part of data selected<br/>
        • Fix: Select entire dataset or use Table<br/>
        • Use Undo (Ctrl+Z) immediately<br/>
        <br/>
        <b>9. Filter not showing all items:</b><br/>
        • Problem: Previously filtered items hidden from list<br/>
        • Fix: Clear all filters first<br/>
        • Or: In filter options, check "Select All"<br/>
        <br/>
        <b>10. Blank rows after filter:</b><br/>
        • Problem: Actual blank rows in data<br/>
        • Fix: Remove blank rows from dataset<br/>
        • Filter out blanks if intentional<br/>
        <br/>
        <b>Debugging Tools:</b><br/>
        • <b>Show Detail:</b> Double-click Pivot Table value to see source data<br/>
        • <b>Pivot Table Options:</b> Right-click → Pivot Table Options<br/>
        • <b>Field Settings:</b> Double-click field in Pivot Table<br/>
        • <b>Refresh All:</b> Data tab → Refresh All (updates all Pivot Tables)<br/>
        • <b>Trace Dependents:</b> For formulas referencing Pivot Tables
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 3 Assignment: Comprehensive Business Intelligence Dashboard</h4>
        
        <b>Task: Create a complete sales analytics dashboard using sorting, filtering, and Pivot Tables</b><br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Worksheet 1: "Raw_Sales_Data"</b><br/>
            Create a robust sales dataset (100+ transactions):<br/>
            1. Columns: TransactionID, Date, CustomerID, CustomerName, Region,<br/>
               &nbsp;&nbsp;ProductCategory, ProductName, SalesRep, Quantity, UnitPrice, TotalSale,<br/>
               &nbsp;&nbsp;Cost, Profit, PaymentMethod, OrderStatus<br/>
            2. Include: Various dates (2+ years), multiple regions, 5+ product categories,<br/>
               &nbsp;&nbsp;10+ products, 5+ sales reps, different payment methods<br/>
            3. Add realistic patterns: Seasonality, regional differences, product trends<br/>
            4. Convert to Table (Ctrl+T) for easy management<br/>
            <br/>
            <b>Worksheet 2: "Pivot_Analysis"</b><br/>
            Create multiple Pivot Tables answering key business questions:<br/>
            1. <b>Pivot Table 1: Sales by Time Period</b><br/>
               • Rows: Date (grouped by Years and Quarters)<br/>
               • Values: Sum of TotalSale, Sum of Profit<br/>
               • Show Values As: % Difference From Previous Period<br/>
               • Timeline: Date selection<br/>
            <br/>
            2. <b>Pivot Table 2: Regional Performance</b><br/>
               • Rows: Region, SalesRep<br/>
               • Columns: ProductCategory<br/>
               • Values: Sum of TotalSale, Count of TransactionID<br/>
               • Show Values As: % of Column Total<br/>
               • Slicer: Region (connected to multiple Pivot Tables)<br/>
            <br/>
            3. <b>Pivot Table 3: Product Analysis</b><br/>
               • Rows: ProductCategory, ProductName<br/>
               • Values: Sum of Quantity, Sum of Profit, Average Profit per Unit<br/>
               • Calculated Field: ProfitMargin = Profit / TotalSale<br/>
               • Filter: Top 10 Products by Profit<br/>
            <br/>
            4. <b>Pivot Table 4: Customer Segmentation</b><br/>
               • Rows: CustomerName<br/>
               • Values: Sum of TotalSale, Count of TransactionID, Max of TotalSale<br/>
               • Group customers: High Value (>$10,000), Medium, Low<br/>
               • Show Values As: % of Grand Total<br/>
            <br/>
            5. <b>Pivot Table 5: Sales Rep Performance</b><br/>
               • Rows: SalesRep<br/>
               • Columns: Quarter (grouped from Date)<br/>
               • Values: Sum of TotalSale, Sum of Profit, Count of Customers<br/>
               • Conditional formatting: Data bars for sales<br/>
               • Filter: Show above average performers<br/>
            <br/>
            <b>Worksheet 3: "Executive_Dashboard"</b><br/>
            Create management dashboard:<br/>
            1. Key metrics cards (using GETPIVOTDATA): Total Sales, Total Profit,<br/>
               &nbsp;&nbsp;Average Transaction, Customer Count<br/>
            2. Pivot Charts: Sales trend line, regional pie chart, product bar chart<br/>
            3. Interactive controls: Slicers for Region, Year, Product Category<br/>
            4. Timeline for date range selection<br/>
            5. Format professionally for presentation<br/>
        </div>
        
        <b>Technical Requirements:</b>
        <ul>
            <li>Create at least 5 different Pivot Tables with different structures</li>
            <li>Use grouping (dates and/or numbers) in at least 2 Pivot Tables</li>
            <li>Implement calculated fields and show values as percentages</li>
            <li>Create and connect slicers to multiple Pivot Tables</li>
            <li>Build at least 3 Pivot Charts from your Pivot Tables</li>
            <li>Use GETPIVOTDATA to extract key metrics for dashboard</li>
            <li>Apply conditional formatting to highlight insights</li>
            <li>Use proper number formatting throughout</li>
        </ul>
        
        <b>Deliverables:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. Excel file: "Business_Dashboard_YourName.xlsx"<br/>
            2. PDF showing the executive dashboard<br/>
            3. Screenshots demonstrating:<br/>
               • Multiple Pivot Tables with different structures<br/>
               • Date grouping in a Pivot Table<br/>
               • Slicers connected to multiple Pivot Tables<br/>
               • Calculated field formula<br/>
               • GETPIVOTDATA function in use<br/>
            4. Written explanation of:<br/>
               • 5 key business insights from your analysis<br/>
               • How each Pivot Table answers a specific business question<br/>
               • Why you chose each Pivot Table structure<br/>
               • How the dashboard would be used in real business meetings
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1 - Advanced Analysis:</b><br/>
            • Add What-If analysis with scenario manager<br/>
            • Create forecasting based on historical trends<br/>
            • Implement Pareto analysis (80/20 rule)<br/>
            • Add cohort analysis for customer retention<br/>
            • Create product affinity analysis (what sells together)<br/>
            <br/>
            <b>Level 2 - Dynamic Systems:</b><br/>
            • Connect to external data source (database, web)<br/>
            • Automate refresh on file open<br/>
            • Create dynamic named ranges for source data<br/>
            • Add user login and permission levels<br/>
            • Implement data validation for manual entries<br/>
            <br/>
            <b>Level 3 - Enterprise Solution:</b><br/>
            • Use Power Query for data transformation<br/>
            • Implement Data Model with relationships<br/>
            • Create DAX measures for advanced calculations<br/>
            • Build hierarchy drill-downs<br/>
            • Add commentary/notes system for insights<br/>
            • Create automated email reports
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 Data Analysis Mastery Checklist</h3>
        
        <b>You should now be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Sort data by single and multiple criteria<br/>
            ✅ Apply and use filters to focus on specific data subsets<br/>
            ✅ Create Pivot Tables from raw data<br/>
            ✅ Customize Pivot Tables with different field arrangements<br/>
            ✅ Use different summary functions (sum, count, average, etc.)<br/>
            ✅ Group data in Pivot Tables (dates, numbers, manual)<br/>
            ✅ Create calculated fields and show values as percentages<br/>
            ✅ Use slicers and timelines for interactive filtering<br/>
            ✅ Build Pivot Charts linked to Pivot Tables<br/>
            ✅ Extract data using GETPIVOTDATA function<br/>
            ✅ Refresh and update Pivot Tables when source data changes
        </div>
        
        <p><b>When to Use Which Tool:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Task</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Best Tool</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Example</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Arrange data in order</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Sorting</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Sort customers by purchase date</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">View specific subset</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Filtering</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Show only Q4 sales</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Summarize and analyze</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Pivot Table</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Sales by region and product</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">Visual filtering</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Slicers</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Click region to filter dashboard</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Date range filtering</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Timeline</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Select fiscal year quarter</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">Visualize summarized data</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Pivot Chart</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Chart of monthly sales trends</td>
            </tr>
        </table>
        
        <p><b>Pro Tips for Data Analysis Success:</b></p>
        <ol>
            <li><b>Always start with clean data:</b> Garbage in, garbage out</li>
            <li><b>Use Tables for source data:</b> Auto-expansion and structured references</li>
            <li><b>Refresh religiously:</b> Pivot Tables don't auto-update</li>
            <li><b>Document your analysis:</b> What question does each Pivot Table answer?</li>
            <li><b>Keep it simple:</b> Start with one question, build one Pivot Table</li>
            <li><b>Use keyboard shortcuts:</b> Alt+N+V for Pivot Table, Alt+F5 to refresh</li>
            <li><b>Protect your work:</b> Separate raw data, analysis, and presentation</li>
            <li><b>Think about your audience:</b> Executives need summaries, analysts need details</li>
            <li><b>Validate your results:</b> Do the numbers make sense?</li>
            <li><b>Automate where possible:</b> Macros for repetitive analysis tasks</li>
        </ol>
        
        <p><b>Tomorrow:</b> Module 3 Final Project - Bring all Excel skills together in a comprehensive business analysis system!</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/office/create-a-pivottable-to-analyze-worksheet-data-a9a84538-bfe9-40a9-a8e9-f99134456576" target="_blank">Microsoft Pivot Table Guide</a><br/>
        • <a href="https://www.excel-easy.com/data-analysis/pivot-tables.html" target="_blank">Pivot Table Tutorial</a><br/>
        • <a href="https://www.contextures.com/CreatePivotTable.html" target="_blank">Advanced Pivot Table Techniques</a><br/>
        • <a href="https://www.youtube.com/watch?v=9NUjHBNWe9M" target="_blank">Pivot Tables Tutorial Video</a><br/>
        • <a href="https://chandoo.org/wp/excel-pivot-tables-tutorial/" target="_blank">Pivot Table Examples & Templates</a></p>
        
        <p style="text-align: center; font-size: 1.1em; color: #4a6fa5;">
            <b>Remember: Data is just numbers until you analyze it.<br/>
            Pivot Tables turn data into decisions, and decisions into results! 📈</b>
        </p>
    </div>`
            },
            "6-4": {
                "icon": "fas fa-graduation-cap",
                "title": "Module 3 Final Project",
                "html": `<h1>Week 6, Day 4: Module 3 Final Project</h1>
    <p>Today you demonstrate mastery of Microsoft Excel by building a complete business intelligence system from scratch. This project integrates every skill learned in Module 3 into a professional, real-world solution.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Corporate Control Center 🏢</b><br/>
        Data Structure: The building foundation and framework<br/>
        Formulas & Functions: The electrical wiring and plumbing<br/>
        VLOOKUP & Validation: The security and access systems<br/>
        Pivot Tables & Charts: The executive dashboards and monitors<br/>
        Sorting & Filtering: The filing and organization systems<br/>
        Final Dashboard: The command center with all controls<br/>
        Portfolio Piece: Your professional showcase for potential employers
    </div>

    <h3>Project Overview</h3>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Company:</b> GlobalTech Solutions Inc. (or create your own)<br/>
        <b>Project:</b> Comprehensive Sales & Operations Analytics System<br/>
        <b>Timeline:</b> 4 hours (simulating real business deadline)<br/>
        <b>Scope:</b> 8 interconnected worksheets forming complete business system<br/>
        <b>Audience:</b> Executive management, sales teams, operations staff<br/>
        <b>Purpose:</b> Provide real-time business insights for decision making<br/>
        <br/>
        <b>Grading Weight:</b><br/>
        • Technical Excellence: 40%<br/>
        • Business Logic: 30%<br/>
        • Professional Presentation: 20%<br/>
        • Documentation: 10%<br/>
        <br/>
        <b>Submission:</b> Excel workbook + PDF reports + Presentation slides
    </div>

    <h3>Project Requirements - Complete Business System</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <h4>Section 1: Data Management & Structure (20 points)</h4>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #4CAF50;">
            <b>Worksheet 1: "Master_Data"</b><br/>
            ☐ <b>Products Table:</b> 30+ products with ID, Name, Category, Cost, Price, Supplier, Reorder Level<br/>
            ☐ <b>Customers Table:</b> 25+ customers with ID, Name, Type (Retail/Wholesale/VIP), Region, Credit Limit<br/>
            ☐ <b>Employees Table:</b> 10+ employees with ID, Name, Department, Hire Date, Salary, Commission Rate<br/>
            ☐ <b>Suppliers Table:</b> 8+ suppliers with ID, Name, Contact, Lead Time, Rating<br/>
            ☐ <b>All tables formatted as Excel Tables (Ctrl+T)</b><br/>
            ☐ <b>Named ranges</b> for key data areas<br/>
            ☐ <b>Data validation</b> on all ID fields (no duplicates)<br/>
        </div>
        
        <h4>Section 2: Transaction Processing (25 points)</h4>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #2196F3;">
            <b>Worksheet 2: "Sales_Transactions"</b><br/>
            ☐ <b>200+ transaction records</b> spanning 2 years<br/>
            ☐ Columns: TransactionID, Date, CustomerID, ProductID, Quantity, UnitPrice,<br/>
              &nbsp;&nbsp;TotalAmount, SalesRepID, PaymentMethod, Status<br/>
            ☐ <b>Automatic calculations:</b> TotalAmount = Quantity × UnitPrice (auto-filled)<br/>
            ☐ <b>Data validation:</b> CustomerID, ProductID, SalesRepID from drop-down lists<br/>
            ☐ <b>Conditional formatting:</b> Highlight transactions > $10,000 in green<br/>
            ☐ <b>Error checking:</b> Prevent sales exceeding credit limits<br/>
            ☐ <b>Dynamic ranges</b> using Table formatting<br/>
        </div>
        
        <h4>Section 3: Advanced Formulas & Functions (20 points)</h4>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #FF9800;">
            <b>Worksheet 3: "Calculations"</b><br/>
            ☐ <b>VLOOKUP mastery:</b> Look up product/customer/employee details<br/>
            ☐ <b>IF functions:</b> Determine commission rates based on sales tiers<br/>
            ☐ <b>Nested IF/IFS:</b> Categorize customers by spending level<br/>
            ☐ <b>AND/OR functions:</b> Complex business rules (e.g., VIP customers with >$5k orders)<br/>
            ☐ <b>SUMIFS/COUNTIFS:</b> Conditional summaries by multiple criteria<br/>
            ☐ <b>Date functions:</b> Calculate days outstanding, aging categories<br/>
            ☐ <b>Error handling:</b> IFERROR on all lookup formulas<br/>
            ☐ <b>Named formulas</b> for complex calculations<br/>
        </div>
        
        <h4>Section 4: Pivot Table Analysis (15 points)</h4>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #9C27B0;">
            <b>Worksheet 4: "Pivot_Analysis"</b><br/>
            ☐ <b>5+ different Pivot Tables</b> answering specific business questions:<br/>
              &nbsp;&nbsp;1. Monthly sales trends (grouped by quarter)<br/>
              &nbsp;&nbsp;2. Top 10 customers by revenue<br/>
              &nbsp;&nbsp;3. Product performance by category<br/>
              &nbsp;&nbsp;4. Sales rep commission calculations<br/>
              &nbsp;&nbsp;5. Regional analysis with % of total<br/>
            ☐ <b>Grouping:</b> Dates by month/quarter, numbers into ranges<br/>
            ☐ <b>Calculated fields:</b> Profit margin, average order value<br/>
            ☐ <b>Show Values As:</b> % of total, % difference from previous<br/>
            ☐ <b>Slicers connected</b> to all Pivot Tables<br/>
            ☐ <b>Timeline</b> for date filtering<br/>
        </div>
        
        <h4>Section 5: Executive Dashboard (20 points)</h4>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #F44336;">
            <b>Worksheet 5: "Executive_Dashboard"</b><br/>
            ☐ <b>Key Performance Indicators (KPIs):</b><br/>
              &nbsp;&nbsp;• Total Revenue (YTD)<br/>
              &nbsp;&nbsp;• Total Profit<br/>
              &nbsp;&nbsp;• Average Order Value<br/>
              &nbsp;&nbsp;• Customer Count<br/>
              &nbsp;&nbsp;• Top Product<br/>
              &nbsp;&nbsp;• Sales Growth %<br/>
            ☐ <b>Interactive controls:</b> Slicers for Region, Product Category, Time Period<br/>
            ☐ <b>Visualizations:</b> 4+ Pivot Charts (mix of types)<br/>
            ☐ <b>Conditional formatting:</b> Traffic lights for performance indicators<br/>
            ☐ <b>GETPIVOTDATA:</b> Extract specific values for KPI cards<br/>
            ☐ <b>Professional design:</b> Company colors, clear layout, no clutter<br/>
            ☐ <b>Print-ready formatting</b> for executive meetings<br/>
        </div>
    </div>

    <h3>Step-by-Step Implementation Guide</h3>
    
    <b>Phase 1: Foundation & Data Setup (60 minutes)</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Step 1: Workbook Structure<br/>
            1. Create new workbook: "GlobalTech_Analytics_System.xlsx"<br/>
            2. Create 8 worksheets with specific purposes:<br/>
               • Master_Data (tables)<br/>
               • Sales_Transactions (raw data)<br/>
               • Calculations (formulas)<br/>
               • Pivot_Analysis (summaries)<br/>
               • Executive_Dashboard (presentation)<br/>
               • Inventory_Tracking (bonus)<br/>
               • Employee_Performance (bonus)<br/>
               • Documentation (instructions)<br/>
            3. Color code worksheet tabs for navigation<br/>
            <br/>
            // Step 2: Master Data Tables<br/>
            1. In Master_Data worksheet, create four tables:<br/>
            <b>Products Table (A1:G31):</b><br/>
            ProductID, ProductName, Category, Cost, Price, SupplierID, ReorderLevel<br/>
            • 30 products across 5 categories<br/>
            • Realistic costs and prices (with profit margins)<br/>
            • Use data validation for Category drop-down<br/>
            <br/>
            <b>Customers Table (I1:N26):</b><br/>
            CustomerID, CustomerName, Type, Region, CreditLimit, ContactEmail<br/>
            • 25 customers across 4 regions<br/>
            • Three types: Retail, Wholesale, VIP<br/>
            • Credit limits from $1,000 to $50,000<br/>
            <br/>
            <b>Employees Table (P1:U11):</b><br/>
            EmployeeID, EmployeeName, Department, HireDate, Salary, CommissionRate<br/>
            • 10 employees across 3 departments<br/>
            • Commission rates: 5%, 7.5%, 10% based on performance<br/>
            <br/>
            <b>Suppliers Table (W1:AC9):</b><br/>
            SupplierID, SupplierName, ContactPerson, Phone, Email, LeadTime, Rating<br/>
            • 8 suppliers with different lead times (7-30 days)<br/>
            • Rating: Excellent, Good, Average, Poor<br/>
            <br/>
            2. Convert ALL to Tables (Ctrl+T)<br/>
            3. Name tables: tblProducts, tblCustomers, tblEmployees, tblSuppliers<br/>
            4. Add data validation to prevent duplicate IDs
        </pre>
    </div>
    
    <b>Phase 2: Transaction System & Formulas (90 minutes)</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Worksheet: Sales_Transactions</b><br/>
        1. Create structure (A1:J201 for 200 transactions + header):<br/>
        • TransactionID: "TXN-2024-001" format (use formula for sequential)<br/>
        • Date: Random dates across 2 years (use =RANDBETWEEN with DATE)<br/>
        • CustomerID: Drop-down from tblCustomers[CustomerID]<br/>
        • ProductID: Drop-down from tblProducts[ProductID]<br/>
        • Quantity: Random 1-50 (use =RANDBETWEEN)<br/>
        • UnitPrice: =VLOOKUP(ProductID, tblProducts, 5, FALSE) ← auto-fills<br/>
        • TotalAmount: =Quantity * UnitPrice ← auto-calculates<br/>
        • SalesRepID: Drop-down from tblEmployees[EmployeeID]<br/>
        • PaymentMethod: Drop-down (Credit Card, Bank Transfer, Cash)<br/>
        • Status: Drop-down (Completed, Pending, Cancelled)<br/>
        <br/>
        <b>Advanced Features:</b><br/>
        • Column M: CustomerName = VLOOKUP(CustomerID, tblCustomers, 2, FALSE)<br/>
        • Column N: CustomerType = VLOOKUP(CustomerID, tblCustomers, 3, FALSE)<br/>
        • Column O: ProductCategory = VLOOKUP(ProductID, tblProducts, 3, FALSE)<br/>
        • Column P: Region = VLOOKUP(CustomerID, tblCustomers, 4, FALSE)<br/>
        • Column Q: Commission = TotalAmount * VLOOKUP(SalesRepID, tblEmployees, 6, FALSE)<br/>
        <br/>
        <b>Data Validation Rules:</b><br/>
        1. CustomerID: List = tblCustomers[CustomerID]<br/>
        2. ProductID: List = tblProducts[ProductID]<br/>
        3. SalesRepID: List = tblEmployees[EmployeeID]<br/>
        4. Quantity: Whole number ≥1 ≤100<br/>
        5. PaymentMethod: List (Credit Card, Bank Transfer, Cash)<br/>
        6. Status: List (Completed, Pending, Cancelled)<br/>
        <br/>
        <b>Conditional Formatting:</b><br/>
        • TotalAmount > $10,000: Green fill<br/>
        • Status = "Cancelled": Red text<br/>
        • Quantity > ReorderLevel: Orange fill (needs VLOOKUP to products)<br/>
        <br/>
        <b>Error Prevention:</b><br/>
        • Use IFERROR on all VLOOKUPs: =IFERROR(VLOOKUP(...), "Check ID")<br/>
        • Add data validation to prevent sales exceeding credit limit (custom formula)
    </div>
    
    <b>Phase 3: Advanced Calculations & Business Logic (60 minutes)</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Worksheet: Calculations<br/>
            // Section A: Sales Analysis<br/>
            1. <b>Monthly Summary Table:</b> Month, TotalSales, TotalProfit, TransactionCount<br/>
               • Use SUMIFS for monthly totals<br/>
               • Profit = Sales - Cost (need VLOOKUP for cost)<br/>
               • Transaction count = COUNTIFS<br/>
            <br/>
            2. <b>Customer Tier Classification:</b><br/>
               =IFS(TotalSpent>=10000, "Platinum",<br/>
                    TotalSpent>=5000, "Gold",<br/>
                    TotalSpent>=1000, "Silver",<br/>
                    TRUE, "Bronze")<br/>
               • Calculate TotalSpent per customer using SUMIF<br/>
            <br/>
            3. <b>Commission Calculation:</b><br/>
               Base rate from employee table ×<br/>
               Tier multiplier: Platinum=1.5, Gold=1.2, Silver=1, Bronze=0.8<br/>
               Use VLOOKUP for base rate, nested IF for multiplier<br/>
            <br/>
            // Section B: Inventory Management<br/>
            1. <b>Stock Status:</b><br/>
               Current Stock - Sales (SUMIFS) = Available<br/>
               IF(Available < ReorderLevel, "Reorder", "OK")<br/>
            <br/>
            2. <b>Reorder Quantity:</b><br/>
               =IF(Available < ReorderLevel, ReorderLevel*2 - Available, 0)<br/>
            <br/>
            // Section C: Financial Metrics<br/>
            1. <b>Average Order Value (AOV):</b><br/>
               =SUM(TotalAmount)/COUNT(TransactionID)<br/>
            <br/>
            2. <b>Customer Lifetime Value (CLV):</b><br/>
               Average monthly spend × Average customer lifespan (12 months)<br/>
            <br/>
            3. <b>Gross Margin:</b><br/>
               =(TotalRevenue - TotalCost)/TotalRevenue<br/>
            <br/>
            // Section D: Date-Based Calculations<br/>
            1. <b>Aging Analysis:</b><br/>
               =IF(TODAY()-InvoiceDate>90, ">90 Days",<br/>
                  IF(TODAY()-InvoiceDate>60, "61-90 Days",<br/>
                     IF(TODAY()-InvoiceDate>30, "31-60 Days", "Current")))<br/>
            <br/>
            2. <b>Days Sales Outstanding (DSO):</b><br/>
               Average of (Today - InvoiceDate) for unpaid invoices<br/>
            <br/>
            // Section E: Performance Indicators<br/>
            1. Create named ranges for key metrics<br/>
            2. Use INDEX/MATCH for two-way lookups<br/>
            3. Implement error handling throughout<br/>
            4. Document complex formulas with comments
        </pre>
    </div>
    
    <b>Phase 4: Pivot Table Analysis & Dashboard (45 minutes)</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Worksheet: Pivot_Analysis</b><br/>
        
        <b>Pivot Table 1: Monthly Sales Trends</b><br/>
        • Source: Sales_Transactions table<br/>
        • Rows: Date (group by Months and Years)<br/>
        • Values: Sum of TotalAmount, Count of TransactionID<br/>
        • Filters: Status = "Completed"<br/>
        • Show Values As: % Difference From Previous Month<br/>
        • Timeline: Connected for date range selection<br/>
        <br/>
        <b>Pivot Table 2: Customer Analysis</b><br/>
        • Rows: CustomerName, CustomerType<br/>
        • Values: Sum of TotalAmount, Count of TransactionID<br/>
        • Show Values As: % of Parent Row Total<br/>
        • Filter: Top 10 by Sum of TotalAmount<br/>
        • Calculated Field: AverageOrderValue = TotalAmount/TransactionCount<br/>
        <br/>
        <b>Pivot Table 3: Product Performance</b><br/>
        • Rows: ProductCategory, ProductName<br/>
        • Columns: Quarter (grouped from Date)<br/>
        • Values: Sum of Quantity, Sum of TotalAmount<br/>
        • Show Values As: % of Column Total<br/>
        • Conditional Formatting: Data bars on Quantity<br/>
        <br/>
        <b>Pivot Table 4: Regional Analysis</b><br/>
        • Rows: Region<br/>
        • Columns: ProductCategory<br/>
        • Values: Sum of TotalAmount<br/>
        • Filters: Year (grouped from Date)<br/>
        • Slicer: Region (connect to all Pivot Tables)<br/>
        <br/>
        <b>Pivot Table 5: Sales Rep Performance</b><br/>
        • Rows: SalesRepName (from VLOOKUP in source)<br/>
        • Values: Sum of TotalAmount, Sum of Commission, Count of Customers<br/>
        • Group sales reps: Top 25%, Middle 50%, Bottom 25%<br/>
        • Show Values As: Rank Largest to Smallest<br/>
        <br/>
        <b>Worksheet: Executive_Dashboard</b><br/>
        1. <b>KPI Cards (using GETPIVOTDATA):</b><br/>
           • Total Revenue: =GETPIVOTDATA("TotalAmount", PivotTable1)<br/>
           • YTD Growth: =GETPIVOTDATA with % calculation<br/>
           • Top Customer: =GETPIVOTDATA from Customer analysis<br/>
           • Best Product: =GETPIVOTDATA from Product performance<br/>
        2. <b>Interactive Controls:</b><br/>
           • Slicers: Region, Product Category, Customer Type<br/>
           • Timeline: 2023-2024 date range<br/>
           • Connect ALL controls to ALL Pivot Tables<br/>
        3. <b>Visualizations:</b><br/>
           • Line Chart: Monthly sales trend<br/>
           • Pie Chart: Revenue by region<br/>
           • Bar Chart: Top 10 products<br/>
           • Combo Chart: Sales vs. Profit by quarter<br/>
        4. <b>Professional Formatting:</b><br/>
           • Company color scheme<br/>
           • Clean, uncluttered layout<br/>
           • All charts properly labeled<br/>
           • Dashboard fits on one screen<br/>
           • Print area set for reporting
    </div>
    
    <b>Phase 5: Quality Assurance & Final Polish (15 minutes)</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Quality Checklist:<br/>
            ☐ All formulas calculate correctly (test with known values)<br/>
            ☐ All VLOOKUPs have IFERROR handling<br/>
            ☐ Data validation works on all input cells<br/>
            ☐ Pivot Tables refresh correctly (change source data, refresh)<br/>
            ☐ Slicers connected to all relevant Pivot Tables<br/>
            ☐ Conditional formatting applies correctly<br/>
            ☐ Named ranges reference correct cells<br/>
            ☐ No #N/A, #REF!, #VALUE! errors<br/>
            ☐ All dates in consistent format<br/>
            ☐ Numbers formatted appropriately ($, %, commas)<br/>
            ☐ Dashboard fits on one screen/page<br/>
            ☐ Print preview shows correctly<br/>
            ☐ File size reasonable (not bloated)<br/>
            ☐ Worksheet tabs clearly named<br/>
            ☐ Documentation worksheet complete<br/>
            <br/>
            // Final Steps:<br/>
            1. Protect formula cells: Review → Protect Sheet (unlock input cells only)<br/>
            2. Set calculation to manual for large workbook: Formulas → Calculation Options<br/>
            3. Create backup version: Save As with date stamp<br/>
            4. Generate PDF of dashboard: File → Save As → PDF<br/>
            5. Create ReadMe worksheet with instructions<br/>
            6. Run Compatibility Checker<br/>
            7. Inspect Document for hidden data<br/>
            8. Final save: "GlobalTech_Analytics_FINAL_YourName.xlsx"
        </pre>
    </div>
    
    <hr/>
    
    <h3>Project Deliverables & Submission</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Submit the following in a ZIP file: LastName_FirstName_Module3_Final.zip</b><br/><br/>
        
        <b>1. Excel Workbook Files (50%):</b><br/>
        • GlobalTech_Analytics_FINAL.xlsx (complete working system)<br/>
        • GlobalTech_Analytics_TEMPLATE.xltx (template for reuse)<br/>
        • GlobalTech_TEST_DATA.xlsx (sample data for testing)<br/>
        <br/>
        <b>2. Documentation (20%):</b><br/>
        • README.txt - System overview and navigation<br/>
        • USER_MANUAL.docx - Step-by-step user guide<br/>
        • TECHNICAL_SPECS.docx - Formula explanations and logic<br/>
        • BUSINESS_REQUIREMENTS.docx - What problems the system solves<br/>
        • DATA_DICTIONARY.xlsx - All fields, sources, and calculations<br/>
        <br/>
        <b>3. Reports & Presentations (20%):</b><br/>
        • Executive_Dashboard.pdf (print-ready dashboard)<br/>
        • Monthly_Report_Template.pdf (report format)<br/>
        • Presentation_Slides.pptx (5-slide executive summary)<br/>
        • Analysis_Findings.docx (key insights from the data)<br/>
        <br/>
        <b>4. Supporting Materials (10%):</b><br/>
        • Screenshot gallery (key features, formulas, dashboard)<br/>
        • Video walkthrough (3-5 minute system demonstration)<br/>
        • Test cases and results<br/>
        • Peer review feedback (if applicable)<br/>
        <br/>
        <b>Submission Checklist:</b><br/>
        <div style="background-color: #e0e0e0; padding: 10px; margin: 10px 0; border-radius: 5px;">
            ☐ All required worksheets present and functional<br/>
            ☐ No broken formulas or references<br/>
            ☐ Data validation working correctly<br/>
            ☐ Pivot Tables updating properly<br/>
            ☐ Dashboard interactive and visually appealing<br/>
            ☐ Documentation complete and professional<br/>
            ☐ File names follow naming convention<br/>
            ☐ ZIP file contains all required materials<br/>
            ☐ File size under 50MB (compress images if needed)
        </div>
    </div>
    
    <hr/>
    
    <h3>Grading Rubric</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Category</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Excellent (90-100%)</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Good (80-89%)</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Satisfactory (70-79%)</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Needs Work (<70%)</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Technical Skills</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">All Module 3 skills expertly applied; advanced techniques used</td>
                <td style="padding: 10px; border: 1px solid #ddd;">All required skills present; minor technical issues</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Most skills implemented; some not working optimally</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Missing key skills; technical problems throughout</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Business Logic</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Complex, realistic business rules; excellent calculations</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Sound business logic; appropriate calculations</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Basic business logic; some calculation errors</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Poor business logic; significant calculation errors</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>System Design</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Professional, scalable, well-organized system</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Good organization; mostly logical structure</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Basic organization; some confusing elements</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Poor organization; difficult to navigate</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Presentation</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Professional, polished, executive-ready dashboard</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Good presentation; minor formatting issues</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Basic presentation; needs polish</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Unprofessional appearance; not business-ready</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Documentation</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Comprehensive, clear, professional documentation</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Adequate documentation; covers most aspects</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Minimal documentation; lacks detail</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Poor or missing documentation</td>
            </tr>
        </table>
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Bonus Challenges: Enterprise-Level Features</h4>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1: Advanced Analytics</b><br/>
            1. Implement forecasting with trend analysis<br/>
            2. Add scenario analysis for what-if planning<br/>
            3. Create Monte Carlo simulation for risk assessment<br/>
            4. Build customer lifetime value prediction model<br/>
            5. Implement ABC inventory classification<br/>
            <br/>
            <b>Level 2: Automation & Integration</b><br/>
            1. Create macros for repetitive tasks (month-end close, report generation)<br/>
            2. Build UserForm for data entry with validation<br/>
            3. Connect to external database (Access, SQL Server)<br/>
            4. Implement Power Query for ETL processes<br/>
            5. Create automated email reports with Outlook integration<br/>
            <br/>
            <b>Level 3: Multi-User System</b><br/>
            1. Implement user login and permission levels<br/>
            2. Create audit trail for data changes<br/>
            3. Build approval workflow for large orders<br/>
            4. Implement version control for reports<br/>
            5. Create real-time collaboration features<br/>
            <br/>
            <b>Level 4: Mobile & Cloud</b><br/>
            1. Optimize dashboard for mobile viewing<br/>
            2. Create web version using Excel Online<br/>
            3. Implement SharePoint integration<br/>
            4. Build Power BI version for enhanced visualization<br/>
            5. Create API for system integration<br/>
            <br/>
            <b>Level 5: Artificial Intelligence</b><br/>
            1. Implement machine learning for sales forecasting<br/>
            2. Add natural language query interface<br/>
            3. Create anomaly detection for fraud prevention<br/>
            4. Build recommendation engine for cross-selling<br/>
            5. Implement sentiment analysis on customer feedback
        </div>
        
        <b>Real-World Career Application:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>This project demonstrates skills for these roles:</b><br/>
            1. <b>Business Analyst:</b> $65,000-$95,000<br/>
               • Requirements gathering, system design, data analysis<br/>
            2. <b>Financial Analyst:</b> $70,000-$110,000<br/>
               • Financial modeling, forecasting, reporting<br/>
            3. <b>Data Analyst:</b> $75,000-$120,000<br/>
               • Data processing, visualization, insights generation<br/>
            4. <b>Operations Analyst:</b> $60,000-$90,000<br/>
               • Process optimization, performance tracking<br/>
            5. <b>Sales Operations Manager:</b> $80,000-$130,000<br/>
               • Sales analytics, commission tracking, forecasting<br/>
            6. <b>Excel Consultant:</b> $100-$200/hour<br/>
               • Custom Excel solution development<br/>
            <br/>
            <b>Add to your portfolio with:</b><br/>
            • LinkedIn profile showcasing specific skills<br/>
            • GitHub repository with Excel files (sanitized)<br/>
            • Case study explaining business impact<br/>
            • Video demonstration of system capabilities<br/>
            • Certifications: Microsoft Office Specialist (Excel Expert)
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎉 Module 3 Complete! Excel Mastery Achieved! 🎉</h3>
        
        <b>You Now Command:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            <b>Foundation Skills (Week 5):</b><br/>
            • Professional spreadsheet creation and management<br/>
            • Advanced formulas and calculations (The Big 5)<br/>
            • Cell referencing mastery (Relative, Absolute, Mixed)<br/>
            • Data visualization with charts and sparklines<br/>
            <br/>
            <b>Analysis Skills (Week 6):</b><br/>
            • Logical functions and decision-making (IF, AND, OR)<br/>
            • Data lookup and validation (VLOOKUP, Data Validation)<br/>
            • Data organization (Sorting, Filtering, Advanced Filter)<br/>
            • Business intelligence (Pivot Tables, Slicers, Dashboards)<br/>
            <br/>
            <b>Integration Skills (Final Project):</b><br/>
            • Complete business system design and implementation<br/>
            • End-to-end data processing pipeline<br/>
            • Executive dashboard creation<br/>
            • Professional documentation and presentation
        </div>
        
        <p><b>Career Pathways Opened:</b></p>
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Immediate Opportunities:</b><br/>
            • Excel-based roles in finance, sales, operations, HR<br/>
            • Data entry specialist → Data analyst<br/>
            • Administrative assistant → Executive assistant<br/>
            • Student intern → Business analyst<br/>
            <br/>
            <b>Advanced Pathways:</b><br/>
            • Excel expert → Power BI developer<br/>
            • Data analyst → Data scientist<br/>
            • Business analyst → Project manager<br/>
            • Financial analyst → Finance manager<br/>
            <br/>
            <b>Entrepreneurial Applications:</b><br/>
            • Freelance Excel consulting<br/>
            • Create and sell Excel templates<br/>
            • Offer Excel training services<br/>
            • Develop custom business solutions
        </div>
        
        <p><b>Next Steps in Your Learning Journey:</b></p>
        <ul>
            <li><b>Week 7:</b> PowerPoint & The Web (Presentation skills + Internet fundamentals)</li>
            <li><b>Week 8:</b> Logic, Security & Maintenance (Final module + certification prep)</li>
            <li><b>Certification:</b> Microsoft Office Specialist (MOS) Excel Expert</li>
            <li><b>Advanced:</b> Power Query, Power Pivot, DAX, Power BI</li>
            <li><b>Related:</b> SQL for data management, Python for automation</li>
        </ul>
        
        <p><b>Final Words of Wisdom:</b><br/>
        "Excel is not just a spreadsheet tool. In the hands of a master, it's a business intelligence platform, a data analysis engine, and a decision support system. You now have the power to transform raw data into actionable insights that drive business success."</p>
        
        <p><b>Resources for Continued Excel Mastery:</b><br/>
        • <a href="https://support.microsoft.com/en-us/excel" target="_blank">Microsoft Excel Official Support</a><br/>
        • <a href="https://www.microsoftelearning.com/" target="_blank">Microsoft E-Learning Courses</a><br/>
        • <a href="https://chandoo.org/" target="_blank">Chandoo.org - Excel Tips & Dashboarding</a><br/>
        • <a href="https://www.mrexcel.com/" target="_blank">MrExcel.com - Forum & Solutions</a><br/>
        • <a href="https://www.youtube.com/c/ExcelIsFun" target="_blank">ExcelIsFun YouTube Channel</a><br/>
        • <a href="https://www.reddit.com/r/excel/" target="_blank">Excel Community on Reddit</a><br/>
        • <a href="https://www.linkedin.com/learning/topics/excel" target="_blank">LinkedIn Learning Excel Courses</a></p>
        
        <p style="text-align: center; font-size: 1.2em; color: #4a6fa5; margin-top: 20px;">
            <b>👏 Congratulations on Completing Microsoft Excel Mastery! 👏<br/>
            Ready to master presentations and the web in Module 4?</b>
        </p>
        
        <div style="background-color: #4a6fa5; color: white; padding: 15px; border-radius: 5px; text-align: center; margin-top: 20px;">
            <b>Certificate of Completion Available!</b><br/>
            Submit your final project to receive:<br/>
            • Microsoft Excel Mastery Certificate<br/>
            • LinkedIn Skill Badge<br/>
            • Portfolio-ready project documentation<br/>
            • Personalized feedback from instructor
        </div>
    </div>`
            },

            "7-1": {
                "icon": "fas fa-tv",
                "title": "PowerPoint Basics & Slide Master",
                "html": `<h1>Week 7, Day 1: PowerPoint Basics & Slide Master</h1>
    <p>Welcome to Microsoft PowerPoint! Today we begin our journey into the world of professional presentations. You'll learn how to create compelling, visually appealing slides that effectively communicate your ideas.</p>
    
    <div class="analogy-box">
        <b>Analogy: The Digital Storyteller 🎬</b><br/>
            Presentation: Your complete movie or book<br/>
            Slides: Individual scenes or pages<br/>
            Slide Master: The director's style guide for the whole film<br/>
            Layouts: Different scene templates (title scene, dialogue scene, action scene)<br/>
            Themes: The visual style (color palette, costumes, set design)<br/>
            Placeholders: Marked spots where actors (content) should stand<br/>
            Notes: The director's notes for each scene<br/>
            Presenter View: The director's monitor showing what's next
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Understanding the PowerPoint interface and views</li>
        <li>Creating and organizing presentations</li>
        <li>Using themes and variants for consistent design</li>
        <li>Mastering the Slide Master for global changes</li>
        <li>Working with different slide layouts</li>
        <li>Adding and formatting text and placeholders</li>
        <li>Basic slide navigation and organization</li>
        <li>Saving and sharing presentations</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. The PowerPoint Interface & Views</b>
    
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>1. Different Views for Different Tasks:</b><br/>
        • <b>Normal View:</b> Default working view (slide pane, notes pane, slide thumbnails)<br/>
        • <b>Slide Sorter View:</b> Bird's-eye view of all slides (rearrange easily)<br/>
        • <b>Notes Page View:</b> See slides with speaker notes (print for presenter)<br/>
        • <b>Outline View:</b> Text-only view (focus on content, not design)<br/>
        • <b>Reading View:</b> Preview presentation full screen<br/>
        • <b>Slide Show View:</b> Actual presentation mode (F5 to start)<br/>
        <br/>
        <b>2. Key Interface Elements:</b><br/>
        • <b>Ribbon:</b> Tabs with grouped commands (Home, Insert, Design, etc.)<br/>
        • <b>Quick Access Toolbar:</b> Customizable shortcuts (above ribbon)<br/>
        • <b>Slide Pane:</b> Main working area for current slide<br/>
        • <b>Notes Pane:</b> Add speaker notes below slide<br/>
        • <b>Slides Thumbnail Pane:</b> Left sidebar showing all slides<br/>
        • <b>Status Bar:</b> Bottom info (slide number, theme, zoom)<br/>
        • <b>Slide Number Indicator:</b> Shows current/total slides<br/>
        <br/>
        <b>3. Navigation Shortcuts:</b><br/>
        • F5: Start presentation from beginning<br/>
        • Shift+F5: Start from current slide<br/>
        • Page Down/Up: Next/previous slide<br/>
        • Spacebar/Enter: Next slide during presentation<br/>
        • B: Black screen during presentation (B for Black)<br/>
        • W: White screen during presentation<br/>
        • Escape: Exit presentation<br/>
        • Ctrl+M: New slide<br/>
        • Ctrl+D: Duplicate slide<br/>
        <br/>
        <b>4. The Three Panels:</b><br/>
        1. <b>Left Panel:</b> Slides thumbnails or Outline view<br/>
        2. <b>Center Panel:</b> Current slide being edited<br/>
        3. <b>Right Panel:</b> Notes area (can be expanded/collapsed)
    </div>
    
    <b>b. Creating Your First Presentation</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // Step-by-Step New Presentation:<br/>
            1. <b>Start with a Template or Blank:</b><br/>
               • File → New → Choose template or Blank Presentation<br/>
               • Templates provide design, color scheme, sample content<br/>
               • Blank gives complete creative control<br/>
            <br/>
            2. <b>Save Immediately:</b><br/>
               • Ctrl+S or File → Save As<br/>
               • Name: "Project_Presentation_YourName.pptx"<br/>
               • .pptx is PowerPoint format<br/>
               • Save to appropriate folder<br/>
            <br/>
            3. <b>Add Your First Slides:</b><br/>
               • Home tab → New Slide dropdown<br/>
               • Choose layout: Title Slide, Title and Content, etc.<br/>
               • Or: Right-click slide thumbnail → New Slide<br/>
               • Or: Ctrl+M (adds default layout slide)<br/>
            <br/>
            4. <b>Basic Slide Structure:</b><br/>
               • <b>Title Slide:</b> First slide (presentation title, your name, date)<br/>
               • <b>Agenda/Contents:</b> What you'll cover<br/>
               • <b>Content Slides:</b> Main points with supporting details<br/>
               • <b>Summary/Conclusion:</b> Key takeaways<br/>
               • <b>Q&A Slide:</b> Invite questions<br/>
               • <b>Thank You Slide:</b> Final slide with contact info<br/>
            <br/>
            5. <b>Adding Content:</b><br/>
               • Click placeholder and start typing<br/>
               • Text boxes: Insert → Text Box → Click and drag<br/>
               • Images: Insert → Pictures → From device/online<br/>
               • Shapes: Insert → Shapes → Choose and draw<br/>
            <br/>
            // The 6x6 Rule for Text Slides:<br/>
            • No more than 6 bullet points per slide<br/>
            • No more than 6 words per bullet point<br/>
            • Keep text concise - you elaborate verbally<br/>
            • Use images to support, not decorate<br/>
            <br/>
            // Presentation Structure Guidelines:<br/>
            • 10 slides maximum for 20-minute presentation<br/>
            • 20-point font minimum for readability<br/>
            • High contrast: dark text on light background or vice versa<br/>
            • Consistent style throughout<br/>
            • One main idea per slide
        </pre>
    </div>
    
    <b>c. Themes & Design Consistency</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>What is a Theme?</b><br/>
        A complete design package including:<br/>
        • Color scheme (coordinated colors)<br/>
        • Fonts (heading and body font pairs)<br/>
        • Effects (shadows, reflections, lines)<br/>
        • Background styles<br/>
        <br/>
        <b>Applying Themes:</b><br/>
        1. Design tab → Themes gallery<br/>
        2. Hover to preview, click to apply<br/>
        3. Themes affect ALL slides immediately<br/>
        4. Can be applied to selected slides only<br/>
        <br/>
        <b>Theme Variants:</b><br/>
        • Different color variations of the same theme<br/>
        • Design tab → Variants (right of Themes)<br/>
        • Change colors without changing overall design<br/>
        • Customize: Design → Variants dropdown → Colors → Customize Colors<br/>
        <br/>
        <b>Customizing Themes:</b><br/>
        1. <b>Colors:</b> Design → Variants → Colors → Customize Colors<br/>
           • Create custom color palette<br/>
           • Set colors for text, background, accents<br/>
           • Save with name for reuse<br/>
        <br/>
        2. <b>Fonts:</b> Design → Variants → Fonts → Customize Fonts<br/>
           • Choose heading and body font pair<br/>
           • Professional combos: Calibri with Cambria, Arial with Georgia<br/>
           • Save custom font set<br/>
        <br/>
        3. <b>Effects:</b> Design → Variants → Effects<br/>
           • Different shading and 3D effects<br/>
           • Usually left as default<br/>
        <br/>
        4. <b>Background Styles:</b> Design → Variants → Background Styles<br/>
           • Solid colors, gradients, patterns<br/>
           • Format Background for more options<br/>
        <br/>
        <b>Why Use Themes?</b><br/>
        • Professional, consistent appearance<br/>
        • Easy to change entire look with one click<br/>
        • Ensures color contrast and readability<br/>
        • Saves design time<br/>
        • Corporate branding compliance<br/>
        <br/>
        <b>Design Principles:</b><br/>
        • <b>Contrast:</b> Make text readable against background<br/>
        • <b>Repetition:</b> Use same styles throughout<br/>
        • <b>Alignment:</b> Align elements for clean look<br/>
        • <b>Proximity:</b> Group related items together<br/>
        • <b>White Space:</b> Don't crowd slides - give content room to breathe
    </div>
    
    <b>d. The Slide Master: Your Secret Weapon</b>
    <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <pre>
            // What is the Slide Master?<br/>
            The "behind the scenes" template that controls ALL slides<br/>
            • Change once in Slide Master → affects entire presentation<br/>
            • Controls: background, colors, fonts, placeholder positions<br/>
            • Create consistent layouts<br/>
            • Add logos/watermarks to all slides<br/>
            <br/>
            // Accessing Slide Master:<br/>
            1. View tab → Slide Master<br/>
            2. Or: Shift + click Normal View button<br/>
            3. New tab appears: Slide Master<br/>
            <br/>
            // Slide Master Structure:<br/>
            • <b>Top slide:</b> The Master Slide (parent of all)<br/>
               - Changes here affect ALL layouts and slides<br/>
               - Add logo, footer, background that should appear everywhere<br/>
            • <b>Below slides:</b> Layout Masters (children)<br/>
               - Each represents a different layout (Title, Content, etc.)<br/>
               - Customize individual layouts differently<br/>
               - 11 default layouts in most themes<br/>
            <br/>
            // Common Slide Master Customizations:<br/>
            1. <b>Add logo to all slides:</b><br/>
               • Go to top Master Slide<br/>
               • Insert → Pictures → choose logo<br/>
               • Position (usually top-right or bottom corner)<br/>
               • Resize appropriately<br/>
            <br/>
            2. <b>Change font for all headings:</b><br/>
               • Click on Master Slide<br/>
               • Select "Click to edit Master title style"<br/>
               • Change font, size, color<br/>
               • All title placeholders update automatically<br/>
            <br/>
            3. <b>Customize bullet points:</b><br/>
               • On Master Slide or specific layout<br/>
               • Select bulleted text placeholder<br/>
               • Home → Bullets dropdown → Bullets and Numbering<br/>
               • Change bullet symbol, color, size<br/>
            <br/>
            4. <b>Add footer/date/slide number:</b><br/>
               • Insert tab (in Slide Master view) → Header & Footer<br/>
               • Check: Date and time, Slide number, Footer<br/>
               • Type footer text<br/>
               • "Don't show on title slide" usually checked<br/>
            <br/>
            5. <b>Create custom layout:</b><br/>
               • Slide Master tab → Insert Layout<br/>
               • New blank layout appears<br/>
               • Insert Placeholders → choose types (Title, Content, Picture, etc.)<br/>
               • Arrange placeholders as needed<br/>
               • Rename layout (right-click → Rename Layout)<br/>
            <br/>
            // Applying Layouts to Slides:<br/>
            • In Normal view, right-click slide<br/>
            • Layout → choose from your custom layouts<br/>
            • Or: Home → Layout dropdown<br/>
            <br/>
            // Closing Slide Master:<br/>
            • Slide Master tab → Close Master View<br/>
            • Or: click Normal view button<br/>
            • Changes saved automatically
        </pre>
    </div>
    
    <b>e. Working with Placeholders & Layouts</b>
    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Understanding Placeholders:</b><br/>
        Special containers that hold specific content types:<br/>
        • <b>Title:</b> Main title of slide<br/>
        • <b>Content:</b> Text, tables, charts, SmartArt, pictures, videos<br/>
        • <b>Text:</b> Just text (no other content types)<br/>
        • <b>Picture:</b> Holds images<br/>
        • <b>Chart:</b> Holds charts/graphs<br/>
        • <b>Table:</b> Holds tables<br/>
        • <b>SmartArt:</b> Holds SmartArt graphics<br/>
        • <b>Media:</b> Holds video/audio<br/>
        • <b>Online Image:</b> Search for online images<br/>
        <br/>
        <b>Default Layouts:</b><br/>
        1. <b>Title Slide:</b> Title and subtitle<br/>
        2. <b>Title and Content:</b> Title + content placeholder (most used)<br/>
        3. <b>Section Header:</b> Large title for section breaks<br/>
        4. <b>Two Content:</b> Title + two content placeholders side by side<br/>
        5. <b>Comparison:</b> Title + two content placeholders + two titles above them<br/>
        6. <b>Title Only:</b> Just title (for full-bleed images)<br/>
        7. <b>Blank:</b> No placeholders (complete freedom)<br/>
        8. <b>Content with Caption:</b> Small title + caption + large content area<br/>
        9. <b>Picture with Caption:</b> Large picture + title + caption<br/>
        <br/>
        <b>Working with Placeholders:</b><br/>
        • Click placeholder to add content<br/>
        • Drag corners to resize<br/>
        • Drag border to move<br/>
        • Right-click for formatting options<br/>
        • Placeholders maintain theme formatting<br/>
        <br/>
        <b>Formatting Placeholders:</b><br/>
        1. Select placeholder<br/>
        2. Format tab appears (Drawing Tools)<br/>
        3. Options:<br/>
           • <b>Shape Fill:</b> Background color<br/>
           • <b>Shape Outline:</b> Border color/thickness<br/>
           • <b>Shape Effects:</b> Shadows, glow, 3D effects<br/>
           • <b>Text Fill/Outline/Effects:</b> Format text inside<br/>
           • <b>WordArt Styles:</b> Quick text effects<br/>
        <br/>
        <b>Text Formatting Tips:</b><br/>
        • Use <b>Headings</b> for titles (larger, bold)<br/>
        • Use <b>Body text</b> for content (smaller, regular)<br/>
        • <b>Line spacing:</b> 1.5 for readability<br/>
        • <b>Paragraph spacing:</b> Space after paragraphs for separation<br/>
        • <b>Alignment:</b> Left for body text, center for titles<br/>
        • <b>Font sizes:</b> Title: 44pt, Headings: 32pt, Body: 24pt (minimum 20pt)<br/>
        <br/>
        <b>Layout Best Practices:</b><br/>
        • Choose layout BEFORE adding content<br/>
        • Use appropriate layout for content type<br/>
        • Don't overcrowd - use multiple slides if needed<br/>
        • Maintain consistent margins/padding<br/>
        • Align elements using Guides (View → Guides)
    </div>
    
    <hr/>
    
    <h3>Practice Lab (45 Minutes)</h3>
    
    <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>Part A: Creating a Basic Presentation</b><br/>
        1. Create new presentation: "Company_Overview.pptx"<br/>
        2. Apply theme: Design → Choose "Ion" theme<br/>
        3. Create these slides:<br/>
           • Slide 1: Title Slide (Company Name, Your Name, Date)<br/>
           • Slide 2: Title and Content - "Agenda" with 4 bullet points<br/>
           • Slide 3: Two Content - "About Us" (left: text, right: insert shape/icon)<br/>
           • Slide 4: Title and Content - "Our Services" with SmartArt<br/>
           • Slide 5: Picture with Caption - Insert a relevant image<br/>
           • Slide 6: Title Only - "Contact Information"<br/>
        4. Add notes to Slide 1 with presentation tips<br/>
        <br/>
        <b>Part B: Slide Master Customization</b><br/>
        1. View → Slide Master<br/>
        2. On top Master Slide:<br/>
           • Change title font to Arial Black<br/>
           • Change body font to Calibri<br/>
           • Add a shape as background element<br/>
           • Insert footer: "Confidential" + slide number<br/>
        3. Create custom layout:<br/>
           • Insert Layout → add Title, Content, and Picture placeholders<br/>
           • Arrange creatively<br/>
           • Rename to "Custom Content"<br/>
        4. Close Master View<br/>
        5. Apply custom layout to one slide<br/>
        <br/>
        <b>Part C: Theme Customization</b><br/>
        1. Design → Variants → Colors → Customize Colors<br/>
        2. Create company color scheme:<br/>
           • Text/Background Dark: #1F2E4A (dark blue)<br/>
           • Text/Background Light: #FFFFFF (white)<br/>
           • Accent 1: #4A90E2 (blue)<br/>
           • Accent 2: #50E3C2 (teal)<br/>
           • Accent 3: #F5A623 (orange)<br/>
        3. Name: "Company_Colors" and Save<br/>
        4. Design → Variants → Fonts → Customize Fonts<br/>
        5. Set: Heading: Arial, Body: Calibri<br/>
        6. Save as "Company_Fonts"<br/>
        <br/>
        <b>Part D: Presentation Navigation</b><br/>
        1. Practice different views:<br/>
           • Normal View<br/>
           • Slide Sorter (rearrange slides)<br/>
           • Notes Page (add detailed notes)<br/>
           • Reading View (preview)<br/>
        2. Presentation shortcuts:<br/>
           • F5 to start from beginning<br/>
           • Shift+F5 from current slide<br/>
           • Spacebar to advance<br/>
           • B for black screen<br/>
           • Escape to exit
    </div>
    
    <hr/>
    
    <h3>Presentation Planning & Structure</h3>
    
    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
        <b>The 10-20-30 Rule (Guy Kawasaki):</b><br/>
        • <b>10 slides</b> maximum<br/>
        • <b>20 minutes</b> maximum<br/>
        • <b>30-point font</b> minimum<br/>
        Forces conciseness and focus<br/>
        <br/>
        <b>Classic Presentation Structure:</b><br/>
        1. <b>Title Slide:</b> Hook attention (5 seconds)<br/>
        2. <b>Agenda/Contents:</b> Set expectations (30 seconds)<br/>
        3. <b>Problem/Need:</b> Why this matters (2 minutes)<br/>
        4. <b>Solution:</b> Your main idea (5 minutes)<br/>
        5. <b>Features/Benefits:</b> Supporting points (8 minutes)<br/>
        6. <b>Proof/Examples:</b> Evidence (3 minutes)<br/>
        7. <b>Call to Action:</b> What you want audience to do (1 minute)<br/>
        8. <b>Summary:</b> Key takeaways (30 seconds)<br/>
        9. <b>Q&A:</b> Address questions (variable)<br/>
        10. <b>Thank You:</b> Final slide with contact (10 seconds)<br/>
        <br/>
        <b>Storyboarding Your Presentation:</b><br/>
        1. <b>Plan on paper first:</b> Sketch slide ideas<br/>
        2. <b>One idea per slide:</b> If it needs explaining, it's too complex<br/>
        3. <b>Visual hierarchy:</b> What should audience see first?<br/>
        4. <b>Transitions:</b> How does each slide connect to next?<br/>
        5. <b>Timing:</b> How long per slide?<br/>
        <br/>
        <b>Audience Considerations:</b><br/>
        • <b>Executives:</b> High-level, big picture, strategic<br/>
        • <b>Technical:</b> Details, data, specifications<br/>
        • <b>General:</b> Simple, engaging, storytelling<br/>
        • <b>Size matters:</b> Large room needs larger fonts<br/>
        • <b>Lighting:</b> Dark room = dark background, light text<br/>
        <br/>
        <b>Content Planning Worksheet:</b><br/>
        <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 5px;">Slide #</th><th>Purpose</th><th>Content</th><th>Visual</th><th>Time</th>
            </tr>
            <tr><td style="padding: 5px;">1</td><td>Hook</td><td>Title + striking image</td><td>Full-bleed photo</td><td>0:05</td></tr>
            <tr><td style="padding: 5px;">2</td><td>Agenda</td><td>3 main points</td><td>Clean list</td><td>0:30</td></tr>
            <tr><td style="padding: 5px;">3</td><td>Problem</td><td>Current pain point</td><td>Problem icon</td><td>2:00</td></tr>
            <tr><td style="padding: 5px;">4</td><td>Solution</td><td>Your approach</td><td>Solution graphic</td><td>5:00</td></tr>
        </table>
        
        <b>Common Mistakes to Avoid:</b><br/>
        • ❌ Too much text (reading slides)<br/>
        • ❌ Small fonts (unreadable in back)<br/>
        • ❌ Busy backgrounds (distracting)<br/>
        • ❌ Inconsistent styling (unprofessional)<br/>
        • ❌ No clear structure (confusing)<br/>
        • ❌ No rehearsal (unpolished delivery)<br/>
        • ❌ Data overload (too many numbers)<br/>
        • ❌ Clip art (dated and unprofessional)
    </div>
    
    <hr/>
    
    <div class="assignment-box">
        <h4>Day 1 Assignment: Professional Company Presentation</h4>
        
        <b>Task: Create a complete 10-slide company presentation using all PowerPoint basics</b><br/><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Requirements:</b><br/>
            1. <b>Company:</b> Create or use "TechSolutions Inc."<br/>
            2. <b>Theme:</b> Apply and customize professional theme<br/>
            3. <b>Slide Master:</b> Create custom Slide Master with:<br/>
               • Company logo on all slides (except title)<br/>
               • Custom footer with date and slide numbers<br/>
               • Consistent font scheme (heading + body)<br/>
               • Custom color palette (brand colors)<br/>
               • One custom layout of your design<br/>
            <br/>
            <b>10-Slide Structure:</b><br/>
            1. <b>Title Slide:</b> Company name, tagline, presenter, date<br/>
            2. <b>Agenda:</b> What you'll cover (use SmartArt)<br/>
            3. <b>Company Overview:</b> Mission, vision, values (use icons)<br/>
            4. <b>Our Team:</b> Leadership/organization (use SmartArt org chart)<br/>
            5. <b>Products/Services:</b> 3 main offerings (use Picture layout)<br/>
            6. <b>Market Position:</b> Competitive advantage (use comparison layout)<br/>
            7. <b>Client Success:</b> Testimonials/case studies (use quote format)<br/>
            8. <b>Financial Highlights:</b> Key metrics (use charts/graphs)<br/>
            9. <b>Future Roadmap:</b> Upcoming plans (use timeline)<br/>
            10. <b>Contact/Thank You:</b> Contact info, social media, Q&A invitation<br/>
            <br/>
            <b>Content Requirements:</b><br/>
            • Use at least 5 different layout types<br/>
            • Include: 2 SmartArt graphics, 1 chart, 3 images<br/>
            • Add speaker notes to 5+ slides<br/>
            • Use consistent formatting throughout<br/>
            • Apply transitions between slides<br/>
            • Ensure readability (fonts ≥20pt)<br/>
        </div>
        
        <b>Technical Requirements:</b>
        <ul>
            <li>Create and use custom Slide Master</li>
            <li>Apply and customize professional theme</li>
            <li>Use at least 5 different slide layouts</li>
            <li>Create custom color palette and font scheme</li>
            <li>Add headers/footers with slide numbers</li>
            <li>Include SmartArt, charts, and images appropriately</li>
            <li>Add speaker notes for key slides</li>
            <li>Use proper alignment and spacing</li>
        </ul>
        
        <b>Deliverables:</b>
        <div style="background-color: #e0e0e0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            1. PowerPoint file: "Company_Presentation_YourName.pptx"<br/>
            2. PDF export of slides (File → Save As → PDF)<br/>
            3. PDF export of notes pages (Print → Notes Pages → Save as PDF)<br/>
            4. Screenshots demonstrating:<br/>
               • Slide Master customization<br/>
               • Theme color palette settings<br/>
               • Custom layout in Slide Master<br/>
               • Different views (Normal, Slide Sorter, Notes Page)<br/>
               • Slide with speaker notes<br/>
            5. Written explanation of:<br/>
               • Why you chose your theme/colors<br/>
               • How Slide Master ensures consistency<br/>
               • Your presentation structure strategy<br/>
               • How you applied design principles (contrast, alignment, etc.)
        </div>
        
        <b>Challenge Tasks (Bonus):</b>
        <div style="background-color: #fff0e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Level 1 - Advanced Design:</b><br/>
            • Create multiple Slide Masters for different sections<br/>
            • Design custom icons using Shapes<br/>
            • Create infographic-style slides<br/>
            • Add hidden slides for detailed backup<br/>
            • Create handouts with different layouts<br/>
            <br/>
            <b>Level 2 - Brand Development:</b><br/>
            • Develop complete brand guidelines document<br/>
            • Create matching Word and Excel templates<br/>
            • Design email signature template<br/>
            • Create social media graphics using slide elements<br/>
            • Design business card template<br/>
            <br/>
            <b>Level 3 - Presentation System:</b><br/>
            • Create presentation template for company-wide use<br/>
            • Add macros for automated formatting<br/>
            • Create linked Excel charts that update automatically<br/>
            • Design interactive menu slide<br/>
            • Create video version of presentation
        </div>
    </div>
    
    <hr/>
    
    <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
        <h3>🎯 PowerPoint Fundamentals Checklist</h3>
        
        <b>You should now be able to:</b>
        <div style="background-color: white; padding: 15px; margin: 10px 0; border-radius: 5px; border: 2px solid #4CAF50;">
            ✅ Navigate PowerPoint interface and different views<br/>
            ✅ Create new presentations with appropriate structure<br/>
            ✅ Apply and customize themes for consistent design<br/>
            ✅ Use Slide Master for global formatting changes<br/>
            ✅ Work with different slide layouts and placeholders<br/>
            ✅ Add and format text, images, and basic shapes<br/>
            ✅ Create custom color palettes and font schemes<br/>
            ✅ Add headers, footers, and slide numbers<br/>
            ✅ Save and export presentations in different formats<br/>
            ✅ Plan presentation structure using proven frameworks
        </div>
        
        <p><b>Design Principles Recap:</b></p>
        <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
            <tr style="background-color: #4a6fa5; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Principle</th>
                <th style="padding: 10px; border: 1px solid #ddd;">What It Means</th>
                <th style="padding: 10px; border: 1px solid #ddd;">PowerPoint Implementation</th>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Contrast</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Make elements stand out</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Dark text on light background or vice versa</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Repetition</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Use consistent styles</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Slide Master, Themes, consistent fonts/colors</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Alignment</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Line up elements</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Use Guides, Gridlines, Alignment tools</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><b>Proximity</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Group related items</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Logical spacing, use of placeholders</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><b>White Space</b></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Give content room</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Don't overcrowd slides, use margins</td>
            </tr>
        </table>
        
        <p><b>Pro Tips for Presentation Success:</b></p>
        <ol>
            <li><b>Start with the end in mind:</b> What's your key message? What action do you want?</li>
            <li><b>Use Slide Master religiously:</b> It's 10x faster than manual formatting</li>
            <li><b>Follow the 6x6 rule:</b> 6 bullet points max, 6 words per bullet max</li>
            <li><b>Test on the actual equipment:</b> Projectors change colors and contrast</li>
            <li><b>Have a backup plan:</b> PDF version, printed handouts, USB drive</li>
            <li><b>Practice with notes:</b> Use Notes Page view for rehearsal</li>
            <li><b>Check spelling obsessively:</b> Nothing kills credibility faster than typos</li>
            <li><b>Simplify complex data:</b> One chart, one message</li>
            <li><b>Use high-quality images:</b> Blurry or pixelated images look amateurish</li>
            <li><b>Remember: You're the presentation, slides are just visuals</b></li>
        </ol>
        
        <p><b>Tomorrow:</b> Animations & Transitions - Adding movement and flow to your presentations without causing distraction!</p>
        
        <p><b>Resources:</b><br/>
        • <a href="https://support.microsoft.com/en-us/powerpoint" target="_blank">Microsoft PowerPoint Official Support</a><br/>
        • <a href="https://www.presentationzen.com/" target="_blank">Presentation Zen Blog</a><br/>
        • <a href="https://slidesgo.com/" target="_blank">Free PowerPoint Templates</a><br/>
        • <a href="https://www.youtube.com/watch?v=lpuwWlvzIVs" target="_blank">PowerPoint Beginner Tutorial</a><br/>
        • <a href="https://www.ted.com/talks/nancy_duarte_the_secret_structure_of_great_talks" target="_blank">TED Talk: Structure of Great Presentations</a></p>
        
        <p style="text-align: center; font-size: 1.1em; color: #4a6fa5;">
            <b>Remember: Great presentations don't just share information - they tell stories,<br/>
            create connections, and inspire action. Your slides are just the visual support! 🎯</b>
        </p>
    </div>`
            },
            "7-2": {
                icon: "fas fa-play-circle",
                title: "Animations, Transitions & Multimedia",
                html: `<h1>Week 7, Day 2: Animations, Transitions & Multimedia</h1>
        <p>Today we'll learn how to add movement and multimedia elements to your presentations without overwhelming your audience.</p>
        
        <div class="analogy-box">
            <b>Analogy: The Theater Director 🎭</b><br/>
            
            Transitions: The curtains between scenes - they should be smooth, not jarring<br/>
            Animations: The actors' movements on stage - purposeful and timed<br/>
            Entrance Effects: How characters enter the scene<br/>
            Emphasis Effects: Highlighting important characters<br/>
            Exit Effects: How characters leave the scene<br/>
            Timing: The director's timing for when things happen<br/>
            Multimedia: Adding music and video to enhance the story
        </div>

        <h3>Key Topics</h3>
        <ul>
            <li>Slide Transitions: Fade, Push, Wipe, Morph</li>
            <li>Object Animations: Entrance, Emphasis, Exit, Motion Paths</li>
            <li>Animation Timing and Sequencing</li>
            <li>Adding and Formatting Video</li>
            <li>Inserting and Controlling Audio</li>
            <li>Best Practices for Multimedia Usage</li>
        </ul>

        <h3>In-Depth Explanation</h3>
        
        <b>a. Slide Transitions: Moving Between Slides</b><br/>
        
        <div class="section-box">
            <b>What are Transitions?</b><br/>
            Transitions are effects that occur when you move from one slide to another. They should be subtle and consistent throughout your presentation.
            
            <table class="info-table">
                <tr><th>Transition Type</th><th>Best Use</th><th>Example</th></tr>
                <tr><td><b>Fade</b></td><td>Professional, subtle movement</td><td>Most business presentations</td></tr>
                <tr><td><b>Push</b></td><td>Showing progression or sequence</td><td>Steps in a process</td></tr>
                <tr><td><b>Wipe</b></td><td>Revealing information gradually</td><td>Bullet points appearing</td></tr>
                <tr><td><b>Morph</b></td><td>Smooth shape transitions</td><td>Changing charts or diagrams</td></tr>
                <tr><td><b>Cut</b></td><td>Quick, no-nonsense changes</td><td>Technical presentations</td></tr>
            </table>
        </div>
        
        <div class="code-box">
            <b>How to Apply Transitions:</b><br/>
            1. Select the slide(s) you want to add transitions to<br/>
            2. Go to <b>Transitions</b> tab in the ribbon<br/>
            3. Choose from the transition gallery<br/>
            4. Adjust duration (recommended: 0.5-1.5 seconds)<br/>
            5. Choose sound effect if needed (use sparingly!)<br/>
            6. Apply to all slides for consistency<br/><br/>
            
            <b>Pro Tip:</b> Use the same transition throughout your presentation. Mixing too many can be distracting.
        </div>
        
        <hr/>
        
        <b>b. Object Animations: Bringing Elements to Life</b><br/>
        
        <div class="section-box">
            <b>Types of Animations:</b><br/>
            
            <table class="info-table">
                <tr><th>Animation Type</th><th>Purpose</th><th>Examples</th></tr>
                <tr><td><b>Entrance</b></td><td>Bring objects onto the slide</td><td>Appear, Fade, Fly In, Zoom</td></tr>
                <tr><td><b>Emphasis</b></td><td>Highlight existing objects</td><td>Pulse, Spin, Grow/Shrink</td></tr>
                <tr><td><b>Exit</b></td><td>Remove objects from slide</td><td>Disappear, Fade, Fly Out</td></tr>
                <tr><td><b>Motion Paths</b></td><td>Move objects along a path</td><td>Lines, Arcs, Custom Paths</td></tr>
            </table>
        </div>
        
        <div class="code-box">
            <b>Animation Pane - Your Control Center:</b><br/>
            1. Open <b>Animation Pane</b> from Animations tab<br/>
            2. See all animations on current slide in sequence<br/>
            3. Adjust timing for each animation<br/>
            4. Reorder animations by dragging<br/>
            5. Preview animations in real-time<br/><br/>
            
            <b>Timing Options:</b><br/>
            • <b>On Click:</b> Animation plays when you click (gives you control)<br/>
            • <b>With Previous:</b> Plays simultaneously with previous animation<br/>
            • <b>After Previous:</b> Plays automatically after previous animation<br/>
            • <b>Duration:</b> How long the animation takes (shorter is usually better)<br/>
            • <b>Delay:</b> Wait time before animation starts
        </div>
        
        <div class="section-box">
            <b>Best Practices for Animations:</b><br/>
            
            <div style="background-color: #fff0f0; padding: 10px; margin: 10px 0; border-radius: 5px;">
                ❌ <b>Common Mistakes to Avoid:</b><br/>
                • Using too many different animation types<br/>
                • Making animations too slow or complicated<br/>
                • Animating every single element<br/>
                • Using distracting sound effects<br/>
                • Animating background elements<br/>
            </div>
            
            <div style="background-color: #f0fff0; padding: 10px; margin: 10px 0; border-radius: 5px;">
                ✅ <b>Professional Animation Tips:</b><br/>
                • Use animations to guide audience attention<br/>
                • Keep animations fast and subtle<br/>
                • Use the same animation type for similar elements<br/>
                • Animate in logical sequence (top to bottom, left to right)<br/>
                • Use emphasis animations sparingly for key points<br/>
                • Preview from audience perspective
            </div>
        </div>
        
        <hr/>
        
        <b>c. Adding Video to Presentations</b><br/>
        
        <div class="code-box">
            <b>Inserting Video:</b><br/>
            1. Go to <b>Insert</b> tab → <b>Video</b><br/>
            2. Choose from:<br/>
            &nbsp;&nbsp;• <b>This Device:</b> Video file on your computer<br/>
            &nbsp;&nbsp;• <b>Stock Videos:</b> Free Microsoft videos<br/>
            &nbsp;&nbsp;• <b>Online Videos:</b> YouTube, Vimeo links<br/><br/>
            
            <b>Video Formatting Options:</b><br/>
            • <b>Playback Tab:</b> Controls how video plays<br/>
            • <b>Start:</b> On Click, Automatically, When Clicked On<br/>
            • <b>Play Full Screen:</b> Expands video to full screen<br/>
            • <b>Hide While Not Playing:</b> Video disappears when done<br/>
            • <b>Loop until Stopped:</b> Repeats continuously<br/>
            • <b>Rewind after Playing:</b> Returns to beginning<br/><br/>
            
            <b>Supported Formats:</b> MP4, MOV, WMV, AVI (MP4 recommended)
        </div>
        
        <div class="section-box">
            <b>Video Best Practices:</b><br/>
            • Keep videos short (30-90 seconds maximum)<br/>
            • Ensure videos have clear relevance to your topic<br/>
            • Check audio quality before presenting<br/>
            • Embed videos (don't link to online videos if internet might fail)<br/>
            • Compress videos to reduce file size<br/>
            • Add captions for accessibility<br/>
            • Always test video playback before presentation
        </div>
        
        <hr/>
        
        <b>d. Working with Audio</b><br/>
        
        <div class="code-box">
            <b>Inserting Audio:</b><br/>
            1. Go to <b>Insert</b> tab → <b>Audio</b><br/>
            2. Choose from:<br/>
            &nbsp;&nbsp;• <b>This Device:</b> Audio file on your computer<br/>
            &nbsp;&nbsp;• <b>Record Audio:</b> Record directly in PowerPoint<br/>
            &nbsp;&nbsp;• <b>Online Audio:</b> Stock audio library<br/><br/>
            
            <b>Audio Formatting:</b><br/>
            • <b>Playback Tab:</b> Similar to video controls<br/>
            • <b>Start:</b> On Click, Automatically, Across Slides<br/>
            • <b>Hide During Show:</b> Hides the audio icon<br/>
            • <b>Play in Background:</b> Continues while presenting<br/>
            • <b>Volume:</b> Adjust for your room<br/>
            • <b>Trim Audio:</b> Cut beginning/end if needed<br/><br/>
            
            <b>Supported Formats:</b> MP3, WAV, M4A (MP3 recommended)
        </div>
        
        <div class="section-box">
            <b>Audio Usage Guidelines:</b><br/>
            <b>Background Music:</b><br/>
            • Use only during title/ending slides<br/>
            • Keep volume very low (10-20%)<br/>
            • Choose instrumental, not vocal<br/>
            • Ensure it matches presentation tone<br/><br/>
            
            <b>Sound Effects:</b><br/>
            • Use very sparingly (if at all)<br/>
            • Only for significant moments<br/>
            • Keep volume appropriate<br/>
            • Test with your audience beforehand
        </div>
        
        <hr/>
        
        <h3>Practice Lab: Building an Animated Presentation</h3>
        
        <b>Exercise 1: Basic Animations</b><br/>
        <div class="practice-box">
            <b>Task:</b> Create a "Product Launch" presentation with animations<br/><br/>
            
            <b>Steps:</b><br/>
            1. Create a new presentation with 5 slides:<br/>
            &nbsp;&nbsp;Slide 1: Title slide with company logo<br/>
            &nbsp;&nbsp;Slide 2: Problem statement (3 bullet points)<br/>
            &nbsp;&nbsp;Slide 3: Solution overview (with image)<br/>
            &nbsp;&nbsp;Slide 4: Key features (4 points with icons)<br/>
            &nbsp;&nbsp;Slide 5: Call to action<br/><br/>
            
            2. Add transitions:<br/>
            &nbsp;&nbsp;• Apply "Fade" transition to all slides<br/>
            &nbsp;&nbsp;• Set duration to 0.7 seconds<br/><br/>
            
            3. Add animations:<br/>
            &nbsp;&nbsp;• <b>Slide 2:</b> Make bullet points appear one by one on click<br/>
            &nbsp;&nbsp;• <b>Slide 3:</b> Fade in image, then text appears<br/>
            &nbsp;&nbsp;• <b>Slide 4:</b> Make icons fly in from left, text appears after<br/>
            &nbsp;&nbsp;• <b>Slide 5:</b> Make call-to-action button pulse gently<br/><br/>
            
            4. Use Animation Pane to:<br/>
            &nbsp;&nbsp;• Adjust timing between animations<br/>
            &nbsp;&nbsp;• Preview your animations<br/>
            &nbsp;&nbsp;• Ensure logical sequence
        </div>
        
        <b>Exercise 2: Multimedia Integration</b><br/>
        <div class="practice-box">
            <b>Task:</b> Enhance the presentation with video and audio<br/><br/>
            
            <b>Steps:</b><br/>
            1. Add video:<br/>
            &nbsp;&nbsp;• Insert a stock video on Slide 3<br/>
            &nbsp;&nbsp;• Set to play automatically<br/>
            &nbsp;&nbsp;• Set to loop until stopped<br/>
            &nbsp;&nbsp;• Adjust size to fit design<br/><br/>
            
            2. Add background music:<br/>
            &nbsp;&nbsp;• Insert instrumental background music<br/>
            &nbsp;&nbsp;• Set to play across slides<br/>
            &nbsp;&nbsp;• Set volume to 15%<br/>
            &nbsp;&nbsp;• Hide audio icon during show<br/><br/>
            
            3. Add sound effect:<br/>
            &nbsp;&nbsp;• Add "applause" sound to final slide<br/>
            &nbsp;&nbsp;• Set to play on click<br/>
            &nbsp;&nbsp;• Test volume levels
        </div>
        
        <b>Exercise 3: Advanced Animation Techniques</b><br/>
        <div class="practice-box">
            <b>Task:</b> Create an animated infographic<br/><br/>
            
            <b>Steps:</b><br/>
            1. Create a slide showing "Quarterly Sales Growth"<br/>
            2. Insert a bar chart with 4 quarters<br/>
            3. Animate the chart:<br/>
            &nbsp;&nbsp;• Use "Wipe" animation for bars<br/>
            &nbsp;&nbsp;• Set direction: From Bottom<br/>
            &nbsp;&nbsp;• Delay each bar by 0.3 seconds<br/>
            &nbsp;&nbsp;• Add "Grow" emphasis to highest bar<br/><br/>
            
            4. Add motion path:<br/>
            &nbsp;&nbsp;• Create an arrow showing growth trend<br/>
            &nbsp;&nbsp;• Add "Lines" motion path<br/>
            &nbsp;&nbsp;• Adjust path to follow chart growth<br/>
            &nbsp;&nbsp;• Set to move after chart appears
        </div>
        
        <hr/>
        
        <h3>Troubleshooting Common Issues</h3>
        
        <div class="section-box">
            <table class="info-table">
                <tr><th>Problem</th><th>Solution</th><th>Prevention</th></tr>
                <tr>
                    <td><b>Animations too slow</b></td>
                    <td>Reduce duration to 0.5-1 second</td>
                    <td>Test timing before presentation</td>
                </tr>
                <tr>
                    <td><b>Video won't play</b></td>
                    <td>Convert to MP4, embed (don't link)</td>
                    <td>Test on presentation computer</td>
                </tr>
                <tr>
                    <td><b>Audio too loud/soft</b></td>
                    <td>Adjust volume in playback settings</td>
                    <td>Test in actual room beforehand</td>
                </tr>
                <tr>
                    <td><b>Animation order wrong</b></td>
                    <td>Use Animation Pane to reorder</td>
                    <td>Plan animation sequence first</td>
                </tr>
                <tr>
                    <td><b>File size too large</b></td>
                    <td>Compress media in File → Info</td>
                    <td>Use optimized media formats</td>
                </tr>
                <tr>
                    <td><b>Transitions inconsistent</b></td>
                    <td>Apply to all slides at once</td>
                    <td>Set master transition</td>
                </tr>
            </table>
        </div>
        
        <hr/>
        
        <h3>Assignment: Interactive Training Module</h3>
        
        <div class="assignment-box">
            <b>Objective:</b> Create an interactive employee training presentation<br/><br/>
            
            <b>Requirements:</b><br/>
            1. <b>Structure (8-10 slides):</b><br/>
            &nbsp;&nbsp;• Title slide with animated logo<br/>
            &nbsp;&nbsp;• Introduction with voiceover<br/>
            &nbsp;&nbsp;• 3-4 content slides with animated diagrams<br/>
            &nbsp;&nbsp;• Interactive quiz slide<br/>
            &nbsp;&nbsp;• Video demonstration slide<br/>
            &nbsp;&nbsp;• Summary with animated key points<br/>
            &nbsp;&nbsp;• Certificate of completion<br/><br/>
            
            2. <b>Animation Requirements:</b><br/>
            &nbsp;&nbsp;• Use at least 3 different animation types<br/>
            &nbsp;&nbsp;• Create logical animation sequences<br/>
            &nbsp;&nbsp;• Use emphasis animations for key terms<br/>
            &nbsp;&nbsp;• Add smooth transitions between slides<br/><br/>
            
            3. <b>Multimedia Requirements:</b><br/>
            &nbsp;&nbsp;• Include background music (instrumental)<br/>
            &nbsp;&nbsp;• Add at least one instructional video<br/>
            &nbsp;&nbsp;• Include voiceover on introduction slide<br/>
            &nbsp;&nbsp;• Add sound effects for quiz feedback<br/><br/>
            
            4. <b>Interactive Elements:</b><br/>
            &nbsp;&nbsp;• Create clickable quiz with feedback<br/>
            &nbsp;&nbsp;• Add navigation buttons<br/>
            &nbsp;&nbsp;• Include progress indicator<br/>
            &nbsp;&nbsp;• Add interactive diagrams<br/><br/>
            
            5. <b>Technical Requirements:</b><br/>
            &nbsp;&nbsp;• File size under 20MB<br/>
            &nbsp;&nbsp;• All media embedded (not linked)<br/>
            &nbsp;&nbsp;• Works in presentation mode<br/>
            &nbsp;&nbsp;• Accessible design (good contrast, captions)
        </div>
        
        <div class="practice-box">
            <b>Submission Checklist:</b><br/>
            ☐ Presentation has professional design<br/>
            ☐ Animations are smooth and purposeful<br/>
            ☐ Transitions are consistent<br/>
            ☐ Audio levels are balanced<br/>
            ☐ Videos play properly<br/>
            ☐ Interactive elements work<br/>
            ☐ File size is optimized<br/>
            ☐ No spelling/grammar errors<br/>
            ☐ Tested on different computers<br/>
            ☐ Saved in PPTX and PDF format
        </div>
        
        <hr/>
        
        <h3>Pro Tips for Presenters</h3>
        
        <div class="section-box">
            <b>Rehearsal is Key:</b><br/>
            • Practice with animations to learn timing<br/>
            • Rehearse in the actual presentation space<br/>
            • Time your presentation with animations<br/>
            • Have a backup plan if technology fails<br/><br/>
            
            <b>Audience Focus:</b><br/>
            • Don't let animations distract from your message<br/>
            • Pause after complex animations for absorption<br/>
            • Make eye contact, don't watch your own animations<br/>
            • Ask if animations are working for distant viewers<br/><br/>
            
            <b>Technical Preparation:</b><br/>
            • Bring your own laptop if possible<br/>
            • Have backup copies on USB drive and cloud<br/>
            • Test audio system beforehand<br/>
            • Know how to skip animations if needed<br/>
            • Have a non-animated version as backup
        </div>
        
        <hr/>
        
        <div class="resource-box">
            <h3>Additional Resources</h3>
            
            <b>Free Stock Media:</b><br/>
            • <a href="https://pixabay.com/videos/" target="_blank">Pixabay Videos</a><br/>
            • <a href="https://mixkit.co/free-stock-music/" target="_blank">Mixkit Music & Sound Effects</a><br/>
            • <a href="https://www.pexels.com/videos/" target="_blank">Pexels Videos</a><br/><br/>
            
            <b>Learning Resources:</b><br/>
            • <a href="https://support.microsoft.com/en-us/powerpoint" target="_blank">Microsoft PowerPoint Help</a><br/>
            • <a href="https://www.youtube.com/playlist?list=PLj3mO0pQu0exmGmBa1K6VxJ9OztBq1UvK" target="_blank">PowerPoint Animation Tutorials</a><br/>
            • <a href="https://24slides.com/presentbetter/powerpoint-animation-tutorials/" target="_blank">Professional Animation Guide</a><br/><br/>
            
            <b>Tools & Utilities:</b><br/>
            • <a href="https://www.freeconvert.com/video-compressor" target="_blank">Free Video Compressor</a><br/>
            • <a href="https://audio-joiner.com/" target="_blank">Online Audio Editor</a><br/>
            • <a href="https://www.ilovepdf.com/compress_pdf" target="_blank">PDF Compressor</a>
        </div>
        
        <hr/>
        
        <div class="preview-box">
            <h3>Preview: Day 3 - The Internet & Web Technologies</h3>
            
            <b>Tomorrow you'll learn:</b><br/>
            • How the internet actually works<br/>
            • Difference between browsers and search engines<br/>
            • Understanding DNS (the internet's phonebook)<br/>
            • HTTP vs HTTPS and why it matters<br/>
            • How to check website security<br/>
            • Basic web troubleshooting<br/><br/>
            
            <b>Preparation:</b><br/>
            • Think about how you access websites daily<br/>
            • Note any internet connection issues you've experienced<br/>
            • Review what "HTTP" means in website addresses<br/>
            • Bring questions about how email/web browsing works
        </div>
        
        <div class="completion-box">
            <h3>✅ Day 2 Complete!</h3>
            <p><b>Key Takeaways:</b></p>
            <ul>
                <li>Animations should enhance, not distract from your message</li>
                <li>Consistency in transitions creates professional flow</li>
                <li>Multimedia elements must be relevant and well-integrated</li>
                <li>Always test presentations on the actual equipment</li>
                <li>Keep file sizes manageable for sharing and presenting</li>
            </ul>
            
            <p><b>Practice Challenge:</b> Take a previous presentation and add subtle, professional animations to improve its effectiveness.</p>
        </div>`
            },
            "7-3": {
                icon: "fas fa-globe",
                title: "The Internet & Web Technologies",
                html: `<h1>Week 7, Day 3: The Internet & Web Technologies</h1>
                <p>Today we'll demystify how the internet works and understand the technologies that power our digital world.</p>
                
                <div class="analogy-box">
                    <b>Analogy: The Global Postal System 📮</b><br/>
                    
                    The Internet: The entire global network of roads, planes, and ships<br/>
                    World Wide Web: The letters, packages, and magazines being delivered<br/>
                    Browser: Your local post office that prepares and receives mail<br/>
                    DNS: The phonebook that converts names to addresses<br/>
                    IP Address: Your home's exact street address<br/>
                    Router: The local mail sorting facility<br/>
                    ISP: The national postal service (like FedEx or UPS)<br/>
                    Server: A giant warehouse sending out packages
                </div>

                <h3>Key Topics</h3>
                <ul>
                    <li>How the Internet Actually Works (Technical Overview)</li>
                    <li>Web Browsers vs Search Engines</li>
                    <li>Understanding DNS - The Internet's Phonebook</li>
                    <li>HTTP vs HTTPS and SSL/TLS Encryption</li>
                    <li>Client-Server Architecture</li>
                    <li>Basic Network Troubleshooting</li>
                </ul>

                <h3>In-Depth Explanation</h3>
                
                <b>a. The Internet: A Network of Networks</b><br/>
                
                <div class="section-box">
                    <b>What is the Internet?</b><br/>
                    The internet is a global network of interconnected computers and devices communicating using standardized protocols (TCP/IP).
                    
                    <div style="background-color: #e8f4f8; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>Key Components:</b><br/>
                        • <b>Clients:</b> Your computer, phone, tablet (requests information)<br/>
                        • <b>Servers:</b> Computers that store websites and data (respond to requests)<br/>
                        • <b>Routers:</b> Direct traffic between networks<br/>
                        • <b>Switches:</b> Connect devices within a network<br/>
                        • <b>Cables/Fiber:</b> Physical connections (or wireless signals)<br/>
                        • <b>ISPs:</b> Internet Service Providers that connect you to the internet
                    </div>
                </div>
                
                <div class="code-box">
                    <b>The Journey of a Web Request:</b><br/>
                    When you type "google.com" and press Enter:<br/><br/>
                    
                    1. <b>Your Computer:</b> "I need google.com"<br/>
                    2. <b>DNS Lookup:</b> Converts "google.com" to IP address (like 142.250.185.14)<br/>
                    3. <b>Router:</b> Finds best path to that IP address<br/>
                    4. <b>ISP:</b> Routes request through their network<br/>
                    5. <b>Google Server:</b> Receives request, prepares webpage<br/>
                    6. <b>Return Trip:</b> Webpage data travels back through network<br/>
                    7. <b>Your Browser:</b> Receives and displays the webpage<br/><br/>
                    
                    <b>This happens in milliseconds!</b>
                </div>
                
                <hr/>
                
                <b>b. Web Browsers: Your Window to the Web</b><br/>
                
                <div class="section-box">
                    <b>Browser Components:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Component</th><th>Function</th><th>Analogy</th></tr>
                        <tr><td><b>User Interface</b></td><td>Address bar, buttons, menus</td><td>Car dashboard</td></tr>
                        <tr><td><b>Browser Engine</b></td><td>Coordinates UI and rendering</td><td>Car engine</td></tr>
                        <tr><td><b>Rendering Engine</b></td><td>Displays HTML/CSS</td><td>Factory assembly line</td></tr>
                        <tr><td><b>JavaScript Engine</b></td><td>Executes JavaScript code</td><td>Specialized robot</td></tr>
                        <tr><td><b>Networking</b></td><td>Handles HTTP requests</td><td>Delivery truck</td></tr>
                        <tr><td><b>Data Storage</b></td><td>Cookies, cache, localStorage</td><td>Warehouse storage</td></tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Popular Browsers Comparison:</b><br/>
                    
                    <b>Google Chrome (Most Popular):</b><br/>
                    • Pros: Fast, extensive extensions, good developer tools<br/>
                    • Cons: Resource-heavy, privacy concerns with Google<br/><br/>
                    
                    <b>Mozilla Firefox:</b><br/>
                    • Pros: Strong privacy focus, open-source, customizable<br/>
                    • Cons: Some websites optimized for Chrome<br/><br/>
                    
                    <b>Microsoft Edge:</b><br/>
                    • Pros: Good Windows integration, resource efficient<br/>
                    • Cons: Limited extensions compared to Chrome<br/><br/>
                    
                    <b>Apple Safari:</b><br/>
                    • Pros: Excellent on Mac/iOS, energy efficient<br/>
                    • Cons: Only on Apple devices, fewer extensions
                </div>
                
                <div class="section-box">
                    <b>Browser vs Search Engine:</b><br/>
                    
                    <div style="background-color: #fff0f0; padding: 10px; margin: 10px 0; border-radius: 5px;">
                        <b>❌ Common Confusion:</b> "Google is the internet"<br/>
                        Actually: Google is a search engine that helps you find websites on the internet
                    </div>
                    
                    <div style="background-color: #f0fff0; padding: 10px; margin: 10px 0; border-radius: 5px;">
                        <b>Browser:</b> Software application (Chrome, Firefox, Edge)<br/>
                        <b>Search Engine:</b> Website/service (Google, Bing, DuckDuckGo)<br/>
                        <b>Website:</b> Content you view (Facebook, YouTube, Wikipedia)<br/>
                        <b>The Internet:</b> The network connecting everything
                    </div>
                </div>
                
                <hr/>
                
                <b>c. DNS: The Internet's Phonebook</b><br/>
                
                <div class="code-box">
                    <b>How DNS Works Step-by-Step:</b><br/>
                    
                    1. You type "facebook.com" in browser<br/>
                    2. Browser checks local cache (recently visited sites)<br/>
                    3. If not found, asks operating system cache<br/>
                    4. If not found, asks your router's DNS cache<br/>
                    5. If not found, asks your ISP's DNS servers<br/>
                    6. ISP checks root DNS servers (13 globally)<br/>
                    7. Root directs to .com top-level domain servers<br/>
                    8. .com servers direct to Facebook's name servers<br/>
                    9. Facebook's servers return IP address: 31.13.71.36<br/>
                    10. Your browser connects to that IP address<br/><br/>
                    
                    <b>All this happens in under 1 second!</b>
                </div>
                
                <div class="section-box">
                    <b>DNS Record Types:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Record Type</th><th>Purpose</th><th>Example</th></tr>
                        <tr><td><b>A Record</b></td><td>Maps domain to IPv4 address</td><td>google.com → 142.250.185.14</td></tr>
                        <tr><td><b>AAAA Record</b></td><td>Maps domain to IPv6 address</td><td>google.com → 2607:f8b0:4002:c03::8a</td></tr>
                        <tr><td><b>CNAME</b></td><td>Alias for another domain</td><td>www.google.com → google.com</td></tr>
                        <tr><td><b>MX Record</b></td><td>Mail server for domain</td><td>Handles email for @gmail.com</td></tr>
                        <tr><td><b>TXT Record</b></td><td>Text information (verification, SPF)</td><td>Domain ownership verification</td></tr>
                    </table>
                </div>
                
                <div class="practice-box">
                    <b>Hands-On: Using DNS Tools</b><br/><br/>
                    
                    <b>1. Find Your DNS Server:</b><br/>
                    Windows: Open Command Prompt → type "ipconfig /all"<br/>
                    Mac/Linux: Terminal → type "cat /etc/resolv.conf"<br/><br/>
                    
                    <b>2. Use nslookup (Command Line):</b><br/>
                    nslookup google.com<br/>
                    nslookup -type=mx gmail.com<br/><br/>
                    
                    <b>3. Online DNS Lookup Tools:</b><br/>
                    • <a href="https://www.nslookup.io/" target="_blank">nslookup.io</a><br/>
                    • <a href="https://www.whatsmydns.net/" target="_blank">WhatsMyDNS.net</a><br/>
                    • <a href="https://dnschecker.org/" target="_blank">DNSChecker.org</a>
                </div>
                
                <hr/>
                
                <b>d. HTTP vs HTTPS: Security Matters</b><br/>
                
                <div class="section-box">
                    <b>HTTP (HyperText Transfer Protocol):</b><br/>
                    • Unencrypted communication<br/>
                    • Data sent in plain text<br/>
                    • Can be intercepted and read<br/>
                    • URL starts with http://<br/>
                    • Not secure for sensitive information<br/><br/>
                    
                    <b>HTTPS (HTTP Secure):</b><br/>
                    • Encrypted communication<br/>
                    • Data encrypted using SSL/TLS<br/>
                    • Secure for sensitive data<br/>
                    • URL starts with https://<br/>
                    • Shows padlock in browser<br/>
                    • Required for modern websites
                </div>
                
                <div class="code-box">
                    <b>How HTTPS Encryption Works:</b><br/>
                    
                    1. Browser connects to website<br/>
                    2. Website sends SSL certificate<br/>
                    3. Browser verifies certificate with Certificate Authority<br/>
                    4. Browser and server establish encrypted connection<br/>
                    5. All data encrypted before sending<br/>
                    6. Only browser and server can decrypt data<br/><br/>
                    
                    <b>Three Key Benefits:</b><br/>
                    1. <b>Privacy:</b> Data encrypted, cannot be read by others<br/>
                    2. <b>Integrity:</b> Data cannot be modified without detection<br/>
                    3. <b>Authentication:</b> Verifies you're talking to real website
                </div>
                
                <div class="practice-box">
                    <b>Checking Website Security:</b><br/><br/>
                    
                    <b>1. Look for Padlock:</b> Green padlock = secure connection<br/>
                    <b>2. Check Certificate:</b> Click padlock → "Certificate"<br/>
                    <b>3. Verify Details:</b> Issued to, Issued by, Validity period<br/>
                    <b>4. Browser Warnings:</b> "Not Secure" = avoid entering data<br/><br/>
                    
                    <b>Exercise:</b> Visit these sites and check their certificates:<br/>
                    • https://www.google.com<br/>
                    • https://www.facebook.com<br/>
                    • https://www.bankingwebsite.com (if you have one)<br/>
                    • http://neverssl.com (example of HTTP-only site)
                </div>
                
                <hr/>
                
                <b>e. Client-Server Architecture</b><br/>
                
                <div class="section-box">
                    <b>The Client-Server Model:</b><br/>
                    
                    <div style="text-align: center; margin: 20px 0;">
                        [Client] ← Internet → [Server]<br/>
                        ↓<br/>
                        Requests webpage<br/>
                        ↑<br/>
                        Sends webpage data
                    </div>
                    
                    <b>Client (Your Device):</b><br/>
                    • Makes requests (GET, POST)<br/>
                    • Processes and displays data<br/>
                    • Examples: Browser, mobile app, email client<br/><br/>
                    
                    <b>Server (Remote Computer):</b><br/>
                    • Listens for requests<br/>
                    • Processes requests<br/>
                    • Sends back responses<br/>
                    • Examples: Web server, database server, file server
                </div>
                
                <div class="code-box">
                    <b>Common Server Types:</b><br/>
                    
                    <b>Web Server:</b> Serves web pages (Apache, Nginx, IIS)<br/>
                    <b>Database Server:</b> Stores and manages data (MySQL, PostgreSQL)<br/>
                    <b>File Server:</b> Stores and shares files<br/>
                    <b>Mail Server:</b> Handles email (SMTP, IMAP, POP3)<br/>
                    <b>Application Server:</b> Runs business logic<br/>
                    <b>DNS Server:</b> Translates domain names to IPs<br/><br/>
                    
                    <b>Request Methods (HTTP Verbs):</b><br/>
                    • <b>GET:</b> Retrieve data (view page)<br/>
                    • <b>POST:</b> Send data (submit form)<br/>
                    • <b>PUT:</b> Update data<br/>
                    • <b>DELETE:</b> Remove data<br/>
                    • <b>HEAD:</b> Get headers only
                </div>
                
                <hr/>
                
                <h3>Practice Lab: Network Investigation</h3>
                
                <b>Exercise 1: Trace the Route</b><br/>
                <div class="practice-box">
                    <b>Using Command Prompt/Terminal:</b><br/><br/>
                    
                    <b>Windows:</b><br/>
                    1. Open Command Prompt<br/>
                    2. Type: tracert google.com<br/>
                    3. Count how many "hops" to reach Google<br/>
                    4. Note the IP addresses along the way<br/><br/>
                    
                    <b>Mac/Linux:</b><br/>
                    1. Open Terminal<br/>
                    2. Type: traceroute google.com<br/>
                    3. Analyze the route<br/><br/>
                    
                    <b>What to Look For:</b><br/>
                    • First hop: Your router<br/>
                    • Second hop: Your ISP<br/>
                    • Subsequent hops: Internet backbone<br/>
                    • Final hop: Google's servers
                </div>
                
                <b>Exercise 2: Browser Developer Tools</b><br/>
                <div class="practice-box">
                    <b>Using Chrome DevTools:</b><br/><br/>
                    
                    1. Open Chrome<br/>
                    2. Press F12 or Ctrl+Shift+I<br/>
                    3. Go to <b>Network</b> tab<br/>
                    4. Visit a website (like cnn.com)<br/>
                    5. Observe all network requests<br/><br/>
                    
                    <b>Analyze:</b><br/>
                    • How many requests to load one page?<br/>
                    • What types of files? (HTML, CSS, JS, images)<br/>
                    • Which requests are slowest?<br/>
                    • Check response headers<br/>
                    • Look for 404 errors (file not found)<br/><br/>
                    
                    <b>Pro Tip:</b> Check "Disable cache" to see fresh loading
                </div>
                
                <b>Exercise 3: Security Analysis</b><br/>
                <div class="practice-box">
                    <b>Website Security Check:</b><br/><br/>
                    
                    1. Visit https://www.ssllabs.com/ssltest/<br/>
                    2. Test these websites:<br/>
                    &nbsp;&nbsp;• Your bank's website<br/>
                    &nbsp;&nbsp;• Google.com<br/>
                    &nbsp;&nbsp;• A small local business site<br/><br/>
                    
                    2. Check SSL/TLS configuration:<br/>
                    &nbsp;&nbsp;• Certificate validity<br/>
                    &nbsp;&nbsp;• Protocol support (TLS 1.2, TLS 1.3)<br/>
                    &nbsp;&nbsp;• Key exchange strength<br/>
                    &nbsp;&nbsp;• Cipher strength<br/><br/>
                    
                    3. Compare grades (A+ to F)<br/>
                    4. Note recommendations for improvement
                </div>
                
                <hr/>
                
                <h3>Troubleshooting Network Issues</h3>
                
                <div class="section-box">
                    <table class="info-table">
                        <tr><th>Symptom</th><th>Possible Cause</th><th>Solution</th></tr>
                        <tr>
                            <td><b>"No Internet"</b></td>
                            <td>Router/modem issue, ISP outage</td>
                            <td>Restart router, check cables, call ISP</td>
                        </tr>
                        <tr>
                            <td><b>Slow speeds</b></td>
                            <td>Network congestion, Wi-Fi interference</td>
                            <td>Use Ethernet, change Wi-Fi channel, upgrade plan</td>
                        </tr>
                        <tr>
                            <td><b>One site down</b></td>
                            <td>Site server issues, DNS problems</td>
                            <td>Check downdetector.com, flush DNS</td>
                        </tr>
                        <tr>
                            <td><b>DNS errors</b></td>
                            <td>DNS server issues</td>
                            <td>Change DNS to Google (8.8.8.8) or Cloudflare (1.1.1.1)</td>
                        </tr>
                        <tr>
                            <td><b>SSL errors</b></td>
                            <td>Expired certificate, wrong date/time</td>
                            <td>Check computer clock, proceed with caution</td>
                        </tr>
                        <tr>
                            <td><b>Limited connectivity</b></td>
                            <td>IP address conflict</td>
                            <td>Renew IP address (ipconfig /renew)</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Essential Network Commands:</b><br/><br/>
                    
                    <b>Windows Commands:</b><br/>
                    • ipconfig /all (View network configuration)<br/>
                    • ipconfig /release (Release IP address)<br/>
                    • ipconfig /renew (Get new IP address)<br/>
                    • ipconfig /flushdns (Clear DNS cache)<br/>
                    • ping google.com (Test connectivity)<br/>
                    • tracert google.com (Trace route)<br/>
                    • nslookup google.com (DNS lookup)<br/>
                    • netstat -an (Active connections)<br/><br/>
                    
                    <b>Mac/Linux Commands:</b><br/>
                    • ifconfig (Network configuration)<br/>
                    • ping google.com<br/>
                    • traceroute google.com<br/>
                    • dig google.com (DNS lookup)<br/>
                    • nslookup google.com
                </div>
                
                <hr/>
                
                <h3>Assignment: Network Analysis Report</h3>
                
                <div class="assignment-box">
                    <b>Objective:</b> Analyze your home/work network and create a security assessment<br/><br/>
                    
                    <b>Part 1: Network Mapping</b><br/>
                    1. <b>Diagram Your Network:</b><br/>
                    &nbsp;&nbsp;• Draw physical layout (modem, router, devices)<br/>
                    &nbsp;&nbsp;• List all connected devices (name, type, IP)<br/>
                    &nbsp;&nbsp;• Show wired vs wireless connections<br/><br/>
                    
                    2. <b>Performance Analysis:</b><br/>
                    &nbsp;&nbsp;• Test internet speed (speedtest.net)<br/>
                    &nbsp;&nbsp;• Compare to your ISP plan<br/>
                    &nbsp;&nbsp;• Test at different times of day<br/>
                    &nbsp;&nbsp;• Identify bottlenecks<br/><br/>
                    
                    <b>Part 2: Security Assessment</b><br/>
                    1. <b>Wi-Fi Security:</b><br/>
                    &nbsp;&nbsp;• Check encryption (WPA2/WPA3)<br/>
                    &nbsp;&nbsp;• Test password strength<br/>
                    &nbsp;&nbsp;• Check for open ports<br/><br/>
                    
                    2. <b>Device Security:</b><br/>
                    &nbsp;&nbsp;• List operating systems and versions<br/>
                    &nbsp;&nbsp;• Check for updates needed<br/>
                    &nbsp;&nbsp;• Identify potential vulnerabilities<br/><br/>
                    
                    <b>Part 3: Website Security Check</b><br/>
                    1. Analyze 5 websites you frequently use:<br/>
                    &nbsp;&nbsp;• Check HTTPS implementation<br/>
                    &nbsp;&nbsp;• Review privacy policies<br/>
                    &nbsp;&nbsp;• Check for security headers<br/>
                    &nbsp;&nbsp;• Test on SSL Labs<br/><br/>
                    
                    <b>Part 4: Recommendations</b><br/>
                    1. Create improvement plan with:<br/>
                    &nbsp;&nbsp;• Immediate actions (1 week)<br/>
                    &nbsp;&nbsp;• Short-term improvements (1 month)<br/>
                    &nbsp;&nbsp;• Long-term upgrades (6 months)
                </div>
                
                <div class="practice-box">
                    <b>Submission Requirements:</b><br/>
                    ☐ Network diagram with all components<br/>
                    ☐ Device inventory with security status<br/>
                    ☐ Speed test results analysis<br/>
                    ☐ Website security assessment<br/>
                    ☐ Action plan with priorities<br/>
                    ☐ Evidence of command line use<br/>
                    ☐ Screenshots of diagnostic tools<br/>
                    ☐ Professional report format (Word/PDF)
                </div>
                
                <hr/>
                
                <h3>Real-World Applications</h3>
                
                <div class="section-box">
                    <b>Career Paths Using This Knowledge:</b><br/><br/>
                    
                    <b>Network Administrator:</b><br/>
                    • Maintain company networks<br/>
                    • Troubleshoot connectivity issues<br/>
                    • Implement security measures<br/>
                    • Average salary: $65,000-$95,000<br/><br/>
                    
                    <b>Web Developer:</b><br/>
                    • Build and maintain websites<br/>
                    • Ensure website security<br/>
                    • Optimize website performance<br/>
                    • Average salary: $70,000-$110,000<br/><br/>
                    
                    <b>Cybersecurity Analyst:</b><br/>
                    • Protect networks from attacks<br/>
                    • Monitor for security breaches<br/>
                    • Implement security protocols<br/>
                    • Average salary: $80,000-$120,000<br/><br/>
                    
                    <b>IT Support Specialist:</b><br/>
                    • Help users with tech issues<br/>
                    • Maintain computer systems<br/>
                    • Train users on security<br/>
                    • Average salary: $45,000-$70,000
                </div>
                
                <hr/>
                
                <div class="resource-box">
                    <h3>Additional Resources</h3>
                    
                    <b>Learning Platforms:</b><br/>
                    • <a href="https://www.cloudflare.com/learning/" target="_blank">Cloudflare Learning Center</a><br/>
                    • <a href="https://developer.mozilla.org/en-US/docs/Web" target="_blank">MDN Web Docs</a><br/>
                    • <a href="https://www.coursera.org/learn/internet-history" target="_blank">Internet History, Technology, and Security (Coursera)</a><br/><br/>
                    
                    <b>Tools & Utilities:</b><br/>
                    • <a href="https://www.wireshark.org/" target="_blank">Wireshark (Network Protocol Analyzer)</a><br/>
                    • <a href="https://nmap.org/" target="_blank">Nmap (Network Scanner)</a><br/>
                    • <a href="https://www.advanced-ip-scanner.com/" target="_blank">Advanced IP Scanner</a><br/>
                    • <a href="https://www.grc.com/shieldsup" target="_blank">ShieldsUp! (Port Scanner)</a><br/><br/>
                    
                    <b>Security Resources:</b><br/>
                    • <a href="https://haveibeenpwned.com/" target="_blank">Have I Been Pwned? (Check data breaches)</a><br/>
                    • <a href="https://www.virustotal.com/" target="_blank">VirusTotal (File/URL scanner)</a><br/>
                    • <a href="https://www.troyhunt.com/" target="_blank">Troy Hunt's Security Blog</a>
                </div>
                
                <hr/>
                
                <div class="preview-box">
                    <h3>Preview: Day 4 - Email Practice & Professionalism</h3>
                    
                    <b>Tomorrow you'll learn:</b><br/>
                    • Professional email structure and etiquette<br/>
                    • CC vs BCC and when to use each<br/>
                    • Creating effective email signatures<br/>
                    • Managing attachments and file sizes<br/>
                    • Email security best practices<br/>
                    • Dealing with spam and phishing<br/>
                    • Organizing your inbox effectively<br/><br/>
                    
                    <b>Preparation:</b><br/>
                    • Review emails you've sent recently<br/>
                    • Note any email challenges you've faced<br/>
                    • Think about what makes a "good" vs "bad" email<br/>
                    • Bring questions about email etiquette
                </div>
                
                <div class="completion-box">
                    <h3>✅ Day 3 Complete!</h3>
                    <p><b>Key Takeaways:</b></p>
                    <ul>
                        <li>The internet is a network of networks using TCP/IP protocols</li>
                        <li>DNS translates human-friendly names to computer-friendly IP addresses</li>
                        <li>HTTPS provides encryption for secure communication</li>
                        <li>Understanding client-server architecture helps troubleshoot issues</li>
                        <li>Basic network commands are essential for IT professionals</li>
                    </ul>
                    
                    <p><b>Practice Challenge:</b> Change your DNS to 1.1.1.1 (Cloudflare) or 8.8.8.8 (Google) and test if websites load faster.</p>
                    
                    <p><b>Fun Fact:</b> The first message sent over the internet was "LO" - an attempt to send "LOGIN" that crashed after two letters!</p>
                </div>`
            },
            "7-4": {
                icon: "fas fa-envelope",
                title: "Email Practice & Professionalism",
                html: `<h1>Week 7, Day 4: Email Practice & Professionalism</h1>
                <p>Today we'll master professional email communication - the most important business tool in the digital age.</p>
                
                <div class="analogy-box">
                    <b>Analogy: The Digital Handshake & Paper Trail 🤝📄</b><br/>
                    
                    Email Subject: The headline of a newspaper article<br/>
                    Email Body: A formal business letter<br/>
                    Signature: Your digital business card<br/>
                    CC: Putting someone in the meeting room<br/>
                    BCC: The one-way mirror - they see you, you don't see them<br/>
                    Attachment: Handing someone a document at a meeting<br/>
                    Reply All: Shouting in a crowded room<br/>
                    Forward: Passing along a memo with your notes
                </div>

                <h3>Key Topics</h3>
                <ul>
                    <li>Professional Email Structure and Etiquette</li>
                    <li>To, CC, and BCC - Proper Usage</li>
                    <li>Creating Effective Email Signatures</li>
                    <li>Attachment Management and File Types</li>
                    <li>Email Security and Phishing Detection</li>
                    <li>Inbox Organization and Productivity</li>
                    <li>Email Templates and Automation</li>
                </ul>

                <h3>In-Depth Explanation</h3>
                
                <b>a. Anatomy of a Professional Email</b><br/>
                
                <div class="section-box">
                    <b>The 7 Parts of a Professional Email:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Part</th><th>Purpose</th><th>Best Practices</th></tr>
                        <tr>
                            <td><b>1. Subject Line</b></td>
                            <td>Tells recipient what email is about</td>
                            <td>Clear, specific, 5-8 words, include action needed</td>
                        </tr>
                        <tr>
                            <td><b>2. Salutation</b></td>
                            <td>Greets recipient appropriately</td>
                            <td>Use name if known, "Dear [Name]" for formal, "Hi [Name]" for casual</td>
                        </tr>
                        <tr>
                            <td><b>3. Opening</b></td>
                            <td>Sets context and purpose</td>
                            <td>Brief, states why you're writing, reference previous contact if applicable</td>
                        </tr>
                        <tr>
                            <td><b>4. Body</b></td>
                            <td>Main content and details</td>
                            <td>Clear paragraphs, bullet points for lists, focus on one main topic</td>
                        </tr>
                        <tr>
                            <td><b>5. Closing</b></td>
                            <td>Summarizes and states next steps</td>
                            <td>Clear call to action, deadlines if applicable</td>
                        </tr>
                        <tr>
                            <td><b>6. Sign-off</b></td>
                            <td>Polite ending before signature</td>
                            <td>"Best regards," "Sincerely," "Thank you," match formality of email</td>
                        </tr>
                        <tr>
                            <td><b>7. Signature</b></td>
                            <td>Your contact information</td>
                            <td>Name, title, company, phone, professional links</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Email Format Examples:</b><br/><br/>
                    
                    <b>Formal Business Email:</b><br/>
                    Subject: Project Phoenix Update & Q3 Budget Approval Request<br/><br/>
                    
                    Dear Mr. Johnson,<br/><br/>
                    
                    I'm writing to provide an update on Project Phoenix and request your approval for the Q3 budget allocation.<br/><br/>
                    
                    As discussed in our meeting last Friday, we have completed Phase 1 ahead of schedule. Key accomplishments include:<br/>
                    • Implemented new CRM system<br/>
                    • Trained 15 team members<br/>
                    • Achieved 95% user adoption rate<br/><br/>
                    
                    For Phase 2, we require budget approval of $25,000 for:<br/>
                    1. Software licensing ($15,000)<br/>
                    2. External consultant fees ($8,000)<br/>
                    3. Training materials ($2,000)<br/><br/>
                    
                    Could you please review the attached budget proposal and provide your approval by Friday, October 27?<br/><br/>
                    
                    Best regards,<br/>
                    [Your Signature]<br/><br/>
                    
                    <hr/><br/>
                    
                    <b>Informal Team Email:</b><br/>
                    Subject: Team Lunch This Friday @ 12:30 PM<br/><br/>
                    
                    Hi Team,<br/><br/>
                    
                    Quick reminder about our team lunch this Friday at Mario's Italian Restaurant.<br/><br/>
                    
                    Details:<br/>
                    • Time: 12:30 PM<br/>
                    • Location: 123 Main Street<br/>
                    • Please RSVP by Thursday<br/>
                    • Dietary restrictions? Reply to this email<br/><br/>
                    
                    Looking forward to it!<br/><br/>
                    
                    Thanks,<br/>
                    [Your Name]
                </div>
                
                <div class="section-box">
                    <b>Common Email Mistakes to Avoid:</b><br/>
                    
                    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>❌ Unprofessional Email Practices:</b><br/>
                        • No subject line or vague subject ("Hello")<br/>
                        • Using casual greetings in formal emails ("Hey dude")<br/>
                        • Writing a novel instead of being concise<br/>
                        • ALL CAPS (comes across as shouting)<br/>
                        • Excessive exclamation points!!!!<br/>
                        • Text speak (u, r, gr8, lol) in business emails<br/>
                        • Sending without proofreading<br/>
                        • Replying to all when only sender needs to know<br/>
                        • Forgetting attachments mentioned in email<br/>
                        • Using personal email for business
                    </div>
                </div>
                
                <hr/>
                
                <b>b. To, CC, and BCC - Mastering Recipient Fields</b><br/>
                
                <div class="section-box">
                    <b>Understanding Recipient Fields:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Field</th><th>Purpose</th><th>When to Use</th><th>Recipients See</th></tr>
                        <tr>
                            <td><b>To:</b></td>
                            <td>Primary recipients</td>
                            <td>People who need to take action or respond</td>
                            <td>All recipients</td>
                        </tr>
                        <tr>
                            <td><b>CC:</b> (Carbon Copy)</td>
                            <td>Secondary recipients</td>
                            <td>People who need to be informed but no action required</td>
                            <td>All recipients</td>
                        </tr>
                        <tr>
                            <td><b>BCC:</b> (Blind Carbon Copy)</td>
                            <td>Hidden recipients</td>
                            <td>Privacy protection, mass emails, keeping replies private</td>
                            <td>Only themselves</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Practical Examples:</b><br/><br/>
                    
                    <b>Example 1: Team Project Update</b><br/>
                    • <b>To:</b> Project team members (they need to implement tasks)<br/>
                    • <b>CC:</b> Department manager (needs to be informed)<br/>
                    • <b>BCC:</b> HR (confidential salary info in attachment)<br/><br/>
                    
                    <b>Example 2: Client Communication</b><br/>
                    • <b>To:</b> Client decision-maker<br/>
                    • <b>CC:</b> Your boss (keeping them in the loop)<br/>
                    • <b>BCC:</b> Your personal email (for your records)<br/><br/>
                    
                    <b>Example 3: Newsletter/Announcement</b><br/>
                    • <b>To:</b> Your own email<br/>
                    • <b>BCC:</b> All recipients (protects privacy)<br/><br/>
                    
                    <b>The "Reply All" Danger:</b><br/>
                    When you CC 50 people and someone hits "Reply All" with "Thanks!" → 50 unnecessary emails.<br/>
                    <b>Solution:</b> Think carefully before using CC with large groups.
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Recipient Field Scenarios</b><br/><br/>
                    
                    <b>Situation 1:</b> You need to email a report to your manager, but want your colleague to see it too.<br/>
                    <b>Solution:</b> To: Manager, CC: Colleague<br/><br/>
                    
                    <b>Situation 2:</b> Sending a company-wide announcement about a policy change.<br/>
                    <b>Solution:</b> To: Yourself, BCC: All employees<br/><br/>
                    
                    <b>Situation 3:</b> Client asks you to include their assistant on all communications.<br/>
                    <b>Solution:</b> To: Client, CC: Assistant<br/><br/>
                    
                    <b>Situation 4:</b> Sending sensitive salary information to HR but copying your boss.<br/>
                    <b>Solution:</b> To: HR, BCC: Your boss (or separate email)
                </div>
                
                <hr/>
                
                <b>c. Professional Email Signatures</b><br/>
                
                <div class="section-box">
                    <b>Elements of a Professional Signature:</b><br/>
                    
                    <div style="background-color: #e8f4f8; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>Essential Elements:</b><br/>
                        • Full name<br/>
                        • Job title<br/>
                        • Company name<br/>
                        • Phone number (with country code if international)<br/>
                        • Email address (even though they just received it)<br/>
                        • Company website<br/><br/>
                        
                        <b>Optional Elements:</b><br/>
                        • Company logo (small, professional)<br/>
                        • Office address<br/>
                        • Social media links (LinkedIn, professional only)<br/>
                        • Calendar scheduling link<br/>
                        • Legal disclaimers (if required)<br/>
                        • Pronouns (increasingly common)
                    </div>
                </div>
                
                <div class="code-box">
                    <b>Signature Examples:</b><br/><br/>
                    
                    <b>Corporate Signature:</b><br/>
                    --<br/>
                    <b>Alex Johnson</b><br/>
                    Senior Project Manager | Tech Innovations Inc.<br/>
                    📞 +1 (555) 123-4567<br/>
                    📧 alex.johnson@techinnovations.com<br/>
                    🌐 www.techinnovations.com<br/>
                    [Small Company Logo]<br/><br/>
                    
                    <b>Creative Professional:</b><br/>
                    --<br/>
                    <b>Maria Chen</b><br/>
                    Graphic Design Director<br/>
                    Canvas Creative Studio<br/>
                    Phone: 555-987-6543<br/>
                    Portfolio: www.mariachen.design<br/>
                    LinkedIn: linkedin.com/in/mariachen<br/>
                    Booking: calendly.com/mariachen<br/><br/>
                    
                    <b>Academic/Student:</b><br/>
                    --<br/>
                    <b>David Wilson (he/him)</b><br/>
                    Computer Science Student | University of Technology<br/>
                    Expected Graduation: May 2024<br/>
                    Email: dwilson@student.untech.edu<br/>
                    LinkedIn: linkedin.com/in/davidwilsoncs<br/>
                    GitHub: github.com/dwilson-dev
                </div>
                
                <div class="practice-box">
                    <b>Creating Your Signature in Different Clients:</b><br/><br/>
                    
                    <b>Gmail:</b><br/>
                    1. Settings (gear icon) → See all settings<br/>
                    2. General tab → Signature section<br/>
                    3. Create new, format with toolbar<br/>
                    4. Set as default<br/><br/>
                    
                    <b>Outlook Desktop:</b><br/>
                    1. File → Options → Mail<br/>
                    2. Signatures button<br/>
                    3. New, name it, create<br/>
                    4. Set default for new messages and replies<br/><br/>
                    
                    <b>Outlook Web:</b><br/>
                    1. Settings (gear icon) → View all Outlook settings<br/>
                    2. Compose and reply → Email signature<br/>
                    3. Create and save<br/><br/>
                    
                    <b>Apple Mail:</b><br/>
                    1. Mail → Preferences → Signatures<br/>
                    2. Select account, click +<br/>
                    3. Create signature, drag to account
                </div>
                
                <hr/>
                
                <b>d. Attachment Management</b><br/>
                
                <div class="section-box">
                    <b>Attachment Best Practices:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Rule</th><th>Why</th><th>Solution</th></tr>
                        <tr>
                            <td><b>Size Limit: 10MB</b></td>
                            <td>Many servers reject large files</td>
                            <td>Compress images, use cloud links for large files</td>
                        </tr>
                        <tr>
                            <td><b>Rename Files</b></td>
                            <td>Clear names help organization</td>
                            <td>ProjectName_DocumentType_Date_Version.pdf</td>
                        </tr>
                        <tr>
                            <td><b>Mention Attachments</b></td>
                            <td>Recipients might miss them</td>
                            <td>"Please see attached [filename]" in body</td>
                        </tr>
                        <tr>
                            <td><b>Check Before Sending</b></td>
                            <td>Forgotten attachments are unprofessional</td>
                            <td>Make it a habit to double-check</td>
                        </tr>
                        <tr>
                            <td><b>Use Common Formats</b></td>
                            <td>Not everyone has specialized software</td>
                            <td>PDF for documents, JPG/PNG for images</td>
                        </tr>
                        <tr>
                            <td><b>Scan for Viruses</b></td>
                            <td>Protect recipients</td>
                            <td>Always scan before sending</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>File Format Guide:</b><br/><br/>
                    
                    <b>Documents:</b><br/>
                    • <b>PDF:</b> Best for final versions (preserves formatting)<br/>
                    • <b>DOCX:</b> For editing in Word<br/>
                    • <b>PPTX:</b> PowerPoint presentations<br/>
                    • <b>XLSX:</b> Excel spreadsheets<br/><br/>
                    
                    <b>Images:</b><br/>
                    • <b>JPG/JPEG:</b> Photos (smaller file size)<br/>
                    • <b>PNG:</b> Graphics, screenshots (supports transparency)<br/>
                    • <b>GIF:</b> Simple animations<br/>
                    • <b>SVG:</b> Vector graphics (scalable)<br/><br/>
                    
                    <b>Cloud Sharing Alternatives:</b><br/>
                    • Google Drive/Docs links<br/>
                    • OneDrive/SharePoint links<br/>
                    • Dropbox links<br/>
                    • WeTransfer for very large files<br/><br/>
                    
                    <b>Compression Tools:</b><br/>
                    • SmallPDF.com (PDF compression)<br/>
                    • TinyPNG.com (Image compression)<br/>
                    • 7-Zip (File compression)
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Attachment Management</b><br/><br/>
                    
                    <b>Task 1: File Renaming</b><br/>
                    Rename these poorly named files professionally:<br/>
                    1. "Document1.docx" → "Q4_Financial_Report_2023_Draft.docx"<br/>
                    2. "IMG_4587.jpg" → "Team_Building_Event_Oct2023.jpg"<br/>
                    3. "scan.pdf" → "Signed_Contract_ClientXYZ_20231015.pdf"<br/><br/>
                    
                    <b>Task 2: File Compression</b><br/>
                    1. Take a 5MB JPG image and compress to under 1MB<br/>
                    2. Convert a Word document to PDF and compare sizes<br/>
                    3. Create a ZIP file with 3 documents<br/><br/>
                    
                    <b>Task 3: Cloud Sharing</b><br/>
                    1. Upload a file to Google Drive/OneDrive<br/>
                    2. Create a shareable link<br/>
                    3. Set appropriate permissions (view only vs edit)<br/>
                    4. Test the link in incognito mode
                </div>
                
                <hr/>
                
                <b>e. Email Security and Phishing</b><br/>
                
                <div class="section-box">
                    <b>Identifying Phishing Emails:</b><br/>
                    
                    <div style="background-color: #fff0f0; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>🚩 Red Flags in Suspicious Emails:</b><br/>
                        • Urgent language ("Act now or account closed!")<br/>
                        • Poor grammar and spelling<br/>
                        • Generic greetings ("Dear valued customer")<br/>
                        • Suspicious sender email (amazon-support@randomdomain.com)<br/>
                        • Requests for personal information<br/>
                        • Unexpected attachments<br/>
                        • Links to unfamiliar websites<br/>
                        • Offers that seem too good to be true
                    </div>
                </div>
                
                <div class="code-box">
                    <b>How to Verify Suspicious Emails:</b><br/><br/>
                    
                    <b>1. Check the Sender:</b><br/>
                    • Hover over "From" name to see actual email address<br/>
                    • Look for misspellings (amaz0n.com, paypa1.com)<br/>
                    • Check if domain matches company (legitimate: @apple.com, fake: @apple-support.xyz)<br/><br/>
                    
                    <b>2. Inspect Links:</b><br/>
                    • Hover over links (don't click!) to see actual URL<br/>
                    • Look for HTTPS (not HTTP)<br/>
                    • Check for strange characters or misspellings<br/><br/>
                    
                    <b>3. Verify Content:</b><br/>
                    • Companies rarely ask for passwords via email<br/>
                    • Check for inconsistencies with previous communications<br/>
                    • Contact company directly using known contact methods<br/><br/>
                    
                    <b>4. Check Attachments:</b><br/>
                    • Don't open unexpected attachments<br/>
                    • Scan with antivirus before opening<br/>
                    • Be wary of .exe, .scr, .zip files from unknown senders
                </div>
                
                <div class="practice-box">
                    <b>Phishing Detection Exercise:</b><br/><br/>
                    
                    <b>Email 1:</b><br/>
                    From: "Apple Support" <support@apple-security.net><br/>
                    Subject: URGENT: Your Apple ID will be locked<br/>
                    Body: "Click here to verify your account: http://apple-id-verify.com/login"<br/>
                    <b>Verdict:</b> Phishing - Suspicious domain, HTTP not HTTPS, urgent language<br/><br/>
                    
                    <b>Email 2:</b><br/>
                    From: "Amazon" <no-reply@amazon.com><br/>
                    Subject: Order Confirmation #123456<br/>
                    Body: "Your order has shipped. Track here: https://amazon.com/track/123456"<br/>
                    <b>Verdict:</b> Possibly legitimate - Check if you actually placed order<br/><br/>
                    
                    <b>Email 3:</b><br/>
                    From: "Your Boss" <bossname@gmail.com> (but boss uses company email)<br/>
                    Subject: Need gift cards urgently<br/>
                    Body: "Can you buy $500 in iTunes gift cards and send me the codes?"<br/>
                    <b>Verdict:</b> Phishing - Personal email for business, unusual request
                </div>
                
                <hr/>
                
                <h3>Practice Lab: Professional Email Creation</h3>
                
                <b>Exercise 1: Job Application Email</b><br/>
                <div class="practice-box">
                    <b>Scenario:</b> Apply for Software Developer position at TechCorp<br/><br/>
                    
                    <b>Requirements:</b><br/>
                    1. Professional subject line<br/>
                    2. Appropriate salutation (hiring manager name unknown)<br/>
                    3. Brief introduction and interest statement<br/>
                    4. Highlight 2-3 relevant skills/experiences<br/>
                    5. Reference attached resume and portfolio<br/>
                    6. Professional closing with call to action<br/>
                    7. Complete professional signature<br/><br/>
                    
                    <b>Checklist:</b><br/>
                    ☐ Subject: Software Developer Application - [Your Name]<br/>
                    ☐ No spelling/grammar errors<br/>
                    ☐ Resume attached (PDF format)<br/>
                    ☐ Portfolio link included<br/>
                    ☐ Professional tone throughout<br/>
                    ☐ Signature with contact info
                </div>
                
                <b>Exercise 2: Client Meeting Follow-up</b><br/>
                <div class="practice-box">
                    <b>Scenario:</b> Follow up after client meeting about website redesign<br/><br/>
                    
                    <b>Requirements:</b><br/>
                    1. Thank client for meeting<br/>
                    2. Summarize key discussion points<br/>
                    3. Attach proposal document<br/>
                    4. CC your project manager<br/>
                    5. Include next steps and timeline<br/>
                    6. Offer to answer questions<br/>
                    7. Professional closing<br/><br/>
                    
                    <b>Checklist:</b><br/>
                    ☐ Clear subject referencing meeting<br/>
                    ☐ Client in "To:" field<br/>
                    ☐ Project manager in "CC:"<br/>
                    ☐ Proposal attached (renamed professionally)<br/>
                    ☐ Bullet points for clarity<br/>
                    ☐ Specific deadline mentioned<br/>
                    ☐ Professional signature
                </div>
                
                <b>Exercise 3: Internal Team Announcement</b><br/>
                <div class="practice-box">
                    <b>Scenario:</b> Announce new software tool to 50-person team<br/><br/>
                    
                    <b>Requirements:</b><br/>
                    1. Clear subject line<br/>
                    2. Announce new tool and benefits<br/>
                    3. Include implementation timeline<br/>
                    4. Link to training resources<br/>
                    5. Contact for questions<br/>
                    6. Use BCC for privacy<br/>
                    7. Professional but friendly tone<br/><br/>
                    
                    <b>Checklist:</b><br/>
                    ☐ Your email in "To:" field<br/>
                    ☐ All team members in "BCC:"<br/>
                    ☐ No unnecessary recipients<br/>
                    ☐ Clear call to action<br/>
                    ☐ Links work correctly<br/>
                    ☐ Mobile-friendly formatting<br/>
                    ☐ Sent during business hours
                </div>
                
                <hr/>
                
                <h3>Advanced Email Features</h3>
                
                <div class="section-box">
                    <b>Productivity Features:</b><br/><br/>
                    
                    <b>Scheduling/Snooze:</b><br/>
                    • Send later (write now, send during business hours)<br/>
                    • Snooze emails to reappear when needed<br/>
                    • Set reminders to follow up<br/><br/>
                    
                    <b>Templates/Canned Responses:</b><br/>
                    • Save common email responses<br/>
                    • Create templates for frequent emails<br/>
                    • Use variables for personalization<br/><br/>
                    
                    <b>Filters/Rules:</b><br/>
                    • Automatically sort incoming emails<br/>
                    • Label/color code important senders<br/>
                    • Auto-archive or delete spam<br/><br/>
                    
                    <b>Undo Send:</b><br/>
                    • Gmail: 30-second cancellation window<br/>
                    • Outlook: Recall message (if recipient uses Outlook)<br/>
                    • Always proofread before sending!
                </div>
                
                <div class="code-box">
                    <b>Setting Up Email Rules (Outlook Example):</b><br/><br/>
                    
                    <b>1. Create Rule for Client Emails:</b><br/>
                    • Home tab → Rules → Create Rule<br/>
                    • From specific people → Choose clients<br/>
                    • Move to folder: "Client Communications"<br/>
                    • Flag for follow-up in 2 days<br/>
                    • Play sound when received<br/><br/>
                    
                    <b>2. Newsletter Management:</b><br/>
                    • Right-click newsletter email<br/>
                    • Rules → Always move messages from...<br/>
                    • Select "Newsletters" folder<br/>
                    • Mark as read automatically<br/><br/>
                    
                    <b>3. Vacation Auto-Reply:</b><br/>
                    • File → Automatic Replies<br/>
                    • Set time period<br/>
                    • Write professional out-of-office message<br/>
                    • Include alternative contact<br/>
                    • Different messages for internal/external
                </div>
                
                <hr/>
                
                <h3>Assignment: Email Portfolio</h3>
                
                <div class="assignment-box">
                    <b>Objective:</b> Create a portfolio of professional emails for different scenarios<br/><br/>
                    
                    <b>Part 1: Create 5 Professional Emails</b><br/>
                    1. <b>Job Application Email</b><br/>
                    &nbsp;&nbsp;• Apply for your dream job<br/>
                    &nbsp;&nbsp;• Include resume and cover letter reference<br/>
                    &nbsp;&nbsp;• Professional signature<br/><br/>
                    
                    2. <b>Meeting Request Email</b><br/>
                    &nbsp;&nbsp;• Request meeting with busy executive<br/>
                    &nbsp;&nbsp;• Suggest specific times<br/>
                    &nbsp;&nbsp;• Include agenda<br/>
                    &nbsp;&nbsp;• Calendar link<br/><br/>
                    
                    3. <b>Problem Resolution Email</b><br/>
                    &nbsp;&nbsp;• Apologize for mistake<br/>
                    &nbsp;&nbsp;• Explain solution<br/>
                    &nbsp;&nbsp;• Provide compensation if appropriate<br/>
                    &nbsp;&nbsp;• Professional tone<br/><br/>
                    
                    4. <b>Team Announcement Email</b><br/>
                    &nbsp;&nbsp;• Announce policy change<br/>
                    &nbsp;&nbsp;• Use BCC appropriately<br/>
                    &nbsp;&nbsp;• Clear action items<br/>
                    &nbsp;&nbsp;• Professional formatting<br/><br/>
                    
                    5. <b>Networking Email</b><br/>
                    &nbsp;&nbsp;• Connect with industry professional<br/>
                    &nbsp;&nbsp;• Request informational interview<br/>
                    &nbsp;&nbsp;• Show knowledge of their work<br/>
                    &nbsp;&nbsp;• Professional but warm tone<br/><br/>
                    
                    <b>Part 2: Phishing Analysis</b><br/>
                    1. Find 3 real phishing email examples (screenshots)<br/>
                    2. Analyze each for red flags<br/>
                    3. Explain how you identified them as phishing<br/>
                    4. Show proper response to each<br/><br/>
                    
                    <b>Part 3: Email Setup</b><br/>
                    1. Create professional email signature<br/>
                    2. Set up 5 email rules/filters<br/>
                    3. Create 3 email templates<br/>
                    4. Configure out-of-office message
                </div>
                
                <div class="practice-box">
                    <b>Submission Requirements:</b><br/>
                    ☐ 5 complete professional emails<br/>
                    ☐ Phishing analysis with screenshots<br/>
                    ☐ Email signature screenshots<br/>
                    ☐ Rule/template configuration evidence<br/>
                    ☐ Reflection on learning (300 words)<br/>
                    ☐ Professional PDF document format<br/>
                    ☐ No personal information exposed
                </div>
                
                <hr/>
                
                <h3>Cultural Considerations in Email</h3>
                
                <div class="section-box">
                    <b>International Email Etiquette:</b><br/><br/>
                    
                    <b>Formality Levels:</b><br/>
                    • <b>USA/Canada/Australia:</b> Generally casual, first names common<br/>
                    • <b>UK:</b> More formal, titles important initially<br/>
                    • <b>Germany/Japan:</b> Very formal, titles and last names<br/>
                    • <b>Middle East:</b> Respectful, use titles and honorifics<br/><br/>
                    
                    <b>Time Zones:</b><br/>
                    • Always specify time zone (EST, GMT, CET)<br/>
                    • Use 24-hour format internationally (14:00 not 2:00 PM)<br/>
                • Consider recipient's working hours<br/>
                • Tools: WorldTimeBuddy.com, EveryTimeZone.com<br/><br/>
                
                <b>Language Considerations:</b><br/>
                • Avoid idioms and slang ("ballpark figure," "circle back")<br/>
                • Use clear, simple language<br/>
                • Be patient with non-native speakers<br/>
                • Consider translation if critical
            </div>
            
            <hr/>
            
            <div class="resource-box">
                <h3>Additional Resources</h3>
                
                <b>Email Tools:</b><br/>
                • <a href="https://www.grammarly.com/" target="_blank">Grammarly (Grammar checker)</a><br/>
                • <a href="https://www.boomeranggmail.com/" target="_blank">Boomerang (Email scheduling)</a><br/>
                • <a href="https://www.mailtrack.io/" target="_blank">Mailtrack (Email tracking)</a><br/>
                • <a href="https://www.hubspot.com/email-signature-generator" target="_blank">HubSpot Signature Generator</a><br/><br/>
                
                <b>Learning Resources:</b><br/>
                • <a href="https://www.coursera.org/learn/wharton-email" target="_blank">Wharton Business Email Writing (Coursera)</a><br/>
                • <a href="https://www.linkedin.com/learning/email-essential-training" target="_blank">LinkedIn Learning: Email Essentials</a><br/>
                • <a href="https://www.microsoft.com/en-us/microsoft-365/blog/email-etiquette/" target="_blank">Microsoft Email Etiquette Guide</a><br/><br/>
                
                <b>Security Resources:</b><br/>
                • <a href="https://www.phishing.org/" target="_blank">Phishing.org (Education)</a><br/>
                • <a href="https://www.consumer.ftc.gov/articles/how-recognize-and-avoid-phishing-scams" target="_blank">FTC Phishing Guide</a><br/>
                • <a href="https://www.phishtank.com/" target="_blank">PhishTank (Phishing database)</a>
            </div>
            
            <hr/>
            
            <div class="preview-box">
                <h3>Week 8 Preview: Logic, Security & Maintenance</h3>
                
                <b>Next Week's Topics:</b><br/>
                • <b>Day 1:</b> Software Development & Logic (Flowcharts, If/Then)<br/>
                • <b>Day 2:</b> Security & Digital Citizenship (Passwords, 2FA, Privacy)<br/>
                • <b>Day 3:</b> Troubleshooting & Maintenance (Task Manager, Updates)<br/>
                • <b>Day 4:</b> Final Exam & Portfolio Presentation<br/><br/>
                
                <b>Preparation for Week 8:</b><br/>
                • Review all modules from previous weeks<br/>
                • Prepare your "Technology Report" from Week 4<br/>
                • Think about computer problems you've encountered<br/>
                • Note any security concerns you have<br/>
                • Bring questions about career next steps
            </div>
            
            <div class="completion-box">
                <h3>✅ Week 7 Complete! Congratulations! 🎉</h3>
                
                <p><b>Week 7 Key Achievements:</b></p>
                <ul>
                    <li>Created professional PowerPoint presentations with animations</li>
                    <li>Understood how the internet and web technologies work</li>
                    <li>Mastered professional email communication and etiquette</li>
                    <li>Learned to identify and avoid phishing attacks</li>
                    <li>Developed skills for effective digital communication</li>
                </ul>
                
                <p><b>You Now Know How To:</b></p>
                <div style="background-color: #f0fff0; padding: 15px; margin: 15px 0; border-radius: 5px;">
                    ✓ Create engaging presentations that tell a story<br/>
                    ✓ Use animations and transitions effectively<br/>
                    ✓ Add multimedia elements professionally<br/>
                    ✓ Explain how internet connectivity works<br/>
                    ✓ Write professional emails for any situation<br/>
                    ✓ Protect yourself from email scams<br/>
                    ✓ Organize your digital communication<br/>
                    ✓ Represent yourself professionally online
                </div>
                
                <p><b>Final Week Challenge:</b> Send a professional thank-you email to someone who has helped you in this course, using all the skills learned today.</p>
                
                <p><b>Quote of the Week:</b> "Email has an ability many channels don't: creating valuable, personal touches - at scale." - David Newman</p>
                
                <p><b>See you in Week 8 for our final module! 🚀</b></p>
            </div>`
            },

            "8-1": {
                icon: "fas fa-project-diagram",
                title: "Software Development & Logic",
                html: `<h1>Week 8, Day 1: Software Development & Logic</h1>
    <p>Today we'll learn how to think like a programmer by understanding logic flow, problem-solving techniques, and the software development process.</p>
    
    <div class="analogy-box">
        <b>Analogy: Building a Recipe vs Following a Recipe 🍳</b><br/>
        
        Algorithm: A recipe for solving a problem<br/>
        Flowchart: A map of your recipe's steps<br/>
        If/Then Logic: Decision points in your recipe ("If oven hot, then bake")<br/>
        Variables: Ingredients you can change<br/>
        Loops: Repeating steps ("Stir every 5 minutes")<br/>
        Functions: Sub-recipes within your main recipe<br/>
        Debugging: Tasting and adjusting your dish<br/>
        Pseudo-code: Writing the recipe in plain English first
    </div>

    <h3>Key Topics</h3>
    <ul>
        <li>Understanding Algorithms and Problem-Solving</li>
        <li>Creating Flowcharts and Decision Trees</li>
        <li>If/Then Logic and Conditional Statements</li>
        <li>The Software Development Life Cycle (SDLC)</li>
        <li>Pseudo-code and Planning Before Coding</li>
        <li>Debugging Strategies and Error Handling</li>
        <li>Introduction to Programming Concepts</li>
    </ul>

    <h3>In-Depth Explanation</h3>
    
    <b>a. Algorithms: Step-by-Step Problem Solving</b><br/>
    
    <div class="section-box">
        <b>What is an Algorithm?</b><br/>
        An algorithm is a precise, step-by-step set of instructions to solve a problem or complete a task.
        
        <div style="background-color: #e8f4f8; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Everyday Algorithm Example: Making Coffee</b><br/>
            1. Get coffee cup<br/>
            2. Add coffee grounds to filter<br/>
            3. Add water to coffee maker<br/>
            4. Turn on coffee maker<br/>
            5. Wait for brewing to complete<br/>
            6. Pour coffee into cup<br/>
            7. Add cream/sugar if desired<br/>
            8. Drink coffee
        </div>
    </div>
    
    <div class="code-box">
        <b>Characteristics of Good Algorithms:</b><br/><br/>
        
        <b>1. Clear and Unambiguous:</b><br/>
        • Each step precisely defined<br/>
        • No room for interpretation<br/>
        • Example: "Add 2 tablespoons of sugar" not "Add some sugar"<br/><br/>
        
        <b>2. Finite:</b><br/>
        • Must eventually end<br/>
        • No infinite loops in practical algorithms<br/>
        • Example: "Repeat 10 times" not "Repeat forever"<br/><br/>
        
        <b>3. Effective:</b><br/>
        • Solves the intended problem<br/>
        • Produces correct output<br/>
        • Example: Coffee algorithm actually makes drinkable coffee<br/><br/>
        
        <b>4. General:</b><br/>
        • Works for different inputs<br/>
        • Example: Coffee algorithm works for any cup size<br/><br/>
        
        <b>5. Language Independent:</b><br/>
        • Can be implemented in any programming language<br/>
        • Focuses on logic, not syntax
    </div>
    
    <div class="practice-box">
        <b>Exercise: Creating Simple Algorithms</b><br/><br/>
        
        <b>Task 1: Morning Routine Algorithm</b><br/>
        Create step-by-step instructions for your morning routine<br/><br/>
        
        <b>Task 2: Finding Maximum Number Algorithm</b><br/>
        Write instructions to find the largest number in a list<br/><br/>
        
        <b>Task 3: Sorting Algorithm (Bubble Sort Concept)</b><br/>
        Write instructions to sort playing cards in your hand<br/><br/>
        
        <b>Example Solution (Finding Maximum):</b><br/>
        1. Look at first number, call it "maximum"<br/>
        2. Look at next number<br/>
        3. If next number > maximum, set maximum = next number<br/>
        4. Repeat steps 2-3 for all numbers<br/>
        5. Return maximum
    </div>
    
    <hr/>
    
    <b>b. Flowcharts: Visualizing Logic</b><br/>
    
    <div class="section-box">
        <b>Flowchart Symbols and Meanings:</b><br/>
        
        <table class="info-table">
            <tr><th>Symbol</th><th>Name</th><th>Purpose</th><th>Example</th></tr>
            <tr>
                <td style="text-align: center;">○ → ○</td>
                <td><b>Start/End</b></td>
                <td>Beginning or end of process</td>
                <td>"Start Program", "End"</td>
            </tr>
            <tr>
                <td style="text-align: center;">▭</td>
                <td><b>Process</b></td>
                <td>Action or operation</td>
                <td>"Calculate total", "Print result"</td>
            </tr>
            <tr>
                <td style="text-align: center;">◇</td>
                <td><b>Decision</b></td>
                <td>Yes/No question or choice</td>
                <td>"Is number > 10?"</td>
            </tr>
            <tr>
                <td style="text-align: center;">▱</td>
                <td><b>Input/Output</b></td>
                <td>Get data or display results</td>
                <td>"Enter password", "Display error"</td>
            </tr>
            <tr>
                <td style="text-align: center;">⬭</td>
                <td><b>Connector</b></td>
                <td>Connect to another part</td>
                <td>Page connector "A"</td>
            </tr>
            <tr>
                <td style="text-align: center;">⤑</td>
                <td><b>Flow Line</b></td>
                <td>Direction of flow</td>
                <td>Arrow showing next step</td>
            </tr>
        </table>
    </div>
    
    <div class="code-box">
        <b>Creating Flowcharts in Different Tools:</b><br/><br/>
        
        <b>Microsoft Word/PPT:</b><br/>
        1. Insert → Shapes → Flowchart shapes<br/>
        2. Drag and drop shapes<br/>
        3. Connect with arrows<br/>
        4. Add text to shapes<br/>
        5. Format for clarity<br/><br/>
        
        <b>Online Tools:</b><br/>
        • <a href="https://www.draw.io" target="_blank">Draw.io (free)</a><br/>
        • <a href="https://www.lucidchart.com" target="_blank">Lucidchart (free tier)</a><br/>
        • <a href="https://creately.com" target="_blank">Creately</a><br/>
        • Microsoft Visio (professional)<br/><br/>
        
        <b>Best Practices:</b><br/>
        • Flow top to bottom or left to right<br/>
        • Use consistent spacing<br/>
        • Label all decision paths (Yes/No)<br/>
        • Keep it simple - one page if possible<br/>
        • Use colors purposefully (red for errors, green for success)
    </div>
    
    <div class="practice-box">
        <b>Exercise: Create Flowcharts</b><br/><br/>
        
        <b>Flowchart 1: Login System</b><br/>
        Create flowchart for:<br/>
        1. User enters username/password<br/>
        2. System checks if valid<br/>
        3. If valid: Grant access<br/>
        4. If invalid: Show error<br/>
        5. After 3 failures: Lock account<br/><br/>
        
        <b>Flowchart 2: Temperature Checker</b><br/>
        Create flowchart for:<br/>
        1. Input temperature<br/>
        2. If > 100: "Hot"<br/>
        3. If 70-100: "Warm"<br/>
        4. If 32-70: "Cool"<br/>
        5. If < 32: "Cold"<br/><br/>
        
        <b>Flowchart 3: E-commerce Purchase</b><br/>
        Create flowchart for:<br/>
        1. Add item to cart<br/>
        2. Check inventory<br/>
        3. Calculate total<br/>
        4. Process payment<br/>
        5. Update inventory<br/>
        6. Send confirmation
    </div>
    
    <hr/>
    
    <b>c. If/Then Logic and Conditional Statements</b><br/>
    
    <div class="section-box">
        <b>Types of Conditional Logic:</b><br/>
        
        <table class="info-table">
            <tr><th>Type</th><th>Structure</th><th>Example</th><th>When to Use</th></tr>
            <tr>
                <td><b>Simple If</b></td>
                <td>If condition Then action</td>
                <td>If raining Then take umbrella</td>
                <td>Single condition, single action</td>
            </tr>
            <tr>
                <td><b>If-Else</b></td>
                <td>If condition Then action1 Else action2</td>
                <td>If hungry Then eat Else wait</td>
                <td>Either/or decisions</td>
            </tr>
            <tr>
                <td><b>If-Else If-Else</b></td>
                <td>Multiple conditions</td>
                <td>If score > 90 Then A, Else If > 80 Then B...</td>
                <td>Multiple possible outcomes</td>
            </tr>
            <tr>
                <td><b>Nested If</b></td>
                <td>If inside If</td>
                <td>If logged in Then If admin Then show admin tools</td>
                <td>Complex, hierarchical decisions</td>
            </tr>
            <tr>
                <td><b>Switch/Case</b></td>
                <td>Multiple exact matches</td>
                <td>Switch(day) Case Monday: meeting...</td>
                <td>Many exact value comparisons</td>
            </tr>
        </table>
    </div>
    
    <div class="code-box">
        <b>Real-World Programming Examples:</b><br/><br/>
        
        <b>JavaScript:</b><br/>
        if (temperature > 30) {<br/>
        &nbsp;&nbsp;console.log("It's hot outside!");<br/>
        } else if (temperature > 20) {<br/>
        &nbsp;&nbsp;console.log("Nice weather");<br/>
        } else {<br/>
        &nbsp;&nbsp;console.log("It's cold");<br/>
        }<br/><br/>
        
        <b>Python:</b><br/>
        age = 18<br/>
        if age >= 21:<br/>
        &nbsp;&nbsp;print("You can drink")<br/>
        elif age >= 18:<br/>
        &nbsp;&nbsp;print("You can vote")<br/>
        else:<br/>
        &nbsp;&nbsp;print("You're a minor")<br/><br/>
        
        <b>Excel Formula:</b><br/>
        =IF(A1>100, "High", IF(A1>50, "Medium", "Low"))<br/><br/>
        
        <b>Logical Operators:</b><br/>
        • AND: Both conditions must be true<br/>
        • OR: At least one condition true<br/>
        • NOT: Reverse the condition<br/>
        Example: IF (age >= 18 AND hasID) THEN "Allow entry"
    </div>
    
    <div class="practice-box">
        <b>Exercise: Writing Conditional Logic</b><br/><br/>
        
        <b>Task 1: Age Verification System</b><br/>
        Write logic for:<br/>
        • Under 13: "Child"<br/>
        • 13-17: "Teen"<br/>
        • 18-64: "Adult"<br/>
        • 65+: "Senior"<br/><br/>
        
        <b>Task 2: Discount Calculator</b><br/>
        Write logic for:<br/>
        • If purchase > $100: 20% discount<br/>
        • Else if purchase > $50: 10% discount<br/>
        • Else: No discount<br/>
        • If member: Extra 5% discount<br/><br/>
        
        <b>Task 3: Password Strength Checker</b><br/>
        Write logic for:<br/>
        • Length >= 8 characters<br/>
        • Contains uppercase letter<br/>
        • Contains number<br/>
        • Contains special character<br/>
        • Rate: Weak, Medium, Strong
    </div>
    
    <hr/>
    
    <b>d. Software Development Life Cycle (SDLC)</b><br/>
    
    <div class="section-box">
        <b>The 7 Phases of SDLC:</b><br/>
        
        <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>1. Planning:</b> Define scope, resources, timeline<br/>
            <b>2. Analysis:</b> Gather requirements, understand needs<br/>
            <b>3. Design:</b> Create system architecture, UI/UX<br/>
            <b>4. Development:</b> Write code, build features<br/>
            <b>5. Testing:</b> Find and fix bugs, ensure quality<br/>
            <b>6. Deployment:</b> Release to users, go live<br/>
            <b>7. Maintenance:</b> Updates, improvements, support
        </div>
    </div>
    
    <div class="code-box">
        <b>SDLC Methodologies:</b><br/><br/>
        
        <b>Waterfall (Traditional):</b><br/>
        • Linear, sequential phases<br/>
        • Complete one phase before next<br/>
        • Good for fixed requirements<br/>
        • Less flexible for changes<br/><br/>
        
        <b>Agile (Modern):</b><br/>
        • Iterative, incremental<br/>
        • Work in short "sprints" (2-4 weeks)<br/>
        • Adapt to changing requirements<br/>
        • Frequent customer feedback<br/><br/>
        
        <b>Scrum (Type of Agile):</b><br/>
        • Roles: Product Owner, Scrum Master, Team<br/>
        • Artifacts: Product Backlog, Sprint Backlog<br/>
        • Ceremonies: Sprint Planning, Daily Standup, Review, Retrospective<br/><br/>
        
        <b>DevOps:</b><br/>
        • Combines Development + Operations<br/>
        • Emphasizes automation<br/>
        • Continuous Integration/Deployment<br/>
        • Faster releases, better quality
    </div>
    
    <div class="practice-box">
        <b>Exercise: Mini-SDLC Project</b><br/><br/>
        
        <b>Project:</b> Create a "To-Do List" mobile app<br/><br/>
        
        <b>Phase 1: Planning</b><br/>
        • Define target users<br/>
        • List key features (add, delete, mark complete)<br/>
        • Set timeline (1 week)<br/><br/>
        
        <b>Phase 2: Analysis</b><br/>
        • User interviews: What features needed?<br/>
        • Competitor analysis: What do other apps do?<br/>
        • Technical requirements<br/><br/>
        
        <b>Phase 3: Design</b><br/>
        • Sketch wireframes<br/>
        • Design database structure<br/>
        • Choose technology stack<br/><br/>
        
        <b>Phase 4-7:</b> Continue through full cycle
    </div>
    
    <hr/>
    
    <b>e. Pseudo-code and Planning</b><br/>
    
    <div class="section-box">
        <b>What is Pseudo-code?</b><br/>
        Pseudo-code is a simplified, human-readable version of code that describes what a program should do, without worrying about specific programming language syntax.
        
        <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>Example: Calculate Average Grade</b><br/>
            BEGIN<br/>
            &nbsp;&nbsp;SET total = 0<br/>
            &nbsp;&nbsp;SET count = 0<br/>
            &nbsp;&nbsp;<br/>
            &nbsp;&nbsp;FOR each grade in gradesList<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;total = total + grade<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;count = count + 1<br/>
            &nbsp;&nbsp;END FOR<br/>
            &nbsp;&nbsp;<br/>
            &nbsp;&nbsp;average = total / count<br/>
            &nbsp;&nbsp;DISPLAY average<br/>
            END
        </div>
    </div>
    
    <div class="code-box">
        <b>Pseudo-code Guidelines:</b><br/><br/>
        
        <b>Structure:</b><br/>
        • Use indentation for clarity<br/>
        • Group related statements<br/>
        • Use meaningful variable names<br/>
        • Comment complex logic<br/><br/>
        
        <b>Keywords:</b><br/>
        • BEGIN/START, END/STOP<br/>
        • SET/INITIALIZE (assign values)<br/>
        • IF, THEN, ELSE, END IF<br/>
        • FOR, WHILE, DO, END LOOP<br/>
        • INPUT, OUTPUT, DISPLAY, PRINT<br/>
        • CALL (function call)<br/>
        • RETURN (return value)<br/><br/>
        
        <b>Benefits:</b><br/>
        • Focus on logic, not syntax<br/>
        • Easy to review and discuss<br/>
        • Language independent<br/>
        • Helps catch logic errors early
    </div>
    
    <div class="practice-box">
        <b>Exercise: Writing Pseudo-code</b><br/><br/>
        
        <b>Task 1: Login System</b><br/>
        Write pseudo-code for user login:<br/>
        • Prompt for username/password<br/>
        • Check against database<br/>
        • If match: Grant access<br/>
        • Else: Show error, count attempts<br/>
        • Lock after 3 failures<br/><br/>
        
        <b>Task 2: Shopping Cart</b><br/>
        Write pseudo-code for:<br/>
        • Add item to cart<br/>
        • Calculate total with tax<br/>
        • Apply discount if applicable<br/>
        • Process payment<br/>
        • Update inventory<br/><br/>
        
        <b>Task 3: Temperature Converter</b><br/>
        Write pseudo-code for:<br/>
        • Input temperature and unit (C/F)<br/>
        • Convert to other unit<br/>
        • Display result<br/>
        • Ask if convert another
    </div>
    
    <hr/>
    
    <b>f. Debugging Strategies</b><br/>
    
    <div class="section-box">
        <b>The Debugging Process:</b><br/>
        
        <div style="background-color: #fff0f0; padding: 15px; margin: 10px 0; border-radius: 5px;">
            <b>1. Reproduce the Error:</b><br/>
            • Can you make it happen again?<br/>
            • What exact steps cause it?<br/>
            • Is it consistent or random?<br/><br/>
            
            <b>2. Understand the Error:</b><br/>
            • What error message appears?<br/>
            • When does it happen?<br/>
            • What should happen instead?<br/><br/>
            
            <b>3. Isolate the Problem:</b><br/>
            • Simplify the code<br/>
            • Remove unrelated parts<br/>
            • Test small pieces<br/><br/>
            
            <b>4. Fix the Error:</b><br/>
            • Make one change at a time<br/>
            • Test after each change<br/>
            • Document what you fixed<br/><br/>
            
            <b>5. Test the Fix:</b><br/>
            • Does it solve the problem?<br/>
            • Does it break anything else?<br/>
            • Test edge cases
        </div>
    </div>
    
    <div class="code-box">
        <b>Common Debugging Techniques:</b><br/><br/>
        
        <b>Print Debugging:</b><br/>
        Print variable values at different points<br/>
        Example: console.log("Value of x:", x);<br/><br/>
        
        <b>Rubber Duck Debugging:</b><br/>
        Explain code line-by-line to a rubber duck (or person)<br/>
        Often reveals the problem as you explain<br/><br/>
        
        <b>Breakpoints:</b><br/>
        Pause execution at specific points<br/>
        Step through code line by line<br/>
        Inspect variables at each step<br/><br/>
        
        <b>Divide and Conquer:</b><br/>
        Comment out half the code<br/>
        See if error persists<br/>
        Repeat until you find problematic section<br/><br/>
        
        <b>Check Common Issues:</b><br/>
        • Off-by-one errors (arrays starting at 0)<br/>
        • Case sensitivity issues<br/>
        • Missing parentheses/brackets<br/>
        • Variable name typos<br/>
        • Infinite loops
    </div>
    
    <div class="practice-box">
        <b>Exercise: Debugging Practice</b><br/><br/>
        
        <b>Buggy Code 1:</b><br/>
        Calculate average of numbers [10, 20, 30, 40]<br/>
        total = 0<br/>
        for i = 1 to 4<br/>
        &nbsp;&nbsp;total = total + numbers[i]<br/>
        end for<br/>
        average = total / 4<br/>
        <b>Bug:</b> Array indices start at 0, not 1<br/><br/>
        
        <b>Buggy Code 2:</b><br/>
        Check if number is even<br/>
        if number / 2 = 0 then print "Even"<br/>
        <b>Bug:</b> Should use modulus (number % 2 == 0)<br/><br/>
        
        <b>Buggy Code 3:</b><br/>
        Convert Celsius to Fahrenheit<br/>
        fahrenheit = celsius * 9/5 + 32<br/>
        print "Temperature is " fahrenheit<br/>
        <b>Bug:</b> Missing concatenation/string formatting
    </div>
    
    <hr/>
    
    <h3>Assignment: Complete Software Design Project</h3>
    
    <div class="assignment-box">
        <b>Objective:</b> Design a complete software system using all concepts learned today<br/><br/>
        
        <b>Project Choice:</b> Select ONE of these systems to design:<br/>
        1. <b>Library Management System</b><br/>
        2. <b>Student Grade Tracker</b><br/>
        3. <b>Online Food Ordering System</b><br/>
        4. <b>Personal Finance Manager</b><br/>
        5. <b>Fitness Tracking App</b><br/><br/>
        
        <b>Requirements:</b><br/>
        
        <b>Part 1: Planning Document</b><br/>
        • Project overview and goals<br/>
        • Target audience/user personas<br/>
        • Key features list (minimum 5 features)<br/>
        • Technology stack recommendation<br/>
        • Timeline estimate<br/><br/>
        
        <b>Part 2: Algorithms</b><br/>
        • Write 3 key algorithms in plain English<br/>
        • Example: "Algorithm for calculating overdue fines"<br/>
        • Include inputs, processing steps, outputs<br/><br/>
        
        <b>Part 3: Flowcharts</b><br/>
        • Create 2 detailed flowcharts<br/>
        • Example: "User registration process"<br/>
        • Use proper symbols and formatting<br/>
        • Include decision points and outcomes<br/><br/>
        
        <b>Part 4: Pseudo-code</b><br/>
        • Write pseudo-code for 2 complex functions<br/>
        • Example: "Function to recommend books based on history"<br/>
        • Use proper pseudo-code structure<br/>
        • Include comments for clarity<br/><br/>
        
        <b>Part 5: If/Then Logic</b><br/>
        • Document 5 conditional logic rules<br/>
        • Example: "If user has 3 overdue books, then block new checkouts"<br/>
        • Include AND/OR logic where appropriate<br/><br/>
        
        <b>Part 6: Debugging Scenario</b><br/>
        • Describe a potential bug in your system<br/>
        • Explain how you would debug it<br/>
        • List steps to reproduce and fix
    </div>
    
    <div class="practice-box">
        <b>Submission Checklist:</b><br/>
        ☐ Complete planning document<br/>
        ☐ 3 clear algorithms<br/>
        ☐ 2 professional flowcharts<br/>
        ☐ 2 pseudo-code examples<br/>
        ☐ 5 conditional logic rules<br/>
        ☐ Debugging scenario<br/>
        ☐ Professional formatting<br/>
        ☐ All files in one folder/ZIP<br/>
        ☐ Readme file explaining project
    </div>
    
    <hr/>
    
    <h3>Real-World Applications</h3>
    
    <div class="section-box">
        <b>Careers Using Logic and Problem-Solving:</b><br/><br/>
        
        <b>Software Developer:</b><br/>
        • Design, code, test software<br/>
        • Solve complex problems daily<br/>
        • Average salary: $85,000-$130,000<br/><br/>
        
        <b>Systems Analyst:</b><br/>
        • Analyze business needs<br/>
        • Design IT solutions<br/>
        • Create requirements documents<br/>
        • Average salary: $70,000-$100,000<br/><br/>
        
        <b>Quality Assurance Tester:</b><br/>
        • Test software for bugs<br/>
        • Create test cases<br/>
        • Report and track issues<br/>
        • Average salary: $60,000-$90,000<br/><br/>
        
        <b>Business Analyst:</b><br/>
        • Bridge between business and IT<br/>
        • Document processes<br/>
        • Identify improvements<br/>
        • Average salary: $65,000-$95,000
    </div>
    
    <hr/>
    
    <div class="resource-box">
        <h3>Additional Resources</h3>
        
        <b>Learning Platforms:</b><br/>
        • <a href="https://www.codecademy.com/learn" target="_blank">Codecademy (Free coding lessons)</a><br/>
        • <a href="https://www.freecodecamp.org/" target="_blank">freeCodeCamp (Free coding curriculum)</a><br/>
        • <a href="https://www.khanacademy.org/computing/computer-programming" target="_blank">Khan Academy Programming</a><br/>
        • <a href="https://www.coursera.org/courses?query=programming" target="_blank">Coursera Programming Courses</a><br/><br/>
        
        <b>Tools:</b><br/>
        • <a href="https://replit.com/" target="_blank">Replit (Online coding environment)</a><br/>
        • <a href="https://www.draw.io" target="_blank">Draw.io (Flowchart tool)</a><br/>
        • <a href="https://pseudoeditor.com/" target="_blank">PseudoEditor (Online pseudo-code)</a><br/>
        • <a href="https://www.visual-paradigm.com/" target="_blank">Visual Paradigm (UML diagrams)</a><br/><br/>
        
        <b>Books:</b><br/>
        • "Clean Code" by Robert C. Martin<br/>
        • "The Pragmatic Programmer" by Andrew Hunt<br/>
        • "Algorithms" by Robert Sedgewick<br/>
        • "Introduction to Algorithms" by CLRS
    </div>
    
    <hr/>
    
    <div class="preview-box">
        <h3>Preview: Day 2 - Security & Digital Citizenship</h3>
        
        <b>Tomorrow you'll learn:</b><br/>
        • Creating and managing strong passwords<br/>
        • Two-factor authentication (2FA)<br/>
        • Identifying and avoiding phishing attacks<br/>
        • Protecting personal data online<br/>
        • Safe browsing practices<br/>
        • Social media privacy settings<br/>
        • Digital footprint management<br/><br/>
        
        <b>Preparation:</b><br/>
        • Review your current passwords<br/>
        • Check which accounts have 2FA enabled<br/>
        • Review social media privacy settings<br/>
        • Think about what personal information you share online<br/>
        • Bring questions about online safety
    </div>
    
    <div class="completion-box">
        <h3>✅ Day 1 Complete!</h3>
        <p><b>Key Takeaways:</b></p>
        <ul>
            <li>Algorithms are step-by-step instructions to solve problems</li>
            <li>Flowcharts visually represent logic and decision points</li>
            <li>If/Then logic enables conditional decision-making in programs</li>
            <li>Pseudo-code helps plan programs before writing actual code</li>
            <li>Debugging systematically finds and fixes errors</li>
            <li>The SDLC provides structure for software development projects</li>
        </ul>
        
        <p><b>Practice Challenge:</b> Create a flowchart for your morning routine and convert it to pseudo-code.</p>
        
        <p><b>Quote:</b> "First, solve the problem. Then, write the code." - John Johnson</p>
    </div>`
            },
            "8-2": {
                icon: "fas fa-shield-alt",
                title: "Security & Digital Citizenship",
                html: `<h1>Week 8, Day 2: Security & Digital Citizenship</h1>
                <p>Today we'll learn how to protect ourselves and act responsibly in the digital world - essential skills for everyone in the 21st century.</p>
                
                <div class="analogy-box">
                    <b>Analogy: Your Digital Home & Neighborhood 🏡🔒</b><br/>
                    
                    Passwords: The keys to your digital house<br/>
                    2FA: A security guard who checks your ID after you use your key<br/>
                    Encryption: Writing letters in secret code that only you and recipient understand<br/>
                    Firewall: A fence around your digital property<br/>
                    Antivirus: A guard dog that sniffs out and chases away intruders<br/>
                    VPN: A private tunnel between your house and destination<br/>
                    Digital Footprint: The trail of footprints you leave as you walk through the digital world<br/>
                    Phishing: A con artist pretending to be your bank to steal your keys
                </div>

                <h3>Key Topics</h3>
                <ul>
                    <li>Creating and Managing Strong Passwords</li>
                    <li>Two-Factor Authentication (2FA/MFA)</li>
                    <li>Identifying and Avoiding Phishing Attacks</li>
                    <li>Personal Data Protection and Privacy</li>
                    <li>Safe Browsing and Download Practices</li>
                    <li>Social Media Security and Privacy Settings</li>
                    <li>Digital Footprint Management</li>
                    <li>Legal and Ethical Online Behavior</li>
                </ul>

                <h3>In-Depth Explanation</h3>
                
                <b>a. Password Security: Your First Line of Defense</b><br/>
                
                <div class="section-box">
                    <b>Characteristics of Strong Passwords:</b><br/>
                    
                    <div style="background-color: #ffe6e6; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>❌ Weak Password Examples:</b><br/>
                        • password123<br/>
                        • 12345678<br/>
                        • qwerty<br/>
                        • letmein<br/>
                        • Your name/birthdate<br/>
                        • Same password everywhere<br/>
                        • Dictionary words alone
                    </div>
                    
                    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>✅ Strong Password Requirements:</b><br/>
                        • <b>Length:</b> Minimum 12 characters (16+ for important accounts)<br/>
                        • <b>Complexity:</b> Mix of uppercase, lowercase, numbers, symbols<br/>
                        • <b>Unpredictability:</b> Not based on personal information<br/>
                        • <b>Uniqueness:</b> Different for each account<br/>
                        • <b>Memorability:</b> Can remember without writing down<br/>
                        • <b>Regular Updates:</b> Change every 90 days for critical accounts
                    </div>
                </div>
                
                <div class="code-box">
                    <b>Creating Memorable Strong Passwords:</b><br/><br/>
                    
                    <b>Method 1: Passphrase Technique</b><br/>
                    Take a sentence you can remember:<br/>
                    "My cat Charlie eats 3 treats every Monday at 9!"<br/>
                    Convert to: MyCatCharlieEats3TreatsEveryMondayAt9!<br/>
                    • Length: 36 characters<br/>
                    • Contains all character types<br/>
                    • Easy to remember<br/>
                    • Hard to crack<br/><br/>
                    
                    <b>Method 2: Acronym Technique</b><br/>
                    Take a memorable phrase:<br/>
                    "To be or not to be, that is the question - Shakespeare"<br/>
                    Convert to: 2BorNot2B,TITQ-S<br/>
                    • Length: 17 characters<br/>
                    • Mix of letters, numbers, symbols<br/>
                    • Personal meaning helps memory<br/><br/>
                    
                    <b>Method 3: Pattern Technique</b><br/>
                    Create a pattern on keyboard and modify:<br/>
                    Base: 1qaz2wsx3edc (keyboard diagonal)<br/>
                    Modified: 1Qaz@wsx#edc$RFV<br/>
                    • Easy to type quickly<br/>
                    • Appears random<br/>
                    • Can be customized per site
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Password Strength Analysis</b><br/><br/>
                    
                    <b>Test these passwords at howsecureismypassword.net:</b><br/>
                    1. "iloveyou"<br/>
                    2. "P@ssw0rd123"<br/>
                    3. "CorrectHorseBatteryStaple"<br/>
                    4. "W8&pL$qK2#rJ9*mN"<br/>
                    5. "MyDogRexHas2BlueBalls!"<br/><br/>
                    
                    <b>Create 3 strong passwords using different methods:</b><br/>
                    1. Passphrase method for email<br/>
                    2. Acronym method for banking<br/>
                    3. Pattern method for social media<br/><br/>
                    
                    <b>Checklist for your passwords:</b><br/>
                    ☐ At least 12 characters<br/>
                    ☐ Mix of character types<br/>
                    ☐ No personal information<br/>
                    ☐ Different from other passwords<br/>
                    ☐ Memorable without writing down
                </div>
                
                <hr/>
                
                <b>b. Password Managers: The Secure Solution</b><br/>
                
                <div class="section-box">
                    <b>Why Use a Password Manager?</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Problem</th><th>Traditional Solution</th><th>Password Manager Solution</th></tr>
                        <tr>
                            <td>Too many passwords to remember</td>
                            <td>Use same password everywhere (insecure)</td>
                            <td>Remember one master password, manager remembers the rest</td>
                        </tr>
                        <tr>
                            <td>Strong passwords hard to remember</td>
                            <td>Write them down (insecure)</td>
                            <td>Generate and store complex passwords</td>
                        </tr>
                        <tr>
                            <td>Password reuse risks</td>
                            <td>Compromise one account = compromise all</td>
                            <td>Unique passwords for every account</td>
                        </tr>
                        <tr>
                            <td>Time-consuming to create/manage</td>
                            <td>Spend hours resetting passwords</td>
                            <td>Auto-generate and auto-fill passwords</td>
                        </tr>
                        <tr>
                            <td>Sharing passwords securely</td>
                            <td>Text/email (insecure)</td>
                            <td>Encrypted sharing within manager</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Popular Password Managers Comparison:</b><br/><br/>
                    
                    <b>1. LastPass (Freemium):</b><br/>
                    • Free: Unlimited passwords on one device type<br/>
                    • Premium: $3/month, multi-device sync, emergency access<br/>
                    • Features: Auto-fill, password generator, secure notes<br/>
                    • Security: Zero-knowledge encryption<br/><br/>
                    
                    <b>2. 1Password (Paid):</b><br/>
                    • $2.99/month for individuals<br/>
                    • Best for families ($4.99 for 5 users)<br/>
                    • Features: Travel mode, watchtower alerts<br/>
                    • Security: Secret key + password<br/><br/>
                    
                    <b>3. Bitwarden (Open Source/Freemium):</b><br/>
                    • Free: Unlimited devices, unlimited passwords<br/>
                    • Premium: $10/year, advanced 2FA, reports<br/>
                    • Self-host option available<br/>
                    • Security: Open source, audited<br/><br/>
                    
                    <b>4. KeePass (Free/Open Source):</b><br/>
                    • Completely free, no subscriptions<br/>
                    • Local storage (you control data)<br/>
                    • Plugins for additional features<br/>
                    • Technical knowledge helpful<br/><br/>
                    
                    <b>Built-in Browsers:</b><br/>
                    • Chrome/Edge password manager (basic)<br/>
                    • Apple Keychain (iOS/Mac users)<br/>
                    • Good for beginners, less features
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Setting Up a Password Manager</b><br/><br/>
                    
                    <b>Step 1: Choose and Install</b><br/>
                    • Select a password manager (Bitwarden recommended for free)<br/>
                    • Download and install browser extension<br/>
                    • Install mobile app<br/><br/>
                    
                    <b>Step 2: Create Master Password</b><br/>
                    • Use passphrase method<br/>
                    • Example: "CorrectHorseBatteryStaple" with modifications<br/>
                    • Write down and store securely (not digitally!)<br/>
                    • Never forget this password!<br/><br/>
                    
                    <b>Step 3: Import/Add Passwords</b><br/>
                    • Export from browser if possible<br/>
                    • Add 5 important accounts manually<br/>
                    • Generate new strong passwords for each<br/>
                    • Update accounts with new passwords<br/><br/>
                    
                    <b>Step 4: Enable 2FA</b><br/>
                    • Enable two-factor on password manager<br/>
                    • Use authenticator app (not SMS)<br/>
                    • Save recovery codes securely
                </div>
                
                <hr/>
                
                <b>c. Two-Factor Authentication (2FA/MFA)</b><br/>
                
                <div class="section-box">
                    <b>Types of Authentication Factors:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Factor Type</th><th>What You Know</th><th>What You Have</th><th>What You Are</th></tr>
                        <tr>
                            <td><b>Examples</b></td>
                            <td>Password, PIN, security questions</td>
                            <td>Phone, security key, bank card</td>
                            <td>Fingerprint, face scan, voice</td>
                        </tr>
                        <tr>
                            <td><b>Strength</b></td>
                            <td>Can be stolen/guessed</td>
                            <td>Can be lost/stolen</td>
                            <td>Difficult to replicate</td>
                        </tr>
                        <tr>
                            <td><b>Convenience</b></td>
                            <td>Easy to use</td>
                            <td>Requires device</td>
                            <td>Very convenient</td>
                        </tr>
                        <tr>
                            <td><b>Security Level</b></td>
                            <td>Low (single factor)</td>
                            <td>Medium (with password)</td>
                            <td>High (biometric + password)</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>2FA Methods Comparison:</b><br/><br/>
                    
                    <b>SMS/Text Message (Weakest):</b><br/>
                    • Code sent to phone via text<br/>
                    • Pros: Easy, works on any phone<br/>
                    • Cons: SIM swapping attacks, phone loss<br/>
                    • Use only if no other option<br/><br/>
                    
                    <b>Authenticator Apps (Recommended):</b><br/>
                    • Google Authenticator, Microsoft Authenticator, Authy<br/>
                    • Generates time-based codes<br/>
                    • Pros: Works offline, more secure<br/>
                    • Cons: Need smartphone, setup required<br/>
                    • Best for most users<br/><br/>
                    
                    <b>Security Keys (Most Secure):</b><br/>
                    • Yubikey, Google Titan Key<br/>
                    • Physical USB/NFC devices<br/>
                    • Pros: Phishing-resistant, very secure<br/>
                    • Cons: Cost ($20-$50), can be lost<br/>
                    • Best for high-value accounts<br/><br/>
                    
                    <b>Biometric (Convenient):</b><br/>
                    • Fingerprint, face recognition<br/>
                    • Pros: Very convenient, hard to steal<br/>
                    • Cons: Privacy concerns, not all devices<br/>
                    • Good as second factor
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Setting Up 2FA on Critical Accounts</b><br/><br/>
                    
                    <b>Priority 1: Enable on these accounts TODAY</b><br/>
                    1. <b>Email (Gmail/Outlook):</b> Most important - controls password resets<br/>
                    2. <b>Password Manager:</b> Protect your passwords<br/>
                    3. <b>Banking/Financial:</b> Protect your money<br/>
                    4. <b>Social Media:</b> Protect your identity<br/>
                    5. <b>Cloud Storage:</b> Protect your files<br/><br/>
                    
                    <b>Steps for Google Authenticator:</b><br/>
                    1. Download Google Authenticator app<br/>
                    2. Go to account security settings<br/>
                    3. Select "Two-factor authentication"<br/>
                    4. Choose "Authenticator app"<br/>
                    5. Scan QR code with app<br/>
                    6. Enter code to verify<br/>
                    7. Save backup codes<br/><br/>
                    
                    <b>Backup Strategy:</b><br/>
                    • Print backup codes and store securely<br/>
                    • Use Authy for cloud backup (carefully)<br/>
                    • Consider multiple methods (app + SMS)
                </div>
                
                <hr/>
                
                <b>d. Phishing and Social Engineering</b><br/>
                
                <div class="section-box">
                    <b>Types of Phishing Attacks:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Type</th><th>Description</th><th>Target</th><th>Red Flags</th></tr>
                        <tr>
                            <td><b>Email Phishing</b></td>
                            <td>Mass emails pretending to be legitimate</td>
                            <td>General public</td>
                            <td>Generic greeting, urgent language, suspicious links</td>
                        </tr>
                        <tr>
                            <td><b>Spear Phishing</b></td>
                            <td>Personalized attacks on specific individuals</td>
                            <td>Employees, executives</td>
                            <td>Uses personal info, appears to be from colleague</td>
                        </tr>
                        <tr>
                            <td><b>Whaling</b></td>
                            <td>Targets high-level executives</td>
                            <td>CEOs, CFOs</td>
                            <td>Appears to be legal/financial matter</td>
                        </tr>
                        <tr>
                            <td><b>Smishing</b></td>
                            <td>Phishing via SMS/text messages</td>
                            <td>Mobile users</td>
                            <td>Text from unknown number, urgent requests</td>
                        </tr>
                        <tr>
                            <td><b>Vishing</b></td>
                            <td>Phishing via phone calls</td>
                            <td>All phone users</td>
                            <td>Caller ID spoofing, urgent requests for info</td>
                        </tr>
                        <tr>
                            <td><b>Clone Phishing</b></td>
                            <td>Copies legitimate email with malicious link</td>
                            <td>Previous email recipients</td>
                            <td>Similar to real email but link/attachment changed</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>How to Spot Phishing Attempts:</b><br/><br/>
                    
                    <b>1. Check the Sender:</b><br/>
                    • Hover over sender name to see actual email<br/>
                    • Look for misspellings (amaz0n.com, paypa1.com)<br/>
                    • Check if domain is legitimate (amazon.com vs amazon-support.xyz)<br/><br/>
                    
                    <b>2. Examine Links Carefully:</b><br/>
                    • Hover over links to see actual URL<br/>
                    • Look for HTTPS (not HTTP)<br/>
                    • Check for strange characters or misspellings<br/>
                    • Don't click - type URL manually if unsure<br/><br/>
                    
                    <b>3. Analyze the Content:</b><br/>
                    • Urgent language ("Act now or account closed!")<br/>
                    • Threats of negative consequences<br/>
                    • Requests for personal information<br/>
                    • Poor grammar and spelling<br/>
                    • Generic greetings ("Dear valued customer")<br/><br/>
                    
                    <b>4. Verify Unexpected Requests:</b><br/>
                    • Contact company directly using known contact methods<br/>
                    • Don't use contact info in suspicious email<br/>
                    • Check company's official website<br/>
                    • When in doubt, throw it out
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Phishing Identification Test</b><br/><br/>
                    
                    <b>Test these examples - Real or Phishing?</b><br/><br/>
                    
                    <b>Example 1:</b><br/>
                    From: "Apple Support" <support@apple-security.net><br/>
                    Subject: URGENT: Your Apple ID has been compromised<br/>
                    Body: Click here to secure your account: http://apple-id-verify.com<br/>
                    <b>Verdict:</b> Phishing - Suspicious domain, HTTP not HTTPS<br/><br/>
                    
                    <b>Example 2:</b><br/>
                    From: "Netflix" <info@mail.netflix.com><br/>
                    Subject: Update your payment method<br/>
                    Body: Your payment failed. Update here: https://netflix.com/account<br/>
                    <b>Verdict:</b> Possibly real - Check if payment actually failed<br/><br/>
                    
                    <b>Example 3:</b><br/>
                    From: "Your Boss" <bossname@gmail.com><br/>
                    Subject: Urgent - Need gift cards<br/>
                    Body: "Can you buy $500 in iTunes cards and email me the codes?"<br/>
                    <b>Verdict:</b> Phishing - Personal email, unusual request<br/><br/>
                    
                    <b>Practice Resources:</b><br/>
                    • Google's Phishing Quiz: https://phishingquiz.withgoogle.com/<br/>
                    • OpenDNS Phishing Test: https://www.opendns.com/phishing-quiz/<br/>
                    • Report phishing: reportphishing@apwg.org
                </div>
                
                <hr/>
                
                <b>e. Digital Footprint Management</b><br/>
                
                <div class="section-box">
                    <b>Types of Digital Footprints:</b><br/>
                    
                    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>Active Footprint (What You Create):</b><br/>
                        • Social media posts and comments<br/>
                        • Blog articles and forum posts<br/>
                        • Photos and videos you upload<br/>
                        • Emails and messages you send<br/>
                        • Online reviews and ratings<br/>
                        • Website registrations<br/><br/>
                        
                        <b>Passive Footprint (What's Collected):</b><br/>
                        • IP address and location data<br/>
                        • Browsing history and cookies<br/>
                        • Search history<br/>
                        • App usage data<br/>
                        • Purchase history<br/>
                        • Device information
                    </div>
                </div>
                
                <div class="code-box">
                    <b>Managing Your Digital Footprint:</b><br/><br/>
                    
                    <b>1. Google Yourself:</b><br/>
                    • Search your name in quotes: "Your Full Name"<br/>
                    • Search with location: "Your Name" City<br/>
                    • Search email addresses<br/>
                    • Search usernames<br/>
                    • Use different search engines (Google, Bing, DuckDuckGo)<br/><br/>
                    
                    <b>2. Clean Up Social Media:</b><br/>
                    • Review and delete old posts<br/>
                    • Adjust privacy settings<br/>
                    • Remove tagged photos if inappropriate<br/>
                    • Consider making accounts private<br/>
                    • Be mindful of future employers seeing content<br/><br/>
                    
                    <b>3. Opt-Out of Data Brokers:</b><br/>
                    • Remove yourself from people search sites<br/>
                    • Sites like Spokeo, Whitepages, Intelius<br/>
                    • Use their opt-out procedures<br/>
                    • Repeat every 6-12 months<br/><br/>
                    
                    <b>4. Privacy Settings Audit:</b><br/>
                    • Check privacy settings on all accounts<br/>
                    • Limit data sharing with third parties<br/>
                    • Disable location tracking when not needed<br/>
                    • Use privacy-focused alternatives<br/>
                    • Regular audits (quarterly)
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Digital Footprint Audit</b><br/><br/>
                    
                    <b>Part 1: Search Yourself</b><br/>
                    1. Google your full name<br/>
                    2. Search images of your name<br/>
                    3. Search your email address<br/>
                    4. Search your username(s)<br/>
                    5. Note any concerning results<br/><br/>
                    
                    <b>Part 2: Social Media Check</b><br/>
                    1. Review last 50 posts on each platform<br/>
                    2. Delete inappropriate content<br/>
                    3. Check privacy settings<br/>
                    4. Review tagged photos<br/>
                    5. Check what public can see<br/><br/>
                    
                    <b>Part 3: Account Cleanup</b><br/>
                    1. List all online accounts<br/>
                    2. Delete unused accounts<br/>
                    3. Update privacy settings on active accounts<br/>
                    4. Enable 2FA where available<br/>
                    5. Change weak passwords<br/><br/>
                    
                    <b>Part 4: Future Planning</b><br/>
                    1. Set Google Alerts for your name<br/>
                    2. Schedule quarterly privacy checks<br/>
                    3. Create professional social media presence<br/>
                    4. Plan content strategy
                </div>
                
                <hr/>
                
                <b>f. Safe Browsing and Download Practices</b><br/>
                
                <div class="section-box">
                    <b>Browser Security Features:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Feature</th><th>Purpose</th><th>How to Enable/Use</th></tr>
                        <tr>
                            <td><b>HTTPS Everywhere</b></td>
                            <td>Forces secure connections</td>
                            <td>Browser extension, built-in in modern browsers</td>
                        </tr>
                        <tr>
                            <td><b>Ad Blockers</b></td>
                            <td>Blocks malicious ads</td>
                            <td>uBlock Origin, AdBlock Plus</td>
                        </tr>
                        <tr>
                            <td><b>Script Blockers</b></td>
                            <td>Controls JavaScript execution</td>
                            <td>NoScript, uMatrix (advanced)</td>
                        </tr>
                        <tr>
                            <td><b>Privacy Badger</b></td>
                            <td>Blocks invisible trackers</td>
                            <td>EFF extension, learns as you browse</td>
                        </tr>
                        <tr>
                            <td><b>Cookie Controls</b></td>
                            <td>Manages website cookies</td>
                            <td>Browser settings, extensions</td>
                        </tr>
                        <tr>
                            <td><b>Incognito/Private</b></td>
                            <td>No history/cookies saved</td>
                            <td>Ctrl+Shift+N (Chrome), Ctrl+Shift+P (Firefox)</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Safe Download Practices:</b><br/><br/>
                    
                    <b>Before Downloading:</b><br/>
                    1. <b>Verify Source:</b> Official website only<br/>
                    2. <b>Check URL:</b> HTTPS, correct domain<br/>
                    3. <b>Read Reviews:</b> Check other users' experiences<br/>
                    4. <b>Check File Size:</b> Matches expected size<br/>
                    5. <b>File Extension:</b> Be wary of .exe, .scr, .bat<br/><br/>
                    
                    <b>After Downloading:</b><br/>
                    1. <b>Scan with Antivirus:</b> Before opening<br/>
                    2. <b>Check Digital Signature:</b> Right-click → Properties → Digital Signatures<br/>
                    3. <b>Use Sandbox:</b> Test in virtual environment first<br/>
                    4. <b>Hash Check:</b> Verify file integrity with MD5/SHA checksums<br/>
                    5. <b>Keep Backups:</b> In case of ransomware<br/><br/>
                    
                    <b>Trusted Sources:</b><br/>
                    • Official company websites<br/>
                    • Microsoft Store / Apple App Store<br/>
                    • Google Play Store (carefully)<br/>
                    • Open-source repositories (GitHub, SourceForge)<br/>
                    • Major software aggregators (FileHippo, Softonic with caution)
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Browser Security Configuration</b><br/><br/>
                    
                    <b>Step 1: Install Security Extensions</b><br/>
                    1. uBlock Origin (ad blocker)<br/>
                    2. HTTPS Everywhere<br/>
                    3. Privacy Badger<br/>
                    4. Bitwarden (password manager)<br/><br/>
                    
                    <b>Step 2: Configure Browser Settings</b><br/>
                    1. Chrome: Settings → Privacy and security<br/>
                    2. Enable "Safe Browsing" (Enhanced protection)<br/>
                    3. Disable third-party cookies<br/>
                    4. Clear browsing data regularly<br/>
                    5. Disable password saving in browser (use manager instead)<br/><br/>
                    
                    <b>Step 3: Test Your Security</b><br/>
                    1. Visit: https://www.cloudflare.com/ssl/encrypted-sni/<br/>
                    2. Visit: https://browserleaks.com/<br/>
                    3. Visit: https://www.deviceinfo.me/<br/>
                    4. Check what information is exposed<br/><br/>
                    
                    <b>Step 4: Safe Download Practice</b><br/>
                    1. Download VLC media player from official site<br/>
                    2. Verify digital signature<br/>
                    3. Scan with antivirus<br/>
                    4. Compare hash with official hash
                </div>
                
                <hr/>
                
                <h3>Assignment: Complete Security Audit & Action Plan</h3>
                
                <div class="assignment-box">
                    <b>Objective:</b> Conduct a comprehensive security audit of your digital life and create an improvement plan<br/><br/>
                    
                    <b>Part 1: Current State Assessment</b><br/>
                    1. <b>Password Audit:</b><br/>
                    &nbsp;&nbsp;• List all accounts with passwords<br/>
                    &nbsp;&nbsp;• Rate each password (Weak/Medium/Strong)<br/>
                    &nbsp;&nbsp;• Identify reused passwords<br/>
                    &nbsp;&nbsp;• Count total unique passwords<br/><br/>
                    
                    2. <b>2FA Status:</b><br/>
                    &nbsp;&nbsp;• List accounts with 2FA enabled<br/>
                    &nbsp;&nbsp;• Note 2FA method for each (SMS/app/key)<br/>
                    &nbsp;&nbsp;• Identify critical accounts without 2FA<br/><br/>
                    
                    3. <b>Digital Footprint:</b><br/>
                    &nbsp;&nbsp;• Google yourself - document findings<br/>
                    &nbsp;&nbsp;• List all social media accounts<br/>
                    &nbsp;&nbsp;• Check privacy settings for each<br/>
                    &nbsp;&nbsp;• Identify concerning public information<br/><br/>
                    
                    <b>Part 2: Security Improvements</b><br/>
                    1. <b>Password Manager Setup:</b><br/>
                    &nbsp;&nbsp;• Choose and install password manager<br/>
                    &nbsp;&nbsp;• Create master password (document method)<br/>
                    &nbsp;&nbsp;• Import/add at least 10 accounts<br/>
                    &nbsp;&nbsp;• Generate new strong passwords for 5 accounts<br/><br/>
                    
                    2. <b>2FA Implementation:</b><br/>
                    &nbsp;&nbsp;• Enable 2FA on 5 critical accounts<br/>
                    &nbsp;&nbsp;• Use authenticator app (not SMS)<br/>
                    &nbsp;&nbsp;• Document backup codes securely<br/>
                    &nbsp;&nbsp;• Test recovery process<br/><br/>
                    
                    3. <b>Privacy Cleanup:</b><br/>
                    &nbsp;&nbsp;• Remove yourself from 3 people search sites<br/>
                    &nbsp;&nbsp;• Adjust privacy settings on all social media<br/>
                    &nbsp;&nbsp;• Delete 3 unused online accounts<br/>
                    &nbsp;&nbsp;• Clean up old posts/comments<br/><br/>
                    
                    <b>Part 3: Security Plan</b><br/>
                    1. Create maintenance schedule:<br/>
                    &nbsp;&nbsp;• Password review frequency<br/>
                    &nbsp;&nbsp;• 2FA backup code update schedule<br/>
                    &nbsp;&nbsp;• Privacy check schedule<br/>
                    &nbsp;&nbsp;• Software update schedule<br/><br/>
                    
                    2. Emergency procedures:<br/>
                    &nbsp;&nbsp;• Lost phone with 2FA<br/>
                    &nbsp;&nbsp;• Suspected account compromise<br/>
                    &nbsp;&nbsp;• Password manager recovery<br/>
                    &nbsp;&nbsp;• Data breach response
                </div>
                
                <div class="practice-box">
                    <b>Submission Requirements:</b><br/>
                    ☐ Complete current state assessment<br/>
                    ☐ Screenshots of password manager setup<br/>
                    ☐ Screenshots of 2FA enabled accounts<br/>
                    ☐ Evidence of privacy cleanup<br/>
                    ☐ Detailed security improvement plan<br/>
                    ☐ Maintenance schedule<br/>
                    ☐ Emergency procedures document<br/>
                    ☐ Reflection on learning (500 words)<br/>
                    ☐ Professional report format
                </div>
                
                <hr/>
                
                <h3>Legal and Ethical Considerations</h3>
                
                <div class="section-box">
                    <b>Digital Citizenship Principles:</b><br/><br/>
                    
                    <b>1. Respect Digital Property:</b><br/>
                    • Don't pirate software/media<br/>
                    • Respect copyright and licenses<br/>
                    • Cite sources properly<br/>
                    • Understand fair use<br/><br/>
                    
                    <b>2. Protect Others' Privacy:</b><br/>
                    • Don't share others' personal information<br/>
                    • Get permission before posting photos of others<br/>
                    • Respect others' digital boundaries<br/>
                    • Report inappropriate behavior<br/><br/>
                    
                    <b>3. Practice Online Etiquette:</b><br/>
                    • Be respectful in discussions<br/>
                    • Think before posting<br/>
                    • Don't spread misinformation<br/>
                    • Use appropriate language<br/><br/>
                    
                    <b>4. Understand Legal Responsibilities:</b><br/>
                    • Cyberbullying laws<br/>
                    • Defamation and libel<br/>
                    • Terms of service agreements<br/>
                    • Data protection regulations (GDPR, CCPA)
                </div>
                
                <hr/>
                
                <div class="resource-box">
                    <h3>Additional Resources</h3>
                    
                    <b>Security Tools:</b><br/>
                    • <a href="https://haveibeenpwned.com/" target="_blank">Have I Been Pwned? (Check data breaches)</a><br/>
                    • <a href="https://www.virustotal.com/" target="_blank">VirusTotal (File/URL scanner)</a><br/>
                    • <a href="https://www.grc.com/x/ne.dll?bh0bkyd2" target="_blank">ShieldsUP! (Port scanner)</a><br/>
                    • <a href="https://www.ssllabs.com/ssltest/" target="_blank">SSL Labs (SSL tester)</a><br/><br/>
                    
                    <b>Learning Resources:</b><br/>
                    • <a href="https://www.consumer.ftc.gov/features/feature-0014-identity-theft" target="_blank">FTC Identity Theft Resources</a><br/>
                    • <a href="https://staysafeonline.org/" target="_blank">Stay Safe Online (NCSA)</a><br/>
                    • <a href="https://www.getsafeonline.org/" target="_blank">Get Safe Online</a><br/>
                    • <a href="https://www.privacyrights.org/" target="_blank">Privacy Rights Clearinghouse</a><br/><br/>
                    
                    <b>News and Updates:</b><br/>
                    • <a href="https://krebsonsecurity.com/" target="_blank">Krebs on Security (Blog)</a><br/>
                    • <a href="https://thehackernews.com/" target="_blank">The Hacker News</a><br/>
                    • <a href="https://www.schneier.com/" target="_blank">Schneier on Security</a><br/>
                    • <a href="https://www.darkreading.com/" target="_blank">Dark Reading</a>
                </div>
                
                <hr/>
                
                <div class="preview-box">
                    <h3>Preview: Day 3 - Troubleshooting & Maintenance</h3>
                    
                    <b>Tomorrow you'll learn:</b><br/>
                    • Basic computer troubleshooting methodology<br/>
                    • Using Task Manager and System Tools<br/>
                    • Managing startup programs and services<br/>
                    • Disk cleanup and optimization<br/>
                    • Backup strategies and disaster recovery<br/>
                    • Hardware maintenance basics<br/>
                    • Common error messages and solutions<br/>
                    • When to seek professional help<br/><br/>
                    
                    <b>Preparation:</b><br/>
                    • Note any current computer issues you're experiencing<br/>
                    • Check your backup situation<br/>
                    • Review installed programs you no longer use<br/>
                    • Check disk space on your computer<br/>
                    • Bring questions about computer maintenance
                </div>
                
                <div class="completion-box">
                    <h3>✅ Day 2 Complete!</h3>
                    <p><b>Key Takeaways:</b></p>
                    <ul>
                        <li>Strong, unique passwords are essential for every account</li>
                        <li>Password managers solve the password memory problem securely</li>
                        <li>Two-factor authentication adds critical extra security layer</li>
                        <li>Phishing attacks can be identified and avoided with awareness</li>
                        <li>Your digital footprint affects reputation and security</li>
                        <li>Safe browsing practices prevent malware and data theft</li>
                        <li>Digital citizenship involves ethical and responsible online behavior</li>
                    </ul>
                    
                    <p><b>Action Items from Today:</b></p>
                    <div style="background-color: #f0fff0; padding: 15px; margin: 15px 0; border-radius: 5px;">
                        1. ✅ Install a password manager<br/>
                        2. ✅ Enable 2FA on email and financial accounts<br/>
                        3. ✅ Google yourself and clean up results<br/>
                        4. ✅ Install browser security extensions<br/>
                        5. ✅ Create strong master password<br/>
                        6. ✅ Review social media privacy settings
                    </div>
                    
                    <p><b>Quote:</b> "Passwords are like underwear: don't let people see it, change it very often, and you shouldn't share it with strangers." - Chris Pirillo</p>
                </div>`
            },
            "8-3": {
                icon: "fas fa-tools",
                title: "Troubleshooting & Maintenance",
                html: `<h1>Week 8, Day 3: Troubleshooting & Maintenance</h1>
                <p>Today we'll learn how to diagnose and fix common computer problems, perform essential maintenance, and keep your system running smoothly.</p>
                
                <div class="analogy-box">
                    <b>Analogy: Your Computer as a Car 🚗🔧</b><br/>
                    
                    Task Manager: The car dashboard showing what's running<br/>
                    Startup Programs: Passengers who automatically get in when you start the car<br/>
                    Disk Cleanup: Cleaning out the trash from your car<br/>
                    Defragmentation: Rearranging items in your trunk for easier access<br/>
                    Backup</b>: A spare key and insurance for your car<br/>
                    Updates: Regular oil changes and maintenance<br/>
                    BSOD: The check engine light coming on<br/>
                    Restart: Turning the car off and on again to fix issues
                </div>

                <h3>Key Topics</h3>
                <ul>
                    <li>Systematic Troubleshooting Methodology</li>
                    <li>Using Task Manager and System Tools</li>
                    <li>Managing Startup Programs and Services</li>
                    <li>Disk Cleanup, Defragmentation, and Optimization</li>
                    <li>Backup Strategies and Disaster Recovery</li>
                    <li>Hardware Maintenance Basics</li>
                    <li>Common Error Messages and Solutions</li>
                    <li>Preventive Maintenance Schedule</li>
                </ul>

                <h3>In-Depth Explanation</h3>
                
                <b>a. The Troubleshooting Methodology</b><br/>
                
                <div class="section-box">
                    <b>The 7-Step Troubleshooting Process:</b><br/>
                    
                    <div style="background-color: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>1. Identify the Problem:</b><br/>
                        • What exactly is happening?<br/>
                        • When did it start?<br/>
                        • What were you doing when it happened?<br/>
                        • Is it reproducible?<br/><br/>
                        
                        <b>2. Establish a Theory:</b><br/>
                        • What could be causing this?<br/>
                        • Consider common causes first<br/>
                        • Research if needed<br/><br/>
                        
                        <b>3. Test the Theory:</b><br/>
                        • Try possible solutions<br/>
                        • One change at a time<br/>
                        • Document what you try<br/><br/>
                        
                        <b>4. Create an Action Plan:</b><br/>
                        • Decide on solution approach<br/>
                        • Consider side effects<br/>
                        • Have backup plan<br/><br/>
                        
                        <b>5. Implement the Solution:</b><br/>
                        • Make the fix<br/>
                        • Follow procedures carefully<br/>
                        • Test as you go<br/><br/>
                        
                        <b>6. Verify System Functionality:</b><br/>
                        • Did it solve the problem?<br/>
                        • Test related functionality<br/>
                        • Ensure no new issues created<br/><br/>
                        
                        <b>7. Document the Solution:</b><br/>
                        • What was the problem?<br/>
                        • What fixed it?<br/>
                        • For future reference<br/>
                        • Share with others if helpful
                    </div>
                </div>
                
                <div class="code-box">
                    <b>The Golden Rule of Troubleshooting: Restart First!</b><br/><br/>
                    
                    <b>Why Restart Works:</b><br/>
                    • Clears temporary memory (RAM)<br/>
                    • Stops stuck processes<br/>
                    • Refreshes system state<br/>
                    • Applies pending updates<br/>
                    • Fixes many software glitches<br/><br/>
                    
                    <b>Proper Restart Procedure:</b><br/>
                    1. Save all work<br/>
                    2. Close all programs<br/>
                    3. Click Start → Restart (not Shut Down on Windows 10/11)<br/>
                    4. Wait patiently (don't force power off)<br/>
                    5. Test if problem persists<br/><br/>
                    
                    <b>When to Use Advanced Restart Options:</b><br/>
                    • <b>Safe Mode:</b> For removing malware, troubleshooting drivers<br/>
                    • <b>Clean Boot:</b> For identifying conflicting software<br/>
                    • <b>Last Known Good Configuration:</b> After bad driver/update
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Troubleshooting Scenarios</b><br/><br/>
                    
                    <b>Scenario 1: Slow Computer</b><br/>
                    Computer takes 5 minutes to start, programs run slowly<br/>
                    <b>Possible Causes:</b> Too many startup programs, low disk space, malware, outdated hardware<br/>
                    <b>Troubleshooting Steps:</b> Check Task Manager, run disk cleanup, scan for malware, check startup programs<br/><br/>
                    
                    <b>Scenario 2: No Internet Connection</b><br/>
                    Can't connect to any websites, but other devices work<br/>
                    <b>Possible Causes:</b> WiFi disabled, wrong network, IP conflict, DNS issues<br/>
                    <b>Troubleshooting Steps:</b> Check WiFi on/off, restart router, ipconfig /release /renew, flush DNS<br/><br/>
                    
                    <b>Scenario 3: Blue Screen of Death (BSOD)</b><br/>
                    Computer crashes with blue screen, error code displayed<br/>
                    <b>Possible Causes:</b> Driver conflict, hardware failure, overheating, memory issues<br/>
                    <b>Troubleshooting Steps:</b> Note error code, boot in safe mode, check Event Viewer, update drivers
                </div>
                
                <hr/>
                
                <b>b. Task Manager: Your Diagnostic Dashboard</b><br/>
                
                <div class="section-box">
                    <b>Opening Task Manager:</b><br/>
                    • <b>Ctrl + Shift + Esc:</b> Direct open<br/>
                    • <b>Ctrl + Alt + Delete:</b> Then select Task Manager<br/>
                    • <b>Right-click Taskbar:</b> Select Task Manager<br/>
                    • <b>Windows key + X:</b> Then select Task Manager<br/>
                    • <b>Command Prompt:</b> taskmgr<br/><br/>
                    
                    <b>Different Views:</b><br/>
                    • <b>Fewer details:</b> Basic running apps<br/>
                    • <b>More details:</b> Full Task Manager (click "More details")<br/>
                    • Customize columns for needed information
                </div>
                
                <div class="code-box">
                    <b>Task Manager Tabs Explained:</b><br/><br/>
                    
                    <b>1. Processes Tab:</b><br/>
                    • Shows all running programs and background processes<br/>
                    • Columns: Name, Status, CPU, Memory, Disk, Network, GPU<br/>
                    • Sort by column to find resource hogs<br/>
                    • Right-click to end task, open file location, search online<br/><br/>
                    
                    <b>2. Performance Tab:</b><br/>
                    • Real-time graphs of system resources<br/>
                    • CPU: Usage, speed, processes, threads, handles<br/>
                    • Memory: In use, available, speed, slots used<br/>
                    • Disk: Active time, read/write speed, capacity<br/>
                    • Network: Usage, connection type, adapter name<br/>
                    • GPU: Dedicated/shared memory, engine usage<br/><br/>
                    
                    <b>3. App History Tab:</b><br/>
                    • Resource usage over time<br/>
                    • Reset to start fresh monitoring<br/>
                    • Useful for identifying consistently problematic apps<br/><br/>
                    
                    <b>4. Startup Tab:</b><br/>
                    • Programs that start automatically with Windows<br/>
                    • Impact rating (High/Medium/Low/None)<br/>
                    • Disable unnecessary programs to speed startup<br/>
                    • Right-click to enable/disable, open file location<br/><br/>
                    
                    <b>5. Users Tab:</b><br/>
                    • Resources used by each logged-in user<br/>
                    • Expand to see processes for each user<br/>
                    • Useful for multi-user systems<br/><br/>
                    
                    <b>6. Details Tab:</b><br/>
                    • Advanced process information<br/>
                    • PID (Process ID), status, username<br/>
                    • Set priority, affinity, end process tree<br/><br/>
                    
                    <b>7. Services Tab:</b><br/>
                    • Windows services running in background<br/>
                    • Start, stop, restart services<br/>
                    • Open Services app for more control
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Task Manager Investigation</b><br/><br/>
                    
                    <b>Task 1: Identify Resource Hogs</b><br/>
                    1. Open Task Manager (Ctrl + Shift + Esc)<br/>
                    2. Go to Processes tab<br/>
                    3. Click "Memory" column to sort<br/>
                    4. Note top 3 memory-using processes<br/>
                    5. Click "CPU" column to sort<br/>
                    6. Note top 3 CPU-using processes<br/>
                    7. Click "Disk" column to sort<br/>
                    8. Note top 3 disk-using processes<br/><br/>
                    
                    <b>Task 2: Performance Monitoring</b><br/>
                    1. Go to Performance tab<br/>
                    2. Note CPU usage percentage<br/>
                    3. Note Memory usage and available<br/>
                    4. Open several programs (Word, Chrome with multiple tabs)<br/>
                    5. Watch how resource usage changes<br/>
                    6. Close programs and watch resources free up<br/><br/>
                    
                    <b>Task 3: Startup Management</b><br/>
                    1. Go to Startup tab<br/>
                    2. Count how many programs start automatically<br/>
                    3. Identify programs with "High" impact<br/>
                    4. Research unfamiliar programs online<br/>
                    5. Disable 2-3 unnecessary startup programs<br/>
                    6. Restart computer and test startup speed
                </div>
                
                <hr/>
                
                <b>c. Disk Maintenance and Optimization</b><br/>
                
                <div class="section-box">
                    <b>Disk Cleanup Tools:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Tool</th><th>Purpose</th><th>How to Access</th><th>Frequency</th></tr>
                        <tr>
                            <td><b>Disk Cleanup</b></td>
                            <td>Remove temporary files, system files</td>
                            <td>Start → type "Disk Cleanup"</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td><b>Storage Sense</b></td>
                            <td>Automatic cleanup (Windows 10/11)</td>
                            <td>Settings → System → Storage</td>
                            <td>Automatic</td>
                        </tr>
                        <tr>
                            <td><b>CCleaner</b></td>
                            <td>Third-party comprehensive cleaner</td>
                            <td>Download from piriform.com</td>
                            <td>Monthly (use carefully)</td>
                        </tr>
                        <tr>
                            <td><b>Temp Files</b></td>
                            <td>Manual temp file deletion</td>
                            <td>%temp% in Run dialog</td>
                            <td>Monthly</td>
                        </tr>
                        <tr>
                            <td><b>Browser Cache</b></td>
                            <td>Clear browsing data</td>
                            <td>Browser settings</td>
                            <td>Monthly or as needed</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Running Disk Cleanup:</b><br/><br/>
                    
                    <b>Step-by-Step:</b><br/>
                    1. Press Windows key + R, type "cleanmgr", press Enter<br/>
                    2. Select drive to clean (usually C:)<br/>
                    3. Click "Clean up system files" (administrator required)<br/>
                    4. Select file types to delete:<br/>
                    &nbsp;&nbsp;• <b>Downloaded Program Files:</b> Usually safe<br/>
                    &nbsp;&nbsp;• <b>Temporary Internet Files:</b> Safe, will rebuild<br/>
                    &nbsp;&nbsp;• <b>Recycle Bin:</b> Check first if needed<br/>
                    &nbsp;&nbsp;• <b>Temporary Files:</b> Usually safe<br/>
                    &nbsp;&nbsp;• <b>Thumbnails:</b> Will rebuild<br/>
                    &nbsp;&nbsp;• <b>Windows Update Cleanup:</b> Safe after confirming updates work<br/>
                    5. Click OK → Delete Files<br/><br/>
                    
                    <b>Advanced Options:</b><br/>
                    1. Click "Clean up system files"<br/>
                    2. Go to "More Options" tab<br/>
                    3. System Restore and Shadow Copies: Remove older restore points<br/>
                    4. Programs and Features: Uninstall unused programs<br/><br/>
                    
                    <b>Command Line Version:</b><br/>
                    cleanmgr /sageset:1 (save settings)<br/>
                    cleanmgr /sagerun:1 (run with saved settings)<br/>
                    Good for automated cleanup scripts
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Disk Maintenance Practice</b><br/><br/>
                    
                    <b>Task 1: Check Disk Space</b><br/>
                    1. Open File Explorer<br/>
                    2. Right-click C: drive → Properties<br/>
                    3. Note used space and free space<br/>
                    4. Calculate percentage used<br/>
                    5. Rule: Keep at least 15-20% free space<br/><br/>
                    
                    <b>Task 2: Run Disk Cleanup</b><br/>
                    1. Run cleanmgr<br/>
                    2. Select C: drive<br/>
                    3. Check "Clean up system files"<br/>
                    4. Select file types to delete<br/>
                    5. Note how much space will be freed<br/>
                    6. Run cleanup<br/>
                    7. Check disk space again<br/><br/>
                    
                    <b>Task 3: Find Large Files</b><br/>
                    1. Open File Explorer<br/>
                    2. Navigate to C: drive<br/>
                    3. In search box, type "size:gigantic"<br/>
                    4. Sort by size<br/>
                    5. Identify large files that can be moved/deleted<br/>
                    6. Use TreeSize Free or WinDirStat for visualization
                </div>
                
                <hr/>
                
                <b>d. Defragmentation and Optimization</b><br/>
                
                <div class="section-box">
                    <b>Understanding Fragmentation:</b><br/>
                    
                    <div style="background-color: #f9f9f9; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>Analogy:</b> Imagine a bookshelf where books (files) get split into pieces scattered around.<br/>
                        Reading a book requires jumping around the shelf - slow!<br/>
                        Defragmentation rearranges the books to be together in order - faster access!
                    </div>
                    
                    <b>HDD vs SSD:</b><br/>
                    • <b>HDD (Hard Disk Drive):</b> Mechanical, benefits from defragmentation<br/>
                    • <b>SSD (Solid State Drive):</b> No moving parts, DO NOT defragment!<br/>
                    • <b>Optimize Drives tool</b> automatically chooses correct method
                </div>
                
                <div class="code-box">
                    <b>Using Optimize Drives Tool:</b><br/><br/>
                    
                    <b>Step-by-Step:</b><br/>
                    1. Type "defrag" in Start menu → select "Defragment and Optimize Drives"<br/>
                    2. Select drive to analyze/optimize<br/>
                    3. Click "Analyze" (for HDDs)<br/>
                    4. If fragmentation > 5-10%, click "Optimize"<br/>
                    5. For SSDs, tool runs TRIM command instead<br/><br/>
                    
                    <b>Command Line Tools:</b><br/>
                    • <b>defrag:</b> Command line defragmentation tool<br/>
                    • Examples:<br/>
                    defrag C: /A (analyze only)<br/>
                    defrag C: /O (optimize)<br/>
                    defrag C: /U (display progress)<br/>
                    defrag C: /V (verbose output)<br/><br/>
                    
                    <b>Scheduled Optimization:</b><br/>
                    1. In Optimize Drives tool, click "Change settings"<br/>
                    2. Check "Run on a schedule"<br/>
                    3. Set frequency (weekly recommended)<br/>
                    4. Select drives to include<br/>
                    5. Windows automatically chooses correct method
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Drive Optimization</b><br/><br/>
                    
                    <b>Task 1: Check Drive Types</b><br/>
                    1. Open Optimize Drives tool<br/>
                    2. Note "Media type" for each drive<br/>
                    3. Identify which are HDD and which are SSD<br/>
                    4. Note last optimization date<br/>
                    5. Check fragmentation percentage for HDDs<br/><br/>
                    
                    <b>Task 2: Manual Optimization</b><br/>
                    1. Select an HDD drive<br/>
                    2. Click "Analyze"<br/>
                    3. If fragmentation > 10%, click "Optimize"<br/>
                    4. Monitor progress<br/>
                    5. Note time taken and improvement<br/><br/>
                    
                    <b>Task 3: Schedule Setup</b><br/>
                    1. Click "Change settings"<br/>
                    2. Enable scheduled optimization<br/>
                    3. Set to weekly<br/>
                    4. Select all drives<br/>
                    5. Enable "Notify if three consecutive scheduled runs are missed"
                </div>
                
                <hr/>
                
                <b>e. Backup Strategies and Disaster Recovery</b><br/>
                
                <div class="section-box">
                    <b>The 3-2-1 Backup Rule:</b><br/>
                    
                    <div style="background-color: #e8f5e8; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <b>3 Copies</b> of your data<br/>
                        <b>2 Different Media</b> types (hard drive + cloud)<br/>
                        <b>1 Off-site</b> copy (cloud or physical location)
                    </div>
                    
                    <b>Types of Backups:</b><br/>
                    • <b>Full Backup:</b> Complete copy of everything<br/>
                    • <b>Incremental Backup:</b> Only changes since last backup<br/>
                    • <b>Differential Backup:</b> Changes since last full backup<br/>
                    • <b>Mirror Backup:</b> Exact copy, deletions also mirrored
                </div>
                
                <div class="code-box">
                    <b>Windows Backup Tools:</b><br/><br/>
                    
                    <b>1. File History (Windows 10/11):</b><br/>
                    • Settings → Update & Security → Backup<br/>
                    • Backs up user folders automatically<br/>
                    • Requires external drive or network location<br/>
                    • Keeps versions of files over time<br/><br/>
                    
                    <b>2. System Image Backup:</b><br/>
                    • Control Panel → Backup and Restore (Windows 7)<br/>
                    • Creates complete system image<br/>
                    • Can restore entire system after crash<br/>
                    • Large files, requires external storage<br/><br/>
                    
                    <b>3. OneDrive/Cloud Backup:</b><br/>
                    • Built into Windows 10/11<br/>
                    • Syncs Desktop, Documents, Pictures<br/>
                    • 5GB free, paid plans available<br/>
                    • Access files from anywhere<br/><br/>
                    
                    <b>Third-Party Options:</b><br/>
                    • <b>Macrium Reflect:</b> Free for personal use, excellent imaging<br/>
                    • <b>Veeam Agent:</b> Free for Windows, good for backups<br/>
                    • <b>EaseUS Todo Backup:</b> Free version available<br/>
                    • <b>Cloud Services:</b> Backblaze, Carbonite, iDrive
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Creating a Backup Plan</b><br/><br/>
                    
                    <b>Task 1: Identify Critical Data</b><br/>
                    1. List important data categories:<br/>
                    &nbsp;&nbsp;• Documents<br/>
                    &nbsp;&nbsp;• Photos<br/>
                    &nbsp;&nbsp;• Financial records<br/>
                    &nbsp;&nbsp;• Work projects<br/>
                    &nbsp;&nbsp;• Music/movies<br/>
                    2. Estimate total size<br/>
                    3. Identify locations of this data<br/><br/>
                    
                    <b>Task 2: Current Backup Status</b><br/>
                    1. Check what's currently backed up<br/>
                    2. Check backup destinations<br/>
                    3. Test restore of one file<br/>
                    4. Note gaps in current backup strategy<br/><br/>
                    
                    <b>Task 3: Implement 3-2-1 Rule</b><br/>
                    1. <b>Copy 1:</b> Original files on computer<br/>
                    2. <b>Copy 2:</b> External hard drive backup (File History)<br/>
                    3. <b>Copy 3:</b> Cloud backup (OneDrive/Google Drive)<br/>
                    4. Set up automatic schedules for each<br/>
                    5. Test restoration process
                </div>
                
                <hr/>
                
                <b>f. Common Error Messages and Solutions</b><br/>
                
                <div class="section-box">
                    <b>Common Windows Error Messages:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Error Message</th><th>Likely Cause</th><th>First Steps to Fix</th></tr>
                        <tr>
                            <td><b>"DLL is missing"</b></td>
                            <td>Corrupt/missing system file</td>
                            <td>Restart, run SFC scan, reinstall affected program</td>
                        </tr>
                        <tr>
                            <td><b>"Not enough memory"</b></td>
                            <td>RAM full, memory leak</td>
                            <td>Close programs, restart, check for memory leaks</td>
                        </tr>
                        <tr>
                            <td><b>"Disk is full"</b></td>
                            <td>Hard drive out of space</td>
                            <td>Disk cleanup, uninstall programs, move files</td>
                        </tr>
                        <tr>
                            <td><b>"Access denied"</b></td>
                            <td>Permissions issue</td>
                            <td>Run as administrator, check file permissions</td>
                        </tr>
                        <tr>
                            <td><b>"Program not responding"</b></td>
                            <td>Frozen program</td>
                            <td>Wait, force close via Task Manager, restart</td>
                        </tr>
                        <tr>
                            <td><b>"Blue Screen" (BSOD)</b></td>
                            <td>System crash</td>
                            <td>Note error code, restart, update drivers</td>
                        </tr>
                        <tr>
                            <td><b>"No boot device"</b></td>
                            <td>Boot order issue, dead drive</td>
                            <td>Check connections, BIOS boot order, test drive</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>System Repair Commands:</b><br/><br/>
                    
                    <b>Run as Administrator in Command Prompt:</b><br/><br/>
                    
                    <b>1. SFC (System File Checker):</b><br/>
                    sfc /scannow<br/>
                    • Scans and repairs Windows system files<br/>
                    • Takes 15-45 minutes<br/>
                    • May require restart<br/><br/>
                    
                    <b>2. DISM (Deployment Image Servicing):</b><br/>
                    DISM /Online /Cleanup-Image /RestoreHealth<br/>
                    • Fixes Windows image issues<br/>
                    • Run before SFC if SFC fails<br/>
                    • Requires internet connection<br/><br/>
                    
                    <b>3. CHKDSK (Check Disk):</b><br/>
                    chkdsk C: /f /r<br/>
                    • Checks disk for errors and bad sectors<br/>
                    • /f fixes errors, /r recovers bad sectors<br/>
                    • Requires restart for system drive<br/><br/>
                    
                    <b>4. Windows Memory Diagnostic:</b><br/>
                    mdsched.exe<br/>
                    • Tests RAM for errors<br/>
                    • Requires restart, runs before Windows loads<br/>
                    • Results appear after restart<br/><br/>
                    
                    <b>Order of Operations:</b><br/>
                    1. DISM /Online /Cleanup-Image /RestoreHealth<br/>
                    2. sfc /scannow<br/>
                    3. chkdsk C: /f /r<br/>
                    4. mdsched.exe (if RAM issues suspected)
                </div>
                
                <div class="practice-box">
                    <b>Exercise: System Repair Practice</b><br/><br/>
                    
                    <b>Task 1: Run SFC Scan</b><br/>
                    1. Open Command Prompt as Administrator<br/>
                    2. Type: sfc /scannow<br/>
                    3. Allow scan to complete (15-45 minutes)<br/>
                    4. Note results<br/>
                    5. If errors found, they were repaired automatically<br/><br/>
                    
                    <b>Task 2: Check Event Viewer</b><br/>
                    1. Type "eventvwr" in Start menu<br/>
                    2. Expand Windows Logs<br/>
                    3. Check System and Application logs<br/>
                    4. Look for recent errors (red icons)<br/>
                    5. Note event ID and source<br/>
                    6. Research online for solutions<br/><br/>
                    
                    <b>Task 3: Create System Restore Point</b><br/>
                    1. Type "Create restore point" in Start<br/>
                    2. Select C: drive → Configure<br/>
                    3. Enable system protection<br/>
                    4. Set disk space usage (5-10%)<br/>
                    5. Click Create → Name it "Before maintenance"<br/>
                    6. Verify creation in System Restore
                </div>
                
                <hr/>
                
                <b>g. Hardware Maintenance Basics</b><br/>
                
                <div class="section-box">
                    <b>Cleaning and Physical Maintenance:</b><br/>
                    
                    <table class="info-table">
                        <tr><th>Component</th><th>Maintenance Task</th><th>Frequency</th><th>Tools Needed</th></tr>
                        <tr>
                            <td><b>Exterior</b></td>
                            <td>Wipe down with microfiber cloth</td>
                            <td>Weekly</td>
                            <td>Microfiber cloth, screen cleaner</td>
                        </tr>
                        <tr>
                            <td><b>Keyboard</b></td>
                            <td>Clean between keys, disinfect</td>
                            <td>Monthly</td>
                            <td>Compressed air, cleaning gel, disinfectant wipes</td>
                        </tr>
                        <tr>
                            <td><b>Screen</b></td>
                            <td>Clean with proper solution</td>
                            <td>Weekly</td>
                            <td>Microfiber cloth, screen cleaner (not glass cleaner)</td>
                        </tr>
                        <tr>
                            <td><b>Vents/Fans</b></td>
                            <td>Dust removal</td>
                            <td>Every 3-6 months</td>
                            <td>Compressed air, small vacuum</td>
                        </tr>
                        <tr>
                            <td><b>Internal</b></td>
                            <td>Dust removal, check connections</td>
                            <td>Yearly</td>
                            <td>Compressed air, anti-static wrist strap, screwdrivers</td>
                        </tr>
                        <tr>
                            <td><b>Cables</b></td>
                            <td>Check for damage, organize</td>
                            <td>Monthly</td>
                            <td>Cable ties, labels</td>
                        </tr>
                    </table>
                </div>
                
                <div class="code-box">
                    <b>Preventive Maintenance Schedule:</b><br/><br/>
                    
                    <b>Daily:</b><br/>
                    • Save work frequently<br/>
                    • Perform proper shutdown<br/>
                    • Keep food/drinks away from computer<br/><br/>
                    
                    <b>Weekly:</b><br/>
                    • Clean exterior with microfiber cloth<br/>
                    • Empty Recycle Bin<br/>
                    • Check for Windows updates<br/>
                    • Run quick antivirus scan<br/><br/>
                    
                    <b>Monthly:</b><br/>
                    • Run Disk Cleanup<br/>
                    • Update all software<br/>
                    • Clean keyboard and mouse<br/>
                    • Check backup status<br/>
                    • Review startup programs<br/><br/>
                    
                    <b>Quarterly:</b><br/>
                    • Run full antivirus scan<br/>
                    • Defragment HDDs (if applicable)<br/>
                    • Clean computer vents with compressed air<br/>
                    • Test backup restoration<br/>
                    • Organize files and folders<br/><br/>
                    
                    <b>Yearly:</b><br/>
                    • Internal cleaning (if comfortable)<br/>
                    • Check internal connections<br/>
                    • Replace thermal paste (if needed)<br/>
                    • Review and update backup strategy<br/>
                    • Consider hardware upgrades
                </div>
                
                <div class="practice-box">
                    <b>Exercise: Create Maintenance Checklist</b><br/><br/>
                    
                    <b>Task 1: Daily Checklist</b><br/>
                    Create checklist for:<br/>
                    1. Proper startup/shutdown<br/>
                    2. Workspace cleanliness<br/>
                    3. Cable management<br/>
                    4. Temperature monitoring<br/><br/>
                    
                    <b>Task 2: Weekly Tasks</b><br/>
                    Schedule for:<br/>
                    1. Exterior cleaning<br/>
                    2. Update checks<br/>
                    3. Quick scans<br/>
                    4. File organization<br/><br/>
                    
                    <b>Task 3: Monthly Deep Clean</b><br/>
                    Plan for:<br/>
                    1. Keyboard deep clean<br/>
                    2. Monitor cleaning<br/>
                    3. Software updates<br/>
                    4. Backup verification<br/><br/>
                    
                    <b>Task 4: Create Calendar</b><br/>
                    Use Google Calendar/Outlook to schedule:<br/>
                    • Weekly reminders<br/>
                    • Monthly tasks<br/>
                    • Quarterly maintenance<br/>
                    • Yearly checkups
                </div>
                
                <hr/>
                
                <h3>Assignment: Complete System Health Check & Maintenance Plan</h3>
                
                <div class="assignment-box">
                    <b>Objective:</b> Perform comprehensive system health check and create personalized maintenance plan<br/><br/>
                    
                    <b>Part 1: System Health Assessment</b><br/>
                    1. <b>Performance Metrics:</b><br/>
                    &nbsp;&nbsp;• Startup time (from power on to usable)<br/>
                    &nbsp;&nbsp;• Disk space usage and free space percentage<br/>
                    &nbsp;&nbsp;• RAM usage at idle and under load<br/>
                    &nbsp;&nbsp;• CPU temperature ranges<br/>
                    &nbsp;&nbsp;• Battery health (if laptop)<br/><br/>
                    
                    2. <b>Software Assessment:</b><br/>
                    &nbsp;&nbsp;• Windows version and update status<br/>
                    &nbsp;&nbsp;• Antivirus status and last scan<br/>
                    &nbsp;&nbsp;• List of startup programs and impact<br/>
                    &nbsp;&nbsp;• Installed programs no longer used<br/>
                    &nbsp;&nbsp;• Driver update status<br/><br/>
                    
                    3. <b>Backup Status:</b><br/>
                    &nbsp;&nbsp;• Current backup locations and methods<br/>
                    &nbsp;&nbsp;• Last successful backup date<br/>
                    &nbsp;&nbsp;• Test restoration of one file<br/>
                    &nbsp;&nbsp;• Gap analysis against 3-2-1 rule<br/><br/>
                    
                    <b>Part 2: Immediate Actions</b><br/>
                    1. <b>Cleanup Tasks:</b><br/>
                    &nbsp;&nbsp;• Run Disk Cleanup (document space saved)<br/>
                    &nbsp;&nbsp;• Uninstall 3 unused programs<br/>
                    &nbsp;&nbsp;• Disable 3 unnecessary startup programs<br/>
                    &nbsp;&nbsp;• Clear browser cache and temporary files<br/><br/>
                    
                    2. <b>System Repairs:</b><br/>
                    &nbsp;&nbsp;• Run SFC scan (document results)<br/>
                    &nbsp;&nbsp;• Check for and install Windows updates<br/>
                    &nbsp;&nbsp;• Update 3 critical drivers<br/>
                    &nbsp;&nbsp;• Create system restore point<br/><br/>
                    
                    3. <b>Organization:</b><br/>
                    &nbsp;&nbsp;• Organize Documents folder structure<br/>
                    &nbsp;&nbsp;• Desktop cleanup (reduce to max 10 icons)<br/>
                    &nbsp;&nbsp;• Sort Downloads folder<br/>
                    &nbsp;&nbsp;• Create folder for current projects<br/><br/>
                    
                    <b>Part 3: Maintenance Plan Creation</b><br/>
                    1. Create personalized maintenance schedule:<br/>
                    &nbsp;&nbsp;• Daily quick tasks<br/>
                    &nbsp;&nbsp;• Weekly maintenance routine<br/>
                    &nbsp;&nbsp;• Monthly deep cleaning<br/>
                    &nbsp;&nbsp;• Quarterly optimizations<br/>
                    &nbsp;&nbsp;• Yearly comprehensive check<br/><br/>
                    
                    2. Backup strategy implementation:<br/>
                    &nbsp;&nbsp;• Set up automatic local backup<br/>
                    &nbsp;&nbsp;• Set up cloud backup<br/>
                    &nbsp;&nbsp;• Schedule backup verification tests<br/>
                    &nbsp;&nbsp;• Document recovery procedures<br/><br/>
                    
                    3. Monitoring setup:<br/>
                    &nbsp;&nbsp;• Configure system health alerts<br/>
                    &nbsp;&nbsp;• Set up update notifications<br/>
                    &nbsp;&nbsp;• Create disk space monitoring<br/>
                    &nbsp;&nbsp;• Temperature monitoring (if applicable)
                </div>
                
                <div class="practice-box">
                    <b>Submission Requirements:</b><br/>
                    ☐ Complete system health assessment<br/>
                    ☐ Before/after performance metrics<br/>
                    ☐ Screenshots of cleanup actions<br/>
                    ☐ System repair logs and results<br/>
                    ☐ Organized folder structure screenshot<br/>
                    ☐ Personalized maintenance schedule<br/>
                    ☐ Backup strategy document<br/>
                    ☐ Monitoring setup evidence<br/>
                    ☐ Reflection on improvements (500 words)
                </div>
                
                <hr/>
                
                <h3>When to Seek Professional Help</h3>
                
                <div class="section-box">
                    <b>Red Flags for Professional Help:</b><br/><br/>
                    
                    <b>Hardware Issues:</b><br/>
                    • Smoke or burning smell from computer<br/>
                    • Liquid damage<br/>
                    • Repeated component failures<br/>
                    • Physical damage (dropped, cracked)<br/>
                    • Fan constantly at maximum speed<br/><br/>
                    
                    <b>Software Issues:</b><br/>
                    • Multiple blue screens with different error codes<br/>
                    • Unable to boot into Safe Mode<br/>
                    • Ransomware infection<br/>
                    • Critical system files repeatedly corrupt<br/>
                    • Multiple antivirus programs can't remove malware<br/><br/>
                    
                    <b>Data Issues:</b><br/>
                    • Important data loss with no backup<br/>
                    • Corrupted database files<br/>
                    • RAID array failure<br/>
                    • Physical hard drive clicking sounds<br/><br/>
                    
                    <b>Finding Reliable Help:</b><br/>
                    • Check reviews and certifications<br/>
                    • Get multiple quotes for expensive repairs<br/>
                    • Ask about data privacy policies<br/>
                    • Request detailed explanation of problem and solution<br/>
                    • Consider warranty implications
                </div>
                
                <hr/>
                
                <div class="resource-box">
                    <h3>Additional Resources</h3>
                    
                    <b>Diagnostic Tools:</b><br/>
                    • <a href="https://www.hwinfo.com/" target="_blank">HWiNFO (Hardware monitoring)</a><br/>
                    • <a href="https://www.ccleaner.com/speccy" target="_blank">Speccy (System information)</a><br/>
                    • <a href="https://www.cpuid.com/softwares/cpu-z.html" target="_blank">CPU-Z (CPU information)</a><br/>
                    • <a href="https://crystalmark.info/en/" target="_blank">CrystalDiskInfo (Disk health)</a><br/><br/>
                    
                    <b>Maintenance Tools:</b><br/>
                    • <a href="https://windirstat.net/" target="_blank">WinDirStat (Disk usage visualization)</a><br/>
                    • <a href="https://www.jam-software.com/treesize_free" target="_blank">TreeSize Free (Disk space analyzer)</a><br/>
                    • <a href="https://www.malwarebytes.com/" target="_blank">Malwarebytes (Malware removal)</a><br/>
                    • <a href="https://www.revouninstaller.com/" target="_blank">Revo Uninstaller (Complete program removal)</a><br/><br/>
                    
                    <b>Learning Resources:</b><br/>
                    • <a href="https://www.howtogeek.com/" target="_blank">How-To Geek (Tech tutorials)</a><br/>
                    • <a href="https://www.lifewire.com/" target="_blank">Lifewire (Tech help)</a><br/>
                    • <a href="https://www.bleepingcomputer.com/" target="_blank">Bleeping Computer (Tech support forums)</a><br/>
                    • <a href="https://www.reddit.com/r/techsupport/" target="_blank">Reddit TechSupport</a>
                </div>
                
                <hr/>
                
                <div class="preview-box">
                    <h3>Preview: Day 4 - Final Exam & Portfolio Presentation</h3>
                    
                    <b>Tomorrow's Agenda:</b><br/>
                    • Module review and Q&A session<br/>
                    • Final exam covering all 8 weeks<br/>
                    • Portfolio presentation preparation<br/>
                    • Presenting your Technology Report<br/>
                    • Course completion and certification<br/>
                    • Next steps and career guidance<br/><br/>
                    
                    <b>Preparation:</b><br/>
                    • Review all modules and notes<br/>
                    • Prepare your Technology Report from Week 4<br/>
                    • Create PowerPoint presentation of your report<br/>
                    • Practice your presentation (3-5 minutes)<br/>
                    • Prepare questions about career next steps<br/>
                    • Bring any incomplete assignments<br/>
                    • Get good rest tonight!
                </div>
                
                <div class="completion-box">
                    <h3>✅ Day 3 Complete!</h3>
                    <p><b>Key Takeaways:</b></p>
                    <ul>
                        <li>Systematic troubleshooting follows a logical process</li>
                        <li>Task Manager is your primary diagnostic tool for Windows</li>
                        <li>Regular disk maintenance prevents performance issues</li>
                        <li>The 3-2-1 backup rule protects against data loss</li>
                        <li>System repair commands can fix many Windows problems</li>
                        <li>Preventive maintenance saves time and money long-term</li>
                        <li>Knowing when to seek professional help is important</li>
                    </ul>
                    
                    <p><b>Your Computer Maintenance Status:</b></p>
                    <div style="background-color: #f0fff0; padding: 15px; margin: 15px 0; border-radius: 5px;">
                        1. ✅ Disk space cleaned up<br/>
                        2. ✅ Startup programs optimized<br/>
                        3. ✅ System files checked and repaired<br/>
                        4. ✅ Backup strategy implemented<br/>
                        5. ✅ Maintenance schedule created<br/>
                        6. ✅ Performance baseline established
                    </div>
                    
                    <p><b>Quote:</b> "An ounce of prevention is worth a pound of cure." - Benjamin Franklin (applies perfectly to computer maintenance!)</p>
                    
                    <p><b>Get ready for our final day tomorrow! You're almost there! 🎓</b></p>
                </div>`
            },
            "8-4": {
                icon: "fas fa-graduation-cap",
                title: "Final Exam & Portfolio Presentation",
                html: `<h1>Week 8, Day 4: Final Exam & Portfolio Presentation</h1>
    <p>Today we celebrate your completion of the Foundation to Computing course! You'll demonstrate your knowledge through a final exam and present your portfolio of work.</p>
    
    <div class="analogy-box">
      <h3>Today's Agenda</h3> 
       <ul>
        <li>Course Review and Q&A Session</li>
        <li>Final Examination (Comprehensive)</li>
    </ul>
 
    </div>
   
    <h3>Part 1: Comprehensive Course Review</h3>
    
    <div class="section-box">
        <b>Week-by-Week Recap:</b><br/>
        <br/>
        <b>Week 1: The Machine & The Interface</b><br/>
        • Desktop management and Windows navigation<br/>
        • Hardware components and their functions<br/>
        • File systems and extensions<br/>
        • Command Prompt basics<br/>
        <b>Key Skill:</b> Navigating and controlling the computer environment<br/>
        <br/>
        <b>Week 2: Data & Connections</b><br/>
        • Networking fundamentals (LAN/WAN, routers, switches)<br/>
        • Binary system and ASCII encoding<br/>
        • Data transmission and network troubleshooting<br/>
        <b>Key Skill:</b> Understanding how data moves and is represented<br/>
        <br/>
        <b>Weeks 3-4: Microsoft Word Mastery</b><br/>
        • Document formatting and styles<br/>
        • Tables, images, and page layouts<br/>
        • Mail merge and collaboration tools<br/>
        • Professional document creation<br/>
        <b>Key Skill:</b> Creating professional, well-structured documents<br/>
        <br/>
        <b>Weeks 5-6: Microsoft Excel - Data Power</b><br/>
        • Spreadsheet fundamentals and formulas<br/>
        • Data analysis with functions and charts<br/>
        • Logical functions and data validation<br/>
        • Pivot tables and data visualization<br/>
        <b>Key Skill:</b> Analyzing and presenting data effectively<br/>
        <br/>
        <b>Week 7: PowerPoint & The Web</b><br/>
        • Professional presentation creation<br/>
        • Internet fundamentals and web technologies<br/>
        • Professional email communication<br/>
        <b>Key Skill:</b> Communicating ideas effectively and understanding the web<br/>
        <br/>
        <b>Week 8: Logic, Security & Maintenance</b><br/>
        • Software development logic and problem-solving<br/>
        • Cybersecurity and digital citizenship<br/>
        • System troubleshooting and maintenance<br/>
        <b>Key Skill:</b> Thinking logically and maintaining secure, healthy systems
    </div>
    
    <div class="practice-box">
        <b>Quick Review Exercise:</b><br/>
        <br/>
        <b>1. Hardware Match:</b><br/>
        Match component to function:<br/>
        CPU = Brain/Processor<br/>
        RAM = Short-term memory<br/>
        HDD/SSD = Long-term storage<br/>
        Motherboard = Connects all components<br/>
        PSU = Provides power<br/>
        <br/>
        <b>2. Software Skills:</b><br/>
        Identify the tool for each task:<br/>
        • Professional documents = Microsoft Word<br/>
        • Data analysis = Microsoft Excel<br/>
        • Presentations = Microsoft PowerPoint<br/>
        • System troubleshooting = Task Manager<br/>
        • File compression = ZIP folders<br/>
        <br/>
        <b>3. Networking Concepts:</b><br/>
        Define these terms:<br/>
        • LAN = Local Area Network<br/>
        • IP Address = Device identifier on network<br/>
        • Router = Directs network traffic<br/>
        • DNS = Converts domain names to IP addresses<br/>
        • HTTP/HTTPS = Web protocols (unsecure/secure)<br/>
        <br/>
        <b>4. Security Practices:</b><br/>
        List three security best practices:<br/>
        1. Use strong, unique passwords<br/>
        2. Enable two-factor authentication<br/>
        3. Regular software updates<br/>
        4. Be cautious of phishing emails<br/>
        5. Regular data backups
    </div>
    
    <hr/>
    
    <h3>Part 2: Final Examination</h3>
    <div style="margin-left: 20px;">
        
        <div style="background-color: #f0f0f0; border: 3px solid #000;">
            <b>Module 1: The Machine & The Interface (Weeks 1–2)</b><br />
            <br />
            
            1. Which keyboard shortcut shows the desktop instantly?<br />
            a) Win + E<br />
            b) Win + D<br />
            c) Alt + Tab<br />
            d) Ctrl + Esc<br />
            <br />
            2. What is the main purpose of RAM in a computer?<br />
            a) Long-term storage<br />
            b) Running applications temporarily<br />
            c) Power supply<br />
            d) Network connection<br />
            <br />
            3. How can you reveal hidden file extensions in Windows?<br />
            a) Through Task Manager<br />
            b) In Folder Options → View<br />
            c) Using Control Panel → System<br />
            d) Via CMD commands<br />
            <br />
            4. Which CMD command lists all files and folders in the current directory?<br />
            a) cd<br />
            b) mkdir<br />
            c) dir<br />
            d) ls<br />
            <br />
            5. What does the command 'ping google.com' test?<br />
            a) IP configuration<br />
            b) Network connectivity<br />
            c) DNS resolution<br />
            d) Hard drive speed<br />
            <br />
            6. In networking, what device directs data between different networks?<br />
            a) Switch<br />
            b) Modem<br />
            c) Router<br />
            d) Hub<br />
            <br />
            7. What is the binary equivalent of the decimal number 10?<br />
            a) 1010<br />
            b) 0101<br />
            c) 1001<br />
            d) 1100<br />
            <br />
            8. Which ASCII value represents the letter 'A'?<br />
            a) 65<br />
            b) 97<br />
            c) 48<br />
            d) 32<br />
            <br />
            9. What is the role of a Default Gateway?<br />
            a) Connects to the ISP<br />
            b) Routes traffic outside the local network<br />
            c) Assigns IP addresses<br />
            d) Acts as a firewall<br />
            <br />
            10. Which cable type is commonly used for wired Ethernet?<br />
                a) HDMI<br />
                b) USB-C<br />
                c) RJ45<br />
                d) VGA<br />
            <br />
            11. How many bits make up one ASCII character?<br />
                a) 4<br />
                b) 8<br />
                c) 16<br />
                d) 32<br />
            <br />
            12. What is the primary function of a network switch?<br />
                a) Connects multiple devices within a LAN<br />
                b) Connects to the internet<br />
                c) Provides wireless access<br />
                d) Assigns IP addresses<br />
            <br />
            13. Which Windows tool shows real-time CPU and RAM usage?<br />
                a) Device Manager<br />
                b) Task Manager<br />
                c) System Information<br />
                d) Resource Monitor<br />
            <br />
            14. What happens if you change a '.txt' file extension to '.exe'?<br />
                a) It becomes an executable program<br />
                b) It becomes encrypted<br />
                c) Windows warns about the change<br />
                d) It deletes automatically<br />
            <br />
            15. Which command tests connectivity and shows response times?<br />
                a) ipconfig<br />
                b) tracert<br />
                c) netstat<br />
                d) ping<br />
            <br />
            16. What does LAN stand for?<br />
                a) Large Access Network<br />
                b) Local Area Network<br />
                c) Linked Application Node<br />
                d) Longitudinal Address Network<br />
            <br />
            17. How does a modem differ from a router?<br />
                a) Modem connects to ISP, router directs local traffic<br />
                b) Modem assigns IP addresses, router connects devices<br />
                c) Modem provides Wi-Fi, router provides cable connection<br />
                d) Modem is wireless, router is wired<br />
            <br />
            18. What is DNS used for?<br />
                a) Encrypting data<br />
                b) Storing files<br />
                c) Translating domain names to IP addresses<br />
                d) Blocking websites<br />
            <br />
            19. Which feature allows snapping windows to screen edges?<br />
                a) Snap Assist<br />
                b) Task View<br />
                c) Virtual Desktops<br />
                d) Aero Peek<br />
            <br />
            20. How many bytes are in 1 kilobyte (in computing)?<br />
                a) 1000<br />
                b) 1024<br />
                c) 500<br />
                d) 2048<br />
            <br />

            </div>
             <br /> <br />

        <div style="background-color: #f0f0f0; border: 3px solid #000;">
            <br />
            <b>Module 2: Microsoft Word Mastery (Weeks 3–4)</b><br />
            <br />
            1. What is the primary use of the Format Painter?<br />
            a) Changing page color<br />
            b) Copying formatting<br />
            c) Inserting images<br />
            d) Creating tables<br />
            <br />
            2. How do you ensure a header appears on every page?<br />
            a) Copy and paste it<br />
            b) Use the Header & Footer tools<br />
            c) Insert a watermark<br />
            d) Use page breaks<br />
            <br />
            3. Which feature automatically creates a Table of Contents?<br />
            a) SmartArt<br />
            b) References → Table of Contents<br />
            c) Insert → Index<br />
            d) Mail Merge<br />
            <br />
            4. What is the difference between Portrait and Landscape?<br />
            a) Paper size<br />
            b) Page orientation<br />
            c) Margin settings<br />
            d) Font style<br />
            <br />
            5. How do you insert a manual page break?<br />
            a) Ctrl + Enter<br />
            b) Shift + Enter<br />
            c) Alt + Enter<br />
            d) Ctrl + Shift + Enter<br />
            <br />
            6. Which tool tracks changes made by multiple users?<br />
            a) Comments<br />
            b) Track Changes<br />
            c) Compare<br />
            d) Version History<br />
            <br />
            7. Why use Styles instead of manual formatting?<br />
            a) Styles are faster and ensure consistency<br />
            b) Styles use less memory<br />
            c) Styles cannot be edited<br />
            d) Styles only work in print layout<br />
            <br />
            8. Which feature lets you send personalized letters to many recipients?<br />
            a) Mail Merge<br />
            b) Envelopes & Labels<br />
            c) Quick Parts<br />
            d) Templates<br />
            <br />
            9. How do you insert a footnote?<br />
            a) References → Insert Footnote<br />
            b) Insert → Footnote<br />
            c) Layout → Footnotes<br />
            d) Review → Add Footnote<br />
            <br />
            10. What does "Save As" allow that "Save" does not?<br />
                a) Save to cloud<br />
                b) Save with a new name/location<br />
                c) Save as PDF<br />
                d) Save with password<br />
            <br />
            11. How do you wrap text around an image?<br />
                a) Right-click image → Wrap Text<br />
                b) Format → Text Direction<br />
                c) Insert → Text Box<br />
                d) Layout → Arrange<br />
            <br />
            12. What is a hanging indent commonly used for?<br />
                a) Headers<br />
                b) Bibliographies<br />
                c) Tables<br />
                d) Images<br />
            <br />
            13. Which tool compares two documents?<br />
                a) Review → Compare<br />
                b) View → Side by Side<br />
                c) File → Info → Versions<br />
                d) References → Compare Documents<br />
            <br />
            14. How do you create a multi-level list?<br />
                a) Home → Multilevel List<br />
                b) Insert → List<br />
                c) Layout → Lists<br />
                d) Design → List Styles<br />
            <br />
            15. What is the purpose of the Document Inspector?<br />
                a) Check spelling<br />
                b) Remove hidden metadata<br />
                c) Change formatting<br />
                d) Insert comments<br />
            <br />
            16. How do you protect a document with a password?<br />
                a) File → Info → Protect Document<br />
                b) Review → Protect<br />
                c) View → Protect<br />
                d) Insert → Password<br />
            <br />
            17. What is the difference between a footer and a footnote?<br />
                a) Footer is at page bottom, footnote is at document end<br />
                b) Footer repeats on every page, footnote is per-page reference<br />
                c) Footer is for images, footnote is for text<br />
                d) Footer is editable, footnote is not<br />
            <br />
            18. How do you insert a hyperlink?<br />
                a) Ctrl + K<br />
                b) Ctrl + H<br />
                c) Ctrl + L<br />
                d) Ctrl + I<br />
            <br />
            19. Which view shows non-printing characters like spaces and paragraph marks?<br />
                a) Read Mode<br />
                b) Print Layout<br />
                c) Draft<br />
                d) Show/Hide ¶<br />
            <br />
            20. What does the Clear All Formatting button do?<br />
                a) Deletes text<br />
                b) Removes all styles and formatting<br />
                c) Clears page setup<br />
                d) Resets margins<br />
            <br />
            </div>

            <br /><br />

            <div style="background-color: #f2f3f4; border: 3px solid #eee;">
            <br />
            <b>Module 3: Microsoft Excel - Data Power (Weeks 5–6)</b><br />
            <br />
            1. What does the $ sign do in a cell reference like $A$1?<br />
            a) Makes it relative<br />
            b) Makes it absolute<br />
            c) Converts to text<br />
            d) Adds currency format<br />
            <br />
            2. Which function returns the highest value in a range?<br />
            a) MAX<br />
            b) MIN<br />
            c) TOP<br />
            d) HIGH<br />
            <br />
            3. How do you apply a filter to a dataset?<br />
            a) Data → Filter<br />
            b) Home → Sort & Filter<br />
            c) Insert → Filter<br />
            d) Review → Filter<br />
            <br />
            4. What does VLOOKUP do?<br />
            a) Looks up values vertically<br />
            b) Looks up values horizontally<br />
            c) Counts cells<br />
            d) Sorts data<br />
            <br />
            5. Which chart is best for showing proportions?<br />
            a) Line Chart<br />
            b) Pie Chart<br />
            c) Bar Chart<br />
            d) Scatter Plot<br />
            <br />
            6. How do you freeze the top row in Excel?<br />
            a) View → Freeze Panes → Freeze Top Row<br />
            b) Home → Freeze<br />
            c) Data → Freeze Header<br />
            d) Insert → Freeze<br />
            <br />
            7. What is Data Validation used for?<br />
            a) Restricting input in cells<br />
            b) Validating formulas<br />
            c) Checking spelling<br />
            d) Protecting sheets<br />
            <br />
            8. How do you remove duplicate rows?<br />
            a) Data → Remove Duplicates<br />
            b) Home → Clear → Duplicates<br />
            c) Review → Delete Duplicates<br />
            d) Insert → Dedupe<br />
            <br />
            9. What does the IF function return if the condition is false?<br />
            a) TRUE<br />
            b) FALSE<br />
            c) The false_value argument<br />
            d) #N/A<br />
            <br />
            10. How do you create a Pivot Table?<br />
                a) Insert → Pivot Table<br />
                b) Data → Pivot Table<br />
                c) Formulas → Pivot Table<br />
                d) Review → Pivot Table<br />
            <br />
            11. Which function counts only numeric cells?<br />
                a) COUNT<br />
                b) COUNTA<br />
                c) COUNTIF<br />
                d) COUNTBLANK<br />
            <br />
            12. What is the difference between COUNT and COUNTA?<br />
                a) COUNT counts numbers, COUNTA counts all non-empty cells<br />
                b) COUNT counts text, COUNTA counts numbers<br />
                c) COUNT is for summing, COUNTA is for averaging<br />
                d) COUNT is for dates, COUNTA is for text<br />
            <br />
            13. How do you protect specific cells from editing?<br />
                a) Review → Protect Sheet → Select locked cells<br />
                b) Format Cells → Protection → Locked<br />
                c) Both a and b<br />
                d) Data → Protect Range<br />
            <br />
            14. What does SUMIF do?<br />
                a) Sums cells that meet a condition<br />
                b) Sums all cells in a range<br />
                c) Sums every other cell<br />
                d) Sums filtered cells only<br />
            <br />
            15. How do you create a named range?<br />
                a) Formulas → Define Name<br />
                b) Data → Named Range<br />
                c) Home → Name Manager<br />
                d) Insert → Name<br />
            <br />
            16. Which tool highlights cells based on rules?<br />
                a) Conditional Formatting<br />
                b) Data Bars<br />
                c) Cell Styles<br />
                d) Format Painter<br />
            <br />
            17. What does Paste Special → Transpose do?<br />
                a) Pastes formulas only<br />
                b) Switches rows to columns<br />
                c) Pastes values only<br />
                d) Pastes formatting only<br />
            <br />
            18. How do you group dates in a Pivot Table?<br />
                a) Right-click date field → Group<br />
                b) Pivot Table Tools → Group<br />
                c) Data → Group<br />
                d) Insert → Group<br />
            <br />
            19. What is the difference between a formula and a function?<br />
                a) A function is a predefined formula<br />
                b) A formula includes functions<br />
                c) Both are the same<br />
                d) Formulas are manual, functions are automatic<br />
            <br />
            20. How do you create a dropdown list in a cell?<br />
                a) Data → Data Validation → List<br />
                b) Home → Dropdown<br />
                c) Insert → List<br />
                d) Formulas → List Manager<br />
            <br />
            </div>

            <br /> <br />

            <div style="background-color: #f0f0f0; border: 3px solid #000;">
            <br />
            <b>Module 4: PowerPoint Mastery</b><br />
            <br />
            1. What is the main purpose of Slide Master?<br />
            a) Adding animations<br />
            b) Creating consistent slide layouts<br />
            c) Recording narrations<br />
            d) Inserting videos<br />
            <br />
            2. How do you make an object appear on click during a presentation?<br />
            a) Add an entrance animation<br />
            b) Use triggers<br />
            c) Set animation to "On Click"<br />
            d) All of the above<br />
            <br />
            3. Which PowerPoint feature lets you reuse slides from another deck?<br />
            a) Reuse Slides<br />
            b) Import Slides<br />
            c) Slide Library<br />
            d) Slide Sorter<br />
            <br />
            4. How do you set a video to play automatically?<br />
            a) Playback → Start: Automatically<br />
            b) Animations → Start With Previous<br />
            c) Transitions → Advance Slide<br />
            d) Slide Show → Set Up Show<br />
            <br />
            5. What is the purpose of the "Morph" transition?<br />
            a) Smooth animation between slides<br />
            b) Adding sound effects<br />
            c) Changing slide size<br />
            d) Inserting 3D models<br />
            <br />
            6. How do you hide a slide during a presentation?<br />
            a) Right-click slide → Hide Slide<br />
            b) Slide Show → Hide Slide<br />
            c) Both a and b<br />
            d) Delete the slide<br />
            <br />
            7. Which view allows you to edit slide notes?<br />
            a) Notes Page<br />
            b) Outline View<br />
            c) Slide Sorter<br />
            d) Reading View<br />
            <br />
            8. How do you create a custom slide layout?<br />
            a) Slide Master → Insert Layout<br />
            b) Design → Custom Layout<br />
            c) View → Custom Layout<br />
            d) Insert → New Layout<br />
            <br />
            9. What does "Presenter View" allow?<br />
            a) See notes and next slides while presenting<br />
            b) Edit slides during presentation<br />
            c) Record audience reactions<br />
            d) Share screen with participants<br />
            <br />
            10. How do you add a background image to all slides?<br />
                a) Design → Format Background → Apply to All<br />
                b) Insert → Background → Apply All<br />
                c) Slide Master → Background Styles<br />
                d) Both a and c<br />
            <br />
            11. Which tool helps align objects on a slide?<br />
                a) Gridlines and Guides<br />
                b) Align and Distribute<br />
                c) Smart Guides<br />
                d) All of the above<br />
            <br />
            12. How do you create a looping presentation?<br />
                a) Slide Show → Set Up Show → Loop continuously<br />
                b) Transitions → Advance Slide → Loop<br />
                c) Animations → Loop until next slide<br />
                d) File → Options → Loop Presentation<br />
            <br />
            13. What is the "Eye Dropper" tool used for?<br />
                a) Matching colors from an image<br />
                b) Removing backgrounds<br />
                c) Selecting multiple objects<br />
                d) Zooming in<br />
            <br />
            14. How do you add a slide number to all slides?<br />
                a) Insert → Slide Number → Apply to All<br />
                b) Slide Master → Insert Placeholder → Slide Number<br />
                c) Both a and b<br />
                d) Design → Slide Number<br />
            <br />
            15. Which animation type makes an object bounce?<br />
                a) Emphasis → Bounce<br />
                b) Entrance → Bounce<br />
                c) Exit → Bounce<br />
                d) Motion Paths → Bounce<br />
            <br />
            16. How do you save a PowerPoint as a video?<br />
                a) File → Export → Create a Video<br />
                b) File → Save As → MP4<br />
                c) Slide Show → Record → Export Video<br />
                d) Both a and b<br />
            <br />
            17. What is the "Selection Pane" used for?<br />
                a) Managing overlapping objects<br />
                b) Selecting slide layouts<br />
                c) Choosing themes<br />
                d) Sorting slides<br />
            <br />
            18. How do you create a hyperlink within a presentation?<br />
                a) Insert → Link → Place in This Document<br />
                b) Ctrl + K<br />
                c) Right-click text → Hyperlink<br />
                d) All of the above<br />
            <br />
            19. What does "Rehearse Timings" do?<br />
                a) Records time spent on each slide<br />
                b) Practices narration<br />
                c) Sets automatic slide advance times<br />
                d) All of the above<br />
            <br />
            20. How do you password-protect a PowerPoint file?<br />
                a) File → Info → Protect Presentation → Encrypt with Password<br />
                b) Review → Protect Presentation<br />
                c) Slide Show → Set Password<br />
                d) Save As → Tools → General Options<br />
            <br />
            </div>

            <br /><br />

            <div style="background-color: #f2f3f4; border: 3px solid #000;">
            
            <b>Module 5: Web & Security</b><br />
            <br />
            1. What does HTTPS provide that HTTP does not?<br />
            a) Encryption<br />
            b) Faster loading<br />
            c) Larger file support<br />
            d) Better graphics<br />
            <br />
            2. What is the main role of DNS?<br />
            a) Encrypts data<br />
            b) Translates domain names to IP addresses<br />
            c) Blocks malicious sites<br />
            d) Stores web pages<br />
            <br />
            3. Which browser feature prevents tracking?<br />
            a) Incognito Mode<br />
            b) Bookmarks<br />
            c) Extensions<br />
            d) Cache<br />
            <br />
            4. What is a common sign of a phishing email?<br />
            a) Poor grammar<br />
            b) Known sender<br />
            c) Official logo<br />
            d) Personalized greeting<br />
            <br />
            5. How do you check if a website uses a secure connection?<br />
            a) Look for HTTPS and padlock icon<br />
            b) Check the domain extension<br />
            c) View page source<br />
            d) Use Task Manager<br />
            <br />
            6. What does 2FA stand for?<br />
            a) Two-Factor Authentication<br />
            b) Two-File Archive<br />
            c) Two-Function Access<br />
            d) Two-Form Application<br />
            <br />
            7. Which Windows tool ends unresponsive programs?<br />
            a) Task Manager<br />
            b) Device Manager<br />
            c) System Configuration<br />
            d) Command Prompt<br />
            <br />
            8. What is the purpose of a firewall?<br />
            a) Blocks unauthorized access<br />
            b) Speeds up internet<br />
            c) Stores backups<br />
            d) Manages passwords<br />
            <br />
            9. How do you clear browser cache in Chrome?<br />
            a) Settings → Privacy and Security → Clear Browsing Data<br />
            b) Ctrl + Shift + Delete<br />
            c) Both a and b<br />
            d) Ctrl + Alt + Delete<br />
            <br />
            10. What is a strong password characteristic?<br />
                a) Uses personal information<br />
                b) At least 12 characters with mix of letters, numbers, symbols<br />
                c) Same as username<br />
                d) Dictionary word with a number<br />
            <br />
            11. What does "tracert" do in CMD?<br />
                a) Shows the route packets take to a destination<br />
                b) Tests internet speed<br />
                c) Lists IP configuration<br />
                d) Pings a server<br />
            <br />
            12. How can you identify a secure email sender?<br />
                a) Check the "From" address carefully<br />
                b) Look for encryption indicators<br />
                c) Verify with the sender if unsure<br />
                d) All of the above<br />
            <br />
            13. What is digital citizenship?<br />
                a) Responsible use of technology<br />
                b) Buying digital products<br />
                c) Creating online content<br />
                d) Using social media<br />
            <br />
            14. How do you backup files in Windows 10?<br />
                a) Settings → Update & Security → Backup<br />
                b) File History<br />
                c) OneDrive sync<br />
                d) All of the above<br />
            <br />
            15. What is the main risk of using public Wi-Fi?<br />
                a) Unencrypted data transmission<br />
                b) Slower speed<br />
                c) Limited bandwidth<br />
                d) Pop-up ads<br />
            <br />
            16. Which CMD command shows network connections?<br />
                a) netstat<br />
                b) ipconfig<br />
                c) ping<br />
                d) nslookup<br />
            <br />
            17. What is a VPN used for?<br />
                a) Encrypting internet traffic<br />
                b) Hiding IP address<br />
                c) Accessing restricted content<br />
                d) All of the above<br />
            <br />
            18. How do you identify a fake website?<br />
                a) Check URL for misspellings<br />
                b) Look for HTTPS<br />
                c) Verify contact information<br />
                d) All of the above<br />
            <br />
            19. What should you do if you suspect a malware infection?<br />
                a) Run antivirus scan<br />
                b) Disconnect from the internet<br />
                c) Restore from backup<br />
                d) All of the above<br />
            <br />
            20. Why is software updating important for security?<br />
                a) Patches vulnerabilities<br />
                b) Improves performance<br />
                c) Adds new features<br />
                d) All of the above<br />
            <br />

            </div>

            </div>
            

    <hr/>
    
    <div class="completion-box" style="background-color: #e8f5e8; border: 3px solid #4CAF50;">
        <h1 style="color: #2E7D32; text-align: center;">🎓 CONGRATULATIONS! 🎓</h1>
        
        <p style="font-size: 1.2em; text-align: center;">
            <b>You have successfully completed the<br/>
            Foundation to Computing Course!</b>
        </p>
        
        <div style="text-align: center; margin: 20px 0;">
            <div style="display: inline-block; padding: 15px 30px; background-color: #4CAF50; color: white; border-radius: 5px; font-size: 1.1em;">
                <b>Course Completion Statistics:</b><br/>
                8 Weeks • 32 Sessions • 64 Hours of Instruction<br/>
                100+ Skills Learned • 8 Major Projects • 1 Certification Earned
            </div>
        </div>
        
        <p style="text-align: center; font-size: 1.1em;">
            <b>You are now equipped with:</b><br/>
            <br/>
            ✓ Foundational computer hardware knowledge<br/>
            ✓ Proficiency in Microsoft Office Suite<br/>
            ✓ Basic networking and internet understanding<br/>
            ✓ Cybersecurity awareness and best practices<br/>
            ✓ Problem-solving and logical thinking skills<br/>
            ✓ Professional digital communication abilities<br/>
            ✓ System maintenance and troubleshooting skills
        </p>
        
      
       
    </div>`
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