//5

function guessColor(color) {
    const box = document.getElementById('colorBox');
    const rgb = window.getComputedStyle(box).backgroundColor;
    const result = document.getElementById('result');
    
    // Extract RGB values
    const rgbValues = rgb.match(/\\d+/g);
    const r = parseInt(rgbValues[0]);
    const g = parseInt(rgbValues[1]);
    const b = parseInt(rgbValues[2]);
    
    let correct = false;
    let message = '';
    
    if (color === 'red' && r > g && r > b) {
        correct = true;
        message = 'Correct! Red is dominant in this color.';
    } else if (color === 'green' && g > r && g > b) {
        correct = true;
        message = 'Correct! Green is dominant in this color.';
    } else if (color === 'blue' && b > r && b > g) {
        correct = true;
        message = 'Correct! Blue is dominant in this color.';
    } else {
        message = 'Try again! Look at which slider is highest.';
    }
    
    result.textContent = message;
    result.style.color = correct ? '#4CAF50' : '#FF6B6B';
}

function updateColor(value, color) {
    const redValue = document.getElementById('redValue');
    const greenValue = document.getElementById('greenValue');
    const blueValue = document.getElementById('blueValue');
    const colorBox = document.getElementById('colorBox');
    const rgbValue = document.getElementById('rgbValue');
    const hexValue = document.getElementById('hexValue');
    
    // Update the specific value
    if (color === 'red') redValue.textContent = value;
    if (color === 'green') greenValue.textContent = value;
    if (color === 'blue') blueValue.textContent = value;
    
    // Get current values
    const r = parseInt(redValue.textContent);
    const g = parseInt(greenValue.textContent);
    const b = parseInt(blueValue.textContent);
    
    // Update color box
    colorBox.style.backgroundColor = `
                    rgb($ {
                        r
                    }, $ {
                        g
                    }, $ {
                        b
                    })`;
    
    // Update RGB text
    rgbValue.textContent = `
                    rgb($ {
                        r
                    }, $ {
                        g
                    }, $ {
                        b
                    })`;
    
    // Convert to HEX
    const hex = "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
    hexValue.textContent = hex;
}

function componentToHex(c) {
    const hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}
    








//6
function updateBoxModel(property, value) {
    const box = document.getElementById('boxModelDemo');
    const contentBox = box.querySelector('div > div');

    switch (property) {
        case 'content':
            contentBox.style.width = value + 'px';
            contentBox.textContent = `Content (${value}px)`;
            document.getElementById('contentWidthValue').textContent = value;
            break;
        case 'padding':
            box.style.padding = value + 'px';
            document.getElementById('paddingValue').textContent = value;
            document.getElementById('paddingControlValue').textContent = value;
            break;
        case 'border':
            box.style.borderWidth = value + 'px';
            document.getElementById('borderValue').textContent = value;
            document.getElementById('borderControlValue').textContent = value;
            break;
        case 'margin':
            box.style.margin = value + 'px auto';
            document.getElementById('marginValue').textContent = value;
            document.getElementById('marginControlValue').textContent = value;
            break;
    }

    // Update calculation
    const contentWidth = parseInt(contentBox.style.width) || 200;
    const padding = parseInt(box.style.padding) || 20;
    const border = parseInt(box.style.borderWidth) || 10;
    const margin = parseInt(box.style.margin) || 20;

    const total = contentWidth + (padding * 2) + (border * 2) + (margin * 2);
    document.getElementById('widthCalculation').textContent =
        `Total Width = Content(${contentWidth}) + Padding(${padding*2}) + Border(${border*2}) + Margin(${margin*2}) = ${total}px`;
}

    function resetBoxModel() {
    updateBoxModel('content', 200);
    updateBoxModel('padding', 20);
    updateBoxModel('border', 10);
    updateBoxModel('margin', 20);

    // Reset sliders
    document.querySelector('input[oninput*="content"]').value = 200;
    document.querySelector('input[oninput*="padding"]').value = 20;
    document.querySelector('input[oninput*="border"]').value = 10;
    document.querySelector('input[oninput*="margin"]').value = 20;
}


//7


// Load Google Fonts for preview
const link = document.createElement('link');
link.href = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;700&family=Merriweather:wght@300;400;700&family=Playfair+Display:wght@400;700&family=Comic+Neue:wght@400;700&family=Pacifico&family=Courier+New&family=Source+Sans+Pro&family=Open+Sans&family=Lora&family=Quicksand&display=swap';
link.rel = 'stylesheet';
document.head.appendChild(link);

function updateFontPreview() {
    const preview = document.getElementById('fontPreview');
    const fontFamily = document.getElementById('fontFamily').value;
    const fontSize = document.getElementById('fontSize').value;
    const lineHeight = document.getElementById('lineHeight').value;
    const letterSpacing = document.getElementById('letterSpacing').value;
    const fontWeight = document.getElementById('fontWeight').value;
    
    preview.style.fontFamily = fontFamily;
    preview.style.fontSize = fontSize + 'px';
    preview.style.lineHeight = lineHeight;
    preview.style.letterSpacing = letterSpacing + 'px';
    preview.style.fontWeight = fontWeight;
    
    // Update value displays
    document.getElementById('fontSizeValue').textContent = fontSize;
    document.getElementById('lineHeightValue').textContent = lineHeight;
    document.getElementById('letterSpacingValue').textContent = letterSpacing;
    
    // Update CSS display
    const cssText = `
                    font - family: $ {
                        fontFamily
                    };
                    font - size: $ {
                        fontSize
                    }
                    px;
                    line - height: $ {
                        lineHeight
                    };
                    letter - spacing: $ {
                        letterSpacing
                    }
                    px;
                    font - weight: $ {
                        fontWeight
                    };
                    `;
    document.getElementById('currentCSS').textContent = cssText;
}

function setTextAlign(alignment) {
    const preview = document.getElementById('fontPreview');
    preview.style.textAlign = alignment;
    updateFontPreview(); // Update CSS display
}

// Initialize
updateFontPreview();
    



//8

const genreData = {
    scifi: {
        title: "Science Fiction",
        description: "Futuristic, high-tech, space adventures. Use glowing colors, geometric fonts, and tech elements.",
        colors: ["#00FFFF", "#FF00FF", "#1A1A2E", "#16213E"],
        font: "'Montserrat', sans-serif"
    },
    fantasy: {
        title: "Fantasy",
        description: "Magical, medieval, epic adventures. Use gold, deep reds, elegant serif fonts.",
        colors: ["#D4AF37", "#8B4513", "#2C1810", "#5D4037"],
        font: "'Playfair Display', serif"
    },
    horror: {
        title: "Horror",
        description: "Scary, suspenseful, dark themes. Use blood red, black, distressed fonts.",
        colors: ["#FF0000", "#000000", "#0A0A0A", "#330000"],
        font: "'Impact', sans-serif"
    },
    comedy: {
        title: "Comedy",
        description: "Funny, lighthearted, playful. Use bright colors, rounded fonts, and humor.",
        colors: ["#FF69B4", "#FFD700", "#FFE4E1", "#87CEEB"],
        font: "'Comic Neue', cursive"
    },
    action: {
        title: "Action",
        description: "Exciting, fast-paced, adrenaline. Use red, orange, bold blocky fonts.",
        colors: ["#FF0000", "#FF8C00", "#8B0000", "#333333"],
        font: "'Bebas Neue', sans-serif"
    },
    adventure: {
        title: "Adventure",
        description: "Exploration, discovery, journey. Use earth tones, green, adventurous fonts.",
        colors: ["#006400", "#8B4513", "#DAA520", "#2E8B57"],
        font: "'Oswald', sans-serif"
    },
    romance: {
        title: "Romance",
        description: "Love, emotions, relationships. Use soft pinks, purples, elegant cursive fonts.",
        colors: ["#FFB6C1", "#DDA0DD", "#FFE4E1", "#F8BBD0"],
        font: "'Dancing Script', cursive"
    },
    mystery: {
        title: "Mystery",
        description: "Suspense, clues, detective work. Use dark purples, blues, mysterious fonts.",
        colors: ["#4B0082", "#191970", "#2F4F4F", "#483D8B"],
        font: "'Courier New', monospace"
    }
};

function selectGenre(genre) {
    const info = document.getElementById('genreInfo');
    const data = genreData[genre];

    document.getElementById('genreTitle').textContent = data.title;
    document.getElementById('genreDescription').textContent = data.description;

    const colorsDiv = document.getElementById('genreColors');
    colorsDiv.innerHTML = '';
    data.colors.forEach(color => {
        const colorBox = document.createElement('div');
        colorBox.style.width = '40px';
        colorBox.style.height = '40px';
        colorBox.style.background = color;
        colorBox.style.borderRadius = '5px';
        colorBox.style.display = 'inline-block';
        colorBox.style.marginRight = '5px';
        colorBox.title = color;
        colorsDiv.appendChild(colorBox);
    });

    info.style.display = 'block';
}

function updatePoster() {
    const title = document.getElementById('movieTitle').value;
    const tagline = document.getElementById('movieTagline').value;
    const genre = document.getElementById('movieGenre').value;
    const bgColor = document.getElementById('bgColor').value;
    const textColor = document.getElementById('textColor').value;
    const btnColor1 = document.getElementById('btnColor1').value;
    const btnColor2 = document.getElementById('btnColor2').value;

    // Update preview
    document.getElementById('previewTitle').textContent = title;
    document.getElementById('previewTagline').textContent = tagline;
    document.getElementById('previewGenre').textContent = genreData[genre].title;

    document.getElementById('previewTitle').style.color = textColor;
    document.getElementById('previewTagline').style.color = textColor;
    document.querySelector('#posterPreview h3').style.color = textColor;
    document.querySelectorAll('#posterPreview .info-item div:first-child').forEach(el => {
        el.style.color = textColor;
    });

    document.getElementById('posterBackground').style.background = `linear-gradient(135deg, ${bgColor} 0%, ${darkenColor(bgColor, 20)} 100%)`;

    const button = document.getElementById('previewButton');
    button.style.background = `linear-gradient(45deg, ${btnColor1}, ${btnColor2})`;

    // Update font based on genre
    document.getElementById('previewTitle').style.fontFamily = genreData[genre].font;
}

function darkenColor(color, percent) {
    const num = parseInt(color.replace("#", ""), 16);
    const amt = Math.round(2.55 * percent);
    const R = (num >> 16) - amt;
    const G = (num >> 8 & 0x00FF) - amt;
    const B = (num & 0x0000FF) - amt;
    return "#" + (0x1000000 + (R < 255 ? R < 1 ? 0 : R : 255) * 0x10000 +
        (G < 255 ? G < 1 ? 0 : G : 255) * 0x100 +
        (B < 255 ? B < 1 ? 0 : B : 255)).toString(16).slice(1);
}

function resetPoster() {
    document.getElementById('movieTitle').value = 'STAR VOYAGERS';
    document.getElementById('movieTagline').value = 'A journey beyond the stars';
    document.getElementById('movieGenre').value = 'scifi';
    document.getElementById('bgColor').value = '#1A1A2E';
    document.getElementById('textColor').value = '#00FFFF';
    document.getElementById('btnColor1').value = '#FF6B6B';
    document.getElementById('btnColor2').value = '#4ECDC4';

    updatePoster();
}

function downloadPoster() {
    const settings = {
        title: document.getElementById('movieTitle').value,
        tagline: document.getElementById('movieTagline').value,
        genre: document.getElementById('movieGenre').value,
        bgColor: document.getElementById('bgColor').value,
        textColor: document.getElementById('textColor').value,
        btnColor1: document.getElementById('btnColor1').value,
        btnColor2: document.getElementById('btnColor2').value
    };

    const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(settings, null, 2));
    const downloadAnchor = document.createElement('a');
    downloadAnchor.setAttribute("href", dataStr);
    downloadAnchor.setAttribute("download", "movie_poster_settings.json");
    document.body.appendChild(downloadAnchor);
    downloadAnchor.click();
    downloadAnchor.remove();

    alert('Settings saved! You can load these in your project.');
}

// Initialize
selectGenre('scifi');
updatePoster();



//lv2
//9-35

// Simple test sounds for the demo
function playTestSound(type) {
    const audio = new Audio();
    
    switch(type) {
        case 'jump':
            audio.src = 'https://assets.mixkit.co/sfx/preview/mixkit-player-jumping-in-a-video-game-2043.mp3';
            break;
        case 'coin':
            audio.src = 'https://assets.mixkit.co/sfx/preview/mixkit-winning-chimes-2015.mp3';
            break;
        case 'explosion':
            audio.src = 'https://assets.mixkit.co/sfx/preview/mixkit-bomb-explosion-in-battle-2800.mp3';
            break;
    }
    
    audio.play().catch(e => console.log("Sound test failed:", e));
}


//9-36

let selectedGameType = '';

function selectGame(type) {
    selectedGameType = type;
    const gameName = type === 'shooter' ? 'Space Shooter' : 'Platformer';
    
    document.getElementById('selectedGame').style.display = 'block';
    document.getElementById('gameName').textContent = gameName;
    
    // Show the appropriate guide
    if (type === 'shooter') {
        document.getElementById('shooterGuide').style.display = 'block';
        document.getElementById('platformerGuide').style.display = 'none';
    } else {
        document.getElementById('shooterGuide').style.display = 'none';
        document.getElementById('platformerGuide').style.display = 'block';
    }
}

function startBuilding() {
    if (!selectedGameType) {
        alert('Please select a game type first!');
        return;
    }
    
    alert(`
            Excellent!Let 's build your ${selectedGameType === ' shooter ' ? ' Space Shooter ' : ' Platformer '} game!\n\nRemember:\n1. Start with basic movement\n2. Add one enemy type\n3. Implement collision\n4. Add scoring\n5. Polish with sounds and effects\n\nYou can do it! 🎮`);

            window.scrollTo(0, 0);
        }
    