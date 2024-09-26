<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SchoolNoticeController;

use App\Http\Controllers\ExamController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('about');


//Teacher
Route::get('/teacher',[TeacherController::class,'index'])->name('teacher.index');
Route::get('/teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('/teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('/teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::post('/teacher/update/{id}',[TeacherController::class,'update'])->name('teacher.update');
Route::get('/teacher/destroy/{id}',[TeacherController::class,'destroy'])->name('teacher.destroy');


//Student
Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/destroy/{id}',[StudentController::class,'destroy'])->name('student.destroy');

// SchoolClass
Route::get('/schoolclass',[SchoolClassController::class,'index'])->name('schoolclass.index');
Route::get('/schoolclass/create',[SchoolClassController::class,'create'])->name('schoolclass.create');
Route::post('/schoolclass/store',[SchoolClassController::class,'store'])->name('schoolclass.store');
Route::get('/schoolclass/edit/{id}',[SchoolClassController::class,'edit'])->name('schoolclass.edit');
Route::post('/schoolclass/update/{id}',[SchoolClassController::class,'update'])->name('schoolclass.update');
Route::get('/schoolclass/destroy/{id}',[SchoolClassController::class,'destroy'])->name('schoolclass.destroy');


//Exam Typ
Route::get('/exam',[ExamController::class,'index'])->name('exam.index');
Route::get('/exam/create',[ExamController::class,'create'])->name('exam.create');
Route::post('/exam/store',[ExamController::class,'store'])->name('exam.store');
Route::get('/exam/edit/{id}',[ExamController::class,'edit'])->name('exam.edit');
Route::post('/exam/update/{id}',[ExamController::class,'update'])->name('exam.update');
Route::get('/exam/destroy/{id}',[ExamController::class,'destroy'])->name('exam.destroy');

//Subject
Route::get('/subject',[SubjectController::class,'index'])->name('subject.index');
Route::get('/subject/create',[SubjectController::class,'create'])->name('subject.create');
Route::post('/subject/store',[SubjectController::class,'store'])->name('subject.store');
Route::get('/subject/edit/{id}',[SubjectController::class,'edit'])->name('subject.edit');
Route::post('/subject/update/{id}',[SubjectController::class,'update'])->name('subject.update');
Route::get('/subject/destroy/{id}',[SubjectController::class,'destroy'])->name('subject.destroy');

//schoolnotice
Route::get('/schoolnotice',[SchoolNoticeController::class,'index'])->name('schoolnotice.index');
Route::get('/schoolnotice/create',[SchoolNoticeController::class,'create'])->name('schoolnotice.create');
Route::post('/schoolnotice/store',[SchoolNoticeController::class,'store'])->name('schoolnotice.store');
Route::get('/schoolnotice/edit/{id}',[SchoolNoticeController::class,'edit'])->name('schoolnotice.edit');
Route::post('/schoolnotice/update/{id}',[SchoolNoticeController::class,'update'])->name('schoolnotice.update');
Route::get('/schoolnotice/destroy/{id}',[SchoolNoticeController::class,'destroy'])->name('schoolnotice.destroy');




























Route::get('/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
