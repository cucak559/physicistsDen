<p>
      <span>{{ $activity->subject->created_at->diffForHumans() }},</span>
      <i>{{$user->name}}</i>
      <b>liked</b>
      this.

</p>

<div class="row mb-4">
      <div class="col-md-12">

            <div class="card article-card mb-4">
                  <div class="row">
                        <div class="col-auto">
                              <img src="//placehold.it/200" class="img-fluid" alt="">
                        </div>

                        <div class="col">
                              <div class="card-block px-2">
                                    <h4 class="card-title article-topic">
                                          <a href="/{{$activity->subject->likeable->topic->id}}/show">
                                                {{ $activity->subject->likeable->topic->title }}
                                          </a>
                                    </h4>

                                    <h2 class="card-title article-name">
                                          <a class="article" href="/articles/show/{{ $activity->subject->likeable->id }}">
                                                {{ $activity->subject->likeable->title }}
                                          </a>
                                    </h2>
                                    <p class="card-text article-owner"><em class="owner-by mr-1">By</em> <span class="owner-name">{{ $activity->subject->likeable->user->name }}</span></p>
                                    <p class="card-text article-description">
                                         {{ $activity->subject->likeable->description }}
                                    </p>

                                     <p>
                                         Tags:
                                         @foreach ($activity->subject->likeable->tags as $tag)
                                                <a href="/articles/bytag/{{ $tag->tag_id }}"><span>{{ $tag->name}}</span></a>
                                          @endforeach
                                     </p>

                              </div>
                        </div>
                  </div>
            </div>

      </div>
</div>




