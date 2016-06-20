<?php

class AdminController {
    public function actionOpenPage($number) {
        switch($number) {
            case 'admin-cathedra':
                require_once(ROOT. '/views/view/admin-cathedra.html');
                break;
            case 'admin-facultative-list':
                require_once(ROOT. '/views/view/admin-facultative-list.html');
                break;
            case 'admin-facultative-news':
                require_once(ROOT. '/views/view/admin-facultative-news.html');
                break;
            case 'admin-facultative-single-news':
                require_once(ROOT. '/views/view/admin-facultative-single-news.html');
                break;
            case 'admin-library-grid':
                require_once(ROOT. '/views/view/admin-library-grid.html');
                break;
            case 'admin-library-rename-single':
                require_once(ROOT. '/views/view/admin-library-rename-single.html');
                break;
            case 'admin-library-single':
                require_once(ROOT. '/views/view/admin-library-single.html');
                break;
            case 'admin-media-gallery':
                require_once(ROOT. '/views/view/admin-media-gallery.html');
                break;
            case 'admin-news-list':
                require_once(ROOT. '/views/view/admin-news-list.html');
                break;
            case 'admin-pages-description':
                require_once(ROOT. '/views/view/admin-pages-description.html');
                break;
            case 'admin-rename-single-facultative-news':
                require_once(ROOT. '/views/view/admin-rename-single-facultative-news.html');
                break;
            case 'admin-rename-single-news':
                require_once(ROOT. '/views/view/admin-rename-single-news.html');
                break;
            case 'admin-schedule-page':
                require_once(ROOT. '/views/view/admin-schedule-page.html');
                break;
            case 'admin-single-news':
                require_once(ROOT. '/views/view/admin-single-news.html');
                break;
            case 'admin-single-task-gapword':
                require_once(ROOT. '/views/view/admin-single-task-gapword.html');
                break;
            case 'admin-single-task-puzzle':
                require_once(ROOT. '/views/view/admin-single-task-puzzle.html');
                break;
            case 'admin-single-task-test':
                require_once(ROOT. '/views/view/admin-single-task-test.html');
                break;
            case 'admin-task-folders-grid':
                require_once(ROOT. '/views/view/admin-task-folders-grid.html');
                break;
            case 'admin-task-grid':
                require_once(ROOT. '/views/view/admin-task-grid.html');
                break;
            case 'main-admin':
                require_once(ROOT. '/views/view/main-admin.html');
                break;
            case 'superadmin':
                require_once(ROOT. '/views/view/superadmin.html');
                break;
            case 'superadmin-insert-teacher':
                require_once(ROOT. '/views/view/superadmin-insert-teacher.html');
                break;
            case 'superadmin-teacher':
                require_once(ROOT. '/views/view/superadmin-teacher.html');
                break;
        }
    }
}