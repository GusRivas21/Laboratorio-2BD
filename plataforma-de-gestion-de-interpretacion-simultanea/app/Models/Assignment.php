<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Interpreter;
use App\Models\Event;

class Assignment extends Model
{
    protected $fillable = ['interpreter_id', 'event_id'];

    public function assignInterpreterToEvent($interpreterId, $eventId)
    {
        $interpreter = Interpreter::find($interpreterId);
        $event = Event::find($eventId);

        if (!$interpreter || !$event) {
            return false;
        }

        $experienceRequired = $event->theme;
        $interpreterExperience = $interpreter->experience;

        if ($interpreterExperience === 'Advanced' || $this->checkExperienceMatch($interpreterExperience, $experienceRequired)) {
            $this->create([
                'interpreter_id' => $interpreterId,
                'event_id' => $eventId,
            ]);
            return true;
        }

        return false;
    }

    public function checkExperienceMatch($interpreterExperience, $eventTheme)
    {
        $experienceKeywords = [
            'Beginner' => ['Basic', 'Introduction', 'Fundamentals'],
            'Intermediate' => ['Intermediate', 'Advanced'],
            'Advanced' => ['Expert', 'Specialized', 'Professional']
        ];

        return in_array($eventTheme, $experienceKeywords[$interpreterExperience] ?? []);
    }
}