pipeline {
    agent none
    stages {
        stage('Back-end') {
            agent {
                docker { image 'desand/centos-php72-jq:v1' }
            }
            steps {
                sh 'composer install -vvv'
            }
        }
        stage('Front-end') {
            steps {
                echo 'hello world'
            }
        }
    }
}
