# SpeechToShell

SpeechToShell uses a speech to text convertor to convert your speech to Linux commands.Then it send the command to the server and execute them. Print the output back on the client

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes
### Prerequisites

[LAMP Stack](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04)

https enabled server (You can use digital ocean server which is available as free for students via [Github Student Pack](https://education.github.com/pack)
)



### Installing



Clone this github repo to your server document root

```
git clone https://github.com/aswinavofficial/speechtoshell.git&cd speechtoshell
```

Give executable permission to shell.php and change ownership of the file to www-data

```
chmod 777 shell.php
```

```
chown www-data:www-data shell.php
```




## Built With

* [Web Speech API](https://developer.mozilla.org/en-US/docs/Web/API/Web_Speech_API) - The speech to text API used 


## Authors

* **A V Aswin** 


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments
 
* [Mahalingam P R](https://www.linkedin.com/in/prmahalingam) 
