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
                //imagename, imagetag, username
                docker_build("myphp","18","alikumbhar")
              }
            }
        }        
        stage("Docker Renaming the application.."){
            steps{
                script{
                    //old_image_name,old_tag,new_image_name,new_tag
                    docker_rename("alikumbhar/myphp","18","alikumbhar/php-app","17")
                }
            }
        }
        stage("Pushing Image To Docker Hub"){
            steps{
              script {
                // put here repositoryName , tag, dockerCredID, username
                docker_push("php-app" ,"17",  "dockerHubCred", "alikumbhar")
              }
            }
        }
        stage("Deploying to Docker Application"){
            steps{
              script {
                docker_deploy()
              }
                
            }
        }        
    }
}
