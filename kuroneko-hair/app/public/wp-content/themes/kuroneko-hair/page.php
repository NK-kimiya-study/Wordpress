<?php get_header(); ?>
<div class="container-fluid content">
    <div class="row">
        <div class="col-lg-8">
            <main class="main">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="content-Header">
                                <h1 class="content-Title">
                                    <?php the_title(); ?>
                                </h1>
                            </header>
                            <div class="content-Body">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="content-EyeCatch">
                                        <?php the_post_thumbnail('page_eyecatch'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </main>
        </div>
        <div class="col-lg-4">
            <aside class="sidebar">
                <div class="widget_block">
                    <h2>カテゴリー</h2>
                    <ul class="wp-block-categories-list wp-block-categories">
                        <li><a href="#">お知らせ</a></li>
                        <li><a href="#">アイテム</a></li>
                        <li><a href="#">キャンペーン</a></li>
                        <li><a href="#">ブログ</a></li>
                    </ul>
                </div>
                <div class="widget_block">
                    <h2>アーカイブ</h2>
                    <ul class="wp-block-archives-list wp-block-archives">
                        <li><a href="#">2021年3月</a></li>
                        <li><a href="#">2020年11月</a></li>
                        <li><a href="#">2020年10月</a></li>
                        <li><a href="#">2020年9月</a></li>
                    </ul>
                </div>
            </aside>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>