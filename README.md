# virtual-wellness-open-source

This is the official open source repository for the Virtual Wellness System at UPEI.

## Table of Contents

- [1.0 Security](#security)
- [2.0 Background](#background)
- [3.0 Install](#install)
- [4.0 Usage](#usage)
- [5.0 API](#api)
- [6.0 Maintainers](#maintainers)
- [7.0 Contributing](#contributing)
- [8.0 License](#license)

## 1.0 Security

## 2.0 Background

The Virtual Wellness System at its core is a tool for researchers to create, publish, collect, and display researcher study results. It will have additional functionality in a forum that will give participants and researchers a communication tool within the group. There will also be a chat widget for quick communication between people operating the website. Additionally, we will add a tool to allow for tracking and updating of wellness goals, and a tool for uploading an applications data that is related to wellness information. 

The Virtual Wellness overall project scope is shown below in graphical form. There are two main components research and healthcare. Researchers can login, create questionnaires, edit their profiles, upload application data, and display reporting. There are provided a number of Webulators that act as research tools for performing statistical analysis included. There are two static pages, about us and contact detailing the provided services. There is a simple main page allowing to login for participants, and researchers. Authentication is handled by auth0, a third-party provider, to successfully add properly handled user security, and password encryption. A forum will exist and be from Flarum. There will be a chat widget on the site that is from Converse.js.
Out of scope items include SSL encryption (it will be provided), the server installed PHP language, Apache, a Linux or Windows operating system, and the database will be installed on the production environment. A Mysql database is preferred.

## 3.0 Install

Follow the below installation steps to start the site.

### 3.1 Step One
Install git cli locally on your development computer

On Mac:

A Mac OS binary installer is available at: [Mac OS Binary Installer](https://git-scm.com/download/mac)

On Windows:
Likely the easiest way to install via Windows is by installing Github Desktop, a GUI solution for git that includes git cli, it is available here: 
[Github Desktop](https://desktop.github.com/)

### 3.2 Step Two
You should create a fork of the repo, clone the repo down, and then add push to your fork. At the end
you PR into the main repository.

Next go into the desired directory you wish to install git into on your machine. Then type:

```
git clone https://github.com/CodeItQuick/VWS-Open-Source.git
```

### 3.3 Step Three
Next install docker.

On Mac:
Docker desktop for mac is available on [Get Docker Desktop for Mac on Dockerhub](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)

On Windows:
Docker desktop for Windows is available on [Get Docker Desktop for Windows on Dockerhub](https://hub.docker.com/editions/community/docker-ce-desktop-windows/)

### 3.4 Step Four

Install the environment files that hold passwords. Working env files with default passwords are given for development
environments in '.env-example' files in two directories. Copy or rename these env files to correctly load the environment folder (that holds passwords).

```
cp ./src/.env-example ./src/.env
```

Some of the secrets need to be updated. Specifically the Auth0 keys need to be requested from Evan to have them working, I cannot include them in an open source repository in the env-example file.

### 3.5 Step Five

Run the docker compose up and everything should work.

```
docker-compose up -d
```

### 3.5 Step Six - Install Flarum

Run the following commands to create the database for flarum

```
docker-compose up -d
```

navigate to 0.0.0.0 in your browser. Fill out the following information:

```
Forum Title: Virtual Wellness
mysql Host: flarummysql
MySQL Database: flarum3
MySQL Username: root
MySQL Password: secret
Table Prefix: (leave blank)
Admin Email: youremail@email.com
Admin Username: admin
Admin Password: secretsecret
```

Wait for the "Please Wait..." to be complete.
Spin down and spin up the docker-container so that the permissions can correctly populate (it's erroring out now as the permissions on the cache folder are incorrect TODO: need to give less global permissions before deploy)
```
docker-compose down
docker-compose up
```

### 3.6 Other Useful Commands & Information
To check what ports these two services are running on the following console command will run them:
```
docker-compose ps
```

Visit localhost to see the current website!

At any time if you wish to take down the website this is done with the command:

```
docker-compose down
```

## 4.0 Usage

To run the server through a simple php command, assuming all extensions are installed, 

```
docker-compose up 
```

Then visit localhost:3001 in the browser to see the main webpage. Visit localhost to see the forum.

## 5.0 API

## 6.0 Maintainers

[@CodeItQuick](https://github.com/CodeItQuick)

## 7.0 Contributing

See [the contributing file](contributing.md)!

PRs accepted.

Small note: If editing the README, please conform to the [standard-readme](https://github.com/RichardLitt/standard-readme) specification.

## 8.0 License

MIT © 2020 CodeItQuick
