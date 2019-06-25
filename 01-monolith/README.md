# De monolito a microservicios con API Gateway

## 🚀 Environment setup

1. Clone this project: `git clone https://github.com/CodelyTV/from-monolith-to-microservices-using-api-gateway from-monolith-to-microservices-using-api-gateway`
2. Move to the project folder: `cd from-monolith-to-microservices-using-api-gateway`
3. Move to the stage you want to test: `cd 00-monolith`
4. Choose the option you prefer:
  * 🐘 With local PHP server: `php -S localhost:8081 index.php`
  * 🐳 With Docker: `docker-compose up`

## 🤹‍♂️ Available endpoints

* See [`example-curls.sh`](example-curls.sh) for specific `curl` calls.
* `POST /login`: HTTP login. Valid combinations [here](utils.php).
* `GET /courses?course_id=77070`: All the information regarding the `77070` course including its path, authors, and more. Response example:
```json
{
    "title": "Principios SOLID aplicados",
    "thumbnail": "https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FLfssR9kbRqyx2LaCMxp5%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?dpr=2&fit=crop&h=232&ixlib=python-1.1.0&w=310&s=b387f292e2d8ac9cd4509923c3148971",
    "url": "https://pro.codely.tv/library/principios-solid-aplicados/77070/about/",
    "authors": [
        {
            "name": "Javier Ferrer",
            "thumbnail": "https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FCERdtqBcSWe4hKpoUeoz%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=1f5c7a1eda9180240c52901a24af43df"
        },
        {
            "name": "Rafa Gómez",
            "thumbnail": "https://pathwright.imgix.net/https%3A%2F%2Fcdn.filestackcontent.com%2Fapi%2Ffile%2FSkO7YnieTieDgWfev170%3Fsignature%3D888b9ea3eb997a4d59215bfbe2983c636df3c7da0ff8c6f85811ff74c8982e34%26policy%3DeyJjYWxsIjogWyJyZWFkIiwgInN0YXQiLCAiY29udmVydCJdLCAiZXhwaXJ5IjogNDYyMDM3NzAzMX0%253D?crop=faces&fit=crop&h=250&ixlib=python-1.1.0&w=250&s=3a11c0499b9dc9f31168e1b0285fb664"
        }
    ],
    "path": [
        {
            "title": "Qué son los principios SOLID (Huyendo de STUPID) 🦄 - ¡Disponible sin registro! 💸",
            "visible": true,
            "order": 1
        },
        {
            "title": "UML, ese gran denostado 🤕",
            "visible": true,
            "order": 2
        },
        {
            "title": "Principio de Responsabilidad Única 🕺",
            "visible": true,
            "order": 3
        }
    ]
}
```
