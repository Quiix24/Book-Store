# TimeToRead - Digital Library Web Application

[![HTML](https://img.shields.io/badge/HTML-E34F26?style=flat&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS](https://img.shields.io/badge/CSS-1572B6?style=flat&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)](https://www.mysql.com/)

## 📖 Project Overview

TimeToRead is a web-based digital library application that provides users with access to a curated collection of books across multiple genres. Built with PHP, HTML, CSS, and MySQL, this project serves as a platform for book enthusiasts to explore and read various literary works online.

### 🎯 Mission Statement
*"To inspire a love of reading and storytelling in everyone we encounter. We are dedicated to providing a welcoming and inclusive environment where readers of all backgrounds can explore new genres, discover new authors, and embark on unforgettable literary journeys."*

## ✨ Features

### 📚 Genre-Based Book Collection
- **Action**: Heart-pounding adventures and gripping narratives
  - The Three Musketeers
  - Treasure Island  
  - Adventures of Tom Sawyer

- **Drama**: Intense character-driven narratives and emotional storytelling
  - A Doll's House
  - Hamlet
  - Romeo and Juliet

- **Romance**: Tales of passion, love, and happily ever afters
  - The Time Traveler's Wife
  - Jane Eyre
  - Northanger Abbey
  - The Princess Bride

- **Horror**: Spine-tingling stories and psychological thrillers
  - At the Mountains of Madness
  - Dracula
  - The Tell-Tale Heart

### 👥 User Management System
- **User Registration**: New users can create accounts with personal information
- **User Authentication**: Secure login system with database integration
- **Session Management**: User sessions for personalized experience

### 🎨 User Interface
- **Responsive Design**: Mobile-friendly layouts
- **Intuitive Navigation**: Easy-to-use sidebar and navigation elements
- **Visual Appeal**: Custom logos and styling for each genre
- **Consistent Branding**: TimeToRead branding throughout the application

## 🏗️ Project Structure

```
Project1/
├── README.md                 # Project documentation
├── Project_Idea.txt         # Initial project concept
├── books/                   # Book collections organized by genre
│   ├── action/
│   │   ├── the_three_musketeers/
│   │   ├── Tom Sawyer/
│   │   └── Treasure Island/
│   ├── drama/
│   │   ├── a dolls house/
│   │   ├── hamlet/
│   │   └── romeo and juliet/
│   ├── horror/
│   │   ├── At the Mountains of Madness/
│   │   ├── Dracula/
│   │   └── The Tell-Tale Heart/
│   └── romance/
│       ├── Audrey Niffenegger - The Time Traveler's Wife/
│       ├── jane eyre/
│       ├── NorAbbey/
│       └── the princess bride/
├── images/                  # Image assets
├── logos/                   # Logo and icon files
├── styles/                  # CSS stylesheets
│   ├── about.css
│   ├── action.css
│   ├── drama.css
│   ├── horror.css
│   ├── login.css
│   ├── mySyle.css
│   ├── romance.css
│   └── sign.css
└── index/                   # PHP application files
    ├── about.php            # About page
    ├── action.php           # Action genre page
    ├── config.php           # Database configuration
    ├── drama.php            # Drama genre page
    ├── horror.php           # Horror genre page
    ├── index.php            # Main homepage
    ├── login_handler.php    # Login processing
    ├── login.php            # Login form
    ├── romance.php          # Romance genre page
    ├── signin_handler.php   # Registration processing
    └── signin.php           # Registration form
```

## 🛠️ Technical Architecture

### Frontend Technologies
- **HTML5**: Semantic markup and structure
- **CSS3**: Responsive styling and layout
- **JavaScript**: Client-side interactivity

### Backend Technologies
- **PHP**: Server-side programming and logic
- **MySQL**: Database management for user data

### Key Components

#### Database Schema
```sql
-- Users table for authentication
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fistname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### Configuration
- Database connection managed through [config.php](index/config.php)
- Modular design for easy maintenance and scalability

## 🚀 Installation & Setup

### Prerequisites
- **XAMPP** or **WAMP** (Apache, MySQL, PHP)
- Web browser (Chrome, Firefox, Safari, Edge)

### Installation Steps

1. **Clone or Download the Project**
   ```bash
   # If using Git
   git clone [repository-url]
   
   # Or download and extract the ZIP file
   ```

2. **Setup Web Server**
   - Copy the project folder to your web server directory
   - For XAMPP: `C:\xampp\htdocs\`
   - For WAMP: `C:\wamp\www\`

3. **Database Configuration**
   ```sql
   -- Create database
   CREATE DATABASE projectdb;
   
   -- Create users table
   USE projectdb;
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       fistname VARCHAR(50) NOT NULL,
       lastname VARCHAR(50) NOT NULL,
       email VARCHAR(100) UNIQUE NOT NULL,
       password VARCHAR(255) NOT NULL,
       age INT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. **Start Services**
   - Start Apache and MySQL services
   - Access the application at `http://localhost/Project1/index/`

### Database Connection
Update [config.php](index/config.php) if needed:
```php
<?php
$con = mysqli_connect("localhost","root","","projectdb") 
    or die ("Error: Cannot connect to server");
?>
```

## 💻 Usage Guide

### For Readers
1. **Browse Books**: Navigate through different genres from the homepage
2. **Create Account**: Register using the sign-in form
3. **Login**: Access your account through the login system
4. **Read Books**: Click on book covers to access PDF files
5. **Navigate**: Use the sidebar for easy page navigation

### For Administrators
- User management through MySQL database
- Add new books by organizing files in genre folders
- Customize styling through CSS files
- Monitor user registration and activity

## 🎯 Core Concepts & Learning Objectives

### Web Development Concepts Demonstrated

1. **Frontend Development**
   - HTML structure and semantics
   - CSS styling and responsive design
   - User interface design principles

2. **Backend Development**
   - PHP server-side programming
   - Database integration and management
   - Form handling and validation

3. **Database Design**
   - Relational database concepts
   - User authentication and session management
   - SQL queries and data manipulation

4. **File Organization**
   - Project structure and modularity
   - Asset management (images, PDFs, CSS)
   - Separation of concerns

5. **User Experience**
   - Navigation design
   - Content organization
   - Accessibility considerations

## 👨‍💻 Development Team

- **Ahmed Mohamed**: 221003440
- **Belal Wlid**: 221002080

*Web Programming Course - Term 4*

## 🔮 Future Enhancements

### Potential Features
- [ ] Advanced search functionality
- [ ] User reading history and bookmarks
- [ ] Book rating and review system
- [ ] Admin panel for content management
- [ ] Advanced user profiles
- [ ] Reading progress tracking
- [ ] Social features (sharing, recommendations)
- [ ] Mobile app development
- [ ] Enhanced security measures
- [ ] Book upload functionality for users

### Technical Improvements
- [ ] Password hashing and security enhancement
- [ ] Input validation and sanitization
- [ ] Error handling and logging
- [ ] Code optimization and refactoring
- [ ] API development for mobile integration

## 📄 License

This project is developed for educational purposes as part of a Web Programming course.

## 🤝 Contributing

This is an academic project. For educational purposes, feel free to:
1. Fork the repository
2. Create feature branches
3. Submit pull requests
4. Report issues or suggestions

## 📞 Support

For questions or support related to this project, contact:
- Ahmed Mohamed: [ahmed.email@example.com]
- Belal Wlid: [belal.email@example.com]

---

**TimeToRead** - *Where Every Page Turns Into an Adventure* 📖✨