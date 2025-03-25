@Library('shared') _
pipeline{
    agent {label "agent_ali"}
    stages{
        stage ("Connecting... ") {
          steps {
            script {
              hello("successfully connected to Github")
            }
          }
        }
        stage("Download code from github"){
            steps{
              sh "rm -r *"
              script {
                clone("https://github.com/alikumbhar/php-app.git" ,"main")
              }
            }
        }
        stage("Docker Renaming the application.."){
            steps{
                script{
                    docker_rename("php","7.4-apache","alikumbhar/php-app","10")
                }
            }
        }
        stage("Pushing To Docker Hub"){
            steps{
              script {
                docker_push("php-app" ,"10","alikumbhar")
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
