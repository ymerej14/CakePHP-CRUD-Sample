<?php
	namespace App\Controller;

	use App\Controller\AppController;

	class CrudController extends AppController{

		public function index(){

            $this->loadComponent('Paginator');
        $crud = $this->Paginator->paginate($this->Crud->find());
        $this->set(compact('crud'));
			
		
 	}

     public function view($Id=null)
    {
        $crud = $this->Crud->findById($Id)->firstOrFail();
        $this->set(compact('crud'));
    }

 		public function add()
    {
        $article = $this->Crud->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Crud->patchEntity($article, $this->request->getData());

            if ($this->Crud->save($article)) {
                $this->Flash->success(__('The Person has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the Person.'));
        }
        $this->set('article', $article);
    }

        public function edit($Id=null)
{
    $article = $this->Crud->findById($Id)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
        $this->Crud->patchEntity($article, $this->request->getData());
        if ($this->Crud->save($article)) {
            $this->Flash->success(__('The detail has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update the detail.'));
    }

    $this->set('article', $article);
}
    	 
        public function delete($Id)
{
    $this->request->allowMethod(['post', 'delete']);

    $article = $this->Crud->findById($Id)->firstOrFail();
    if ($this->Crud->delete($article)) {
        $this->Flash->success(__('{0} details has been deleted.', $article->Name));
        return $this->redirect(['action' => 'index']);
    }
}

 
}
	 

?>