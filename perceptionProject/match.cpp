#include <iostream>
#include "opencv2/imgproc.hpp"
#include "opencv2/highgui.hpp"
#include "opencv2/xfeatures2d/nonfree.hpp"


using namespace std;
using namespace cv;
using namespace cv::xfeatures2d;

int main( int argc, char** argv )
{
  Mat colim[2];
  vector<KeyPoint> kp[2];
  Mat descr[2];

  for (int i= 0; i < 2; i++)
    {
      Mat src;

      colim[i]= imread(argv[i+1]);
      cvtColor(colim[i], src, COLOR_BGR2GRAY);

      Ptr<SIFT> s = SIFT::create();
      
      s->detectAndCompute(src, Mat(), kp[i], descr[i]);
      cout << kp[i].size() << " points d'intérêt trouvés dans l'image " << argv[i+1] << "\n";      
    }

  Ptr<BFMatcher> matcher= BFMatcher::create(NORM_L2, true);
  vector<DMatch> matches;
  
  matcher->match(descr[0], descr[1], matches);
  
  Mat res;
  
  drawMatches(colim[0], kp[0], colim[1], kp[1], matches, res);

  namedWindow("resultat");
  imshow("resultat", res);
  
  waitKey(0);
  return 0;
}


