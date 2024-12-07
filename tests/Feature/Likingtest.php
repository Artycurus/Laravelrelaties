<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);


class LikingTest extends  TestCase
{
    use RefreshDatabase;

  public function a_post_can_be_liked()
  {

     $this->actingAs(factory(User::class)->create());

     $post = factory(Post::class)->create();

     $post->like();

     $this->assertcount(1, $post->likes);
     $this->assertTrue($post->likes->contains('id', auth()->id()));
 }

   public function a_comment_can_be_liked()
 {

   $this->actingAs(factory(User::class)->create());

   $comment = factory(comment::class)->create();

   $comment->like();

   $this->assertcount(1, $comment->likes);

}});


