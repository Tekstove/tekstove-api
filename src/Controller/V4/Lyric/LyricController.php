<?php

namespace App\Controller\V4\Lyric;

use App\Controller\V4\TekstoveController;
use App\Entity\Lyric\Lyric;
use Symfony\Component\HttpFoundation\Response;

class LyricController extends TekstoveController
{
    public function indexAction(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Lyric::class);
        return $this->handleRepository($repo);
    }

    public function getAction(string $id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Lyric::class);
        $entity = $repo->findOneBy(['id' => $id]);

        if ($entity === null) {
            // @TODO handle lyric redirect
            throw $this->createNotFoundException('Lyric not found');
        }

        // @TODO add view event

        return $this->handleEntity($entity);
    }
}
