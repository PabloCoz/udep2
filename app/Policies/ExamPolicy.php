<?php

namespace App\Policies;

use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;
use App\Models\Response;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExamPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function enrolled(User $user, Exam $exam)
    {
        return $exam->students->contains($user->id);
    }

    public function dictated(?User $user, Response $response, Question $question, Option $option)
    {
        foreach ($response->question_id as $ques) {
            if ($ques == $question) {
                return false;
            }
        }

        foreach ($response->option_id as $opt) {
            if ($opt = $option) {
                return false;
            }
        }
    }
}
