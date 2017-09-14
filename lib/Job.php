<?php
    class Job{

        private $db;

        public function __construct(){
            $this->db = new Database;
        }//end public function __construct()

        //Get All Jobs
        public function getAllJobs(){
            $this->db->query("SELECT
                                jobs.*
                             ,  categories.name AS CNAME
                             FROM
                                jobs INNER JOIN categories ON
                                    jobs.CATEGORY_ID = categories.id
                            ORDER BY
                                jobs.POST_DATE desc");

            //Assing Result Set
            $results = $this->db->resultSet();

            return $results;

        }//end public function getAllJobs()

        //Get Jobs By Category
        public function getJobsByCategory($category){

             $this->db->query("SELECT
                                jobs.*
                             ,  categories.name AS CNAME
                             FROM
                                jobs INNER JOIN categories ON
                                    jobs.CATEGORY_ID = categories.id
                             WHERE
                                jobs.category_id = $category
                             ORDER BY
                                jobs.POST_DATE desc");

            //Assing Result Set
            $results = $this->db->resultSet();

            return $results;

        }//end public function getJobsByCategory($category)

        //Get Categories
        public function getAllCategories(){
            $this->db->query("SELECT * FROM categories");

            //Assing Result Set
            $results = $this->db->resultSet();

            return $results;

        }//end public function getAllCategories()

        //Get a category
        public function getCategory($category_id){
            $this->db->query("SELECT *
                              FROM categories
                              WHERE id = :category_id");

            $this->db->bind(':category_id', $category_id);

            //Assing Row
            $row = $this->db->single();

            return $row;

        }//end public function getCategory($category)


        //get job
        public function getJob($job_id){

            $this->db->query("SELECT *
                              FROM jobs
                              WHERE id = :job_id");

            $this->db->bind(':job_id', $job_id);

            //Assing Row
            $row = $this->db->single();

            return $row;

        }//end public function getJob($job_id)


        // Create Job
		public function create($data){

			//Insert Query
			$this->db->query("INSERT INTO jobs
                                (   category_id
                                ,   job_title
                                ,   company
                                ,   description
                                ,   location
                                ,   salary
                                ,   contact_user
                                ,   contact_email)
			                  VALUES
                                (   :category_id
                                ,   :job_title
                                ,   :company
                                ,   :description
                                ,   :location
                                ,   :salary
                                ,   :contact_user
                                ,   :contact_email)");

			// Bind Data
			$this->db->bind(':category_id', $data['category_id']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			
            //Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}//end if($this->db->execute())
            
		}//end public function create($data)


        //Delete Jobs
        public function delete($id){
            
            $this->db->query("DELETE FROM jobs where id = $id ");

            //Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}//end if($this->db->execute())

        }//end public function delete($id)


        // Update Job
		public function update($id, $data){

			//update Query
			$this->db->query("UPDATE
                                jobs
				              SET 
				                category_id   = :category_id,
				                job_title     = :job_title,
				                company       = :company,
				                description   = :description,
				                location      = :location,
				                salary        = :salary,
				                contact_user  = :contact_user,
				                contact_email = :contact_email 
				              WHERE
                                id = $id");
			// Bind Data
			$this->db->bind(':category_id', $data['category_id']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			
            //Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}//end if($this->db->execute())
            
		}//end public function update($id, $data)

    }//end class Job

?>