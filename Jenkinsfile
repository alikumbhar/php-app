@Library("Shared") _
pipeline{
    agent {label "localmachine"}
    stages{
        stage ("Connecting... ") {
          steps {
            script {
              hello("successfully connected to Github")
            }
          }
        }
        stage("Download code from github failure here"){
            steps{
              script{
                  clone("https://github.com/alikumbhar/php-app.git", "main")
              }
            }
        }
        stage("Building an images"){
            steps{
              script {
                docker_build("myphp","18","alikumbhar")
              }
            }
        }        
        stage("Docker Renaming the application.."){
            steps{
                script{
                    docker_rename("myphp","18","alikumbhar/php-app","17")
                }
            }
        }
        stage("Pushing To Docker Hub"){
            steps{
              script {
                docker_push("php-app" ,"17","alikumbhar")
              }
            }
        }
        stage("Deploying to Docker Hub"){
            steps{
              script {
                docker_deploy()
              }
                
            }
        }        
    }
}
