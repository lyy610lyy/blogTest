<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
// 	public function testSQL(){
// 		//�ҵ� id Ϊ 2 �����´�ӡ�����
// 		$article = Article::find(2);
// 		echo $article->title;
		
// 		//���ұ���Ϊ�����Ǳ��⡱�����£�����ӡ id
// 		$article = Article::where('title', '���Ǳ���')->first();
// 		echo $article->id;
		
// 		//��ѯ���������²�ѭ����ӡ�����б���
// 		$articles = Article::all(); // �˴��õ��� $articles ��һ�����󼯺ϣ������ں������ '->toArray()' ��ɶ�ά���顣
// 		foreach ($articles as $article) {
// 			echo $article->title;
// 		}
		
// 		//���� id �� 10~20 ֮����������²���ӡ���б���
// 		$articles = Article::where('id', '>', 10)->where('id', '<', 20)->get();
// 		foreach ($articles as $article) {
// 			echo $article->title;
// 		}
		
// 		//��ѯ���������²�ѭ����ӡ�����б��⣬���� updated_at ��������
// 		$articles = Article::where('id', '>', 10)->where('id', '<', 20)->orderBy('updated_at', 'desc')->get();
// 		foreach ($articles as $article) {
// 			echo $article->title;
// 		}
// 	}
}
