<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class CoverLetterController extends Controller
{
    public function generate(Request $request)
    {
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));

        $prompt = "CANDIDATE DETAILS\nName: " . $request->name . "\nEmail: " . $request->email . "\nPhone Number: " . $request->phone;
        $prompt .= "\n\nnAPPLIED COMPANY DETAILS\nHiring Manager\'s Name: " . $request->hiringManager . "\nName: " . $request->companyName;
        $prompt .= "\n\nAPPLIED POSITION DETAILS\nPosition Name: " . $request->positionName . "\nCandidate No of Experience: " . $request->candidateExperience . "\nCandidate Skills: " . $request->candidateSkills . "\nCandidate Recent Achievements: " . $request->candidateAchievements . "\nThings a candidate can perform based on the job description: " . $request->candidatePerformance;
        $prompt .= "\n\nWrite a unique application cover letter, it must point out the candidate\'s strengths based on the job description:\n\nDear " . $request->hiringManager . ",\n\nI am";

        $complete = $open_ai->complete([
            'engine' => 'davinci',
            'prompt' => $prompt,
            'temperature' => 0.4,
            'max_tokens' => 500,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
            'stop' => ['Sincerely,']
        ]);

        $response = json_decode($complete);
        return $response->choices[0]->text;
    }
}
