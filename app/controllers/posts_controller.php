<?php
    class PostsController extends AppController {
        
        var $name = 'Posts';

        public function index () {

            $this->set('posts', $this->Post->find('all'));
        }

        public function view($id = null) {

            $this->set('post', $this->Post->read(null, $id));
        }

        public function add() {
            
            if (!empty($this->data)) {
                
                if($this->Post->save($this->data)) {

                    $this->Session->setFlash('The post was succsessfully added');
                    $this->redirect(array('action' => 'index'));
                }

                $this->Session->setFlash('The post was not saved, pleasetry again');

            }
        }
        public function edit($id = null) {

            if (empty($this->data)) {
                
                $this->data = $this->Post->read(NULL, $id);

            }   else    {

                if ($this->Post->save($this->data)) {
                    
                    $this->Session->setFlash('The post has updated');
                    $this->redirect(array('action' => 'index', $id));
                }   else    {
                    $this->Session->setFlash('The post was not saved');
                }
            }
        }

    public function delete($id = null) {
        
        $this->Post->delete($id);
        $this->Session->setFlash('The posta has been deeted');
        $this->redirect(array('action' => 'index'));
    }

        public function hello_world() {
             
        }
    }
    
?>
