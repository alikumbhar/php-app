# 🐳 PHP App with Docker & MySQL

A simple **PHP application** containerized using **Docker**, built with a **two-tier architecture**:
- **PHP (Web App)**
- **MySQL (Database)**

This project demonstrates how to run a full PHP + MySQL stack locally using Docker Compose.

---

## 📘 Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Project Structure](#project-structure)
- [Usage](#usage)
- [Configuration](#configuration)
- [Stopping & Removing Containers](#stopping--removing-containers)
- [Troubleshooting](#troubleshooting)
- [License](#license)

---

## 🧩 Overview

This repository contains a PHP web application that connects to a MySQL database.  
The setup is fully containerized using **Dockerfile** and **docker-compose.yml**, making it portable and easy to run in any environment.

---

## ⚙️ Features

- 🐘 PHP application (CRUD example)
- 🛢️ MySQL database container
- 🧱 Custom **Dockerfile** for PHP app
- ⚡ `docker-compose.yml` for multi-container orchestration
- 🧩 Simple and modular project structure
- 🚀 Easy to start with just **one command**

---

## 🧰 Prerequisites

Before you begin, ensure you have the following installed:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/)
- Basic understanding of PHP & MySQL

---

## 🚀 Getting Started

Follow these steps to run the application:

```bash
# 1. Clone the repository
git clone https://github.com/alikumbhar/php-app.git

# 2. Navigate into the project directory
cd php-app

# 3. Start the containers
docker-compose up
