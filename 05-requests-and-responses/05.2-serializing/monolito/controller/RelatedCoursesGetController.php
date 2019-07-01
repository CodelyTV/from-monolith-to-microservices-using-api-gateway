<?php

declare(strict_types = 1);

final class RelatedCoursesGetController extends Controller
{
    private const RELATED_COURSES = [
        77070 => [66748, 90916],
        66748 => [90916, 77070, 87157],
        90916 => [66748, 66748],
        87157 => [77070, 66748, 90916],
    ];

    public function handle(array $request): string
    {
        if (!isset($request['course_id'])) {
            $this->notFoundResponse('You should pass the course_id to found the relates');
        }

        $courseId = $request['course_id'];

        return isset(self::RELATED_COURSES[$courseId])
            ? $this->xmlResponse(self::RELATED_COURSES[$courseId])
            : $this->notFoundResponse("The course `$courseId` doesn't exist or has no relates");
    }
}
