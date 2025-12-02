# وبلاگ لاراول - راهنمای سریع

## 🚀 شروع فوری
```bash
composer create-project laravel/laravel blog
cd blog
php artisan serve
```

## 📁 ساختار اصلی
```
app/
├── Models/
│   ├── Post.php
│   ├── Category.php
│   └── Comment.php
├── Http/
│   ├── Controllers/
│   │   ├── PostController.php
│   │   ├── CategoryController.php
│   │   └── Admin/
│   └── ...
resources/
├── views/
│   ├── posts/
│   ├── admin/
│   └── layouts/
database/
├── migrations/
└── ...
```

## 🔧 مدل‌های اصلی

### پست (Post)
```php
// ایجاد مدل و مایگریشن
php artisan make:model Post -mcr

// مدل Post
protected $fillable = ['title', 'content', 'user_id', 'category_id', 'slug'];
public function user() { return $this->belongsTo(User::class); }
public function category() { return $this->belongsTo(Category::class); }
public function comments() { return $this->hasMany(Comment::class); }
```

### دسته‌بندی (Category)
```php
php artisan make:model Category -mcr
// مدل Category
protected $fillable = ['name', 'slug'];
public function posts() { return $this->hasMany(Post::class); }
```

### نظر (Comment)
```php
php artisan make:model Comment -mcr
// مدل Comment
protected $fillable = ['content', 'post_id', 'user_id'];
public function post() { return $this->belongsTo(Post::class); }
public function user() { return $this->belongsTo(User::class); }
```

## 🗃️ مایگریشن‌های اصلی

### پست‌ها
```php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('content');
    $table->foreignId('user_id')->constrained();
    $table->foreignId('category_id')->nullable()->constrained();
    $table->timestamps();
});
```

### دسته‌بندی‌ها
```php
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();
    $table->timestamps();
});
```

### نظرات
```php
Schema::create('comments', function (Blueprint $table) {
    $table->id();
    $table->text('content');
    $table->foreignId('post_id')->constrained();
    $table->foreignId('user_id')->constrained();
    $table->timestamps();
});
```

## 🎮 کنترلرهای اصلی

### PostController
```php
php artisan make:controller PostController --resource
```

متدهای اصلی:
```php
public function index() {
    $posts = Post::with('category')->latest()->paginate(10);
    return view('posts.index', compact('posts'));
}

public function show(Post $post) {
    return view('posts.show', compact('post'));
}
```

### Admin/PostController
```php
php artisan make:controller Admin/PostController --resource --model=Post
```

متدهای اصلی:
```php
public function index() {
    $posts = Post::latest()->paginate(15);
    return view('admin.posts.index', compact('posts'));
}

public function create() {
    $categories = Category::all();
    return view('admin.posts.create', compact('categories'));
}

public function store(Request $request) {
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'category_id' => 'exists:categories,id'
    ]);
    
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'category_id' => $request->category_id,
        'user_id' => auth()->id(),
        'slug' => Str::slug($request->title)
    ]);
    
    return redirect()->route('admin.posts.index');
}
```

## 🛣️ مسیرها (Routes)
```php
// web.php
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// بخش مدیریت
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', PostController::class);
});
```

## 🎨 ویوهای اصلی

### لایه اصلی (layouts/app.blade.php)
```blade
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - وبلاگ من</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav>
        <a href="/">خانه</a>
        @auth
            <a href="/admin/posts">پنل مدیریت</a>
        @endauth
    </nav>
    
    <main>
        @yield('content')
    </main>
</body>
</html>
```

### لیست پست‌ها (posts/index.blade.php)
```blade
@extends('layouts.app')
@section('content')
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->content, 100) }}</p>
            <a href="{{ route('posts.show', $post) }}">ادامه مطلب</a>
        </article>
    @endforeach
    {{ $posts->links() }}
@endsection
```

## 🔐 احراز هویت
```bash
# نصب Breeze (برای احراز هویت)
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
```

## 📦 پکیج‌های کاربردی
```bash
# برای آپلود فایل
composer require intervention/image

# برای سئو
composer require artesaos/seotools

# برای مدیریت فایل‌ها
composer require spatie/laravel-medialibrary
```

## ⚡ نکات سریع
1. **Seeder ایجاد کنید:**
   ```bash
   php artisan make:seeder PostSeeder
   php artisan db:seed
   ```

2. **فضای ذخیره‌سازی:**
   ```bash
   php artisan storage:link
   ```

3. **کش‌گذاری:**
   ```php
   // در کنترلر
   $posts = Cache::remember('posts', 3600, function () {
       return Post::with('category')->latest()->paginate(10);
   });
   ```

4. **جستجو:**
   ```php
   // در PostController
   public function search(Request $request) {
       $posts = Post::where('title', 'like', "%{$request->q}%")
                   ->orWhere('content', 'like', "%{$request->q}%")
                   ->paginate(10);
       return view('posts.search', compact('posts'));
   }
   ```

## 🚀 دیپلوی
```bash
# برای هاستینگ
git push heroku master

# یا برای cPanel
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📞 عیب‌یابی سریع
```bash
# پاک کردن کش
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# بررسی مسیرها
php artisan route:list

# لاگ‌ها
tail -f storage/logs/laravel.log
```

این خلاصه‌ای از ساخت یک وبلاگ ساده با لاراول است. می‌توانید آن را بر اساس نیاز خود توسعه دهید.
