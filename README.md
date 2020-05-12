# Start Laravel Portpolio
# 목적
1. 프레임워크를 직접 구현하여 기술 향상.

# 개발 환경
Bitnami WAMP Stack
PHP 5.7
Laravel framwork 7.1.3ㅣ
MySQL 5.6

# 개발 도구
PHPStorm

# 목표
전반적으로 라라벨을 사용하면서 썼던 기능들을 구현하고자 노력했음.
따라서 라라벨 기능을 최대한 비슷하게 구현하는 것이 목표임.

# 프로젝트 구조
app - 모델, 컨트롤러, 미들웨어 등 비즈니스 로직을 담은 객체 폴더
Controller
Middleware
bootstrap - 오토로드, 헬퍼함수 등
config - 프레임워크 전반적인 설정들(DB 정보 등)
public - 웹 루트 폴더
route - 라우팅
src - 프레임워크에서 사용되는 클래스들
Controller
DB
Injector - 의존성 주입 도구
Kernel - 프레임워크 라이프 사이클 담당
Middleware
PofolService - 라이프 사이클 요소들의 인터페이스
Request
Response
Router
Session
View

view - 뷰 파일
