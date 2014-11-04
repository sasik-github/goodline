<?php

class Home extends Controller
{

    private $hasNext = true;

    private $hasPrev = false;

    private $commentsOnPage = 3;

    public function index($sorting = '')
    {
        $this->newses($sorting);
    }

    public function newses($sorting = '')
    {
        $news = $this->model('News');
        $newses = $news::getAll();

        if (!empty($sorting))
        {
            $sortingByDate = function($obj1, $obj2)
            {
                if (strtotime($obj1->date) == strtotime($obj2->date))
                {
                    return 0;
                } else 
                {
                    return (strtotime($obj1->date) < strtotime($obj2->date)) ? -1 : 1; 
                }
            };

            if ($sorting === "asc")
            {
                uasort($newses, $sortingByDate);
            } else
            {
                uksort($newses, $sortingByDate);
            }
        }
        $this->view('index', ['newses' => $newses]);
    }

    public function news($id, $page = 0)
    {
        $news = $this->model('News');
        $news = $news::get($id);

        $comment = $this->model('Comments');
        $comment = $comment::getAll($news->id);
        $comment = $this->commentsPagination(
                $comment,
                $page
            );

        $picture = $this->model('Pictures');
        $picture = $picture::get($news->id);

        print_r($picture);

        $this->view('news', ['news' => $news,
                            'comments' => $comment,
                            'picture' => $picture->path]
        );
    }



    protected function commentsPagination($array, $curr = 0)
    {
        $newArray = array();
        $count = count($array);
        $startCondition = $curr * $this->commentsOnPage;
        $this->hasNext = true;
        if ($count > 0)
        {
            if (($startCondition + $this->commentsOnPage) >= $count)
            {
                $this->hasNext = false;
                $this->hasPrev = true;
                $startCondition = $count - $this->commentsOnPage;
            }
            if ($curr == 0)
            {
                $this->hasPrev = false;
            } elseif ($curr > 0)
            {
                $this->hasPrev = true;
            }

            $endCondition = $startCondition + $this->commentsOnPage;

            for ($i = $startCondition; ($i < $count) && ($i < $endCondition); $i++)
            { 
                $newArray[] = $array[$i];
            }
        }
        $this->smarty->assign("hasNext", $this->hasNext);
        $this->smarty->assign("hasPrev", $this->hasPrev);
        $this->smarty->assign("curr", $curr);
        return $newArray;
    }
}
