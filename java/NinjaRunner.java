import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.*;


public class NinjaRunner {
	private static int score;
	private static JLabel scoreLabel;
	private static JLabel timer;
	private static Thread t;
	private static boolean finished;
	private static JFrame window;
	
	
	public static void main(String[] args) {
		finished = false;
		score = 0;
		window = new JFrame("Click Ninja!");
		window.setSize(325, 475);
		window.setLocationRelativeTo(null);
		
		JPanel panel = new JPanel();
		panel.setLayout(new FlowLayout());
		
		timer = new JLabel();
		
		scoreLabel = new JLabel("");
		
		Runnable r = new Runnable() {
			public void run() {
				int time = 30;
				while(time >= 0) {
					try {
						timer.setText(Integer.toString(time));
						time--;
						Thread.sleep(1000);
					} catch (InterruptedException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}
				JOptionPane.showMessageDialog(window, "Your score: " + score, "Game over", JOptionPane.PLAIN_MESSAGE);
			}
		};
		
		t = new Thread(r);
		JLabel ninja = new JLabel(new ImageIcon("ninja.jpeg"));
		ninja = new JLabel(new ImageIcon(getClass().getClassLoader().getResource("ninja.jpeg")));
		JButton start = new JButton("Start");
		start.addActionListener(new ActionListener() {

			@Override
			public void actionPerformed(ActionEvent e) {
				t.start();
			}
			
		});
		JButton click = new JButton("Click!");
		click.addActionListener(new ActionListener() {

			@Override
			public void actionPerformed(ActionEvent arg0) {
				if(!finished) {
					if(t.isAlive()) {
						score++;
						scoreLabel.setText(Integer.toString(score));
					}
				}
			}
		});
		
		panel.add(start);
		panel.add(timer);
		panel.add(click);
		
		panel.add(scoreLabel);
		panel.add(ninja);
		window.add(panel);
		
		window.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		window.setVisible(true);
	}
}
