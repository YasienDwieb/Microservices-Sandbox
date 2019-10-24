# Microservices-Sandbox

This is an extensive work about every possible stack , mainly with docker, that aims to get as closer as possible to isolated perfect `development`, `deployment` and `monitoring` environments

### To get started
- Refer to the tags and [releases](https://github.com/YasienDwieb/Microservices-Sandbox/releases) as each of which, represents a working stack
> Tags are updated to implement updates, cover fixes and best practises
 
## How to use this project
- PHP was the base development language
- Many E-Commerce solutions has been tested including: Magento, Opencart and Wordpress (That can operate as Woocommerce)
- Web servers implemented: Apache, Nginx and Swoole (which is working from within PHP container)
- Databases: Mysql and MariaDB are implmented and can be used exchangeable of each other.
- ELK (ElasticSearch - LogStash - Kibana) is implemented and would be used for further log analysis
- XDebug is implemented and configured with VSCode so you can debug your PHP code at runtime
- Editing code would be reflected immediately

### Folder structure
- `PHP`: Holds PHP container configuration and Dockerfile used for building the images
- `Server`: Holds available servers such as Nginx and Apache with their configurations and Dockerfiles
- `ELK`: Holds ELK stack configs and docker-compose file
- `Code`: Holds your source code that would be mounted inside the container runtime and can be edited while sever is running
- `.vscode`: Holds debug configuration that allows you to debug your code using VSCode
