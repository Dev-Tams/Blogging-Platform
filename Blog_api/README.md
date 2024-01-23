
# Blogging Platform RESTful API (Built with PHP)

## Overview

This project involves the creation of a RESTful API for a blogging platform using PHP, providing essential functionalities for user authentication, authorization, and blog post management. Users can register, log in securely, and perform operations such as creating, reading, updating, and deleting blog posts.

## Features

### User Authentication and Authorization

1. **User Registration:**
   - Allows users to register by providing necessary information.
   - Validates and stores user data securely.

2. **User Login:**
   - Implements JWT authentication for secure user login.
   - Generates and provides a JWT token upon successful authentication.

3. **Authorization:**
   - Ensures that only authorized users can perform actions like creating, updating, and deleting blog posts.
   - Implements a role-based access control system for enhanced security.

### Blog Post Management

4. **Create Blog Post:**
   - Provides an endpoint for users to create a new blog post.
   - Requires a title, content, and author information.

5. **Read Blog Post:**
   - Implements an endpoint to retrieve blog posts, either all posts or a specific one.
   - Returns details such as title, content, author, and timestamp.

6. **Update Blog Post:**
   - Allows users to update their own blog posts with a new title or content.
   - Validates and ensures proper authorization before allowing updates.

7. **Delete Blog Post:**
   - Provides an endpoint for users to delete their own blog posts.
   - Implements authorization to prevent unauthorized deletions.

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Dev-Tams/blogging-platform.git
   cd blogging-platform-api-php
   ```

2. **Install Dependencies:**
   - Install required PHP dependencies using Composer.
     ```bash
     composer install
     ```

3. **Configure Database:**
   - Set up a database and update the configuration in the `.env` file.

4. **Start the PHP Built-in Server:**
   - Start the PHP built-in server.
     ```bash
     php -S localhost:8000 -t public
     ```

## Usage

1. **User Authentication:**
   - Register a new user using the `/register` endpoint.
   - Log in to obtain a JWT token using the `/login` endpoint.

2. **Blog Post Management:**
   - Use the `/posts` endpoints for creating, reading, updating, and deleting blog posts.
   - Include the JWT token in the Authorization header for authenticated requests.

## Contributors



## License

MIT License.

---

