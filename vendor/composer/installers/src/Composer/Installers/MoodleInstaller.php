<?php
namespace Composer\Installers;

class MoodleInstaller extends BaseInstaller
{
    protected $locations = array(
        'mod'                => 'mod/{$name}/',
        'admin_report'       => 'admin/report/{$name}/',
<<<<<<< HEAD
        'atto'               => 'lib/editor/atto/plugins/{$name}/',
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'tool'               => 'admin/tool/{$name}/',
        'assignment'         => 'mod/assignment/type/{$name}/',
        'assignsubmission'   => 'mod/assign/submission/{$name}/',
        'assignfeedback'     => 'mod/assign/feedback/{$name}/',
        'auth'               => 'auth/{$name}/',
        'availability'       => 'availability/condition/{$name}/',
        'block'              => 'blocks/{$name}/',
<<<<<<< HEAD
        'booktool'           => 'mod/book/tool/{$name}/',
        'cachestore'         => 'cache/stores/{$name}/',
        'cachelock'          => 'cache/locks/{$name}/',
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'calendartype'       => 'calendar/type/{$name}/',
        'format'             => 'course/format/{$name}/',
        'coursereport'       => 'course/report/{$name}/',
        'datafield'          => 'mod/data/field/{$name}/',
        'datapreset'         => 'mod/data/preset/{$name}/',
        'editor'             => 'lib/editor/{$name}/',
        'enrol'              => 'enrol/{$name}/',
        'filter'             => 'filter/{$name}/',
        'gradeexport'        => 'grade/export/{$name}/',
        'gradeimport'        => 'grade/import/{$name}/',
        'gradereport'        => 'grade/report/{$name}/',
        'gradingform'        => 'grade/grading/form/{$name}/',
        'local'              => 'local/{$name}/',
<<<<<<< HEAD
        'logstore'           => 'admin/tool/log/store/{$name}/',
        'ltisource'          => 'mod/lti/source/{$name}/',
        'ltiservice'         => 'mod/lti/service/{$name}/',
        'message'            => 'message/output/{$name}/',
        'mnetservice'        => 'mnet/service/{$name}/',
=======
        'message'            => 'message/output/{$name}/',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'plagiarism'         => 'plagiarism/{$name}/',
        'portfolio'          => 'portfolio/{$name}/',
        'qbehaviour'         => 'question/behaviour/{$name}/',
        'qformat'            => 'question/format/{$name}/',
        'qtype'              => 'question/type/{$name}/',
        'quizaccess'         => 'mod/quiz/accessrule/{$name}/',
        'quiz'               => 'mod/quiz/report/{$name}/',
        'report'             => 'report/{$name}/',
        'repository'         => 'repository/{$name}/',
        'scormreport'        => 'mod/scorm/report/{$name}/',
        'theme'              => 'theme/{$name}/',
<<<<<<< HEAD
        'tinymce'            => 'lib/editor/tinymce/plugins/{$name}/',
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'profilefield'       => 'user/profile/field/{$name}/',
        'webservice'         => 'webservice/{$name}/',
        'workshopallocation' => 'mod/workshop/allocation/{$name}/',
        'workshopeval'       => 'mod/workshop/eval/{$name}/',
        'workshopform'       => 'mod/workshop/form/{$name}/'
    );
}
